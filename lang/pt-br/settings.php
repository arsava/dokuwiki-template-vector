<?php

/**
 * Brazilian Portuguese language for the "vector" Config Manager
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

//discussion pages
$lang["vector_discuss"]    = "Usar guias 'Discussão'?";
$lang["vector_discuss_ns"] = "Se sim, usar a seguinte ':namespace:' como raiz para as discussões:";

//site notice
$lang["vector_sitenotice"]          = "Mostrar aviso no site?";
$lang["vector_sitenotice_location"] = "Se sim, usar a seguinte página wiki:";

//navigation
$lang["vector_navigation"]          = "Mostrar 'Navegação' no menu?";
$lang["vector_navigation_location"] = "Se sim, usar a seguinte página wiki para 'Navegação':";

//exportbox ("print/export")
$lang["vector_exportbox"]          = "Mostrar 'Imprimir/Exportar' no menu?";
$lang["vector_exportbox_default"]  = "Se sim, usar o padrão 'Imprimir/Exportar' no menu?";
$lang["vector_exportbox_location"] = "Se não usar o padrão, usar a seguinte página wiki para 'Imprimir/Exportar':";

//toolbox
$lang["vector_toolbox"]          = "Mostrar 'Ferramentas' no menu?";
$lang["vector_toolbox_default"]  = "Se sim, usar o padrão Ferramentas?";
$lang["vector_toolbox_location"] = "Se não usar o padrão, usar a seguinte página wiki para 'Ferramentas':";

//custom copyright notice
$lang["vector_copyright"]          = "Mostrar aviso de direitos autorais?";
$lang["vector_copyright_default"]  = "Se sim, usar o padrão de direitos autorais?";
$lang["vector_copyright_location"] = "Se não usar o padrão, usar a seguinte página wiki para direitos autorais:";

//donation link/button
$lang["vector_donate"]          = "Exibir o link/botão de doação?";
$lang["vector_donate_default"]  = "Se sim, usar o padrão da URL de destino para doação?";
$lang["vector_donate_url"]      = "Se não usar o padrão, usar a seguinte URL para doações:";

//TOC
$lang["vector_toc_position"] = "Tabela de conteúdo de posição (TOC)";

//other stuff
$lang["vector_mediamanager_embedded"] = "Mostrar o item 'Upload de arquivo' no layout?";
$lang["vector_breadcrumbs_position"]  = "Posição do indicador de navegação (se ativado):";
$lang["vector_youarehere_position"]   = "Posição da navegação para 'Você está em' (se ativado):";
$lang["vector_cite_author"]           = "Nome do Autor em 'Citar este artigo':";
$lang["vector_loaduserjs"]            = "Caregar 'vector/user/user.js'?";
