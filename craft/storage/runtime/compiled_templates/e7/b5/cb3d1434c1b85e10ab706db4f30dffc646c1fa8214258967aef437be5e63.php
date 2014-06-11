<?php

/* _includes/forms/time */
class __TwigTemplate_e7b5cb3d1434c1b85e10ab706db4f30dffc646c1fa8214258967aef437be5e63 extends Craft\BaseTemplate
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
        $context["id"] = ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) . "-time");
        // line 7
        if ((array_key_exists("name", $context) && (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))) {
            // line 8
            $context["name"] = ((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")) . "[time]");
        }
        // line 11
        \Craft\craft()->templates->includeJsResource((("lib/jquery.timepicker/jquery.timepicker" . (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "config"), "useCompressedJs")) ? (".min") : (""))) . ".js"));
        // line 13
        if ((!array_key_exists("value", $context))) {
            // line 14
            $context["value"] = null;
        }
        // line 17
        echo "<div class=\"timewrapper\">";
        // line 18
        $this->env->loadTemplate("_includes/forms/text")->display(array_merge($context, array("autocomplete" => false, "size" => 10, "value" => (((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) ? ($this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "localeTime", array(), "method")) : ("")))));
        // line 19
        echo "</div>";
        // line 21
        $context["localeData"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "i18n"), "getLocaleData", array(), "method");
        // line 23
        ob_start();
        // line 24
        echo "
\tvar \$timePicker = \$('#";
        // line 25
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\craft()->templates->namespaceInputId((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))), "js"), "html", null, true);
        echo "');
\t\$timePicker.timepicker({
\t\ttimeFormat: '";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "i18n"), "timepickerJsFormat"), "html", null, true);
        echo "',
\t\tcloseOnWindowScroll: false,
\t\torientation: '";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["localeData"]) ? $context["localeData"] : $this->getContext($context, "localeData")), "getOrientation", array(), "method"), "html", null, true);
        echo "',
\t\tlang: {
\t\t\tam: '";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["localeData"]) ? $context["localeData"] : $this->getContext($context, "localeData")), "getAMName", array(), "method"), "html", null, true);
        echo "',
\t\t\tAM: '";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["localeData"]) ? $context["localeData"] : $this->getContext($context, "localeData")), "getAMName", array(), "method"), "html", null, true);
        echo "',
\t\t\tpm: '";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["localeData"]) ? $context["localeData"] : $this->getContext($context, "localeData")), "getPMName", array(), "method"), "html", null, true);
        echo "',
\t\t\tPM: '";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["localeData"]) ? $context["localeData"] : $this->getContext($context, "localeData")), "getPMName", array(), "method"), "html", null, true);
        echo "'
\t\t}
\t});";
        $context["js"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 39
        \Craft\craft()->templates->includeJs((isset($context["js"]) ? $context["js"] : $this->getContext($context, "js")));
    }

    public function getTemplateName()
    {
        return "_includes/forms/time";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 32,  44 => 21,  40 => 18,  66 => 31,  62 => 22,  28 => 8,  123 => 34,  120 => 33,  99 => 30,  90 => 27,  81 => 24,  78 => 34,  71 => 27,  68 => 19,  56 => 27,  48 => 24,  117 => 36,  114 => 32,  108 => 32,  100 => 30,  96 => 29,  93 => 28,  91 => 27,  84 => 39,  77 => 16,  63 => 15,  60 => 14,  38 => 17,  33 => 13,  31 => 11,  64 => 18,  59 => 5,  45 => 11,  42 => 19,  37 => 15,  30 => 4,  23 => 7,  24 => 5,  72 => 14,  55 => 8,  89 => 16,  75 => 15,  54 => 11,  51 => 25,  46 => 23,  26 => 7,  21 => 2,  19 => 1,  427 => 196,  422 => 193,  419 => 192,  416 => 191,  411 => 189,  407 => 188,  404 => 187,  401 => 186,  398 => 185,  390 => 183,  388 => 182,  382 => 178,  369 => 176,  367 => 175,  364 => 174,  361 => 173,  358 => 172,  355 => 171,  352 => 170,  349 => 169,  346 => 168,  344 => 167,  337 => 165,  329 => 160,  323 => 157,  320 => 156,  318 => 155,  315 => 154,  311 => 152,  306 => 150,  302 => 149,  297 => 148,  295 => 147,  292 => 146,  284 => 144,  282 => 143,  277 => 141,  273 => 140,  267 => 139,  263 => 137,  261 => 136,  257 => 134,  255 => 133,  251 => 131,  248 => 130,  241 => 126,  237 => 125,  234 => 124,  232 => 123,  228 => 121,  224 => 119,  221 => 115,  219 => 114,  215 => 112,  213 => 106,  209 => 104,  207 => 98,  204 => 97,  200 => 95,  197 => 89,  195 => 88,  192 => 87,  188 => 85,  185 => 79,  183 => 78,  179 => 76,  177 => 69,  174 => 68,  170 => 66,  167 => 60,  165 => 59,  161 => 57,  159 => 56,  156 => 55,  152 => 53,  145 => 51,  141 => 49,  134 => 48,  131 => 43,  127 => 36,  125 => 41,  119 => 40,  116 => 39,  112 => 38,  109 => 37,  107 => 36,  104 => 31,  97 => 31,  94 => 30,  92 => 29,  85 => 24,  82 => 19,  80 => 22,  74 => 33,  67 => 11,  61 => 29,  57 => 12,  52 => 21,  49 => 9,  43 => 13,  41 => 201,  39 => 16,  35 => 14,  32 => 12,  29 => 6,  27 => 10,  25 => 8,);
    }
}
