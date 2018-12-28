<?php

return [
    'slug' => 'special-offers',
    'title_seo' => 'New Year Cancun Vacations | Royal Reservations',
    'alt_banner' => 'ALT Cancun Vacation Special Offer',
    'metadescription' => 'Another year is about to end and at Royal Reservations we want to give you the best of gifts with this special promo!',


    'title' => 'YEAR END SPECIAL',
    'subtitle1' => 'Book Now and Travel anytime of the year!',
    'description1'=>'
        Another year is about to end and at Royal Reservations we want to give you the best of gifts with this special promo!<br>  

        Live an amazing family vacation, unwinding on the beach and with fun activities in a beachfront family resort, offering the best European Plan or a fabulous All Inclusive Plan in one of the Best Family Resorts in the Caribbean. 
        
    ',
    'subtitle2' => 'The Best Beach Resorts available for this offer',
    'description2'=>'
        Book now in All Inclusive, Bed & Breakfast or European Plan and start enjoying! 
    ',


    //etiquetas regularmente sin cambios
    'reloj_title' => 'Hurry up',
    
    //configuración
    'flash' => '0', // 1=> si -- 0=> NO
    'fecha_fin' => '01/07/2019', // Fecha fin de campaña en la web (mm/dd/yyyy)
    'lista_filtros'=>[
        0=>['name'=>'Cancun','value'=>'cun'],
        1=>['name'=>'Riviera Maya','value'=>'riv'],
        2=>['name'=>'Playa del Carmen','value'=>'pla'],
        3=>['name'=>'Sint Maarten','value'=>'sin'],
        4=>['name'=>'Curacao','value'=>'cur'],
        5=>['name'=>'Punta Cana','value'=>'pun'],
    ],
    'lista_filtros2'=>[
        0=>['name'=>'All Inclusive','value'=>'ai'],
        1=>['name'=>'European Plan','value'=>'ep'],
        2=>['name'=>'Bed & Breakfast','value'=>'bb'],
    ],


    'resorts'=>[
        0=>[
            'name'=>'The Royal Cancun All Suites Resort',
            'slug'=>'the-royal-cancun',
            'stars'=>'5',
            'alt'=>'The Royal Cancun All Suites Resort',

            'travel_window'=>'Today and 03/01/2020',            
            'bullets'=>'
                        <li>$100 USD Spa Credit</li>
                        <li>Meals & drinks included</li>
                        <li>Children stay & eat FREE</li>
                        
            ',
            'discount_label'=>'46% OFF',
            'view_more'=>'
                    
                    <p>
                    Live an amazing Cancun vacation, unwinding on the beach and with fun activities in this beachfront family resort.
                    </p>
                    <p>
                    Book from <b>Today to 07/01/2019</b><br>
                    Travel Between <b>Today</b> and <b>03/01/2020</b>
                    </p>
                    <p>46% OFF</p>
                    <p><b>This Promotion includes:</b>

                        <ul>
                         <li>$100 USD Spa Credit</li>
                         <li>Meals & drinks included</li>
                         <li>24 hours room service</li>
                         <li>Children stay & eat FREE</li>
                         <li>FREE High speed Wi-Fi in all areas</li>
                        </ul>
                    </p>
                    <p class="terms">
        <b>TERMS & CONDITIONS: Spa Credit</b> is per reservation and it can only be redeemed at the Spa for massages & wellness treatments. A mandatory 16% service fee aplies when using it and this fee will be based on the amount of the credit utilized and must be paid by the guest. This Credit should not be considered as cash money and it is only valid for the time of the reservation and must be used in one single transaction directly at the Spa. If not used, it will nor be valid at the front desk. If the price is higher than the credit value, any remaining balance will be charged to the guest room bill. For the <b>All Inclusive:</b> some surcharges will apply for premium food and beverages; it is indicated on the restaurants menu. Limited Room Service menu avilable 24 hours. <b>Children stay & eat Free:</b> Children up to 12 years old can stay for free using the existing beds, there is no extra beds or rollaway beds available. Children can eat for free accompanied by their parents. *4-night Minimum lenght of stay (for some dates, minimum lenght of stay may vary)
                    </p>
                           
            ',

            //configuración 
            //Cancun (1)-/-Riviera Maya(2)-/-Playa del Carmen(3)-/-Sint Maarten(4)-/- Curacao(5)-/-Punta Cana(6)-/
            'destination'=>'1',
            // All Inclusive ai (1)  -- EP ep (2)   --   Bed & Breakfast bb (3)
            'rate_plan'=>'1',
            // Label filtros
            'filtros'=>'cun-ai',

            'resort_id'=>'73601',
            'ihotelier_id'=>'3481526',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],
        1=>[

            'name'=>'The Royal Sands Resort & Spa <br>All Inclusive',
            'slug'=>'the-royal-sands',
            'stars'=>'5',
            'alt'=>'The Royal Sands Resort & Spa <br>All Inclusive',

            'travel_window'=>'Today and 03/01/2020',            
            'bullets'=>'
                        <li>$100 USD Spa Credit</li>
                        <li>Meals & drinks included</li>
                        <li>Children stay & eat FREE</li>
                        
            ',
            'discount_label'=>'42% OFF',
            'view_more'=>'
                <p>
                    Let us pamper you with a perfect Cancun Vacation with your loved ones in one of the best Beach Resorts in Cancun.
                </p>         

                <p>
                Book from <b>Today to 07/01/2019</b><br>
                Travel Between <b>Today</b> and <b>03/01/2020</b>

                </p>

                <p><b>42% OFF</b></p>


                <p>
                <b>This Promotion includes:</b>
                <ul>
                <li>$100 USD Spa Credit</li>
                <li>Meals & drinks included</li>
                <li>24 hours room service</li>
                <li>Children stay & eat FREE</li>
                <li>FREE High speed Wi-Fi in all areas</li>
                </ul>
                </p>

                <p class="terms">
<b>TERMS & CONDITIONS: Spa Credit</b> is per reservation and it can only be redeemed at the Spa for massages & wellness treatments. A mandatory 16% service fee aplies when using it and this fee will be based on the amount of the credit utilized and must be paid by the guest. This Credit should not be considered as cash money and it is only valid for the time of the reservation and must be used in one single transaction directly at the Spa. If not used, it will nor be valid at the front desk. If the price is higher than the credit value, any remaining balance will be charged to the guest room bill. For the <b>All Inclusive:</b> some surcharges will apply for premium food and beverages; it is indicated on the restaurants menu. Limited Room Service menu avilable 24 hours. <b>Children stay & eat Free:</b> Children up to 12 years old can stay for free using the existing beds, there is no extra beds or rollaway beds available. Children can eat for free accompanied by their parents. *4-night Minimum lenght of stay (for some dates, minimum lenght of stay may vary)
                </p>

            ',

            //configuración 
            //Cancun (1)-/-Riviera Maya(2)-/-Playa del Carmen(3)-/-Sint Maarten(4)-/- Curacao(5)-/-Punta Cana(6)-/
            'destination'=>'1',
            // All Inclusive (1)  -- EP  (2)   --   Bed & Breakfast (3)
            'rate_plan'=>'1',
            // Label filtros
            'filtros'=>'cun-ai',

            'resort_id'=>'86169',
            'ihotelier_id'=>'3481558',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],
        2=>[
            'name'=>'The Royal Haciendas All Suites Resort & SPA',
            'slug'=>'the-royal-haciendas',
            'stars'=>'5',
            'alt'=>'The Royal Haciendas All Suites Resort & SPA',

            'travel_window'=>'Today to 07/01/2019',            
            'bullets'=>'
                        <li>$100 USD Spa Credit</li>
                        <li>Meals & drinks included</li>
                        <li>Children stay & eat FREE</li>
                        
            ',
            'discount_label'=>'46% OFF',
            'view_more'=>'
                <p>
Experience an unforgettable All Inclusive Playa del Carmen vacation in the beaches of the Mexican Caribbean with this offer.
                </p>         

                <p>
Book from Today to 07/01/2019<br>
Travel Between Today and 03/01/2020
                </p>

                <p><b>46% OFF</b></p>


                <p>
                <b>This Promotion includes:</b>

<ul>
 <li>$100 USD Spa Credit</li>
 <li>Meals & drinks included</li>
 <li>24 hours room service</li>
 <li>Children stay & eat FREE</li>
 <li>FREE High speed Wi-Fi in all areas</li>
 </ul>

                </p>

                <p class="terms">
<b>TERMS & CONDITIONS: Spa Credit</b> is per reservation and it can only be redeemed at the Spa for massages & wellness treatments. A mandatory 16% service fee aplies when using it and this fee will be based on the amount of the credit utilized and must be paid by the guest. This Credit should not be considered as cash money and it is only valid for the time of the reservation and must be used in one single transaction directly at the Spa. If not used, it will nor be valid at the front desk. If the price is higher than the credit value, any remaining balance will be charged to the guest room bill. For the <b>All Inclusive:</b> some surcharges will apply for premium food and beverages; it is indicated on the restaurants menu. Limited Room Service menu avilable 24 hours. <b>Children stay & eat Free:</b> Children up to 12 years old can stay for free using the existing beds, there is no extra beds or rollaway beds available. Children can eat for free accompanied by their parents. *4-night Minimum lenght of stay (for some dates, minimum lenght of stay may vary)
                </p>        
            ',

            //configuración 
            //Cancun (1)-/-Riviera Maya(2)-/-Playa del Carmen(3)-/-Sint Maarten(4)-/- Curacao(5)-/-Punta Cana(6)-/
            'destination'=>'3',
            // All Inclusive (1)  -- EP  (2)   --   Bed & Breakfast (3)
            'rate_plan'=>'1',
            // Label filtros
            'filtros'=>'pla-ai',

            'resort_id'=>'86184',
            'ihotelier_id'=>'3481603',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],        
        3=>[
            'name'=>'Grand Residences Riviera Cancun',
            'slug'=>'grand-residences-riviera-cancun',
            'stars'=>'5',
            'alt'=>'Grand Residences Riviera Cancun',

            'travel_window'=>'Today to 07/01/2019',            
            'bullets'=>'
                        <li>30-min Spa Massage</li>
                        <li>$100 USD Resort Credit</li>
                        <li>Premium Airport Transfer</li>
                        
            ',
            'discount_label'=>'42% OFF',
            'view_more'=>'
                <p>
If you want to live a one-of-a-kind vacation in the Riviera Maya beaches, then take advantage of this offer in a luxury resort.
                </p>         

                <p>
Book from Today to 07/01/2019<br>
Travel Between Today and 03/01/2020
                </p>

                <p><b>42% OFF</b></p>


                <p>
                <b>This Promotion includes:</b>
<ul>
 <li>30-min Spa Massage</li>
 <li>$100 USD Resort Credit</li>
 <li>Unlimited Premium meals & drinks</li>
 <li>24 hours Full room service</li>
 <li>Premuim Aiport Roundtrip Transportation</li>
 <li>Children stay & eat FREE</li>
 <li>FREE High speed Wi-Fi in all areas</li>
 </ul>
                </p>

                <p class="terms">
<b>TERMS & CONDITIONS:
* Spa Massage: </b>The One 30-minute Spa Massage is valid for one person, one time. It requires reservation in advance. Tips are not included. * <b>Resort Credit:</b> The Resort Credit must not be considered as cash money. Is per reservation and it can only be redeemed at the front desk upon chekout.* <b>Children stay & eat Free:</b> Children up to 12 years old can stay for free using the existing beds, there is no extra beds or rollaway beds available. And they can eat for free accompanied by their parents. <b>* Airport Transportation:</b> One roundtrip service (airport-hotel-airport) is included.  Guest must contact Thomas More Travel at least 48 hours prior check in to arrange the transfer from the airport.   4-night Minimum lenght of stay for some dates, minimum lenght of stay may vary)
                </p>         
            ',

            //configuración 
            //Cancun (1)-/-Riviera Maya(2)-/-Playa del Carmen(3)-/-Sint Maarten(4)-/- Curacao(5)-/-Punta Cana(6)-/
            'destination'=>'2',
            // All Inclusive (1)  -- EP  (2)   --   Bed & Breakfast (3)
            'rate_plan'=>'1',
            // Label filtros
            'filtros'=>'riv-ai',

            'resort_id'=>'95939',
            'ihotelier_id'=>'3483148',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],
    4=>[
            'name'=>'Casa De Campo Resort & Villas',
            'slug'=>'casa-de-campo',
            'stars'=>'5',
            'alt'=>'Casa De Campo Resort & Villas',

            'travel_window'=>'Today and 03/01/2020',            
            'bullets'=>'
                        <li>Unlimited meals & drinks</li>
                        <li>Free Wi-Fi</li>
                        <br>
                        
            ',
            'discount_label'=>'38% OFF',
            'view_more'=>'
                <p>
Discover great activities, natural beauties, culture, gastronomy and amazing secluded beaches during your Punta Cana luxury vacation through this special offer .
                </p>         

                <p>
Book from Today to 07/01/2019<br>
Travel Between Today and 03/01/2020
                </p>

                <p><b>38% OFF</b></p>


                <p>
                <b>This Promotion includes:</b>
<ul>
 <li>Unlimited meals and beverages</li>
 <li>FREE Wi-Fi in all areas</li>
 </ul>
                </p>

                <p class="terms">
<b>TERMS & CONDITIONS:</b><br>
<b>* Restrictions:</b> 4-night Minimum lenght of stay *for some dates, minimum lenght of stay may vary.
                </p>         
            ',

            //configuración 
            //Cancun (1)-/-Riviera Maya(2)-/-Playa del Carmen(3)-/-Sint Maarten(4)-/- Curacao(5)-/-Punta Cana(6)-/
            'destination'=>'6',
            // All Inclusive (1)  -- EP  (2)   --   Bed & Breakfast (3)
            'rate_plan'=>'1',
            // Label filtros
            'filtros'=>'pun-ai',

            'resort_id'=>'106514',
            'ihotelier_id'=>'2882964',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
    ],
5=>[
            'name'=>'Ancora Punta Cana Private Residence Yacht Club',
            'slug'=>'ancora',
            'stars'=>'5',
            'alt'=>'Ancora Punta Cana Private Residence Yacht Club',

            'travel_window'=>'Today and 03/01/2020',            
            'bullets'=>'
                        <li>Unlimited meals & drinks</li>
                        <li>Free Wi-Fi</li>
                        <br>
                        
            ',
            'discount_label'=>'38% OFF',
            'view_more'=>'
                <p>
Experience luxury accommodations, services and amenities at Ancora Resort in Punta Cana, in the Dominican Republic, and enjoy your vacations to the max. 
                </p>         

                <p>
Book from Today to 07/01/2019<br>
Travel Between Today and 03/01/2020
                </p>

                <p><b>38% OFF</b></p>


                <p>
                <b>This Promotion includes:</b>
<ul>
 <li>Unlimited meals and beverages</li>
 <li>FREE Wi-Fi in all areas</li>
 </ul>
                </p>

                <p class="terms">
<b>TERMS & CONDITIONS:</b><br>
<b>* Restrictions:</b> 4-night Minimum lenght of stay *for some dates, minimum lenght of stay may vary.
                </p>         
            ',

            //configuración 
            //Cancun (1)-/-Riviera Maya(2)-/-Playa del Carmen(3)-/-Sint Maarten(4)-/- Curacao(5)-/-Punta Cana(6)-/
            'destination'=>'6',
            // All Inclusive (1)  -- EP  (2)   --   Bed & Breakfast (3)
            'rate_plan'=>'1',
            // Label filtros
            'filtros'=>'pun-ai',

            'resort_id'=>'85285',
            'ihotelier_id'=>'2627347',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
    ],

        6=>[
            'name'=>'The Royal Caribbean All Suites Resort',
            'slug'=>'the-royal-caribbean',
            'stars'=>'4',
            'alt'=>'The Royal Caribbean All Suites Resort',

            'travel_window'=>'Today to 07/01/2019',            
            'bullets'=>'
                        <li>$100 USD Spa Credit</li>
                        <li>Children stay FREE</li>
                        <br>
                        
            ',
            'discount_label'=>'46% OFF',
            'view_more'=>'
                <p>
                Book now with Royal Reservations and enjoy your Cancun vacations anytime of this or the next year!
                </p>         

                <p>
                Book from Today to 07/01/2019<br>
                Travel Between Today and 03/01/2020
                </p>


                <p>
                <b>46% OFF</b>

                </p>

                <p>
                <b>This Promotion includes:</b>
                 <ul>
                 <li>$100 USD Spa Credit</li>
                 <li>Children stay FREE</li>
                 <li>FREE High speed Wi-Fi in all areas</li>
                 </ul>
                </p>

                <p class="terms">
<b>TERMS & CONDITIONS: Spa Credit</b> is per reservation and it can only be redeemed at the Spa for massages & wellness treatments. A mandatory 16% service fee aplies when using it and this fee will be based on the amount of the credit utilized and must be paid by the guest. This Credit should not be considered as cash money and it is only valid for the time of the reservation and must be used in one single transaction directly at the Spa. If not used, it will nor be valid at the front desk. If the price is higher than the credit value, any remaining balance will be charged to the guest room bill. <b>Children stay Free:</b> Children up to 12 years old can stay for free using the existing beds, there is no extra beds or rollaway beds available. *5-night Minimum lenght of stay (for some dates, minimum lenght of stay may vary)
                </p>        
            ',

            //configuración 
            //Cancun (1)-/-Riviera Maya(2)-/-Playa del Carmen(3)-/-Sint Maarten(4)-/- Curacao(5)-/-Punta Cana(6)-/
            'destination'=>'1',
            // All Inclusive (1)  -- EP  (2)   --   Bed & Breakfast (3)
            'rate_plan'=>'2',
            // Label filtros
            'filtros'=>'cun-ep',

            'resort_id'=>'86175',
            'ihotelier_id'=>'3481636',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],
        7=>[
            'name'=>'The Royal Islander All Suites Resort',
            'slug'=>'the-royal-islander',
            'stars'=>'4',
            'alt'=>'The Royal Islander All Suites Resort',

            'travel_window'=>'Today to 07/01/2019',            
            'bullets'=>'
                        <li>$100 USD Spa Credit</li>
                        <li>Children stay FREE</li>
                       <br>
                        
            ',
            'discount_label'=>'46% OFF',
            'view_more'=>'
                <p>
This is the perfect time to go on vacations and with this special Year End promo, you will live the best of Cancun with Royal Reservations! 
                </p>         

                <p>
Book from Today to 07/01/2019<br>
Travel Between Today and 03/01/2020
                </p>

                <p><b>46% OFF</b></p>


                <p>
                <b>This Promotion includes:</b>

<ul>
 <li>$100 USD Spa Credit</li>
 <li>Children stay FREE</li>
 <li>FREE High speed Wi-Fi in all areas</li>
 </ul>
                </p>

                <p class="terms">
<b>TERMS & CONDITIONS: Spa Credit</b> is per reservation and it can only be redeemed at the Spa for massages & wellness treatments. A mandatory 16% service fee aplies when using it and this fee will be based on the amount of the credit utilized and must be paid by the guest. This Credit should not be considered as cash money and it is only valid for the time of the reservation and must be used in one single transaction directly at the Spa. If not used, it will nor be valid at the front desk. If the price is higher than the credit value, any remaining balance will be charged to the guest room bill. <b>Children stay Free:</b> Children up to 12 years old can stay for free using the existing beds, there is no extra beds or rollaway beds available. *5-night Minimum lenght of stay (for some dates, minimum lenght of stay may vary)
                </p>          
            ',

            //configuración 
            //Cancun (1)-/-Riviera Maya(2)-/-Playa del Carmen(3)-/-Sint Maarten(4)-/- Curacao(5)-/-Punta Cana(6)-/
            'destination'=>'1',
            // All Inclusive (1)  -- EP  (2)   --   Bed & Breakfast (3)
            'rate_plan'=>'2',
            // Label filtros
            'filtros'=>'cun-ep',

            'resort_id'=>'86182',
            'ihotelier_id'=>'3481619',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],


        8=>[
            'name'=>'Grand Residences Riviera Cancun',
            'slug'=>'grand-residences-riviera-cancun',
            'stars'=>'5',
            'alt'=>'Grand Residences Riviera Cancun',

            'travel_window'=>'Today and 03/01/2020',            
            'bullets'=>'
                        <li>30-min Spa Massage</li>
                        <li>$100 USD Resort Credit</li>
                        <li>Premium Airport Transfer</li>
                        
            ',
            'discount_label'=>'42% OFF',
            'view_more'=>'
                <p>
The end of the year brings the perfect gift for you with this Royal Reservation vacation special to the Riviera Maya!
                </p>         

                <p>
Book from Today to 07/01/2019<br>
Travel Between Today and 03/01/2020
                </p>

                <p><b>42% OFF</b></p>


                <p>
                <b>This Promotion includes:</b>
<ul>
 <li>30-min Spa Massage</li>
 <li>$100 USD Resort Credit</li>
 <li>Premuim Aiport Roundtrip Transportation</li>
 <li>Children stay & eat FREE</li>
 <li>FREE High speed Wi-Fi in all areas</li>
 </li>
                </p>

                <p class="terms">
<b>TERMS & CONDITIONS:
* Spa Massage:<b> The One 30-minute Spa Massage is valid for one person, one time. It requires reservation in advance. Tips are not included. <b>* Resort Credit:</b> The Resort Credit must not be considered as cash money. Is per reservation and it can only be redeemed at the front desk upon chekout.<b>* Children stay & eat Free:</b> Children up to 12 years old can stay for free using the existing beds, there is no extra beds or rollaway beds available. And they can eat for free accompanied by their parents. <b>* Airport Transportation:</b> One roundtrip service (airport-hotel-airport) is included.  Guest must contact Thomas More Travel at least 48 hours prior check in to arrange the transfer from the airport.   4-night Minimum lenght of stay for some dates, minimum lenght of stay may vary)
                </p>         
            ',

            //configuración 
            //Cancun (1)-/-Riviera Maya(2)-/-Playa del Carmen(3)-/-Sint Maarten(4)-/- Curacao(5)-/-Punta Cana(6)-/
            'destination'=>'2',
            // All Inclusive (1)  -- EP  (2)   --   Bed & Breakfast (3)
            'rate_plan'=>'2',
            // Label filtros
            'filtros'=>'riv-ep',

            'resort_id'=>'95939',
            'ihotelier_id'=>'3483191',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],
