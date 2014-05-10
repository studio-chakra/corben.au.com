<?php

/* entries/_titlefield */
class __TwigTemplate_92137e0488160503ea9a0c08f6ef58fb9b2700eec4aa4b935836fa59add79725 extends Craft\BaseTemplate
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
        $context["__internal_149ba5cdd676424e43fcdf6945187f8078ef4817fea6b9cc5ec2d736f35868b9"] = $this->env->loadTemplate("_includes/forms");
        // line 2
        echo "
";
        // line 3
        echo $context["__internal_149ba5cdd676424e43fcdf6945187f8078ef4817fea6b9cc5ec2d736f35868b9"]->gettextField(array("label" => \Craft\Craft::t($this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "getType", array(), "method"), "titleLabel")), "id" => "title", "name" => "title", "value" => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "title"), "errors" => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "getErrors", array(0 => "title"), "method"), "first" => true, "autofocus" => true, "required" => true));
        // line 12
        echo "
";
    }

    public function getTemplateName()
    {
        return "entries/_titlefield";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 12,  24 => 3,  21 => 2,  19 => 1,);
    }
}
