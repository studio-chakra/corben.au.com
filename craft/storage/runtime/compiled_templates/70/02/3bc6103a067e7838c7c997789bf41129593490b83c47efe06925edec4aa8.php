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
\t\t<meta name=\"description\" content=\"\">
\t\t<meta name=\"keywords\" content=\"\">
\t\t<meta name=\"author\" content=\"\">
\t\t<meta name=\"google-site-verification\" content=\"\" />
\t\t<meta property=\"og:site_name\" content=\"Corben Architects\">
\t\t";
        // line 23
        $this->displayBlock('meta', $context, $blocks);
        // line 24
        echo "
\t\t<!-- HEAD: Favicons -->
\t\t<link rel=\"icon\" type=\"image/x-icon\" href=\"images/favicon.ico\">
\t\t<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"images/favicon.ico\">
\t\t<!-- 
\t\t<link rel=\"apple-touch-icon\" href=\"images/apple-touch-icon.png\">
\t\t<link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"images/apple-touch-icon-72x72.png\">
\t\t<link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"images/apple-touch-icon-114x114.png\"> 
\t\t-->

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
        // line 56
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "\"><span class=\"hidden\">Corben Architects</span></a></h1>
\t\t\t\t\t\t\t\t<a class=\"right-off-canvas-toggle\" href=\"#\"><i class=\"fa fa-bars\"></i> Menu</a>
\t\t\t    \t\t</nav>
\t\t\t    \t\t<nav class=\"top-bar show-for-large-up\" data-topbar>
\t\t\t\t\t\t\t  <h1 class=\"logo\"><a href=\"";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "\"><span class=\"hidden\">Corben Architects</span></a></h1>

\t\t\t\t\t\t\t  <section class=\"top-bar-section\">
\t\t\t\t\t\t\t    <ul class=\"right\">
\t\t\t\t\t\t\t      <li class=\"has-dropdown\">
\t\t\t\t\t\t\t      \t<a href=\"";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "projects\" class=\"is-active\">Projects</a>
\t\t\t\t\t\t\t      \t<ul class=\"dropdown\">
\t\t\t\t\t\t\t          <!-- <li><a href=\"";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "projects\">In Progress</a></li>
\t\t\t\t\t\t\t          <li><a href=\"";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "projects\" class=\"is-active\">Apartments</a></li>
\t\t\t\t\t\t\t          <li><a href=\"";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "projects\">Commercial</a></li>
\t\t\t\t\t\t\t          <li><a href=\"";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "projects\">Alterations &amp; Additions</a></li>
\t\t\t\t\t\t\t          <li><a href=\"";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "projects\">New Houses</a></li> -->
\t\t\t\t\t\t\t          ";
        // line 72
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
            // line 73
            echo "   \t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "url"), "html", null, true);
            echo "\">";
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
        // line 75
        echo "\t\t\t\t\t\t\t        </ul>
\t\t\t\t\t\t\t      </li>
\t\t\t\t\t\t\t      <li class=\"has-dropdown\">
\t\t\t\t\t\t\t        <a href=\"";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "about\">Practice</a>
\t\t\t\t\t\t\t        <ul class=\"dropdown\">
\t\t\t\t\t\t\t          <li><a href=\"";
        // line 80
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "awards\">Awards</a></li>
\t\t\t\t\t\t\t          <li><a href=\"";
        // line 81
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "fees\">Fees</a></li>
\t\t\t\t\t\t\t          <li><a href=\"";
        // line 82
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "service\">Service</a></li>
\t\t\t\t\t\t\t          <li><a href=\"";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "architecture\">Architecture</a></li>
\t\t\t\t\t\t\t          <li><a href=\"";
        // line 84
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "about\">About</a></li>
\t\t\t\t\t\t\t        </ul>
\t\t\t\t\t\t\t      </li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 87
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "people\">People</a></li>
\t\t\t\t\t\t\t      <li><a href=\"";
        // line 88
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "place\">Place</a></li>
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
        // line 99
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "projects\" class=\"is-active\">Projects</a>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<!-- <li><a href=\"";
        // line 101
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "projects\">In Progress</a></li>
\t\t\t\t\t\t\t    <li><a href=\"";
        // line 102
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "projects\">Apartments</a></li>
\t\t\t\t\t\t\t    <li><a href=\"";
        // line 103
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "projects\">Commercial</a></li>
\t\t\t\t\t\t\t    <li><a href=\"";
        // line 104
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "projects\" class=\"is-active\">Alterations &amp; Additions</a></li>
\t\t\t\t\t\t\t    <li><a href=\"";
        // line 105
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "projects\">New Houses</a></li> -->
\t\t\t\t\t\t\t    ";
        // line 106
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
            // line 107
            echo "   \t\t\t\t\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "url"), "html", null, true);
            echo "\">";
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
        // line 109
        echo "\t\t\t\t\t\t\t\t</ul>
