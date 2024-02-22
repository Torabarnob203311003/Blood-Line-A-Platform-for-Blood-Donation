<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "registrationForm");
$msg = "";
if (isset($_POST['login'])) {
    $mobile = $_POST['mobile'];
    $pass = $_POST['pass'];

    $select = "SELECT * FROM registrationtable WHERE mobile='$mobile' AND pass='$pass' ";


    $ex = mysqli_query($connect, $select);
    $row = mysqli_fetch_array($ex);
    if ($row) {
        $msg = "Login Sucess";
        header("location:welcome.php");
        $_SESSION['mobile'] = $row['mobile'];
    } else {
        $msg = "⚠ Invalid Credential";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="shortcut icon" href="Media/favicon1.png" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anek+Bangla:wght@100;200;300;400;500;600;700;800&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0/dist/css/select2.min.css" rel="stylesheet" />


    <style>
        * {
            font-family: 'Anek Bangla', sans-serif;
            font-family: 'Poppins', sans-serif;
            padding: 0;
            margin: 0;

        }


        .navbar {
            overflow: hidden;
            top: 0px;
            width: 100%;
            border-bottom: 3px solid red;
        }

        .navbar a {
            float: left;
            display: block;
            color: red;
            background-color: #FFF2F2;
            font-size: 15px;
            font-weight: 600;
            text-align: center;
            margin: 70px 15px 15px 0px;
            text-decoration: none;
            border-radius: 10px;
            padding: 7px 20px;
        }

        .navbar a:hover {
            background-color: red;
            color: white;
            border: none;
            border-radius: 10px;
        }

        .navbar .login {
            background-color: red;
            color: white;
            border: none;
            border-radius: 10px;
        }

        .navbar .logo {
            float: left;
            padding: 25px 45px;
            font-size: 45px;
            font-weight: bold;
            color: white;
            cursor: pointer;
        }

        .navbar .blood {
            color: red;
        }

        .line {
            background-color: #F7503C;
            color: white;
            padding: 3px 20px;
            border-radius: 8px;
        }

        .navbar .menu {
            float: right;
        }



        .cover {
            background-color: #FFF2F2;
        }



        .log-head {
            text-align: center;
            color: white;
            background-color: red;
            margin-bottom: 20px;
            padding: 10px auto;
        }

        .log-msg {
            color: red;
        }

        .login-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            text-align: center;
            margin: 70px auto;

        }

        label {
            display: block;
            margin-bottom: 4px;
            text-align: left;
        }

        .login-container input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            box-sizing: border-box;
        }

        .login-container button {
            color: red;
            font-size: 15px;
            background-color: white;
            padding: 10px 30px;
            border-radius: 10px;
            border: 2px solid red;
            cursor: pointer;
        }

        .login-container button:hover {
            color: white;
            font-size: 15px;
            background-color: red;
            padding: 10px 30px;
            border-radius: 10px;
            border: 2px solid red;
        }

        .footer {
            background-color: #CFD4D8;
            display: flex;
            text-align: left;
            padding: 80px 0px;
            width: 100%;
        }


        .footer-bloodline {
            width: 50%;
            padding-left: 100px;
        }

        .footer-links {
            width: 25%;
        }

        .footer-follow {
            width: 25%;
        }

        .footer-bloodline h1 {
            color: red;
            font-size: 40px;
            padding-bottom: 30px;
        }


        .footer h2 {
            margin-bottom: 20px;
        }

        .footer p {
            margin-bottom: 40px;
        }

        .footer-links a {
            color: black;
            text-decoration: none;
        }

        .footer-links a:hover {
            color: red;
            font-weight: bold;
            text-decoration: none;
            position: absolute;
        }

        .footer .icons {
            display: flex;
            align-items: center;
            margin-top: 10px;
            font-size: 35px;
        }

        .footer .icons a {
            text-decoration: none;
            padding: 0 15px;
        }


        .footer-last {
            background-color: #333333;
            color: white;
            display: flex;
            justify-content: space-between;
            padding: 1.5% 10%;
        }



        #scrollTopBtn {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: white;
            font-size: 25px;
            border: none;
            border-radius: 10px;
            padding: 0px 5px;
            cursor: pointer;
        }

        #scrollTopBtn:hover {
            background-color: red;
        }
    </style>
</head>



