<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sakti Podcast</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
        

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
            .fc-content{
                display: flex;
                flex-direction: column; 
            }

            .fc-title {
                font-size: .7rem;
            }
            .fc-event {
                margin: .3rem 0 !important;
            }
        </style>
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <style>
            body {
                font-family: 'Quicksand', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <nav class="navbar navbar-expand-lg navbar-light text-Dark" style="background-color: #f7d217">
            <div class="container">
                <img src="{{ ('assets/img/logoIF.png') }}" style="width: 40px; weight: 40px;" >
                <a class="navbar-brand font-weight-bold m-1" href="#" style="color: black">SIREKAN</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        @guest
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="{{ route('login') }}">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="{{ route('register') }}">Register</a>
                            </li>
                        @endguest
                        @auth
                        <li class="nav-item dropdown mr-5">
                            <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                                {{ auth()->user()->name }}
                            </a>
                            <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('booking.history', ['userId' => auth()->id()]) }}">Histori Reservasi</a>
                                <a class="dropdown-item" onclick="event.preventDefault();document.getElementById('logout-form').submit();" href="">Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="post">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>

      <div class="container my-5">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header font-weight-bold" style="background-color: #f7d217">
                        Jadwal Reservasi Ruang Sakti Podcast
                    </div>
                    <div class="card-body">
                        <link rel='stylesheet'/>
                        <style>
                            .fc-icon,body .fc{font-size:1em}
                            .fc-button-group,.fc-icon{display:inline-block}
                            .fc-bg,.fc-row .fc-bgevent-skeleton,.fc-row .fc-highlight-skeleton{bottom:0}
                            .fc-icon,.fc-unselectable{-khtml-user-select:none;-webkit-touch-callout:none}
                            .fc{direction:ltr;text-align:left}
                            .fc-rtl{text-align:right}
                            .fc th,.fc-basic-view td.fc-week-number,.fc-icon,.fc-toolbar{text-align:center}
                            .fc-unthemed .fc-content,.fc-unthemed .fc-divider,.fc-unthemed .fc-list-heading td,.fc-unthemed .fc-list-view,.fc-unthemed .fc-popover,.fc-unthemed .fc-row,.fc-unthemed tbody,.fc-unthemed td,.fc-unthemed th,.fc-unthemed thead{border-color:#ddd}
                            .fc-unthemed .fc-popover{background-color:#fff}
                            .fc-unthemed .fc-divider,
                            .fc-unthemed .fc-list-heading td,.fc-unthemed .fc-popover .fc-header{background:#eee}
                            .fc-unthemed .fc-popover .fc-header .fc-close{color:#666}
                            .fc-unthemed td.fc-today{background:#fcf8e3}
                            .fc-highlight{background:#bce8f1;opacity:.3}
                            .fc-bgevent{background:#8fdf82;opacity:.3}
                            .fc-nonbusiness{background:#d7d7d7}
                            .fc-icon{height:1em;line-height:1em;overflow:hidden;font-family:"Courier New",Courier,monospace;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}
                            .fc-icon:after{position:relative}
                            .fc-icon-left-single-arrow:after{content:"\02039";font-weight:700;font-size:200%;top:-7%}
                            .fc-icon-right-single-arrow:after{content:"\0203A";font-weight:700;font-size:200%;top:-7%}
                            .fc-icon-left-double-arrow:after{content:"\000AB";font-size:160%;top:-7%}
                            .fc-icon-right-double-arrow:after{content:"\000BB";font-size:160%;top:-7%}
                            .fc-icon-left-triangle:after{content:"\25C4";font-size:125%;top:3%}
                            .fc-icon-right-triangle:after{content:"\25BA";font-size:125%;top:3%}
                            .fc-icon-down-triangle:after{content:"\25BC";font-size:125%;top:2%}
                            .fc-icon-x:after{content:"\000D7";font-size:200%;top:6%}
                            .fc button{-moz-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box;margin:0;height:2.1em;padding:0 .6em;font-size:1em;white-space:nowrap;cursor:pointer}
                            .fc button::-moz-focus-inner{margin:0;padding:0}
                            .fc-state-default{border:1px solid;
                                background-color:#f5f5f5;
                                background-image:-moz-linear-gradient(top,#fff,#e6e6e6);
                                background-image:-webkit-gradient(linear,0 0,0 100%,from(#fff),to(#e6e6e6));
                                background-image:-webkit-linear-gradient(top,#fff,#e6e6e6);
                                background-image:-o-linear-gradient(top,#fff,#e6e6e6);
                                background-image:linear-gradient(to bottom,#fff,#e6e6e6);
                                background-repeat:repeat-x;
                                border-color:#e6e6e6 #e6e6e6 #bfbfbf;
                                border-color:rgba(0,0,0,.1) rgba(0,0,0,.1) rgba(0,0,0,.25);
                                color:#333;text-shadow:0 1px 1px rgba(255,255,255,.75);
                                box-shadow:inset 0 1px 0 rgba(255,255,255,.2),0 1px 2px rgba(0,0,0,.05)}
                            .fc-state-default.fc-corner-left{border-top-left-radius:4px;border-bottom-left-radius:4px}
                            .fc-state-default.fc-corner-right{border-top-right-radius:4px;border-bottom-right-radius:4px}
                            .fc button .fc-icon{position:relative;top:-.05em;margin:0 .2em;vertical-align:middle}
                            .fc-state-active,.fc-state-disabled,.fc-state-down,.fc-state-hover{color:#333;background-color:#e6e6e6}
                            .fc-state-hover{color:#333;
                                text-decoration:none;
                                background-position:0 -15px;
                                -webkit-transition:background-position .1s linear;
                                -moz-transition:background-position .1s linear;
                                -o-transition:background-position .1s linear;
                                transition:background-position .1s linear}
                            .fc-state-active,.fc-state-down{background-color:#ccc;
                                background-image:none;
                                box-shadow:inset 0 2px 4px rgba(0,0,0,.15),0 1px 2px rgba(0,0,0,.05)}
                            .fc-state-disabled{cursor:default;background-image:none;opacity:.65;box-shadow:none}
                            .fc-event.fc-draggable,.fc-event[href],.fc-popover .fc-header .fc-close,a[data-goto]{cursor:pointer}
                            .fc .fc-button-group>*{float:left;margin:0 0 0 -1px}
                            .fc .fc-button-group>:first-child{margin-left:0}
                            .fc-popover{position:absolute;box-shadow:0 2px 6px rgba(0,0,0,.15)}
                            .fc-popover .fc-header{padding:2px 4px}
                            .fc-popover .fc-header .fc-title{margin:0 2px}
                            .fc-ltr .fc-popover .fc-header .fc-title,.fc-rtl .fc-popover .fc-header .fc-close{float:left}
                            .fc-ltr .fc-popover .fc-header .fc-close,.fc-rtl .fc-popover .fc-header .fc-title{float:right}
                            .fc-unthemed .fc-popover{border-width:1px;border-style:solid}
                            .fc-unthemed .fc-popover .fc-header .fc-close{font-size:.9em;margin-top:2px}
                            .fc-popover>.ui-widget-header+.ui-widget-content{border-top:0}
                            .fc-divider{border-style:solid;border-width:1px}hr.fc-divider{height:0;margin:0;padding:0 0 2px;border-width:1px 0}
                            .fc-bg table,.fc-row .fc-bgevent-skeleton table,.fc-row .fc-highlight-skeleton table{height:100%}
                            .fc-clear{clear:both}
                            .fc-bg,.fc-bgevent-skeleton,.fc-helper-skeleton,.fc-highlight-skeleton{position:absolute;top:0;left:0;right:0}
                            .fc table{width:100%;box-sizing:border-box;table-layout:fixed;border-collapse:collapse;border-spacing:0;font-size:1em}
                            .fc td,.fc th{border-style:solid;border-width:1px;padding:0;vertical-align:top}
                            .fc td.fc-today{border-style:double}a[data-goto]:hover{text-decoration:underline}
                            .fc .fc-row{border-style:solid;border-width:0}
                            .fc-row table{border-left:0 hidden transparent;border-right:0 hidden transparent;border-bottom:0 hidden transparent}
                            .fc-row:first-child table{border-top:0 hidden transparent}
                            .fc-row{position:relative}.fc-row .fc-bg{z-index:1}
                            .fc-row .fc-bgevent-skeleton td,.fc-row .fc-highlight-skeleton td{border-color:transparent}
                            .fc-row .fc-bgevent-skeleton{z-index:2}
                            .fc-row .fc-highlight-skeleton{z-index:3}
                            .fc-row .fc-content-skeleton{position:relative;z-index:4;padding-bottom:2px}
                            .fc-row .fc-helper-skeleton{z-index:5}
                            .fc-row .fc-content-skeleton td,.fc-row .fc-helper-skeleton td{background:0 0;border-color:transparent;border-bottom:0}
                            .fc-row .fc-content-skeleton tbody td,.fc-row .fc-helper-skeleton tbody td{border-top:0}
                            .fc-scroller{-webkit-overflow-scrolling:touch}
                            .fc-row.fc-rigid,.fc-time-grid-event{overflow:hidden}
                            .fc-scroller>.fc-day-grid,.fc-scroller>.fc-time-grid{position:relative;width:100%}
                            .fc-event{position:relative;display:block;font-size:.85em;line-height:1.3;border-radius:3px;border:1px solid #3a87ad;font-weight:400}
                            .fc-event,.fc-event-dot{background-color:#3a87ad}
                            .fc-event,.fc-event:hover,.ui-widget .fc-event{color:#fff;text-decoration:none}
                            .fc-not-allowed,.fc-not-allowed .fc-event{cursor:not-allowed}
                            .fc-event .fc-bg{z-index:1;background:#fff;opacity:.25}
                            .fc-event .fc-content{position:relative;z-index:2}
                            .fc-event .fc-resizer{position:absolute;z-index:4;display:none}
                            .fc-event.fc-allow-mouse-resize .fc-resizer,.fc-event.fc-selected .fc-resizer{display:block}
                            .fc-event.fc-selected .fc-resizer:before{content:"";position:absolute;z-index:9999;top:50%;left:50%;width:40px;height:40px;margin-left:-20px;margin-top:-20px}
                            .fc-event.fc-selected{z-index:9999!important;box-shadow:0 2px 5px rgba(0,0,0,.2)}
                            .fc-event.fc-selected.fc-dragging{box-shadow:0 2px 7px rgba(0,0,0,.3)}
                            .fc-h-event.fc-selected:before{content:"";position:absolute;z-index:3;top:-10px;bottom:-10px;left:0;right:0}
                            .fc-ltr .fc-h-event.fc-not-start,.fc-rtl .fc-h-event.fc-not-end{margin-left:0;border-left-width:0;padding-left:1px;border-top-left-radius:0;border-bottom-left-radius:0}
                            .fc-ltr .fc-h-event.fc-not-end,.fc-rtl .fc-h-event.fc-not-start{margin-right:0;border-right-width:0;padding-right:1px;border-top-right-radius:0;border-bottom-right-radius:0}
                            .fc-ltr .fc-h-event .fc-start-resizer,.fc-rtl .fc-h-event .fc-end-resizer{cursor:w-resize;left:-1px}
                            .fc-ltr .fc-h-event .fc-end-resizer,.fc-rtl .fc-h-event .fc-start-resizer{cursor:e-resize;right:-1px}
                            .fc-h-event.fc-allow-mouse-resize .fc-resizer{width:7px;top:-1px;bottom:-1px}
                            .fc-h-event.fc-selected .fc-resizer{border-radius:4px;border-width:1px;width:6px;height:6px;border-style:solid;border-color:inherit;background:#fff;top:50%;margin-top:-4px}
                            .fc-ltr .fc-h-event.fc-selected .fc-start-resizer,.fc-rtl .fc-h-event.fc-selected .fc-end-resizer{margin-left:-4px}
                            .fc-ltr .fc-h-event.fc-selected .fc-end-resizer,.fc-rtl .fc-h-event.fc-selected .fc-start-resizer{margin-right:-4px}
                            .fc-day-grid-event{margin:1px 2px 0;padding:0 1px}tr:first-child>td>.fc-day-grid-event{margin-top:2px}
                            .fc-day-grid-event.fc-selected:after{content:"";position:absolute;z-index:1;top:-1px;right:-1px;bottom:-1px;left:-1px;background:#000;opacity:.25}
                            .fc-day-grid-event .fc-content{white-space:nowrap;overflow:hidden}
                            .fc-day-grid-event .fc-time{font-weight:700}
                            .fc-ltr .fc-day-grid-event.fc-allow-mouse-resize .fc-start-resizer,.fc-rtl .fc-day-grid-event.fc-allow-mouse-resize .fc-end-resizer{margin-left:-2px}
                            .fc-ltr .fc-day-grid-event.fc-allow-mouse-resize .fc-end-resizer,.fc-rtl .fc-day-grid-event.fc-allow-mouse-resize .fc-start-resizer{margin-right:-2px}a.fc-more{margin:1px 3px;font-size:.85em;cursor:pointer;text-decoration:none}a.fc-more:hover{text-decoration:underline}
                            .fc-limited{display:none}
                            .fc-day-grid .fc-row{z-index:1}
                            .fc-more-popover{z-index:2;width:220px}
                            .fc-more-popover .fc-event-container{padding:10px}
                            .fc-now-indicator{position:absolute;border:0 solid red}
                            .fc-unselectable{-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;-webkit-tap-highlight-color:transparent}
                            .fc-toolbar.fc-header-toolbar{margin-bottom:1em}
                            .fc-toolbar.fc-footer-toolbar{margin-top:1em}
                            .fc-toolbar .fc-left{float:left}
                            .fc-toolbar .fc-right{float:right}
                            .fc-toolbar .fc-center{display:inline-block}
                            .fc .fc-toolbar>*>*{float:left;margin-left:.75em}
                            .fc .fc-toolbar>*>:first-child{margin-left:0}
                            .fc-toolbar h2{margin:0}
                            .fc-toolbar button{position:relative}
                            .fc-toolbar .fc-state-hover,.fc-toolbar .ui-state-hover{z-index:2}
                            .fc-toolbar .fc-state-down{z-index:3}
                            .fc-toolbar .fc-state-active,.fc-toolbar .ui-state-active{z-index:4}
                            .fc-toolbar button:focus{z-index:5}
                            .fc-view-container *,.fc-view-container :after,.fc-view-container :before{-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box}
                            .fc-view,.fc-view>table{position:relative;z-index:1}
                            .fc-basicDay-view .fc-content-skeleton,.fc-basicWeek-view .fc-content-skeleton{padding-bottom:1em}
                            .fc-basic-view .fc-body .fc-row{min-height:4em}
                            .fc-row.fc-rigid .fc-content-skeleton{position:absolute;top:0;left:0;right:0}
                            .fc-day-top.fc-other-month{opacity:.3}
                            .fc-basic-view .fc-day-number,.fc-basic-view .fc-week-number{padding:2px}
                            .fc-basic-view th.fc-day-number,.fc-basic-view th.fc-week-number{padding:0 2px}
                            .fc-ltr .fc-basic-view .fc-day-top .fc-day-number{float:right}
                            .fc-rtl .fc-basic-view .fc-day-top .fc-day-number{float:left}
                            .fc-ltr .fc-basic-view .fc-day-top .fc-week-number{float:left;border-radius:0 0 3px}
                            .fc-rtl .fc-basic-view .fc-day-top .fc-week-number{float:right;border-radius:0 0 0 3px}
                            .fc-basic-view .fc-day-top .fc-week-number{min-width:1.5em;text-align:center;background-color:#f2f2f2;color:grey}
                            .fc-basic-view td.fc-week-number>*{display:inline-block;min-width:1.25em}
                            .fc-agenda-view .fc-day-grid{position:relative;z-index:2}
                            .fc-agenda-view .fc-day-grid .fc-row{min-height:3em}
                            .fc-agenda-view .fc-day-grid .fc-row .fc-content-skeleton{padding-bottom:1em}
                            .fc .fc-axis{vertical-align:middle;padding:0 4px;white-space:nowrap}
                            .fc-ltr .fc-axis{text-align:right}
                            .fc-rtl .fc-axis{text-align:left}
                            .ui-widget td.fc-axis{font-weight:400}
                            .fc-time-grid,.fc-time-grid-container{position:relative;z-index:1}
                            .fc-time-grid{min-height:100%}
                            .fc-time-grid table{border:0 hidden transparent}
                            .fc-time-grid>.fc-bg{z-index:1}
                            .fc-time-grid .fc-slats,.fc-time-grid>hr{position:relative;z-index:2}
                            .fc-time-grid .fc-content-col{position:relative}
                            .fc-time-grid .fc-content-skeleton{position:absolute;z-index:3;top:0;left:0;right:0}
                            .fc-time-grid .fc-business-container{position:relative;z-index:1}
                            .fc-time-grid .fc-bgevent-container{position:relative;z-index:2}
                            .fc-time-grid .fc-highlight-container{z-index:3;position:relative}
                            .fc-time-grid .fc-event-container{position:relative;z-index:4}
                            .fc-time-grid .fc-now-indicator-line{z-index:5}
                            .fc-time-grid .fc-helper-container{position:relative;z-index:6}
                            .fc-time-grid .fc-slats td{height:1.5em;border-bottom:0}
                            .fc-time-grid .fc-slats .fc-minor td{border-top-style:dotted}
                            .fc-time-grid .fc-slats .ui-widget-content{background:0 0}
                            .fc-time-grid .fc-highlight{position:absolute;left:0;right:0}
                            .fc-ltr .fc-time-grid .fc-event-container{margin:0 2.5% 0 2px}
                            .fc-rtl .fc-time-grid .fc-event-container{margin:0 2px 0 2.5%}
                            .fc-time-grid .fc-bgevent,.fc-time-grid .fc-event{position:absolute;z-index:1}
                            .fc-time-grid .fc-bgevent{left:0;right:0}
                            .fc-v-event.fc-not-start{border-top-width:0;padding-top:1px;border-top-left-radius:0;border-top-right-radius:0}
                            .fc-v-event.fc-not-end{border-bottom-width:0;padding-bottom:1px;border-bottom-left-radius:0;border-bottom-right-radius:0}
                            .fc-time-grid-event.fc-selected{overflow:visible}
                            .fc-time-grid-event.fc-selected .fc-bg{display:none}
                            .fc-time-grid-event .fc-content{overflow:hidden}
                            .fc-time-grid-event .fc-time,.fc-time-grid-event .fc-title{padding:0 1px}
                            .fc-time-grid-event .fc-time{font-size:.85em;white-space:nowrap}
                            .fc-time-grid-event.fc-short .fc-content{white-space:nowrap}
                            .fc-time-grid-event.fc-short .fc-time,.fc-time-grid-event.fc-short .fc-title{display:inline-block;vertical-align:top}
                            .fc-time-grid-event.fc-short .fc-time span{display:none}
                            .fc-time-grid-event.fc-short .fc-time:before{content:attr(data-start)}
                            .fc-time-grid-event.fc-short .fc-time:after{content:"\000A0-\000A0"}
                            .fc-time-grid-event.fc-short .fc-title{font-size:.85em;padding:0}
                            .fc-time-grid-event.fc-allow-mouse-resize .fc-resizer{left:0;right:0;bottom:0;height:8px;overflow:hidden;line-height:8px;font-size:11px;font-family:monospace;text-align:center;cursor:s-resize}
                            .fc-time-grid-event.fc-allow-mouse-resize .fc-resizer:after{content:"="}
                            .fc-time-grid-event.fc-selected .fc-resizer{border-radius:5px;border-width:1px;width:8px;height:8px;border-style:solid;border-color:inherit;background:#fff;left:50%;margin-left:-5px;bottom:-5px}
                            .fc-time-grid .fc-now-indicator-line{border-top-width:1px;left:0;right:0}
                            .fc-time-grid .fc-now-indicator-arrow{margin-top:-5px}
                            .fc-ltr .fc-time-grid .fc-now-indicator-arrow{left:0;border-width:5px 0 5px 6px;border-top-color:transparent;border-bottom-color:transparent}
                            .fc-rtl .fc-time-grid .fc-now-indicator-arrow{right:0;border-width:5px 6px 5px 0;border-top-color:transparent;border-bottom-color:transparent}
                            .fc-event-dot{display:inline-block;width:10px;height:10px;border-radius:5px}
                            .fc-rtl .fc-list-view{direction:rtl}
                            .fc-list-view{border-width:1px;border-style:solid}
                            .fc .fc-list-table{table-layout:auto}
                            .fc-list-table td{border-width:1px 0 0;padding:8px 14px}
                            .fc-list-table tr:first-child td{border-top-width:0}
                            .fc-list-heading{border-bottom-width:1px}
                            .fc-list-heading td{font-weight:700}
                            .fc-ltr .fc-list-heading-main{float:left}
                            .fc-ltr .fc-list-heading-alt,.fc-rtl .fc-list-heading-main{float:right}
                            .fc-rtl .fc-list-heading-alt{float:left}
                            .fc-list-item.fc-has-url{cursor:pointer}
                            .fc-list-item:hover td{background-color:#f5f5f5}
                            .fc-list-item-marker,.fc-list-item-time{white-space:nowrap;width:1px}
                            .fc-ltr .fc-list-item-marker{padding-right:0}
                            .fc-rtl .fc-list-item-marker{padding-left:0}
                            .fc-list-item-title a{text-decoration:none;color:inherit}
                            .fc-list-item-title a[href]:hover{text-decoration:underline}
                            .fc-list-empty-wrap2{position:absolute;top:0;left:0;right:0;bottom:0}
                            .fc-list-empty-wrap1{width:100%;height:100%;display:table}
                            .fc-list-empty{display:table-cell;vertical-align:middle;text-align:center}
                            .fc-unthemed .fc-list-empty{background-color:#eee}
                        </style>
                        <div id='calendar'></div>
                    </div>
                </div>
            </div>     
                <div class="col-lg-4">
                    <div class="container">  
                        <div class="card mb-3 my-2">
                            <div class="card-header font-weight-bold" style="color: black; background-color: #f7d217"">
                                Reservasi Ruangan
                            </div>
                            <div class="card-body">
                            @csrf
                            <label for="arena_id">Ruangan Tersedia</label>
                                <select name="arena_id" id="arena_id" class="form-control mb-3" disabled>
                                    @foreach($arenas as $arena) 
                                        <option {{ $arena->nmruangan ? 'selected' : null }} value="{{ $arena->id }}">{{ $arena->nmruangan }}</option>
                                    @endforeach
                                </select>
                                @if(auth()->user())
                                <a href="{{ route('booking', ['number' => $arena->number])  }}" class="btn btn-outline-warning btn-block font-weight-bold" style="width: 100%">Reservasi</a>
                                @else
                                <a href="{{ route('login') }}" class="btn btn-outline-warning btn-block font-weight-bold" style="width: 100%">Reservasi</a>
                                @endif
                            </div>
                        </div>
                    </div>    
                </div>
            </div>   
        </div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
<script>
    $(document).ready(function () {
            // page is now ready, initialize the calendar...
           
            bookings={!! json_encode($bookings) !!};

            console.log(bookings)
            $('#calendar').fullCalendar({
                // put your options and callbacks here
                events: bookings,

            });
        });
</script>
</body>
</html>
