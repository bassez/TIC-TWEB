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
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic"
              rel="stylesheet" type="text/css">

        <!-- jQuery -->
        <script src="views/js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="views/js/bootstrap.min.js"></script>
        <![endif]-->

    </head>
    <body style="background-color: #cccccc">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand logo" href="#"><i style="color: #F47321" class="fa fa-cutlery"
                                                         aria-hidden="true"></i> armiton</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li id="search-menu">
                        <a id="menu_add" href="#contact"><i id="add-icon" style="color: #F47321" class="fa fa-plus"
                                                            aria-hidden="true"></i> Nouvelle recette</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <div id="add-box" style="
    background-color: #f8f8f8;
    display: none;

">
            <div class="container">
                <div class="row">
                    <div style="text-align: center; font-size:25px; height: 100%; color:#F47321" class="col-lg-5"><i
                                class="fa fa-cart-plus" aria-hidden="true"></i>
                        Ingrédient
                        <div style="display: flex; height: 83%">
                        


                            <form method="POST" action="index.php?controller=recipe&action=create" style="color: #777; font-size: 15px; align-items: center;
                                justify-content: center; margin:auto; margin-top: 25px;height: 100%;">
                                <div id="form_recette">
                                    


                                    <div class="add_input">
                                        Auteur<input id="author" name="author[name]" type="text">
                                        Email<input id="email" name="author[email]" type="text"><br>
                                        recette<input id="recette" name="recipe[name]" type="text">
                                        
                                            <div class="add_title">
                                                    <p>Ajouter</p> <i id="add_ingr" class="fa fa-plus-square-o" aria-hidden="true"></i>
                                            </div>
                                        <div id="ingredient">
                                            <div class="add_input0">
                                                <input id="quantity" name="ingredients[0][quantity]" style="width: 15%;margin-right:5px;" type="number">
                                                <select id="unite" name="ingredients[0][unite]" style="margin-right:5px;">
                                                    <option value="Grammes">gramme(s)</option>
                                                    <option value="Kilogrammes">kilogramme(s)</option>
                                                    <option value="Millilitres">millilitre(s)</option>
                                                    <option value="Litres">litre(s)</option>
                                                    <option value="Cafe">cuillère(s) à café</option>
                                                    <option value="Soupe">cuillère(s) à soupe</option>
                                                    <option value="unite">Unité</option>
                                                </select> de 

                                                <input id="name" name="ingredients[0][name]" style="margin-left:5px;width: 38%" type="text">
                                            </div>
                                        </div>
                                            <div class="add_title">
                                                <p>Ajouter</p> <i id="add_tag" class="fa fa-plus-square-o" aria-hidden="true"></i>
                                            </div>
                                        <div id="tags">
                                            <div class="add_tag0">
                                                <select id="tagtype" name="tags[0][type]" style="margin-right:5px;">
                                                        <option value="Gout">Gout</option>
                                                        <option value="Orgigin">Origine</option>
                                                        <option value="Type">Type</option>
                                                </select>
                                                <input id="tagname" name="tags[0][name]" style="margin-left:5px;width: 38%" type="text">
                                            </div>
                                        </div>
                                    </div>
                                


                                </div>
                                <button class="btn btn-primary" style="background-color: #F47321; border-color: #c1571b;"><i id="send_res" class="fa fa-share" aria-hidden="true"></i></button>
                            </form>
                        
                            
                        </div>
                    </div>
                    <div style="margin:auto; height: 100%; align-items: center;display: flex;
                                justify-content: center; font-size: 25px; color:#F47321"
                         class="col-lg-2">
                    </div>
                    <div style="text-align: center; font-size:25px;height: 100%; color:#F47321" class="col-lg-5"><i
                                class="fa fa-book" aria-hidden="true"></i>
                        Recette
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </nav>

    <script>
        var i =0;
        var y =0;
        var x =0;
        var z =0;

        $("#menu_add").click(function () {
            console.log("display true");
            if ($("#add-box").css("display") == "none") {
                $("#add-box").css("display", "block");
                $("#add-icon").removeClass("wheel_reverse");
                $("#add-icon").addClass("wheel");
                $("#add-box").animate({"height": "400px"}, 500);
            }

            else {
                $("#add-icon").removeClass("wheel");
                $("#add-icon").addClass("wheel_reverse");
                $("#add-box").animate({"height": "0px"}, 500, function () {
                    $("#add-box").css("display", "none");
                });


            }
        })

        $("#send_res").click(function () {
            // console.log("==============================");
            // var recette = $("#form_recette")
            // var i = 0;

            // recette.children(#)
            // for (data of datas){

            // }
        })
        
        $("#add_ingr").click(function () {
            

            var clone = $('.add_input'+ i).clone();
            i++;
            y= i-1;
            clone.children("#name").attr("name", "ingredients[" + i + "][name]");
            clone.children("#quantity").attr("name", "ingredients[" + i + "][quantity]");
            clone.children("#unite").attr("name", "ingredients[" + i + "][unite]");
            clone.attr("class", "add_input"+ i);
            clone.insertAfter($('.add_input' +y));


        })

         $("#add_tag").click(function () {
            
            var clone = $('.add_tag'+ x).clone();
            x++;
            z= x-1;
            clone.children("#tagtype").attr("name", "tags[" + x + "][type]");
            clone.children("#tagname").attr("name", "tags[" + x + "][name]");
            clone.attr("class", "add_tag"+ x);
            clone.insertAfter($('.add_tag' +z));


        })


    </script>

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
                        <li style="color:#F47321"> |</li>
                        <li>
                            <a href="https://github.com/bassez/TIC-TWEB">Github</a>
                        </li>
                        <li style="color:#F47321"> |</li>
                        <li>
                            <a href="#">Contact</a>
                        </li>
                    </ul>
                    <p class="copyright text-muted small">"Marmiton" Project - ETNA. Florian Bassez && Sylvain
                        Lasjunies. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>


    </body>
    </html>
