<?php include("config1.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
    <style>
        .middle
        {
            max-width: 900px;
            margin: auto; 
        }
        * 
        {
            text-align: center;
            background-color: white;
        }
        .col
        {
            padding: 0 16px;
        }
        .fa 
        {
            padding: 10px;
            font-size: 10px;
            width: 10px;
            text-align: center;
            text-decoration: none;
            margin: 5px 2px;
          }
          
        .fa:hover 
        {
            opacity: 0.7;
        }
        
        .fa-facebook 
        {
          background: #3B5998;
          color: white;
        }
        
        .fa-twitter 
        {
          background: #55ACEE;
          color: white;
        }
        a:hover
        {
           color: red;
        }
        img
        {
            width: 200px;
            height: 50px;
        }
    </style>
</head>
<body>
    <div class="middle">
        <h2>About Us</h2>
    <div class="col">
        <table border="1px" width="100%">
            <tr>
                <td><i class="fa fa-tasks"></i>Summary<br></td>
                <td><i class="fa fa-newspaper-o"></i>Latest News<br></td>
                <td><i class="fa fa-user-plus"></i>Join Our team<br></td>
            </tr>
            <tr>
                <td>
                    Our 1 coin company already have 10 years history.
                    <br>Our team to try open restaurant at all around the world
                </td>
                <td>The latest discount price of set 1 is RM15 only. 
                    <br>The first 100 person buy set 1 can get a voucher that value RM30.
                    <br><a href="#" target="_blank">click here</a>
                </td>
                <td>Careers :
                    <br>1.local  job
                    <br>2.regional job
                    <br>3.headquarters job
                    <br>if u interest to join us please <a href="#" target="_blank">click here</a>
                </td>
            </tr>
            <tr >
                <td colspan="2">
                    <p>Welcome you to our restaurant to have a stroll. <br>We provided the location as show below </p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15947.024897301018!2d102.26913911891378!3d2.2449064738200417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d1ef8caa508dc9%3A0xeb1a289df65c0c12!2s75450+Bukit+Beruang%2C+Melaka!5e0!3m2!1sen!2smy!4v1447419960281" 
                    width="400" height="225" frameborder="1"></iframe>
                </td>
                <td>
                    <P> Information abbout us
                        <div class="people">
                            CEO             : Reai
                            <br>Supervisor  : Mutu
                            <br>Designer    : Logoner
                            <br>Director    : Bairu
                        </div>
                    </P>
                    <a href="#" target="_blank">Privacy Statement</a>
                    <br><a href="#" target="_blank">Terms of Use</a>
                    <br><a href="#" target="_blank">contact us</a>
                    <br><a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                </td>
            </tr>
        </table>
        <a href="http://localhost/DWP_1Coin_Project/Hern/01%20Homepage/Homepage.php">Back to Home page
    </div>
    
    </div>
    
    

    


</body>
</html>