<?php

/* forumlist_body.html */
class __TwigTemplate_25be8a767d24730052b770ee8ab9a982e535129220378a93175ab8de1e9bcf54 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "forumrow", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["forumrow"]) {
            // line 2
            echo "\t";
            if ((($this->getAttribute($context["forumrow"], "S_IS_CAT", array()) &&  !$this->getAttribute($context["forumrow"], "S_FIRST_ROW", array())) || $this->getAttribute($context["forumrow"], "S_NO_CAT", array()))) {
                // line 3
                echo "\t\t\t</ul>

\t\t\t</div>
\t\t</div>
\t</div>
\t";
            }
            // line 9
            echo "
\t";
            // line 10
            // line 11
            echo "
";
            // line 12
            if ((($this->getAttribute($context["forumrow"], "S_IS_CAT", array()) || $this->getAttribute($context["forumrow"], "S_FIRST_ROW", array())) || $this->getAttribute($context["forumrow"], "S_NO_CAT", array()))) {
                // line 13
                echo "\t\t\t\t\t";
                // line 14
                echo "\t";
                if ((( !(isset($context["S_INDEX"]) ? $context["S_INDEX"] : null) && $this->getAttribute($context["forumrow"], "S_FIRST_ROW", array())) &&  !$this->getAttribute($context["forumrow"], "S_IS_CAT", array()))) {
                    // line 15
                    echo "\t<div class=\"no-collapse-box\">
\t";
                } else {
                    // line 17
                    echo "\t<div id=\"category-";
                    echo $this->getAttribute($context["forumrow"], "FORUM_ID", array());
                    echo "\" class=\"collapse-box\">
\t\t<h2>";
                    // line 18
                    if ($this->getAttribute($context["forumrow"], "S_IS_CAT", array())) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["forumrow"], "U_VIEWFORUM", array());
                        echo "\">";
                        echo $this->getAttribute($context["forumrow"], "FORUM_NAME", array());
                        echo "</a>";
                    } else {
                        echo $this->env->getExtension('phpbb')->lang("FORUMS");
                    }
                    echo "</h2>
\t";
                }
                // line 20
                echo "\t\t\t\t\t";
                // line 21
                echo "
\t<div class=\"forabg forum-blocks\">
\t\t<div class=\"inner\">
\t\t\t<ul class=\"forums\">
";
            }
            // line 26
            // line 27
            echo "
