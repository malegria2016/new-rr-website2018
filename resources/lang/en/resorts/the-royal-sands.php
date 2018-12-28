<?php
return [
        'seo'=>
        [
            'title'=>'The Royal Sands Resort in Cancun | Royal Reservations',
            'metadescription'=>'This All Inclusive Cancun Resort The Royal Sands Resort & Spa All Inclusive is located in the heart of the hotel zone, offering activities for all ages and everything you need to have the perfect Cancun vacation.',
        ],

    'title' => 'The Royal Sands Resort & SPA All Inclusive',
    'slug' => lang_url('/beach-resorts/the-royal-sands/the-royal-sands-resort-and-spa-all-inclusive-cancun'),

    'description' => '<p>Our beautiful All Inclusive Cancun Resort <strong>The Royal Sands Resort &amp; Spa All Inclusive</strong> is located in the heart of the hotel zone on a gorgeous stretch of Caribbean shoreline well known as one of the most beautiful and exclusive beaches in the area, offering breathtaking picture postcard views of the white sandy beaches, blue waters and swaying palm trees. </p>

    <p>In a perfect location in Cancun, <strong>The Royal Sands Resort &amp; Spa All Inclusive</strong> offers activities for all ages and everything you need to have perfect Cancun vacation. </p>',

    'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque porttitor magna sed ante iaculis, a pulvinar nunc sagittis. Praesent ullamcorper bibendum tincidunt.',

    'resort_id'=>'86169',
    'all-inclusive' => true, //en home
    'room-only' => false, //en home
    'bed-breakfast' => false, //en home
    'all-inclusiveB' => 'true', //en overview del hotel
    'room-onlyB' => 'false', //en overview del hotel
    'bed-breakfastB' => 'false',    //en overview del hotel
    'destination' => 'Cancun',
    'price' => [
        'currency' => 'USD',
        'amount' => '239',
        'symbol' => '$'
    ],

    'starts' => '5',
    'thumbnails' => [
        '741x290' => asset('img/resorts/home1/the-royal-sands.jpg'),
        '435x521' => asset('img/resorts/the-royal-sands/the-royal-sands-a.jpg'),
        '418x206' => asset('img/resorts/the-royal-sands/the-royal-sands-b.jpg'),
        '376x100' => asset('img/resorts/home2/the-royal-sands.jpg'),
        '376x290' => asset('img/resorts/home3/the-royal-sands.jpg'),
        '370x300' => '-',
        '196x230' => 'the-royal-sands',
    ],
    'address' => 'Kukulcan Boulevard Km 13.5, 77500. Cancun Hotel Zone, Quintana Roo, Mexico.',
    'addressCountry' => 'Mexico', 'postalCode' => '77500', 'addressRegion' => 'Quintana Roo',
    'priceRange' => 'Prices starting at $229 USD average per night - All Inclusive (Best Deal Guaranteed)',
    'rates' => [
        0 => [
            'name' => 'All Inclusive', 
            'slug' => lang_url('/beach-resorts/the-royal-sands/all-inclusive-cancun-vacation'),
        ],
    ],
    'gallery'=>[
        0=>'the-royal-sands-facilities-a',
        1=>'the-royal-sands-facilities-b',
        2=>'the-royal-sands-facilities-c',
        3=>'the-royal-sands-facilities-d',
        4=>'the-royal-sands-facilities-e',
        5=>'the-royal-sands-facilities-f',
        6=>'the-royal-sands-facilities-g',
        7=>'the-royal-sands-facilities-h',
        8=>'the-royal-sands-facilities-i',
        9=>'the-royal-sands-facilities-j',
    ],

    'tripadvisor'=>[
        0=>'certificate-excellence-2017-en',
        1=>'travellers-choice-2018',
    ],

    'resort_amenities' => [
        0=>[
            'title'=>'Beachfront Resort',
            'icon'=>'beachfront',
        ],
        1=>[
            'title'=>'3 swimming pools',
            'icon'=>'pool',
        ],
        2=>[
            'title'=>'Restaurants',
            'icon'=>'restaurants',
        ],
        3=>[
            'title'=>'Bars',
            'icon'=>'bars',
        ],
        4=>[
            'title'=>'Tour Desk',
            'icon'=>'tour-desk',
        ],
        5=>[
            'title'=>'Car Rental office',
            'icon'=>'car-rental',
        ],
        6=>[
            'title'=>'Laundry service',
            'icon'=>'laundry-service',
        ],
        7=>[
            'title'=>'Kids club',
            'icon'=>'kids-club',
        ],
    ],

    'map'=>'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14889.457591485798!2d-86.7662953!3d21.0980336!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x23e71d2d874cba2f!2sThe+Royal+Sands!5e0!3m2!1sen!2smx!4v1530030064526',  

    'resort_offers_title' => 'The Royal Sands Specials',
    'resort_offers_url' => url('/beach-resorts/the-royal-sands/cancun-resort-vacation-deals'),

];