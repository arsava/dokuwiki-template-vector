<?php

/**
 * Types of the different option values for the "vector" DokuWiki template
 *
 * Notes:
 * - In general, use the admin webinterface of DokuWiki to change the config.
 * - To change/add configuration values to store, have a look at this file
 *   and the "default.php" in the same directory as this file.
 * - To change/translate the descriptions showed in the admin/configuration
 *   menu of DokuWiki, have a look at the file
 *   /lib/tpl/vector/lang/<your lang>/settings.php. If it does not exists,
 *   copy and translate the English one. Don't forget to mail your translation
 *   to ARSAVA <dokuwiki@dev.arsava.com>. Thanks! :-D
 * - To change the tab configuration, have a look at the "tabs.php" in the
 *   same directory as this file.
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


//check if we are running within the DokuWiki environment
if (!defined("DOKU_INC")){
    die();
}

//user pages
$meta["vector_userpage"]    = array("onoff");
$meta["vector_userpage_ns"] = array("string", "_pattern" => "/^:.{1,}:$/");

//discussion pages
$meta["vector_discuss"]    = array("onoff");
$meta["vector_discuss_ns"] = array("string", "_pattern" => "/^:.{1,}:$/");

//site notice
$meta["vector_sitenotice"]           = array("onoff");
$meta["vector_sitenotice_location"]  = array("string");
$meta["vector_sitenotice_translate"] = array("onoff");

//navigation
$meta["vector_navigation"]           = array("onoff");
$meta["vector_navigation_location"]  = array("string");
$meta["vector_navigation_translate"] = array("onoff");

//exportbox ("print/export")
$meta["vector_exportbox"]          = array("onoff");
$meta["vector_exportbox_default"]  = array("onoff");
$meta["vector_exportbox_location"] = array("string");

//toolbox
$meta["vector_toolbox"]          = array("onoff");
$meta["vector_toolbox_default"]  = array("onoff");
$meta["vector_toolbox_location"] = array("string");

//qr code box
$meta["vector_qrcodebox"] = array("onoff");

//custom copyright notice
$meta["vector_copyright"]           = array("onoff");
$meta["vector_copyright_default"]   = array("onoff");
$meta["vector_copyright_location"]  = array("string");
$meta["vector_copyright_translate"] = array("onoff");

//donation link/button
$meta["vector_donate"]     = array("onoff");
$meta["vector_donate_url"] = array("string", "_pattern" => "/^.{1,6}:\/{2}.+$/");

//TOC
$meta["vector_toc_position"] = array("multichoice", "_choices" => array("article", "sidebar"));

//other stuff
$meta["vector_breadcrumbs_position"]  = array("multichoice", "_choices" => array("top", "bottom"));
$meta["vector_youarehere_position"]   = array("multichoice", "_choices" => array("top", "bottom"));
$meta["vector_cite_author"]           = array("string");
$meta["vector_loaduserjs"]            = array("onoff");
$meta["vector_closedwiki"]            = array("onoff");

