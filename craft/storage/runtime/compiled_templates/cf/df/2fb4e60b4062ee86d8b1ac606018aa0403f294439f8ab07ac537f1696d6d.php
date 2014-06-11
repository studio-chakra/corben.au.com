<?php

/* _components/widgets/QuickPost/settings */
class __TwigTemplate_cfdf2fb4e60b4062ee86d8b1ac606018aa0403f294439f8ab07ac537f1696d6d extends Craft\BaseTemplate
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
        // line 3
        if ((isset($context["sections"]) ? $context["sections"] : $this->getContext($context, "sections"))) {
            // line 4
            echo "\t";
            if (((isset($context["CraftEdition"]) ? $context["CraftEdition"] : $this->getContext($context, "CraftEdition")) >= (isset($context["CraftClient"]) ? $context["CraftClient"] : $this->getContext($context, "CraftClient")))) {
                // line 5
                echo "\t\t";
                $context["sectionOptions"] = array();
                // line 6
                echo "\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["sections"]) ? $context["sections"] : $this->getContext($context, "sections")));
                foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
                    // line 7
                    echo "\t\t\t";
                    $context["sectionOptions"] = twig_array_merge((isset($context["sectionOptions"]) ? $context["sectionOptions"] : $this->getContext($context, "sectionOptions")), array(0 => array("label" => \Craft\Craft::t($this->getAttribute((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), "name")), "value" => $this->getAttribute((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), "id"))));
                    // line 8
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 9
                echo "\t\t";
                echo $context["forms"]->getselectField(array("label" => \Craft\Craft::t("Section"), "instructions" => \Craft\Craft::t("Which section do you want to publish entries to?"), "id" => "section", "name" => "section", "options" => (isset($context["sectionOptions"]) ? $context["sectionOptions"] : $this->getContext($context, "sectionOptions")), "value" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "section"), "toggle" => true, "targetPrefix" => "section"));
                // line 18
                echo "

\t\t";
                // line 20
                $context["selectedSectionId"] = $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "section");
                // line 21
                echo "\t";
            } else {
                // line 22
                echo "\t\t";
                $context["selectedSectionId"] = $this->getAttribute($this->getAttribute((isset($context["sections"]) ? $context["sections"] : $this->getContext($context, "sections")), 0, array(), "array"), "id");
                // line 23
                echo "\t\t<input type=\"hidden\" name=\"section\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["selectedSectionId"]) ? $context["selectedSectionId"] : $this->getContext($context, "selectedSectionId")), "html", null, true);
                echo "\">
\t";
            }
            // line 25
            echo "
\t";
            // line 26
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sections"]) ? $context["sections"] : $this->getContext($context, "sections")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
                // line 27
                echo "\t\t";
                $context["showSection"] = (((!(isset($context["selectedSectionId"]) ? $context["selectedSectionId"] : $this->getContext($context, "selectedSectionId"))) && $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "first")) || ((isset($context["selectedSectionId"]) ? $context["selectedSectionId"] : $this->getContext($context, "selectedSectionId")) == $this->getAttribute((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), "id")));
                // line 28
                echo "\t\t<div id=\"section";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), "id"), "html", null, true);
                echo "\"";
                if ((!(isset($context["showSection"]) ? $context["showSection"] : $this->getContext($context, "showSection")))) {
                    echo " class=\"hidden\"";
                }
                echo ">

\t\t\t";
                // line 30
                $context["entryTypeOptions"] = array();
                // line 31
                echo "\t\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), "getEntryTypes", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["entryType"]) {
                    // line 32
                    echo "\t\t\t\t";
                    $context["entryTypeOptions"] = twig_array_merge((isset($context["entryTypeOptions"]) ? $context["entryTypeOptions"] : $this->getContext($context, "entryTypeOptions")), array(0 => array("label" => \Craft\Craft::t($this->getAttribute((isset($context["entryType"]) ? $context["entryType"] : $this->getContext($context, "entryType")), "name")), "value" => $this->getAttribute((isset($context["entryType"]) ? $context["entryType"] : $this->getContext($context, "entryType")), "id"))));
                    // line 33
                    echo "\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entryType'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                echo "
\t\t\t";
                // line 35
                if ((twig_length_filter($this->env, (isset($context["entryTypeOptions"]) ? $context["entryTypeOptions"] : $this->getContext($context, "entryTypeOptions"))) == 1)) {
                    // line 36
                    echo "\t\t\t\t<input type=\"hidden\" name=\"sections[";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), "id"), "html", null, true);
                    echo "][entryType]\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "entryType"), "html", null, true);
                    echo "\" />
