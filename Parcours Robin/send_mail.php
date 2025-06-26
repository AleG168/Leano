<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Inclure les fichiers PHPMailer
require_once __DIR__ . '/PHPMailer-master/PHPMailer-master/src/PHPMailer.php';
require_once __DIR__ . '/PHPMailer-master/PHPMailer-master/src/SMTP.php';
require_once __DIR__ . '/PHPMailer-master/PHPMailer-master/src/Exception.php';

// Vérifie si le formulaire a été soumis en utilisant la méthode POST.
// C'est une mesure de sécurité pour s'assurer que le script n'est pas exécuté directement.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // ---- MODIFIEZ CETTE LIGNE ----
    // Définissez ici l'adresse e-mail qui recevra les messages du formulaire.
    $to = "rnft78@gmail.com"; 
    // -----------------------------

    // === NETTOYAGE ET SÉCURISATION DES DONNÉES DU FORMULAIRE ===

    // strip_tags() supprime les balises HTML et PHP pour éviter les injections de code.
    // filter_var() avec FILTER_SANITIZE_FULL_SPECIAL_CHARS supprime les caractères spéciaux (remplace FILTER_SANITIZE_STRING qui est déprécié).
    $nom = filter_var(strip_tags($_POST['nom']), FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // filter_var() avec FILTER_VALIDATE_EMAIL vérifie si l'adresse e-mail fournie a un format valide.
    // C'est essentiel pour s'assurer que vous pouvez répondre à l'utilisateur.
    $email = filter_var(strip_tags($_POST['email']), FILTER_VALIDATE_EMAIL);
    
    // Le message est également nettoyé pour supprimer les balises.
    $message = filter_var(strip_tags($_POST['message']), FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // === VÉRIFICATION DES DONNÉES ===
    
    // On s'assure que le nom et le message ne sont pas vides et que l'email est valide.
    // Si l'une de ces conditions n'est pas remplie, le script ne tentera pas d'envoyer l'e-mail.
    if (!empty($nom) && $email && !empty($message)) {
        // === ENVOI DE L'E-MAIL AVEC PHPMailer ===
        
        $mail = new PHPMailer(true);
        try {
            // Paramètres du serveur SMTP
            // $mail->SMTPDebug = 2; // Ligne de débogage, à réactiver si besoin
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'rnft78@gmail.com'; 
            $mail->Password = 'uypy zpgt frdy tezz'; // <-- MODIFIEZ CECI
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;
            $mail->CharSet = 'UTF-8';

            // Expéditeur et destinataire
            // On définit l'expéditeur comme étant ton adresse d'envoi pour éviter les problèmes de spoofing.
            // Le nom de l'expéditeur reste celui du visiteur.
            $mail->setFrom('rnft78@gmail.com', $nom); 
            $mail->addAddress($to);
            // L'adresse de réponse est bien celle du visiteur.
            $mail->addReplyTo($email, $nom);

            // Contenu
            $mail->isHTML(false);
            $mail->Subject = "Nouveau message de $nom via le formulaire de contact";
            $mail->Body    = "Nom: $nom\nEmail: $email\n\nMessage:\n$message";

            $mail->send();
            header("Location: contact.php?status=success");
            exit;
        } catch (Exception $e) {
            // En cas d'erreur, redirige avec un statut d'erreur
            // Pour déboguer, décommentez la ligne ci-dessous et commentez la redirection
            // echo "Le message n'a pas pu être envoyé. Erreur Mailer: {$mail->ErrorInfo}";
            header("Location: contact.php?status=error");
            exit;
        }
    } else {
        // Si les données du formulaire étaient invalides (champs vides ou email incorrect),
        // on redirige avec un statut d'erreur spécifique.
        header("Location: contact.php?status=invalid");
        exit;
    }
} else {
    // Si quelqu'un essaie d'accéder directement à ce fichier send_mail.php via son URL,
    // on le redirige simplement vers la page de contact.
    header("Location: contact.php");
    exit;
}
?> 