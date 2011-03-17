<?php

/**
 * Helper to provide a workaround for PHP bug #49692
 *
 * Some PHP versions are not able to parse INI-files if "/" is used for INI
 * keynames (known as bug #49692, see <http://bugs.php.net/bug.php?id=49692>).
 * Therefore, DokuWiki is not able to parse vector's style.ini and users don't
 * get the needed CSS (but errors like "syntax error, unexpected '/' in
 * ../../lib/tpl/vector/style.ini on line XX" instead). To get things work in
 * such environments, simply delete the "style.ini". Then the template uses
 * this helper to get the CSS.
 *
 * Known disadvantages: A little bit more traffic compared to an environment
 * without this bug and DokuWiki's "compress" feature enabled (cause this
 * feature does not have any effect on vector's CSS files when using this
 * workaround, and therefore non-minimized and uncompressed CSS will be
 * delivered).
 *
 *
 * LICENSE: This file is open source software (OSS) and may be copied under
 *          certain conditions. See COPYING file for details or try to contact
 *          the author(s) of this file in doubt.
 *
 * @license GPLv2 (http://www.gnu.org/licenses/gpl2.html)
 * @author Andreas Haerter <development@andreas-haerter.com>
 * @link http://bugs.php.net/bug.php?id=49692
 * @link http://forum.dokuwiki.org/thread/4827
 * @link http://andreas-haerter.com/projects/dokuwiki-template-vector
 * @link http://www.dokuwiki.org/template:vector
 * @link http://www.dokuwiki.org/devel:css#styleini
 */


//workaround for PHP Bug #49692
//If you are affected, simply delete vector's style.ini to trigger the
//template to use this workaround.

//we are rebuilding a CSS file, send needed headers (otherwise, the browser
//would interpret this as text/plain or XHTML)
header("Content-Type: text/css");

//define placeholders as they are known out of the style.ini
$placeholder_names = array(//main text and background colors
                           "__text__",
                           "__background__",
                           //alternative text and background colors
                           "__text_alt__",
                           "__background_alt__",
                           //neutral text and background colors
                           "__text_neu__",
                           "__background_neu__",
                           //border color
                           "__border__",
                           //these are used for links
                           "__existing__",
                           "__missing__",
                           //highlighting search snippets
                           "__highlight__");
$placeholder_values = array(//main text and background colors
                            "#000",
                            "#fff",
                            //alternative text and background colors
                            "#000",
                            "#dee7ec",
                            //neutral text and background colors
                            "#000",
                            "#fff",
                            //border color
                            "#8cacbb",
                            //these are used for links
                            "#002bb8",
                            "#ba0000",
                            //highlighting search snippets
                            "#ff9");

//get needed file contents: screen media CSS
$interim =  trim(file_get_contents("./static/3rd/dokuwiki/basic.css"))."\n"
           .trim(file_get_contents("./static/3rd/dokuwiki/structure.css"))."\n"
           .trim(file_get_contents("./static/3rd/dokuwiki/design.css"))."\n"
           .trim(file_get_contents("./static/3rd/dokuwiki/content.css"))."\n"
           .trim(file_get_contents("./static/3rd/dokuwiki/_imgdetail.css"))."\n"
           .trim(file_get_contents("./static/3rd/dokuwiki/_mediamanager.css"))."\n"
           .trim(file_get_contents("./static/3rd/dokuwiki/_links.css"))."\n"
           .trim(file_get_contents("./static/3rd/dokuwiki/_toc.css"))."\n"
           .trim(file_get_contents("./static/3rd/dokuwiki/_footnotes.css"))."\n"
           .trim(file_get_contents("./static/3rd/dokuwiki/_search.css"))."\n"
           .trim(file_get_contents("./static/3rd/dokuwiki/_recent.css"))."\n"
           .trim(file_get_contents("./static/3rd/dokuwiki/_diff.css"))."\n"
           .trim(file_get_contents("./static/3rd/dokuwiki/_edit.css"))."\n"
           .trim(file_get_contents("./static/3rd/dokuwiki/_modal.css"))."\n"
           .trim(file_get_contents("./static/3rd/dokuwiki/_forms.css"))."\n"
           .trim(file_get_contents("./static/3rd/dokuwiki/_admin.css"))."\n"
           .trim(file_get_contents("./static/3rd/dokuwiki/includes.css"))."\n";
if (!empty($_GET["langdir"]) &&
    $_GET["langdir"] === "rtl"){
  $interim .=  trim(file_get_contents("./static/3rd/dokuwiki/rtl.css"))."\n"
              .trim(file_get_contents("./static/3rd/vector/main-rtl.css"))."\n";
} else {
  $interim .= trim(file_get_contents("./static/3rd/vector/main-ltr.css"))."\n";
}
$interim .=  trim(file_get_contents("./static/css/screen.css"))."\n"
            .trim(file_get_contents("./user/screen.css"))."\n";
if (!empty($_GET["langdir"]) &&
    $_GET["langdir"] === "rtl"){
  $interim .=  trim(file_get_contents("./static/css/rtl.css"))."\n"
              .trim(file_get_contents("./user/rtl.css"))."\n";
}
//replace the placeholders with the corresponding values and send the needed CSS
echo "@media screen {\n".str_replace(//search
                                     $placeholder_names,
                                     //replace
                                     $placeholder_values,
                                     //haystack
                                     $interim)."\n}\n\n";

//get needed file contents: print media CSS
$interim =  trim(file_get_contents("./static/3rd/dokuwiki/print.css"))."\n"
           .trim(file_get_contents("./static/css/print.css"))."\n"
           .trim(file_get_contents("./user/print.css"))."\n";
//replace the placeholders with the corresponding values and send the needed CSS
echo "@media print {\n".str_replace(//search
                                    $placeholder_names,
                                    //replace
                                    $placeholder_values,
                                    //haystack
                                    $interim)."\n}\n\n";

