<?php

/* dev/index */
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
<!-- /* Home Carousel -->
<section class=\"section-carousel\">
\t<div class=\"row\">
\t  <div class=\"xlarge-12 columns\">  \t
\t\t\t<div id=\"home-carousel\" class=\"owl-carousel corben-carousel\"> 
\t\t\t\t<div class=\"carousel-item home-carousel-item\"><img src=\"http://placehold.it/1470x830\" alt=\"Slide One\" /></div>
\t\t\t\t<div class=\"carousel-item home-carousel-item\"><img src=\"http://placehold.it/1470x830\" alt=\"Slide Two\" /></div>
\t\t\t\t<div class=\"carousel-item home-carousel-item\"><img src=\"http://placehold.it/1470x830\" alt=\"Slide Three\" /></div>
\t\t\t</div>\t\t
\t  </div>
\t</div>
</section><!-- Home Carousel */ -->

";
    }

    public function getTemplateName()
    {
        return "dev/index";
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
