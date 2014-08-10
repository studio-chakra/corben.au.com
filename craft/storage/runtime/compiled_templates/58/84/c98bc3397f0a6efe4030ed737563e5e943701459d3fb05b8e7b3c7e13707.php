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
\t\t\t\t<h2>DIRECTORS</h2>
\t\t\t\t<ul class=\"team-grid\">
\t\t\t\t\t";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "entries"), "section", array(0 => "people"), "method"), "find", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 13
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "employeeType") == "director")) {
                // line 14
                echo "\t\t\t\t\t\t\t";
                $context["asset"] = $this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "employeePhoto"), "first", array(), "method");
                // line 15
                echo "\t\t\t\t\t\t  <li class=\"team-item\">
\t\t\t\t\t\t  \t<div class=\"employee employee-";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "employeeType"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t  \t";
                // line 17
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
\t\t\t\t\t\t\t\t\t<h2 class=\"emp-name\">";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "employeeFirstName"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "employeeLastName"), "html", null, true);
                echo "</h2>
\t\t\t\t\t\t\t\t\t<h4 class=\"emp-title\">";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "employeeTitle"), "html", null, true);
                echo "</h4>
\t\t\t\t\t\t\t\t\t<p class=\"emp-cred\">";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "employeeCredentials"), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t";
                // line 21
                if (twig_length_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "employeeDisplaySettings"))) {
                    // line 22
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"emp-bio\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "employeeBio"), "html", null, true);
                    echo "</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 24
                echo "\t\t\t\t\t\t  \t</div>
\t\t\t\t\t\t  </li>
\t\t\t\t\t\t";
            }
            // line 27
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\t\t\t\t\t\t
\t\t\t\t</ul>
\t\t\t</section>
\t\t</div>
\t</div>

\t<div class=\"row\">
\t\t<div class=\"large-12 columns\">
\t\t\t<section class=\"team\">
\t\t\t\t<h2>STAFF</h2>
\t\t\t\t<ul class=\"team-grid\">
\t\t\t\t\t";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "entries"), "section", array(0 => "people"), "method"), "find", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 39
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "employeeType") == "staff")) {
                // line 40
                echo "\t\t\t\t\t\t\t";
                $context["asset"] = $this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "employeePhoto"), "first", array(), "method");
                // line 41
                echo "\t\t\t\t\t\t  <li class=\"team-item\">
\t\t\t\t\t\t  \t<div class=\"employee employee-";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "employeeType"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t  \t";
                // line 43
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
\t\t\t\t\t\t\t\t\t<h2 class=\"emp-name\">";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "employeeFirstName"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "employeeLastName"), "html", null, true);
                echo "</h2>
\t\t\t\t\t\t\t\t\t<h4 class=\"emp-title\">";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "employeeTitle"), "html", null, true);
                echo "</h4>
\t\t\t\t\t\t\t\t\t<p class=\"emp-cred\">";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "employeeCredentials"), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t";
                // line 47
                if (twig_length_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "employeeDisplaySettings"))) {
                    // line 48
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"emp-bio\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "employeeBio"), "html", null, true);
                    echo "</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 50
                echo "\t\t\t\t\t\t  \t</div>
\t\t\t\t\t\t  </li>
\t\t\t\t\t\t";
            }
            // line 53
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\t\t\t\t\t\t
\t\t\t\t</ul>
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
        return array (  180 => 53,  175 => 50,  169 => 48,  167 => 47,  163 => 46,  159 => 45,  153 => 44,  137 => 43,  133 => 42,  130 => 41,  127 => 40,  124 => 39,  120 => 38,  102 => 27,  97 => 24,  91 => 22,  89 => 21,  85 => 20,  81 => 19,  75 => 18,  59 => 17,  55 => 16,  52 => 15,  49 => 14,  46 => 13,  42 => 12,  33 => 5,  30 => 4,  25 => 2,);
    }
}