9=>[
            'name'=>'Simpson Bay Beach Resort & Marina',
            'slug'=>'simpson-bay-resort',
            'stars'=>'5',
            'alt'=>'Simpson Bay Beach Resort & Marina',

            'travel_window'=>'Today and 03/01/2020',            
            'bullets'=>'
                        <li>Free WiFi</li>
                        <br><br>
                        
            ',
            'discount_label'=>'48% OFF',
            'view_more'=>'
                <p>
Royal Reservations has the perfect excuse for you to live an amazing beach vacation in St. Maarten island! 
                </p>         

                <p>
Book from Today to 07/01/2019<br>
Travel Between Today and 03/01/2020
                </p>

                <p><b>48% OFF</b></p>

                <p>
                <b>This Promotion includes:</b>
                <ul>
                    <li>FREE Wi-Fi in all areas</li>
                </ul>
                </p>

                <p class="terms">
<b>TERMS & CONDITIONS:</b><br>
* Meals: Meals & beverages are not included.<br>
* Restrictions: 4-night Minimum lenght of stay *for some dates, minimum lenght of stay may vary
                </p>     
            ',

            //configuración 
            //Cancun (1)-/-Riviera Maya(2)-/-Playa del Carmen(3)-/-Sint Maarten(4)-/- Curacao(5)-/-Punta Cana(6)-/
            'destination'=>'4',
            // All Inclusive (1)  -- EP  (2)   --   Bed & Breakfast (3)
            'rate_plan'=>'2',
            // Label filtros
            'filtros'=>'sin-ep',

            'resort_id'=>'86179',
            'ihotelier_id'=>'3481581',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ], 
