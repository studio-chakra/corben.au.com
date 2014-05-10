<?php

/* _elements/element */
class __TwigTemplate_fe7b5aaf9e14f264759ecd765855fde4f4c07a6b5ac0f8e7e1772ad1f83475c5 extends Craft\BaseTemplate
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
        echo \Craft\craft()->templates->invokeHook("cp.elements.element", $context);

    }

    public function getTemplateName()
    {
        return "_elements/element";
    }

    public function getDebugInfo()
    {
        return array (  96 => 12,  82 => 11,  74 => 9,  70 => 7,  68 => 6,  63 => 5,  60 => 4,  43 => 3,  36 => 2,  54 => 11,  52 => 10,  48 => 8,  31 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }
}
