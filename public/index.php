<?php
require_once __DIR__ . "/../src/app.php";

use App\Model\Animal;
use App\Model\Equine;
use App\Model\Stable;
use App\Model\Human;
use App\Model\Manager;
use App\Model\Rider;

$manager1 = new Manager("Antoine Daniel", "France", "Rue Vincent Bray", "12317", "Braypolis", "???");

$stable1 = new Stable("Ecurie du soleil", "France", "Rue de la marinière", "1346", "VilleImaginaire", $manager1);

// echo $stable1;

$rider1 = new Rider("Antoine Daniel", "France", "Rue Vincent Bray", "12317", "Braypolis", "???");

$equine1 = new Equine("Boby", "blue", 100, $rider1);

echo $equine1;