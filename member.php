<?php
include_once('header.php');
?>

<head>
  <title>Membership Form Flat Responsive Widget Template :: w3layouts</title>
  <!-- Meta-Tags -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <meta name="keywords" content="Membership Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">


  <script>
    addEventListener("load", function () {
      setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
      window.scrollTo(0, 1);
    }
  </script>
  <!-- //Meta-Tags -->
  <!--fonts-->
  <link href="//fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
  <!--//fonts-->
  <link rel="stylesheet" type="text/css" href="style.css">
</head>


<script>
  addEventListener("load", function () {
    setTimeout(hideURLbar, 0);
  }, false);

  function hideURLbar() {
    window.scrollTo(0, 1);
  }
</script>
<!-- //Meta-Tags -->
<!-- Stylesheets -->
<!--// Stylesheets -->
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
<!--//fonts-->
</head>

<body>
  <script src='//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
  <script>
    (function () {
      if (typeof _bsa !== 'undefined' && _bsa) {
        // format, zoneKey, segment:value, options
        _bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
      }
    })();
  </script>
  <script>
    (function () {
      if (typeof _bsa !== 'undefined' && _bsa) {
        // format, zoneKey, segment:value, options
        _bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
      }
    })();
  </script>
  <script>
    (function () {
      if (typeof _bsa !== 'undefined' && _bsa) {
        // format, zoneKey, segment:value, options
        _bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
      }
    })();
  </script>
  <script>
    (function (i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
      (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date(); a = s.createElement(o),
      m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-30027142-1', 'w3layouts.com');
    ga('send', 'pageview');
  </script>

  <body>


    <header>
      <h1>Membership form</h1>


    </header>
    <div class="w3ls-reg">
      <form action="#" method="post">
        <div class="mr_agilemain">
          <div class="field-w3-agile-grid">
            <label>
              Name :</label>
          </div>
          <div class="left-wthree">
            <input id="fname" type="text" name="name" placeholder=" " required="">
            <label>
              First Name</label>
          </div>
          <div class="left-wthree">
            <input id="lname" type="text" name="name" placeholder=" " required="">
            <label>
              Last Name</label>
          </div>
        </div>
        <div class="mr_agilemain">
          <div class="field-w3-agile-grid">
            <label>
              Email :</label>
          </div>
          <div class="field-right">
            <input id="mail" type="email" name="email" placeholder=" " required="">
          </div>
        </div>
        <div class="mr_agilemain">
          <div class="field-w3-agile-grid">
            <label>
              Phone number :</label>
          </div>
          <div class="field-right">
            <input id="phone" type="text" name="phone number" placeholder=" " required="">
          </div>
        </div>
        <div class="mr_agilemain">
          <div class="field-w3-agile-grid">
            <label>
              Address :</label>
          </div>
          <div class="field-right">
            <div class="">
              <input id="address" type="text" name="name" placeholder=" " required="">
              <label class="bot_label">
                Current Address</label>
            </div>
            <div class="field-w3-agile-grid">
              <label>
                RFID TAG :</label>
            </div>
            <div class="field-right">
              <div class="">
                <input id="rfid" type="text" name="name" placeholder=" " required="">
                <label class="bot_label">
                  ID</label>
              </div>




            </div>
          </div>
          <div class="mr_agilemain last-field">

            <div class="w3ls-contact mr_agilemain w3l-sub">
              <button name="submit" value="Submit" onClick="writeUserData()">submit</button>
            </div>
      </form>
      </div>


      <div class="copy-wthree">

      </div>
  </body>
  <script src="https://www.gstatic.com/firebasejs/5.4.2/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/5.4.2/firebase-database.js"></script>
  <script>
    // Initialize Firebase
    var config = {
      apiKey: "AIzaSyD6YuU062_sC9P9E71stoYC-MWpponLOrQ",
      authDomain: "ceg413-24894.firebaseapp.com",
      databaseURL: "https://ceg413-24894.firebaseio.com",
      projectId: "ceg413-24894",
      storageBucket: "ceg413-24894.appspot.com",
      messagingSenderId: "688053516849"
    };
    firebase.initializeApp(config);

    function writeUserData() {
      var rfid_number = document.getElementById("rfid").value;
      var first_name = document.getElementById("fname").value;
      var last_name = document.getElementById("lname").value;
      var email_id = document.getElementById("mail").value;
      var phone_number = document.getElementById("phone").value;
      var current_address = document.getElementById("address").value;

      console.log(first_name);
      console.log(last_name);
      console.log(email_id);
      console.log(phone_number);
      console.log(current_address);
      console.log(rfid_number);


      firebase.database().ref('users/' + rfid_number).set({
        firstName: first_name,
        lastName: last_name,
        emailAddress: email_id,
        phoneNumber: phone_number,
        currentAddress: current_address
      });

      document.getElementById("rfid").value = "";
      document.getElementById("fname").value = "";
      document.getElementById("lname").value = "";
      document.getElementById("mail").value = "";
      document.getElementById("phone").value = "";
      document.getElementById("address").value = "";
    }

  </script>
</Body>

<?php
  include_once('footer.php');
?>