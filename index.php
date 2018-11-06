
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
                <a href="login.php"><div id="logOut" ><p>Log in</p></div></a>
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
                            <img src="img/b10.jpeg" alt="Follow the line" width="350" height="200">
                        </div>
                        <div class="textEverythingInfo">
                            <h3>Follow the line</h3>
                            <p>Follow the line is a game where by the robots have been programmed to strictly follow black tapes via bluetooth and motion sensors and detectors. So in this challenge two robots are going to compete in the follow the line challenge to see who will be victor!! </p></div>
                    </div>
                    <div class="everythingInfo">
                        <div class="picturesEverythingInfo">
                            <img src="img/b13.jpeg" alt="Soccer" width="350" height="200">
                        </div>
                        <div class="textEverythingInfo">
                            <h3>Soccer</h3>
                            <p>The passionate game of soccer has now been made available for robots to play but sadly this game will be more like a drill!.
                                The robots will be drilled on a soccer motion (movement). So simply movement from one point to another with a ball.</p></div>
                    </div>
                    <div class="everythingInfo">
                        <div class="picturesEverythingInfo">
                            <img src="img/b9.jpeg" alt="Maze" width="350" height="200">
                        </div>
                        <div class="textEverythingInfo">
                            <h3>Maze</h3>
                            <p>A maze is a path or collection of paths, typically from an entrance to a goal. The word is used to refer both to branching tour puzzles through which the solver must find a route, and to simpler non-branching ("unicursal") patterns that lead unambiguously through a convoluted layout to a goal. (The term "labyrinth" is generally synonymous with "maze", but can also connote specifically a unicursal pattern). The pathways and walls in a maze are typically fixed, but puzzles in which the walls and paths can change during the game are also categorised as mazes or tour puzzles. Just as explained above, the robots will have to compete to complete the challenge. </p></div>
                    </div>

                </div>
                
                <div class="contentBoxesBots">
                    <div class="headerBox">
                        <a id="bots_link"><h1>The Bots</h1></a>
                    </div>
                    <div id="contentBots">
                        <div id="accordion">
                            <ul>
                                <li>
                                    <input type="checkbox" checked>
                                    <i></i>
                                    <h2>Fobos</h2>
                                    <p><img src="img/b6.jpeg" alt="Bot1" width="350" height="200" style="margin-left: 15px;"> <p>jfikosd;lajfiokaws jfiesoka;jfiowsajf ojfiesoajf iawsw jfisojf iosfjo</p></p>
                                </li>
                                <li>
                                    <input type="checkbox" checked>
                                    <i></i>
                                    <h2>Demos</h2>
                                    <p><img src="img/b14.jpeg" alt="Bot2" width="350" height="200" style="margin-left: 15px;"> <p>jfikosd;lajfiokaws jfiesoka;jfiowsajf ojfiesoajf iawsw jfisojf iosfjo</p></p>
                                </li>
                                <li>
                                    <input type="checkbox" checked>
                                    <i></i>
                                    <h2>BattleBot 3</h2>
                                    <p></p>
                                </li>
                                <li>
                                    <input type="checkbox" checked>
                                    <i></i>
                                    <h2>BattleBot 4</h2>
                                    <p>fjikesol:JGFIojfiosekJFIO</p>
                                    
                                </li>
                            </ul>


                        </div>
                    </div>

                </div>

            </div>
            
           
    </body>
</html>