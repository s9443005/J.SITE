
/* 顯示本訂單明細BEGIN */
                            $conn2 = new mysqli($servername, $username, $password, $dbname);
                            // Check connection
                            if ($conn2->connect_error) {
                                die("Connection failed: " . $conn2->connect_error);
                            }

                            $sql2 = "select * from orderdetails where orderNumber = '" . $row['orderNumber'] . "';";

                            $result2 = $conn2->query($sql2);

                            //echo $sql2;
                            if ($result2->num_rows > 0) 
                            {
                                echo "<table class='table table hover'>";
                                while ($row = $result2->fetch_assoc()) 
                                {
                                    echo "<tr><td>".$row['productCode']."</td></tr>";
                                }
                                echo "</table>";"
                            }
                            /* 顯示本訂單明細END */