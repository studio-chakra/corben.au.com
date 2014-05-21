<?php

/* index */
class __TwigTemplate_0fcb192f49acaec5f0273aa97ef74e9d4fb34e2b0439f21d95466f9f42dfb5db extends Craft\BaseTemplate
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo " 
<!-- /* Home Slider -->
<div class=\"row\">
  <div class=\"xlarge-12 columns\">
  \t<section class=\"slider home-slider\"> 
    \t<img src=\"http://placehold.it/1470x830&text=[ slideshow ]\" />
  \t</section>
  </div>
</div><!-- Home Slider */ -->

";
    }

    public function getTemplateName()
    {
        return "index";
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
