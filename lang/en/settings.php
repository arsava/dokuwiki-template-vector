<?php

/**
 * English language for the Config Manager
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
 * @author ARSAVA <dokuwiki@dev.arsava.com>
 * @link https://www.dokuwiki.org/template:vector
 * @link https://www.dokuwiki.org/config:lang
 * @link https://www.dokuwiki.org/devel:configuration
 */


//check if we are running within the DokuWiki environment
if (!defined("DOKU_INC")){
    die();
}

//user pages
$lang["vector_userpage"]    = "Use User pages?";
$lang["vector_userpage_ns"] = "If yes, use following ':namespace:' as root for user pages:";

//discussion pages
$lang["vector_discuss"]    = "Use discussion tabs/sites?";
$lang["vector_discuss_ns"] = "If yes, use following ':namespace:' as root for discussions:";

//site notice
$lang["vector_sitenotice"]           = "Show site wide notice?";
$lang["vector_sitenotice_location"]  = "If yes, use following wiki page for the site wide notice:";
$lang["vector_sitenotice_translate"] = "If yes and <a href=\"https://www.dokuwiki.org/plugin:translation\">Translation plugin</a> available: load language specific site wide notice?<br />The wiki page of the translated site notice(s) is [value of 'vector_sitenotice_location']_[iso lang code] (e.g. ':wiki:site_notice_de').";

//navigation
$lang["vector_navigation"]           = "Show navigation?";
$lang["vector_navigation_location"]  = "If yes, use following wiki page as navigation:";
$lang["vector_navigation_translate"] = "If yes and <a href=\"https://www.dokuwiki.org/plugin:translation\">Translation plugin</a> available: load language specific navigation?<br />The wiki page of the translated navigation(s) is [value of 'vector_navigation_location']_[iso lang code] (e.g. ':wiki:navigation_de').";

//exportbox ("print/export")
$lang["vector_exportbox"]          = "Show 'print/export' box?";
$lang["vector_exportbox_default"]  = "If yes, use default 'print/export' box?";
$lang["vector_exportbox_location"] = "If not default, use following wiki page as 'print/export' box location:";

//toolbox
$lang["vector_toolbox"]          = "Show tools?";
$lang["vector_toolbox_default"]  = "If yes, use default tools?";
$lang["vector_toolbox_location"] = "If not default, use following wiki page as tools location:";

//qr code box
$lang["vector_qrcodebox"] = "Show box with QR Code of current wiki page URL (for easy URL transfer to mobile browser)?";

//custom copyright notice
$lang["vector_copyright"]           = "Show copyright notice?";
$lang["vector_copyright_default"]   = "If yes, use default copyright notice?";
$lang["vector_copyright_location"]  = "If not default, use following wiki page as copyright notice:";
$lang["vector_copyright_translate"] = "If not default and <a href=\"https://www.dokuwiki.org/plugin:translation\">Translation plugin</a> available: load language specific copyright notice?<br />The wiki page of the translated copyright notice(s) is [value of 'vector_copyright_location']_[iso lang code] (e.g. ':wiki:copyright_de').";

//donation link/button
$lang["vector_donate"]          = "Show donation link/button?";
$lang["vector_donate_url"]      = "Use following URL for donations:";

//TOC
$lang["vector_toc_position"] = "Table of contents (TOC) position";

//other stuff
$lang["vector_breadcrumbs_position"]  = "Position of breadcrumb navigation (if enabled):";
$lang["vector_youarehere_position"]   = "Position of 'You are here' navigation (if enabled):";
$lang["vector_cite_author"]           = "Author name in 'Cite this Article':";
$lang["vector_loaduserjs"]            = "Load 'vector/user/user.js'?";
$lang["vector_closedwiki"]            = "Closed wiki (most links/tabs/boxes are hidden until user is logged in)?";

