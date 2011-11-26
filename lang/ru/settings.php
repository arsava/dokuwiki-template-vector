<?php

/**
 * Russian language for the "Vector" DokuWiki template
 *
 * Если перевод на ваш язык не сделан, сделан частично, вы нашли ошибку
 * или опечатку, вы можете посмотреть следующие файлы:
 *   - "/lib/tpl/vector/lang/<ваш язык>/lang.php"
 *   - "/lib/tpl/vector/lang/<ваш язык>/settings.php"
 * Если их не существует, копируйте и переведите английские файлы 
 * (подсказка: загляните на <http://[ваш язык].wikipedia.org/>).
 * И не забудьте прислать мне перевод электронной почтой:
 * Андреас Хертер <development@andreas-haerter.com>. Спасибо :-D
 *
 *
 * ЛИЦЕНЗИЯ: этот файл является программным обеспечением с открытым кодом
 *           (Open Source Software) и может быть копирован на определенных
 *           условиях. См. файл COPYING для подробностей или попробуйте
 *           связаться с автором(ами) данного файла, если имеются сомнения.
 *
 * @license GPLv2 (http://www.gnu.org/licenses/gpl2.html)
 * @author anarchist IVANOV <ivanov@anarhist.org>
 * @author Aleksandr Selivanov <alexgearbox@gmail.com>
 * @link http://andreas-haerter.com/projects/dokuwiki-template-vector
 * @link http://www.dokuwiki.org/template:vector
 * @link http://www.dokuwiki.org/config:lang
 * @link http://www.dokuwiki.org/devel:configuration
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
$lang['vector_donate_default']            = 'Если &laquo;Да&raquo;, использовать ссылку для пожертвований по&nbsp;умолчанию?';
$lang['vector_donate_url']                = 'Если не&nbsp;задействована ссылка по&nbsp;умолчанию, используйте следующую ссылку для пожертвований:';

//TOC (список содержания страницы)
$lang['vector_toc_position']              = 'Расположение списка содержания страниц (TOC)';

//прочее
$lang['vector_breadcrumbs_position']      = 'Позиция навигационной цепочки (если включено):';
$lang['vector_youarehere_position']       = 'Расположение панели &laquo;Вы&nbsp;находитесь здесь&raquo; (если включено):';
$lang['vector_cite_author']               = 'Имя автора в&nbsp;&laquo;Цитировать страницу&raquo;:';
$lang['vector_loaduserjs']                = 'Подгружать &laquo;vector/user/user.js&raquo;?';
$lang['vector_closedwiki']                = 'Закрыть вики (большинство ссылок/вкладок/блоков будут скрыты от&nbsp;пользователя до&nbsp;входа)?';

