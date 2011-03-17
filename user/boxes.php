<?php

/**
 * User defined box configuration of the "vector" DokuWiki template
 *
 * If you want to add/remove some boxes, have a look at the comments/examples
 * and the DocBlock of {@link _vector_renderBoxes()}, main.php
 *
 * To change the non-box related config, use the admin webinterface of DokuWiki.
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


//note: The boxes will be rendered in the order they were defined. Means:
//      first box will be rendered first, last box will be rendered at last.



//Languages/translations provided via Andreas Gohr's translation plugin,
//see <http://www.dokuwiki.org/plugin:translation>
if (file_exists(DOKU_PLUGIN."translation/syntax.php") &&
    !plugin_isdisabled("translation")){
    $translation = &plugin_load("syntax", "translation");
    $_vector_boxes["p-lang"]["headline"] = $lang["vector_translations"];
    $_vector_boxes["p-lang"]["xhtml"]    = $translation->_showTranslations();
}




//examples: remove comments to see what is happening
/*
$_vector_boxes["example1"]["headline"] = "Hello World!";
$_vector_boxes["example1"]["xhtml"] = "DokuWiki with vector... <em>rules</em>!";
*/


/*
//QR-Code of the current page (powered by <http://QR-Server.com/api/>)
$_vector_boxes["qrcode"]["headline"] = "QR-Code";
$_vector_boxes["qrcode"]["xhtml"] = '<img src="http://api.qrserver.com/v1/create-qr-code/?data='.urlencode(wl(cleanID(getId()), false, true, "&")).'&amp;size=135x135" style="margin:0.5em 0 0.3em -0.2em;" alt="QR-Code: '.wl(cleanID(getId()), false, true).'" title="QR-Code: '.wl(cleanID(getId()), false, true).'" /><p style="font-size:6px !important;margin:0;padding:0;color:#aaa;"><a href="http://goqr.me/" style="color:#aaa;">QR Code</a> by <a href="http://qrserver.com/" style="color:#aaa;">QR-Server</a></p>';
*/


/*
$_vector_boxes["example2"]["headline"] = "Some links";
$_vector_boxes["example2"]["xhtml"] =  "<ul>\n"
                                      ."  <li><a href=\"".wl(cleanID(getId()), array("do" => "backlink"))."\" rel=\"nofollow\">".hsc($lang["vector_toolbxdef_whatlinkshere"])."</a></li>\n" //we might use tpl_actionlink("backlink", "", "", hsc($lang["vector_toolbxdef_whatlinkshere"]), true), but it would be the only toolbox link where this is possible... therefor I don't use it to be consistent
                                      ."  <li><a href=\"http://www.example.com\">Example link</a></li>\n"
                                      ."  <li><a href=\"".wl(cleanID(getId()), array("rev" => 0, "vecdo" => "cite"))."\" rel=\"nofollow\">Cite newest version</a></li>\n"
                                      ."</ul>";
*/


/*
$_vector_boxes["example3"]["headline"] = "Buttons";
$_vector_boxes["example3"]["xhtml"] = "<a href=\"http://andreas-haerter.com/donate/vector/\" title=\"Donate\" target=\"_blank\"><img src=\"".DOKU_TPL."static/img/button-donate.gif\" width=\"80\" height=\"15\" alt=\"Donate\" border=\"0\" /></a>";
*/


/*
//include the content of another wiki page (you have to create it first, for
//sure. In this example, the page "wiki:your_page_here" is used)
$_vector_boxes["example4"]["headline"] = "wiki:your_page_here";
$_vector_boxes["example4"]["xhtml"] = tpl_include_page("wiki:your_page_here", false);
*/

