<?php

return [
    'slug' => 'mexican-fiesta-riviera-maya',
    'title' => 'Mexican Fiesta : Riviera Maya',
    'thumbnail' => asset('img/deals/mexican-fiesta-riviera-maya.jpg'),
    'expiration'=>'9/18/2018', // mm/dd/yyyy
    'minimo_noches'=>'3',
    'blackouts'=>[
        0=>[
            'inicio'=>'1/6/2019', // mm/dd/yyyy
            'fin'=>'12/31/2019', // mm/dd/yyyy
        ],
        
    ],
    'destino'=>'riviera-maya',
    'label_resort' => '',
    'title_seo' => 'Mexican Fiesta  for Riviera Maya Vacations! | Royal Reservations',
    'alt_seo' => 'Mexican Fiesta  for Riviera Maya Vacations!',
	'metadescription' => 'Royal Reservations has prepared a unique offer for you to live a luxury family vacation in Grand Residences Riviera Maya.',
    'main_points' => [
        0=>'Special Discount on your Reservation',

        
    ],
    'label_color'=>'', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            A luxury vacation awaits you at Grand Residences Riviera Cancun with this exclusive Royal Reservations flash sale. <br /><br />Discover that living a luxury family vacation in the Riviera Maya is very easy, with this excellent special promotion, available only for a few days, where you will receive a fabulous special discount when booking the suite of your choice in All Inclusive at Grand Residences luxury resort, and the great benefit of free accommodation for children. Experience the luxury family vacations that you have always wanted and enjoy the beautiful beaches of the Riviera Maya, the theme parks, the culture, gastronomy and natural beauties of this tourist destination of the Mexican Caribbean. <br /><br />Book today and do not let this promotion, valid for a limited time only, slip from your hands.
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
                    <li>High Speed Internet Access in rooms &amp; common areas</li>
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
        <p>3 nights-stay minimum required</p>
        <p>Book from: today to 9/18/2018</p>
        <p>Travel from: today to 1/04/2019</p>
    ',
    'code'=>'',

    // ...  Añadir las keys necesarias para las internas
];