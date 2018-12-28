<?php

return [
    'alturaRateplan'=>'8',//8 líneas ó 10 líneas
    'slug' => 'room-free-breakfast',
    'title' => 'CANCUN - Room + Free Breakfast',
    'subtitle' => 'Travel dates between October 30, 2018 and January 3, 2020',
    'box_benefits'=>'Take advantage of the benefits of this special offer!',
    'thumbnail' => asset('img/deals/room-free-breakfast.jpg'),
    'expiration'=>'9/30/2018', // mm/dd/yyyy
    'minimo_noches'=>'3',
    'blackouts'=>[
        0=>[ 'inicio'=>'09/01/2018', 'fin'=>'10/29/2018', ],// mm/dd/yyyy
        1=>[ 'inicio'=>'01/04/2020', 'fin'=>'12/31/2020', ],// mm/dd/yyyy
    ],
    'destino'=>'cancun',
    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> The Royal Caribbean</span>',
    'title_seo' => 'The Royal Caribbean Resort in Cancun + Breakfasts | Royal Reservations',
    'alt_seo' => 'The Royal Caribbean Resort Special',
	'metadescription' => 'The Royal Caribbean Resort in Cancun + Breakfasts | Royal Reservations',
    'main_points' => [
        0=>'50% + 10% OFF on Rack Rate',
        1=>'Free Breakfast for all',
        2=>'Bed & Breakfast or Accommodation Only',
        3=>'Starting at $94 USD per night',
    ],
    'label_color'=>'1', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'NEW', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            This incredible vacation deal will take you to discover the beautiful white sand beaches of Cancun. Bathe in the blue of the ocean and have fun with water and land activities, taste the delicious Mexican and international cuisine, and learn about the culture of the destination. Make the most of your vacations with this promotion and receive a special discount of 50% plus an additional 10% on Rack Rate when booking the suite of your choice at The Royal Caribbean, a beachfront family resort in Cancun, including daily buffet breakfast all suite guest.
            Book now and travel anytime and experience the perfect beach family vacations with Royal Reservations!
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
                            <li>Free daily buffet breakfast for all confirmed guest
                            <li>Children up to 12 years old stay (using existing beds) & eat breakfast for free with Mom & Dad
                            <li>Free high speed Wi-Fi in rooms & common areas
                        </ul>

            ',
            'title_conditions'=>'Terms and conditions',
            'conditions'=>'
            <ul>
                <li>This promotion includes a daily buffet breakfast per person confirmed in your confirmation letter.</li>
                <li>Additional meals and drinks will have an additional charge.</li>
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