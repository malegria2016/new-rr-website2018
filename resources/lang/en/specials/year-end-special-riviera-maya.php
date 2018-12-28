<?php

return [
    'alturaRateplan'=>'8',//8 líneas ó 10 líneas
    'slug' => 'year-end-special-riviera-maya',
    'thumbnail' => asset('img/deals/year-end-special-riviera-maya.jpg'),
    'title' => 'Riviera Maya: Year End Special',
    'expiration'=>'01/07/2019', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'11/30/2018','fin'=>'12/02/2018', ], // mm/dd/yyyy	   
    ],
    'minimo_noches'=>'3',
    'destino'=>'riviera-maya', //cancun, riviera-maya, playa-del-carmen, sint-maarten, curacao, punta-cana

    'subtitle' => 'Book Now and Travel anytime of the year!',
    'box_benefits'=>'Take advantage of this fabulous promotion and Book Now!',
    'title_seo' => 'New Year Deal Riviera Maya Vacations | Royal Reservations',
    'alt_seo' => 'Riviera Maya Vacation Special Offer ',
	'metadescription' => 'The end of the year brings the perfect gift for you with this Royal Reservation vacation special to the Riviera Maya!',

    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> Grand Residences Riviera Cancun</span>', //<span class="av-skyblue"><b>Resort:</b> Grand Residences Riviera Cancun</span>
    'main_points' => [
        0=>'42% OFF',
        1=>'$100 USD Resort Credit',
        2=>'Premium Roundtrip Transfers',
        3=>'1 SPA Massage 30min',
        4=>'All Inclusive, Room Only or Room Plus Breakfast plans'
    ],
    'label_color'=>'', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'42% OFF', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            The end of the year brings the perfect gift for you with this Royal Reservation vacation special to the Riviera Maya! <br /><br />If you want to live a one-of-a-kind vacation in the Riviera Maya beaches, then take advantage of this offer and get an exclusive discount on your reservation, a $100 USD Resort Credit for meals, beverages, Gourmet Food Market products, etc. Also enjoy round airport Premium transportation, a 30-minutes massage and the benefit of free accommodations for kids at Grand Residences Riviera Cancun. <br /><br />Book now in All Inclusive, Bed &amp; Breakfast or European Plan and start enjoying!
        </p>

    ',
    'rates'=>[
        0=>[
            'tab'=>'All Inclusive',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'ALL INCLUSIVE',
            'description'=>'
                        
                    <ul>
                        <li>Special Discount on your Reservation</li>
                        <li>One 30-minute Spa Massage for one person</li>
                        <li>100 USD Resort Credit per Reservation</li>
                        <li>All Gourmet meals and snacks</li>
                        <li>Premium House Brand Beverages</li>
                        <li>Limitless 24 hours Room Full Service</li>
                        <li>Premium Roundtrip Airport transportation (Airport - Hotel - Airport)</li>
                        <li>Children up to 12 years old stay and eat free (using existing beds)</li>
                        <li>High-Speed Internet Access in rooms &amp; common areas</li>
                    </ul>

                ',
            'resorts_area_title'=>'All Inclusive Resorts',
            'resorts'=>[
                0=>[
                    'name'=>'Grand Residences',
                    'stars'=>'5',
                    'img'=>'grand-residences-riviera-cancun',
                    'price'=>'472',
                    'resort_id'=>'95939',
                    'ihotelier_id'=>'3483148',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],
            'title_conditions'=>'Terms and conditions',
            'conditions'=>'
                <p>The One 30-minute Spa Massage is valid for one person, one time. <br />Service requires reservation in advance. <br />Tips for massage service are not included. <br />The Resort Credit must not be considered as cash money. <br />The Resort Credit is per reservation, and it can only be redeemed at the front desk upon check out, it can be applied against charges from the spa, restaurants, and bars and the Gourmet Food Market, if not used it will not be available for future use, it will not be refunded or transferred to other reservations, and it will not be valid at the front desk. If the price of the product/service paid with this credit is higher than the credit value, any remaining balance will be charged to the guest room bill. <br />The Resort Credit cannot be combined with other promotions or discounts. <br />This promotion includes a complimentary Premium roundtrip airport transportation (airport - hotel - airport)</p>
            ',
        ],
        1=>[
            'tab'=>'Room only',
            'icon'=>asset('img/img-specials/bed.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Room only',
            'description'=>'
                        
                    <ul>
                        <li>Special Discount on your Reservation</li>
                        <li>One 30-minute Spa Massage for one person</li>
                        <li>100 USD Resort Credit per Reservation</li>
                        <li>Premium Roundtrip Airport transportation (Airport Hotel Airport)</li>
                        <li>Children up to 12 years old stay free (using existing beds)</li>
                        <li>High-Speed Internet Access in rooms &amp; common areas</li>
                    </ul>

                ',            
            'resorts_area_title'=>'Room Only Resorts',
            'resorts'=>[
                0=>[
                    'name'=>'Grand Residences',
                    'stars'=>'5',
                    'img'=>'grand-residences-riviera-cancun',
                    'price'=>'325',
                    'resort_id'=>'95939',
                    'ihotelier_id'=>'3483191',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],
            'title_conditions'=>'Terms and conditions',
            'conditions'=>'
            
                <p>The One 30-minute Spa Massage is valid for one person, one time. <br />Service requires reservation in advance. <br />Tips for massage service are not included. <br />The Resort Credit must not be considered as cash money. <br />The Resort Credit is per reservation, and it can only be redeemed at the front desk upon check out, it can be applied against charges from the spa, restaurants and bars and the Gourmet Food Market, if not used it will not be available for future use, it will not be refunded or transferred to other reservations, and it will not be valid at the front desk. If the price of the product/service paid with this credit is higher than the credit value, any remaining balance will be charged to the guest room bill. <br />The Resort Credit cannot be combined with other promotions or discounts. <br />This promotion includes a complimentary Premium roundtrip airport transportation (airport - hotel - airport) <br />This promotion does not include meals or drinks. <br />Additional meals and drinks will have an additional charge.</p>
            ',
        ],
        2=>[
            'tab'=>'Bed & Breakfast',
            'icon'=>asset('img/img-specials/b_b.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Bed & Breakfast',
            'description'=>'
                        
                    <ul>
                        <li>Special Discount on your Reservation </li>
                        <li>One 30-minute Spa Massage for one person </li>
                        <li>100 USD Resort Credit per Reservation </li>
                        <li>Daily breakfast for all paid occupants </li>
                        <li>Premium Roundtrip Airport transportation (Airport Hotel Airport) </li>
                        <li>Children up to 12 years old stay and eat free Breakfast with Mom &amp; Dad (using existing beds) </li>
                        <li>High-Speed Internet Access in rooms &amp; common areas </li>
                    </ul>

                ',            
            'resorts_area_title'=>'Bed & Breakfast Resorts',
            'resorts'=>[
                0=>[
                    'name'=>'Grand Residences',
                    'stars'=>'5',
                    'img'=>'grand-residences-riviera-cancun',
                    'price'=>'300',
                    'resort_id'=>'95939',
                    'ihotelier_id'=>'3483201',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],
            'title_conditions'=>'Terms and conditions',
            'conditions'=>'
            
                <p>The One 30-minute Spa Massage is valid for one person, one time. <br />Service requires reservation in advance. <br />Tips for massage service are not included. <br />The Resort Credit must not be considered as cash money. <br />The Resort Credit is per reservation, and it can only be redeemed at the front desk upon check out, it can be applied against charges from the spa, and the Gourmet Food Market, if not used it will not be available for future use, it will not be refunded or transferred to other reservations, and it will not be valid at the front desk. If the price of the product/service paid with this credit is higher than the credit value, any remaining balance will be charged to the guest room bill. <br />The Resort Credit cannot be combined with other promotions or discounts. <br />This promotion includes a complimentary Premium roundtrip airport transportation (airport - hotel - airport) <br />This promotion includes a daily breakfast per person confirmed in your confirmation letter. <br />Additional meals and drinks will have an additional charge.</p>
            ',
        ],
    ],
    'code'=>'',
];