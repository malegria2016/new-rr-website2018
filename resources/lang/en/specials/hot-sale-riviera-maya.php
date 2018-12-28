<?php

return [
    'slug' => 'hot-sale-riviera-maya',
    'title' => 'Hot Sale: Riviera Maya',
    'thumbnail' => asset('img/deals/hot-sale-riviera-maya.jpg'),
    'expiration'=>'30/07/2018', // mm/dd/yyyy
    'minimo_noches'=>'3',
    'blackouts'=>[
        0=>[
            'inicio'=>'01/05/2019', // mm/dd/yyyy
            'fin'=>'12/31/2019', // mm/dd/yyyy
        ],
        
    ],
    'destino'=>'riviera-maya',
    'title_seo' => 'Hot Sale for Riviera Maya Vacations!',
    'alt_seo' => 'Hot Sale for Riviera Maya Vacations!',
	'metadescription' => 'Royal Reservations has prepared a unique offer for you to live a luxury family vacation in Grand Residences Riviera Maya.',
    'label_resort' => '',
    'main_points' => [
        0=>'Special Discount on your Reservation',
        
    ],
    'label_color'=>'', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Spend a luxury family vacation in the Riviera Maya with this Hot Sale that Royal Reservations is bringing to you.
            Any reason is good to live the best luxury vacation on the beach, and with our Hot Sale, we will give you more than a reason to take advantage of this unique offer in which you will enjoy splendid amenities and activities within the luxurious facilities of Grand Residences Riviera Cancun, Book now and you will receive a great 45% discount when booking your All Inclusive suite or villa, Accommodation Only or Bed & Breakfast plans, as well as benefits like Premium round airport transportation and the possibility to stay at the resort any time of the year.
            Book now this amazing offer and start planning your vacation at a luxury family resort on the Riviera Maya, with Royal Reservations
        </p>

    ',
    'rates'=>[
        0=>[
            'tab'=>'All Inclusive',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'ALL INCLUSIVE',
            'description'=>'
                        
                        <ul>
                            <li>Special Discount on your Reservation</li>
                            <li>All Gourmet meals and snacks</li>
                            <li>Premium House Brand Beverages</li>
                            <li>Limitless 24 hours Room Full Service</li>
                            <li>Premium Roundtrip Airport transportation (Airport - Hotel - Airport)</li>
                            <li>Bottle of Tequila</li>
                            <li>Daily Fresh and Dried Fruits</li>
                            <li>Children up to 12 years old stay and eat free (using existing beds)</li>
                            <li>High Speed Internet Access in rooms & common areas</li>
                        </ul>

                ',
            'resorts_area_title'=>'RESORTS ALL INCLUSIVE',
            'resorts'=>[
                0=>[
                    'name'=>'Grand Residences',
                    'stars'=>'5',
                    'img'=>asset('img/resorts/deals/grand-residences-riviera-cancun.jpg'),
                    'price'=>'444',
                    'resort_id'=>'95939',
                    'ihotelier_id'=>'2808347',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                
            ],            

        ],
        
    ],
    'title_conditions'=>'Terms and conditions',
    'conditions'=>'
        3 nights-stay minimum required
    ',
    'code'=>'',

    // ...  Añadir las keys necesarias para las internas
];