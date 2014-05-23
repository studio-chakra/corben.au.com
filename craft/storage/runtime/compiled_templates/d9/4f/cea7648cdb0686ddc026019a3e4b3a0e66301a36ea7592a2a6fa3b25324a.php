<?php

/* dev/contact */
class __TwigTemplate_d94fcea7648cdb0686ddc026019a3e4b3a0e66301a36ea7592a2a6fa3b25324a extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layout-dev");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layout-dev";
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
<article class=\"page-contact\">
\t<div class=\"row\">
\t\t<div class=\"large-12 columns\">
\t\t\t<section class=\"contact-map\">
\t\t\t\t<div class=\"google-map\">
\t\t\t\t\t<iframe width=\"1470\" height=\"480\" frameborder=\"0\" style=\"border:0\" src=\"https://www.google.com/maps/embed/v1/place?q=Suite%2014%2C%2040%20Yeo%20St%20Neutral%20Bay%2C%20NSW%202089&key=AIzaSyBiAD2tlzv1CXVhOPFqf-bLDk_nM4k1EC8\"></iframe>
\t\t\t\t</div>
\t\t\t</section>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"xxlarge-3 xlarge-3 large-6 medium-6 columns\">
\t\t\t<section class=\"contact-details\">
\t\t\t\t<h3>Contact Details</h3>
\t\t\t\t<h6 class=\"contact-hd\">Address</h6>
\t\t\t\t<p>suite 14, 40 Yeo St</p>
\t\t\t\t<p>Neutral Bay, NSW 2089</p>
\t\t\t\t<p class=\"contact-phone\"><strong>Telephone</strong> +61 (02) 9904 1844</p>
\t\t\t\t<p class=\"contact-fax\"><strong>Facsimile</strong> +61 (02) 9904 1855</p>
\t\t\t\t<p class=\"contact-email\"><strong>Email</strong> <a href=\"mailxa@corben.com.au\">mailxa@corben.com.au</a></p>
\t\t\t</section>
\t\t</div>
\t\t<div class=\"xxlarge-5 xlarge-4 large-6 medium-6 columns\">
\t\t\t<section class=\"contact-find\">
\t\t\t\t<h3>How to Find Us</h3>
\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus sequi voluptatem voluptatum perspiciatis sed consequatur assumenda ratione id dolor alias provident rem modi deserunt odit laboriosam pariatur exercitationem atque quo?</p>
\t\t\t</section>
\t\t</div>
\t\t<div class=\"xxlarge-4 xlarge-5 large-12 medium-12 columns\">
\t\t\t<section class=\"contact-us\">
\t\t\t\t<h3>Email Us</h3>
\t\t\t\t<form class=\"form-contact\">
\t\t\t\t  <div class=\"row\">
\t\t\t\t    <div class=\"large-7 columns\">
\t\t\t\t      <label>Name
\t\t\t\t        <input type=\"text\" placeholder=\"\" />
\t\t\t\t      </label>
\t\t\t\t    </div>
\t\t\t\t  </div>
\t\t\t\t  <div class=\"row\">
\t\t\t\t    <div class=\"large-7 columns\">
\t\t\t\t      <label>Email
\t\t\t\t        <input type=\"email\" placeholder=\"\" />
\t\t\t\t      </label>
\t\t\t\t    </div>
\t\t\t\t    <div class=\"large-5 columns\">
\t\t\t\t      <label>Phone
\t\t\t\t        <input type=\"tel\" placeholder=\"\" />
\t\t\t\t      </label>
\t\t\t\t    </div>\t\t\t    
\t\t\t\t  </div>
\t\t\t\t  <div class=\"row\">
\t\t\t\t    <div class=\"large-12 columns\">
\t\t\t\t      <label>Message
\t\t\t\t        <textarea rows=\"4\" placeholder=\"\"></textarea>
\t\t\t\t      </label>
\t\t\t\t    </div>
\t\t\t\t  </div>
\t\t\t\t  <div class=\"row\">
\t\t\t\t    <div class=\"large-12 columns\">
\t\t\t\t      <button class=\"button\">Send</button>
\t\t\t\t    </div>
\t\t\t\t  </div>
\t\t\t\t</form>
\t\t\t</section>
\t\t</div>
</article>

";
    }

    public function getTemplateName()
    {
        return "dev/contact";
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
