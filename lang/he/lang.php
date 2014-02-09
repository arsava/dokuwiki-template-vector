<?php

/**
 * Hebrew language for the "vector" DokuWiki template
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
 * LICENSE: This file is open source software (OSS) and may be copied under
 *          certain conditions. See COPYING file for details or try to contact
 *          the author(s) of this file in doubt.
 *
 * @license GPLv2 (http://www.gnu.org/licenses/gpl2.html)
 * @author Dave
 * @link https://www.dokuwiki.org/template:vector
 * @link https://www.dokuwiki.org/config:lang
 * @link https://www.dokuwiki.org/devel:configuration
 */


//check if we are running within the DokuWiki environment
if (!defined("DOKU_INC")){
    die();
}

//tabs, personal tools and special links
$lang["vector_article"] = "îàîø";
$lang["vector_discussion"] = "ùéçä";
$lang["vector_read"] = "÷øéàä";
$lang["vector_edit"] = "òøéëä";
$lang["vector_create"] = "éöéøä";
$lang["vector_userpage"] = "ãó îùúîù";
$lang["vector_specialpage"] = "ãôéí îéåçãéí";
$lang["vector_mytalk"] = "äùéçä ùìé";
$lang["vector_exportodt"] = "éöåà ì-ODT";
$lang["vector_exportpdf"] = "éöåà ì-PDF";
$lang["vector_subscribens"] = "øéùåí ìùéðåééí áãó"; //original DW lang $lang["btn_subscribens"] is simply too long for common tab configs
$lang["vector_unsubscribens"] = "áéèåì øéùåí ìùéðåééí áãó";  //original DW lang $lang["btn_unsubscribens"] is simply too long for common tab configs
$lang["vector_translations"] = "ùôåú";

//headlines for the different bars and boxes
$lang["vector_navigation"] = "ðéååè";
$lang["vector_toolbox"] = "úéáú ëìéí";
$lang["vector_exportbox"] = "äãôñä/éöåà";
$lang["vector_qrcodebox"] = "÷åã QR";
$lang["vector_inotherlanguages"] = "ùôåú";
$lang["vector_printexport"] = "äãôñä/éöåà";
$lang["vector_personnaltools"] = "ëìéí àéùééí";

//buttons
$lang["vector_btn_go"] = "äîùê";
$lang["vector_btn_search"] = "çéôåù";
$lang["vector_btn_search_title"] = "çéôåù è÷ñè æä";

//exportbox ("print/export")
$lang["vector_exportbxdef_print"] = "âøñú äãôñä";
$lang["vector_exportbxdef_downloadodt"] = "äåøãä ë-ODT";
$lang["vector_exportbxdef_downloadpdf"] = "äåøãä ë-PDF";

//default toolbox
$lang["vector_toolbxdef_whatlinkshere"] = "ãôéí äî÷åùøéí ìëàï";
$lang["vector_toolbxdef_upload"] = "äòìàú ÷åáõ";
$lang["vector_toolbxdef_siteindex"] = "àéðã÷ñ àúø";
$lang["vector_toolboxdef_permanent"] = "÷éùåø ÷áåò";
$lang["vector_toolboxdef_cite"] = "öéèåè ãó æä";

//qr code box
$lang["vector_qrcodebox_qrcode"] = "÷åã QR";
$lang["vector_qrcodebox_genforcurrentpage"] = "ðåöø ìãó æä";
$lang["vector_qrcodebox_urlofcurrentpage"] = "ãó ðåëçé ë÷åã QR (ñøé÷ä ìöôééä áîëùéøéí ðééãéí)";

//cite this article
$lang["vector_cite_bibdetailsfor"] = "îéãò áéáìéåâøôé òì";
$lang["vector_cite_pagename"] = "ùí äãó";
$lang["vector_cite_author"] = "îçáø";
$lang["vector_cite_publisher"] = "îôøñí";
$lang["vector_cite_dateofrev"] = "úàøéê ùì ùéðåé æä";
$lang["vector_cite_dateretrieved"] = "úàøéê àçæåø";
$lang["vector_cite_permurl"] = "÷éùåø ÷áåò";
$lang["vector_cite_pageversionid"] = "÷åã æéäåé âøñú ãó";
$lang["vector_cite_citationstyles"] = "ñâðåðåú öéèåè òáåø";
$lang["vector_cite_checkstandards"] = "àðà æëøå ì÷øåà àú îãøéê äñâðåï, îãøéê äú÷ï àå îãøéê ä÷ååéí äîðçéí ìúçáéø îãåé÷ ëãé ìäúàéí àú äöøëéí ùìëí.";
$lang["vector_cite_latexusepackagehint"] = "ëàùø îùúîùéí áÎURL îçáéìú LaTeX (áàîöòåú ëúéáú \usepackage{url} áî÷åí ëìùäå áîáåà), äîðéáä ëúåáåú àéðèøðè äîòåöáåú èåá éåúø, éù ìäòãéó àú ãøê äëúéáä äáàä:";
$lang["vector_cite_retrieved"] = "àåçæø";
$lang["vector_cite_from"] = "î-";
$lang["vector_cite_in"] = "á-";
$lang["vector_cite_accessed"] = "ðñ÷ø";
$lang["vector_cite_cited"] = "îöåèè";
$lang["vector_cite_lastvisited"] = "ðñ÷ø ìàçøåðä";
$lang["vector_cite_availableat"] = "æîéï á-";
$lang["vector_cite_discussionpages"] = "ãôé ùéçåú ùì ãå÷å-ååé÷é";
$lang["vector_cite_markup"] = "òìééä";
$lang["vector_cite_result"] = "úåöàä";
$lang["vector_cite_thisversion"] = "âøñä æå";

//other
$lang["vector_search"] = "çéôåù";
$lang["vector_accessdenied"] = "äâéùä ðãçúä";
$lang["vector_fillplaceholder"] = "àðà îìàå àå áèìå î÷åí ùîåø æä";
$lang["vector_donate"] = "úøåîä";
$lang["vector_mdtemplatefordw"] = "úáðéú vector ìãå÷å-ååé÷é";
$lang["vector_recentchanges"] = "ùéðåééí àçøåðéí";
