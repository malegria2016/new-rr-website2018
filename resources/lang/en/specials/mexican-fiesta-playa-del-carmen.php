<?php

return [
    'slug' => 'mexican-fiesta-playa-del-carmen',
    'title' => 'Mexican Fiesta : Playa del Carmen',
    'thumbnail' => asset('img/deals/mexican-fiesta-playa-del-carmen.jpg'),
    'expiration'=>'9/18/2018', // mm/dd/yyyy
    'minimo_noches'=>'3',
    'blackouts'=>[
        0=>[
            'inicio'=>'04/01/2019', // mm/dd/yyyy
            'fin'=>'12/31/2019', // mm/dd/yyyy
        ],
        
    ],
    'destino'=>'playa-del-carmen',
    'label_resort' => '',
    'title_seo' => 'Mexican Fiesta  Playa del Carmen!  | Royal Reservations',
    'alt_seo' => 'Mexican Fiesta  for Playa del Carmen Vacations!',
	'metadescription' => 'Hurry and take advantage of this Mexican Fiesta  only available for a few days! BOOK NOW AND GET A SPECIAL 47% OFF',
    'main_points' => [
        0=>'47% OFF',
        1=>'Children stay free',
        2=>'Free High-speed Wi-Fi',
        
    ],
    'label_color'=>'3', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'47% OFF', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            With this incredible Royal Reservations special offer you will live a simply unforgettable family vacation in Playa del Carmen! <br /><br />Take advantage of this incredible flash sale, available only for a few days, that Royal reservations brings for you and receive a super special discount of up to 47% when booking the suite of your choice in All Inclusive Plan at The Royal Haciendas beachfront resort. In addition, enjoy exclusive benefits like enjoying your vacation any time of this or the following year, as well as accommodations and free meals for children. Discover everything that Playa del Carmen has for you; relax, have fun and live the beautiful beaches of the Mexican Caribbean. <br /><br />Book now and enjoy the special benefits you will get when booking with Royal Reservations.
        </p>

    ',
    'rates'=>[
        0=>[
            'tab'=>'All Inclusive',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'ALL INCLUSIVE',
            'description'=>'
                        
                <ul>
                    <li>Special Discount</li>
                    <li>Unlimited meals &amp; drinks (surcharges apply for premium food &amp; beverages)</li>
                    <li>24 hours room service</li>
                    <li>Children up to 12 years old stay &amp; eat for free (using existing beds)</li>
                    <li>Free high speed Wi-Fi in rooms &amp; common areas</li>
                </ul>

                ',
            'resorts_area_title'=>'RESORTS ALL INCLUSIVE',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Haciendas',
                    'stars'=>'5',
                    'img'=>asset('img/resorts/deals/the-royal-haciendas.jpg'),
                    'price'=>'240',
                    'resort_id'=>'86184',
                    'ihotelier_id'=>'2808328',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],            

        ],
        
    ],
    'title_conditions'=>'Terms and conditions',
    'conditions'=>'
        <p>3 nights-stay minimum required</p>
        <p>Book from: Today to 9/18/2018</p>
        <p>Travel from: Today to 3/31/2019</p>
    ',
    'code'=>'',

    // ...  Añadir las keys necesarias para las internas
];