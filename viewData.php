<?php 
    include('functions.php');

    if (!isAdmin()) {
        $_SESSION['msg'] = "You are not allowed";
        header('location: index.php');
    }

?>

<?php
include_once('header.php');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>View Data</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <table id="myTable" cellpadding="20" cellspacing="100" border="3" color= 'blue' padding= "20px"></table>

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

        var nameData = {};
        var emailData = {};

        firebase.database().ref('/users').once('value', function (snap) {
            snap.forEach(function (obj) {

                var RFid = obj.key;
                var name = obj.val().firstName;
                var email = obj.val().emailAddress;
                nameData[RFid] = name;
                console.log(obj.key);
                emailData[RFid] = email;
            });

            
        });

        var timeData = new Array(); //for graph
        var rfidData = new Array();
        var dateData = new Array();
        var i; //counts the total item
        firebase.database().ref('/login_data').once('value', function (snap) {
            i = 0;
            snap.forEach(function (obj) {
                var date = obj.val().date;
                var time = obj.val().time;
                var rf = obj.val().rfid;
                rfidData.push(rf);
                timeData.push(time);
                dateData.push(date);
                i += 1;
            });
            if (i > 0) { //if item is more than one
                setValue();
            }
            else {
                initializeField();
            }
        });

        function setValue() {
            var loginInfo;
            var content = '';

            for (var j = 0; j < dateData.length; j++) {

                loginInfo = {
                    id: j,
                    rfid: rfidData[j],
                    date: dateData[j],
                    time: timeData[j]
                };
                var table = document.getElementById("myTable");
                var row = table.insertRow(j);
                var cell1 = row.insertCell(0);
                var cell2 = row.insertCell(1);
                var cell3 = row.insertCell(2);
                var cell4 = row.insertCell(3);
                var cell5 = row.insertCell(4);
                var cell6 = row.insertCell(5);

                var fname = nameData[loginInfo.rfid];
                var email = emailData[loginInfo.rfid];
                cell1.innerHTML = loginInfo.id;
                cell2.innerHTML = loginInfo.rfid;
                cell3.innerHTML = fname;
                cell4.innerHTML = email;
                cell5.innerHTML = loginInfo.date;
                cell6.innerHTML = loginInfo.time;
            }
        }

    </script>
</body>

</html>

<?php
include_once('footer.php');
?>
