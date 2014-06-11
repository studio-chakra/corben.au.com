<?php

/* settings/categories/_edit */
class __TwigTemplate_455557628893c07cfa36e7d738fac88d6ca2651f4994f29c565857004f3d0fc8 extends Craft\BaseTemplate
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
        // line 3
        $context["docsUrl"] = "http://buildwithcraft.com/docs/categories";
        // line 22
        $context["forms"] = $this->env->loadTemplate("_includes/forms");
        // line 23
        $context["__internal_35f3452340484f66c905a41d8254db971642f4fc32e327b3d7d4de1d33fc3682"] = $this;
        // line 25
        ob_start();
        // line 26
        echo "\t<form method=\"post\" accept-charset=\"UTF-8\" data-saveshortcut=\"1\">
\t\t<input type=\"hidden\" name=\"action\" value=\"categories/saveGroup\">
\t\t<input type=\"hidden\" name=\"redirect\" value=\"settings/categories\">
\t\t";
        // line 29
        if ($this->getAttribute((isset($context["categoryGroup"]) ? $context["categoryGroup"] : $this->getContext($context, "categoryGroup")), "id")) {
            echo "<input type=\"hidden\" name=\"groupId\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoryGroup"]) ? $context["categoryGroup"] : $this->getContext($context, "categoryGroup")), "id"), "html", null, true);
            echo "\">";
        }
        // line 30
        echo "
\t\t<div id=\"categorygroup-settings\">
\t\t\t";
        // line 32
        echo $context["forms"]->gettextField(array("first" => true, "label" => \Craft\Craft::t("Name"), "instructions" => \Craft\Craft::t("What this category group will be called in the CP."), "id" => "name", "name" => "name", "value" => $this->getAttribute((isset($context["categoryGroup"]) ? $context["categoryGroup"] : $this->getContext($context, "categoryGroup")), "name"), "errors" => $this->getAttribute((isset($context["categoryGroup"]) ? $context["categoryGroup"] : $this->getContext($context, "categoryGroup")), "getErrors", array(0 => "name"), "method"), "autofocus" => true, "required" => true, "translatable" => true));
        // line 43
        echo "

\t\t\t";
        // line 45
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Handle"), "instructions" => \Craft\Craft::t("How you’ll refer to this category group in the templates."), "id" => "handle", "class" => "code", "name" => "handle", "value" => $this->getAttribute((isset($context["categoryGroup"]) ? $context["categoryGroup"] : $this->getContext($context, "categoryGroup")), "handle"), "errors" => $this->getAttribute((isset($context["categoryGroup"]) ? $context["categoryGroup"] : $this->getContext($context, "categoryGroup")), "getErrors", array(0 => "handle"), "method"), "required" => true));
        // line 54
        echo "

\t\t\t<hr>

\t\t\t";
        // line 58
        echo $context["forms"]->getcheckboxField(array("label" => \Craft\Craft::t("Categories in this group have their own URLs"), "id" => "hasUrls", "name" => "hasUrls", "checked" => $this->getAttribute((isset($context["categoryGroup"]) ? $context["categoryGroup"] : $this->getContext($context, "categoryGroup")), "hasUrls"), "toggle" => "url-settings"));
        // line 64
        echo "

\t\t\t<div id=\"url-settings\" class=\"nested-fields";
        // line 66
        if ((!$this->getAttribute((isset($context["categoryGroup"]) ? $context["categoryGroup"] : $this->getContext($context, "categoryGroup")), "hasUrls"))) {
            echo " hidden";
        }
        echo "\">
