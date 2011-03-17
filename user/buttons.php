<?php

/**
 * User defined button configuration of the "vector" DokuWiki template
 *
 * If you want to add/remove some buttons, have a look at the comments/examples
 * and the DocBlock of {@link _vector_renderButtons()}, main.php
 *
 * To change the non-button related config, use the admin webinterface of
 * DokuWiki.
 *
 *
 * LICENSE: This file is open source software (OSS) and may be copied under
 *          certain conditions. See COPYING file for details or try to contact
 *          the author(s) of this file in doubt.
 *
 * @license GPLv2 (http://www.gnu.org/licenses/gpl2.html)
 * @author Andreas Haerter <development@andreas-haerter.com>
 * @link http://andreas-haerter.com/projects/dokuwiki-template-vector
 * @link http://www.dokuwiki.org/template:vector
 * @link http://www.dokuwiki.org/devel:configuration
 */


//check if we are running within the DokuWiki environment
if (!defined("DOKU_INC")){
    die();
}


//note: The buttons will be rendered in the order they were defined. Means:
//      first button will be rendered first, last button will be rendered at
//      last.


//W3C (X)HTML validator button
$_vector_btns["valid_xhtml"]["img"]      = DOKU_TPL."user/button-xhtml.png";
$_vector_btns["valid_xhtml"]["href"]     = "http://validator.w3.org/check/referer";
$_vector_btns["valid_xhtml"]["width"]    = 80;
$_vector_btns["valid_xhtml"]["height"]   = 15;
$_vector_btns["valid_xhtml"]["title"]    = "Valid XHTML";
$_vector_btns["valid_xhtml"]["nofollow"] = true;






//examples: remove comments to see what is happening

/*
//W3C CSS validator button
$_vector_btns["valid_css"]["img"]      = DOKU_TPL."user/button-css.png";
$_vector_btns["valid_css"]["href"]     = "http://jigsaw.w3.org/css-validator/check/referer";
$_vector_btns["valid_css"]["width"]    = 80;
$_vector_btns["valid_css"]["height"]   = 15;
$_vector_btns["valid_css"]["title"]    = "Valid CSS";
$_vector_btns["valid_css"]["nofollow"] = true;
*/


/*
//button using all attributes
$_vector_btns["example1"]["img"]      = DOKU_TPL."user/img/yourButtonHere.png";
$_vector_btns["example1"]["href"]     = "http://www.example.com";
$_vector_btns["example1"]["width"]    = 80;
$_vector_btns["example1"]["height"]   = 15;
$_vector_btns["example1"]["title"]    = "Example button";
$_vector_btns["example1"]["nofollow"] = false;
*/


/*
//button using only mandatory attributes
$_vector_btns["example2"]["img"]      = DOKU_TPL."user/img/yourButtonHere.png";
$_vector_btns["example2"]["href"]     = "http://www.example.com";
*/
