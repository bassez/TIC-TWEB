<div style="background-color:white !important;border-width: 0 0 1px; padding: 10px;" class="navbar-default container">
        <div class="col-lg-12" style="margin-top: 30px;border-bottom: solid 1px;border-color: #F47321;">


            <div class="col-lg-12">
                <h1 style="color:#F47321;margin-top: 20px;"><?php echo $datas->getName(); ?></h1>
            </div>

            <? $path = $GLOBALS["uploaddir"] . $datas->getPictureId();?>
            <div class="col-lg-12" style="height: 20px;">
                <?php

                foreach ($datas->getTags() as $tag) {
                    $colors = ["Goût" => "danger", "Origine" => "info", "Type" => "warning"];
                    $color = "danger";
                    if (key_exists($tag->getTag(), $colors)) {
                        $color = $colors[$tag->getTag()];
                    }
                    echo '<span class="label label-'.$color.'">'.$tag->getValue(). '</span>';


                }
                ?>
            </div>


            <div class="col-lg-12" style="display: flex;">
                <select id="rating_<?echo $datas->getId()?>">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
        </div>

        <div class="col-lg-12" style="padding-bottom: 15px;border-bottom: solid 1px;border-color: #F47321;">

            <div class="thumbnail col-lg-3" style="margin-top:15px;margin-bottom:15px;height: 160px;background-image: url('<?echo $path;?>');background-size: 278px 155px;">

            </div>

            <div class="col-lg-9">
                <div class="col-lg-6" style="margin-top:15px;">
                    <div class="col-lg-12" style="display: flex">
                        <i style="color: #F47321 !important;line-height: 2.8;margin-right: 5px;" class="glyphicon glyphicon-fire" aria-hidden="true"></i><h4><?echo $datas->getDifficulty();?></h4>
                    </div>
                    <div class="col-lg-12" style="display: flex">
                        <i style="color: #F47321 !important;line-height: 2.8;margin-right: 5px;" class="glyphicon glyphicon-time" aria-hidden="true"></i><h4><?echo $datas->getCookingTime()." minutes";?></h4>
                    </div>
                    <div class="col-lg-12">
                        <h3 style="color: #F47321">Liste d'ingrédients :</h3>
                        <ul>
                            <?
                                foreach ($datas->getIngredients() as $ingredient) {
                                    echo '<li><span>' . $ingredient->getQuantity() . '' . $ingredient->getUnit() . ' de ' . $ingredient->getName() . '</span></li>';
                                }
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6" style="margin-top:15px">
                    <h3 style="color: #F47321" >Préparation :</h3>

                    <ul>
                        <?
                        $w = 1;
                        foreach ($datas->getSteps() as $step) {
                            echo '<li style="margin-top: 15px">Etape ' . $w . '</li><ul>';
                            echo '<li><span> ' . $step->getValue() . '</span></li></ul>';
                            $w++;
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-lg-12" style="">
            <form>
                <div class="col-lg-8">
                    <div class="col-lg-2 " style="margin-top: 15px;">
                        <div class="col-lg-12"><h5 style="color:#F47321">Pseudo:</h5></div>
                        <div class="col-lg-12" style="margin-top: 5px;"><h5 style="color:#F47321">Message:</h5></div>

                    </div>
                    <div class="col-lg-10"style="margin-top: 15px;">

                        <div class="col-lg-12">
                            <input type="text" class="form-control" placeholder="">
                        </div>
                        <div class="col-lg-12" style="margin-top: 15px;">
                            <textarea name="step[0]value" class="form-control" rows="5" id="comment" style="resize: none;margin-bottom: 15px"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="col-lg-3" style="margin-top: 14px;">
                        <h5 style="color:#F47321">Notes :</h5>
                    </div>
                    <div class="col-lg-9" style="margin-top: 20px;">
                        <select id="rating">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    <div class="col-lg-12" style="margin-top: 20px;display: flex;">
                        <h3><i style="color: #F47321 !important;line-height: 2.8;margin-right: 5px;" class="glyphicon glyphicon-envelope" aria-hidden="true"></i></h3>

                    </div>
                </div>
            </form>
        </div>
</div>


<script>

    $("#rating").barrating({
        theme: 'fontawesome-stars',
        readonly: false
    });

    <?php echo '$("#rating_' . $datas->getId() . '")' ?>.barrating({
        theme: 'fontawesome-stars',
        readonly: true
    });

</script>