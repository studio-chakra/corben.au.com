<?php

/* {{object.projectTitle}} */
class __TwigTemplate_1ab2d5d77ffd7dedb296065c69e169a2a2c43eb17ec87d61d2aa09d5bdf9a123 extends Craft\BaseTemplate
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "projectTitle"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "{{object.projectTitle}}";
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
