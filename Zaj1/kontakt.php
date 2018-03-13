<?php

// Tworzymy zmienną dla imienia i nazwiska
$name = $_POST['imie'];

$surname = $_POST['nazwisko'];

// Tworzymy zmienną dla adresu email
$email = $_POST['email'];

// Tworzymy zmienną dla wiadomości
$message = $_POST['message'];

// Podajesz adres email z którego ma być wysłana wiadomość
$odkogo = "twojadres@gmail.com";

// Podajesz adres email na który chcesz otrzymać wiadomość
$dokogo = "aleksanderszymczak1@gmail.com";

// Podajesz tytuł jaki ma mieć ta wiadomość email
$tytul = "Wiadomość z pracy domowej";

// Przygotowujesz treść wiadomości
$wiadomosc = "";
$wiadomosc .= "Imie i nazwisko: " . $name . " " . $surname . "\n";
$wiadomosc .= "Email: " . $email . "\n";
$wiadomosc .= "Wiadomość: " . $message . "\n";

// Wysyłamy wiadomość
$sukces = mail($dokogo, $tytul, $wiadomosc, "Od: <$odkogo>");

// Przekierowywujemy na potwierdzenie
if ($sukces){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=potwierdzenie.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
}
?>
