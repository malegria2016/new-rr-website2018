<?php

return [
    'seo'=>
        [
            'title'=>'The Royal Islander Hotel en Cancún | Royal Reservations',
            'metadescription'=>'Al hospedarte en The Royal Islander disfruta de la gran variedad de actividades de este fabuloso resort de Cancún, relájate en sus grandes albercas, disfruta de deliciosos platillos en sus restaurantes, camina por sus hermosas playas y más.',
        ],    
    'title' => 'The Royal Islander All Suites Resort',
    'slug' => lang_url('/es/hoteles-de-playa/the-royal-islander/the-royal-islander-all-suites-resort-cancun'),
    'description' => '<p>Vive una experiencia vacacional &uacute;nica en uno de los mejores resorts familiares en Canc&uacute;n, <strong>The Royal Islander All Suites Resort</strong>. Situado frente a las hermosas playas del Caribe Mexicano, las impecables instalaciones de este resort ofrecen servicios de clase mundial con incre&iacute;bles amenidades en todas y cada una de sus habitaciones y suites bellamente decoradas, y con fant&aacute;sticas vistas del Mar Caribe.</p>
    <p>Disfruta de la gran variedad de atracciones y actividades de este fabuloso resort de Canc&uacute;n, rel&aacute;jate en sus grandes albercas, disfruta de deliciosos platillos en sus restaurantes, camina por sus hermosas playas y pasa infinitas horas de diversi&oacute;n con el incre&iacute;ble programa de actividades.</p>
    <p>&iexcl;Descubre todo lo que <strong>The Royal Islander All Suites Resort</strong> tiene preparado para ti!</p>',
    'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque porttitor magna sed ante iaculis, a pulvinar nunc sagittis. Praesent ullamcorper bibendum tincidunt.',
    'resort_id'=>'86182',
    'all-inclusive' => false,
    'room-only' => true,
    'bed-breakfast' => true,
    'all-inclusiveB' => 'false', //en overview del hotel
    'room-onlyB' => 'true',
    'bed-breakfastB' => 'true',
    'destination' => 'Cancun',
    'price' => [
        'currency' => 'USD',
        'amount' => '103',
        'symbol' => '$'
    ],
    'resort_offers_url' => url('/es/hoteles-de-playa/the-royal-islander/ofertas-de-hoteles-en-cancun'),
    'starts' => '4',
    'thumbnails' => [
        '741x290' => asset('img/resorts/home1/the-royal-islander.jpg'),
        '435x521' => asset('img/resorts/the-royal-islander/the-royal-islander-a.jpg'),
        '418x206' => asset('img/resorts/the-royal-islander/the-royal-islander-b.jpg'),
        '376x100' => asset('img/resorts/home2/the-royal-islander.jpg'),
        '376x290' => asset('img/resorts/home3/the-royal-islander.jpg'),
        '370x300' => '-',
        '196x230' => 'the-royal-islander',
    ],

    'rates' => [
        0 => [
            'name' => 'Bed & Breakfast', 
            'slug' => lang_url('/beach-resorts/the-royal-islander/bed-and-breakfast-cancun-vacation'),
        ],
        1 => [
            'name' => 'Room Only', 
            'slug' => lang_url('/beach-resorts/the-royal-islander/room-only-cancun-vacation'),
        ],
    ],

    'gallery'=>[
        0=>'the-royal-islander-facilities-a',
        1=>'the-royal-islander-facilities-b',
        2=>'the-royal-islander-facilities-c',
        3=>'the-royal-islander-facilities-d',
        4=>'the-royal-islander-facilities-e',
        5=>'the-royal-islander-facilities-f',
        6=>'the-royal-islander-facilities-g',
        7=>'the-royal-islander-facilities-h',
        8=>'the-royal-islander-facilities-i',
        9=>'the-royal-islander-facilities-j',

    ],
    'tripadvisor'=>[
        0=>'certificate-excellence-2017-es',

    ],

    'resort_amenities' => [
        0=>[
            'title'=>'Resort frente al mar',
            'icon'=>'beachfront',
        ],
        1=>[
            'title'=>'Albercas',
            'icon'=>'pool',
        ],
        2=>[
            'title'=>'Canchas de tenis',
            'icon'=>'tennis-courts',
        ],
        3=>[
            'title'=>'Wi-Fi de alta velocidad',
            'icon'=>'wifi',
        ],
        4=>[
            'title'=>'Actividades familiares',
            'icon'=>'sport-activities',
        ],
        5=>[
            'title'=>'3 Restaurantes',
            'icon'=>'restaurants',
        ],
        6=>[
            'title'=>'Agencia de tours y renta de autos',
            'icon'=>'car-rental',
        ],
        7=>[
            'title'=>'Programa de golf',
            'icon'=>'golf',
        ],        
        
    ],

    'address' => 'Bulevar Kukulcán Km 17.5, 77500.  Zona Hotelera de Cancún, Quintana Roo, México.',
    'addressCountry' => 'México', 'postalCode' => '77500', 'addressRegion' => 'Quintana Roo',
    'priceRange' => 'Precio desde $109 USD en promedio por noche (Mejor Precio Garantizado)',
    'map'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.0578718908205!2d-86.77939358569115!3d21.070350691734454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f4c282c1deb38c7%3A0xe91144bca9512672!2sThe+Royal+Islander!5e0!3m2!1sen!2smx!4v1530030492418',   

    'resort_offers_title' => 'The Royal Islander ofertas', 

];