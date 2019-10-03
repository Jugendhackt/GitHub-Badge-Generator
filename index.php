<?php
    header('Content-type: image/svg+xml');

    $fontFamilies = "Verdana,Geneva,sans-serif";

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
            $viewWidth = 231;
            $evtAbbr = "BER";
            $evtLong = "Berlin";
            $evtColor = "#2aabe1";
            break;
    }


    switch ($_GET['type']) {
        case 'created-for':
            echo('<svg xmlns="http://www.w3.org/2000/svg" width="226.5" height="20" viewBox="0 0 226.5 20">');
            echo('<title>JH'.$evtAbbr.' Badge</title>');
            echo('<a href="https://jugendhackt.org">');
            echo('<rect x="0" y="0" width="170" height="20" style="fill:#555"/>');
            echo('<rect x="169" y="0" width="58" height="20" style="fill:'.$evtColor.'"/>');
            echo('<text transform="translate(8.53 14.52)" style="isolation: isolate;font-size: 11px;fill: #fff;font-family: '.$fontFamilies.'">Created for Jugend hackt in</text>');
            echo('<g>');
            echo('<text transform="translate(192.62 14.27)" style="isolation: isolate;font-size: 11px;fill: #fff;font-family: '.$fontFamilies.'">'.$evtYear.'</text>');
            echo('<g>');
            echo('<rect x="176.76" y="10.53" width="1.09" height="1.09" style="fill: #fff"/>');
            echo('<rect x="183.32" y="10.53" width="1.09" height="1.09" style="fill: #fff"/>');
            echo('<polygon points="181.13 12.72 180.04 12.72 180.04 11.62 178.95 11.62 178.95 13.81 182.23 13.81 182.23 11.62 181.13 11.62 181.13 12.72" style="fill: #fff"/>');
            echo('<path d="M185.51,5.06V4h-2.19V5.06h-1.09v1.1H179V5.06h-1.09V4h-2.19V5.06h-1.1v8.75h1.1V14.9h1.09V16h7.66V14.9h1.09V13.81h1.09V5.06Zm0,7.66h-1.09v1.09h-1.1V14.9h-5.46V13.81h-1.1V12.72h-1.09V9.44h1.09V8.34h7.66v1.1h1.09Z" style="fill: #fff"/>');
            echo('</g>');
            echo('</g>');
            echo('</a>');
            echo('</svg>');
            break;
        case 'started-at':
            echo('<svg xmlns="http://www.w3.org/2000/svg" width="173.85" height="20" viewBox="0 0 173.85 20">');
            echo('<title>JH'.$evtAbbr.' Badge</title>');
            echo('<a href="https://jugendhackt.org">');
            echo('<path d="M23.28,0H173.85V20H26.28Z" style="fill: #555"/>');
            echo('<path d="M0,0H26.28V20H0Z" style="fill: '.$evtColor.'"/>');
            echo('<text transform="translate(34.81 14.51)" style="isolation: isolate;font-size: 11px;fill: #fff;font-family: '.$fontFamilies.'">Started at Jugend hackt</text>');
            echo('<g>');
            echo('<rect x="9.31" y="10.53" width="1.09" height="1.09" style="fill: #fff"/>');
            echo('<rect x="15.87" y="10.53" width="1.09" height="1.09" style="fill: #fff"/>');
            echo('<polygon points="13.69 12.72 12.59 12.72 12.59 11.62 11.5 11.62 11.5 13.81 14.78 13.81 14.78 11.62 13.69 11.62 13.69 12.72" style="fill: #fff"/>');
            echo('<path d="M18.06,5.06V4H15.87V5.06H14.78v1.1H11.5V5.06H10.41V4H8.22V5.06H7.12v8.75h1.1V14.9H9.31V16H17V14.9h1.09V13.81h1.09V5.06Zm0,7.66H17v1.09h-1.1V14.9H10.41V13.81H9.31V12.72H8.22V9.44H9.31V8.34H17v1.1h1.09Z" style="fill: #fff"/>');
            echo('</g>');
            echo('</a>');
            echo('</svg>');
            break;
        case 'by-alpacas':
            echo('<svg xmlns="http://www.w3.org/2000/svg" width="149.79" height="20" viewBox="0 0 149.79 20">');
            echo('<title>JH'.$evtAbbr.' Badge</title>');
            echo('<a href="https://jugendhackt.org">');
            echo('<path d="M25.28,0H149.79V20H26.28Z" style="fill: #555"/>');
            echo('<path d="M0,0H26.28V20H0Z" style="fill: '.$evtColor.'"/>');
            echo('<text transform="translate(34.81 14.51)" style="isolation: isolate;font-size: 11px;fill: #fff;font-family: '.$fontFamilies.'">Created <tspan x="47.14" y="0" style="letter-spacing: -0.00244140625em">b</tspan><tspan x="53.97" y="0">y Alpacas</tspan></text>');
            echo('<g>');
            echo('<rect x="9.31" y="10.53" width="1.09" height="1.09" style="fill: #fff"/>');
            echo('<rect x="15.87" y="10.53" width="1.09" height="1.09" style="fill: #fff"/>');
            echo('<polygon points="13.69 12.72 12.59 12.72 12.59 11.62 11.5 11.62 11.5 13.81 14.78 13.81 14.78 11.62 13.69 11.62 13.69 12.72" style="fill: #fff"/>');
            echo('<path d="M18.06,5.06V4H15.87V5.06H14.78v1.1H11.5V5.06H10.41V4H8.22V5.06H7.12v8.75h1.1V14.9H9.31V16H17V14.9h1.09V13.81h1.09V5.06Zm0,7.66H17v1.09h-1.1V14.9H10.41V13.81H9.31V12.72H8.22V9.44H9.31V8.34H17v1.1h1.09Z" style="fill: #fff"/>');
            echo('</g>');
            echo('</a>');
            echo('</svg>');
            break;
        case 'view-presentation':
            echo('<svg xmlns="http://www.w3.org/2000/svg" width="164.83" height="20" viewBox="0 0 164.83 20">');
            echo('<title>JH'.$evtAbbr.' Badge</title>');
            echo('<a href="https://media.ccc.de/b/events/jugendhackt">');
            echo('<path d="M0,0H66.86V20H0Z" style="fill: #555"/>');
            echo('<path d="M64.86,0h100V20h-100Z" style="fill: '.$evtColor.'"/>');
            echo('<text transform="translate(8.53 14.52)" style="isolation: isolate;font-size: 11px;fill: #fff;font-family: '.$fontFamilies.'">View the</text>');
            echo('<text transform="translate(89.81 14.29)" style="isolation: isolate;font-size: 11px;fill: #fff;font-family: '.$fontFamilies.'">Presentation</text>');
            echo('<g>');
            echo('<rect x="73.96" y="10.55" width="1.09" height="1.09" style="fill: #fff"/>');
            echo('<rect x="80.52" y="10.55" width="1.09" height="1.09" style="fill: #fff"/>');
            echo('<polygon points="78.33 12.73 77.24 12.73 77.24 11.64 76.14 11.64 76.14 13.83 79.42 13.83 79.42 11.64 78.33 11.64 78.33 12.73" style="fill: #fff"/>');
            echo('<path d="M82.7,5.08V4H80.52V5.08h-1.1V6.17H76.14V5.08H75.05V4H72.86V5.08H71.77v8.75h1.09v1.09H74V16h7.65V14.92H82.7V13.83h1.1V5.08Zm0,7.65H81.61v1.1H80.52v1.09H75.05V13.83H74v-1.1h-1.1V9.45H74V8.36h7.65V9.45H82.7Z" style="fill: #fff"/>');
            echo('</g>');
            echo('</a>');
            echo('</svg>');
            break;

        default:
            echo('<svg xmlns="http://www.w3.org/2000/svg" width="'.$viewWidth.'" height="20" viewBox="0 0 '.$viewWidth.' 20">');
            echo('<title>JH'.$evtAbbr.' Badge</title>');
            echo('<a href="https://jugendhackt.org">');
            echo('<rect x="0" y="0" width="136" height="20" style="fill:#555"/>');
            echo('<rect x="135" y="0" width="7000" height="20" style="fill:'.$evtColor.'"/>');

            echo('<text transform="translate(8 14)" style="isolation:isolate;font-size:11px;fill:#fff;" font-family="'.$fontFamilies.'">Made at Jugend hackt</text>');
            echo('<text transform="translate(160 14)" style="isolation:isolate;font-size:11px;fill:#fff;" font-family="'.$fontFamilies.'">'.$evtLong.' '.$evtYear.'</text>');

            echo('<rect x="144.9" y="10.55" width="1.09" height="1.09" style="fill:#fff"/>');
            echo('<rect x="151.46" y="10.55" width="1.09" height="1.09" style="fill:#fff"/>');
            echo('<polygon points="149.28 12.73 148.18 12.73 148.18 11.64 147.09 11.64 147.09 13.83 150.37 13.83 150.37 11.64 149.28 11.64 149.28 12.73" style="fill:#fff"/>');
            echo('<path d="M153.65,5.08V4h-2.19V5.08h-1.09V6.17h-3.28V5.08H146V4h-2.19V5.08h-1.09v8.75h1.09v1.09h1.09V16h7.66V14.92h1.09V13.83h1.09V5.08Zm0,7.65h-1.09v1.1h-1.1v1.09H146V13.83h-1.1v-1.1h-1.09V9.45h1.09V8.36h7.66V9.45h1.09Z" style="fill:#fff"/>');
            echo('</a>');
            echo('</svg>');
            break;
    }

?>
