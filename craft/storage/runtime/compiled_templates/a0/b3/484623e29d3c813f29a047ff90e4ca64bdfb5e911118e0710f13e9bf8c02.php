<?php

/* updates/_go */
class __TwigTemplate_a0b3484623e29d3c813f29a047ff90e4ca64bdfb5e911118e0710f13e9bf8c02 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layouts/basecp");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/basecp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["title"] = \Craft\Craft::t("Craft Update");
        // line 3
        \Craft\craft()->templates->includeCssResource("css/update.css");
        // line 4
        \Craft\craft()->templates->includeJsResource("js/update.js");
        // line 6
        \Craft\craft()->templates->includeTranslations(
        	"Unable to determine what to update.",
        	"An unknown error occurred. Rolling back…",
        	"All done!",
        	"Craft was unable to install this update :(",
        	"The site has been restored to the state it was in before the attempted update.",
        	"An error has occurred.  Please contact {email}.",
        	"No files have been updated and the database has not been touched."
        );
        // line 22
        ob_start();
        // line 23
        echo "\tnew Craft.Updater('";
        echo twig_escape_filter($this->env, (isset($context["handle"]) ? $context["handle"] : $this->getContext($context, "handle")), "html", null, true);
        echo "', ";
        echo ((($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "request"), "getSegment", array(0 => 1), "method") == "manualupdate")) ? (1) : (0));
        echo ");
";
        $context["js"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 25
        \Craft\craft()->templates->includeJs((isset($context["js"]) ? $context["js"] : $this->getContext($context, "js")));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        // line 17
        echo "\t<div id=\"graphic\" class=\"spinner big\"></div>
\t<div id=\"status\">";
        // line 18
        echo twig_escape_filter($this->env, \Craft\Craft::t("Preparing to update…"), "html", null, true);
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "updates/_go";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 18,  59 => 17,  56 => 16,  51 => 25,  43 => 23,  41 => 22,  31 => 6,  29 => 4,  27 => 3,  25 => 2,);
    }
}
