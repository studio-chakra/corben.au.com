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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "simpleSlides"));
        foreach ($context['_seq'] as $context["_key"] => $context["asset"]) {
            // line 12
            echo "\t\t\t\t\t\t<div class=\"carousel-item project-carousel-item\">
\t\t\t\t\t\t\t<img src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : $this->getContext($context, "asset")), "url"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : $this->getContext($context, "asset")), "filename"), "html", null, true);
            echo "\" width=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : $this->getContext($context, "asset")), "width"), "html", null, true);
            echo "\"  height=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : $this->getContext($context, "asset")), "height"), "html", null, true);
            echo "\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t\t\t\t</div>
\t\t\t\t";
        // line 28
        echo "\t\t\t\t<div class=\"project-panel\">
\t\t\t\t\t<h2 class=\"project-title\">";
        // line 29
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
        // line 33
        if (((!twig_test_empty($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "projectCompleted"))) && $this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "projectDisplaySettings"), "contains", array(0 => "showCompleted"), "method"))) {
            // line 34
            echo "\t\t\t\t\t\t\t\t<li class=\"project-detail-item\"><strong class=\"project-detail-label\">Completed:</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "projectCompleted"), "html", null, true);
            echo "</li>
\t\t\t\t\t\t\t\t";
        }
        // line 36
        echo "\t\t\t\t\t\t\t\t";
        if (((!twig_test_empty($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "projectBuilder"))) && $this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "projectDisplaySettings"), "contains", array(0 => "showBuilder"), "method"))) {
            // line 37
            echo "\t\t\t\t\t\t\t\t<li class=\"project-detail-item\"><strong class=\"project-detail-label\">Builder:</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "projectBuilder"), "html", null, true);
            echo "</li>
\t\t\t\t\t\t\t\t";
        }
        // line 39
        echo "\t\t\t\t\t\t\t\t";
        if (((!twig_test_empty($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "projectArea"))) && $this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "projectDisplaySettings"), "contains", array(0 => "showArea"), "method"))) {
            // line 40
            echo "\t\t\t\t\t\t\t\t<li class=\"project-detail-item\"><strong class=\"project-detail-label\">Area:</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "projectArea"), "html", null, true);
            echo "</li>
\t\t\t\t\t\t\t\t";
        }
        // line 42
        echo "\t\t\t\t\t\t\t\t";
        if (((!twig_test_empty($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "projectPhotographer"))) && $this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "projectDisplaySettings"), "contains", array(0 => "showPhotographer"), "method"))) {
            // line 43
            echo "\t\t\t\t\t\t\t\t<li class=\"project-detail-item\"><strong class=\"project-detail-label\">Photographer:</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "projectPhotographer"), "html", null, true);
            echo "</li>
\t\t\t\t\t\t\t\t";
        }
        // line 45
        echo "\t\t\t\t\t\t\t\t";
        $context["pdf"] = $this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "projectPdf"), "first", array(), "method");
        // line 46
        echo "\t\t\t\t\t\t\t\t";
        if ((isset($context["pdf"]) ? $context["pdf"] : $this->getContext($context, "pdf"))) {
            // line 47
            echo "\t\t\t\t\t\t\t\t<li class=\"project-detail-item\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pdf"]) ? $context["pdf"] : $this->getContext($context, "pdf")), "url"), "html", null, true);
            echo "\" class=\"btn btn-link btn-project-pdf\">Download PDF</a></li>
\t\t\t\t\t\t\t\t";
        }
        // line 49
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"xlarge-5 large-7 medium-8 small-12 end columns project-description\">
\t\t\t\t\t\t\t";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "projectDescription"), "html", null, true);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- <a href=\"\" class=\"close-panel\" id=\"btn-close-panel\"><i class=\"fa fa-angle-double-down fa-3x\"></i></a> -->
\t\t\t\t\t<a href=\"\" class=\"close-panel\" id=\"btn-close-panel\"><img class=\"arrow-down\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "images/arrow-down.svg\"></a>
\t\t\t\t</div>
\t\t\t\t<div class=\"project-navbar\">
\t\t\t\t\t<a href=\"";
        // line 59
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
        return array (  147 => 59,  141 => 56,  134 => 52,  129 => 49,  123 => 47,  120 => 46,  117 => 45,  111 => 43,  108 => 42,  102 => 40,  99 => 39,  93 => 37,  90 => 36,  84 => 34,  82 => 33,  69 => 29,  66 => 28,  63 => 16,  48 => 13,  45 => 12,  41 => 11,  33 => 5,  30 => 4,  25 => 2,);
    }
}