\t\t\t\t";
        // line 67
        ob_start();
        // line 68
        echo "\t\t\t\t\t<table class=\"data fullwidth\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t";
        // line 70
        if ($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "isLocalized", array(), "method")) {
            // line 71
            echo "\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t";
        }
        // line 73
        echo "\t\t\t\t\t\t\t<th scope=\"col\">";
        echo twig_escape_filter($this->env, \Craft\Craft::t("Top-Level Categories"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t\t<th scope=\"col\">";
        // line 74
        echo twig_escape_filter($this->env, \Craft\Craft::t("Nested Categories"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t";
        // line 77
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "i18n"), "getSiteLocales", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 78
            echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t";
            // line 79
            if ($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "isLocalized", array(), "method")) {
                // line 80
                echo "\t\t\t\t\t\t\t\t\t\t<th class=\"thin nowrap\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "id"), "html", null, true);
                echo "</th>
\t\t\t\t\t\t\t\t\t";
            }
            // line 82
            echo "\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t";
            // line 83
            $context["value"] = (($this->getAttribute($this->getAttribute((isset($context["categoryGroup"]) ? $context["categoryGroup"] : null), "locales", array(), "any", false, true), $this->getAttribute((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "id"), array(), "array", true, true)) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["categoryGroup"]) ? $context["categoryGroup"] : $this->getContext($context, "categoryGroup")), "locales"), $this->getAttribute((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "id"), array(), "array"), "urlFormat")) : (null));
            // line 84
            echo "\t\t\t\t\t\t\t\t\t\t";
            echo $this->getAttribute($this, "urlFormatText", array(0 => (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), 1 => (isset($context["categoryGroup"]) ? $context["categoryGroup"] : $this->getContext($context, "categoryGroup")), 2 => "urlFormat", 3 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "method");
            echo "
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t";
            // line 87
            $context["value"] = (($this->getAttribute($this->getAttribute((isset($context["categoryGroup"]) ? $context["categoryGroup"] : null), "locales", array(), "any", false, true), $this->getAttribute((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "id"), array(), "array", true, true)) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["categoryGroup"]) ? $context["categoryGroup"] : $this->getContext($context, "categoryGroup")), "locales"), $this->getAttribute((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "id"), array(), "array"), "nestedUrlFormat")) : ("{parent.uri}/{slug}"));
            // line 88
            echo "\t\t\t\t\t\t\t\t\t\t";
            echo $this->getAttribute($this, "urlFormatText", array(0 => (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), 1 => (isset($context["categoryGroup"]) ? $context["categoryGroup"] : $this->getContext($context, "categoryGroup")), 2 => "nestedUrlFormat", 3 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "method");
            echo "
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t";
        $context["urlFormatInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 95
        echo "
\t\t\t\t";
        // line 96
        echo $context["forms"]->getfield(array("label" => \Craft\Craft::t("Category URL Formats"), "instructions" => \Craft\Craft::t("What the category URLs should look like. <code>{slug}</code> is required, but it can also include any category properties."), "required" => true, "errors" => $this->getAttribute((isset($context["categoryGroup"]) ? $context["categoryGroup"] : $this->getContext($context, "categoryGroup")), "getErrors", array(0 => "urlFormat"), "method")), (isset($context["urlFormatInput"]) ? $context["urlFormatInput"] : $this->getContext($context, "urlFormatInput")));
        // line 101
        echo "

\t\t\t\t";
        // line 103
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Category Template"), "instructions" => \Craft\Craft::t("The template to use when a category’s URL is requested."), "id" => "template", "class" => "ltr", "name" => "template", "value" => $this->getAttribute((isset($context["categoryGroup"]) ? $context["categoryGroup"] : $this->getContext($context, "categoryGroup")), "template"), "errors" => $this->getAttribute((isset($context["categoryGroup"]) ? $context["categoryGroup"] : $this->getContext($context, "categoryGroup")), "getErrors", array(0 => "template"), "method")));
        // line 111
        echo "
\t\t\t</div>

\t\t\t";
        // line 114
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Max Levels"), "instructions" => \Craft\Craft::t("The maximum number of levels this category group can have. Leave blank if you don’t care."), "id" => "maxLevels", "name" => "maxLevels", "value" => $this->getAttribute((isset($context["categoryGroup"]) ? $context["categoryGroup"] : $this->getContext($context, "categoryGroup")), "maxLevels"), "size" => 5, "errors" => $this->getAttribute((isset($context["categoryGroup"]) ? $context["categoryGroup"] : $this->getContext($context, "categoryGroup")), "getErrors", array(0 => "maxLevels"), "method")));
        // line 122
        echo "
\t\t</div>

\t\t<div id=\"categorygroup-fieldlayout\" class=\"hidden\">
\t\t\t";
        // line 126
        $this->env->loadTemplate("_includes/fieldlayoutdesigner")->display(array("fieldLayout" => $this->getAttribute((isset($context["categoryGroup"]) ? $context["categoryGroup"] : $this->getContext($context, "categoryGroup")), "getFieldLayout", array(), "method"), "customizableTabs" => false));
        // line 130
        echo "\t\t</div>

\t\t<hr>

\t\t<div class=\"buttons\">
\t\t\t<input type=\"submit\" class=\"btn submit\" value=\"";
        // line 135
        echo twig_escape_filter($this->env, \Craft\Craft::t("Save"), "html", null, true);
        echo "\">
\t\t</div>
\t</form>
";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 141
        if ((!$this->getAttribute((isset($context["categoryGroup"]) ? $context["categoryGroup"] : $this->getContext($context, "categoryGroup")), "handle"))) {
            // line 142
            ob_start();
            // line 143
            echo "\t\tnew Craft.HandleGenerator('#name', '#handle');

\t\t";
            // line 145
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "i18n"), "getSiteLocales", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 146
                echo "\t\t\t";
                if (((!$this->getAttribute($this->getAttribute((isset($context["categoryGroup"]) ? $context["categoryGroup"] : null), "locales", array(), "any", false, true), $this->getAttribute((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "id"), array(), "array", true, true)) || (!$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["categoryGroup"]) ? $context["categoryGroup"] : $this->getContext($context, "categoryGroup")), "locales"), $this->getAttribute((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "id"), array(), "array"), "urlFormat")))) {
                    // line 147
                    echo "\t\t\t\tnew Craft.EntryUrlFormatGenerator('#name', '#urlFormat-";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "id"), "html", null, true);
                    echo "', { suffix: '/{slug}' });
