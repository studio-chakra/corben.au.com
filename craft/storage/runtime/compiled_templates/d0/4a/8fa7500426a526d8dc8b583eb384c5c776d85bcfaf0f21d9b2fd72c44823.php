<?php

/* {{object.contactFirstName}} {{object.contactLastName}} */
class __TwigTemplate_d04a8fa7500426a526d8dc8b583eb384c5c776d85bcfaf0f21d9b2fd72c44823 extends Craft\BaseTemplate
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "contactFirstName"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "contactLastName"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "{{object.contactFirstName}} {{object.contactLastName}}";
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
