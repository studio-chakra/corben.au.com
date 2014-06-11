<?php

/* dashboard/settings/_widgetsettings */
class __TwigTemplate_9c9d4eb97be6b83c56877243c7d76ee640b7587bd5339838999168429916762b extends Craft\BaseTemplate
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
        $context["forms"] = $this->env->loadTemplate("_includes/forms");
        // line 4
        $context["crumbs"] = array(0 => array("label" => \Craft\Craft::t("Dashboard"), "url" => \Craft\UrlHelper::getUrl("dashboard")), 1 => array("label" => \Craft\Craft::t("Settings"), "url" => \Craft\UrlHelper::getUrl("dashboard/settings")), 2 => array("label" => \Craft\Craft::t("My Widgets"), "url" => \Craft\UrlHelper::getUrl("dashboard/settings")));
        // line 10
        if (((!array_key_exists("widget", $context)) && array_key_exists("widgetId", $context))) {
            // line 11
            $context["widget"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "dashboard"), "getUserWidgetById", array(0 => (isset($context["widgetId"]) ? $context["widgetId"] : $this->getContext($context, "widgetId"))), "method");
            // line 12
            if ((!(isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")))) {
                throw new \Craft\HttpException(404);
            }
        }
        // line 16
        if (array_key_exists("widget", $context)) {
            // line 17
            $context["widgetType"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "dashboard"), "populateWidgetType", array(0 => (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"))), "method");
            // line 18
            $context["isWidgetTypeMissing"] = (!(isset($context["widgetType"]) ? $context["widgetType"] : $this->getContext($context, "widgetType")));
        } else {
            // line 20
            $context["isWidgetTypeMissing"] = false;
        }
        // line 23
        if (((!array_key_exists("widgetType", $context)) || (isset($context["isWidgetTypeMissing"]) ? $context["isWidgetTypeMissing"] : $this->getContext($context, "isWidgetTypeMissing")))) {
            // line 24
            $context["widgetType"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "dashboard"), "getWidgetType", array(0 => "Feed"), "method");
        }
        // line 28
        $context["isNewWidget"] = ((!array_key_exists("widget", $context)) || (!$this->getAttribute((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "id")));
        // line 31
        if ((isset($context["isNewWidget"]) ? $context["isNewWidget"] : $this->getContext($context, "isNewWidget"))) {
            // line 32
            $context["title"] = \Craft\Craft::t("Add a new widget.");
        } else {
            // line 34
            $context["title"] = $this->getAttribute((isset($context["widgetType"]) ? $context["widgetType"] : $this->getContext($context, "widgetType")), "title");
        }
        // line 38
        ob_start();
        // line 39
        echo "\t<form method=\"post\" accept-charset=\"UTF-8\" data-saveshortcut=\"1\">
\t\t<input type=\"hidden\" name=\"action\" value=\"dashboard/saveUserWidget\">
\t\t<input type=\"hidden\" name=\"redirect\" value=\"dashboard/settings\">
\t\t";
        // line 42
        if ((!(isset($context["isNewWidget"]) ? $context["isNewWidget"] : $this->getContext($context, "isNewWidget")))) {
            echo "<input type=\"hidden\" name=\"widgetId\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "id"), "html", null, true);
            echo "\">";
        }
        // line 43
        echo "
\t\t";
        // line 44
        $context["widgetTypes"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "dashboard"), "getAllWidgetTypes", array(), "method");
        // line 45
        echo "
\t\t";
        // line 46
        if ((!$this->getAttribute((isset($context["widgetType"]) ? $context["widgetType"] : $this->getContext($context, "widgetType")), "isSelectable", array(), "method"))) {
            // line 47
            echo "\t\t\t";
            $context["widgetTypes"] = twig_array_merge(array(0 => (isset($context["widgetType"]) ? $context["widgetType"] : $this->getContext($context, "widgetType"))), (isset($context["widgetTypes"]) ? $context["widgetTypes"] : $this->getContext($context, "widgetTypes")));
            // line 48
            echo "\t\t";
        }
        // line 49
        echo "
\t\t";
        // line 50
        echo $context["forms"]->getselectField(array("first" => true, "label" => "Type", "instructions" => \Craft\Craft::t("What type of widget is this?"), "id" => "type", "name" => "type", "options" => (isset($context["widgetTypes"]) ? $context["widgetTypes"] : $this->getContext($context, "widgetTypes")), "value" => $this->getAttribute((isset($context["widgetType"]) ? $context["widgetType"] : $this->getContext($context, "widgetType")), "getClassHandle", array(), "method"), "errors" => (((isset($context["isWidgetTypeMissing"]) ? $context["isWidgetTypeMissing"] : $this->getContext($context, "isWidgetTypeMissing"))) ? (array(0 => \Craft\Craft::t("The widget class “{class}” could not be found.", array("class" => $this->getAttribute((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "type"))))) : (null)), "autofocus" => true, "toggle" => true));
        // line 61
        echo "

\t\t";
        // line 63
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["widgetTypes"]) ? $context["widgetTypes"] : $this->getContext($context, "widgetTypes")));
        foreach ($context['_seq'] as $context["_key"] => $context["_widgetType"]) {
            // line 64
            echo "\t\t\t";
            $context["isCurrent"] = ($this->getAttribute((isset($context["_widgetType"]) ? $context["_widgetType"] : $this->getContext($context, "_widgetType")), "getClassHandle", array(), "method") == $this->getAttribute((isset($context["widgetType"]) ? $context["widgetType"] : $this->getContext($context, "widgetType")), "getClassHandle", array(), "method"));
            // line 65
            echo "
\t\t\t<div id=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_widgetType"]) ? $context["_widgetType"] : $this->getContext($context, "_widgetType")), "getClassHandle", array(), "method"), "html", null, true);
            echo "\"";
            if ((!(isset($context["isCurrent"]) ? $context["isCurrent"] : $this->getContext($context, "isCurrent")))) {
                echo " class=\"hidden\"";
            }
            echo ">
\t\t\t\t";
            // line 67
            $_namespace = (("types[" . $this->getAttribute((isset($context["_widgetType"]) ? $context["_widgetType"] : $this->getContext($context, "_widgetType")), "getClassHandle", array(), "method")) . "]");
            if ($_namespace) {
                $_originalNamespace = \Craft\craft()->templates->getNamespace();
                \Craft\craft()->templates->setNamespace(\Craft\craft()->templates->namespaceInputName($_namespace));
                ob_start();
                try {
                    // line 68
                    echo "\t\t\t\t\t";
                    if ((isset($context["isCurrent"]) ? $context["isCurrent"] : $this->getContext($context, "isCurrent"))) {
                        // line 69
                        echo "\t\t\t\t\t\t";
                        echo $this->getAttribute((isset($context["widgetType"]) ? $context["widgetType"] : $this->getContext($context, "widgetType")), "getSettingsHtml", array(), "method");
                        echo "
\t\t\t\t\t";
                    } else {
                        // line 71
                        echo "\t\t\t\t\t\t";
                        echo $this->getAttribute((isset($context["_widgetType"]) ? $context["_widgetType"] : $this->getContext($context, "_widgetType")), "getSettingsHtml", array(), "method");
                        echo "
\t\t\t\t\t";
                    }
                    // line 73
                    echo "\t\t\t\t";
                } catch (Exception $e) {
                    ob_end_clean();

                    throw $e;
                }
                echo \Craft\craft()->templates->namespaceInputs(ob_get_clean(), $_namespace);
                \Craft\craft()->templates->setNamespace($_originalNamespace);
            } else {
                // line 68
                echo "\t\t\t\t\t";
                if ((isset($context["isCurrent"]) ? $context["isCurrent"] : $this->getContext($context, "isCurrent"))) {
                    // line 69
                    echo "\t\t\t\t\t\t";
                    echo $this->getAttribute((isset($context["widgetType"]) ? $context["widgetType"] : $this->getContext($context, "widgetType")), "getSettingsHtml", array(), "method");
                    echo "
\t\t\t\t\t";
                } else {
                    // line 71
                    echo "\t\t\t\t\t\t";
                    echo $this->getAttribute((isset($context["_widgetType"]) ? $context["_widgetType"] : $this->getContext($context, "_widgetType")), "getSettingsHtml", array(), "method");
                    echo "
\t\t\t\t\t";
                }
                // line 73
                echo "\t\t\t\t";
            }
            unset($_originalNamespace, $_namespace);
            // line 74
            echo "\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['_widgetType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "
\t\t<div class=\"buttons\">
\t\t\t<input type=\"submit\" class=\"btn submit\" value=\"";
        // line 78
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
        return "dashboard/settings/_widgetsettings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 78,  176 => 76,  169 => 74,  165 => 73,  159 => 71,  153 => 69,  150 => 68,  140 => 73,  134 => 71,  128 => 69,  125 => 68,  118 => 67,  110 => 66,  107 => 65,  104 => 64,  100 => 63,  96 => 61,  94 => 50,  91 => 49,  88 => 48,  85 => 47,  83 => 46,  80 => 45,  78 => 44,  75 => 43,  69 => 42,  64 => 39,  62 => 38,  59 => 34,  56 => 32,  54 => 31,  52 => 28,  49 => 24,  47 => 23,  44 => 20,  41 => 18,  39 => 17,  37 => 16,  32 => 12,  30 => 11,  28 => 10,  26 => 4,  24 => 2,);
    }
}
