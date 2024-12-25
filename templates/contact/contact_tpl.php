<div class="wrap-contact">
    <div class="content-main wrap-content">
        <div class="contact-article row">
            <div class="contact-text col-lg-6">
                <div class="content_contactus"><?= htmlspecialchars_decode($lienhe['content' . $lang]) ?></div>
                <div class="product-description">
                    <?php foreach ($cauhoi as $k => $v) { ?>
                        <div class="product-tab">
                            <div class="product-tab-title">
                                <h2><?= $v['name' . $lang] ?></h2>
                            </div>
                            <div class="product-tab-description" style="display: none;">
                                <div class="product-tab-description_detail">
                                    <?= htmlspecialchars_decode($v['content' . $lang]) ?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class=" col-lg-6  position-relative">
                <div class="gr_pocontactus">
                    <form class="contact-form validation-contactcontact_us" novalidate method="post" action="" enctype="multipart/form-data">
                        <h2 class="text-ani-item">Liên hệ</h2>
                        <div class="row-20">
                            <div class="contact-input col-sm-12 col-20">
                                <div class="form-floating form-floating-cus">
                                    <input type="text" name="dataContact[fullname]" class="form-control text-sm" id="fullname-contact" placeholder="<?= hoten ?>" value="<?= $flash->get('fullname') ?>" required>
                                    <label for="fullname-contact"><?= hoten ?></label>
                                </div>
                                <div class="invalid-feedback"><?= vuilongnhaphoten ?></div>
                            </div>
                            <div class="contact-input col-sm-12 col-20">
                                <div class="form-floating form-floating-cus">
                                    <input type="number" name="dataContact[phone]" class="form-control text-sm" id="phone-contact" placeholder="<?= dienthoai ?>" value="<?= $flash->get('phone') ?>" required>
                                    <label for="phone-contact"><?= dienthoai ?></label>
                                </div>
                                <div class="invalid-feedback"><?= vuilongnhapsodienthoai ?></div>
                            </div>
                            <div class="contact-input col-sm-12 col-20">
                                <div class="form-floating form-floating-cus">
                                    <input type="text" class="form-control text-sm" id="address-contact" name="dataContact[address]" placeholder="<?= diachi ?>" value="<?= $flash->get('address') ?>" required />
                                    <label for="address-contact"><?= diachi ?></label>
                                </div>
                                <div class="invalid-feedback"><?= vuilongnhapdiachi ?></div>
                            </div>
                            <div class="contact-input col-sm-12 col-20">
                                <div class="form-floating form-floating-cus">
                                    <input type="email" class="form-control text-sm" id="email-contact" name="dataContact[email]" placeholder="Email" value="<?= $flash->get('email') ?>" required />
                                    <label for="email-contact">Email</label>
                                </div>
                                <div class="invalid-feedback"><?= vuilongnhapdiachiemail ?></div>
                            </div>
                        </div>
                        <div class="contact-input">
                            <div class="form-floating form-floating-cus">
                                <input type="text" class="form-control text-sm" id="subject-contact" name="dataContact[subject]" placeholder="<?= chude ?>" value="<?= $flash->get('subject') ?>" required />
                                <label for="subject-contact"><?= chude ?></label>
                            </div>
                            <div class="invalid-feedback"><?= vuilongnhapchude ?></div>
                        </div>
                        <div class="contact-input">
                            <div class="form-floating form-floating-cus">
                                <textarea class="form-control text-sm" id="content-contact" name="dataContact[content]" placeholder="<?= noidung ?>" required /><?= $flash->get('content') ?></textarea>
                                <label for="content-contact"><?= noidung ?></label>
                            </div>

                            <div class="invalid-feedback"><?= vuilongnhapnoidung ?></div>
                        </div>
                        <button class="gr_btniconsubmit">
                            <span>Gửi thông tin</span>
                            <div class="icon-svg"><svg viewBox="0 0 200 200">
                                    <path fill="currentColor"
                                        d="M100,68.3c-17.5,0-31.7,14.2-31.7,31.7s14.2,31.7,31.7,31.7s31.7-14.2,31.7-31.7S117.5,68.3,100,68.3z M100.7,114v-12.4 H85.3v-2.9h15.4V86.1l14,14L100.7,114z">
                                    </path>
                                    <circle class="before" fill="none" stroke="currentColor" cx="100" cy="100" r="90">
                                    </circle>
                                    <circle class="after" fill="none" stroke="currentColor" cx="100" cy="100" r="90">
                                    </circle>
                                </svg>
                            </div>
                            <input type="submit" class="gr_btniconsubmit" name="submit-contact" value=" ">

                        </button>
                        <input type="hidden" name="recaptcha_response_contact" id="recaptchaResponseContact">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contact-map"><?= $func->decodeHtmlChars($optsetting['coords_iframe']) ?></div>
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