10=>[
            'name'=>'The Villas at Simpson Bay Beach Resort & Marina',
            'slug'=>'the-villas-at-simpson-bay-resort',
            'stars'=>'5',
            'alt'=>'The Villas at Simpson Bay Beach Resort & Marina',

            'travel_window'=>'Today and 03/01/2020',            
            'bullets'=>'
                        <li>Free WiFi</li>
                        <br><br>
                        
            ',
            'discount_label'=>'48% OFF',
            'view_more'=>'
                 <p>
With this special offer, you and your companions will experience the great Caribbean ambiance, its culture and hot weather to escape the cold and relax on the beach
                </p>         

                <p>
Book from Today to 07/01/2019<br>
Travel Between Today and 03/01/2020
                </p>

                <p><b>48% OFF</b></p>


                <p>
                <b>This Promotion includes:</b>
                <ul>
                <li>FREE Wi-Fi in all areas</li>
                </ul>

                </p>

                <p class="terms">
<b>TERMS & CONDITIONS:</b><br>
* <b>Meals:</b> Meals & beverages are not included.<br>
* <b>Restrictions:</b> 4-night Minimum lenght of stay *for some dates, minimum lenght of stay may vary
                </p>     
            ',

            //configuración 
            //Cancun (1)-/-Riviera Maya(2)-/-Playa del Carmen(3)-/-Sint Maarten(4)-/- Curacao(5)-/-Punta Cana(6)-/
            'destination'=>'4',
            // All Inclusive (1)  -- EP  (2)   --   Bed & Breakfast (3)
            'rate_plan'=>'2',
            // Label filtros
            'filtros'=>'sin-ep',

            'resort_id'=>'86180',
            'ihotelier_id'=>'3481611',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
    ], 
