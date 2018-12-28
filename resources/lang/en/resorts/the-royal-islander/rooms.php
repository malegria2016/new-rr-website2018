<?php

return [
    'seo'=>
    [
        'title'=>'The Royal Islander Resort Rooms and Suites | Royal Reservations',
        'metadescription'=>'The impeccable facilities in The Royal Islander Resort feature world class services with incredible amenities in each one of their rooms and suites beautifully decorated, boasting fantastic views of the Caribbean Sea.',
    ],
    'title' => 'The Royal Islander Accommodations',
    'description' => 'The rooms, suites and family villas in The Royal Islander, are fully furnished accommodations with astonishing Caribbean Ocean views. Our entire array of rooms feature: Free Wi-Fi, flat screen TV with DVD, in room safe, telephone, central air conditioning and private balcony or terrace among other amenities.',

    'url_all_rooms'=>'beach-resorts/the-royal-islander/family-rooms-in-cancun-resort',

    //descripción landing interna
    'title_interna_rooms' => 'The Royal Islander Room and Suites',

    //descripción landing interna
    'description_interna_rooms' => '<p>Experience the best accommodation in our Cancun Resort, <strong>The Royal Islander All Suites Resort</strong>, offering rooms, suites and villas boasting modern d&eacute;cor and incredible views of the Caribbean Ocean, in ample and comfortable spaces providing it occupants all the unwinding rest their looking for during their <strong>Cancun family vacation</strong></p>

    <p>Our Cancun accommodation feature Junior Suite ideal for 2 people, including comfortable beds, private bathroom and kitchenette and balcony, whereas our Suites feature one and two bedroom options, both of them including full equipped kitchen, living room and dining room, private bathroom and terrace. All of our room exclusive amenities include high speed Wi-Fi internet connection. Relax and enjoy the best accommodations Only at <strong>The Royal Islander All Suites Resort</strong>!</p>',

    'resort_id'=>'86182',
    'resort_amenities' => [
        0=>[
            'title'=>'Beachfront Resort',
            'icon'=>'beachfront-resort',
        ],
        1=>[
            'title'=>'Beauty Salon',
            'icon'=>'beauty-salon',
        ],
        2=>[
            'title'=>'Free Wifi',
            'icon'=>'free-wifi',
        ],
        3=>[
            'title'=>'Wellness Spa',
            'icon'=>'wellness-spa',
        ],
        4=>[
            'title'=>'Tennis Courts',
            'icon'=>'tennis-courts',
        ],
        5=>[
            'title'=>'Pools',
            'icon'=>'pools',
        ],
        6=>[
            'title'=>'Gym',
            'icon'=>'gym',
        ],
        7=>[
            'title'=>'Kids Stay Free',
            'icon'=>'kids-stay-free',
        ],                                                
        8=>[
            'title'=>'Gym',
            'icon'=>'gym',
        ],         
    ],

    'rooms' => [
        0=>[
            'title' => 'Double Rooms',
            'price' => [
                'currency' => 'USD',
                'amount' => '103',
                'symbol' => '$'
            ],
            'room_id' => '330058',
            'flor-plan-url' => asset('img/rooms/RI-standard-room-ov.jpg'),            
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
                    'title'=>'Area: 420 ft2',
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
                ],
            ],

            'image' => [
                    'title' => 'Delux Junior Suite',
                    'alt' => 'Delux Junior Suite',
                    'src' => 'double-standard-room.jpg',
            ],

            'carrusel' => [
                    0 => 'double-standar-room-a.jpg',
                    1 => 'double-standar-room-b.jpg',
                    2 => 'double-standar-room-c.jpg',
            ],  

            'upgrade-for' => [
                'currency' => 'USD',
                'amount' => '27',
                'symbol' => '$',
            ],
            'lista' =>[
                0=>'Ocean View or Beachfront available',
                1=>'Kitchenette with microwave, coffee maker, minibar',
                2=>'Private bathroom with hairdryer',
                3=>'High-speed Wi-Fi connection',
            ],             
        ],

        1=>[
            'title' => 'One-bedroom Suites',
            'price' => [
                'currency' => 'USD',
                'amount' => '140',
                'symbol' => '$'
            ],
            'room_id' => '330061',
            'flor-plan-url' => asset('img/rooms/RI-one-bedroom-suite-ov.jpg'),
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
                    'title'=>'Area: 801 ft2',
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
                    'title'=>'1 terrace',
                    'icon'=>'balcony',
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
                'amount' => '26',
                'symbol' => '$',
            ],

            'lista' =>[
                0=>'Ocean View or Beachfront available',
                1=>'Fully equipped kitchen with appliances',
                2=>'Private bathroom with bathtub',
                3=>'High-speed Wi-Fi connection',
            ],             
        ],        

        2=>[
            'title' => 'Two-bedroom Master Suites',
            'price' => [
                'currency' => 'USD',
                'amount' => '247',
                'symbol' => '$'
            ],

            'room_id' => '330064',
            'flor-plan-url' => asset('img/rooms/RI-two-bedroom-master-suite-ov.jpg'),            
            'amenities' => [
                0=>[
                    'title'=>'6 adults',
                    'icon'=>'capacity',
                ],
                1=>[
                    'title'=>'1 King size bed, 2 Murphy beds, 2 double beds',
                    'icon'=>'bedding',
                ],
                2=>[
                    'title'=>'Area: 1494 ft2',
                    'icon'=>'area',
                ],
                3=>[
                    'title'=>'2 bathrooms',
                    'icon'=>'bathroom',
                ],
                4=>[
                    'title'=>'Full Kitchen',
                    'icon'=>'full-kitchen',
                ],
                5=>[
                    'title'=>'In room safe',
                    'icon'=>'in-room-safe',
                ],
                6=>[
                    'title'=>'1 Balcony',
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
                    'title' => 'Delux Junior Suite',
                    'alt' => 'Delux Junior Suite',
                    'src' => 'two-dedroom-master-suite.jpg',
            ],

            'carrusel' => [
                0 => 'two-bedroom-master-suite-a.jpg',
                1 => 'two-bedroom-master-suite-b.jpg',
                2 => 'two-bedroom-master-suite-c.jpg',
            ],                

            'upgrade-for' => [
                'currency' => 'USD',
                'amount' => '27',
                'symbol' => '$',
            ],

            'lista' =>[
                0=>'Ocean View or Beachfront available',
                1=>'Full equipped Kitchen',
                2=>'Spacious living and dining rooms.',
                3=>'Private balcony with table and chairs',
            ],    
        ],                
    ],
];