<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="CSS/style.css">
        <link rel="stylesheet" type="text/css" href="CSS/main.css">
        <script src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
                </div>
                <a href="logout.php"><div id="logOut" ><p>Log out</p></div></a>
            </div>

               

            

            <div id="contentBigBoxUpdatesA">
                <div class="contentBoxes">
                    <div class="headerBox">
                        <a id="stream_link"><h1>Livestream</h1></a>
                    </div>
                    <div id="LiveInfo">
                        <div id="video">
                            <iframe id="dome" src="http://foscam.serverict.nl/videostream.cgi"></iframe>
                            <iframe id="dome-control" frameborder="0" hidden></iframe>
                        </div>
                        <div id="introTextBox">
                            <h1>Scoreboard</h1>

                            <div id="table">
                                <table id="scoreboard">
                                    <?php
                                    if (isset($_POST['submit']))
                                    {
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


                                        if ($stmt = mysqli_prepare($conn, $query))
                                        {
                                            mysqli_stmt_bind_param($stmt, 'iiiiiiiiiiii', $quantity1, $quantity2, $quantity3, $quantity4, $quantity5, $quantity6, $quantity7, $quantity8, $quantity9, $quantity10, $quantity11, $quantity12);
                                            $queryResult = mysqli_stmt_execute($stmt);
                                            if ($queryResult === FALSE)
                                            {
                                                echo "<p>Unable to execute the query.</p>" . "Error code" . mysqli_erno($conn);
                                            } else
                                            {
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

                                                if ($result->num_rows > 0)
                                                {

                                                    while ($row = $result->fetch_assoc())
                                                    {
                                                        ?>

                                                        <tr>
                                                            <td>Group 1</td>
                                                            <td><input type="number" name="quantity1" min="0" max="10"  class="scores" value="<?php echo $row["quantity1"] ?>"></td>
                                                            <td><input type="number" name="quantity2" min="0" max="10" class="scores" value="<?php echo $row["quantity2"] ?>"></td>
                                                            <td><input type="number" name="quantity3" min="0" max="10" class="scores" value="<?php echo $row["quantity3"] ?>"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Group 2</td>
                                                            <td><input type="number" name="quantity4" min="0" max="10" class="scores" value="<?php echo $row["quantity4"] ?>"></td>
                                                            <td><input type="number" name="quantity5" min="0" max="10" class="scores" value="<?php echo $row["quantity5"] ?>"></td>
                                                            <td><input type="number" name="quantity6" min="0" max="10" class="scores" value="<?php echo $row["quantity6"] ?>"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Group 3</td>
                                                            <td><input type="number" name="quantity7" min="0" max="10" class="scores" value="<?php echo $row["quantity7"] ?>"></td>
                                                            <td><input type="number" name="quantity8" min="0" max="10" class="scores" value="<?php echo $row["quantity8"] ?>"></td>
                                                            <td><input type="number" name="quantity9" min="0" max="10" class="scores" value="<?php echo $row["quantity9"] ?>"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Group 4</td>
                                                            <td><input type="number" name="quantity10" min="0" max="10" class="scores" value="<?php echo $row["quantity10"] ?>"></td>
                                                            <td><input type="number" name="quantity11" min="0" max="10" class="scores" value="<?php echo $row["quantity11"] ?>"></td>
                                                            <td><input type="number" name="quantity12" min="0" max="10" class="scores" value="<?php echo $row["quantity12"] ?>"></td>
                                                        </tr>

                                                    </table>
                                                    <?php
                                                }
                                            }
                                            ?>
                                            <br>
                                            <input type="submit" value= "Update" name="submit" id="updatebutton">
                                            </form>
                                            <div class="wasd domewasd">
                                                <i class="fas fa-caret-up keycontrol up" data-command="0"></i>
                                                <i class="fas fa-caret-right keycontrol right" data-command="4"></i>
                                                <i class="fas fa-caret-down keycontrol down" data-command="2"></i>
                                                <i class="fas fa-caret-left keycontrol left" data-command="6"></i>
                                                <div class="middle keycontrol" data-command="1">STOP</div>
                                            </div>
                                            <script>
                                                function control_camera(command) {
                                                    //left = 6, right = 4, up = 0, down = 2 , stop = 1
                                                    $("#dome-control").attr('src', 'http://foscam.serverict.nl/decoder_control.cgi?command=' + command);
                                                }
                                                $(document).ready(function () {
                                                    $(".keycontrol").on('click', function () {
                                                        var command = $(this).data('command');
                                                        control_camera(command);
                                                    });
                                                });
                                            </script>
                                        </div>
                                        </div>

                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                        </body>
                                        </html>
