<?php

/* _includes/tabs */
class __TwigTemplate_91ca63bc914d39e3b6562cc78a5c9a810f19394f8d29482f03a1d3bec4b3ce9a extends Craft\BaseTemplate
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
        $context["title"] = ((array_key_exists("title", $context)) ? (array_key_exists("title", $context)) : (null));
        // line 2
        echo "
<nav id=\"tabs\" class=\"tabs\">
\t<ul>
\t\t";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabs"]) ? $context["tabs"] : null));
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
        foreach ($context['_seq'] as $context["tabId"] => $context["tab"]) {
            // line 6
            echo "\t\t\t";
            if ((isset($context["tab"]) ? $context["tab"] : null)) {
                // line 7
                echo "\t\t\t\t";
                $context["tabIsSelected"] = (((!array_key_exists("selectedTab", $context)) && $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first")) || (array_key_exists("selectedTab", $context) && ((isset($context["selectedTab"]) ? $context["selectedTab"] : null) == (isset($context["tabId"]) ? $context["tabId"] : null))));
                // line 9
                if (((isset($context["tabIsSelected"]) ? $context["tabIsSelected"] : null) && ((isset($context["title"]) ? $context["title"] : null) != $this->getAttribute((isset($context["tab"]) ? $context["tab"] : null), "label")))) {
                    // line 10
                    echo "\t\t\t\t\t";
                    $context["title"] = (((isset($context["title"]) ? $context["title"] : null) . " - ") . $this->getAttribute((isset($context["tab"]) ? $context["tab"] : null), "label"));
                    // line 11
                    echo "\t\t\t\t";
                }
                // line 13
                echo "<li><a id=\"tab-";
                echo twig_escape_filter($this->env, (isset($context["tabId"]) ? $context["tabId"] : null), "html", null, true);
                echo "\" class=\"tab";
                if ((isset($context["tabIsSelected"]) ? $context["tabIsSelected"] : null)) {
                    echo " sel";
                }
                if ($this->getAttribute((isset($context["tab"]) ? $context["tab"] : null), "class", array(), "any", true, true)) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tab"]) ? $context["tab"] : null), "class"), "html", null, true);
                }
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tab"]) ? $context["tab"] : null), "url"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tab"]) ? $context["tab"] : null), "label"), "html", null, true);
                echo "</a></li>
\t\t\t";
            }
            // line 15
            echo "\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['tabId'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t</ul>
</nav>
";
    }

    public function getTemplateName()
    {
        return "_includes/tabs";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 16,  57 => 13,  54 => 11,  51 => 10,  49 => 9,  43 => 6,  26 => 5,  21 => 2,  19 => 1,  678 => 348,  674 => 346,  670 => 344,  664 => 342,  662 => 341,  659 => 340,  654 => 338,  650 => 337,  645 => 336,  643 => 335,  640 => 334,  634 => 332,  632 => 331,  627 => 329,  624 => 328,  622 => 327,  618 => 325,  609 => 323,  605 => 322,  596 => 320,  592 => 319,  583 => 317,  579 => 316,  570 => 314,  565 => 313,  563 => 312,  558 => 310,  554 => 309,  551 => 308,  546 => 306,  541 => 305,  539 => 304,  535 => 302,  529 => 300,  526 => 299,  520 => 298,  515 => 297,  512 => 296,  506 => 295,  501 => 294,  496 => 292,  491 => 291,  489 => 290,  485 => 289,  480 => 287,  475 => 285,  471 => 283,  469 => 282,  464 => 279,  457 => 275,  453 => 273,  451 => 269,  445 => 268,  440 => 265,  436 => 263,  433 => 258,  431 => 257,  426 => 255,  421 => 252,  415 => 250,  410 => 247,  402 => 244,  400 => 239,  397 => 238,  393 => 237,  390 => 236,  388 => 235,  383 => 232,  380 => 231,  378 => 230,  373 => 228,  370 => 227,  368 => 226,  365 => 225,  359 => 222,  356 => 221,  354 => 217,  351 => 216,  345 => 212,  342 => 210,  340 => 209,  337 => 208,  335 => 207,  329 => 204,  326 => 203,  322 => 201,  320 => 198,  317 => 197,  312 => 194,  297 => 192,  293 => 191,  290 => 190,  287 => 189,  285 => 188,  281 => 186,  278 => 185,  276 => 184,  273 => 183,  269 => 181,  265 => 179,  262 => 175,  260 => 174,  256 => 172,  254 => 169,  251 => 168,  246 => 166,  238 => 161,  233 => 158,  231 => 154,  226 => 151,  224 => 150,  220 => 148,  218 => 144,  215 => 143,  210 => 141,  202 => 136,  197 => 133,  195 => 127,  190 => 124,  188 => 123,  185 => 122,  181 => 120,  177 => 118,  174 => 114,  172 => 113,  168 => 111,  166 => 103,  163 => 102,  161 => 101,  155 => 97,  153 => 91,  148 => 88,  146 => 82,  140 => 78,  138 => 68,  134 => 66,  132 => 65,  127 => 63,  123 => 62,  117 => 58,  114 => 57,  105 => 52,  102 => 51,  100 => 50,  98 => 48,  94 => 45,  86 => 40,  82 => 39,  75 => 15,  72 => 34,  66 => 32,  64 => 31,  61 => 30,  59 => 29,  55 => 26,  52 => 25,  50 => 24,  48 => 21,  46 => 7,  44 => 19,  42 => 18,  40 => 17,  38 => 16,  34 => 12,  32 => 11,  30 => 9,  27 => 4,  25 => 3,);
    }
}
