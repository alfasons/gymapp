
<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="<?= Yii::$app->request->baseUrl ?>/img/breadcrumb-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb-text">
                    <h2>Search</h2>
                    <div class="bt-option">
                        <a href="./index.html">Home</a>
                        <span>Search results</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Classes Section Begin -->
<section class="classes-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">

                    <h2><?php echo $count ? 'RESULTS' : 'NO RESULTS' ?></h2>
                </div>
            </div>
        </div>
        <div class = "row">
            <?php
            if ($count > 0) {
                foreach ($products as $product):
                    ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="class-item">
                            <div class="ci-pic">
                                <img src="<?php echo Yii::$app->request->baseUrl . '/uploads/' . $product['path'] ?>" alt="">
                            </div>
                            <div class="ci-text">
                                <span><?= $product['name'] ?></span>
                                <h5>kes <?= $product['price'] ?></h5>
                                <a href="#"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <?php
                endforeach;
            }else {
                echo 'No resuts';
            }
            ?>

        </div>
</section>
<!-- ChoseUs Section End -->