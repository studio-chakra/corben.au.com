<?php

/* updates */
class __TwigTemplate_28b47ed420eed4a0719b60b7d34157635a067583ade2b8ac38db5e385f6d7c51 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layouts/cp");

        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/cp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        \Craft\craft()->userSession->requirePermission("performUpdates");
        // line 4
        $context["title"] = \Craft\Craft::t("Updates");
        // line 5
        \Craft\craft()->templates->includeCssResource("css/updates.css");
        // line 6
        \Craft\craft()->templates->includeJsResource("js/updates.js");
        // line 7
        \Craft\craft()->templates->includeJs((("new Craft.UpdateInfo(" . $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "config"), "allowAutoUpdates")) . ");"));
        // line 8
        \Craft\craft()->templates->includeTranslations(
        	"You’ve got updates!",
        	"You’re all up-to-date!",
        	"build {build}",
        	"Critical",
        	"Update",
        	"Download",
        	"Craft’s <a href=\"http://buildwithcraft.com/license\" target=\"_blank\">Terms and Conditions</a> have changed.",
        	"I agree.",
        	"Seriously, download.",
        	"Seriously, update.",
        	"Install",
        	"{app} update required",
        	"Added",
        	"Improved",
        	"Fixed",
        	"Download"
        );
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_main($context, array $blocks = array())
    {
        // line 29
        echo "\t<div id=\"graphic\" class=\"spinner big\"></div>
\t<div id=\"status\">";
        // line 30
        echo twig_escape_filter($this->env, \Craft\Craft::t("Checking for updates…"), "html", null, true);
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "updates";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 30,  60 => 29,  57 => 28,  35 => 8,  33 => 7,  31 => 6,  29 => 5,  27 => 4,  25 => 1,);
    }
}
