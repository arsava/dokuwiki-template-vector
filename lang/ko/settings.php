<?php

/**
 * Korean language for the Config Manager
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
 * @author Myeongjin <aranet100@gmail.com>
 * @link https://www.dokuwiki.org/template:vector
 * @link https://www.dokuwiki.org/config:lang
 * @link https://www.dokuwiki.org/devel:configuration
 */


//check if we are running within the DokuWiki environment
if (!defined("DOKU_INC")){
    die();
}

//user pages
$lang["vector_userpage"]    = "사용자 문서를 사용하겠습니까?";
$lang["vector_userpage_ns"] = "만약 사용한다면 사용자 문서에 대한 루트로 다음 ':이름공간:' 사용:";

//discussion pages
$lang["vector_discuss"]    = "토론 탭/사이트를 사용하겠습니까?";
$lang["vector_discuss_ns"] = "만약 사용한다면 토론에 대한 루트로 다음 ':이름공간:' 사용:";

//site notice
$lang["vector_sitenotice"]           = "사이트 넓은 알림을 보여줄까요?";
$lang["vector_sitenotice_location"]  = "만약 보여준다면 사이트 넓은 알림에 대해 다음 위키 문서 사용:";
$lang["vector_sitenotice_translate"] = "만약 보여주고 <a href=\"https://www.dokuwiki.org/plugin:translation\">Translation 플러그인</a>을 사용할 수 있다면: 언어별 사이트 넓은 알림을 불러올까요?<br />번역된 사이트 알림의 위키 문서는 ['vector_sitenotice_location'의 값]_[iso 언어 코드] (예를 들어 ':wiki:site_notice_de') 입니다.";

//navigation
$lang["vector_navigation"]           = "둘러보기를 보여줄까요?";
$lang["vector_navigation_location"]  = "만약 보여준다면 둘러보기로 다음 위키 문서 사용:";
$lang["vector_navigation_translate"] = "만약 보여주고 <a href=\"https://www.dokuwiki.org/plugin:translation\">Translation 플러그인</a>을 사용할 수 있다면: 언어별 둘러보기를 불러올까요?<br />번역된 둘러보기의 위키 문서는 ['vector_navigation_location'의 값]_[iso 언어 코드] (예를 들어 ':wiki:navigation_de') 입니다.";

//exportbox ("print/export")
$lang["vector_exportbox"]          = "'인쇄/내보내기' 모음를 보여줄까요?";
$lang["vector_exportbox_default"]  = "만약 보여준다면 기본 '인쇄/내보내기' 모음을 사용하겠습니까?";
$lang["vector_exportbox_location"] = "기본 모음을 사용하지 않는다면 '인쇄/내보내기' 모음 위치로 다음 위키 문서 사용:";

//toolbox
$lang["vector_toolbox"]          = "도구를 보여줄까요?";
$lang["vector_toolbox_default"]  = "만약 보여준다면 기본 도구를 사용하겠습니까?";
$lang["vector_toolbox_location"] = "기본 모음을 사용하지 않는다면 도구 위치로 다음 위키 문서 사용:";

//qr code box
$lang["vector_qrcodebox"] = "(모바일 브라우저에 쉽게 URL 전송을 위해) 현재 위키 문서 URL의 QR 코드로 된 상자를 보여줄까요?";

//custom copyright notice
$lang["vector_copyright"]           = "저작권 알림을 보여줄까요?";
$lang["vector_copyright_default"]   = "만약 보여준다면 기본 저작권 알림을 사용하겠습니까?";
$lang["vector_copyright_location"]  = "기본 알림을 사용하지 않는다면 저작권 알림으로 다음 위키 문서 사용:";
$lang["vector_copyright_translate"] = "만약 보여주고 <a href=\"https://www.dokuwiki.org/plugin:translation\">Translation 플러그인</a>을 사용할 수 있다면: 언어별 저작권 알림을 불러올까요?<br />번역된 저작권 일림의 위키 문서는 ['vector_copyright_location'의 값]_[iso 언어 코드] (예를 들어 ':wiki:copyright_de') 입니다.";

//donation link/button
$lang["vector_donate"]          = "기부 링크/버튼을 보여줄까요?";
$lang["vector_donate_url"]      = "기부에 대한 다음 URL 사용:";

//TOC
$lang["vector_toc_position"] = "목차 위치";

//other stuff
$lang["vector_breadcrumbs_position"]  = "(활성화되었다면) 위치 추적 둘러보기의 위치:";
$lang["vector_youarehere_position"]   = "(활성화되었다면) '현재 위치' 둘러보기의 위치:";
$lang["vector_cite_author"]           = "'이 문서 인용하기'의 저자 이름:";
$lang["vector_loaduserjs"]            = "'vector/user/user.js'를 불러올까요?";
$lang["vector_closedwiki"]            = "닫힌 위키입니까? (대부분의 링크/탭/도구를 사용자가 로그인하기 전에 숨깁니다)";

