<?php

/* people */
class __TwigTemplate_5884c98bc3397f0a6efe4030ed737563e5e943701459d3fb05b8e7b3c7e13707 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layout");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layout";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["title"] = "People";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "
<article class=\"page-team\">
\t<div class=\"row\">
\t\t<div class=\"large-12 columns\">
\t\t\t<section class=\"team\">
\t\t\t\t<ul class=\"team-grid\">
\t\t\t\t\t";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "entries"), "section", array(0 => "people"), "method"), "find", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 12
            echo "\t\t\t\t\t\t";
            $context["asset"] = $this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "employeePhoto"), "first", array(), "method");
            // line 13
            echo "\t\t\t\t\t  <li class=\"team-item\">
\t\t\t\t\t  \t<div class=\"employee employee-";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "employeeType"), "html", null, true);
            echo "\">
\t\t\t\t\t\t  \t";
            // line 15
            if ((isset($context["asset"]) ? $context["asset"] : $this->getContext($context, "asset"))) {
                echo "<img class=\"emp-photo\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : $this->getContext($context, "asset")), "url"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "employeeFirstName"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "employeeLastName"), "html", null, true);
                echo "\" width=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : $this->getContext($context, "asset")), "width"), "html", null, true);
                echo "\" height=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : $this->getContext($context, "asset")), "height"), "html", null, true);
                echo "\" />";
            }
            echo "\t\t\t\t  \t
\t\t\t\t\t\t\t\t<h2 class=\"emp-name\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "employeeFirstName"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "employeeLastName"), "html", null, true);
            echo " <small class=\"emp-title\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "employeeTitle"), "html", null, true);
            echo "</small></h2>
\t\t\t\t\t\t\t\t<p class=\"emp-cred\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "employeeCredentials"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t";
            // line 18
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "employeeDisplaySettings"))) {
                // line 19
                echo "\t\t\t\t\t\t\t\t\t<div class=\"emp-bio\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "employeeBio"), "html", null, true);
                echo "</div>
\t\t\t\t\t\t\t\t";
            }
            // line 21
            echo "\t\t\t\t\t  \t</div>
\t\t\t\t\t  </li>
\t\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "\t\t\t\t</ul>
\t\t\t</section>
\t\t</div>
\t</div>
</article>

";
    }

    public function getTemplateName()
    {
        return "people";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 24,  91 => 21,  85 => 19,  83 => 18,  79 => 17,  71 => 16,  55 => 15,  51 => 14,  48 => 13,  45 => 12,  41 => 11,  33 => 5,  30 => 4,  25 => 2,);
    }
}
