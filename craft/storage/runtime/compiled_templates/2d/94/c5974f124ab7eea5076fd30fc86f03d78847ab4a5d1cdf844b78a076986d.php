<?php

/* _molecules/offcanvas-menu.html */
class __TwigTemplate_2d94c5974f124ab7eea5076fd30fc86f03d78847ab4a5d1cdf844b78a076986d extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- /* Off Canvas Menu -->
<aside class=\"right-off-canvas-menu\">
  <ul class=\"off-canvas-menu\">
  \t<li class=\"has-dropdown\">
  \t\t<a href=\"#\" class=\"is-active\">Projects</a>
  \t\t<ul>
  \t\t\t<li><a href=\"#\">In Progress</a></li>
  \t    <li><a href=\"#\">Apartments</a></li>
  \t    <li><a href=\"#\">Commercial</a></li>
  \t    <li><a href=\"#\" class=\"is-active\">Alterations &amp; Additions</a></li>
  \t    <li><a href=\"#\">New Houses</a></li>
  \t\t</ul>
  \t</li>
  \t<li>
  \t\t<a href=\"#\">Practice</a>
  \t\t<ul class=\"dropdown\">
  \t    <li><a href=\"#\">Awards</a></li>
  \t    <li><a href=\"#\">Fees</a></li>
  \t    <li><a href=\"#\">Service</a></li>
  \t    <li><a href=\"#\">Architecture</a></li>
  \t    <li><a href=\"#\">About</a></li>
  \t  </ul>\t
  \t</li>
  \t<li><a href=\"#\">People</a></li>
  \t<li><a href=\"#\">Place</a></li>
  </ul>
</aside><!-- Off Canvas Menu */ -->";
    }

    public function getTemplateName()
    {
        return "_molecules/offcanvas-menu.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,  215 => 85,  210 => 17,  197 => 146,  185 => 141,  158 => 117,  125 => 86,  123 => 85,  118 => 82,  116 => 81,  51 => 18,  49 => 17,  38 => 9,  30 => 8,  21 => 1,);
    }
}
