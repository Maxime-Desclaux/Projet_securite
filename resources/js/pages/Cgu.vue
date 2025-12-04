<template>
  <div class="cgu-container">
    <!-- Navigation Header MÊME FORMAT QUE PRIVACY.VUE -->
    <div class="navigation-header">
      <button @click="handleBack" class="back-button">
        <svg class="back-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor">
          <path d="M19 12H5M12 19l-7-7 7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <span class="back-text">Retour</span>
      </button>
      <div class="header-badge">
        <span class="badge-text">Conditions Générales d'Utilisation</span>
        <span class="badge-date">{{ currentDate }}</span>
      </div>
    </div>

    <div class="cgu-hero">
      <h1 class="cgu-title">Conditions Générales d'Utilisation</h1>
      <p class="cgu-subtitle">
        Les règles d'utilisation du site SPA Animaux
      </p>
    </div>

    <div class="content">
      <div class="acceptance-box">
        <h2>📋 Acceptation des CGU</h2>
        <p>
          En créant un compte sur SPA Animaux, vous reconnaissez avoir lu, 
          compris et accepté sans réserve les présentes Conditions Générales d'Utilisation.
        </p>
        <p class="important-note">
          <strong>Important :</strong> Ces CGU peuvent être modifiées à tout moment. 
          Les utilisateurs seront informés des changements majeurs.
        </p>
      </div>

      <section class="section">
        <h2>1. Définitions</h2>
        <div class="definitions">
          <div class="definition">
            <h3>"Le Site"</h3>
            <p>Désigne la plateforme SPA Animaux accessible à l'adresse https://spa-animaux.fr</p>
          </div>
          <div class="definition">
            <h3>"L'Utilisateur"</h3>
            <p>Toute personne physique ou morale utilisant le Site</p>
          </div>
          <div class="definition">
            <h3>"Le Compte"</h3>
            <p>L'espace personnel créé par l'Utilisateur pour accéder aux services</p>
          </div>
          <div class="definition">
            <h3>"Les Services"</h3>
            <p>L'ensemble des fonctionnalités offertes par le Site</p>
          </div>
        </div>
      </section>

      <section class="section">
        <h2>2. Objet du Site</h2>
        <div class="purpose-box">
          <p>
            <strong>SPA Animaux</strong> est une plateforme pédagogique permettant :
          </p>
          <ul>
            <li>La gestion d'une base d'animaux de refuge</li>
            <li>L'inscription et l'authentification d'utilisateurs</li>
            <li>La visualisation et la recherche d'animaux disponibles à l'adoption</li>
            <li>La mise en favoris d'animaux</li>
          </ul>
          <p class="disclaimer">
            <em>Ce site est un projet éducatif et ne propose pas d'adoptions réelles.</em>
          </p>
        </div>
      </section>

      <section class="section">
        <h2>3. Création de Compte</h2>
        <div class="account-rules">
          <h3>3.1 Conditions d'inscription</h3>
          <ul>
            <li>Fournir une adresse email valide</li>
            <li>Choisir un nom d'utilisateur approprié</li>
            <li>Créer un mot de passe sécurisé (12 caractères minimum)</li>
          </ul>

          <h3>3.2 Engagements de l'Utilisateur</h3>
          <div class="commitments">
            <div class="commitment">
              <span class="icon">✅</span>
              <span>Fournir des informations exactes et sincères</span>
            </div>
            <div class="commitment">
              <span class="icon">✅</span>
              <span>Maintenir la confidentialité de ses identifiants</span>
            </div>
            <div class="commitment">
              <span class="icon">✅</span>
              <span>Informer immédiatement en cas de perte ou vol</span>
            </div>
            <div class="commitment">
              <span class="icon">✅</span>
              <span>Ne pas créer de compte pour le compte d'autrui</span>
            </div>
          </div>

          <h3>3.3 Suppression de Compte</h3>
          <p>
            L'Utilisateur peut supprimer son compte à tout moment depuis la section 
            "Mon compte". La suppression entraîne l'effacement définitif de toutes 
            ses données, conformément à notre Politique de Confidentialité.
          </p>
        </div>
      </section>

      <section class="section">
        <h2>4. Règles de Conduite</h2>
        <div class="conduct-rules">
          <div class="prohibited">
            <h3>❌ Comportements interdits</h3>
            <ul>
              <li>Utiliser un langage offensant, injurieux ou discriminatoire</li>
              <li>Tenter d'accéder à des zones non autorisées du Site</li>
              <li>Téléverser du contenu malveillant (virus, malware)</li>
              <li>Utiliser des bots ou scripts automatisés</li>
              <li>Usurper l'identité d'une autre personne</li>
              <li>Violer les droits de propriété intellectuelle</li>
            </ul>
          </div>

          <div class="consequences">
            <h3>⚖️ Sanctions possibles</h3>
            <p>En cas de violation des règles, nous pouvons :</p>
            <ol>
              <li>Supprimer le contenu inapproprié</li>
              <li>Suspender temporairement le compte</li>
              <li>Supprimer définitivement le compte</li>
              <li>Signaler aux autorités compétentes si nécessaire</li>
            </ol>
          </div>
        </div>
      </section>

      <section class="section">
        <h2>5. Propriété Intellectuelle</h2>
        <div class="ip-section">
          <div class="ip-ownership">
            <h3>5.1 Droits du Site</h3>
            <p>
              SPA Animaux est propriétaire ou détient les droits sur :
            </p>
            <ul>
              <li>Le code source du Site</li>
              <li>Le design et l'interface utilisateur</li>
              <li>Le nom et le logo "SPA Animaux"</li>
              <li>La structure de la base de données</li>
            </ul>
          </div>

          <div class="user-content">
            <h3>5.2 Contenu utilisateur</h3>
            <p>
              En publiant du contenu sur le Site, l'Utilisateur garantit qu'il en détient 
              les droits et nous accorde une licence non exclusive pour l'afficher.
            </p>
          </div>

          <div class="third-party">
            <h3>5.3 Tiers</h3>
            <p>
              Les images d'animaux proviennent de banques d'images libres de droits. 
              Les crédits complets sont disponibles dans les 
              <router-link to="/legal">Mentions Légales</router-link>.
            </p>
          </div>
        </div>
      </section>

      <section class="section">
        <h2>6. Limitation de Responsabilité</h2>
        <div class="liability-box">
          <div class="warning-note">
            <h3>⚠️ Important à comprendre</h3>
            <p>
              Ce site est un <strong>projet pédagogique</strong>. En tant que tel :
            </p>
          </div>
          
          <div class="limitations">
            <div class="limitation">
              <h4>Pas de service réel</h4>
              <p>SPA Animaux ne propose pas d'adoptions d'animaux réelles</p>
            </div>
            <div class="limitation">
              <h4>Disponibilité</h4>
              <p>Le Site peut être indisponible pour maintenance ou mise à jour</p>
            </div>
            <div class="limitation">
              <h4>Données</h4>
              <p>Les informations présentées peuvent contenir des erreurs</p>
            </div>
            <div class="limitation">
              <h4>Sécurité</h4>
              <p>Nous mettons en œuvre des mesures de sécurité mais ne pouvons garantir une protection absolue</p>
            </div>
          </div>
        </div>
      </section>

      <section class="section">
        <h2>7. Données Personnelles</h2>
        <div class="data-protection">
          <p>
            La collecte et le traitement des données personnelles sont régis par notre 
            <router-link to="/privacy">Politique de Confidentialité</router-link> 
            qui fait partie intégrante des présentes CGU.
          </p>
          <div class="data-highlights">
            <p>En résumé :</p>
            <ul>
              <li>Nous collectons le minimum de données nécessaires</li>
              <li>Vos données sont sécurisées (HTTPS, bcrypt, etc.)</li>
              <li>Vous disposez des droits RGPD (accès, rectification, suppression)</li>
              <li>Nous ne vendons ni ne louons vos données</li>
            </ul>
          </div>
        </div>
      </section>

      <section class="section">
        <h2>8. Évolution des Services</h2>
        <div class="evolution-box">
          <p>
            Nous nous réservons le droit de :
          </p>
          <div class="evolution-list">
            <div class="evolution-item">
              <span class="icon">🔧</span>
              <span>Modifier, suspendre ou interrompre tout service</span>
            </div>
            <div class="evolution-item">
              <span class="icon">📱</span>
              <span>Ajouter ou supprimer des fonctionnalités</span>
            </div>
            <div class="evolution-item">
              <span class="icon">💻</span>
              <span>Changer l'interface ou le design du Site</span>
            </div>
            <div class="evolution-item">
              <span class="icon">📄</span>
              <span>Mettre à jour les présentes CGU</span>
            </div>
          </div>
          <p class="notification-note">
            Les modifications substantielles des CGU seront notifiées aux utilisateurs 
            actifs par email ou via une notification sur le Site.
          </p>
        </div>
      </section>

      <section class="section">
        <h2>9. Droit Applicable et Litiges</h2>
        <div class="legal-box">
          <div class="applicable-law">
            <h3>9.1 Droit applicable</h3>
            <p>
              Les présentes CGU sont régies par le droit français. 
              Tout litige relatif à leur interprétation ou exécution relève 
              des tribunaux français.
            </p>
          </div>

          <div class="dispute-resolution">
            <h3>9.2 Résolution des litiges</h3>
            <p>
              En cas de litige, nous nous engageons à rechercher une solution amiable 
              avant toute action judiciaire.
            </p>
            <p>
              Vous pouvez nous contacter à : 
              <a href="mailto:legal@spa-animaux.fr">legal@spa-animaux.fr</a>
            </p>
          </div>

          <div class="mediation">
            <h3>9.3 Médiation</h3>
            <p>
              Conformément aux dispositions du Code de la consommation concernant 
              le règlement amiable des litiges, nous adhérons au service du Médiateur 
              du e-commerce de la FEVAD.
            </p>
            <p>
              Pour soumettre un litige à la médiation, contactez :<br>
              <strong>Médiateur de la consommation FEVAD</strong><br>
              60 rue la Boétie - 75008 Paris<br>
              Site : <a href="https://www.mediateurfevad.fr" target="_blank">www.mediateurfevad.fr</a>
            </p>
          </div>
        </div>
      </section>

      <section class="section">
        <h2>10. Contact</h2>
        <div class="contact-section">
          <p>
            Pour toute question concernant les présentes Conditions Générales d'Utilisation :
          </p>
          <div class="contact-details">
            <div class="contact-method">
              <h4>📧 Par email</h4>
              <a href="mailto:cgu@spa-animaux.fr">cgu@spa-animaux.fr</a>
            </div>
            <div class="contact-method">
              <h4>📅 Délai de réponse</h4>
              <p>Sous 48 heures ouvrées</p>
            </div>
            <div class="contact-method">
              <h4>📄 Documents connexes</h4>
              <p>
                <router-link to="/privacy">Politique de Confidentialité</router-link><br>
                <router-link to="/legal">Mentions Légales</router-link>
              </p>
            </div>
          </div>
        </div>
      </section>

      <div class="footer-notes">
        <p class="last-updated">
          <strong>Date de dernière mise à jour :</strong> {{ currentDate }}
        </p>
        <p class="print-note">
          <em>Ces Conditions Générales d'Utilisation sont également disponibles au format PDF sur demande.</em>
        </p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'TermsOfService',
  data() {
    return {
      currentDate: new Date().toLocaleDateString('fr-FR', {
        year: 'numeric',
        month: 'long',
        day: 'numeric'
      })
    }
  },
  methods: {
    handleBack() {
      const isAuthenticated = this.checkAuthentication()
      
      if (isAuthenticated) {
        this.$router.push('/dashboard')
      } else {
        window.location.href = 'http://localhost:8000/'
      }
    },
    
    checkAuthentication() {
      const token = localStorage.getItem('auth_token')
      const sessionToken = sessionStorage.getItem('auth_token')
      const cookies = document.cookie.split(';').some(cookie => 
        cookie.trim().startsWith('auth_token=')
      )
      
      if (this.$store && this.$store.state.auth && this.$store.state.auth.isAuthenticated) {
        return true
      }
      
      return token || sessionToken || cookies
    }
  }
}
</script>

