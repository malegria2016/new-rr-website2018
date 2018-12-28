<?php

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");



$datos=array(
array(
'img' => "https://royalreservations.com/img/promos/year-end-special-cancun-es.jpg",
'tittle' => 'Cancún: Especial De Fin De Año',
'link' => 'https://royalreservations.com/es/ofertas/hoteles/cancun/especial-de-fin-de-ano-cancun?utm_source=royal_resorts&utm_medium=offer'
),

array(
'img' => 'https://royalreservations.com/img/promos/year-end-special-riviera-maya-es.jpg',
'tittle' => 'Riviera Maya: Especial De Fin De Año',
'link' => 'https://royalreservations.com/es/ofertas/hoteles/riviera-maya/especial-de-fin-de-ano-riviera-maya?utm_source=royal_resorts&utm_medium=offer'
),	
array(
'img' => 'https://royalreservations.com/img/promos/year-end-special-playa-del-carmen-es.jpg',
'tittle' => 'Playa Del Carmen: Especial De Fin De Año',
'link' => 'https://royalreservations.com/es/ofertas/hoteles/playa-del-carmen/especial-de-fin-de-ano-playa-del-carmen?utm_source=royal_resorts&utm_medium=offer'
),

array(
'img' => 'https://royalreservations.com/img/promos/habitacion-desayuno.jpg',
'tittle' => 'CANCUN - HABITACIÓN + DESAYUNO',
'link' => 'https://royalreservations.com/es/ofertas/hoteles/cancun/habitacion-desayuno?utm_source=royal_resorts&utm_medium=offer'
)
);

echo json_encode($datos);

?>