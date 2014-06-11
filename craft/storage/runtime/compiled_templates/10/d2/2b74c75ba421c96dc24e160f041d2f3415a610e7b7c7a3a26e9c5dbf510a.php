<?php

/* projects/{{object.slug}} */
class __TwigTemplate_10d22b74c75ba421c96dc24e160f041d2f3415a610e7b7c7a3a26e9c5dbf510a extends Craft\BaseTemplate
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
        echo "projects/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "slug"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "projects/{{object.slug}}";
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
