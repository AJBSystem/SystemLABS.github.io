<?php

$des = "systemlab10@gmail.com";
$nom = $_POST['name'];
$cor = $_POST['email'];
$asu = $_POST['subject'];
$men = $_POST['message'];
$tel = $_POST['phone'];

$content = "Nombre: ".$nom . "<br>" . "\nEmail: ".$cor ."<br>" . "\Asunto: ". $asu . "<br>" . "\n Mensaje: ". $men . "<br>" . "\n Telefono: ". $tel;


mail($des, $asu, $content);
