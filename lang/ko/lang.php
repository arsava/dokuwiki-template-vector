<?php

/**
 * Korean language for the "vector" DokuWiki template
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
 * @author 관인생략
 * @author Myeongjin <aranet100@gmail.com>
 * @link https://www.dokuwiki.org/template:vector
 * @link https://www.dokuwiki.org/config:lang
 * @link https://www.dokuwiki.org/devel:configuration
 */


//check if we are running within the DokuWiki environment
if (!defined("DOKU_INC")){
    die();
}

//tabs, personal tools and special links
$lang["vector_article"] = "문서";
$lang["vector_discussion"] = "토론";
$lang["vector_read"] = "읽기";
$lang["vector_edit"] = "편집";
$lang["vector_create"] = "만들기";
$lang["vector_userpage"] = "사용자 문서";
$lang["vector_specialpage"] = "특수 문서";
$lang["vector_mytalk"] = "사용자 토론";
$lang["vector_exportodt"] = "내보내기: ODT";
$lang["vector_exportpdf"] = "내보내기: PDF";
$lang["vector_subscribens"] = "이름공간 바뀜 구독"; //original DW lang $lang["btn_subscribens"] is simply too long for common tab configs
$lang["vector_unsubscribens"] = "이름공간 바뀜 구독 취소";  //original DW lang $lang["btn_unsubscribens"] is simply too long for common tab configs
$lang["vector_translations"] = "언어";

//headlines for the different bars and boxes
$lang["vector_navigation"] = "둘러보기";
$lang["vector_toolbox"] = "도구";
$lang["vector_exportbox"] = "인쇄/내보내기";
$lang["vector_qrcodebox"] = "QR 코드";
$lang["vector_inotherlanguages"] = "언어";
$lang["vector_printexport"] = "인쇄/내보내기";
$lang["vector_personnaltools"] = "개인 도구";

//buttons
$lang["vector_btn_go"] = "보기";
$lang["vector_btn_search"] = "검색";
$lang["vector_btn_search_title"] = "이 문자열이 포함된 문서 검색";

//exportbox ("print/export")
$lang["vector_exportbxdef_print"] = "인쇄용 판";
$lang["vector_exportbxdef_downloadodt"] = "ODT로 다운로드";
$lang["vector_exportbxdef_downloadpdf"] = "PDF로 다운로드";

//default toolbox
$lang["vector_toolbxdef_whatlinkshere"] = "여기를 가리키는 문서";
$lang["vector_toolbxdef_upload"] = "파일 올리기";
$lang["vector_toolbxdef_siteindex"] = "사이트맵";
$lang["vector_toolboxdef_permanent"] = "고유 링크";
$lang["vector_toolboxdef_cite"] = "이 문서 인용하기";

//qr code box
$lang["vector_qrcodebox_qrcode"] = "QR 코드";
$lang["vector_qrcodebox_genforcurrentpage"] = "현재 문서의 생성된 QR 코드";
$lang["vector_qrcodebox_urlofcurrentpage"] = "현재 문서의 QR 코드 (쉽게 모바일 접근을 하려면 스캔)";

//cite this article
$lang["vector_cite_bibdetailsfor"] = "다음 문서의 출처 정보:";
$lang["vector_cite_pagename"] = "문서 이름";
$lang["vector_cite_author"] = "저자";
$lang["vector_cite_publisher"] = "발행처";
$lang["vector_cite_dateofrev"] = "이 판의 날짜";
$lang["vector_cite_dateretrieved"] = "확인한 날짜";
$lang["vector_cite_permurl"] = "고유 URL";
$lang["vector_cite_pageversionid"] = "문서 판 ID";
$lang["vector_cite_citationstyles"] = "다음 문서의 인용 양식:";
$lang["vector_cite_checkstandards"] = "필요에 따라 정확한 구문에 대한 양식 매뉴얼, 표준 가이드 또는 안내자의 지침을 확인하는 것을 기억하세요.";
$lang["vector_cite_latexusepackagehint"] = "LaTeX 패키지 URL(프리앰블의 어딘가에 \usepackage{url})을 사용하면 더 정돈된 형식의 웹 주소를 얻을 수 있습니다. 다음과 같은 방법을 선호합니다";
$lang["vector_cite_retrieved"] = "확인한 날짜:";
$lang["vector_cite_from"] = "다음에서 찾아볼 수 있음:";
$lang["vector_cite_in"] = "발행처:";
$lang["vector_cite_accessed"] = "접근한 날짜:";
$lang["vector_cite_cited"] = "인용한 날짜:";
$lang["vector_cite_lastvisited"] = "마지막으로 방문한 날짜:";
$lang["vector_cite_availableat"] = "다음에서 찾아볼 수 있음";
$lang["vector_cite_discussionpages"] = "도쿠위키 토론 문서";
$lang["vector_cite_markup"] = "문법";
$lang["vector_cite_result"] = "결과";
$lang["vector_cite_thisversion"] = "이 판";

//other
$lang["vector_search"] = "검색";
$lang["vector_accessdenied"] = "접근 거부됨";
$lang["vector_fillplaceholder"] = "이 자리를 채우거나 비활성화하세요";
$lang["vector_donate"] = "기부";
$lang["vector_mdtemplatefordw"] = "도쿠위키를 위한 벡터 템플릿";
$lang["vector_recentchanges"] = "최근 바뀜";

