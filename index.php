<?php 

//
spl_autoload_register(function($name) {
    $path = "${name}.php";
    //DIRECTORY : omdat het op alle toestellen zou werken
    require_once str_replace('\\', DIRECTORY_SEPARATOR, $path);
});

//ik wil een instantie maken van die klasse
//hier moet dit altijd een backslash zijn, ongeacht welk systeem ik gebruik

$kunstwerk1 = new Kunstwerken\Beeldhouwerk();
$kunstwerk2 = new Kunstwerken\Boek();
$kunstwerk3 = new Kunstwerken\Dans();
$kunstwerk4 = new Kunstwerken\Film();
$kunstwerk5 = new Kunstwerken\Foto();
$kunstwerk6 = new Kunstwerken\Gedicht();
$kunstwerk7 = new Kunstwerken\Lied();
$kunstwerk8 = new Kunstwerken\Schilderij();
$kunstwerk9 = new Kunstwerken\Vaas();

echo var_dump($kunstwerk1);
echo var_dump($kunstwerk2);
echo var_dump($kunstwerk3);