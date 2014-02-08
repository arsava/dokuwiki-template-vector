<?php

/**
 * Spanish language for the "vector" DokuWiki template
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
 * @author Jesús Muñoz Martínez <kisumum@gmail.com>
 * @link https://www.dokuwiki.org/template:vector
 * @link https://www.dokuwiki.org/config:lang
 * @link https://www.dokuwiki.org/devel:configuration
 */


//check if we are running within the DokuWiki environment
if (!defined("DOKU_INC")){
    die();
}

//tabs, personal tools and special links
$lang["vector_article"] = "Artículo";
$lang["vector_discussion"] = "Discusión";
$lang["vector_read"] = "Leer";
$lang["vector_edit"] = "Editar";
$lang["vector_create"] = "Crear";
$lang["vector_userpage"] = "Página de Usuario";
$lang["vector_specialpage"] = "Páginas Especiales";
$lang["vector_mytalk"] = "Mi Discurso";
$lang["vector_exportodt"] = "Exportar: ODT";
$lang["vector_exportpdf"] = "Exportar: PDF";
$lang["vector_subscribens"] = "Suscribirse a NS Cambios"; //original DW lang $lang["btn_subscribens"] is simply too long for common tab configs
$lang["vector_unsubscribens"] = "Borrarse de NS Cambios";  //original DW lang $lang["btn_unsubscribens"] is simply too long for common tab configs
$lang["vector_translations"] = "Idiomas";

//headlines for the different bars and boxes
$lang["vector_navigation"] = "Navegación";
$lang["vector_toolbox"] = "Herramientas";
$lang["vector_exportbox"] = "Imprimir/exportar";
$lang["vector_inotherlanguages"] = "Idiomas";
$lang["vector_printexport"] = "Imprimir/exportar";
$lang["vector_personnaltools"] = "Herramientas Personales";

//buttons
$lang["vector_btn_go"] = "Ir";
$lang["vector_btn_search"] = "Buscar";
$lang["vector_btn_search_title"] = "Buscar este texto";

//exportbox ("print/export")
$lang["vector_exportbxdef_print"] = "Versión imprimible";
$lang["vector_exportbxdef_downloadodt"] = "Descargar como ODT";
$lang["vector_exportbxdef_downloadpdf"] = "Descargar como PDF";

//default toolbox
$lang["vector_toolbxdef_whatlinkshere"] = "Qué enlaza aquí";
$lang["vector_toolbxdef_upload"] = "Cargar archivo";
$lang["vector_toolbxdef_siteindex"] = "Índice";
$lang["vector_toolboxdef_permanent"] = "Inicio";
$lang["vector_toolboxdef_cite"] = "Citar esta página";

//cite this article
$lang["vector_cite_bibdetailsfor"] = "Detalles bibliográficos de";
$lang["vector_cite_pagename"] = "Nombre de la página";
$lang["vector_cite_author"] = "Autor";
$lang["vector_cite_publisher"] = "Editor";
$lang["vector_cite_dateofrev"] = "Día de esta revisión";
$lang["vector_cite_dateretrieved"] = "Día recuperado";
$lang["vector_cite_permurl"] = "URL Permanente";
$lang["vector_cite_pageversionid"] = "ID de la Versión de la Página";
$lang["vector_cite_citationstyles"] = "Estilos de cita para";
$lang["vector_cite_checkstandards"] = "Por favor recuerda consultar el manual de estilo, guías de estándares o las directrices del instructor para una sintáxis exacta para satisfacer sus necesidades.";
$lang["vector_cite_latexusepackagehint"] = "Cuando uses el paquete LaTeX url (\usepackage{url} en algún sitio en el preámbulo),tiende a dar el formato para las direcciones web, lo siguiente pueden ser preferido";
$lang["vector_cite_retrieved"] = "Recuperado";
$lang["vector_cite_from"] = "de";
$lang["vector_cite_in"] = "En";
$lang["vector_cite_accessed"] = "Accedido";
$lang["vector_cite_cited"] = "Citado";
$lang["vector_cite_lastvisited"] = "Último visitado";
$lang["vector_cite_availableat"] = "Disponible en";
$lang["vector_cite_discussionpages"] = "DokuWiki páginas de charla";
$lang["vector_cite_markup"] = "Margen";
$lang["vector_cite_result"] = "Resultado";
$lang["vector_cite_thisversion"] = "esta versión";

//other
$lang["vector_search"] = "Buscar";
$lang["vector_accessdenied"] = "Acceso denegado";
$lang["vector_fillplaceholder"] = "Por favor rellena este marcador";
$lang["vector_donate"] = "Donaciones";
$lang["vector_mdtemplatefordw"] = "Plantilla vector para DokuWiki";
$lang["vector_recentchanges"] = "Cambios recientes";

