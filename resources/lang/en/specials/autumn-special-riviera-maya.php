<?php

return [
    'alturaRateplan'=>'10',//8 líneas ó 10 líneas
    'slug' => 'autumn-special-riviera-maya',
    'thumbnail' => asset('img/deals/autumn-special-riviera-maya.jpg'),
    'title' => 'Riviera Maya: Autumn Special',
    'expiration'=>'11/05/2018', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'01/04/2019','fin'=>'12/31/2021', ], // mm/dd/yyyy
    ],
    'minimo_noches'=>'3',
    'destino'=>'riviera-maya', //cancun, riviera-maya, playa-del-carmen, sint-maarten, curacao, punta-cana

    'subtitle' => 'Book Now and Travel from Today to January 4th, 2019!',
    'box_benefits'=>'Take advantage of this fabulous promotion and Book Now!',
    'title_seo' => 'Riviera Maya Vacation Special Offer | Royal Reservations',
    'alt_seo' => 'Riviera Maya Vacation Special Offer',
	'metadescription' => 'Take advantage of this fabulous promotion and receive an unbeatable special discount on your reservation in All Inclusive or Room Plus Breakfast plans, a $100 USD Resort Credit and Free Premium transportation; children stay free!',

    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> Grand Residences Riviera Cancun</span>',
    'main_points' => [
        0=>'$100 USD Resort Credit',
        1=>'Premium Roundtrip Transfers',
        2=>'All Inclusive or Room Plus Breakfast plans',
        
    ],
    'label_color'=>'', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Choose between our All Inclusive or Room Plus Breakfast Plans to enjoy the beautiful natural destination of the Riviera Maya, located in the Yucatan Peninsula by the Mexican Caribbean coastlines. You will find everything you need in our luxury resort Grand Residences Riviera Cancun, ideal for families, couples or friends.<br />Book today and receive a Premium Gift Basket, 100 dollars of Resort Credit to be enjoyed on gourmet dishes, top shelf beverages, relaxing massages and various products of the Gourmet Food Market. Also, get a Complimentary round-trip transportation to and from Cancun International Airport. The little ones are free to stay in our resort with no additional charge!<br />Live some unbeatable vacations in the luxury of our resort in the Riviera Maya and cherish every moment!
        </p>
        

    ',
    'rates'=>[
        0=>[
            'tab'=>'All Inclusive',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'ALL INCLUSIVE',
            'description'=>'
                        
                    <ul>
                        <li>100 USD Resort Credit per Reservation</li>
                        <li>Premium gift basket</li>
                        <li>All Gourmet meals and snacks</li>
                        <li>Premium House Brand Beverages</li>
                        <li>Limitless 24 hours Room Full Service</li>
                        <li>Premium Roundtrip Airport transportation (Airport - Hotel - Airport)</li>
                        <li>Bottle of Tequila</li>
                        <li>Daily Fresh and Dried Fruits</li>
                        <li>Children up to 12 years old stay and eat free (using existing beds)</li>
                        <li>High Speed Internet Access in rooms &amp; common areas</li>
                    </ul>

                ',
            'resorts_area_title'=>'All Inclusive Resorts',
            'resorts'=>[
                0=>[
                    'name'=>'Grand Residences',
                    'stars'=>'5',
                    'img'=>'grand-residences-riviera-cancun',
                    'price'=>'423',
                    'resort_id'=>'95939',
                    'ihotelier_id'=>'3355756',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],
            'title_conditions'=>'Terms and conditions',
            'conditions'=>'
                    <ul>
                        <li>The Resort Credit must not be considered as cash money.</li>
                        <li>The Resort Credit is per reservation, and it can only be redeemed at the front desk upon check out, it can be applied against charges from the spa, restaurants and bars and the Gourmet Food Market, if not used it will not be available for future use, it will not be refunded or transferred to other reservations, and it will not be valid at the front desk. If the price of the product/service paid with this credit is higher than the credit value, any remaining balance will be charged to the guest room bill.</li>
                        <li>The Resort Credit cannot be combined with other promotions or discounts.</li>
                        <li>This promotion includes a complimentary Premium roundtrip airport transportation (airport - hotel - airport)</li>
                    </ul>
            ',
        ],
        1=>[
            'tab'=>'Room only',
            'icon'=>asset('img/img-specials/bed.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Room only',
            'description'=>'
                        
                    <ul>
                        <li>Special Discount on your Reservation</li>
                        <li>100 USD Resort Credit per Reservation</li>
                        <li>Daily breakfast for all paid occupants</li>
                        <li>Premium gift basket</li>
                        <li>Premium Roundtrip Airport transportation (Airport Hotel Airport)</li>
                        <li>Bottle of Tequila</li>
                        <li>Daily Fresh and Dried Fruits</li>
                        <li>Children up to 12 years old stay free (using existing beds)</li>
                        <li>High Speed Internet Access in rooms &amp; common areas</li>
                    </ul>

                ',            
            'resorts_area_title'=>'Room Only Resorts',
            'resorts'=>[
                0=>[
                    'name'=>'Grand Residences',
                    'stars'=>'5',
                    'img'=>'grand-residences-riviera-cancun',
                    'price'=>'261',
                    'resort_id'=>'95939',
                    'ihotelier_id'=>'3355765',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                
            ],
            'title_conditions'=>'Terms and conditions',
            'conditions'=>'
            
                    <ul>
                        <li>The Resort Credit must not be considered as cash money.</li>
                        <li>The Resort Credit is per reservation, and it can only be redeemed at the front desk upon check out, it can be applied against charges from the spa, restaurants and bars and the Gourmet Food Market, if not used it will not be available for future use, it will not be refunded or transferred to other reservations, and it will not be valid at the front desk. If the price of the product/service paid with this credit is higher than the credit value, any remaining balance will be charged to the guest room bill.</li>
                        <li>The Resort Credit cannot be combined with other promotions or discounts.</li>
                        <li>This promotion includes a complimentary Premium roundtrip airport transportation (airport - hotel - airport)</li>
                        <li>This promotion does not includes meals or drinks.</li>
                        <li>Additional meals and drinks will have an additional charge.<br /></li>
                    </ul>
            ',
        ],
        
    ],
    'code'=>'',
];