<!DOCTYPE html>
<html lang="en">
<link rel="shortcut icon" href="img/bc0.png" type="image/x-icon">
<title>EMPNODE</title>
<head>
  <title>EMPNODE</title>
  <style>
    *,
    *::after,
    *::before {
      box-sizing: inherit;
      margin: 0;
      padding: 0;
      background-image: url(images/bg.png);
    }
    html {
      font-size: 62.5%;
      box-sizing: border-box;
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
    .mum {
      font-family: 'Lucida Sans';
      font-size: 18px;
      line-height: 1.78;
      margin: 0 15%;
    }
    .hp-title {
      padding-top: 30px;
      font-size: 35px;
      line-height: 1.25;
      margin: 10px auto 0;
      text-align: center;
      margin-left: 40px;
    }
    .hp-title:after {
      background-color: #ed8b00;
      content: "";
      display: block;
      height: 2px;
      margin: 19px auto 0;
      width: 200px;
    }
    .banner {
      height: 150px;
    }
    .bs {
      margin: 4%;
      height: 106px;
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
    li {
      list-style: none;
    }
    img {
      height: 100%;
    }
    section {
      padding: 2rem 9%;
    }
    .yellow {
      color: #04628a;
    }
    .logo {
      font-size: 3.6rem;
      font-weight: 700;
    }
    .btn {
      display: inline-block;
      color: white;
      background-color: #04628a;
      padding: 1rem;
      border-radius: 0.5rem;
      transition: all 0.2s linear;
    }
    .btn:hover {
      box-shadow: 0 0.5rem 1.5rem rgba(0, 0, 0, 0.1);
    }
    .header .hamburger img {
      width: 3rem;
    }
    .header .hamburger {
      display: none;
    }
    @media (max-width: 996px) {
      .logo {
        font-size: 3rem;
      }
      .navbar a {
        padding: 0.5rem;
      }
      .navbar a:not(:last-child) {
        margin-right: 0.5rem;
      }
    }
    @media (max-width: 768px) {
      .header .navbar {
        position: fixed;
        left: 0;
        right: 0;
        width: 90%;
        padding: 2.5rem;
        margin: 0 auto;
        box-shadow: 0 0.5rem 1.5rem rgba(0, 0, 0, 0.1);
        background-color: white;
        text-align: center;
        border-radius: 1.5rem;
        display: flex;
        flex-direction: column;
        transition: 0.4s;
        top: -100%;
      }
      .header .navbar a:last-child {
        display: none;
      }
      .header .hamburger {
        display: block;
      }
      .navbar.show {
        top: 9rem;
      }
    }
    /* Home */
    .home {
      padding-top: 13rem;
      display: grid;
      grid-template-columns: 1fr 1fr;
      align-items: center;
      gap: 2rem;
    }
    .home .image img {
      width: 100%;
    }
    .home .content h1 {
      font-size: 5.8rem;
      font-weight: 700;
      margin-bottom: 2rem;
    }
    .home .content p {
      color: grey;
      font-size: 1.8rem;
      margin-bottom: 2rem;
    }
    .home .content .home-btn {
      display: inline-block;
      color: white;
      font-weight: 500;
      border-radius: 0.5rem;
      background-color: #04628a;
      padding: 1rem 1.5rem;
      margin-top: 1rem;
      transition: all 0.2s linear;
    }
    .home .content .home-btn:hover {
      transform: translateY(-3px);
      box-shadow: 0 0.5rem 1.5rem rgba(0, 0, 0, 0.1);
    }
    @media (max-width: 999px) {
      .home .content h1 {
        font-size: 4rem;
      }
    }
    @media (max-width: 768px) {
      .home .content h1 {
        font-size: 3rem;
        margin-bottom: 1.5rem;
      }
      .home .content p {
        font-size: inherit;
        margin-bottom: 1.5rem;
      }
      .home {
        grid-template-columns: 1fr;
      }
      .home .image {
        max-width: 40rem;
        margin: 0 auto;
      }
    }
    /* Services */
    section.services {
      background-color: #97c7da44;
      padding: 5rem 9%;
    }
    .services .top {
      text-align: center;
      margin-bottom: 5rem;
    }
    .services .top h2 {
      font-size: 4rem;
      margin-bottom: 1.5rem;
    }
    .services .top p {
      width: 80%;
      margin: 0 auto;
      font-size: 1.8rem;
      color: grey;
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
    @media (max-width: 768px) {
      .services .top {
        margin-bottom: 3rem;
      }
      .services .top p {
        width: 100%;
        font-size: inherit;
      }
      .services .top h2 {
        font-size: 3rem;
        margin-bottom: 1rem;
      }
      .services .bottom .box {
        padding: 1.5rem;
      }
    }
    /* About */
    section.about {
      display: grid;
      grid-template-columns: 1fr 1fr;
      align-items: center;
      gap: 5rem;
    }
    .about .image img {
      width: 100%;
    }
    .about .content h3 {
      font-size: 4rem;
      margin-bottom: 2rem;
    }
    .about .content p {
      color: grey;
      width: 90%;
      margin-bottom: 3rem;
    }
    @media (max-width: 768px) {
      section.about {
        grid-template-columns: 1fr;
        gap: 3rem 0;
      }
      .about .image {
        width: 90%;
      }
      .about.about-2 .image {
        grid-column-start: 1;
        grid-row-start: 1;
      }
      .about .content h3 {
        font-size: 3rem;
        margin-bottom: 1rem;
      }
      .about .content p {
        width: 100%;
        margin-bottom: 2rem;
      }
    }
    /* App */
    section.app {
      margin: 10rem 9%;
      border-radius: 0.5rem;
      background-color: #97c7da44;
      display: grid;
      grid-template-columns: 1fr 1fr;
      align-items: center;
      position: relative;
      padding: 22rem 0;
    }
    section.app .image {
      position: absolute;
      left: 15%;
    }
    section.app .image img {
      width: 100%;
    }
    section.app .content {
      position: absolute;
      right: 5%;
      width: 45%;
    }
    section.app .content h3 {
      font-size: 4rem;
      margin-bottom: 3rem;
    }
    section.app .content p {
      margin-bottom: 3rem;
    }
    section.app .content .links img {
      margin-right: 3rem;
    }
    @media (max-width: 1200px) {
      section.app .image {
        max-width: 20rem;
      }
    }
    @media (max-width: 768px) {
      section.app .image {
        display: none;
      }
      section.app {
        grid-template-columns: 1fr;
        padding: 20rem 0;
        margin: 5rem 9%;
      }
      section.app .content {
        width: 85%;
        left: 50%;
        transform: translateX(-50%);
      }
      section.app .content h3 {
        font-size: 3.5rem;
        margin-bottom: 2rem;
      }
      section.app .content .links img {
        width: 8rem;
        margin-right: 0;
      }
    }
    /* Footer */
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
    .d7 a:hover {
      background-color: white;
    }
  </style>
</head>
<body>
  <nav>
    <img src="images/w (1).png" class="log">
    <ul>
      <li><a href="index.html" id="active_page">Home</a></li>
      <li><a href="client_products.html">Products</a></li>
      <li><a href="client_services.html">Services</a></li>
      <li><a href="client_faq.html">FAQ's</a></li>
      <li><a href="client_about.html">About Us</a></li>
    </ul>
    <form class="search" action="index.html?#" method="get">
      <input type="text" placeholder="Type to Search" class="my" id="search_box" />
      <button type="submit" class="ui" onclick="
      
            search_01();
            search_02();
            search_03();
            search_04();
            search_05();
            search_06();
            search_07();
            search_08();
            search_09();
            search_10();
            search_11();
            search_12();
            search_13();
            search_14();
            search_15();
      "> <img src="images/ser.png" class="log2"></button>
    </form>
    <div class="d7">
      <a href="http://wa.me/+918257803481" target="_blank">
        <button class="btn45">CHAT</button>
      </a>
    </div>
  </nav>
  <h2 class="hp-title" id="search_able_none">
    OFFICE MANAGEMENT SOFTWARE AND SOLUTIONS<br>
    FOR YOUR DIGITAL SUCCESS
  </h2><br>
  <p class="mum" id="search_able_02">Since 2022. For millions of users. We transform businesses with powerful and adaptable digital
    solutions that
    satisfy the needs of today and unlock the opportunities of tomorrow.
  </p>
  <h2 class="hp-title">OUR CLIENTS</h2>
  <marquee class="banner" behavior="scroll" class="d1">
    <img src="com/a.png" class="bs" alt="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img src="com/b.png" class="bs" alt="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img src="com/c.png" class="bs" alt="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img src="com/d.png" class="bs" alt="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img src="com/e.png" class="bs" alt="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img src="com/f.png" class="bs" alt="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img src="com/g.png" class="bs" alt="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img src="com/h.png" class="bs" alt="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img src="com/i.png" class="bs" alt="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img src="com/j.png" class="bs" alt="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img src="com/k.png" class="bs" alt="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img src="com/l.png" class="bs" alt="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img src="com/m.png" class="bs" alt="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img src="com/n.png" class="bs" alt="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </marquee>
  <section class="home" id="home">
    <div class="content">
      <h1>Get Your Product <span class="yellow">Easier & Faster.</span></h1>
      <p id="search_able_03">
        Empnode is a leading online office management delivery marketplace,
        connecting employees and employers through its platform across countries
      </p>
      <a href="#" class="home-btn">Go to Menu</a>
    </div>
    <div class="image">
      <img src="img/rc2.png" alt="" />
    </div>
  </section>
  <section class="services" id="services">
    <div class="top">
      <h2><span class="yellow">Why</span> We are the Best</h2>
      <p id="search_able_04">
        EMPNODE ,the developer organization only create the Admin for the client organisation.The
        EMPNODE act as the Central monitoring system.
        Our office management system has two module one is Admin module and another one is Employee
        module that helps the system to became much stable and secure.
      </p>
    </div>
    <div class="bottom">
      <div class="box">
        <img src="img/mm1.png" alt="" />
        <h4 id="search_able_05">24x7 Service</h4>
        <p id="search_able_06">
          24x7 means "24 hours a day, 7 days a week" and is used to describe a service, such as
          computer server monitoring, that is continuous, is always available (day or night), or
          involves products that can run constantly without disruption or downtime.
        </p>
        <a href="#">View More <img src="./images/btn-arrow.svg" alt="" /> </a>
      </div>
      <div class="box">
        <img src="img/mm2.png" alt="" />
        <h4 id="search_able_07">Reasonable Pricing</h4>
        <p id="search_able_08">
          Our system is a reliable office management system which can easily be purchased by
          any company and is very much secure with it's very high security system. The cost of
          the software is fully depends on the services required by the client company. Our software
          is much cheaper as compared to other such systems.
        </p>
        <a href="#">View More <img src="./images/btn-arrow.svg" alt="" /> </a>
      </div>
      <div class="box">
        <img src="img/mm3.png" alt="" />
        <h4 id="search_able_09">More Fetures</h4>
        <p id="search_able_10">
          EMPNODE,the developer organisation can add new features in our office management system
          which will be recommended by customer while using our software. We offer customisation option as per the requirements.
        </p>
        <a href="#">View More <img src="./images/btn-arrow.svg" alt="" /> </a>
      </div>
    </div>
  </section>
  <section class="about" id="about">
    <div class="image">
      <img src="img/rc5.png" alt="" />
    </div>
    <div class="content">
      <h3><span class="yellow">Order </span> with any budget</h3>
      <p id="search_able_11">
        If the customer need very specific service provider software then the EMPNODE will develop
        and provide the software to the customer based on customer requirement and within customer
        buying budget and with high security.
      </p>
      <a href="#" class="btn">Make an Offer</a>
    </div>
  </section>
  <section class="about about-2">
    <div class="content">
      <h3>
        <span class="yellow">We Deliver</span> the Service with best safety
      </h3>
      <p id="search_able_12">
        Our Software follow some structure that the client company cannot create admin by own & employee
        cannot create any other employee , these are the most important features. Advanced monitorig system
        and stability of the system is maintained.
      </p>
      <a href="#" class="btn">Make an Offer</a>
    </div>
    <div class="image">
      <img src="img/rc3.png" alt="" />
    </div>
  </section>
  <section class="about about-3" style="gap: 3rem 13rem">
    <div class="image">
      <img src="img/rc6.png" alt="" />
    </div>
    <div class="content">
      <h3><span class="yellow">Get</span> your order very easily</h3>
      <p id="search_able_13">
        When the customer place order to the EMPNODE then the whole responsibility of the order will be maintain by
        EMPNODE.The customer donot require to take any tension.The EMPNODE provide the estimate delivery date to
        the customer while taking the order and the order will be delivered easily to the customer within the estimate date.
      </p>
      <a href="#" class="btn">Track Now</a>
    </div>
  </section>
  <section class="app" id="contact">
    <div class="image">
      <img src="images/wee.png" alt="" />
    </div>
    <div class="content">
      <h3 id="search_able_14">Place your order through our app</h3>
      <p id="search_able_15">
        You can easily place your order using our mobile app. Now you can
        download our app for both IOS and Android mobiles.
      </p>
      <div class="links">
        <img src="./images/app-store.png" alt="" />
        <img src="./images/google-play.png" alt="" />
      </div>
    </div>
  </section>
  <?php
  require "client_footer.php";
  ?>
  <script>
    const p01 = document.getElementById("search_able_01");
    const p02 = document.getElementById("search_able_02");
    const p03 = document.getElementById("search_able_03");
    const p04 = document.getElementById("search_able_04");
    const p05 = document.getElementById("search_able_05");
    const p06 = document.getElementById("search_able_06");
    const p07 = document.getElementById("search_able_07");
    const p08 = document.getElementById("search_able_08");
    const p09 = document.getElementById("search_able_09");
    const p10 = document.getElementById("search_able_10");
    const p11 = document.getElementById("search_able_11");
    const p12 = document.getElementById("search_able_12");
    const p13 = document.getElementById("search_able_13");
    const p14 = document.getElementById("search_able_14");
    const p15 = document.getElementById("search_able_15");
    function search_01() {
      let input_01 = document.getElementById("search_box").value;
      if (input_01 !== "") {
        let regExp_01 = new RegExp(input_01, "gi");
        p01.innerHTML = (p01.textContent).replace(regExp_01, "<mark>$&</mark>");
      }
    }
    function search_02() {
      let input_02 = document.getElementById("search_box").value;
      if (input_02 !== "") {
        let regExp_02 = new RegExp(input_02, "gi");
        p02.innerHTML = (p02.textContent).replace(regExp_02, "<mark>$&</mark>");
      }
    }
    function search_03() {
      let input_03 = document.getElementById("search_box").value;
      if (input_03 !== "") {
        let regExp_03 = new RegExp(input_03, "gi");
        p03.innerHTML = (p03.textContent).replace(regExp_03, "<mark>$&</mark>");
      }
    }
    function search_04() {
      let input_04 = document.getElementById("search_box").value;
      if (input_04 !== "") {
        let regExp_04 = new RegExp(input_04, "gi");
        p04.innerHTML = (p04.textContent).replace(regExp_04, "<mark>$&</mark>");
      }
    }
    function search_05() {
      let input_05 = document.getElementById("search_box").value;
      if (input_05 !== "") {
        let regExp_05 = new RegExp(input_05, "gi");
        p05.innerHTML = (p05.textContent).replace(regExp_05, "<mark>$&</mark>");
      }
    }
    function search_06() {
      let input_06 = document.getElementById("search_box").value;
      if (input_06 !== "") {
        let regExp_06 = new RegExp(input_06, "gi");
        p06.innerHTML = (p06.textContent).replace(regExp_06, "<mark>$&</mark>");
      }
    }
    function search_07() {
      let input_07 = document.getElementById("search_box").value;
      if (input_07 !== "") {
        let regExp_07 = new RegExp(input_07, "gi");
        p07.innerHTML = (p07.textContent).replace(regExp_07, "<mark>$&</mark>");
      }
    }
    function search_08() {
      let input_08 = document.getElementById("search_box").value;
      if (input_08 !== "") {
        let regExp_08 = new RegExp(input_08, "gi");
        p08.innerHTML = (p08.textContent).replace(regExp_08, "<mark>$&</mark>");
      }
    }
    function search_09() {
      let input_09 = document.getElementById("search_box").value;
      if (input_09 !== "") {
        let regExp_09 = new RegExp(input_09, "gi");
        p09.innerHTML = (p09.textContent).replace(regExp_09, "<mark>$&</mark>");
      }
    }
    function search_10() {
      let input_10 = document.getElementById("search_box").value;
      if (input_10 !== "") {
        let regExp_10 = new RegExp(input_10, "gi");
        p10.innerHTML = (p10.textContent).replace(regExp_10, "<mark>$&</mark>");
      }
    }
    function search_11() {
      let input_11 = document.getElementById("search_box").value;
      if (input_11 !== "") {
        let regExp_11 = new RegExp(input_11, "gi");
        p11.innerHTML = (p11.textContent).replace(regExp_11, "<mark>$&</mark>");
      }
    }
    function search_12() {
      let input_12 = document.getElementById("search_box").value;
      if (input_12 !== "") {
        let regExp_12 = new RegExp(input_12, "gi");
        p12.innerHTML = (p12.textContent).replace(regExp_12, "<mark>$&</mark>");
      }
    }
    function search_13() {
      let input_13 = document.getElementById("search_box").value;
      if (input_13 !== "") {
        let regExp_13 = new RegExp(input_13, "gi");
        p13.innerHTML = (p13.textContent).replace(regExp_13, "<mark>$&</mark>");
      }
    }
    function search_14() {
      let input_14 = document.getElementById("search_box").value;
      if (input_14 !== "") {
        let regExp_14 = new RegExp(input_14, "gi");
        p14.innerHTML = (p14.textContent).replace(regExp_14, "<mark>$&</mark>");
      }
    }
    function search_15() {
      let input_15 = document.getElementById("search_box").value;
      if (input_15 !== "") {
        let regExp_15 = new RegExp(input_15, "gi");
        p15.innerHTML = (p15.textContent).replace(regExp_15, "<mark>$&</mark>");
      }
    }
  </script>
</body>
</html>