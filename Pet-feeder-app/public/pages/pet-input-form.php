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
                    <article class="post" itemscope itemtype="http://schema.org/BlogPosting">

                        <header class="post-header">
                            <h1 class="post-title" itemprop="name headline">Post with no image</h1>
                            <p class="post-meta"><time datetime='2016-06-09T00:00:00Z' itemprop="datePublished">June 9,
                                    2016</time></p>

                        </header>

                        <div class="post-content" itemprop="articleBody">
                            <p>When there is no image mentioned in the front-matter, default image will be displayed.
                                You can change this image to any other one that suits your needs.</p>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non iaculis risus. Phasellus
                                vitae nunc ac lectus finibus porttitor. Sed vel enim vulputate, euismod neque maximus,
                                tincidunt turpis. Aenean accumsan leo eget dui porta pulvinar. Sed tincidunt, nisi non
                                efficitur tempus, enim lectus aliquam arcu, at dignissim ligula ex eu quam. Suspendisse
                                gravida dapibus ultrices. Vivamus convallis nulla nisl, a imperdiet felis pellentesque
                                in. Nulla facilisi. Integer aliquet sed orci eu tempor. Sed viverra ullamcorper commodo.
                            </p>

                            <p>Morbi vestibulum sem eget maximus feugiat. Curabitur vehicula magna in molestie
                                dignissim. Nam gravida leo non purus cursus, id accumsan justo tincidunt. Donec accumsan
                                purus mauris, vitae luctus magna faucibus vitae. Nullam tincidunt urna scelerisque,
                                hendrerit mi ac, sagittis ligula. Curabitur convallis eros eu fringilla maximus. Donec
                                lobortis scelerisque enim eu molestie. Duis ac mi quis risus auctor vulputate.</p>

                        </div>

                    </article>
                    <div class="row">

                    </div>

                    <div class="row">
                        <ul class="pager">

                            <li><a class="next" href="posts/installation/">&laquo; Installation</a></li>


                            <li><a class="previous" href="posts/usage/">Usage Guide &raquo;</a></li>

                        </ul>
                    </div>
                </div>


                <div class="col-md-4 mt20">
                    <div class="post-img">

                        <img width="600" src="../../public/images/gopher.jpg" alt="webjeda">

                    </div>


                    <div class="mt10 recent">
                        <h2>Recent articles</h2>
                        <ul>


                            <li>
                                <p><a href="posts/welcome-to-hugo/index.html">Welcome to
                                        Hugo!</a><small>&nbsp;&nbsp;June 13, 2016</small></p>
                            </li>



                            <li>
                                <p><a href="posts/usage/">Usage Guide</a><small>&nbsp;&nbsp;June 12, 2016</small></p>
                            </li>



                            <li>
                                <p><a href="posts/no-image/">Post with no image</a><small>&nbsp;&nbsp;June 9,
                                        2016</small></p>
                            </li>


                        </ul>
                    </div>

                    <br>

                </div>

            </div>




        </div>
    </div>

    <?php include('../../private/shared/footer.php'); ?>