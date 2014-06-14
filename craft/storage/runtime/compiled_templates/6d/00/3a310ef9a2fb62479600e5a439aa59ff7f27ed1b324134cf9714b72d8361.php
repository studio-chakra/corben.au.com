<?php

/* sproutforms/settings/_form_settings */
class __TwigTemplate_6d003a310ef9a2fb62479600e5a439aa59ff7f27ed1b324134cf9714b72d8361 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"tab-settings\" class=\"hidden\">
  
  <form method=\"post\" action=\"\" accept-charset=\"UTF-8\">
    <input type=\"hidden\" name=\"action\" value=\"sproutForms/forms/saveForm\">
    <input type=\"hidden\" name=\"redirect\" value=\"sproutforms\">
    <input type=\"hidden\" name=\"id\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, ((array_key_exists("form", $context)) ? ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id")) : ("")), "html", null, true);
        echo "\">
    
    ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["forms"]) ? $context["forms"] : $this->getContext($context, "forms")), "textField", array(0 => array("label" => \Craft\Craft::t("Form Name"), "id" => "name", "name" => "name", "instructions" => \Craft\Craft::t("Human readable form name"), "value" => ((array_key_exists("form", $context)) ? ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name")) : (null)), "autofocus" => true, "required" => true, "first" => true, "errors" => ((array_key_exists("form", $context)) ? ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "getErrors", array(0 => "name"), "method")) : (null)))), "method"), "html", null, true);
        // line 18
        echo "

    ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["forms"]) ? $context["forms"] : $this->getContext($context, "forms")), "textField", array(0 => array("label" => \Craft\Craft::t("Form Handle"), "id" => "handle", "name" => "handle", "instructions" => \Craft\Craft::t("Short name you will use to refer to your form in the code"), "value" => ((array_key_exists("form", $context)) ? ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "handle")) : (null)), "required" => true, "errors" => ((array_key_exists("form", $context)) ? ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "getErrors", array(0 => "handle"), "method")) : (null)))), "method"), "html", null, true);
        // line 28
        echo "
    
    ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["forms"]) ? $context["forms"] : $this->getContext($context, "forms")), "textField", array(0 => array("label" => \Craft\Craft::t("Redirect Page"), "name" => "redirectUri", "instructions" => \Craft\Craft::t("Where should the user be redirected upon form submission? <i>NOTE: Leaving blank will redirect user back to the form.</i> "), "placeholder" => (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "value" => ((array_key_exists("form", $context)) ? ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "redirectUri")) : (null)), "required" => true, "errors" => ((array_key_exists("form", $context)) ? ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "getErrors", array(0 => "redirectUri"), "method")) : (null)))), "method"), "html", null, true);
        // line 38
        echo "
    
   ";
        // line 40
        $context["buttonOptions"] = array(0 => array("value" => "button", "label" => "Button element"), 1 => array("value" => "input", "label" => "Input element"));
        // line 44
        echo "\t
\t";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["forms"]) ? $context["forms"] : $this->getContext($context, "forms")), "radioGroup", array(0 => array("options" => (isset($context["buttonOptions"]) ? $context["buttonOptions"] : $this->getContext($context, "buttonOptions")), "value" => ((($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "submitButtonType", array(), "any", true, true) && $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submitButtonType"))) ? ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submitButtonType")) : ("input")), "name" => "submitButtonType")), "method"), "html", null, true);
        // line 49
        echo "
\t
    ";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["forms"]) ? $context["forms"] : $this->getContext($context, "forms")), "textField", array(0 => array("label" => \Craft\Craft::t("Submit Button Text"), "name" => "submitButtonText", "instructions" => \Craft\Craft::t("What the text in the submit button should be."), "placeholder" => "Submit", "value" => ((array_key_exists("form", $context)) ? ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submitButtonText")) : (null)), "required" => false, "errors" => ((array_key_exists("form", $context)) ? ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "getErrors", array(0 => "submitButtonText"), "method")) : (null)))), "method"), "html", null, true);
        // line 59
        echo "

    <div class=\"buttons\">
      <input class=\"btn submit\" type=\"submit\" value=\"Save Template\" />
      <input type=\"button\" class=\"btn delete\" value=\"Cancel\" onclick=\"window.location='";
        // line 63
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("sproutforms"), "html", null, true);
        echo "';\" />
    </div>
  
  </form>

</div>

";
        // line 70
        if (((!array_key_exists("form", $context)) || (!$this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "handle")))) {
            // line 71
            echo "\t";
            \Craft\craft()->templates->includeJs("new Craft.HandleGenerator('#name', '#handle');");
        }
    }

    public function getTemplateName()
    {
        return "sproutforms/settings/_form_settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 63,  62 => 59,  49 => 40,  45 => 38,  39 => 28,  173 => 82,  164 => 75,  150 => 66,  144 => 65,  128 => 57,  80 => 71,  74 => 33,  59 => 24,  55 => 23,  37 => 20,  50 => 33,  42 => 17,  32 => 6,  22 => 2,  138 => 64,  122 => 36,  117 => 33,  107 => 41,  95 => 39,  89 => 38,  86 => 26,  69 => 22,  66 => 21,  64 => 20,  61 => 19,  52 => 15,  40 => 12,  36 => 7,  31 => 8,  203 => 88,  201 => 87,  199 => 86,  196 => 85,  194 => 84,  192 => 83,  189 => 98,  187 => 81,  180 => 74,  174 => 70,  158 => 56,  151 => 51,  142 => 48,  139 => 47,  129 => 40,  123 => 43,  120 => 42,  116 => 41,  111 => 38,  106 => 36,  101 => 40,  96 => 33,  92 => 31,  87 => 29,  82 => 25,  76 => 24,  67 => 23,  63 => 25,  57 => 18,  44 => 24,  23 => 3,  21 => 2,  19 => 1,  84 => 28,  81 => 62,  78 => 70,  75 => 60,  72 => 59,  70 => 58,  65 => 56,  60 => 51,  58 => 52,  56 => 49,  54 => 45,  51 => 44,  48 => 26,  46 => 18,  43 => 30,  41 => 12,  38 => 15,  35 => 9,  33 => 18,  30 => 7,  28 => 5,  26 => 6,  24 => 3,);
    }
}
