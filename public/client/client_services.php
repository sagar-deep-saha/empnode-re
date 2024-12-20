<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/bc0.png" type="image/x-icon">
    <title>EMPNODE</title>
    <style>
        * {
            box-sizing: inherit;
            margin: 0;
            padding: 0;
            background-image: url(images/bg.png);
            user-select: none;
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
        html::-webkit-scrollbar {
            display: none;
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
        .center {
            width: 100%;
            display: flex;
            margin-bottom: 100px;
        }
        .box {
            display: flexbox;
            width: 28%;
            margin-top: 100px;
            border: 1.5px solid white;
            margin-left: 4%;
            border-radius: 10px;
            -webkit-transition: 0.3s;
            transition: 0.3s;
            font-family: Arial;
        }
        .head {
            list-style-type: none;
            margin: 0;
            padding: 0;
            -webkit-transition: 0.3s;
            transition: 0.2s;
        }
        .box:hover {
            box-shadow: 0 12px 12px 0 rgba(0, 0, 0, 0.2);
            border: 1.5px solid #04628a6a;
        }
        .header {
            background-color: gainsboro;
            color: #04628a;
            font-size: 25px;
            font-weight: bolder;
            border-radius: 10px 10px 0px 0px;
        }
        .li,
        .header,
        .down {
            border-bottom: 1px solid #eef;
            padding: 20px;
            text-align: center;
        }
        .down {
            background-color: gainsboro;
            font-size: 20px;
            border: none;
            border-radius: 0px 0px 10px 10px;
        }
        .button {
            background-color: #04628a;
            border: none;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-align: center;
            text-decoration: none;
            font-size: 18px;
            cursor: pointer;
            transition: all 0.5s ease;
        }
        .button:hover {
            background-color: #58727d;
            color: white;
        }
        .head2 {
            height: 300px;
            padding: 50px 150px;
        }
        .new {
            text-align: justify;
            font-size: 20px;
            float: left;
            color: #58727d;
            font-family: 'Segoe UI';
            width: 450px;
        }
        .txt {
            font-size: 50px;
            color: gray;
            float: left;
        }
        .img {
            height: 300px;
            width: 300px;
            float: right;
            margin-left: 50px;
            margin-top: -10%;
        }
        .toop {
            text-align: center;
            font-size: 40px;
            color: #5ba8c9;
            margin: 30px 0;
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
            <li><a href="client_services.html" id="active_page">Services</a></li>
            <li><a href="client_faq.html">FAQ's</a></li>
            <li><a href="client_about.html">About Us</a></li>
        </ul>
        <form class="search" action="client_services.html?#" method="get">
            <input type="text" placeholder="Type to Search" class="my" id="search_box" />
            <button type="submit" class="ui" onclick="search();"> <img src="images/ser.png" class="log2"></button>
        </form>
        <div class="d7">
            <a href="http://wa.me/+918257803481" target="_blank">
                <button class="btn45">CHAT</button>
            </a>
        </div>
    </nav>
    <h1 class="toop">OUR SERVICES</h1>
    <div class="head2">
        <h2 class="txt">EMP<span style="color: #04628a;">NODE</span></h2><br><br><br><br>
        <h2 class="new" id="search_able">
            We are EMPNODE. We serve one of the best Office Management System that is completly developed by us with full
            security and a personalised stable structure. Here are our pre defined services. If any more features needed ,
            we provide customisation too.</h2>
        <img src="images/img.png" alt="" class="img">
    </div>
    <div class="center">
        <div class="box" id="new">
            <ul class="head">
                <li class="header">Basic</li>
                <li class="li">$1500/ year</li>
                <li class="li">1TB Cloud Storage</li>
                <li class="li">100 Emails</li>
                <li class="li">100 Employees</li>
                <li class="li">24x7 Support</li>
                <li class="down"><a href="client_form.html" class="button">Sign Up</a></li>
            </ul>
        </div>
        <div class="box">
            <ul class="head">
                <li class="header">Pro</li>
                <li class="li">$3000/ year</li>
                <li class="li">3TB Cloud Storage</li>
                <li class="li">50 Emails</li>
                <li class="li">250 Employees</li>
                <li class="li">Included Web Security</li>
                <li class="down"><a href="client_form.html" class="button">Sign Up</a>
                </li>
            </ul>
        </div>
        <div class="box">
            <ul class="head">
                <li class="header">Premium</li>
                <li class="li">$6000/year</li>
                <li class="li">6TB Cloud Storage</li>
                <li class="li">100 Emails</li>
                <li class="li">500 Employees</li>
                <li class="li">Extra Security with Advanced Features</li>
                <li class="down">
                    <a href="client_form.html" class="button">Sign Up</a>
                </li>
            </ul>
        </div>
    </div>
    <?php
    require "client_footer.php";
    ?>
    <script type="text/javascript">
        var tab_lists = document.querySelectorAll(".tabs_list ul li");
        var tab_items = document.querySelectorAll(".tab_item");
        tab_lists.forEach(function(list) {
            list.addEventListener("click", function() {
                var tab_data = list.getAttribute("data-tc");
                tab_lists.forEach(function(list) {
                    list.classList.remove("active");
                });
                list.classList.add("active");
                tab_items.forEach(function(item) {
                    var tab_class = item.getAttribute("class").split(" ");
                    if (tab_class.includes(tab_data)) {
                        item.style.display = "block";
                    } else {
                        item.style.display = "none";
                    }
                })
            })
        })
        const p = document.getElementById("search_able");
        function search() {
            let input = document.getElementById("search_box").value;
            if (input !== "") {
                let regExp = new RegExp(input, "gi");
                p.innerHTML = (p.textContent).replace(regExp, "<mark>$&</mark>");
            }
        }
    </script>
</body>
</html>