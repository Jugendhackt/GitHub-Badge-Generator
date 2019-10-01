<?php
    header('Content-type: image/svg+xml');

    if(isset($_GET['year'])) {
        if(is_numeric($_GET['year'])) {
            $evtYear = $_GET['year'];
        }
        else {
            $evtYear = "err";
        }
    }
    else {
        $evtYear = date("Y");
    }

    switch ($_GET['evt']) {
        case 'ber':
            $viewWidth = 231;
            $evtAbbr = "BER";
            $evtLong = "Berlin";
            $evtColor = "#2aabe1";
            break;
        case 'ffm':
            $viewWidth = 250;
            $evtAbbr = "FFM";
            $evtLong = "Frankfurt";
            $evtColor = "#5d6eb2";
            break;
        case 'hal':
            $viewWidth = 226;
            $evtAbbr = "HAL";
            $evtLong = "Halle";
            $evtColor = "#FFE712";
            break;
        case 'hh':
            $viewWidth = 250;
            $evtAbbr = "HH";
            $evtLong = "Hamburg";
            $evtColor = "#22B573";
            break;
        case 'hd':
            $viewWidth = 258;
            $evtAbbr = "HD";
            $evtLong = "Heidelberg";
            $evtColor = "#e74712";
            break;
        case 'cgn':
            $viewWidth = 224;
            $evtAbbr = "CGN";
            $evtLong = "Köln";
            $evtColor = "#2E3192";
            break;
        case 'at':
            $viewWidth = 256;
            $evtAbbr = "AT";
            $evtLong = "Österreich";
            $evtColor = "#00cc33";
            break;
        case 'ch':
            $viewWidth = 243;
            $evtAbbr = "CH";
            $evtLong = "Schweiz";
            $evtColor = "#CC0033";
            break;
        case 'mv':
            $viewWidth = 345;
            $evtAbbr = "MV";
            $evtLong = "Mecklenburg-Vorpommern";
            $evtColor = "#B5DDDF";
            break;
        case 'ulm':
            $viewWidth = 220;
            $evtAbbr = "ULM";
            $evtLong = "Ulm";
            $evtColor = "#EA680E";
            break;
        case 'asia':
            $viewWidth = 222;
            $evtAbbr = "ASIA";
            $evtLong = "Asia";
            $evtColor = "#FFD000";
            break;
        
        default:
            $viewWidth = 195;
            $evtAbbr = "";
            $evtLong = "";
            $evtColor = "#2aabe1";
            break;
    }

    echo('<svg xmlns="http://www.w3.org/2000/svg" width="'.$viewWidth.'" height="20" viewBox="0 0 '.$viewWidth.' 20">');
    echo('<a href="https://jugendhackt.org">');
    echo('<title>JH'.$evtAbbr.' Badge</title>');
    echo('<rect x="0" y="0" width="136" height="20" style="fill:#555"/>');
    echo('<rect x="135" y="0" width="7000" height="20" style="fill:'.$evtColor.'"/>');
    
    echo('<text transform="translate(8 14)" style="isolation:isolate;font-size:11px;fill:#fff;" font-family="Verdana,Geneva,sans-serif">Made at JugendHackt</text>');
    echo('<text transform="translate(160 14)" style="isolation:isolate;font-size:11px;fill:#fff;" font-family="Verdana,Geneva,sans-serif">'.$evtLong.' '.$evtYear.'</text>');

    echo('<rect x="144.9" y="10.55" width="1.09" height="1.09" style="fill:#fff"/>');
    echo('<rect x="151.46" y="10.55" width="1.09" height="1.09" style="fill:#fff"/>');
    echo('<polygon points="149.28 12.73 148.18 12.73 148.18 11.64 147.09 11.64 147.09 13.83 150.37 13.83 150.37 11.64 149.28 11.64 149.28 12.73" style="fill:#fff"/>');
    echo('<path d="M153.65,5.08V4h-2.19V5.08h-1.09V6.17h-3.28V5.08H146V4h-2.19V5.08h-1.09v8.75h1.09v1.09h1.09V16h7.66V14.92h1.09V13.83h1.09V5.08Zm0,7.65h-1.09v1.1h-1.1v1.09H146V13.83h-1.1v-1.1h-1.09V9.45h1.09V8.36h7.66V9.45h1.09Z" style="fill:#fff"/>');
    echo('</a>');
    echo('</svg>');
?>
