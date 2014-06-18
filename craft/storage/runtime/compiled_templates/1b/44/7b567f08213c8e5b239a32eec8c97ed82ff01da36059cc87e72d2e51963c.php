<?php

/* _includes/forms/checkboxGroup */
class __TwigTemplate_1b447b567f08213c8e5b239a32eec8c97ed82ff01da36059cc87e72d2e51963c extends Craft\BaseTemplate
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
        if ((array_key_exists("name", $context) && (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))) {
            // line 2
            echo "\t<input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "\" value=\"\">
";
        }
        // line 5
        $context["options"] = ((array_key_exists("options", $context)) ? ((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options"))) : (array()));
        // line 6
        $context["values"] = ((array_key_exists("values", $context)) ? ((isset($context["values"]) ? $context["values"] : $this->getContext($context, "values"))) : (array()));
        // line 7
        $context["name"] = (((array_key_exists("name", $context) && (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))) ? (((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")) . "[]")) : (null));
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["option"]) {
            // line 10
            $context["optionLabel"] = (($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "label", array(), "any", true, true)) ? ($this->getAttribute((isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "label")) : ((isset($context["option"]) ? $context["option"] : $this->getContext($context, "option"))));
            // line 11
            $context["optionValue"] = (($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "value", array(), "any", true, true)) ? ($this->getAttribute((isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "value")) : ((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))));
            // line 12
            echo "<div>
\t\t";
            // line 13
            $this->env->loadTemplate("_includes/forms/checkbox")->display(array("label" => (isset($context["optionLabel"]) ? $context["optionLabel"] : $this->getContext($context, "optionLabel")), "id" => ((($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "first") && array_key_exists("id", $context))) ? ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))) : (null)), "name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "value" => (isset($context["optionValue"]) ? $context["optionValue"] : $this->getContext($context, "optionValue")), "checked" => twig_in_filter((isset($context["optionValue"]) ? $context["optionValue"] : $this->getContext($context, "optionValue")), (isset($context["values"]) ? $context["values"] : $this->getContext($context, "values"))), "autofocus" => (((array_key_exists("autofocus", $context) && (isset($context["autofocus"]) ? $context["autofocus"] : $this->getContext($context, "autofocus"))) && $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "first")) && (!$this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "request"), "isMobileBrowser", array(0 => true), "method")))));
            // line 21
            echo "\t</div>";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "_includes/forms/checkboxGroup";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 24,  70 => 21,  66 => 20,  62 => 19,  199 => 50,  196 => 48,  193 => 47,  187 => 44,  175 => 41,  171 => 40,  163 => 38,  154 => 36,  146 => 32,  142 => 30,  136 => 28,  129 => 26,  56 => 18,  44 => 24,  34 => 7,  90 => 22,  68 => 15,  47 => 10,  135 => 35,  132 => 34,  122 => 30,  118 => 29,  114 => 28,  110 => 27,  106 => 13,  102 => 25,  98 => 11,  81 => 18,  77 => 16,  63 => 15,  60 => 14,  53 => 15,  50 => 10,  40 => 7,  28 => 9,  64 => 6,  59 => 21,  45 => 9,  42 => 8,  37 => 15,  30 => 4,  23 => 7,  72 => 14,  89 => 22,  75 => 15,  54 => 12,  51 => 10,  46 => 16,  26 => 8,  21 => 2,  130 => 37,  126 => 28,  117 => 32,  113 => 31,  100 => 29,  96 => 10,  91 => 25,  87 => 21,  78 => 19,  65 => 14,  55 => 22,  36 => 7,  33 => 9,  31 => 7,  24 => 3,  19 => 1,  427 => 196,  422 => 193,  419 => 192,  416 => 191,  411 => 189,  407 => 188,  404 => 187,  401 => 186,  398 => 185,  390 => 183,  388 => 182,  382 => 178,  369 => 176,  367 => 175,  364 => 174,  361 => 173,  358 => 172,  355 => 171,  352 => 170,  349 => 169,  346 => 168,  344 => 167,  337 => 165,  329 => 160,  323 => 157,  320 => 156,  318 => 155,  315 => 154,  311 => 152,  306 => 150,  302 => 149,  297 => 148,  295 => 147,  292 => 146,  284 => 144,  282 => 143,  277 => 141,  273 => 140,  267 => 139,  263 => 137,  261 => 136,  257 => 134,  255 => 133,  251 => 131,  248 => 130,  241 => 126,  237 => 125,  234 => 124,  232 => 123,  228 => 121,  224 => 119,  221 => 115,  219 => 114,  215 => 112,  213 => 106,  209 => 104,  207 => 98,  204 => 97,  200 => 95,  197 => 89,  195 => 88,  192 => 87,  188 => 85,  185 => 79,  183 => 43,  179 => 42,  177 => 69,  174 => 68,  170 => 66,  167 => 39,  165 => 59,  161 => 57,  159 => 37,  156 => 55,  152 => 35,  145 => 51,  141 => 49,  134 => 48,  131 => 43,  127 => 42,  125 => 41,  119 => 40,  116 => 39,  112 => 21,  109 => 20,  107 => 36,  104 => 12,  97 => 31,  94 => 23,  92 => 25,  85 => 9,  82 => 8,  80 => 23,  74 => 22,  67 => 11,  61 => 17,  57 => 13,  52 => 11,  49 => 28,  43 => 15,  41 => 201,  39 => 13,  35 => 9,  32 => 6,  29 => 6,  27 => 5,  25 => 3,);
    }
}
