<?php

return [
    'alturaRateplan'=>'8',//8 líneas ó 10 líneas
    'slug' => 'early-winter-playa-del-carmen',
    'title' => 'PLAYA DEL CARMEN - Early Winter',
    'subtitle' => 'Travel dates between November 25, 2018 and March 20, 2019',
    'box_benefits'=>'Take advantage of the benefits of this special offer!',
    'thumbnail' => asset('img/deals/early-winter-playa-del-carmen.jpg'),
    'expiration'=>'10/31/2018', // mm/dd/yyyy
    'minimo_noches'=>'4',
    'blackouts'=>[
        0=>[ 'inicio'=>'09/01/2018','fin'=>'11/24/2018', ],// mm/dd/yyyy
        1=>[ 'inicio'=>'03/21/2019','fin'=>'12/31/2019', ],// mm/dd/yyyy
        
    ],
    'destino'=>'playa-del-carmen',
    'label_resort' => '',
    'title_seo' => 'Playa del Carmen Winter Vacations | Royal Reservations',
    'alt_seo' => 'Playa del Carmen Winter Vacations',
	'metadescription' => 'Take advantage of this unique promotion and get an exceptional discount of 44% by booking the suite of your choice, as well as incredible benefits such as free accommodations and meals for children staying in the suite plus a $150 USD Spa Credit.',
    'main_points' => [
        0=>'$150 USD Spa Credit',
        1=>'All Inclusive Plan',
        2=>'Children stay free',
        3=>'Free High-speed Wi-Fi',
        
    ],
    'label_color'=>'1', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'46% OFF', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Get ready to live a fabulous winter family vacation in Playa del Carmen, with this magnificent offer and escape from the cold winter to enjoy the beautiful white sand beaches, the wonderful activities, natural beauties, delicious gastronomy, etc., and the warm blue sea of Playa del Carmen, in the Mexican Caribbean. Take advantage of this unique promotion and get an exceptional discount of 44% by booking the suite of your choice, as well as incredible benefits such as free accommodations and meals for children staying in the suite plus a $150 USD Spa Credit to spend in massages and wellness treatments.<br /><br />Book now! Don\'t wait any longer to live a winter holiday in Playa del Carmen and The Royal Haciendas beachfront resort.
        </p>

    ',
    'rates'=>[
        0=>[
            'tab'=>'All Inclusive',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'ALL INCLUSIVE',
            'description'=>'
                        
                <ul>
                    <li>150 USD Spa Credit </li>
                    <li>Unlimited meals &amp; drinks (surcharges apply for premium food &amp; beverages) </li>
                    <li>24 hours room service </li>
                    <li>Children up to 12 years old stay &amp; eat for free (using existing beds) </li>
                    <li>Free high speed Wi-Fi in rooms &amp; common areas<br /></li>
                </ul>

                ',
            'title_conditions'=>'Terms and conditions',
            'conditions'=>'
                <p>The Tour Credit is per reservation, and it can only be redeemed at the Spa for massages and wellness treatments.</p>
                <p>A mandatory 16% service fee applies when using this credit; this fee will be based on the amount of the credit utilized at the time of redemption and must be paid by the guest.</p>
                <p>The Spa Credit must not be considered as cash money.</p>
                <p>The Spa Credit is valid only for this reservation and must be used in one single transaction directly at the Spa, if not used it will not be available for future use, it will not be refunded or transferred to other reservations, and it will not be valid at the front desk. If the price of the product/service paid with this credit is higher than the credit value, any remaining balance will be charged to the guest room bill.</p>
                <p>The Spa Credit cannot be combined with other promotions or discounts.</p>
                <p>Book From: Today to 10/31/2018 Travel From: 11/25/2018 to 03/20/2019</p>
            ',
            'resorts_area_title'=>'All Inclusive Resorts',
            'resorts'=>[
                0=>[
                    'name'=>' The Royal Haciendas',
                    'stars'=>'5',
                    'img'=>'the-royal-haciendas',
                    'price'=>'230',
                    'resort_id'=>'86184',
                    'ihotelier_id'=>'3043161',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],
        ],
    ],
    'code'=>'',
];