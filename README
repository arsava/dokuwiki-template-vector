
  I. About

    "vector" brings you the MediaWiki/Wikipedia 2010 look and feel for DokuWiki.
    It is a mostly optical port of the original MediaWiki "vector" skin.

    Website:     <https://www.dokuwiki.org/template:vector>
    Maintainer:  ARSAVA <https://dev.arsava.com/>
    Contact:     See "IV. Support" and "V. Contact".



  II. Installation and update

    The installation works as described [1] on DokuWiki.org. Extract the
    downloaded archive into your DokuWiki's "lib/tpl/" folder. Then select the
    template in the Config Manager by adjusting the template option.

    See the vector template website for update instructions [2].

    [1] <https://www.dokuwiki.org/template>
    [2] <https://www.dokuwiki.org/template:vector#update>



  III. Customizing the template

    In order to make updates of your installed "vector" template easy, follow
    these hints for customizing the template:

    - Place your files in "vector/user"
      The place to store *all* user-defined, custom stuff is the "vector/user"
      directory because your files will not be touched or overwritten on
      template updates! So you normally can copy all new files into "vector/"
      to update the template without loosing your changes.
      Note: There are example files helping you modifying the template.
            The are delivered with the ".dist" extensions. Just remove the
            ".dist" extension to use them.

    - Own logo
      If you want to replace the default logo showed in the upper left, simply
      create a "logo.[png|gif|jpg]" in "vector/user". The template recognizes
      the file automatically and will use it instead of the default logo.
      Note: Do not forget to empty your browser's cache if you cannot see any
            effect.

    - Own favicon
      If you want to replace the default favicon, simply create a "favicon.ico"
      in "vector/user". The template recognizes the file automatically and
      will use it instead of the default one. You might find the online FavIcon
      Generator [1] useful.
      Note: "favicon.png" is also possible but not recommended (because it is
            not supported by older MSIE versions).

    - Own CSS
      To apply additional CSS rules, create a
        - "vector/user/screen.css" file to influence the normal layout. You
          can rename the "screen.css.dist" to "screen.css" as starting point.
        - "vector/user/print.css" file to influence the print layout. You
          can rename the "print.css.dist" to "print.css" as starting point.
        - "vector/user/rtl.css" file to influences "right-to-left" languages
          like Hebrew. You can rename the "rtl.css.dist" to "rtl.css" as
          starting point.
      The file(s) will be included automatically (as the last ones for the
      relevant media, therefore you are able to overrule existing styles).
      Note: Do not forget to empty your browser's cache if you cannot see any
            effect.

    - Own JavaScript
      To load additional JavaScript, create a "vector/user/user.js" file. You
      can rename the "user.js.dist" to "user.js" as starting point (it contains
      some examples and useful comments how to define your own JavaScript).
      ATTENTION: You have to activate the template option "vector_loaduserjs"
                 (->"Load 'vector/user/user.js'?") in the DokuWiki Config
                 Manager!

    - Own CSS, language specific
      To apply additional CSS rules only for a specific language, edit/create
      "vector/lang/<your-language>/style.css". This file will be included
      automatically if DokuWiki runs/shows a page in the language of choice (as
      the last one, therefore you are able to overrule existing styles).
      Note: Do not forget to empty your browser's cache if you cannot see any
            effect.

    - Own tabs
      To apply own tabs, create a "vector/user/tabs.php" file. You can rename
      the "tabs.php.dist" to "tabs.php" as a good starting point (it contains
      some examples and useful comments how to define your own tabs). If you
      still have questions after playing with the examples, see "IV. Support"
      on how to get help.

    - Own footer buttons
      To apply own buttons/graphics in the footer (-> these small 80x15 pics),
      create a "vector/user/buttons.php" file. You can rename the
      "buttons.php.dist" to "buttons.php" as a good starting point (it contains
      some examples and useful comments how to define your own buttons). If you
      still have questions after playing with the examples, see "IV. Support"
      on how to get help.

    - Own boxes
      To apply own boxes in the left column/sidebar, create a
      "vector/user/boxes.php" file. You can rename the "boxes.php.dist" to
      "boxes.php" as a good starting point (it contains some examples and useful
      comments how to define your own boxes). If you still have questions after
      playing with the examples, see "IV. Support" on how to get help.

    - Web analytics software (Piwik, Google Analytics etc.)
      Tools like Piwik and Google Analytics normally provide a small code
      snippet ("tag") which you have to include at your website to make
      everything work. If you want to use such software with this template,
      create a "vector/user/tracker.php.dist". You don't have to deliberate
      where you have to copy and  paste the code, simply do it there. You can
      rename the "tracker.php.dist" to "tracker.php" as a good starting point
      (it contains some examples and useful comments how to define your own
      boxes).

    - Own Apple Touch Icon
      If you want to replace the default Apple Touch Icon, simply create a
      "apple-touch-icon.png" in "vector/user". The template recognizes the file
      automatically and will use it instead of the default one. Have a look at
      Apple's developer database (cf. "Configuring Web Applications" [2]) if you
      need more information.

    [1] <http://tools.dynamicdrive.com/favicon/>
    [2] <http://j.mp/sx3NMT>



  IV. Support

    If you need help, check the FAQ [1] and try to find useful information by
    using the DokuWiki Search page [2]. If you found nothing helpful, ask your
    question at the DokuWiki forum [3] (preferred) or IRC channel [4].

    [1] <https://www.dokuwiki.org/template:vector#faq>
    [2] <http://search.dokuwiki.org/>
    [3] <https://forum.dokuwiki.org/>
    [4] <https://www.dokuwiki.org/irc>



  V. Contact

    If you think you have found a bug or have a useful idea (a.k.a. "feature
    request"), create an issue [1] on GitHub (preferred), or contact us by
    mail [2].

    Feel free to submit patches as GitHub pull requests (preferred) or by mail
    as well. However, please try to respect the DokuWiki coding style [3] as
    this template follows its rules.

    [1] <https://github.com/arsava/dokuwiki-template-vector/issues>
    [2] ARSAVA <dokuwiki@dev.arsava.com>
    [3] <https://www.dokuwiki.org/devel:coding_style>



  VI. Other notes

    If you like this free project, you might buy us a coffee [1], or get some
    cool QR Code merchandise [2]. Thank you! :-)

    Do not hesitate to contact ARSAVA [3] if you need professional DokuWiki
    support, training or if you think we are the ones to get your project done.

    [1] <https://donate.arsava.com/dokuwiki-template-vector/>
    [2] <http://goqr.me/>
    [3] <https://dev.arsava.com/>



  VII. Explanatory notes about the dirs of this template

    - "vector/conf"
      Contains some configuration files (do NOT edit them!), especially
        - default.php: default settings [1]
        - metadata.php: configuration metadata [2]

    - "vector/lang"
      Language files (subdir names = language code). You may copy the English
      language files and translate them if your language is missing. Simply send
      us the translated files (cf. "V. Contact") and I will include them in the
      next release :-D.

    - "vector/static"
      Static files (images, CSS, JavaScript). The interesting stuff is located
      in subdirs (as described below).
      - "3rd"
        Static files originally taken from a third party like MediaWiki or
        DokuWiki. The subdir "dokuwiki" contains files originally taken from the
        DokuWiki "default" or "starter" template. The subdir "vector" contains
        files taken from the MediaWiki "vector" skin.
      - "css"
        All non-3rd-party Cascading Style Sheets (CSS). See my tutorial [3] for
        more information about how the CSS is handled.
      - "img"
        All non-3rd-party images files.
      - "js"
        All non-3rd-party JavaScript files.

    - "vector/user"
      Place for userdefined stuff. E.g. if you want use an own logo, simply copy
      a logo.[png|gif|jpg] in here. See "III. Customizing the template" for
      details.

    [1] <https://www.dokuwiki.org/devel:configuration#default_settings>
    [2] <https://www.dokuwiki.org/devel:configuration#configuration_metadata>
    [3] <http://j.mp/eq8zSo>



  VIII. Creation transcript

    Some developers may find this interesting. Additionally, I am very oblivious
    :-P.

    - Downloaded the nightly MediaWiki build (because only the SVN version is
      containing the vector skin as I'm writing this) from
      <http://toolserver.org/~vvv/mw-nightly/>.

    - Installed DokuWiki (Release "2009-12-25c", "Lemming") for testing purpose.

    - Copied all "monobook for DokuWiki" sources because it already fits some of
      my needs regarding config options and non-layout features. Means: I used
      the source of the "monobook for DokuWiki" template as base for "vector for
      DokuWiki".

    - replaced "monobook" through "vector" in:
      - /conf/*
      - /lang/*
      - /detail.php
      - /inc_cite.php
      - /inc_detail.php
      - /inc_mediamanager.php
      - /main.php
      - /mediamanager.php

    - After investigation, some 3rd-party files were copied into the provided
      places within "/vector/static/3rd".
      - The following files were copied from the original vector skin:
        - /skins/vector/csshover.htc
        - /skins/vector/main-ltr.css
        - /skins/vector/main-rtl.css
        - /skins/vector/images/*
      - The following files were copied from Andreas Gohr's "default" template:
        - /default/*.css (see <http://j.mp/eq8zSo> why I did that)
        - /default/images/closed.gif
        - /default/images/favicon.ico
        - /default/images/open.gif
        - /default/images/tocdot2.gif
      - The following files were copied from Anika Henke's's "starter" template:
        - /starter/images/external-link.png
        - /starter/images/unc.png
        - /starter/images/email.png

    - Edited:
      - "/vector/static/3rd/vector/main-ltr.css"
        "/vector/static/3rd/vector/main-rtl.css"
        All url() rules were edited (-> replaced "url(images/" through
        "url(static/3rd/vector/", deleted "?1" and "?2 postfixes").
        To make this clear, a comment was added at the top of the files.

      - "/vector/static/3rd/dokuwiki/design.css"
        All url() rules were edited (-> replaced "url(images/" through
        "url(static/3rd/dokuwiki/").
        To make this clear, a comment was added at the top of the files.

    - Visited <http://en.wikipedia.org/w/index.php?title=ASCII>, copied the
      XHTML source and let Tidy do the dirty work to get a valid clean and
      correctly indented base markup (after core removal, for sure). This markup
      was then compared with the current main.php and needed changes where done.

    - Created new files:
      - "vector/static/css/print.css"
      - "vector/static/css/rtl.css"
      - "vector/static/css/screen.css"
      All relevant information should be found within the inline comments.

    - Worked worked worked a few days.... and done! :-P

    - After ~1 year, I switched the CSS base from DokuWiki's default template
      to <https://www.dokuwiki.org/template:starter>. See <http://j.mp/f7V4ES>
      for more information about this. I edited some files, see
      "vector/static/3rd/dokuwiki/00_starter-tmpl-notes.txt" for details.

