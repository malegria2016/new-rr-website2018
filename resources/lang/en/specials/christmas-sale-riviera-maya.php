<?php

return [
    'alturaRateplan'=>'8',//8 líneas ó 10 líneas
    'slug' => 'christmas-sale-riviera-maya',
    'thumbnail' => asset('img/deals/christmas-sale-riviera-maya.jpg'),
    'title' => 'Riviera Maya: Christmas Sale',
    'expiration'=>'12/19/2018', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'11/30/2018','fin'=>'12/11/2018', ], // mm/dd/yyyy	
    ],
    'minimo_noches'=>'1',
    'destino'=>'riviera-maya', //cancun, riviera-maya, playa-del-carmen, sint-maarten, curacao, punta-cana

    'subtitle' => 'Book Now this Special Christmas Sale!',
    'box_benefits'=>'Don\'t miss the opportunity to Book Now your next Riviera Maya Vacations!',
    'title_seo' => 'Christmas Special Cancun Vacations | Royal Reservations',
    'alt_seo' => 'Riviera Maya Vacation Special Offer',
	'metadescription' => 'Book now and get a special discount of 35% + an exclusive 15% OFF your reservation with us, as well as benefits like kids staying free and incredible amenities.',

    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> Grand Residences Riviera Cancun</span>', //<span class="av-skyblue"><b>Resort:</b> Grand Residences Riviera Cancun</span>
    'main_points' => [
        0=>'35%+15% OFF',
        1=>'Premium Roundtrip Transfers',
        2=>'All Inclusive Plan',
    ],
    'label_color'=>'3', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            The beaches and the sun of the Riviera Maya await you with this flash sale of Royal Reservations available only for a few days! <br /><br />It&rsquo;s the perfect time to enjoy with your family, your better half or your group of friends your luxury All Inclusive vacation in Grand Residences Riviera Cancun, a beachfront resort available at Royal Reservations. Book now and get a special discount of 35% + an exclusive 15% OFF your reservation with us, as well as benefits like kids staying free and incredible amenities. <br /><br />Book now!<            
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
                    'price'=>'418',
                    'resort_id'=>'95939',
                    'ihotelier_id'=>'3483148',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],
            'title_conditions'=>'Terms and conditions',
            'conditions'=>'
                    <p>This promotion includes a complimentary Premium roundtrip airport transportation (airport - hotel - airport)</p>
            ',
        ],
        
    ],
    'code'=>'',
];