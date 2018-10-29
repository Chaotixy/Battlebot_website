<?php
                                        $conn = mysqli_connect("localhost", "root", "", "battlebot");
                                        if ($conn->connect_error) {
                                            die("Connection failed:" . $conn->connect_error);
                                        }

                                        $sql = "SELECT quantity1, quantity2, quantity3, quantity4, quantity5, quantity6, "
                                                . "quantity7, quantity8, quantity9, quantity10, quantity11, quantity12 from board ";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<tr><th>" . "Battlebot" . "</th><th>" . "Game1" . "</th><th>" . "Game2" . "</th><th>" . "Game3" . "</th></tr>";
                                                echo "<tr><td>" . "Group 1" . "</td><td>" . $row["quantity1"] . "</td><td>" . $row["quantity2"] . "</td><td>" . $row["quantity3"] . "</td></tr>";
                                                echo "<tr><td>" . "Group 2" . "</td><td>" . $row["quantity4"] . "</td><td>" . $row["quantity5"] . "</td><td>" . $row["quantity6"] . "</td></tr>";
                                                echo "<tr><td>" . "Group 3" . "</td><td>" . $row["quantity7"] . "</td><td>" . $row["quantity8"] . "</td><td>" . $row["quantity9"] . "</td></tr>";
                                                echo "<tr><td>" . "Group 4" . "</td><td>" . $row["quantity10"] . "</td><td>" . $row["quantity11"] . "</td><td>" . $row["quantity12"] . "</td></tr>";
                                            }
                                        }
                                        $conn->close();
                                        
                                        ?>