<body>

    <div class="navbar">

        <div class="logo"><img src="Media/logo.gif" alt="Logo of Site" width=75pxheight=75px><span class=blood> Blood </span><span class="line">Line</span></div>
        <div class="menu">
            <a href="index.php">হোম</a>
            <a href="about.php">আমাদের সম্পর্কে</a>
            <a href="find-donor.php">ডোনার খুঁজুন</a>
            <a href="login.php" class="login">লগইন</a>
        </div>
    </div>


    <div class="cover">
        <br> <br>

        <div class="login-container">
            <h4 class="log-msg"><?php echo $msg ?></h4>
            <br>
            <h2 class="log-head">লগইন</h2>
            <form method="POST">
                <label for="Number">মোবাইল নাম্বার:</label>
                <input type="tel" name="mobile" required>

                <label for="Password">পাসওয়ার্ড:</label>
                <input type="password" name="pass" required>

                <p>একাউন্ট নেই? রেজিস্ট্রেশন করুন <a href="registration.php">এখানে</a></p> <br>
                <button type="submit" id="submit" name="login">Login</button>
            </form>
        </div>
        <br> <br>
    </div>




    <div class="footer">

        <div class="footer-bloodline">
            <h1>Blood <span class="line">Line</span></h1>
            <p>Blood Line হচ্ছে স্বেচ্ছায় রক্তদাতাদের জন্যে একটি সহজ প্ল্যাটফর্ম।<br> যা একটি সম্পূর্ণ অ-লাভজনক প্রতিষ্ঠান।<br> স্বেচ্ছায় রক্তদানের মাধ্যমে অন্যের জীবন বাঁচানোই Blood Line এর উদ্দেশ্য।</p>
            <p><b>Address:</b> Chandrima, Bypass Road, Rajshahi-6204</p>
        </div>

        <div class="footer-links">
            <h2>Important Links</h2>
            <i class="fa-solid fa-circle-arrow-right" style="color: #000000;"></i><a href="http://www.mohfw.gov.bd/"> Ministry of Health
            </a> <br>
            <i class="fa-solid fa-circle-arrow-right" style="color: #000000;"></i><a href="https://dmc.com"> DMC Blood Bank</a> <br>
            <i class="fa-solid fa-circle-arrow-right" style="color: #000000;"></i><a href="https://rmc.com"> RMC Blood Bank</a> <br>
            <i class="fa-solid fa-circle-arrow-right" style="color: #000000;"></i><a href="https://bdrcs.org/donate-blood/"> Red Crescent Blood Bank</a> <br>
            <i class="fa-solid fa-circle-arrow-right" style="color: #000000;"></i><a href="https://www.labone.org.bd/lab-one-blood-bank/"> Lab One Blood bank</a> <br> <br>
            <i class="fa-solid fa-circle-arrow-right" style="color: #000000;"></i><a href="about.php"> About Us</a> <br>
            <i class="fa-solid fa-circle-arrow-right" style="color: #000000;"></i><a href="contact.php"> Contact us</a> <br>
        </div>


        <div class="footer-follow">
            <h2>Follow Us</h2>
            <div class="icons">
                <a href="index.php" title="Our Website"><i class="fa-solid fa-globe" style="color: #064e8e;"></i></a>
                <a href="+8801736-XXXXXX" title="Call Us"><i class="fa-solid fa-phone-volume" style="color: #000000;"></i></a>
                <a href="https://facebook.com" title="Facebook"><i class="fa-brands fa-square-facebook" style="color: #064e8e;"></i></a>
                <a href="https://twitter.com/" title="Twitter"><i class="fa-brands fa-square-x-twitter" style="color: #000000;"></i></a>
            </div>
        </div>

    </div>


    <div class="footer-last">
        <p>&copy; 2020 - 2023 <b style="color:red;">Blood Line</b> || <small>All Rights Reserved.</small>
        </p>
        <p><small>Design & Developed By</small> <b>Abu Torab</b></p>
    </div>



    <button id="scrollTopBtn"><i class="fa-solid fa-circle-up" style="color: #000000;"></i></button>

    <script src="https://kit.fontawesome.com/2a2039f45a.js" crossorigin="anonymous"></script>




    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const scrollTopButton = document.getElementById('scrollTopBtn');

            window.onscroll = function() {
                // Show or hide the button based on scroll position
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    scrollTopButton.style.display = 'block';
                } else {
                    scrollTopButton.style.display = 'none';
                }
            };

            // Smooth scroll to top when the button is clicked
            scrollTopButton.addEventListener('click', function() {
                // Smooth scroll to the top
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        });
    </script>

</body>

</html>