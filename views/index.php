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
        <link href="views/css/search.css" rel="stylesheet">
        <link href="views/css/landing-page.css" rel="stylesheet">


        <!-- bootsrap-select CSS -->
        <link href="views/css/bootstrap-select.min.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="views/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic"
              rel="stylesheet" type="text/css">

        <!-- jQuery -->
        <script src="views/js/jquery.js"></script>

        <!-- bootstrap select -->
        <script src="views/js/bootstrap-select.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="views/js/bootstrap.min.js"></script>

        <script src="views/js/jquery.barrating.min.js"></script>
        <link rel="stylesheet" href="views/css/fontawesome-stars.css">

        <![endif]-->

    </head>
    <body style="background-color: #eeeeee">
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
                <a class="navbar-brand logo" href="index.php"><i style="color: #F47321" class="fa fa-cutlery"
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
        <div id="add-box" style="background-color: #f8f8f8;display: none;">
            <div id="create">
                <div class="row">
                    <div class="col-lg-12" style="height:90%;display: flex;">


                        <form method="POST" enctype="multipart/form-data" action="index.php?controller=recipe&action=create">
                       <div id="hover1" class="col-lg-4" style="height:100%;padding: 0;">
                           <h3 id="menu_1">Composez</h3>
                            <div class="col-lg-12" style="color: #f47321;height: 40%;padding-top: 10%">
                                <h3 style="margin-left: auto;margin-right: auto;width: 100%;">
                                    <i style="margin-left: 31%" class="fa fa-cart-plus" aria-hidden="true"></i> Ingrédients</h3>
                                <div  style="display: flex">
                                    <div id="quantity" class="col-lg-3" style="float: none !important; padding-left: 5px;padding-right: 0px;">
                                        <div class="input-group">
                                            <input id="quantity_ingr" type="number" class="form-control" placeholder="0">
                                        </div>
                                    </div>
                                    <select id="unit_ingr" class="selectpicker">
                                        <option value="Grammes">gramme(s)</option>
                                        <option value="Kilogrammes">kilogramme(s)</option>
                                        <option value="Millilitres">millilitre(s)</option>
                                        <option value="Litres">litre(s)</option>
                                        <option value="cuillère(s) à café">cuillère(s) à café</option>
                                        <option value="cuillère(s) à soupe">cuillère(s) à soupe</option>
                                        <option value="Unite">unité</option> de
                                    </select>
                                    <div id="name"  class="col-lg-8" style="float: none !important; padding-left: 5px;padding-right: 0px;">
                                        <div class="input-group">
                                            <input id="name_ingr" type="text" class="form-control" placeholder="Ingrédient">
                                            <span class="input-group-btn">
                                                <button id="send_ingredient" class="btn btn-default" type="button">Ajouter</button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12" style="color: #f47321;height: 60%">
                                <h3 style="margin-left: auto;margin-right: auto;width: 100%;">
                                    <i style="margin-left: 31%" class="fa fa-hashtag" aria-hidden="true"></i> Mots-clés</h3>
                                <div class="add_tag0" style="display: flex">
                                    <select id="type_tag" class="selectpicker">
                                        <option value="Goût">Goût</option>
                                        <option value="Origine">Origine</option>
                                        <option value="Type">Type</option>
                                    </select>
                                    <div class="col-lg-12" style="float: none !important; padding-left: 5px;padding-right: 0px;">
                                        <div class="input-group">
                                            <input id="word_tag" type="text" class="form-control" placeholder="Mot-clés">
                                            <span class="input-group-btn">
                                                <button id="send_tag" class="btn btn-default" type="button">Ajouter</button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



<!--                        PREPARER PREPARER PREPARER PREPARER PREPARER PREPARER PREPARER PREPARER PREPARER PREPARER PREPARER PREPARER-->
                       <div id="hover2" class="col-lg-4" style="height:100%;padding: 0">
                            <h3 id="menu_2">Preparez</h3>
                            <div class="col-lg-12" style="padding-top:20px;height: 90%;border-right: solid 1px;border-left: solid 1px;border-color:darkorange;overflow: scroll;overflow-x: hidden;overflow:overlay">

                                <div id="etape">
                                    <div class="col-lg-12" style="height: 8%;color: dimgrey">
                                        <h5 style="margin: 0;margin-left: 3px;">Etapes</h5>
                                    </div>
                                    <div class="col-lg-12" style="height: 36%;margin-bottom: 15px">
                                        <textarea name="steps[0][value]" class="form-control" rows="5" id="comment" style="resize: none;margin-bottom: 15px"></textarea>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-12" style="border-radius:3px;height: 10%;">
                                <h4 id="add_step" style="line-height: 1;float: right;">Ajouter une étape<i class="fa fa-pencil" aria-hidden="true" style="margin-left: 7px;float: right;bottom: 1px;line-height: 1;color:darkorange"></i></h4>
                            </div>
                       </div>

