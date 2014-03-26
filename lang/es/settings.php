<?php

/**
 * Spanish language for the Config Manager
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

//user pages
$lang["vector_userpage"]    = "Usar páginas de Usuario?";
$lang["vector_userpage_ns"] = "Sí, usa la siguiente ':namespace:' como raíz para las páginas de usuario:";

//discussion pages
$lang["vector_discuss"]    = "¿Usar pestañas/sitios de discusión?";
$lang["vector_discuss_ns"] = "Sí, usa la siguiente ':namespace:' como raíz para las discusiones:";

//site notice
$lang["vector_sitenotice"]          = "Show site wide notice?";
$lang["vector_sitenotice_location"] = "If yes, use following wiki page for the site wide notice:";

//navigation
$lang["vector_navigation"]          = "¿Mostrar navegación?";
$lang["vector_navigation_location"] = "Sí, usar la siguiente página de la wiki como navegación:";

//exportbox ("print/export")
$lang["vector_exportbox"]          = "¿Mostrar la caja 'imprimir/exportar'?";
$lang["vector_exportbox_default"]  = "Sí, usar la caja predeterminada'imprimir/exportar' por defecto";
$lang["vector_exportbox_location"] = "si no usar predeterminado, usar la siguiente página de la wiki como localización de la caja'imprimir/exportar':";

//toolbox
$lang["vector_toolbox"]          = "¿Mostrar herramientas?";
$lang["vector_toolbox_default"]  = "Si, usar herramientas predeterminadas";
$lang["vector_toolbox_location"] = "si no usar predeterminado, usar la siguiente página de la wiki como localización de las herramientas:";

//custom copyright notice
$lang["vector_copyright"]          = "¿Mostrar aviso de derechos de autor?";
$lang["vector_copyright_default"]  = "Sí, usar aviso de derechos de autor predeterminado";
$lang["vector_copyright_location"] = "si no usar predeterminado, usar la siguiente página de la wiki como aviso de derechos de autor:";

//donation link/button
$lang["vector_donate"]          = "Mostrar enlace/botón de donación?";
$lang["vector_donate_url"]      = "si no usar predeterminado, usar la siguiente URL para las donaciones:";

//TOC
$lang["vector_toc_position"] = "Posición de la Tabla de Contenidos";

//other stuff
$lang["vector_breadcrumbs_position"]  = "Posición de breadcrumb en navegación (si habilitada):";
$lang["vector_youarehere_position"]   = "Posicion de  'Tu estás aquí' en navegación (si habilitada):";
$lang["vector_cite_author"]           = "Nombre del author en  'Cita este Artículo':";
$lang["vector_loaduserjs"]            = "¿Cargar 'vector/user/user.js'?";
$lang["vector_closedwiki"]            = "¿Wiki cerrada?.(la mayoría de enlaces/pestañas/cajas están escondidas hasta que el usuario se conecta)";

