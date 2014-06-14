<?php

/* _includes/field */
class __TwigTemplate_4aa4abfe96c097e6dc3893d7140906e77421785efae698525d3944966a11908b extends Craft\BaseTemplate
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
        if ((!array_key_exists("element", $context))) {
            $context["element"] = null;
        }
        // line 4
        echo "
";
        // line 5
        $context["value"] = (((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element"))) ? ($this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "handle"))) : (null));
        // line 6
        $context["errors"] = (((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element"))) ? ($this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "getErrors", array(0 => $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "handle")), "method")) : (null));
        // line 7
        $context["fieldtype"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "fields"), "populateFieldType", array(0 => (isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), 1 => (isset($context["element"]) ? $context["element"] : $this->getContext($context, "element"))), "method");
        // line 8
        echo "
";
        // line 9
        if ((isset($context["fieldtype"]) ? $context["fieldtype"] : $this->getContext($context, "fieldtype"))) {
            // line 10
            echo "\t";
            $context["input"] = $this->getAttribute((isset($context["fieldtype"]) ? $context["fieldtype"] : $this->getContext($context, "fieldtype")), "getInputHtml", array(0 => $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "handle"), 1 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "method");
        } else {
            // line 12
            echo "\t";
            $context["input"] = (("<p class=\"error\">" . \Craft\Craft::t("The fieldtype class “{class}” could not be found.", array("class" => $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "type")))) . "</p>");
        }
        // line 14
        echo "
";
        // line 15
        echo $context["forms"]->getfield(array("label" => twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "name"))), "required" => (isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")), "translatable" => $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "translatable"), "instructions" => \Craft\Craft::t($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "instructions")), "id" => $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "handle"), "errors" => (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))), (isset($context["input"]) ? $context["input"] : $this->getContext($context, "input")));
        // line 22
        echo "
";
    }

    public function getTemplateName()
    {
        return "_includes/field";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 22,  53 => 15,  40 => 9,  37 => 8,  24 => 3,  104 => 29,  100 => 27,  96 => 26,  90 => 25,  87 => 24,  84 => 19,  81 => 18,  76 => 17,  66 => 26,  60 => 25,  57 => 24,  51 => 18,  46 => 12,  39 => 16,  35 => 7,  33 => 6,  28 => 4,  23 => 3,  21 => 2,  19 => 1,  114 => 36,  108 => 35,  105 => 34,  98 => 30,  94 => 29,  85 => 27,  80 => 26,  77 => 25,  74 => 24,  71 => 23,  68 => 22,  64 => 21,  61 => 20,  54 => 19,  50 => 14,  48 => 13,  45 => 12,  42 => 10,  31 => 5,  29 => 6,  27 => 3,  25 => 2,);
    }
}
