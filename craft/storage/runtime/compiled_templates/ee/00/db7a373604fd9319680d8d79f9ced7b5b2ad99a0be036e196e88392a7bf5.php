<?php

/* sproutforms/settings/_pluginSettings */
class __TwigTemplate_ee00db7a373604fd9319680d8d79f9ced7b5b2ad99a0be036e196e88392a7bf5 extends Craft\BaseTemplate
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
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Plugin Name"), "id" => "pluginNameOverride", "name" => "pluginNameOverride", "instructions" => \Craft\Craft::t("Intuitive, human-readable plugin name for the end user."), "value" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "pluginNameOverride"), "autofocus" => true, "first" => true, "errors" => ""));
        // line 12
        echo "
";
    }

    public function getTemplateName()
    {
        return "sproutforms/settings/_pluginSettings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 12,  24 => 3,  21 => 2,  19 => 1,);
    }
}
