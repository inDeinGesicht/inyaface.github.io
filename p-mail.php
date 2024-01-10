<?php
if(isset($_POST["submit"])) {
    mail("filme.indeingesicht@gmail.com", "Kontaktformular", 'Firma'.$_POST["firma"].'Vorname'.$_POST["vorname"].'Nachname'.$_POST["nachname"].'Email'.$_POST["email"].'Telefon'.$_POST["telefon"].'Nachricht'.$_POST["nachricht"].'Leistungen'.$_POST["leistungen"].'Paket'.$_POST["paket"]);
    ?>
    <h1 style="color: green;">Erfolgreich versendet!</h1>
    <?php
}
?>