<?php
header('Content-type: image/svg+xml');

if(isset($_GET['year']))
{
    $evtYear = $_GET['year'];
}

class Event
{
    private $viewWidth;
    private $evtAbbr;
    private $evtLong;
    private $evtColor;
    private $year;

    public function __construct($viewWidth, $evtAbbr, $evtLong, $evtColor)
    {
        $this->viewWidth = $viewWidth;
        $this->evtAbbr = $evtAbbr;
        $this->evtLong = $evtLong;
        $this->evtColor = $evtColor;
    }

    /**
     * @return Echos the svg
     */
    public function getSVG()
    {
        echo('<svg xmlns="http://www.w3.org/2000/svg" width="' .  $this->viewWidth . '" height="20" viewBox="0 0 ' .  $this->viewWidth . ' 20">');
        echo('<a href="https://jugendhackt.org" target="_blank">');
        echo('<title>JH' . $this->evtAbbr . ' Badge</title>');
        echo('<rect x="0" y="0" width="136" height="20" style="fill: #555"/>');
        echo('<rect x="135" y="0" width="7000" height="20" style="fill:' .  $this->evtColor . '"/>');

        echo('<text transform="translate(8 14)" style="isolation:isolate; font-size: 11px;fill: #fff;" font-family="Verdana,Geneva,sans-serif">Made at JugendHackt</text>');
        echo('<text transform="translate(160 14)" style="isolation:isolate; font-size: 11px;fill: #fff;" font-family="Verdana,Geneva,sans-serif">' .  $this->evtLong . ' ' .  $this->year . '</text>');

        echo('<rect x="144.9" y="10.55" width="1.09" height="1.09" style="fill: #fff"/>');
        echo('<rect x="151.46" y="10.55" width="1.09" height="1.09" style="fill:  #fff"/>');
        echo('<polygon points="149.28 12.73 148.18 12.73 148.18 11.64 147.09 11.64 147.09 13.83 150.37 13.83 150.37 11.64 149.28 11.64 149.28 12.73" style="fill: #fff"/>');
        echo('<path d="M153.65,5.08V4h-2.19V5.08h-1.09V6.17h-3.28V5.08H146V4h-2.19V5.08h-1.09v8.75h1.09v1.09h1.09V16h7.66V14.92h1.09V13.83h1.09V5.08Zm0,7.65h-1.09v1.1h-1.1v1.09H146V13.83h-1.1v-1.1h-1.09V9.45h1.09V8.36h7.66V9.45h1.09Z" style="fill: #fff"/>');
        echo('</a>');
        echo('</svg>');
    }

    /**
     * @return The short form of the event location
     */
    public function getEvtAbbr()
    {
        return $this->evtAbbr;
    }

    /**
     * @param $year The given year of an event
     */
    public function setYear($year)
    {
        if (is_numeric($year) && strlen($year) == 4)
        {
            $this->year = $year;
        }
        else
        {
            $this->year = date("Y");
        }
    }
}

$events = array(
    new Event(197, "NONE", "", "#2AABE1"),
    new Event(231, "BER", "Berlin", "#2AABE1"),
    new Event(250, "FFM", "Frankfurt", "#5D6EB2"),
    new Event(226, "HAL", "Halle", "#FFE712"),
    new Event(250, "HH", "Hamburg", "#22B573"),
    new Event(258, "HD", "Heidelberg", "#E74712"),
    new Event(224, "CGN", "Köln", "#2E3192"),
    new Event(345, "MV", "Mecklenburg-Vorpommern", "#B5DDDF"),
    new Event(220, "ULM", "Ulm", "#EA680E"),
    new Event(256, "AT", "Österreich", "#00CC33"),
    new Event(243, "CH", "Schweiz", "CC0033"),
    new Event(222, "ASIA", "Asia", "#FFD000")
);

$found = false;

foreach ($events as $event)
{
    if(strtolower($event->getEvtAbbr()) == strtolower($_GET['evt']))
    {
        $event->setYear($evtYear);
        $event->getSVG();

        $found = true;
    }
}

if(!$found)
{
    $events[0]->setYear($evtYear);
    $events[0]->getSVG();
}
