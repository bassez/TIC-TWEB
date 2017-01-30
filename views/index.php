<DOCTYPE html>
    <html>
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Cherchez et partagez vos recettes sans inscription !</title>

        <!-- Bootstrap Core CSS -->
        <link href="views/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="views/css/landing-page.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="views/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body style="background-color: #cccccc" >
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand logo" href="#"><i style="color: #F47321" class="fa fa-cutlery" aria-hidden="true"></i> armiton</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li id="search-menu">
                        <a href="#contact"><i style="color: #F47321" class="fa fa-plus" aria-hidden="true"></i> Nouvelle recette</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <div id="add-box" style="
    height: 400px;
    position: absolute;
    top: 50px;
    right: 100px;
    width: 700px;
    z-index: 100000;
    visibility: hidden;
    background-color: #f8f8f8;
"></div>
        <!-- /.container -->
    </nav>

    <div id="wrapper">


        <div class="content">
            <?php require_once('routing.php'); ?>
        </div>


    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="#">Accueil</a>
                        </li>
                        <li style="color:#F47321"> | </li>
                        <li>
                            <a href="#about">Github</a>
                        </li>
                        <li style="color:#F47321"> | </li>
                        <li>
                            <a href="#contact">Contact</a>
                        </li>
                    </ul>
                    <p class="copyright text-muted small">Copyright &copy; Your Company 2014. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="views/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="views/js/bootstrap.min.js"></script>
    </body>
    </html>
