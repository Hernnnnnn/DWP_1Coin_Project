<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Manage Order Page</title>
    <style>
        .nav
        {
            height: 100%; 
            width: 200px; 
            position: fixed; 
            z-index: 1; 
            top: 0; 
            left: 0;
            overflow-x: hidden; 
            padding-top: 20px;
            background-color:#f2f2f2;
        }
        .nav a 
        {
            padding: 6px 8px 6px 16px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
          }
          .nav a:hover 
          {
            color: red;
          }
          .side
          {
            padding: 6px 8px 6px 16px;
            font-size: 25px;
            color: #818181;
            display: block;
          }
          .main 
          {
            margin-left: 200px; 
            padding: 0px 10px;
            font-size: 28px;
          }
          .user
          {
            display: block;
            width: 50%;
            margin-left: 50px;
          }
          table
          {
            width: 100%;
          }
          button:active
          {
            background-color: lightgray;
          }
          .box
          {
            width: 365px;
            float: left;
            border: 5px solid ;
            background-color: lightblue;
            padding: 50px;
            margin: 20px;
          }
          .insidebox
          {
            float: right;
          }
          * 
          {
            box-sizing: border-box;
          }
          contaner::after
          {
            content: "";
            clear: both;
            display: table;
          }
          .order
          {
            float: left;
            border: 3px solid ;
            padding: 10px;
            margin: 10px;
          }
          .insideorder
          {
            float: right;
          }
          img
          {
            height: 100px;
          }
          .center
          {
            text-align: center;
          }
    </style>
</head>
<body>
    
    <div class="nav">
        <br><br><br><br><br><br>
        <p style="color: #818181;text-align:center;font-size: 25px;">Welcome,<br> Admin <?php echo $username; ?></p> 
        <hr>
        <P class="side">Dashboard</P>
        <a href="#"><i class="fa fa-group"></i> Category</a>
        <a href="#"><i class="fa fa-universal-access"></i> Product</a>
        <a href="#"><i class="fa fa-shopping-cart"></i> Order</a>
        <a href="http://localhost/DWP%20project/manage.php#"><i class="fa fa-info-circle"></i> Manage user</a>
        <a href="#"><i class="fa fa-wrench"></i> Staff</a>
        <a href="#"><i class="fa fa-book"></i> View report</a>
    </div>
    <div class="main">
        <p><i class="fa fa-tasks"></i> My Dashboard</p>
        <div class="contaner">
            <div class="box">
                <i class="fa fa-clipboard"></i> Total Orders
                <span class="insidebox"> 150</span>
            </div>
            <div class="box">
                <i class="fa fa-share-alt"></i> Shares
                <span class="insidebox"> 15</span>
            </div>
            <div class="box">
                <i class="fa fa-user"></i> Customers
                <span class="insidebox"> 88</span>
            </div>
            <div class="box">
                <i class="fa fa-thumbs-up"></i> Good Reviews
                <span class="insidebox"> 75</span>
            </div>
        </div>
        <p>Recent Order</p>
        <table border="1px">
            <?php
            $sql = "select * from orderorder;";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($result)
            ?>
            <tr class="center">
                <td>Order Name :</td>
                <td>Order Category :</td>
                <td>Order Price :</td>
            </tr>
            <tr class="center">
              <?php

              ?>
                <td><?php echo $row["Food_Name"];	?></td>
                <td><?php echo $row["Food_Cat"];?></td>
                <td><?php echo $row["Food_Price"];?></td>
            </tr>
        </table>  
        <br>
        <button style="font-size: 25px;"><a href="http://localhost/DWP%20project/manage.php#">More User  <i class="fa fa-mail-forward"></i></button>
        <button style="font-size: 25px;"><a href="http://localhost/DWP%20project/manageorder.php#">More Order  <i class="fa fa-mail-forward"></i></button>
        <button style="font-size: 25px;"><a href="http://localhost/DWP%20project/manageproduct.php#">More Product  <i class="fa fa-mail-forward"></i></button>   
    </div>
</body>
</html>