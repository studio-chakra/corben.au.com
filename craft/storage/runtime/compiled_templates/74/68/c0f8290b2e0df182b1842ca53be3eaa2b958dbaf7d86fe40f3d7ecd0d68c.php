<?php

/* page */
class __TwigTemplate_7468c0f8290b2e0df182b1842ca53be3eaa2b958dbaf7d86fe40f3d7ecd0d68c extends Craft\BaseTemplate
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
<div class=\"row\">
\t<div class=\"xlarge-4 columns\">
\t\t<h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi commodi harum alias autem in aliquid dolor magni optio voluptatibus consectetur accusantium voluptatum nesciunt possimus odit beatae quasi reprehenderit sint. Quo!</h6>
\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi commodi harum alias autem in aliquid dolor magni optio voluptatibus consectetur accusantium voluptatum nesciunt possimus odit beatae quasi reprehenderit sint. Quo!</p>
\t\t<p>Officiis sequi soluta ullam saepe molestias aliquam magni voluptas sint quam suscipit! Architecto debitis vero soluta necessitatibus eligendi officia impedit reprehenderit veritatis ipsam quaerat ex doloremque esse iste quibusdam cumque.</p>
\t\t<p>Quae architecto id eum laboriosam repellat assumenda odit repudiandae facere doloribus aliquid mollitia fugiat magnam. Magni molestiae iusto ipsum ullam deserunt maxime vel. Dolorum nihil esse deleniti ipsa nisi praesentium!</p>
\t\t<p>Id repellat nisi ratione ullam numquam ex recusandae molestiae eveniet alias repudiandae corporis eius omnis ipsam veniam culpa rem delectus distinctio quam minima eaque sunt reiciendis beatae officiis consequatur itaque!</p>\t
\t</div>
  <div class=\"xlarge-8 columns\">
  \t<div class=\"slider\">
    \t<img src=\"http://placehold.it/1470x830&text=[ slideshow ]\" />
  \t</div>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "page";
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
