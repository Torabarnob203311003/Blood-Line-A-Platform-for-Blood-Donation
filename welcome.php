<?php
session_start();
if ($_SESSION['mobile'] == true) {
} else {
    header("location:login.php");
}
?>



















<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Blood Line</title>
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

        .navbar .home {
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
            background-image: url(Media/footer.jpg);
            background-size: cover;
            height: 650px;
            background-position: center;
            background-repeat: no-repeat;
        }

        .find-donor {
            text-align: center;
            color: white;
            background-color: red;
            margin-bottom: 20px;
            padding: 10px auto;
        }

        .donor-form {
            display: flex;
            align-items: center;
            justify-content: center;
            padding-top: 100px;
        }


        form {
            background-color: #fff;
            padding: 20px 100px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }


        label {
            display: block;
            margin-bottom: 8px;
        }

        select {
            width: 100%;
            padding: 15px 25px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .donor-button {
            background-color: #FF9B9B;
            color: black;
            font-size: 15px;
            padding: 10px 25px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .donor-button:hover {
            background-color: red;
            color: white;
        }





















        .registration {
            background-color: #FFF2F2;
            text-align: center;
            padding: 60px 70px;
            margin: 60px 200px;
        }


        .registration-button {
            color: red;
            font-size: 15px;
            background-color: white;
            padding: 10px 30px;
            border-radius: 10px;
            border: 2px solid red;
            cursor: pointer;
            text-decoration: none;
        }


        .registration-button:hover {
            color: white;
            font-size: 15px;
            background-color: red;
            padding: 10px 30px;
            border-radius: 10px;
            border: 2px solid red;
        }











        .comment {
            background-image: url(Media/comment.png);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            display: flex;
        }



        .comment-heading {
            width: 20%;
            justify-content: center;
            align-items: center;
            display: flex;
            margin: 0 50px;
        }

        .comment-name {
            color: red;
        }

        .comment-card {
            width: 80%;
            display: flex;
            justify-content: space-around;
        }

        .card {
            width: 25%;
            margin: 30px 0px;
            border: 0.1px solid red;
            border-radius: 15px;
            padding: 20px 10px;
            text-align: justify;
        }

        .card img {
            width: 50px;
            height: 50px;
            border-radius: 50px;
        }








        .imapact-main {
            text-align: center;
            padding: 80px 0px;
        }

        .imapact-main h1 {
            padding-bottom: 20px;
        }

        .impact {
            display: flex;
            justify-content: center;
            justify-content: space-between;
            padding: 0px 20%;
        }


        .impact-section {
            text-align: center;
            padding: 25px 0;
        }

        .impact-icon {
            font-size: 50px;
            margin-bottom: 15px;
        }

        .impact-number {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .impact-description {
            font-size: 18px;
            color: #666;
        }














        .footer {
            background-image: url(Media/footer.jpg);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
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
            color: black;
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
            <a href="index.php" class="home">হোম</a>
            <a href="about.php">আমাদের সম্পর্কে</a>
            <a href="blog.php">ব্লগ</a>
            <a href="find-donor.php">ডোনার খুঁজুন</a>
            <!-- <a href="login.php">লগইন</a> -->
            <!-- <a href="registration.php">রেজিস্ট্রেশন</a> -->
            <a href="profile.php">প্রোফাইল</a>
            <a href="logout.php">লগ আউট</a>
        </div>
    </div>



    <div class="cover">



        <div class="donor-form">

            <form>
                <div class="find-donor">
                    <h2>ব্লাড ডোনার খুঁজুন</h2>
                </div>
                <label for="bloodType">রক্তের গ্রুপ: *</label>
                <select id="bloodType" name="bloodType">
                    <option value="">রক্তের গ্রুপ সিলেক্ট করুন</option>
                    <option value="Ap">A+</option>
                    <option value="An">A-</option>
                    <option value="Bp">B+</option>
                    <option value="Bn">B-</option>
                    <option value="Op">O+</option>
                    <option value="On">O-</option>
                    <option value="ABp">AB+</option>
                    <option value="ABn">AB-</option>
                    <option value="Bombay">Bombay</option>
                    <option value="Others">Others</option>
                </select>

                <label for="district">জেলা:</label>
                <select id="district" name="district" class="js-example-basic-single" style="width: 100%;">
                    <option value="">জেলা সিলেক্ট করুন</option>
                    <option value="Bagerhat">Bagerhat</option>
                    <option value="Bandarban">Bandarban</option>
                    <option value="Barguna">Barguna</option>
                    <option value="Barisal">Barisal</option>
                    <option value="Bhola">Bhola</option>
                    <option value="Bogra">Bogra</option>
                    <option value="Brahmanbaria">Brahmanbaria</option>
                    <option value="Chandpur">Chandpur</option>
                    <option value="Chittagong">Chittagong</option>
                    <option value="Chuadanga">Chuadanga</option>
                    <option value="Comilla">Comilla</option>
                    <option value="Cox''s Bazar">Cox''s Bazar</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Dinajpur">Dinajpur</option>
                    <option value="Faridpur">Faridpur</option>
                    <option value="Feni">Feni</option>
                    <option value="Gaibandha">Gaibandha</option>
                    <option value="Gazipur">Gazipur</option>
                    <option value="Gopalganj">Gopalganj</option>
                    <option value="Habiganj">Habiganj</option>
                    <option value="Jamalpur">Jamalpur</option>
                    <option value="Jessore">Jessore</option>
                    <option value="Jhalokati">Jhalokati</option>
                    <option value="Jhenaidah">Jhenaidah</option>
                    <option value="Joypurhat">Joypurhat</option>
                    <option value="Khagrachari">Khagrachari</option>
                    <option value="Khulna">Khulna</option>
                    <option value="Kishoreganj">Kishoreganj</option>
                    <option value="Kurigram">Kurigram</option>
                    <option value="Kushtia">Kushtia</option>
                    <option value="Lakshmipur">Lakshmipur</option>
                    <option value="Lalmonirhat">Lalmonirhat</option>
                    <option value="Madaripur">Madaripur</option>
                    <option value="Magura">Magura</option>
                    <option value="Manikganj">Manikganj</option>
                    <option value="Maulvibazar">Maulvibazar</option>
                    <option value="Meherpur">Meherpur</option>
                    <option value="Munshiganj">Munshiganj</option>
                    <option value="Mymensingh">Mymensingh</option>
                    <option value="Naogaon">Naogaon</option>
                    <option value="Narail">Narail</option>
                    <option value="Narayanganj">Narayanganj</option>
                    <option value="Narsingdi">Narsingdi</option>
                    <option value="Natore">Natore</option>
                    <option value="Nawabganj">Nawabganj</option>
                    <option value="Netrokona">Netrokona</option>
                    <option value="Nilphamari">Nilphamari</option>
                    <option value="Noakhali">Noakhali</option>
                    <option value="Pabna">Pabna</option>
                    <option value="Panchagarh">Panchagarh</option>
                    <option value="Patuakhali">Patuakhali</option>
                    <option value="Pirojpur">Pirojpur</option>
                    <option value="Rajbari">Rajbari</option>
                    <option value="Rajshahi">Rajshahi</option>
                    <option value="Rangamati">Rangamati</option>
                    <option value="Rangpur">Satkhira</option>
                    <option value="Shariatpur">Shariatpur</option>
                    <option value="Sherpur">Sherpur</option>
                    <option value="Sirajgonj">Sirajgonj</option>
                    <option value="Sunamganj">Sunamganj</option>
                    <option value="Sylhet">Sylhet</option>
                    <option value="Tangail">Tangail</option>
                    <option value="Thakurgaon">Thakurgaon</option>

                </select>

                <button type="button" class="donor-button"><i class="fa-solid fa-magnifying-glass"></i> খুঁজুন</button>
            </form>

        </div>
    </div>














    <div class=registration>
        <h1>ডোনার হতে চান?</h1> <br>
        <p>যারা রক্তদেন তাঁদেরকে এক প্লাটফর্মে নিয়ে এসে রক্ত দেওয়া-পাওয়ার কাজটা সহজ করাই Blood Line এর উদ্দেশ্য। <br>আপনিও একজন রক্তদাতা হলে website এ রেজিস্ট্রেশন করুন।</p>
        <br>
        <button><a class=registration-button href="registration.php">রেজিস্ট্রেশন করুন</a></button>
        <br>
    </div>







    <div class="comment">

        <div class="comment-heading">
            <h1><span class="comment-name">Blood Line</span> নিয়ে মতামত:</h1>
        </div>

        <div class="comment-card">
            <div class="card">
                <img src="Media/Person1.jpg" alt="">
                <p><b>আকাশ আহমেদ</b></p>
                <p><small>রাজশাহী</small></p> <br>
                <P>খুব সুন্দর একটি সাইট। সহজে রক্ত পাওয়ার জন্যে Blood Line একটি সেরা ওয়েবসাইট।<br> <br> শুভকামনা রইলো Blood Line এর প্রতি।</P>
            </div>

            <div class="card">
                <img src="Media/Person2.jpg" alt="">
                <p><b>ইফতেয়ার আহমেদ</b></p>
                <p><small>খুলনা</small></p> <br>
                <P>খুব সুন্দর সাজানো গোছানো এবং ডিজিটাল প্লাটফর্ম। খুব সহজেই সাইট থেকে ডোনার পাওয়া সম্ভব৷ এছাড়াও গ্রপ থেকে অসংখ্য মানুষ নিয়মিত সেবা পাচ্ছে। <br> <br> Blood Line এর শুভাকাউক্ষী হতে পেরে গর্বিত।</P>
            </div>

            <div class="card">
                <img src="Media/Person3.jpg" alt="">
                <p><b>রুবায়েত ইয়াসির</b></p>
                <p><small>ঢাকা</small></p> <br>
                <P>বর্তমান প্রেক্ষাপটে Blood Line রক্তের বিপদে পাশে থাকার আস্থার জায়গার নাম।
                    Blood Line একটা ভালোবাসার নাম হয়ে উঠুক। <br> <br>Blood Line ছড়িয়ে যাক সমাজের প্রতিটি স্তরে। <br> <br>শুভকামনা রইলো Blood Line এর প্রতি।</P>
            </div>
        </div>

    </div>
















    <div class=" imapact-main">
        <h1>- Our Impact -</h1>
        <div class="impact">
            <div class="impact-section">
                <div class="impact-icon"><i class="fa-solid fa-user-large" style="color: #183153;"></i></div>
                <div class="impact-number">৬৭৮+</div>
                <div class="impact-description">ব্লাড ডোনার</div>
            </div>

            <div class="impact-section">
                <div class="impact-icon"><i class="fa-solid fa-location-dot" style="color: #183153;"></i></div>
                <div class="impact-number">৬৪</div>
                <div class="impact-description">জেলায় বিস্তৃত</div>
            </div>

            <div class="impact-section">
                <div class="impact-icon"><i class="fa-solid fa-hand-holding-medical" style="color: #183153;"></i></div>
                <div class="impact-number">১৫০০+</div>
                <div class="impact-description">মানুষের জীবন বেঁচেছে</div>
            </div>
        </div>
    </div>
















    < <div class="footer">

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
            <p><small>Design & Developed By</small> <b>Shahriyar Saikoth</b></p>
        </div>












        <button id="scrollTopBtn"><i class="fa-solid fa-circle-up" style="color: #000000;"></i></button>



        <script src="https://kit.fontawesome.com/2a2039f45a.js" crossorigin="anonymous"></script>




        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0/dist/js/select2.min.js"></script>
        <script>
            $(document).ready(function() {
                $('.js-example-basic-single').select2();
            });
        </script>










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