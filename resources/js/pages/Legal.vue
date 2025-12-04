<template>
  <div class="legal-container">
    <div class="navigation-header">
      <button @click="handleBack" class="back-button">
        <svg class="back-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor">
          <path d="M19 12H5M12 19l-7-7 7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <span class="back-text">Retour</span>
      </button>
      <div class="header-badge">
        <span class="badge-text">Mentions Légales</span>
        <span class="badge-date">{{ currentDate }}</span>
      </div>
    </div>

    <div class="legal-hero">
      <h1 class="legal-title">Mentions Légales</h1>
      <p class="legal-subtitle">
        Informations légales du site SPA Animaux
      </p>
      <div class="last-updated">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor">
          <circle cx="12" cy="12" r="10" stroke-width="1.5"/>
          <path d="M12 6v6l4 2" stroke-width="1.5" stroke-linecap="round"/>
        </svg>
        Dernière mise à jour : {{ currentDate }}
      </div>
    </div>

    <div class="content">
      <section class="section">
        <h2>1. Éditeur du site</h2>
        <div class="info-card">
          <p><strong>Nom du site :</strong> SPA Animaux</p>
          <p><strong>Statut :</strong> Projet pédagogique</p>
          <p><strong>Formation :</strong> Développement Web Full Stack</p>
          <p><strong>Établissement :</strong> EFREI</p>
          <p><strong>Année scolaire :</strong> 2023-2024</p>
        </div>
      </section>

      <section class="section">
        <h2>2. Directeur de publication</h2>
        <div class="info-card">
          <p><strong>Nom :</strong> Maxime Desclaux, Florine Saidi, Wilhem Ho</p>
          <p><strong>Qualité :</strong> Étudiants en développement web</p>
          <p><strong>Email :</strong> 
            <a href="mailto:contact@spa-animaux.fr">contact@spa-animaux.fr</a>
          </p>
        </div>
      </section>

      <section class="section">
        <h2>3. Hébergement</h2>
        <div class="info-card">
          <p><strong>Hébergeur :</strong> [OVH / Heroku / Railway / etc.]</p>
          <p><strong>Adresse :</strong> directeur@spa.fr</p>
          <p><strong>Téléphone :</strong> 07 68 48 02 10</p>
          <p><strong>Site web :</strong> 
            <a href="https://www.ovh.com" target="_blank">https://www.ovh.com</a>
          </p>
        </div>
      </section>

      <section class="section">
        <h2>4. Propriété intellectuelle</h2>
        <div class="notice-box">
          <p>
            L'ensemble de ce site relève de la législation française et internationale 
            sur le droit d'auteur et la propriété intellectuelle.
          </p>
          <p>
            <strong>Tous les droits de reproduction sont réservés</strong>, y compris pour 
            les documents téléchargeables et les représentations iconographiques et photographiques.
          </p>
          <p>
            La reproduction de tout ou partie de ce site sur un support électronique 
            quel qu'il est formellement interdite sans autorisation expresse du directeur de publication.
          </p>
        </div>
      </section>

      <section class="section">
        <h2>5. Limitation de responsabilité</h2>
        <div class="warning-box">
          <p>
            <strong>Important :</strong> Ce site est un projet pédagogique.
          </p>
          <p>
            Les informations fournies sur SPA Animaux le sont à titre indicatif. 
            Nous nous efforçons d'assurer au mieux de nos possibilités l'exactitude 
            et la mise à jour des informations diffusées sur notre site, dont nous 
            nous réservons le droit de corriger, à tout moment et sans préavis, le contenu.
          </p>
          <p>
            Nous ne pouvons garantir l'exactitude, la précision ou l'exhaustivité 
            des informations mises à disposition sur ce site.
          </p>
        </div>
      </section>

      <section class="section">
        <h2>6. Données personnelles</h2>
        <div class="gdpr-box">
          <p>
            Conformément à la loi "Informatique et Libertés" du 6 janvier 1978 modifiée 
            et au Règlement Général sur la Protection des Données (RGPD), vous disposez 
            d'un droit d'accès, de rectification, de suppression et de portabilité 
            sur les données vous concernant.
          </p>
          <p>
            Pour exercer ces droits ou pour toute question sur le traitement de vos données, 
            consultez notre 
            <router-link to="/privacy">Politique de Confidentialité</router-link> 
            ou contactez-nous à l'adresse email mentionnée ci-dessus.
          </p>
        </div>
      </section>

      <section class="section">
        <h2>7. Crédits</h2>
        <div class="credits-box">
          <p><strong>Développement :</strong> Maxime Desclaux, Florine Saidi, Wilhem Ho</p>
          <p><strong>Design :</strong> Équipe SPA Animaux</p>
          <p><strong>Icônes :</strong> Font Awesome / Material Icons</p>
          <p><strong>Police d'écriture :</strong> Google Fonts (Open Sans, Roboto)</p>
        </div>
      </section>

      <section class="section">
        <h2>8. Contact</h2>
        <div class="contact-box">
          <p>
            Pour toute question concernant ces mentions légales, vous pouvez nous contacter :
          </p>
          <div class="contact-info">
            <p><strong>📧 Email :</strong> 
              <a href="mailto:legal@spa-animaux.fr">legal@spa-animaux.fr</a>
            </p>
            <p><strong>⏱️ Réponse :</strong> Sous 48h ouvrées</p>
          </div>
        </div>
      </section>

      <div class="last-update">
        <p>
          <strong>Date de dernière mise à jour :</strong> {{ currentDate }}
        </p>
      </div>

      <div class="scroll-top">
        <button @click="scrollToTop">⬆️ Retour en haut</button>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'LegalNotice',
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
    },
    
    scrollToTop() {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    }
  }
}
</script>

