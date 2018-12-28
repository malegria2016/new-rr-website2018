<?php

return [
    'alturaRateplan'=>'10',//8 líneas ó 10 líneas
	'metadescription' => 'Enjoy your family vacations in Cancun and take advantage of our All Inclusive Caribbean Villas discount',
	'alt_seo' => 'Cancun family vacations',
	'title_seo' => 'All Inclusive Caribbean Villas | Family Vacations',	
    'title' => 'PLAYA DEL CARMEN - All Inclusive Family Villa',
    'subtitle' => 'Travel dates between Today and January 4, 2020',
    'box_benefits'=>'Take advantage of the benefits of this special offer!',
    'slug' => 'all-inclusive-family-villa-special',
    'thumbnail' => asset('img/deals/all-inclusive-family-villa-special.jpg'),
    'expiration'=>'12/31/2018', // mm/dd/yyyy
    'destino'=>'cancun',
    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> The Royal Haciendas</span>',
    'main_points' => [
        0=>'40% OFF',
        1=>'All Inclusive',
        2=>'Children stay & eat free',
        3=>'Free High-speed WiFi',
    ],
    'label_color'=>'1', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'40% OFF', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Looking for an ample holiday home with great value for group travel with family or friends in Cancun or Playa del Carmen? The Royal Sands in Cancun and The Royal Haciendas in Playa del Carmen offer a selection of comfortable and beautifully appointed suites in a serene resort setting surrounded by stunning landscapes.
        </p>

    ',
    'rates'=>[
        0=>[
            'tab'=>'All Inclusive',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'All Inclusive Family Villa',
            'description'=>'
                        
                        <ul>
                            <li>All Meals And Beverages Included</li>
                            <li>Children eat and stay free</li>
                            <li>Free High speed WiFi Internet access</li>
                        </ul>

                ',
            'title_conditions'=>'Terms and conditions',
            'conditions'=>'
                <p>May be subject to a minimum nights stay according to each resort policies.</p>
            ',
            'resorts_area_title'=>'All Inclusive Resorts',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Sands',
                    'stars'=>'5',
                    'img'=>'the-royal-sands',
                    'price'=>'493',
                    'resort_id'=>'86169',
                    'ihotelier_id'=>'1788698',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                1=>[
                    'name'=>'The Royal Haciendas',
                    'stars'=>'5',
                    'img'=>'the-royal-haciendas',
                    'price'=>'480',
                    'resort_id'=>'86184',
                    'ihotelier_id'=>'1788733',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],
        ], 
    ],

    'blackouts'=>[
        0=>[ 'inicio'=>'01/05/2020','fin'=>'12/31/2020',],
    ],

    'minimo_noches'=>'1',
    'code'=>'',

];