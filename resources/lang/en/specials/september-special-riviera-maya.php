<?php

return [
    'slug' => 'september-special-riviera-maya',
    'title' => 'RIVIERA MAYA - September Special',
    'subtitle' => 'Travel dates between Today and January 4, 2019',
    'box_benefits'=>'Take advantage of the benefits of this special offer!',
    'thumbnail' => asset('img/deals/september-special-riviera-maya.jpg'),
    'expiration'=>'10/01/2018', // mm/dd/yyyy
    'minimo_noches'=>'3',
    'blackouts'=>[
        0=>['inicio'=>'01/05/2019','fin'=>'12/31/2020', ], // mm/dd/yyyy 
    ],
    'destino'=>'riviera-maya',
    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> Grand Residences Riviera Cancun</span>',
    'title_seo' => 'Riviera Maya Vacation Special Offer | Royal Reservations',
    'alt_seo' => 'Riviera Maya Vacation Special Offer',
	'metadescription' => 'Take advantage of this fabulous promotion and receive an unbeatable special discount on your reservation in All Inclusive, Bed & Breakfast or Room Only plans, a $200 USD Resort Credit and Free Premium transportation; children stay free!',
    'main_points' => [
        0=>'$200 USD Resort Credit',
        1=>'Premium Roundtrip Transfers',
        2=>'All Inclusive, Bed & Breakfast or Accommodation Only',
        
    ],
    'label_color'=>'', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Experience a luxury family vacation at Grand Residences Riviera Cancun and discover the natural wonders, idyllic beaches and blue sea of the Riviera Maya; have fun in the theme parks and with the amazing activities that this beautiful destination has for you and your family. Take advantage of this fabulous promotion and receive an unbeatable special discount on your reservation in All Inclusive, Bed &amp; Breakfast or Room Only plans, a $200 USD Resort Credit for food and beverages, Spa treatments, products from the Gourmet Food Market, and Free Premium transportation; children stay free!<br /><br />Book now and live a luxury family vacation in the Riviera Maya.
        </p>

    ',
    'rates'=>[
        0=>[
            'tab'=>'All Inclusive',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'ALL INCLUSIVE',
            'description'=>'
                        
                <ul>
                    <li>200 USD Resort credit</li>
                    <li>All Gourmet meals and snacks</li>
                    <li>Premium House Brand Beverages</li>
                    <li>Limitless 24 hours Room Full Service</li>
                    <li>Premium Roundtrip Airport transportation (Airport - Hotel - Airport)</li>
                    <li>Bottle of Tequila</li>
                    <li>Daily Fresh and Dried Fruits</li>
                    <li>Children up to 12 years old stay and eat free (using existing beds)</li>
                    <li>High-Speed Internet Access in rooms &amp; common areas<br /></li>
                </ul>

                ',
            'title_conditions'=>'Terms and conditions',
            'conditions'=>'
                <p>The Resort Credit is per reservation, and it can only be used within Grand Residences</p>
                <p>The Resort Credit can be used to redeem in food &amp; beverages, services at the Spa and products at the Gourmet Food Market</p>
                <p>This credit must not be considered as cash money</p>
                <p>This credit is valid only for this reservation and must be used in one single transaction at the moment of check out at the front desk, if not used it will not be available for future use and will not be refunded or transferred to other reservations. If the price of the product/service is higher than the value of the Credit, any remaining balance will be charged to the guest</p>
                <p>It cannot be combined with other promotions or discounts</p>
                <p>Book From: Today to 10/01/2018 Travel From: Today to 01/04/2019</p>
            ',
            'resorts_area_title'=>'All Inclusive Resorts',
            'resorts'=>[
                0=>[
                    'name'=>'Grand Residences',
                    'stars'=>'5',
                    'img'=>'grand-residences-riviera-cancun',
                    'price'=>'472',
                    'resort_id'=>'95939',
                    'ihotelier_id'=>'2959470',
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
                    <li>200 USD Resort credit</li>
                    <li>Premium Roundtrip Airport transportation (Airport - Hotel - Airport)</li>
                    <li>Bottle of Tequila</li>
                    <li>Daily Fresh and Dried Fruits</li>
                    <li>Children up to 12 years old stay free (using existing beds)</li>
                    <li>High-Speed Internet Access in rooms &amp; common areas<br /></li>
                </ul>

                ',
            'title_conditions'=>'Terms and conditions',
            'conditions'=>'
                <p>The Resort Credit is per reservation, and it can only be used within Grand Residences</p>
                <p>The Resort Credit can be used to redeem in food &amp; beverages, services at the Spa and products at the Gourmet Food Market</p>
                <p>This credit must not be considered as cash money</p>
                <p>This credit is valid only for this reservation and must be used in one single transaction at the moment of check out at the front desk, if not used it will not be available for future use and will not be refunded or transferred to other reservations. If the price of the product/service is higher than the value of the Credit, any remaining balance will be charged to the guest</p>
                <p>It cannot be combined with other promotions or discounts</p>
                <p>Book From: Today to 10/01/2018 Travel From: Today to 01/04/2019</p>
            ',
            'resorts_area_title'=>'Room Only Resorts',
            'resorts'=>[
                0=>[
                    'name'=>'Grand Residences',
                    'stars'=>'5',
                    'img'=>'grand-residences-riviera-cancun',
                    'price'=>'300',
                    'resort_id'=>'95939',
                    'ihotelier_id'=>'2959479',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],            

        ],
        2=>[
            'tab'=>'Bed & Breakfast',
            'icon'=>asset('img/img-specials/bed.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Bed & Breakfast',
            'description'=>'
                        
                <ul>
                    <li>200 USD Resort credit</li>
                    <li>Daily breakfast for confirmed guests</li>
                    <li>Premium Roundtrip Airport transportation (Airport - Hotel - Airport)</li>
                    <li>Bottle of Tequila</li>
                    <li>Daily Fresh and Dried Fruits</li>
                    <li>Children up to 12 years old stay and eat free breakfast with mom and dad (using existing beds)</li>
                    <li>High-Speed Internet Access in rooms &amp; common areas<br /></li>
                </ul>

                ',

            'title_conditions'=>'Terms and conditions',
            'conditions'=>'
                <p>The Resort Credit is per reservation, and it can only be used within Grand Residences</p>
                <p>The Resort Credit can be used to redeem in food &amp; beverages, services at the Spa and products at the Gourmet Food Market</p>
                <p>This credit must not be considered as cash money</p>
                <p>This credit is valid only for this reservation and must be used in one single transaction at the moment of check out at the front desk, if not used it will not be available for future use and will not be refunded or transferred to other reservations. If the price of the product/service is higher than the value of the Credit, any remaining balance will be charged to the guest</p>
                <p>It cannot be combined with other promotions or discounts</p>
                <p>Book From: Today to 10/01/2018 Travel From: Today to 01/04/2019</p>
            ',
            'resorts_area_title'=>'Bed & Breakfast Resorts',
            'resorts'=>[
                0=>[
                    'name'=>'Grand Residences',
                    'stars'=>'5',
                    'img'=>'grand-residences-riviera-cancun',
                    'price'=>'325',
                    'resort_id'=>'95939',
                    'ihotelier_id'=>'2959484',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],            

        ],
        
    ],
    'code'=>'',
];