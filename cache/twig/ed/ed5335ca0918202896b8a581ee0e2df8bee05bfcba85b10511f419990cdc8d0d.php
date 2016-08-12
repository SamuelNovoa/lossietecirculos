<?php

/* @paybas_pbwow/event/overall_header_body_before.html */
class __TwigTemplate_aba56a4f199b13ccf834f1939db97f780d8baed953788dd39739f6d773f70ed3 extends Twig_Template
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
        if ((isset($context["TOPBAR_CODE"]) ? $context["TOPBAR_CODE"] : null)) {
            // line 2
            echo "<div id=\"top-bar\">
\t<div class=\"inner\">
\t\t<ul class=\"linklist\">";
            // line 4
            echo (isset($context["TOPBAR_CODE"]) ? $context["TOPBAR_CODE"] : null);
            echo "</ul>
\t</div>
</div>
";
        }
        // line 8
        echo "
";
        // line 9
        if ((((isset($context["S_VIDEOBG"]) ? $context["S_VIDEOBG"] : null) && ((isset($context["S_INDEX"]) ? $context["S_INDEX"] : null) || (isset($context["S_VIDEOBG_ALL"]) ? $context["S_VIDEOBG_ALL"] : null))) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
            echo "<div id=\"video-background\"><div id=\"video-container\"></div></div>";
        }
    }

    public function getTemplateName()
    {
        return "@paybas_pbwow/event/overall_header_body_before.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 9,  32 => 8,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* <!-- IF TOPBAR_CODE -->*/
/* <div id="top-bar">*/
/* 	<div class="inner">*/
/* 		<ul class="linklist"><!-- EVENT top_bar_links_before --><!-- EVENT quickstyle_event -->{TOPBAR_CODE}<!-- EVENT top_bar_links_after --></ul>*/
/* 	</div>*/
/* </div>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF S_VIDEOBG and (S_INDEX or S_VIDEOBG_ALL) and not S_IS_BOT  --><div id="video-background"><div id="video-container"></div></div><!-- ENDIF -->*/
/* */
