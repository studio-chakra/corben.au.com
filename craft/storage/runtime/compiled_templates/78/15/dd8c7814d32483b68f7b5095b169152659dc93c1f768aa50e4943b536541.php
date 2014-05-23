<?php

/* _layout-dev */
class __TwigTemplate_7815dd8c7814d32483b68f7b5095b169152659dc93c1f768aa50e4943b536541 extends Craft\BaseTemplate
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
    <link rel=\"stylesheet\" href=\"../stylesheets/app.css\" />
    <link rel=\"stylesheet\" href=\"../bower_components/fontawesome/css/font-awesome.min.css\" />
\t\t<link rel=\"stylesheet\" href=\"../bower_components/owlcarousel/owl-carousel/owl.carousel.css\">
    
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700' rel='stylesheet' type='text/css'>

    <!-- HEAD: Scripts -->
    <script src=\"../bower_components/modernizr/modernizr.js\"></script>

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
        echo "dev/index\"><span class=\"hidden\">Corben Architects</span></a></h1>
\t\t\t\t\t\t\t\t<a class=\"right-off-canvas-toggle\" href=\"#\"><i class=\"fa fa-bars\"></i> Menu</a>
\t\t\t    \t\t</nav>
\t\t\t    \t\t<nav class=\"top-bar show-for-large-up\" data-topbar>
\t\t\t\t\t\t\t  <h1 class=\"logo\"><a href=\"";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "dev/index\"><span class=\"hidden\">Corben Architects</span></a></h1>

\t\t\t\t\t\t\t  <section class=\"top-bar-section\">
\t\t\t\t\t\t\t    <ul class=\"right\">
\t\t\t\t\t\t\t      <li class=\"has-dropdown\">
\t\t\t\t\t\t\t      \t<a href=\"";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "dev/projects\">Projects</a>
\t\t\t\t\t\t\t      \t<!-- <ul class=\"dropdown\">
\t\t\t\t\t\t\t          <li><a href=\"";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "dev/projects\">In Progress</a></li>
\t\t\t\t\t\t\t          <li><a href=\"";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "dev/projects\">Apartments</a></li>
\t\t\t\t\t\t\t          <li><a href=\"";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "dev/projects\">Commercial</a></li>
\t\t\t\t\t\t\t          <li><a href=\"";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "dev/projects\">Alterations &amp; Additions</a></li>
\t\t\t\t\t\t\t          <li><a href=\"";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "dev/projects\">New Houses</a></li>
\t\t\t\t\t\t\t        </ul> -->
\t\t\t\t\t\t\t      </li>
\t\t\t\t\t\t\t      <li class=\"has-dropdown\">
\t\t\t\t\t\t\t        <a href=\"";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "dev/page\">Practice</a>
\t\t\t\t\t\t\t        <!-- <ul class=\"dropdown\">
\t\t\t\t\t\t\t          <li><a href=\"";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "dev/awards\">Awards</a></li>
\t\t\t\t\t\t\t          <li><a href=\"";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "dev/page\">Fees</a></li>
\t\t\t\t\t\t\t          <li><a href=\"";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "dev/page\">Service</a></li>
\t\t\t\t\t\t\t          <li><a href=\"";
        // line 80
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "dev/page\">Architecture</a></li>
\t\t\t\t\t\t\t          <li><a href=\"";
        // line 81
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "dev/page\">About</a></li>
\t\t\t\t\t\t\t        </ul> -->
\t\t\t\t\t\t\t      </li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 84
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "dev/people\">People</a></li>
\t\t\t\t\t\t\t      <li><a href=\"";
        // line 85
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "dev/contact\">Place</a></li>
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
        // line 96
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "dev/projects\" class=\"is-active\">Projects</a>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 98
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "dev/projects\">In Progress</a></li>
\t\t\t\t\t\t\t    <li><a href=\"";
        // line 99
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "dev/projects\">Apartments</a></li>
\t\t\t\t\t\t\t    <li><a href=\"";
        // line 100
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "dev/projects\">Commercial</a></li>
\t\t\t\t\t\t\t    <li><a href=\"";
        // line 101
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "dev/projects\" class=\"is-active\">Alterations &amp; Additions</a></li>
\t\t\t\t\t\t\t    <li><a href=\"";
        // line 102
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "dev/projects\">New Houses</a></li>
\t\t\t\t\t\t\t\t</ul>
\t          \t</li>
\t          \t<li>
\t          \t\t<a href=\"";
        // line 106
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "dev/page\">Practice</a>
\t          \t\t<ul class=\"dropdown\">
\t\t\t\t\t\t\t    <li><a href=\"";
        // line 108
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "dev/awards\">Awards</a></li>
\t\t\t\t\t\t\t    <li><a href=\"";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "dev/page\">Fees</a></li>
\t\t\t\t\t\t\t    <li><a href=\"";
        // line 110
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "dev/page\">Service</a></li>
\t\t\t\t\t\t\t    <li><a href=\"";
        // line 111
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "dev/page\">Architecture</a></li>
\t\t\t\t\t\t\t    <li><a href=\"";
        // line 112
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "dev/page\">About</a></li>
\t\t\t\t\t\t\t  </ul>\t
\t          \t</li>
\t          \t<li><a href=\"";
        // line 115
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "dev/people\">People</a></li>
\t          \t<li><a href=\"";
        // line 116
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "dev/contact\">Place</a></li>
\t        \t</ul>
\t    \t\t</aside><!-- Off Canvas Menu */ -->

