<?php

return [
    'alturaRateplan'=>'8',//8 líneas ó 10 líneas
    'slug' => 'stay-longer',
    'title' => 'CANCUN - Stay 14+ nights and Save!',
    'subtitle' => 'Travel dates between October 30, 2018 and April 30, 2019',
    'box_benefits'=>'Take advantage of the benefits of this special offer!',
    'thumbnail' => asset('img/deals/stay-longer.jpg'),
    'expiration'=>'9/30/2018', // mm/dd/yyyy
    'minimo_noches'=>'14',
    'blackouts'=>[
        0=>[ 'inicio'=>'09/01/2018','fin'=>'10/29/2018',], // mm/dd/yyyy
        1=>[ 'inicio'=>'05/01/2019','fin'=>'12/31/2019',], // mm/dd/yyyy  
    ],
    'destino'=>'cancun',
    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> The Royal Caribbean</span>',
    'title_seo' => 'The Royal Caribbean Resort in Cancun | Royal Reservations',
    'alt_seo' => 'The Royal Caribbean Resort Offer for long stays',
	'metadescription' => 'Book a long stay and receive 50% discount on your reservation plus free airport transfers. Besides, you will receive an additional 15% OFF (staying 14 nights or more) or 30% OFF (staying 30 nights or more).',
    'main_points' => [
        0=>'+14 nights = 50% + 15% OFF on Rack Rate',
        1=>'Free Roundtrip Transfers',   
    ],
    'label_color'=>'1', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'NEW', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            The Royal Caribbean is your best beachfront resort option; ideal for travelers looking for peaceful sunny days facing the turquoise Caribbean waters. Our services and incredible amenities are everything you will need. Besides, Cancun is a multifaceted destination with a lot of activities and attractions.
            Because when you are on vacation your days are never enough. Come to the Mexican Caribbean and reconnect with nature and your loved ones with this Special promo for long stays! Book your 14-night or more stay and choose between getting accommodation only or room plus breakfasts and receive 50% discount on your reservation plus free airport transfers and an additional 15% off on top of the base discount. Book now and travel anytime! Start enjoying your beach vacations right now!
        </p>

    ',
    'rates'=>[
        0=>[
            'tab'=>'Room only',
            'icon'=>asset('img/img-specials/bed.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Room only',
            'description'=>'
                        
                        <ul>
                            <li>50% off + up to an additional 30% discount on Rack Rate</li>
                            <li>Free roundtrip airport transportation</li>
                            <li>Children up to 12 years old stay for free using existing beds</li>
                            <li>Free high speed Wi-Fi in rooms & common areas</li>
                        </ul>

                ',
            'title_conditions'=>'Terms and conditions',
            'conditions'=>'
                <ul>
                    <li>Stays with a length between 14 and up to 29 nights will receive an additional 15% discount on top of the 50% base discount</li>
                    <li>Stays with a length of 30 nights or more will receive an additional 30% discount on top of the 50% base discount</li>
                    <li>This promotion includes a free roundtrip airport transportation (airport - hotel - airport) per person confirmed in your confirmation letter</li>
                    <li>Service will be provided in shared service</li>
                    <li>The transportation service is available for flights arriving from 5am to 11:59pm & flights leaving 7am to 9pm</li>
                    <li>Service must be confirmed at least 48 hours before arrival, otherwise will not be possible to guarantee</li>
                    <li>This promotion does not include meals or drinks, however, only when booking Bed & Breakfast, the promotion will include a daily buffet breakfast per person confirmed in your confirmation letter. Any additional meals or drinks will have a additional cost</li>
                    <li>Book from <b>Today</b> to <b>09/30/2018</b></li>
                    <li>Travel between <b>10/30/2018</b> to <b>04/30/2019</b></li>             
                </ul>
            ',                
            'resorts_area_title'=>'Room Only Resorts',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Caribbean',
                    'stars'=>'4',
                    'img'=>'the-royal-caribbean',
                    'price'=>'89',
                    'resort_id'=>'86175',
                    'ihotelier_id'=>'3021317',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                    'adicional'=>'Stay 14 nights or more and save!', // etiqueta temporal en el caribbean
                ],
                
            ],            
        ],
        1=>[
            'tab'=>'Bed & Breakfast',
            'icon'=>asset('img/img-specials/b_b.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Bed & Breakfast',
            'description'=>'
                        
                        <ul>
                            <li>50% off + up to an additional 30% discount on Rack Rate</li>
                            <li>Daily daily buffet breakfast for all confirmed guest</li>
                            <li>Free roundtrip airport transportation</li>
                            <li>Children up to 12 years old stay for free using existing beds</li>
                            <li>Free high speed Wi-Fi in rooms & common areas</li>
                        </ul>

                ',
            'title_conditions'=>'Terms and conditions',
            'conditions'=>'
                <ul>
                    <li>Stays with a length between 14 and up to 29 nights will receive an additional 15% discount on top of the 50% base discount</li>
                    <li>Stays with a length of 30 nights or more will receive an additional 30% discount on top of the 50% base discount</li>
                    <li>This promotion includes a free roundtrip airport transportation (airport - hotel - airport) per person confirmed in your confirmation letter</li>
                    <li>Service will be provided in shared service</li>
                    <li>The transportation service is available for flights arriving from 5am to 11:59pm & flights leaving 7am to 9pm</li>
                    <li>Service must be confirmed at least 48 hours before arrival, otherwise will not be possible to guarantee</li>
                    <li>This promotion does not include meals or drinks, however, only when booking Bed & Breakfast, the promotion will include a daily buffet breakfast per person confirmed in your confirmation letter. Any additional meals or drinks will have a additional cost</li>
                    <li>Book from <b>Today</b> to <b>09/30/2018</b></li>
                    <li>Travel between <b>10/30/2018</b> to <b>04/30/2019</b></li>             
                </ul>
            ',
            'resorts_area_title'=>'Bed & Breakfast Resorts',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Caribbean',
                    'stars'=>'4',
                    'img'=>'the-royal-caribbean',
                    'price'=>'113',
                    'resort_id'=>'86175',
                    'ihotelier_id'=>'3021321',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                    'adicional'=>'Stay 14 nights or more and save!', // etiqueta temporal en el caribbean
                ],
                
                
            ],            

        ],
        
    ],

    'code'=>'',
];