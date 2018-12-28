<?php

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

$datos=array(
array(
'img' => "https://royalreservations.com/img/promos/year-end-special-cancun-en.jpg",
'tittle' => 'Cancun: Year End Special',
'link' => 'https://royalreservations.com/deals/hotels/cancun/year-end-special-cancun?utm_source=royal_resorts&utm_medium=offer'
),
array(
'img' => 'https://royalreservations.com/img/promos/year-end-special-riviera-maya-en.jpg',
'tittle' => 'Riviera Maya: Year End Special',
'link' => 'https://royalreservations.com/deals/hotels/riviera-maya/year-end-special-riviera-maya?utm_source=royal_resorts&utm_medium=offer'
),
array(
'img' => 'https://royalreservations.com/img/promos/year-end-special-playa-del-carmen-en.jpg',
'tittle' => 'Playa Del Carmen: Year End Special',
'link' => 'https://royalreservations.com/deals/hotels/playa-del-carmen/year-end-special-playa-del-carmen?utm_source=royal_resorts&utm_medium=offer'
),
array(
    'img' => 'https://royalreservations.com/img/promos/room-free-breakfast.jpg',
    'tittle' => 'CANCUN - ROOM + FREE BREAKFAST',
    'link' => 'https://royalreservations.com/deals/hotels/cancun/room-free-breakfast?utm_source=royal_resorts&utm_medium=offer'
    )

);

echo json_encode($datos);

?>