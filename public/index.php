<?php
require_once __DIR__ . "/../src/app.php";

use App\Model\Stable;
use App\Model\Human;
use App\Model\Manager;



$manager1 = new Manager("Antoine Daniel", "France", "Rue Vincent Bray", "12317", "Braypolis", "???");

$stable1 = new Stable("Ecurie du soleil", "France", "Rue de la marinière", "1346", "VilleImaginaire", $manager1);

echo $stable1;