\t\t\t";
                }
                // line 149
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 150
            echo "\t";
            $context["js"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 151
            \Craft\craft()->templates->includeJs((isset($context["js"]) ? $context["js"] : $this->getContext($context, "js")));
        }
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function geturlFormatText($_locale = null, $_categoryGroup = null, $_name = null, $_value = null)
    {
        $context = $this->env->mergeGlobals(array(
            "locale" => $_locale,
            "categoryGroup" => $_categoryGroup,
            "name" => $_name,
            "value" => $_value,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 6
            echo "\t";
            $context["__internal_8adbd3100f97739c69228144bb6bbc1cd48ab4b4bda89e3df52b6d2b606b2358"] = $this->env->loadTemplate("_includes/forms");
            // line 7
            echo "\t";
            $context["errors"] = $this->getAttribute((isset($context["categoryGroup"]) ? $context["categoryGroup"] : $this->getContext($context, "categoryGroup")), "getErrors", array(0 => (((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")) . "-") . $this->getAttribute((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "id"))), "method");
            // line 8
            echo "
\t<div class=\"input";
            // line 9
            if ((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) {
                echo " errors";
            }
            echo "\">
\t\t";
            // line 10
            echo $context["__internal_8adbd3100f97739c69228144bb6bbc1cd48ab4b4bda89e3df52b6d2b606b2358"]->gettext(array("id" => (((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")) . "-") . $this->getAttribute((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "id")), "class" => "code ltr", "name" => ((((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")) . "[") . $this->getAttribute((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "id")) . "]"), "value" => ((((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) != "__home__")) ? ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) : (null)), "errors" => (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))));
            // line 16
            echo "
\t</div>

\t";
            // line 19
            echo $context["__internal_8adbd3100f97739c69228144bb6bbc1cd48ab4b4bda89e3df52b6d2b606b2358"]->geterrorList((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "settings/categories/_edit";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 19,  248 => 16,  246 => 10,  240 => 9,  237 => 8,  234 => 7,  231 => 6,  217 => 5,  211 => 151,  208 => 150,  202 => 149,  196 => 147,  193 => 146,  189 => 145,  185 => 143,  183 => 142,  181 => 141,  174 => 135,  167 => 130,  165 => 126,  159 => 122,  157 => 114,  152 => 111,  150 => 103,  146 => 101,  144 => 96,  141 => 95,  136 => 92,  125 => 88,  123 => 87,  116 => 84,  114 => 83,  111 => 82,  105 => 80,  103 => 79,  100 => 78,  96 => 77,  90 => 74,  85 => 73,  81 => 71,  79 => 70,  75 => 68,  73 => 67,  67 => 66,  63 => 64,  61 => 58,  55 => 54,  53 => 45,  49 => 43,  47 => 32,  43 => 30,  37 => 29,  32 => 26,  30 => 25,  28 => 23,  26 => 22,  24 => 3,);
    }
}
