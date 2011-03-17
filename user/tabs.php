<?php

/**
 * User defined tab configuration of the "vector" DokuWiki template
 *
 * If you want to add/remove some tabs, have a look at the comments/examples
 * and the DocBlock of {@link _vector_renderTabs()}, main.php
 *
 * To change the non-tab related config, use the admin webinterface of DokuWiki.
 *
 *
 * LICENSE: This file is open source software (OSS) and may be copied under
 *          certain conditions. See COPYING file for details or try to contact
 *          the author(s) of this file in doubt.
 *
 * @license GPLv2 (http://www.gnu.org/licenses/gpl2.html)
 * @author Andreas Haerter <development@andreas-haerter.com>
 * @link http://andreas-haerter.com/projects/dokuwiki-template-vector
 * @link http://www.dokuwiki.org/template:vector
 * @link http://www.dokuwiki.org/devel:configuration
 */


//check if we are running within the DokuWiki environment
if (!defined("DOKU_INC")){
    die();
}


/***************************** LEFT TAB NAVIGATION ****************************/

//note: The tabs will be rendered in the order they were defined. Means: first
//      tab will be rendered first, last tab will be rendered at last.


//nothing here right now











/*************************** RIGHT TAB NAVIGATION *****************************/

//note: The tabs will be rendered in the order they were defined. Means: first
//      tab will be rendered first, last tab will be rendered at last.


//nothing here right now












//examples: remove comments to see what is happening
//
//          Replace "$_vector_tabs_right" with "$_vector_tabs_left" to add
//          the tabs to the left instead the right tab navigation (and vice
//          versa)



/*
//(un)subscribe namespace tab
if (!empty($conf["useacl"]) &&
    !empty($conf["subscribers"]) &&
    !empty($loginname)){ //$loginname was defined within main.php
    if (empty($INFO["subscribedns"])){ //$INFO comes from DokuWiki core
        $_vector_tabs_right["ca-watchns"]["href"] = wl(cleanID(getId()), array("do" => "subscribens"), false, "&");
        $_vector_tabs_right["ca-watchns"]["text"] = $lang["btn_subscribens"]; //language comes from DokuWiki core
    }else{
        $_vector_tabs_right["ca-watchns"]["href"] = wl(cleanID(getId()), array("do" => "unsubscribens"), false, "&");
        $_vector_tabs_right["ca-watchns"]["text"] = $lang["btn_unsubscribens"]; //language comes from DokuWiki core
    }
}
*/


/*
//recent changes
if (!empty($conf["recent_days"])){
    $_vector_tabs_right["ca-recent"]["text"]     = $lang["btn_recent"]; //language comes from DokuWiki core
    $_vector_tabs_right["ca-recent"]["href"]     = wl("", array("do" => "recent"), false, "&");
    $_vector_tabs_right["ca-recent"]["nofollow"] = true;
}
*/


/*
//link
$_vector_tabs_right["tab-urlexample"]["text"]  = "Creator";
$_vector_tabs_right["tab-urlexample"]["href"]  = "http://andreas-haerter.com";
*/


/*
//link with rel="nofollow", see http://www.wikipedia.org/wiki/Nofollow for info
$_vector_tabs_right["tab-urlexample2"]["text"]     = "Search the web";
$_vector_tabs_right["tab-urlexample2"]["href"]     = "http://www.google.com/search?q=dokuwiki";
$_vector_tabs_right["tab-urlexample2"]["nofollow"] = true;
*/


/*
//internal wiki link
$_vector_tabs_right["tab-wikilinkexample"]["text"]      = "Home";
$_vector_tabs_right["tab-wikilinkexample"]["wiki"]      = ":start";
$_vector_tabs_right["tab-wikilinkexample"]["accesskey"] = "H"; //accesskey is optional
*/


/*
//ODT plugin: export tab
//see <http://www.dokuwiki.org/plugin:odt> for info
if (file_exists(DOKU_PLUGIN."odt/syntax.php") &&
    !plugin_isdisabled("odt")){
    $_vector_tabs_left["ca-export-odt"]["text"]     = $lang["vector_exportodt"];
    $_vector_tabs_left["ca-export-odt"]["href"]     = wl(cleanID(getId()), array("do" => "export_odt"), false, "&");
    $_vector_tabs_left["ca-export-odt"]["nofollow"] = true;
}
*/


/*
//dw2pdf or html2pdf plugin: export tab
//see <http://www.dokuwiki.org/plugin:dw2pdf> and
//<http://www.dokuwiki.org/plugin:html2pdf> for info
if ((file_exists(DOKU_PLUGIN."dw2pdf/action.php") &&
     !plugin_isdisabled("dw2pdf")) ||
    (file_exists(DOKU_PLUGIN."html2pdf/action.php") &&
     !plugin_isdisabled("html2pdf"))){
    $_vector_tabs_left["ca-export-pdf"]["text"]     = $lang["vector_exportpdf"];
    $_vector_tabs_left["ca-export-pdf"]["href"]     = wl(cleanID(getId()), array("do" => "export_pdf"), false, "&");
    $_vector_tabs_left["ca-export-pdf"]["nofollow"] = true;
}
*/
