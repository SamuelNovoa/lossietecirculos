<?php

/* navbar_header.html */
class __TwigTemplate_7559e27ecbc00ca0de23135a8c64fa659cc307c07e9a92142a4d6490218811a3 extends Twig_Template
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
        echo "<div class=\"navblock\" role=\"navigation\">
\t<div class=\"inner\">

\t<ul id=\"nav-main\" class=\"linklist bulletin\" role=\"menubar\">

\t\t<li id=\"quick-links\" class=\"small-icon responsive-menu dropdown-container";
        // line 6
        if (( !(isset($context["S_DISPLAY_QUICK_LINKS"]) ? $context["S_DISPLAY_QUICK_LINKS"] : null) &&  !(isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null))) {
            echo " hidden";
        }
        echo "\" data-skip-responsive=\"true\">
\t\t\t<a href=\"#\" class=\"responsive-menu-link dropdown-trigger\">";
        // line 7
        echo $this->env->getExtension('phpbb')->lang("QUICK_LINKS");
        echo "</a>
\t\t\t<div class=\"dropdown hidden\">
\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t<ul class=\"dropdown-contents\" role=\"menu\">
\t\t\t\t\t";
        // line 11
        // line 12
        echo "
\t\t\t\t\t";
        // line 13
        if ((isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null)) {
            // line 14
            echo "\t\t\t\t\t\t<li class=\"separator\"></li>
\t\t\t\t\t\t";
            // line 15
            if ((isset($context["S_REGISTERED_USER"]) ? $context["S_REGISTERED_USER"] : null)) {
                // line 16
                echo "\t\t\t\t\t\t\t<li class=\"small-icon icon-search-self\"><a href=\"";
                echo (isset($context["U_SEARCH_SELF"]) ? $context["U_SEARCH_SELF"] : null);
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_SELF");
                echo "</a></li>
\t\t\t\t\t\t";
            }
            // line 18
            echo "\t\t\t\t\t\t";
            if ((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) {
                // line 19
                echo "\t\t\t\t\t\t\t<li class=\"small-icon icon-search-new\"><a href=\"";
                echo (isset($context["U_SEARCH_NEW"]) ? $context["U_SEARCH_NEW"] : null);
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_NEW");
                echo "</a></li>
\t\t\t\t\t\t";
            }
            // line 21
            echo "\t\t\t\t\t\t";
            if ((isset($context["S_LOAD_UNREADS"]) ? $context["S_LOAD_UNREADS"] : null)) {
                // line 22
                echo "\t\t\t\t\t\t\t<li class=\"small-icon icon-search-unread\"><a href=\"";
                echo (isset($context["U_SEARCH_UNREAD"]) ? $context["U_SEARCH_UNREAD"] : null);
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_UNREAD");
                echo "</a></li>
\t\t\t\t\t\t";
            }
            // line 24
            echo "\t\t\t\t\t\t<li class=\"small-icon icon-search-unanswered\"><a href=\"";
            echo (isset($context["U_SEARCH_UNANSWERED"]) ? $context["U_SEARCH_UNANSWERED"] : null);
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_UNANSWERED");
            echo "</a></li>
\t\t\t\t\t\t<li class=\"small-icon icon-search-active\"><a href=\"";
            // line 25
            echo (isset($context["U_SEARCH_ACTIVE_TOPICS"]) ? $context["U_SEARCH_ACTIVE_TOPICS"] : null);
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ACTIVE_TOPICS");
            echo "</a></li>
\t\t\t\t\t\t<li class=\"separator\"></li>
\t\t\t\t\t\t<li class=\"small-icon icon-search\"><a href=\"";
            // line 27
            echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH");
            echo "</a></li>
\t\t\t\t\t";
        }
        // line 29
        echo "
\t\t\t\t\t";
        // line 30
        if (( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && ((isset($context["S_DISPLAY_MEMBERLIST"]) ? $context["S_DISPLAY_MEMBERLIST"] : null) || (isset($context["U_TEAM"]) ? $context["U_TEAM"] : null)))) {
            // line 31
            echo "\t\t\t\t\t\t<li class=\"separator\"></li>
\t\t\t\t\t\t";
            // line 32
            if ((isset($context["S_DISPLAY_MEMBERLIST"]) ? $context["S_DISPLAY_MEMBERLIST"] : null)) {
                echo "<li class=\"small-icon icon-members\"><a href=\"";
                echo (isset($context["U_MEMBERLIST"]) ? $context["U_MEMBERLIST"] : null);
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("MEMBERLIST");
                echo "</a></li>";
            }
            // line 33
            echo "\t\t\t\t\t\t";
            if ((isset($context["U_TEAM"]) ? $context["U_TEAM"] : null)) {
                echo "<li class=\"small-icon icon-team\"><a href=\"";
                echo (isset($context["U_TEAM"]) ? $context["U_TEAM"] : null);
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("THE_TEAM");
                echo "</a></li>";
            }
            // line 34
            echo "\t\t\t\t\t";
        }
        // line 35
        echo "\t\t\t\t\t<li class=\"separator\"></li>

\t\t\t\t\t";
        // line 37
        // line 38
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</li>

\t";
        // line 42
        if ((isset($context["S_REGISTERED_USER"]) ? $context["S_REGISTERED_USER"] : null)) {
            // line 43
            echo "\t\t";
            // line 44
            echo "\t\t<li id=\"username_logged_in\" class=\"rightside ";
            if ((isset($context["CURRENT_USER_AVATAR"]) ? $context["CURRENT_USER_AVATAR"] : null)) {
                echo " no-bulletin";
            }
            echo "\" data-skip-responsive=\"true\">
\t\t\t";
            // line 45
            // line 46
            echo "\t\t\t<div class=\"header-profile dropdown-container\">
\t\t\t\t<a href=\"";
            // line 47
            echo (isset($context["U_PROFILE"]) ? $context["U_PROFILE"] : null);
            echo "\" class=\"header-avatar dropdown-trigger\">";
            if ((isset($context["CURRENT_USER_AVATAR"]) ? $context["CURRENT_USER_AVATAR"] : null)) {
                echo (isset($context["CURRENT_USER_AVATAR"]) ? $context["CURRENT_USER_AVATAR"] : null);
                echo " ";
            }
            echo (isset($context["CURRENT_USERNAME_SIMPLE"]) ? $context["CURRENT_USERNAME_SIMPLE"] : null);
            echo "</a>
\t\t\t\t<div class=\"dropdown hidden\">
\t\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t\t<ul class=\"dropdown-contents\" role=\"menu\">
\t\t\t\t\t\t";
            // line 51
            if ((isset($context["U_RESTORE_PERMISSIONS"]) ? $context["U_RESTORE_PERMISSIONS"] : null)) {
                echo "<li class=\"small-icon icon-restore-permissions\"><a href=\"";
                echo (isset($context["U_RESTORE_PERMISSIONS"]) ? $context["U_RESTORE_PERMISSIONS"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("RESTORE_PERMISSIONS");
                echo "</a></li>";
            }
            // line 52
            echo "
\t\t\t\t\t\t";
            // line 53
            // line 54
            echo "
\t\t\t\t\t\t<li class=\"small-icon icon-ucp\"><a href=\"";
            // line 55
            echo (isset($context["U_PROFILE"]) ? $context["U_PROFILE"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("PROFILE");
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("PROFILE");
            echo "</a></li>
\t\t\t\t\t\t<li class=\"small-icon icon-profile\"><a href=\"";
            // line 56
            echo (isset($context["U_USER_PROFILE"]) ? $context["U_USER_PROFILE"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("READ_PROFILE");
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("READ_PROFILE");
            echo "</a></li>

\t\t\t\t\t\t";
            // line 58
            // line 59
            echo "
\t\t\t\t\t\t<li class=\"separator\"></li>
\t\t\t\t\t\t<li class=\"small-icon icon-logout\"><a href=\"";
            // line 61
            echo (isset($context["U_LOGIN_LOGOUT"]) ? $context["U_LOGIN_LOGOUT"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "\" accesskey=\"x\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
            // line 65
            // line 66
            echo "\t\t</li>
\t\t";
            // line 67
            if ((isset($context["S_DISPLAY_PM"]) ? $context["S_DISPLAY_PM"] : null)) {
                // line 68
                echo "\t\t\t<li class=\"small-icon icon-pm rightside\" data-skip-responsive=\"true\">
\t\t\t\t<a href=\"";
                // line 69
                echo (isset($context["U_PRIVATEMSGS"]) ? $context["U_PRIVATEMSGS"] : null);
                echo "\" role=\"menuitem\"><span>";
                echo $this->env->getExtension('phpbb')->lang("PRIVATE_MESSAGES");
                echo " [</span><strong>";
                echo (isset($context["PRIVATE_MESSAGE_COUNT"]) ? $context["PRIVATE_MESSAGE_COUNT"] : null);
                echo "</strong><span>]</span></a>
\t\t\t</li>
\t\t";
            }
            // line 72
            echo "\t\t";
            if ((isset($context["S_NOTIFICATIONS_DISPLAY"]) ? $context["S_NOTIFICATIONS_DISPLAY"] : null)) {
                // line 73
                echo "\t\t\t<li class=\"small-icon icon-notification dropdown-container dropdown-";
                echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
                echo " rightside\" data-skip-responsive=\"true\">
\t\t\t\t<a href=\"";
                // line 74
                echo (isset($context["U_VIEW_ALL_NOTIFICATIONS"]) ? $context["U_VIEW_ALL_NOTIFICATIONS"] : null);
                echo "\" id=\"notification_list_button\" class=\"dropdown-trigger\"><span>";
                echo $this->env->getExtension('phpbb')->lang("NOTIFICATIONS");
                echo " [</span><strong>";
                echo (isset($context["NOTIFICATIONS_COUNT"]) ? $context["NOTIFICATIONS_COUNT"] : null);
                echo "</strong><span>]</span></a>
\t\t\t\t";
                // line 75
                $location = "notification_dropdown.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("notification_dropdown.html", "navbar_header.html", 75)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 76
                echo "\t\t\t</li>
\t\t";
            }
            // line 78
            echo "\t\t";
            // line 79
            echo "\t</ul>

\t<ul class=\"linklist\" role=\"menubar\">
\t";
        }
        // line 83
        echo "
\t\t";
        // line 84
        if (( !(isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
            // line 85
            echo "\t\t\t<li class=\"small-icon icon-logout rightside\"  data-skip-responsive=\"true\"><a href=\"";
            echo (isset($context["U_LOGIN_LOGOUT"]) ? $context["U_LOGIN_LOGOUT"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "\" accesskey=\"x\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "</a></li>
\t\t\t";
            // line 86
            if (((isset($context["S_REGISTER_ENABLED"]) ? $context["S_REGISTER_ENABLED"] : null) &&  !((isset($context["S_SHOW_COPPA"]) ? $context["S_SHOW_COPPA"] : null) || (isset($context["S_REGISTRATION"]) ? $context["S_REGISTRATION"] : null)))) {
                // line 87
                echo "\t\t\t\t<li class=\"small-icon icon-register rightside\" data-skip-responsive=\"true\"><a href=\"";
                echo (isset($context["U_REGISTER"]) ? $context["U_REGISTER"] : null);
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("REGISTER");
                echo "</a></li>
\t\t\t";
            }
            // line 89
            echo "\t\t\t";
            // line 90
            echo "\t\t";
        }
        // line 91
        echo "
\t\t";
        // line 92
        if ((isset($context["U_ACP"]) ? $context["U_ACP"] : null)) {
            echo "<li class=\"small-icon icon-acp rightside\" data-last-responsive=\"true\"><a href=\"";
            echo (isset($context["U_ACP"]) ? $context["U_ACP"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("ACP");
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("ACP_SHORT");
            echo "</a></li>";
        }
        // line 93
        echo "\t\t";
        if ((isset($context["U_MCP"]) ? $context["U_MCP"] : null)) {
            echo "<li class=\"small-icon icon-mcp rightside\" data-skip-responsive=\"true\"><a href=\"";
            echo (isset($context["U_MCP"]) ? $context["U_MCP"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("MCP");
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("MCP_SHORT");
            echo "</a></li>";
        }
        // line 94
        echo "
\t\t";
        // line 95
        // line 96
        echo "
\t\t<li class=\"small-icon icon-faq rightside\"><a href=\"";
        // line 97
        echo (isset($context["U_FAQ"]) ? $context["U_FAQ"] : null);
        echo "\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("FAQ_EXPLAIN");
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("FAQ");
        echo "</a></li>

\t\t";
        // line 99
        // line 100
        echo "\t\t";
        if ((isset($context["HEADERLINKS_CODE"]) ? $context["HEADERLINKS_CODE"] : null)) {
            echo (isset($context["HEADERLINKS_CODE"]) ? $context["HEADERLINKS_CODE"] : null);
        }
        // line 101
        echo "\t</ul>

\t</div>
</div>

<div id=\"body-header\"";
        // line 106
        if (( !(isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null) || (isset($context["S_IN_SEARCH"]) ? $context["S_IN_SEARCH"] : null))) {
            echo " class=\"no-search\"";
        }
        echo ">
\t<ul id=\"nav-breadcrumbs\" class=\"linklist navlinks\" role=\"menubar\">
\t\t";
        // line 108
        $value = " itemtype=\"http://data-vocabulary.org/Breadcrumb\" itemscope=\"\"";
        $context['definition']->set('MICRODATA', $value);
        // line 109
        echo "\t\t";
        // line 110
        echo "\t\t<li class=\"small-icon icon-home breadcrumbs";
        if ((isset($context["S_IS_LOCKED"]) ? $context["S_IS_LOCKED"] : null)) {
            echo " locked";
        }
        echo "\">
\t\t\t";
        // line 111
        if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
            echo "<span class=\"crumb\"";
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA", array());
            echo "><a href=\"";
            echo (isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null);
            echo "\" data-navbar-reference=\"home\" itemprop=\"url\"><span itemprop=\"title\">";
            echo $this->env->getExtension('phpbb')->lang("SITE_HOME");
            echo "</span></a></span>";
        }
        // line 112
        echo "\t\t\t";
        // line 113
        echo "\t\t\t<span class=\"crumb\"";
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA", array());
        echo "><a href=\"";
        echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
        echo "\" accesskey=\"h\" data-navbar-reference=\"index\" itemprop=\"url\"><span itemprop=\"title\">";
        echo $this->env->getExtension('phpbb')->lang("INDEX");
        echo "</span></a></span>
\t\t\t";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "navlinks", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["navlinks"]) {
            // line 115
            echo "\t\t\t\t";
            // line 116
            echo "\t\t\t\t<span class=\"crumb\"";
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA", array());
            if ($this->getAttribute($context["navlinks"], "MICRODATA", array())) {
                echo " ";
                echo $this->getAttribute($context["navlinks"], "MICRODATA", array());
            }
            echo "><a href=\"";
            echo $this->getAttribute($context["navlinks"], "U_VIEW_FORUM", array());
            echo "\" itemprop=\"url\"><span itemprop=\"title\">";
            echo $this->getAttribute($context["navlinks"], "FORUM_NAME", array());
            echo "</span></a></span>
\t\t\t\t";
            // line 117
            // line 118
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navlinks'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "\t\t\t";
        if ((isset($context["S_VIEWTOPIC"]) ? $context["S_VIEWTOPIC"] : null)) {
            echo "<span class=\"crumb crumb-topic\"><a href=\"";
            echo (isset($context["U_VIEW_TOPIC"]) ? $context["U_VIEW_TOPIC"] : null);
            echo "\">";
            echo (isset($context["TOPIC_TITLE"]) ? $context["TOPIC_TITLE"] : null);
            echo "</a></span>";
        }
        // line 120
        echo "\t\t\t";
        // line 121
        echo "\t\t</li>
\t\t";
        // line 122
        // line 123
        echo "\t\t";
        if (((isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null) &&  !(isset($context["S_IN_SEARCH"]) ? $context["S_IN_SEARCH"] : null))) {
            // line 124
            echo "\t\t\t<li class=\"responsive-search rightside small-icon icon-search\" style=\"display: none;\"><a href=\"";
            echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV_EXPLAIN");
            echo "\"></a></li>
\t\t";
        }
        // line 126
        echo "
\t\t";
        // line 127
        if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
            // line 128
            echo "\t\t\t";
            if ((isset($context["S_INDEX"]) ? $context["S_INDEX"] : null)) {
                // line 129
                echo "\t\t\t\t";
                if (((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null) && (isset($context["U_MARK_FORUMS"]) ? $context["U_MARK_FORUMS"] : null))) {
                    echo "<li class=\"rightside small-icon icon-mark-read\"><a href=\"";
                    echo (isset($context["U_MARK_FORUMS"]) ? $context["U_MARK_FORUMS"] : null);
                    echo "\" accesskey=\"m\" data-ajax=\"mark_forums_read\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("MARK_FORUMS_READ");
                    echo "\"></a></li>";
                }
                // line 130
                echo "\t\t\t";
            } elseif ((isset($context["S_VIEWFORUM"]) ? $context["S_VIEWFORUM"] : null)) {
                // line 131
                echo "\t\t\t\t";
                if (((isset($context["S_HAS_SUBFORUM"]) ? $context["S_HAS_SUBFORUM"] : null) && (isset($context["U_MARK_FORUMS"]) ? $context["U_MARK_FORUMS"] : null))) {
                    echo "<li class=\"rightside small-icon icon-mark-read\"><a href=\"";
                    echo (isset($context["U_MARK_FORUMS"]) ? $context["U_MARK_FORUMS"] : null);
                    echo "\" data-ajax=\"mark_forums_read\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("MARK_SUBFORUMS_READ");
                    echo "\"></a></li>";
                }
                // line 132
                echo "\t\t\t";
            } elseif ((isset($context["S_VIEWTOPIC"]) ? $context["S_VIEWTOPIC"] : null)) {
                // line 133
                echo "\t\t\t\t";
                if ((isset($context["U_VIEW_UNREAD_POST"]) ? $context["U_VIEW_UNREAD_POST"] : null)) {
                    echo "<li class=\"rightside small-icon icon-view\"><a href=\"";
                    echo (isset($context["U_VIEW_UNREAD_POST"]) ? $context["U_VIEW_UNREAD_POST"] : null);
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("VIEW_UNREAD_POST");
                    echo "\"></a></li>";
                }
                // line 134
                echo "\t\t\t";
            } elseif (((isset($context["SEARCH_MATCHES"]) ? $context["SEARCH_MATCHES"] : null) &&  !(isset($context["S_IN_SEARCH"]) ? $context["S_IN_SEARCH"] : null))) {
                // line 135
                echo "\t\t\t\t";
                if ((isset($context["SEARCH_TOPIC"]) ? $context["SEARCH_TOPIC"] : null)) {
                    // line 136
                    echo "\t\t\t\t<li class=\"rightside\"><a class=\"arrow-";
                    echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
                    echo "\" href=\"";
                    echo (isset($context["U_SEARCH_TOPIC"]) ? $context["U_SEARCH_TOPIC"] : null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("RETURN_TO_TOPIC");
                    echo "</a></li>
\t\t\t\t";
                } else {
                    // line 138
                    echo "\t\t\t\t<li class=\"rightside\"><a class=\"arrow-";
                    echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
                    echo "\" href=\"";
                    echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV");
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("GO_TO_SEARCH_ADV");
                    echo "</a></li>
\t\t\t\t";
                }
                // line 140
                echo "\t\t\t";
            }
            // line 141
            echo "\t\t";
        }
        // line 142
        echo "\t</ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "navbar_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  524 => 142,  521 => 141,  518 => 140,  506 => 138,  496 => 136,  493 => 135,  490 => 134,  481 => 133,  478 => 132,  469 => 131,  466 => 130,  457 => 129,  454 => 128,  452 => 127,  449 => 126,  441 => 124,  438 => 123,  437 => 122,  434 => 121,  432 => 120,  423 => 119,  417 => 118,  416 => 117,  403 => 116,  401 => 115,  397 => 114,  388 => 113,  386 => 112,  376 => 111,  369 => 110,  367 => 109,  364 => 108,  357 => 106,  350 => 101,  345 => 100,  344 => 99,  335 => 97,  332 => 96,  331 => 95,  328 => 94,  317 => 93,  307 => 92,  304 => 91,  301 => 90,  299 => 89,  291 => 87,  289 => 86,  280 => 85,  278 => 84,  275 => 83,  269 => 79,  267 => 78,  263 => 76,  251 => 75,  243 => 74,  238 => 73,  235 => 72,  225 => 69,  222 => 68,  220 => 67,  217 => 66,  216 => 65,  205 => 61,  201 => 59,  200 => 58,  191 => 56,  183 => 55,  180 => 54,  179 => 53,  176 => 52,  168 => 51,  155 => 47,  152 => 46,  151 => 45,  144 => 44,  142 => 43,  140 => 42,  134 => 38,  133 => 37,  129 => 35,  126 => 34,  117 => 33,  109 => 32,  106 => 31,  104 => 30,  101 => 29,  94 => 27,  87 => 25,  80 => 24,  72 => 22,  69 => 21,  61 => 19,  58 => 18,  50 => 16,  48 => 15,  45 => 14,  43 => 13,  40 => 12,  39 => 11,  32 => 7,  26 => 6,  19 => 1,);
    }
}
/* <div class="navblock" role="navigation">*/
/* 	<div class="inner">*/
/* */
/* 	<ul id="nav-main" class="linklist bulletin" role="menubar">*/
/* */
/* 		<li id="quick-links" class="small-icon responsive-menu dropdown-container<!-- IF not S_DISPLAY_QUICK_LINKS and not S_DISPLAY_SEARCH --> hidden<!-- ENDIF -->" data-skip-responsive="true">*/
/* 			<a href="#" class="responsive-menu-link dropdown-trigger">{L_QUICK_LINKS}</a>*/
/* 			<div class="dropdown hidden">*/
/* 				<div class="pointer"><div class="pointer-inner"></div></div>*/
/* 				<ul class="dropdown-contents" role="menu">*/
/* 					<!-- EVENT navbar_header_quick_links_before -->*/
/* */
/* 					<!-- IF S_DISPLAY_SEARCH -->*/
/* 						<li class="separator"></li>*/
/* 						<!-- IF S_REGISTERED_USER -->*/
/* 							<li class="small-icon icon-search-self"><a href="{U_SEARCH_SELF}" role="menuitem">{L_SEARCH_SELF}</a></li>*/
/* 						<!-- ENDIF -->*/
/* 						<!-- IF S_USER_LOGGED_IN -->*/
/* 							<li class="small-icon icon-search-new"><a href="{U_SEARCH_NEW}" role="menuitem">{L_SEARCH_NEW}</a></li>*/
/* 						<!-- ENDIF -->*/
/* 						<!-- IF S_LOAD_UNREADS -->*/
/* 							<li class="small-icon icon-search-unread"><a href="{U_SEARCH_UNREAD}" role="menuitem">{L_SEARCH_UNREAD}</a></li>*/
/* 						<!-- ENDIF -->*/
/* 						<li class="small-icon icon-search-unanswered"><a href="{U_SEARCH_UNANSWERED}" role="menuitem">{L_SEARCH_UNANSWERED}</a></li>*/
/* 						<li class="small-icon icon-search-active"><a href="{U_SEARCH_ACTIVE_TOPICS}" role="menuitem">{L_SEARCH_ACTIVE_TOPICS}</a></li>*/
/* 						<li class="separator"></li>*/
/* 						<li class="small-icon icon-search"><a href="{U_SEARCH}" role="menuitem">{L_SEARCH}</a></li>*/
/* 					<!-- ENDIF -->*/
/* */
/* 					<!-- IF not S_IS_BOT and (S_DISPLAY_MEMBERLIST or U_TEAM) -->*/
/* 						<li class="separator"></li>*/
/* 						<!-- IF S_DISPLAY_MEMBERLIST --><li class="small-icon icon-members"><a href="{U_MEMBERLIST}" role="menuitem">{L_MEMBERLIST}</a></li><!-- ENDIF -->*/
/* 						<!-- IF U_TEAM --><li class="small-icon icon-team"><a href="{U_TEAM}" role="menuitem">{L_THE_TEAM}</a></li><!-- ENDIF -->*/
/* 					<!-- ENDIF -->*/
/* 					<li class="separator"></li>*/
/* */
/* 					<!-- EVENT navbar_header_quick_links_after -->*/
/* 				</ul>*/
/* 			</div>*/
/* 		</li>*/
/* */
/* 	<!-- IF S_REGISTERED_USER -->*/
/* 		<!-- EVENT navbar_header_user_profile_prepend -->*/
/* 		<li id="username_logged_in" class="rightside <!-- IF CURRENT_USER_AVATAR --> no-bulletin<!-- ENDIF -->" data-skip-responsive="true">*/
/* 			<!-- EVENT navbar_header_username_prepend -->*/
/* 			<div class="header-profile dropdown-container">*/
/* 				<a href="{U_PROFILE}" class="header-avatar dropdown-trigger"><!-- IF CURRENT_USER_AVATAR -->{CURRENT_USER_AVATAR} <!-- ENDIF -->{CURRENT_USERNAME_SIMPLE}</a>*/
/* 				<div class="dropdown hidden">*/
/* 					<div class="pointer"><div class="pointer-inner"></div></div>*/
/* 					<ul class="dropdown-contents" role="menu">*/
/* 						<!-- IF U_RESTORE_PERMISSIONS --><li class="small-icon icon-restore-permissions"><a href="{U_RESTORE_PERMISSIONS}">{L_RESTORE_PERMISSIONS}</a></li><!-- ENDIF -->*/
/* */
/* 						<!-- EVENT navbar_header_profile_list_before -->*/
/* */
/* 						<li class="small-icon icon-ucp"><a href="{U_PROFILE}" title="{L_PROFILE}" role="menuitem">{L_PROFILE}</a></li>*/
/* 						<li class="small-icon icon-profile"><a href="{U_USER_PROFILE}" title="{L_READ_PROFILE}" role="menuitem">{L_READ_PROFILE}</a></li>*/
/* */
/* 						<!-- EVENT navbar_header_profile_list_after -->*/
/* */
/* 						<li class="separator"></li>*/
/* 						<li class="small-icon icon-logout"><a href="{U_LOGIN_LOGOUT}" title="{L_LOGIN_LOGOUT}" accesskey="x" role="menuitem">{L_LOGIN_LOGOUT}</a></li>*/
/* 					</ul>*/
/* 				</div>*/
/* 			</div>*/
/* 			<!-- EVENT navbar_header_username_append -->*/
/* 		</li>*/
/* 		<!-- IF S_DISPLAY_PM -->*/
/* 			<li class="small-icon icon-pm rightside" data-skip-responsive="true">*/
/* 				<a href="{U_PRIVATEMSGS}" role="menuitem"><span>{L_PRIVATE_MESSAGES} [</span><strong>{PRIVATE_MESSAGE_COUNT}</strong><span>]</span></a>*/
/* 			</li>*/
/* 		<!-- ENDIF -->*/
/* 		<!-- IF S_NOTIFICATIONS_DISPLAY -->*/
/* 			<li class="small-icon icon-notification dropdown-container dropdown-{S_CONTENT_FLOW_END} rightside" data-skip-responsive="true">*/
/* 				<a href="{U_VIEW_ALL_NOTIFICATIONS}" id="notification_list_button" class="dropdown-trigger"><span>{L_NOTIFICATIONS} [</span><strong>{NOTIFICATIONS_COUNT}</strong><span>]</span></a>*/
/* 				<!-- INCLUDE notification_dropdown.html -->*/
/* 			</li>*/
/* 		<!-- ENDIF -->*/
/* 		<!-- EVENT navbar_header_user_profile_append -->*/
/* 	</ul>*/
/* */
/* 	<ul class="linklist" role="menubar">*/
/* 	<!-- ENDIF -->*/
/* */
/* 		<!-- IF not S_USER_LOGGED_IN and not S_IS_BOT -->*/
/* 			<li class="small-icon icon-logout rightside"  data-skip-responsive="true"><a href="{U_LOGIN_LOGOUT}" title="{L_LOGIN_LOGOUT}" accesskey="x" role="menuitem">{L_LOGIN_LOGOUT}</a></li>*/
/* 			<!-- IF S_REGISTER_ENABLED and not (S_SHOW_COPPA or S_REGISTRATION) -->*/
/* 				<li class="small-icon icon-register rightside" data-skip-responsive="true"><a href="{U_REGISTER}" role="menuitem">{L_REGISTER}</a></li>*/
/* 			<!-- ENDIF -->*/
/* 			<!-- EVENT navbar_header_logged_out_content -->*/
/* 		<!-- ENDIF -->*/
/* */
/* 		<!-- IF U_ACP --><li class="small-icon icon-acp rightside" data-last-responsive="true"><a href="{U_ACP}" title="{L_ACP}" role="menuitem">{L_ACP_SHORT}</a></li><!-- ENDIF -->*/
/* 		<!-- IF U_MCP --><li class="small-icon icon-mcp rightside" data-skip-responsive="true"><a href="{U_MCP}" title="{L_MCP}" role="menuitem">{L_MCP_SHORT}</a></li><!-- ENDIF -->*/
/* */
/* 		<!-- EVENT overall_header_navigation_append -->*/
/* */
/* 		<li class="small-icon icon-faq rightside"><a href="{U_FAQ}" title="{L_FAQ_EXPLAIN}">{L_FAQ}</a></li>*/
/* */
/* 		<!-- EVENT overall_header_navigation_prepend -->*/
/* 		<!-- IF HEADERLINKS_CODE -->{HEADERLINKS_CODE}<!-- ENDIF -->*/
/* 	</ul>*/
/* */
/* 	</div>*/
/* </div>*/
/* */
/* <div id="body-header"<!-- IF not S_DISPLAY_SEARCH or S_IN_SEARCH --> class="no-search"<!-- ENDIF -->>*/
/* 	<ul id="nav-breadcrumbs" class="linklist navlinks" role="menubar">*/
/* 		<!-- DEFINE $MICRODATA = ' itemtype="http://data-vocabulary.org/Breadcrumb" itemscope=""' -->*/
/* 		<!-- EVENT overall_header_breadcrumbs_before -->*/
/* 		<li class="small-icon icon-home breadcrumbs<!-- IF S_IS_LOCKED --> locked<!-- ENDIF -->">*/
/* 			<!-- IF U_SITE_HOME --><span class="crumb"{$MICRODATA}><a href="{U_SITE_HOME}" data-navbar-reference="home" itemprop="url"><span itemprop="title">{L_SITE_HOME}</span></a></span><!-- ENDIF -->*/
/* 			<!-- EVENT overall_header_breadcrumb_prepend -->*/
/* 			<span class="crumb"{$MICRODATA}><a href="{U_INDEX}" accesskey="h" data-navbar-reference="index" itemprop="url"><span itemprop="title">{L_INDEX}</span></a></span>*/
/* 			<!-- BEGIN navlinks -->*/
/* 				<!-- EVENT overall_header_navlink_prepend -->*/
/* 				<span class="crumb"{$MICRODATA}<!-- IF navlinks.MICRODATA --> {navlinks.MICRODATA}<!-- ENDIF -->><a href="{navlinks.U_VIEW_FORUM}" itemprop="url"><span itemprop="title">{navlinks.FORUM_NAME}</span></a></span>*/
/* 				<!-- EVENT overall_header_navlink_append -->*/
/* 			<!-- END navlinks -->*/
/* 			<!-- IF S_VIEWTOPIC --><span class="crumb crumb-topic"><a href="{U_VIEW_TOPIC}">{TOPIC_TITLE}</a></span><!-- ENDIF -->*/
/* 			<!-- EVENT overall_header_breadcrumb_append -->*/
/* 		</li>*/
/* 		<!-- EVENT overall_header_breadcrumbs_after -->*/
/* 		<!-- IF S_DISPLAY_SEARCH and not S_IN_SEARCH -->*/
/* 			<li class="responsive-search rightside small-icon icon-search" style="display: none;"><a href="{U_SEARCH}" title="{L_SEARCH_ADV_EXPLAIN}"></a></li>*/
/* 		<!-- ENDIF -->*/
/* */
/* 		<!-- IF not S_IS_BOT -->*/
/* 			<!-- IF S_INDEX -->*/
/* 				<!-- IF S_USER_LOGGED_IN and U_MARK_FORUMS --><li class="rightside small-icon icon-mark-read"><a href="{U_MARK_FORUMS}" accesskey="m" data-ajax="mark_forums_read" title="{L_MARK_FORUMS_READ}"></a></li><!-- ENDIF -->*/
/* 			<!-- ELSEIF S_VIEWFORUM -->*/
/* 				<!-- IF S_HAS_SUBFORUM and U_MARK_FORUMS --><li class="rightside small-icon icon-mark-read"><a href="{U_MARK_FORUMS}" data-ajax="mark_forums_read" title="{L_MARK_SUBFORUMS_READ}"></a></li><!-- ENDIF -->*/
/* 			<!-- ELSEIF S_VIEWTOPIC -->*/
/* 				<!-- IF U_VIEW_UNREAD_POST --><li class="rightside small-icon icon-view"><a href="{U_VIEW_UNREAD_POST}" title="{L_VIEW_UNREAD_POST}"></a></li><!-- ENDIF -->*/
/* 			<!-- ELSEIF SEARCH_MATCHES and not S_IN_SEARCH -->*/
/* 				<!-- IF SEARCH_TOPIC -->*/
/* 				<li class="rightside"><a class="arrow-{S_CONTENT_FLOW_BEGIN}" href="{U_SEARCH_TOPIC}">{L_RETURN_TO_TOPIC}</a></li>*/
/* 				<!-- ELSE -->*/
/* 				<li class="rightside"><a class="arrow-{S_CONTENT_FLOW_BEGIN}" href="{U_SEARCH}" title="{L_SEARCH_ADV}">{L_GO_TO_SEARCH_ADV}</a></li>*/
/* 				<!-- ENDIF -->*/
/* 			<!-- ENDIF -->*/
/* 		<!-- ENDIF -->*/
/* 	</ul>*/
/* </div>*/
/* */
