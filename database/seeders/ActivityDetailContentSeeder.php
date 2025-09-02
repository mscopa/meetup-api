<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActivityDetailContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $activityDetailContents = [
            [
                'activity_detail_id' => 1,
                'detail_content' => 'Los consejeros de cada compañía elegirán el nombre con el cual serán identificados durante el evento. Cada joven, al registrarse, recibirá un kit de bienvenida con su gafete en el que se registrará el nombre de la compañía correspondiente. Una vez con su kit, pasarán al espacio donde se dará la bienvenida para comenzar el evento.',
                'display_order' => 1,
            ],
            [
                'activity_detail_id' => 2,
                'detail_content' => 'Por espacio se refiere a la cancha, salón social o salón sacramental dependiendo de las necesidades de cada unidad.',
                'display_order' => 1,
            ],
            [
                'activity_detail_id' => 3,
                'detail_content' => 'Fomentar la integración, la identidad y el entusiasmo de cada compañía, conectando los valores del Evangelio con símbolos visuales y expresiones de ánimo grupal.',
                'display_order' => 2,
            ],
            [
                'activity_detail_id' => 4,
                'detail_content' => 'Cartulinas de colores (2 a 3 por compañía).',
                'display_order' => 1,
            ],
            [
                'activity_detail_id' => 4,
                'detail_content' => 'Marcadores gruesos y delgados.',
                'display_order' => 2,
            ],
            [
                'activity_detail_id' => 4,
                'detail_content' => 'Pegamento en barra o líquido.',
                'display_order' => 3,
            ],
            [
                'activity_detail_id' => 4,
                'detail_content' => '(Opcional) tijeras, cinta adhesiva, recortes, pegatinas, telas o papel metálico.',
                'display_order' => 4,
            ],
            [
                'activity_detail_id' => 5,
                'detail_content' => 'Cada compañía (grupo de 12 a 14 jóvenes) trabajaráde forma colectiva para crear un escudo o bandera representativa y un grito de guerra.',
                'display_order' => 1,
            ],
            [
                'activity_detail_id' => 6,
                'detail_content' => 'Tener un espacio amplio (puede ser la cancha o el salón cultural).',
                'display_order' => 1,
            ],
            [
                'activity_detail_id' => 6,
                'detail_content' => 'Asegurar un facilitador por cada 2 compañías para guiar la dinámica.',
                'display_order' => 2,
            ],
            [
                'activity_detail_id' => 6,
                'detail_content' => 'Entregar los materiales a cada compañía en kits o cajas individuales.',
                'display_order' => 3,
            ],
            [
                'activity_detail_id' => 7,
                'detail_content' => 'El facilitador explicará que cada compañía diseñará unescudo o bandera que represente a su ícono o símbolo de la compañía (según la ambientación del MeetUP).',
                'display_order' => 1,
            ],
            [
                'activity_detail_id' => 7,
                'detail_content' => 'El escudo debe incluir elementos visuales querepresenten valores del Evangelio como rectitud, fidelidad, firmeza, fe, amor, servicio y también referirse al ícono representativo de la compañía.',
                'display_order' => 2,
            ],
            [
                'activity_detail_id' => 7,
                'detail_content' => 'Luego, la compañía creará un grito de guerra original relacionado con su símbolo, con énfasis en unidad, motivación y competencia sana.',
                'display_order' => 3,
            ],
            [
                'activity_detail_id' => 7,
                'detail_content' => 'El facilitador les dará 30 minutos en total para completar ambas tareas: 20 minutos para el diseño del escudo y 10 minutos para ensayar el grito.',
                'display_order' => 4,
            ],
            [
                'activity_detail_id' => 8,
                'detail_content' => 'El contenido del escudo y grito debe ser apropiado y respetuoso.',
                'display_order' => 1,
            ],
            [
                'activity_detail_id' => 8,
                'detail_content' => 'Se debe incluir al menos una palabra clave espiritual en el diseño.',
                'display_order' => 2,
            ],
            [
                'activity_detail_id' => 8,
                'detail_content' => 'El grito de guerra no debe durar más de 10 segundos.',
                'display_order' => 3,
            ],
            [
                'activity_detail_id' => 9,
                'detail_content' => 'Cada compañía presentará brevemente su escudo y hará su grito de guerra al frente, como símbolo de apertura del MeetUP.',
                'display_order' => 1,
            ],
            [
                'activity_detail_id' => 10,
                'detail_content' => 'Si necesita hacer cambios en los materiales de la actividad consulte con el matrimonio director.',
                'display_order' => 1,
            ],
            [
                'activity_detail_id' => 11,
                'detail_content' => 'Fomentar la coordinación, el trabajo en compañía y la diversión mediante una competencia física adaptada a la temática de este año, promoviendo también la colaboración entre compañeros.',
                'display_order' => 1,
            ],
            [
                'activity_detail_id' => 12,
                'detail_content' => '12 toallas grandes (una por pareja). Se sugiere que sean de la medida aproximada de 70 x 140 cms. Se pueden conseguir toallas en uso, siempre que estén en buen estado y limpias.',
                'display_order' => 1,
            ],
            [
                'activity_detail_id' => 12,
                'detail_content' => '1 pelota amarilla (simulando moneda de oro).',
                'display_order' => 2,
            ],
            [
                'activity_detail_id' => 12,
                'detail_content' => '1 Moneda por jugador para la compañía ganadora.',
                'display_order' => 3,
            ],
            [
                'activity_detail_id' => 12,
                'detail_content' => 'Área de juego amplia: cancha o espacio delimitado interior/exterior.',
                'display_order' => 4,
            ],
            [
                'activity_detail_id' => 12,
                'detail_content' => '(Opcional) marcador de puntaje por compañía.',
                'display_order' => 5,
            ],
            [
                'activity_detail_id' => 13,
                'detail_content' => 'Si necesita hacer cambios en los materiales de la actividad consulte con el matrimonio director.',
                'display_order' => 1,
            ],
            [
                'activity_detail_id' => 14,
                'detail_content' => 'Cada compañía se divide en parejas. Dos compañías competirán entre sí por ronda.',
                'display_order' => 1,
            ],
            [
                'activity_detail_id' => 15,
                'detail_content' => 'Delimitar el área de juego por la mitad.',
                'display_order' => 1,
            ],
            [
                'activity_detail_id' => 15,
                'detail_content' => 'Asegurar que cada pareja tenga una toalla y que el área esté despejada.',
                'display_order' => 2,
            ],
            [
                'activity_detail_id' => 15,
                'detail_content' => 'Un facilitador para controlar tiempo y puntaje.',
                'display_order' => 3,
            ],
            [
                'activity_detail_id' => 15,
                'detail_content' => 'Definir qué compañías van a competir entre ellas.',
                'display_order' => 4,
            ],
            [
                'activity_detail_id' => 16,
                'detail_content' => 'Cada compañía forma parejas con una toalla compartidapor pareja.',
                'display_order' => 1,
            ],
            [
                'activity_detail_id' => 16,
                'detail_content' => 'Se asigna un lado del campo o área a cada compañía.',
                'display_order' => 2,
            ],
            [
                'activity_detail_id' => 16,
                'detail_content' => 'Las parejas deberán usar la toalla para atrapar y lanzar la pelota hacia el compañía contrario.',
                'display_order' => 3,
            ],
            [
                'activity_detail_id' => 16,
                'detail_content' => 'Si la pelota cae al suelo del lado contrario, la compañía anota 1 punto.',
                'display_order' => 4,
            ],
            [
                'activity_detail_id' => 16,
                'detail_content' => 'La compañía que alcance más puntos dentro de los primeros 10 minutos gana la ronda (la actividad dura 30 minutos, dependiendo la cantidad de compañías, dividir el tiempo para que todos jueguen).',
                'display_order' => 5,
            ],
            [
                'activity_detail_id' => 16,
                'detail_content' => 'Si hay tiempo, pueden organizarse rondas eliminatorias o rotación entre compañías.',
                'display_order' => 6,
            ],
            [
                'activity_detail_id' => 17,
                'detail_content' => 'Gana la compañía con más puntos al final del tiempo asignado y se le otorgará 1 moneda a cada integrante de la compañía ganadora.',
                'display_order' => 1,
            ],
            [
                'activity_detail_id' => 18,
                'detail_content' => 'Fomentar la concentración, la coordinación y la rapidezde reacción entre los jugadores, mientras escuchan y actúan con prontitud, aprendiendo a responder con atención y disposición a la guía del Espíritu en su vida.',
                'display_order' => 1,
            ],
            [
                'activity_detail_id' => 19,
                'detail_content' => 'vaso de color por participante (optativo: decorar con el diseño de plantas pirañas y considerar vasos extras por si se rompen).',
                'display_order' => 1,
            ],
            [
                'activity_detail_id' => 19,
                'detail_content' => 'Área amplia y despejada para que los jugadores puedan moverse sin obstáculos.',
                'display_order' => 2,
            ],
            [
                'activity_detail_id' => 19,
                'detail_content' => 'Monedas para los ganadores.',
                'display_order' => 3,
            ],
            [
                'activity_detail_id' => 20,
                'detail_content' => 'Si necesita hacer cambios en los materiales de la actividad consulte con el matrimonio director.',
                'display_order' => 1,
            ],
            [
                'activity_detail_id' => 21,
                'detail_content' => 'Cada compañía se divide en parejas. Dos compañías competirán entre sí por ronda.',
                'display_order' => 1,
            ],
            [
                'activity_detail_id' => 22,
                'detail_content' => 'Se necesitan 4 compañías, las que se enfrentarán entre sí en diferentes rondas dentro de este torneo de rapidez, hasta tener a un ganador.',
                'display_order' => 1,
            ],
            [
                'activity_detail_id' => 22,
                'detail_content' => 'Los integrantes de cada compañía harán una fila y se colocarán frente a la fila de la compañía contraria formando parejas. Cada pareja se posicionará de espaldas, separados por un vaso en el centro.',
                'display_order' => 2,
            ],
            [
                'activity_detail_id' => 22,
                'detail_content' => 'El moderador indica una parte del cuerpo (ej. cintura, pies, cabeza) y los jugadores deben colocar sus manos en ese lugar.',
                'display_order' => 3,
            ],
            [
                'activity_detail_id' => 22,
                'detail_content' => 'Cuando el moderador dice “¡Piraña!”, los jugadores deben intentar agarrar el vaso que los separa de su contrincante lo más rápido posible.',
                'display_order' => 4,
            ],
            [
                'activity_detail_id' => 22,
                'detail_content' => 'El primero en tomar el vaso gana el duelo y suma un punto para su compañía.',
                'display_order' => 5,
            ],
            [
                'activity_detail_id' => 22,
                'detail_content' => 'Después de 3 rondas de juego entre Compañía A vs. Compañía B y Compañía C vs. Compañía D, la compañía con más puntos gana el enfrentamiento.',
                'display_order' => 6,
            ],
            [
                'activity_detail_id' => 22,
                'detail_content' => 'Las compañías que ganen sus enfrentamientos avanzan a la final para el primer y segundo lugar.',
                'display_order' => 7,
            ],
            [
                'activity_detail_id' => 22,
                'detail_content' => 'Las compañías que pierdan sus enfrentamientos juegan por el tercer y cuarto lugar.',
                'display_order' => 8,
            ],
            [
                'activity_detail_id' => 22,
                'detail_content' => 'En la final también se juega una ronda de 3 mini rondas (o duelos) para cada final (primer lugar y tercer lugar).',
                'display_order' => 9,
            ],
            [
                'activity_detail_id' => 22,
                'detail_content' => 'La compañía que gane la mayoría de las mini rondas se corona como ganadora (primer lugar), y los otros se colocan en segundo, tercer y cuarto lugar.',
                'display_order' => 10,
            ],
            [
                'activity_detail_id' => 22,
                'detail_content' => 'Se repite el proceso hasta que el grupo ganador acumule la mayor cantidad de puntos al finalizar el tiempo establecido.',
                'display_order' => 11,
            ],
            [
                'activity_detail_id' => 23,
                'detail_content' => 'El vaso sirve como objeto de competencia. Por ende, si algún jugador lo toma para darle un uso distinto al que se le asignó a la compañía pierde un punto.',
                'display_order' => 1,
            ],
            [
                'activity_detail_id' => 23,
                'detail_content' => 'Si el jugador toma el vaso sin que el réferi diga "piraña", se da automáticamente el punto a la otra compañía.',
                'display_order' => 2,
            ],
            [
                'activity_detail_id' => 23,
                'detail_content' => 'Mientras es el momento del duelo solo puede hablar el réferi para no confundir a los jugadores, si algún jugador rompe esta regla se le otorga el punto directamente a su contrincante.',
                'display_order' => 3,
            ],
            [
                'activity_detail_id' => 23,
                'detail_content' => 'No se permite ningún tipo de actitud violenta, verbal o física. Cualquier conducta agresiva descalificará inmediatamente a la compañía y terminará el juego.',
                'display_order' => 4,
            ],
            [
                'activity_detail_id' => 23,
                'detail_content' => 'El vocabulario debe ser edificante, por lo que, palabras groseras, en doble sentido o malas palabras, descalifican a la compañía.',
                'display_order' => 5,
            ],
            [
                'activity_detail_id' => 23,
                'detail_content' => 'Si algún jugador rompe el vaso, su compañía pierde un punto.',
                'display_order' => 6,
            ],
            [
                'activity_detail_id' => 23,
                'detail_content' => 'Todos los jugadores deben participar, en caso contrario, el punto se da a la compañía rival.',
                'display_order' => 7,
            ],
            [
                'activity_detail_id' => 23,
                'detail_content' => 'Si el juego concluye antes del tiempo estipulado, se sugiere repartir uno de los materiales extras para mantener a los jóvenes ocupados antes de cambiar de actividad. Las respuestas se encuentran al final del manual.',
                'display_order' => 8,
            ],
            [
                'activity_detail_id' => 24,
                'detail_content' => 'Gana la compañía con más puntos al final del tiempo asignado y se le otorgará 1 moneda a cada integrante de la compañía ganadora.',
                'display_order' => 1,
            ],
            [
                'activity_detail_id' => 25,
                'detail_content' => 'Fomentar el trabajo en equipo y la agilidad para superar obstáculos y desafíos sorpresa, recordando que con fe, esfuerzo y unión podemos lograr cualquier meta.',
                'display_order' => 1,
            ],
            [
                'activity_detail_id' => 26,
                'detail_content' => 'Área delimitada para el circuito de obstáculos.',
                'display_order' => 1,
            ],
            [
                'activity_detail_id' => 26,
                'detail_content' => '8 sillas por estación (sugerencia: la cantidad de sillas, dependerá del tamaño del aula).',
                'display_order' => 2,
            ],
            [
                'activity_detail_id' => 26,
                'detail_content' => '6 vasos de plástico por compañía para actividades.',
                'display_order' => 3,
            ],
            [
                'activity_detail_id' => 26,
                'detail_content' => '1 mesa.',
                'display_order' => 4,
            ],
            [
                'activity_detail_id' => 26,
                'detail_content' => 'Sobres que contengan preguntas del Evangelio, desafíos físicos y de mímica por compañía (optativo: decorar los sobres con signos de interrogación).',
                'display_order' => 5,
            ],
            [
                'activity_detail_id' => 26,
                'detail_content' => 'Preguntas del Evangelio, desafíos físicos y desafíos de mímicas escritos en tarjetas (optativo: Imprimir las tarjetas diseñadas con las preguntas que fueron enviadas junto con el material).',
                'display_order' => 6,
            ],
            [
                'activity_detail_id' => 26,
                'detail_content' => 'Opcional: cronómetro o temporizador visible.',
                'display_order' => 7,
            ],
            [
                'activity_detail_id' => 26,
                'detail_content' => '1 moneda dorada por participante.',
                'display_order' => 8,
            ],
            [
                'activity_detail_id' => 26,
                'detail_content' => 'Considerar 4 estaciones por compañía.',
                'display_order' => 9,
            ],
            [
                'activity_detail_id' => 27,
                'detail_content' => 'Si necesita hacer cambios en los materiales de la actividad consulte con el matrimonio director.',
                'display_order' => 1,
            ],
            [
                'activity_detail_id' => 28,
                'detail_content' => 'Los participantes de cada compañía deben atravesar el circuito de 4 obstáculos para llegar a la meta: Obstáculo 1: Saltar o atravesar sillas. Obstáculo 2: Pasar por debajo de una mesa. Obstáculo 3: Correr una distancia determinada. Obstáculo 4: Armar una torre con vasos de plástico sin que se caiga ningún vaso.',
                'display_order' => 1,
            ],
            [
                'activity_detail_id' => 28,
                'detail_content' => 'Al llegar a la meta, el joven recibe por parte del lider del seminario un sobre con uno de los siguientes desafíos: Desafío 1: Evangelio: Responder a una pregunta básica de conocimiento del Evangelio que fue enviada con el material. Desafío 2: Reto Físico: Toda la compañía debe realizar una actividad física divertida. Desafío 3: Reto de Mímica: Un miembro de la compañía debe representar una escena o personaje de Mario y sus compañeros deberán adivinarlo.',
                'display_order' => 2,
            ],
            [
                'activity_detail_id' => 28,
                'detail_content' => 'Una vez completado el desafío el integrante recibe una moneda y regresa al inicio del circuito para que el siguiente jugador de su compañía continue repitiendo la dinámica del juego.',
                'display_order' => 3,
            ],
            [
                'activity_detail_id' => 28,
                'detail_content' => 'La compañía ganadora será la que tenga el mayor número de monedas dentro del tiempo establecido o la que termine primero la dinámica.',
                'display_order' => 4,
            ],
            [
                'activity_detail_id' => 29,
                'detail_content' => 'Cada estación de juego contará con dos consejeros y un líder de Seminario para garantizar la seguridad de los jóvenes y verificar que se cumplan las reglas del juego.',
                'display_order' => 1,
            ],
            [
                'activity_detail_id' => 29,
                'detail_content' => 'Cuando el jugador termine con el desafío que le tocó, puede salir el siguiente jugador.',
                'display_order' => 2,
            ],
            [
                'activity_detail_id' => 29,
                'detail_content' => 'Todos los integrantes de la compañía deben participar.',
                'display_order' => 3,
            ],
            [
                'activity_detail_id' => 29,
                'detail_content' => 'Los obstáculos son parte del objetivo del juego, si algún jugador o jugadores hace un mal uso de estos, la compañía pierde 2 puntos.',
                'display_order' => 4,
            ],
            [
                'activity_detail_id' => 29,
                'detail_content' => 'Si los vasos de plástico se caen después de haber sido armados, el jugador deberá volver a empezar.',
                'display_order' => 5,
            ],
            [
                'activity_detail_id' => 29,
                'detail_content' => 'No se permite ningún tipo de actitud violenta, verbal o física. Cualquier conducta agresiva descalificará inmediatamente a la compañía y terminará el juego.',
                'display_order' => 6,
            ],
            [
                'activity_detail_id' => 29,
                'detail_content' => 'El vocabulario debe ser edificante, por lo que, palabras groseras, en doble sentido o malas palabras, descalifican a la compañía.',
                'display_order' => 7,
            ],
            [
                'activity_detail_id' => 29,
                'detail_content' => 'Los sobres con los desafíos solo pueden ser abiertos después de armar las torres. Si algún jugador abre los sobres antes para tomar ventaja a las otras compañías, pierde dos puntos y vuelve a empezar.',
                'display_order' => 8,
            ],
            [
                'activity_detail_id' => 29,
                'detail_content' => 'Solo los consejeros están autorizados para tomar los sobres con las preguntas o desafíos.',
                'display_order' => 9,
            ],
            [
                'activity_detail_id' => 29,
                'detail_content' => 'Si llega a haber un empate, el desempate se hará con un desafío elegido por uno de los consejeros.',
                'display_order' => 10,
            ],
            [
                'activity_detail_id' => 29,
                'detail_content' => 'Todos los jugadores deben participar, en caso contrario, el punto se da a la compañía rival.',
                'display_order' => 11,
            ],
            [
                'activity_detail_id' => 29,
                'detail_content' => 'Si el juego concluye antes del tiempo estipulado, se sugiere repartir uno de los materiales extras para mantener a los jóvenes ocupados antes de cambiar de actividad. Las respuestas se encuentran al final del manual.',
                'display_order' => 12,
            ],
            [
                'activity_detail_id' => 30,
                'detail_content' => 'Gana la compañía con mayor cantidad de “monedas doradas” acumuladas en el tiempo establecido.',
                'display_order' => 1,
            ],
            [
                'activity_detail_id' => 31,
                'detail_content' => 'Fomentar el trabajo en equipo, la agilidad y la cooperación entre los jugadores mientras recogen monedas de oro (10 o la cantidad de jóvenes que haya por compañía) recordando que la unidad y el esfuerzo conjunto nos ayudan a superar los desafíos de la vida y alcanzar nuestras metas con la ayuda de Dios.',
                'display_order' => 1,
            ],
            [
                'activity_detail_id' => 32,
                'detail_content' => '2 hula hulas decorados con cinta verde.',
                'display_order' => 1,
            ],
            [
                'activity_detail_id' => 32,
                'detail_content' => '2 sillas por hula hula para sostenerlos y simular una tubería.',
                'display_order' => 2,
            ],
            [
                'activity_detail_id' => 32,
                'detail_content' => '1 cesta plástica o caja con al menos 15 pelotas amarillas.',
                'display_order' => 3,
            ],
            [
                'activity_detail_id' => 32,
                'detail_content' => '15 conitos de papel higiénico (el número dependeráde la cantidad de jóvenes por compañía).',
                'display_order' => 4,
            ],
            [
                'activity_detail_id' => 32,
                'detail_content' => '15 platos desechables amarillos (el número dependerá de la cantidad de jóvenes por compañía).',
                'display_order' => 5,
            ],
            [
                'activity_detail_id' => 32,
                'detail_content' => '1 estructura tipo torre hecha con 6 cajas decoradas como bloques de ladrillo (optativo: la decoración y cantidad de cajas).',
                'display_order' => 6,
            ],
            [
                'activity_detail_id' => 32,
                'detail_content' => '1 caja amarilla en la cima (puede ser una caja de cartón pintada o forrada) con una abertura en la parte superior tipo alcancía.',
                'display_order' => 7,
            ],
            [
                'activity_detail_id' => 32,
                'detail_content' => 'Cinta para marcar el trayecto en forma de ruta o camino.',
                'display_order' => 8,
            ],
            [
                'activity_detail_id' => 33,
                'detail_content' => 'Si necesita hacer cambios en los materiales de la actividad consulte con el matrimonio director.',
                'display_order' => 1,
            ],
            [
                'activity_detail_id' => 34,
                'detail_content' => 'Participan entre 4 compañías.',
                'display_order' => 1,
            ],
            [
                'activity_detail_id' => 34,
                'detail_content' => 'Cada compañía compite en su propia “línea” de juego, al estilo relevos.',
                'display_order' => 2,
            ],
            [
                'activity_detail_id' => 34,
                'detail_content' => 'Se recomienda organizar 4 estaciones de juego idénticas, una por compañía.',
                'display_order' => 3,
            ],
            [
                'activity_detail_id' => 34,
                'detail_content' => 'Cada estación debe tener espacio para que un jugador corra, cruce obstáculos y deposite la moneda.',
                'display_order' => 4,
            ],
            [
                'activity_detail_id' => 34,
                'detail_content' => 'Cada compañía forma una fila detrás de su estación.',
                'display_order' => 5,
            ],
            [
                'activity_detail_id' => 34,
                'detail_content' => 'Un jugador a la vez: Pasa sobre los hula hulas. Toma una pelota dorada o amarilla de una cesta. Camina con la pelota equilibrada sobre un conito de papel higiénico. Recorre el trayecto hasta la torre de ladrillos (hecha con cajas decoradas) pone el conito con la pelota encima a un lado y toma un plato dorado que simula una moneda de oro y la deposita dentro de la caja (como alcancía). Luego se sienta en una de las sillas que sostienen los hula hulas, y el siguiente jugador sale corriendo y repite el proceso.',
                'display_order' => 6,
            ],
            [
                'activity_detail_id' => 35,
                'detail_content' => 'La actividad debe tener 2 facilitadores o consejeros por estación para supervisar el cumplimiento y el orden.',
                'display_order' => 1,
            ],
            [
                'activity_detail_id' => 35,
                'detail_content' => 'Si la pelota cae antes de llegar, el jugador debe volver al inicio.',
                'display_order' => 2,
            ],
            [
                'activity_detail_id' => 35,
                'detail_content' => 'Mientras es el momento del juego, los jugadores pueden alentar a su compañía utilizando porras que no contengan insultos, malas palabras o palabras groseras.',
                'display_order' => 3,
            ],
            [
                'activity_detail_id' => 35,
                'detail_content' => 'No se permite ningún tipo de actitud violenta, verbal o física. Cualquier conducta agresiva descalificará inmediatamente a la compañía y terminará el juego.',
                'display_order' => 4,
            ],
            [
                'activity_detail_id' => 35,
                'detail_content' => 'El vocabulario debe ser edificante, por lo que, palabras groseras, en doble sentido o malas palabras, descalifican a la compañía.',
                'display_order' => 5,
            ],
            [
                'activity_detail_id' => 35,
                'detail_content' => 'Si algún jugador roba pelotas, su compañía perderá dos monedas de las que ya tienen acumuladas.',
                'display_order' => 6,
            ],
            [
                'activity_detail_id' => 35,
                'detail_content' => 'Todos los jugadores deben participar, en caso contrario, el punto se da a la compañía rival.',
                'display_order' => 7,
            ],
            [
                'activity_detail_id' => 35,
                'detail_content' => 'Si el juego concluye antes del tiempo estipulado, se sugiere repartir uno de los materiales extras para mantener a los jóvenes ocupados antes de cambiar de actividad. Las respuestas se encuentran al final del manual.',
                'display_order' => 8,
            ],
            [
                'activity_detail_id' => 36,
                'detail_content' => 'Gana la compañía con más monedas doradas acumuladas en su alcancía al final del tiempo asignado.',
                'display_order' => 1,
            ],
            [
                'activity_detail_id' => 37,
                'detail_content' => 'Crear libros con actividades educativas basadas en enseñanzas del Evangelio para los niños de la Primaria, integrando la temática de Mario Bros mediante la imagen simbólica de "estrellas de fe".',
                'display_order' => 1,
            ],
            [
                'activity_detail_id' => 38,
                'detail_content' => 'Copias de diversas actividades (colorear, conectar puntos, sopa de letras). Ver material compartido para impresión. Opcional: Marcadores negros de punta fina (para carátulas) Lápices de colores y crayones Cartulinas para portada y contraportada media carta Cintas o anillas para encuadernar Tarjetas con frases o imágenes del Evangelio Estrellas de papel dorado o plateado Pegatinas de estrellas Impresora.',
                'display_order' => 1,
            ],
            [
                'activity_detail_id' => 39,
                'detail_content' => 'Si necesita hacer cambios en los materiales de la actividad consulte con el matrimonio director.',
                'display_order' => 1,
            ],
            [
                'activity_detail_id' => 40,
                'detail_content' => 'Disponer mesas con kits de materiales por compañía. Cada joven creará su propio mini libro.',
                'display_order' => 1,
            ],
            [
                'activity_detail_id' => 40,
                'detail_content' => 'Tener copias de actividades, suficientes para todos. (ej. dibujos, laberintos, escrituras para colorear).',
                'display_order' => 2,
            ],
            [
                'activity_detail_id' => 41,
                'detail_content' => 'Introducción a la actividad: El facilitador explica que los libros se entregarán a niños de la Primaria. Se comparte el versículo que inspira la actividad: "Así alumbre vuestra luz" (Mateo 5:16).',
                'display_order' => 1,
            ],
            [
                'activity_detail_id' => 41,
                'detail_content' => 'Creación de contenido: Cada joven elaborará un libro eligiendo páginas que incluyan actividades como colorear, conectar puntos, sopa de letras con un principio del Evangelio.',
                'display_order' => 2,
            ],
            [
                'activity_detail_id' => 41,
                'detail_content' => 'Decoración y ensamblaje: Una vez finalizadas las páginas, se agrupan para formar un libro. Se encuaderna con cinta o anilla. La portada será titulada: "MeetUP para Pintar: Estrellas de Fe" Decoran la portada libremente.',
                'display_order' => 3,
            ],
            [
                'activity_detail_id' => 42,
                'detail_content' => 'La actividad deberá contar con dos facilitadores o consejeros para dirigir a los jóvenes en la elaboración de los libros.',
                'display_order' => 1,
            ],
            [
                'activity_detail_id' => 42,
                'detail_content' => 'El contenido debe ser comprensible para niños de entre 4 y 10 años.',
                'display_order' => 2,
            ],
            [
                'activity_detail_id' => 42,
                'detail_content' => 'Se puede reproducir una música suave mientras trabajan para crear un ambiente de servicio.',
                'display_order' => 3,
            ],
            [
                'activity_detail_id' => 43,
                'detail_content' => 'Formar el número "100" con los 200 jóvenes (aprox.) simbolizando los 100 años de la Iglesia en Sudamérica. Opcionalmente, los consejeros pueden sostener un letrero que tendrá la siguiente frase: "MeetUp: 100 años de fe".',
                'display_order' => 1,
            ],
            [
                'activity_detail_id' => 44,
                'detail_content' => 'Área amplia (campo, cancha o auditorio).',
                'display_order' => 1,
            ],
            [
                'activity_detail_id' => 44,
                'detail_content' => 'Cinta adhesiva para marcar las posiciones en el suelo.',
                'display_order' => 2,
            ],
            [
                'activity_detail_id' => 44,
                'detail_content' => 'Teléfonos o cámaras para grabar el momento desde arriba.',
                'display_order' => 3,
            ],
            [
                'activity_detail_id' => 44,
                'detail_content' => 'Dron (opcional) para una toma aérea de la formación.',
                'display_order' => 4,
            ],
            [
                'activity_detail_id' => 44,
                'detail_content' => 'Optativo: Letrero con la leyenda: MeetUp: 100 años de fe.',
                'display_order' => 5,
            ],
            [
                'activity_detail_id' => 45,
                'detail_content' => 'Organización: Se traza en el suelo el contorno del "100" utilizando cinta adhesiva o marcadores visibles. Se asigna a cada joven un punto específico para ubicarse dentro del número. Optativo: Se sugiere que los consejeros también participen sujetando un letrero con un mensaje: MeetUP: 100 años de Fe.',
                'display_order' => 1,
            ],
            [
                'activity_detail_id' => 45,
                'detail_content' => 'Ensayo: Se realiza un ensayo para asegurar que todos estén alineados correctamente. Se practica el grito final que dirán todos al unísono.',
                'display_order' => 2,
            ],
            [
                'activity_detail_id' => 45,
                'detail_content' => 'Grabación: Se graba desde diferentes ángulos, incluyendo tomas cercanas y una toma aérea para captar la formación en su totalidad. Al finalizar, todos los jóvenes levantan sus manos y gritan: MeetUP: 100 años de Fe.',
                'display_order' => 3,
            ],
            [
                'activity_detail_id' => 46,
                'detail_content' => 'Cerrar el evento con una fiesta temática donde los jóvenes puedan celebrar, integrarse y divertirse, llevando el distintivo de una estrella haciendo referencia a la temática de este año que representaron durante los juegos. Asimismo, es importante recordarles que pueden brillar e irradiar la luz de Jesucristo al tomar buenas decisiones.',
                'display_order' => 1,
            ],
            [
                'activity_detail_id' => 47,
                'detail_content' => 'Durante la actividad, se sugiere que según sus circunstancias, exista una mesa con diferentes tipos de snacks para que los jóvenes puedan "intercambiar sus monedas" que ganaron durante el día para "comprar lo que ellos gusten".',
                'display_order' => 1,
            ],
            [
                'activity_detail_id' => 47,
                'detail_content' => 'Al inicio de la fiesta y durante los primeros 20 minutos se acomodarán por compañías teniendo así la última actividad de hacer el grito de guerra, mostrar su escudo y bailar junto a su compañía una parte de una canción bailable. La compañía más animada obtendrá el punto final que completará el marcador y se definirá a la compañía ganadora del MeetUP.',
                'display_order' => 2,
            ],
            [
                'activity_detail_id' => 47,
                'detail_content' => 'Un animador o instructor de Zumba dirigirá una sesión de baile para que todos puedan seguirle al ritmo de la música. (Duración 1 hora aprox.).',
                'display_order' => 3,
            ],
            [
                'activity_detail_id' => 47,
                'detail_content' => 'Se sugiere llevar a cabo la "Hora Loca": una celebración más animada, donde podrían incluir confeti o cotillón, de acuerdo con los recursos disponibles.',
                'display_order' => 4,
            ],
            [
                'activity_detail_id' => 47,
                'detail_content' => 'Foto Booth Temático: Un rincón de fotos decorado, donde los jóvenes pueden tomarse fotos con sus sombreros. Durante toda la fiesta los jóvenes podrán tomarse fotos.',
                'display_order' => 5,
            ],
            [
                'activity_detail_id' => 47,
                'detail_content' => 'Finalmente los últimos 10 minutos de la fiesta se darán 3 canciones para que los jóvenes puedan bailar de manera libre.',
                'display_order' => 6,
            ],
            [
                'activity_detail_id' => 48,
                'detail_content' => 'Si necesita hacer cambios en los materiales de la actividad consulte con el matrimonio director.',
                'display_order' => 1,
            ],
            [
                'activity_detail_id' => 49,
                'detail_content' => 'Crear un momento de reflexión personal que sirva de transición entre la parte lúdica del MeetUP y el devocional en el salón sacramental. Esta dinámica invita a los jóvenes a identificar lo que han aprendido, sentido o decidido a lo largo del día, y a reconocer su lugar personal en el reino de Dios.',
                'display_order' => 1,
            ],
            [
                'activity_detail_id' => 50,
                'detail_content' => 'Estrellas doradas de cartulina (dos por joven) tamaño media carta.',
                'display_order' => 1,
            ],
            [
                'activity_detail_id' => 50,
                'detail_content' => 'Plumas o marcadores finos.',
                'display_order' => 2,
            ],
            [
                'activity_detail_id' => 50,
                'detail_content' => 'Marcar con tape las palabras “MeetUP” en la pared para que los jóvenes peguen una de sus estrellas.',
                'display_order' => 3,
            ],
            [
                'activity_detail_id' => 50,
                'detail_content' => 'Música sugerida: Música de Biblioteca del Evangelio -> Jóvenes -> Música para los jóvenes -> Discípulo de Cristo -> 8. Eterno; 6. Única esperanza verdadera; 7. Discípulo de Cristo; 5. Aún así, Él me escogió.',
                'display_order' => 4,
            ],
            [
                'activity_detail_id' => 51,
                'detail_content' => 'Después de la fiesta, los jóvenes serán guiados a recoger sus estrellas.',
                'display_order' => 1,
            ],
            [
                'activity_detail_id' => 51,
                'detail_content' => 'Cada joven recibirá dos estrellas doradas y una pluma o marcador.',
                'display_order' => 2,
            ],
            [
                'activity_detail_id' => 51,
                'detail_content' => 'Se sentarán y escribirán al reverso de sus estrellas una breve reflexión personal en 5 minutos. Una de las estrellas la pegarán en el letrero de “MeetUP” con la posibilidad de que se lea en público. La otra estrella, se la llevarán como un recuerdo de su experiencia.',
                'display_order' => 3,
            ],
            [
                'activity_detail_id' => 51,
                'detail_content' => 'Una vez que hayan terminado de escribir, pasarán por filas o pequeños grupos a colocar su estrella en el letrero.',
                'display_order' => 4,
            ],
            [
                'activity_detail_id' => 51,
                'detail_content' => 'Una vez colocada su estrella, se dirigirán al salón sacramental y se sentarán en silencio para empezar el devocional.',
                'display_order' => 5,
            ],
            [
                'activity_detail_id' => 51,
                'detail_content' => 'Estas reflexiones servirán como testimonio colectivo del día y darán pie al mensaje espiritual final.',
                'display_order' => 6,
            ],
            [
                'activity_detail_id' => 52,
                'detail_content' => 'A lo largo de esta conferencia, participamos en desafíosinspirados en un mundo que les resulta muy familiar. Un mundo de caminos, obstáculos, decisiones y por supuesto recompensas.',
                'display_order' => 1,
            ],
            [
                'activity_detail_id' => 52,
                'detail_content' => 'Pero más allá del juego, cada paso que dieron hoy representó algo mucho más importante: su propio progreso en el camino del Evangelio.',
                'display_order' => 2,
            ],
            [
                'activity_detail_id' => 52,
                'detail_content' => 'Cada dinámica fue una oportunidad para actuar con fe, obedecer con exactitud, ayudar a otros, resistir la tentación y descubrir el poder espiritual que ya está en ustedes.',
                'display_order' => 3,
            ],
            [
                'activity_detail_id' => 52,
                'detail_content' => 'Esa estrella que acabas de pegar no es solo un recuerdo del día. Es una expresión de lo que sentiste, aprendiste o decidiste. Es tu forma de decir: "Estoy listo para avanzar con más luz.".',
                'display_order' => 4,
            ],
            [
                'activity_detail_id' => 52,
                'detail_content' => 'Y es que tú eres una estrella en el reino del Señor. Tu luz tiene valor, tu influencia puede guiar y tu ejemplo puede brillar incluso en los lugares más oscuros.',
                'display_order' => 5,
            ],
            [
                'activity_detail_id' => 52,
                'detail_content' => 'Con esa invitación comenzaremos ahora nuestro devocional.',
                'display_order' => 6,
            ],
            [
                'activity_detail_id' => 53,
                'detail_content' => 'Bienvenida: Matrimonio Asesor.',
                'display_order' => 1,
            ],
            [
                'activity_detail_id' => 53,
                'detail_content' => 'Himno: # 168 Juventud de Israel / # 166 Firmes creced en la fe.',
                'display_order' => 2,
            ],
            [
                'activity_detail_id' => 53,
                'detail_content' => 'Oración: Joven de 14 años.',
                'display_order' => 3,
            ],
            [
                'activity_detail_id' => 53,
                'detail_content' => 'Clase Magistral de MeetUP a cargo de líderes de Seminario.',
                'display_order' => 3,
            ],
            [
                'activity_detail_id' => 53,
                'detail_content' => 'Testimonios: Solicitar testimonios a 2 jovenes/jovencitas.',
                'display_order' => 4,
            ],
            [
                'activity_detail_id' => 53,
                'detail_content' => 'Mensaje: Video de Autoridad – 4 mins.',
                'display_order' => 5,
            ],
            [
                'activity_detail_id' => 53,
                'detail_content' => 'Agradecimiento: Asignado por matrimonio asesor. Palabras de despedida a los jóvenes e invitación para que vivan los compromisos y valores que han aprendido o recordado aquí.',
                'display_order' => 6,
            ],
            [
                'activity_detail_id' => 53,
                'detail_content' => 'Himno: # 167 A vencer / # 90 Padre antes de partir.',
                'display_order' => 7,
            ],
            [
                'activity_detail_id' => 53,
                'detail_content' => 'Oración final: Jovencita de 16 años.',
                'display_order' => 8,
            ],
        ];
    }
}
