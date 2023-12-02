<?php

/**
 * Brazilian Portuguese language for the "vector" Config Manager
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
 * @author Fabio Reis <fabio.netsys@gmail.com>
 * @reviewer Daniel "Nerun" Rodrigues <danieldiasr@gmail.com>
 * @link https://www.dokuwiki.org/template:vector
 * @link https://www.dokuwiki.org/config:lang
 * @link https://www.dokuwiki.org/devel:configuration
 */


//check if we are running within the DokuWiki environment
if (!defined("DOKU_INC")){
    die();
}

//user pages
$lang["vector_userpage"]    = "Usar espaço nominal de usuário?";
$lang["vector_userpage_ns"] = "Se sim, usar o seguinte espaço nominal como raiz das páginas de usuário:";

//discussion pages
$lang["vector_discuss"]    = "Usar guias 'Discussão'?";
$lang["vector_discuss_ns"] = "Se sim, usar o seguinte espaço nominal como raiz das páginas de discussão:";

//site notice
$lang["vector_sitenotice"]           = "Mostrar \"aviso do site\"?";
$lang["vector_sitenotice_location"]  = "Se sim, usar a seguinte página wiki:";
$lang["vector_sitenotice_translate"] = "Se sim, e o <a href=\"https://www.dokuwiki.org/plugin:translation\">Translation plugin</a> estiver disponível: carregar aviso específico de idioma em todo o site?<br />A página wiki traduzida do \"aviso do site\" é [valor de 'vector_sitenotice_location']_[código de idioma ISO 639-1] (p.e. ':wiki:site_notice_pt').";

//navigation
$lang["vector_navigation"]           = "Mostrar 'Navegação' no menu?";
$lang["vector_navigation_location"]  = "Se sim, usar a seguinte página wiki para 'Navegação':";
$lang["vector_navigation_translate"] = "Se sim, e o <a href=\"https://www.dokuwiki.org/plugin:translation\">Translation plugin</a> estiver disponível: carregar Navegação de idioma específico?<br />A página wiki traduzida da \"Navegação\" é [valor de 'vector_navigation_location']_[código de idioma ISO 639-1] (p.e. ':wiki:navigation_pt').";

//exportbox ("print/export")
$lang["vector_exportbox"]          = "Mostrar 'Imprimir/Exportar' no menu?";
$lang["vector_exportbox_default"]  = "Se sim, usar o padrão 'Imprimir/Exportar' no menu?";
$lang["vector_exportbox_location"] = "Se não usar o padrão, usar a seguinte página wiki para 'Imprimir/Exportar':";

//toolbox
$lang["vector_toolbox"]          = "Mostrar 'Ferramentas' no menu?";
$lang["vector_toolbox_default"]  = "Se sim, usar o padrão Ferramentas?";
$lang["vector_toolbox_location"] = "Se não usar o padrão, usar a seguinte página wiki para 'Ferramentas':";

//qr code box
$lang["vector_qrcodebox"] = "Mostrar caixa com o código QR do URL da página wiki atual (para facilitar a transferência do URL para o navegador do aparelho móvel)?";

//custom copyright notice
$lang["vector_copyright"]           = "Mostrar aviso de direitos autorais?";
$lang["vector_copyright_default"]   = "Se sim, usar o padrão de direitos autorais?";
$lang["vector_copyright_location"]  = "Se não usar o padrão, usar a seguinte página wiki para direitos autorais:";
$lang["vector_copyright_translate"] = "Se não usar o padrão e o <a href=\"https://www.dokuwiki.org/plugin:translation\">Translation plugin</a> estiver disponível: carregar aviso de direitos autorais específico para seu idioma?<br />A página wiki do aviso de direitos autorais traduzido é [valor de 'vector_copyright_location']_[código de idioma ISO 639-1] (e.g. ':wiki:copyright_pt').";

//donation link/button
$lang["vector_donate"]          = "Exibir o link/botão de doação?";
$lang["vector_donate_url"]      = "Se não usar o padrão, usar a seguinte URL para doações:";

//TOC
$lang["vector_toc_position"] = "Tabela de conteúdo de posição (TOC)";

//other stuff
$lang["vector_breadcrumbs_position"]  = "Posição do indicador de navegação (se ativado):";
$lang["vector_youarehere_position"]   = "Posição da navegação para 'Você está em' (se ativado):";
$lang["vector_cite_author"]           = "Nome do Autor em 'Citar este artigo':";
$lang["vector_loaduserjs"]            = "Caregar 'vector/user/user.js'?";
$lang["vector_closedwiki"]            = "Wiki fechada (a maioria dos links/tabs/boxes estarãoo ocultos até que o usuário faça login)?";

