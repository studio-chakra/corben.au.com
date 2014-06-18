<?php

/* _includes/forms/select */
class __TwigTemplate_0b528219899b236fc52777ae56542c29189c504d4fce8d944c15089827f5e47a extends Craft\BaseTemplate
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
        $context["class"] = twig_join_filter(array_filter(array(0 => "select", 1 => ((array_key_exists("class", $context)) ? ((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class"))) : (null)))), " ");
        // line 6
        $context["options"] = ((array_key_exists("options", $context)) ? ((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options"))) : (array()));
        // line 7
        $context["value"] = ((array_key_exists("value", $context)) ? ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) : (null));
        // line 8
        $context["hasOptgroups"] = false;
        // line 10
        echo "<div class=\"";
        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
        echo "\">
\t<select";
        // line 12
        if (array_key_exists("id", $context)) {
            echo " id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\"";
        }
        // line 13
        if ((array_key_exists("toggle", $context) && (isset($context["toggle"]) ? $context["toggle"] : $this->getContext($context, "toggle")))) {
            echo " class=\"fieldtoggle\"";
        }
        // line 14
        if (array_key_exists("name", $context)) {
            echo " name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "\"";
        }
        // line 15
        if (((array_key_exists("autofocus", $context) && (isset($context["autofocus"]) ? $context["autofocus"] : $this->getContext($context, "autofocus"))) && (!$this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "request"), "isMobileBrowser", array(0 => true), "method")))) {
            echo " autofocus";
        }
        // line 16
        if ((array_key_exists("disabled", $context) && (isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled")))) {
            echo " disabled";
        }
        // line 17
        if (array_key_exists("targetPrefix", $context)) {
            echo " data-target-prefix=\"";
            echo twig_escape_filter($this->env, (isset($context["targetPrefix"]) ? $context["targetPrefix"] : $this->getContext($context, "targetPrefix")), "html", null, true);
            echo "\"";
        }
        echo ">
\t\t";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        foreach ($context['_seq'] as $context["key"] => $context["option"]) {
            // line 19
            echo "\t\t\t";
            if ($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "optgroup", array(), "any", true, true)) {
                // line 20
                echo "\t\t\t\t";
                if ((isset($context["hasOptgroups"]) ? $context["hasOptgroups"] : $this->getContext($context, "hasOptgroups"))) {
                    // line 21
                    echo "\t\t\t\t\t</optgroup>
\t\t\t\t";
                } else {
                    // line 23
                    echo "\t\t\t\t\t";
                    $context["hasOptgroups"] = true;
                    // line 24
                    echo "\t\t\t\t";
                }
                // line 25
                echo "\t\t\t\t<optgroup label=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "optgroup"), "html", null, true);
                echo "\">
\t\t\t";
            } else {
                // line 27
                echo "\t\t\t\t";
                $context["optionLabel"] = (($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "label", array(), "any", true, true)) ? ($this->getAttribute((isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "label")) : ((isset($context["option"]) ? $context["option"] : $this->getContext($context, "option"))));
                // line 28
                echo "\t\t\t\t";
                $context["optionValue"] = (($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "value", array(), "any", true, true)) ? ($this->getAttribute((isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "value")) : ((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))));
                // line 29
                echo "\t\t\t\t";
                $context["optionDisabled"] = (($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "disabled", array(), "any", true, true)) ? ($this->getAttribute((isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "disabled")) : (false));
                // line 30
                echo "\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, (isset($context["optionValue"]) ? $context["optionValue"] : $this->getContext($context, "optionValue")), "html", null, true);
                echo "\"";
                if (((isset($context["optionValue"]) ? $context["optionValue"] : $this->getContext($context, "optionValue")) == (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
                    echo " selected";
                }
                if ((isset($context["optionDisabled"]) ? $context["optionDisabled"] : $this->getContext($context, "optionDisabled"))) {
                    echo " disabled";
                }
                echo ">";
                echo twig_escape_filter($this->env, (isset($context["optionLabel"]) ? $context["optionLabel"] : $this->getContext($context, "optionLabel")), "html", null, true);
                echo "</option>
\t\t\t";
            }
            // line 32
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t\t";
        if ((isset($context["hasOptgroups"]) ? $context["hasOptgroups"] : $this->getContext($context, "hasOptgroups"))) {
            // line 34
            echo "\t\t\t</optgroup>
\t\t";
        }
        // line 36
        echo "\t</select>
</div>
";
    }

    public function getTemplateName()
    {
        return "_includes/forms/select";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 34,  120 => 33,  93 => 28,  84 => 25,  71 => 20,  48 => 15,  38 => 13,  256 => 62,  245 => 60,  235 => 56,  231 => 54,  208 => 52,  191 => 51,  186 => 48,  168 => 40,  162 => 37,  151 => 31,  140 => 29,  103 => 18,  99 => 30,  88 => 15,  70 => 21,  66 => 20,  62 => 11,  199 => 50,  196 => 48,  193 => 47,  187 => 44,  175 => 41,  171 => 40,  163 => 38,  154 => 36,  146 => 32,  142 => 30,  136 => 28,  129 => 26,  56 => 17,  44 => 24,  34 => 7,  90 => 27,  68 => 19,  47 => 10,  135 => 35,  132 => 34,  122 => 30,  118 => 29,  114 => 32,  110 => 27,  106 => 13,  102 => 25,  98 => 11,  81 => 24,  77 => 16,  63 => 15,  60 => 14,  53 => 8,  50 => 7,  40 => 7,  28 => 9,  64 => 18,  59 => 10,  45 => 9,  42 => 14,  37 => 15,  30 => 5,  23 => 7,  72 => 14,  89 => 22,  75 => 15,  54 => 12,  51 => 10,  46 => 16,  26 => 8,  21 => 6,  130 => 37,  126 => 28,  117 => 23,  113 => 22,  100 => 29,  96 => 29,  91 => 25,  87 => 21,  78 => 23,  65 => 12,  55 => 22,  36 => 7,  33 => 9,  31 => 7,  24 => 3,  19 => 1,  427 => 196,  422 => 193,  419 => 192,  416 => 191,  411 => 189,  407 => 188,  404 => 187,  401 => 186,  398 => 185,  390 => 183,  388 => 182,  382 => 178,  369 => 176,  367 => 175,  364 => 174,  361 => 173,  358 => 172,  355 => 171,  352 => 170,  349 => 169,  346 => 168,  344 => 167,  337 => 165,  329 => 160,  323 => 157,  320 => 156,  318 => 155,  315 => 154,  311 => 152,  306 => 150,  302 => 149,  297 => 148,  295 => 147,  292 => 146,  284 => 144,  282 => 143,  277 => 141,  273 => 140,  267 => 139,  263 => 137,  261 => 136,  257 => 134,  255 => 133,  251 => 131,  248 => 130,  241 => 59,  237 => 125,  234 => 124,  232 => 123,  228 => 121,  224 => 119,  221 => 115,  219 => 114,  215 => 112,  213 => 106,  209 => 104,  207 => 98,  204 => 97,  200 => 95,  197 => 89,  195 => 88,  192 => 87,  188 => 85,  185 => 79,  183 => 43,  179 => 42,  177 => 69,  174 => 68,  170 => 45,  167 => 39,  165 => 59,  161 => 57,  159 => 37,  156 => 34,  152 => 35,  145 => 51,  141 => 49,  134 => 48,  131 => 43,  127 => 36,  125 => 24,  119 => 40,  116 => 39,  112 => 21,  109 => 21,  107 => 36,  104 => 12,  97 => 31,  94 => 23,  92 => 25,  85 => 9,  82 => 8,  80 => 14,  74 => 21,  67 => 11,  61 => 17,  57 => 13,  52 => 16,  49 => 28,  43 => 15,  41 => 201,  39 => 13,  35 => 9,  32 => 12,  29 => 6,  27 => 10,  25 => 8,);
    }
}