\t\t\t\t\t<!-- /* Main Content Block -->
\t\t\t    <main class=\"main main-content\" role=\"main\">";
        // line 121
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
\t\t\t\t\t        <li class=\"footer-nav-social nospace\">
\t\t\t\t\t        \t<a href=\"#\" class=\"icon-link\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa-stack fa-lg\">
\t\t\t\t\t\t\t\t\t\t\t  <i class=\"fa fa-circle fa-stack-2x\"></i>
\t\t\t\t\t\t\t\t\t\t\t  <i class=\"fa fa-facebook fa-stack-1x fa-inverse\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t        \t</a>
\t\t\t\t\t        </li>
\t\t\t\t\t        <li class=\"footer-nav-social nospace\">
\t\t\t\t\t        \t<a href=\"#\" class=\"icon-link\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa-stack fa-lg\">
\t\t\t\t\t\t\t\t\t\t\t  <i class=\"fa fa-circle fa-stack-2x\"></i>
\t\t\t\t\t\t\t\t\t\t\t  <i class=\"fa fa-pinterest fa-stack-1x fa-inverse\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t        \t</a>
\t\t\t\t\t        </li>
\t\t\t\t\t        <li classs=\"footer-nav-item\"><a href=\"";
        // line 149
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "dev/news\">News</a></li>
\t\t\t\t\t      </ul>
\t\t\t\t\t      <ul class=\"footer-info-list\">
\t\t\t\t\t        <li class=\"footer-info-item\"><a href=\"";
        // line 152
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "dev/styleguide\">Style Guide</a></li>
\t\t\t\t\t        <li class=\"footer-info-item\"><a href=\"";
        // line 153
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "dev/page\">Disclaimer</a></li>
\t\t\t\t\t        <li class=\"footer-info-item nowrap\"><a href=\"";
        // line 154
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "dev/page\">Privacy Policy</a></li>
\t\t\t\t\t        <li class=\"footer-info-copyright nowrap\">&copy; <a href=\"#\">";
        // line 155
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["now"]) ? $context["now"] : $this->getContext($context, "now")), "year"), "html", null, true);
        echo " Corben Architects</a></li>
\t\t\t\t\t        <li class=\"footer-info-hash nospace\">/</li>
\t\t\t\t\t        <li class=\"footer-info-sitedesign nowrap\">Site Design <a href=\"#\">All Things Visual</a></li>
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
\t\t<script src=\"../bower_components/jquery/dist/jquery.min.js\"></script>
\t\t<script src=\"../bower_components/foundation/js/foundation.min.js\"></script>
\t\t<script src=\"../bower_components/owlcarousel/owl-carousel/owl.carousel.min.js\"></script>
\t\t<script src=\"../js/app.js\"></script>


  </body>
</html>";
    }

    // line 23
    public function block_meta($context, array $blocks = array())
    {
    }

    // line 121
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "_layout-dev";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 121,  325 => 23,  295 => 155,  291 => 154,  287 => 153,  283 => 152,  277 => 149,  246 => 121,  238 => 116,  234 => 115,  228 => 112,  224 => 111,  220 => 110,  216 => 109,  212 => 108,  207 => 106,  200 => 102,  196 => 101,  192 => 100,  188 => 99,  184 => 98,  179 => 96,  165 => 85,  161 => 84,  155 => 81,  151 => 80,  147 => 79,  143 => 78,  139 => 77,  134 => 75,  127 => 71,  123 => 70,  119 => 69,  115 => 68,  111 => 67,  106 => 65,  98 => 60,  91 => 56,  57 => 24,  55 => 23,  44 => 15,  36 => 14,  21 => 1,);
    }
}
