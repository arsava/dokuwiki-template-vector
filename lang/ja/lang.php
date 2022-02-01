<?php

/**
 * Japanese language for the "vector" DokuWiki template
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

//tabs, personal tools and special links
$lang["vector_article"] = "記事";
$lang["vector_discussion"] = "議論";
$lang["vector_read"] = "閲覧";
$lang["vector_edit"] = "編集";
$lang["vector_create"] = "作成";
$lang["vector_userpage"] = "利用者のページ";
$lang["vector_specialpage"] = "Special Pages";
$lang["vector_mytalk"] = "会話履歴";
$lang["vector_exportodt"] = "書き出し：ODT";
$lang["vector_exportpdf"] = "書き出し：PDF";
$lang["vector_subscribens"] = "Subscribe NS Changes"; //original DW lang $lang["btn_subscribens"] is simply too long for common tab configs
$lang["vector_unsubscribens"] = "Unsubscribe NS Changes";  //original DW lang $lang["btn_unsubscribens"] is simply too long for common tab configs
$lang["vector_translations"] = "言語";

//headlines for the different bars and boxes
$lang["vector_navigation"] = "ナビゲーション";
$lang["vector_toolbox"] = "ツール";
$lang["vector_exportbox"] = "印刷／書き出し";
$lang["vector_qrcodebox"] = "QRコード";
$lang["vector_inotherlanguages"] = "言語";
$lang["vector_printexport"] = "印刷／書き出し";
$lang["vector_personnaltools"] = "パーソナルツール";

//buttons
$lang["vector_btn_go"] = "Go";
$lang["vector_btn_search"] = "検索";
$lang["vector_btn_search_title"] = "このテキストを検索";

//exportbox ("print/export")
$lang["vector_exportbxdef_print"] = "印刷用ページ";
$lang["vector_exportbxdef_downloadodt"] = "ODT形式でダウンロード";
$lang["vector_exportbxdef_downloadpdf"] = "PDF形式でダウンロード";

//default toolbox
$lang["vector_toolbxdef_whatlinkshere"] = "リンク元";
$lang["vector_toolbxdef_upload"] = "ファイルをアップロード";
$lang["vector_toolbxdef_siteindex"] = "サイトマップ";
$lang["vector_toolboxdef_permanent"] = "このバージョンへのリンク";
$lang["vector_toolboxdef_cite"] = "このページを引用";

//qr code box
$lang["vector_qrcodebox_qrcode"] = "QRコード";
$lang["vector_qrcodebox_genforcurrentpage"] = "このページのQRコードを生成する";
$lang["vector_qrcodebox_urlofcurrentpage"] = "このページのQRコードを表示する（携帯端末から簡単にアクセスできます）";

//cite this article
$lang["vector_cite_bibdetailsfor"] = "Bibliographic details for";
$lang["vector_cite_pagename"] = "ページの名前";
$lang["vector_cite_author"] = "執筆者";
$lang["vector_cite_publisher"] = "出版社";
$lang["vector_cite_dateofrev"] = "更新日時";
$lang["vector_cite_dateretrieved"] = "取得日時";
$lang["vector_cite_permurl"] = "固定URL";
$lang["vector_cite_pageversionid"] = "ページのバージョンID";
$lang["vector_cite_citationstyles"] = "引用形式";
$lang["vector_cite_checkstandards"] = "要件に適した引用のため、指導者の指示または標準的な引用形式を確認してください。";
$lang["vector_cite_latexusepackagehint"] = "次に記載されたLaTeX形式のURL（\usepackage{url} をプリアンブルに挿入）を使用するとより適切に校正されたアドレスになる傾向があります。";
$lang["vector_cite_retrieved"] = "Retrieved";
$lang["vector_cite_from"] = "from";
$lang["vector_cite_in"] = "In";
$lang["vector_cite_accessed"] = "Accessed";
$lang["vector_cite_cited"] = "Cited";
$lang["vector_cite_lastvisited"] = "Last visited";
$lang["vector_cite_availableat"] = "Available at";
$lang["vector_cite_discussionpages"] = "DokuWikiの議論ページ用";
$lang["vector_cite_markup"] = "マークアップ";
$lang["vector_cite_result"] = "表示";
$lang["vector_cite_thisversion"] = "このバージョン";

//other
$lang["vector_search"] = "検索";
$lang["vector_accessdenied"] = "アクセスが拒否されました";
$lang["vector_fillplaceholder"] = "このプレースホルダーに記入するか、無効化してください。";
$lang["vector_donate"] = "寄付";
$lang["vector_mdtemplatefordw"] = "vector template for DokuWiki";
$lang["vector_recentchanges"] = "更新履歴";

