<?php

/* settings/general/_logo */
class __TwigTemplate_8d2ebe8a9e6352fb233b9ba6edda180b410b6f96b2cc095fe4c3b25b7731f706 extends Craft\BaseTemplate
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
        if (\Craft\craft()->getEdition() < (isset($context["CraftClient"]) ? $context["CraftClient"] : null))
        {
            throw new \Craft\HttpException(404);
        }
        // line 2
        echo "
<div class=\"cp-logo\">

\t<div class=\"current-logo\"
\t\t";
        // line 6
        if ($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "rebrand"), "isLogoUploaded")) {
            // line 7
            echo "style=\"background-image: url(";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "rebrand"), "logo"), "url"), "html", null, true);
            echo "); width: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "rebrand"), "logo"), "width"), "html", null, true);
            echo "px; height: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "rebrand"), "logo"), "height"), "html", null, true);
            echo "px;\"";
        }
        // line 8
        echo ">
\t</div>

\t<div class=\"logo-controls\">
\t\t";
        // line 12
        if ($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "rebrand"), "isLogoUploaded")) {
            // line 13
            echo "\t\t\t<div class=\"btn upload-logo\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Change logo"), "html", null, true);
            echo "</div>
\t\t\t<div class=\"btn delete-logo\">";
            // line 14
            echo twig_escape_filter($this->env, \Craft\Craft::t("Delete logo"), "html", null, true);
            echo "</div>
\t\t";
        } else {
            // line 16
            echo "\t\t\t<div class=\"btn upload-logo\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Upload a logo"), "html", null, true);
            echo "</div>
\t\t";
        }
        // line 18
        echo "\t</div>

</div>
";
    }

    public function getTemplateName()
    {
        return "settings/general/_logo";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 18,  59 => 16,  54 => 14,  49 => 13,  47 => 12,  41 => 8,  32 => 7,  30 => 6,  24 => 2,  19 => 1,);
    }
}
