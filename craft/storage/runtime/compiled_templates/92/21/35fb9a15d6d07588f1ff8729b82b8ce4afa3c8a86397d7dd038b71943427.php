<?php

/* _components/fieldtypes/Categories/input */
class __TwigTemplate_922135fb9a15d6d07588f1ff8729b82b8ce4afa3c8a86397d7dd038b71943427 extends Craft\BaseTemplate
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
        echo "<input type=\"hidden\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "\" value=\"\">

";
        // line 3
        if (array_key_exists("categories", $context)) {
            // line 4
            echo "\t<div id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\" class=\"categoriesfield\">

\t\t<ul class=\"elements structure\">
\t\t\t";
            // line 7
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                $_thisItemLevel = (int)$this->getAttribute($context["category"], 'level', array(), Twig_TemplateInterface::ANY_CALL, false, true);
                if (isset($context['nav'])) {
                    $_tmpContext = $context;
                    $context = $_contextsByLevel[$context['nav']['level']];
                    if ($_thisItemLevel > $context['nav']['level']) {
                        for ($_i = $context['nav']['level']; $_i < $_thisItemLevel; $_i++) {
                                                        // line 24
                            echo "\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
                        }
                    } else {
                                                // line 28
                        echo "\t\t\t\t</li>
\t\t\t";
                        if ($_thisItemLevel < $context['nav']['level']) {
                            for ($_i = $context['nav']['level']-1; $_i >= $_thisItemLevel; $_i--) {
                                if (isset($_contextsByLevel[$_i])) {
                                    $context = $_contextsByLevel[$_i];
                                                                        // line 26
                                    echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t";
                                                                        // line 28
                                    echo "\t\t\t\t</li>
\t\t\t";
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
                    if (method_exists($context["category"], 'setParent')) {
                        $context["category"]->setParent($context['nav']['parent']["category"]);
                    }
                } else {
                    $context['nav']['parent'] = null;
                }
                $_contextsByLevel[$_thisItemLevel] = $context;
                // line 8
                echo "\t\t\t\t";
                $context["selected"] = twig_in_filter($this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"), (isset($context["selectedCategoryIds"]) ? $context["selectedCategoryIds"] : $this->getContext($context, "selectedCategoryIds")));
                // line 9
                echo "\t\t\t\t<li id=\"";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "-category-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"), "html", null, true);
                echo "\"";
                if ((!(isset($context["selected"]) ? $context["selected"] : $this->getContext($context, "selected")))) {
                    echo " class=\"hidden\"";
                }
                echo ">
\t\t\t\t\t";
                // line 10
                $context["indent"] = (($this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "level") - 1) * 35);
                // line 11
                echo "\t\t\t\t\t<div class=\"row\" style=\"margin-left: -";
                echo twig_escape_filter($this->env, (isset($context["indent"]) ? $context["indent"] : $this->getContext($context, "indent")), "html", null, true);
                echo "px; padding-left: ";
                echo twig_escape_filter($this->env, (isset($context["indent"]) ? $context["indent"] : $this->getContext($context, "indent")), "html", null, true);
                echo "px;\">";
                // line 12
                ob_start();
                // line 13
                echo "\t\t\t\t\t\t\t";
                $this->env->loadTemplate("_includes/forms/checkbox")->display(array("label" => twig_include($this->env, $context, "_elements/element", array("element" => (isset($context["category"]) ? $context["category"] : $this->getContext($context, "category"))), false, false, false), "value" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"), "id" => (((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) . "-") . $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id")), "name" => ((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")) . "[]"), "checked" => (isset($context["selected"]) ? $context["selected"] : $this->getContext($context, "selected"))));
                // line 20
                echo "\t\t\t\t\t\t";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 21
                echo "</div>

\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            if (isset($_thisItemLevel)) {
                $_tmpContext = $context;
                if ($_thisItemLevel > $_firstItemLevel) {
                    for ($_i = $_thisItemLevel; $_i > $_firstItemLevel; $_i--) {
                        if (isset($_contextsByLevel[$_i])) {
                            $context = $_contextsByLevel[$_i];
                                                        // line 28
                            echo "\t\t\t\t</li>
\t\t\t";
                                                        // line 26
                            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t";
                        }
                    }
                }
                $context = $_contextsByLevel[$_firstItemLevel];
                                // line 28
                echo "\t\t\t\t</li>
\t\t\t";
                $context = $_tmpContext;
                unset($_thisItemLevel, $_firstItemLevel, $_i, $_contextsByLevel, $_tmpContext);
            }
            // line 30
            echo "\t\t</ul>

\t\t<div class=\"btn add icon dashed\">";
            // line 32
            echo twig_escape_filter($this->env, \Craft\Craft::t("Add a category"), "html", null, true);
            echo "</div>
\t</div>

\t";
            // line 35
            ob_start();
            // line 36
            echo "\t\tnew ";
            echo twig_escape_filter($this->env, (isset($context["jsClass"]) ? $context["jsClass"] : $this->getContext($context, "jsClass")), "html", null, true);
            echo "(
\t\t\t\"";
            // line 37
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\craft()->templates->namespaceInputId((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))), "js"), "html", null, true);
            echo "\",
\t\t\t\"";
            // line 38
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\craft()->templates->namespaceInputName((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "js"), "html", null, true);
            echo "\",
\t\t\t\"";
            // line 39
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute((isset($context["elementType"]) ? $context["elementType"] : $this->getContext($context, "elementType")), "getClassHandle", array(), "method"), "js"), "html", null, true);
            echo "\",
