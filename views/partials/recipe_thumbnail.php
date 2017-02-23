
<section class="col-xs-12 col-sm-6 col-md-12 panel panel-default">

    <article class="search-result row" style="padding-top: 20px;">
        <div class="col-xs-12 col-sm-12 col-md-3">
            <? $path = $GLOBALS["uploaddir"] . $nr->getPictureId(); echo '<a href="#" title="Lorem ipsum" class="thumbnail"><img src="'.$path.'" alt="Lorem ipsum" /></a>' ?>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-2">
            <ul class="meta-search">
                <li><i class="glyphicon glyphicon-calendar"></i> <span><? echo $nr->getCreationDate() ?></span></li>
                <li><i class="glyphicon glyphicon-time"></i> <span><? echo $nr->getCookingTime() . " min."?></span></li>
                <li><i class="glyphicon glyphicon-tags"></i> <span>People</span></li>
                <?php $nrid= $nr->getId(); echo '<li><select id="rating_'.$nrid.'">' ?>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                </select>
                <script>
                    <?php echo '$("#rating_' . $nrid . '")' ?>.barrating({
                        theme: 'fontawesome-stars',
                        readonly: true
                    });</script>
                </li>
            </ul>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-7 excerpet">
            <h3><a <? echo 'href="http://127.0.0.1/index.php?controller=recipe&action=details&id='. $nrid .'" title="">'; echo $nr->getName() ?></a></h3>
            <span class="label label-danger">Danger</span> <span class="label label-danger">Danger</span>
            <h5>Ingrédients : </h5>
            <?php foreach ($nr->getIngredients() as $ingredient) {
                echo '<p>-' . $ingredient->getQuantity() . ' ' . $ingredient->getUnit() . ' de ' . $ingredient->getName() . '</p>';
            } ?>
        </div>
        <span class="clearfix borda"></span>
    </article>
</section>