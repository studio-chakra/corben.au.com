<?php

/* news/_entry */
class __TwigTemplate_8338cacde6192b4ec5f80c5d5c0a7341594d46a5cb72960e5b7b34e0a054216b extends Craft\BaseTemplate
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
        // line 4
        $context["asset"] = $this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "postImage"), "first", array(), "method");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "
<div class=\"page-post\">
\t<div class=\"row\">
\t\t<div class=\"large-12 columns\">
\t\t\t<article class=\"post post-type-image\">
\t\t\t\t";
        // line 12
        if ((isset($context["asset"]) ? $context["asset"] : $this->getContext($context, "asset"))) {
            // line 13
            echo "\t\t\t\t<div class=\"post-media\">
\t\t\t\t\t<img src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : $this->getContext($context, "asset")), "url"), "html", null, true);
            echo "\" class=\"post-image\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : $this->getContext($context, "asset")), "altText"), "html", null, true);
            echo "\" width=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : $this->getContext($context, "asset")), "width"), "html", null, true);
            echo "\" height=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : $this->getContext($context, "asset")), "height"), "html", null, true);
            echo "\" />
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 16
        echo "\t
\t\t\t\t<header class=\"post-header\">
\t\t\t\t\t<h2 class=\"post-title\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "title"), "html", null, true);
        echo "</h2>
\t\t\t\t\t<p class=\"post-meta\">";
        // line 19
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "postDate"), "M d, Y"), "html", null, true);
        echo "</p>
\t\t\t\t</header>
\t\t\t\t";
        // line 21
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "postDisplaySettings"))) {
            // line 22
            echo "\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "postIntro"), "html", null, true);
            echo "
\t\t\t\t";
        }
        // line 23
        echo "\t
\t\t\t\t";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "postBody"), "html", null, true);
        echo "
\t\t\t\t<a href=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "news\" class=\"btn btn-link\">Back to News</a>
\t\t\t</article>
\t\t</div>
\t</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "news/_entry";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 25,  83 => 24,  80 => 23,  74 => 22,  72 => 21,  67 => 19,  63 => 18,  59 => 16,  47 => 14,  44 => 13,  42 => 12,  35 => 7,  32 => 6,  27 => 4,  25 => 2,);
    }
}
