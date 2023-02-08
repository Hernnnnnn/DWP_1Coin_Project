<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>VIEW COMMENT</title>
</head>
<body>
    <table class="table table-striped table-bordered table-hover" border="1px">
						<thead>
							<th> ID</th>
							<th> Customer Name</th>
							<th> Customer Contact </th>
							<th> Customer Email</th>
							<th> Comment</th>
						</thead>
                        <tbody>
                            <?php

                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "dwp_1coin_project";

                            // Create connection
                            $conn = mysqli_connect($servername, $username, $password, $dbname);
                            // Check connection
                            if (!$conn) {
                                die("Connection failed: " . mysqli_connect_error());
                            }

                            $sql = "SELECT * FROM comment";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                                // output data of each row
                                while($row = mysqli_fetch_assoc($result)) 
                                {
                                    $comm_id = $row['id'];
									$cust_name = $row['name'];
									$cust_cont = $row['contact'];
									$cust_email = $row['email'];
									$comment = $row['comment'];
                                    
                                    //echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Contact: " . $row["contact"]. " - Email: " . $row["email"]. " - Comment: " . $row["comment"]. "<br>";
                                
                            ?>
                            <tr>
                                <th><?php echo $comm_id; ?></th>
                                <th><?php echo $cust_name; ?></th>
                                <th><?php echo $cust_cont; ?></th>
                                <th><?php echo $cust_email; ?></th>
                                <td><?php echo $comment; ?></td>
                            </tr>
                        

                        </tbody>
                        <?php
                        }
                    } else {
                        echo "0 results";
                    }

                    mysqli_close($conn);
                    ?>
    </table>
</body>
</html>