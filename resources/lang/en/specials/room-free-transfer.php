<?php

return [
    'alturaRateplan'=>'8',//8 líneas ó 10 líneas
    'slug' => 'room-free-transfer',
    'title' => 'CANCUN - Room + Free Transfers',
    'subtitle' => 'Travel dates between October 30, 2018 and April 30, 2019',
    'box_benefits'=>'Take advantage of the benefits of this special offer!',
    'thumbnail' => asset('img/deals/room-free-transfer.jpg'),
    'expiration'=>'9/30/2018', // mm/dd/yyyy
    'minimo_noches'=>'3',
    'blackouts'=>[
        0=>[ 'inicio'=>'09/01/2018', 'fin'=>'10/29/2018', ], // mm/dd/yyyy
        1=>[ 'inicio'=>'05/01/2019', 'fin'=>'12/31/2019', ], // mm/dd/yyyy
        
    ],
    'destino'=>'cancun',
    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> The Royal Caribbean</span>',
    'title_seo' => 'The Royal Caribbean Resort in Cancun + Transfers | Royal Reservations',
    'alt_seo' => 'The Royal Caribbean Resort Offer',
	'metadescription' => 'Cancun beaches are within your grasp with our travel combo with an amazing 50% discount plus an additional 10% when booking the suite of your choice at The Royal Caribbean Resort, plus get free roundtrip airport transportation.',
    'main_points' => [
        0=>'50% + 10% OFF on Rack Rate',
        1=>'Free Roundtrip Transfers',
        2=>'Bed & Breakfast or Accommodation Only',
        3=>'Starting at $94 USD per night',
        
    ],
    'label_color'=>'1', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'NEW', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Cancun beaches are within your grasp with our travel combo with an amazing 50% discount plus an additional 10% on Rack Rate when booking the suite of your choice at The Royal Caribbean Resort, plus get free roundtrip airport transportation. Start living dreamy days in the freedom of the ocean landscapes and white sand dunes, chilling out, swimming, kayaking, or simply enjoying your favorite cocktail down the shade of a palm tree.
            Our beautiful beachfront resort is ideal for families and couple yearning for a peaceful getaway. Besides, the perfect scenario in Cancun holds not only our pristine paradise, but many other interesting places and attractions, such as theme parks, nightclubs, aquariums, restaurants and much more. Enjoy impeccable facilities, services and top-notch amenities at The Royal Caribbean All Suites Resort with Royal Reservations.
        </p>

    ',
    'rates'=>[
        0=>[
            'tab'=>'Room only',
            'icon'=>asset('img/img-specials/bed.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Room only',
            'description'=>'
                        
                        <ul>
                            <li>50% off + additional 10% discount on Rack Rate</li>
                            <li>Free roundtrip airport transportation</li>
                            <li>Children up to 12 years old stay for free using existing beds</li>
                            <li>Free high speed Wi-Fi in rooms & common areas</li>
                        </ul>

                ',
            'title_conditions'=>'Terms and conditions',
            'conditions'=>'
                <ul>
                    <li>This promotion includes a free roundtrip airport transportation (airport - hotel - airport) per person confirmed in your confirmation letter</li>
                    <li>Service will be provided in shared service</li>
                    <li>The transportation service is available for flights arriving from 5am to 11:59pm & flights leaving 7am to 9pm</li>
                    <li>Service must be confirmed at least 48 hours before arrival, otherwise will not be possible to guarantee</li>
                    <li>This promotion does not include meals or drinks</li>
                    <li>Book from <b>Today</b> to <b>09/30/2018</b></li>
                    <li>Travel between <b>10/30/2018</b> to <b>04/30/2019</b></li>
                    <li>3 night of stay is required for this offer.</li>
                </ul>
            ',
            'resorts_area_title'=>'Room Only Resorts',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Caribbean',
                    'stars'=>'4',
                    'img'=>'the-royal-caribbean',
                    'price'=>'94',
                    'resort_id'=>'86175',
                    'ihotelier_id'=>'3021205',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],
        ],
    ],
    'code'=>'',
];