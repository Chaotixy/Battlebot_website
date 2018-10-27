<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="CSS/style.css">
        <title>Battlebots</title>
    </head>
    <body>
         <?php
            session_start();
        if (!isset($_SESSION['userName']) || empty($_SESSION['userName']))
        {
            header("location: login.php");
            exit;
        }
        ?>
        
        <div id ="wrapper">
            <div id="header">
                <div id="headMiddle">
                    <div id="headtext"><h1>Battle-Bots</h1></div>
                    <div id="headlogo"><img src=img/controller.png alt="controller" height="70px" width="70px"></div>
                    <div id="logOut"><p><a href="logout.php">Logout</a></p></div>
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
            
            <div id="contentBigBoxUpdates">
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
                                
                                <div id="table">
                                    <table id="scoreboard">
                                        <tr>
                                            <th>Battlebot</th>
                                            <th>Game 1</th>
                                            <th>Game 2</th>
                                            <th>Game 3</th>
                                       </tr>
                                       
                                       <tr>
                                        <td>Group 1</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <td>Group 2</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <td>Group 3</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <td>Group 4</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                      </tr>
                                        
                                    </table>
                                    
                                </div>
                               
                            </div>
                    </div>
                </div>