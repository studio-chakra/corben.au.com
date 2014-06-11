<?php

/* _components/widgets/RecentEntries/settings */
class __TwigTemplate_a6d1add2edb5fae7aa464436ce750e6aad02ec5dfb2d084f16197ee4024e4dae extends Craft\BaseTemplate
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
        $context["forms"] = $this->env->loadTemplate("_includes/forms");
        // line 2
        echo "

";
        // line 4
        if (((isset($context["CraftEdition"]) ? $context["CraftEdition"] : $this->getContext($context, "CraftEdition")) >= (isset($context["CraftClient"]) ? $context["CraftClient"] : $this->getContext($context, "CraftClient")))) {
            // line 5
            echo "\t";
            ob_start();
            // line 6
            echo "\t\t<div class=\"select\">
\t\t\t<select id=\"section\" name=\"section\">
\t\t\t\t<option value=\"*\">";
            // line 8
            echo twig_escape_filter($this->env, \Craft\Craft::t("All"), "html", null, true);
            echo "</option>
\t\t\t\t";
            // line 9
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "sections"), "getAllSections", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
                // line 10
                echo "\t\t\t\t\t";
                if (($this->getAttribute((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), "type") != "single")) {
                    // line 11
                    echo "\t\t\t\t\t\t<option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), "id"), "html", null, true);
                    echo "\"";
                    if (($this->getAttribute((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), "id") == $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "section"))) {
                        echo " selected";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), "name")), "html", null, true);
                    echo "</option>
\t\t\t\t\t";
                }
                // line 13
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "\t\t\t</select>
\t\t</div>
\t";
            $context["sectionInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 17
            echo "
\t";
            // line 18
            echo $context["forms"]->getfield(array("label" => \Craft\Craft::t("Section"), "instructions" => \Craft\Craft::t("Which section do you want to pull recent entries from?"), "id" => "section"), (isset($context["sectionInput"]) ? $context["sectionInput"] : $this->getContext($context, "sectionInput")));
            // line 22
            echo "
";
        }
        // line 24
        echo "

";
        // line 26
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Limit"), "id" => "limit", "name" => "limit", "value" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "limit"), "size" => 2, "errors" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "getErrors", array(0 => "limit"), "method")));
        // line 33
        echo "
";
    }

    public function getTemplateName()
    {
        return "_components/widgets/RecentEntries/settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 26,  77 => 24,  73 => 22,  71 => 18,  68 => 17,  63 => 14,  57 => 13,  45 => 11,  42 => 10,  38 => 9,  236 => 78,  233 => 77,  229 => 75,  213 => 72,  211 => 69,  208 => 68,  205 => 67,  190 => 65,  182 => 62,  177 => 55,  173 => 54,  162 => 53,  141 => 51,  139 => 50,  136 => 49,  132 => 47,  129 => 38,  121 => 36,  119 => 35,  116 => 34,  102 => 31,  90 => 28,  87 => 27,  70 => 26,  67 => 25,  61 => 23,  58 => 22,  55 => 21,  53 => 20,  46 => 9,  40 => 8,  29 => 5,  34 => 8,  27 => 5,  25 => 4,  21 => 2,  19 => 1,  180 => 56,  176 => 76,  169 => 74,  165 => 73,  159 => 52,  153 => 69,  150 => 68,  140 => 73,  134 => 71,  128 => 69,  125 => 68,  118 => 67,  110 => 33,  107 => 32,  104 => 64,  100 => 30,  96 => 61,  94 => 50,  91 => 49,  88 => 48,  85 => 47,  83 => 33,  80 => 45,  78 => 44,  75 => 43,  69 => 42,  64 => 39,  62 => 38,  59 => 34,  56 => 32,  54 => 31,  52 => 28,  49 => 18,  47 => 23,  44 => 20,  41 => 31,  39 => 24,  37 => 7,  32 => 6,  30 => 6,  28 => 10,  26 => 4,  24 => 3,);
    }
}
