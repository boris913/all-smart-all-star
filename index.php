<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Smart All Star - Révolution Éducative</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="images/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
        <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#home">
                <img src="images/logo.png" alt="ASAS Logo" class="img-fluid" style="max-height: 40px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto text-center">
                    <li class="nav-item">
                        <a class="nav-link active" href="#home">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#timeline">Timeline</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#mission">Mission</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#impact">Impact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#support">Partenaires</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<style>
/* Nouveau système de boutons - Version 2.0 */
.btn-cta {
    --main-color: var(--primary-500);
    --hover-color: var(--primary-900);
    --icon-bg: rgba(255,255,255,0.1);
    
    display: inline-flex;
    align-items: center;
    gap: 1rem;
    padding: 1.25rem 2.5rem;
    border-radius: 1rem;
    font-weight: 600;
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.1);
    position: relative;
    overflow: hidden;
    border: 2px solid transparent;
    background: linear-gradient(145deg, 
        var(--main-color) 0%, 
        color-mix(in srgb, var(--main-color), black 15%) 100%);
    color: var(--light);
}

.btn-cta--accent {
    --main-color: var(--accent-500);
    --hover-color: var(--accent-900);
    --icon-bg: rgba(0,0,0,0.1);
}

.btn-cta__icon {
    width: 2.5rem;
    height: 2.5rem;
    background: var(--icon-bg);
    border-radius: 0.75rem;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: transform 0.3s ease;
}

/* Interactions */
.btn-cta:hover {
    transform: translateY(-2px);
    box-shadow: 0 12px 24px color-mix(in srgb, var(--main-color) 20%, transparent);
    border-color: rgba(255,255,255,0.15);
}

.btn-cta:hover .btn-cta__icon {
    transform: scale(1.15) rotate(-8deg);
}

/* Effet de profondeur */
.btn-cta::after {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(120deg, 
        transparent 0%, 
        rgba(255,255,255,0.08) 50%, 
        transparent 100%);
    opacity: 0;
    transition: opacity 0.3s ease;
}

.btn-cta:hover::after {
    opacity: 1;
}

/* Responsive */
@media (max-width: 768px) {
    .btn-cta {
        width: 100%;
        justify-content: center;
        padding: 1.25rem;
    }
    
    .btn-cta__icon {
        width: 2rem;
        height: 2rem;
    }
}
</style>

<!-- Hero Section Redesign -->
<section class="hero d-flex align-items-center text-white">
    <div class="container hero-content text-center">
        <h1 class="display-1 fw-bold mb-4">All Smart-All Star</h1>
        <h2 class="display-3 fw-400 mb-4">Réinventons<br>l'Éducation</h2>
        <p class="lead mb-5 opacity-75">La première téléréalité éducative panafricaine</p>
        
        <!-- <div class="d-flex gap-4 justify-content-center flex-wrap">
            <a href="https://papers.alstug.com/donate?utm_medium=bouton_partenaire&utm_source=siteAllsmart%20Allstar" 
               class="btn btn-cta"
               target="_blank"
               rel="noopener noreferrer">
                <span class="btn-cta__icon">
                    <i class="fas fa-network-wired fa-lg"></i>
                </span>
                Devenir partenaire
            </a>
            
            <a href="https://papers.alstug.com/donate?utm_medium=bouton_don&utm_source=siteAllsmart%20Allstar" 
               class="btn btn-cta btn-cta--accent"
               target="_blank"
               rel="noopener noreferrer">
                <span class="btn-cta__icon">
                    <i class="fas fa-seedling fa-lg"></i>
                </span>
                Faire un Don
            </a>
        </div> -->
    </div>
</section>

   <!-- Section Vidéo Visible -->
<!-- <section id="video-section">
    <div class="container text-center py-5">
        <h2 class="text-center mb-3 display-4 fw-bold mb-4">Trailler</h2>
        <div class="title-divider"></div>
        <div class="ratio ratio-16x9">
            <iframe src="https://www.youtube.com/embed/id=2" title="YouTube video" allowfullscreen></iframe>
        </div>
    </div>
</section> -->

