<?php

/* _elements/structure */
class __TwigTemplate_d643416ca0b31b7742c88291e81eb1a12bf384b52ac9f760e0471660d19d3fc2 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'element' => array($this, 'block_element'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["disabledElementIds"] = ((array_key_exists("disabledElementIds", $context)) ? ((isset($context["disabledElementIds"]) ? $context["disabledElementIds"] : $this->getContext($context, "disabledElementIds"))) : (array()));
        // line 2
        $context["collapsedElementIds"] = ((array_key_exists("collapsedElementIds", $context)) ? ((isset($context["collapsedElementIds"]) ? $context["collapsedElementIds"] : $this->getContext($context, "collapsedElementIds"))) : (array()));
        // line 3
        $context["sortable"] = ((array_key_exists("sortable", $context) && (isset($context["sortable"]) ? $context["sortable"] : $this->getContext($context, "sortable"))) && $this->getAttribute((isset($context["structure"]) ? $context["structure"] : $this->getContext($context, "structure")), "isSortable", array(), "method"));
        // line 4
        $context["newChildUrl"] = ((array_key_exists("newChildUrl", $context)) ? ((isset($context["newChildUrl"]) ? $context["newChildUrl"] : $this->getContext($context, "newChildUrl"))) : (null));
        // line 5
        $context["id"] = ((("structure-" . $this->getAttribute((isset($context["structure"]) ? $context["structure"] : $this->getContext($context, "structure")), "id")) . "-") . twig_random($this->env));
        // line 6
        echo "
<ul id=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"structure\">
\t";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            $_thisItemLevel = (int)$this->getAttribute($context["element"], 'level', array(), Twig_TemplateInterface::ANY_CALL, false, true);
            if (isset($context['nav'])) {
                $_tmpContext = $context;
                $context = $_contextsByLevel[$context['nav']['level']];
                if ($_thisItemLevel > $context['nav']['level']) {
                    for ($_i = $context['nav']['level']; $_i < $_thisItemLevel; $_i++) {
                                                // line 28
                        echo "\t\t\t\t<ul>
\t\t\t\t\t";
                    }
                } else {
                                        // line 32
                    echo "\t\t</li>
\t";
                    if ($_thisItemLevel < $context['nav']['level']) {
                        for ($_i = $context['nav']['level']-1; $_i >= $_thisItemLevel; $_i--) {
                            if (isset($_contextsByLevel[$_i])) {
                                $context = $_contextsByLevel[$_i];
                                                                // line 30
                                echo "\t\t\t\t</ul>
\t\t\t";
                                                                // line 32
                                echo "\t\t</li>
\t";
                                unset($_contextsByLevel[$_i]);
                            }
                        }
                    }
                }
                $context = $_tmpContext;
                unset($_tmpContext);
            } else {
                $_firstItemLevel = $_thisItemLevel;
            }
            $context['nav']['level'] = $_thisItemLevel;
            if (isset($_contextsByLevel[$_thisItemLevel-1])) {
                $context['nav']['parent'] = $_contextsByLevel[$_thisItemLevel-1];
                if (method_exists($context["element"], 'setParent')) {
                    $context["element"]->setParent($context['nav']['parent']["element"]);
                }
            } else {
                $context['nav']['parent'] = null;
            }
            $_contextsByLevel[$_thisItemLevel] = $context;
            // line 9
            echo "\t\t<li";
            if (twig_in_filter($this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "id"), (isset($context["collapsedElementIds"]) ? $context["collapsedElementIds"] : $this->getContext($context, "collapsedElementIds")))) {
                echo " class=\"collapsed\"";
            }
            echo " data-level=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "level"), "html", null, true);
            echo "\">
\t\t\t";
            // line 10
            $context["indent"] = (8 + (($this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "level") - 1) * 35));
            // line 11
            echo "\t\t\t<div class=\"row";
            if (twig_in_filter($this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "id"), (isset($context["disabledElementIds"]) ? $context["disabledElementIds"] : $this->getContext($context, "disabledElementIds")))) {
                echo " disabled";
            }
            echo "\" style=\"margin-left: -";
            echo twig_escape_filter($this->env, (isset($context["indent"]) ? $context["indent"] : $this->getContext($context, "indent")), "html", null, true);
            echo "px; padding-left: ";
            echo twig_escape_filter($this->env, (isset($context["indent"]) ? $context["indent"] : $this->getContext($context, "indent")), "html", null, true);
            echo "px;\">";
            // line 12
            ob_start();
            // line 13
            echo "\t\t\t\t\t";
            $this->displayBlock('element', $context, $blocks);
            // line 24
            echo "\t\t\t\t";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 25
            echo "</div>

