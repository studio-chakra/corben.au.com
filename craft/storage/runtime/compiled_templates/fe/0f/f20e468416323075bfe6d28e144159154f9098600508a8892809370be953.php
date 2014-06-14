<?php

/* place */
class __TwigTemplate_fe0ff20e468416323075bfe6d28e144159154f9098600508a8892809370be953 extends Craft\BaseTemplate
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
        $context["title"] = $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "pageTitle");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "
<article class=\"page-contact\">
\t<div class=\"row\">
\t\t<div class=\"large-12 columns\">
\t\t\t<section class=\"contact-map\">
\t\t\t\t<div class=\"google-map\">
\t\t\t\t\t";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "contactGoogleMap"), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t</section>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"xxlarge-3 xlarge-3 large-6 medium-6 columns\">
\t\t\t<section class=\"contact-details\">
\t\t\t\t<h3>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "contactDetailsHeading"), "html", null, true);
        echo "</h3>
\t\t\t\t<h6 class=\"contact-hd\">Address</h6>
\t\t\t\t";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "contactAddress"), "html", null, true);
        echo "
\t\t\t\t<p class=\"contact-phone\"><strong>Telephone</strong> ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "contactTelephone"), "html", null, true);
        echo "</p>
\t\t\t\t<p class=\"contact-fax\"><strong>Facsimile</strong> ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "contactFacsimile"), "html", null, true);
        echo "</p>
\t\t\t\t<p class=\"contact-email\"><strong>Email</strong> <a href=\"mailto:";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "contactEmail"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "contactEmail"), "html", null, true);
        echo "</a></p>
\t\t\t</section>
\t\t</div>
\t\t<div class=\"xxlarge-5 xlarge-4 large-6 medium-6 columns\">
\t\t\t<section class=\"contact-find\">
\t\t\t\t<h3>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "contactDirectionsHeading"), "html", null, true);
        echo "</h3>
\t\t\t\t";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "contactDirections"), "html", null, true);
        echo "
\t\t\t</section>
\t\t</div>
\t\t<div class=\"xxlarge-4 xlarge-5 large-12 medium-12 columns\">
\t\t\t<section class=\"contact-us\">
\t\t\t\t<h3>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "contactFormHeading"), "html", null, true);
        echo "</h3>

\t\t\t\t";
        // line 37
        $context["contact"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "sproutForms"), "getFormFields", array(0 => "contact"), "method");
        // line 38
        echo "
\t\t\t\t";
        // line 39
        if (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "request"), "getParam", array(0 => "message"), "method") == "thankyou")) {
            // line 40
            echo "\t\t\t\t<div data-alert class=\"alert-box success radius\">
\t\t\t\t  ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "contactThankYouMessage"), "html", null, true);
            echo "
\t\t\t\t  <a href=\"#\" class=\"close\">&times;</a>
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 45
        echo "
\t\t\t\t";
        // line 47
        echo "\t\t\t\t";
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "errors", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "errors"), "all"))) {
            echo " 
\t\t\t\t<div data-alert class=\"alert-box alert radius\">
  \t\t\t\t<ul class=\"errors\">
\t\t\t\t\t\t";
            // line 50
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "errors"), "all"));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 51
                echo "\t\t\t\t\t\t\t\t<li class=\"error\">";
                echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
                echo "</li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "\t\t\t\t\t</ul>
  \t\t\t\t<a href=\"#\" class=\"close\">&times;</a>
\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t";
        }
        // line 58
        echo "
\t\t\t\t<form method=\"post\" action=\"\" accept-charset=\"UTF-8\" class=\"form-contact\">\t
\t\t\t\t  <input type=\"hidden\" name=\"action\" value=\"sproutForms/entries/saveEntry\">
\t\t\t\t  <input type=\"hidden\" name=\"handle\" value=\"contact\">
\t\t\t\t  <input type=\"hidden\" name=\"redirect\" value=\"place?message=thankyou\">

\t\t\t\t  <div class=\"row\">
\t\t\t\t    <div class=\"large-7 columns\">
\t\t\t\t      <label>";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "fullName"), "label"), "html", null, true);
        echo "
\t\t\t\t        ";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "fullName"), "input"), "html", null, true);
        echo "
\t\t\t\t      </label>
\t\t\t\t    </div>
\t\t\t\t  </div>
\t\t\t\t  <div class=\"row\">
\t\t\t\t    <div class=\"large-7 columns\">
\t\t\t\t      <label>";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "email"), "label"), "html", null, true);
        echo "
\t\t\t\t        ";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "email"), "input"), "html", null, true);
        echo "
\t\t\t\t      </label>
\t\t\t\t    </div>
\t\t\t\t    <div class=\"large-5 columns\">
\t\t\t\t      <label>";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "phone"), "label"), "html", null, true);
        echo "
\t\t\t\t        ";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "phone"), "input"), "html", null, true);
        echo "
\t\t\t\t      </label>
\t\t\t\t    </div>\t\t\t    
\t\t\t\t  </div>
\t\t\t\t  <div class=\"row\">
\t\t\t\t    <div class=\"large-12 columns\">
\t\t\t\t      <label>";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "message"), "label"), "html", null, true);
        echo "
\t\t\t\t        ";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "message"), "input"), "html", null, true);
        echo "
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
        return "place";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 86,  190 => 85,  181 => 79,  177 => 78,  170 => 74,  166 => 73,  157 => 67,  153 => 66,  143 => 58,  136 => 53,  127 => 51,  123 => 50,  116 => 47,  113 => 45,  106 => 41,  103 => 40,  101 => 39,  98 => 38,  96 => 37,  91 => 35,  83 => 30,  79 => 29,  69 => 24,  65 => 23,  61 => 22,  57 => 21,  52 => 19,  41 => 11,  33 => 5,  30 => 4,  25 => 2,);
    }
}
