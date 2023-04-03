<?php

// Array (arreglo/colección) mas sencillo. Posee un índice, el primero es 0
// UNI dimensional
$platos =["Ceviche","Arroz con pollo","Carapulcra","Ajío de gallina","Lomo saltado"]
echo $platos[0];
echo $platos[1];

$amigos = array("José","Joel","Lorenzo","César");
echo $amigos[1]; //Segundo


//Array MULTI dimensional (matriz)
$aplicaciones =[
  ["Photoshop", "Corel Draw", "Premier", "Muse"],
  ["VSCode", "Xampp", "NetBeans", "Erwin", "Notepad++"],
  ["Excel", "SAP", "AutoCAD", "PowerBI", "Project"]
]

//Obtener VSCode
echo $aplicaiones[1][0]; //1= índice del arreglo, 0=índice del valor
//Obtener Muse
echo $aplicaiones[0][3];
//Obtener SAP
echo $aplicaiones[2][1];


// Hasta aquí, cualquiera de los areglos anteriores, utiliza un ÍNDICE (int)

// ARREGLOS ASOCIATIVOS... KEY => VALUE
$datosPersonales = [
  "apellidos"     => "Villegas Salazar",
  "nombres"       => "Luis",
  "especialidad"  => "Ingeniería de Software con IA",
  "email"         => "villegasalazar10@gmail.com",
  "edad"          => 19,
  "peliculas"     => ["EndGame","Pinocho", "IroMan"]
];

// Obtener la especialidad
echo $datosPersonales["especialidad"];

// Obtener la primera de tus peliculas favoritas
echo $datosPersonales["peliculas"][0]