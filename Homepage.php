<?php
session_start();

if(!isset($_SESSION['login_user2'])){
header("location: Login.php"); 
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Homepage | 1 Coin Sandwich</title>
</head>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="css/home.css">

<body>
    <!--Header-->
    <?php include "header.php" ?>

    <!--Sidebar-->
    <?php include "config.php" ?>
    <?php include "usersidebar.php" ?>
    
    <div class="container" style="width:50%;">
    <div class="col-md-4">
            <?php
            $sql = "SELECT * FROM foodmenu WHERE options = 'ENABLE' ORDER BY Food_ID";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);
            ?>

            <form method="post" action="order.php?action=add&id=<?php echo $row["Food_ID"]; ?>">
            <div class="mypanel" align="center";>
            <img src="<?php echo $row["images_path"]; ?>" class="img-responsive">
            <h4 class="text-dark"><?php echo $row["Food_Name"]; ?></h4>
            <h5 class="text-info"><?php echo $row["Food_Cat"]; ?></h5>
            <h5 class="text-danger">RM <?php echo $row["Food_Price"]; ?>/-</h5>
            <h5 class="text-info">Quantity: <input type="number" min="1" max="25" name="quantity" class="form-control" value="0" style="width: 60px;"> </h5>
            <input type="hidden" name="hidden_name" value="<?php echo $row["Food_Name"]; ?>">
            <input type="hidden" name="hidden_price" value="<?php echo $row["Food_Price"]; ?>">
            <input type="hidden" name="hidden_RID" value="<?php echo $row["Ref_ID"]; ?>">
            <input type="submit" name="add" style="margin-top:5px;" class="btn btn-success" value="Add to Cart">
        </form>
    </div>
</body>
</html>