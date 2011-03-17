<?php

/**
 * Default options for the "vector" DokuWiki template
 *
 * Notes:
 * - In general, use the admin webinterface of DokuWiki to change config.
 * - To change the type of a config value, have a look at "metadata.php" in
 *   the same directory as this file.
 * - To change/translate the descriptions showed in the admin/configuration
 *   menu of DokuWiki, have a look at the file
 *   "/lib/tpl/vector/lang/<your lang>/settings.php". If it does not exists,
 *   copy and translate the English one. And don't forget to mail the
 *   translation to me, Andreas Haerter <development@andreas-haerter.com> :-D.
 * - To change the [tabs|boxes|buttons] configuration, have a look at
 *   "/user/[tabs|boxes|buttons].php".
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

//user pages
$conf["vector_userpage"]    = true; //TRUE: use/show user pages
$conf["vector_userpage_ns"] = ":wiki:user:"; //namespace to use for user page storage

//discussion pages
$conf["vector_discuss"]    = true; //TRUE: use/show discussion pages
$conf["vector_discuss_ns"] = ":talk:"; //namespace to use for discussion page storage

//site notice
$conf["vector_sitenotice"]          = true; //TRUE: use/show sitenotice
$conf["vector_sitenotice_location"] = ":wiki:site_notice"; //page/article used to store the sitenotice

//navigation
$conf["vector_navigation"]          = true; //TRUE: use/show navigation
$conf["vector_navigation_location"] = ":wiki:navigation"; //page/article used to store the navigation

//exportbox ("print/export")
$conf["vector_exportbox"]          = true; //TRUE: use/show exportbox
$conf["vector_exportbox_default"]  = true; //TRUE: use default exportbox (if exportbox is enabled at all)
$conf["vector_exportbox_location"] = ":wiki:exportbox"; //page/article used to store a custom exportbox

//toolbox
$conf["vector_toolbox"]          = true; //TRUE: use/show toolbox
$conf["vector_toolbox_default"]  = true; //TRUE: use default toolbox (if toolbox is enabled at all)
$conf["vector_toolbox_location"] = ":wiki:toolbox"; //page/article used to store a custom toolbox

//custom copyright notice
$conf["vector_copyright"]          = true; //TRUE: use/show copyright notice
$conf["vector_copyright_default"]  = true; //TRUE: use default copyright notice (if copyright notice is enabled at all)
$conf["vector_copyright_location"] = ":wiki:copyright"; //page/article used to store a custom copyright notice

//donation link/button
$conf["vector_donate"]          = true; //TRUE: use/show donation link/button
$conf["vector_donate_default"]  = true; //TRUE: use default donation link/button (if donation link is enabled at all)
$conf["vector_donate_url"]      = "http://andreas-haerter.com/donate/vector/paypal"; //custom donation URL instead of the default one

//TOC
$conf["vector_toc_position"] = "article"; //article: show TOC embedded within the article; "sidebar": show TOC near the navigation, left column

//other stuff
$conf["vector_mediamanager_embedded"] =  false; //TRUE: Show media manager surrounded by the common navigation/tabs and stuff
$conf["vector_breadcrumbs_position"]  = "bottom"; //position of breadcrumbs navigation ("top" or "bottom")
$conf["vector_youarehere_position"]   = "top"; //position of "you are here" navigation ("top" or "bottom")
if (!empty($_SERVER["HTTP_HOST"])){
  $conf["vector_cite_author"] = "Contributors of ".hsc($_SERVER["HTTP_HOST"]); //name to use for the author on the citation page (hostname included)
} else {
  $conf["vector_cite_author"] = "Anonymous Contributors"; //name to use for the author on the citation page
}
$conf["vector_loaduserjs"]            = false; //TRUE: vector/user/user.js will be loaded
$conf["vector_closedwiki"]            = false; //TRUE: hides most tabs/functions until user is logged in

