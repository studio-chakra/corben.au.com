<?php

/* news/{{object.slug}} */
class __TwigTemplate_ebae0f95792fef7a4581a5ca81b5e14016b5444e148594df02b3446aa8bf1a4b extends Craft\BaseTemplate
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
        echo "news/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "slug"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "news/{{object.slug}}";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
