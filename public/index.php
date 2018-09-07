<?php require_once("../resources/config.php") ?>

<?php include("../resources/templates/front/header.php") ?>
<?php // include(TEMPLATE_FRONT . DS . "header.php")?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <?php include("../resources/templates/front/side_nav.php") ?>
            </div>

            <div class="col-md-9">

                <div class="row carousel-holder">

                    <?php include("../resources/templates/front/slider.php") ?>

                </div>

                <div class="row">
                    <?php
                        get_products();

                    ?>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <h4><a href="#">Like this template?</a>
                        </h4>
                        <p>If you like this template, then check out <a target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">this tutorial</a> on how to build a working review system for your online store!</p>
                        <a class="btn btn-primary" target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">View Tutorial</a>
                    </div>

                </div>

            </div>

        </div>

    </div>


<?php include("../resources/templates/front/footer.php") ?>
