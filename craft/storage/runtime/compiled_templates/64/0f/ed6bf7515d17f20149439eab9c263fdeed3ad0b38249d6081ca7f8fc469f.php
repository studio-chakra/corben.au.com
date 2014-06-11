<?php

/* _components/fieldtypes/PlainText/input */
class __TwigTemplate_640fed6bf7515d17f20149439eab9c263fdeed3ad0b38249d6081ca7f8fc469f extends Craft\BaseTemplate
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
        $context["forms"] = $this->env->loadTemplate("_includes/forms");
        // line 2
        echo "
";
        // line 3
        $context["config"] = array("id" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "value" => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "class" => "nicetext", "placeholder" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "placeholder"), "rows" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "initialRows"));
        // line 11
        echo "
";
        // line 12
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "multiline")) {
            // line 13
            echo "\t";
            echo $context["forms"]->gettextarea((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")));
            echo "
";
        } else {
            // line 15
            echo "\t";
            echo $context["forms"]->gettext((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")));
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/PlainText/input";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 15,  26 => 11,  21 => 2,  130 => 37,  126 => 35,  117 => 32,  113 => 31,  104 => 30,  100 => 29,  96 => 27,  94 => 26,  91 => 25,  87 => 23,  78 => 20,  74 => 19,  65 => 18,  61 => 17,  57 => 15,  55 => 14,  43 => 11,  36 => 7,  33 => 6,  31 => 13,  29 => 12,  27 => 3,  24 => 3,  19 => 1,);
    }
}
