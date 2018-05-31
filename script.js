/**
 * Copy all the navigational links into a single mobile menu
 */
jQuery(function () {
    var $mobilemenu = jQuery('<div>')
        .addClass('mobile-menu');


    var $logo = jQuery('#p-logo')
        .clone()
        .removeAttr('id')
        .addClass('mobile-logo')
    ;

    var $search = jQuery('#p-search form')
        .clone()
        .removeAttr('id')
        .addClass('mobile-search');
    $search.find('#simpleSearch').removeAttr('id');
    $search.find('button').text('🔍');

    $mobilemenu.append($search);

    jQuery([
        'p-navigation',
        'left-navigation',
        'right-navigation',
        'p-coll-print_export',
        'p-tb',
        'p-personal'
    ]).each(function (i, name) {
        var ul = jQuery('<ul>');
        $mobilemenu.append(ul);

        var filter = '#' + name + ' li';
        ul.addClass('mobile-' + name);
        ul.append(
            jQuery(filter)
                .not('.selected')
                .clone()
                .removeAttr('id')
        );
    });

    var $hamburger = jQuery('<div>')
        .addClass('mobile-hamburger')
        .click(function () {
            $mobilemenu.toggleClass('open');
            $hamburger.toggleClass('open')
        });


    jQuery('body')
        .append([
            $mobilemenu,
            $hamburger
        ])
        .prepend(
            $logo
        )
    ;
});
