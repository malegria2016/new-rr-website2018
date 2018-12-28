<?php

return [
    'alturaRateplan'=>'8',//8 líneas ó 10 líneas
    'slug' => 'autumn-special-punta-cana',
    'thumbnail' => asset('img/deals/autumn-special-punta-cana.jpg'),
    'title' => 'Punta Cana: Autumn Special',
    'expiration'=>'11/05/2018', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'01/04/2020','fin'=>'12/31/2021', ], // mm/dd/yyyy	
    ],
    'minimo_noches'=>'4',
    'destino'=>'punta-cana', //cancun, riviera-maya, playa-del-carmen, sint-maarten, curacao, punta-cana

    'subtitle' => 'Book Now and Travel anytime of the year!',
    'box_benefits'=>'Take Advantage of this special offer and Book Now your next Punta Cana vacations!',
    'title_seo' => 'Punta Cana Vacation Special Offer | Royal Reservations',
    'alt_seo' => 'Punta Cana Vacation Special Offer',
	'metadescription' => 'Take advantage of this special offer in which you will receive an amazing special discount on your reservation in All Inclusive, Room Only or Bed & Breakfast rate plans in any of the 4 luxury resorts available in Punta Cana.',

    'label_resort' => '',
    'main_points' => [
        0=>'48% OFF',
        1=>'All Inclusive, Bed & Breakfast or Accommodation Only',
        2=>'Free WiFi',
        
    ],
    'label_color'=>'1', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'48% OFF', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Do you want to travel to Punta Cana soon? We have the perfect offer especially for you! Book your stay at any of our three luxury resorts in Punta Cana by Royal Reservations: Casa de Campo Resort and Villas, Del Mar by Joy Resort or Ancora Punta Cana Private Residence Yacht Club Resort and receive a special discount on your All Inclusive Plan, Bed &amp; Breakfast plan or Room Only Plan. <br />Let the ocean breeze set you free, wake up to the sound of the waves, delight your palate with world-renowned restaurants, walk by the beach at sunset, cherish those moments with someone special! Fly to Punta Cana this year or the next one with this unique opportunity and live those beach vacations you have been longing for so long!
        </p>

    ',
    'rates'=>[
        0=>[
            'tab'=>'All Inclusive',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'ALL INCLUSIVE',
            'description'=>'
                        
                    <ul>
                        <li>Up to 440 USD in Resort Credits</li>
                        <li>Special discount on your reservation</li>
                        <li>Unlimited meals &amp; drinks</li>
                    </ul>

                ',
            'resorts_area_title'=>'All Inclusive Resorts',
            'resorts'=>[
                0=>[
                    'name'=>'Ancora Punta Cana Private Residence Yacht Club',
                    'stars'=>'4',
                    'img'=>'alsol-luxury-village',
                    'price'=>'343',
                    'resort_id'=>'85285',
                    'ihotelier_id'=>'2627347',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],
            'title_conditions'=>'Terms and conditions',
            'conditions'=>'
                    <ul>
                        <li>Resort Credit applies for AlSol hotels reservations, others are excluded</li>
                        <li>When booking All Inclusive in Ancora Punta Cana Private Residence Yacht Club get 440 USD in Resort Credits</li>
                        <li>4 nights minimum stay required</li>
                    </ul>
            ',
        ],
        1=>[
            'tab'=>'Room only',
            'icon'=>asset('img/img-specials/bed.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Room only',
            'description'=>'
                        
                    <ul>
                        <li>Up to 350 USD in Resort Credits</li>
                        <li>Special discount on your reservation</li>
                    </ul>

                ',            
            'resorts_area_title'=>'Room Only Resorts',
            'resorts'=>[
                0=>[
                    'name'=>'Ancora Punta Cana Private Residence Yacht Club',
                    'stars'=>'4',
                    'img'=>'alsol-luxury-village',
                    'price'=>'300',
                    'resort_id'=>'85285',
                    'ihotelier_id'=>'2627349',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                1=>[
                    'name'=>'Del Mar By Joy Resorts',
                    'stars'=>'4',
                    'img'=>'del-mar',
                    'price'=>'354',
                    'resort_id'=>'86117',
                    'ihotelier_id'=>'2627301',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],
            'title_conditions'=>'Terms and conditions',
            'conditions'=>'
            
                <ul>
                <li>Resort Credit applies for AlSol hotels reservations, others are excluded</li>
                <li>When Booking Room Only in Luxury Village get 350 USD in Resort Credits</li>
                <li>4 nights minimum stay required</li>
                </ul>
            ',
        ],
    ],
    'code'=>'',
];