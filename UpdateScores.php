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
        
        include_once "connect.php";

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
                                    <?php
                                    if (isset($_POST['submit'])) {
                                        $quantity1 = $_POST['quantity1'];
                                        $quantity2 = $_POST['quantity2'];
                                        $quantity3 = $_POST['quantity3'];
                                        $quantity4 = $_POST['quantity4'];
                                        $quantity5 = $_POST['quantity5'];
                                        $quantity6 = $_POST['quantity6'];
                                        $quantity7 = $_POST['quantity7'];
                                        $quantity8 = $_POST['quantity8'];
                                        $quantity9 = $_POST['quantity9'];
                                        $quantity10 = $_POST['quantity10'];
                                        $quantity11 = $_POST['quantity11'];
                                        $quantity12 = $_POST['quantity12'];

                                        $query = "UPDATE `board` SET `ID`=1,`quantity1`=?,`quantity2`=?,`quantity3`=?,`quantity4`=?,`quantity5`=?,`quantity6`=?,`quantity7`=?,`quantity8`=?,`quantity9`=?,`quantity10`=?,`quantity11`=?,`quantity12`=? WHERE 1";


                                        if ($stmt = mysqli_prepare($conn, $query)) {
                                            mysqli_stmt_bind_param($stmt, 'iiiiiiiiiiii', $quantity1, $quantity2, $quantity3, $quantity4, $quantity5, $quantity6, $quantity7, $quantity8, $quantity9, $quantity10, $quantity11, $quantity12);
                                            $queryResult = mysqli_stmt_execute($stmt);
                                            if ($queryResult === FALSE) {
                                                echo "<p>Unable to execute the query.</p>" . "Error code" . mysqli_erno($conn);
                                            } else {
                                                echo "";
                                            }

                                            mysqli_stmt_close($stmt);
                                        }
                                    }
                                    ?>
                                    <form action="UpdateScores.php" method="POST">
                                        <div id="table">
                                            <table id="scoreboard">
                                                <tr>

                                                    <th>Battlebot</th>
                                                    <th>Game 1</th>
                                                    <th>Game 2</th>
                                                    <th>Game 3</th>
                                                </tr>
                                                <?php
                                                $sql = "SELECT quantity1, quantity2, quantity3, quantity4, quantity5, quantity6, "
                                                        . "quantity7, quantity8, quantity9, quantity10, quantity11, quantity12 from board ";
                                                $result = $conn->query($sql);

                                                if ($result->num_rows > 0){
                                                    
                                                while ($row = $result->fetch_assoc()){
                                                
                                                    
                                                    ?>

                                                <tr>
                                                    <td>Group 1</td>
                                                    <td><input type="number" name="quantity1" min="0" max="10"  class="scores" value="<?php echo $row["quantity1"]?>"></td>
                                                    <td><input type="number" name="quantity2" min="0" max="10" class="scores" value="<?php echo $row["quantity2"]?>"></td>
                                                    <td><input type="number" name="quantity3" min="0" max="10" class="scores" value="<?php echo $row["quantity3"]?>"></td>
                                                </tr>
                                                <tr>
                                                    <td>Group 2</td>
                                                    <td><input type="number" name="quantity4" min="0" max="10" class="scores" value="<?php echo $row["quantity4"]?>"></td>
                                                    <td><input type="number" name="quantity5" min="0" max="10" class="scores" value="<?php echo $row["quantity5"]?>"></td>
                                                    <td><input type="number" name="quantity6" min="0" max="10" class="scores" value="<?php echo $row["quantity6"]?>"></td>
                                                </tr>
                                                <tr>
                                                    <td>Group 3</td>
                                                    <td><input type="number" name="quantity7" min="0" max="10" class="scores" value="<?php echo $row["quantity7"]?>"></td>
                                                    <td><input type="number" name="quantity8" min="0" max="10" class="scores" value="<?php echo $row["quantity8"]?>"></td>
                                                    <td><input type="number" name="quantity9" min="0" max="10" class="scores" value="<?php echo $row["quantity9"]?>"></td>
                                                </tr>
                                                <tr>
                                                    <td>Group 4</td>
                                                    <td><input type="number" name="quantity10" min="0" max="10" class="scores" value="<?php echo $row["quantity10"]?>"></td>
                                                    <td><input type="number" name="quantity11" min="0" max="10" class="scores" value="<?php echo $row["quantity11"]?>"></td>
                                                    <td><input type="number" name="quantity12" min="0" max="10" class="scores" value="<?php echo $row["quantity12"]?>"></td>
                                                </tr>

                                            </table>
                                            <?php
                                                }
                                                }
                                            ?>
                                            <br>
                                            <input type="submit" value= "Update" name="submit" id="updatebutton">
                                            </form>
                                        </div>

                                        </div>
                                        </div>
                                        </div>
                                        </body>
                                        </html>
