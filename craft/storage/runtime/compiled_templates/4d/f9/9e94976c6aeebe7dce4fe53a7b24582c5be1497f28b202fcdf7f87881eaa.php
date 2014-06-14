<?php

/* sproutforms/_edit */
class __TwigTemplate_4df99e94976c6aeebe7dce4fe53a7b24582c5be1497f28b202fcdf7f87881eaa extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("sproutforms/_layouts/base");

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "sproutforms/_layouts/base";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["forms"] = $this->env->loadTemplate("_includes/forms");
        // line 5
        if (array_key_exists("formId", $context)) {
            // line 6
            if ((!array_key_exists("form", $context))) {
                // line 7
                $context["form"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "sproutforms"), "getFormById", array(0 => (isset($context["formId"]) ? $context["formId"] : $this->getContext($context, "formId"))), "method");
            }
            // line 9
            if ((!(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))) {
                // line 10
                throw new \Craft\HttpException(404);
            }
            // line 12
            $context["formName"] = $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name");
        } else {
            // line 14
            $context["formName"] = "new";
            // line 15
            $context["formId"] = 0;
        }
        // line 18
        if (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "request"), "getSegment", array(0 => "3"), "method") == "new")) {
            // line 19
            $context["title"] = "New Form";
        } else {
            // line 21
            $context["title"] = (isset($context["formName"]) ? $context["formName"] : $this->getContext($context, "formName"));
        }
        // line 24
        $context["crumbs"] = array(0 => array("label" => \Craft\Craft::t("Sprout Forms"), "url" => \Craft\UrlHelper::getUrl("sproutforms")), 1 => array("label" => (isset($context["formName"]) ? $context["formName"] : $this->getContext($context, "formName")), "url" => ""));
        // line 29
        $context["tabs"] = array("formEntries" => array("label" => \Craft\Craft::t("Entries"), "url" => "#tab-entries"), "formFields" => array("label" => \Craft\Craft::t("Fields"), "url" => "#tab-fields"), "formNotifications" => array("label" => \Craft\Craft::t("Notifications"), "url" => "#tab-notifications"), "formPublish" => array("label" => \Craft\Craft::t("Publish"), "url" => "#tab-publish"), "formSettings" => array("label" => \Craft\Craft::t("Settings"), "url" => "#tab-settings"));
        // line 52
        ob_start();
        // line 53
        echo "<form method=\"post\" action=\"\" accept-charset=\"UTF-8\">
\t<input type=\"hidden\" name=\"action\" value=\"sproutForms/forms/saveForm\">
\t<input type=\"hidden\" name=\"redirect\" value=\"sproutforms\">
\t<input type=\"hidden\" name=\"id\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["formId"]) ? $context["formId"] : $this->getContext($context, "formId")), "html", null, true);
        echo "\">
\t
\t";
        // line 58
        $this->env->loadTemplate("sproutforms/entries/_index")->display($context);
        // line 59
        echo "\t";
        $this->env->loadTemplate("sproutforms/fields/_index")->display($context);
        // line 60
        echo "\t";
        $this->env->loadTemplate("sproutforms/notifications/_settings")->display($context);
        // line 61
        echo "\t";
        $this->env->loadTemplate("sproutforms/publish/_index")->display($context);
        // line 62
        echo "\t";
        $this->env->loadTemplate("sproutforms/settings/_form_settings")->display($context);
        // line 63
        echo "
</form>
";
        $context["body"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "sproutforms/_edit";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 63,  81 => 62,  78 => 61,  75 => 60,  72 => 59,  70 => 58,  65 => 56,  60 => 53,  58 => 52,  56 => 29,  54 => 24,  51 => 21,  48 => 19,  46 => 18,  43 => 15,  41 => 14,  38 => 12,  35 => 10,  33 => 9,  30 => 7,  28 => 6,  26 => 5,  24 => 2,);
    }
}
