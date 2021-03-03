<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

        <link rel="stylesheet" href="css/icon-font.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" type="image/png" href="img/pinred-min.png">
        
        <title>Notices For ISE Department</title>
    </head>
    <body>
        <div class="navigation">
            <input type="checkbox" class="navigation_checkbox" id="navi"></input>s

            <label for="navi" class="navigation_button">
                <span class="navigation_icon">&nbsp;</span>
            </label>

            <div class="navigation_background">&nbsp;</div>

            <nav class="navigation_nav">
                <ul class="navigation_list">
                    <li class="navigation_item"><a href="index.php" class="navigation_link">home</a></li>
                    
                   
                    
                </ul>
            </nav>

        </div>

        
            <section class="notice-section-book">
                <div class="row">
                    <div class="notice-book">
                        <div class="book_form">

                                    <div class="u-margin-bottom-medium">
                                            <h2 class="heading-secondary">
                                                 All notices
                                            </h2>
                                    </div>
                        </div>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "truck";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 

            $sql = "SELECT * FROM detail";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {

                ?>
                <center>
                <table width="1000" border="1"  cellspacing="1" style="margin-right: 3rem">
                                <tr>
                                            <th width="10%">Truck No</th>
                                            <th width="10%">Truck loadpoint</th>
                                            <th width="20%">Truck unloadpoint</th>
                                            <th width="50%">Eaxh box weight</th>
                                        
                                </tr>
                </table>

                <?php
                // output data of each row
                while($row = $result->fetch_assoc()) {
                
                ?>
                <table width="1000" border="1"  cellspacing="1" style="margin-right: 3rem">
                <tr>


                        <td width="10%"><center><?php echo $row["truckNo"]?></center></td>
                        <td width="10%"><center><?php echo $row["loadPoint"]?></center></td>
                        <td width="20%"><center><?php echo $row["unloadpoint"]?></center></td>
                        <td width="50%"><center><?php echo $row["eachboxweight"]?></center></td>
                       




<!--                                 <td>" . $row["ndate"]. "</td>
                                <td>" . $row["category"]. "</td>
                                <td>" . $row["description"]. "</td>
                                <td>" . $row["eid"]. "</td>
                                </tr>"; -->


                </tr>
                </table>
                <?php
                }

            } else {
                echo "<h3><center>"."0 Results"."</center></h3>";
            }

            $conn->close();
            ?> 

                    </center>

                    </div>
                </div>
            </section>

        </main>


    </body>
</html>

