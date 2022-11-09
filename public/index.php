<?php
require_once __DIR__ . "/../src/app.php";

use App\Model\Animal;
use App\Model\Equine;
use App\Model\Event;
use App\Model\Horse;
use App\Model\Stable;
use App\Model\Human;
use App\Model\Manager;
use App\Model\Rider;
use App\Model\Sheitland;

$manager1 = new Manager("Antoine Daniel", "France", "Rue Vincent Bray", "12317", "Braypolis", "???");

$stable1 = new Stable("Ecurie du soleil", "France", "Rue de la marinière", "1346", "VilleImaginaire", $manager1);

// echo $stable1;

$rider1 = new Rider("Antoine Daniel", "France", "Rue Vincent Bray", "12317", "Braypolis", "???");

// $equine1 = new Equine("Boby", 1, 100, $rider1, 0);
$sheitland1 = new Sheitland("Boby", 3, 100, $rider1);
$horse1 = new Horse("Jolly Jumper", 1, 800, $rider1);


// echo $sheitland1;
// echo $horse1;

$event1 = new Event("jump", 5, 10);

$event1->subscribeHorse(array($sheitland1, $horse1, $horse1));