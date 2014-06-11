<?php

/* pages/_entry */
class __TwigTemplate_005d9a511f93e6dc3d4f1c5c5d3e3dc6ba1dec1a45bfad1b80b74784c75dc434 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layout");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layout";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["title"] = $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "title");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "
";
        // line 6
        $context["asset"] = $this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "pageImage"), "first", array(), "method");
        // line 7
        echo "
<article class=\"page-general\">
\t<div class=\"row\">
\t\t<div class=\"xlarge-4 large-6 columns\">
\t\t\t<section class=\"page-content\">
\t\t\t\t";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "body"), "html", null, true);
        echo "
\t\t\t</section>
\t\t</div>
\t\t<div class=\"xlarge-8 large-6 columns\">
\t\t\t";
        // line 16
        if ((isset($context["asset"]) ? $context["asset"] : $this->getContext($context, "asset"))) {
            // line 17
            echo "\t\t\t<section class=\"page-img show-for-large-up\">
\t\t\t\t<img src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : $this->getContext($context, "asset")), "url"), "html", null, true);
            echo "\" class=\"general-image\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : $this->getContext($context, "asset")), "altText"), "html", null, true);
            echo "\" width=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : $this->getContext($context, "asset")), "width"), "html", null, true);
            echo "\" height=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : $this->getContext($context, "asset")), "height"), "html", null, true);
            echo "\" />
\t\t\t</section>
\t\t\t";
        }
        // line 20
        echo "\t
\t\t</div>
\t</div>
</article>

";
    }

    public function getTemplateName()
    {
        return "pages/_entry";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 20,  57 => 18,  54 => 17,  52 => 16,  45 => 12,  38 => 7,  36 => 6,  33 => 5,  30 => 4,  25 => 2,);
    }
}
