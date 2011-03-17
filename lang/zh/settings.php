<?php

/**
 * Chinese (simplified) language for the Config Manager
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

//user pages
$lang["vector_userpage"]    = "使用用户页？";
$lang["vector_userpage_ns"] = "如果是，使用下列“:namespace:“作为用户页的根：";

//discussion pages
$lang["vector_discuss"]    = "使用讨论标签页/站点？";
$lang["vector_discuss_ns"] = "如果是，使用下列“:namespace:“作为讨论页的根：";

//site notice
$lang["vector_sitenotice"]          = "显示站点公告？";
$lang["vector_sitenotice_location"] = "如果是，使用下列wiki页面作为站点公告：";

//navigation
$lang["vector_navigation"]          = "显示导航？";
$lang["vector_navigation_location"] = "如果是，使用下列wiki页面作为导航：";

//exportbox ("print/export")
$lang["vector_exportbox"]          = "显示“打印/导出”栏？";
$lang["vector_exportbox_default"]  = "如果是，使用默认的“打印/导出”栏？";
$lang["vector_exportbox_location"] = "如果不是默认，使用下列wiki页面作为“打印/导出“栏位置：";

//toolbox
$lang["vector_toolbox"]          = "显示工具箱？";
$lang["vector_toolbox_default"]  = "如果是，使用默认工具箱？";
$lang["vector_toolbox_location"] = "如果不是默认，使用下列wiki页面作为工具箱位置：";

//custom copyright notice
$lang["vector_copyright"]          = "显示版权信息？";
$lang["vector_copyright_default"]  = "如果是，使用默认的版权信息？";
$lang["vector_copyright_location"] = "如果不是默认，使用下列wiki页面作为版权信息：";

//donation link/button
$lang["vector_donate"]          = "显示捐赠链接/按钮？";
$lang["vector_donate_default"]  = "如果是，使用默认捐赠目标URL？";
$lang["vector_donate_url"]      = "如果不是默认，使用下列URL作为捐赠地址：";

//TOC
$lang["vector_toc_position"] = "目录位置";

//other stuff
$lang["vector_mediamanager_embedded"] = "在通用布局中嵌入显示媒体管理器？";
$lang["vector_breadcrumbs_position"]  = "足迹导航的位置（如果激活的话）：";
$lang["vector_youarehere_position"]   = "“您在这里“导航的位置（如果激活的话）：";
$lang["vector_cite_author"]           = "“引用此文“中的作者姓名：";
$lang["vector_loaduserjs"]            = "载入“vector/user/user.js“？";
$lang["vector_closedwiki"]            = "封闭wiki(许多链接/标签/栏是隐藏的，直到用户登录)？";

