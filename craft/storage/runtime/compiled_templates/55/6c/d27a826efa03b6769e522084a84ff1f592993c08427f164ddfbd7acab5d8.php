<?php

/* sproutforms/fields/_edit */
class __TwigTemplate_556cd27a826efa03b6769e522084a84ff1f592993c08427f164ddfbd7acab5d8 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("sproutforms/_layouts/base");

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "sproutforms/_layouts/base";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["forms"] = $this->env->loadTemplate("_includes/forms");
        // line 4
        if (array_key_exists("fieldId", $context)) {
            // line 5
            if ((!array_key_exists("field", $context))) {
                // line 6
                $context["field"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "sproutforms"), "getFieldById", array(0 => (isset($context["fieldId"]) ? $context["fieldId"] : $this->getContext($context, "fieldId"))), "method");
            }
            // line 8
            if ((!(isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")))) {
                // line 9
                throw new \Craft\HttpException(404);
            }
            // line 11
            $context["form"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "sproutforms"), "getFormByFieldId", array(0 => array("fieldId" => (isset($context["fieldId"]) ? $context["fieldId"] : $this->getContext($context, "fieldId")))), "method");
        } else {
            // line 13
            $context["formId"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "request"), "getQuery", array(0 => "formId"), "method");
            // line 14
            $context["form"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "sproutforms"), "getFormById", array(0 => (isset($context["formId"]) ? $context["formId"] : $this->getContext($context, "formId"))), "method");
        }
        // line 18
        if ((!(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))) {
            // line 19
            throw new \Craft\HttpException(404);
        }
        // line 22
        $context["crumbs"] = array(0 => array("label" => \Craft\Craft::t("Sprout Forms"), "url" => \Craft\UrlHelper::getUrl("sproutforms")), 1 => array("label" => $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), "url" => \Craft\UrlHelper::getUrl(("sproutforms/edit/" . $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id")))), 2 => array("label" => ((array_key_exists("fieldId", $context)) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "name")) : (\Craft\Craft::t("Create New Field"))), "url" => ""));
        // line 28
        if (array_key_exists("fieldId", $context)) {
            // line 29
            $context["title"] = (((("Edit field <i>" . $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "name")) . "</i> which belongs to form <i>") . $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name")) . "</i>");
        } else {
            // line 31
            $context["title"] = \Craft\Craft::t("Create a new field");
        }
        // line 35
        $context["fieldTypes"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "sproutforms"), "getAllFieldTypes");
        // line 37
        if (array_key_exists("field", $context)) {
            // line 38
            $context["fieldType"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "fields"), "populateFieldType", array(0 => (isset($context["field"]) ? $context["field"] : $this->getContext($context, "field"))), "method");
            // line 39
            $context["isFieldTypeMissing"] = (!(isset($context["fieldType"]) ? $context["fieldType"] : $this->getContext($context, "fieldType")));
        } else {
            // line 41
            $context["isFieldTypeMissing"] = false;
        }
        // line 44
        if (((!array_key_exists("fieldType", $context)) || (isset($context["isFieldTypeMissing"]) ? $context["isFieldTypeMissing"] : $this->getContext($context, "isFieldTypeMissing")))) {
            // line 45
            $context["fieldType"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "fields"), "getFieldType", array(0 => "PlainText"), "method");
        }
        // line 49
        ob_start();
        // line 50
        echo "\t<form method=\"post\" action=\"\" accept-charset=\"UTF-8\">
\t\t<input type=\"hidden\" name=\"action\" value=\"sproutForms/fields/saveField\">
\t\t<input type=\"hidden\" name=\"redirect\" value=\"sproutforms/edit/";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id"), "html", null, true);
        echo "#tab-fields\">
\t\t<input type=\"hidden\" name=\"formId\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id"), "html", null, true);
        echo "\">
\t\t
\t\t";
        // line 55
        if (array_key_exists("fieldId", $context)) {
            // line 56
            echo "\t\t\t<input type=\"hidden\" name=\"fieldId\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["fieldId"]) ? $context["fieldId"] : $this->getContext($context, "fieldId")), "html", null, true);
            echo "\">
\t\t";
        }
        // line 58
        echo "
\t\t";
        // line 59
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Name"), "instructions" => \Craft\Craft::t("What this field will be called in the CP."), "id" => "name", "name" => "name", "value" => ((array_key_exists("field", $context)) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "name")) : (null)), "errors" => ((array_key_exists("field", $context)) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "getErrors", array(0 => "name"), "method")) : (null)), "required" => true, "translatable" => true, "autofocus" => true));
        // line 69
        echo "

