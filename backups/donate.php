<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soutenir l'Éducation - ASAS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="icon" href="images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/styles.css">
    <style>
        :root {
            --primary-soft: #6D5CE8;
            --accent-soft: #FF9E00;
            --light-soft: #F8F9FF;
            --transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        .donation-v2 {
            background: var(--light-soft);
            min-height: 100vh;
            padding-top: 80px;
        }

        .donation-card {
            background: white;
            border-radius: 24px;
            box-shadow: 0 12px 40px rgba(0,0,0,0.03);
            transition: var(--transition);
            border: 1px solid rgba(0,0,0,0.03);
        }

        .donation-header {
            background: linear-gradient(135deg, var(--primary-soft), #4B37B0);
            color: white;
            padding: 4rem 0;
            clip-path: ellipse(120% 100% at 50% 0%);
        }

        .impact-option {
            padding: 1.5rem;
            border: 2px solid transparent;
            border-radius: 16px;
            cursor: pointer;
            transition: var(--transition);
            background: rgba(255,255,255,0.9);
        }

        .impact-option:hover {
            transform: translateY(-3px);
            border-color: var(--primary-soft);
            box-shadow: 0 8px 24px rgba(109,92,232,0.08);
        }

        .impact-option.selected {
            border-color: var(--accent-soft);
            background: rgba(255,158,0,0.03);
        }

        .payment-flow {
            position: sticky;
            top: 2rem;
            opacity: 0;
            transform: translateY(20px);
            transition: var(--transition);
        }

        .payment-flow.active {
            opacity: 1;
            transform: translateY(0);
        }

        .trust-badge {
            width: 80px;
            height: 80px;
            background: white;
            border-radius: 50%;
            box-shadow: 0 8px 24px rgba(0,0,0,0.05);
        }
    </style>
</head>
<body>
    <!-- Navigation (identique au site principal) -->

    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php#home">
                <img src="images/logo.png" alt="ASAS Logo" class="img-fluid" style="max-height: 40px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php#home">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#timeline">Timeline</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#mission">Mission</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#impact">Impact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#support">Partenaires</a>
                    </li>
                </ul>
                <a href="donate.php" class="btn-donation ms-lg-3">
                    <i class="fas fa-hand-holding-heart me-2"></i>Faire un Don
                </a>
            </div>
        </div>
    </nav>
    <main class="donation-v2 mb-5">
        <!-- En-tête Minimaliste -->
        <div class="donation-header text-center mb-5">
            <div class="container">
                <h1 class="display-5 fw-light mb-3">Votre Soutien Compte</h1>
                <div class="progress-container mx-auto" style="max-width: 400px;">
                    <div class="d-flex justify-content-between small mb-2">
                        <span>42% de l'objectif</span>
                        <span>210 000 / 500 000 XAF</span>
                    </div>
                    <div class="progress bg-white bg-opacity-10" style="height: 6px;">
                        <div class="progress-bar" style="width: 42%; background: var(--accent-soft);"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contenu Principal -->
        <div class="container">
            <div class="row g-5">
                <!-- Colonne de Don -->
                <div class="col-lg-7">
                    <div class="donation-card p-4">
                        <h2 class="h4 mb-4">Choisissez Votre Impact</h2>
                        
                        <!-- Options de Don -->
                        <div class="impact-grid">
                            <div class="impact-option">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <div class="h5 mb-1">10 000 XAF</div>
                                        <div class="text-muted small">Soutien Éducatif de Base</div>
                                    </div>
                                    <i class="fas fa-seedling text-muted"></i>
                                </div>
                            </div>

                            <div class="impact-option selected">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <div class="h5 mb-1">50 000 XAF</div>
                                        <div class="text-muted small">Kit Scolaire Complet</div>
                                    </div>
                                    <i class="fas fa-book-open text-primary-soft"></i>
                                </div>
                            </div>

                            <div class="impact-option">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <div class="h5 mb-1">100 000 XAF</div>
                                        <div class="text-muted small">Bourse d'Étude Annuelle</div>
                                    </div>
                                    <i class="fas fa-graduation-cap text-muted"></i>
                                </div>
                            </div>
                        </div>

                        <!-- Montant Personnalisé -->
                        <div class="custom-donation mt-4">
                            <label class="form-label small text-muted mb-2">Montant Personnalisé</label>
                            <div class="input-group">
                                <span class="input-group-text bg-transparent">XAF</span>
                                <input type="number" class="form-control" placeholder="Entrez le montant" style="border-left: 0;">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Colonne de Paiement -->
                <div class="col-lg-5">
                    <div class="payment-flow">
                        <div class="donation-card p-4">
                            <h2 class="h4 mb-4">Finaliser Votre Don</h2>
                            
                            <!-- Récapitulatif -->
                            <div class="summary-card mb-4">
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="text-muted">Montant:</span>
                                    <span class="fw-500">50 000 XAF</span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <span class="text-muted">Frais:</span>
                                    <span class="text-success">0 XAF</span>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between h5">
                                    <span>Total:</span>
                                    <span>50 000 XAF</span>
                                </div>
                            </div>

                            <!-- Méthodes de Paiement -->
                            <div class="payment-methods">
                                <div class="method-option active">
                                    <i class="fab fa-cc-visa fa-lg"></i>
                                    <span>Carte Bancaire</span>
                                </div>
                                <div class="method-option">
                                    <i class="fas fa-mobile-alt fa-lg"></i>
                                    <span>Mobile Money</span>
                                </div>
                            </div>

                            <!-- Bouton de Confirmation -->
                            <button class="btn w-100 mt-4" 
                                    style="background: var(--accent-soft); color: white;">
                                Payer Maintenant
                                <i class="fas fa-arrow-right ms-2"></i>
                            </button>

                            <!-- Garanties -->
                            <div class="text-center mt-4">
                                <div class="d-flex justify-content-center gap-3">
                                    <div class="trust-badge d-flex align-items-center justify-content-center">
                                        <i class="fas fa-lock fa-lg text-primary-soft"></i>
                                    </div>
                                    <div class="trust-badge d-flex align-items-center justify-content-center">
                                        <i class="fas fa-shield-alt fa-lg text-primary-soft"></i>
                                    </div>
                                </div>
                                <div class="text-muted small mt-3">
                                    Transactions sécurisées - SSL 256-bit
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

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
    <script>
        // Micro-interactions
        document.querySelectorAll('.impact-option').forEach(option => {
            option.addEventListener('click', function() {
                document.querySelectorAll('.impact-option').forEach(o => o.classList.remove('selected'));
                this.classList.add('selected');
                document.querySelector('.payment-flow').classList.add('active');
            });
        });

        // Animation au défilement
        window.addEventListener('scroll', () => {
            const paymentFlow = document.querySelector('.payment-flow');
            const position = paymentFlow.getBoundingClientRect();
            
            if(position.top < window.innerHeight * 0.8) {
                paymentFlow.classList.add('active');
            }
        });
    </script>
</body>
</html>