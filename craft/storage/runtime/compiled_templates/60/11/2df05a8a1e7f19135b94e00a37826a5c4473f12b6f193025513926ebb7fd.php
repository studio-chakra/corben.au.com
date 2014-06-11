<?php

/* _includes/forms/checkboxSelect */
class __TwigTemplate_60112df05a8a1e7f19135b94e00a37826a5c4473f12b6f193025513926ebb7fd extends Craft\BaseTemplate
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
        $context["allLabel"] = ((array_key_exists("allLabel", $context)) ? ((isset($context["allLabel"]) ? $context["allLabel"] : $this->getContext($context, "allLabel"))) : (\Craft\Craft::t("All")));
        // line 2
        $context["allValue"] = ((array_key_exists("allValue", $context)) ? ((isset($context["allValue"]) ? $context["allValue"] : $this->getContext($context, "allValue"))) : ("*"));
        // line 3
        $context["options"] = ((array_key_exists("options", $context)) ? ((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options"))) : (array()));
        // line 4
        $context["values"] = ((array_key_exists("values", $context)) ? ((isset($context["values"]) ? $context["values"] : $this->getContext($context, "values"))) : (array()));
        // line 5
        $context["allChecked"] = (twig_test_empty((isset($context["values"]) ? $context["values"] : $this->getContext($context, "values"))) || ((isset($context["values"]) ? $context["values"] : $this->getContext($context, "values")) == (isset($context["allValue"]) ? $context["allValue"] : $this->getContext($context, "allValue"))));
        // line 6
        echo "
<div class=\"checkbox-select";
        // line 7
        if (array_key_exists("class", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
        }
        echo "\">
\t<div>
\t\t";
        // line 9
        $this->env->loadTemplate("_includes/forms/checkbox")->display(array("id" => ((array_key_exists("id", $context)) ? ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))) : (null)), "class" => "all", "label" => (("<b>" . ((array_key_exists("allLabel", $context)) ? ((isset($context["allLabel"]) ? $context["allLabel"] : $this->getContext($context, "allLabel"))) : (\Craft\Craft::t("All")))) . "</b>"), "name" => ((array_key_exists("name", $context)) ? ((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))) : (null)), "value" => (isset($context["allValue"]) ? $context["allValue"] : $this->getContext($context, "allValue")), "checked" => (isset($context["allChecked"]) ? $context["allChecked"] : $this->getContext($context, "allChecked")), "autofocus" => ((array_key_exists("autofocus", $context) && (isset($context["autofocus"]) ? $context["autofocus"] : $this->getContext($context, "autofocus"))) && (!$this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "request"), "isMobileBrowser", array(0 => true), "method")))));
        // line 18
        echo "\t</div>";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        foreach ($context['_seq'] as $context["key"] => $context["option"]) {
            // line 20
            $context["optionLabel"] = (($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "label", array(), "any", true, true)) ? ($this->getAttribute((isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "label")) : ((isset($context["option"]) ? $context["option"] : $this->getContext($context, "option"))));
            // line 21
            $context["optionValue"] = (($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "value", array(), "any", true, true)) ? ($this->getAttribute((isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "value")) : ((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))));
            // line 22
            if (((isset($context["optionValue"]) ? $context["optionValue"] : $this->getContext($context, "optionValue")) != (isset($context["allValue"]) ? $context["allValue"] : $this->getContext($context, "allValue")))) {
                // line 23
                echo "\t\t\t<div>
\t\t\t\t";
                // line 24
                $this->env->loadTemplate("_includes/forms/checkbox")->display(array("label" => (isset($context["optionLabel"]) ? $context["optionLabel"] : $this->getContext($context, "optionLabel")), "name" => ((array_key_exists("name", $context)) ? (((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")) . "[]")) : (null)), "value" => (isset($context["optionValue"]) ? $context["optionValue"] : $this->getContext($context, "optionValue")), "checked" => ((isset($context["allChecked"]) ? $context["allChecked"] : $this->getContext($context, "allChecked")) || twig_in_filter((isset($context["optionValue"]) ? $context["optionValue"] : $this->getContext($context, "optionValue")), (isset($context["values"]) ? $context["values"] : $this->getContext($context, "values")))), "disabled" => (isset($context["allChecked"]) ? $context["allChecked"] : $this->getContext($context, "allChecked"))));
                // line 31
                echo "\t\t\t</div>
\t\t";
            }
            // line 33
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "_includes/forms/checkboxSelect";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 34,  59 => 31,  57 => 24,  54 => 23,  52 => 22,  48 => 20,  44 => 19,  42 => 18,  40 => 9,  29 => 6,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,  102 => 28,  96 => 27,  94 => 26,  85 => 25,  81 => 24,  75 => 21,  72 => 20,  63 => 33,  50 => 21,  46 => 13,  39 => 10,  35 => 9,  32 => 7,  30 => 7,  28 => 5,  26 => 4,  24 => 2,);
    }
}
