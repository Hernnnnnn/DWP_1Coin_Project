<?php include("config.php"); ?>

<html>
    <head>
        <style>
            body
            {
                background-image: url("https://i.pinimg.com/564x/52/9d/2b/529d2ba9360a0707359ca15b9cb184be.jpg");
                background-size: 100%;
                background-repeat:no-repeat;
            }
            fieldset
            {
                background-color: #f2f2f2;
            }
            .middle
            {
                max-width: 900px;
                margin: auto; 
            }
        </style>

    </head>
<body>
<div class="middle">
    <h1>Please Give Us Your Valuable Comments!</h1>
    <h2>We want to say thank you and please come again!</h2>
    <fieldset>
    <form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>
        <label for="contact">Contact:</label>
        <input type="text" id="contact" name="contact"><br><br>
        <label for="email">Email:</label>
        <input type="text" id="email" name="email"><br><br>
        <label for="comment">Comment:</label><br>
        <textarea id="comment" name="comment" rows="5" cols="60"></textarea><br><br>
        <input type="submit" name="submit" value="Submit">
    </form> 
    <?php $email = $_GET['email'];?>
    </fieldset>
    <i class="fa fa-sign-out"></i>
                <span><a href="view_comment.php?email=<?php echo $email?>" >Back To Comment Page</a></span>
        </div>
</body>
</html>

<?php
if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];

    if (!$name) {
        echo "Please Key in name !";

    } else if (!$contact && is_nan($contact)) {
        echo "Please Key in correct contact !";

    } else if (!$email) {
        echo "Please Key in email !";

    } else if (!$comment) {
        echo "Please Key in your comment !";

    } else {
        $sql = "INSERT INTO comment (name, contact, email, comment)VALUES ('$name', '$contact', '$email', '$comment')";

        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
    }
}
?>