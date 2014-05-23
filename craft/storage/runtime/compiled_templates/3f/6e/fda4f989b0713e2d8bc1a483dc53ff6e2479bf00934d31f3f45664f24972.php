<?php

/* dev/awards */
class __TwigTemplate_3f6efda4f989b0713e2d8bc1a483dc53ff6e2479bf00934d31f3f45664f24972 extends Craft\BaseTemplate
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
<article class=\"page-awards\">
\t<div class=\"row\">
\t\t<div class=\"xlarge-4 large-6 columns\">
\t\t\t<section class=\"awards\">\t
\t\t\t\t<a class=\"award-block\">
\t\t\t\t\t<h6 class=\"award-title\">Avery-Wright House</h6>
\t\t\t\t\t<p class=\"award-subtitle\">Carrington Avenue Mosman</p>
\t\t\t\t\t<ul class=\"no-bullet award-notions-list\">
\t\t\t\t\t\t<li class=\"award-notion\">Commendation Mosman Good Design Awards 2011</li>
\t\t\t\t\t</ul>
\t\t\t\t</a>\t\t\t
\t\t\t\t<a class=\"award-block is-selected\">
\t\t\t\t\t<h6 class=\"award-title\">Avery-Wright House (Selected)</h6>
\t\t\t\t\t<p class=\"award-subtitle\">Carrington Avenue Mosman</p>
\t\t\t\t\t<ul class=\"no-bullet award-notions-list\">
\t\t\t\t\t\t<li class=\"award-notion\">Commendation Mosman Good Design Awards 2011</li>
\t\t\t\t\t</ul>
\t\t\t\t</a>
\t\t\t\t<a class=\"award-block\">
\t\t\t\t\t<h6 class=\"award-title\">Avery-Wright House</h6>
\t\t\t\t\t<p class=\"award-subtitle\">Carrington Avenue Mosman</p>
\t\t\t\t\t<ul class=\"no-bullet award-notions-list\">
\t\t\t\t\t\t<li class=\"award-notion\">Commendation Mosman Good Design Awards 2011</li>
\t\t\t\t\t\t<li class=\"award-notion\">Commendation Mosman Good Design Awards 2011</li>
\t\t\t\t\t\t<li class=\"award-notion\">Commendation Mosman Good Design Awards 2011</li>
\t\t\t\t\t</ul>
\t\t\t\t</a>
\t\t\t</section>
\t\t</div>
\t\t<div class=\"xlarge-8 large-6 columns\">
\t\t\t<section class=\"page-img show-for-large-up\">
\t\t\t\t<img src=\"http://placehold.it/1050x700\" class=\"award-image\" />
\t\t\t\t<a href=\"#\" class=\"btn btn-link btn-view-project\">View Project</a>
\t\t\t</section>
\t\t</div>
\t</div>
</article>

";
    }

    public function getTemplateName()
    {
        return "dev/awards";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}
