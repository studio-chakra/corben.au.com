<?php

/* dev/projects */
class __TwigTemplate_4cdc4a68d6e7028b07ddf3b1d0a0558877c5e2e7ec2c855db49ee977c22a212a extends Craft\BaseTemplate
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
<article class=\"page-projects\">
\t<div class=\"row\">
\t\t<div class=\"large-12 columns\">
\t\t\t<section class=\"projects\">
\t\t\t\t<ul class=\"project-grid project-grid-hover\">
\t\t\t\t\t";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 11
            echo "\t\t\t\t  <li class=\"project-grid-item\">
\t\t\t\t  \t<a href=\"/dev/project\" class=\"project-thumb\">
\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t<img class=\"project-thumb-img\" src=\"http://placehold.it/480x320\" />
\t\t\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t\t\t\t<h6 class=\"project-thumb-title\">Project Name <span class=\"project-thumb-client\">| Client</span></h6>
\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t</figure>
\t\t\t\t  \t</a>
\t\t\t\t  </li>
\t\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "\t\t\t\t</ul>
\t\t\t</section>
\t\t</div>
\t</div>
</article>

";
    }

    public function getTemplateName()
    {
        return "dev/projects";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 22,  43 => 11,  39 => 10,  31 => 4,  28 => 3,);
    }
}
