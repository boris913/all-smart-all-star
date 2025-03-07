<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation de Don - ASAS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="../../images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../../css/styles.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="../../index.php#home">
                <img src="../../images/logo.png" alt="ASAS Logo" class="img-fluid" style="max-height: 40px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../../index.php#home">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../index.php#timeline">Timeline</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../index.php#mission">Mission</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../index.php#impact">Impact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../index.php#support">Partenaires</a>
                    </li>
                </ul>
                <a href="../views/donate.php" class="btn-donation ms-lg-3">
                    <i class="fas fa-hand-holding-heart me-2"></i>Faire un Don
                </a>
            </div>
        </div>
    </nav>

    <main class="container py-5" style="margin-top: 80px;">
        <h1 class="text-center">Merci pour votre Don!</h1>
        <p class="text-center">Votre soutien contribue à la révolution éducative.</p>
        <div class="text-center">
            <h3>Détails de votre Don</h3>
            <p><strong>Montant:</strong> <?php echo htmlspecialchars($_GET['amount']); ?> XAF</p>
            <p><strong>Statut:</strong> <?php echo htmlspecialchars($_GET['status']); ?></p>
        </div>
        <div class="text-center mt-4">
            <a href="../../index.php" class="btn btn-primary">Retour à l'Accueil</a>
        </div>
    </main>

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
                        <a href="../../views/contact.html">Contact</a>
                        <a href="../../views/legal.html">Mentions légales</a>
                        <a href="../../views/press.html">Presse</a>
                        <a href="../../views/faq.html">FAQ</a>
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
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>