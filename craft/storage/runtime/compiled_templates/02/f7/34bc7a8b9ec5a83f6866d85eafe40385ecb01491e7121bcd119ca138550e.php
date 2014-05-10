<?php

/* _layouts/base */
class __TwigTemplate_02f734bc7a8b9ec5a83f6866d85eafe40385ecb01491e7121bcd119ca138550e extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
            'foot' => array($this, 'block_foot'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        \Craft\craft()->templates->includeCssResource("css/craft.css", true);
        // line 3
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en-US\">
<head>
\t";
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 17
        echo "</head>
<body class=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "i18n"), "getLocaleData", array(), "method"), "getOrientation", array(), "method"), "html", null, true);
        echo "\">
\t";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 20
        echo "\t";
        $this->displayBlock('foot', $context, $blocks);
        // line 21
        echo "</body>
</html>
";
    }

    // line 6
    public function block_head($context, array $blocks = array())
    {
        // line 7
        echo "\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta charset=\"utf-8\">
\t<title>";
        // line 9
        echo twig_escape_filter($this->env, strip_tags((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title"))), "html", null, true);
        if (((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")) && $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "app"), "siteName"))) {
            echo " - ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "app"), "siteName"), "html", null, true);
        echo "</title>
\t";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('craft')->getHeadHtmlFunction(), "html", null, true);
        echo "
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<script type=\"text/javascript\">
\t\t// Fix for Firefox autofocus CSS bug
\t\t// See: http://stackoverflow.com/questions/18943276/html-5-autofocus-messes-up-css-loading/18945951#18945951
\t</script>
\t";
    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
    }

    // line 20
    public function block_foot($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "_layouts/base";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 20,  75 => 19,  64 => 10,  56 => 9,  49 => 6,  40 => 20,  38 => 19,  34 => 18,  24 => 3,  22 => 1,  230 => 80,  224 => 79,  213 => 77,  209 => 76,  204 => 75,  200 => 74,  193 => 70,  189 => 69,  185 => 68,  181 => 67,  177 => 66,  173 => 65,  169 => 64,  165 => 63,  161 => 62,  157 => 61,  153 => 60,  149 => 59,  145 => 58,  141 => 57,  137 => 56,  133 => 55,  129 => 54,  125 => 53,  121 => 52,  117 => 51,  113 => 50,  109 => 49,  105 => 48,  101 => 47,  91 => 40,  86 => 37,  83 => 36,  78 => 34,  73 => 32,  71 => 30,  69 => 29,  67 => 28,  65 => 27,  63 => 26,  61 => 25,  59 => 24,  55 => 22,  50 => 18,  45 => 12,  43 => 21,  41 => 10,  35 => 8,  57 => 23,  54 => 18,  52 => 7,  46 => 14,  42 => 12,  39 => 11,  31 => 17,  29 => 6,  27 => 3,  25 => 4,);
    }
}
