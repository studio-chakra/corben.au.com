<?php

/* sproutforms/notifications/_settings */
class __TwigTemplate_92e944c5021f5033d1b888df138e44ce33759f238b0877a60102218575a8d701 extends Craft\BaseTemplate
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
        echo "<div id=\"tab-notifications\" class=\"hidden\">
\t";
        // line 2
        if (array_key_exists("form", $context)) {
            // line 3
            echo "\t\t<form method=\"post\" action=\"\" accept-charset=\"UTF-8\">
\t\t\t<input type=\"hidden\" name=\"action\" value=\"sproutForms/forms/updateNotifications\">
\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"sproutforms/edit/";
            // line 5
            echo twig_escape_filter($this->env, ((array_key_exists("form", $context)) ? ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id")) : ("")), "html", null, true);
            echo "\">
\t\t\t<input type=\"hidden\" name=\"formId\" value=\"";
            // line 6
            echo twig_escape_filter($this->env, ((array_key_exists("form", $context)) ? ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id")) : ("")), "html", null, true);
            echo "\">
\t\t\t";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["forms"]) ? $context["forms"] : $this->getContext($context, "forms")), "textField", array(0 => array("label" => \Craft\Craft::t("Notification Emails"), "instructions" => \Craft\Craft::t("Enter comma seperated email addresses to notify on form submission. Leave blank to disable notifications."), "name" => "email_distribution_list", "value" => $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email_distribution_list"), "errors" => ((array_key_exists("form", $context)) ? ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "getErrors", array(0 => "email_distribution_list"), "method")) : (null)), "translatable" => true, "first" => true)), "method"), "html", null, true);
            // line 15
            echo "\t
\t\t\t
\t\t\t";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["forms"]) ? $context["forms"] : $this->getContext($context, "forms")), "textField", array(0 => array("label" => \Craft\Craft::t("Subject"), "instructions" => \Craft\Craft::t("Enter a subject.  You can also use Twig variables matching your form fields.  For example, if you have a field handle named 'userName', you can enter it as {{ entry.userName }}."), "name" => "notification_subject", "value" => $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "notification_subject"), "errors" => ((array_key_exists("form", $context)) ? ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "getErrors", array(0 => "notification_subject"), "method")) : (null)), "translatable" => true)), "method"), "html", null, true);
            // line 24
            echo "
\t\t\t
\t\t\t";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["forms"]) ? $context["forms"] : $this->getContext($context, "forms")), "textField", array(0 => array("label" => \Craft\Craft::t("Reply To"), "instructions" => \Craft\Craft::t("Enter a replyTo field.  .  You can also use Twig variables matching your form fields.  For example, if you have a field handle named 'userEmail', you can enter it as {{ entry.userEmail }}."), "name" => "notification_reply_to", "value" => $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "notification_reply_to"), "errors" => ((array_key_exists("form", $context)) ? ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "getErrors", array(0 => "notification_reply_to"), "method")) : (null)), "translatable" => true)), "method"), "html", null, true);
            // line 33
            echo "\t\t
\t\t\t\t
\t\t\t<hr>
\t
\t\t\t<div class=\"buttons\">
\t\t\t\t<input class=\"btn submit\" type=\"submit\" value=\"Submit\" />
\t\t\t\t<input type=\"button\" class=\"btn delete\" value=\"Cancel\" onclick=\"history.back()\" />
\t\t\t</div>
\t\t\t
\t\t\t</form>
\t";
        }
        // line 44
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "sproutforms/notifications/_settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 33,  42 => 17,  32 => 6,  22 => 2,  138 => 49,  122 => 36,  117 => 33,  107 => 30,  95 => 28,  89 => 27,  86 => 26,  69 => 22,  66 => 21,  64 => 20,  61 => 19,  52 => 15,  40 => 12,  36 => 7,  31 => 8,  203 => 88,  201 => 87,  199 => 86,  196 => 85,  194 => 84,  192 => 83,  189 => 82,  187 => 81,  180 => 74,  174 => 70,  158 => 56,  151 => 51,  142 => 48,  139 => 47,  129 => 40,  123 => 43,  120 => 42,  116 => 41,  111 => 38,  106 => 36,  101 => 29,  96 => 33,  92 => 31,  87 => 29,  82 => 25,  76 => 24,  67 => 23,  63 => 44,  57 => 18,  44 => 24,  23 => 3,  21 => 2,  19 => 1,  84 => 28,  81 => 62,  78 => 61,  75 => 60,  72 => 59,  70 => 58,  65 => 56,  60 => 53,  58 => 52,  56 => 29,  54 => 24,  51 => 21,  48 => 26,  46 => 18,  43 => 15,  41 => 14,  38 => 15,  35 => 9,  33 => 8,  30 => 7,  28 => 5,  26 => 6,  24 => 3,);
    }
}
