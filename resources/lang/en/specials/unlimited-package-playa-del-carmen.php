<?php

return [
	'metadescription' => 'With Royal Reservations you and your family will experience an unforgettable vacation in  Playa del Carmen!',
	'alt_seo' => 'Playa del Carmen: Unlimited Package',
	'title_seo' => 'Playa del Carmen: Unlimited Package',	
    'title' => 'Playa del Carmen: Unlimited Package',
    'slug' => 'unlimited-package-playa-del-carmen',
    'thumbnail' => asset('img/deals/unlimited-package-playa-del-carmen.jpg'),
    'expiration'=>'07/02/2018', // mm/dd/yyyy
    'destino'=>'playa-del-carmen',
    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> The Royal Haciendas</span>',
    'main_points' => [
        0=>'100 USD Resort Credit',
        1=>'50 USD Tour Credit',
        2=>'Free Transfers',
        
    ],
    'label_color'=>'2', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'44', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            You and your beloved ones will live a unique family vacation in Playa del Carmen enjoying the sea and the beautiful beaches of this incredible vacation destination. Also, by taking advantage of this fabulous promotion, you will receive a super discount of up to 44% on your All Inclusive vacation, which also includes round trip airport transportation and 150 USD in Resort Credits for you to use in exciting tours, relaxing massages in our Spa and products from The Royal Market.
        </p>

    ',
    'rates'=>[
        0=>[
            'tab'=>'All Inclusive',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'All Inclusive',
            'description'=>'
                        
                <ul>
                    <li>Free roundtrip airport transportation for all (Shared Service)</li>
                    <li>150 USD in Resort Credits divided by:</li>
                    <ul>
                        <li>100 USD Resort Credit</li>
                        <li>50 USD Tour Credit</li>
                    </ul>
                    <li>Unlimited meals & drinks (surcharges apply for premium food & beverages)</li>
                    <li>24 hours room service</li>
                    <li>Children up to 12 years old stay & eat for free (using existing beds)</li>
                    <li>Free high speed Wi-Fi in rooms & common areas</li>
                </ul>

                ',
            'resorts_area_title'=>'RESORTS ALL INCLUSIVE',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Haciendas All Suites Resort & Spa',
                    'stars'=>'5',
                    'img'=>asset('img/resorts/deals/the-royal-haciendas.jpg'),
                    'price'=>'230',
                    'resort_id'=>'86184',
                    'ihotelier_id'=>'2880592',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                
            ],            

        ],
        
    ],
    'title_conditions'=>'Terms and conditions',
    'conditions'=>'
        <p>The Tour Credit and the Resort Credit are per reservation</p>
        <p>The Tour Credit and the Resort Credit must not be considered as cash money.</p>
        <p>These Credits cannot be combined with other promotions or discounts.</p>
    ',

    'blackouts'=>[
        0=>[
            'inicio'=>'07/03/2018',
            'fin'=>'31/12/2019',
        ],
        
    ],
    'minimo_noches'=>'',
    'code'=>'',

    // ...  Añadir las keys necesarias para las internas
];