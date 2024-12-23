<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/bc0.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        *,
        *::after,
        *::before {
            box-sizing: inherit;
            margin: 0;
            padding: 0;
            background-image: url(images/bg.png);
        }
        /* * {
            user-select: none;
        } */
        html {
            font-size: 62.5%;
            box-sizing: border-box;
        }
        a:hover {
            color: black;
            background-color: #cde5f0;
        }
        body {
            font-family: sans-serif;
            font-size: 1.6rem;
            font-weight: 400;
            color: black;
        }
        a {
            text-decoration: none;
            color: inherit;
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
        .footer .top .link a {
            display: block;
        }
        .footer .top .link div {
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
        }
        html::-webkit-scrollbar {
            display: none;
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
        html::-webkit-scrollbar {
            display: none;
        }
        .services .bottom {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
            gap: 3rem;
        }
        .services .bottom .box {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            padding: 3rem 2rem;
            border-radius: 0.5rem;
        }
        .services .bottom .box:hover {
            background-color: white;
            box-shadow: 0 0.5rem 1.5rem rgba(0, 0, 0, 0.1);
        }
        .services .bottom .box img {
            height: 6rem;
        }
        .services .bottom .box h4 {
            font-size: 2.4rem;
            margin: 1.5rem 0;
        }
        .services .bottom .box p {
            color: grey;
            margin-bottom: 1.5rem;
        }
        .services .bottom .box a {
            display: inline-block;
            font-weight: 500;
        }
        .services .bottom .box a img {
            height: 1rem;
        }
        #active_page {
            text-decoration: dotted;
            color: #04628a;
        }
    </style>
    <title>EMPNODE</title>
</head>
<body>
    <footer class="footer">
        <div class="top">
            <div class="content">
                <a href="" class="logo">EMP<span class="yellow">NODE</span></a>
                <p>
                    India's Largest Employeers Tool for managing small to Large scale Companies within a Secure Environment
                </p>
            </div>
            <div class="links">
                <div class="link">
                    <h4>Contact Information</h4>
                    <div>
                        <img src="svg/loc.png" alt="" />
                        <span>Bengaluru, Karnataka</span>
                    </div>
                    <div>
                        <img src="svg/send-check.svg" alt="" />
                        <span>empnodexyz@outlook.in</span>
                    </div>
                </div>
                <div class="link">
                    <h4>Quick Links</h4>
                    <a href="#">Services</a>
                    <a href="#">About Us</a>
                    <a href="#">Contact Us</a>
                </div>
                <div class="link">
                    <h4>Legal</h4>
                    <a href="#">Privacy Policy</a>
                    <a href="#">Term of Use</a>
                    <a href="#">Conditions</a>
                </div>
                <div class="link">
                    <h4>Connect with Us</h4>
                    <div>
                        <img src="svg/twitter.svg" alt="" />
                        <span>Twitter</span>
                    </div>
                    <div>
                        <img src="svg/github.svg" alt="" />
                        <span>Github</span>
                    </div>
                    <div>
                        <img src="svg/meta.svg" alt="" />
                        <span>Facebook</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom">
            <p>Copyright © 2023-2025 Empnode All rights reserved.</p>
        </div>
    </footer>
</body>
</html>