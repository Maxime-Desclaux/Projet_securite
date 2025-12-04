<template>
  <div class="privacy-container">
    <div class="navigation-header">
      <button @click="handleBack" class="back-button">
        <svg class="back-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor">
          <path d="M19 12H5M12 19l-7-7 7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <span class="back-text">Retour</span>
      </button>
      <div class="header-badge">
        <span class="badge-text">Politique de Confidentialité</span>
        <span class="badge-date">{{ currentDate }}</span>
      </div>
    </div>

    <div class="privacy-content">
      <div class="privacy-hero">
        <h1 class="privacy-title">Politique de Confidentialité</h1>
        <p class="privacy-subtitle">
          Protection de vos données personnelles - RGPD
        </p>
        <div class="last-updated">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor">
            <circle cx="12" cy="12" r="10" stroke-width="1.5"/>
            <path d="M12 6v6l4 2" stroke-width="1.5" stroke-linecap="round"/>
          </svg>
          Dernière mise à jour : {{ currentDate }}
        </div>
      </div>

      <div class="content-sections">
        <section class="content-section">
          <div class="section-header">
            <div class="section-number">01</div>
            <h2>Introduction et Engagement</h2>
          </div>
          <div class="section-content">
            <p>
              Chez <strong>SPA Animaux</strong>, nous considérons la protection de vos données 
              personnelles comme une priorité absolue. Cette politique de confidentialité 
              décrit comment nous collectons, utilisons, partageons et protégeons vos 
              informations conformément au Règlement Général sur la Protection des Données (RGPD) 
              et à la loi Informatique et Libertés.
            </p>
            <div class="highlight-box">
              <div class="highlight-icon">🔒</div>
              <p>
                Notre engagement : <strong>Transparence, Sécurité et Respect</strong> de votre vie privée.
              </p>
            </div>
          </div>
        </section>

        <section class="content-section">
          <div class="section-header">
            <div class="section-number">02</div>
            <h2>Responsable du Traitement</h2>
          </div>
          <div class="section-content">
            <div class="contact-card">
              <div class="contact-header">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#2c3e50">
                  <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" stroke-width="1.5"/>
                  <circle cx="12" cy="7" r="4" stroke-width="1.5"/>
                </svg>
                <h3>SPA Animaux</h3>
              </div>
              <div class="contact-details">
                <div class="contact-item">
                  <span class="contact-label">Statut :</span>
                  <span class="contact-value">Projet pédagogique</span>
                </div>
                <div class="contact-item">
                  <span class="contact-label">Contact :</span>
                  <a href="mailto:privacy@spa-animaux.fr" class="contact-link">
                    privacy@spa-animaux.fr
                  </a>
                </div>
                <div class="contact-item">
                  <span class="contact-label">Site :</span>
                  <a href="https://spa-animaux.fr" class="contact-link">
                    https://spa-animaux.fr
                  </a>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="content-section">
          <div class="section-header">
            <div class="section-number">03</div>
            <h2>Données Collectées</h2>
          </div>
          <div class="section-content">
            <div class="data-table-container">
              <div class="table-responsive">
                <table class="data-table">
                  <thead>
                    <tr>
                      <th>Catégorie</th>
                      <th>Données</th>
                      <th>Finalité</th>
                      <th>Base Légale</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><span class="data-category">Identification</span></td>
                      <td>Email, Nom d'utilisateur</td>
                      <td>Création et gestion de compte</td>
                      <td>Art. 6.1.b RGPD</td>
                    </tr>
                    <tr>
                      <td><span class="data-category">Sécurité</span></td>
                      <td>Mot de passe (hashé)</td>
                      <td>Authentification sécurisée</td>
                      <td>Art. 6.1.f RGPD</td>
                    </tr>
                    <tr>
                      <td><span class="data-category">Activité</span></td>
                      <td>Logs de connexion</td>
                      <td>Sécurité et maintenance</td>
                      <td>Intérêt légitime</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            
            <div class="important-notice">
              <div class="notice-header">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#d35400">
                  <path d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" stroke-width="2"/>
                </svg>
                <h4>Important</h4>
              </div>
              <p>
                Nous ne collectons <strong>aucune donnée sensible</strong> (santé, origine, opinions politiques, etc.). 
                Les données sont limitées au strict nécessaire pour le fonctionnement du service.
              </p>
            </div>
          </div>
        </section>

        <section class="content-section">
          <div class="section-header">
            <div class="section-number">04</div>
            <h2>Mesures de Sécurité</h2>
          </div>
          <div class="section-content">
            <div class="security-grid">
              <div class="security-card">
                <div class="security-icon">🔐</div>
                <h4>Chiffrement</h4>
                <p>HTTPS/TLS pour toutes les communications</p>
              </div>
              <div class="security-card">
                <div class="security-icon">🛡️</div>
                <h4>Mots de passe</h4>
                <p>Hachage bcrypt (12 tours) avec salt unique</p>
              </div>
              <div class="security-card">
                <div class="security-icon">🚫</div>
                <h4>Cookies sécurisés</h4>
                <p>HttpOnly, Secure, SameSite=Strict</p>
              </div>
              <div class="security-card">
                <div class="security-icon">🔍</div>
                <h4>Audit régulier</h4>
                <p>Vérification des vulnérabilités</p>
              </div>
            </div>
          </div>
        </section>

        <section class="content-section">
          <div class="section-header">
            <div class="section-number">05</div>
            <h2>Durée de Conservation</h2>
          </div>
          <div class="section-content">
            <div class="retention-info">
              <div class="retention-item">
                <span class="retention-label">Données de compte :</span>
                <span class="retention-value">Jusqu'à suppression par l'utilisateur</span>
              </div>
              <div class="retention-item">
                <span class="retention-label">Logs de sécurité :</span>
                <span class="retention-value">6 mois maximum</span>
              </div>
              <div class="retention-item">
                <span class="retention-label">Données inactives :</span>
                <span class="retention-value">Suppression après 2 ans d'inactivité</span>
              </div>
            </div>
          </div>
        </section>

        <section class="content-section">
          <div class="section-header">
            <div class="section-number">06</div>
            <h2>Vos Droits RGPD</h2>
          </div>
          <div class="section-content">
            <div class="rights-grid">
              <div class="right-card">
                <div class="right-icon">📋</div>
                <h4>Droit d'accès</h4>
                <p>Consulter vos données personnelles</p>
              </div>
              <div class="right-card">
                <div class="right-icon">✏️</div>
                <h4>Droit de rectification</h4>
                <p>Corriger des informations inexactes</p>
              </div>
              <div class="right-card">
                <div class="right-icon">🗑️</div>
                <h4>Droit à l'effacement</h4>
                <p>Suppression de vos données</p>
              </div>
              <div class="right-card">
                <div class="right-icon">📤</div>
                <h4>Droit à la portabilité</h4>
                <p>Récupération de vos données</p>
              </div>
            </div>
            
            <div class="rights-cta">
              <p>Pour exercer vos droits, contactez-nous à :</p>
              <a href="mailto:privacy@spa-animaux.fr" class="privacy-email">
                privacy@spa-animaux.fr
              </a>
              <p class="response-time">
                <small>Réponse garantie sous 30 jours maximum</small>
              </p>
            </div>
          </div>
        </section>

        <section class="content-section">
          <div class="section-header">
            <div class="section-number">07</div>
            <h2>Contact et Réclamation</h2>
          </div>
          <div class="section-content">
            <div class="cnil-card">
              <div class="cnil-header">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#003366">
                  <path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" stroke-width="1.5"/>
                </svg>
                <h3>Commission Nationale de l'Informatique et des Libertés (CNIL)</h3>
              </div>
              <div class="cnil-details">
                <p>3 Place de Fontenoy - TSA 80715 - 75334 PARIS CEDEX 07</p>
                <p>Téléphone : 01 53 73 22 22</p>
                <p>
                  Site web : 
                  <a href="https://www.cnil.fr" target="_blank" class="cnil-link">
                    https://www.cnil.fr
                  </a>
                </p>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'PrivacyPolicy',
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
.privacy-container {
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
  border-color: #4299e1;
  color: #4299e1;
  transform: translateX(-5px);
  box-shadow: 0 4px 12px rgba(66, 153, 225, 0.15);
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

.privacy-content {
  max-width: 1200px;
  margin: 0 auto;
  background: white;
  border-radius: 20px;
  box-shadow: 0 10px 30px rgba(0,0,0,0.08);
  overflow: hidden;
}

.privacy-hero {
  background: linear-gradient(135deg, #27ae60 0%, #2ecc71 100%);
  color: white;
  padding: 4rem 3rem;
  text-align: center;
}

.privacy-title {
  font-size: 3rem;
  font-weight: 700;
  margin-bottom: 1rem;
  letter-spacing: -0.5px;
}

.privacy-subtitle {
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

.content-sections {
  padding: 4rem 3rem;
}

.content-section {
  margin-bottom: 4rem;
}

.section-header {
  display: flex;
  align-items: center;
  gap: 1rem;
  margin-bottom: 2rem;
  padding-bottom: 1rem;
  border-bottom: 2px solid #f1f5f9;
}

.section-number {
  font-size: 3rem;
  font-weight: 800;
  color: #e2e8f0;
  line-height: 1;
}

.section-header h2 {
  font-size: 1.875rem;
  color: #2d3748;
  font-weight: 600;
}

.section-content {
  padding-left: 4rem;
}

.highlight-box {
  background: #f0f9ff;
  border-left: 4px solid #0ea5e9;
  padding: 1.5rem;
  border-radius: 0 8px 8px 0;
  margin: 1.5rem 0;
  display: flex;
  align-items: flex-start;
  gap: 1rem;
}

.highlight-icon {
  font-size: 1.5rem;
}

.contact-card {
  background: #f8fafc;
  border-radius: 12px;
  padding: 2rem;
  border: 1px solid #e2e8f0;
}

.contact-header {
  display: flex;
  align-items: center;
  gap: 1rem;
  margin-bottom: 1.5rem;
}

.contact-header h3 {
  font-size: 1.5rem;
  color: #2d3748;
  font-weight: 600;
}

.contact-details {
  display: flex;
  flex-direction: column;
  gap: 0.75rem;
}

.contact-item {
  display: flex;
  gap: 1rem;
}

.contact-label {
  font-weight: 600;
  color: #4a5568;
  min-width: 80px;
}

.contact-value, .contact-link {
  color: #2d3748;
}

.contact-link {
  color: #0ea5e9;
  text-decoration: none;
  transition: color 0.3s ease;
}

.contact-link:hover {
  color: #0284c7;
  text-decoration: underline;
}

.data-table-container {
  margin: 2rem 0;
}

.table-responsive {
  overflow-x: auto;
}

.data-table {
  width: 100%;
  border-collapse: collapse;
  background: white;
  border-radius: 8px;
  overflow: hidden;
  box-shadow: 0 2px 8px rgba(0,0,0,0.05);
}

.data-table thead {
  background: #2c3e50;
  color: white;
}

.data-table th {
  padding: 1.25rem 1rem;
  text-align: left;
  font-weight: 600;
  font-size: 0.875rem;
  text-transform: uppercase;
  letter-spacing: 0.5px;
}

.data-table tbody tr {
  border-bottom: 1px solid #e2e8f0;
  transition: background-color 0.3s ease;
}

.data-table tbody tr:hover {
  background-color: #f8fafc;
}

.data-table td {
  padding: 1.25rem 1rem;
  color: #4a5568;
}

.data-category {
  display: inline-block;
  padding: 0.25rem 0.75rem;
  background: #e8f5e9;
  color: #27ae60;
  border-radius: 20px;
  font-size: 0.75rem;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.5px;
}

.important-notice {
  background: #fffaf0;
  border: 1px solid #fed7aa;
  border-radius: 8px;
  padding: 1.5rem;
  margin: 2rem 0;
}

.notice-header {
  display: flex;
  align-items: center;
  gap: 0.75rem;
  margin-bottom: 1rem;
}

.notice-header h4 {
  color: #d35400;
  font-weight: 600;
}

.security-grid, .rights-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 1.5rem;
  margin: 2rem 0;
}

.security-card, .right-card {
  background: white;
  border: 1px solid #e2e8f0;
  border-radius: 12px;
  padding: 1.5rem;
  text-align: center;
  transition: all 0.3s ease;
}

.security-card:hover, .right-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 25px rgba(0,0,0,0.1);
  border-color: #0ea5e9;
}

.security-icon, .right-icon {
  font-size: 2.5rem;
  margin-bottom: 1rem;
}

.security-card h4, .right-card h4 {
  color: #2d3748;
  font-weight: 600;
  margin-bottom: 0.5rem;
}

.security-card p, .right-card p {
  color: #718096;
  font-size: 0.875rem;
  line-height: 1.5;
}

.retention-info {
  background: #f0f9ff;
  border-radius: 12px;
  padding: 2rem;
}

.retention-item {
  display: flex;
  justify-content: space-between;
  padding: 1rem 0;
  border-bottom: 1px solid #e2e8f0;
}

.retention-item:last-child {
  border-bottom: none;
}

.retention-label {
  font-weight: 600;
  color: #2d3748;
}

.retention-value {
  color: #4a5568;
  font-weight: 500;
}

.rights-cta {
  text-align: center;
  margin-top: 3rem;
  padding: 2rem;
  background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
  border-radius: 12px;
}

.privacy-email {
  display: inline-block;
  margin: 1rem 0;
  padding: 1rem 2rem;
  background: #2c3e50;
  color: white;
  text-decoration: none;
  border-radius: 8px;
  font-weight: 600;
  transition: all 0.3s ease;
}

.privacy-email:hover {
  background: #1a252f;
  transform: translateY(-2px);
  box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.response-time {
  color: #718096;
  margin-top: 1rem;
}

.cnil-card {
  background: #f8fafc;
  border: 1px solid #e2e8f0;
  border-radius: 12px;
  padding: 2rem;
}

.cnil-header {
  display: flex;
  align-items: center;
  gap: 1rem;
  margin-bottom: 1.5rem;
}

.cnil-header h3 {
  color: #2d3748;
  font-weight: 600;
  font-size: 1.25rem;
}

.cnil-details {
  color: #4a5568;
  line-height: 1.6;
}

.cnil-link {
  color: #0ea5e9;
  text-decoration: none;
  font-weight: 500;
}

.cnil-link:hover {
  text-decoration: underline;
}

.footer-navigation {
  max-width: 1200px;
  margin: 3rem auto 0;
  display: flex;
  justify-content: space-between;
  padding-top: 2rem;
  border-top: 1px solid #e2e8f0;
}

.nav-link {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  padding: 1rem 2rem;
  background: white;
  border: 2px solid #e2e8f0;
  border-radius: 10px;
  color: #4a5568;
  text-decoration: none;
  font-weight: 500;
  transition: all 0.3s ease;
}

.nav-link:hover {
  border-color: #27ae60;
  color: #27ae60;
  transform: translateY(-2px);
  box-shadow: 0 5px 15px rgba(39, 174, 96, 0.1);
}

@media (max-width: 768px) {
  .privacy-title {
    font-size: 2rem;
  }
  
  .privacy-hero {
    padding: 3rem 1.5rem;
  }
  
  .content-sections {
    padding: 2rem 1.5rem;
  }
  
  .section-content {
    padding-left: 0;
  }
  
  .section-header {
    flex-direction: column;
    align-items: flex-start;
    gap: 0.5rem;
  }
  
  .section-number {
    font-size: 2rem;
  }
  
  .navigation-header {
    flex-direction: column;
    gap: 1rem;
    align-items: flex-start;
  }
  
  .header-badge {
    align-items: flex-start;
  }
  
  .footer-navigation {
    flex-direction: column;
    gap: 1rem;
  }
  
  .security-grid, .rights-grid {
    grid-template-columns: 1fr;
  }
}
</style>