\t\t\t";
            // line 40
            echo twig_jsonencode_filter((isset($context["sources"]) ? $context["sources"] : $this->getContext($context, "sources")));
            echo ",
\t\t\t";
            // line 41
            echo twig_jsonencode_filter((isset($context["criteria"]) ? $context["criteria"] : $this->getContext($context, "criteria")));
            echo ",
\t\t\t";
            // line 42
            echo twig_escape_filter($this->env, (((isset($context["sourceElementId"]) ? $context["sourceElementId"] : $this->getContext($context, "sourceElementId"))) ? ((isset($context["sourceElementId"]) ? $context["sourceElementId"] : $this->getContext($context, "sourceElementId"))) : ("null")), "html", null, true);
            echo ",
\t\t\t";
            // line 43
            echo twig_escape_filter($this->env, (((isset($context["limit"]) ? $context["limit"] : $this->getContext($context, "limit"))) ? ((isset($context["limit"]) ? $context["limit"] : $this->getContext($context, "limit"))) : ("null")), "html", null, true);
            echo ",
\t\t\t\"";
            // line 44
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["storageKey"]) ? $context["storageKey"] : $this->getContext($context, "storageKey")), "js"), "html", null, true);
            echo "\"
\t\t);
\t";
            $context["js"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 47
            echo "
\t";
            // line 48
            \Craft\craft()->templates->includeJs((isset($context["js"]) ? $context["js"] : $this->getContext($context, "js")));
        } else {
            // line 50
            echo "\t<p class=\"error\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t("This field is not set to a valid category group."), "html", null, true);
            echo "</p>
";
        }
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/Categories/input";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 50,  196 => 48,  193 => 47,  187 => 44,  183 => 43,  179 => 42,  175 => 41,  171 => 40,  167 => 39,  163 => 38,  159 => 37,  154 => 36,  152 => 35,  146 => 32,  142 => 30,  136 => 28,  129 => 26,  126 => 28,  112 => 21,  109 => 20,  106 => 13,  104 => 12,  98 => 11,  96 => 10,  85 => 9,  82 => 8,  59 => 28,  56 => 26,  49 => 28,  44 => 24,  34 => 7,  27 => 4,  25 => 3,  19 => 1,);
    }
}
