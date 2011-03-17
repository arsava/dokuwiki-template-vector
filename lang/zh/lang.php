<?php

/**
 * Chinese (simplified) language for the "vector" DokuWiki template
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
 * @author LAINME <lainme993 [ät] gmail.com>
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
$lang["vector_article"] = "文章";
$lang["vector_discussion"] = "讨论";
$lang["vector_read"] = "阅读";
$lang["vector_edit"] = "编辑";
$lang["vector_create"] = "创建";
$lang["vector_userpage"] = "用户页";
$lang["vector_specialpage"] = "特殊页面";
$lang["vector_mytalk"] = "我的讨论";
$lang["vector_exportodt"] = "导出：ODT";
$lang["vector_exportpdf"] = "导出：PDF";
$lang["vector_subscribens"] = "订阅命名空间改动"; //original DW lang $lang["btn_subscribens"] is simply too long for common tab configs
$lang["vector_unsubscribens"] = "退订命名空间改动";  //original DW lang $lang["btn_unsubscribens"] is simply too long for common tab configs
$lang["vector_translations"] = "语言";

//headlines for the different bars and boxes
$lang["vector_navigation"] = "导航";
$lang["vector_toolbox"] = "工具箱";
$lang["vector_exportbox"] = "打印/导出";
$lang["vector_inotherlanguages"] = "语言";
$lang["vector_printexport"] = "打印/导出";
$lang["vector_personnaltools"] = "个人工具箱";

//buttons
$lang["vector_btn_go"] = "开始";
$lang["vector_btn_search"] = "搜索";
$lang["vector_btn_search_title"] = "搜索这个文本";

//exportbox ("print/export")
$lang["vector_exportbxdef_print"] = "可打印版本";
$lang["vector_exportbxdef_downloadodt"] = "做为ODT下载";
$lang["vector_exportbxdef_downloadpdf"] = "做为PDF下载";

//default toolbox
$lang["vector_toolbxdef_whatlinkshere"] = "反向链接";
$lang["vector_toolbxdef_upload"] = "上传文件";
$lang["vector_toolbxdef_siteindex"] = "站点索引";
$lang["vector_toolboxdef_permanent"] = "永久链接";
$lang["vector_toolboxdef_cite"] = "引用此文";

//cite this article
$lang["vector_cite_bibdetailsfor"] = "文献详情：";
$lang["vector_cite_pagename"] = "页面名称";
$lang["vector_cite_author"] = "作者";
$lang["vector_cite_publisher"] = "出版者";
$lang["vector_cite_dateofrev"] = "修订日期";
$lang["vector_cite_dateretrieved"] = "检索日期";
$lang["vector_cite_permurl"] = "永久链接";
$lang["vector_cite_pageversionid"] = "页面版本ID";
$lang["vector_cite_citationstyles"] = "引文样式";
$lang["vector_cite_checkstandards"] = "请记得检查您的样式手册，标准指南或者导师的指导，来获取适合您需求的准确样式";
$lang["vector_cite_latexusepackagehint"] = "当使用LaTeX的url包（在开始的某处使用\usepackage{url})可以得到更好的网络地址，下列格式更受欢迎";
$lang["vector_cite_retrieved"] = "检索";
$lang["vector_cite_from"] = "从";
$lang["vector_cite_in"] = "在";
$lang["vector_cite_accessed"] = "获取";
$lang["vector_cite_cited"] = "引用";
$lang["vector_cite_lastvisited"] = "最后浏览";
$lang["vector_cite_availableat"] = "获取地址";
$lang["vector_cite_discussionpages"] = "DokuWiki讨论页面";
$lang["vector_cite_markup"] = "标记";
$lang["vector_cite_result"] = "结果";
$lang["vector_cite_thisversion"] = "此版本";

//other
$lang["vector_search"] = "搜索";
$lang["vector_accessdenied"] = "拒绝访问";
$lang["vector_fillplaceholder"] = "请填写此占位符 ";
$lang["vector_donate"] = "捐赠";
$lang["vector_mdtemplatefordw"] = "用于Dokuwiki的vector主题";
$lang["vector_recentchanges"] = "最近更改";

