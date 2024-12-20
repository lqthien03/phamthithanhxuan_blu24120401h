<!-- Js Config -->
<script type="text/javascript">
    var BLUEWEB_FRAMEWORK = BLUEWEB_FRAMEWORK || {};
    var CONFIG_BASE = '<?= $configBase ?>';
    var ASSET = '<?= ASSET ?>';
    var WEBSITE_NAME = '<?= (!empty($setting['name' . $lang])) ? addslashes($setting['name' . $lang]) : '' ?>';
    var TIMENOW = '<?= date("d/m/Y", time()) ?>';
    var SHIP_CART = <?= (!empty($config['order']['ship'])) ? 'true' : 'false' ?>;
    var RECAPTCHA_ACTIVE = <?= (!empty($config['googleAPI']['recaptcha']['active'])) ? 'true' : 'false' ?>;
    var RECAPTCHA_SITEKEY = '<?= $config['googleAPI']['recaptcha']['sitekey'] ?>';
    var GOTOP = ASSET + 'assets/images/top.png';
    var LANG = {
        'no_keywords': '<?= chuanhaptukhoatimkiem ?>',
        'delete_product_from_cart': '<?= banmuonxoasanphamnay ?>',
        'no_products_in_cart': '<?= khongtontaisanphamtronggiohang ?>',
        'ward': '<?= phuongxa ?>',
        'back_to_home': '<?= vetrangchu ?>',
        'thongbao': '<?= thongbao ?>',
        'dongy': '<?= dongy ?>',
        'dungluonghinhanhlon': '<?= dungluonghinhanhlon ?>',
        'dulieukhonghople': '<?= dulieukhonghople ?>',
        'banchiduocchon1hinhanhdeuplen': '<?= banchiduocchon1hinhanhdeuplen ?>',
        'dinhdanghinhanhkhonghople': '<?= dinhdanghinhanhkhonghople ?>',
        'huy': '<?= huy ?>',
    };
    var logo_img = '<?= $configBase ?><?= UPLOAD_PHOTO_L . $logo['photo'] ?>';
</script>

<!-- Js Files -->
<?php
$js->set("js/jquery.min.js");
$js->set("js/lazyload.min.js");
$js->set("bootstrap/bootstrap.js");
$js->set("js/wow.min.js");
$js->set("owlcarousel2/owl.carousel.js");
$js->set("holdon/HoldOn.js");
$js->set("confirm/confirm.js");
$js->set("simplenotify/simple-notify.js");
$js->set("easyticker/easy-ticker.js");
$js->set("fotorama/fotorama.js");
$js->set("photobox/photobox.js");
$js->set("fileuploader/jquery.fileuploader.min.js");
$js->set("datetimepicker/php-date-formatter.min.js");
$js->set("datetimepicker/jquery.mousewheel.js");
$js->set("datetimepicker/jquery.datetimepicker.js");
$js->set("js/jquery.pixelentity.shiner.min.js");
$js->set("js/jquery.lettering.js");
$js->set("js/jquery.textillate.js");
$js->set("js/comment.js");

$js->set("fancybox5/fancybox.umd.js");
$js->set("slick/slick.js");
$js->set("magiczoomplus/magiczoomplus.js");
$js->set("js/functions.js");
$js->set("mmenu/mmenu.js");
$js->set("aos/aos.js");
$js->set("toc/toc.js");
$js->set("js/apps.js");
echo $js->get();
?>

<?php if (!empty($config['googleAPI']['recaptcha']['active'])) { ?>
    <!-- Js Google Recaptcha V3 -->
    <script src="https://www.google.com/recaptcha/api.js?render=<?= $config['googleAPI']['recaptcha']['sitekey'] ?>">
    </script>
    <script type="text/javascript">
        grecaptcha.ready(function() {
            /* Newsletter */
            generateCaptcha('Newsletter', 'recaptchaResponseNewsletter');

            <?php if ($source == 'contact') { ?>
                /* Contact */
                generateCaptcha('contact', 'recaptchaResponseContact');
            <?php } ?>
        });
    </script>
<?php } ?>

<?php if (!empty($config['oneSignal']['active'])) { ?>
    <!-- Js OneSignal -->
    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
    <script type="text/javascript">
        var OneSignal = window.OneSignal || [];
        OneSignal.push(function() {
            OneSignal.init({
                appId: "<?= $config['oneSignal']['id'] ?>"
            });
        });
    </script>
<?php } ?>

<!-- Js Structdata -->
<?php include TEMPLATE . LAYOUT . "strucdata.php"; ?>

<!-- Js Addons -->
<?= $addons->set('script-main', 'script-main', 2); ?>
<?= $addons->get(); ?>

<!-- Js Body -->
<?= $func->decodeHtmlChars($setting['bodyjs']) ?>

<script type="text/javascript">
    $(document).ready(function() {
        $(".btn_toolbar").click(function() {
            $(this).toggleClass("active");
            $(".iconstoolbar").toggleClass("open");
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const selectElement = document.getElementById('hinhthuc-newsletter');
        const labelElement = document.querySelector('label[for="hinhthuc-newsletter"]');

        selectElement.addEventListener('change', function() {
            const selectedOptionText = selectElement.options[selectElement.selectedIndex].text;
            labelElement.textContent = selectedOptionText;
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('.group-tuvan').click(function() {
            $('#tuvan').val($(this).find('.tuvan-txt').html());
        })
    });
    if (isExist($('.group-tuvan'))) {
        $(".group-tuvan").click(function() {
            $('.group-tuvan').removeClass('active');

            $(this).closest('.group-tuvan').addClass('active');
        });
    }
</script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        $('#popup').modal('show');
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.title-effect').textillate({
            in: {
                effect: 'bounceIn'
            },
            out: {
                effect: 'bounceOut'
            },
            loop: true
        });

    });
