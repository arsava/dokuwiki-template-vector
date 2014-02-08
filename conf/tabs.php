<?php

/**
 * Default tab configuration of the "vector" DokuWiki template
 *
 *
 * LICENSE: This file is open source software (OSS) and may be copied under
 *          certain conditions. See COPYING file for details or try to contact
 *          the author(s) of this file in doubt.
 *
 * @license GPLv2 (http://www.gnu.org/licenses/gpl2.html)
 * @author ARSAVA <dokuwiki@dev.arsava.com>
 * @link https://www.dokuwiki.org/template:vector
 * @link https://www.dokuwiki.org/devel:configuration
 */



/******************************************************************************
 ********************************  ATTENTION  *********************************
         DO NOT MODIFY THIS FILE, IT WILL NOT BE PRESERVED ON UPDATES!
 ******************************************************************************
  If you want to add some own tabs, have a look at the README of this template
  and "/user/tabs.php". You have been warned!
 *****************************************************************************/


//check if we are running within the DokuWiki environment
if (!defined("DOKU_INC")){
    die();
}



/****************************** LEFT NAVIGATION ******************************/

//note: The tabs will be rendered in the order they were defined. Means: first
//      tab will be rendered first, last tab will be rendered at last.



//article tab
//ATTENTION: "ca-nstab-main" is used as css id selector!
if (substr(getID(), 0, strlen("wiki:user:")) !== "wiki:user:"){
    $_vector_tabs_left["ca-nstab-main"]["text"] = $lang["vector_article"];
}else{
    $_vector_tabs_left["ca-nstab-main"]["text"] = $lang["vector_userpage"];
}
$_vector_tabs_left["ca-nstab-main"]["accesskey"] = "V";
if ($vector_context !== "discuss"){ //$vector_context was defined within main.php
    $_vector_tabs_left["ca-nstab-main"]["wiki"]  = ":".getID();
    $_vector_tabs_left["ca-nstab-main"]["class"] = "selected";
}else{
    $_vector_tabs_left["ca-nstab-main"]["wiki"]  = ":".substr(getID(), strlen(tpl_getConf("vector_discuss_ns"))-1);
}


//hide some tabs for anonymous clients (closed wiki)?
if (empty($conf["useacl"]) || //are there any users?
    $loginname !== "" || //user is logged in?
    !tpl_getConf("vector_closedwiki")){

    //discussion tab
    //ATTENTION: "ca-talk" is used as css id selector!
    if (tpl_getConf("vector_discuss")){
        $_vector_tabs_left["ca-talk"]["text"] = $lang["vector_discussion"];
        if ($vector_context === "discuss"){ //$vector_context was defined within main.php
            $_vector_tabs_left["ca-talk"]["wiki"]  = ":".getID();
            $_vector_tabs_left["ca-talk"]["class"] = "selected";
        }else{
            $_vector_tabs_left["ca-talk"]["wiki"] = tpl_getConf("vector_discuss_ns").getID();
        }
    }

}



/****************************** RIGHT NAVIGATION ******************************/

//note: The tabs will be rendered in the order they were defined. Means: first
//      tab will be rendered first, last tab will be rendered at last.


//read tab
if(!empty($INFO["exists"])){
    //ATTENTION: "ca-view" is used as css id selector!
    $_vector_tabs_right["ca-view"]["text"] = $lang["vector_read"];
    if ($vector_context !== "discuss"){ //$vector_context was defined within main.php
        $_vector_tabs_right["ca-view"]["wiki"]  = ":".getID();
        if ($ACT === "show") { //$ACT comes from DokuWiki core
            $_vector_tabs_right["ca-view"]["class"] = "selected";
        }
    }else{
        $_vector_tabs_right["ca-view"]["wiki"]  = ":".substr(getID(), strlen(tpl_getConf("vector_discuss_ns"))-1);
    }
}


