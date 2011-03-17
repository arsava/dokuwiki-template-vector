<?php

/**
 * Brazilian Portuguese language for the "vector" DokuWiki template
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
 * @author Fabio Reis <fabio.netsys@gmail.com>
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
$lang["vector_article"] = "Página";
$lang["vector_discussion"] = "Discussão";
$lang["vector_read"] = "Ler";
$lang["vector_edit"] = "Editar";
$lang["vector_create"] = "Criar";
$lang["vector_userpage"] = "Página do Usuário";
$lang["vector_specialpage"] = "Páginas especiais";
$lang["vector_mytalk"] = "Minha discussão";
$lang["vector_exportodt"] = "Exportar: ODT";
$lang["vector_exportpdf"] = "Exportar: PDF";
$lang["vector_subscribens"] = "Assinar Alterações"; //original DW lang $lang["btn_subscribens"] is simply too long for common tab configs
$lang["vector_unsubscribens"] = "Remover Assinatura das Alterações";  //original DW lang $lang["btn_unsubscribens"] is simply too long for common tab configs
$lang["vector_translations"] = "Idiomas";

//headlines for the different bars and boxes
$lang["vector_navigation"] = "Navegação";
$lang["vector_toolbox"] = "Ferramentas";
$lang["vector_exportbox"] = "Imprimir/Exportar";
$lang["vector_inotherlanguages"] = "Idiomas";
$lang["vector_printexport"] = "Versão para impressão";
$lang["vector_personnaltools"] = "Ferramentas Pessoais";

//buttons
$lang["vector_btn_go"] = "Ir";
$lang["vector_btn_search"] = "Procurar por páginas contendo este texto";
$lang["vector_btn_search_title"] = "Pesquisar nesta wiki";

//exportbox ("print/export")
$lang["vector_exportbxdef_print"] = "Versão para impressão";
$lang["vector_exportbxdef_downloadodt"] = "Download como ODT";
$lang["vector_exportbxdef_downloadpdf"] = "Download como PDF";

//default toolbox
$lang["vector_toolbxdef_whatlinkshere"] = "What links here";
$lang["vector_toolbxdef_upload"] = "Upload de arquivo";
$lang["vector_toolbxdef_siteindex"] = "Índice";
$lang["vector_toolboxdef_permanent"] = "Link permanente";
$lang["vector_toolboxdef_cite"] = "Citar esta página";

//cite this article
$lang["vector_cite_bibdetailsfor"] = "Detalhes bibliográficos para";
$lang["vector_cite_pagename"] = "Nome da página";
$lang["vector_cite_author"] = "Autor";
$lang["vector_cite_publisher"] = "Editor";
$lang["vector_cite_dateofrev"] = "Data desta revisão";
$lang["vector_cite_dateretrieved"] = "Data encontrada";
$lang["vector_cite_permurl"] = "URL permanente";
$lang["vector_cite_pageversionid"] = "ID da versão da página";
$lang["vector_cite_citationstyles"] = "Estilos de citação para";
$lang["vector_cite_checkstandards"] = "Por favor, lembre-se de verificar no seu guia de padrões ou diretivas do seu professor pela sintaxe exata para as suas necessidades.";
$lang["vector_cite_latexusepackagehint"] = "Quando usar o pacote url LaTeX (\usepackage{url} em algum lugar no prefácio), que tende a dar muito mais bem formatada endereços da web, o seguinte pode ser preferido";
$lang["vector_cite_retrieved"] = "Encontrado";
$lang["vector_cite_from"] = "De";
$lang["vector_cite_in"] = "Em";
$lang["vector_cite_accessed"] = "Accessado";
$lang["vector_cite_cited"] = "Citado";
$lang["vector_cite_lastvisited"] = "Visitado por último";
$lang["vector_cite_availableat"] = "Disponível em";
$lang["vector_cite_discussionpages"] = "DokuWiki páginas de discussão";
$lang["vector_cite_markup"] = "Remarcação";
$lang["vector_cite_result"] = "Resultado";
$lang["vector_cite_thisversion"] = "esta versão";

//other
$lang["vector_search"] = "Procurar";
$lang["vector_accessdenied"] = "Acesso Negado";
$lang["vector_fillplaceholder"] = "Preencha o espaço reservado";
$lang["vector_donate"] = "Doações";
$lang["vector_mdtemplatefordw"] = "template vector para DokuWiki";
$lang["vector_recentchanges"] = "Alterações Recentes";
