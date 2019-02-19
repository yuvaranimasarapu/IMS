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

                            <input id="age" type="number">
                            <label for="age">Age (in years)</label><br>

                            <input id="weight" type="number">
                            <label for="weight">Weight (in kg)</label><br>

                            <!--
                                <input id="bday" type="date">
                                <label for="bday">Pet birthday</label><br>  
                                                                
                                <textarea id="other_notes"></textarea>
                                <label for="other_notes">Other notes</label><br>
                                -->
                            <label for="diet">What type of diet does your pet have?</label>
                            <select name="diet" id="diet">
                                <optgroup label="Raw">
                                    <option value="raw_grain_free">Raw grain free</option>
                                    <option value="raw_limited_diet">Raw limited diet</option>
                                </optgroup>
                                <optgroup label="Dry">
                                    <option value="dry_grain_free">Dry grain free</option>
                                    <option value="dry_limited_diet">Dry limited diet</option>
                                </optgroup>
                                <optgroup label="Wet">
                                    <option value="wet_grain_free">Wet grain free</option>
                                    <option value="wet_limited_diet">Wet limited diet</option>
                                </optgroup>
                                <optgroup label="Other">
                                    <option value="other_diet">Other diet</option>
                                </optgroup>

                            </select><br>



                            <div>

                                <label for="activity_level">Pet's level of activity</label>
                                <select id="activity_level" name="activity_level">
                                    <option value="Active">Active</option>
                                    <option value="Normal">Normal</option>
                                    <option value="Less_active">Less active</option>
                                    <option value="Other_activity">Other level of activity</option>
                                </select><br>
                            </div>

                            <fieldset>
                                <legend>Sex</legend>

                                <input type="radio" name="sex" value="male" id="male" checked><label
                                    for="male">male</label><br>
                                <input type="radio" name="sex" value="female" id="female"><label
                                    for="female">female</label><br>
                            </fieldset>
                            <br>

                            <fieldset>
                                <legend>Neutered or not?</legend>
                                <input type="radio" name="neutered" value="intact" id="red" checked><label
                                    for="intact">intact</label><br>
                                <input type="radio" name="neutered" value="neutered" id="blue"><label
                                    for="neutered">neutered</label><br>
                            </fieldset>
                            <br>

                            <input type="submit" value="Submit">
                        </form>

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