<style scoped>
.cgu-container {
  min-height: 100vh;
  background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
  padding: 2rem 1rem;
}

.navigation-header {
  max-width: 1200px;
  margin: 0 auto 3rem;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 1rem 0;
  border-bottom: 1px solid #e2e8f0;
}

.back-button {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  padding: 0.75rem 1.5rem;
  background: white;
  border: 2px solid #e2e8f0;
  border-radius: 10px;
  color: #4a5568;
  font-weight: 500;
  cursor: pointer;
  transition: all 0.3s ease;
  box-shadow: 0 2px 4px rgba(0,0,0,0.05);
}

.back-button:hover {
  border-color: #e74c3c;
  color: #e74c3c;
  transform: translateX(-5px);
  box-shadow: 0 4px 12px rgba(231, 76, 60, 0.15);
}

.back-icon {
  transition: transform 0.3s ease;
}

.back-button:hover .back-icon {
  transform: translateX(-3px);
}

.header-badge {
  display: flex;
  flex-direction: column;
  align-items: flex-end;
  gap: 0.25rem;
}

.badge-text {
  font-size: 0.875rem;
  color: #718096;
  font-weight: 500;
}

.badge-date {
  font-size: 0.75rem;
  color: #a0aec0;
}

.cgu-hero {
  max-width: 1200px;
  margin: 0 auto 3rem;
  background: linear-gradient(135deg, #e74c3c 0%, #c0392b 100%);
  color: white;
  padding: 4rem 3rem;
  text-align: center;
  border-radius: 20px;
  box-shadow: 0 10px 30px rgba(0,0,0,0.08);
}

.cgu-title {
  font-size: 3rem;
  font-weight: 700;
  margin-bottom: 1rem;
  letter-spacing: -0.5px;
}

.cgu-subtitle {
  font-size: 1.25rem;
  opacity: 0.9;
  margin-bottom: 2rem;
  max-width: 600px;
  margin-left: auto;
  margin-right: auto;
}

.last-updated {
  display: inline-flex;
  align-items: center;
  gap: 0.5rem;
  background: rgba(255,255,255,0.1);
  padding: 0.75rem 1.5rem;
  border-radius: 50px;
  font-size: 0.875rem;
  backdrop-filter: blur(10px);
}

.content {
  max-width: 1200px;
  margin: 0 auto;
  background: white;
  padding: 2.5rem;
  border-radius: 15px;
  box-shadow: 0 5px 20px rgba(0,0,0,0.08);
}

.acceptance-box {
  background: #E8F4FD;
  padding: 2rem;
  border-radius: 10px;
  margin-bottom: 3rem;
  border-left: 5px solid #3498DB;
}

.acceptance-box h2 {
  color: #2C3E50;
  margin-bottom: 1rem;
}

.important-note {
  background: #FFF3CD;
  padding: 1rem;
  border-radius: 5px;
  border-left: 4px solid #FFC107;
  margin-top: 1rem;
}

.section {
  margin-bottom: 3rem;
}

.section h2 {
  color: #2C3E50;
  border-bottom: 2px solid #3498DB;
  padding-bottom: 0.5rem;
  margin-bottom: 1.5rem;
  font-size: 1.5rem;
}

.definitions {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  gap: 1.5rem;
  margin-top: 1rem;
}

.definition {
  background: #F8F9FA;
  padding: 1.5rem;
  border-radius: 8px;
  border: 1px solid #E9ECEF;
}

.definition h3 {
  color: #3498DB;
  margin-bottom: 0.5rem;
  font-size: 1.1rem;
}

.purpose-box {
  background: #E8F5E9;
  padding: 1.5rem;
  border-radius: 8px;
}

.purpose-box ul {
  margin: 1rem 0;
  padding-left: 1.5rem;
}

.purpose-box li {
  margin: 0.5rem 0;
}

.disclaimer {
  background: #FFF3CD;
  padding: 1rem;
  border-radius: 5px;
  margin-top: 1rem;
  font-style: italic;
}

.account-rules h3 {
  color: #2C3E50;
  margin: 1.5rem 0 1rem 0;
  font-size: 1.2rem;
}

.account-rules ul {
  padding-left: 1.5rem;
  margin: 1rem 0;
}

.account-rules li {
  margin: 0.5rem 0;
}

.commitments {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 1rem;
  margin: 1.5rem 0;
}

.commitment {
  background: white;
  padding: 1rem;
  border-radius: 6px;
  border: 1px solid #E0E0E0;
  display: flex;
  align-items: center;
  gap: 1rem;
}

.commitment .icon {
  font-size: 1.2rem;
}

.conduct-rules {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 2rem;
  margin-top: 1rem;
}

.prohibited, .consequences {
  background: #F8F9FA;
  padding: 1.5rem;
  border-radius: 8px;
}

.prohibited {
  border-left: 4px solid #DC3545;
}

.consequences {
  border-left: 4px solid #28A745;
}

.prohibited h3, .consequences h3 {
  color: #2C3E50;
  margin-bottom: 1rem;
}

.prohibited ul, .consequences ol {
  padding-left: 1.5rem;
}

.prohibited li, .consequences li {
  margin: 0.5rem 0;
}

.ip-section {
  display: grid;
  gap: 1.5rem;
  margin-top: 1rem;
}

.ip-ownership, .user-content, .third-party {
  background: #F8F9FA;
  padding: 1.5rem;
  border-radius: 8px;
}

.ip-ownership {
  border-left: 4px solid #6F42C1;
}

.user-content {
  border-left: 4px solid #20C997;
}

.third-party {
  border-left: 4px solid #FD7E14;
}

.third-party a {
  color: #3498DB;
  text-decoration: none;
}

.third-party a:hover {
  text-decoration: underline;
}

.liability-box {
  background: #FFF3CD;
  padding: 2rem;
  border-radius: 10px;
  border: 2px solid #FFC107;
}

.warning-note {
  margin-bottom: 1.5rem;
}

.warning-note h3 {
  color: #856404;
  margin-bottom: 0.5rem;
}

.limitations {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  gap: 1.5rem;
  margin-top: 1.5rem;
}

.limitation {
  background: white;
  padding: 1.5rem;
  border-radius: 8px;
  text-align: center;
  box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

.limitation h4 {
  color: #2C3E50;
  margin-bottom: 0.5rem;
  font-size: 1.1rem;
}

.data-protection {
  background: #D1ECF1;
  padding: 1.5rem;
  border-radius: 8px;
}

.data-protection a {
  color: #0C5460;
  font-weight: bold;
  text-decoration: none;
}

.data-protection a:hover {
  text-decoration: underline;
}

.data-highlights {
  background: white;
  padding: 1.5rem;
  border-radius: 6px;
  margin-top: 1rem;
}

.data-highlights ul {
  padding-left: 1.5rem;
  margin: 1rem 0;
}

.evolution-box {
  background: #E8F5E9;
  padding: 1.5rem;
  border-radius: 8px;
}

.evolution-list {
  margin: 1.5rem 0;
}

.evolution-item {
  display: flex;
  align-items: center;
  gap: 1rem;
  margin: 0.8rem 0;
  padding: 0.8rem;
  background: white;
  border-radius: 6px;
}

.evolution-item .icon {
  font-size: 1.3rem;
}

.notification-note {
  background: #D4EDDA;
  padding: 1rem;
  border-radius: 5px;
  margin-top: 1rem;
  font-style: italic;
}

.legal-box {
  display: grid;
  gap: 1.5rem;
  margin-top: 1rem;
}

.applicable-law, .dispute-resolution, .mediation {
  background: #F8F9FA;
  padding: 1.5rem;
  border-radius: 8px;
}

.applicable-law h3, .dispute-resolution h3, .mediation h3 {
  color: #2C3E50;
  margin-bottom: 1rem;
  font-size: 1.1rem;
}

.contact-section {
  background: #E3F2FD;
  padding: 2rem;
  border-radius: 10px;
}

.contact-details {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 2rem;
  margin-top: 1.5rem;
}

.contact-method {
  background: white;
  padding: 1.5rem;
  border-radius: 8px;
  text-align: center;
}

.contact-method h4 {
  color: #2C3E50;
  margin-bottom: 0.5rem;
}

.contact-method a {
  color: #3498DB;
  text-decoration: none;
}

.contact-method a:hover {
  text-decoration: underline;
}

.footer-notes {
  margin-top: 3rem;
  padding-top: 2rem;
  border-top: 2px dashed #DEE2E6;
  text-align: center;
}

.last-updated {
  color: #6C757D;
  margin-bottom: 1rem;
}

.print-note {
  font-size: 0.9rem;
  color: #6C757D;
}

@media (max-width: 768px) {
  .cgu-title {
    font-size: 2rem;
  }
  
  .cgu-hero {
    padding: 3rem 1.5rem;
  }
  
  .navigation-header {
    flex-direction: column;
    gap: 1rem;
    align-items: flex-start;
  }
  
  .header-badge {
    align-items: flex-start;
  }
  
  .content {
    padding: 1.5rem;
  }
  
  .section h2 {
    font-size: 1.3rem;
  }
  
  .definitions, .commitments, .contact-details {
    grid-template-columns: 1fr;
  }
}
</style>