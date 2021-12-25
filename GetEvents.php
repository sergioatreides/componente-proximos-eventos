<?php

// Número de próximos eventos a mostrar
define('NUM_EVENTS', 3);

// Evento individual a mostrar
class Event {
    // Nombre del evento
    public $name;
    // Fecha del evento
    public $date;
    // ¿Día completo?
    public $fullDay = false;
    // Hora desde
    public $timeSince;
    // Hora hasta
    public $timeTo;
    // Descripción del evento
    public $description;
    // Imagen del evento
    public $image;

    function __construct($name,
                        $date,
                        $fullDay,
                        $timeSince,
                        $timeTo,
                        $description,
                        $image,
                        $url, 
                        $city,
                        $province)
    {
        $this->name = $name;
        $this->timeSince = $timeSince;
        $this->timeTo = $timeTo;
        $this->date = new DateTime($date);
        $this->description = $description;
        $this->image = $image;
        $this->url = $url;
        $this->city = $city;
        $this->province = $province;
    }
    function getFormatedDay() {
        return $this->date->format("j");
    }
    function getFormatedMonth() {
        $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
        return $meses[$this->date->format('n') - 1];
    }
};

// ----------------------------------------------------------------------------------------------
// Función que obtiene el nº de eventos más próximos determinados por la constante NUM_EVENTS
// 
// ----------------------------------------------------------------------------------------------
function getNextEvents() {

    $nextEvents = [];

    // Código dummy -----------------------------------------------------------------------------
    $evento1 = new Event("San Silvestriña Solidaria 2021",
                        "2021-12-26",
                        false,
                        "10:30",
                        "13:00",
                        "Después de la edición virtual del año pasado, la VII edición de la carrera más esperada por todos los niños en Navidad, la Sansilvestriña de Vallecas, vuelve a llenar las calles de Vallecas de pequeños runners magos con el mismo objetivo de siempre: ayudar a que ningún niño pase las Navidades sin juguetes. Será el día 26 de diciembre desde las 10:30 horas en la instalación deportiva básica José Durán, en el Parque de Palomeras Bajas.<br>Como en ediciones anteriores, podrán participar corredores de entre 3 y 15 años que cubrirán distancias entre 80 metros y 1.200 metros según cada categoría. Para hacerlo, solamente tiene que entregar un juguete nuevo o en buen estado. En esta ocasión, los runners magos entregarán los juguetes a la Asociación vecinal del Pozo del Tío Raimundo y de la Viña de Entrevías, que trabajan en mejorar la calidad de vida del barrio.",
                        "/img/eventos/san-silvestrina.jpg", 
                        "https://google.es",
                        "Madrid",
                        "Madrid");
    $evento2 = new Event("Play Córdoba Game-Fest 2021",
                        "2021-12-28",
                        true,
                        "",
                        "",
                        "Play #Game-Fest es un festival gaming y de ocio digital en el que durante varios días se reúnen miles de asistentes para competir, jugar, disfrutar y divertirse.<br>El gaming no es solo un juego. eSports, Youtubers y Streamers, Equipos y Clubs profesionales, Desarrolladore, Realidad Virtual…<br>Una feria digital dirigida a todos los públicos. Una forma de vivir los videojuegos como nunca, una ocasión para sentir nuevas emociones.",
                        "/img/eventos/game-fest.jpg",
                        "https://bing.es",
                        "Córdoba",
                        "Córdoba");
    $evento3 = new Event("Play Córdoba Game-Fest 2021",
                        "2021-12-29",
                        true,
                        "",
                        "",
                        "Play #Game-Fest es un festival gaming y de ocio digital en el que durante varios días se reúnen miles de asistentes para competir, jugar, disfrutar y divertirse.<br>El gaming no es solo un juego. eSports, Youtubers y Streamers, Equipos y Clubs profesionales, Desarrolladore, Realidad Virtual…<br>Una feria digital dirigida a todos los públicos. Una forma de vivir los videojuegos como nunca, una ocasión para sentir nuevas emociones.",
                        "/img/eventos/game-fest.jpg",
                        "https://yahoo.es",
                        "Córdoba",
                        "Córdoba");
    $evento4 = new Event("Cabalgata de Reyes 2022",
                        "2022-01-05",
                        false,
                        "18:30",
                        "21:00",
                        "",
                        "/img/eventos/cabalgata-torrejon.jpg",
                        "https://meneame.net",
                        "Torejón de Ardoz",
                        "Madrid");
    array_push($nextEvents, $evento1, $evento2, $evento3, $evento4);
    return $nextEvents;
    // Fin código dummy -------------------------------------------------------------------------------


    return $nextEvents;
}