<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Ma Démarche - LEANO DESIGN</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   
  <meta name="Vincent Beaucourt" content="Projet">
  <meta name="description" content="Découvrez la démarche de design produit de LeanoDesign : une approche structurée en 6 étapes, de l'idéation à la pré-industrialisation, pour transformer vos idées en produits concrets et innovants.">
  <meta name="keywords" content="designer industriel, design, Lannion, conception produit, Bretagne, modélisation 3D, écodesign, Breton, Trégor">
 
<!-- Icon de l'onglet -->
    <link rel="icon" type="image/png" href="assets/images/D+_EMBLEMEOnglet.png"/>
    
  <link rel="stylesheet" href="css/footer.css" />
 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet" />
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/demarches.css" /> 
</head>
<body class="historique-page">

  <?php include 'navbar.php'; ?>

  <header>
    <div class="container">
      <h2>Démarche</h2>
      <p>Explorez le processus de design produit, étape par étape à travers une frise fluide et interactive.</p>
    </div>
  </header>

  <main>
    <!--
      CONTENU DE LA PAGE DÉMARCHE
      Cette section contient la frise chronologique de votre démarche de design.
      Elle est composée de 6 étapes. Pour chaque étape, vous pouvez modifier le titre, la description et l'image.
    -->
    <div class="timeline-container">

      <!-- ====== Carte 1 : Définition du problème ====== -->
      <!-- 
        MODIFICATION DE LA CARTE 1
        Ci-dessous se trouve le contenu de la première étape.
        Vous pouvez éditer le titre "1. Définition du problème & cadrage" et le texte d'objectif.
      -->
      <div class="card-container">
        <div class="card card-t1">
          <div class="card-content">
            <h3>1. Définition du problème & cadrage</h3>
            <p>Objectif : comprendre le contexte et les enjeux .</p>
          </div>
          <div class="card-description"></div>
        </div>
        <div class="card-photo-block">
          <!-- 
            MODIFICATION DE L'IMAGE 1
            Pour changer l'image, modifiez le chemin dans l'attribut 'src' ci-dessous.
            Les images doivent être placées dans le dossier 'Parcours Robin/assets/Démarche/'.
            Exemple: src="assets/Démarche/votre-nouvelle-image.jpg"
          -->
          <img src="assets/Démarche/T3.jpg" alt="Illustration pour la définition du problème et le cadrage du projet." class="demarche-small-img" />
          <div class="photo-overlay">
            <p class="overlay-text">
              Définition des personae<br />
              Formulation des insights utilisateurs<br />
              Rédaction du cahier des charges design<br />
              Identification des contraintes (techniques, réglementaires, durabilité, etc.)
            </p>
          </div>
        </div>
      </div>

      <!-- ====== Carte 2 : Idéation & Exploration ====== -->
      <!-- 
        MODIFICATION DE LA CARTE 2
        Ci-dessous se trouve le contenu de la deuxième étape.
      -->
      <div class="card-container">
        <div class="card card-t2">
          <div class="card-content">
            <h3>2. Idéation & Exploration créative</h3>
            <p>Objectif : générer des concepts innovants.</p>
          </div>
          <div class="card-description">
            <p>
              Création de concepts et idées, brainstorming, esquisses, modèles 3D et sélection du concept en collaboration avec le client.
            </p>
          </div>
        </div>
        <div class="card-photo-block">
          <!-- 
            MODIFICATION DE L'IMAGE 2
            Pour changer l'image, modifiez le chemin dans l'attribut 'src' ci-dessous.
            Les images doivent être placées dans le dossier 'Parcours Robin/assets/Démarche/'.
          -->
          <img src="assets/Démarche/T3.jpg" alt="Illustration pour l'idéation et l'exploration créative." class="demarche-small-img" />
          <div class="photo-overlay">
            <p class="overlay-text">
              Workshops de co-création (avec client ou utilisateurs)<br />
              Moodboards, planches de styles<br />
              Croquis, concepts, premiers volumes 3D<br />
              Sélection collaborative des pistes pertinentes
            </p>
          </div>
        </div>
      </div>

      <!-- ====== Carte 3 : Design & Développement ====== -->
      <!-- 
        MODIFICATION DE LA CARTE 3
        Ci-dessous se trouve le contenu de la troisième étape.
      -->
      <div class="card-container">
        <div class="card card-t3">
          <div class="card-content">
            <h3>3. Design & Développement de concepts</h3>
            <p>Objectif : développer les idées retenues.</p>
          </div>
          <div class="card-description">
            <p>
              Modélisation 3D (CAO)<br />
              Définition formelle, ergonomique et fonctionnelle<br />
              Intégration des contraintes industrielles (DFM)<br />
              Échange avec ingénieurs ou fabricants
            </p>
          </div>
        </div>
        <div class="card-photo-block">
          <!-- 
            MODIFICATION DE L'IMAGE 3
            Pour changer l'image, modifiez le chemin dans l'attribut 'src' ci-dessous.
            Les images doivent être placées dans le dossier 'Parcours Robin/assets/Démarche/'.
          -->
          <img src="assets/Démarche/T3.jpg" alt="Illustration pour le design et le développement de concepts." />
          <div class="photo-overlay">
            <p class="overlay-text">
              Modélisation 3D (CAO)<br />
              Définition formelle, ergonomique et fonctionnelle<br />
              Intégration des contraintes industrielles (DFM)<br />
              Échange avec ingénieurs ou fabricants
            </p>
          </div>
        </div>
      </div>

      <!-- ====== Carte 4 : Prototypage & Tests ====== -->
      <!-- 
        MODIFICATION DE LA CARTE 4
        Ci-dessous se trouve le contenu de la quatrième étape.
      -->
      <div class="card-container">
        <div class="card card-t4">
          <div class="card-content">
            <h3>4. Prototypage & Tests</h3>
            <p>Objectif : valider les choix.</p>
          </div>
          <div class="card-description">
            <p>
              Réalisation de prototypes (fonctionnels, esthétiques ou interactifs)<br />
              Tests utilisateurs (usage, ergonomie, perception)<br />
              Itérations design suite aux retours
            </p>
          </div>
        </div>
        <div class="card-photo-block">
          <!-- 
            MODIFICATION DE L'IMAGE 4
            Pour changer l'image, modifiez le chemin dans l'attribut 'src' ci-dessous.
            Les images doivent être placées dans le dossier 'Parcours Robin/assets/Démarche/'.
          -->
          <img src="assets/Démarche/T3.jpg" alt="Illustration pour le prototypage et les tests utilisateurs." />
          <div class="photo-overlay">
            <p class="overlay-text">
              Réalisation de prototypes (fonctionnels, esthétiques ou interactifs)<br />
              Tests utilisateurs (usage, ergonomie, perception)<br />
              Itérations design suite aux retours
            </p>
          </div>
        </div>
      </div>

      <!-- ====== Carte 5 : Pré-industrialisation ====== -->
      <!-- 
        MODIFICATION DE LA CARTE 5
        Ci-dessous se trouve le contenu de la cinquième étape.
      -->
      <div class="card-container">
        <div class="card card-t5">
          <div class="card-content">
            <h3>5. Pré-industrialisation</h3>
            <p>Objectif : préparer la production avec les partenaires.</p>
          </div>
          <div class="card-description">
            <p>
              Finalisation des fichiers techniques (plans, matériaux, tolérances)<br />
              Suivi de l'outillage, des tests pré-séries<br />
              Assistance au sourcing ou à la fabrication
            </p>
          </div>
        </div>
        <div class="card-photo-block">
          <!-- 
            MODIFICATION DE L'IMAGE 5
            Pour changer l'image, modifiez le chemin dans l'attribut 'src' ci-dessous.
            Les images doivent être placées dans le dossier 'Parcours Robin/assets/Démarche/'.
          -->
          <img src="assets/Démarche/T3.jpg" alt="Illustration pour la pré-industrialisation du produit." />
          <div class="photo-overlay">
            <p class="overlay-text">
              Finalisation des fichiers techniques (plans, matériaux, tolérances)<br />
              Suivi de l'outillage, des tests pré-séries<br />
              Assistance au sourcing ou à la fabrication
            </p>
          </div>
        </div>
      </div>

      <!-- ====== Carte 6 : Communication & Valorisation ====== -->
      <!-- 
        MODIFICATION DE LA CARTE 6
        Ci-dessous se trouve le contenu de la sixième étape.
      -->
      <div class="card-container">
        <div class="card card-t6">
          <div class="card-content">
            <h3>6. Communication & Valorisation</h3>
            <p>Objectif : accompagner la mise sur le marché.</p>
          </div>
          <div class="card-description">
            <p>
              Création de visuels de présentation / storytelling<br />
              Vidéos 3D, mises en situation produit<br />
              Supports de communication pour lancement (salons, web, presse)
            </p>
          </div>
        </div>
        <div class="card-photo-block">
          <!-- 
            MODIFICATION DE L'IMAGE 6
            Pour changer l'image, modifiez le chemin dans l'attribut 'src' ci-dessous.
            Les images doivent être placées dans le dossier 'Parcours Robin/assets/Démarche/'.
          -->
          <img src="assets/Démarche/T3.jpg" alt="Illustration pour la communication et la valorisation du produit." />
          <div class="photo-overlay">
            <p class="overlay-text">
              Création de visuels de présentation / storytelling<br />
              Vidéos 3D, mises en situation produit<br />
              Supports de communication pour lancement (salons, web, presse)
            </p>
          </div>
        </div>
      </div>

    </div>
  </main>

  <?php include 'footer.php'; ?>

  <!-- AOS Library Script -->
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
  <!-- Bootstrap JS (nécessaire pour le menu hamburger) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
