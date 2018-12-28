<?php

return [
    'seo'=>
    [
        'title'=>'The Royal Sands Resort Rooms and Suites | Royal Reservations',
        'metadescription'=>'All of the rooms and suites in The Royal Sands All Inclusive Resort in Cancun have their own private balcony or terrace and feature free high speed Wi-Fi connection, premium bedding and bath amenities.',
    ],    
    'title' => 'The Royal Sands Accommodations',
    'description' => 'With 680 spacious and fully furnished suites and villas, guests have their own private haven at The Royal Sands Resort & Spa All Inclusive. Each suite features TV & DVD, free Wi-Fi, a private ocean view or beachfront terrace or balcony, and more.',

    'url_all_rooms'=>'beach-resorts/the-royal-sands/family-rooms-in-cancun-resort',

     //descripción landing interna
    'title_interna_rooms' => 'The Royal Sands Rooms and Suites',
    //descripción landing interna
    'description_interna_rooms' => '<p>With spacious and furnished rooms, suites and fully equipped family villas, guests at <strong>The Royal Sands Resort &amp; Spa All Inclusive</strong> will have a pleasant stay surrounded by the comfort of its modern d&eacute;cor and exclusive amenities all complimented with incredible Caribbean Ocean views that will take your breath away.</p>

    <p>All of our accommodations have their own private balcony or terrace and feature free high speed Wi-Fi connection, premium bedding and bath amenities.</p>',

    'resort_id'=>'86169',

    'rooms' => [
        0=>[
            'title' => 'Junior Suites',
            'price' => [
                'currency' => 'USD',
                'amount' => '239',
                'symbol' => '$'
            ],
            'room_id' => '330096',
            'flor-plan-url' => asset('img/rooms/RS-junior-suite-ov.jpg'),            
            'amenities' => [
                0=>[
                    'title'=>'2 adults & 1 kid',
                    'icon'=>'capacity',
                ],
                1=>[
                    'title'=>'2 double beds',
                    'icon'=>'bedding',
                ],
                2=>[
                    'title'=>'Area: 437 ft2',
                    'icon'=>'area',
                ],
                3=>[
                    'title'=>'Kitchenette',
                     'icon'=>'mini-bar',
                ],
                4=>[
                    'title'=>'Juliet balcony',
                    'icon'=>'balcony',
                ],
                5=>[
                    'title'=>'1 bathroom',
                    'icon'=>'bathroom',
                ],
                6=>[
                    'title'=>'Shower with tub',
                    'icon'=>'bathroom-with-tub',
                ],
                7=>[
                    'title'=>'Flat Screen TV',
                    'icon'=>'tv',
                ]
            ],
            'image' => [
                    'title' => 'Junior Suite',
                    'alt' => 'Junior Suite',
                    'src' => 'junior-suite.jpg',
            ],

            'carrusel' => [
                    0 => 'junior-suite-a.jpg',
                    1 => 'junior-suite-b.jpg',
                    2 => 'junior-suite-c.jpg',
            ],            

            'upgrade-for' => [
                'currency' => 'USD',
                'amount' => '30',
                'symbol' => '$',
            ],

            'lista' =>[
                0=>'Ocean View or Beachfront available',
                1=>'Kitchenette with microwave, coffee maker, minibar',
                2=>'Private bathroom with bath amenities',
                3=>'High-speed Wi-Fi connection',
            ],            
        ],

        1=>[
            'title' => 'One Bedroom Suites',
            'price' => [
                'currency' => 'USD',
                'amount' => '299',
                'symbol' => '$'
            ],

            'room_id' => '330099',
            'flor-plan-url' => asset('/img/rooms/RS-one-bedroom-suite-ov.jpg'),            
            'amenities' => [
                0=>[
                    'title'=>'4 adults',
                    'icon'=>'capacity',
                ],
                1=>[
                    'title'=>'1 King size bed, 2 Murphy beds',
                    'icon'=>'bedding',
                ],
                2=>[
                    'title'=>'Area: 881 ft2',
                    'icon'=>'area',
                ],
                3=>[
                    'title'=>'1 Bathroom',
                    'icon'=>'bathroom',
                ],
                4=>[
                    'title'=>'Full Kitchen',
                    'icon'=>'full-kitchen',
                ],
                5=>[
                    'title'=>'1 Terrace',
                    'icon'=>'terrace',
                ],
                6=>[
                    'title'=>'Living and Dining Room',
                    'icon'=>'living-dining',
                ],
                7=>[
                    'title'=>'Flat Screen TV',
                    'icon'=>'tv',
                ],
            ],

            'image' => [
                    'title' => 'One Bedroom Suite',
                    'alt' => 'One Bedroom Suite',
                    'src' => 'one-bedroom-suite.jpg',
            ],

            'carrusel' => [
                0 => 'one-bedroom-suite-a.jpg',
                1 => 'one-bedroom-suite-b.jpg',
                2 => 'one-bedroom-suite-c.jpg',
            ],  

            'upgrade-for' => [
                'currency' => 'USD',
                'amount' => '30',
                'symbol' => '$',
            ],

            'lista' =>[
                0=>'Ocean View or Beachfront available',
                1=>'Fully equipped kitchen with appliances',
                2=>'Private bathroom with bath amenities',
                3=>'High-speed Wi-Fi connection',
            ],            

        ],        

        2=>[

            'title' => 'Two Bedroom Suites',
            'price' => [
                'currency' => 'USD',
                'amount' => '409',
                'symbol' => '$'
            ],

            'room_id' => '330102',
            'flor-plan-url' => asset('img/rooms/RS-two-bedroom-master-suite-ov.jpg'),            
            'amenities' => [
                0=>[
                    'title'=>' 6 adults',
                    'icon'=>'capacity',
                ],
                1=>[
                    'title'=>'1 King size bed, 2 Murphy beds, 2 double beds',
                    'icon'=>'bedding',
                ],
                2=>[
                    'title'=>'Area: 1516 ft2',
                    'icon'=>'area',
                ],
                3=>[
                    'title'=>'2 bathrooms',
                    'icon'=>'bathroom',
                ],
                4=>[
                    'title'=>'Full equipped Kitchen',
                    'icon'=>'full-kitchen',
                ],
                5=>[
                    'title'=>'In room safe',
                    'icon'=>'in-room-safe',
                ],
                6=>[
                    'title'=>'1 Balcony ',
                    'icon'=>'balcony',
                ],
                7=>[
                    'title'=>'1 Terrace',
                    'icon'=>'terrace',
                ],
                8=>[
                    'title'=>'Flat Screen TV',
                    'icon'=>'tv',
                ],
            ],

            'image' => [
                    'title' => 'Two Bedroom Master Suite',
                    'alt' => 'Two Bedroom Master Suite',
                    'src' => 'two-bedroom-master-suite.jpg',
            ],

            'carrusel' => [
                0 => 'two-bedroom-master-suite-a.jpg',
                1 => 'two-bedroom-master-suite-b.jpg',
                2 => 'two-bedroom-master-suite-c.jpg',
            ],           

            'upgrade-for' => [
                'currency' => 'USD',
                'amount' => '30',
                'symbol' => '$',
            ],

            'lista' =>[
                0=>'Ocean View or Beachfront available',
                1=>'Full equipped Kitchen',
                2=>'Spacious living and dining rooms.',
                3=>'Private bathroom with bath amenities',
            ],            
        ],                
    ],
];