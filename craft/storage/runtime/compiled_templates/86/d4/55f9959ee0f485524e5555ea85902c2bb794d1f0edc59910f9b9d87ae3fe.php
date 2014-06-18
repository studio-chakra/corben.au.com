<?php

/* _elements/sources */
class __TwigTemplate_86d455f9959ee0f485524e5555ea85902c2bb794d1f0edc59910f9b9d87ae3fe extends Craft\BaseTemplate
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
        echo "<ul>
\t";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sources"]) ? $context["sources"] : $this->getContext($context, "sources")));
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
        foreach ($context['_seq'] as $context["key"] => $context["source"]) {
            // line 3
            echo "\t\t";
            if ($this->getAttribute((isset($context["source"]) ? $context["source"] : null), "heading", array(), "any", true, true)) {
                // line 4
                echo "\t\t\t<li class=\"heading\"><span>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["source"]) ? $context["source"] : $this->getContext($context, "source")), "heading"), "html", null, true);
                echo "</span></li>
\t\t";
            } else {
                // line 6
                echo "\t\t\t<li>
\t\t\t\t<a data-key=\"";
                // line 7
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "\"";
                // line 8
                if (($this->getAttribute((isset($context["source"]) ? $context["source"] : null), "hasThumbs", array(), "any", true, true) && $this->getAttribute((isset($context["source"]) ? $context["source"] : $this->getContext($context, "source")), "hasThumbs"))) {
                    echo " data-has-thumbs=\"1\"";
                }
                // line 9
                if (($this->getAttribute((isset($context["source"]) ? $context["source"] : null), "structureId", array(), "any", true, true) && $this->getAttribute((isset($context["source"]) ? $context["source"] : $this->getContext($context, "source")), "structureId"))) {
                    echo " data-has-structure=\"1\" data-structure-id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["source"]) ? $context["source"] : $this->getContext($context, "source")), "structureId"), "html", null, true);
                    echo "\"";
                }
                // line 10
                if ($this->getAttribute((isset($context["source"]) ? $context["source"] : null), "data", array(), "any", true, true)) {
                    // line 11
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["source"]) ? $context["source"] : $this->getContext($context, "source")), "data"));
                    foreach ($context['_seq'] as $context["dataKey"] => $context["dataVal"]) {
                        echo " data-";
                        echo twig_escape_filter($this->env, (isset($context["dataKey"]) ? $context["dataKey"] : $this->getContext($context, "dataKey")), "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, (isset($context["dataVal"]) ? $context["dataVal"] : $this->getContext($context, "dataVal")), "html", null, true);
                        echo "\"";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['dataKey'], $context['dataVal'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                // line 13
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["source"]) ? $context["source"] : $this->getContext($context, "source")), "label"), "html", null, true);
                echo "</a>
\t\t\t\t";
                // line 14
                if (($this->getAttribute((isset($context["source"]) ? $context["source"] : null), "nested", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["source"]) ? $context["source"] : $this->getContext($context, "source")), "nested"))))) {
                    // line 15
                    echo "\t\t\t\t\t<div class=\"toggle\"></div>
\t\t\t\t\t";
                    // line 16
                    $this->env->loadTemplate("_elements/sources")->display(array_merge($context, array("sources" => $this->getAttribute((isset($context["source"]) ? $context["source"] : $this->getContext($context, "source")), "nested"))));
                    // line 17
                    echo "\t\t\t\t";
                }
                // line 18
                echo "\t\t\t</li>