11=>[
            'name'=>'The Royal Sea Aquarium Resort',
            'slug'=>'the-royal-sea-aquarium',
            'stars'=>'4',
            'alt'=>'The Royal Sea Aquarium Resort',

            'travel_window'=>'Today and 03/01/2020',            
            'bullets'=>'
                        <li>Free WiFi</li>
                        <br><br>
                        
            ',
            'discount_label'=>'38% OFF',
            'view_more'=>'
                <p>
Curacao paradise is waiting for you to live an unforgettable vacation time on the beach and the sea, with this amazing Royal Reservations special offer! 
                </p>         

                <p>
Book from Today to 07/01/2019<br>
Travel Between Today and 03/01/2020
                </p>

                <p><b>38% OFF</b></p>


                <p>
                <b>This Promotion includes:</b>
                <ul>

<li> FREE Wi-Fi in all areas</li>
</ul>
                </p>

                <p class="terms">
<b>TERMS & CONDITIONS:</b><br>
* Meals: Meals & beverages are not included.<br>
* Restrictions: 4-night Minimum lenght of stay *for some dates, minimum lenght of stay may vary.
                </p>      
            ',

            //configuración 
            //Cancun (1)-/-Riviera Maya(2)-/-Playa del Carmen(3)-/-Sint Maarten(4)-/- Curacao(5)-/-Punta Cana(6)-/
            'destination'=>'5',
            // All Inclusive (1)  -- EP  (2)   --   Bed & Breakfast (3)
            'rate_plan'=>'2',
            // Label filtros
            'filtros'=>'cur-ep',

            'resort_id'=>'86181',
            'ihotelier_id'=>'3481629',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
    ],                                  