//hide some tabs for anonymous clients (closed wiki)?
if (empty($conf["useacl"]) || //are there any users?
    $loginname !== "" || //user is logged in?
    !tpl_getConf("vector_closedwiki")){

    //edit/create/show source tab
    //ATTENTION: "ca-edit" is used as css id selector!
    $_vector_tabs_right["ca-edit"]["href"]      = wl(cleanID(getId()), array("do" => "edit", "rev" => (int)$rev), false, "&");
    $_vector_tabs_right["ca-edit"]["accesskey"] = "E";
    if (!empty($INFO["writable"])){ //$INFO comes from DokuWiki core
        if (!empty($INFO["draft"])){
            $_vector_tabs_right["ca-edit"]["href"] = wl(cleanID(getId()), array("do" => "draft", "rev" => (int)$rev), false, "&");
            $_vector_tabs_right["ca-edit"]["text"] = $lang["btn_draft"]; //language comes from DokuWiki core
        }else{
            if(!empty($INFO["exists"])){
                $_vector_tabs_right["ca-edit"]["text"] = $lang["vector_edit"];
            }else{
                $_vector_tabs_right["ca-edit"]["text"] = $lang["vector_create"];
            }
        }
    }elseif (actionOK("source")){ //check if action is disabled
        $_vector_tabs_right["ca-edit"]["text"]      = $lang["btn_source"]; //language comes from DokuWiki core
        $_vector_tabs_right["ca-edit"]["accesskey"] = "E";
    }
    if ($ACT === "edit"){ //$ACT comes from DokuWiki core
        $_vector_tabs_right["ca-edit"]["class"] = "selected";
    }


    //old versions/revisions tab
    if (!empty($INFO["exists"]) &&
        actionOK("revisions")){ //check if action is disabled
        //ATTENTION: "ca-history" is used as css id selector!
        $_vector_tabs_right["ca-history"]["text"]      = $lang["btn_revs"]; //language comes from DokuWiki core
        $_vector_tabs_right["ca-history"]["href"]      = wl(cleanID(getId()), array("do" => "revisions"), false, "&");
        $_vector_tabs_right["ca-history"]["accesskey"] = "O";
        if ($ACT === "revisions"){ //$ACT comes from DokuWiki core
            $_vector_tabs_right["ca-history"]["class"] = "selected";
        }
    }


    //(un)subscribe tab
    //ATTENTION: "ca-watch" is used as css id selector!
    if (!empty($conf["useacl"]) &&
        !empty($conf["subscribers"]) &&
        !empty($loginname)){ //$loginname was defined within main.php
        //2010-11-07 "Anteater" and newer ones
        if (empty($lang["btn_unsubscribe"])) {
            if (actionOK("subscribe")){ //check if action is disabled
                $_vector_tabs_right["ca-watch"]["href"] = wl(cleanID(getId()), array("do" => "subscribe"), false, "&");
                $_vector_tabs_right["ca-watch"]["text"] = $lang["btn_subscribe"]; //language comes from DokuWiki core
            }
        //2009-12-25 "Lemming" and older ones. See the following for information:
        //<http://www.freelists.org/post/dokuwiki/Question-about-tpl-buttonsubscribe>
        } else {
            if (empty($INFO["subscribed"]) && //$INFO comes from DokuWiki core
                actionOK("subscribe")){ //check if action is disabled
                $_vector_tabs_right["ca-watch"]["href"] = wl(cleanID(getId()), array("do" => "subscribe"), false, "&");
                $_vector_tabs_right["ca-watch"]["text"] = $lang["btn_subscribe"]; //language comes from DokuWiki core
            }elseif (actionOK("unsubscribe")){ //check if action is disabled
                $_vector_tabs_right["ca-watch"]["href"] = wl(cleanID(getId()), array("do" => "unsubscribe"), false, "&");
                $_vector_tabs_right["ca-watch"]["text"] = $lang["btn_unsubscribe"]; //language comes from DokuWiki core
            }
        }
    }

}

/******************************************************************************
 ********************************  ATTENTION  *********************************
         DO NOT MODIFY THIS FILE, IT WILL NOT BE PRESERVED ON UPDATES!
 ******************************************************************************
  If you want to add some own tabs, have a look at the README of this template
  and "/user/tabs.php". You have been warned!
 *****************************************************************************/

