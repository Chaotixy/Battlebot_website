
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="CSS/style.css">
        <title>Battlebots</title>
    </head>
    <body>



        <div id ="wrapper">
            <div id="header">
                <div id="headMiddle">
                    <div id="headtext"><h1>Battle-Bots</h1></div>
                    <div id="headlogo"><img src=img/controller.png alt="controller" height="70px" width="70px"></div>
                </div>

                <div id="symbolWrapper">
                    <div id="symbols">
                        <div class="circle1">
                            <a href="#stream_link">
                                <img src="img/stream.png" width="100" height="100" alt="live">
                            </a>
                        </div>
                        <div class="circle2">
                            <a href="#games_link" >
                                <img src="img/duel.png" width="80" height="80" alt="duel">
                            </a>
                        </div>
                        <div class="circle3">
                            <a href="#bots_link">

                                <img src="img/bots.png" width="90" height="90" alt="bot">
                            </a>
                        </div>
                        <div class="symbolText"> <p>Live</p> </div>
                        <div class="symbolText" style="margin-left: 34px"> <p>Games</p> </div>
                        <div class="symbolText"> <p>Bots</p> </div>
                    </div>
                </div>

            </div>

            <div id="contentBigBox">
                <div class="contentBoxes">
                    <div class="headerBox">
                        <a id="stream_link"><h1>Livestream</h1></a>
                    </div>
                    <div id="LiveInfo">
                        <div id="video">
                            <iframe src="http://foscam.serverict.nl/videostream.cgi"></iframe>
                        </div>
                        <div id="introTextBox">
                            <h1>Scoreboard</h1>                           
                            <form action="index.php" method="POST">
                                <div id="table"> 
                                    <table id="scoreboard">
                                        <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
                                        <script type="text/javascript">
                                            $(document).ready(function () {
                                                setInterval(function () {
                                                    $('#scoreboard').load('table.php');
                                                }, 1000);
                                            });
                                        </script>
                         


                                    </table>
                                    <br>

                                </div>

                        </div>
                    </div>
                </div>

                <div class="contentBoxesEverything">
                    <div class="headerBox">
                        <a id="games_link"><h1>The Games</h1></a>
                    </div>
                    <div class="everythingInfo">
                        <div class="picturesEverythingInfo">
                            <img src="" alt="Follow the line" width="350" height="200">
                        </div>
                        <div class="textEverythingInfo">
                            <h3>Follow the line</h3>
                            <p>blfhishgs</p></div>
                    </div>
                    <div class="everythingInfo">
                        <div class="picturesEverythingInfo">
                            <img src="" alt="Soccer" width="350" height="200">
                        </div>
                        <div class="textEverythingInfo">
                            <h3>Soccer</h3>
                            <p>greg</p></div>
                    </div>
                    <div class="everythingInfo">
                        <div class="picturesEverythingInfo">
                            <img src="" alt="Maze" width="350" height="200">
                        </div>
                        <div class="textEverythingInfo">
                            <h3>Maze</h3>
                            <p>greage</p></div>
                    </div>

                </div>

            </div>

    </body>
</html>