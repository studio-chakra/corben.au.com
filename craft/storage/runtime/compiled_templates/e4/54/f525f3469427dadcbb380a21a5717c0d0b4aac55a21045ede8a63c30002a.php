<?php

/* _includes/forms/field */
class __TwigTemplate_e454f525f3469427dadcbb380a21a5717c0d0b4aac55a21045ede8a63c30002a extends Craft\BaseTemplate
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
        $context["id"] = ((array_key_exists("id", $context)) ? ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))) : (null));
        // line 2
        $context["label"] = ((array_key_exists("label", $context)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : (null));
        // line 3
        $context["instructions"] = ((array_key_exists("instructions", $context)) ? ((isset($context["instructions"]) ? $context["instructions"] : $this->getContext($context, "instructions"))) : (null));
        // line 4
        $context["errors"] = ((array_key_exists("errors", $context)) ? ((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) : (null));
        // line 6
        echo "<div class=\"field";
        if ((array_key_exists("first", $context) && (isset($context["first"]) ? $context["first"] : $this->getContext($context, "first")))) {
            echo " first";
        }
        echo "\"";
        if ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))) {
            echo " id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "-field\"";
        }
        echo ">
\t";
        // line 7
        if (((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) || (isset($context["instructions"]) ? $context["instructions"] : $this->getContext($context, "instructions")))) {
            // line 8
            echo "\t\t<div class=\"heading\">
\t\t\t";
            // line 9
            if ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) {
                // line 10
                echo "\t\t\t\t<label";
                if ((array_key_exists("required", $context) && (isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")))) {
                    echo " class=\"required\"";
                }
                if ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))) {
                    echo " for=\"";
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                    echo "\"";
                }
                echo ">
\t\t\t\t\t";
                // line 11
                echo (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"));
                echo "
\t\t\t\t</label>
\t\t\t";
            }
            // line 14
            echo "\t\t\t";
            if ((isset($context["instructions"]) ? $context["instructions"] : $this->getContext($context, "instructions"))) {
                // line 15
                echo "\t\t\t\t<div class=\"instructions\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('craft')->markdownFilter((isset($context["instructions"]) ? $context["instructions"] : $this->getContext($context, "instructions"))), "html", null, true);
                echo "</div>
\t\t\t";
            }
            // line 17
            echo "\t\t</div>
\t";
        }
        // line 19
        echo "\t<div class=\"input";
        if ((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) {
            echo " errors";
        }
        echo "\">
\t\t";
        // line 20
        echo (isset($context["input"]) ? $context["input"] : $this->getContext($context, "input"));
        echo "
\t</div>
\t";
        // line 22
        $this->env->loadTemplate("_includes/forms/errorList")->display(array_merge($context, array("errors" => (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")))));
        // line 23
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "_includes/forms/field";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 23,  90 => 22,  85 => 20,  78 => 19,  74 => 17,  68 => 15,  65 => 14,  59 => 11,  47 => 10,  42 => 8,  40 => 7,  25 => 4,  86 => 24,  79 => 23,  75 => 22,  71 => 21,  67 => 20,  63 => 19,  57 => 18,  51 => 17,  45 => 9,  39 => 15,  33 => 14,  27 => 6,  23 => 3,  26 => 12,  24 => 3,  21 => 2,  19 => 1,);
    }
}