\t\t";
        // line 71
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Handle"), "instructions" => \Craft\Craft::t("How you’ll refer to this field in the templates."), "id" => "handle", "class" => "code", "name" => "handle", "value" => ((array_key_exists("field", $context)) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "handle")) : (null)), "errors" => ((array_key_exists("field", $context)) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "getErrors", array(0 => "handle"), "method")) : (null)), "required" => true));
        // line 80
        echo "

\t\t";
        // line 82
        echo $context["forms"]->gettextareaField(array("label" => \Craft\Craft::t("Instructions"), "instructions" => \Craft\Craft::t("Helper text to guide the author."), "name" => "instructions", "value" => ((array_key_exists("field", $context)) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "instructions")) : (null)), "errors" => ((array_key_exists("field", $context)) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "getErrors", array(0 => "instructions"), "method")) : (null)), "translatable" => true));
        // line 89
        echo "

\t\t";
        // line 91
        if ($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "hasPackage", array(0 => "Localize"), "method")) {
            // line 92
            echo "\t\t\t";
            echo $context["forms"]->getcheckboxField(array("label" => \Craft\Craft::t("This field is translatable"), "name" => "translatable", "checked" => ((array_key_exists("field", $context)) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "translatable")) : (false))));
            // line 96
            echo "
\t\t";
        }
        // line 98
        echo "
\t\t<hr>

\t\t";
        // line 101
        echo $context["forms"]->getselectField(array("label" => "Type", "instructions" => (\Craft\Craft::t("What type of field is this?") . ((array_key_exists("fieldId", $context)) ? ((("<br><span class=\"error\">" . \Craft\Craft::t("Careful—changing this may result in data loss.")) . "</span>")) : (""))), "id" => "type", "name" => "type", "options" => (isset($context["fieldTypes"]) ? $context["fieldTypes"] : $this->getContext($context, "fieldTypes")), "value" => $this->getAttribute((isset($context["fieldType"]) ? $context["fieldType"] : $this->getContext($context, "fieldType")), "classHandle"), "errors" => (((isset($context["isFieldTypeMissing"]) ? $context["isFieldTypeMissing"] : $this->getContext($context, "isFieldTypeMissing"))) ? (array(0 => \Craft\Craft::t("The fieldtype class “{class}” could not be found.", array("class" => $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "type"))))) : (null)), "toggle" => true));
        // line 110
        echo "

\t\t";
        // line 113
        echo "\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fieldTypes"]) ? $context["fieldTypes"] : $this->getContext($context, "fieldTypes")));
        foreach ($context['_seq'] as $context["_key"] => $context["_fieldType"]) {
            // line 114
            echo "\t\t\t";
            $context["isCurrent"] = ($this->getAttribute((isset($context["_fieldType"]) ? $context["_fieldType"] : $this->getContext($context, "_fieldType")), "getClassHandle", array(), "method") == $this->getAttribute((isset($context["fieldType"]) ? $context["fieldType"] : $this->getContext($context, "fieldType")), "getClassHandle", array(), "method"));
            // line 115
            echo "\t\t\t<div id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_fieldType"]) ? $context["_fieldType"] : $this->getContext($context, "_fieldType")), "getClassHandle", array(), "method"), "html", null, true);
            echo "\"";
            if ((!(isset($context["isCurrent"]) ? $context["isCurrent"] : $this->getContext($context, "isCurrent")))) {
                echo " class=\"hidden\"";
            }
            echo ">
