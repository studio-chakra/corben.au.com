<?php

/* _includes/forms/date */
class __TwigTemplate_fe89fb6d58f7ca018531e88a55d1bc36f77c6515ab1007077cfc92ee062c81e4 extends Craft\BaseTemplate
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
        if ((!array_key_exists("value", $context))) {
            // line 2
            $context["value"] = null;
        }
        // line 5
        $context["id"] = ((isset($context["id"]) ? $context["id"] : null) . "-date");
        // line 7
        if ((array_key_exists("name", $context) && (isset($context["name"]) ? $context["name"] : null))) {
            // line 8
            $context["name"] = ((isset($context["name"]) ? $context["name"] : null) . "[date]");
        }
        // line 11
        echo "<div class=\"datewrapper\">";
        // line 12
        $this->env->loadTemplate("_includes/forms/text")->display(array_merge($context, array("autocomplete" => false, "size" => 10, "value" => (((isset($context["value"]) ? $context["value"] : null)) ? ($this->getAttribute((isset($context["value"]) ? $context["value"] : null), "localeDate", array(), "method")) : ("")))));
        // line 13
        echo "</div>";
        // line 15
        ob_start();
        // line 16
        echo "
\tvar \$datePicker = \$('#";
        // line 17
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\craft()->templates->namespaceInputId((isset($context["id"]) ? $context["id"] : null)), "js"), "html", null, true);
        echo "');
\t\$datePicker.datepicker({
\t\tconstrainInput: false,
\t\tdateFormat: '";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "i18n"), "datepickerJsFormat"), "html", null, true);
        echo "',
\t\tdefaultDate: new Date(";
        // line 21
        if ((isset($context["value"]) ? $context["value"] : null)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "year"), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["value"]) ? $context["value"] : null), "month") - 1), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "day"), "html", null, true);
        }
        echo "),
\t\tprevText:   '";
        // line 22
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\Craft::t("Prev"), "js"), "html", null, true);
        echo "',
\t\tnextText:   '";
        // line 23
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\Craft::t("Next"), "js"), "html", null, true);
        echo "',
\t});";
        $context["js"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 27
        \Craft\craft()->templates->includeJs((isset($context["js"]) ? $context["js"] : null));
    }

    public function getTemplateName()
    {
        return "_includes/forms/date";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 27,  66 => 23,  62 => 22,  52 => 21,  48 => 20,  42 => 17,  39 => 16,  37 => 15,  28 => 8,  117 => 36,  114 => 35,  108 => 32,  104 => 31,  100 => 30,  96 => 29,  93 => 28,  91 => 27,  84 => 22,  82 => 19,  77 => 16,  63 => 15,  60 => 14,  43 => 13,  38 => 11,  35 => 13,  33 => 12,  31 => 11,  29 => 6,  27 => 5,  26 => 7,  24 => 5,  21 => 2,  19 => 1,);
    }
}
