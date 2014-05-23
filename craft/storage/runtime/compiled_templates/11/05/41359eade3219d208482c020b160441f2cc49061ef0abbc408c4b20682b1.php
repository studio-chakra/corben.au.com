<?php

/* dev/project */
class __TwigTemplate_110541359eade3219d208482c020b160441f2cc49061ef0abbc408c4b20682b1 extends Craft\BaseTemplate
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
<article class=\"page-project\">
\t<div class=\"row\">
\t\t<div class=\"large-12 columns\">\t
\t\t\t<section class=\"project-carousel\">
\t\t\t\t<div id=\"project-carousel\" class=\"owl-carousel corben-carousel\"> 
\t\t\t\t\t";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 11
            echo "\t\t\t\t\t<div class=\"carousel-item home-carousel-item\">
\t\t\t\t\t\t<img src=\"http://placehold.it/1470x830\" alt=\"Slide One\" />
\t\t\t\t\t</div>\t\t\t\t\t\t
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"project-panel\">
\t\t\t\t\t<h2 class=\"project-title\">Project Title <span class=\"divider\">|</span> <small class=\"project-client\">Client</small></h2>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"xlarge-3 large-3 medium-4 small-12 columns project-details\">
\t\t\t\t\t\t\t<ul class=\"no-bullet project-details-list\">
\t\t\t\t\t\t\t\t<li class=\"project-detail-item\"><strong class=\"project-detail-label\">Completed:</strong> YYYY</li>
\t\t\t\t\t\t\t\t<li class=\"project-detail-item\"><strong class=\"project-detail-label\">Builder:</strong> Builder</li>
\t\t\t\t\t\t\t\t<li class=\"project-detail-item\"><strong class=\"project-detail-label\">Area:</strong> #sqm</li>
\t\t\t\t\t\t\t\t<li class=\"project-detail-item\"><strong class=\"project-detail-label\">Photographer:</strong> First Last</li>
\t\t\t\t\t\t\t\t<li class=\"project-detail-item\"><a href=\"\" class=\"btn btn-link btn-project-pdf\">Download PDF</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"xlarge-5 large-7 medium-8 small-12 end columns project-description\">
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus sequi voluptatem voluptatum perspiciatis sed consequatur assumenda ratione id dolor alias provident rem modi deserunt odit laboriosam pariatur exercitationem atque quo?</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"project-navbar\">
\t\t\t\t\t<a href=\"\" class=\"btn btn-proj-gallery\"><i class=\"fa fa-th\"></i></a>
\t\t\t\t\t<a href=\"\" class=\"btn btn-proj-overview\" id=\"btn-proj-overview\">Project Overview</a>
\t\t\t\t</div>\t\t\t\t\t
\t\t\t</section>
\t\t</div>
\t</div>
</article>

";
    }

    public function getTemplateName()
    {
        return "dev/project";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 15,  43 => 11,  39 => 10,  31 => 4,  28 => 3,);
    }
}
