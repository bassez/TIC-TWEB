<!-- Header -->
<a name="about"></a>
<?php include ("views/partials/banner.php"); ?>


<div class="container">
<!--<div style="padding-top: 10px; color: #777" class="content-section-a">-->
<!--    <div class="container">-->
        <h2 style=""><strong class='text-danger'>Retrouvez</strong> les dernières recettes ajoutées !</h2>
        <?php
        foreach ($recents as $nr) { ?>
            <?php include ("views/partials/recipe_thumbnail.php"); ?>
        <?php } ?>
</div>
<!--    </div>-->
    <!-- /.container -->

<!--</div>-->
<!-- /.content-section-a -->

</div>
<!-- /.banner -->

<script>
    $("#search_button").click(function () {
        window.location.href = "index.php?controller=search&action=search&query=" + encodeURI($("#search_input").val());
    });
</script>