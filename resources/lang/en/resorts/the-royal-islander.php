<?php
return [
    'seo'=>
        [
            'title'=>'The Royal Islander Resort in Cancun Beach | Royal Reservations',
            'metadescription'=>'When staying at The Royal Islander Resort you will enjoy the vast number of things to do at this Cancun beach resort. Relax by its large swimming pools, enjoy delicious meals at its restaurants, walk down by its beautiful beaches and much more.',
        ],

    'title' => 'The Royal Islander All Suites Resort',

    'slug' => lang_url('/beach-resorts/the-royal-islander/the-royal-islander-all-suites-resort-cancun'),

    'description' => '<p>Live a unique vacation experience in one of the best family resorts in Cancun, <strong>The Royal Islander All suites Resort</strong>. Located in front of the beautiful beaches of the Mexican Caribbean, the impeccable facilities of this resort feature world class services with incredible amenities in each and every one of their rooms and suites beautifully decorated, boasting fantastic views of the Caribbean Sea.</p>

    <p>Enjoy the vast number of things to do at this Cancun resort, relax by its large swimming pools, enjoy delicious meals at its restaurants, walk down by its beautiful beaches and have endless hours of fun with its activities program.</p>

    <p>Discover what<strong> The Royal Islander All Suites Resorts </strong>has prepared for you<strong>!</strong></p>',

    'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque porttitor magna sed ante iaculis, a pulvinar nunc sagittis. Praesent ullamcorper bibendum tincidunt.',

    'resort_id'=>'86182',
    'all-inclusive' => false, //en home
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

    'starts' => '4',
    'thumbnails' => [
        '741x290' => asset('img/resorts/home1/the-royal-islander.jpg'),
        '435x521' => asset('img/resorts/the-royal-islander/the-royal-islander-a.jpg'),
        '418x206' =>asset('img/resorts/the-royal-islander/the-royal-islander-b.jpg'),
        '376x100' => asset('img/resorts/home2/the-royal-islander.jpg'),
        '376x290' => asset('img/resorts/home3/the-royal-islander.jpg'),
        '370x300' => asset('370x300'),
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
        0=>'certificate-excellence-2017-en',
    ],
    'resort_amenities' => [
        0=>[
            'title'=>'Beachfront Resort',
            'icon'=>'beachfront',
        ],
        1=>[
            'title'=>'Pools',
            'icon'=>'pool',
        ],
        2=>[
            'title'=>'Tennis courts',
            'icon'=>'tennis-courts',
        ],
        3=>[
            'title'=>'Free Highspeed WiFi',
            'icon'=>'wifi',
        ],
        4=>[
            'title'=>'Family Activities',
            'icon'=>'sport-activities',
        ],
        5=>[
            'title'=>'3 Restaurants',
            'icon'=>'restaurants',
        ],
        6=>[
            'title'=>'Tour and Car Rental Desk',
            'icon'=>'car-rental',
        ],
        7=>[
            'title'=>'Golf Program',
            'icon'=>'golf',
        ],                                                
    ],

    'address' => 'Kukulcan Boulevard Km 17.5, 77500. Cancun Hotel Zone, Quintana Roo, Mexico.',
    'addressCountry' => 'Mexico', 'postalCode' => '77500', 'addressRegion' => 'Quintana Roo',
    'priceRange' => 'Prices starting at $109 USD average per night (Best Deal Guaranteed)', 

    'map'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.0578718908205!2d-86.77939358569115!3d21.070350691734454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f4c282c1deb38c7%3A0xe91144bca9512672!2sThe+Royal+Islander!5e0!3m2!1sen!2smx!4v1530030492418',   

    'resort_offers_title' => 'The Royal Islander Specials',
    'resort_offers_url' => url('/beach-resorts/the-royal-islander/cancun-resort-vacation-deals'),

];