<?php

/**
 * Image detail page
 *
 * See "detail.php" if you don't know how this is getting included within the
 * "main.php".
 *
 * NOTE: Based on the detail.php out of the "starter" template by Anika Henke.
 *
 *
 * LICENSE: This file is open source software (OSS) and may be copied under
 *          certain conditions. See COPYING file for details or try to contact
 *          the author(s) of this file in doubt.
 *
 * @license GPLv2 (http://www.gnu.org/licenses/gpl2.html)
 * @author ARSAVA <dokuwiki@dev.arsava.com>
 * @link https://www.dokuwiki.org/template:vector
 * @link https://www.dokuwiki.org/devel:templates
 */

//check if we are running within the DokuWiki environment
if (!defined("DOKU_INC")){
    die();
}
?>

    <div id="dokuwiki__detail" class="dokuwiki">
        <?php html_msgarea() ?>

        <?php if($ERROR){ print $ERROR; }else{ ?>

            <h1><?php echo hsc(tpl_img_getTag('IPTC.Headline',$IMG))?></h1>

            <div class="content">
                <?php tpl_img(900,700); /* parameters: maximum width, maximum height (and more) */ ?>

                <div class="img_detail">
                    <h2><?php print nl2br(hsc(tpl_img_getTag('simple.title'))); ?></h2>

                    <dl>
                        <?php
                            $config_files = getConfigFiles('mediameta');
                            foreach ($config_files as $config_file) {
                                if(@file_exists($config_file)) {
                                    include($config_file);
                                }
                            }

                            foreach($fields as $key => $tag){
                                $t = array();
                                if (!empty($tag[0])) {
                                    $t = array($tag[0]);
                                }
                                if(is_array($tag[3])) {
                                    $t = array_merge($t,$tag[3]);
                                }
                                $value = tpl_img_getTag($t);
                                if ($value) {
                                    echo '<dt>'.$lang[$tag[1]].':</dt><dd>';
                                    if ($tag[2] == 'date') {
                                        echo dformat($value);
                                    } else {
                                        echo hsc($value);
                                    }
                                    echo '</dd>';
                                }
                            }

                            $t_array = media_inuse(tpl_img_getTag('IPTC.File.Name',$IMG));
                            if (isset($t_array[0])) {
                                echo '<dt>'.$lang['reference'].':</dt>';
                                foreach ($t_array as $t) {
                                    echo '<dd>'.html_wikilink($t,$t).'</dd>';
                                }
                            }
                        ?>
                    </dl>
                    <?php //Comment in for Debug// dbg(tpl_img_getTag('Simple.Raw'));?>
                </div>
                <div class="clearer"></div>
            </div><!-- /.content -->

            <p class="back">
                <?php
                    $imgNS = getNS($IMG);
                    $authNS = auth_quickaclcheck("$imgNS:*");
                    if (($authNS >= AUTH_UPLOAD) && function_exists('media_managerURL')) {
                        $mmURL = media_managerURL(array('ns' => $imgNS, 'image' => $IMG));
                        echo '<a href="'.$mmURL.'">'.$lang['img_manager'].'</a><br />';
                    }
                ?>
                &larr; <?php echo $lang['img_backto']?> <?php tpl_pagelink($ID)?>
            </p>

        <?php } ?>
    </div>

