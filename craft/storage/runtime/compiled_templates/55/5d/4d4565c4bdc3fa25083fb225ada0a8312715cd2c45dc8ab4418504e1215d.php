<?php

/* _includes/forms/checkbox */
class __TwigTemplate_555d4d4565c4bdc3fa25083fb225ada0a8312715cd2c45dc8ab4418504e1215d extends Craft\BaseTemplate
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
        ob_start();
        // line 2
        $context["class"] = twig_join_filter(array_filter(array(0 => ((array_key_exists("class", $context)) ? ((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class"))) : (null)), 1 => ((((array_key_exists("toggle", $context) && (!twig_test_empty((isset($context["toggle"]) ? $context["toggle"] : $this->getContext($context, "toggle"))))) || (array_key_exists("reverseToggle", $context) && (!twig_test_empty((isset($context["reverseToggle"]) ? $context["reverseToggle"] : $this->getContext($context, "reverseToggle"))))))) ? ("fieldtoggle") : (null)), 2 => "checkbox")), " ");
        // line 7
        echo "
";
        // line 8
        $context["value"] = ((array_key_exists("value", $context)) ? ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) : (1));
        // line 9
        echo "
";
        // line 10
        if ((array_key_exists("name", $context) && ((twig_length_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))) < 3) || (twig_slice($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), (-2)) != "[]")))) {
            // line 11
            echo "\t<input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "\" value=\"\">
";
        }
        // line 13
        echo "
<label>
\t<input type=\"checkbox\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "\"";
        // line 16
        if (array_key_exists("id", $context)) {
            echo " id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\"";
        }
        // line 17
        echo "\t\tclass=\"";
        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
        echo "\"";
        // line 18
        if (array_key_exists("name", $context)) {
            echo " name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "\"";
        }
        // line 19
        if ((array_key_exists("checked", $context) && (isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked")))) {
            echo " checked";
        }
        // line 20
        if (((array_key_exists("autofocus", $context) && (isset($context["autofocus"]) ? $context["autofocus"] : $this->getContext($context, "autofocus"))) && (!$this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "request"), "isMobileBrowser", array(0 => true), "method")))) {
            echo " autofocus";
        }
        // line 21
        if ((array_key_exists("disabled", $context) && (isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled")))) {
            echo " disabled";
        }
        // line 22
        if (array_key_exists("toggle", $context)) {
            echo " data-target=\"";
            echo twig_escape_filter($this->env, (isset($context["toggle"]) ? $context["toggle"] : $this->getContext($context, "toggle")), "html", null, true);
            echo "\"";
        }
        // line 23
        if (array_key_exists("reverseToggle", $context)) {
            echo " data-reverse-target=\"";
            echo twig_escape_filter($this->env, (isset($context["reverseToggle"]) ? $context["reverseToggle"] : $this->getContext($context, "reverseToggle")), "html", null, true);
            echo "\"";
        }
        echo ">
\t";
        // line 24
        if (array_key_exists("label", $context)) {
            echo (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"));
        }
        // line 25
        echo "</label>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "_includes/forms/checkbox";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 24,  70 => 21,  66 => 20,  62 => 19,  199 => 50,  196 => 48,  193 => 47,  187 => 44,  175 => 41,  171 => 40,  163 => 38,  154 => 36,  146 => 32,  142 => 30,  136 => 28,  129 => 26,  56 => 18,  44 => 24,  34 => 7,  90 => 22,  68 => 15,  47 => 10,  135 => 35,  132 => 34,  122 => 30,  118 => 29,  114 => 28,  110 => 27,  106 => 13,  102 => 25,  98 => 11,  81 => 18,  77 => 16,  63 => 15,  60 => 14,  53 => 15,  50 => 14,  40 => 7,  28 => 9,  64 => 6,  59 => 28,  45 => 9,  42 => 8,  37 => 15,  30 => 4,  23 => 7,  72 => 14,  89 => 22,  75 => 15,  54 => 11,  51 => 10,  46 => 16,  26 => 8,  21 => 2,  130 => 37,  126 => 28,  117 => 32,  113 => 31,  100 => 29,  96 => 10,  91 => 25,  87 => 21,  78 => 19,  65 => 14,  55 => 22,  36 => 7,  33 => 11,  31 => 10,  24 => 3,  19 => 1,  427 => 196,  422 => 193,  419 => 192,  416 => 191,  411 => 189,  407 => 188,  404 => 187,  401 => 186,  398 => 185,  390 => 183,  388 => 182,  382 => 178,  369 => 176,  367 => 175,  364 => 174,  361 => 173,  358 => 172,  355 => 171,  352 => 170,  349 => 169,  346 => 168,  344 => 167,  337 => 165,  329 => 160,  323 => 157,  320 => 156,  318 => 155,  315 => 154,  311 => 152,  306 => 150,  302 => 149,  297 => 148,  295 => 147,  292 => 146,  284 => 144,  282 => 143,  277 => 141,  273 => 140,  267 => 139,  263 => 137,  261 => 136,  257 => 134,  255 => 133,  251 => 131,  248 => 130,  241 => 126,  237 => 125,  234 => 124,  232 => 123,  228 => 121,  224 => 119,  221 => 115,  219 => 114,  215 => 112,  213 => 106,  209 => 104,  207 => 98,  204 => 97,  200 => 95,  197 => 89,  195 => 88,  192 => 87,  188 => 85,  185 => 79,  183 => 43,  179 => 42,  177 => 69,  174 => 68,  170 => 66,  167 => 39,  165 => 59,  161 => 57,  159 => 37,  156 => 55,  152 => 35,  145 => 51,  141 => 49,  134 => 48,  131 => 43,  127 => 42,  125 => 41,  119 => 40,  116 => 39,  112 => 21,  109 => 20,  107 => 36,  104 => 12,  97 => 31,  94 => 23,  92 => 25,  85 => 9,  82 => 8,  80 => 23,  74 => 22,  67 => 11,  61 => 17,  57 => 12,  52 => 17,  49 => 28,  43 => 15,  41 => 201,  39 => 13,  35 => 9,  32 => 6,  29 => 12,  27 => 4,  25 => 3,);
    }
}
