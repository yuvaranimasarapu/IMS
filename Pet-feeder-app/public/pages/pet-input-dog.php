<!DOCTYPE html>
<html>

<head>
    <meta name="generator" content="Hugo 0.54.0" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta title="Pet Feeder App">

    <link rel="stylesheet" href="../../public/sass/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="../../private/js/bootstrap.js"></script>

</head>


<body>

    <header class="site-header">
        <nav class="navbar navbar-default">
            <div class="container-fluid">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="./index.php">Pet Feeder App</a>
                </div>


                <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">Sign in <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a target="_blank" href="./public/pages/sign-in.php"
                                        title="link to sign in page">Sign in</a></li>
                                <li><a href="./public/pages/sign-up.php" title="link to sign up page">Sign up</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a target="_blank" href="./index.php" title="link to log out page">Log out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!--
<?php include('./private/shared/header.php'); ?>
-->



    <div class="container">
        <div class="wrapper">

            <div class="row">
                <div class="col-md-8">


                    <header class="post-header">
                       <!-- <h3 >Please insert pet info</h3>-->
                         <h1 class="post-title" itemprop="name headline">Please insert pet info</h1> 
                    </header>

                    <div class="post-content" itemprop="articleBody">
                        <form action="" method="post">
                            <input id="petname" type="text">
                            <label for="petname">Pet name</label><br>

                            <?php include('../../private/shared/pet-input-dog.php'); ?>

                            <?php include('../../private/shared/pet-input-form-lower.php'); ?>
                            
                    </div>



                    <div class="row">

                    </div>

                </div>

                <div class="col-md-4 mt20">
                    <div class="post-img">

                        <img width="600" src="../images/dog.png" alt="webjeda">

                    </div>

                </div>

            </div>




        </div>
    </div>






    <?php include('../../private/shared/footer.php'); ?>