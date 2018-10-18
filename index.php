
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="CSS/style.css">
        <title>Battlebots</title>
    </head>
    <body>
         <?php
        // put your code here
        ?>
        
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
                    <h1>Livestream</h1>
                    </div>
                    <div id="LiveInfo">
                            <div id="video">
                                <iframe src="http://foscam.serverict.nl/videostream.cgi"></iframe>
                            </div>
                            <div id="introTextBox">
                               
                            </div>
                    </div>
                </div>
            
        </div>
       
    </body>
</html>