</script>
<!-- <script>
    const slides = document.querySelectorAll(".slides");
    let currentIndex = 0; // Slide hiện tại

    // Hàm để chuyển slide
    function goToSlide(index) {
        if (index < 0 || index >= slides.length) return; // Giới hạn chỉ số
        slides.forEach((slide, i) => {
            slide.style.transform = `translateY(${(i - index) * 100}vh)`; // Dịch chuyển slide
        });
        currentIndex = index; // Cập nhật chỉ số hiện tại
    }

    // Lắng nghe sự kiện cuộn chuột
    let isScrolling = false;
    window.addEventListener("wheel", (e) => {
        if (isScrolling) return; // Ngăn cuộn liên tục
        isScrolling = true;

        if (e.deltaY > 0) {
            // Cuộn xuống
            goToSlide(currentIndex + 1);
        } else {
            // Cuộn lên
            goToSlide(currentIndex - 1);
        }

        setTimeout(() => (isScrolling = false), 800); // Khóa cuộn trong thời gian chuyển slide
    });

    // Khởi tạo vị trí ban đầu
    goToSlide(currentIndex);
</script> -->
<script>
    const slides = document.querySelectorAll(".slides");
    let currentIndex = 0; // Slide hiện tại
    let isScrolling = false;

    // Kiểm tra kích thước màn hình
    const mediaQuery = window.matchMedia("(min-width: 768px)");

    // Hàm để chuyển slide
    function goToSlide(index) {
        if (index < 0 || index >= slides.length) return; // Giới hạn chỉ số
        slides.forEach((slide, i) => {
            slide.style.transform = `translateY(${(i - index) * 100}vh)`; // Dịch chuyển slide
        });
        currentIndex = index; // Cập nhật chỉ số hiện tại
    }

    // Hàm xử lý sự kiện cuộn
    function handleWheelEvent(e) {
        if (isScrolling) return; // Ngăn cuộn liên tục
        isScrolling = true;

        if (e.deltaY > 0) {
            // Cuộn xuống
            goToSlide(currentIndex + 1);
        } else {
            // Cuộn lên
            goToSlide(currentIndex - 1);
        }

        setTimeout(() => (isScrolling = false), 800); // Khóa cuộn trong thời gian chuyển slide
    }

    // Kích hoạt hoặc hủy sự kiện cuộn theo kích thước màn hình
    function handleMediaChange(e) {
        if (e.matches) {
            // Kích thước >= 768px (desktop)
            window.addEventListener("wheel", handleWheelEvent);
            goToSlide(currentIndex); // Đặt vị trí ban đầu
        } else {
            // Kích thước < 768px (mobile)
            window.removeEventListener("wheel", handleWheelEvent);
            slides.forEach((slide) => {
                slide.style.transform = ""; // Reset vị trí
            });
        }
    }

    // Lắng nghe sự thay đổi kích thước màn hình
    mediaQuery.addEventListener("change", handleMediaChange);

    // Gọi hàm kiểm tra ngay khi tải trang
    handleMediaChange(mediaQuery);
</script>


<script>
    document.addEventListener("DOMContentLoaded", () => {
        const img = document.querySelector(".slides.slide-1 .box-product .product-box-imgs img");
        if (!img) return;

        let removeTimeout;

        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {

                        img.classList.add("animate");
                        img.classList.remove("reverse");
                        if (removeTimeout) {
                            clearTimeout(removeTimeout);
                        }
                    } else {
                        removeTimeout = setTimeout(() => {
                            img.classList.remove("animate");
                            img.classList.add("reverse");
                        }, 100);
                    }
                });
            }, {
                threshold: 0.5,
            }
        );
        observer.observe(img);
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const img = document.querySelector(".slides.slide-2 .box-product .product-box-imgs img");

        if (!img) return;

        let removeTimeout;

        const handleIntersection = (entries, observer) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    img.classList.add("fall");
                    img.classList.remove("reverse");
                    clearTimeout(removeTimeout);
                } else {
                    removeTimeout = setTimeout(() => {
                        img.classList.remove("fall");
                        img.classList.add("reverse");
                    }, 1000);
                }
            });
        };

        const observer = new IntersectionObserver(handleIntersection, {
            threshold: 0.5,
        });

        observer.observe(img);

    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const img = document.querySelector(".slides.slide-3 .box-product .product-box-imgs img");

        if (!img) return;

        let removeTimeout;

        const handleIntersection = (entries, observer) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    img.classList.add("fall");
                    img.classList.remove("reverse");
                    clearTimeout(removeTimeout);
                } else {
                    removeTimeout = setTimeout(() => {
                        img.classList.remove("fall");
                        img.classList.add("reverse");
                    }, 100);
                }
            });
        };

        const observer = new IntersectionObserver(handleIntersection, {
            threshold: 0.5,
        });

        observer.observe(img);
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const img = document.querySelector(".slides.slide-4 .box-product .product-box-imgs img");

        if (!img) return;

        let removeTimeout;

        const handleIntersection = (entries, observer) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    img.classList.add("fall");
                    img.classList.remove("reverse");
                    clearTimeout(removeTimeout);
                } else {
                    removeTimeout = setTimeout(() => {
                        img.classList.remove("fall");
                        img.classList.add("reverse");
                    }, 1000);
                }
            });
        };

        const observer = new IntersectionObserver(handleIntersection, {
            threshold: 0.5,
        });

        observer.observe(img);

    });
</script>