<!--                         FINALISEZ FINALISEZ FINALISEZ FINALISEZ FINALISEZ FINALISEZ FINALISEZ FINALISEZ FINALISEZ FINALISEZ FINALISEZ-->


                        <div id="hover3" class="col-lg-4" style="height:100%;padding: 0;">
                            <h3 id="menu_3">Finalisez</h3>
                            <div class="col-lg-12" style="height: 90%;overflow: scroll; overflow-x: hidden">
                                <div class="col-lg-12" style="margin-top: 20px;">

                                    <div class="col-lg-6">
                                        <div class="col-lg-12 input-group">
                                            <input name="author[name]" type="text" class="form-control" placeholder="Auteur">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="col-lg-12 input-group">
                                            <input name="recipe[name]" type="text" class="form-control" placeholder="Nom de la recette">
                                        </div>
                                    </div>

                                    <div class="col-lg-12" style="margin-top: 10px;margin-bottom: 10px">
                                        <div class="col-lg-12 input-group">
                                            <input name="author[mail]" type="text" class="form-control" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="col-lg-12 input-group">
                                            <input name="recipe[difficulty] "type="text" class="form-control" placeholder="Difficulté">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="col-lg-12 input-group">
                                            <input name="recipe[time]" type="number" class="form-control" placeholder="Tps en minutes">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="col-lg-12 input-group">
                                            <input name="recipe_pic" type="file" class="form-control" placeholder="Photo">
                                        </div>
                                    </div>
                                </div>

                                <div id="content_recipe" class="col-lg-12">
                                    <h4 style="margin: 0;margin-left: 17px;margin-top: 20px;margin-bottom: 10px">Recapitulatif :</h4>
                                    <div class="col-lg-12" >

                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">Ingredient</h3>
                                            </div>
                                                <table id="table_ingr" class="table">
                                                    <tbody>
                                                    <div id="table_ingr_row" style="display: none">
                                                        <input name="" id="table_ingr_quant" type="text" style="padding-left: 35px;border: none;width: 100px" readonly>
                                                        <input name="" id="table_ingr_unit"  type="text" style="border: none;width: 150px" readonly>
                                                        <input name="" id="table_ingr_name"  type="text" style="border: none;width: 100px" readonly>
                                                    </div>
                                                    </tbody>
                                                </table>
                                        </div>

                                    </div>
                                    <div class="col-lg-12">

                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">Mot-clés</h3>
                                            </div>
                                            <table id="table_tag" class="table">
                                                <tbody>
                                                    <div id="table_tag_row" style="display: none">
                                                        <input name="tags[0][type]" id="table_tag_type" type="text" style="margin-left: 20px;border: none;width: 100px" readonly>
                                                        <input name="tags[0][name]"id="table_tag_name" type="text" style="border: none;width: 160px" readonly>
                                                    </div>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>


                                </div>
                                <div class="col-lg-3">

                                </div>
                            </div>
                            <div class="col-lg-4" style="float: right;">
                                <input style="background-color: #F47321;color: white;" class="form-control" type="submit"><!-- onclick="--><?// create_recipe(); ?><!--"-->
                            </div>
                            
                        </div>
                        </form>

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
            if ($("#add-box").css("display") == "none") {
                $("#add-box").css("display", "block");
                $("#add-icon").removeClass("wheel_reverse");
                $("#add-icon").addClass("wheel");
                $("#add-box").animate({"height": "450px"}, 500);
            }

            else {
                $("#add-icon").removeClass("wheel");
                $("#add-icon").addClass("wheel_reverse");
                $("#add-box").animate({"height": "0px"}, 500, function () {
                    $("#add-box").css("display", "none");
                });


            }
        });
        var i=0;
        var y=0;
        var z=0;
        $("#send_ingredient").click(function () {

            var quant = $("#quantity_ingr").val();
            var unit  = $("#unit_ingr").val();
            var name  = $("#name_ingr").val();

            var table_ingr_clone = $('#table_ingr_row').clone();
            table_ingr_clone.children("#table_ingr_quant").val(quant).attr('name', 'ingredients[' + i + '][quantity]');
            table_ingr_clone.children("#table_ingr_unit").val(unit).attr('name', 'ingredients[' + i + '][unit]');
            table_ingr_clone.children("#table_ingr_name").val(name).attr('name', 'ingredients[' + i + '][name]');

            table_ingr_clone.css('display', 'unset');
            table_ingr_clone.insertAfter($('#table_ingr_row'));
            i++;

        });

        $("#send_tag").click(function () {

            var type = $("#type_tag").val();
            var tag  = $("#word_tag").val();

            var table_tag_clone = $('#table_tag_row').clone();
            table_tag_clone.children("#table_tag_type").val(type).attr('name', 'tags[' + y + '][type]');;
            table_tag_clone.children("#table_tag_name").val(tag).attr('name', 'tags['  + y + '][name]');

            table_tag_clone.css('display', 'unset');
            table_tag_clone.insertAfter($('#table_tag_row'));
            y++;
        });


        $("#add_step").click(function () {

            var tag  = $("#comment").clone();
            tag.val("");
            if(z == 0)
                tag.attr('id', '#comment0').attr('name', 'steps[' + 1 + '][value]').insertAfter($('#comment'));
            else
                $("#comment").parent().append(tag.attr('id', '#comment' +z).attr('name', 'steps[' + z + '][value]'));//.insertAfter($('#comment'+ (z-1)));
            z++;
        });

        $("#hover1").hover(function(){
            console.log("====");
            $("#menu_1").css("background-color", "#F47321").css("color", "white");
            $("#menu_2").css("background-color", "transparent").css("color", "#F47321");
            $("#menu_3").css("background-color", "transparent").css("color", "#F47321");
        });

        $("#hover2").hover(function(){
            console.log("====");
            $("#menu_2").css("background-color", "#F47321").css("color", "white");
            $("#menu_1").css("background-color", "transparent").css("color", "#F47321");
            $("#menu_3").css("background-color", "transparent").css("color", "#F47321");
        });
        $("#hover3").hover(function(){
            console.log("====");

            $("#menu_3").css("background-color", "#F47321").css("color", "white");
            $("#menu_2").css("background-color", "transparent").css("color", "#F47321");
            $("#menu_1").css("background-color", "transparent").css("color", "#F47321");
        });



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
