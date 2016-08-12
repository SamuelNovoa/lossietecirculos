<?php

/* overall_header.html */
class __TwigTemplate_ae8880a885c999b2844bbe986a1bd1e93eb599e55418140cac804813611bf098 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo (isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null);
        echo "\" lang=\"";
        echo (isset($context["S_USER_LANG"]) ? $context["S_USER_LANG"] : null);
        echo "\">
<head>
<meta charset=\"utf-8\" />
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
";
        // line 7
        echo (isset($context["META"]) ? $context["META"] : null);
        echo "
<title>";
        // line 8
        if ((isset($context["UNREAD_NOTIFICATIONS_COUNT"]) ? $context["UNREAD_NOTIFICATIONS_COUNT"] : null)) {
            echo "(";
            echo (isset($context["UNREAD_NOTIFICATIONS_COUNT"]) ? $context["UNREAD_NOTIFICATIONS_COUNT"] : null);
            echo ") ";
        }
        if (( !(isset($context["S_VIEWTOPIC"]) ? $context["S_VIEWTOPIC"] : null) &&  !(isset($context["S_VIEWFORUM"]) ? $context["S_VIEWFORUM"] : null))) {
            echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
            echo " - ";
        }
        if ((isset($context["S_IN_MCP"]) ? $context["S_IN_MCP"] : null)) {
            echo $this->env->getExtension('phpbb')->lang("MCP");
            echo " - ";
        } elseif ((isset($context["S_IN_UCP"]) ? $context["S_IN_UCP"] : null)) {
            echo $this->env->getExtension('phpbb')->lang("UCP");
            echo " - ";
        }
        echo (isset($context["PAGE_TITLE"]) ? $context["PAGE_TITLE"] : null);
        if (((isset($context["S_VIEWTOPIC"]) ? $context["S_VIEWTOPIC"] : null) || (isset($context["S_VIEWFORUM"]) ? $context["S_VIEWFORUM"] : null))) {
            echo " - ";
            echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        }
        echo "</title>

