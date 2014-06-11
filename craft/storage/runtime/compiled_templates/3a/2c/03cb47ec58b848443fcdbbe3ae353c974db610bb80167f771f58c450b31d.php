<?php

/* projects/_entry */
class __TwigTemplate_3a2c03cb47ec58b848443fcdbbe3ae353c974db610bb80167f771f58c450b31d extends Craft\BaseTemplate
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
        $context["title"] = $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "title");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "
<article class=\"page-project\">
\t<div class=\"row\">
\t\t<div class=\"large-12 columns\">\t
\t\t\t<section class=\"project-carousel\">
\t\t\t\t<div id=\"project-carousel\" class=\"owl-carousel corben-carousel\"> 
\t\t\t\t\t";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "projectSlides"), "type", array(0 => "slide"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 12
            echo "\t\t\t\t\t\t";
            $context["slide"] = $this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "image"), "first", array(), "method");
            // line 13
            echo "\t\t\t\t\t\t";
            if ((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide"))) {
                // line 14
                echo "\t\t\t\t\t\t<div class=\"carousel-item project-carousel-item\">
\t\t\t\t\t\t\t<img src=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "url"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "altText")) ? ($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "altText")) : ($this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "title"))), "html", null, true);
                echo "\" width=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "width"), "html", null, true);
                echo "\"  height=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "height"), "html", null, true);
                echo "\" />
\t\t\t\t\t\t</div>\t\t\t\t\t\t
\t\t\t\t\t\t";
            }
            // line 18
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"project-panel\">
\t\t\t\t\t<h2 class=\"project-title\">";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "projectTitle"), "html", null, true);
        echo " ";
        if (((!twig_test_empty($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "projectSuburb"))) && $this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "projectDisplaySettings"), "contains", array(0 => "showSuburb"), "method"))) {
            echo "<span class=\"divider\">|</span> <small class=\"project-suburb\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "projectSuburb"), "html", null, true);
            echo "</small>";
        }
        echo "</h2>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"xlarge-3 large-3 medium-4 small-12 columns project-details\">
\t\t\t\t\t\t\t<ul class=\"no-bullet project-details-list\">
\t\t\t\t\t\t\t\t";
        // line 25
        if (((!twig_test_empty($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "projectCompleted"))) && $this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "projectDisplaySettings"), "contains", array(0 => "showCompleted"), "method"))) {
            // line 26
            echo "\t\t\t\t\t\t\t\t<li class=\"project-detail-item\"><strong class=\"project-detail-label\">Completed:</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "projectCompleted"), "html", null, true);
            echo "</li>
\t\t\t\t\t\t\t\t";
        }
        // line 28
        echo "\t\t\t\t\t\t\t\t";
        if (((!twig_test_empty($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "projectBuilder"))) && $this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "projectDisplaySettings"), "contains", array(0 => "showBuilder"), "method"))) {
            // line 29
            echo "\t\t\t\t\t\t\t\t<li class=\"project-detail-item\"><strong class=\"project-detail-label\">Builder:</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "projectBuilder"), "html", null, true);
            echo "</li>
\t\t\t\t\t\t\t\t";
        }
        // line 31
        echo "\t\t\t\t\t\t\t\t";
        if (((!twig_test_empty($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "projectArea"))) && $this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "projectDisplaySettings"), "contains", array(0 => "showArea"), "method"))) {
            // line 32
            echo "\t\t\t\t\t\t\t\t<li class=\"project-detail-item\"><strong class=\"project-detail-label\">Area:</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "projectArea"), "html", null, true);
            echo "</li>
\t\t\t\t\t\t\t\t";
        }
        // line 34
        echo "\t\t\t\t\t\t\t\t";
        if (((!twig_test_empty($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "projectPhotographer"))) && $this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "projectDisplaySettings"), "contains", array(0 => "showPhotographer"), "method"))) {
            // line 35
            echo "\t\t\t\t\t\t\t\t<li class=\"project-detail-item\"><strong class=\"project-detail-label\">Photographer:</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "projectPhotographer"), "html", null, true);
            echo "</li>
\t\t\t\t\t\t\t\t";
        }
        // line 37
        echo "\t\t\t\t\t\t\t\t";
        $context["pdf"] = $this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "projectPdf"), "first", array(), "method");
        // line 38
        echo "\t\t\t\t\t\t\t\t";
        if ((isset($context["pdf"]) ? $context["pdf"] : $this->getContext($context, "pdf"))) {
            // line 39
            echo "\t\t\t\t\t\t\t\t<li class=\"project-detail-item\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pdf"]) ? $context["pdf"] : $this->getContext($context, "pdf")), "url"), "html", null, true);
            echo "\" class=\"btn btn-link btn-project-pdf\">Download PDF</a></li>
\t\t\t\t\t\t\t\t";
        }
        // line 41
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"xlarge-5 large-7 medium-8 small-12 end columns project-description\">
\t\t\t\t\t\t\t";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "projectDescription"), "html", null, true);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- <a href=\"\" class=\"close-panel\" id=\"btn-close-panel\"><i class=\"fa fa-angle-double-down fa-3x\"></i></a> -->
\t\t\t\t\t<a href=\"\" class=\"close-panel\" id=\"btn-close-panel\"><img class=\"arrow-down\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "images/arrow-down.svg\"></a>
\t\t\t\t</div>
\t\t\t\t<div class=\"project-navbar\">
\t\t\t\t\t<a href=\"";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "projects\" class=\"btn btn-proj-gallery\"><i class=\"fa fa-th\"></i></a>
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
        return "projects/_entry";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 51,  148 => 48,  141 => 44,  136 => 41,  130 => 39,  127 => 38,  124 => 37,  118 => 35,  115 => 34,  109 => 32,  106 => 31,  100 => 29,  97 => 28,  91 => 26,  89 => 25,  76 => 21,  72 => 19,  66 => 18,  54 => 15,  51 => 14,  48 => 13,  45 => 12,  41 => 11,  33 => 5,  30 => 4,  25 => 2,);
    }
}
