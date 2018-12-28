<?php

return [
    'alturaRateplan'=>'8',//8 líneas ó 10 líneas
    'slug' => 'early-winter-cancun',
    'title' => 'CANCUN - Early Winter',
    'subtitle' => 'Travel dates between November 25, 2018 and March 20, 2019',
    'box_benefits'=>'Take advantage of the benefits of this special offer!',
    'thumbnail' => asset('img/deals/early-winter-cancun.jpg'),
    'expiration'=>'10/31/2018', // mm/dd/yyyy
    'minimo_noches'=>'4',
    'blackouts'=>[
        0=>[ 'inicio'=>'09/01/2018','fin'=>'11/24/2018', ],// mm/dd/yyyy
        1=>[ 'inicio'=>'03/21/2019','fin'=>'12/31/2019', ],// mm/dd/yyyy  
    ],
    'destino'=>'cancun',
    'label_resort' => '',
    'title_seo' => 'Winter Vacations in Cancun | Royal Reservations',
    'alt_seo' => 'Winter Vacations in Cancun',
	'metadescription' => 'Experience the best of Cancun, by booking the suite of your choice, and receive a great discount of up to 44% on your reservation, as well as fabulous benefits like free accommodations for kids, and a $150 USD Spa Credit.',
    'main_points' => [
        0=>'$150 USD Spa Credit',
        1=>'All Inclusive or Accommodation Only',
        2=>'Children stay free',
        
    ],
    'label_color'=>'1', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'46% OFF', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            At Royal Reservations we know that it is never too soon to start planning an amazing vacation and more if you try to flee the winter, that\'s why we created this wonderful special offer so that you can live a warm winter family vacation in the beautiful beaches of Cancun. Experience the best of this destination in the Mexican Caribbean, it\'s entertaining activities and attractions, etc., by booking the suite of your choice, and receive a great discount of up to 44% on your All Inclusive or European Plan reservation, as well as fabulous benefits like free accommodations for kids, and a $150 USD Spa Credit to spend in massages and wellness treatments. <br /><br />Book now and enjoy your unforgettable winter family holidays! <br /><br />All Inclusive applies at the Royal Cancun and The Royal Sands <br />Room Only applies at The Royal Caribbean &amp; The Royal Islander
        </p>

    ',
    'rates'=>[
        0=>[
            'tab'=>'All Inclusive',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'ALL INCLUSIVE',
            'description'=>'
                        
                <ul>
                    <li>150 USD Spa Credit</li>
                    <li>Unlimited meals &amp; drinks (surcharges apply for premium food &amp; beverages)</li>
                    <li>24 hours room service</li>
                    <li>Children up to 12 years old stay &amp; eat for free (using existing beds)</li>
                    <li>Free high speed Wi-Fi in rooms &amp; common areas</li>
                </ul>

                ',
            'title_conditions'=>'Terms and conditions',
            'conditions'=>'
                <p>The Spa Credit is per reservation, and it can only be redeemed at the Spa for massages and wellness treatments.</p>
                <p>A mandatory 16% service fee applies when using this credit; this fee will be based on the amount of the credit utilized at the time of redemption and must be paid by the guest.</p>
                <p>The Spa Credit must not be considered as cash money.</p>
                <p>The Spa Credit is valid only for this reservation and must be used in one single transaction directly at the Spa, if not used it will not be available for future use, it will not be refunded or transferred to other reservations, and it will not be valid at the front desk. If the price of the product/service paid with this credit is higher than the credit value, any remaining balance will be charged to the guest room bill.</p>
                <p>The Spa Credit cannot be combined with other promotions or discounts.</p>
                <p>Book From: Today to 10/31/2018 Travel From: 11/25/2018 to 03/20/2019</p>
            ',
            'resorts_area_title'=>'All Inclusive Resorts',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Sands',
                    'stars'=>'5',
                    'img'=>'the-royal-sands',
                    'price'=>'240',
                    'resort_id'=>'86169',
                    'ihotelier_id'=>'3043132',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                1=>[
                    'name'=>'The Royal Cancun',
                    'stars'=>'5',
                    'img'=>'the-royal-cancun',
                    'price'=>'369',
                    'resort_id'=>'73601',
                    'ihotelier_id'=>'3043096',
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
                    <li>150 USD Spa Credit</li>
                    <li>Children up to 12 years old stay (using existing beds)</li>
                    <li>Free high speed Wi-Fi in rooms &amp; common areas<br /></li>
                </ul>

                ',
            'title_conditions'=>'Terms and conditions',
            'conditions'=>'
                <p>The Spa Credit is per reservation, and it can only be redeemed at the Spa for massages and wellness treatments.</p>
                <p>A mandatory 16% service fee applies when using this credit; this fee will be based on the amount of the credit utilized at the time of redemption and must be paid by the guest.</p>
                <p>The Spa Credit must not be considered as cash money.</p>
                <p>The Spa Credit is valid only for this reservation and must be used in one single transaction directly at the Spa, if not used it will not be available for future use, it will not be refunded or transferred to other reservations, and it will not be valid at the front desk. If the price of the product/service paid with this credit is higher than the credit value, any remaining balance will be charged to the guest room bill.</p>
                <p>The Spa Credit cannot be combined with other promotions or discounts.</p>
                <p>Book From: Today to 10/31/2018 Travel From: 11/25/2018 to 03/20/2019</p>
            ',
            'resorts_area_title'=>'Room Only Resorts',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Caribbean',
                    'stars'=>'4',
                    'img'=>'the-royal-caribbean',
                    'price'=>'111',
                    'resort_id'=>'86175',
                    'ihotelier_id'=>'3043201',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                1=>[
                    'name'=>'The Royal Islander',
                    'stars'=>'4',
                    'img'=>'the-royal-islander',
                    'price'=>'122',
                    'resort_id'=>'86182',
                    'ihotelier_id'=>'3043188',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                
            ],            

        ],
        
    ],

    'code'=>'',
];