<?php

/* {{object.employeeFirstName}} {{object.employeeLastName}} */
class __TwigTemplate_959c998a6c68f3d6e16c0c5c16c667243ef61c88b5ab20b0b02e7c3126f9ef0d extends Craft\BaseTemplate
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "employeeFirstName"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "employeeLastName"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "{{object.employeeFirstName}} {{object.employeeLastName}}";
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