\t\t";
            }
            // line 20
            echo "\t";
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['source'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "_elements/sources";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 14,  42 => 4,  1014 => 184,  1009 => 183,  998 => 182,  984 => 178,  973 => 177,  959 => 173,  948 => 172,  934 => 168,  923 => 167,  909 => 163,  898 => 162,  886 => 158,  880 => 156,  878 => 155,  874 => 154,  861 => 153,  850 => 152,  836 => 148,  825 => 147,  811 => 143,  800 => 142,  786 => 138,  775 => 137,  761 => 133,  750 => 132,  736 => 128,  725 => 127,  711 => 123,  700 => 122,  686 => 118,  675 => 117,  661 => 113,  650 => 112,  625 => 107,  613 => 103,  601 => 102,  578 => 94,  566 => 90,  555 => 89,  543 => 85,  532 => 84,  520 => 80,  509 => 79,  497 => 75,  486 => 74,  463 => 69,  451 => 65,  440 => 64,  428 => 60,  417 => 59,  405 => 55,  382 => 50,  371 => 49,  348 => 44,  336 => 40,  325 => 39,  313 => 35,  290 => 30,  279 => 29,  256 => 24,  221 => 15,  210 => 14,  199 => 10,  188 => 9,  176 => 2,  159 => 180,  155 => 175,  147 => 165,  139 => 150,  135 => 145,  131 => 140,  119 => 125,  115 => 120,  99 => 20,  95 => 18,  79 => 23,  51 => 7,  47 => 37,  23 => 12,  127 => 135,  123 => 130,  96 => 36,  90 => 16,  81 => 30,  62 => 24,  36 => 12,  21 => 3,  19 => 1,  56 => 9,  49 => 6,  40 => 20,  38 => 19,  24 => 3,  22 => 2,  213 => 77,  209 => 76,  200 => 74,  193 => 70,  185 => 68,  181 => 67,  177 => 66,  173 => 65,  165 => 1,  161 => 62,  153 => 60,  145 => 58,  141 => 57,  133 => 55,  129 => 47,  125 => 53,  113 => 21,  109 => 49,  105 => 48,  101 => 37,  86 => 24,  83 => 82,  78 => 34,  73 => 32,  71 => 21,  69 => 29,  67 => 20,  59 => 52,  52 => 7,  45 => 16,  43 => 32,  35 => 22,  655 => 224,  652 => 223,  644 => 230,  636 => 108,  634 => 227,  631 => 226,  629 => 223,  626 => 222,  620 => 219,  617 => 218,  615 => 217,  606 => 216,  603 => 215,  600 => 214,  597 => 213,  595 => 212,  589 => 95,  586 => 207,  583 => 206,  580 => 205,  577 => 204,  571 => 198,  565 => 195,  562 => 194,  560 => 193,  557 => 192,  551 => 190,  549 => 189,  546 => 188,  541 => 185,  530 => 183,  526 => 182,  522 => 180,  519 => 179,  516 => 178,  507 => 264,  501 => 262,  499 => 261,  495 => 260,  489 => 257,  485 => 256,  481 => 254,  479 => 253,  474 => 70,  466 => 248,  464 => 247,  453 => 244,  445 => 242,  443 => 241,  437 => 240,  429 => 239,  423 => 235,  421 => 204,  416 => 201,  414 => 178,  408 => 174,  402 => 173,  394 => 54,  391 => 170,  388 => 169,  384 => 168,  374 => 160,  366 => 157,  361 => 155,  359 => 45,  357 => 153,  350 => 152,  345 => 151,  341 => 150,  330 => 146,  318 => 140,  310 => 138,  308 => 137,  302 => 34,  296 => 133,  292 => 131,  286 => 127,  280 => 126,  267 => 25,  262 => 123,  258 => 122,  252 => 119,  244 => 20,  241 => 115,  239 => 114,  236 => 113,  233 => 19,  230 => 80,  227 => 110,  224 => 79,  217 => 105,  211 => 104,  204 => 75,  201 => 102,  198 => 101,  195 => 100,  192 => 99,  189 => 69,  186 => 97,  183 => 96,  180 => 95,  178 => 94,  175 => 93,  172 => 92,  169 => 64,  166 => 90,  163 => 89,  160 => 88,  157 => 61,  154 => 86,  151 => 170,  149 => 59,  143 => 160,  140 => 79,  137 => 56,  134 => 77,  130 => 75,  121 => 52,  117 => 39,  114 => 71,  111 => 115,  108 => 69,  106 => 68,  103 => 105,  97 => 65,  94 => 64,  91 => 92,  88 => 34,  84 => 31,  80 => 13,  75 => 22,  66 => 11,  64 => 10,  61 => 25,  58 => 9,  55 => 47,  50 => 18,  44 => 25,  41 => 10,  34 => 11,  32 => 10,  30 => 9,  28 => 3,  26 => 3,  107 => 110,  104 => 33,  100 => 31,  92 => 17,  87 => 15,  76 => 24,  72 => 30,  65 => 27,  63 => 19,  60 => 18,  57 => 18,  54 => 8,  48 => 6,  46 => 26,  39 => 3,  37 => 11,  33 => 14,  31 => 17,  29 => 6,  27 => 13,  25 => 4,);
    }
}
