<?php

/* projects */
class __TwigTemplate_555c3e976e880202323c0234c447b4d934e6d48dc496424cf2f41ba46d14b263 extends Craft\BaseTemplate
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
        // line 4
        $context["isCatPage"] = false;
        // line 5
        $context["articleClass"] = "";
        // line 6
        if (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "request"), "getSegment", array(0 => 2), "method") == "")) {
            // line 7
            $context["title"] = "Projects";
        } else {
            // line 9
            $context["title"] = ((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")) . " | Projects");
            // line 10
            $context["isCatPage"] = true;
            // line 11
            $context["articleClass"] = " page-projects-category";
        }
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "
";
        // line 16
        if ((isset($context["isCatPage"]) ? $context["isCatPage"] : $this->getContext($context, "isCatPage"))) {
            // line 17
            echo "\t";
            $context["projects"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "entries"), "section", array(0 => "projects"), "method"), "relatedTo", array(0 => (isset($context["category"]) ? $context["category"] : $this->getContext($context, "category"))), "method"), "find", array(), "method");
        } else {
            // line 19
            echo "\t";
            $context["projects"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "entries"), "section", array(0 => "projects"), "method"), "find", array(), "method");
        }
        // line 20
        echo "\t

<article class=\"page-projects";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["articleClass"]) ? $context["articleClass"] : $this->getContext($context, "articleClass")), "html", null, true);
        echo "\">
\t<div class=\"row\">
\t\t<div class=\"large-12 columns\">
\t\t\t<section class=\"projects\">
\t\t\t\t<ul class=\"project-grid project-grid-hover\">
\t\t\t\t\t";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projects"]) ? $context["projects"] : $this->getContext($context, "projects")));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 28
            echo "\t\t\t\t\t";
            $context["asset"] = $this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "projectThumbnail"), "first", array(), "method");
            // line 29
            echo "\t\t\t\t  <li class=\"project-grid-item\">
\t\t\t\t  \t<a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "url"), "html", null, true);
            echo "\" class=\"project-thumb\">
\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t";
            // line 32
            if ((isset($context["asset"]) ? $context["asset"] : $this->getContext($context, "asset"))) {
                // line 33
                echo "\t\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : $this->getContext($context, "asset")), "url", array(0 => "projectThumbnailGrid"), "method"), "html", null, true);
                echo "\" class=\"project-thumb-img\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "projectTitle"), "html", null, true);
                echo "\" width=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : $this->getContext($context, "asset")), "getWidth", array(0 => "projectThumbnailGrid"), "method"), "html", null, true);
                echo "\" height=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : $this->getContext($context, "asset")), "getHeight", array(0 => "projectThumbnailGrid"), "method"), "html", null, true);
                echo "\" />
\t\t\t\t\t\t\t\t";
            } else {
                // line 34
                echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<img class=\"project-thumb-img\" src=\"http://placehold.it/480x320\" />
\t\t\t\t\t\t\t\t";
            }
            // line 36
            echo "\t
\t\t\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t\t\t\t<h6 class=\"project-thumb-title\">";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "projectTitle"), "html", null, true);
            echo " ";
            if (((!twig_test_empty($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "projectSuburb"))) && $this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "projectThumbDisplaySettings"), "contains", array(0 => "showSuburb"), "method"))) {
                echo "<span class=\"project-thumb-suburb\">| ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "projectSuburb"), "html", null, true);
                echo "</span>";
            }
            echo "</h6>
\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t</figure>
\t\t\t\t  \t</a>
\t\t\t\t  </li>
\t\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "\t\t\t\t</ul>
\t\t\t</section>
\t\t</div>
\t</div>
</article>

";
    }

    public function getTemplateName()
    {
        return "projects";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 44,  110 => 38,  106 => 36,  101 => 34,  89 => 33,  87 => 32,  82 => 30,  79 => 29,  76 => 28,  72 => 27,  64 => 22,  60 => 20,  56 => 19,  52 => 17,  50 => 16,  47 => 15,  44 => 14,  38 => 11,  36 => 10,  34 => 9,  31 => 7,  29 => 6,  27 => 5,  25 => 4,);
    }
}
