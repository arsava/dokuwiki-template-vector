<?php

/**
 * Default box configuration of the "vector" DokuWiki template
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



/******************************************************************************
 ********************************  ATTENTION  *********************************
         DO NOT MODIFY THIS FILE, IT WILL NOT BE PRESERVED ON UPDATES!
 ******************************************************************************
  If you want to add some own boxes, have a look at the README of this
  template and "/user/boxes.php". You have been warned!
 *****************************************************************************/


//check if we are running within the DokuWiki environment
if (!defined("DOKU_INC")){
    die();
}


//note: The boxes will be rendered in the order they were defined. Means:
//      first box will be rendered first, last box will be rendered at last.


//hide boxes for anonymous clients (closed wiki)?
if (empty($conf["useacl"]) || //are there any users?
    $loginname !== "" || //user is logged in?
    !tpl_getConf("vector_closedwiki")){


    //navigation
    if (tpl_getConf("vector_navigation")){
        //headline
        $_vector_boxes["p-navigation"]["headline"] = $lang["vector_navigation"];

        //content
        if (empty($conf["useacl"]) ||
            auth_quickaclcheck(cleanID(tpl_getConf("vector_navigation_location"))) >= AUTH_READ){ //current user got access?
            //get the rendered content of the defined wiki article to use as custom navigation
            $interim = tpl_include_page(tpl_getConf("vector_navigation_location"), false);
            if ($interim === "" ||
                $interim === false){
                //creation/edit link if the defined page got no content
                $_vector_boxes["p-navigation"]["xhtml"] = "[&#160;".html_wikilink(tpl_getConf("vector_navigation_location"), hsc($lang["vector_fillplaceholder"]." (".tpl_getConf("vector_navigation_location").")"))."&#160;]<br />";
            }else{
                //the rendered page content
                $_vector_boxes["p-navigation"]["xhtml"] = $interim;
            }
        }
    }

    //table of contents (TOC) - show outside the article? (this is a dirty hack but often requested)
    if (tpl_getConf("vector_toc_position") === "sidebar"){
        //check if the current page got a TOC
        $toc = tpl_toc(true);
        if (!empty($toc)) {
            //headline
            $_vector_boxes["p-toc"]["headline"] = $lang["toc"]; //language comes from DokuWiki core

            //content
            $_vector_boxes["p-toc"]["xhtml"] = //get rid of some styles and the embedded headline
                                               str_replace(//search
                                                           array("<div class=\"tocheader toctoggle\" id=\"toc__header\">".$lang["toc"]."</div>", //language comes from DokuWiki core
                                                                 " class=\"toc\"",
                                                                 " id=\"toc__inside\""),
                                                           //replace
                                                           "",
                                                           //haystack
                                                           $toc);
        }
        unset($toc);
    }

    //exportbox ("print/export")
    if (tpl_getConf("vector_exportbox")){
        //headline
        $_vector_boxes["p-coll-print_export"]["headline"] = $lang["vector_exportbox"];

        //content
        if (tpl_getConf("vector_exportbox_default")){
            //define default, predefined exportbox
            $_vector_boxes["p-coll-print_export"]["xhtml"] =  "      <ul>\n";
            //ODT plugin
            //see <http://www.dokuwiki.org/plugin:odt> for info
            if (file_exists(DOKU_PLUGIN."odt/syntax.php") &&
                !plugin_isdisabled("odt")){
                $_vector_boxes["p-coll-print_export"]["xhtml"]  .= "        <li id=\"coll-download-as-odt\"><a href=\"".wl(cleanID(getId()), array("do" => "export_odt"))."\" rel=\"nofollow\">".hsc($lang["vector_exportbxdef_downloadodt"])."</a></li>\n";
            }
            //dw2pdf plugin
            //see <http://www.dokuwiki.org/plugin:dw2pdf> for info
            if (file_exists(DOKU_PLUGIN."dw2pdf/action.php") &&
                !plugin_isdisabled("dw2pdf")){
                $_vector_boxes["p-coll-print_export"]["xhtml"]  .= "        <li id=\"coll-download-as-rl\"><a href=\"".wl(cleanID(getId()), array("do" => "export_pdf"))."\" rel=\"nofollow\">".hsc($lang["vector_exportbxdef_downloadpdf"])."</a></li>\n";
            //html2pdf plugin
            //see <http://www.dokuwiki.org/plugin:html2pdf> for info
            } else if (file_exists(DOKU_PLUGIN."html2pdf/action.php") &&
                       !plugin_isdisabled("html2pdf")){
                $_vector_boxes["p-coll-print_export"]["xhtml"]  .= "        <li id=\"coll-download-as-rl\"><a href=\"".wl(cleanID(getId()), array("do" => "export_pdf"))."\" rel=\"nofollow\">".hsc($lang["vector_exportbxdef_downloadpdf"])."</a></li>\n";
            }
            $_vector_boxes["p-coll-print_export"]["xhtml"] .=  "        <li id=\"t-print\"><a href=\"".wl(cleanID(getId()), array("rev" =>(int)$rev, "vecdo" => "print"))."\" rel=\"nofollow\">".hsc($lang["vector_exportbxdef_print"])."</a></li>\n"
                                                              ."      </ul>";
        }else{
            //we have to use a custom exportbox
            if (empty($conf["useacl"]) ||
                auth_quickaclcheck(cleanID(tpl_getConf("vector_exportbox_location"))) >= AUTH_READ){ //current user got access?
                //get the rendered content of the defined wiki article to use as
                //custom exportbox
                $interim = tpl_include_page(tpl_getConf("vector_exportbox_location"), false);
                if ($interim === "" ||
                    $interim === false){
                    //add creation/edit link if the defined page got no content
                    $_vector_boxes["p-coll-print_export"]["xhtml"] =  "<li>[&#160;".html_wikilink(tpl_getConf("vector_exportbox_location"), hsc($lang["vector_fillplaceholder"]." (".tpl_getConf("vector_exportbox_location").")"), null)."&#160;]<br /></li>";
                }else{
                    //add the rendered page content
                    $_vector_boxes["p-coll-print_export"]["xhtml"] =  $interim;
                }
            }else{
                //we are not allowed to show the content of the defined wiki
                //article to use as custom sitenotice.
                //$_vector_boxes["p-tb"]["xhtml"] = hsc($lang["vector_accessdenied"])." (".tpl_getConf("vector_exportbox_location").")";
            }
        }
    }

    //toolbox
    if (tpl_getConf("vector_toolbox")){
        //headline
        $_vector_boxes["p-tb"]["headline"] = $lang["vector_toolbox"];

        //content
        if (tpl_getConf("vector_toolbox_default")){
            //define default, predefined toolbox
            $_vector_boxes["p-tb"]["xhtml"] = "      <ul>\n";
            if (actionOK("backlink")){ //check if action is disabled
                $_vector_boxes["p-tb"]["xhtml"] .= "        <li id=\"t-whatlinkshere\"><a href=\"".wl(cleanID(getId()), array("do" => "backlink"))."\">".hsc($lang["vector_toolbxdef_whatlinkshere"])."</a></li>\n"; //we might use tpl_actionlink("backlink", "", "", hsc($lang["vector_toolbxdef_whatlinkshere"]), true), but it would be the only toolbox link where this is possible... therefore I don't use it to be consistent
            }
            if (actionOK("recent")){ //check if action is disabled
                $_vector_boxes["p-tb"]["xhtml"] .= "        <li id=\"t-recentchanges\"><a href=\"".wl("", array("do" => "recent"))."\" rel=\"nofollow\">".hsc($lang["btn_recent"])."</a></li>\n"; //language comes from DokuWiki core
            }
            $_vector_boxes["p-tb"]["xhtml"] .= "        <li id=\"t-upload\"><a href=\"".DOKU_BASE."lib/exe/mediamanager.php?ns=".getNS(getID())."\" rel=\"nofollow\">".hsc($lang["vector_toolbxdef_upload"])."</a></li>\n";
            if (actionOK("index")){ //check if action is disabled
                $_vector_boxes["p-tb"]["xhtml"] .= "        <li id=\"t-special\"><a href=\"".wl("", array("do" => "index"))."\" rel=\"nofollow\">".hsc($lang["vector_toolbxdef_siteindex"])."</a></li>\n";
            }
            $_vector_boxes["p-tb"]["xhtml"] .=  "        <li id=\"t-permanent\"><a href=\"".wl(cleanID(getId()), array("rev" =>(int)$rev))."\" rel=\"nofollow\">".hsc($lang["vector_toolboxdef_permanent"])."</a></li>\n"
                                               ."        <li id=\"t-cite\"><a href=\"".wl(cleanID(getId()), array("rev" =>(int)$rev, "vecdo" => "cite"))."\" rel=\"nofollow\">".hsc($lang["vector_toolboxdef_cite"])."</a></li>\n"
                                               ."      </ul>";
        }else{
            //we have to use a custom toolbox
            if (empty($conf["useacl"]) ||
                auth_quickaclcheck(cleanID(tpl_getConf("vector_toolbox_location"))) >= AUTH_READ){ //current user got access?
                //get the rendered content of the defined wiki article to use as
                //custom toolbox
                $interim = tpl_include_page(tpl_getConf("vector_toolbox_location"), false);
                if ($interim === "" ||
                    $interim === false){
                    //add creation/edit link if the defined page got no content
                    $_vector_boxes["p-tb"]["xhtml"] =  "<li>[&#160;".html_wikilink(tpl_getConf("vector_toolbox_location"), hsc($lang["vector_fillplaceholder"]." (".tpl_getConf("vector_toolbox_location").")"), null)."&#160;]<br /></li>";
                }else{
                    //add the rendered page content
                    $_vector_boxes["p-tb"]["xhtml"] =  $interim;
                }
            }else{
                //we are not allowed to show the content of the defined wiki
                //article to use as custom sitenotice.
                //$_vector_boxes["p-tb"]["xhtml"] = hsc($lang["vector_accessdenied"])." (".tpl_getConf("vector_toolbox_location").")";
            }
        }
    }

}else{

    //headline
    $_vector_boxes["p-login"]["headline"] = $lang["btn_login"];
    $_vector_boxes["p-login"]["xhtml"] =  "      <ul>\n"
                                         ."        <li id=\"t-login\"><a href=\"".wl(cleanID(getId()), array("do" => "login"))."\" rel=\"nofollow\">".hsc($lang["btn_login"])."</a></li>\n" //language comes from DokuWiki core
                                         ."      </ul>";

}


/******************************************************************************
 ********************************  ATTENTION  *********************************
         DO NOT MODIFY THIS FILE, IT WILL NOT BE PRESERVED ON UPDATES!
 ******************************************************************************
  If you want to add some own boxes, have a look at the README of this
  template and "/user/boxes.php". You have been warned!
 *****************************************************************************/

