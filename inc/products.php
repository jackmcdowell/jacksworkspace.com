<?php

/*
 * Returns the four most recent products, using the order of the elements in the array
 * @return   array           a list of the last four products in the array;
                             the most recent product is the last one in the array
 */
function get_products_recent() {
    $recent = array();
    $all = get_products_all();

    $total_products = count($all);
    $position = 0;
    
    foreach($all as $product) {
        $position = $position + 1;
        if ($total_products - $position < 4) {
            $recent[] = $product;
        }
    }
    return $recent;
}

/*
 * Loops through all the products, looking for a search term in the product names
 * @param    string    $s    the search term
 * @return   array           a list of the products that contain the search term in their name
 */
function get_products_search($s) {
    $results = array();
    $all = get_products_all();

    foreach($all as $product) {
        if (stripos($product["name"],$s) !== false) {
            $results[] = $product;
        }
    }
    return $results;
}

/*
 * Counts the total number of products
 * @return   int             the total number of products
 */
function get_products_count() {
    return count(get_products_all());
}

/*
 * Returns a specified subset of products, based on the values received,
 * using the order of the elements in the array .
 * @param    int             the position of the first product in the requested subset 
 * @param    int             the position of the last product in the requested subset 
 * @return   array           the list of products that correspond to the start and end positions
 */
function get_products_subset($positionStart, $positionEnd) {
    $subset = array();
    $all = get_products_all();

    $position = 0;
    foreach($all as $product) {
        $position += 1;
        if ($position >= $positionStart && $position <= $positionEnd) {
            $subset[] = $product;
        }
    }
    return $subset;
}

/*
 * Returns the full list of products. This function contains the full list of products,
 * and the other model functions first call this function.
 * @return   array           the full list of products
 */
