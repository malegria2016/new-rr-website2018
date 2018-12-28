<?php

return [
    'slug' => 'september-special-playa-del-carmen',
    'title' => 'PLAYA DEL CARMEN - September Special',
    'subtitle' => 'Travel dates between Today and January 3, 2020',
    'box_benefits'=>'Take advantage of the benefits of this special offer!',
    'thumbnail' => asset('img/deals/september-special-playa-del-carmen.jpg'),
    'expiration'=>'10/01/2018', // mm/dd/yyyy
    'minimo_noches'=>'4',
    'blackouts'=>[
        0=>[
            'inicio'=>'01/04/2020', // mm/dd/yyyy
            'fin'=>'12/31/2020', // mm/dd/yyyy
        ],
        
    ],
    'destino'=>'playa-del-carmen',
    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> The Royal Haciendas</span>',
    'title_seo' => 'Playa del Carmen Vacation Special Offer | Royal Reservations',
    'alt_seo' => 'Playa del Carmen Vacation Special Offer',
	'metadescription' => 'With this great special promotion you will get a great discount of 46% on your All Inclusive plan reservation, plus special benefits such as a $100 USD Tour Credit for you to use in exciting tours and services at the travel agency',
    'main_points' => [
        0=>'$100 USD Tour Credit',
        1=>'All Inclusive Plan',
        2=>'Children stay free',
        3=>'Free High-speed Wi-Fi',
        
    ],
    'label_color'=>'1', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'46% OFF', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Pack your suitcases, your sunglasses and swimsuit, and get ready to enjoy the sun, the beaches and its soft white sand, a delightful blue sea and entertaining activities like walking on the 5th Avenue of Playa del Carmen. With this great special promotion you will get a great discount of 46% on your All Inclusive plan reservation, plus special benefits such as a $100 USD Tour Credit for you to use in exciting tours and services at the travel agency, and the possibility to enjoy your vacations any time of this or the next year with free accommodation for children.&nbsp;<br />Book now with Royal Reservations and enjoy your family vacation at The Royal Haciendas beachfront resort!
        </p>

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
                    'name'=>'The Royal Haciendas',
                    'stars'=>'5',
                    'img'=>'the-royal-haciendas',
                    'price'=>'230',
                    'resort_id'=>'86184',
                    'ihotelier_id'=>'3045246',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],
        ],  
    ],

    'code'=>'',
];