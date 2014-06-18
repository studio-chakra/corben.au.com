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
        return array (  90 => 22,  68 => 15,  47 => 10,  135 => 35,  132 => 34,  122 => 30,  118 => 29,  114 => 28,  110 => 27,  106 => 26,  102 => 25,  98 => 24,  81 => 18,  77 => 16,  63 => 15,  60 => 14,  53 => 15,  50 => 14,  40 => 7,  28 => 4,  64 => 6,  59 => 11,  45 => 9,  42 => 8,  37 => 11,  30 => 4,  23 => 3,  72 => 14,  89 => 22,  75 => 15,  54 => 11,  51 => 10,  46 => 12,  26 => 5,  21 => 2,  130 => 37,  126 => 31,  117 => 32,  113 => 31,  100 => 29,  96 => 27,  91 => 25,  87 => 21,  78 => 19,  65 => 14,  55 => 22,  36 => 7,  33 => 8,  31 => 7,  24 => 3,  19 => 1,  427 => 196,  422 => 193,  419 => 192,  416 => 191,  411 => 189,  407 => 188,  404 => 187,  401 => 186,  398 => 185,  390 => 183,  388 => 182,  382 => 178,  369 => 176,  367 => 175,  364 => 174,  361 => 173,  358 => 172,  355 => 171,  352 => 170,  349 => 169,  346 => 168,  344 => 167,  337 => 165,  329 => 160,  323 => 157,  320 => 156,  318 => 155,  315 => 154,  311 => 152,  306 => 150,  302 => 149,  297 => 148,  295 => 147,  292 => 146,  284 => 144,  282 => 143,  277 => 141,  273 => 140,  267 => 139,  263 => 137,  261 => 136,  257 => 134,  255 => 133,  251 => 131,  248 => 130,  241 => 126,  237 => 125,  234 => 124,  232 => 123,  228 => 121,  224 => 119,  221 => 115,  219 => 114,  215 => 112,  213 => 106,  209 => 104,  207 => 98,  204 => 97,  200 => 95,  197 => 89,  195 => 88,  192 => 87,  188 => 85,  185 => 79,  183 => 78,  179 => 76,  177 => 69,  174 => 68,  170 => 66,  167 => 60,  165 => 59,  161 => 57,  159 => 56,  156 => 55,  152 => 53,  145 => 51,  141 => 49,  134 => 48,  131 => 43,  127 => 42,  125 => 41,  119 => 40,  116 => 39,  112 => 38,  109 => 37,  107 => 36,  104 => 30,  97 => 31,  94 => 23,  92 => 23,  85 => 20,  82 => 23,  80 => 22,  74 => 17,  67 => 11,  61 => 17,  57 => 12,  52 => 14,  49 => 9,  43 => 13,  41 => 201,  39 => 10,  35 => 9,  32 => 6,  29 => 6,  27 => 6,  25 => 4,);
    }
}