";
        // line 10
        if ((isset($context["S_ENABLE_FEEDS"]) ? $context["S_ENABLE_FEEDS"] : null)) {
            // line 11
            echo "\t";
            if ((isset($context["S_ENABLE_FEEDS_OVERALL"]) ? $context["S_ENABLE_FEEDS_OVERALL"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "\">";
            }
            // line 12
            echo "\t";
            if ((isset($context["S_ENABLE_FEEDS_NEWS"]) ? $context["S_ENABLE_FEEDS_NEWS"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("FEED_NEWS");
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?mode=news\">";
            }
            // line 13
            echo "\t";
            if ((isset($context["S_ENABLE_FEEDS_FORUMS"]) ? $context["S_ENABLE_FEEDS_FORUMS"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("ALL_FORUMS");
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?mode=forums\">";
            }
            // line 14
            echo "\t";
            if ((isset($context["S_ENABLE_FEEDS_TOPICS"]) ? $context["S_ENABLE_FEEDS_TOPICS"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("FEED_TOPICS_NEW");
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?mode=topics\">";
            }
            // line 15
            echo "\t";
            if ((isset($context["S_ENABLE_FEEDS_TOPICS_ACTIVE"]) ? $context["S_ENABLE_FEEDS_TOPICS_ACTIVE"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("FEED_TOPICS_ACTIVE");
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?mode=topics_active\">";
            }
            // line 16
            echo "\t";
            if (((isset($context["S_ENABLE_FEEDS_FORUM"]) ? $context["S_ENABLE_FEEDS_FORUM"] : null) && (isset($context["S_FORUM_ID"]) ? $context["S_FORUM_ID"] : null))) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("FORUM");
                echo " - ";
                echo (isset($context["FORUM_NAME"]) ? $context["FORUM_NAME"] : null);
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?f=";
                echo (isset($context["S_FORUM_ID"]) ? $context["S_FORUM_ID"] : null);
                echo "\">";
            }
            // line 17
            echo "\t";
            if (((isset($context["S_ENABLE_FEEDS_TOPIC"]) ? $context["S_ENABLE_FEEDS_TOPIC"] : null) && (isset($context["S_TOPIC_ID"]) ? $context["S_TOPIC_ID"] : null))) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("TOPIC");
                echo " - ";
                echo (isset($context["TOPIC_TITLE"]) ? $context["TOPIC_TITLE"] : null);
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?f=";
                echo (isset($context["S_FORUM_ID"]) ? $context["S_FORUM_ID"] : null);
                echo "&amp;t=";
                echo (isset($context["S_TOPIC_ID"]) ? $context["S_TOPIC_ID"] : null);
                echo "\">";
            }
            // line 18
            echo "\t";
        }
        // line 20
        echo "
";
        // line 21
        if ((isset($context["U_CANONICAL"]) ? $context["U_CANONICAL"] : null)) {
            // line 22
            echo "\t<link rel=\"canonical\" href=\"";
            echo (isset($context["U_CANONICAL"]) ? $context["U_CANONICAL"] : null);
            echo "\">
";
        }
        // line 24
        echo "
<!--
\tphpBB style name: PBWoW 3
\tBased on style:   prosilver (this is the default phpBB3 style)
\tOriginal author:  Tom Beddard ( http://www.subBlue.com/ )
\tModified by: PayBas ( http://www.pbwow.com/ )
-->

";
        // line 32
        if ((isset($context["S_ALLOW_CDN"]) ? $context["S_ALLOW_CDN"] : null)) {
            // line 33
            echo "<script>
\tWebFontConfig = {
\t\tgoogle: {
\t\t\tfamilies: ['Open+Sans:600:cyrillic-ext,latin,greek-ext,greek,vietnamese,latin-ext,cyrillic']
\t\t}
\t};

\t(function(d) {
\t\tvar wf = d.createElement('script'), s = d.scripts[0];
\t\twf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js';
\t\twf.async = true;
\t\ts.parentNode.insertBefore(wf, s);
\t})(document);
</script>
";
        }
        // line 48
        echo "
\t<link href=\"";
        // line 49
        echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
        echo "styles/prosilver/theme/common.css?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 50
        echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
        echo "styles/prosilver/theme/links.css?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 51
        echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
        echo "styles/prosilver/theme/content.css?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 52
        echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
        echo "styles/prosilver/theme/buttons.css?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 53
        echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
        echo "styles/prosilver/theme/cp.css?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 54
        echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
        echo "styles/prosilver/theme/forms.css?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\" rel=\"stylesheet\">

\t";
        // line 56
        if (((isset($context["T_THEME_NAME"]) ? $context["T_THEME_NAME"] : null) !== "pbwow3")) {
            // line 57
            echo "\t<link href=\"";
            echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
            echo "styles/pbwow3/theme/stylesheet.css?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\" rel=\"stylesheet\">
\t";
        }
        // line 59
        echo "\t";
        if (((isset($context["T_THEME_NAME"]) ? $context["T_THEME_NAME"] : null) == "pbwow3_wildstar")) {
            // line 60
            echo "\t\t<link href=\"";
            echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
            echo "styles/pbwow3_heroes/theme/stylesheet.css?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\" rel=\"stylesheet\">
\t";
        } elseif ((        // line 61
(isset($context["T_THEME_NAME"]) ? $context["T_THEME_NAME"] : null) == "pbwow3_xmas")) {
            // line 62
            echo "\t\t<link href=\"";
            echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
            echo "styles/pbwow3_wotlk/theme/stylesheet.css?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\" rel=\"stylesheet\">
\t";
        }
        // line 64
        echo "
\t<link href=\"";
        // line 65
        echo (isset($context["T_STYLESHEET_LINK"]) ? $context["T_STYLESHEET_LINK"] : null);
        echo "\" rel=\"stylesheet\">

\t";
        // line 67
        if (((((((((isset($context["T_THEME_NAME"]) ? $context["T_THEME_NAME"] : null) == "pbwow3") || ((isset($context["T_THEME_NAME"]) ? $context["T_THEME_NAME"] : null) == "pbwow3_battlecry")) || ((isset($context["T_THEME_NAME"]) ? $context["T_THEME_NAME"] : null) == "pbwow3_garrison")) || ((isset($context["T_THEME_NAME"]) ? $context["T_THEME_NAME"] : null) == "pbwow3_pandaria")) || ((isset($context["T_THEME_NAME"]) ? $context["T_THEME_NAME"] : null) == "pbwow3_tbc")) || ((isset($context["T_THEME_NAME"]) ? $context["T_THEME_NAME"] : null) == "pbwow3_tribute")) || ((isset($context["T_THEME_NAME"]) ? $context["T_THEME_NAME"] : null) == "pbwow3_warlords"))) {
            // line 68
            echo "\t\t<link href=\"";
            echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
            echo "styles/pbwow3/theme/";
            echo (isset($context["T_THEME_LANG_NAME"]) ? $context["T_THEME_LANG_NAME"] : null);
            echo "/stylesheet.css?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\" rel=\"stylesheet\">
\t";
        } elseif (((        // line 69
(isset($context["T_THEME_NAME"]) ? $context["T_THEME_NAME"] : null) == "pbwow3_wotlk") || ((isset($context["T_THEME_NAME"]) ? $context["T_THEME_NAME"] : null) == "pbwow3_xmas"))) {
            // line 70
            echo "\t\t<link href=\"";
            echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
            echo "styles/pbwow3_wotlk/theme/";
            echo (isset($context["T_THEME_LANG_NAME"]) ? $context["T_THEME_LANG_NAME"] : null);
            echo "/stylesheet.css?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\" rel=\"stylesheet\">
\t";
        }
        // line 72
        echo "
\t<link href=\"";
        // line 73
        echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
        echo "styles/prosilver/theme/responsive.css?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\" rel=\"stylesheet\" media=\"all and (max-width: 700px)\">
\t<link href=\"";
        // line 74
        echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
        echo "styles/pbwow3/theme/responsive.css?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\" rel=\"stylesheet\" media=\"all and (max-width: 700px)\">
\t";
        // line 75
        if ((((isset($context["T_THEME_NAME"]) ? $context["T_THEME_NAME"] : null) == "pbwow3_heroes") || ((isset($context["T_THEME_NAME"]) ? $context["T_THEME_NAME"] : null) == "pbwow3_wildstar"))) {
            // line 76
            echo "\t\t<link href=\"";
            echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
            echo "styles/pbwow3_heroes/theme/responsive.css?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\" rel=\"stylesheet\" media=\"all and (max-width: 700px)\">
\t";
        }
        // line 78
        echo "
\t";
        // line 79
        if ((isset($context["S_PBWOW_AVATARS"]) ? $context["S_PBWOW_AVATARS"] : null)) {
            // line 80
            echo "\t<link href=\"";
            echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
            echo "styles/pbwow3/theme/game-icons.css?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\" rel=\"stylesheet\">
\t";
        }
        // line 82
        echo "
\t<link href=\"";
        // line 83
        echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
        echo "styles/pbwow3/theme/custom.css?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\" rel=\"stylesheet\">
\t";
        // line 84
        if ((((isset($context["T_THEME_NAME"]) ? $context["T_THEME_NAME"] : null) == "pbwow3_heroes") || ((isset($context["T_THEME_NAME"]) ? $context["T_THEME_NAME"] : null) == "pbwow3_wildstar"))) {
            // line 85
            echo "\t\t<link href=\"";
            echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
            echo "styles/pbwow3_heroes/theme/custom.css?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\" rel=\"stylesheet\">
\t";
        } elseif ((        // line 86
(isset($context["T_THEME_NAME"]) ? $context["T_THEME_NAME"] : null) == "pbwow3_tech")) {
            // line 87
            echo "\t\t<link href=\"";
            echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
            echo "styles/pbwow3_tech/theme/custom.css?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\" rel=\"stylesheet\">
\t";
        }
        // line 89
        echo "
\t";
        // line 90
        if (((isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null) == "rtl")) {
            // line 91
            echo "\t<link href=\"";
            echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
            echo "styles/prosilver/theme/bidi.css?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\" rel=\"stylesheet\">
\t<link href=\"";
            // line 92
            echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
            echo "styles/pbwow3/theme/bidi.css?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\" rel=\"stylesheet\">
\t";
        }
        // line 94
        echo "
\t";
        // line 95
        if ((isset($context["S_PLUPLOAD"]) ? $context["S_PLUPLOAD"] : null)) {
            // line 96
            echo "\t<link href=\"";
            echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
            echo "styles/prosilver/theme/plupload.css?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\" rel=\"stylesheet\">
\t";
        }
        // line 98
        echo "
\t<!--[if lte IE 9]>
\t<link href=\"";
        // line 100
        echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
        echo "styles/pbwow3/theme/tweaks.css?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\" rel=\"stylesheet\">
\t";
        // line 101
        if ((((isset($context["T_THEME_NAME"]) ? $context["T_THEME_NAME"] : null) == "pbwow3_heroes") || ((isset($context["T_THEME_NAME"]) ? $context["T_THEME_NAME"] : null) == "pbwow3_wildstar"))) {
            // line 102
            echo "\t\t<link href=\"";
            echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
            echo "styles/pbwow3_heroes/theme/tweaks.css?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\" rel=\"stylesheet\">
\t";
        }
        // line 104
        echo "\t<![endif]-->

";
        // line 106
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('paybas_pbwow', '__main__'));
        $this->env->loadTemplate('@paybas_pbwow/event/overall_header_head_append.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 107
        echo "
";
        // line 108
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "STYLESHEETS", array());
        echo "

\t<link href=\"";
        // line 110
        echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
        echo "styles/pbwow3/theme/extensions.css?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\" rel=\"stylesheet\">
\t";
        // line 111
        if ((((isset($context["T_THEME_NAME"]) ? $context["T_THEME_NAME"] : null) == "pbwow3_heroes") || ((isset($context["T_THEME_NAME"]) ? $context["T_THEME_NAME"] : null) == "pbwow3_wildstar"))) {
            // line 112
            echo "\t\t<link href=\"";
            echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
            echo "styles/pbwow3_heroes/theme/extensions.css?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\" rel=\"stylesheet\">
\t";
        } elseif ((        // line 113
(isset($context["T_THEME_NAME"]) ? $context["T_THEME_NAME"] : null) == "pbwow3_tech")) {
            // line 114
            echo "\t\t<link href=\"";
            echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
            echo "styles/pbwow3_tech/theme/extensions.css?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\" rel=\"stylesheet\">
\t";
        }
        // line 116
        echo "
";
        // line 117
        // line 118
        echo "
</head>
<body id=\"phpbb\" class=\"nojs notouch section-";
        // line 120
        echo (isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null);
        echo " ";
        echo (isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null);
        echo " ";
        echo (isset($context["T_THEME_NAME"]) ? $context["T_THEME_NAME"] : null);
        echo " ";
        echo (isset($context["BODY_CLASS"]) ? $context["BODY_CLASS"] : null);
        echo "\">

";
        // line 122
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('paybas_pbwow', '__main__'));
        $this->env->loadTemplate('@paybas_pbwow/event/overall_header_body_before.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 123
        echo "
<div id=\"wrap\">
\t<a id=\"top\" class=\"anchor\" accesskey=\"t\"></a>
\t<div id=\"page-header\">
\t\t<div class=\"headerbar\" role=\"banner\">
\t\t\t<div class=\"inner\">

\t\t\t<div id=\"site-description\">
\t\t\t\t<a id=\"logo\" class=\"logo\" href=\"";
        // line 131
        if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
            echo (isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null);
        } else {
            echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
        }
        echo "\" title=\"";
        if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
            echo $this->env->getExtension('phpbb')->lang("SITE_HOME");
        } else {
            echo $this->env->getExtension('phpbb')->lang("INDEX");
        }
        echo "\"></a>
\t\t\t\t<h1>";
        // line 132
        echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        echo "</h1>
\t\t\t\t<p>";
        // line 133
        echo (isset($context["SITE_DESCRIPTION"]) ? $context["SITE_DESCRIPTION"] : null);
        echo "</p>
\t\t\t\t<p class=\"skiplink\"><a href=\"#start_here\">";
        // line 134
        echo $this->env->getExtension('phpbb')->lang("SKIP");
        echo "</a></p>
\t\t\t</div>

\t\t\t";
        // line 137
        // line 138
        echo "\t\t\t";
        if (((isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null) &&  !(isset($context["S_IN_SEARCH"]) ? $context["S_IN_SEARCH"] : null))) {
            // line 139
            echo "\t\t\t<div id=\"search-box\" class=\"search-box search-header\" role=\"search\">
\t\t\t\t<form action=\"";
            // line 140
            echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
            echo "\" method=\"get\" id=\"search\">
\t\t\t\t<fieldset>
\t\t\t\t\t<input name=\"keywords\" id=\"keywords\" type=\"search\" maxlength=\"128\" title=\"";
            // line 142
            echo $this->env->getExtension('phpbb')->lang("SEARCH_KEYWORDS");
            echo "\" class=\"inputbox search tiny\" size=\"20\" value=\"";
            echo (isset($context["SEARCH_WORDS"]) ? $context["SEARCH_WORDS"] : null);
            echo "\" placeholder=\"";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_MINI");
            echo "\" />
\t\t\t\t\t<button class=\"button icon-button search-icon\" type=\"submit\" title=\"";
            // line 143
            echo $this->env->getExtension('phpbb')->lang("SEARCH");
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH");
            echo "</button>
\t\t\t\t\t<a href=\"";
            // line 144
            echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
            echo "\" class=\"button icon-button search-adv-icon\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV");
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV");
            echo "</a>
\t\t\t\t\t";
            // line 145
            echo (isset($context["S_SEARCH_HIDDEN_FIELDS"]) ? $context["S_SEARCH_HIDDEN_FIELDS"] : null);
            echo "
\t\t\t\t</fieldset>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t";
        }
        // line 150
        echo "
\t\t\t</div>
\t\t</div>

\t\t";
        // line 154
        // line 155
        echo "\t\t";
        $location = "navbar_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("navbar_header.html", "overall_header.html", 155)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 156
        echo "\t</div>

\t";
        // line 158
        // line 159
        echo "
\t<a id=\"start_here\" class=\"anchor\"></a>
\t<div id=\"page-body\" role=\"main\">
\t\t";
        // line 162
        if ((((isset($context["S_BOARD_DISABLED"]) ? $context["S_BOARD_DISABLED"] : null) && (isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) && ((isset($context["U_MCP"]) ? $context["U_MCP"] : null) || (isset($context["U_ACP"]) ? $context["U_ACP"] : null)))) {
            // line 163
            echo "\t\t<div id=\"information\" class=\"rules\">
\t\t\t<div class=\"inner\">
\t\t\t\t<strong>";
            // line 165
            echo $this->env->getExtension('phpbb')->lang("INFORMATION");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</strong> ";
            echo $this->env->getExtension('phpbb')->lang("BOARD_DISABLED");
            echo "
\t\t\t</div>
\t\t</div>
\t\t";
        }
        // line 169
        echo "
\t\t";
        // line 170
    }

    public function getTemplateName()
    {
        return "overall_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  607 => 170,  604 => 169,  594 => 165,  590 => 163,  588 => 162,  583 => 159,  582 => 158,  578 => 156,  565 => 155,  564 => 154,  558 => 150,  550 => 145,  542 => 144,  536 => 143,  528 => 142,  523 => 140,  520 => 139,  517 => 138,  516 => 137,  510 => 134,  506 => 133,  502 => 132,  488 => 131,  478 => 123,  473 => 122,  462 => 120,  458 => 118,  457 => 117,  454 => 116,  446 => 114,  444 => 113,  437 => 112,  435 => 111,  429 => 110,  424 => 108,  421 => 107,  416 => 106,  412 => 104,  404 => 102,  402 => 101,  396 => 100,  392 => 98,  384 => 96,  382 => 95,  379 => 94,  372 => 92,  365 => 91,  363 => 90,  360 => 89,  352 => 87,  350 => 86,  343 => 85,  341 => 84,  335 => 83,  332 => 82,  324 => 80,  322 => 79,  319 => 78,  311 => 76,  309 => 75,  303 => 74,  297 => 73,  294 => 72,  284 => 70,  282 => 69,  273 => 68,  271 => 67,  266 => 65,  263 => 64,  255 => 62,  253 => 61,  246 => 60,  243 => 59,  235 => 57,  233 => 56,  226 => 54,  220 => 53,  214 => 52,  208 => 51,  202 => 50,  196 => 49,  193 => 48,  176 => 33,  174 => 32,  164 => 24,  158 => 22,  156 => 21,  153 => 20,  150 => 18,  133 => 17,  118 => 16,  107 => 15,  96 => 14,  85 => 13,  74 => 12,  63 => 11,  61 => 10,  36 => 8,  32 => 7,  22 => 2,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html dir="{S_CONTENT_DIRECTION}" lang="{S_USER_LANG}">*/
/* <head>*/
/* <meta charset="utf-8" />*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* <meta name="viewport" content="width=device-width, initial-scale=1" />*/
/* {META}*/
/* <title><!-- IF UNREAD_NOTIFICATIONS_COUNT -->({UNREAD_NOTIFICATIONS_COUNT}) <!-- ENDIF --><!-- IF not S_VIEWTOPIC and not S_VIEWFORUM -->{SITENAME} - <!-- ENDIF --><!-- IF S_IN_MCP -->{L_MCP} - <!-- ELSEIF S_IN_UCP -->{L_UCP} - <!-- ENDIF -->{PAGE_TITLE}<!-- IF S_VIEWTOPIC or S_VIEWFORUM --> - {SITENAME}<!-- ENDIF --></title>*/
/* */
/* <!-- IF S_ENABLE_FEEDS -->*/
/* 	<!-- IF S_ENABLE_FEEDS_OVERALL --><link rel="alternate" type="application/atom+xml" title="{L_FEED} - {SITENAME}" href="{U_FEED}"><!-- ENDIF -->*/
/* 	<!-- IF S_ENABLE_FEEDS_NEWS --><link rel="alternate" type="application/atom+xml" title="{L_FEED} - {L_FEED_NEWS}" href="{U_FEED}?mode=news"><!-- ENDIF -->*/
/* 	<!-- IF S_ENABLE_FEEDS_FORUMS --><link rel="alternate" type="application/atom+xml" title="{L_FEED} - {L_ALL_FORUMS}" href="{U_FEED}?mode=forums"><!-- ENDIF -->*/
/* 	<!-- IF S_ENABLE_FEEDS_TOPICS --><link rel="alternate" type="application/atom+xml" title="{L_FEED} - {L_FEED_TOPICS_NEW}" href="{U_FEED}?mode=topics"><!-- ENDIF -->*/
/* 	<!-- IF S_ENABLE_FEEDS_TOPICS_ACTIVE --><link rel="alternate" type="application/atom+xml" title="{L_FEED} - {L_FEED_TOPICS_ACTIVE}" href="{U_FEED}?mode=topics_active"><!-- ENDIF -->*/
/* 	<!-- IF S_ENABLE_FEEDS_FORUM and S_FORUM_ID --><link rel="alternate" type="application/atom+xml" title="{L_FEED} - {L_FORUM} - {FORUM_NAME}" href="{U_FEED}?f={S_FORUM_ID}"><!-- ENDIF -->*/
/* 	<!-- IF S_ENABLE_FEEDS_TOPIC and S_TOPIC_ID --><link rel="alternate" type="application/atom+xml" title="{L_FEED} - {L_TOPIC} - {TOPIC_TITLE}" href="{U_FEED}?f={S_FORUM_ID}&amp;t={S_TOPIC_ID}"><!-- ENDIF -->*/
/* 	<!-- EVENT overall_header_feeds -->*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF U_CANONICAL -->*/
/* 	<link rel="canonical" href="{U_CANONICAL}">*/
/* <!-- ENDIF -->*/
/* */
/* <!--*/
/* 	phpBB style name: PBWoW 3*/
/* 	Based on style:   prosilver (this is the default phpBB3 style)*/
/* 	Original author:  Tom Beddard ( http://www.subBlue.com/ )*/
/* 	Modified by: PayBas ( http://www.pbwow.com/ )*/
/* -->*/
/* */
/* <!-- IF S_ALLOW_CDN -->*/
/* <script>*/
/* 	WebFontConfig = {*/
/* 		google: {*/
/* 			families: ['Open+Sans:600:cyrillic-ext,latin,greek-ext,greek,vietnamese,latin-ext,cyrillic']*/
/* 		}*/
/* 	};*/
/* */
/* 	(function(d) {*/
/* 		var wf = d.createElement('script'), s = d.scripts[0];*/
/* 		wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js';*/
/* 		wf.async = true;*/
/* 		s.parentNode.insertBefore(wf, s);*/
/* 	})(document);*/
/* </script>*/
/* <!-- ENDIF -->*/
/* */
/* 	<link href="{ROOT_PATH}styles/prosilver/theme/common.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet">*/
/* 	<link href="{ROOT_PATH}styles/prosilver/theme/links.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet">*/
/* 	<link href="{ROOT_PATH}styles/prosilver/theme/content.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet">*/
/* 	<link href="{ROOT_PATH}styles/prosilver/theme/buttons.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet">*/
/* 	<link href="{ROOT_PATH}styles/prosilver/theme/cp.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet">*/
/* 	<link href="{ROOT_PATH}styles/prosilver/theme/forms.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet">*/
/* */
/* 	<!-- IF T_THEME_NAME !== 'pbwow3' -->*/
/* 	<link href="{ROOT_PATH}styles/pbwow3/theme/stylesheet.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet">*/
/* 	<!-- ENDIF -->*/
/* 	<!-- IF T_THEME_NAME == 'pbwow3_wildstar' -->*/
/* 		<link href="{ROOT_PATH}styles/pbwow3_heroes/theme/stylesheet.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet">*/
/* 	<!-- ELSEIF T_THEME_NAME == 'pbwow3_xmas' -->*/
/* 		<link href="{ROOT_PATH}styles/pbwow3_wotlk/theme/stylesheet.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet">*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<link href="{T_STYLESHEET_LINK}" rel="stylesheet">*/
/* */
/* 	<!-- IF T_THEME_NAME == 'pbwow3' || T_THEME_NAME == 'pbwow3_battlecry' || T_THEME_NAME == 'pbwow3_garrison' || T_THEME_NAME == 'pbwow3_pandaria' || T_THEME_NAME == 'pbwow3_tbc' || T_THEME_NAME == 'pbwow3_tribute' || T_THEME_NAME == 'pbwow3_warlords' -->*/
/* 		<link href="{ROOT_PATH}styles/pbwow3/theme/{T_THEME_LANG_NAME}/stylesheet.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet">*/
/* 	<!-- ELSEIF T_THEME_NAME == 'pbwow3_wotlk' || T_THEME_NAME == 'pbwow3_xmas' -->*/
/* 		<link href="{ROOT_PATH}styles/pbwow3_wotlk/theme/{T_THEME_LANG_NAME}/stylesheet.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet">*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<link href="{ROOT_PATH}styles/prosilver/theme/responsive.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet" media="all and (max-width: 700px)">*/
/* 	<link href="{ROOT_PATH}styles/pbwow3/theme/responsive.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet" media="all and (max-width: 700px)">*/
/* 	<!-- IF T_THEME_NAME == 'pbwow3_heroes' || T_THEME_NAME == 'pbwow3_wildstar' -->*/
/* 		<link href="{ROOT_PATH}styles/pbwow3_heroes/theme/responsive.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet" media="all and (max-width: 700px)">*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF S_PBWOW_AVATARS -->*/
/* 	<link href="{ROOT_PATH}styles/pbwow3/theme/game-icons.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet">*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<link href="{ROOT_PATH}styles/pbwow3/theme/custom.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet">*/
/* 	<!-- IF T_THEME_NAME == 'pbwow3_heroes' || T_THEME_NAME == 'pbwow3_wildstar' -->*/
/* 		<link href="{ROOT_PATH}styles/pbwow3_heroes/theme/custom.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet">*/
/* 	<!-- ELSEIF T_THEME_NAME == 'pbwow3_tech' -->*/
/* 		<link href="{ROOT_PATH}styles/pbwow3_tech/theme/custom.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet">*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF S_CONTENT_DIRECTION eq 'rtl' -->*/
/* 	<link href="{ROOT_PATH}styles/prosilver/theme/bidi.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet">*/
/* 	<link href="{ROOT_PATH}styles/pbwow3/theme/bidi.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet">*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF S_PLUPLOAD -->*/
/* 	<link href="{ROOT_PATH}styles/prosilver/theme/plupload.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet">*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!--[if lte IE 9]>*/
/* 	<link href="{ROOT_PATH}styles/pbwow3/theme/tweaks.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet">*/
/* 	<!-- IF T_THEME_NAME == 'pbwow3_heroes' || T_THEME_NAME == 'pbwow3_wildstar' -->*/
/* 		<link href="{ROOT_PATH}styles/pbwow3_heroes/theme/tweaks.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet">*/
/* 	<!-- ENDIF -->*/
/* 	<![endif]-->*/
/* */
/* <!-- EVENT overall_header_head_append -->*/
/* */
/* {$STYLESHEETS}*/
/* */
/* 	<link href="{ROOT_PATH}styles/pbwow3/theme/extensions.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet">*/
/* 	<!-- IF T_THEME_NAME == 'pbwow3_heroes' || T_THEME_NAME == 'pbwow3_wildstar' -->*/
/* 		<link href="{ROOT_PATH}styles/pbwow3_heroes/theme/extensions.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet">*/
/* 	<!-- ELSEIF T_THEME_NAME == 'pbwow3_tech' -->*/
/* 		<link href="{ROOT_PATH}styles/pbwow3_tech/theme/extensions.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet">*/
/* 	<!-- ENDIF -->*/
/* */
/* <!-- EVENT overall_header_stylesheets_after -->*/
/* */
/* </head>*/
/* <body id="phpbb" class="nojs notouch section-{SCRIPT_NAME} {S_CONTENT_DIRECTION} {T_THEME_NAME} {BODY_CLASS}">*/
/* */
/* <!-- EVENT overall_header_body_before -->*/
/* */
/* <div id="wrap">*/
/* 	<a id="top" class="anchor" accesskey="t"></a>*/
/* 	<div id="page-header">*/
/* 		<div class="headerbar" role="banner">*/
/* 			<div class="inner">*/
/* */
/* 			<div id="site-description">*/
/* 				<a id="logo" class="logo" href="<!-- IF U_SITE_HOME -->{U_SITE_HOME}<!-- ELSE -->{U_INDEX}<!-- ENDIF -->" title="<!-- IF U_SITE_HOME -->{L_SITE_HOME}<!-- ELSE -->{L_INDEX}<!-- ENDIF -->"></a>*/
/* 				<h1>{SITENAME}</h1>*/
/* 				<p>{SITE_DESCRIPTION}</p>*/
/* 				<p class="skiplink"><a href="#start_here">{L_SKIP}</a></p>*/
/* 			</div>*/
/* */
/* 			<!-- EVENT overall_header_searchbox_before -->*/
/* 			<!-- IF S_DISPLAY_SEARCH and not S_IN_SEARCH -->*/
/* 			<div id="search-box" class="search-box search-header" role="search">*/
/* 				<form action="{U_SEARCH}" method="get" id="search">*/
/* 				<fieldset>*/
/* 					<input name="keywords" id="keywords" type="search" maxlength="128" title="{L_SEARCH_KEYWORDS}" class="inputbox search tiny" size="20" value="{SEARCH_WORDS}" placeholder="{L_SEARCH_MINI}" />*/
/* 					<button class="button icon-button search-icon" type="submit" title="{L_SEARCH}">{L_SEARCH}</button>*/
/* 					<a href="{U_SEARCH}" class="button icon-button search-adv-icon" title="{L_SEARCH_ADV}">{L_SEARCH_ADV}</a>*/
/* 					{S_SEARCH_HIDDEN_FIELDS}*/
/* 				</fieldset>*/
/* 				</form>*/
/* 			</div>*/
/* 			<!-- ENDIF -->*/
/* */
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<!-- EVENT overall_header_navbar_before -->*/
/* 		<!-- INCLUDE navbar_header.html -->*/
/* 	</div>*/
/* */
/* 	<!-- EVENT overall_header_page_body_before -->*/
/* */
/* 	<a id="start_here" class="anchor"></a>*/
/* 	<div id="page-body" role="main">*/
/* 		<!-- IF S_BOARD_DISABLED and S_USER_LOGGED_IN and (U_MCP or U_ACP) -->*/
/* 		<div id="information" class="rules">*/
/* 			<div class="inner">*/
/* 				<strong>{L_INFORMATION}{L_COLON}</strong> {L_BOARD_DISABLED}*/
/* 			</div>*/
/* 		</div>*/
/* 		<!-- ENDIF -->*/
/* */
/* 		<!-- EVENT overall_header_content_before -->*/
/* */
