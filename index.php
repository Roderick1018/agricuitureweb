<?php
    session_start();
    if (!isset($_SESSION['username']) && !isset($_SESSION['id'])) 
        { ?>
        
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>智慧農業平台</title>
    <link rel="Shortcut Icon" type="image/x-icon" href="images/agronomy.ico">

    <!-- css -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- custom css -->
    <link href="./assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- custom js -->
    <script src="./assets/js/script.js"></script>
</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top navbar-top">
        <div class="container">
            <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"> </span>
            </button>
            <a class="navbar-brand">智慧農業平台</a>
            </div>
            <div class="navbar-collapse collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#section_intro">平台功能</a></li>
                <li><a href="#section_picture">平台畫面</a></li>
                <li><a href="login.php">登入</a></li>
            </ul>
            </div>
        </div>
    </nav>
        
    <header class="jumbotron">
        <div class="container">
            <h1>花卉研究室<br><br>智慧農業物聯網平台</h1>
        </div>
    </header>

    <section id="section_intro">
        <div class="container w3-text-white">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="w3-text-white section-heading">平台功能</h1>
                </div>
                <div class="col-sm-6">
                    <div class="content-wrap">
                        <i class="fa fa-area-chart icon"></i>
                        <h2>數據顯示</h2>
                        <br>
                        <ul>
                            <li>視覺化數據呈現</li>
                            <li>簡易操作介面</li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="content-wrap">
                        <i class="fa fa-line-chart icon"></i>
                        <h2>即時圖像</h2>
                        <br>
                        <ul>
                            <li>現場影像擷取</li>
                            <li>現場文心蘭切花即時辨識</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="section_picture">
        <div class="container  w3-text-white">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="section-heading">平台畫面</h1>
                </div>
                <div class="col-sm-12">
                    <h2>數據顯示</h2>
                    <hr>
                </div>
                <div class="col-sm-6">
                    <div class="img_wrap">
                        <img src="./images/introduction/show1.png" alt=""/>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="img_wrap">
                        <img src="./images/introduction/show2.png" alt=""/>
                    </div>
                </div>
                <div class="col-sm-12">
                    <h2>即時圖像</h2>
                    <hr>
                </div>
                <div class="col-sm-6">
                    <div class="img_wrap">
                        <img src="./assets/images/image2.png" alt=""/>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="img_wrap">
                        <img src="./assets/images/image3.png" alt=""/>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>

<?php } else{
    header("Location: homepage.php");
}?>