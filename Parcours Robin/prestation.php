<!DOCTYPE html>
<html lang="fr">
<head>
    <!--
      EN-TÊTE DE LA PAGE PRESTATIONS
      Vous pouvez modifier ici le titre de la page (qui s'affiche dans l'onglet du navigateur) 
      et la description pour les moteurs de recherche comme Google.
    -->
    <title>LeanoDesign -  Prestations</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
   
    <meta name="Vincent Beaucourt" content="Projet">
    <meta name="description" content="Découvrez les prestations de LeanoDesign en design industriel : cahier des charges, concepts, maquettes 3D, prototypes, dossier de fabrication, supports de présentation.">
    <meta name="keywords" content="designer industriel, design, Lannion, conception produit, Bretagne, modélisation 3D, écodesign, Breton, Trégor">

    <!-- Icon de l'onglet -->
    <link rel="icon" type="image/png" href="assets/images/D+_EMBLEMEOnglet.png"/>
    
    <link rel="stylesheet" href="css/prestation.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="prestation-page">
    <?php include 'navbar.php'; ?>

    <main class="container mt-5">
        <!--
          TITRE PRINCIPAL DE LA PAGE
          Modifiez ici le titre et le sous-titre de la page.
        -->
        <div class="page-header mb-5">
            <h1 class="main-title">Mes prestations</h1>
            <p class="subtitle">Chaque projet est une collaboration sur-mesure, de l'idée à la solution concrète.</p>
        </div>
        <div class="row">
            <!-- 
              COLONNE DE GAUCHE : PRESTATIONS PROPOSÉES
              Cette section liste les types de prestations que vous offrez.
              Chaque prestation est un bloc dépliable (accordéon).
            -->
            <div class="col-md-8">
                <div class="prestation-block">
                    <h2>Prestations proposées</h2>
                    <div class="prestation-list-container">
                        <!--
                          STRUCTURE D'UNE PRESTATION :
                          - Le titre cliquable est dans la balise <span>.
                          - La description qui apparaît est dans la balise <p> juste en dessous.
                          Pour ajouter une nouvelle prestation, copiez un bloc entier (de <div class="prestation-item-block"> à </div>)
                          et modifiez le texte.
                        -->

                        <!-- Prestation : Cahier des charges design -->
                        <div class="prestation-item-block">
                            <span class="prestation-item-link clickable">Cahier des charges design</span>
                            <i class="fas fa-plus"></i>
                        </div>
                        <div class="prestation-item-content">
                            <p>Rédaction du cahier des charges, analyse des besoins, contraintes techniques et usages, définition des objectifs du projet.</p>
                        </div>

                        <!-- Prestation : Concepts illustrés -->
                        <div class="prestation-item-block">
                            <span class="prestation-item-link clickable">Concepts illustrés</span>
                            <i class="fas fa-plus"></i>
                        </div>
                        <div class="prestation-item-content">
                            <p>Création de croquis, moodboards, recherches de concepts, illustrations pour visualiser les pistes créatives.</p>
                        </div>

                        <!-- Prestation : Maquettes 3D et prototypes -->
                        <div class="prestation-item-block">
                            <span class="prestation-item-link clickable">Maquettes 3D et prototypes</span>
                            <i class="fas fa-plus"></i>
                        </div>
                        <div class="prestation-item-content">
                            <p>Modélisation 3D, impression ou fabrication de prototypes pour valider l'ergonomie, l'esthétique et la faisabilité.</p>
                        </div>

                        <!-- Prestation : Dossier de fabrication -->
                        <div class="prestation-item-block">
                            <span class="prestation-item-link clickable">Dossier de fabrication</span>
                            <i class="fas fa-plus"></i>
                        </div>
                        <div class="prestation-item-content">
                            <p>Préparation des plans, fichiers techniques, choix matériaux, suivi de l'industrialisation et des fournisseurs.</p>
                        </div>

                        <!-- Prestation : Supports de présentation -->
                        <div class="prestation-item-block">
                            <span class="prestation-item-link clickable">Supports de présentation</span>
                            <i class="fas fa-plus"></i>
                        </div>
                        <div class="prestation-item-content">
                            <p>Réalisation de rendus, présentations, supports visuels pour la communication et la valorisation du projet.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 
              COLONNE DE DROITE : PRESTATIONS RÉALISÉES
              Cette section donne des exemples concrets de prestations réalisées.
              La structure est la même que pour la colonne de gauche (titre cliquable et contenu dépliable).
            -->
            <div class="col-md-4">
                <div class="prestation-block">
                    <h2>Prestations réalisées</h2>
                    
                    <div class="prestation-list-container">
                        <!-- Exemple de prestation réalisée : Objet connecté -->
                        <div class="prestation-item-block">
                            <span class="prestation-item-link clickable">Objet connecté</span>
                            <i class="fas fa-plus"></i>
                        </div>
                        <div class="prestation-item-content">
                            <ul>
                                <li>Cahier d'intentions</li>
                                <li>Développement 2D/3D du concept retenu</li>
                                <li>Réalisation d'une maquette d'aspect</li>
                                <li>Fourniture d'un export .step pour le Bureau d'études</li>
                            </ul>
                        </div>

                        <!-- Exemple de prestation réalisée : Équipement industriel -->
                        <div class="prestation-item-block">
                            <span class="prestation-item-link clickable">Équipement industriel</span>
                            <i class="fas fa-plus"></i>
                        </div>
                        <div class="prestation-item-content">
                            <ul>
                                <li>Croquis</li>
                                <li>Modélisation 3D</li>
                                <li>Prototype</li>
                                <li>Fourniture des fichiers print des marquages</li>
                                <li>Visuels catalogue</li>
                            </ul>
                        </div>

                        <!-- Exemple de prestation réalisée : Produit cosmétique -->
                        <div class="prestation-item-block">
                            <span class="prestation-item-link clickable">Produit cosmétique</span>
                            <i class="fas fa-plus"></i>
                        </div>
                        <div class="prestation-item-content">
                            <ul>
                                <li>Moodboard</li>
                                <li>Sketchs</li>
                                <li>Rendu 3D</li>
                                <li>Maquette</li>
                                <li>Fiche matériau</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </main>

    <?php include 'footer.php'; ?>

    <!-- Bootstrap JS (nécessaire pour le menu hamburger) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/prestation.js"></script>
</body>
</html>
