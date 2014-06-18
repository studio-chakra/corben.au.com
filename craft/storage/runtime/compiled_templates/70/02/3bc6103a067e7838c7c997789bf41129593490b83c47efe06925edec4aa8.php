<?php

/* _layout */
class __TwigTemplate_70023bc6103a067e7838c7c997789bf41129593490b83c47efe06925edec4aa8 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'meta' => array($this, 'block_meta'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class=\"no-js ie6\" lang=\"en\"> <![endif]-->
<!--[if IE 7 ]>    <html class=\"no-js ie7\" lang=\"en\"> <![endif]-->
<!--[if IE 8 ]>    <html class=\"no-js ie8\" lang=\"en\"> <![endif]-->
<!--[if IE 9 ]>    <html class=\"no-js lt-ie10\" lang=\"en\"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class=\"no-js\" lang=\"en\">
<!--<![endif]-->
  <head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <!--[if IE]><meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"><![endif]-->

    <title>";
        // line 14
        if (array_key_exists("title", $context)) {
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
            echo " - ";
        }
        echo twig_escape_filter($this->env, (isset($context["siteName"]) ? $context["siteName"] : $this->getContext($context, "siteName")), "html", null, true);
        echo "</title>
    <link rel=\"home\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "\" />
\t\t
\t\t<!-- HEAD: Meta -->
\t\t<meta name=\"description\" content=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : $this->getContext($context, "meta")), "metaDescription"), "html", null, true);
        echo "\">
\t\t<meta name=\"keywords\" content=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : $this->getContext($context, "meta")), "metaKeywords"), "html", null, true);
        echo "\">
\t\t<meta name=\"author\" content=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : $this->getContext($context, "meta")), "metaAuthor"), "html", null, true);
        echo "\">
\t\t<meta name=\"google-site-verification\" content=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : $this->getContext($context, "meta")), "metaGoogleSiteVerificationCode"), "html", null, true);
        echo "\" />
\t\t<meta property=\"og:site_name\" content=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["siteName"]) ? $context["siteName"] : $this->getContext($context, "siteName")), "html", null, true);
        echo "\">
\t\t";
        // line 23
        $this->displayBlock('meta', $context, $blocks);
        // line 24
        echo "
\t\t<!-- HEAD: Favicons -->
\t\t<link rel=\"icon\" type=\"image/x-icon\" href=\"/images/favicon.ico\">
\t\t<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"/images/favicon.ico\">

\t\t<!-- HEAD: Stylesheets -->
    <link rel=\"stylesheet\" href=\"/stylesheets/app.css\" />
    <link rel=\"stylesheet\" href=\"/bower_components/fontawesome/css/font-awesome.min.css\" />
\t\t<link rel=\"stylesheet\" href=\"/bower_components/owlcarousel/owl-carousel/owl.carousel.css\">
    
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700' rel='stylesheet' type='text/css'>

    <!-- HEAD: Scripts -->
    <script src=\"/bower_components/modernizr/modernizr.js\"></script>

  </head>
  
  <body>
\t
\t\t<!-- /* Off Canvas Container -->
\t\t<div class=\"off-canvas-wrap\" data-offcanvas>
  \t\t<div class=\"inner-wrap\">
\t\t\t\t<div class=\"inner-wrap-forarrows\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"xlarge-12 columns\">\t\t  \t\t  
\t\t\t  \t\t  <!-- /* Nav(s) -->\t
\t\t\t    \t\t<nav class=\"tab-bar hide-for-large-up\">
\t\t\t\t\t\t\t\t<h1 class=\"logo-mobile\"><a href=\"";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "\"><span class=\"hidden\">Corben Architects</span></a></h1>
\t\t\t\t\t\t\t\t<a class=\"right-off-canvas-toggle\" href=\"#\"><i class=\"fa fa-bars\"></i> Menu</a>
\t\t\t    \t\t</nav>
\t\t\t    \t\t<nav class=\"top-bar show-for-large-up\" data-topbar>
\t\t\t\t\t\t\t  <h1 class=\"logo\"><a href=\"";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "\"><span class=\"hidden\">Corben Architects</span></a></h1>

\t\t\t\t\t\t\t  <section class=\"top-bar-section\">
\t\t\t\t\t\t\t    <ul class=\"right\">
\t\t\t\t\t\t\t      <li class=\"has-dropdown\">
\t\t\t\t\t\t\t      \t<a href=\"";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "projects\" ";
        echo $this->env->getExtension('Sprout Active')->getActiveClass("projects", 1, "is-active");
        echo ">Projects</a>
\t\t\t\t\t\t\t      \t<ul class=\"dropdown ";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Sprout Active')->getActive("projects", 1, "is-active"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t          ";
        // line 62
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "categories"));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            $_thisItemLevel = (int)$this->getAttribute($context["category"], 'level', array(), Twig_TemplateInterface::ANY_CALL, false, true);
            if (isset($context['nav'])) {
                $_tmpContext = $context;
                $context = $_contextsByLevel[$context['nav']['level']];
                if ($_thisItemLevel > $context['nav']['level']) {
                    for ($_i = $context['nav']['level']; $_i < $_thisItemLevel; $_i++) {
                                            }
                } else {
                                        if ($_thisItemLevel < $context['nav']['level']) {
                        for ($_i = $context['nav']['level']-1; $_i >= $_thisItemLevel; $_i--) {
                            if (isset($_contextsByLevel[$_i])) {
                                $context = $_contextsByLevel[$_i];
                                                                                                unset($_contextsByLevel[$_i]);
                            }
                        }
                    }
                }
                $context = $_tmpContext;
                unset($_tmpContext);
            } else {
                $_firstItemLevel = $_thisItemLevel;
            }
            $context['nav']['level'] = $_thisItemLevel;
            if (isset($_contextsByLevel[$_thisItemLevel-1])) {
                $context['nav']['parent'] = $_contextsByLevel[$_thisItemLevel-1];
                if (method_exists($context["category"], 'setParent')) {
                    $context["category"]->setParent($context['nav']['parent']["category"]);
                }
            } else {
                $context['nav']['parent'] = null;
            }
            $_contextsByLevel[$_thisItemLevel] = $context;
            // line 63
            echo "   \t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "url"), "html", null, true);
            echo "\" ";
            echo $this->env->getExtension('Sprout Active')->getActiveClass($this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "slug"), 2, "is-active");
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "title"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        if (isset($_thisItemLevel)) {
            $_tmpContext = $context;
            if ($_thisItemLevel > $_firstItemLevel) {
                for ($_i = $_thisItemLevel; $_i > $_firstItemLevel; $_i--) {
                    if (isset($_contextsByLevel[$_i])) {
                        $context = $_contextsByLevel[$_i];
                                                                    }
                }
            }
            $context = $_contextsByLevel[$_firstItemLevel];
                        $context = $_tmpContext;
            unset($_thisItemLevel, $_firstItemLevel, $_i, $_contextsByLevel, $_tmpContext);
        }
        // line 65
        echo "\t\t\t\t\t\t\t        </ul>
\t\t\t\t\t\t\t      </li>
\t\t\t\t\t\t\t      <li class=\"has-dropdown\">
\t\t\t\t\t\t\t        <a href=\"";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "practice/about\" ";
        echo $this->env->getExtension('Sprout Active')->getActiveClass("practice|about|architecture|service|fees|awards", 1, "is-active");
        echo ">Practice</a>
\t\t\t\t\t\t\t        <ul class=\"dropdown ";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Sprout Active')->getActive("practice|about|architecture|service|fees|awards", 1, "is-active"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t          <li><a href=\"";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "practice/awards\" ";
        echo $this->env->getExtension('Sprout Active')->getActiveClass("awards", 1, "is-active");
        echo ">Awards</a></li>
\t\t\t\t\t\t\t          <li><a href=\"";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "practice/fees\" ";
        echo $this->env->getExtension('Sprout Active')->getActiveClass("fees", 1, "is-active");
        echo ">Fees</a></li>
\t\t\t\t\t\t\t          <li><a href=\"";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "practice/service\" ";
        echo $this->env->getExtension('Sprout Active')->getActiveClass("service", 1, "is-active");
        echo ">Service</a></li>
\t\t\t\t\t\t\t          <li><a href=\"";
        // line 73
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "practice/architecture\" ";
        echo $this->env->getExtension('Sprout Active')->getActiveClass("architecture", 1, "is-active");
        echo ">Architecture</a></li>
\t\t\t\t\t\t\t          <li><a href=\"";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "practice/about\" ";
        echo $this->env->getExtension('Sprout Active')->getActiveClass("about", 1, "is-active");
        echo ">About</a></li>
\t\t\t\t\t\t\t        </ul>
\t\t\t\t\t\t\t      </li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "people\" ";
        echo $this->env->getExtension('Sprout Active')->getActiveClass("people", 1, "is-active");
        echo ">People</a></li>
\t\t\t\t\t\t\t      <li><a href=\"";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "place\" ";
        echo $this->env->getExtension('Sprout Active')->getActiveClass("place", 1, "is-active");
        echo ">Place</a></li>
\t\t\t\t\t\t\t    </ul>
\t\t\t\t\t\t\t  </section>
\t\t\t\t\t\t\t</nav><!-- Nav(s) */ -->\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!-- Row */ -->\t

\t    \t\t<!-- /* Off Canvas Menu -->
\t    \t\t<aside class=\"right-off-canvas-menu\">
\t        \t<ul class=\"off-canvas-menu\">
\t          \t<li class=\"has-dropdown\">
\t          \t\t<a href=\"";
        // line 89
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "projects\" ";
        echo $this->env->getExtension('Sprout Active')->getActiveClass("projects", 1, "is-active");
        echo ">Projects</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown ";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Sprout Active')->getActive("projects", 1, "is-active"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t    ";
        // line 91
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "categories"));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            $_thisItemLevel = (int)$this->getAttribute($context["category"], 'level', array(), Twig_TemplateInterface::ANY_CALL, false, true);
            if (isset($context['nav'])) {
                $_tmpContext = $context;
                $context = $_contextsByLevel[$context['nav']['level']];
                if ($_thisItemLevel > $context['nav']['level']) {
                    for ($_i = $context['nav']['level']; $_i < $_thisItemLevel; $_i++) {
                                            }
                } else {
                                        if ($_thisItemLevel < $context['nav']['level']) {
                        for ($_i = $context['nav']['level']-1; $_i >= $_thisItemLevel; $_i--) {
                            if (isset($_contextsByLevel[$_i])) {
                                $context = $_contextsByLevel[$_i];
                                                                                                unset($_contextsByLevel[$_i]);
                            }
                        }
                    }
                }
                $context = $_tmpContext;
                unset($_tmpContext);
            } else {
                $_firstItemLevel = $_thisItemLevel;
            }
            $context['nav']['level'] = $_thisItemLevel;
            if (isset($_contextsByLevel[$_thisItemLevel-1])) {
                $context['nav']['parent'] = $_contextsByLevel[$_thisItemLevel-1];
                if (method_exists($context["category"], 'setParent')) {
                    $context["category"]->setParent($context['nav']['parent']["category"]);
                }
            } else {
                $context['nav']['parent'] = null;
            }
            $_contextsByLevel[$_thisItemLevel] = $context;
            // line 92
            echo "   \t\t\t\t\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "url"), "html", null, true);
            echo "\" ";
            echo $this->env->getExtension('Sprout Active')->getActiveClass($this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "slug"), 2, "is-active");
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "title"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        if (isset($_thisItemLevel)) {
            $_tmpContext = $context;
            if ($_thisItemLevel > $_firstItemLevel) {
                for ($_i = $_thisItemLevel; $_i > $_firstItemLevel; $_i--) {
                    if (isset($_contextsByLevel[$_i])) {
                        $context = $_contextsByLevel[$_i];
                                                                    }
                }
            }
            $context = $_contextsByLevel[$_firstItemLevel];
                        $context = $_tmpContext;
            unset($_thisItemLevel, $_firstItemLevel, $_i, $_contextsByLevel, $_tmpContext);
        }
        // line 94
        echo "\t\t\t\t\t\t\t\t</ul>
\t          \t</li>
\t          \t<li>
\t          \t\t<a href=\"";
        // line 97
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "practice/about\" ";
        echo $this->env->getExtension('Sprout Active')->getActiveClass("practice|about|architecture|service|fees|awards", 1, "is-active");
        echo ">Practice</a>
\t          \t\t<ul class=\"dropdown ";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Sprout Active')->getActive("practice|about|architecture|service|fees|awards", 1, "is-active"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t    <li><a href=\"";
        // line 99
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "practice/awards\" ";
        echo $this->env->getExtension('Sprout Active')->getActiveClass("awards", 1, "is-active");
        echo ">Awards</a></li>
\t\t\t\t\t\t\t    <li><a href=\"";
        // line 100
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "practice/fees\" ";
        echo $this->env->getExtension('Sprout Active')->getActiveClass("fees", 1, "is-active");
        echo ">Fees</a></li>
\t\t\t\t\t\t\t    <li><a href=\"";
        // line 101
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "practice/service\" ";
        echo $this->env->getExtension('Sprout Active')->getActiveClass("service", 1, "is-active");
        echo ">Service</a></li>
\t\t\t\t\t\t\t    <li><a href=\"";
        // line 102
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "practice/architecture\" ";
        echo $this->env->getExtension('Sprout Active')->getActiveClass("architecture", 1, "is-active");
        echo ">Architecture</a></li>
\t\t\t\t\t\t\t    <li><a href=\"";
        // line 103
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "practice/about\" ";
        echo $this->env->getExtension('Sprout Active')->getActiveClass("about", 1, "is-active");
        echo ">About</a></li>
\t\t\t\t\t\t\t  </ul>\t
\t          \t</li>
\t          \t<li><a href=\"";
        // line 106
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "people\" ";
        echo $this->env->getExtension('Sprout Active')->getActiveClass("people", 1, "is-active");
        echo ">People</a></li>
\t          \t<li><a href=\"";
        // line 107
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "place\" ";
        echo $this->env->getExtension('Sprout Active')->getActiveClass("place", 1, "is-active");
        echo ">Place</a></li>
\t          \t<li><a href=\"";
        // line 108
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "news\" ";
        echo $this->env->getExtension('Sprout Active')->getActiveClass("news", 1, "is-active");
        echo ">News</a></li>
\t        \t</ul>
\t    \t\t</aside><!-- Off Canvas Menu */ -->

\t\t\t\t\t<!-- /* Main Content Block -->
\t\t\t    <main class=\"main main-content\" role=\"main\">";
        // line 113
        $this->displayBlock('content', $context, $blocks);
        echo "</main>
\t\t\t\t\t<!-- Main Block */ -->\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t</div><!-- Inner Wrap for Arrows */ -->\t


\t\t\t\t<!-- /* Footer -->  
\t\t\t  <footer class=\"footer\">
\t\t\t  \t<div class=\"footer-wrap-forarrows\">
\t\t\t\t  \t<div class=\"row\">
\t\t\t\t  \t\t<div class=\"large-12 columns\">
\t\t\t\t\t      <ul class=\"footer-nav-list\">
\t\t\t\t\t      \t";
        // line 125
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "socialNetworks"));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 126
            echo "\t\t\t\t\t        <li class=\"footer-nav-social nospace\">
\t\t\t\t\t        \t<a href=\"";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "networkUrl"), "html", null, true);
            echo "\" class=\"icon-link\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa-stack fa-lg\">
\t\t\t\t\t\t\t\t\t\t\t  <i class=\"fa fa-circle fa-stack-2x\"></i>
\t\t\t\t\t\t\t\t\t\t\t  <i class=\"fa ";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "networkIcon"), "html", null, true);
            echo " fa-stack-1x fa-inverse\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t        \t</a>
\t\t\t\t\t        </li>
\t\t\t\t\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "\t\t\t\t\t        <li classs=\"footer-nav-item\"><a href=\"";
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "news\">News</a></li>
\t\t\t\t\t      </ul>
\t\t\t\t\t      <ul class=\"footer-info-list\">
\t\t\t\t\t        <li class=\"footer-info-item\"><a href=\"";
        // line 138
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "disclaimer\">Disclaimer</a></li>
\t\t\t\t\t        <li class=\"footer-info-item nowrap\"><a href=\"";
        // line 139
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "privacy-policy\">Privacy Policy</a></li>
\t\t\t\t\t        <li class=\"footer-info-copyright nowrap\">&copy; <a href=\"#\">";
        // line 140
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["now"]) ? $context["now"] : $this->getContext($context, "now")), "year"), "html", null, true);
        echo " Corben Architects</a></li>
\t\t\t\t\t        <li class=\"footer-info-hash nospace\">/</li>
\t\t\t\t\t        <li class=\"footer-info-sitedesign nowrap\">Site Design <a href=\"http://petercrumpton.com.au/\">All Things Visual</a></li>
\t\t\t\t\t      </ul>
\t\t\t\t\t    </div>
\t\t\t\t  \t</div>
\t\t\t\t  </div> 
\t\t\t  </footer>

  \t\t<!-- close the off-canvas menu -->
  \t\t<a class=\"exit-off-canvas\"></a>

\t\t\t</div><!-- Inner Wrap */ -->
\t\t</div><!-- Off Canvas Container */ -->

    

\t\t<!-- /BODY: Scripts -->
\t\t<script src=\"/bower_components/jquery/dist/jquery.min.js\"></script>
\t\t<script src=\"/bower_components/foundation/js/foundation.min.js\"></script>
\t\t<script src=\"/bower_components/owlcarousel/owl-carousel/owl.carousel.min.js\"></script>
\t\t<script src=\"/js/app.js\"></script>


  </body>
</html>";
    }

    // line 23
    public function block_meta($context, array $blocks = array())
    {
    }

    // line 113
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "_layout";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  487 => 113,  482 => 23,  452 => 140,  448 => 139,  444 => 138,  437 => 135,  426 => 130,  420 => 127,  417 => 126,  413 => 125,  398 => 113,  388 => 108,  382 => 107,  376 => 106,  368 => 103,  362 => 102,  356 => 101,  350 => 100,  344 => 99,  340 => 98,  334 => 97,  329 => 94,  303 => 92,  267 => 91,  263 => 90,  257 => 89,  241 => 78,  235 => 77,  227 => 74,  221 => 73,  215 => 72,  209 => 71,  203 => 70,  199 => 69,  193 => 68,  188 => 65,  162 => 63,  126 => 62,  122 => 61,  116 => 60,  108 => 55,  101 => 51,  72 => 24,  70 => 23,  66 => 22,  62 => 21,  58 => 20,  54 => 19,  50 => 18,  44 => 15,  36 => 14,  21 => 1,);
    }
}
