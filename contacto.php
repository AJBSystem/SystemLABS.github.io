<?php

$des = "systemlab10@gmail.com";
$nom = $_POST['name'];
$cor = $_POST['email'];
$asu = $_POST['subject'];
$men = $_POST['message'];

$content = "Nombre: ".$nom . "<br>" . "\nEmail: ".$cor ."<br>" . "\Asunto: ". $asu . "<br>" . "\n             Mensaje: ".$men;


mail($des, $asu, $content);