<section id="teasing" class="teasing-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <!-- Colonne Vidéo -->
            <div class="col-md-6">
                <div class="video-wrapper">
                    <video controls autoplay loop class="w-100 rounded" poster="images/videoframe_3734.png">
                        <source src="images/videoplayback.mp4" type="video/mp4">
                        Votre navigateur ne supporte pas la vidéo.
                    </video>
                </div>
            </div>
            <!-- Colonne Description -->
            <div class="col-md-6">
                <div class="description-wrapper">
                    <h2 class="display-4 fw-bold mb-4">Découvrez notre vision</h2>
                    <p class="lead mb-4">
                        All Smart All Star est une initiative révolutionnaire qui vise à transformer l'éducation en Afrique grâce à l'innovation et au divertissement. 
                        Rejoignez-nous pour réinventer l'avenir de l'éducation !
                    </p>
                </div>
            </div>
        </div>
        <!-- Bouton centré -->
        <div class="text-center mt-5">
            <button class="btn btn-cta btn-lg" data-bs-toggle="modal" data-bs-target="#adhereModal">
                <span class="btn-cta__icon">
                    <i class="fas fa-handshake"></i>
                </span>
                J'adhère à la vision
            </button>
        </div>
    </div>
</section>

<!-- Modale -->
<div class="modal fade" id="adhereModal" tabindex="-1" aria-labelledby="adhereModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="adhereModalLabel">Rejoignez-nous</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
            </div>
            <div class="modal-body text-center">
                <p>Choisissez une option pour soutenir notre vision :</p>
                <div class="d-flex justify-content-center gap-3">
                    <a href="https://papers.alstug.com/donate?utm_medium=bouton_partenaire&utm_source=siteAllsmart%20Allstar" class="btn btn-cta" target="_blank">
                        <span class="btn-cta__icon">
                            <i class="fas fa-users"></i>
                        </span>
                        Devenir partenaire
                    </a>
                    <a href="https://papers.alstug.com/donate?utm_medium=bouton_partenaire&utm_source=siteAllsmart%20Allstar" class="btn btn-cta btn-cta--accent" target="_blank">
                        <span class="btn-cta__icon">
                            <i class="fas fa-donate"></i>
                        </span>
                        Faire un don
                    </a>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>

    <section class="container py-5">
        <div class="row g-5 card-grid">
            <div class="col scroll-reveal">
                <div class="card-hover card-hover-obj1 text-white p-4">
                    <i class="fas fa-brain fa-3x mb-4"></i>
                    <h3>Excellence Cognitive</h3>
                    <p>Développement des capacités métacognitives et de leadership</p>
                </div>
            </div>
            <div class="col scroll-reveal">
                <div class="card-hover card-hover-obj2 bg-white p-4">
                    <i class="fas fa-clock fa-3x mb-4" style="color: #3f37c9;"></i>
                    <h3>Maîtrise du Temps</h3>
                    <p>Optimisation algorithmique des plannings personnels</p>
                </div>
            </div>
        </div>
    </section>

    <section id="timeline">
        <h2 class="text-center mb-3 display-4 fw-bold "><span class="text-gradient">Timeline</span> des Activités</h2>
        <div class="title-divider"></div>
    </section>
    <div class="text-center">
        <i class="fas fa-calendar-alt fa-3x" style="color: #3f37c9;"></i>
    </div>
    <section class="timeline container">
        <div class="timeline-item scroll-reveal">
            <h4><i class="fas fa-users me-2" style="color: #3f37c9;"></i>Casting National</h4>
        </div>
        <div class="timeline-item scroll-reveal">
            <h4><i class="fas fa-microscope me-2" style="color: #3f37c9;"></i>Bootcamp Scientifique</h4>
        </div>
        <div class="timeline-item scroll-reveal">
            <h4><i class="fas fa-chalkboard-teacher me-2" style="color: #3f37c9;"></i>Activités de Préparation</h4>
        </div>
        <div class="timeline-item scroll-reveal">
            <h4><i class="fas fa-handshake me-2" style="color: #3f37c9;"></i>Activités de Démarrage</h4>
        </div>
    </section>

    <section id="mission" class="enterprise-mission">
        <div class="em-container">
            <div class="em-grid">
                <div class="em-visual">
                    <div class="em-particle-system">
                        <div class="particle p1"></div>
                        <div class="particle p2"></div>
                        <div class="particle p3"></div>
                    </div>
                    <div class="em-main-card">
                        <div class="em-radial-glow"></div>
                        <div class="em-icon-wrapper">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                    </div>
                </div>
                <div class="em-content">
                    <h2 class="em-tagline">
                        <span class="em-word">Réinvention</span>
                        <span class="em-word">Éducation</span>
                        <span class="em-word">4.0</span>
                    </h2>
                    <div class="em-statement">
                        <p class="mission-subtitle">Notre feuille de route techno-pédagogique :</p>
                        <ul class="em-roadmap">
                            <li data-step="1">
                                <div class="em-marker"></div>
                                <div class="em-desc">Création d'un référentiel africain d'excellence éducative</div>
                            </li>
                            <li data-step="2">
                                <div class="em-marker"></div>
                                <div class="em-desc">Déploiement d'une plateforme edutainment cross-canal</div>
                            </li>
                            <li data-step="3">
                                <div class="em-marker"></div>
                                <div class="em-desc">Formation de 10 000 leaders éducatifs d'ici 2027</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="impact" class="stats-section text-white py-6">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4 col-lg-4 scroll-reveal">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <div class="stat-number" data-count="85">0</div>
                        <div class="stat-label">Engagement Éducatif</div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 scroll-reveal">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-hand-holding-usd"></i>
                        </div>
                        <div class="stat-number" data-count="2100">0</div>
                        <div class="stat-label">Bourses Distribuées</div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 scroll-reveal">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div class="stat-number" data-count="40">0</div>
                        <div class="stat-label">Réduction Décrochage</div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 scroll-reveal">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-brain"></i>
                        </div>
                        <div class="stat-number" data-count="30">0</div>
                        <div class="stat-label">Performance Scolaire</div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 scroll-reveal">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <div class="stat-number" data-count="300">0</div>
                        <div class="stat-label">Startups Soutenues</div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 scroll-reveal">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-network-wired"></i>
                        </div>
                        <div class="stat-number" data-count="70">0</div>
                        <div class="stat-label">Adoption TIC</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="support" class="scroll-reveal">
        <div class="container">
            <h2 class="text-center mb-5 display-4 fw-bold" style="color: #F7F9FC;">Nos Partenaires Stratégiques</h2>
            <div class="title-divider"></div>
            <div class="row justify-content-center g-5">
                <div class="col-md-4 col-lg-3">
                    <div class="support-card text-center">
                        <div class="logo-wrapper">
                            <img src="images/teratrice.png" alt="Gouverneur" class="img-fluid">
                        </div>
                        <h4 class="mt-3 mb-0" style="color: var(--primary);">TERATICE</h4>
                        <p class="text-muted">Partenaire Fondateur</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="support-card text-center">
                        <div class="logo-wrapper">
                            <img src="images/jeun-edu.png" alt="Éducation Nationale" class="img-fluid">
                        </div>
                        <h4 class="mt-3 mb-0" style="color: var(--primary);">MINEDU</h4>
                        <p class="text-muted">Partenaire Académique</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>All Smart All Star</h3>
                    <p>Révolutionner l'éducation par l'innovation et le divertissement</p>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="footer-section">
                    <h4>Liens Utiles</h4>
                    <div class="footer-links">
                        <a href="#">Contact</a>
                        <a href="#">Mentions légales</a>
                        <a href="#">Presse</a>
                        <a href="#">FAQ</a>
                    </div>
                </div>
                <div class="footer-section">
                    <div class="footer-section">
                        <h4>Newsletter</h4>
                        <form class="newsletter-form" action="#">
                            <input type="email" class="newsletter-input mb-3" placeholder="Votre email" name="email" style="cursor: text;">
                            <button class="btn btn-light rounded-pill w-100">S'abonner</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="text-center pt-4 border-top border-white-10">
                <p class="mb-0">&copy; 2025 All Smart All Star - Tous droits réservés</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>