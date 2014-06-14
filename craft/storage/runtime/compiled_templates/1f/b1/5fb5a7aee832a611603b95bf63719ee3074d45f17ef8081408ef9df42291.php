<?php

/* _templates/field */
class __TwigTemplate_1fb15fb5a7aee832a611603b95bf63719ee3074d45f17ef8081408ef9df42291 extends Craft\BaseTemplate
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
        $context["id"] = (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "id", array(), "any", true, true)) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "id")) : (null));
        // line 2
        $context["label"] = (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array(), "any", true, true)) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "label")) : (null));
        // line 3
        $context["instructions"] = (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "instructions", array(), "any", true, true)) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "instructions")) : (null));
        // line 4
        $context["errors"] = ((array_key_exists("errors", $context)) ? ((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) : (null));
        // line 6
        echo "<div ";
        if ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "-field\"";
        }
        echo " class=\"field ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "type"), "html", null, true);
        echo "\">
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
                if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required", array(), "any", true, true) && $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "required"))) {
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

\t\t\t\t\t";
                // line 13
                if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required", array(), "any", true, true) && $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "required"))) {
                    // line 14
                    echo "\t\t\t\t\t<span class=\"required\"> * </span>
\t\t\t\t\t";
                }
                // line 16
                echo "\t\t\t\t</label>
\t\t\t";
            }
            // line 18
            echo "\t\t\t";
            if ((array_key_exists("instructions", $context) && (isset($context["instructions"]) ? $context["instructions"] : $this->getContext($context, "instructions")))) {
                // line 19
                echo "\t\t\t\t<p>";
                echo (isset($context["instructions"]) ? $context["instructions"] : $this->getContext($context, "instructions"));
                echo "</p>
\t\t\t";
            }
            // line 21
            echo "\t\t</div>
\t";
        }
        // line 23
        echo "\t<div class=\"input\">
\t\t";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "input"), "html", null, true);
        echo " 
\t</div>
\t";
        // line 26
        if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "error", array(), "any", true, true) && $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "error"))) {
            // line 27
            echo "\t<p>";
            echo $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "error");
            echo "</p>
\t";
        }
        // line 29
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "_templates/field";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 29,  93 => 26,  88 => 24,  85 => 23,  81 => 21,  75 => 19,  72 => 18,  68 => 16,  64 => 14,  62 => 13,  45 => 10,  43 => 9,  40 => 8,  38 => 7,  27 => 6,  23 => 3,  21 => 2,  19 => 1,  95 => 27,  91 => 35,  83 => 30,  79 => 29,  69 => 24,  65 => 23,  61 => 22,  57 => 11,  52 => 19,  41 => 11,  33 => 5,  30 => 4,  25 => 4,);
    }
}
