<div class="wrap_gioithieu_detail">
    <?php if (!empty($static)) { ?>
        <div class="title-main"><span><?= $static['name' . $lang] ?></span></div>
        <div class="content-main content-text w-clear"><?= $func->decodeHtmlChars($static['content' . $lang]) ?></div>
        <div class="share">
            <b><?= chiase ?>:</b>
            <div class="social-plugin w-clear">
                <?php
                $params = array();
                $params['oaid'] = $optsetting['oaidzalo'];
                echo $func->markdown('social/share', $params);
                ?>
            </div>
        </div>
    <?php } else { ?>
        <div class="alert alert-warning w-100" role="alert">
            <strong><?= dangcapnhatdulieu ?></strong>
        </div>
    <?php } ?>
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