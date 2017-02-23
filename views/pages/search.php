<div style="margin-top: 50px; border-width: 0 0 1px; padding: 10px;" class="navbar-default container">
    <input id="word_tag" type="text" class="form-control" placeholder="Mot-clés">
</div>
<div style="border-width: 0 0 1px; padding: 10px;" class="navbar-default container">
    <h1>Search Results</h1>
    <?php
        $cnr = count($name_results);
        echo ("<h2 class='lead'><strong class='text-danger'>$cnr</strong> résultats trouvés par nom pour votre recherche '<strong class='text-danger'>$query</strong>'</h2>");
    foreach ($name_results as $nr) {
        include ("views/partials/recipe_thumbnail.php");
     } ?>

    <br>
    ------------
    <br>

    <?php
    $cnr = count($ingredient_results);
    echo ("<h2 class='lead'><strong class='text-danger'>$cnr</strong> résultats trouvés par nom pour votre recherche '<strong class='text-danger'>$query</strong>'</h2>");
    foreach ($ingredient_results as $nr) {
        include ("views/partials/recipe_thumbnail.php");
    } ?>

    <br>
    ------------
    <br>

    <?php
    $cnr = count($tag_results);
    echo ("<h2 class='lead'><strong class='text-danger'>$cnr</strong> résultats trouvés par tags pour votre recherche '<strong class='text-danger'>$query</strong>'</h2>");
    foreach ($tag_results as $nr) {
        include ("views/partials/recipe_thumbnail.php");
    } ?>
</div>