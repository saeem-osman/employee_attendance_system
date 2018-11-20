<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="assets/css/Google-Style-Login.css">
    <link rel="stylesheet" href="assets/css/sticky-dark-top-nav-with-dropdown.css">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md navbar-fixed-top navigation-clean-button" style=";background-color: #F9307C;">
        <div class="container"><a class="navbar-brand" href="#"><span style="font-family:'Roboto Slab', serif;padding:14px;margin:15px;color:#441e1c;"><img id="logo_tag" src="assets/img/logo.png" style="height: 50px; width: 50px;"></span> </a><button class="navbar-toggler"
                data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav nav-right">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="index.php" style="font-size:22px;">home </a></li>
                    
                    <li class="nav-item" role="presentation"><a class="nav-link" href="about.php" style="font-size:22px;">User Info </a></li>

                    <li class="nav-item" role="presentation"><a class="nav-link" href="member.php" style="font-size:22px;">New Member </a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="viewData.php" style="font-size:22px;">User Activity</a></li>

                    
                    <?php  if (isset($_SESSION['user'])){
                        include_once('user-menu.php');
                    } ?>
                    
                   
                </ul>
            </div>
        </div>
    </nav>
    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>