\t\t\t";
                } else {
                    // line 38
                    echo "\t\t\t\t";
                    echo $context["forms"]->getselectField(array("label" => \Craft\Craft::t("Entry Type"), "instructions" => \Craft\Craft::t("Which type of entries do you want to publish?"), "id" => "entryType", "name" => (("sections[" . $this->getAttribute((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), "id")) . "][entryType]"), "options" => (isset($context["entryTypeOptions"]) ? $context["entryTypeOptions"] : $this->getContext($context, "entryTypeOptions")), "value" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "entryType"), "toggle" => true, "targetPrefix" => (("section" . $this->getAttribute((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), "id")) . "-type")));
                    // line 47
                    echo "
\t\t\t";
                }
                // line 49
                echo "
\t\t\t";
                // line 50
                ob_start();
                // line 51
                echo "\t\t\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), "getEntryTypes", array(), "method"));
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
                foreach ($context['_seq'] as $context["_key"] => $context["entryType"]) {
                    // line 52
                    echo "\t\t\t\t\t";
                    $context["showEntryType"] = ((((!(isset($context["showSection"]) ? $context["showSection"] : $this->getContext($context, "showSection"))) || (!$this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "entryType"))) && $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "first")) || ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "entryType") == $this->getAttribute((isset($context["entryType"]) ? $context["entryType"] : $this->getContext($context, "entryType")), "id")));
                    // line 53
                    echo "\t\t\t\t\t<div id=\"section";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), "id"), "html", null, true);
                    echo "-type";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entryType"]) ? $context["entryType"] : $this->getContext($context, "entryType")), "id"), "html", null, true);
                    echo "\"";
                    if ((!(isset($context["showEntryType"]) ? $context["showEntryType"] : $this->getContext($context, "showEntryType")))) {
                        echo " class=\"hidden\"";
                    }
                    echo ">
\t\t\t\t\t\t";
                    // line 54
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["entryType"]) ? $context["entryType"] : $this->getContext($context, "entryType")), "getFieldLayout", array(), "method"), "getFields", array(), "method"));
                    foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                        // line 55
                        echo "\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t";
                        // line 56
                        echo $context["forms"]->getcheckbox(array("label" => ($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "getField", array(), "method"), "name") . (($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "required")) ? (" <span class=\"required\"></span>") : (""))), "name" => (("sections[" . $this->getAttribute((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), "id")) . "][fields][]"), "value" => $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "fieldId"), "checked" => ($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "required") || twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "fieldId"), $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "fields"))), "disabled" => $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "required")));
                        // line 62
                        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 65
                    echo "\t\t\t\t\t</div>
\t\t\t\t";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entryType'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 67
                echo "\t\t\t";
                $context["fieldsInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 68
                echo "
\t\t\t";
                // line 69
                echo $context["forms"]->getfield(array("label" => \Craft\Craft::t("Fields"), "instructions" => \Craft\Craft::t("Which fields should be visible in the widget?")), (isset($context["fieldsInput"]) ? $context["fieldsInput"] : $this->getContext($context, "fieldsInput")));
                // line 72
                echo "
\t\t</div>
\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "
";
        } else {
            // line 77
            echo "
\t<p>";
            // line 78
            echo twig_escape_filter($this->env, \Craft\Craft::t("No sections are available."), "html", null, true);
            echo "</p>

";
        }
    }

    public function getTemplateName()
    {
        return "_components/widgets/QuickPost/settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 78,  233 => 77,  229 => 75,  213 => 72,  211 => 69,  208 => 68,  205 => 67,  190 => 65,  182 => 62,  177 => 55,  173 => 54,  162 => 53,  141 => 51,  139 => 50,  136 => 49,  132 => 47,  129 => 38,  121 => 36,  119 => 35,  116 => 34,  102 => 31,  90 => 28,  87 => 27,  70 => 26,  67 => 25,  61 => 23,  58 => 22,  55 => 21,  53 => 20,  46 => 9,  40 => 8,  29 => 5,  34 => 21,  27 => 11,  25 => 4,  21 => 2,  19 => 1,  180 => 56,  176 => 76,  169 => 74,  165 => 73,  159 => 52,  153 => 69,  150 => 68,  140 => 73,  134 => 71,  128 => 69,  125 => 68,  118 => 67,  110 => 33,  107 => 32,  104 => 64,  100 => 30,  96 => 61,  94 => 50,  91 => 49,  88 => 48,  85 => 47,  83 => 46,  80 => 45,  78 => 44,  75 => 43,  69 => 42,  64 => 39,  62 => 38,  59 => 34,  56 => 32,  54 => 31,  52 => 28,  49 => 18,  47 => 23,  44 => 20,  41 => 31,  39 => 24,  37 => 7,  32 => 6,  30 => 11,  28 => 10,  26 => 4,  24 => 3,);
    }
}
