<?php

/* _includes/forms/lightswitch */
class __TwigTemplate_594259aa2a3e51869d4c5d5015919c400ea652608928b6077274257a345fed6c extends Craft\BaseTemplate
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
        $context["on"] = ((array_key_exists("on", $context)) ? ((isset($context["on"]) ? $context["on"] : $this->getContext($context, "on"))) : (false));
        // line 2
        echo "
<div class=\"lightswitch";
        // line 3
        if ((isset($context["on"]) ? $context["on"] : $this->getContext($context, "on"))) {
            echo " on";
        }
        echo "\"";
        if (array_key_exists("toggle", $context)) {
            echo " data-target=\"";
            echo twig_escape_filter($this->env, (isset($context["toggle"]) ? $context["toggle"] : $this->getContext($context, "toggle")), "html", null, true);
            echo "\"";
        }
        echo " tabindex=\"0\">
\t<div class=\"lightswitch-container\">
\t\t<div class=\"label on\"></div>
\t\t<div class=\"handle\"></div>
\t\t<div class=\"label off\"></div>
\t</div>
\t";
        // line 9
        if (array_key_exists("name", $context)) {
            // line 10
            echo "<input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "\" value=\"";
            echo (((isset($context["on"]) ? $context["on"] : $this->getContext($context, "on"))) ? ("1") : (""));
            echo "\">";
        }
        // line 12
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "_includes/forms/lightswitch";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 34,  120 => 33,  93 => 28,  84 => 39,  71 => 27,  48 => 24,  38 => 17,  256 => 62,  245 => 60,  235 => 56,  231 => 54,  208 => 52,  191 => 51,  186 => 48,  168 => 40,  162 => 37,  151 => 31,  140 => 29,  103 => 18,  99 => 30,  88 => 15,  70 => 32,  66 => 31,  62 => 22,  199 => 50,  196 => 48,  193 => 47,  187 => 44,  175 => 41,  171 => 40,  163 => 38,  154 => 36,  146 => 32,  142 => 30,  136 => 28,  129 => 26,  56 => 27,  44 => 21,  34 => 7,  90 => 27,  68 => 19,  47 => 10,  135 => 35,  132 => 34,  122 => 30,  118 => 29,  114 => 32,  110 => 27,  106 => 13,  102 => 25,  98 => 11,  81 => 24,  77 => 16,  63 => 15,  60 => 14,  53 => 8,  50 => 12,  40 => 18,  28 => 8,  64 => 18,  59 => 10,  45 => 9,  42 => 19,  37 => 15,  30 => 5,  23 => 7,  72 => 14,  89 => 22,  75 => 15,  54 => 12,  51 => 25,  46 => 23,  26 => 7,  21 => 2,  130 => 37,  126 => 28,  117 => 23,  113 => 22,  100 => 29,  96 => 29,  91 => 25,  87 => 21,  78 => 34,  65 => 12,  55 => 22,  36 => 7,  33 => 13,  31 => 11,  24 => 3,  19 => 1,  427 => 196,  422 => 193,  419 => 192,  416 => 191,  411 => 189,  407 => 188,  404 => 187,  401 => 186,  398 => 185,  390 => 183,  388 => 182,  382 => 178,  369 => 176,  367 => 175,  364 => 174,  361 => 173,  358 => 172,  355 => 171,  352 => 170,  349 => 169,  346 => 168,  344 => 167,  337 => 165,  329 => 160,  323 => 157,  320 => 156,  318 => 155,  315 => 154,  311 => 152,  306 => 150,  302 => 149,  297 => 148,  295 => 147,  292 => 146,  284 => 144,  282 => 143,  277 => 141,  273 => 140,  267 => 139,  263 => 137,  261 => 136,  257 => 134,  255 => 133,  251 => 131,  248 => 130,  241 => 59,  237 => 125,  234 => 124,  232 => 123,  228 => 121,  224 => 119,  221 => 115,  219 => 114,  215 => 112,  213 => 106,  209 => 104,  207 => 98,  204 => 97,  200 => 95,  197 => 89,  195 => 88,  192 => 87,  188 => 85,  185 => 79,  183 => 43,  179 => 42,  177 => 69,  174 => 68,  170 => 45,  167 => 39,  165 => 59,  161 => 57,  159 => 37,  156 => 34,  152 => 35,  145 => 51,  141 => 49,  134 => 48,  131 => 43,  127 => 36,  125 => 24,  119 => 40,  116 => 39,  112 => 21,  109 => 21,  107 => 36,  104 => 12,  97 => 31,  94 => 23,  92 => 25,  85 => 9,  82 => 8,  80 => 14,  74 => 33,  67 => 11,  61 => 29,  57 => 13,  52 => 21,  49 => 28,  43 => 10,  41 => 9,  39 => 16,  35 => 14,  32 => 12,  29 => 6,  27 => 10,  25 => 8,);
    }
}
