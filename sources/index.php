<?php
if (!defined('SOURCES'))
    die("Error");
/* static */
$popup = $cache->get("select name$lang, photo, link from #_photo where type = ? and act = ? and find_in_set('hienthi',status) limit 0,1", array('popup', 'photo_static'), 'fetch', 7200);
/* multi */
$gioithieu = $d->rawQueryOne("select name$lang,desc$lang,content$lang,photo from #_static where type = ? limit 0,1", array('gioi-thieu'));
$sanpham = $d->rawQuery("select id, name$lang,desc$lang,desc2$lang,content$lang,photo,icon, slugvi, slugen  from #_product where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status)", array('san-pham'));

/* SEO */
$seopage = $d->rawQueryOne("select * from #_seopage where type = ? limit 0,1", array('trang-chu'));
$seo->set('h1', $seopage['title' . $seolang]);
if (!empty($seopage['title' . $seolang]))
    $seo->set('title', $seopage['title' . $seolang]);
else
    $seo->set('title', $titleMain);
if (!empty($seopage['keywords' . $seolang]))
    $seo->set('keywords', $seopage['keywords' . $seolang]);
if (!empty($seopage['description' . $seolang]))
    $seo->set('description', $seopage['description' . $seolang]);
$seo->set('url', $func->getPageURL());
$imgJson = (!empty($seopage['options'])) ? json_decode($seopage['options'], true) : null;
if (!empty($seopage['photo'])) {
    if (empty($imgJson) || ($imgJson['p'] != $seopage['photo'])) {
        $imgJson = $func->getImgSize($seopage['photo'], UPLOAD_SEOPAGE_L . $seopage['photo']);
        $seo->updateSeoDB(json_encode($imgJson), 'seopage', $seopage['id']);
    }
    if (!empty($imgJson)) {
        $seo->set('photo', $configBase . THUMBS . '/' . $imgJson['w'] . 'x' . $imgJson['h'] . 'x2/' . UPLOAD_SEOPAGE_L . $seopage['photo']);
        $seo->set('photo:width', $imgJson['w']);
        $seo->set('photo:height', $imgJson['h']);
        $seo->set('photo:type', $imgJson['m']);
    }
}
