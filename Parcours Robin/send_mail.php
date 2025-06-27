<?php
// Import des classes nécessaires de PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Inclusion des fichiers PHPMailer
require_once __DIR__ . '/PHPMailer-master/PHPMailer-master/src/PHPMailer.php';
require_once __DIR__ . '/PHPMailer-master/PHPMailer-master/src/SMTP.php';
require_once __DIR__ . '/PHPMailer-master/PHPMailer-master/src/Exception.php';

// Vérification si le formulaire a été soumis en POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Adresse email du destinataire qui recevra le message
    $to = "rnft78@gmail.com";
    
    // Validation de l'adresse email du destinataire
    if(!filter_var($to, FILTER_VALIDATE_EMAIL)) {
        die("Adresse de destination invalide");
    }

    // Nettoyage et validation des données du formulaire
    $nom = filter_var(strip_tags($_POST['nom'] ?? ''), FILTER_SANITIZE_FULL_SPECIAL_CHARS); // Filtre le nom
    $email = filter_var(strip_tags($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL); // Valide l'email
    $message = filter_var(strip_tags($_POST['message'] ?? ''), FILTER_SANITIZE_FULL_SPECIAL_CHARS); // Filtre le message

    // Vérification que tous les champs requis sont valides et non vides
    if (!empty($nom) && $email && !empty($message)) {
        // Création d'une nouvelle instance PHPMailer avec les exceptions activées
        $mail = new PHPMailer(true);
        
        try {
            // Configuration SMTP
            $mail->SMTPDebug = 2; // Mode debug (2 = verbose)
            $mail->isSMTP(); // Utilisation de SMTP
            $mail->Host = 'smtp.gmail.com'; // Serveur SMTP de Gmail
            $mail->SMTPAuth = true; // Activation de l'authentification SMTP
            $mail->Username = 'rnft78@gmail.com'; // Adresse Gmail pour l'authentification
            $mail->Password = 'uypy zpgt frdy tezz'; // Mot de passe de l'application
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Chiffrement TLS
            $mail->Port = 587; // Port SMTP pour TLS
            $mail->CharSet = 'UTF-8'; // Encodage des caractères
            
            // Configuration des options SSL pour contourner les problèmes de certificat
            $mail->SMTPOptions = [
                'ssl' => [
                    'verify_peer' => false, // Désactive la vérification du certificat
                    'verify_peer_name' => false, // Désactive la vérification du nom
                    'allow_self_signed' => true // Autorise les certificats auto-signés
                ]
            ];

            // Configuration de l'expéditeur
            $mail->setFrom($email, $nom);  // Utilise l'email et le nom saisis dans le formulaire


            // Ajout de l'adresse de réponse (email de l'utilisateur)
            $mail->addReplyTo($email, $nom);
            // Ajout du destinataire principal
            $mail->addAddress($to);

            // Configuration du contenu de l'email
            $mail->isHTML(false); // Email en texte brut (non HTML)
            $mail->Subject = "Nouveau message de $nom via le formulaire de contact"; // Sujet
            $mail->Body = "Nom: $nom\nEmail: $email\n\nMessage:\n$message"; // Corps du message

            // Envoi de l'email et redirection si succès
            if($mail->send()) {
                header("Location: contact.php?status=success");
                exit;
            }
            
        } catch (Exception $e) {
            // Gestion des erreurs : log et redirection
            error_log("Erreur envoi email: " . $e->getMessage() . " - " . $mail->ErrorInfo);
            header("Location: contact.php?status=error");
            exit;
        }
    } else {
        // Redirection si les données du formulaire sont invalides
        header("Location: contact.php?status=invalid");
        exit;
    }
} else {
    // Redirection si l'accès n'est pas via POST
    header("Location: contact.php");
    exit;
}
?>