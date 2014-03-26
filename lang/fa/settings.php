<?php

/**
 * Persian language for the Config Manager
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

//user pages
$lang["vector_userpage"]    = "از صفحه‌ی کاربر استفاده شود؟";
$lang["vector_userpage_ns"] = "اگر بله، از :namespace: زیر به عنوان ریشه برای صفحه‌های کاربرها استفاده کن:";

//discussion pages
$lang["vector_discuss"]    = "از وب‌گاه‌های/برگه‌های بحث استفاده شود؟";
$lang["vector_discuss_ns"] = "اگر بله، از :namespace: زیر به عنوان ریشه یرای صفحه‌های بحث استفاده کن:";

//site notice
$lang["vector_sitenotice"]          = "آیا از اعلامیه‌ی سراسری در وب‌گاه استفاده شود؟";
$lang["vector_sitenotice_location"] = ":اگر بله، از صفحه‌ی ویکی زیر برای اعلامیه‌ی سراسری در وب‌گاه استفاده کن";

//navigation
$lang["vector_navigation"]           = "ناوبری نشان داده شود؟";
$lang["vector_navigation_location"]  = ":اگر بله، از صفحه‌ی ویکی زیر برای ناوبری استفاده کن";
$lang["vector_navigation_translate"] = "اگر بله و <a href=\"https://www.dokuwiki.org/plugin:translation\">Translation plugin</a> در دسترس بود: آیا آیا از ناوبری مخصوص هر زبان استفاده شود؟<br />صفحه‌ی ویرایش برای ناوبری(های) ترجمه شده به مانند روبرو است [مقدار 'vector_navigation_location']_[iso lang code] (مثلا ':wiki:navigation_fa').";

//exportbox ("print/export")
$lang["vector_exportbox"]          = "جعبه‌ی «چاپ/برون‌ریزی را نشان دهد؟?";
$lang["vector_exportbox_default"]  = "اگر بله، از جعبه‌ی «چاپ/برون‌ریزی» پیش‌فرض استفاده کند؟";
$lang["vector_exportbox_location"] = "اگر نمی‌خواهید از پیش‌فرض استفاده کند، از صفحه‌ی ویکی زیر به عنوان مکان «چاپ/برون‌ریزی» استفاده کند.";

//toolbox
$lang["vector_toolbox"]          = "جعبه‌ابزار را نشان دهد؟";
$lang["vector_toolbox_default"]  = "اگر بله، از جعبه‌‌ابزار  پیش‌فرض استفاده کند؟";
$lang["vector_toolbox_location"] = "اگر نمی‌خواهید از پیش‌فرض استفاده کند، از صفحه‌ی ویکی زیر به عنوان مکان جعبه‌ابزار استفاده کند.";

//custom copyright notice
$lang["vector_copyright"]          = "آیا اعلامیه‌ی حق‌کپی را نشان دهد؟";
$lang["vector_copyright_default"]  = "اگر بله، از اعلامیه‌ی حق کپی پیش‌فرض استفاده کند؟";
$lang["vector_copyright_location"] = "اگر نمی‌خواهید از پیش‌فرض استفاده کند، از صفحه‌ی ویکی زیر به عنوان اعلامیه‌ی حق‌کپی استفاده کند.";

//donation link/button
$lang["vector_donate"]          = "پیوند/دکمه‌ی اهدا را نشان دهد؟";
$lang["vector_donate_url"]      = "اگر نمی‌خواهید از پیش‌فرض استفاده کند، از پیوند زیر برای اهدا استفاده کند:.";

//TOC
$lang["vector_toc_position"] = "موقعیت فهرست مطالب";

//other stuff
$lang["vector_breadcrumbs_position"]  = "موقعیت ناوبری بردکرامب (اگر فعال شده باشد):";
$lang["vector_youarehere_position"]   = "موقعیت «شما اینجا هستید» (اگر فعال شده باشد):";
$lang["vector_cite_author"]           = "نام نویسنده در «یادکرد این مقاله«";
$lang["vector_loaduserjs"]            = "آیا 'vector/user/user.js' را بارگذاری کند؟";
$lang["vector_closedwiki"]            = " ویکی بسته‌شده (بیشتر پیوندها/برگه‌ها/جعبه‌ها تا زمانی که کاربر وارد حساب کاربری خود شود، به صورت مخفی است)";
