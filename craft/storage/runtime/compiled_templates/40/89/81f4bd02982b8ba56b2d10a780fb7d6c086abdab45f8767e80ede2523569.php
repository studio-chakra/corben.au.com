<?php

/* sproutforms/_layouts/base */
class __TwigTemplate_408981f4bd02982b8ba56b2d10a780fb7d6c086abdab45f8767e80ede2523569 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layouts/cp");

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/cp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["title"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "SproutForms"), "name");
        // line 5
        ob_start();
        // line 6
        echo "  
\t";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["body"]) ? $context["body"] : $this->getContext($context, "body")), "html", null, true);
        echo "

\t<footer class=\"bsd-branding\">
\t\t<p>
\t\t\tPowered by <a href=\"http://barrelstrengthdesign.com\" target=\"_blank\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "sproutforms"), "name"), "html", null, true);
        echo "</a> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "sproutforms"), "version"), "html", null, true);
        echo " | 
\t\t\tDesigned by <a href=\"http://barrelstrengthdesign.com\" target=\"_blank\">(Barrel Strength)</a>
\t\t</p>
\t</footer>
\t
";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 18
        \Craft\craft()->templates->includeCssResource("sproutforms/css/styles.css");
        // line 19
        \Craft\craft()->templates->includeJsResource("sproutforms/js/scripts.js");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "sproutforms/_layouts/base";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 19,  49 => 18,  38 => 11,  31 => 7,  54 => 29,  28 => 6,  26 => 5,  24 => 3,);
    }
}
