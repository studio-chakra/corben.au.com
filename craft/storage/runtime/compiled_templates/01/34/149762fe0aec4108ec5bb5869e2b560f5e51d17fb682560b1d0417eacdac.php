<?php

/* news */
class __TwigTemplate_0134149762fe0aec4108ec5bb5869e2b560f5e51d17fb682560b1d0417eacdac extends Craft\BaseTemplate
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
        $context["title"] = "News";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "
<div class=\"page-news\">
\t<div class=\"row\">
\t\t<div class=\"large-12 columns\">
\t\t\t<ul class=\"post-grid\">
\t\t\t";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "entries"), "section", array(0 => "news"), "method"), "find", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 11
            echo "\t\t\t\t";
            $context["asset"] = $this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "postImage"), "first", array(), "method");
            // line 12
            echo "\t\t\t\t";
            $context["btnTitle"] = "Continue Reading";
            // line 13
            echo "\t\t\t\t";
            $context["btnUrl"] = $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "url");
            // line 14
            echo "
\t\t\t\t";
            // line 15
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "postReadMore"), "type", array(0 => "readMoreButton"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 16
                echo "\t\t\t\t\t";
                if ((!twig_test_empty($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "buttonTitle")))) {
                    // line 17
                    echo "\t\t\t\t\t\t";
                    $context["btnTitle"] = $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "buttonTitle");
                    // line 18
                    echo "\t\t\t\t\t";
                }
                // line 19
                echo "\t\t\t\t\t";
                if (((!twig_test_empty($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "externalUrl"))) && $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "linkToExternalUrl"))) {
                    // line 20
                    echo "\t\t\t\t\t\t";
                    $context["btnUrl"] = $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "externalUrl");
                    // line 21
                    echo "\t\t\t\t\t";
                }
                echo "\t\t\t\t\t\t\t\t
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "
\t\t\t\t<li class=\"post-item\">
\t\t\t\t\t<article class=\"post post-type-image\">
\t\t\t\t\t\t";
            // line 26
            if ((isset($context["asset"]) ? $context["asset"] : $this->getContext($context, "asset"))) {
                // line 27
                echo "\t\t\t\t\t\t<div class=\"post-media\">
\t\t\t\t\t\t\t<a href=\"";
                // line 28
                echo twig_escape_filter($this->env, (isset($context["btnUrl"]) ? $context["btnUrl"] : $this->getContext($context, "btnUrl")), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : $this->getContext($context, "asset")), "url"), "html", null, true);
                echo "\" class=\"post-image\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : $this->getContext($context, "asset")), "altText"), "html", null, true);
                echo "\" width=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : $this->getContext($context, "asset")), "width"), "html", null, true);
                echo "\" height=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : $this->getContext($context, "asset")), "height"), "html", null, true);
                echo "\" /></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 30
            echo "\t
\t\t\t\t\t\t<div class=\"post-body\">
\t\t\t\t\t\t\t<header class=\"post-header\">
\t\t\t\t\t\t\t\t<h2 class=\"post-title\"><a href=\"";
            // line 33
            echo twig_escape_filter($this->env, (isset($context["btnUrl"]) ? $context["btnUrl"] : $this->getContext($context, "btnUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "title"), "html", null, true);
            echo "</a></h2>
\t\t\t\t\t\t\t\t<p class=\"post-meta\">";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "postDate"), "M d, Y"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "postIntro"), "html", null, true);
            echo "
\t\t\t\t\t\t\t<a href=\"";
            // line 37
            echo twig_escape_filter($this->env, (isset($context["btnUrl"]) ? $context["btnUrl"] : $this->getContext($context, "btnUrl")), "html", null, true);
            echo "\" class=\"btn btn-link\">";
            echo twig_escape_filter($this->env, (isset($context["btnTitle"]) ? $context["btnTitle"] : $this->getContext($context, "btnTitle")), "html", null, true);
            echo "</a>\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</article>
\t\t\t\t</li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "news";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 42,  128 => 37,  124 => 36,  119 => 34,  113 => 33,  108 => 30,  94 => 28,  91 => 27,  89 => 26,  84 => 23,  75 => 21,  72 => 20,  69 => 19,  66 => 18,  63 => 17,  60 => 16,  56 => 15,  53 => 14,  50 => 13,  47 => 12,  44 => 11,  40 => 10,  33 => 5,  30 => 4,  25 => 2,);
    }
}
