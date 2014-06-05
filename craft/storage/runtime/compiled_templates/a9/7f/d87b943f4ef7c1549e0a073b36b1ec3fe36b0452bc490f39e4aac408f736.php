<?php

/* dev */
class __TwigTemplate_a97fd87b943f4ef7c1549e0a073b36b1ec3fe36b0452bc490f39e4aac408f736 extends Craft\BaseTemplate
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
<article class=\"page-home\">
\t<div class=\"row\">
\t  <div class=\"xlarge-12 columns\">  
\t  \t<section class=\"project-carousel\">
\t\t  \t\t<div id=\"home-carousel\" class=\"owl-carousel corben-carousel\"> 
\t\t\t\t\t<div class=\"carousel-item home-carousel-item\"><img src=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "images/homepage-photo-1.jpg\" alt=\"Slide One\" /></div>
\t\t\t\t\t<div class=\"carousel-item home-carousel-item\"><img src=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "images/homepage-photo-2.jpg\" alt=\"Slide Two\" /></div>
\t\t\t\t\t<div class=\"carousel-item home-carousel-item\"><img src=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "images/homepage-photo-3.jpg\" alt=\"Slide Three\" /></div>
\t\t\t\t</div>
\t  \t</section>\t\t\t\t\t\t
\t  </div>
\t</div>
</section>

";
    }

    public function getTemplateName()
    {
        return "dev";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 12,  43 => 11,  39 => 10,  31 => 4,  28 => 3,);
    }
}