function get_products_all() {
    $products = array();
    $products[101] = array(
        "name" => "Balotaje en Chicago: ¿Podría Chicago tener su primer alcalde hispano?",
        "img" => "img/images/chuy.jpg",
        "caption" => "Jesús “Chuy” García y su familia",
        "url" => "http://usahispanicpress.com/balotaje-en-chicago-podria-chicago-tener-su-primer-alcalde-hispano/",
        "text" => "Rahm Emanuel, el alcalde de Chicago y ex-Jefe de Gabinete de la Casa Blanca, se encuentra en una inesperada lucha política para mantener su cargo político. Un hispano poco conocido a nivel nacional, Jesús “Chuy” García, está desafiando el reino del conocido demócrata.
<br><br>
El pasado 24 de febrero tuvo lugar la elección para la alcaldía de Chicago. Los sondeos predecían que Rahm iba a ganar con un margen de 22 puntos, con Jesús “Chuy” en segundo lugar sacando apenas 26% de los votos. Sin embargo, Rahm se vio forzado a ir a ballotage gracias a los esfuerzos de Chuy quien logró sacar 34% del voto, sorprendiendo al veterano favorito de Obama quien sacó apenas 45%, cinco puntos debajo de lo requerido para ganar la elección en una ronda.
<br><br>
Jesús “Chuy” García es un político americano con poco reconocimiento nacional. Nació en Durango, México, y fue el primer mexicano-americano en el senado del estado Illinois. En 1965, se mudó a Chicago como residente permanente donde estudió y comenzó su carrera política. A diferencia de su contrincante, Chuy se dedicó a luchar por los miembros más pobres de Chicago, haciendo lo posible para mejorar la educación y evitar la clausura de colegios.
<br><br>
A diferencia de Chuy, Rahm Emanuel cuenta con el apoyo y los grandes bolsillos de los donantes demócratas de Chicago. También cuenta con una larga historia política a nivel nacional, donde fue la mano derecha del presidente Obama durante sus primeros años. Fue un personaje clave cuando la administración pasó la famosa ley de Obamacare que hoy se encuentra frente a la corte suprema. De hecho, Obama ayudó a promocionar la campaña de Rahm para ganarle favor con los demócratas de Chicago.
<br><br>
Aunque es probable que Rahm gane el balotaje para la alcaldía de Chicago, el cambio que está sucediendo en los Estados Unidos es revolucionario. Es de esperar que los hispanos puedan definir  las elecciones en los estados con alta población latina como California o Florida, pero que puedan desafiar a la vieja guarda en bastiones tradicionales como lo es la ciudad de Chicago es una novedad.
<br><br>
Si un candidato poco conocido como Jesús “Chuy” puede hacer sudar al famoso Rahm Emanuel, las posibilidades para las elecciones nacionales de 2016 son extraordinarias.
<br><br>
Los hispanos han tradicionalmente favorecido a los demócratas, ya que sus  políticas de amnistía y bienestar social apoyan a los inmigrantes. Sin embargo, cuando hablamos de  valores morales, los hispanos tienen más en común con los republicanos. A medida que se integren con la sociedad americana y formen mayor parte del electorado, los latinos jugarán un rol cada vez más importante en futuras elecciones.
<br><br>
Aunque en la elección nacional del año pasado los latinos votaron en su mayoría por candidatos demócratas, esta tendencia comenzó a revertirse. ¿Qué sucederá en 2016? Solo el tiempo lo dirá, pero si la elección del favorito de Obama en Chicago es alguna indicación, será importante prestarle atención al electorado hispano, ya que por más que no seamos capaces de ganar elecciones por cuenta propia, pronto seremos una fuerza política determinante."
     );
    $products[102] = array(
        "name" => "Marcus Giavanni: candidato para la alcaldía de la ciudad de Denver",
        "img" => "img/images/giavanni.jpg",
        "caption" => "Una persona con un disfraz sostiene un cartel de propaganda política del candidato a la alcaldía de Denver Marcus Giavanni",
        "url" => "http://usahispanicpress.com/marcus-giavanni-candidato-para-la-alcaldia-de-la-ciudad-de-denver/",
        "text" => "Marcus Giavanni es un candidato para la alcaldía de la ciudad de Denver, Colorado. Presentándose como candidato independiente, que está tratando de reemplazar el demócrata Michael Hancock con la ayuda del voto hispano el cinco de mayo de este año.
<br><br>
Giavanni fue adoptado de Puerto Rico, y es de descendencia hispana-Taina, aunque fue criado por una familia católica de raza mixta en Phoenix, Arizona. A temprana edad se mudó a Colorado, donde trabaja como consultor de la optimización de motores de búsqueda (Search Engine Optimization) y dirige una compañía llamada GP7A. Durante los últimos cinco años, también se ha dedicado a la política; ha sido candidato a Gobernador de Colorado, y actualmente candidato para la alcaldía de la ciudad más grande de este estado, Denver.
<br><br>
Denver es una ciudad diversa y tiene una población hispana del 31,8%, por lo que es una de las ciudades con mayor concentración de hispanos en los Estados Unidos. Por lo tanto, es previsible que el voto hispano jugará papel importante en su futuro. Sin embargo, los hispanos han favorecido tradicionalmente a los candidatos demócratas, y por tanto, puede ser difícil para un tercer candidato del partido para ganar la elección.
<br><br>
Aunque Giavanni espera ganar las elecciones, la pregunta es si puede conseguir suficientes votos para lograr este objetivo, y Giavanni está convencido de que puede convencer a los votantes hispanos. A continuación explica cómo piensa ganar las elecciones, y porque piensa Denver necesita un cambio:
<br><br>
¿Cuáles son las principales dificultades que enfrentan los hispanos en Denver?
<br>
El 58% de los estudiantes en el sistema de Escuelas Públicas de Denver son hispanos. Cuando los estudiantes toman los exámenes estándar de tercer grado, el sistema planea su futuro. El porcentaje de aprobados en las pruebas se utiliza para planificar no sólo a la educación, sino para el crecimiento a largo plazo de la población penal con fines de lucro del estado. DPS se centra en el envío de todo el mundo a la universidad, y los que no valerse por sí mismos. Muchas familias hispanas basan sus ingresos en empleos de servicios que no requieren de la universidad. Denver necesita profesores de formación más profesional y los administradores deben tener opciones para guiar a los estudiantes hacia el servicio y las carreras técnicas, y no hacia las prisiones de lucro.
<br><br>
¿Cómo tiene la intención de convocar el voto hispano en Denver?
<br>
En los últimos cinco años he hablado con miles de votantes en la comunidad hispana de Denver. Todos los años oigo lo mismo: este alcalde no nos escucha. Ya sea que ven alcalde Michael Hancock como alguien que sólo aparece en época de elecciones, o alguien que viene buscando donaciones, los votantes hispanos no han visto o escuchado de este alcalde o visto impactos positivos de sus políticas.
Entiendo los problemas que enfrenta esta comunidad y quiero ser el líder de todas las familias trabajadoras. Yo defiendo la educación pre-k y la legislación salario digno, junto con las políticas que impulsarán el crecimiento y negocios en todo el siglo 21.
<br><br>
¿Qué le gustaría comunicar a los votantes en Denver?
<br>
Es hora de que hagamos un balance de lo que queremos para el futuro de nuestra metrópolis, Denver. A todos nos gusta Denver, y todos deberíamos tener una voz en las políticas que nos afectan. Como alcalde, voy a llamar un Congreso de Ciudadanos para discutir los temas importantes para nosotros como latinos que amamos a Denver. El Congreso del Ciudadano traerá a cientos o incluso miles de personas por las asociaciones del sector a participar en el diálogo respetuoso donde cada voz cuenta. Juntos podemos establecer prioridades para la formulación de políticas y una visión para el futuro de Denver.
Yo también defenderé el pre-kindergarten universal en Denver, para que todos los niños de Denver lleguen a los cinco años listos para aprender. Esta es la mejor inversión en las políticas públicas. Cada dólar que ponemos en pre-k ahorra entre diez a quince dólares la sociedad durante la vida de nuestros niños.
<br><br>
¿Cuáles serán sus próximos pasos políticos después de esta elección? ¿Y planea aliarse con un partido político?
<br>
Después de la elección, tengo la intención de ser alcalde de Denver. Inmediatamente, voy a llamar a los jefes de todos los departamentos y explorar un examen exhaustivo de todas las operaciones. Voy a llegar a los miembros del Consejo de la Ciudad, Superintendente de las Escuelas Públicas de Denver, alcaldes de nuestros socios regionales, incluyendo las ciudades de metro como Aurora, Littleton, y Lakewood, y también a nuestros países socios incluyendo Adams, Jefferson, Douglas, y Arapahoe. Nuestra Denver Metropolis incluye a todos, siento que puedo representar mejor los intereses de todo el mundo que ama Denver, permaneciendo líder de la comunidad independiente, no partidista.
Es hora de que tengamos una conversación como adultos, y dejamos que diversas voces, tratadas con respeto, determinen las políticas que son buenas para los negocios, buenas para la comunidad, y aumenten la seguridad para todos.
¡Voten por Marcus Giavanni el Cinco de Mayo y manténganse alerta a ver si ven la vaca loca!
"
     );
    $products[103] = array(
        "name" => "El fin de la luna de miel kirchnerista",
        "img" => "img/images/kirchner.jpg",
        "caption" => "Miles de docentes de la provincia de Buenos Aires, la mayor de Argentina, en huelga",
        "url" => "http://usahispanicpress.com/el-fin-de-la-luna-de-miel-kirchnerista/",
        "text" => "La economía argentina está entrando en una profunda recesión, el anticipado resultado de las políticas económicas del Frente Para la Victoria. De hecho, a principios de año ya había indicios de que la economía comenzaba a desbaratarse; el crecimiento del PBI y el consumo privado comenzaba a deslizarse. Sin embargo, el gobierno argentino se jactaba de que la inflación finalmente parecía estar bajo control, en vez de enfrentar la realidad de que la inflación estaba bajando gracias a una desaceleración del consumo.
<br><br>
En vez de enfrentar la situación, el gobierno argentino vive en un mundo de fantasía en el cual la realidad económica es creada a través del discurso político. Según la ideología dogmática socialista de Cristina Kirchner y sus camaradas, las dificultades económicas que afectan al país son el resultado de las acciones de grupos opositores y de las grandes corporaciones. La inflación se debe a los buitres capitalistas y la codicia de las multinacionales, y la alta tasa de interés es causada por los bancos depredadores. Efectivamente, según el gobierno kirchnerista, la única salvación para el pueblo argentino es continuar con las mismas políticas que han causado los actuales destrozos económicos.
<br><br>
El gobierno argentino ha intentado manipular la narrativa económica a través de la manipulación de los datos económicos, presentando una imagen artificialmente positiva. Encontrar datos básicos económicos se ha convertido en una difícil tarea, dado que el Fondo Monetario Internacional ha dejado de publicar información oficial desde el 2006 debido a las distorsiones fomentadas por el gobierno de CFK. Sin embargo, las últimas estadísticas demuestran el peligroso paso al cual se ha desacelerado la economía argentina, y la realidad de que Argentina está entrando en una nueva recesión.
<br><br>
Después de una década de fuerte crecimiento, las malas decisiones económicas parecen haber finalmente llegado a su límite. El Instituto Nacional de Estadística y Censos (INDEC) publicó nuevos datos que indican que todos los componentes del PBI han caído. Este bajo nivel de crecimiento es aún peor si tomamos en cuenta que el crecimiento para el 2013 fue solamente del 3%. Evidentemente, la estrategia de crecimiento argentina ha dejado de rendir fruto, en gran parte debido a que la oferta de productos agrícolas y materias primas no puede seguir creciendo al desenfrenado paso de la última década, cuando el crecimiento del PBI frecuentemente superaba el 9%.
<br><br>
Aunque la situación inflacionaria sigue siendo problemática, hemos visto una desaceleración en los primeros meses de 2014. En enero, la inflación llegaba al 3.7%, y en abril apenas supera el 2%. A pesar de que ésta es una sutil mejora, un 2% mensual sigue representando una importante depreciación de los ingresos. El gobierno kirchnerista trata de pintar esta baja inflacionaria como un éxito de sus políticas, pero la realidad es que esta reducción se debe en gran parte a la expansión de la lista de precios congelado para los productos alimenticios y la desaceleración del consumo. De hecho, la reducción en la inflación no refleja una mejora económica, sino que es el producto de las distorsiones del mercado y un pronóstico de una nueva recesión.
<br><br>
El presidente del Instituto Argentino de Ejecutivos de Finanzas (IAEF), Guillermo Rimoldi, explica que “la economía nacional está registrando signos de desaceleración y es fundamental recuperar el camino del crecimiento, para lo cual es necesario combatir la inflación y el déficit fiscal, ya que los mismos son los principales desafíos que tiene que afrontar nuestro país”. El problema inflacionario no ha desaparecido, sino que el gobierno continúa distorsionando el mercado a través de propuestas socialistas como la lista de precios congelados para que la inflación parezca incrementar a un nivel más bajo.
<br><br>
La Argentina se encuentra en una encrucijada. El auge del crecimiento ha terminado; el pobre crecimiento del PBI y la perduración de la inflación reflejan cómo las políticas económicas del gobierno kirchnerista están fallando. Sin embargo, en vez de cambiar de rumbo, el gobierno parece inmerso en utilizar sus políticas socialistas para enmascarar el problema. Lo que la Argentina necesita es un crecimiento económico sostenible. Para lograrlo no es suficiente manipular los precios de los productos básicos, incrementar los subsidios domésticos o forzar subas salariales. Lo que se necesita son políticas económicas que conduzcan a un crecimiento sostenible.
"
     );
    $products[104] = array(
        "name" => "La espiral inflacionaria argentina: cómo las políticas kirchneristas alimentan el problema",
        "img" => "img/images/kirchner2.jpg",
        "caption" => "Un hombre observa una vitrina de un almacén de ropa con sus precios el miércoles 29 de enero de 2014, en el centro de Buenos Aires",
        "url" => "http://usahispanicpress.com/la-espiral-inflacionaria-argentina-como-las-politicas-kirchneristas-alimentan-el-problema/",
        "text" => "La inflación argentina ha llegado a un nivel tan desproporcionado, que el primero de abril se creó un consejo estatal y multisectorial para analizar la situación. El intercambio a dólares sigue difícil de obtener, y el dólar blue supera los 10 a 1. A pesar de esto, la recaudación fiscal en marzo totalizó casi 80 mil millones de pesos, con un alza interanual del 30,6 por ciento, en gran parte ayudado por la recaudación de las retenciones. Con esta recaudación, el gobierno kirchnerista ha financiado sus planes sociales y financiado los incrementos de los salarios públicos para compensar la inflación. Sin embargo, la inflación y la degradación del cambio no parecen tener fin, y reflejan la peligrosa inestabilidad que el rápido crecimiento económico ha creado en la Argentina.
<br><br>
Argentina es uno de los principales actores del nuevo socialismo latinoamericano. El modelo de desarrollo económico del gobierno de Cristina Fernández sigue un esquema de sustitución de importaciones y redistribución. Sin embargo, las reglas económicas parecen cambiar a diario, creando un ambiente de incertidumbre económica y una situación hiperinflacionaria. De hecho, el nivel de inflación ha llegado a un punto tan insostenible que el gobierno ha instalado controles de precios para combatir la inflación artificialmente.
<br><br>
Por un lado, la economía argentina parece demostrar el triunfo del socialismo latinoamericano, con un crecimiento económico inaudito y una reducción del coeficiente GINI durante la última década, gracias a las políticas socialistas del gobierno de redistribución e incrementos salariales. El PBI argentino ha crecido más de 8% casi continuamente durante el gobierno kirchnerista; sin mirar más allá de los datos, se podría decir que esto valida las políticas autárquicas de su gobierno. Sin embargo, el crecimiento económico argentino que ha limitado la oferta con su política de sustitución de importaciones, y la política monetaria laxa, ha causado una espiral inflacionaria donde el gobierno ha tenido que tomar medidas extraordinarias para limitar la compra de dólares y mantener los sueldos a la par con la inflación.
<br><br>
La estrategia de crecimiento argentina está basada en el fomento de la industria nacional y la exportación de productos primarios que le permiten al gobierno financiar sus subsidios domésticos. Para lograr esto, el gobierno argentino ha inventado maneras diversas de proteger su industria doméstica, limitando la compra de dólares y obligando a que los importadores se alíen con exportadores. Cada importación debe estar acompañada de una suma equivalente de productos exportados, ya sean propios o de una empresa ajena. Aunque estas reglamentaciones han promovido la industria nacional, los precios se han disparado debido al incremento en demanda y la falta de competencia que el comercio libre permite. Por ende, los argentinos no tienen motivo para ahorrar dado el nivel inflacionario y la dificultad para comprar moneda extranjera.
<br><br>
Dado el exorbitante nivel inflacionario, el gobierno ha necesitado negociar subas de sueldos periódicas para apaciguar a su base. Como el gobierno dicta la suba de salarios, los gremios con conexiones fuertes en el gobierno K, la CGT, logran negociar mejores subas de salario, mientras que los jubilados y los docentes ven cómo sus ingresos se deterioran con el tiempo.
<br><br>
La inflación ha creado una situación donde el ahorro en pesos es completamente irracional, debido a la depreciación de la moneda nacional. Normalmente en tiempos de inflación la gente decide ahorrar en monedas extranjeras, para limitar la depreciación de sus ahorros. El gobierno de Cristina inicialmente respondió cerrando las casas de cambio, pero en las últimas semanas decidió permitirles a algunos individuos de clase media-alta comprar dólares para ahorro a una tasa especial.
<br><br>
Al limitar la compra de dólares a aquellos que tienen un ingreso mensual superior a los 7.500 pesos, el gobierno ha demostrado que su base, la clase laboral, no tiene derecho legal para ahorrar en una moneda estable. Por ende, la única solución que tiene el gobierno de Cristina es continuar empujando subidas salariales para mantener a la población a flote.
<br><br>
El gobierno argentino parece no entender los fundamentos básicos económicos, y el nuevo cabildo contra la inflación culpa a los “formadores de precio” y las grandes empresas por la inflación descontrolada. Efectivamente, el propósito del cabildo parece ser simplemente otra manera de extorsionar a los empresarios por su supuesta explotación del “pueblo” con la suba artificial de precios. Sin embargo, el problema es mucho más simple; una cuestión de oferta y demanda. La suba salarial y la imposibilidad de ahorro (creada por restricciones a la compra de dólares por el gobierno) han creado una situación inflacionaria sin solución.
<br><br>
El problema es que, sin un incentivo para ahorrar, el único uso racional de los ingresos es el gasto inmediato. Si los sueldos y los programas sociales continúan aumentando, y la gente no tiene motivo para ahorrar, es lógico que la inflación continuará acelerándose. Efectivamente, la Argentina está en una espiral inflacionaria y las políticas económicas no hacen más que alimentar esta situación.
<br><br>
Mientras que “el pueblo” no tenga razón para ahorrar, no hay invento económico que pueda solucionar la crisis inflacionaria. Esta parece ser la estrategia del nuevo socialismo latinoamericano: crear un ejército de trabajadores dependientes de las políticas gubernamentales, que están a la merced del poder ejecutivo para poder llenar su canasta básica. Bajo esta mirada, la decisión de limitar la compra de dólares a aquellos individuos cuyo sueldo mensual supera 7.500 pesos mensuales es simplemente una manera cínica para mantener al pueblo bajo la merced del gobierno kirchnerista, presentando un discurso anti-capitalista y al mismo tiempo manteniendo la situación económica en un estado de deterioro que requiere la dependencia del gobierno central.
"
     );
    $products[105] = array(
        "name" => "Las promesas rotas de Obama",
        "img" => "img/images/ice.jpg",
        "caption" => "Agentes del Servicio de Inmigración y Aduanas (ICE, en inglés) trasladan a un detenido en EE.UU.",
        "url" => "http://usahispanicpress.com/las-promesas-rotas-de-obama/",
        "text" => "Los inmigrantes latinos que han pasado años navegando los obstáculos del Servicio de Ciudadanía e Inmigración de los Estados Unidos se vieron sorprendidos cuando Obama decidió permitir que ciertos inmigrantes ilegales se quedasen cuasi-legalmente en los Estados Unidos. Digo cuasi-legalmente porque Obama no tiene la autoridad para otorgar amnistía, ya que el proceso de naturalización está dictado por el congreso nacional. Lo único que Obama cambió es la manera en la cual las leyes son implementadas, o en este caso, no son implementadas.
<br><br>
Siendo una orden ejecutiva, la “amnistía” de Obama está a la merced de los futuros líderes políticos. Los republicanos y varios comentadores políticos ya han indicado que se trata de una orden inconstitucional, y que intentarán revocarla a través de las cortes o pasando nueva legislación. Por lo tanto, los inmigrantes que están aprovechándose de esta orden podrían estar facilitando su futura deportación al presentar su información al gobierno.
<br><br>
A miles de inmigrantes ilegales se les ha informado que tendrán que esperar hasta el 2019 para que sus casos sean resueltos en los tribunales. Esto significa que los inmigrantes ilegales deberán esperar hasta después de la próxima elección presidencial para ver si se les permitirá quedarse en este país. Los abogados de inmigración temen que esto dejará a sus clientes expuestos a la deportación, y como dice un abogado de Denver, “Es como si no existiera el tribunal”.
<br><br>
Al haber pasado esta orden, Obama logró que miles de inmigrantes admitiesen su presencia ilegal en los Estados Unidos. Demorando los tribunales, los demócratas han creado una situación donde los hispanos no tendrán más opción que seguir votándolos para evitar que sus familiares y amigos ilegales sean deportados. Después de ver como los demócratas perdieron en las elecciones de 1014 y como poco a poco los hispanos están acercándose a los republicanos, ¿podría esta ser la estrategia nefaria de los demócratas para ganar la próxima elección presidencial?"
     );
    $products[106] = array(
        "name" => "Venezuela: Pagando el precio de la mono-producción",
        "img" => "img/images/venezuela.jpg",
        "caption" => "El canciller venezolano Rafael Ramírez (d) y el ministro de Petróleo y Minería de Venezuela Asdrúbal Chávez participan en la XIV Reunión del Consejo ministerial de Petrocaribe este 20 de noviembre del 2014, en la ciudad de Caracas (Venezuela)",
        "url" => "http://usahispanicpress.com/pagando-el-precio-de-la-mono-produccion/",
        "text" => "Para los consumidores de petróleo la caída de precios es una bienvenida sorpresa. Los analistas políticos ya están prediciendo que China comenzará a utilizar combustibles más limpios gracias al costo reducido, mientras que los consumidores Norteamericanos disfrutan de nafta a un precio que no han visto desde antes del presidente G.W. Bush. Y según Arabia Saudita, un barril de petróleo jamás volverá a costar más que cien dólares. Entonces, ¿qué sucederá con los países latinoamericanos que dependen del petróleo para compensar su balanza de pagos?
<br><br>
La mono-producción es un tema conocido en américa latina. Frecuentemente aparece como un espectro del imperialismo yanqui que plaga a los países periféricos para la explotación de los países poderosos. Esta es la famosa teoría de la dependencia, o el leninismo sudamericano.
<br><br>
Pero ¿qué sucede cuando son los mismos dirigentes socialistas los que promueven y se benefician de la mono-producción?
<br><br>
Ya hemos visto la lucha interna entre el gobierno argentino y el campo en torno a la soja. Pero eso no quita que el gobierno argentino ha financiado alrededor de un 20% del gasto público gracias a las retenciones a la soja. Lo que vemos es una situación donde el gobierno habla en contra de los productores, mientras que a su vez necesita que los precios se mantengan altos para poder financiar su gasto.
<br><br>
La caída del precio del petróleo ha creado un problema importante para los países que dependen de él como su principal fuente de ingresos: en particular Ecuador y Venezuela. Estos países se han beneficiado del alto precio del petróleo para financiar su gasto público, pero como las proyecciones del gasto público fueron creadas con la expectativa de que el precio del petróleo iba a quedar fijo, al caer el precio del petróleo ya no podrán financiar este nivel de gasto público.
<br><br>
La tasa de interés de los bonos venezolanos de dos años es de 62.6%, ya que se espera que el gobierno entrará en default si el precio del petróleo sigue cayendo. Petróleos de Venezuela SA (PDVSA) tiene una deuda de $66 billones de dólares, y recientemente su rating fue bajado a CCC de B por Fitch, y a Caa3 por Moody’s, un paso arriba de default. Los bonos de diez años de Ecuador hoy superan el 11%, mientras que hace menos de un año rondaban el 8%.
<br><br>
Venezuela depende del petróleo para financiar el 40% de su gasto, y más del 90% de sus divisas provienen del petróleo. Ya que la deuda publica ronda el 50% del PBI, Venezuela se encuentra en una situación muy precaria. Además de esto, la caída del petróleo garantiza que Venezuela no podrá liberalizar el dólar, ya que esto causaría una corrida a los bancos si se mantuviese el dólar oficial.
<br><br>
El problema de las malas políticas macroeconómicas del socialismo del siglo XXI finalmente está afectando la imagen del presidente Maduro. En noviembre del año pasado, solamente 24.5% aprobaban de su presidencia.
<br><br>
Ecuador también se encuentra en problemas, y parece que en vez de solucionar sus problemas económicos, Correa prefiere quejarse de aquellos que lo acosan en Twitter. Sin embargo, economistas predicen que Ecuador necesita que el petróleo supere los $122 por barril para poder financiar su gasto público. La otra opción sería reducir el gasto público, algo que iría en contra de sus ideales socialistas.
<br><br>
Lo que estamos viendo en los países latinoamericanos que dependen de la mono-producción es la ironía del socialismo del siglo XXI. Aunque se quejan de los buitres capitalistas y la explotación imperialista, la realidad es que dependen del mercado internacional para financiar sus programas socialistas. Si hubiesen diversificado las economías de sus respectivos países, el costo de la baja de precios en las comodities sería mucho más leve. Sin embargo, los gobiernos socialistas latinoamericanos han elegido lo que parecía ser el camino más fácil, pero ahora están pagando el precio.
<br><br>
A veces elegir el camino más fácil en el corto plazo resulta ser el más difícil en el largo plazo, sobre todo cuando no controlamos todas las variables de oferta y demanda.
"
     );
    $products[107] = array(
        "name" => "Gobernando por decreto: el caudillo Obama",
        "img" => "img/images/obama.jpg",
        "caption" => "El presidente Obama",
        "url" => "http://usahispanicpress.com/gobernando-por-decreto-el-caudillo-obama/",
        "text" => "Los decretos presidenciales solían ser una movida política escasa en los Estados Unidos. Una gran crítica a los gobiernos latinoamericanos era el hecho de que gobernaban por decreto, en efecto creando una dicta-blanda, donde a través de elecciones turbias podían controlar el gobierno con un simple manejo del ejecutivo. Sin embargo, Obama parece estar aprendiendo de sus amigos en el sur, emulando sus maniobras políticas con tal de ganar el favor de los hispanos para ganancias electorales.
<br><br>
No es ningún secreto que cualquier partido político que desee ganar las próximas elecciones deberá contar con el apoyo de los latinos. Siendo el grupo étnico de crecimiento más rápido en los Estados Unidos, es esencial contar con el apoyo de al menos 40% del electorado hispano para ganar cualquier elección nacional.
<br><br>
Obama ha embarrado el ámbito político utilizando medidas de emergencia para asegurarse de que los hispanos no tendrán más opción que votar a los demócratas a futuro. De hecho, al menos que las cortes decidan que el decreto sobre la inmigración de Obama es inconstitucional, será difícil para que los republicanos cambien dirección sin costarse el electorado latino. Por lo tanto, si las cortes permiten que Obama gobierne por decreto, la inmigración ilegal será la ley de la tierra, y ya no tan ilegal.
<br><br>
Por el momento, las cortes han parado este último decreto, ya que en los Estados Unidos desde un punto de vista legal, solo el congreso tiene autorización constitucional para decidir sobre materias inmigratorias. Sin embargo, Obama ha pedido que se levante el paro judicial para que la amnistía continúe, asegurándose del continuo apoyo de los hispanos que aprueban de la inmigración ilegal.
<br><br>
Los republicanos y los demócratas están todos de acuerdo que es necesario mejorar el sistema de inmigración en los estados unidos. Sin embargo, la movida de Obama no es una maniobra honesta. Aunque pudo haber iniciado una reforma migratoria cuando tenía mayorías en el congreso, insistió en esperar hasta que los republicanos ganasen ambas cámaras para en vez imputar su movida ilegal.
<br><br>
Ahora, ha puesto a los republicanos en una situación donde pueden defender a la constitución, o ganar el apoyo hispano aprobando del decreto de Obama. Lo más irónico de esta saga es que Obama solía ser un profesor de ley constitucional, pero como dice el refrán, el poder absoluto corrompe absolutamente. Mientras tanto los hispanos seguimos esperando a ver qué sucederá, pero una cosa queda clara: si este decreto se declara constitucional, ¿qué impedirá que el próximo partido político que gane las elecciones ejecutivas gobierne por decreto, como ya lo hacen tantos en América Latina?
"
     );
    $products[108] = array(
        "name" => "Neutralidad de red: corrigiendo el fallo de mercado monopólico",
        "img" => "img/images/www.jpg",
        "caption" => "El principio conocido como neutralidad en la red otorgaba garantías de acceso a la misma velocidad a todos los proveedores de contenido",
        "url" => "http://usahispanicpress.com/neutralidad-de-red-corrigiendo-el-fallo-de-mercado-monopolico/",
        "text" => "La semana pasada la Comisión Federal de Comunicaciones de los Estados Unidos (FCC por sus siglas en inglés) reclasificó a los proveedores de internet bajo el título II del acta de comunicación de 1934 como common carriers, es decir, transportadores públicos. Aunque los think tanks a favor del libre mercado han salido en masa a criticar esta decisión, es importante recordar que los monopolios son una típica falla de mercado, y que hasta Adam Smith entendía la necesidad de regular mercados monopólicos para promover la competencia.
<br><br>
Si trazamos los eventos que llevaron a la reclasificación por parte del FCC, es fácil entender porque es importante esta regulación, particularmente para nuevas publicaciones como USA Hispanic. Las grandes empresas de telecomunicación, particularmente Comcast y Verizon, querían poder priorizar cierto tráfico de internet a costas de otro. Por ejemplo, Comcast quería que Netflix pagase una prima por el ancho de banda que utiliza. A primera mirada, esto parece completamente razonable, ya que empresas como Netflix y Youtube utilizan mucha más ancho de banda que sitios estáticos.
<br><br>
¿Pero qué sucede cuando los proveedores de internet pueden crear barreras de entrada para medios de información?
<br><br>
USA Hispanic es uno de los pocos periódicos que trata  temas que los medios de comunicación dominantes intentan esconder, particularmente en español. Si una empresa como Comcast o Verizon fuese a reclamar dinero para que este sitio pueda ser accedido, sería imposible llevarle al lector las noticias que presentamos.
<br><br>
Complicando la situación, Comcast también es la empresa matriz de NBCUniversal, la empresa mediática que promueve las ideas del partido demócrata y los ideales socialistas. Por lo tanto, la decisión de la FCC permitirá que las pequeñas organizaciones mediáticas de base que están entrando al mercado puedan seguir creciendo.
<br><br>
Desafortunadamente los monopolios de telecomunicación han hecho todo lo posible para acaparar el mercado, y no han dejado otra opción más que esta nueva regulación. Ciertamente hubiese sido mejor si las empresas como Comcast no intentaran privar de sus derechos de libre expresión a sitios rivales, pero desafortunadamente la situación monopólica de baja competencia no ha dejado otro camino.
<br><br>
Imagínese un mundo en donde su proveedor de internet solo hubiese dejado que los videos de Rachel Maddow u otros comentaristas de ultra-izquierda carguen con rapidez, que los sitios que critican a los dictablandos latinoamericanos no carguen, y que los esfuerzos de base no puedan entrar al mercado. Libre comercio sí, censura monopólica no.
"
     );
    $products[109] = array(
        "name" => "¿Qué está escondiendo Hillary Clinton?",
        "img" => "img/images/hillary.jpg",
        "caption" => "La exsecretaria de Estado de Estados Unidos Hillary Clinton",
        "url" => "http://usahispanicpress.com/que-esta-escondiendo-hillary-clinton/",
        "text" => "Imagínese el trabajo y la dificultad técnica requerida para poner un servidor privado en su casa para manejar su correo electrónico, registrar su propio dominio y crear varias cuentas diferentes de correo. A pesar de que su trabajo le ha proporcionado una cuenta de correo, o que podría utilizar una cuenta gratuita de correo como Gmail, Hotmail, o las miles de opciones que existen en el mundo, usted aun decide tomar todos estos pasos para tener su propio correo electrónico.
<br><br>
Esto es precisamente lo que Hillary Clinton ha hecho, y recientemente intentó clarificar sus acciones ante la prensa, en una entrevista orquestada donde pocos periodistas pudieron tener acceso. Cuando le preguntaron porque utilizó una cuenta de correo privada contesto que era conveniente tener solo un teléfono, aunque como todos saben cualquier teléfono puede conectarse a más de un proveedor de correo electrónico. Por lo tanto, es claro que su respuesta no contesta la pregunta.
<br><br>
Los noticieros se las han pasado debatiendo si Hillary violó la ley, o los procedimientos del Departamento de Estado. Aunque esta es una crítica valida, es posible, aunque poco probable, que Hillary no haya sabido de estas reglas. Sin embargo, lo que nadie está preguntando es cual fue la motivación para utilizar su propio servidor e invertir tanto tiempo creando este sistema de correo privado.
<br><br>
Utilizar una cuenta de correo en un servidor privado solo sirve un motivo: mantener la información privada. Esto podría sonar razonable para un periodista, un empresario, o alguien que necesite esconder fuentes o información específica. Sin embargo, cuando un funcionario público decide esconder sus comunicaciones, para que no puedan ser escudriñadas, es necesario cuestionar sus motivos.
<br><br>
Hillary ha contestado a este escándalo explicando que utilizó su servidor personal para simplificar el acceso a su correo electrónico y utilizar solamente un teléfono celular. Sin embargo, esta pobre excusa no resiste análisis, ya que hasta cualquier teléfono moderno permite el acceso a varias cuentas de correo electrónico.
<br><br>
Es importante recordar que en el 2007, Hillary acusó al presidente George W. Bush de ser un-american por su uso (limitado) de correo electrónico personal. Sin embargo, unos pocos años más tarde ella decidió utilizar su correo personal para todas sus comunicaciones.
<br><br>
Sin embargo, cuando la prensa le preguntó si iba a permitir acceso directo a su servidor privado dijo que no, que simplemente iba a permitir que el gobierno lea los correos electrónicos que ella y su asistentes vetaron.
<br><br>
Así que debemos preguntarnos, ¿Qué está escondiendo Hillary Clinton? Y ¿Por qué está escondiendo sus correos electrónicos en un cuarto secreto en su casa?
<br><br>
Si su tenencia como Secretaria de Estado es una indicación, es evidente que si fuese electa presidente traería aún menos transparencia a la casa blanca que Obama. ¿Es esto lo que el país necesita?
"
     );
    $products[110] = array(
        "name" => "El daño indiscriminado de los drones",
        "img" => "img/images/drone.jpg",
        "caption" => "Un MQ-9 Reaper, un UAV con capacidad de ataque con misiles",
        "url" => "http://usahispanicpress.com/el-dano-indiscriminado-de-los-drones/",
        "text" => "El presidente Obama acaba de admitir que un drone asesinó a tres ciudadanos americanos y a un italiano tras un bombardeo fallido. Aunque el incidente ocurrió en Pakistán en enero del 2015, la información ha recién salido a la luz. En un raro momento de transparencia, Obama decidió explicar lo sucedido y lamentar la muerte de civiles “accidental”. Sin embargo, este bombardeo demuestra la manera indiscriminada en la cual los Estados Unidos, bajo el liderazgo de Obama, han expandido el programa de dones para eliminar cualquier posible actividad enemiga, con o sin pruebas.
<br><br>
El programa de drones ha logrado asesinar a más de 4000 personas en Pakistán, Yemen, Somalia y Afganistán desde su incepción[1]. La gran mayoría de estos incidentes han ocurrido bajo el mandato del presidente Obama, que ha sonado la retaguardia de las tropas en el campo de batalla, pero ha expandido la guerra aérea en estos países.
<br><br>
Aunque los datos oficiales indican que casi todas las personas asesinadas eran combatientes enemigos, la definición utilizada bajo la administración de Obama para identificar un combatiente enemigo es: hombre de edad militar. A estos se los llama militantes, y por el simple hecho de ser hombres adultos, su muerte se considera justificada.
<br><br>
Sin embargo, la situación se torna más complicada cuando los Estados Unidos bombardean a uno de sus propios ciudadanos, intencionalmente como cuando asesinó a Anwar Awlaki en el 2011, y accidentalmente asesinó a su hijo de 16 años.
<br><br>
La muerte de los rehenes Warren Weinstein y Giovanni Lo Porto resalta la incertidumbre bajo la cual ocurren estos bombardeos.
<br><br>
El problema es que los operadores de los drones eligen sus objetivos según el movimiento que observan desde el cielo. No hay ningún tipo de verificación necesaria de que es el objetivo, más que una probabilidad de que las personas se están moviendo de una manera sospechosa. Por ejemplo, si un dron observa una caravana de vehículos moviéndose juntos, esto podría indicar que hay militantes agrupándose y el operador del drone destruiría el convoy. Cabe resaltar que las procesiones de bodas o funerales suelen moverse de una manera similar, motivo por el cual reportamos con demasiada frecuencia la muerte de civiles que atendían una boda o un funeral.
<br><br>
Y así terminó la vida de Warren Weinstein y Giovanni Lo Porto. Un operador de drone vio algo sospechoso en su pantalla, y sin saber ni quien estaba en su mira asesinó a dos inocentes. En la guerra de los drones, los Estados Unidos ni siquiera sabe a quién está bombardeando, una mera sospecha es todo lo que es necesario, y las victimas pueden ser los participantes de una boda, un funeral, o incluso como en este caso, un rehén americano y un italiano. Este no fue un simple error, sino que es el producto de una guerra aérea sin soldados o inteligencia capaz de confirmar los blancos antes de que se conviertan en víctimas colaterales.
<br><br>
[1] http://www.thebureauinvestigates.com/
"
     );
    $products[111] = array(
        "name" => "Tras años de un gobierno Demócrata, Baltimore arde",
        "img" => "img/images/freddiegray.jpg",
        "caption" => "Manifestantes en una estación de policía cerca del lugar donde Gray fue detenido el 25 de abril",
        "url" => "http://www.usahispanicpress.com",
        "text" => "La muerte de Freddie Gray en Baltimore, Maryland, inició una cadena de protestas que terminó con más de cien autos quemados, edificios incendiados y negocios saqueados. Esta no es una zona de guerra, o el resultado de una catástrofe natural, aunque tiene mucho en parecido con lo que sucedió después de Katrina; este es el resultado de políticas que han causado el deterioro económico de tantas ciudades en los Estados Unidos y que fomentan la pobreza y la falta de oportunidades a las minorías.
        <br><br>
Hace unos años cuando visité a Baltimore, el navegador de Google me llevó por unas zonas que parecían ser bastante peligrosas. Las casas estaban tapiadas, y parecía una ciudad fantasma. Los niños andaban en bicicleta por el medio de la avenida esquivando a los autos, y realmente parecía que había salido de los Estados Unidos. No fue hasta que volví a DC y compartí lo sucedido con unos amigos que me enteré que estaba en la zona donde se filmaba la series The Wire, una serie policial situada en Baltimore.
<br><br>
La triste realidad es que por más que todo el mundo haya estado mirando lo sucedido en Baltimore como si fuese una situación novedosa, la ciudad viene cayéndose a pedazos hace años. Y sin embargo, alrededor del 85% de los residentes de Baltimore no quieren cambios. Baltimore, como Detroit, Chicago, y la mayoría de las ciudades más desiguales y peligrosas de los Estados Unidos está manejada por el partido Demócrata, que pretende estar a favor de la igualdad pero en práctica ha causado daño irreparable a las minorías. Por ejemplo, nuevos estudios están descubriendo el rol de los demócratas y los liberales, que tan a menudo hablan a favor de los derechos de las minorías, y su rol creando el sistema carceral.
<br><br>
Sin embargo, las minorías siguen votando por el partido Demócrata, y siguen sin querer cambios. Celebran el hecho de que los policías que arrestaron a Freddie Gray han sido incautados, aunque los problemas sistémicos siguen sin estar solucionados.
<br><br>
Podríamos mirar a la situación y pensar, si el gobierno realmente respetase la Carta de Derechos de los Estados Unidos, Freddie Gray ni siquiera hubiese sido detenido sin causa (algo que los hispanos seguramente hemos experimentado en algún momento en nuestro país de origen). Pero los Demócratas en vez salen a reclamar más gobierno, e imaginan que de alguna manera más de lo que causó la situación con Freddie Gray de alguna manera lo hubiese solucionado.
<br><br>
Realmente estamos observando el teatro del absurdo."
     );
    $products[112] = array(
        "name" => "De DACA a la urna electoral",
        "img" => "img/images/daca.jpg",
        "caption" => "Los sueños de muchos jóvenes indocumentados en Arizona se vieron truncados en 2006 cuando los votantes aprobaron la ley 300, la cual niega el derecho a los estudiantes sin 'papeles' a pagar tarifas de colegiatura como residentes en las universidades y colegios comunitarios",
        "url" => "http://usahispanicpress.com/de-daca-a-la-urna-electoral/",
        "text" => "Cuando el presidente Obama creo el programa DACA en el 2012, la idea era permitir que los inmigrantes ilegales que vinieron a los Estados Unidos como niños pudiesen quedarse en este país sin temor a ser deportados, y la creación de un mecanismo para que se conviertan en ciudadanos de los Estados Unidos.
<br><br>
En noviembre de 2014, Obama expandió este programa bajo una orden ejecutiva, enfureciendo al congreso con su actitud caudillista. Sin embargo, los demócratas están apostando su capital político con los hispanos, y en particular aquellos que están a favor de la inmigración ilegal.
<br><br>
Los inmigrantes ilegales ya están viendo los beneficios de estas políticas. Esta última semana por ejemplo un juez en Arizona decidió que los inmigrantes cubiertos bajo el programa DACA podrían recibir educación como alumnos residentes del estado, creando un precedente de que aquellos cubiertos por el DACA tienen derecho a los mismos beneficios que los ciudadanos legales.
<br><br>
Mirando al panorama nacional, Hillary Clinton, la candidata favorita para la nominación del partido Demócrata para las elecciones de 2016, ha indicado su deseo de continuar con este programa. En una movida política destinada a cortejar a los votantes hispanos, Hillary dijo que si ella fuese presidente, no solo continuaría con el programa DACA, sino que lo expandiría para cubrir a aun más inmigrantes.
<br><br>
El problema de consentir a los hispanos indocumentados es evidente, mientras que no son ciudadanos, no pueden votar. La estrategia está basada en la idea de que todos los hispanos estamos a favor de la inmigración ilegal, algo que las encuestas indican que no es cierto. De hecho, según el Pew Research Center, entre el 55% y 70% de los hispanos piensan que deberíamos restringir y controlar la inmigración a los Estados Unidos aún más que ahora. A pesar de esto, los demócratas están apostando que estas políticas les rendirán fruto en las próximas elecciones.
<br><br>
Mirando el panorama político de las próximas elecciones, es interesante notar que de los actuales candidatos republicanos, Ted Cruz y Marco Rubio son hispanos y la esposa de Jeb Bush es mexicana. Por otra parte, los candidatos demócratas son los típicos políticos de siempre.
<br><br>
Solo el tiempo dirá como los hispanos votarán en las próximas elecciones, pero lo que queda claro es que sin el voto hispano, será cada vez más difícil ganar elecciones nacionales en los Estados Unidos. Los hispanos somos una fuerza política que sigue creciendo, y será interesante ver si nos dejamos llevar por el proxenetismo o los valores de libertad que hicieron a los Estados Unidos el país que es hoy."
     );


    // automated duplication to copy the product_id/sku from the array key
    // and duplicate it into the product details inside the array
    foreach ($products as $product_id => $product) {
        $products[$product_id]["sku"] = $product_id;
    }

    return $products;
}

?>