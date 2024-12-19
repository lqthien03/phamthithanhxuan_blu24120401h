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
                    <?= $func->getImage(['class' => 'lazy', 'sizes' => '150x150x1', 'isWatermark' => false, 'prefix' => 'product', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['icon'], 'alt' => $v['name' . $lang]]) ?>
                    <?= $func->getImage(['class' => 'lazy', 'sizes' => '200x700x1', 'isWatermark' => false, 'prefix' => 'product', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                </div>
                <div class="product-box-info">
                    <h2 class="product-name text-split-2"><?= $v['name' . $lang] ?></h2>
                    <p class="product-desc text-split-10"><?= $v['desc' . $lang] ?></p>
                </div>

            </div>
            <div class="btn-group">
                <div class="btn-detail">
                    <i class="bi bi-chevron-up"></i>
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
</div>