\t";
            // line 28
            if ( !$this->getAttribute($context["forumrow"], "S_IS_CAT", array())) {
                // line 29
                echo "\t\t";
                // line 30
                echo "\t\t<li class=\"row\">
\t\t\t";
                // line 31
                // line 32
                echo "\t\t\t<dl";
                if ($this->getAttribute($context["forumrow"], "S_UNREAD_FORUM", array())) {
                    echo " class=\"unread\"";
                }
                echo ">
\t\t\t\t<dt title=\"";
                // line 33
                echo $this->getAttribute($context["forumrow"], "FORUM_FOLDER_IMG_ALT", array());
                echo "\">
\t\t\t\t\t";
                // line 34
                if ($this->getAttribute($context["forumrow"], "FORUM_IMAGE", array())) {
                    echo "<div class=\"forum-image\">";
                    echo $this->getAttribute($context["forumrow"], "FORUM_IMAGE", array());
                    echo "</div>";
                }
                // line 35
                echo "\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["forumrow"], "U_VIEWFORUM", array());
                echo "\" class=\"icon-link";
                if ( !$this->getAttribute($context["forumrow"], "FORUM_IMAGE", array())) {
                    echo " no-forum-image ";
                    echo $this->getAttribute($context["forumrow"], "FORUM_IMG_STYLE", array());
                }
                echo "\"></a>

\t\t\t\t\t";
                // line 37
                if ((twig_length_filter($this->env, $this->getAttribute($context["forumrow"], "subforum", array())) && $this->getAttribute($context["forumrow"], "S_LIST_SUBFORUMS", array()))) {
                    // line 38
                    echo "\t\t\t\t\t<div class=\"dropdown-container dropdown-button-control\">
\t\t\t\t\t\t<span title=\"";
                    // line 39
                    echo $this->getAttribute($context["forumrow"], "L_SUBFORUM_STR", array());
                    echo "\" class=\"dropdown-trigger\"></span>
\t\t\t\t\t\t<div class=\"dropdown hidden\">
\t\t\t\t\t\t\t<div class=\"dropdown-contents\">
\t\t\t\t\t\t\t";
                    // line 42
                    // line 43
                    echo "\t\t\t\t\t\t\t<strong>";
                    echo $this->getAttribute($context["forumrow"], "L_SUBFORUM_STR", array());
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</strong>
\t\t\t\t\t\t\t";
                    // line 44
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["forumrow"], "subforum", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["subforum"]) {
                        // line 45
                        echo "\t\t\t\t\t\t\t\t<a href=\"";
                        echo $this->getAttribute($context["subforum"], "U_SUBFORUM", array());
                        echo "\" class=\"subforum";
                        if ($this->getAttribute($context["subforum"], "S_UNREAD", array())) {
                            echo " unread";
                        } else {
                            echo " read";
                        }
                        echo "\" title=\"";
                        if ($this->getAttribute($context["subforum"], "S_UNREAD", array())) {
                            echo $this->env->getExtension('phpbb')->lang("UNREAD_POSTS");
                        } else {
                            echo $this->env->getExtension('phpbb')->lang("NO_UNREAD_POSTS");
                        }
                        echo "\">";
                        echo $this->getAttribute($context["subforum"], "SUBFORUM_NAME", array());
                        echo "</a>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subforum'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 47
                    echo "\t\t\t\t\t\t\t";
                    // line 48
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 52
                echo "\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t<a href=\"";
                // line 53
                echo $this->getAttribute($context["forumrow"], "U_VIEWFORUM", array());
                echo "\" class=\"forumtitle\">";
                echo $this->getAttribute($context["forumrow"], "FORUM_NAME", array());
                echo "</a>
\t\t\t\t\t\t<span class=\"forum-description\">";
                // line 54
                echo $this->getAttribute($context["forumrow"], "FORUM_DESC", array());
                echo "</span>
\t\t\t\t\t\t";
                // line 55
                if ($this->getAttribute($context["forumrow"], "MODERATORS", array())) {
                    // line 56
                    echo "\t\t\t\t\t\t\t<!--<br /><span class=\"forum-moderators\"><strong>";
                    echo $this->getAttribute($context["forumrow"], "L_MODERATOR_STR", array());
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</strong> ";
                    echo $this->getAttribute($context["forumrow"], "MODERATORS", array());
                    echo "</span>-->
\t\t\t\t\t\t";
                }
                // line 58
                echo "\t\t\t\t\t</div>
\t\t\t\t</dt>

\t\t\t\t";
                // line 61
                if ($this->getAttribute($context["forumrow"], "CLICKS", array())) {
                    // line 62
                    echo "\t\t\t\t\t<dd class=\"redirect\"><span>";
                    echo $this->env->getExtension('phpbb')->lang("REDIRECTS");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " ";
                    echo $this->getAttribute($context["forumrow"], "CLICKS", array());
                    echo "</span></dd>
\t\t\t\t";
                } elseif ( !$this->getAttribute(                // line 63
$context["forumrow"], "S_IS_LINK", array())) {
                    // line 64
                    echo "\t\t\t\t\t<dd class=\"forum-stats\"><span>
\t\t\t\t\t\t";
                    // line 65
                    if ($this->getAttribute($context["forumrow"], "LAST_POST_TIME", array())) {
                        echo "(<dfn>";
                        echo $this->env->getExtension('phpbb')->lang("TOPICS");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo "</dfn> ";
                        echo $this->getAttribute($context["forumrow"], "TOPICS", array());
                        echo " | <dfn>";
                        echo $this->env->getExtension('phpbb')->lang("POSTS");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo "</dfn>";
                        echo $this->getAttribute($context["forumrow"], "POSTS", array());
                        echo ")
\t\t\t\t\t\t";
                        // line 66
                        if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                            echo "<a href=\"";
                            echo $this->getAttribute($context["forumrow"], "U_LAST_POST", array());
                            echo "\" title=\"";
                            if ($this->getAttribute($context["forumrow"], "S_UNREAD_FORUM", array())) {
                                echo $this->env->getExtension('phpbb')->lang("UNREAD_POSTS");
                            } else {
                                echo $this->env->getExtension('phpbb')->lang("NO_UNREAD_POSTS");
                            }
                            echo "\">";
                            echo (isset($context["LAST_POST_IMG"]) ? $context["LAST_POST_IMG"] : null);
                            echo "</a>";
                        }
                    } else {
                        echo $this->env->getExtension('phpbb')->lang("NO_POSTS");
                    }
                    // line 67
                    echo "\t\t\t\t\t\t";
                    // line 68
                    echo "\t\t\t\t\t</span></dd>

\t\t\t\t\t<dd class=\"mcp-status\"><span>
\t\t\t\t\t\t";
                    // line 71
                    if ($this->getAttribute($context["forumrow"], "U_UNAPPROVED_TOPICS", array())) {
                        // line 72
                        echo "\t\t\t\t\t\t\t<a href=\"";
                        echo $this->getAttribute($context["forumrow"], "U_UNAPPROVED_TOPICS", array());
                        echo "\">";
                        echo (isset($context["UNAPPROVED_IMG"]) ? $context["UNAPPROVED_IMG"] : null);
                        echo "</a>
\t\t\t\t\t\t";
                    } elseif ($this->getAttribute(                    // line 73
$context["forumrow"], "U_UNAPPROVED_POSTS", array())) {
                        // line 74
                        echo "\t\t\t\t\t\t\t<a href=\"";
                        echo $this->getAttribute($context["forumrow"], "U_UNAPPROVED_POSTS", array());
                        echo "\">";
                        echo (isset($context["UNAPPROVED_POST_IMG"]) ? $context["UNAPPROVED_POST_IMG"] : null);
                        echo "</a>
\t\t\t\t\t\t";
                    }
                    // line 76
                    echo "\t\t\t\t\t\t</span>
\t\t\t\t\t</dd>
\t\t\t\t";
                }
                // line 79
                echo "\t\t\t</dl>
\t\t\t";
                // line 80
                // line 81
                echo "\t\t</li>
\t\t";
                // line 82
                // line 83
                echo "\t";
            }
            // line 84
            echo "
