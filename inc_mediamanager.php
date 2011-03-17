<?php

/**
 * Content for the media manager popup
 *
 * See "mediamanager.php" if you don't know how this is getting included
 * within the "main.php".
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
 * @link http://www.dokuwiki.org/devel:templates
 */

//check if we are running within the DokuWiki environment
if (!defined("DOKU_INC")){
    die();
}

?>
<div id="media__manager" class="dokuwiki">
  <table id="media__manager_table" border="0" width="100%" cellpadding="0" cellspacing="0">
    <tr>
      <td align="left" valign="top" id="media__left">
        <h1><?php echo hsc($lang["mediaselect"]); ?></h1>

        <?php /* keep the id! additional elements are inserted via JS here */?>
        <div id="media__opts"></div>

        <?php tpl_mediaTree() ?>
      </td>
      <td align="left" valign="top">
        <div id="media__right">
          <?php tpl_mediaContent() ?>
        </div>
      </td>
    </tr>
  </table>
</div>

