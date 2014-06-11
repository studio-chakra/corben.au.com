<?php

/* _components/widgets/Feed/settings */
class __TwigTemplate_89dbbcc670fea8bdc9efca307fde0d6fd4736ce41e574b6a4b80be07cb084dab extends Craft\BaseTemplate
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
        // line 4
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("URL"), "id" => "url", "name" => "url", "value" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "url"), "required" => true, "errors" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "getErrors", array(0 => "url"), "method")));
        // line 11
        echo "


";
        // line 14
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Title"), "id" => "title", "name" => "title", "value" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "title"), "required" => true, "errors" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "getErrors", array(0 => "title"), "method")));
        // line 21
        echo "


";
        // line 24
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Limit"), "id" => "limit", "name" => "limit", "value" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "limit"), "size" => 2, "errors" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "getErrors", array(0 => "limit"), "method")));
        // line 31
        echo "
";
    }

    public function getTemplateName()
    {
        return "_components/widgets/Feed/settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 21,  27 => 11,  25 => 4,  21 => 2,  19 => 1,  180 => 78,  176 => 76,  169 => 74,  165 => 73,  159 => 71,  153 => 69,  150 => 68,  140 => 73,  134 => 71,  128 => 69,  125 => 68,  118 => 67,  110 => 66,  107 => 65,  104 => 64,  100 => 63,  96 => 61,  94 => 50,  91 => 49,  88 => 48,  85 => 47,  83 => 46,  80 => 45,  78 => 44,  75 => 43,  69 => 42,  64 => 39,  62 => 38,  59 => 34,  56 => 32,  54 => 31,  52 => 28,  49 => 24,  47 => 23,  44 => 20,  41 => 31,  39 => 24,  37 => 16,  32 => 14,  30 => 11,  28 => 10,  26 => 4,  24 => 2,);
    }
}
