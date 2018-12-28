<?php

return [
    'slug' => 'september-special-cancun',
    'title' => 'CANCUN - September Special',
    'subtitle' => 'Travel dates between Today and January 3, 2020',
    'box_benefits'=>'Take advantage of the benefits of this special offer!',
    'thumbnail' => asset('img/deals/september-special-cancun.jpg'),
    'expiration'=>'10/01/2018', // mm/dd/yyyy
    'minimo_noches'=>'4',
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'01/04/2020','fin'=>'12/01/2021',],// mm/dd/yyyy   10/01/2018	
    ],
    'destino'=>'cancun',
    'label_resort' => '',
    'title_seo' => 'Cancun Vacation Special Offer | Royal Reservations',
    'alt_seo' => 'Cancun Vacation Special Offer',
	'metadescription' => 'Take advantage of this promotion and get a discount of up to 46% on your reservation, a $100 USD Tour Credit for tours and services at the travel agency. Book now and enjoy your family vacation to Cancun with Royal Reservations',
    'main_points' => [
        0=>'$100 USD Tour Credit',
        1=>'All Inclusive or Accommodation Only',
        2=>'Children stay free',
        
    ],
    'label_color'=>'1', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'46% OFF', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Start the month by telling your friends and family that you are going on vacation to Cancun. With this incredible holiday offer, your family vacations dreamed of in this tropical paradise will be a reality. You will enjoy the beauty of its blue sea and the breathtaking beaches of the Mexican Caribbean. Take advantage of this promotion and get a discount of up to 46% on your reservation in All Inclusive or European Plan, a $100 USD Tour Credit for tours and services at the travel agency; all this enjoying your vacation any date of this or the next year, besides kids stay for free. Book now and enjoy your family vacation to Cancun with Royal Reservations
        </p>
        <ul>
            <li>All Inclusive applies at the Royal Cancun and The Royal Sands</li>
            <li>Room Only applies at The Royal Caribbean &amp; The Royal Islander</li>
        </ul>

    ',
    'rates'=>[
        0=>[
            'tab'=>'All Inclusive',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'ALL INCLUSIVE',
            'description'=>'
                        
                    <ul>
                        <li>100 USD Tour Credit</li>
                        <li>Unlimited meals &amp; drinks (surcharges apply for premium food &amp; beverages)</li>
                        <li>24 hours room service</li>
                        <li>Children up to 12 years old stay &amp; eat for free (using existing beds)</li>
                        <li>Free high speed Wi-Fi in rooms &amp; common areas</li>
                    </ul>

                ',
            'title_conditions'=>'Terms and conditions',
            'conditions'=>'
                <p>The Tour Credit is per reservation, and it can only be redeemed at the Thomas More Travel Agency for tours and activities.</p>
                <p>A mandatory 16% service fee applies when using this credit; this fee will be based on the amount of the credit utilized at the time of redemption and must be paid by the guest.</p>
                <p>The Tour Credit must not be considered as cash money.</p>
                <p>The Tour Credit is valid only for this reservation and must be used in one single transaction directly at the travel agency, if not used it will not be available for future use, it will not be refunded or transferred to other reservations, and it will not be valid at the front desk. If the price of the product/service paid with this credit is higher than the credit value, any remaining balance will be charged to the guest room bill.</p>
                <p>The Tour Credit cannot be combined with other promotions or discounts</p>
                <p>Book From: Today to 10/01/2018 Travel From: Today to 01/03/2020</p>
            ',
            'resorts_area_title'=>'All Inclusive Resorts',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Sands',
                    'stars'=>'5',
                    'img'=>'the-royal-sands',
                    'price'=>'240',
                    'resort_id'=>'86169',
                    'ihotelier_id'=>'3045130',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                1=>[
                    'name'=>'The Royal Cancun',
                    'stars'=>'5',
                    'img'=>'the-royal-cancun',
                    'price'=>'369',
                    'resort_id'=>'73601',
                    'ihotelier_id'=>'3044863',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                
            ],            

        ],
        1=>[
            'tab'=>'Room only',
            'icon'=>asset('img/img-specials/bed.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Room only',
            'description'=>'
                        
                    <ul>
                        <li>100 USD Tour Credit</li>
                        <li>Children up to 12 years old stay (using existing beds)</li>
                        <li>Free high speed Wi-Fi in rooms &amp; common areas</li>
                    </ul>

                ',
            'title_conditions'=>'Terms and conditions',
            'conditions'=>'
                <p>The Tour Credit is per reservation, and it can only be redeemed at the Thomas More Travel Agency for tours and activities.</p>
                <p>A mandatory 16% service fee applies when using this credit; this fee will be based on the amount of the credit utilized at the time of redemption and must be paid by the guest.</p>
                <p>The Tour Credit must not be considered as cash money.</p>
                <p>The Tour Credit is valid only for this reservation and must be used in one single transaction directly at the travel agency, if not used it will not be available for future use, it will not be refunded or transferred to other reservations, and it will not be valid at the front desk. If the price of the product/service paid with this credit is higher than the credit value, any remaining balance will be charged to the guest room bill.</p>
                <p>The Tour Credit cannot be combined with other promotions or discounts</p>
                <p>Book From: Today to 10/01/2018 Travel From: Today to 01/03/2020.</p>
            ',
            'resorts_area_title'=>'Room Only Resorts',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Caribbean',
                    'stars'=>'4',
                    'img'=>'the-royal-caribbean',
                    'price'=>'111',
                    'resort_id'=>'86175',
                    'ihotelier_id'=>'3045337',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                1=>[
                    'name'=>'The Royal Islander',
                    'stars'=>'4',
                    'img'=>'the-royal-islander',
                    'price'=>'122',
                    'resort_id'=>'86182',
                    'ihotelier_id'=>'3045290',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],
        ],
    ],
    'code'=>'',
];