\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        if (isset($_thisItemLevel)) {
            $_tmpContext = $context;
            if ($_thisItemLevel > $_firstItemLevel) {
                for ($_i = $_thisItemLevel; $_i > $_firstItemLevel; $_i--) {
                    if (isset($_contextsByLevel[$_i])) {
                        $context = $_contextsByLevel[$_i];
                                                // line 32
                        echo "\t\t</li>
\t";
                                                // line 30
                        echo "\t\t\t\t</ul>
\t\t\t";
                    }
                }
            }
            $context = $_contextsByLevel[$_firstItemLevel];
                        // line 32
            echo "\t\t</li>
\t";
            $context = $_tmpContext;
            unset($_thisItemLevel, $_firstItemLevel, $_i, $_contextsByLevel, $_tmpContext);
        }
        // line 34
        echo "</ul>

";
        // line 37
        if ($this->getAttribute((isset($context["structure"]) ? $context["structure"] : $this->getContext($context, "structure")), "maxLevels")) {
            // line 38
            echo "\t";
            ob_start();
            // line 39
            echo "\t\t#";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(2, $this->getAttribute((isset($context["structure"]) ? $context["structure"] : $this->getContext($context, "structure")), "maxLevels")));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                if (($this->getAttribute((isset($context["structure"]) ? $context["structure"] : $this->getContext($context, "structure")), "maxLevels") >= 2)) {
                    echo " ul";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " .add { display: none; }
\t";
            $context["css"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 41
            echo "
\t";
            // line 42
            \Craft\craft()->templates->includeCss((isset($context["css"]) ? $context["css"] : $this->getContext($context, "css")));
        }
        // line 44
        echo "
";
        // line 45
        ob_start();
        // line 46
        echo "\tnew Craft.Structure(";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["structure"]) ? $context["structure"] : $this->getContext($context, "structure")), "id"), "html", null, true);
        echo ", '#";
        echo twig_escape_filter($this->env, \Craft\craft()->templates->namespaceInputId((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))), "html", null, true);
        echo "', {
\t\tstorageKey:  ";
        // line 47
        echo ((array_key_exists("storageKey", $context)) ? (twig_jsonencode_filter((isset($context["storageKey"]) ? $context["storageKey"] : $this->getContext($context, "storageKey")))) : ((("\"Structure." . $this->getAttribute((isset($context["structure"]) ? $context["structure"] : $this->getContext($context, "structure")), "id")) . "\"")));
        echo ",
\t\tsortable:    ";
        // line 48
        echo (((isset($context["sortable"]) ? $context["sortable"] : $this->getContext($context, "sortable"))) ? ("true") : ("false"));
        echo ",
\t\tnewChildUrl: ";
        // line 49
        echo (((isset($context["newChildUrl"]) ? $context["newChildUrl"] : $this->getContext($context, "newChildUrl"))) ? (twig_jsonencode_filter((isset($context["newChildUrl"]) ? $context["newChildUrl"] : $this->getContext($context, "newChildUrl")))) : ("null"));
        echo ",
\t\tmaxLevels:   ";
        // line 50
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["structure"]) ? $context["structure"] : $this->getContext($context, "structure")), "maxLevels")) ? ($this->getAttribute((isset($context["structure"]) ? $context["structure"] : $this->getContext($context, "structure")), "maxLevels")) : ("null")), "html", null, true);
        echo "
\t});
";
        $context["js"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 53
        \Craft\craft()->templates->includeJs((isset($context["js"]) ? $context["js"] : $this->getContext($context, "js")), true);
    }

    // line 13
    public function block_element($context, array $blocks = array())
    {
        // line 14
        echo "\t\t\t\t\t\t";
        $this->env->loadTemplate("_elements/element")->display($context);
        // line 15
        echo "
\t\t\t\t\t\t";
        // line 16
        if ((isset($context["sortable"]) ? $context["sortable"] : $this->getContext($context, "sortable"))) {
            // line 17
            echo "\t\t\t\t\t\t\t<a class=\"move icon\" title=\"";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Move"), "html", null, true);
            echo "\"></a>
\t\t\t\t\t\t";
        }
        // line 19
        echo "
\t\t\t\t\t\t";
        // line 20
        if ((isset($context["newChildUrl"]) ? $context["newChildUrl"] : $this->getContext($context, "newChildUrl"))) {
            // line 21
            echo "\t\t\t\t\t\t\t<a class=\"add icon\" title=\"";
            echo twig_escape_filter($this->env, \Craft\Craft::t("New Child"), "html", null, true);
            echo "\"></a>
\t\t\t\t\t\t";
        }
        // line 23
        echo "\t\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "_elements/structure";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 23,  252 => 21,  250 => 20,  247 => 19,  241 => 17,  239 => 16,  236 => 15,  233 => 14,  230 => 13,  226 => 53,  220 => 50,  216 => 49,  212 => 48,  208 => 47,  201 => 46,  199 => 45,  196 => 44,  193 => 42,  190 => 41,  174 => 39,  171 => 38,  169 => 37,  165 => 34,  159 => 32,  152 => 30,  149 => 32,  127 => 25,  124 => 24,  121 => 13,  119 => 12,  109 => 11,  107 => 10,  98 => 9,  75 => 32,  72 => 30,  65 => 32,  60 => 28,  37 => 8,  33 => 7,  30 => 6,  28 => 5,  26 => 4,  24 => 3,  22 => 2,  20 => 1,  19 => 1,);
    }
}
