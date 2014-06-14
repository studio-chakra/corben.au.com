<?php

/* _includes/forms/errorList */
class __TwigTemplate_c107aed1a33ea3b6ab9b37857a8e536c16fa6f037059ecfa334ba8520891fff5 extends Craft\BaseTemplate
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
        if ((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) {
            // line 2
            echo "\t<ul class=\"errors\">
\t\t";
            // line 3
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 4
                echo "\t\t\t<li>";
                echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
                echo "</li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 6
            echo "\t</ul>";
        }
    }

    public function getTemplateName()
    {
        return "_includes/forms/errorList";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 6,  28 => 4,  92 => 23,  90 => 22,  85 => 20,  78 => 19,  74 => 17,  68 => 15,  65 => 14,  59 => 11,  47 => 10,  42 => 8,  40 => 7,  25 => 4,  86 => 24,  79 => 23,  75 => 22,  71 => 21,  67 => 20,  63 => 19,  57 => 18,  51 => 17,  45 => 9,  39 => 15,  33 => 14,  27 => 6,  23 => 3,  26 => 12,  24 => 3,  21 => 2,  19 => 1,);
    }
}
