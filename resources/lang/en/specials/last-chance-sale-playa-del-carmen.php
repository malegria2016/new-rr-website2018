<?php

return [
    'slug' => 'last-chance-sale-playa-del-carmen',
    'title' => 'PLAYA DEL CARMEN - Last Chance Sale',
    'thumbnail' => asset('img/deals/last-chance-sale-playa-del-carmen.jpg'),
    'expiration'=>'8/31/2018', // mm/dd/yyyy
    'minimo_noches'=>'',
    'blackouts'=>[
        0=>[
            'inicio'=>'04/01/2019', // mm/dd/yyyy
            'fin'=>'12/31/2019', // mm/dd/yyyy
        ],
        
    ],
    'destino'=>'playa-del-carmen',
    'title_seo' => 'Last Chance Sale to Travel to Playa del Carmen | Royal Reservations',
    'alt_seo' => 'Sale to Travel to Playa del Carmen',
	'metadescription' => 'Receive 44% discount on your reservation in The Royal Haciendas including a 150-dollar Resort Credit that applies to delicious meals, beverages, thrilling tours, spa treatments and Royal Market products.',
    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> The Royal Haciendas</span>',
    'main_points' => [
        0=>'44% OFF',
        1=>'$150 USD Resort Credit',
        2=>'All Inclusive Plan',
        3=>'Children stay free',
        4=>'Free High-speed Wi-Fi',   
    ],
    'label_color'=>'2', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'44% OFF', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Wake up to the summer breeze on your Playa del Carmen vacations and take advantage of the best Offer of the season! Receive 44% discount on your reservation in The Royal Haciendas including a 150-dollar Resort Credit that applies to delicious meals, beverages, thrilling tours, spa treatments and Royal Market products. Start planning your next family vacations in Playa del Carmen and enjoy all the perks of our All Inclusive Plan.
            Our Playa del Carmen beachfront resort offers incredible amenities and impeccable services for you and your family to enjoy: ample suites, infinity pools, kids clubs, activities and exquisite restaurants. Book the vacation you have been dreaming of sharing with your loved ones in this trendy destination and let us take care of all the details!
        </p>

    ',
    'rates'=>[
        0=>[
            'tab'=>'All Inclusive',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'ALL INCLUSIVE',
            'description'=>'
                        
                        <ul>
                            <li>$150 USD Resort Credit</li>
                            <li>Unlimited meals & drinks (surcharges apply for premium food & beverages)</li>
                            <li>24 hours room service</li>
                            <li>Children up to 12 years old stay & eat for free (using existing beds)</li>
                            <li>Free high-speed Wi-Fi in rooms & common areas</li>
                        </ul>

                ',
            'resorts_area_title'=>'RESORTS ALL INCLUSIVE',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Haciendas',
                    'stars'=>'5',
                    'img'=>'the-royal-haciendas',
                    'price'=>'230',
                    'resort_id'=>'86184',
                    'ihotelier_id'=>'2959369',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                
            ],            

        ],
        
    ],
    'title_conditions'=>'Terms and conditions',
    'conditions'=>'
        <ul>
            <li>The Resort Credit is per reservation, and it can only be applied at the Front Desk directly to your club bill upon check out.</li>
            <li>This Credit must not be considered as cash money.</li>
            <li>This Credit are valid only for this reservation and must be used in one single transaction each, if not used it will not be available for future use, will not be refunded or transferred to other reservations. When using this credit, if the price of the product/service paid with this credit is higher than the credit value, any remaining balance will have to be paid by the guest.</li>
            <li>This Credit cannot be combined with other promotions or discounts</li>
            <li>Book from <b>Today</b> to <b>08/31/2018</b></li>
            <li>Travel between <b>Today</b> to <b>03/31/2019</b></li>            
        </ul>
    ',
    'code'=>'',

    // ...  Añadir las keys necesarias para las internas
];