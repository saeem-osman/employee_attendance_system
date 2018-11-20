<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>box</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Service-Box-Style-01.css">
    <link rel="stylesheet" href="assets/css/Service-Box-Style-011.css">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
   
      

    <table class="table table-striped" id="ex-table">
    <thead class="thead-inverse">
        <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Adress</th>
        <th>Phone Number</th>
        </tr>
    </thead>
    <tbody>
        <tr id="tr">
        <td id="fname"></td>
        <td id="lname"></td>
        <td id="email"></td>
        <td id="adress"></td>
        <td id="phone"></td>
       </tr>
   </tbody>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>





<script src="https://www.gstatic.com/firebasejs/5.2.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.2.0/firebase-database.js"></script>
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


        var database = firebase.database().ref().child('users');
database.once('value', function(snapshot) {
    if(snapshot.exists()){
        var content = '';
        snapshot.forEach(function(data){

                
                var fname = data.val().firstName;
                var lname = data.val().lastName;
                var email = data.val().emailAddress;
                var address = data.val().currentAddress;
                var phone = data.val().phoneNumber;

                content += '<tr>';
            content += '<td>' + fname + '</td>'; //column1
            content += '<td>' + lname + '</td>';//column2
            content += '<td>' + email + '</td>'; //column1
            content += '<td>' + address + '</td>';//column2
            content += '<td>' + phone + '</td>';//column2
            content += '</tr>';
        });

        $('#ex-table').append(content);
    }

        });
        
    </script>



</body>

</html>
