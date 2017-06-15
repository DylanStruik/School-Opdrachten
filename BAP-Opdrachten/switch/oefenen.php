<form method="post">
    <label for="bevarage">Wereldlijder</label>
    <input type="text" id="bevarage" name="bevarage">
    <br>
    <input type="submit" name=" submit" value="Lik me!">
</form>

<?php

$beverage = $_POST['bevarage'];

switch($beverage) {
    case 'Poetin':
        echo '<img src="img/poetin.jpg" alt="Poetin">';
        break;
    case 'Trump':
        echo '<img src="img/trump.jpg" alt="Trump">';
        break;
    case 'Rutte';
        echo '<img src="img/rutte.jpg" alt="Rutte">';
        break;
    case 'Merkel';
        echo '<img src="img/merkel.jpg" alt="Merkel">';
        break;
    case 'Hollande';
        echo '<img src="img/hollande.jpg" alt="Dani">';
        break;
    default:
        echo 'Vul Poetin, Trump, Rutte, Merkel of Hollande in';
}

?>