\t\t\t\t";
            // line 116
            $_namespace = (("types[" . $this->getAttribute((isset($context["_fieldType"]) ? $context["_fieldType"] : $this->getContext($context, "_fieldType")), "getClassHandle", array(), "method")) . "]");
            if ($_namespace) {
                $_originalNamespace = \Craft\craft()->templates->getNamespace();
                \Craft\craft()->templates->setNamespace(\Craft\craft()->templates->namespaceInputName($_namespace));
                ob_start();
                try {
                    // line 117
                    echo "\t\t\t\t\t";
                    if ((isset($context["isCurrent"]) ? $context["isCurrent"] : $this->getContext($context, "isCurrent"))) {
                        // line 118
                        echo "\t\t\t\t\t\t";
                        echo $this->getAttribute((isset($context["fieldType"]) ? $context["fieldType"] : $this->getContext($context, "fieldType")), "getSettingsHtml", array(), "method");
                        echo "
\t\t\t\t\t";
                    } else {
                        // line 120
                        echo "\t\t\t\t\t\t";
                        echo $this->getAttribute((isset($context["_fieldType"]) ? $context["_fieldType"] : $this->getContext($context, "_fieldType")), "getSettingsHtml", array(), "method");
                        echo "
\t\t\t\t\t";
                    }
                    // line 122
                    echo "\t\t\t\t";
                } catch (Exception $e) {
                    ob_end_clean();

                    throw $e;
                }
                echo \Craft\craft()->templates->namespaceInputs(ob_get_clean(), $_namespace);
                \Craft\craft()->templates->setNamespace($_originalNamespace);
            } else {
                // line 117
                echo "\t\t\t\t\t";
                if ((isset($context["isCurrent"]) ? $context["isCurrent"] : $this->getContext($context, "isCurrent"))) {
                    // line 118
                    echo "\t\t\t\t\t\t";
                    echo $this->getAttribute((isset($context["fieldType"]) ? $context["fieldType"] : $this->getContext($context, "fieldType")), "getSettingsHtml", array(), "method");
                    echo "
\t\t\t\t\t";
                } else {
                    // line 120
                    echo "\t\t\t\t\t\t";
                    echo $this->getAttribute((isset($context["_fieldType"]) ? $context["_fieldType"] : $this->getContext($context, "_fieldType")), "getSettingsHtml", array(), "method");
                    echo "
\t\t\t\t\t";
                }
                // line 122
                echo "\t\t\t\t";
            }
            unset($_originalNamespace, $_namespace);
            // line 123
            echo "\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['_fieldType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "
\t\t<hr>
\t\t
\t\t<div class=\"validation\" style=\"margin-top:20px;\">
\t\t\t<div class=\"field\">
\t\t\t\t<div class=\"heading\">
\t\t\t\t\t<label for=\"validation\">Validation</label>
\t\t\t\t\t<p class=\"instructions\">Select any validation you would like to apply to this field.</p>
\t\t\t\t</div>
\t\t\t\t";
        // line 134
        echo $context["forms"]->getcheckboxGroup(array("id" => "validation", "name" => "validation", "options" => $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "sproutforms"), "getValidationOptions", array(), "method"), "values" => ((array_key_exists("field", $context)) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "validation")) : ("")), "errors" => (((isset($context["isFieldTypeMissing"]) ? $context["isFieldTypeMissing"] : $this->getContext($context, "isFieldTypeMissing"))) ? (array(0 => \Craft\Craft::t("The fieldtype class “{class}” could not be found.", array("class" => $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "type"))))) : (null))));
        // line 140
        echo "
\t\t\t</div>
\t\t</div>

\t\t<hr>

\t\t<div class=\"buttons\">
\t\t\t<input class=\"btn submit\" type=\"submit\" value=\"Submit\" />
\t\t\t<input type=\"button\" class=\"btn delete\" value=\"Cancel\" onclick=\"history.back()\" />
\t\t</div>
\t\t
\t\t
\t</form>
";
        $context["body"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 156
        if (((!array_key_exists("field", $context)) || (!$this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "handle")))) {
            // line 157
            \Craft\craft()->templates->includeJs("new Craft.HandleGenerator('#name', '#handle');");
        }
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "sproutforms/fields/_edit";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 157,  246 => 156,  230 => 140,  228 => 134,  217 => 125,  210 => 123,  206 => 122,  200 => 120,  194 => 118,  191 => 117,  181 => 122,  175 => 120,  169 => 118,  166 => 117,  159 => 116,  150 => 115,  147 => 114,  142 => 113,  138 => 110,  136 => 101,  131 => 98,  127 => 96,  124 => 92,  122 => 91,  118 => 89,  116 => 82,  112 => 80,  110 => 71,  106 => 69,  104 => 59,  101 => 58,  95 => 56,  93 => 55,  88 => 53,  84 => 52,  80 => 50,  78 => 49,  75 => 45,  73 => 44,  70 => 41,  67 => 39,  65 => 38,  63 => 37,  61 => 35,  58 => 31,  55 => 29,  53 => 28,  51 => 22,  48 => 19,  46 => 18,  43 => 14,  41 => 13,  38 => 11,  35 => 9,  33 => 8,  30 => 6,  28 => 5,  26 => 4,  24 => 2,);
    }
}
