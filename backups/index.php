<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Smart All Star - Révolution Éducative</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <!--ajouter une fav icon-->
    <link rel="icon" href="images/logo.png" type="image/x-icon">
</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#home">
                <img src="images/logo.png" alt="ASAS Logo" class="img-fluid" style="max-height: 40px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
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
                <a href="donate.php" target="_blank" class="btn-donation ms-lg-3">
                    <i class="fas fa-hand-holding-heart me-2"></i>Faire un Don
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero d-flex align-items-center text-white">
        <div class="container hero-content text-center">
            <h1 class="display-1 fw-bold mb-4">All Smart-All Star</h1>
            <h2 class="display-3 fw-400 mb-4">Réinventons<br>l'Éducation</h2>
            <p class="lead mb-5">La première téléréalité éducative panafricaine</p>
            <button class="btn btn-lg btn-light px-5 py-3 rounded-pill">
                <i class="fas fa-play-circle me-2"></i>Regarder maintenant
            </button>
        </div>
    </section>
        <!-- Section Vidéo Masquée -->
    <section id="video-section" class="d-none">
        <div class="container text-center py-5">
            <h2 class="text-center mb-3 display-4 fw-bold mb-4">Regardez la Série</h2>
            <div class="title-divider"></div>
            <div class="ratio ratio-16x9">
                <iframe src="https://www.youtube.com/embed/id=2" title="YouTube video" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <!-- Section Objectifs -->
    <section class="container py-5">
        <div class="row g-5 card-grid">
            <div class="col scroll-reveal">
                <div class="card-hover card-hover-obj1 text-white p-4" >
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

    <!-- Timeline des Activités -->
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
            <!-- <p>Sélection des 20 talents les plus prometteurs</p> -->
        </div>

        <div class="timeline-item scroll-reveal">
            <h4><i class="fas fa-microscope me-2" style="color: #3f37c9;"></i>Bootcamp Scientifique</h4>
            <!-- <p>Immersion en méthodologies d'apprentissage accéléré</p> -->
        </div>

        <div class="timeline-item scroll-reveal">
            <h4><i class="fas fa-chalkboard-teacher me-2" style="color: #3f37c9;"></i>Activités de Préparation</h4>
            <!-- <p>Sélection des candidats, des entreprises partenaires, des lieux de casting et de tournage, des présentateurs, des chaînes de diffusion, des coaches et des membres du jury.</p> -->
        </div>

        <div class="timeline-item scroll-reveal">
            <h4><i class="fas fa-handshake me-2" style="color: #3f37c9;"></i>Activités de Démarrage</h4>
            <!-- <p>Réunions de coordination avec l'équipe, le comité de pilotage, la commission scientifique et les entreprises partenaires. Mise en place de la commission pour les bourses et les cagnottes, simulation de l'émission, et mise en place du dispositif de tirage au sort et d'affichage des statistiques.</p> -->
        </div>
    </section>

<!-- Section Mission - Niveau Entreprise -->
<section id="mission" class="enterprise-mission">
    <div class="em-container">
        <div class="em-grid">
            <!-- Colonne Visuelle -->
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

            <!-- Colonne Contenu -->
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
    <!-- Section Impact -->
    <section id="impact" class="stats-section  text-white py-6">
        <div class="container">
            <div class="row g-4">
                <!-- Carte 1 -->
                <div class="col-md-4 col-lg-4 scroll-reveal">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <div class="stat-number" data-count="85">0</div>
                        <div class="stat-label">Engagement Éducatif</div>
                    </div>
                </div>

                <!-- Carte 2 -->
                <div class="col-md-4 col-lg-4 scroll-reveal">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-hand-holding-usd"></i>
                        </div>
                        <div class="stat-number" data-count="2100">0</div>
                        <div class="stat-label">Bourses Distribuées</div>
                    </div>
                </div>

                <!-- Carte 3 -->
                <div class="col-md-4 col-lg-4 scroll-reveal">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div class="stat-number" data-count="40">0</div>
                        <div class="stat-label">Réduction Décrochage</div>
                    </div>
                </div>

                <!-- Carte 4 -->
                <div class="col-md-4 col-lg-4 scroll-reveal">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-brain"></i>
                        </div>
                        <div class="stat-number" data-count="30">0</div>
                        <div class="stat-label">Performance Scolaire</div>
                    </div>
                </div>

                <!-- Carte 5 -->
                <div class="col-md-4 col-lg-4 scroll-reveal">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <div class="stat-number" data-count="300">0</div>
                        <div class="stat-label">Startups Soutenues</div>
                    </div>
                </div>

                <!-- Carte 6 -->
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

  

    <!-- Section Soutiens Institutionnels -->
    <section id="support" class="scroll-reveal">
        <div class="container">
            <h2 class="text-center mb-5 display-4 fw-bold" style="color: #F7F9FC;">Nos Partenaires Stratégiques</h2>
            <div class="title-divider"></div>
            <div class="row justify-content-center g-5">
                <div class="col-md-4 col-lg-3">
                    <div class="support-card text-center">
                        <div class="logo-wrapper">
                            <img src="images\teratrice.png" alt="Gouverneur" class="img-fluid">
                        </div>
                        <h4 class="mt-3 mb-0" style="color: var(--primary);">TERATICE</h4>
                        <p class="text-muted">Partenaire Fondateur</p>
                    </div>
                </div>
                
                <div class="col-md-4 col-lg-3">
                    <div class="support-card text-center">
                        <div class="logo-wrapper">
                            <img src="images\jeun-edu.png" alt="Éducation Nationale" class="img-fluid">
                        </div>
                        <h4 class="mt-3 mb-0" style="color: var(--primary);">MINEDU</h4>
                        <p class="text-muted">Partenaire Académique</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
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
                        <a href="contact.html">Contact</a>
                        <a href="legal.html">Mentions légales</a>
                        <a href="press.html">Presse</a>
                        <a href="faq.html">FAQ</a>
                    </div>
                </div>

                <div class="footer-section">
                    <h4>Newsletter</h4>
                    <form class="newsletter-form" action="#">
                        <input type="email" class="newsletter-input mb-3" placeholder="Votre email" name="email" style="cursor: text;">
                        <button class="btn btn-light rounded-pill w-100">S'abonner</button>
                    </form>
                </div>
            </div>

            <div class="text-center pt-4 border-top border-white-10">
                <p class="mb-0">&copy; 2025 All Smart All Star - Tous droits réservés</p>
                <!-- <p class="small mt-1">Développé avec ❤️ pour l'éducation</p> -->
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>