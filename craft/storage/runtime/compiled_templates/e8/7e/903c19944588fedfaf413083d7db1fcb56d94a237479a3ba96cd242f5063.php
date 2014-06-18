<?php

/* _elements/indexcontainer */
class __TwigTemplate_e87e903c19944588fedfaf413083d7db1fcb56d94a237479a3ba96cd242f5063 extends Craft\BaseTemplate
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
        $context["__internal_1c63251e463fd13bbc569d75005b6f845e706501f7b1c6d92bb3b776d540b45c"] = $this->env->loadTemplate("_includes/forms");
        // line 3
        \Craft\craft()->templates->includeTranslations(
        	"Display in a table",
        	"Display hierarchically",
        	"Display as thumbnails"
        );
        // line 8
        echo "
";
        // line 9
        $context["context"] = ((array_key_exists("context", $context)) ? ((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context"))) : ("index"));
        // line 10
        $context["showStatusMenu"] = (((array_key_exists("showStatusMenu", $context) && ((isset($context["showStatusMenu"]) ? $context["showStatusMenu"] : $this->getContext($context, "showStatusMenu")) != "auto"))) ? ((isset($context["showStatusMenu"]) ? $context["showStatusMenu"] : $this->getContext($context, "showStatusMenu"))) : ($this->getAttribute((isset($context["elementType"]) ? $context["elementType"] : $this->getContext($context, "elementType")), "hasStatuses", array(), "method")));
        // line 11
        $context["showLocaleMenu"] = ((($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "isLocalized", array(), "method") && ((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")) == "index"))) ? ((((array_key_exists("showLocaleMenu", $context) && ((isset($context["showLocaleMenu"]) ? $context["showLocaleMenu"] : $this->getContext($context, "showLocaleMenu")) != "auto"))) ? ((isset($context["showLocaleMenu"]) ? $context["showLocaleMenu"] : $this->getContext($context, "showLocaleMenu"))) : ($this->getAttribute((isset($context["elementType"]) ? $context["elementType"] : $this->getContext($context, "elementType")), "isLocalized", array(), "method")))) : (false));
        // line 12
        echo "
<div class=\"main\">
\t<div class=\"toolbar\">
\t\t<table class=\"inputs fullwidth\">
\t\t\t<tr>
\t\t\t\t";
        // line 17
        if ((isset($context["showStatusMenu"]) ? $context["showStatusMenu"] : $this->getContext($context, "showStatusMenu"))) {
            // line 18
            echo "\t\t\t\t\t<td class=\"thin\">
\t\t\t\t\t\t<div class=\"btn menubtn statusmenubtn\"><span class=\"status\"></span>";
            // line 19
            echo twig_escape_filter($this->env, \Craft\Craft::t("All"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t<div class=\"menu padded\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a data-status=\"\" class=\"sel\"><span class=\"status\"></span>";
            // line 22
            echo twig_escape_filter($this->env, \Craft\Craft::t("All"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t\t\t";
            // line 23
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["elementType"]) ? $context["elementType"] : $this->getContext($context, "elementType")), "getStatuses", array(), "method"));
            foreach ($context['_seq'] as $context["status"] => $context["label"]) {
                // line 24
                echo "\t\t\t\t\t\t\t\t\t<li><a data-status=\"";
                echo twig_escape_filter($this->env, (isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), "html", null, true);
                echo "\"><span class=\"status ";
                echo twig_escape_filter($this->env, (isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), "html", null, true);
                echo "\"></span> ";
                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['status'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t";
        }
        // line 30
        echo "\t\t\t\t";
        if ((isset($context["showLocaleMenu"]) ? $context["showLocaleMenu"] : $this->getContext($context, "showLocaleMenu"))) {
            // line 31
            echo "\t\t\t\t\t";
            $context["currentLocale"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "i18n"), "getCurrentLocale", array(), "method");
            // line 32
            echo "\t\t\t\t\t<td class=\"thin\">
\t\t\t\t\t\t<div class=\"btn menubtn localemenubtn\">";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["currentLocale"]) ? $context["currentLocale"] : $this->getContext($context, "currentLocale")), "getName", array(), "method"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t<div class=\"menu padded\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t";
            // line 36
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "i18n"), "getSiteLocales", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "can", array(0 => ("editLocale:" . $this->getAttribute((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "getId", array(), "method"))), "method")) {
                    // line 37
                    echo "\t\t\t\t\t\t\t\t\t<li><a";
                    if (($this->getAttribute((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "getId", array(), "method") == $this->getAttribute((isset($context["currentLocale"]) ? $context["currentLocale"] : $this->getContext($context, "currentLocale")), "getId", array(), "method"))) {
                        echo " class=\"sel\"";
                    }
                    echo " data-locale=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "getId", array(), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "getName", array(), "method"), "html", null, true);
                    echo "</a></li>
\t\t\t\t\t\t\t\t";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t";
        }
        // line 43
        echo "\t\t\t\t<td>
\t\t\t\t\t<div class=\"texticon search icon\">
\t\t\t\t\t\t";
        // line 45
        echo $context["__internal_1c63251e463fd13bbc569d75005b6f845e706501f7b1c6d92bb3b776d540b45c"]->gettext(array("placeholder" => \Craft\Craft::t("Search")));
        // line 47
        echo "
\t\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t\t<td class=\"thin viewbtns hidden\"></td>
\t\t\t</tr>
\t\t</table>
\t\t<div class=\"spinner hidden\"></div>
\t</div>

\t<div class=\"elements\"></div>

\t<div class=\"centeralign\">
\t\t<div class=\"spinner loadingmore hidden\"></div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "_elements/indexcontainer";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 45,  123 => 43,  96 => 36,  90 => 33,  81 => 30,  62 => 24,  36 => 12,  21 => 3,  19 => 1,  56 => 9,  49 => 6,  40 => 20,  38 => 19,  24 => 3,  22 => 1,  213 => 77,  209 => 76,  200 => 74,  193 => 70,  185 => 68,  181 => 67,  177 => 66,  173 => 65,  165 => 63,  161 => 62,  153 => 60,  145 => 58,  141 => 57,  133 => 55,  129 => 47,  125 => 53,  113 => 50,  109 => 49,  105 => 48,  101 => 37,  86 => 37,  83 => 36,  78 => 34,  73 => 32,  71 => 30,  69 => 29,  67 => 28,  59 => 24,  52 => 7,  45 => 18,  43 => 17,  35 => 8,  655 => 224,  652 => 223,  644 => 230,  636 => 228,  634 => 227,  631 => 226,  629 => 223,  626 => 222,  620 => 219,  617 => 218,  615 => 217,  606 => 216,  603 => 215,  600 => 214,  597 => 213,  595 => 212,  589 => 208,  586 => 207,  583 => 206,  580 => 205,  577 => 204,  571 => 198,  565 => 195,  562 => 194,  560 => 193,  557 => 192,  551 => 190,  549 => 189,  546 => 188,  541 => 185,  530 => 183,  526 => 182,  522 => 180,  519 => 179,  516 => 178,  507 => 264,  501 => 262,  499 => 261,  495 => 260,  489 => 257,  485 => 256,  481 => 254,  479 => 253,  474 => 250,  466 => 248,  464 => 247,  453 => 244,  445 => 242,  443 => 241,  437 => 240,  429 => 239,  423 => 235,  421 => 204,  416 => 201,  414 => 178,  408 => 174,  402 => 173,  394 => 171,  391 => 170,  388 => 169,  384 => 168,  374 => 160,  366 => 157,  361 => 155,  359 => 154,  357 => 153,  350 => 152,  345 => 151,  341 => 150,  330 => 146,  318 => 140,  310 => 138,  308 => 137,  302 => 136,  296 => 133,  292 => 131,  286 => 127,  280 => 126,  267 => 124,  262 => 123,  258 => 122,  252 => 119,  244 => 116,  241 => 115,  239 => 114,  236 => 113,  233 => 112,  230 => 80,  227 => 110,  224 => 79,  217 => 105,  211 => 104,  204 => 75,  201 => 102,  198 => 101,  195 => 100,  192 => 99,  189 => 69,  186 => 97,  183 => 96,  180 => 95,  178 => 94,  175 => 93,  172 => 92,  169 => 64,  166 => 90,  163 => 89,  160 => 88,  157 => 61,  154 => 86,  151 => 85,  149 => 59,  143 => 80,  140 => 79,  137 => 56,  134 => 77,  130 => 75,  121 => 52,  117 => 39,  114 => 71,  111 => 70,  108 => 69,  106 => 68,  103 => 67,  97 => 65,  94 => 64,  91 => 40,  88 => 34,  84 => 31,  80 => 20,  75 => 26,  66 => 18,  64 => 10,  61 => 25,  58 => 23,  55 => 22,  50 => 18,  44 => 25,  41 => 10,  34 => 11,  32 => 10,  30 => 9,  28 => 3,  26 => 3,  107 => 34,  104 => 33,  100 => 31,  92 => 35,  87 => 32,  76 => 24,  72 => 30,  65 => 27,  63 => 26,  60 => 18,  57 => 23,  54 => 22,  48 => 19,  46 => 26,  39 => 23,  37 => 11,  33 => 9,  31 => 17,  29 => 6,  27 => 8,  25 => 4,);
    }
}
