<?php


// Email boite de récépetion
$emailSublimeProd = 'benjamin.joly@live.fr';
// Envoie de mail à partir du formulaire
$display ="";//Variable d'affichage
$spanErrorEmail="";//Ajout du texte d'erreur
$spanErrorPrenom="";//Ajout du texte d'erreur
$spanErrorMessage="";//Ajout du texte d'erreur
$inputErrorEmail="";//Variable de modification d'apparence lors d'une erreur 
$inputErrorPrenom="";//Variable de modification d'apparence lors d'une erreur 
$inputErrorMessage="";//Variable de modification d'apparence lors d'une erreur 
$erreurForm=false;//Si true alors erreur dans le formulaire

if(isset($_POST['envoie']))
{
    extract($_POST);//convertie tous les indices sous formes de variabl
        if(empty(trim($prenom)))//Si le champ prenom n'est pas rempli et sans espace
        { 
            $inputErrorPrenom = "inputError";
            $spanErrorPrenom = "<span class='spanErrorPrenom'>Ne soyez pas timide... quel est votre prénom ?</span>";
            $erreurForm = true;
        }
        if(empty(trim($email)) || !filter_var($email,FILTER_VALIDATE_EMAIL))//Si le champ email n'est pas rempli, avec espace et format de l'email est incorrect
        { 
            $inputErrorEmail = "inputError";
            $spanErrorEmail = "<span class='spanErrorEmail'>On dirait que votre adresse email est incorrecte</span>";
            $erreurForm = true;
        }
        if(empty($message))//Si le champ message n'est pas rempli
        { 
            $inputErrorMessage = "inputError";
            $spanErrorMessage = "<span class='spanErrorMessage'>Et si vous nous en disiez un petit peu plus ?</span>";
            $erreurForm = true;
        }
        if($erreurForm == false)
        {
            $to      = $emailSublimeProd;
            $subject = "Message de $prenom";//sujet
            $message = "$message";
            $headers = 'From: '.$email. "\r\n" .//entêtes from: 
                'Reply-To:'.$email . "\r\n" .
                'X-Mailer: PHP/' . phpversion();
            if(mail($to, $subject, $message, $headers))
            {
                ?>
                    <script type="text/javascript">
                        alert("Votre message a été envoyé");
                    </script> 
                <?php
                $prenom = '';
                $email = '';
                $message = '';
            }
            else
            {
                ?>
                    <script type="text/javascript">
                        alert("L'email n'a pas été envoyé.Merci de retenter plus tard...");
                    </script> 
                <?php
            }
        } 
}
//Ajout du Head
include ('asset/inc/head.inc.php');
?>

        <title>Et si on discutait ?</title>
        <meta name="description" content="Contact de l’association pour des informations concernant Caspule" />
</head>

<!-- Ajout de la Navigation/Header -->
<?php include ('asset/inc/nav.inc.php');?>

<main id="contactPage">

    <?=$display?>
    
    <div class="container">
        <section id="contact" class="col-8">

        <div>

            <h2>Et si on discutait ?</h2>
            <p>Si vous avez une question, que vous voulez nous partager votre expérience ou juste envoyer un petit mot à l’équipe, n’hésitez surtout pas : on se fera une joie de vous répondre !</p>
           
            
            <form method="post" action="#">
                
                <input type="text" class="<?=$inputErrorPrenom;?>" placeholder="Prénom" name="prenom" value="<?= ($_POST['prenom']) ?? null;?>">
                <?= $spanErrorPrenom; ?>

                <input type="text" class="<?=$inputErrorEmail;?>" placeholder="Adresse mail" name="email" value="<?= ($_POST['email']) ?? null;?>">
                <?= $spanErrorEmail; ?>

                <textarea class="<?=$inputErrorMessage;?>" cols="30" rows="10" placeholder="Votre message" name="message" value="<?= ($_POST['message']) ?? null;?>"></textarea>
                <?= $spanErrorMessage; ?>

                <button type="submit" class="btn" name="envoie">Envoyer le message</button>
                                
            </form>

        </div>


               
        </section>   
    </div>
</main>




<?php include('asset/inc/footer.inc.php'); ?>


</body>

</html>