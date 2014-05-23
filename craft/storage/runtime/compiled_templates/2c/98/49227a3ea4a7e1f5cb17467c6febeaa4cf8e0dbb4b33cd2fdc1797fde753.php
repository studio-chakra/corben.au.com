<?php

/* dev/people */
class __TwigTemplate_2c9849227a3ea4a7e1f5cb17467c6febeaa4cf8e0dbb4b33cd2fdc1797fde753 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layout-dev");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layout-dev";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
<article class=\"page-team\">
\t<div class=\"row\">
\t\t<div class=\"large-12 columns\">
\t\t\t<section class=\"team\">
\t\t\t\t<ul class=\"team-grid\">
\t\t\t\t\t";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 11
            echo "\t\t\t\t  <li class=\"team-item\">
\t\t\t\t  \t<div class=\"employee employee-director\">
\t\t\t\t\t  \t<img class=\"emp-photo\" src=\"http://placehold.it/480x320\" />
\t\t\t\t\t\t\t<h2 class=\"emp-name\">First Last <small class=\"emp-position\">Postition</small></h2>
\t\t\t\t\t\t\t<p class=\"emp-job\">B.Sc. (Arch) B Arch (Hon) FRAIA  Registration 4616</p>
\t\t\t\t\t\t\t<p class=\"emp-bio\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus sequi voluptatem voluptatum perspiciatis sed consequatur assumenda ratione id dolor alias provident rem modi deserunt odit laboriosam pariatur exercitationem atque quo?</p>
\t\t\t\t  \t</div>
\t\t\t\t  </li>
\t\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "\t\t\t\t  ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 21
            echo "\t\t\t\t  <li class=\"team-item\">
\t\t\t\t  \t<div class=\"employee employee-staff\">
\t\t\t\t\t  \t<img class=\"emp-photo\" src=\"http://placehold.it/480x320\" />
\t\t\t\t\t\t\t<h2 class=\"emp-name\">First Last <small class=\"emp-position\">Postition</small></h2>
\t\t\t\t\t\t\t<p class=\"emp-job\">B.Sc. (Arch) B Arch (Hon) FRAIA  Registration 4616</p>
\t\t\t\t  \t</div>
\t\t\t\t  </li>
\t\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "\t\t\t\t</ul>
\t\t\t</section>
\t\t</div>
\t</div>
</article>

";
    }

    public function getTemplateName()
    {
        return "dev/people";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 29,  62 => 21,  57 => 20,  43 => 11,  39 => 10,  31 => 4,  28 => 3,);
    }
}
