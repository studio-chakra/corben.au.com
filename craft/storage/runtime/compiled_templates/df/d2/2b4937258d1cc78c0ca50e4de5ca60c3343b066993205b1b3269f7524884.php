<?php

/* dashboard */
class __TwigTemplate_dfd22b4937258d1cc78c0ca50e4de5ca60c3343b066993205b1b3269f7524884 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layouts/cp");

        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/cp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["title"] = \Craft\Craft::t("Dashboard");
        // line 3
        \Craft\craft()->templates->includeCssResource("css/dashboard.css");
        // line 6
        ob_start();
        // line 7
        echo "\t<a class=\"btn settings icon\" href=\"";
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("dashboard/settings"), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, \Craft\Craft::t("Settings"), "html", null, true);
        echo "\"></a>
";
        $context["extraPageHeaderHtml"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_main($context, array $blocks = array())
    {
        // line 12
        echo "\t<div class=\"grid\">
\t\t";
        // line 13
        if (($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : $this->getContext($context, "currentUser")), "admin") && $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "deprecator"), "getTotalLogs", array(), "method"))) {
            // line 14
            echo "\t\t\t<div class=\"item\" data-colspan=\"4\">
\t\t\t\t<div class=\"pane\">
\t\t\t\t\t<p id=\"deprecationnotice\" data-icon=\"alert\">";
            // line 16
            echo \Craft\Craft::t("New deprecation errors have been logged. Please take a minute to <a class=\"go\" href=\"{url}\">review them</a>", array("url" => \Craft\UrlHelper::getUrl("utils/deprecationerrors")));
            echo "</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 20
        echo "
\t\t";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "dashboard"), "getUserWidgets"));
        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
            // line 22
            echo "\t\t\t";
            $context["widgetType"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "dashboard"), "populateWidgetType", array(0 => (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"))), "method");
            // line 23
            echo "\t\t\t";
            if ((isset($context["widgetType"]) ? $context["widgetType"] : $this->getContext($context, "widgetType"))) {
                // line 24
                echo "\t\t\t\t";
                $context["body"] = $this->getAttribute((isset($context["widgetType"]) ? $context["widgetType"] : $this->getContext($context, "widgetType")), "getBodyHtml", array(), "method");
                // line 25
                echo "\t\t\t\t";
                if ((!((isset($context["body"]) ? $context["body"] : $this->getContext($context, "body")) === false))) {
                    // line 26
                    echo "\t\t\t\t\t<div class=\"item\" data-colspan=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["widgetType"]) ? $context["widgetType"] : $this->getContext($context, "widgetType")), "getColspan", array(), "method"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t<div id=\"widget";
                    // line 27
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "id"), "html", null, true);
                    echo "\" class=\"pane widget ";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute((isset($context["widgetType"]) ? $context["widgetType"] : $this->getContext($context, "widgetType")), "classHandle")), "html", null, true);
                    echo "\" data-id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "id"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t<div class=\"spinner body-loading\"></div>
\t\t\t\t\t\t\t<h2>";
                    // line 29
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["widgetType"]) ? $context["widgetType"] : $this->getContext($context, "widgetType")), "title"), "html", null, true);
                    echo "</h2>
\t\t\t\t\t\t\t<div class=\"body\">";
                    // line 30
                    echo (isset($context["body"]) ? $context["body"] : $this->getContext($context, "body"));
                    echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 34
                echo "\t\t\t";
            }
            // line 35
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t</div>
";
    }

    public function getTemplateName()
    {
        return "dashboard";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 36,  108 => 35,  105 => 34,  98 => 30,  94 => 29,  85 => 27,  80 => 26,  77 => 25,  74 => 24,  71 => 23,  68 => 22,  64 => 21,  61 => 20,  54 => 16,  50 => 14,  48 => 13,  45 => 12,  42 => 11,  31 => 7,  29 => 6,  27 => 3,  25 => 2,);
    }
}
