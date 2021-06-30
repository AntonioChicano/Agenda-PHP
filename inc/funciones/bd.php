<?php

// credenciales de la base de datos
define('DB_USUARIO', 'ui3vlynhyyohafwv');
define('DB_PASSWORD', 'fTfXZ3A1qKyosd6me3iN');
define('DB_HOST', 'b9o1oh1errawbiwewa0y-mysql.services.clever-cloud.com');
define('DB_NOMBRE', 'b9o1oh1errawbiwewa0y');

$conn = new mysqli(DB_HOST, DB_USUARIO, DB_PASSWORD, DB_NOMBRE); 

// echo $conn->ping();