<?php

/* entries/projects/{{object.id}} */
class __TwigTemplate_337ddc3be031260aa913fc36da2c0d63ec6ff252e934edbf9c4ac536ef20833e extends Craft\BaseTemplate
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
        echo "entries/projects/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "id"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "entries/projects/{{object.id}}";
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