12=>[
            'name'=>'Casa De Campo Resort & Villas',
            'slug'=>'casa-de-campo',
            'stars'=>'5',
            'alt'=>'Casa De Campo Resort & Villas',

            'travel_window'=>'Today and 03/01/2020',            
            'bullets'=>'
                        <li>Free Wi-Fi</li>
                        <br><br>
                        
            ',
            'discount_label'=>'38% OFF',
            'view_more'=>'
                <p>
With Royal Reservations and its amazing special promotion, you will visit Punta Cana, a paradise you have to live! 
                </p>         

                <p>
Book from Today to 07/01/2019<br>
Travel Between Today and 03/01/2020
                </p>

                <p><b>38% OFF</b></p>


                <p>
                <b>This Promotion includes:</b>
<ul>
<li>FREE Wi-Fi in all areas</li>
</ul>
                </p>

                <p class="terms">
<b>TERMS & CONDITIONS:</b><br>
<b>* Meals:</b> Meals & beverages are not included.<br>
<b>* Restrictions:</b> 4-night Minimum lenght of stay *for some dates, minimum lenght of stay may vary.
                </p>         
            ',

            //configuración 
            //Cancun (1)-/-Riviera Maya(2)-/-Playa del Carmen(3)-/-Sint Maarten(4)-/- Curacao(5)-/-Punta Cana(6)-/
            'destination'=>'6',
            // All Inclusive (1)  -- EP  (2)   --   Bed & Breakfast (3)
            'rate_plan'=>'2',
            // Label filtros
            'filtros'=>'pun-ep',

            'resort_id'=>'106514',
            'ihotelier_id'=>'2882967',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
    ],
