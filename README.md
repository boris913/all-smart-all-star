# Titre du Projet : All Smart All Star

## Description
All Smart All Star est une plateforme éducative révolutionnaire qui combine divertissement et apprentissage à travers un format unique de télé-réalité. Ce projet vise à améliorer l'engagement éducatif à travers l'Afrique en offrant des expériences d'apprentissage innovantes.

## Structure du Projet
Le projet est organisé en plusieurs répertoires et fichiers, chacun ayant un but spécifique :

- **css/**: Contient les feuilles de style pour l'application.
  - `styles.css`: Styles pour la page de don et autres composants.

- **images/**: Stocke les ressources d'images utilisées dans l'application.
  - `logo.png`: L'image du logo affichée dans l'en-tête ou le pied de page.

- **js/**: Contient les fichiers JavaScript pour les fonctionnalités côté client.
  - `scripts.js`: Code JavaScript pour la validation des formulaires et les éléments interactifs.

- **src/**: Le répertoire source contenant la logique principale de l'application.
  - **config/**: Fichiers de configuration pour l'application.
    - `config.php`: Détails de connexion à la base de données et clés API pour les passerelles de paiement.
  - **controllers/**: Contient les classes de contrôleurs qui gèrent la logique de l'application.
    - `PaymentController.php`: Gère la logique de traitement des paiements, y compris la validation des dons et l'interaction avec les passerelles de paiement.
  - **models/**: Contient les modèles de données représentant les entités de l'application.
    - `Payment.php`: Représente la structure des données de paiement avec des propriétés pour le montant, la devise et le statut du paiement.
  - **views/**: Contient les fichiers de vue pour le rendu HTML.
    - `donate.php`: Formulaire HTML pour la page de don.
    - `confirmation.php`: Affiche un message de confirmation après un don réussi.

- **vendor/**: Contient les bibliothèques tierces gérées par Composer.
  - `autoload.php`: Chargement automatique des classes depuis le répertoire vendor.

- **.env**: Variables d'environnement pour les informations sensibles comme les clés API et les identifiants de base de données.

- **composer.json**: Fichier de configuration Composer listant les dépendances du projet.

- **index.php**: Point d'entrée de l'application, configurant le routage et incluant les fichiers nécessaires.

## Instructions d'Installation
1. **Cloner le Répertoire**
   ```
   git clone <repository-url>
   cd all-smart-all-star
   ```

2. **Installer les Dépendances**
   Assurez-vous d'avoir Composer installé, puis exécutez :
   ```
   composer install
   ```

3. **Configurer les Variables d'Environnement**
   Créez un fichier `.env` dans le répertoire racine et ajoutez vos paramètres de configuration, tels que les identifiants de base de données et les clés API.

4. **Exécuter l'Application**
   Vous pouvez exécuter l'application en utilisant un serveur local. Si vous avez PHP installé, vous pouvez utiliser :
   ```
   php -S localhost:8000
   ```
   Accédez à l'application à `http://localhost:8000`.

## Utilisation
- Naviguez vers la page de don pour faire une contribution.
- Après avoir soumis un don, vous serez redirigé vers une page de confirmation affichant les détails de votre don.
- [Tester l'application en ligne](https://allsmart-allstar.com/)

## Considérations de Sécurité
- Assurez-vous que votre serveur utilise HTTPS pour protéger les données sensibles.
- Validez et assainissez toutes les entrées utilisateur pour prévenir les vulnérabilités de sécurité.
- Utilisez des instructions préparées pour les interactions avec la base de données afin d'éviter les injections SQL.

## Contribution
Les contributions sont les bienvenues ! Veuillez soumettre une demande de tirage ou ouvrir
