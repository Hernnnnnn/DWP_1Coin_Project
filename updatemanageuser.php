<?php include("config.php"); ?>

<html>
<head><title>Edit</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script>
    function validationForm()
    {
        var fname=document.addfrm.name.value;
        var femail=document.addfrm.email.value;
        var frole=document.addfrm.role.value;
        var fstatus=document.addfrm.status.value;

        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        var femail="Null";
        var username_flag=false,email_flag=false,pw_flag=false;

        if(fname.trim()=="")
            {
                document.getElementById("error_name").innerHTML ="Name cannot be blank";
            }
            else
            {
                document.getElementById("error_name").innerHTML="&nbsp";
                username_flag=true;
            }

            if (femail.trim()=="")
            {
                document.getElementById("error_email").innerHTML="email cannot be blank & must follow the example of email style";
                
            }
            else if(femail.match(mailformat))
            {
                document.getElementById("error_email").innerHTML="&nbsp";
                email_flag=true;
            }
            else
            {
                document.getElementById("error_email").innerHTML="email cannot be blank & must follow the example of email style";
            }

            if(frole.trim()=="")
            {
                document.getElementById("error_role").innerHTML ="role cannot be blank & must follow the example of role style";
            }
            else if(frole.trim()!=Customer || frole.trim()!=VIP)
            {
                document.getElementById("error_role").innerHTML ="role cannot be blank & must follow the example of role style";
            }
            else
            {
                document.getElementById("error_role").innerHTML="&nbsp";
                role_flag=true;
            }

            if(fstatus.trim()=="")
            {
                document.getElementById("error_status").innerHTML ="status cannot be blank & must follow the example of status style";
            }
            else if(fstatus.trim()!=Active || fstatus.trim()!=Inactive)
            {
                document.getElementById("error_role").innerHTML ="status cannot be blank & must follow the example of status style";
            }
            else
            {
                document.getElementById("error_status").innerHTML="&nbsp";
                status_flag=true;
            }
    }

    </script>
<style>
    .middle
    {
        max-width: 800px;
        margin: auto; 
    }
    *
    {
      font-size: 20px;
    }
    fieldset
    {
        background-color: #f2f2f2;
    }
    a:hover
    {
      color: red;
    }
    sup
    {
      color: red;
    }
</style>
</head>
<body>

    <div class="middle">

    <fieldset>
		<?php
            $name=$_GET['name'];

			$id = $_REQUEST["email"];
			$result = mysqli_query($conn, "select * from user where Email = '$id'");
			$row = mysqli_fetch_assoc($result);
        //     $id = $_GET['name'];
        // $host = "SELECT * FROM `admin` where username = '$id'";
        // $query = mysqli_query($conn,$host);
        // $host_image = mysqli_fetch_assoc($query);             // ?name=<?php echo $host_image['username']

		?>
		
		<h1><b style="font-size: 50px;"><i class="fa fa-pencil" style="font-size:50px"></i>Edit User</b></h1>

		<form name="addfrm" method="post" action="">

			<p><label>Name<sup>*</sup> :</label><input type="text" name="name" size="50" value="<?php echo $row['Name']; ?>">

            <p><label>Email<sup>*</sup> :</label><input type="email" name="email" value="<?php echo $row['Email']; ?>">
		 
			<p><label>Role<sup>*</sup> (Customer / VIP) :</label><input type="text" name="role" size="10" value="<?php echo $row['Role']; ?>">

            <p><label>Status<sup>*</sup> (Active / Inactive) :</label><input type="text" name="status" size="15" value="<?php echo $row['Status']; ?>">

            <p>User Image<sup>*</sup> : (insert the file picture)<br><br><input type="file" id="file"  name="image" class="form-control" multiple></P>
			
			<p><input type="submit" name="savebtn" value="UPDATE">

            <div style="padding-bottom:5px;">
            <i class="fa fa-mail-forward"></i>

            <a href="manageuser.php?name=<?php echo $name?>">Back to manage user list</a>


            </div>


		</form>
    </fieldset>
	</div>
    



</body>
</html>

<?php

if (isset($_POST["savebtn"])) 	
{
	$mname = $_POST["name"];  	
    $memail = $_POST["email"];  
	$mrole = $_POST["role"];  	
	$mstatus = $_POST["status"];  		
    $mimage = $_POST['image'];


        

	if (!$mname)
    {
        echo "Please Key in Name !";
    }
    else if(!$memail)
    {
        echo "Please Key in Email !";
    }
    else if(!$mrole)
    {
        echo "Please Key in Role !";
    }
    else if(!$mstatus)
    {
        echo "Please Key in Status !";
    }
    else if(!$mimage)
    {
        echo "Please put the image ! ";
    }
    else if($mrole=="VIP")
    {

        if($mstatus == "Active")
        {
            mysqli_query($conn,"UPDATE user set Name='" . $_POST['name'] . "', Email='" . $_POST['email'] . "', Role='" . $_POST['role'] . "' ,Status='" . $_POST['status'] . "' where Email = '$id'");
            $sql = "update user set Image='" . $_POST['image'] . "' where Email='$id'";
            mysqli_query($conn,$sql);
            if (mysqli_query($conn, $sql)) {
                echo "Updated successfully !";
              } 
        }
        else if($mstatus == "Inactive")
        {
            mysqli_query($conn,"UPDATE user set Name='" . $_POST['name'] . "', Email='" . $_POST['email'] . "', Role='" . $_POST['role'] . "' ,Status='" . $_POST['status'] . "' where Email = '$id'");
            $sql = "update user set Image='" . $_POST['image'] . "' where Email='$id'";
            mysqli_query($conn,$sql);
            if (mysqli_query($conn, $sql)) {
                echo "Updated successfully !";
              } 
        }
        else
        {
            echo "Please Key the Correct Role and Status follow the two selection !";
        }
    }
    else if($mrole=="Customer")
    {

        if($mstatus == "Active")
        {
            mysqli_query($conn,"UPDATE user set Name='" . $_POST['name'] . "', Email='" . $_POST['email'] . "', Role='" . $_POST['role'] . "' ,Status='" . $_POST['status'] . "' where Email = '$id'");
            $sql = "update user set Image='" . $_POST['image'] . "' where Email='$id'";
            mysqli_query($conn,$sql);
            if (mysqli_query($conn, $sql)) {
                echo "Updated successfully !";
              } 
            
        }
        else if($mstatus == "Inactive")
        {
            mysqli_query($conn,"UPDATE user set Name='" . $_POST['name'] . "', Email='" . $_POST['email'] . "', Role='" . $_POST['role'] . "' ,Status='" . $_POST['status'] . "' where Email = '$id'");            
            $sql = "update user set Image='" . $_POST['image'] . "' where Email='$id'";
            mysqli_query($conn,$sql);
            if (mysqli_query($conn, $sql)) {
                echo "Updated successfully !";
              } 
        }
        else
        {
            echo "Please Key the Correct Role and Status follow the two selection !";
        }
    }
    else
    {
        echo "Please Key the Correct Role and Status follow the two selection !";
    }



	
	
}

?>
