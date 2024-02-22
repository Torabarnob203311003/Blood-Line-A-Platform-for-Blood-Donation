<?php

$connect = mysqli_connect("localhost", "root", "", "registrationForm");
$msg = $name = $mobile = $age = $district = $address = $bloodType = $lastBloodGivenDate = $pass = $c_pass = "";

if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $age = $_POST['age'];
    $district = $_POST['district'];
    $address = $_POST['address'];
    $bloodType = $_POST['bloodType'];
    $lastBloodGivenDate = $_POST['lastBloodGivenDate'];
    $pass = $_POST['pass'];

    $c_pass = $_POST['c_pass'];

    $mobile_check = "SELECT * FROM registrationTable WHERE mobile = '$mobile'";
    $mobile_query = mysqli_query($connect, $mobile_check);
    $num_row = mysqli_num_rows($mobile_query);
    if ($num_row > 0) {
        $msg = "Mobile Number Already Exist";
    } else {
        if ($pass == $c_pass) {
            $specialChars = preg_match('@[^\w]@', $pass);

            if (!$specialChars || strlen($pass) == 8 || strlen($pass) < 8) {
                $msg = "Password must be long than 8 characters & use a special character";
            } else {
                $insert = "INSERT INTO registrationTable(name,mobile,age,district,address,bloodType,lastBloodGivenDate,pass,c_pass) VALUES('$name','$mobile','$age','$district','$address','$bloodType','$lastBloodGivenDate','$pass','$c_pass')";
                $query = mysqli_query($connect, $insert);

                if ($query) {
                    $msg = "Register Success";
                } else {
                    $msg = "Register Fail";
                }
            }
        } else {
            $msg = "Password & confirm password doesn't match";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
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

        .navbar .registration {
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

        .reg-head {
            text-align: center;
            color: white;
            background-color: red;
            margin-bottom: 20px;
            padding: 10px auto;
        }


        .reg-msg {
            color: red;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin: 70px auto;
            text-align: center;
        }

        form h2 {
            text-align: center;
            margin-bottom: 10px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            text-align: left;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .reg-btn {
            color: red;
            font-size: 15px;
            background-color: white;
            padding: 10px 30px;
            border-radius: 10px;
            border: 2px solid red;
            cursor: pointer;
        }

        .reg-btn:hover {
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
            <a href="login.php">লগইন</a>

        </div>
    </div>



    <div class="cover">
        <br> <br>

        <form method="POST">
            <h4 class="reg-msg"><?php echo $msg ?></h4>
            <br>

            <h2 class="reg-head">রেজিস্ট্রেশন</h2>

            <label for="name">নাম:</label>
            <input type="text" id="name" name="name" value="<?php echo $name ?>" required>

            <label for="mobile">মোবাইল নাম্বার:</label>
            <input type="tel" id="mobile" name="mobile" pattern="[0-9]{11}" value="<?php echo $mobile ?>" required>

            <label for="age">বয়স:</label>
            <input type="number" id="age" name="age" value="<?php echo $age ?>" required>

            <label for="district">জেলা:</label>
            <input type="text" id="district" name="district" value="<?php echo $district ?>" required>

            <label for="address">ঠিকানা:</label>
            <input type="text" id="address" name="address" value="<?php echo $address ?>" required>

            <label for="bloodType">রক্তের গ্রুপ:</label>
            <select id="bloodType" name="bloodType" value="<?php echo $bloodType ?>">
                <option value="">রক্তের গ্রুপ সিলেক্ট করুন</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="Bombay">Bombay</option>
                <option value="Others">Others</option>
            </select>

            <label for="lastBloodGivenDate">সর্বশেষ রক্ত দানের তারিখ:</label>
            <input type="date" id="lastBloodGivenDate" name="lastBloodGivenDate" value="<?php echo $lastBloodGivenDate ?>" required>

            <label for="pass">পাসওয়ার্ড:</label>
            <input type="password" id="pass" name="pass" value="<?php echo $pass ?>" required>

            <label for="c_pass">পাসওয়ার্ড কনফার্ম করুন:</label>
            <input type="password" id="c_pass" name="c_pass" value="<?php echo $c_pass ?>" required>

            <p>ইতিমধ্যে একাউন্ট খোলা থাকলে<a href="login.php"> লগইন করুন</a></p>
            <br>

            <button id="register" name="register" class="reg-btn">Register</button>
        </form>
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


            scrollTopButton.addEventListener('click', function() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>

</html>