<?php

/* settings/routes */
class __TwigTemplate_fe51ccb51d333d3522b158e7038f07b76b245b1d1932e12b6121109de0a3ce67 extends Craft\BaseTemplate
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
        $context["title"] = \Craft\Craft::t("Routes");
        // line 3
        \Craft\craft()->templates->includeCssResource("css/routes.css");
        // line 4
        \Craft\craft()->templates->includeJsResource("js/routes.js");
        // line 6
        $context["crumbs"] = array(0 => array("label" => \Craft\Craft::t("Settings"), "url" => \Craft\UrlHelper::getUrl("settings")));
        // line 10
        \Craft\craft()->templates->includeTranslations(
        	"Global",
        	"New route order saved.",
        	"Couldn’t save new route order.",
        	"If the URI looks like this",
        	"Add a token",
        	"Load this template",
        	"Edit Route",
        	"Create a new route",
        	"Route Saved.",
        	"Couldn’t save route.",
        	"Are you sure you want to delete this route?",
        	"Route deleted."
        );
        // line 25
        $context["docsUrl"] = "http://buildwithcraft.com/docs/routing";
        // line 28
        $context["routes"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "routes"), "getDbRoutes", array(), "method");
        // line 31
        ob_start();
        // line 32
        echo "\t<p id=\"noroutes\"";
        if ((isset($context["routes"]) ? $context["routes"] : $this->getContext($context, "routes"))) {
            echo " class=\"hidden\"";
        }
        echo ">
\t\t";
        // line 33
        echo twig_escape_filter($this->env, \Craft\Craft::t("No routes exist yet."), "html", null, true);
        echo "
\t</p>

\t<div id=\"routes\">
\t\t";
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["routes"]) ? $context["routes"] : $this->getContext($context, "routes")));
        foreach ($context['_seq'] as $context["_key"] => $context["route"]) {
            // line 38
            echo "\t\t\t<div class=\"route\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), "id"), "html", null, true);
            echo "\"";
            if ($this->getAttribute((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), "locale")) {
                echo " data-locale=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), "locale"), "html", null, true);
                echo "\"";
            }
            echo ">
\t\t\t\t<div class=\"url-container\">";
            // line 40
            ob_start();
            // line 41
            echo "\t\t\t\t\t\t";
            if ($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "isLocalized", array(), "method")) {
                // line 42
                echo "\t\t\t\t\t\t\t<span class=\"locale\">";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), "locale")) ? ($this->getAttribute((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), "locale")) : (\Craft\Craft::t("Global"))), "html", null, true);
                echo "</span>
\t\t\t\t\t\t";
            }
            // line 44
            echo "\t\t\t\t\t\t<span class=\"url\" dir=\"ltr\">";
            echo $this->getAttribute((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), "urlDisplayHtml");
            echo "</span>
\t\t\t\t\t";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 46
            echo "</div>
\t\t\t\t<div class=\"template\" dir=\"ltr\">";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), "template"), "html", null, true);
            echo "</div>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['route'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "\t</div>

\t<div class=\"buttons\">
\t\t<div id=\"add-route-btn\" class=\"btn submit add icon\">";
        // line 53
        echo twig_escape_filter($this->env, \Craft\Craft::t("New Route"), "html", null, true);
        echo "</div>
\t</div>
";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 58
        ob_start();
        // line 59
        echo "\tCraft.routes.tokens = {
\t\t";
        // line 60
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tokens"]) ? $context["tokens"] : $this->getContext($context, "tokens")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["name"] => $context["pattern"]) {
            // line 61
            echo "\t\t\t";
            if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "first"))) {
                echo ",";
            }
            // line 62
            echo "\t\t\t\"";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "js"), "html", null, true);
            echo "\": \"";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["pattern"]) ? $context["pattern"] : $this->getContext($context, "pattern")), "js"), "html", null, true);
            echo "\"
\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['pattern'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "\t};

\t";
        // line 66
        if ($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "isLocalized", array(), "method")) {
            // line 67
            echo "\t\tCraft.routes.locales = ";
            echo twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "i18n"), "getSiteLocaleIds", array(), "method"));
            echo ";
\t";
        }
        $context["js"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 70
        \Craft\craft()->templates->includeJs((isset($context["js"]) ? $context["js"] : $this->getContext($context, "js")));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "settings/routes";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 70,  174 => 67,  172 => 66,  168 => 64,  149 => 62,  144 => 61,  127 => 60,  124 => 59,  122 => 58,  116 => 53,  111 => 50,  102 => 47,  99 => 46,  93 => 44,  87 => 42,  84 => 41,  82 => 40,  71 => 38,  67 => 37,  60 => 33,  53 => 32,  51 => 31,  49 => 28,  47 => 25,  32 => 10,  30 => 6,  28 => 4,  26 => 3,  24 => 2,);
    }
}
