<?php

/**
 * Default button configuration of the "vector" DokuWiki template
 *
 *
 * LICENSE: This file is open source software (OSS) and may be copied under
 *          certain conditions. See COPYING file for details or try to contact
 *          the author(s) of this file in doubt.
 *
 * @license GPLv2 (http://www.gnu.org/licenses/gpl2.html)
 * @author ARSAVA <dokuwiki@dev.arsava.com>
 * @link https://www.dokuwiki.org/template:vector
 * @link https://www.dokuwiki.org/devel:configuration
 */



/******************************************************************************
 ********************************  ATTENTION  *********************************
         DO NOT MODIFY THIS FILE, IT WILL NOT BE PRESERVED ON UPDATES!
 ******************************************************************************
  If you want to add some own buttons, have a look at the README of this
  template and "/user/buttons.php". You have been warned!
 *****************************************************************************/


//check if we are running within the DokuWiki environment
if (!defined("DOKU_INC")){
    die();
}


//note: The buttons will be rendered in the order they were defined. Means:
//      first button will be rendered first, last button will be rendered at
//      last.


//RSS recent changes button
$_vector_btns["rss"]["img"]      = DOKU_TPL."static/img/button-rss.png";
$_vector_btns["rss"]["href"]     = DOKU_BASE."feed.php";
$_vector_btns["rss"]["width"]    = 80;
$_vector_btns["rss"]["height"]   = 15;
$_vector_btns["rss"]["title"]    = $lang["vector_recentchanges"];
$_vector_btns["rss"]["nofollow"] = true;


//"vector for DokuWiki" button
$_vector_btns["vecfdw"]["img"]      = DOKU_TPL."static/img/button-vector.png";
$_vector_btns["vecfdw"]["href"]     = "https://www.dokuwiki.org/template:vector";
$_vector_btns["vecfdw"]["width"]    = 80;
$_vector_btns["vecfdw"]["height"]   = 15;
$_vector_btns["vecfdw"]["title"]    = $lang["vector_mdtemplatefordw"];
$_vector_btns["vecfdw"]["nofollow"] = !(cleanID(getID()) === "start");


//donation button
if (tpl_getConf("vector_donate")){
    $_vector_btns["donate"]["img"]      = DOKU_TPL."static/img/button-donate.gif";
    $_vector_btns["donate"]["href"]     = tpl_getConf("vector_donate_url");
    $_vector_btns["donate"]["width"]    = 80;
    $_vector_btns["donate"]["height"]   = 15;
    $_vector_btns["donate"]["title"]    = $lang["vector_donate"];
    $_vector_btns["donate"]["nofollow"] = true;
}


//DokuWiki button
$_vector_btns["dw"]["img"]      = DOKU_TPL."static/img/button-dw.png";
$_vector_btns["dw"]["href"]     = "https://www.dokuwiki.org/";
$_vector_btns["dw"]["width"]    = 80;
$_vector_btns["dw"]["height"]   = 15;
$_vector_btns["dw"]["title"]    = "DokuWiki";
$_vector_btns["dw"]["nofollow"] = !(cleanID(getID()) === "start");


//W3C (X)HTML validator button
$_vector_btns["valid_xhtml"]["img"]      = DOKU_TPL."static/img/button-xhtml.png";
$_vector_btns["valid_xhtml"]["href"]     = "http://validator.w3.org/check/referer";
$_vector_btns["valid_xhtml"]["width"]    = 80;
$_vector_btns["valid_xhtml"]["height"]   = 15;
$_vector_btns["valid_xhtml"]["title"]    = "Valid XHTML";
$_vector_btns["valid_xhtml"]["nofollow"] = true;



/******************************************************************************
 ********************************  ATTENTION  *********************************
         DO NOT MODIFY THIS FILE, IT WILL NOT BE PRESERVED ON UPDATES!
 ******************************************************************************
  If you want to add some own buttons, have a look at the README of this
  template and "/user/buttons.php". You have been warned!
 *****************************************************************************/

