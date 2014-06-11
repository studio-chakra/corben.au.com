<?php

/* _elements/structureview/container */
class __TwigTemplate_28f841a2010f55b5a90c7889bcc1fccbe106bf051a76783a72759e71656ffaa4 extends Craft\BaseTemplate
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
        $this->env->loadTemplate("_elements/structure")->display(array("context" => (isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "elements" => (isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "disabledElementIds" => (isset($context["disabledElementIds"]) ? $context["disabledElementIds"] : $this->getContext($context, "disabledElementIds")), "collapsedElementIds" => (isset($context["collapsedElementIds"]) ? $context["collapsedElementIds"] : $this->getContext($context, "collapsedElementIds")), "structure" => (isset($context["structure"]) ? $context["structure"] : $this->getContext($context, "structure")), "sortable" => ((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")) == "index"), "newChildUrl" => (((((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")) == "index") && array_key_exists("newChildUrl", $context))) ? ((isset($context["newChildUrl"]) ? $context["newChildUrl"] : $this->getContext($context, "newChildUrl"))) : (null))));
    }

    public function getTemplateName()
    {
        return "_elements/structureview/container";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
