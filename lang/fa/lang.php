<?php

/**
 * Persian language for the "vector" DokuWiki template
 *
 * If your language is not/only partially translated or you found an error/typo,
 * have a look at the following files:
 * - /lib/tpl/vector/lang/<your lang>/lang.php
 * - /lib/tpl/vector/lang/<your lang>/settings.php
 * If they are not existing, copy and translate the English ones (hint: looking
 * at <http://[your lang].wikipedia.org> might be helpful).
 *
 * Don't forget to mail your translation to ARSAVA <dokuwiki@dev.arsava.com>.
 * Thanks! :-D
 *
 *
 * LICENSE: This file is free software and may be copied under
 *          certain conditions. See COPYING file for details or try to contact
 *          the author(s) of this file in doubt.
 *
 * @license GPLv2 (http://www.gnu.org/licenses/gpl2.html)
 * @author Salman Mohammadi <salman@shimool.org>
 * @link https://www.dokuwiki.org/template:vector
 * @link https://www.dokuwiki.org/config:lang
 * @link https://www.dokuwiki.org/devel:configuration
 */


//check if we are running within the DokuWiki environment
if (!defined("DOKU_INC")){
    die();
}

//tabs, personal tools and special links
$lang["vector_article"] = "مقاله";
$lang["vector_discussion"] = "بحث";
$lang["vector_read"] = "خواندن";
$lang["vector_edit"] = "ویرایش";
$lang["vector_create"] = "ساختن";
$lang["vector_userpage"] = "صفحه‌ی کاربر";
$lang["vector_specialpage"] = "صفحه‌های ویژه";
$lang["vector_mytalk"] = "گفتگوی کم";
$lang["vector_exportodt"] = "بارگیری به صورت ODT";
$lang["vector_exportpdf"] = "بارگیری به صورت PDF";
$lang["vector_subscribens"] = "Subscribe NS Changes"; //original DW lang $lang["btn_subscribens"] is simply too long for common tab configs
$lang["vector_unsubscribens"] = "Unsubscribe NS Changes";  //original DW lang $lang["btn_unsubscribens"] is simply too long for common tab configs
$lang["vector_translations"] = "زبان‌ها";

//headlines for the different bars and boxes
$lang["vector_navigation"] = "ناوبری";
$lang["vector_toolbox"] = "جعبه ابزار";
$lang["vector_exportbox"] = "چاپ/برون‌بری";
$lang["vector_inotherlanguages"] = "زبان‌ها";
$lang["vector_printexport"] = "چاپ/برون‌بری";
$lang["vector_personnaltools"] = "ابزارهای شخصی";

//buttons
$lang["vector_btn_go"] = "برو";
$lang["vector_btn_search"] = "جست‌و‌جو";
$lang["vector_btn_search_title"] = "جست‌و‌جو برای این متن";

//exportbox ("print/export")
$lang["vector_exportbxdef_print"] = "نسخه‌ی قابل چاپ";
$lang["vector_exportbxdef_downloadodt"] = "بارگیری به صورت ODT";
$lang["vector_exportbxdef_downloadpdf"] = "بارگیری به صورت PDF";

//default toolbox
$lang["vector_toolbxdef_whatlinkshere"] = "پیوندهای به این صفحه";
$lang["vector_toolbxdef_upload"] = "بارگذاری پرونده";
$lang["vector_toolbxdef_siteindex"] = "شاخص وب‌گاه";
$lang["vector_toolboxdef_permanent"] = "پیوند پایدار";
$lang["vector_toolboxdef_cite"] = "یادکرد این صفحه";

//cite this article
$lang["vector_cite_bibdetailsfor"] = "جزییات کتاب‌شناسی برای";
$lang["vector_cite_pagename"] = "نام صفحه";
$lang["vector_cite_author"] = "نویسنده";
$lang["vector_cite_publisher"] = "منتشر کننده";
$lang["vector_cite_dateofrev"] = "تاریخ آخرین بازبینی";
$lang["vector_cite_dateretrieved"] = "تاریخ بازیابی";
$lang["vector_cite_permurl"] = "پیوند دایمی";
$lang["vector_cite_pageversionid"] = "شناسه ویرایش صفحه";
$lang["vector_cite_citationstyles"] = "شیوه‌های یادکرد برای";
$lang["vector_cite_checkstandards"] = "لطفاُ به یاد داشته باشید که برای سینتکس دقیق که مطابق با نیازهای شما باشد، باید به دفترچه‌راهنمای شیوه، راهنماهای استاندارد و یا دیگر راهنماها مراجعه کنید";
$lang["vector_cite_latexusepackagehint"] = "When using the LaTeX package url (\usepackage{url} somewhere in the preamble), which tends to give much more nicely formatted web addresses, the following may be preferred";
$lang["vector_cite_retrieved"] = "بازبینی‌شده";
$lang["vector_cite_from"] = "از";
$lang["vector_cite_in"] = "در";
$lang["vector_cite_accessed"] = "بازبینی شده";
$lang["vector_cite_cited"] = "یاد شده";
$lang["vector_cite_lastvisited"] = "آخرین دیدار";
$lang["vector_cite_availableat"] = "موجود در";
$lang["vector_cite_discussionpages"] = "صفحه‌های گفتگوی دوکوویکی";
$lang["vector_cite_markup"] = "نشانه‌گذاری";
$lang["vector_cite_result"] = "نتیجه";
$lang["vector_cite_thisversion"] = "این ویرایش";

//other
$lang["vector_search"] = "جست‌و‌جو";
$lang["vector_accessdenied"] = "دسترسی محدود شده است";
$lang["vector_fillplaceholder"] = "Please fill this placeholder";
$lang["vector_donate"] = "اهدا کردن";
$lang["vector_mdtemplatefordw"] = "الگوی «وکتور» برای دوکوویکی";
$lang["vector_recentchanges"] = "تغییرهای اخیر";
