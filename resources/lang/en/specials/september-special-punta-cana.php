<?php

return [
    'slug' => 'september-special-punta-cana',
    'title' => 'PUNTA CANA - September Special',
    'subtitle' => 'Travel dates between Today and March 1, 2020',
    'box_benefits'=>'Take advantage of the benefits of this special offer!',
    'thumbnail' => asset('img/deals/september-special-punta-cana.jpg'),
    'expiration'=>'10/01/2018', // mm/dd/yyyy
    'minimo_noches'=>'4',
    'blackouts'=>[
        0=>[ 'inicio'=>'03/02/2020', 'fin'=>'12/31/2020',], // mm/dd/yyyy
        
    ],
    'destino'=>'punta-cana',
    'label_resort' => '',
    'title_seo' => 'Punta Cana Vacation Special Offer | Royal Reservations',
    'alt_seo' => 'Punta Cana Vacation Special Offer',
	'metadescription' => 'Take advantage of this special offer in which you will receive an amazing special discount on your reservation in All Inclusive, Room Only or Bed & Breakfast rate plans in any of the 4 luxury resorts available in Punta Cana.',
    'main_points' => [
        0=>'All Inclusive Bed & Breakfast or Accommodation Only',
        1=>'Children stay free',
        
    ],
    'label_color'=>'1', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'48% OFF', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Discover the beauty of the Dominican Republic in Punta Cana, a Caribbean destination that will give you moments of relaxation and fun in its idyllic golden sand beaches bathed by the incredible blue sea; you will also enjoy amazing natural landscapes, typical gastronomy, culture, shopping, tours and a lot more. Take advantage of this special offer in which you will receive an amazing special discount on your reservation in All Inclusive, Room Only or Bed &amp; Breakfast rate plans, in any of the 4 family or luxury resorts available with Royal Reservations. In addition, you will be able to enjoy your vacations any time of this or next year.<br /><br />Book your luxury vacation in Punta Cana today!
        </p>

    ',
    'rates'=>[
        0=>[
            'tab'=>'All Inclusive',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'ALL INCLUSIVE',
            'description'=>'
                        
                <ul>
                    <li>Up to 440 USD in Resort Credits</li>
                    <li>Special discount on your reservation</li>
                    <li>Unlimited meals &amp; drinks<br /></li>
                </ul>

                ',
            'title_conditions'=>'Terms and conditions',
            'conditions'=>'
                <p>Resort Credit applies for AlSol hotels reservations, others are excluded</p>
                <p>When booking All Inclusive in AlSol Luxury Village get 440 USD in Resort Credits</p>
                <p>When Booking Room Only in Luxury Village get 350 USD in Resort Credits</p>
                <p>4 nights minimum stay required</p>
                <p>Book From: Today to 10/01/2018 Travel From: Today to 01/03/2020</p>
            ',
            'resorts_area_title'=>'All Inclusive Resorts',
            'resorts'=>[
                0=>[
                    'name'=>'AlSol Luxury Village Cap Cana Resort ',
                    'stars'=>'5',
                    'img'=>'alsol-luxury-village',
                    'price'=>'343',
                    'resort_id'=>'85285',
                    'ihotelier_id'=>'2627347',
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
                    <li>Up to 350 USD in Resort Credits</li>
                    <li>Special discount on your reservation<br /></li>
                </ul>

                ',
            'title_conditions'=>'Terms and conditions',
            'conditions'=>'
                <p>Resort Credit applies for AlSol hotels reservations, others are excluded</p>
                <p>When booking All Inclusive in AlSol Luxury Village get 440 USD in Resort Credits</p>
                <p>When Booking Room Only in Luxury Village get 350 USD in Resort Credits</p>
                <p>4 nights minimum stay required</p>
                <p>Book From: Today to 10/01/2018 Travel From: Today to 01/03/2020</p>
            ',
            'resorts_area_title'=>'Room Only Resorts',
            'resorts'=>[
                0=>[
                    'name'=>'AlSol Luxury Village Cap Cana Resort ',
                    'stars'=>'5',
                    'img'=>'alsol-luxury-village',
                    'price'=>'300',
                    'resort_id'=>'85285',
                    'ihotelier_id'=>'2627349',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],
        ],  
    ],
    'code'=>'',
];