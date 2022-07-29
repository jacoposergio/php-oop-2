<?php
// Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.
// L'e-commerce vende prodotti per gli animali.
// I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
// L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
// BONUS:
// Il pagamento avviene con la carta prepagata che deve contenere un saldo sufficiente all'acquisto.

require_once __DIR__ . '/DogProducts.php';
require_once __DIR__ . '/SnakeProducts.php';
require_once __DIR__ . '/BirdProducts.php';
require_once __DIR__ . '/RegisteredUser.php';
require_once __DIR__ . '/UnregisteredUser.php';


$dog = new DogProducts('kibble','peluche');
var_dump($dog);

$snake = new SnakeProducts('rats','wood trunk');
// var_dump($snake);

$bird = new birdProducts('feed','sprigs');
// var_dump($bird);

$ciro_esposito = new RegisteredUser('Ciro Esposito');
// var_dump($ciro_esposito);

$carlo_bianchi = new UnregisteredUser('Carlo Bianchi');
$carlo_bianchi->AddToCart($snake);
$carlo_bianchi->AddToCart($dog);
// var_dump($carlo_bianchi->getCart());
// var_dump($carlo_bianchi);
$carlo_bianchi->totalPrice();
$carlo_bianchi->account = 30;
// var_dump($carlo_bianchi->account);
// if($carlo_bianchi->makePayment() === 'ok') {
//     echo 'Grazie per aver completato il tuo acquisto';
// }

try {
    if($carlo_bianchi->makePayment() === 'ok') {
        echo 'Grazie per aver completato il tuo acquisto';
        } 
    } catch (Exception $e) {
        error_log($e->getMessage());
        echo 'Sei un poveraccio';
}


?>