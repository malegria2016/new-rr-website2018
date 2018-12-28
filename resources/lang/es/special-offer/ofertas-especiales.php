<?php

return [
    'slug' => 'special-offers',
    'title_seo' => 'New Year Cancun Vacations | Royal Reservations',
    'alt_banner' => 'ALT Cancun Vacation Special Offer',
    'metadescription' => 'Another year is about to end and at Royal Reservations we want to give you the best of gifts with this special promo!',


    'title' => 'ESPECIAL DE FIN DE AÑO',
    'subtitle1' => '¡Reserva ahora y viaja en cualquer fecha del año!',
    'description1'=>'
        El año está a punto de terminar y en Royal Reservations queremos darte un regalo increíble con esta oferta especial.<br> 

Vive unas súper vacaciones en Cancún, relajándote en la playa y con las divertidas actividades de estupendos resorts familiares frente al mar, que ofrecen los mejores planes Todo Incluido y Plan Europeo. 
        
    ',
    'subtitle2' => 'Los Mejores Hoteles de Playa disponibles para esta Oferta',
    'description2'=>'
        Reserva Ahora en Plan Todo Incluido, Habitación + Desayuno o Solo Habitación.
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

            'travel_window'=>'hoy y hasta 07/01/2019',            
            'bullets'=>'
                        <li>$100 USD Spa Credit</li>
                        <li>Alimentos y bebidas ilimitados</li>
                        <li>Niños se hospedan y comen GRATIS</li>
                        
            ',
            'discount_label'=>'46% DE DESCUENTO',
            'view_more'=>'
                    
                    <p>
                    Vive unas súper vacaciones en Cancún, relajándote en la playa y con las divertidas actividades de uno de los mejores resorts familiares frente al mar.
                    </p>
                    <p>
                    Reserva desde Hoy y hasta 07/01/2019
                    Viaja entre Hoy y 03/01/2020
                    </p>
                    <p>46% DE DESCUENTO</p>
                    <p><b>Esta promoción incluye:</b>

                        <ul>
 <li>$100 USD Spa Credit</li>
 <li>Alimentos y bebidas ilimitadas</li>
 <li>Room Service las 24 horas</li>
 <li>Niños comen y se hospedan GRATIS</li>
 <li>Wi-Fi de alta velocidad GRATIS en todas las áreas</li>
                        </ul>
                    </p>
                    <p class="terms">
<b>T&Eacute;RMINOS Y CONDICIONES:</b> * Spa Credit: es por reservaci&oacute;n y solamente puede ser redimido en el Spa para masajes o tratamientos. El uso del Spa Credit generar&aacute; una cuota de servicio no negociable del 16% basado en el monto utilizado y deber&aacute; ser pagado por el hu&eacute;sped. El Spa Credit no debe ser considerado como dinero en efectivo y solamente es v&aacute;lido para esta el tiempo de la reservaci&oacute;n y deber&aacute; utilizarse en una sola transacci&oacute;n directamente en el Spa. Si no se utiliza en el Spa, no ser&aacute; v&aacute;lido en recepci&oacute;n o en otro lugar. Si el precio del servicio es mayor al val&oacute;r del Cr&eacute;dito, la diferencia ser&aacute; cargada a la cuenta del cliente. * Todo Incluido: algunos cargos adicionales podr&iacute;an aplicar para alimentos o bebidas premium. Servicio a la habitaci&oacute;n con men&uacute; limitado las 24 horas. * Ni&ntilde;os se hospedan y comen gratis: Los ni&ntilde;os de hasta 12 a&ntilde;os de edad pueden hospedarse sin costo extra utilizando las camas existentes en la habitaci&oacute;n; no hay camas extra. Los ni&ntilde;os de hasta 12 a&ntilde;os pueden comer sin costo si est&aacute;n acompa&ntilde;ados de sus padres.</p>
                           
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

            'travel_window'=>'hoy y hasta 03/01/2020',            
            'bullets'=>'
                        <li>$100 USD Spa Credit</li>
                        <li>Alimentos y bebidas ilimitados</li>
                        <li>Niños se hospedan y comen GRATIS</li>
                        
            ',
            'discount_label'=>'42% DE DESCUENTO',
            'view_more'=>'
                <p>
                    Déjanos consentirte con unas perfectas vacaciones en Cancún con tus seres queridos en uno de los mejores hoteles de playa.
                </p>         

                <p>
                Reserva desde Hoy y hasta 07/01/2019<br>
Viaja entre Hoy y 03/01/2020
                </p>

                <p><b>42% DE DESCUENTO</b></p>


                <p>
                <b>Esta promoción incluye:</b>
                <ul>
 <li>$100 USD Spa Credit</li>
 <li>Alimentos y bebidas ilimitadas</li>
 <li>Room Service las 24 horas</li>
 <li>Niños comen y se hospedan GRATIS</li>
 <li>Wi-Fi de alta velocidad GRATIS en todas las áreas</li>
                </ul>
                </p>

                <p class="terms">
TÉRMINOS Y CONDICIONES: * Spa Credit: es por reservación y solamente puede ser redimido en el Spa para masajes o tratamientos. El uso del Spa Credit generará una cuota de servicio no negociable del 16% basado en el monto utilizado y deberá ser pagado por el huésped. El Spa Credit no debe ser considerado como dinero en efectivo y solamente es válido para esta el tiempo de la reservación y deberá utilizarse en una sola transacción directamente en el Spa. Si no se utiliza en el Spa, no será válido en recepción o en otro lugar. Si el precio del servicio es mayor al valór del Crédito, la diferencia será cargada a la cuenta del cliente. * Todo Incluido: algunos cargos adicionales podrían aplicar para alimentos o bebidas premium. Servicio a la habitación con menú limitado las 24 horas.  * Niños se hospedan y comen gratis: Los niños de hasta 12 años de edad pueden hospedarse sin costo extra utilizando las camas existentes en la habitación; no hay camas extra. Los niños de hasta 12 años pueden comer sin costo si están acompañados de sus padres.
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

            'travel_window'=>'hoy y hasta 03/01/2020',            
            'bullets'=>'
                        <li>$100 USD Spa Credit</li>
                        <li>Alimentos y bebidas ilimitados</li>
                        <li>Niños se hospedan y comen GRATIS</li>
                        
            ',
            'discount_label'=>'46% DE DESCUENTO',
            'view_more'=>'
                <p>
Vive una experiencia inolvidable con un paquete de vacaciones Todo Incluido en un hotel de Playa del Carmen con esta oferta especial para ti.
                </p>         

                <p>
Reserva desde Hoy y hasta 07/01/2019<br>
Viaja entre Hoy y 03/01/2020
                </p>

                <p><b>46% DE DESCUENTO</b></p>


                <p>
                <b>Esta promoción incluye:</b>

<ul>
 <li>$100 USD Spa Credit</li>
 <li>Alimentos y bebidas ilimitadas</li>
 <li>Room Service las 24 horas</li>
 <li>Niños comen y se hospedan GRATIS</li>
 <li>Wi-Fi de alta velocidad GRATIS en todas las áreas</li>
 </ul>

                </p>

                <p class="terms">
TÉRMINOS Y CONDICIONES: * Spa Credit: es por reservación y solamente puede ser redimido en el Spa para masajes o tratamientos. El uso del Spa Credit generará una cuota de servicio no negociable del 16% basado en el monto utilizado y deberá ser pagado por el huésped. El Spa Credit no debe ser considerado como dinero en efectivo y solamente es válido para esta el tiempo de la reservación y deberá utilizarse en una sola transacción directamente en el Spa. Si no se utiliza en el Spa, no será válido en recepción o en otro lugar. Si el precio del servicio es mayor al valór del Crédito, la diferencia será cargada a la cuenta del cliente. * Todo Incluido: algunos cargos adicionales podrían aplicar para alimentos o bebidas premium. Servicio a la habitación con menú limitado las 24 horas.  * Niños se hospedan y comen gratis: Los niños de hasta 12 años de edad pueden hospedarse sin costo extra utilizando las camas existentes en la habitación; no hay camas extra. Los niños de hasta 12 años pueden comer sin costo si están acompañados de sus padres.
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

            'travel_window'=>'hoy y hasta 03/01/2020',            
            'bullets'=>'
                        <li>Masaje de 30-min en Spa</li>
                        <li>$100 USD Resort Credit</li>
                        <li>Transportación Premium al Aeropuerto</li>
                        
            ',
            'discount_label'=>'42% DE DESCUENTO',
            'view_more'=>'
                <p>
Si quieres vivir unas vacaciones perfectas en la Riviera Maya, aprovecha esta excelente oferta en un resort de lujo.
                </p>         

                <p>
Reserva desde Hoy y hasta 07/01/2019<br>
Viaja entre Hoy y 03/01/2020
                </p>

                <p><b>42% DE DESCUENTO</b></p>


                <p>
                <b>Esta promoción incluye:</b>
<ul>
 <li>$100 USD Spa Credit</li>
 <li>Alimentos y bebidas Premium ilimitadas</li>
 <li>Transportación Premium al Aeropuerto</li>
 <li>Room Service las 24 horas</li>
 <li>Niños comen y se hospedan GRATIS</li>
 <li>Wi-Fi de alta velocidad GRATIS en todas las áreas</li>
 </ul>
                </p>

                <p class="terms">
TÉRMINOS Y CONDICIONES: * Masaje: El masaje de 30 minutos es válido para una persona, una vez. El servicio requiere ser reservado con anticipación. La propina del servicio de masaje no viene incluida. El Resort Credit no debe ser considerado como dinero en efectivo, es por reservación y solo se puede aplicar directamente en la recepción al momento del pago de la cuenta, su valor podrá cubrir consumos del Spa, y el Gourmet Food Market. El Resort Credit no podrá combinarse con otras promociones ni descuentos. Esta promoción incluye un servicio de transportación de aeropuerto en viaje redondo (aeropuerto - hotel - aeropuerto)
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

            'travel_window'=>'hoy y hasta 03/01/2020',            
            'bullets'=>'
                        <li>Alimentos y bebidas ilimitados</li>
                        <li>Wi-Fi Gratuito</li>
                        <br>
                        
            ',
            'discount_label'=>'38% DE DESCUENTO',
            'view_more'=>'
                <p>
Descubre las divertidas actividades, bellezas naturales, cultura, gastronomía y las hermosas playas de Punta Cana en este hotel de lujo y con esta increíble promoción.
                </p>         

                <p>
Reserva desde Hoy y hasta 07/01/2019<br>
Viaja entre Hoy y 03/01/2020
                </p>

                <p><b>38%  DE DESCUENTO</b></p>


                <p>
                <b>Esta promoción incluye:</b>
<ul>
<li>Alimentos y bebidas Premium ilimitadas</li>
 <li>Wi-Fi de alta velocidad GRATIS en todas las áreas</li>
 </ul>
                </p>

                <p class="terms">
                TÉRMINOS Y CONDICIONES: Esstancia mínima de 4 noches requerida.
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

            'travel_window'=>'hoy y hasta 03/01/2020',            
            'bullets'=>'
                        <li>Alimentos y bebidas ilimitados</li>
                        <li>Wi-Fi Gratuito</li>
                        <br>
                        
            ',
            'discount_label'=>'38% DE DESCUENTO',
            'view_more'=>'
                <p>
Experimenta un hospedaje de lujo, servicios y amenidades de primera categoría en Ancora Resort en Punta Cana y disfruta tus vacaciones al máximo.
                </p>         

                <p>
Reserva desde Hoy y hasta 07/01/2019<br>
Viaja entre Hoy y 03/01/2020
                </p>

                <p><b>38%  DE DESCUENTO</b></p>


                <p>
                <b>Esta promoción incluye:</b>
<ul>
<li>Alimentos y bebidas ilimitadas</li>
 <li>Wi-Fi de alta velocidad GRATIS en todas las áreas</li>
 </ul>
                </p>

                <p class="terms">
TÉRMINOS Y CONDICIONES: Esstancia mínima de 4 noches requerida.
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

            'travel_window'=>'hoy y hasta 03/01/2020',            
            'bullets'=>'
                        <li>$100 USD Spa Credit</li>
                        <li>Niños se hospedan y comen GRATIS</li>
                        <br>
                        
            ',
            'discount_label'=>'46% DE DESCUENTO',
            'view_more'=>'
                <p>
                Reserva ahora con Royal Reservations y disfruta tus vacaciones en Cancún en cualquier fecha del próximo año.
                </p>         

                <p>
                Reserva desde Hoy y hasta 07/01/2019<br>
                Viaja entre Hoy y 03/01/2020
                </p>


                <p>
                <b>46% DE DESCUENTO</b>

                </p>

                <p>
                <b>Esta promoción incluye:</b>
                 <ul>
 <li>$100 USD Spa Credit</li>
 <li>Niños se hospedan GRATIS</li>
 <li>Wi-Fi de alta velocidad GRATIS en todas las áreas</li>
                 </ul>
                </p>

                <p class="terms">
<b>TÉRMINOS Y CONDICIONES:</b> * Spa Credit: es por reservación y solamente puede ser redimido en el Spa para masajes o tratamientos. El uso del Spa Credit generará una cuota de servicio no negociable del 16% basado en el monto utilizado y deberá ser pagado por el huésped. El Spa Credit no debe ser considerado como dinero en efectivo y solamente es válido para esta el tiempo de la reservación y deberá utilizarse en una sola transacción directamente en el Spa. Si no se utiliza en el Spa, no será válido en recepción o en otro lugar. Si el precio del servicio es mayor al valór del Crédito, la diferencia será cargada a la cuenta del cliente. Servicio a la habitación con menú limitado las 24 horas.  * Niños se hospedan gratis: Los niños de hasta 12 años de edad pueden hospedarse sin costo extra utilizando las camas existentes en la habitación; no hay camas extra.
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

            'travel_window'=>'hoy y hasta 03/01/2020',            
            'bullets'=>'
                        <li>$100 USD Spa Credit</li>
                        <li>Niños se hospedan y comen GRATIS</li>
                       <br>
                        
            ',
            'discount_label'=>'46% DE DESCUENTO',
            'view_more'=>'
                <p>
Este es el tiempo perfecto para reservar tus vacaciones y con esta promoción especial de Fin de Año, disfrutarás al máximo tus próximas vacaciones en Cancún.
                </p>         

                <p>
Reserva desde Hoy y hasta 07/01/2019<br>
Viaja entre Hoy y 03/01/2020
                </p>

                <p><b>46% DE DESCUENTO</b></p>


                <p>
                <b>Esta promoción incluye:</b>

<ul>
 <li>$100 USD Spa Credit</li>
 <li>Niños se hospedan GRATIS</li>
 <li>Wi-Fi de alta velocidad GRATIS en todas las áreas</li>
 </ul>
                </p>

                <p class="terms">
TÉRMINOS Y CONDICIONES: * Spa Credit: es por reservación y solamente puede ser redimido en el Spa para masajes o tratamientos. El uso del Spa Credit generará una cuota de servicio no negociable del 16% basado en el monto utilizado y deberá ser pagado por el huésped. El Spa Credit no debe ser considerado como dinero en efectivo y solamente es válido para esta el tiempo de la reservación y deberá utilizarse en una sola transacción directamente en el Spa. Si no se utiliza en el Spa, no será válido en recepción o en otro lugar. Si el precio del servicio es mayor al valór del Crédito, la diferencia será cargada a la cuenta del cliente. Servicio a la habitación con menú limitado las 24 horas.  * Niños se hospedan gratis: Los niños de hasta 12 años de edad pueden hospedarse sin costo extra utilizando las camas existentes en la habitación; no hay camas extra.
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

            'travel_window'=>'hoy y hasta 07/01/2019',            
            'bullets'=>'
                        <li>Masaje de 30-min en Spa</li>
                        <li>$100 USD Resort Credit</li>
                        <li>Transportación Premium al Aeropuerto</li>
                        
            ',
            'discount_label'=>'42% DE DESCUENTO',
            'view_more'=>'
                <p>
El fin de año trae consigo el mejor regalo para ti en Royal Reservations con este especial de vacaciones en la Riviera Maya.
                </p>         

                <p>
Reserva desde Hoy y hasta 07/01/2019<br>
Viaja entre Hoy y 03/01/2020
                </p>

                <p><b>42% DE DESCUENTO</b></p>


                <p>
                <b>Esta promoción incluye:</b>
<ul>
 <li>$100 USD Spa Credit</li>
 <li>Alimentos y bebidas Premium ilimitadas</li>
 <li>Transportación Premium al Aeropuerto</li>
 <li>Room Service las 24 horas</li>
 <li>Niños comen y se hospedan GRATIS</li>
 <li>Wi-Fi de alta velocidad GRATIS en todas las áreas</li>
 </li>
                </p>

                <p class="terms">
TÉRMINOS Y CONDICIONES: * Masaje: El masaje de 30 minutos es válido para una persona, una vez. El servicio requiere ser reservado con anticipación. La propina del servicio de masaje no viene incluida. El Resort Credit no debe ser considerado como dinero en efectivo, es por reservación y solo se puede aplicar directamente en la recepción al momento del pago de la cuenta, su valor podrá cubrir consumos del Spa, y el Gourmet Food Market. El Resort Credit no podrá combinarse con otras promociones ni descuentos. Esta promoción incluye un servicio de transportación de aeropuerto en viaje redondo (aeropuerto - hotel - aeropuerto)
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

            'travel_window'=>'hoy y hasta 03/01/2020',            
            'bullets'=>'
                        <li>Wi-Fi Gratuito</li>
                        <br><br>
                        
            ',
            'discount_label'=>'48% DE DESCUENTO',
            'view_more'=>'
                <p>
Royal Reservations tiene la excusa perfecta para que vivas unas increíbles vacacuiones en la playa de la Isla de St. Maarten. 
                </p>         

                <p>
Reserva desde Hoy y hasta 07/01/2019<br>
Viaja entre Hoy y 03/01/2020
                </p>

                <p><b>48% DE DESCUENTO</b></p>

                <p>
                <b>Esta promoción incluye:</b>
                <ul>
                    <li>Wi-Fi de alta velocidad GRATIS en todas las áreas</li>
                </ul>
                </p>

                <p class="terms">
TÉRMINOS Y CONDICIONES: Esta promoción no incluye alimentos ni bebidas.
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

            'travel_window'=>'hoy y hasta 03/01/2020',            
            'bullets'=>'
                        <li>Wi-Fi Gratuito</li>
                        <br><br>
                        
            ',
            'discount_label'=>'48% DE DESCUENTO',
            'view_more'=>'
                 <p>
Con esta oferta especial, tu familia y tú experimentarán unas unas fabulosas vacaciones con el ambiente de las islas del Caribe, su cultura y el clima cálido para que escapen del frío y se relajen en la playa.
                </p>         

                <p>
Reserva desde Hoy y hasta 07/01/2019<br>
Viaja entre Hoy y 03/01/2020
                </p>

                <p><b>48% DE DESCUENTO</b></p>


                <p>
                <b>Esta promoción incluye:</b>
                <ul>
                <li>Wi-Fi de alta velocidad GRATIS en todas las áreas</li>
                </ul>

                </p>

                <p class="terms">
TÉRMINOS Y CONDICIONES: Esta promoción no incluye alimentos ni bebidas.
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

            'travel_window'=>'hoy y hasta 03/01/2020',            
            'bullets'=>'
                        <li>Wi-Fi Gratuito</li>
                        <br><br>
                        
            ',
            'discount_label'=>'38%  DE DESCUENTO',
            'view_more'=>'
                <p>
El paraíso de Curacao te está esperando para vivir unas inolvidables vacaciones en la playa con esta súper oferta de Royal Reservations.
                </p>         

                <p>
Reserva desde Hoy y hasta 07/01/2019<br>
Viaja entre Hoy y 03/01/2020
                </p>

                <p><b>38% DE DESCUENTO</b></p>


                <p>
                <b>Esta promoción incluye:</b>
                <ul>

<li>Wi-Fi de alta velocidad GRATIS en todas las áreas</li>
</ul>
                </p>

                <p class="terms">
TÉRMINOS Y CONDICIONES: Esta promoción no incluye alimentos ni bebidas.
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

            'travel_window'=>'hoy y hasta 03/01/2020',            
            'bullets'=>'
                        <li>Wi-Fi Gratuito</li>
                        <br><br>
                        
            ',
            'discount_label'=>'38%  DE DESCUENTO',
            'view_more'=>'
                <p>
Con Royal Reservations y sus fabulosas promociones, visitarás Punta Cana y disfrutarás de sus marabillas.
                </p>         

                <p>
Reserva desde Hoy y hasta 07/01/2019<br>
Viaja entre Hoy y 03/01/2020
                </p>

                <p><b>38% DE DESCUENTO</b></p>


                <p>
                <b>Esta promoción incluye:</b>
<ul>
<li>Wi-Fi de alta velocidad GRATIS en todas las áreas</li>
</ul>
                </p>

                <p class="terms">
TÉRMINOS Y CONDICIONES: Esta promoción no incluye alimentos ni bebidas.
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

            'travel_window'=>'hoy y hasta 03/01/2020',            
            'bullets'=>'
                        <li>Masaje de 30-min en Spa</li>
                        <li>$100 USD Resort Credit</li>
                        <li>Transportación Premium al Aeropuerto</li>
                        
            ',
            'discount_label'=>'42% DE DESCUENTO',
            'view_more'=>'
                <p>
Con esta promoción de Habitación + Desayunos, disfrutarás de un deliciodo buffet o desayuno a la carta en nuestros espectaculares restaurantes, o si lo deseas, podrás ordenar servicio de Room Service para la hora del desayuno.
                </p>         

                <p>
Reserva desde Hoy y hasta 07/01/2019<br>
Viaja entre Hoy y 03/01/2020
                </p>

                <p><b>42% DE DESCUENTO</b></p>


                <p>
                <b>Esta promoción incluye:</b>
<ul>
 <li>$100 USD Spa Credit</li>
 <li>Alimentos y bebidas Premium ilimitadas</li>
 <li>Transportación Premium al Aeropuerto</li>
 <li>Room Service las 24 horas</li>
 <li>Niños comen y se hospedan GRATIS</li>
 <li>Wi-Fi de alta velocidad GRATIS en todas las áreas</li>
 </ul>
                </p>

                <p class="terms">
TÉRMINOS Y CONDICIONES: * Masaje: El masaje de 30 minutos es válido para una persona, una vez. El servicio requiere ser reservado con anticipación. La propina del servicio de masaje no viene incluida. El Resort Credit no debe ser considerado como dinero en efectivo, es por reservación y solo se puede aplicar directamente en la recepción al momento del pago de la cuenta, su valor podrá cubrir consumos del Spa, y el Gourmet Food Market. El Resort Credit no podrá combinarse con otras promociones ni descuentos. Esta promoción incluye un servicio de transportación de aeropuerto en viaje redondo (aeropuerto - hotel - aeropuerto)
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