\t          \t</li>
\t          \t<li>
\t          \t\t<a href=\"";
        // line 112
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "page\">Practice</a>
\t          \t\t<ul class=\"dropdown\">
\t\t\t\t\t\t\t    <li><a href=\"";
        // line 114
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "awards\">Awards</a></li>
\t\t\t\t\t\t\t    <li><a href=\"";
        // line 115
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "fees\">Fees</a></li>
\t\t\t\t\t\t\t    <li><a href=\"";
        // line 116
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "service\">Service</a></li>
\t\t\t\t\t\t\t    <li><a href=\"";
        // line 117
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "architecture\">Architecture</a></li>
\t\t\t\t\t\t\t    <li><a href=\"";
        // line 118
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "about\">About</a></li>
\t\t\t\t\t\t\t  </ul>\t
\t          \t</li>
\t          \t<li><a href=\"";
        // line 121
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "people\">People</a></li>
\t          \t<li><a href=\"";
        // line 122
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "place\">Place</a></li>
\t          \t<li><a href=\"";
        // line 123
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "news\">News</a></li>
\t        \t</ul>
\t    \t\t</aside><!-- Off Canvas Menu */ -->

\t\t\t\t\t<!-- /* Main Content Block -->
\t\t\t    <main class=\"main main-content\" role=\"main\">";
        // line 128
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
        // line 140
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "socialNetworks"));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 141
            echo "\t\t\t\t\t        <li class=\"footer-nav-social nospace\">
\t\t\t\t\t        \t<a href=\"";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "networkUrl"), "html", null, true);
            echo "\" class=\"icon-link\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa-stack fa-lg\">
\t\t\t\t\t\t\t\t\t\t\t  <i class=\"fa fa-circle fa-stack-2x\"></i>
\t\t\t\t\t\t\t\t\t\t\t  <i class=\"fa ";
            // line 145
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
        // line 150
        echo "\t\t\t\t\t        <li classs=\"footer-nav-item\"><a href=\"";
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "news\">News</a></li>
\t\t\t\t\t      </ul>
\t\t\t\t\t      <ul class=\"footer-info-list\">
\t\t\t\t\t        <li class=\"footer-info-item\"><a href=\"";
        // line 153
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "disclaimer\">Disclaimer</a></li>
\t\t\t\t\t        <li class=\"footer-info-item nowrap\"><a href=\"";
        // line 154
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "privacy-policy\">Privacy Policy</a></li>
\t\t\t\t\t        <li class=\"footer-info-copyright nowrap\">&copy; <a href=\"#\">";
        // line 155
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

    // line 128
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
        return array (  463 => 128,  458 => 23,  428 => 155,  424 => 154,  420 => 153,  413 => 150,  402 => 145,  396 => 142,  393 => 141,  389 => 140,  374 => 128,  366 => 123,  362 => 122,  358 => 121,  352 => 118,  348 => 117,  344 => 116,  340 => 115,  336 => 114,  331 => 112,  326 => 109,  302 => 107,  266 => 106,  262 => 105,  258 => 104,  254 => 103,  250 => 102,  246 => 101,  241 => 99,  227 => 88,  223 => 87,  217 => 84,  213 => 83,  209 => 82,  205 => 81,  201 => 80,  196 => 78,  191 => 75,  167 => 73,  131 => 72,  127 => 71,  123 => 70,  119 => 69,  115 => 68,  111 => 67,  106 => 65,  98 => 60,  91 => 56,  57 => 24,  55 => 23,  44 => 15,  36 => 14,  21 => 1,);
    }
}
