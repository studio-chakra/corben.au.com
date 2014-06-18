<?php

/* _elements/element */
class __TwigTemplate_48a97c124814d7d27ab89aa1c9a8652519722acf0856d3ac50379a56c779ebb9 extends Craft\BaseTemplate
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
        return array (  258 => 23,  252 => 21,  250 => 20,  247 => 19,  241 => 17,  239 => 16,  236 => 15,  233 => 14,  230 => 13,  226 => 53,  220 => 50,  216 => 49,  212 => 48,  208 => 47,  201 => 46,  199 => 45,  196 => 44,  193 => 42,  190 => 41,  174 => 39,  171 => 38,  169 => 37,  165 => 34,  159 => 32,  152 => 30,  149 => 32,  127 => 25,  124 => 24,  121 => 13,  119 => 12,  109 => 11,  107 => 10,  98 => 9,  75 => 32,  72 => 30,  65 => 32,  60 => 28,  37 => 8,  33 => 7,  30 => 6,  28 => 5,  26 => 4,  24 => 3,  22 => 2,  20 => 1,  19 => 1,);
    }
}
