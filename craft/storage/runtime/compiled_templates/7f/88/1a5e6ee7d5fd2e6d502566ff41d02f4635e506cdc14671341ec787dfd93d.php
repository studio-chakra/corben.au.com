<?php

/* categories */
class __TwigTemplate_7f881a5e6ee7d5fd2e6d502566ff41d02f4635e506cdc14671341ec787dfd93d extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layouts/elementindex");

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/elementindex";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["title"] = \Craft\Craft::t("Categories");
        // line 3
        $context["elementType"] = "Category";
        // line 4
        $context["showStatusMenu"] = false;
        // line 5
        $context["showLocaleMenu"] = false;
        // line 6
        $context["showSearch"] = false;
        // line 8
        if (array_key_exists("groupHandle", $context)) {
            // line 9
            \Craft\craft()->templates->includeJs((("window.defaultGroupHandle = \"" . (isset($context["groupHandle"]) ? $context["groupHandle"] : $this->getContext($context, "groupHandle"))) . "\";"));
        }
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "categories";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 9,  34 => 8,  32 => 6,  30 => 5,  28 => 4,  26 => 3,  24 => 2,);
    }
}
