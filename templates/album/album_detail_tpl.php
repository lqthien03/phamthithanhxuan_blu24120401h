<div id="fullpage" class="fullpage-wrapper">
    <div class="slides item-box-album-dettail">
        <div class="title-main"><span><?= $rowDetail['name' . $lang] ?></span></div>

        <div class="content-main-album">

            <?php if (isset($rowDetailPhoto) && count($rowDetailPhoto) > 0) { ?>

                <div class="row flex-cus">

                    <?php foreach ($rowDetailPhoto as $k => $v) { ?>

                        <div class="pb-4 col-6 col-md-3 col-sm-4 mg-cus">

                            <div class="box-product" data-aos="fade-up" data-aos-duration="1000">

                                <p class="pic-product">

                                    <a class="album-image scale-img mb-0" data-fancybox="gallery" data-src="<?= ASSET . UPLOAD_PRODUCT_L . $v['photo'] ?>" data-caption="" title="<?= $rowDetail['name' . $lang] ?>">

                                        <img class="lazy w-100" onerror="this.src='<?= THUMBS ?>/440x300x1/assets/images/noimage.png';" data-src="<?= THUMBS ?>/440x300x1/<?= UPLOAD_PRODUCT_L . $v['photo'] ?>" alt="<?= $rowDetail['name' . $lang] ?>" title="<?= $rowDetail['name' . $lang] ?>" />

                                    </a>

                                </p>

                            </div>

                        </div>

                    <?php } ?>

                </div>

            <?php } ?>

        </div>
    </div>
    <div class="slides wrap-tintuc">
        <div class="box-tintuc">
            <div class="left-map">
                <?= $addons->set('footer-map', 'footer-map', 1); ?>
            </div>
            <div class="right-tintuc">
                <div class="slick_tintuc">
                    <?php foreach ($news as $v) { ?>
                        <div class="tintuc-item">
                            <h3 class="name-tintuc text-split-1"><?= $v['name' . $lang] ?></h3>
                            <p class="desc-tintuc text-split-3"><?= $v['desc' . $lang] ?></p>
                        </div>
                    <?php }
                    ?>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="footer-article">
                <div class="wrap-content padding-top-bottom d-flex justify-content-between">
                    <div class="footer-news">
                        <h3 class="footer-name"><?= $footer['name' . $lang] ?></h3>
                    </div>
                    <div class="footer-news">
                        <h3 class="title-footer">Thông tin</h3>
                        <div class="footer-info">
                            <?= $func->decodeHtmlChars($footer['content' . $lang]) ?>
                        </div>
                    </div>

                    <div class="footer-news">
                        <h3 class="title-footer">Chính sách</h3>
                        <ul class="footer-ul d-flex flex-wrap justify-content-between">
                            <?php foreach ($policy as $v) { ?>
                                <li><a class=" text-decoration-none " href="<?= $v[$sluglang] ?>"
                                        title="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="footer-news">
                        <h3 class="title-footer">FANPAGE</h3>
                        <?= $addons->set('fanpage-facebook', 'fanpage-facebook', 1); ?>

                    </div>

                </div>

            </div>
            <div class="footer-powered">
                <div class="wrap-content">
                    <div class="row text-align-center">
                        <div class="footer-copyright col-md-6">Copyright © 2024 <?= $copyright['name' . $lang] ?>. Designed by
                            <a href="https://blueweb.com.vn/" class=" text-decoration-none"
                                title="Blueweb.com.vn">Blueweb.com.vn</a>
                        </div>
                        <div class="footer-statistic col-md-6">
                            <span><?= dangonline ?>: <?= $online ?></span>
                            <span><?= homnay ?>: <?= $counter['today'] ?></span>
                            <span><?= trongtuan ?>: <?= $counter['week'] ?></span>
                            <span><?= trongthang ?>: <?= $counter['month'] ?></span>
                            <span><?= tongtruycap ?>: <?= $counter['total'] ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>