<style scoped>
.legal-container {
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
  border-color: #3498db;
  color: #3498db;
  transform: translateX(-5px);
  box-shadow: 0 4px 12px rgba(52, 152, 219, 0.15);
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

.legal-hero {
  max-width: 1200px;
  margin: 0 auto 3rem;
  background: linear-gradient(135deg, #3498db 0%, #2980b9 100%);
  color: white;
  padding: 4rem 3rem;
  text-align: center;
  border-radius: 20px;
  box-shadow: 0 10px 30px rgba(0,0,0,0.08);
}

.legal-title {
  font-size: 3rem;
  font-weight: 700;
  margin-bottom: 1rem;
  letter-spacing: -0.5px;
}

.legal-subtitle {
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
  padding: 2rem;
  border-radius: 10px;
  box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.section {
  margin-bottom: 2rem;
}

.section h2 {
  color: #2980b9;
  border-left: 4px solid #2980b9;
  padding-left: 1rem;
  margin-bottom: 1rem;
  font-size: 1.3rem;
}

.info-card {
  background: #f8f9fa;
  padding: 1.5rem;
  border-radius: 8px;
  border: 1px solid #dee2e6;
  margin: 1rem 0;
}

.info-card p {
  margin: 0.5rem 0;
}

.info-card a {
  color: #3498db;
  text-decoration: none;
}

.info-card a:hover {
  text-decoration: underline;
}

.notice-box {
  background: #fff3cd;
  border-left: 4px solid #ffc107;
  padding: 1.5rem;
  border-radius: 8px;
  margin: 1rem 0;
}

.warning-box {
  background: #f8d7da;
  border-left: 4px solid #dc3545;
  padding: 1.5rem;
  border-radius: 8px;
  margin: 1rem 0;
}

.gdpr-box {
  background: #d1ecf1;
  border-left: 4px solid #17a2b8;
  padding: 1.5rem;
  border-radius: 8px;
  margin: 1rem 0;
}

.gdpr-box a {
  color: #0c5460;
  font-weight: bold;
  text-decoration: none;
}

.gdpr-box a:hover {
  text-decoration: underline;
}

.cookie-box {
  background: #e2e3e5;
  border-left: 4px solid #6c757d;
  padding: 1.5rem;
  border-radius: 8px;
  margin: 1rem 0;
}

.cookie-box ul {
  margin: 1rem 0;
  padding-left: 1.5rem;
}

.cookie-box li {
  margin: 0.5rem 0;
}

.credits-box {
  background: #e8f5e9;
  border-left: 4px solid #4CAF50;
  padding: 1.5rem;
  border-radius: 8px;
  margin: 1rem 0;
}

.credits-box a {
  color: #2e7d32;
  text-decoration: none;
}

.credits-box a:hover {
  text-decoration: underline;
}

.contact-box {
  background: #e3f2fd;
  padding: 1.5rem;
  border-radius: 8px;
  border: 1px solid #bbdefb;
  margin: 1rem 0;
}

.contact-info {
  margin-top: 1rem;
}

.contact-info p {
  margin: 0.5rem 0;
}

.contact-info a {
  color: #1565c0;
  text-decoration: none;
}

.contact-info a:hover {
  text-decoration: underline;
}

.last-update {
  text-align: center;
  margin-top: 2rem;
  padding-top: 1rem;
  border-top: 1px dashed #ccc;
  color: #7f8c8d;
  font-style: italic;
}

.scroll-top {
  text-align: center;
  margin: 2rem 0 1rem 0;
}

.scroll-top button {
  padding: 0.8rem 1.5rem;
  background-color: #3498db;
  color: white;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  font-size: 1rem;
  transition: background 0.3s;
}

.scroll-top button:hover {
  background-color: #217dbb;
}

@media (max-width: 768px) {
  .legal-title {
    font-size: 2rem;
  }
  
  .legal-hero {
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
    padding: 1rem;
  }
  
  .section h2 {
    font-size: 1.1rem;
  }
}
</style>