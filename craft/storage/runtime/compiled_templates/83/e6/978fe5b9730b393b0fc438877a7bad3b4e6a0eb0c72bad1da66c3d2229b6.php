<?php

/* _templates/form */
class __TwigTemplate_83e6978fe5b9730b393b0fc438877a7bad3b4e6a0eb0c72bad1da66c3d2229b6 extends Craft\BaseTemplate
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
        $context["submitValue"] = (($this->getAttribute((isset($context["customSettings"]) ? $context["customSettings"] : null), "submitButtonText", array(), "any", true, true)) ? ($this->getAttribute((isset($context["customSettings"]) ? $context["customSettings"] : $this->getContext($context, "customSettings")), "submitButtonText")) : (((($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "submitButtonText", array(), "any", true, true) && $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submitButtonText"))) ? ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submitButtonText")) : ("Submit"))));
        // line 2
        $context["submitButton"] = (($this->getAttribute((isset($context["customSettings"]) ? $context["customSettings"] : null), "submitButtonType", array(), "any", true, true)) ? ($this->getAttribute((isset($context["customSettings"]) ? $context["customSettings"] : $this->getContext($context, "customSettings")), "submitButtonType")) : ((($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "submitButtonType", array(), "any", true, true)) ? ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submitButtonType")) : ("input"))));
        // line 6
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")), "all")) {
            echo " 
\t<ul class=\"errors\">
\t";
            // line 8
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")), "all"));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 9
                echo "\t\t<li class=\"error\">";
                echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
                echo "</li>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "\t</ul>
";
        }
        // line 13
        echo "\t
<form method=\"post\" accept-charset=\"UTF-8\">
\t<input type=\"hidden\" name=\"action\" value=\"sproutForms/entries/saveEntry\">
\t<input type=\"hidden\" name=\"handle\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "handle"), "html", null, true);
        echo "\">
\t
\t";
        // line 18
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "redirectUri")) {
            // line 19
            echo "\t<input type=\"hidden\" name=\"redirect\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "redirectUri"), "html", null, true);
            echo "\">
\t";
        }
        // line 21
        echo "
\t<div class=\"fields\">
\t";
        // line 23
        echo (isset($context["fields"]) ? $context["fields"] : $this->getContext($context, "fields"));
        echo "
\t</div>
\t
\t<div class=\"submit\">
\t";
        // line 27
        if (((isset($context["submitButton"]) ? $context["submitButton"] : $this->getContext($context, "submitButton")) == "button")) {
            // line 28
            echo "\t\t<button type=\"submit\">";
            echo twig_escape_filter($this->env, (isset($context["submitValue"]) ? $context["submitValue"] : $this->getContext($context, "submitValue")), "html", null, true);
            echo "</button>
\t";
        } else {
            // line 30
            echo "\t\t<input type=\"submit\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["submitValue"]) ? $context["submitValue"] : $this->getContext($context, "submitValue")), "html", null, true);
            echo "\">
\t";
        }
        // line 32
        echo "\t</div>
\t\t
\t

</form>";
    }

    public function getTemplateName()
    {
        return "_templates/form";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 30,  76 => 28,  74 => 27,  67 => 23,  63 => 21,  55 => 18,  50 => 16,  32 => 9,  28 => 8,  101 => 29,  93 => 26,  88 => 32,  85 => 23,  81 => 21,  75 => 19,  72 => 18,  68 => 16,  64 => 14,  62 => 13,  45 => 13,  43 => 9,  40 => 8,  38 => 7,  27 => 6,  23 => 6,  21 => 2,  19 => 1,  95 => 27,  91 => 35,  83 => 30,  79 => 29,  69 => 24,  65 => 23,  61 => 22,  57 => 19,  52 => 19,  41 => 11,  33 => 5,  30 => 4,  25 => 4,);
    }
}
