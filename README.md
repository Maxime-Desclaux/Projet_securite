# Projet SPA - Animaux

Ce README rassemble toutes les commandes et étapes nécessaires pour pouvoir cloner le projet, l'installer et le lancer localement.

---

## Prérequis

- PHP 8.2 (vérifier la version compatibilité avec le projet)
- Composer
- Node.js (16+) et npm
- Base de données (MySQL)
- Git

---

## 1) Cloner le dépôt

```bash
git clone <URL_DU_DEPOT>
cd <nom_du_dossier>
```

Remplacez `<URL_DU_DEPOT>` par l'URL du dépôt Git et `<nom_du_dossier>` par le répertoire créé.

---

## 2) Installer les dépendances backend

```bash
composer install
```

Si vous rencontrez des problèmes de mémoire lors de `composer install`, réessayez avec plus de mémoire :

```bash
COMPOSER_MEMORY_LIMIT=-1 composer install
```

---

## 3) Installer les dépendances frontend

```bash
npm install
# ou si vous utilisez pnpm
# pnpm install
```

---

## 4) Configuration de l'environnement

Copiez le fichier d'exemple `.env.example` vers `.env` :

```bash
cp .env.example .env
```

Puis éditez `.env` pour configurer la connexion à la base de données :

- Pour MySQL/MariaDB ou PostgreSQL :
    - DB_CONNECTION=mysql
    - DB_HOST=127.0.0.1
    - DB_PORT=3306
    - DB_DATABASE=nom_de_la_base
    - DB_USERNAME=utilisateur
    - DB_PASSWORD=mot_de_passe

- Un fichier .env contenant le mot de passe et le domaine admin vous serez envoyer pour créer un compte admin

Générez la clé d'application Laravel :

```bash
php artisan key:generate
```

---

## 5) Migrer la base et lancer les seeders

Pour créer les tables et insérer les données de test :

```bash
php artisan migrate --seed
```

Si vous souhaitez repartir d'une base propre :

```bash
php artisan migrate:fresh --seed
```

Créer la table Animals

```bash
CREATE TABLE `animals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `type` varchar(191) NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
```

Une exportation de la bdd vous serez envoyer pour avoir les mêmes données

- ***

## 6) Lancer l'application en développement

Ce projet utilise Vite pour le frontend et Laravel pour le backend. Ouvrez deux terminaux ou lancez les deux commandes en parallèle.

Terminal :

```bash
composer run dev
```

Ensuite ouvrez dans le navigateur :

- http://127.0.0.1:8000

---
## Création de compte Admin: 
Le domaine de l’email admin et le mot de passe admin sont définis dans le fichier .env .Lors de l’inscription, si l’adresse e-mail correspond à ce domaine, un champ «admin password » s’affiche et l'admin doit entrer le code identique à celui du .env(MDP)  afin de créer un compte admin.
Vous pouvez choisir votre mot de passe de connexion (12 caractères minimum, incluant une minuscule, une majuscule et un caractère spécial). Cependant, admin password doit être le même que celui défini dans le fichier .env afin de créer un compte admin.

## 7) Construction pour la production

```bash
npm run build
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

Déployer les fichiers générés dans `public/build` selon votre hébergeur.

---

## 8) Tests

Lancer les tests PHPUnit :

```bash
# avec phpunit installé via composer
./vendor/bin/phpunit
# ou via artisan
php artisan test
```

---

## 9) Points de dépannage courants

- Permissions : si Laravel ne peut pas écrire, assurez-vous que `storage/` et `bootstrap/cache` sont accessibles :

```bash
chmod -R 775 storage bootstrap/cache
chown -R $USER:www-data storage bootstrap/cache
```

- Erreurs lors de `npm install` : supprimer `node_modules` et `package-lock.json` puis réinstaller :

```bash
rm -rf node_modules package-lock.json
npm install
```

- Si les assets Vite ne se chargent pas en dev : vérifiez que `npm run dev` tourne sans erreur et que Laravel peut atteindre le serveur Vite (ports ouverts).

- Erreurs lors des migrations : vérifiez que les variables DB dans `.env` sont correctes et que la base est accessible.

---

## 10) Remarques sur l'API et adaptations possibles

- Si votre base de données utilise une colonne nommée `species` au lieu de `type`, adaptez le paramètre envoyé par le frontend (`?species=...`) et le contrôleur (`$request->query('species')`).
- Le filtrage dans le contrôleur peut être rendu plus flexible (recherche insensible à la casse, mapping des synonymes, pagination, etc.).

---

## 11) Commandes utiles récapitulatives

```bash
# installer deps backend
composer install

# installer deps frontend
npm install

# config
cp .env.example .env
php artisan key:generate

# migrer et seed
php artisan migrate --seed

# démarrer
php artisan serve
npm run dev

# tests
php artisan test

# build prod
npm run build
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

---
