<?php

/* globals/_edit */
class __TwigTemplate_b593a82b85bc7d1f0c5eeb6be92231371abf40c79827c34ab901d59507a275b3 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layouts/cp");

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/cp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["title"] = \Craft\Craft::t("Globals");
        // line 5
        if ($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "isLocalized", array(), "method")) {
            // line 6
            ob_start();
            // line 7
            echo "\t\t<div class=\"select\">
\t\t\t<select onchange=\"document.location.href='";
            // line 8
            echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl(("globals/{locale}/" . (isset($context["globalSetHandle"]) ? $context["globalSetHandle"] : $this->getContext($context, "globalSetHandle")))), "html", null, true);
            echo "'.replace('{locale}', this.value);\">
\t\t\t\t";
            // line 9
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "i18n"), "getEditableLocales", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 10
                echo "\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "id"), "html", null, true);
                echo "\"";
                if (($this->getAttribute((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "id") == (isset($context["localeId"]) ? $context["localeId"] : $this->getContext($context, "localeId")))) {
                    echo " selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "name"), "html", null, true);
                echo "</option>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "\t\t\t</select>
\t\t</div>
\t";
            $context["extraPageHeaderHtml"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        }
        // line 18
        ob_start();
        // line 19
        echo "\t<nav>
\t\t<ul>
\t\t\t";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["globalSets"]) ? $context["globalSets"] : $this->getContext($context, "globalSets")));
        foreach ($context['_seq'] as $context["_key"] => $context["theGlobalSet"]) {
            // line 22
            echo "\t\t\t\t<li><a";
            if (($this->getAttribute((isset($context["theGlobalSet"]) ? $context["theGlobalSet"] : $this->getContext($context, "theGlobalSet")), "handle") == (isset($context["globalSetHandle"]) ? $context["globalSetHandle"] : $this->getContext($context, "globalSetHandle")))) {
                echo " class=\"sel\"";
            }
            echo " href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theGlobalSet"]) ? $context["theGlobalSet"] : $this->getContext($context, "theGlobalSet")), "cpEditUrl"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute((isset($context["theGlobalSet"]) ? $context["theGlobalSet"] : $this->getContext($context, "theGlobalSet")), "name")), "html", null, true);
            echo "</a></li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theGlobalSet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "\t\t</ul>
\t</nav>
";
        $context["sidebar"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        ob_start();
        // line 30
        echo "\t<form method=\"post\" accept-charset=\"UTF-8\" data-saveshortcut=\"1\">
\t\t<input type=\"hidden\" name=\"action\" value=\"globals/saveContent\">
\t\t<input type=\"hidden\" name=\"setId\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["globalSet"]) ? $context["globalSet"] : $this->getContext($context, "globalSet")), "id"), "html", null, true);
        echo "\">
\t\t<input type=\"hidden\" name=\"locale\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["localeId"]) ? $context["localeId"] : $this->getContext($context, "localeId")), "html", null, true);
        echo "\">

\t\t<div>
\t\t\t";
        // line 36
        $this->env->loadTemplate("_includes/fields")->display(array("fields" => $this->getAttribute($this->getAttribute((isset($context["globalSet"]) ? $context["globalSet"] : $this->getContext($context, "globalSet")), "getFieldLayout", array(), "method"), "getFields", array(), "method"), "element" => (isset($context["globalSet"]) ? $context["globalSet"] : $this->getContext($context, "globalSet"))));
        // line 40
        echo "\t\t</div>

\t\t<div class=\"buttons\">
\t\t\t<input type=\"submit\" class=\"btn submit\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, \Craft\Craft::t("Save"), "html", null, true);
        echo "\">
\t\t</div>
\t</form>
";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "globals/_edit";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 43,  110 => 40,  108 => 36,  102 => 33,  98 => 32,  94 => 30,  92 => 29,  87 => 24,  72 => 22,  68 => 21,  64 => 19,  62 => 18,  56 => 12,  41 => 10,  37 => 9,  33 => 8,  30 => 7,  28 => 6,  26 => 5,  24 => 2,);
    }
}
