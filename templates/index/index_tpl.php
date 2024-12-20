<div id="fullpage" class="fullpage-wrapper">
    <div class="">
        <?php if (count($slider)) { ?>
            <div class="slideshow slides">
                <div class="owl-page owl-carousel owl-theme" data-items="screen:0|items:1" data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0" data-mousedrag="0" data-touchdrag="0" data-smartspeed="800" data-autoplayspeed="800" data-autoplaytimeout="5000" data-dots="0" data-animations="animate__fadeInDown, animate__backInUp, animate__rollIn, animate__backInRight, animate__zoomInUp, animate__backInLeft, animate__rotateInDownLeft, animate__backInDown, animate__zoomInDown, animate__fadeInUp, animate__zoomIn" data-nav="1" data-navcontainer=".control-slideshow">
                    <?php foreach ($slider as $v) { ?>
                        <div class="slideshow-item" owl-item-animation>
                            <a class="slideshow-image" href="<?= $v['link'] ?>" target="_blank" title="<?= $v['name' . $lang] ?>">
                                <picture>
                                    <source media="(max-width: 500px)" srcset="/<?= UPLOAD_PHOTO_L . $v['photo'] ?>">
                                    <img class="lazy w-100" onerror="this.src='<?= THUMBS ?>/1366x600x1/assets/images/noimage.png';" data-src="/<?= UPLOAD_PHOTO_L . $v['photo'] ?>" alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" />
                                </picture>
                            </a>
                        </div>
                    <?php } ?>
                </div>
                <div class="control-slideshow control-owl transition"></div>
            </div>
        <?php } ?>
    </div>
    <?php foreach ($sanpham as $k => $v) { ?>
        <div class="slides slide-<?= $k + 1 ?>">
            <div class="box-product">
                <div class="product-box-imgs">
                    <h2 class="product-desc2 text-split-2"><?= $v['desc2' . $lang] ?></h2>
                    <?= $func->getImage(['isLazy' => false, 'class' => 'lazy', 'sizes' => '200x700x1', 'isWatermark' => false, 'prefix' => 'product', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                </div>
                <div class="product-box-info">
                    <h2 class="product-name text-split-2"><?= $v['name' . $lang] ?></h2>
                    <p class="product-desc text-split-10"><?= $v['desc' . $lang] ?></p>
                </div>
            </div>
            <div class="btn-group">
                <div class="btn-detail">
                    <i class="bi bi-chevron-right"></i>
                    Xem thông tin
                </div>
                <div class="product-content">
                    <div class="box-left">
                        <div class="close-content"><i class="bi bi-x-lg"></i></div>
                        <p class="name-detail"><?= $v['name' . $lang] ?></0>
                    </div>
                    <p><?= $v['desc' . $lang] ?></p>
                </div>
            </div>
        </div>
    <?php }
    ?>
    <!-- giới thiệu -->
    <div class="slides wrap-gioithieu">
        <div class="left-gioithieu">
            <?= $func->getImage(['class' => 'lazy', 'sizes' => '', 'isWatermark' => false, 'prefix' => 'product', 'upload' => UPLOAD_NEWS_L, 'image' => $gioithieu['photo'], 'alt' => $vechungtoi['name' . $lang]]) ?>

        </div>
        <div class="mid-gioithieu">
            <h3 class="name-gioithieu"><?= $gioithieu['name' . $lang] ?></h3>
            <?= $func->decodeHtmlChars($gioithieu['desc' . $lang]) ?>
        </div>
        <div class="right-gioithieu">
            <h3 class="name-gioithieu2"><?= $gioithieu['name' . $lang] ?></h3>
            <?= $func->decodeHtmlChars($gioithieu['content' . $lang]) ?>
        </div>
    </div>

    <!-- tin tức -->
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