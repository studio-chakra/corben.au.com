<?php

/* _elements/indexcontainer */
class __TwigTemplate_e87e903c19944588fedfaf413083d7db1fcb56d94a237479a3ba96cd242f5063 extends Craft\BaseTemplate
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
        $context["__internal_189a79ad64726ed260a180262bfb6ccab85a049deec7be4b5e83e9bc50c9f74b"] = $this->env->loadTemplate("_includes/forms");
        // line 3
        \Craft\craft()->templates->includeTranslations(
        	"Display in a table",
        	"Display hierarchically",
        	"Display as thumbnails"
        );
        // line 8
        echo "
";
        // line 9
        $context["context"] = ((array_key_exists("context", $context)) ? ((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context"))) : ("index"));
        // line 10
        $context["showStatusMenu"] = (((array_key_exists("showStatusMenu", $context) && ((isset($context["showStatusMenu"]) ? $context["showStatusMenu"] : $this->getContext($context, "showStatusMenu")) != "auto"))) ? ((isset($context["showStatusMenu"]) ? $context["showStatusMenu"] : $this->getContext($context, "showStatusMenu"))) : ($this->getAttribute((isset($context["elementType"]) ? $context["elementType"] : $this->getContext($context, "elementType")), "hasStatuses", array(), "method")));
        // line 11
        $context["showLocaleMenu"] = ((($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "isLocalized", array(), "method") && ((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")) == "index"))) ? ((((array_key_exists("showLocaleMenu", $context) && ((isset($context["showLocaleMenu"]) ? $context["showLocaleMenu"] : $this->getContext($context, "showLocaleMenu")) != "auto"))) ? ((isset($context["showLocaleMenu"]) ? $context["showLocaleMenu"] : $this->getContext($context, "showLocaleMenu"))) : ($this->getAttribute((isset($context["elementType"]) ? $context["elementType"] : $this->getContext($context, "elementType")), "isLocalized", array(), "method")))) : (false));
        // line 12
        echo "
<div class=\"main\">
\t<div class=\"toolbar\">
\t\t<table class=\"inputs fullwidth\">
\t\t\t<tr>
\t\t\t\t";
        // line 17
        if ((isset($context["showStatusMenu"]) ? $context["showStatusMenu"] : $this->getContext($context, "showStatusMenu"))) {
            // line 18
            echo "\t\t\t\t\t<td class=\"thin\">
\t\t\t\t\t\t<div class=\"btn menubtn statusmenubtn\"><span class=\"status\"></span>";
            // line 19
            echo twig_escape_filter($this->env, \Craft\Craft::t("All"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t<div class=\"menu padded\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a data-status=\"\" class=\"sel\"><span class=\"status\"></span>";
            // line 22
            echo twig_escape_filter($this->env, \Craft\Craft::t("All"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t\t\t";
            // line 23
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["elementType"]) ? $context["elementType"] : $this->getContext($context, "elementType")), "getStatuses", array(), "method"));
            foreach ($context['_seq'] as $context["status"] => $context["label"]) {
                // line 24
                echo "\t\t\t\t\t\t\t\t\t<li><a data-status=\"";
                echo twig_escape_filter($this->env, (isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), "html", null, true);
                echo "\"><span class=\"status ";
                echo twig_escape_filter($this->env, (isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), "html", null, true);
                echo "\"></span> ";
                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['status'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t";
        }
        // line 30
        echo "\t\t\t\t";
        if ((isset($context["showLocaleMenu"]) ? $context["showLocaleMenu"] : $this->getContext($context, "showLocaleMenu"))) {
            // line 31
            echo "\t\t\t\t\t";
            $context["currentLocale"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "i18n"), "getCurrentLocale", array(), "method");
            // line 32
            echo "\t\t\t\t\t<td class=\"thin\">
\t\t\t\t\t\t<div class=\"btn menubtn localemenubtn\">";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["currentLocale"]) ? $context["currentLocale"] : $this->getContext($context, "currentLocale")), "getName", array(), "method"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t<div class=\"menu padded\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t";
            // line 36
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "i18n"), "getSiteLocales", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "can", array(0 => ("editLocale:" . $this->getAttribute((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "getId", array(), "method"))), "method")) {
                    // line 37
                    echo "\t\t\t\t\t\t\t\t\t<li><a";
                    if (($this->getAttribute((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "getId", array(), "method") == $this->getAttribute((isset($context["currentLocale"]) ? $context["currentLocale"] : $this->getContext($context, "currentLocale")), "getId", array(), "method"))) {
                        echo " class=\"sel\"";
                    }
                    echo " data-locale=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "getId", array(), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "getName", array(), "method"), "html", null, true);
                    echo "</a></li>
\t\t\t\t\t\t\t\t";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t";
        }
        // line 43
        echo "\t\t\t\t<td>
\t\t\t\t\t<div class=\"texticon search icon\">
\t\t\t\t\t\t";
        // line 45
        echo $context["__internal_189a79ad64726ed260a180262bfb6ccab85a049deec7be4b5e83e9bc50c9f74b"]->gettext(array("placeholder" => \Craft\Craft::t("Search")));
        // line 47
        echo "
\t\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t\t<td class=\"thin viewbtns hidden\"></td>
\t\t\t</tr>
\t\t</table>
\t\t<div class=\"spinner hidden\"></div>
\t</div>

\t<div class=\"elements\"></div>

\t<div class=\"centeralign\">
\t\t<div class=\"spinner loadingmore hidden\"></div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "_elements/indexcontainer";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 47,  127 => 45,  123 => 43,  117 => 39,  101 => 37,  96 => 36,  90 => 33,  81 => 30,  62 => 24,  45 => 18,  43 => 17,  36 => 12,  21 => 3,  19 => 1,  88 => 34,  84 => 31,  80 => 32,  75 => 26,  66 => 18,  64 => 17,  61 => 16,  58 => 23,  55 => 14,  50 => 40,  44 => 25,  41 => 24,  34 => 11,  32 => 10,  30 => 9,  28 => 4,  26 => 3,  107 => 34,  104 => 33,  100 => 31,  92 => 35,  87 => 32,  76 => 24,  72 => 30,  65 => 20,  63 => 19,  60 => 18,  57 => 17,  54 => 22,  48 => 19,  46 => 26,  39 => 23,  37 => 11,  33 => 9,  31 => 7,  29 => 6,  27 => 8,  25 => 2,);
    }
}
