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
        return array (  59 => 21,  57 => 13,  54 => 12,  52 => 11,  50 => 10,  135 => 35,  132 => 34,  126 => 31,  122 => 30,  118 => 29,  114 => 28,  110 => 27,  106 => 26,  102 => 25,  98 => 24,  94 => 23,  89 => 22,  87 => 21,  81 => 18,  77 => 16,  63 => 15,  60 => 14,  43 => 13,  37 => 11,  35 => 9,  33 => 9,  31 => 7,  29 => 6,  27 => 5,  21 => 2,  19 => 1,);
    }
}
