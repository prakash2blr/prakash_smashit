<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0,minimal-ui" id="viewport"/>
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <meta name="format-detection" content="telephone=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>sMASH iT</title>
        <link rel="stylesheet" href="css/bootstrap.min_3.css"/>
        <link rel="stylesheet" href="css/smash.css"/>
        <link rel="stylesheet" href="css/alertify.core.css"/>
        <link rel="stylesheet" href="css/alertify.default.css"/>
        <style>
            .lost-info{
                height:auto;
                width: 100%;
                background: rgba(0,0,0,0.4);
                border: 1px solid white;
                position: absolute;
                top: 150px;
                text-align: center;
                padding: 5px;
                display: none;
            }
            .lost-info span{
                display: block;
                color: red;
                padding: 2px;
                background: lightblue;
                font-weight: bold;
                margin-bottom: 5px;
            }
            .lost-container{
                width: 100%;
                min-height: 500px;
                top: 0;
                position: absolute;
                display: none;
            }
            #how-to-play{
                cursor: pointer;
            }
            #how-to-play #info-div{
                display: none;
            }
        </style>
    </head>
    <body>
    <header></header>
        <div class="container col-lg-4 col-xs-10 col-md-5 col-sm-6">
            <div class="details-container">
                <div class="timer-container">
                    Time Elapsed:
                    <div class="timer">
                        <span id="time">-</span> Sec
                    </div>
                </div>
                <div class="total-count-container">
                    Remaining Evil :
                    <div class="evil-count">
                        <span id="evil">-</span> Evil
                    </div>
                </div>
            </div>
            <div class="game-container">
                <div class="col-lg-2 box-wrapper col-md-2 col-xs-2 col-sm-2" id="r11">
                    <div class="box-container" onclick="checkIt(this)">

                    </div>
                </div>
                <div class="col-lg-2 box-wrapper col-md-2 col-xs-2 col-sm-2" id="r12">
                    <div class="box-container" onclick="checkIt(this)">

                    </div>
                </div>
                <div class="col-lg-2 box-wrapper col-md-2 col-xs-2 col-sm-2" id="r13">
                    <div class="box-container" onclick="checkIt(this)">

                    </div>
                </div>
                <div class="col-lg-2 box-wrapper col-md-2 col-xs-2 col-sm-2" id="r14">
                    <div class="box-container" onclick="checkIt(this)">

                    </div>
                </div>
                <div class="col-lg-2 box-wrapper col-md-2 col-xs-2 col-sm-2" id="r15">
                    <div class="box-container" onclick="checkIt(this)">

                    </div>
                </div>
                <div class="col-lg-2 box-wrapper col-md-2 col-xs-2 col-sm-2" id="r16">
                    <div class="box-container" onclick="checkIt(this)">

                    </div>
                </div>
                <div class="col-lg-2 box-wrapper col-md-2 col-xs-2 col-sm-2" id="r21">
                    <div class="box-container" onclick="checkIt(this)">

                    </div>
                </div>
                <div class="col-lg-2 box-wrapper col-md-2 col-xs-2 col-sm-2" id="r22">
                    <div class="box-container" onclick="checkIt(this)">

                    </div>
                </div>
                <div class="col-lg-2 box-wrapper col-md-2 col-xs-2 col-sm-2" id="r23">
                    <div class="box-container" onclick="checkIt(this)">

                    </div>
                </div>
                <div class="col-lg-2 box-wrapper col-md-2 col-xs-2 col-sm-2" id="r24">
                    <div class="box-container" onclick="checkIt(this)">

                    </div>
                </div>
                <div class="col-lg-2 box-wrapper col-md-2 col-xs-2 col-sm-2" id="r25">
                    <div class="box-container" onclick="checkIt(this)">

                    </div>
                </div>
                <div class="col-lg-2 box-wrapper col-md-2 col-xs-2 col-sm-2" id="r26">
                    <div class="box-container" onclick="checkIt(this)">

                    </div>
                </div>
                <div class="col-lg-2 box-wrapper col-md-2 col-xs-2 col-sm-2" id="r31">
                    <div class="box-container" onclick="checkIt(this)">

                    </div>
                </div>
                <div class="col-lg-2 box-wrapper col-md-2 col-xs-2 col-sm-2" id="r32">
                    <div class="box-container" onclick="checkIt(this)">

                    </div>
                </div>
                <div class="col-lg-2 box-wrapper col-md-2 col-xs-2 col-sm-2" id="r33">
                    <div class="box-container" onclick="checkIt(this)">

                    </div>
                </div>
                <div class="col-lg-2 box-wrapper col-md-2 col-xs-2 col-sm-2" id="r34">
                    <div class="box-container" onclick="checkIt(this)">

                    </div>
                </div>
                <div class="col-lg-2 box-wrapper col-md-2 col-xs-2 col-sm-2" id="r35">
                    <div class="box-container" onclick="checkIt(this)">

                    </div>
                </div>
                <div class="col-lg-2 box-wrapper col-md-2 col-xs-2 col-sm-2" id="r36">
                    <div class="box-container" onclick="checkIt(this)">

                    </div>
                </div>
                <div class="col-lg-2 box-wrapper col-md-2 col-xs-2 col-sm-2" id="r41">
                    <div class="box-container" onclick="checkIt(this)">

                    </div>
                </div>
                <div class="col-lg-2 box-wrapper col-md-2 col-xs-2 col-sm-2" id="r42">
                    <div class="box-container" onclick="checkIt(this)">

                    </div>
                </div>
                <div class="col-lg-2 box-wrapper col-md-2 col-xs-2 col-sm-2" id="r43">
                    <div class="box-container" onclick="checkIt(this)">

                    </div>
                </div>
                <div class="col-lg-2 box-wrapper col-md-2 col-xs-2 col-sm-2" id="r44">
                    <div class="box-container" onclick="checkIt(this)">

                    </div>
                </div>
                <div class="col-lg-2 box-wrapper col-md-2 col-xs-2 col-sm-2" id="r45">
                    <div class="box-container" onclick="checkIt(this)">

                    </div>
                </div>
                <div class="col-lg-2 box-wrapper col-md-2 col-xs-2 col-sm-2" id="r46">
                    <div class="box-container" onclick="checkIt(this)">

                    </div>
                </div>
                <div class="col-lg-2 box-wrapper col-md-2 col-xs-2 col-sm-2" id="r51">
                    <div class="box-container" onclick="checkIt(this)">

                    </div>
                </div>
                <div class="col-lg-2 box-wrapper col-md-2 col-xs-2 col-sm-2" id="r52">
                    <div class="box-container" onclick="checkIt(this)">

                    </div>
                </div>
                <div class="col-lg-2 box-wrapper col-md-2 col-xs-2 col-sm-2" id="r53">
                    <div class="box-container" onclick="checkIt(this)">

                    </div>
                </div>
                <div class="col-lg-2 box-wrapper col-md-2 col-xs-2 col-sm-2" id="r54">
                    <div class="box-container" onclick="checkIt(this)">

                    </div>
                </div>
                <div class="col-lg-2 box-wrapper col-md-2 col-xs-2 col-sm-2" id="r55">
                    <div class="box-container" onclick="checkIt(this)">

                    </div>
                </div>
                <div class="col-lg-2 box-wrapper col-md-2 col-xs-2 col-sm-2" id="r56">
                    <div class="box-container" onclick="checkIt(this)">

                    </div>
                </div>
            </div>
        </div>
    <div class="lost-container">
            <div class="lost-info">
                <span></span>
                <button onclick="playAgain()" id="restart" class="btn-default btn-sm">Ok</button>
            </div>
    </div>
    <div class="button-container">
        <div class="btn btn-default" onclick="callFunctionStartRestart();">RESET</div>
    </div>
        <script type="text/javascript" src="js/lib/jquery.min.js"></script>
        <script type="text/javascript" src="js/lib/ion.sound.min.js" ></script>
    <script type="text/javascript" src="js/lib/alertify.min.js" ></script>
        <script type="text/javascript" src="js/smashhim.js"></script>
    </body>
</html>