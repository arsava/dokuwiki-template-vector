<?php

/**
 * Russian language for the "Vector" DokuWiki template
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
 * @author anarchist IVANOV <ivanov@anarhist.org>
 * @author Aleksandr Selivanov <alexgearbox@gmail.com>
 * @link https://www.dokuwiki.org/template:vector
 * @link https://www.dokuwiki.org/config:lang
 * @link https://www.dokuwiki.org/devel:configuration
 */


//check if we are running within the DokuWiki environment
if (!defined("DOKU_INC")){
	die();
}

//пользовательские страницы
$lang['vector_userpage']                  = 'Добавить пользовательские страницы?';
$lang['vector_userpage_ns']               = 'Если &laquo;Да&raquo;, использовать следующее &laquo;:пространство_имён:&raquo; как корневое для пользовательских страниц:';

//страницы обсуждений
$lang['vector_discuss']                   = 'Использовать вкладки/страницы обсуждений?';
$lang['vector_discuss_ns']                = 'Если &laquo;Да&raquo;, использовать следующее &laquo;:пространство_имён:&raquo; как корневое для страниц обсуждений:';

//уведомления сайта
$lang['vector_sitenotice']                = 'Показывать уведомления сайта?';
$lang['vector_sitenotice_location']       = 'Если &laquo;Да&raquo;, использовать следующую страницу вики для уведомлений сайта:';

//навигация
$lang['vector_navigation']                = 'Показывать навигацию?';
$lang['vector_navigation_location']       = 'Если &laquo;Да&raquo;, использовать следующую страницу вики для создания навигации:';

//блок экспорта (печать/экспорт)
$lang['vector_exportbox']                 = 'Показывать блок &laquo;печать/экспорт&raquo;?';
$lang['vector_exportbox_default']         = 'Если &laquo;Да&raquo;, использовать блок &laquo;печать/экспорт&raquo; по&nbsp;умолчанию?';
$lang['vector_exportbox_location']        = 'Если не&nbsp;задействован блок по&nbsp;умолчанию, используйте следующую страницу вики как блок &laquo;печать/экспорт&raquo;:';

//инструменты
$lang['vector_toolbox']                   = 'Показывать инструменты?';
$lang['vector_toolbox_default']           = 'Если &laquo;Да&raquo;, использовать панель инструментов по&nbsp;умолчанию?';
$lang['vector_toolbox_location']          = 'Если не&nbsp;задействована панель по&nbsp;умолчанию, используйте следующую страницу вики как панель инструментов:';

//уведомления об авторских правах
$lang['vector_copyright']                 = 'Показывать уведомления об&nbsp;авторских правах?';
$lang['vector_copyright_default']         = 'Если &laquo;Да&raquo;, использовать уведомления по умолчанию?';
$lang['vector_copyright_location']        = 'Если &laquo;Нет&raquo;, использовать следующую страницу вики для уведомления об&nbsp;авторских правах:';

//ссылка/кнопка пожертвований
$lang['vector_donate']                    = 'Показывать ссылку/кнопку пожертвований?';
$lang['vector_donate_url']                = 'Если не&nbsp;задействована ссылка по&nbsp;умолчанию, используйте следующую ссылку для пожертвований:';

//TOC (список содержания страницы)
$lang['vector_toc_position']              = 'Расположение списка содержания страниц (TOC)';

//прочее
$lang['vector_breadcrumbs_position']      = 'Позиция навигационной цепочки (если включено):';
$lang['vector_youarehere_position']       = 'Расположение панели &laquo;Вы&nbsp;находитесь здесь&raquo; (если включено):';
$lang['vector_cite_author']               = 'Имя автора в&nbsp;&laquo;Цитировать страницу&raquo;:';
$lang['vector_loaduserjs']                = 'Подгружать &laquo;vector/user/user.js&raquo;?';
$lang['vector_closedwiki']                = 'Закрыть вики (большинство ссылок/вкладок/блоков будут скрыты от&nbsp;пользователя до&nbsp;входа)?';

