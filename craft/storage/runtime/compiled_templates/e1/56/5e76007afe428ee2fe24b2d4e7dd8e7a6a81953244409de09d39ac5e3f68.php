<?php

/* _elements/modalbody */
class __TwigTemplate_e1565e76007afe428ee2fe24b2d4e7dd8e7a6a81953244409de09d39ac5e3f68 extends Craft\BaseTemplate
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
        echo "<div class=\"content";
        if ((isset($context["showSidebar"]) ? $context["showSidebar"] : $this->getContext($context, "showSidebar"))) {
            echo " has-sidebar";
        }
        echo "\">
\t<div class=\"sidebar";
        // line 2
        if ((!(isset($context["showSidebar"]) ? $context["showSidebar"] : $this->getContext($context, "showSidebar")))) {
            echo " hidden";
        }
        echo "\">
\t\t<nav>
\t\t\t";
        // line 4
        $this->env->loadTemplate("_elements/sources")->display($context);
        // line 5
        echo "\t\t</nav>
\t</div>

\t";
        // line 8
        $this->env->loadTemplate("_elements/indexcontainer")->display($context);
        // line 9
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "_elements/modalbody";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 9,  40 => 8,  35 => 5,  33 => 4,  26 => 2,  19 => 1,);
    }
}
