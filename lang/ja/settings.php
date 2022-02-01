<?php

/**
 * Japanese language for the Config Manager
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
$lang["vector_userpage"]    = "利用者のページを使用する";
$lang["vector_userpage_ns"] = "利用者のページのルートに使用する名前空間（:namespace:）の場所：";

//discussion pages
$lang["vector_discuss"]    = "議論タブを使用する";
$lang["vector_discuss_ns"] = "議論タブのルートに使用する名前空間（:namespace:）の場所：";

//site notice
$lang["vector_sitenotice"]           = "サイト全体の注意書きを表示する";
$lang["vector_sitenotice_location"]  = "サイト全体の注意書きに使用するページの場所：";
$lang["vector_sitenotice_translate"] = " デフォルトを使用せず、かつ<a href=\"https://www.dokuwiki.org/plugin:translation\">Translation plugin</a> を利用している場合、翻訳されたサイト全体の注意書きを表示する<br />翻訳されたサイト全体の注意書きは[サイト全体の注意書きのページ]_[ISO言語コード]を参照します（例 ':wiki:site_notice_de'）";

//navigation
$lang["vector_navigation"]           = "ナビゲーションを表示する";
$lang["vector_navigation_location"]  = "ナビゲーションに使用するページの場所：";
$lang["vector_navigation_translate"] = "デフォルトを使用せず、かつ<a href=\"https://www.dokuwiki.org/plugin:translation\">Translation plugin</a> を利用している場合、翻訳されたナビゲーションを表示する<br />翻訳されたナビゲーションは[ナビゲーションのページ]_[ISO言語コード]を参照します（例 ':wiki:navigation_de'）";

//exportbox ("print/export")
$lang["vector_exportbox"]          = "印刷／出力ボックスを表示する";
$lang["vector_exportbox_default"]  = "デフォルトの印刷／出力ボックスを使用する";
$lang["vector_exportbox_location"] = "デフォルトを使用しない場合、印刷／出力ボックスに使用するページの場所：";

//toolbox
$lang["vector_toolbox"]          = "ツールボックスを表示する";
$lang["vector_toolbox_default"]  = "デフォルトのツールボックスを使用する";
$lang["vector_toolbox_location"] = "デフォルトを使用しない場合、ツールボックスに使用するページの場所：";

//qr code box
$lang["vector_qrcodebox"] = "現在のページのURLをQRコードで表示する（携帯端末へのURL送信が容易になります）";

//custom copyright notice
$lang["vector_copyright"]           = "著作権に関する注意事項を表示する";
$lang["vector_copyright_default"]   = "デフォルトの著作権に関する注意事項を使用する";
$lang["vector_copyright_location"]  = "デフォルトを使用しない場合、著作権に関する注意事項に使用するページの場所：";
$lang["vector_copyright_translate"] = "デフォルトを使用せず、かつ<a href=\"https://www.dokuwiki.org/plugin:translation\">Translation plugin</a> を利用している場合、翻訳された著作権に関する注意事項を表示する<br />翻訳された著作権に関する注意事項は[value of '著作権に関する注意事項のページ']_[ISO言語コード]を参照します（例 ':wiki:copyright_de'）";

//donation link/button
$lang["vector_donate"]          = "寄付リンク／ボタンを表示する";
$lang["vector_donate_url"]      = "寄付に使用するURL：";

//TOC
$lang["vector_toc_position"] = "概要(Table of contents, TOC)の表示位置";

//other stuff
$lang["vector_breadcrumbs_position"]  = "トレース（パンくず）の表示位置（有効な場合）：";
$lang["vector_youarehere_position"]   = "現在位置の表示位置（有効な場合）：";
$lang["vector_cite_author"]           = "「このページを引用」の執筆者名：";
$lang["vector_loaduserjs"]            = "'vector/user/user.js' をロードする";
$lang["vector_closedwiki"]            = "クローズドWikiにする（ユーザーがログインするまで、ほぼ全てのリンク／タブ／ボックスが非表示になります）";

