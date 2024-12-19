<?php
$nametype = "san-pham";
$config['product'][$nametype]['title_main'] = "Sản phẩm";
$config['product'][$nametype]['dropdown'] = true;
$config['product'][$nametype]['list'] = true;
$config['product'][$nametype]['check'] = array("noibat" => noibat, "hienthi" => hienthi);
$config['product'][$nametype]['view'] = true;
$config['product'][$nametype]['copy'] = true;
$config['product'][$nametype]['slug'] = true;
$config['product'][$nametype]['images'] = true;
$config['product'][$nametype]['show_images'] = true;
$config['product'][$nametype]['gallery'] = array(
    $nametype => array(
        "title_main_photo" => "Hình ảnh",
        "title_sub_photo" => hinhanh,
        "check_photo" => array("hienthi" => hienthi),
        "number_photo" => 2,
        "images_photo" => true,
        "avatar_photo" => true,
        "name_photo" => true,
        "width_photo" => 540,
        "height_photo" => 540,
        "thumb_photo" => '100x100x1',
        "img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.webp|.WEBP'
    )
);
$config['product'][$nametype]['desc'] = true;
$config['product'][$nametype]['desc2'] = true;
$config['product'][$nametype]['content'] = true;
$config['product'][$nametype]['content_cke'] = true;
$config['product'][$nametype]['seo'] = true;
$config['product'][$nametype]['icon'] = 135;
$config['product'][$nametype]['width_icon'] = 135;
$config['product'][$nametype]['height_icon'] = 100;
$config['product'][$nametype]['width'] = 270;
$config['product'][$nametype]['height'] = 270;
$config['product'][$nametype]['thumb'] = '100x100x1';
$config['product'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.webp|.WEBP';

/* Sản phẩm (List) */
$config['product'][$nametype]['title_main_list'] = danhmuccap1;
$config['product'][$nametype]['slug_list'] = true;
$config['product'][$nametype]['check_list'] = array("noibat" => noibat, "hienthi" => hienthi);
$config['product'][$nametype]['desc_list'] = true;
$config['product'][$nametype]['images_list'] = true;
$config['product'][$nametype]['show_images_list'] = true;
$config['product'][$nametype]['icon_list'] = true;
$config['product'][$nametype]['width_icon_list'] = 135;
$config['product'][$nametype]['height_icon_list'] = 100;
$config['product'][$nametype]['width_list'] = 270;
$config['product'][$nametype]['height_list'] = 270;
$config['product'][$nametype]['thumb_list'] = '100x100x1';
$config['product'][$nametype]['img_type_list'] = '.jpg|.gif|.png|.jpeg|.gif|.webp|.WEBP';
$config['product'][$nametype]['seo_list'] = true;

/* Sản phẩm (Cat) */
// $config['product'][$nametype]['title_main_cat'] = danhmuccap2;
// $config['product'][$nametype]['slug_cat'] = true;
// $config['product'][$nametype]['check_cat'] = array("noibat" => noibat, "hienthi" => hienthi);
// $config['product'][$nametype]['desc_cat'] = true;
// $config['product'][$nametype]['seo_cat'] = true;




// thiết kế 3d
$nametype = "album-anh";
$config['product'][$nametype]['title_main'] = "Album ảnh";
$config['product'][$nametype]['dropdown'] = false;
$config['product'][$nametype]['list'] = false;
$config['product'][$nametype]['cat'] = false;
$config['product'][$nametype]['check'] = array("noibat" => noibat, "hienthi" => hienthi);
$config['product'][$nametype]['view'] = true;
$config['product'][$nametype]['copy'] = true;
$config['product'][$nametype]['slug'] = true;
$config['product'][$nametype]['images'] = true;
$config['product'][$nametype]['show_images'] = true;
$config['product'][$nametype]['gallery'] = array(
    $nametype => array(
        "title_main_photo" => "Hình ảnh",
        "title_sub_photo" => hinhanh,
        "check_photo" => array("hienthi" => hienthi),
        "number_photo" => 2,
        "images_photo" => true,
        "avatar_photo" => true,
        "name_photo" => true,
        "width_photo" => 540,
        "height_photo" => 540,
        "thumb_photo" => '100x100x1',
        "img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.webp|.WEBP'
    )
);
$config['product'][$nametype]['seo'] = true;
$config['product'][$nametype]['width_icon'] = 135;
$config['product'][$nametype]['height_icon'] = 100;
$config['product'][$nametype]['width'] = 270;
$config['product'][$nametype]['height'] = 270;
$config['product'][$nametype]['thumb'] = '100x100x1';
$config['product'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.webp|.WEBP';

/* Dự án (List) */
$config['product'][$nametype]['title_main_list'] = danhmuccap1;
$config['product'][$nametype]['slug_list'] = true;
$config['product'][$nametype]['check_list'] = array("noibat" => noibat, "hienthi" => hienthi);
$config['product'][$nametype]['desc_list'] = true;
$config['product'][$nametype]['seo_list'] = true;

/* Dự án (Cat) */
$config['product'][$nametype]['title_main_cat'] = danhmuccap2;
$config['product'][$nametype]['slug_cat'] = true;
$config['product'][$nametype]['check_cat'] = array("noibat" => noibat, "hienthi" => hienthi);
$config['product'][$nametype]['desc_cat'] = true;
$config['product'][$nametype]['seo_cat'] = true;
