<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" href="img/bc0.png" type="image/x-icon">
    <title>EMPNODE</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap');
        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }
        html {
            font-size: 62.5%;
            box-sizing: border-box;
        }
        body {
            font-family: sans-serif;
            font-size: 1.6rem;
            font-weight: 400;
            color: black;
        }
        nav {
            background: white;
            height: 60px;
            width: 100%;
            margin-bottom: 9px;
            display: flex;
            align-items: center;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.105), 0 6px 20px 0 rgba(0, 0, 0, 0);
        }
        nav ul li {
            display: inline-block;
            list-style: none;
            margin: 40px -2px;
        }
        nav ul li a {
            padding: 20px;
            font-family: Verdana;
            text-decoration: none;
            color: black;
            transition: all 0.2s ease;
        }
        a:hover {
            color: black;
            background-color: #cde5f0;
        }
        .log {
            height: 40px;
            width: 150px;
            margin-left: 3%;
            margin-right: 150px;
        }
        .btn45 {
            height: 37px;
            width: 120px;
            background-color: #04628a;
            color: white;
            font-size: 15px;
            border: none;
            border-radius: 5px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.105), 0 6px 20px 0 rgba(0, 0, 0, 0);
            margin-left: 30px;
            transition: all 0.5s ease;
            cursor: pointer;
        }
        .btn45:hover {
            color: white;
            background-color: #97c7da;
        }
        .ui {
            margin-left: -45px;
            border: 0;
            width: 50px;
            height: 30px;
            cursor: pointer;
            background: transparent;
            transition: all 0.6s ease;
        }
        .my {
            background: transparent;
            flex: 1;
            border: 0;
            outline: none;
            padding: 18px 20px;
            font-size: 15px;
            color: #04628a;
            font-family: 'Gill Sans';
        }
        .log2 {
            height: 20px;
            width: 20px
        }
        ::placeholder {
            color: gray;
        }
        .search {
            margin-top: 5px;
            width: 200px;
            height: 35px;
            background: transparent;
            border: 1.5px solid #04628a;
            display: flex;
            align-items: center;
            border-radius: 10px;
            padding: 10px 20px;
            transition: all 0.6s ease;
        }
        .search:hover {
            border: 2px solid #97c7da;
        }
        .footer .top {
            background-color: #97c7da26;
            padding: 10rem 9%;
            display: grid;
            grid-template-columns: 1fr 2fr;
        }
        .footer .top .links {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 3rem;
        }
        .footer .bottom {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1.5rem 0;
            background-color: #97c7da9d;
        }
        .footer .top .content p {
            color: grey;
            margin-top: 2rem;
            width: 90%;
        }
        .yellow {
            color: #04628a;
        }
        .footer .top .link h4 {
            font-size: 1.7rem;
            margin-bottom: 1.5rem;
        }
        .footer .top .link a {
            display: inline-block;
            color: grey;
            margin-bottom: 1rem;
        }
        .footer .top .link span {
            color: grey;
        }
        .logo {
            font-size: 3.6rem;
            font-weight: 700;
        }
        a {
            text-decoration: none;
            color: inherit;
        }
        .footer .top .link a {
            display: block;
        }
        .footer .top .link div {
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
        }
        .footer .top .link div img {
            margin-right: 1rem;
        }
        @media (max-width: 996px) {
            .footer .top {
                padding: 5rem 9%;
                grid-template-columns: 1fr;
            }
            .footer .top .content {
                display: none;
            }
        }
        @media (max-width: 768px) {
            .footer .top .links {
                grid-template-columns: 1fr;
                gap: 3rem 0;
            }
            .footer .top .link {
                display: flex;
                flex-direction: column;
            }
            .footer .bottom {
                padding: 1.5rem;
            }
        }
        .section {
            width: 100%;
        }
        .section .container {
            width: 80%;
            display: block;
            margin: 0px auto;
            padding: 50px 0px;
        }
        .container .title {
            width: 100%;
            text-align: center;
            margin-bottom: 50px;
        }
        .container .title h1 {
            text-transform: uppercase;
            font-size: 35px;
            color: #04628a;
        }
        .container .title h1::after {
            content: "";
            height: 5px;
            width: 100px;
            background-color: #04628a;
            border-radius: 25px;
            display: block;
            margin: auto;
        }
        .content2 {
            float: left;
            width: 55%;
        }
        .image-section {
            float: right;
            width: 40%;
        }
        .image-section img {
            width: 100%;
            height: auto;
            border-radius: 7px;
        }
        .content2 .article h3 {
            color: grey;
            font-size: 17px;
            text-align: justify;
        }
        .content2 .article p {
            margin-top: 20px;
            font-size: 16px;
            line-height: 1.5;
            color: #333
        }
        .content2 .article .button {
            margin-top: 50px;
        }
        .content2 .article .button a {
            text-decoration: none;
            padding: 8px 25px;
            background-color: #04628a;
            border-radius: 40px;
            color: #fff;
            font-size: 18px;
            letter-spacing: 1.5px;
        }
        .content2.article .button a:hover {
            color: #fff;
            background-color: grey;
            transition: 1s ease;
        }
        .container .social {
            width: 100%;
            clear: both;
            margin-top: 50px;
            text-align: center;
            display: inline-block;
        }
        .container .social i {
            color: #fff;
            font-size: 22px;
            height: 45px;
            width: 45px;
            border-radius: 50%;
            line-height: 45px;
            text-align: center;
            background-color: grey;
            margin: 0px 5px;
        }
        .container .social i:hover {
            color: #fff;
            background-color: #04628a;
            transition: 1s ease;
            transition: rotate(360deg);
        }
        @media screen and (max-width: 992px) {
            .image-section img {
                width: 400px;
                height: 230px;
                margin-top: 7%;
                margin-left: -121%;
                border-radius: 7px;
            }
            .content2 .article .button {
                margin-top: 13%;
                margin-left: 21%;
            }
            .content2 .article h3 {
                color: grey;
                font-size: 17px;
                margin-top: 90%;
                margin-left: 21%;
                width: 80%;
            }
        }
        @media screen and (max-width: 727px) {
            .image-section img {
                width: 350px;
                height: 200px;
                margin-top: 7%;
                margin-left: -121%;
                border-radius: 7px;
            }
            .content2 .article h3 {
                color: grey;
                font-size: 17px;
                margin-top: 120%;
                margin-left: 21%;
                width: 80%;
            }
        }
        html::-webkit-scrollbar {
            display: none;
        }
        .contact {
            padding-top: 200px;
            ;
            position: relative;
            min-height: 100vh;
            padding: 50px 100px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .contact .content {
            max-width: 800px;
            text-align: center;
        }
        .contact .content h2 {
            padding-top: 100px;
            font-size: 36px;
            text-transform: uppercase;
            font-weight: bolder;
            color: #04628a;
        }
        .contact .content .qwe {
            font-weight: 300;
            color: #0b6975;
        }
        .containerlo {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 30px;
        }
        .containerlo .contactinfo {
            width: 50%;
            display: flex;
            flex-direction: column;
        }
        .containerlo .contactinfo .box {
            position: relative;
            padding: 20px 0;
            display: flex;
        }
        .containerlo .contactinfo .box .icon {
            min-width: 60px;
            height: 60px;
            background: #0b6975;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            font-size: 22px;
        }
        .containerlo .contactinfo .box .text {
            display: flex;
            margin-left: 20px;
            font-size: 16px;
            color: black;
            flex-direction: column;
            font-weight: 300;
        }
        .containerlo .contactinfo .box .text h3 {
            font-weight: 500;
            color: #00bcd4;
        }
        .contactform {
            width: 40%;
            padding: 40px;
            background: #fff;
        }
        .contactform h2 {
            font-size: 30px;
            color: #333;
            font-weight: 500;
        }
        .contactform .inputbox {
            position: relative;
            width: 100%;
            margin-top: 10px;
        }
        .contactform .inputbox input,
        .contactform .inputbox textarea {
            width: 100%;
            padding: 5px 0;
            font-size: 16px;
            margin: 10px 0;
            border: none;
            border-bottom: 2px solid #333;
            outline: none;
            resize: none;
        }
        .contactform .inputbox span {
            position: absolute;
            left: 0;
            padding: 5px 0;
            font-size: 16px;
            margin: 10px 0;
            pointer-events: none;
            transition: 1.0s;
            color: #666;
        }
        .contactform .inputbox input:focus~span,
        .contactform .inputbox input:valid~span,
        .contactform .inputbox textarea:focus~span,
        .contactform .inputbox textarea:valid~span {
            color: #e91e63;
            font-size: 12px;
            transform: translateY(-20px);
        }
        .contactform .inputbox input[type="submit"] {
            width: 100px;
            background: #00bcd4;
            color: #fff;
            border: none;
            cursor: pointer;
            padding: 10px;
            font-size: 18px;
            transition: 1.0s ease;
        }
        .inputbox input[type="submit"]:hover {
            color: White;
            background: orange;
        }
        @media (max-width:991px) {
            .contact {
                padding: 50px;
            }
            .containerlo {
                flex-direction: column;
            }
            .containerlo .contactinfo {
                margin-bottom: 40px;
            }
            .containerlo .contactinfo {
                width: 100%;
            }
        }
        .d7 a:hover {
            background-color: white;
        }
    </style>
</head>
<body>
    <nav>
        <img src="images/w (1).png" class="log">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="client_products.html">Products</a></li>
            <li><a href="client_services.html">Services</a></li>
            <li><a href="client_faq.html">FAQ's</a></li>
            <li><a href="client_about.html" id="active_page">About Us</a></li>
        </ul>
        <form class="search" action="client_about.html?#" method="get">
            <input type="text" placeholder="Type to Search" class="my" id="search_box" />
            <button type="submit" class="ui" onclick="search(); search2()"> <img src="images/ser.png" class="log2"></button>
        </form>
        <div class="d7">
            <a href="http://wa.me/+918257803481" target="_blank">
                <button class="btn45">CHAT</button>
            </a>
        </div>
    </nav>
    <div class="section">
        <div class="container">
            <div class="title">
                <h1>about us</h1>
            </div>
            <div class="content2">
                <div class="article">
                    <h3 id="search_able">We are taking the name EMPNODE for us as an organisation of developers
                        who have developed this Office Management System. We have even named
                        his software as EMPNODE for easy understanding. We have to name this
                        such that for the main control system that monitors all other systems as of
                        Admin and employee. In this project if any where the name EMPNODE Is
                        used then it can easily be identified that the name has been used for
                        representing the central controlling system if this Office Management
                        System as well as the officials and developers of this system.
                    </h3>
                    <br>
                    <br>
                    <br>
                    <h3 id="search_able_2">
                        EMPNODE is an organization of Developers who have been developed the Office
                        Management System. EMPNODE is the main control system that control/monitor all other
                        systems such as Admin module as well as the Employee module.
                    </h3>
                    <div class="button">
                        <a href="">read more</a>
                    </div>
                </div>
            </div>
            <div class="image-section">
                <img src="img/bc0.png">
            </div>
            <div class="social">
                <a href=""><i class='fab fa-facebook'></i></a>
                <a href=""><i class='fab fa-instagram'></i></a>
                <a href=""><i class='fab fa-twitter'></i></a>
            </div>
        </div>
    </div>
    <br>
    <hr>
    <hr>
    <section class="contact">
        <div class="content">
            <h2>Contact Us</h2>
            <P class="poi">EMPNODE</P>
        </div>
        <div class="containerlo">
            <div class="contactinfo">
                <div class="box">
                    <div class="icon">
                        <i class="fa fa-map-marker"></i>
                    </div>
                    <div class="text">
                        <h3>Address</h3>
                        <p class="qwe">Narsingarh(Singarbil),Agartala,<br>Tripura West,<br>pin : 799009</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p class="qwe"> +91 8731830493 </p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <div class="text">
                        <h3>Email</h3>
                        <p class="qwe"> empnode@contactinfo.gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="contactform">
                <form>
                    <h2>Send Message</h2>
                    <div class="inputbox">
                        <input type="text">
                        <span>Full Name</span>
                    </div>
                    <div class="inputbox">
                        <input type="text">
                        <span>Email</span>
                    </div>
                    <div class="inputbox">
                        <input type="text">
                        <span>Type your Message</span>
                    </div>
                    <div class="inputbox">
                        <input type="submit" value="submit" />
                </form>
            </div>
        </div>
    </section>
    <?php
    require "client_footer.php";
    ?>
    <script>
        const p = document.getElementById("search_able");
        function search() {
            let input = document.getElementById("search_box").value;
            if (input !== "") {
                let regExp = new RegExp(input, "gi");
                p.innerHTML = (p.textContent).replace(regExp, "<mark>$&</mark>");
            }
        }
        const q = document.getElementById("search_able_2");
        function search2() {
            let input = document.getElementById("search_box").value;
            if (input !== "") {
                let regExp = new RegExp(input, "gi");
                q.innerHTML = (q.textContent).replace(regExp, "<mark>$&</mark>");
            }
        }
    </script>
</body>
</html>