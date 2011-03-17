<?php

/**
 * English language for the "vector" DokuWiki template
 *
 * If your language is not/only partially translated or you found an error/typo,
 * have a look at the following files:
 * - "/lib/tpl/vector/lang/<your lang>/lang.php"
 * - "/lib/tpl/vector/lang/<your lang>/settings.php"
 * If they are not existing, copy and translate the English ones (hint: looking
 * at <http://[your lang].wikipedia.org> might be helpful). And don't forget to
 * mail the translation to me,
 * Andreas Haerter <development@andreas-haerter.com>. Thanks :-D.
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
 * @link http://www.dokuwiki.org/config:lang
 * @link http://www.dokuwiki.org/devel:configuration
 */


//check if we are running within the DokuWiki environment
if (!defined("DOKU_INC")){
    die();
}

//tabs, personal tools and special links
$lang["vector_article"] = "Article";
$lang["vector_discussion"] = "Discussion";
$lang["vector_read"] = "Read";
$lang["vector_edit"] = "Edit";
$lang["vector_create"] = "Create";
$lang["vector_userpage"] = "User Page";
$lang["vector_specialpage"] = "Special Pages";
$lang["vector_mytalk"] = "My Talk";
$lang["vector_exportodt"] = "Export: ODT";
$lang["vector_exportpdf"] = "Export: PDF";
$lang["vector_subscribens"] = "Subscribe NS Changes"; //original DW lang $lang["btn_subscribens"] is simply too long for common tab configs
$lang["vector_unsubscribens"] = "Unsubscribe NS Changes";  //original DW lang $lang["btn_unsubscribens"] is simply too long for common tab configs
$lang["vector_translations"] = "Languages";

//headlines for the different bars and boxes
$lang["vector_navigation"] = "Navigation";
$lang["vector_toolbox"] = "Toolbox";
$lang["vector_exportbox"] = "Print/export";
$lang["vector_inotherlanguages"] = "Languages";
$lang["vector_printexport"] = "Print/export";
$lang["vector_personnaltools"] = "Personal Tools";

//buttons
$lang["vector_btn_go"] = "Go";
$lang["vector_btn_search"] = "Search";
$lang["vector_btn_search_title"] = "Search for this text";

//exportbox ("print/export")
$lang["vector_exportbxdef_print"] = "Printable version";
$lang["vector_exportbxdef_downloadodt"] = "Download as ODT";
$lang["vector_exportbxdef_downloadpdf"] = "Download as PDF";

//default toolbox
$lang["vector_toolbxdef_whatlinkshere"] = "What links here";
$lang["vector_toolbxdef_upload"] = "Upload file";
$lang["vector_toolbxdef_siteindex"] = "Site index";
$lang["vector_toolboxdef_permanent"] = "Permanent link";
$lang["vector_toolboxdef_cite"] = "Cite this page";

//cite this article
$lang["vector_cite_bibdetailsfor"] = "Bibliographic details for";
$lang["vector_cite_pagename"] = "Page name";
$lang["vector_cite_author"] = "Author";
$lang["vector_cite_publisher"] = "Publisher";
$lang["vector_cite_dateofrev"] = "Date of this revision";
$lang["vector_cite_dateretrieved"] = "Date retrieved";
$lang["vector_cite_permurl"] = "Permanent URL";
$lang["vector_cite_pageversionid"] = "Page Version ID";
$lang["vector_cite_citationstyles"] = "Citation styles for";
$lang["vector_cite_checkstandards"] = "Please remember to check your manual of style, standards guide or instructor's guidelines for the exact syntax to suit your needs.";
$lang["vector_cite_latexusepackagehint"] = "When using the LaTeX package url (\usepackage{url} somewhere in the preamble), which tends to give much more nicely formatted web addresses, the following may be preferred";
$lang["vector_cite_retrieved"] = "Retrieved";
$lang["vector_cite_from"] = "from";
$lang["vector_cite_in"] = "In";
$lang["vector_cite_accessed"] = "Accessed";
$lang["vector_cite_cited"] = "Cited";
$lang["vector_cite_lastvisited"] = "Last visited";
$lang["vector_cite_availableat"] = "Available at";
$lang["vector_cite_discussionpages"] = "DokuWiki talk pages";
$lang["vector_cite_markup"] = "Markup";
$lang["vector_cite_result"] = "Result";
$lang["vector_cite_thisversion"] = "this version";

//other
$lang["vector_search"] = "Search";
$lang["vector_accessdenied"] = "Access denied";
$lang["vector_fillplaceholder"] = "Please fill this placeholder";
$lang["vector_donate"] = "Donate";
$lang["vector_mdtemplatefordw"] = "vector template for DokuWiki";
$lang["vector_recentchanges"] = "Recent changes";