";
            // line 85
            if ($this->getAttribute($context["forumrow"], "S_LAST_ROW", array())) {
                // line 86
                echo "\t\t\t</ul>

\t\t\t</div>
\t\t</div>
\t</div>

";
                // line 92
            }
            // line 94
            echo "
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 96
            echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t<strong>";
            // line 98
            echo $this->env->getExtension('phpbb')->lang("NO_FORUMS");
            echo "</strong>
\t\t</div>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forumrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "forumlist_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 98,  311 => 96,  305 => 94,  303 => 92,  295 => 86,  293 => 85,  290 => 84,  287 => 83,  286 => 82,  283 => 81,  282 => 80,  279 => 79,  274 => 76,  266 => 74,  264 => 73,  257 => 72,  255 => 71,  250 => 68,  248 => 67,  231 => 66,  217 => 65,  214 => 64,  212 => 63,  204 => 62,  202 => 61,  197 => 58,  188 => 56,  186 => 55,  182 => 54,  176 => 53,  173 => 52,  167 => 48,  165 => 47,  142 => 45,  138 => 44,  132 => 43,  131 => 42,  125 => 39,  122 => 38,  120 => 37,  109 => 35,  103 => 34,  99 => 33,  92 => 32,  91 => 31,  88 => 30,  86 => 29,  84 => 28,  81 => 27,  80 => 26,  73 => 21,  71 => 20,  58 => 18,  53 => 17,  49 => 15,  46 => 14,  44 => 13,  42 => 12,  39 => 11,  38 => 10,  35 => 9,  27 => 3,  24 => 2,  19 => 1,);
    }
}
/* <!-- BEGIN forumrow -->*/
/* 	<!-- IF (forumrow.S_IS_CAT and not forumrow.S_FIRST_ROW) or forumrow.S_NO_CAT -->*/
/* 			</ul>*/
/* */
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- EVENT forumlist_body_category_header_before -->*/
/* */
/* <!-- IF forumrow.S_IS_CAT or forumrow.S_FIRST_ROW or forumrow.S_NO_CAT -->*/
/* 					<!-- EVENT forumlist_body_category_header_row_prepend -->*/
/* 	<!-- IF not S_INDEX and forumrow.S_FIRST_ROW and not forumrow.S_IS_CAT -->*/
/* 	<div class="no-collapse-box">*/
/* 	<!-- ELSE -->*/
/* 	<div id="category-{forumrow.FORUM_ID}" class="collapse-box">*/
/* 		<h2><!-- IF forumrow.S_IS_CAT --><a href="{forumrow.U_VIEWFORUM}">{forumrow.FORUM_NAME}</a><!-- ELSE -->{L_FORUMS}<!-- ENDIF --></h2>*/
/* 	<!-- ENDIF -->*/
/* 					<!-- EVENT forumlist_body_category_header_row_append -->*/
/* */
/* 	<div class="forabg forum-blocks">*/
/* 		<div class="inner">*/
/* 			<ul class="forums">*/
/* <!-- ENDIF -->*/
/* <!-- EVENT forumlist_body_category_header_after -->*/
/* */
/* 	<!-- IF not forumrow.S_IS_CAT -->*/
/* 		<!-- EVENT forumlist_body_forum_row_before -->*/
/* 		<li class="row">*/
/* 			<!-- EVENT forumlist_body_forum_row_prepend -->*/
/* 			<dl<!-- IF forumrow.S_UNREAD_FORUM --> class="unread"<!-- ENDIF -->>*/
/* 				<dt title="{forumrow.FORUM_FOLDER_IMG_ALT}">*/
/* 					<!-- IF forumrow.FORUM_IMAGE --><div class="forum-image">{forumrow.FORUM_IMAGE}</div><!-- ENDIF -->*/
/* 					<a href="{forumrow.U_VIEWFORUM}" class="icon-link<!-- IF not forumrow.FORUM_IMAGE --> no-forum-image {forumrow.FORUM_IMG_STYLE}<!-- ENDIF -->"></a>*/
/* */
/* 					<!-- IF .forumrow.subforum and forumrow.S_LIST_SUBFORUMS -->*/
/* 					<div class="dropdown-container dropdown-button-control">*/
/* 						<span title="{forumrow.L_SUBFORUM_STR}" class="dropdown-trigger"></span>*/
/* 						<div class="dropdown hidden">*/
/* 							<div class="dropdown-contents">*/
/* 							<!-- EVENT forumlist_body_subforums_before -->*/
/* 							<strong>{forumrow.L_SUBFORUM_STR}{L_COLON}</strong>*/
/* 							<!-- BEGIN subforum -->*/
/* 								<a href="{forumrow.subforum.U_SUBFORUM}" class="subforum<!-- IF forumrow.subforum.S_UNREAD --> unread<!-- ELSE --> read<!-- ENDIF -->" title="<!-- IF forumrow.subforum.S_UNREAD -->{L_UNREAD_POSTS}<!-- ELSE -->{L_NO_UNREAD_POSTS}<!-- ENDIF -->">{forumrow.subforum.SUBFORUM_NAME}</a>*/
/* 							<!-- END subforum -->*/
/* 							<!-- EVENT forumlist_body_subforums_after -->*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<!-- ENDIF -->*/
/* 					<div class="list-inner">*/
/* 						<a href="{forumrow.U_VIEWFORUM}" class="forumtitle">{forumrow.FORUM_NAME}</a>*/
/* 						<span class="forum-description">{forumrow.FORUM_DESC}</span>*/
/* 						<!-- IF forumrow.MODERATORS -->*/
/* 							<!--<br /><span class="forum-moderators"><strong>{forumrow.L_MODERATOR_STR}{L_COLON}</strong> {forumrow.MODERATORS}</span>-->*/
/* 						<!-- ENDIF -->*/
/* 					</div>*/
/* 				</dt>*/
/* */
/* 				<!-- IF forumrow.CLICKS -->*/
/* 					<dd class="redirect"><span>{L_REDIRECTS}{L_COLON} {forumrow.CLICKS}</span></dd>*/
/* 				<!-- ELSEIF not forumrow.S_IS_LINK -->*/
/* 					<dd class="forum-stats"><span>*/
/* 						<!-- IF forumrow.LAST_POST_TIME -->(<dfn>{L_TOPICS}{L_COLON}</dfn> {forumrow.TOPICS} | <dfn>{L_POSTS}{L_COLON}</dfn>{forumrow.POSTS})*/
/* 						<!-- IF not S_IS_BOT --><a href="{forumrow.U_LAST_POST}" title="<!-- IF forumrow.S_UNREAD_FORUM -->{L_UNREAD_POSTS}<!-- ELSE -->{L_NO_UNREAD_POSTS}<!-- ENDIF -->">{LAST_POST_IMG}</a><!-- ENDIF --><!-- ELSE -->{L_NO_POSTS}<!-- ENDIF -->*/
/* 						<!-- EVENT forumlist_body_last_post_title_prepend -->*/
/* 					</span></dd>*/
/* */
/* 					<dd class="mcp-status"><span>*/
/* 						<!-- IF forumrow.U_UNAPPROVED_TOPICS -->*/
/* 							<a href="{forumrow.U_UNAPPROVED_TOPICS}">{UNAPPROVED_IMG}</a>*/
/* 						<!-- ELSEIF forumrow.U_UNAPPROVED_POSTS -->*/
/* 							<a href="{forumrow.U_UNAPPROVED_POSTS}">{UNAPPROVED_POST_IMG}</a>*/
/* 						<!-- ENDIF -->*/
/* 						</span>*/
/* 					</dd>*/
/* 				<!-- ENDIF -->*/
/* 			</dl>*/
/* 			<!-- EVENT forumlist_body_forum_row_append -->*/
/* 		</li>*/
/* 		<!-- EVENT forumlist_body_forum_row_after -->*/
/* 	<!-- ENDIF -->*/
/* */
/* <!-- IF forumrow.S_LAST_ROW -->*/
/* 			</ul>*/
/* */
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* <!-- EVENT forumlist_body_last_row_after -->*/
/* <!-- ENDIF -->*/
/* */
/* <!-- BEGINELSE -->*/
/* 	<div class="panel">*/
/* 		<div class="inner">*/
/* 		<strong>{L_NO_FORUMS}</strong>*/
/* 		</div>*/
/* 	</div>*/
/* <!-- END forumrow -->*/
/* */
