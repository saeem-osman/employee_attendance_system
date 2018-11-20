<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Indie+Flower">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="assets/css/dh-box-2-sides.css">
    <link rel="stylesheet" href="assets/css/DNFeature-Boxes.css">
    <link rel="stylesheet" href="assets/css/Profile-Edit-Form.css">
    <link rel="stylesheet" href="assets/css/Profile-Edit-Form1.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/welcome-sss.css">
</head>

<body>
    <section>
    <div class="row clearmargin clearpadding row-image-txt" style="
    background-color:#d4c6c6;padding: 35px">
    <div class="col-xs-12 col-sm-6 col-md-6 col-sm-pull-6" style="padding:20px;">
        <h1> Hello <?php echo $_SESSION['user']['username']; ?>!</h1>
        <hr />
        <p>Hello to the new online attendance system. Here you can find the information of the user. User can login by using RFID. </p>
        <div style="text-align:center"><button class="btn btn-light btn-lg" type="button" onclick="window.location.href='about.php'">Know more</button></div>
    </div>
        <div class="col-xs-12 col-sm-6 col-md-6 clearmargin clearpadding col-sm-push-6"><img src="assets/img/office-front.jpeg" style="width:100%;" /></div>
</div>
</section>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Profile-Edit-Form.js"></script>
    <script src="assets/js/welcome-sss.js"></script>
</body>

</html>