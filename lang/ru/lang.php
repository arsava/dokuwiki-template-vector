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

//вкладки, личные инструменты и спецссылки
$lang['vector_article']                   = 'Статья';
$lang['vector_discussion']                = 'Обсуждение';
$lang['vector_read']                      = 'Чтение';
$lang['vector_edit']                      = 'Правка';
$lang['vector_create']                    = 'Cоздать';
$lang['vector_userpage']                  = 'Моя страница';
$lang['vector_specialpage']               = 'Спецстраницы';
$lang['vector_mytalk']                    = 'Моя страница обсуждения';
$lang['vector_exportodt']                 = 'Экспорт в ODT';
$lang['vector_exportpdf']                 = 'Экспорт в PDF';
$lang['vector_subscribens']               = 'Подписка на&nbsp;правки раздела'; //оригинальный перевод DW $lang['btn_subscribens'] слишком длинный для вкладок
$lang['vector_unsubscribens']             = 'Отписка от&nbsp;правок раздела'; //оригинальный перевод DW $lang['btn_unsubscribens'] слишком длинный для вкладок
$lang['vector_translations']              = 'Языки';

//заголовки для различных блоков
$lang['vector_navigation']                = 'Навигация';
$lang['vector_toolbox']                   = 'Инструменты';
$lang['vector_exportbox']                 = 'Печать/экспорт';
$lang['vector_inotherlanguages']          = 'На других языках';
$lang['vector_printexport']               = 'Печать/экспорт';
$lang['vector_personnaltools']            = 'Личные инструменты';

//кнопки
$lang['vector_btn_go']                    = '»';
$lang['vector_btn_search']                = 'Искать';
$lang['vector_btn_search_title']          = 'Найти страницы, содержащие указанный текст';

//блок экспорта (печать/экспорт)
$lang['vector_exportbxdef_print']         = 'Версия для печати';
$lang['vector_exportbxdef_downloadodt']   = 'Скачать как ODT';
$lang['vector_exportbxdef_downloadpdf']   = 'Скачать как PDF';

//инструменты по умолчанию
$lang['vector_toolbxdef_whatlinkshere']   = 'Ссылки сюда';
$lang['vector_toolbxdef_upload']          = 'Загрузить файл';
$lang['vector_toolbxdef_siteindex']       = 'Все страницы';
$lang['vector_toolboxdef_permanent']      = 'Постоянная ссылка';
$lang['vector_toolboxdef_cite']           = 'Цитировать страницу';

//цитирование страницы
$lang['vector_cite_bibdetailsfor']        = 'Библиографические данные статьи';
$lang['vector_cite_pagename']             = 'Статья';
$lang['vector_cite_author']               = 'Автор';
$lang['vector_cite_publisher']            = 'Опубликовано';
$lang['vector_cite_dateofrev']            = 'Дата последнего изменения';
$lang['vector_cite_dateretrieved']        = 'Дата загрузки';
$lang['vector_cite_permurl']              = 'Постоянная ссылка';
$lang['vector_cite_pageversionid']        = 'Идентификатор страницы';
$lang['vector_cite_citationstyles']       = 'Варианты оформления ссылок на&nbsp;статью';
$lang['vector_cite_checkstandards']       = 'Пожалуйста, не&nbsp;забудьте проверить руководство по&nbsp;стилю, пособие по&nbsp;стандартам или точные рекомендации посинтаксису работы для соответствия вашим нуждам.';
$lang['vector_cite_latexusepackagehint']  = 'При использовании LaTeX-пакета url для более наглядного представления веб-адресов (\usepackage{url} в преамбуле), вероятно, лучше будет указать';
$lang['vector_cite_retrieved']            = 'Retrieved';
$lang['vector_cite_from']                 = 'from';
$lang['vector_cite_in']                   = 'In';
$lang['vector_cite_accessed']             = 'accessed';
$lang['vector_cite_cited']                = 'cited';
$lang['vector_cite_lastvisited']          = 'last visited';
$lang['vector_cite_availableat']          = 'available at';
$lang['vector_cite_discussionpages']      = 'Страницы обсуждения в&nbsp;&laquo;ДокуВики&raquo;';
$lang['vector_cite_markup']               = 'Разметка';
$lang['vector_cite_result']               = 'Результат';
$lang['vector_cite_thisversion']          = 'текущая версия';

//прочее
$lang['vector_search']                    = 'Поиск';
$lang['vector_accessdenied']              = 'Доступ запрещён';
$lang['vector_fillplaceholder']           = 'Пожалуйста, укажите значение';
$lang['vector_donate']                    = 'Помощь';
$lang['vector_mdtemplatefordw']           = 'Шаблон &laquo;Вектор&raquo; для &laquo;ДокуВики&raquo;';
$lang['vector_recentchanges']             = 'Последние изменения';