13=>[
            'name'=>'Grand Residences Riviera Cancun',
            'slug'=>'grand-residences-riviera-cancun',
            'stars'=>'5',
            'alt'=>'Grand Residences Riviera Cancun',

            'travel_window'=>' Today and 03/01/2020',            
            'bullets'=>'
                        <li>30-min Spa Massage</li>
                        <li>$100 USD Resort Credit</li>
                        <li>Premium Airport Transfer</li>
                        
            ',
            'discount_label'=>'42% OFF',
            'view_more'=>'
                <p>
Through our unbeatable Bed & Breakfast Plan, you will enjoy our delicious buffet or a la carte in our spectacular restaurant or if you don’t want to go out of your suite you can call to our room service.
                </p>         

                <p>
Book from Today to 07/01/2019<br>
Travel Between Today and 03/01/2020
                </p>

                <p><b>42% OFF</b></p>


                <p>
                <b>This Promotion includes:</b>
<ul>
 <li>30-min Spa Massage</li>
 <li>$100 USD Resort Credit</li>
 <li>Premuim Aiport Roundtrip Transportation</li>
 <li>Daily breakfast for all in the reservation</li>
 <li>Children stay & eat FREE</li>
 <li>FREE High speed Wi-Fi in all areas</li>
 </ul>
                </p>

                <p class="terms">
<b>TERMS & CONDITIONS:</b><br>
<b>* Spa Massage:</b> The One 30-minute Spa Massage is valid for one person, one time. It requires reservation in advance. Tips are not included. <b>* Resort Credit:</b> The Resort Credit must not be considered as cash money. Is per reservation and it can only be redeemed at the front desk upon chekout.* Children stay & eat Free: Children up to 12 years old can stay for free using the existing beds, there is no extra beds or rollaway beds available. And they can eat for free accompanied by their parents. <b>* Airport Transportation:</b> One roundtrip service (airport-hotel-airport) is included.  Guest must contact Thomas More Travel at least 48 hours prior check in to arrange the transfer from the airport.   4-night Minimum lenght of stay for some dates, minimum lenght of stay may vary)
                </p>       
            ',

            //configuración 
            //Cancun (1)-/-Riviera Maya(2)-/-Playa del Carmen(3)-/-Sint Maarten(4)-/- Curacao(5)-/-Punta Cana(6)-/
            'destination'=>'2',
            // All Inclusive (1)  -- EP  (2)   --   Bed & Breakfast (3)
            'rate_plan'=>'3',
            // Label filtros
            'filtros'=>'riv-bb',

            'resort_id'=>'95939',
            'ihotelier_id'=>'3483201',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],

    
    ],



    'expiration'=>'01/07/2019', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'11/30/2018','fin'=>'12/02/2018', ], // mm/dd/yyyy
        1=>['inicio'=>'01/04/2020','fin'=>'12/31/2021', ], // mm/dd/yyyy
    ],
    'minimo_noches'=>'4',
    'code'=>'',
];