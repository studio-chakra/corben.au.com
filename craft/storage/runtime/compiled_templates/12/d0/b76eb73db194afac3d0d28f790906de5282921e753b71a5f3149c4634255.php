<?php

/* settings/sections/_edit */
class __TwigTemplate_12d0b76eb73db194afac3d0d28f790906de5282921e753b71a5f3149c4634255 extends Craft\BaseTemplate
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
        $context["docsUrl"] = "http://buildwithcraft.com/docs/sections-and-entries#sections";
        // line 5
        $context["forms"] = $this->env->loadTemplate("_includes/forms");
        // line 89
        $context["__internal_d5ca7fe2ff13a1558ab05dd89866788bf1e5fcaad1bb9ec10b0683d1f710ef1a"] = $this;
        // line 91
        ob_start();
        // line 92
        echo "\t<form method=\"post\" accept-charset=\"UTF-8\" data-saveshortcut=\"1\">
\t\t<input type=\"hidden\" name=\"action\" value=\"sections/saveSection\">
\t\t<input type=\"hidden\" name=\"redirect\" value=\"settings/sections\">
\t\t";
        // line 95
        if ($this->getAttribute((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), "id")) {
            echo "<input type=\"hidden\" name=\"sectionId\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), "id"), "html", null, true);
            echo "\">";
        }
        // line 96
        echo "
\t\t";
        // line 97
        echo $context["forms"]->gettextField(array("first" => true, "label" => \Craft\Craft::t("Name"), "instructions" => \Craft\Craft::t("What this section will be called in the CP."), "id" => "name", "name" => "name", "value" => $this->getAttribute((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), "name"), "errors" => $this->getAttribute((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), "getErrors", array(0 => "name"), "method"), "autofocus" => true, "required" => true, "translatable" => true));
        // line 108
        echo "

\t\t";
        // line 110
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Handle"), "instructions" => \Craft\Craft::t("How you’ll refer to this section in the templates."), "id" => "handle", "class" => "code", "name" => "handle", "value" => $this->getAttribute((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), "handle"), "errors" => $this->getAttribute((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), "getErrors", array(0 => "handle"), "method"), "required" => true));
        // line 119
        echo "

\t\t";
        // line 121
        if ($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "isLocalized", array(), "method")) {
            // line 122
            echo "\t\t\t";
            ob_start();
            // line 123
            echo "\t\t\t\t<table class=\"data\" style=\"width: auto;\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t<th scope=\"col\">";
            // line 127
            echo twig_escape_filter($this->env, \Craft\Craft::t("Locale"), "html", null, true);
            echo "</th>
\t\t\t\t\t\t\t<th scope=\"col\">";
            // line 128
            echo twig_escape_filter($this->env, \Craft\Craft::t("Default Status"), "html", null, true);
            echo "</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
            // line 132
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "i18n"), "getSiteLocales", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 133
                echo "\t\t\t\t\t\t\t";
                $context["localeSelected"] = ((isset($context["brandNewSection"]) ? $context["brandNewSection"] : $this->getContext($context, "brandNewSection")) || $this->getAttribute($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "locales", array(), "any", false, true), $this->getAttribute((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "id"), array(), "array", true, true));
                // line 134
                echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
                // line 136
                echo $context["forms"]->getcheckbox(array("id" => ("locale-" . $this->getAttribute((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "id")), "name" => "locales[]", "value" => $this->getAttribute((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "id"), "checked" => (isset($context["localeSelected"]) ? $context["localeSelected"] : $this->getContext($context, "localeSelected")), "toggle" => (".for-locale-" . $this->getAttribute((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "id"))));
                // line 142
                echo "
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td><label for=\"locale-";
                // line 144
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "name"), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "id"), "html", null, true);
                echo ")</label></td>
\t\t\t\t\t\t\t\t<td class=\"centeralign\">
\t\t\t\t\t\t\t\t\t<div class=\"for-locale-";
                // line 146
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "id"), "html", null, true);
                if ((!(isset($context["localeSelected"]) ? $context["localeSelected"] : $this->getContext($context, "localeSelected")))) {
                    echo " hidden";
                }
                echo "\">
\t\t\t\t\t\t\t\t\t\t";
                // line 147
                echo $context["forms"]->getlightswitch(array("name" => (("defaultLocaleStatuses[" . $this->getAttribute((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "id")) . "]"), "on" => (((isset($context["brandNewSection"]) ? $context["brandNewSection"] : $this->getContext($context, "brandNewSection")) || (!$this->getAttribute($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "locales", array(), "any", false, true), $this->getAttribute((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "id"), array(), "array", true, true))) || $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), "locales"), $this->getAttribute((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "id"), array(), "array"), "enabledByDefault"))));
                // line 150
                echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 155
            echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t";
            $context["localesInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 158
            echo "
\t\t\t";
            // line 159
            echo $context["forms"]->getfield(array("label" => \Craft\Craft::t("Which locales should entries in this section target?")), (isset($context["localesInput"]) ? $context["localesInput"] : $this->getContext($context, "localesInput")));
            // line 161
            echo "
\t\t";
        }
        // line 163
        echo "
\t\t";
        // line 164
        echo $context["forms"]->getselectField(array("label" => \Craft\Craft::t("Section Type"), "instructions" => (\Craft\Craft::t("What type of section is this?") . (($this->getAttribute((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), "id")) ? ((("<br><span class=\"error\">" . \Craft\Craft::t("Careful—changing this may result in data loss.")) . "</span>")) : (""))), "id" => "type", "name" => "type", "options" => (isset($context["typeOptions"]) ? $context["typeOptions"] : $this->getContext($context, "typeOptions")), "value" => $this->getAttribute((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), "type"), "toggle" => true, "targetPrefix" => "type-", "errors" => $this->getAttribute((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), "getErrors", array(0 => "type"), "method")));
        // line 174
        echo "

\t\t<hr>

\t\t";
        // line 178
        if ((isset($context["canBeSingle"]) ? $context["canBeSingle"] : $this->getContext($context, "canBeSingle"))) {
            // line 179
            echo "\t\t\t<div id=\"type-single\"";
            if (($this->getAttribute((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), "type") != "single")) {
                echo " class=\"hidden\"";
            }
            echo ">

\t\t\t\t";
            // line 181
            if ((isset($context["canBeHomepage"]) ? $context["canBeHomepage"] : $this->getContext($context, "canBeHomepage"))) {
                // line 182
                echo "\t\t\t\t\t";
                echo $context["forms"]->getcheckboxField(array("label" => \Craft\Craft::t("This is for the homepage"), "id" => "single-homepage", "name" => "types[single][homepage]", "checked" => $this->getAttribute((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), "isHomepage", array(), "method"), "reverseToggle" => "single-uri-container"));
                // line 188
                echo "
\t\t\t\t";
            }
            // line 190
            echo "
\t\t\t\t<div id=\"single-uri-container\"";
            // line 191
            if ($this->getAttribute((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), "isHomepage", array(), "method")) {
                echo " class=\"hidden\"";
            }
            echo ">
\t\t\t\t\t";
            // line 192
            echo $context["forms"]->getfield(array("label" => \Craft\Craft::t("URI"), "instructions" => \Craft\Craft::t("What the entry URI should be."), "required" => true, "errors" => $this->getAttribute((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), "getErrors", array(0 => "urlFormat"), "method")), $context["__internal_d5ca7fe2ff13a1558ab05dd89866788bf1e5fcaad1bb9ec10b0683d1f710ef1a"]->geturlFormatInput("single", (isset($context["brandNewSection"]) ? $context["brandNewSection"] : $this->getContext($context, "brandNewSection")), (isset($context["section"]) ? $context["section"] : $this->getContext($context, "section"))));
            // line 197
            echo "
\t\t\t\t</div>

\t\t\t\t";
            // line 200
            echo $context["__internal_d5ca7fe2ff13a1558ab05dd89866788bf1e5fcaad1bb9ec10b0683d1f710ef1a"]->gettemplateField("single", (isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")));
            echo "

\t\t\t</div>
\t\t";
        }
        // line 204
        echo "
\t\t";
        // line 205
        $context["urlFormatParams"] = array("label" => \Craft\Craft::t("Entry URL Format"), "instructions" => \Craft\Craft::t("What the entry URLs should look like. You can include tags that output entry properties, such as {ex1} or {ex2}.", array("ex1" => "<code>{slug}</code>", "ex2" => "<code>{postDate|date(\"Y\")}</code>")), "required" => true, "errors" => $this->getAttribute((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), "getErrors", array(0 => "urlFormat"), "method"));
        // line 211
        echo "
\t\t";
        // line 212
        if ((isset($context["canBeChannel"]) ? $context["canBeChannel"] : $this->getContext($context, "canBeChannel"))) {
            // line 213
            echo "\t\t\t<div id=\"type-channel\"";
            if (($this->getAttribute((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), "type") != "channel")) {
                echo " class=\"hidden\"";
            }
            echo ">

\t\t\t\t";
            // line 215
            echo $context["__internal_d5ca7fe2ff13a1558ab05dd89866788bf1e5fcaad1bb9ec10b0683d1f710ef1a"]->gethasUrlsField("channel", (isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")));
            echo "

\t\t\t\t<div id=\"channel-url-settings\" class=\"nested-fields";
            // line 217
            if ((!$this->getAttribute((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), "hasUrls"))) {
                echo " hidden";
            }
            echo "\">
\t\t\t\t\t";
            // line 218
            echo $context["forms"]->getfield((isset($context["urlFormatParams"]) ? $context["urlFormatParams"] : $this->getContext($context, "urlFormatParams")), $context["__internal_d5ca7fe2ff13a1558ab05dd89866788bf1e5fcaad1bb9ec10b0683d1f710ef1a"]->geturlFormatInput("channel", (isset($context["brandNewSection"]) ? $context["brandNewSection"] : $this->getContext($context, "brandNewSection")), (isset($context["section"]) ? $context["section"] : $this->getContext($context, "section"))));
            echo "

\t\t\t\t\t";
            // line 220
            echo $context["__internal_d5ca7fe2ff13a1558ab05dd89866788bf1e5fcaad1bb9ec10b0683d1f710ef1a"]->gettemplateField("channel", (isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")));
            echo "
\t\t\t\t</div>

\t\t\t</div>
\t\t";
        }
        // line 225
        echo "
\t\t";
        // line 226
        if ((isset($context["canBeStructure"]) ? $context["canBeStructure"] : $this->getContext($context, "canBeStructure"))) {
            // line 227
            echo "\t\t\t<div id=\"type-structure\"";
            if (($this->getAttribute((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), "type") != "structure")) {
                echo " class=\"hidden\"";
            }
            echo ">

\t\t\t\t";
            // line 229
            echo $context["__internal_d5ca7fe2ff13a1558ab05dd89866788bf1e5fcaad1bb9ec10b0683d1f710ef1a"]->gethasUrlsField("structure", (isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")));
            echo "

\t\t\t\t<div id=\"structure-url-settings\" class=\"nested-fields";
            // line 231
            if ((!$this->getAttribute((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), "hasUrls"))) {
                echo " hidden";
            }
            echo "\">
\t\t\t\t\t";
            // line 232
            echo $context["forms"]->getfield((isset($context["urlFormatParams"]) ? $context["urlFormatParams"] : $this->getContext($context, "urlFormatParams")), $context["__internal_d5ca7fe2ff13a1558ab05dd89866788bf1e5fcaad1bb9ec10b0683d1f710ef1a"]->geturlFormatInput("structure", (isset($context["brandNewSection"]) ? $context["brandNewSection"] : $this->getContext($context, "brandNewSection")), (isset($context["section"]) ? $context["section"] : $this->getContext($context, "section"))));
            echo "

\t\t\t\t\t";
            // line 234
            echo $context["__internal_d5ca7fe2ff13a1558ab05dd89866788bf1e5fcaad1bb9ec10b0683d1f710ef1a"]->gettemplateField("structure", (isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")));
            echo "
\t\t\t\t</div>

\t\t\t\t";
            // line 237
            echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Max Levels"), "instructions" => \Craft\Craft::t("The maximum number of levels this section can have. Leave blank if you don’t care."), "id" => "structure-maxLevels", "name" => "types[structure][maxLevels]", "value" => $this->getAttribute((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), "maxLevels"), "size" => 5, "errors" => $this->getAttribute((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), "getErrors", array(0 => "maxLevels"), "method")));
            // line 245
            echo "

\t\t\t</div>
\t\t";
        }
        // line 249
        echo "
\t\t<hr>

\t\t<div class=\"buttons\">
\t\t\t<input type=\"submit\" class=\"btn submit\" value=\"";
        // line 253
        echo twig_escape_filter($this->env, \Craft\Craft::t("Save"), "html", null, true);
        echo "\">
\t\t</div>
\t</form>
";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 259
        ob_start();
        // line 260
        echo "\t";
        if ((!$this->getAttribute((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), "handle"))) {
            echo "new Craft.HandleGenerator('#name', '#handle');";
        }
        // line 261
        echo "
\t";
        // line 262
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "i18n"), "getSiteLocales", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 263
            echo "\t\t";
            if (((!$this->getAttribute($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "locales", array(), "any", false, true), $this->getAttribute((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "id"), array(), "array", true, true)) || (!$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), "locales"), $this->getAttribute((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "id"), array(), "array"), "urlFormat")))) {
                // line 264
                echo "\t\t\tnew Craft.EntryUrlFormatGenerator('#name', '#single-urlFormat-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "id"), "html", null, true);
                echo "');
\t\t\tnew Craft.EntryUrlFormatGenerator('#name', '#channel-urlFormat-";
                // line 265
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "id"), "html", null, true);
                echo "',   { suffix: '/{slug}' });
\t\t\tnew Craft.EntryUrlFormatGenerator('#name', '#structure-urlFormat-";
                // line 266
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "id"), "html", null, true);
                echo "', { suffix: '/{slug}' });
\t\t";
            }
            // line 268
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 269
        echo "
\t";
        // line 270
        if ((isset($context["brandNewSection"]) ? $context["brandNewSection"] : $this->getContext($context, "brandNewSection"))) {
            // line 271
            echo "\t\tnew Craft.EntryUrlFormatGenerator('#name', '#single-template');
\t\tnew Craft.EntryUrlFormatGenerator('#name', '#channel-template',   { suffix: '/_entry' });
\t\tnew Craft.EntryUrlFormatGenerator('#name', '#structure-template', { suffix: '/_entry' });
\t";
        }
        $context["js"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 276
        \Craft\craft()->templates->includeJs((isset($context["js"]) ? $context["js"] : $this->getContext($context, "js")));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function geturlFormatText($_sectionType = null, $_locale = null, $_section = null, $_name = null, $_value = null)
    {
        $context = $this->env->mergeGlobals(array(
            "sectionType" => $_sectionType,
            "locale" => $_locale,
            "section" => $_section,
            "name" => $_name,
            "value" => $_value,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 8
            echo "\t";
            $context["__internal_fed32dacc0e92d7cc1a2ddd6e34d7276901f3e83e12875e864c902bd8de8fe9d"] = $this->env->loadTemplate("_includes/forms");
            // line 9
            echo "\t";
            $context["errors"] = $this->getAttribute((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), "getErrors", array(0 => (((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")) . "-") . $this->getAttribute((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "id"))), "method");
            // line 10
            echo "
\t<div class=\"input";
            // line 11
            if ((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) {
                echo " errors";
            }
            echo "\">
\t\t";
            // line 12
            echo $context["__internal_fed32dacc0e92d7cc1a2ddd6e34d7276901f3e83e12875e864c902bd8de8fe9d"]->gettext(array("id" => (((((isset($context["sectionType"]) ? $context["sectionType"] : $this->getContext($context, "sectionType")) . "-") . (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))) . "-") . $this->getAttribute((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "id")), "class" => "code ltr", "name" => (((((("types[" . (isset($context["sectionType"]) ? $context["sectionType"] : $this->getContext($context, "sectionType"))) . "][") . (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))) . "][") . $this->getAttribute((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "id")) . "]"), "value" => ((((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) != "__home__")) ? ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) : (null)), "errors" => (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))));
            // line 18
            echo "
\t</div>

\t";
            // line 21
            echo $context["__internal_fed32dacc0e92d7cc1a2ddd6e34d7276901f3e83e12875e864c902bd8de8fe9d"]->geterrorList((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 24
    public function geturlFormatInput($_sectionType = null, $_brandNewSection = null, $_section = null)
    {
        $context = $this->env->mergeGlobals(array(
            "sectionType" => $_sectionType,
            "brandNewSection" => $_brandNewSection,
            "section" => $_section,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 25
            echo "\t";
            if (($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "isLocalized", array(), "method") || ((isset($context["sectionType"]) ? $context["sectionType"] : $this->getContext($context, "sectionType")) == "structure"))) {
                // line 26
                echo "\t\t<table class=\"data fullwidth\">
\t\t\t";
                // line 27
                if (((isset($context["sectionType"]) ? $context["sectionType"] : $this->getContext($context, "sectionType")) == "structure")) {
                    // line 28
                    echo "\t\t\t\t<thead>
\t\t\t\t\t";
                    // line 29
                    if ($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "isLocalized", array(), "method")) {
                        // line 30
                        echo "\t\t\t\t\t\t<th></th>
\t\t\t\t\t";
                    }
                    // line 32
                    echo "\t\t\t\t\t<th scope=\"col\">";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Top-Level Entries"), "html", null, true);
                    echo "</th>
\t\t\t\t\t<th scope=\"col\">";
                    // line 33
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Nested Entries"), "html", null, true);
                    echo "</th>
\t\t\t\t</thead>
\t\t\t";
                }
                // line 36
                echo "\t\t\t<tbody>
\t\t\t\t";
                // line 37
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "i18n"), "getSiteLocales", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                    // line 38
                    echo "\t\t\t\t\t<tr class=\"for-locale-";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "id"), "html", null, true);
                    if ((($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "isLocalized", array(), "method") && (!(isset($context["brandNewSection"]) ? $context["brandNewSection"] : $this->getContext($context, "brandNewSection")))) && (!$this->getAttribute($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "locales", array(), "any", false, true), $this->getAttribute((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "id"), array(), "array", true, true)))) {
                        echo " hidden";
                    }
                    echo "\">
\t\t\t\t\t\t";
                    // line 39
                    if ($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "isLocalized", array(), "method")) {
                        // line 40
                        echo "\t\t\t\t\t\t\t<th class=\"thin nowrap\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "id"), "html", null, true);
                        echo "</th>
\t\t\t\t\t\t";
                    }
                    // line 42
                    echo "\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
                    // line 43
                    $context["value"] = ((((($this->getAttribute((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), "type") == (isset($context["sectionType"]) ? $context["sectionType"] : $this->getContext($context, "sectionType"))) || ((isset($context["sectionType"]) ? $context["sectionType"] : $this->getContext($context, "sectionType")) != "single")) && $this->getAttribute($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "locales", array(), "any", false, true), $this->getAttribute((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "id"), array(), "array", true, true))) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), "locales"), $this->getAttribute((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "id"), array(), "array"), "urlFormat")) : (null));
                    // line 44
                    echo "\t\t\t\t\t\t\t";
                    echo $this->getAttribute($this, "urlFormatText", array(0 => (isset($context["sectionType"]) ? $context["sectionType"] : $this->getContext($context, "sectionType")), 1 => (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), 2 => (isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), 3 => "urlFormat", 4 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "method");
                    echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
                    // line 46
                    if (((isset($context["sectionType"]) ? $context["sectionType"] : $this->getContext($context, "sectionType")) == "structure")) {
                        // line 47
                        echo "\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
                        // line 48
                        $context["value"] = (((($this->getAttribute((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), "type") == "structure") && $this->getAttribute($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "locales", array(), "any", false, true), $this->getAttribute((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "id"), array(), "array", true, true))) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), "locales"), $this->getAttribute((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "id"), array(), "array"), "nestedUrlFormat")) : ("{parent.uri}/{slug}"));
                        // line 49
                        echo "\t\t\t\t\t\t\t\t";
                        echo $this->getAttribute($this, "urlFormatText", array(0 => (isset($context["sectionType"]) ? $context["sectionType"] : $this->getContext($context, "sectionType")), 1 => (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), 2 => (isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), 3 => "nestedUrlFormat", 4 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "method");
                        echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
                    }
                    // line 52
                    echo "\t\t\t\t\t</tr>
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "\t\t\t</tbody>
\t\t</table>
\t";
            } else {
                // line 57
                echo "\t\t";
                $context["locale"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "i18n"), "getPrimarySiteLocale", array(), "method");
                // line 58
                echo "\t\t";
                $context["value"] = ((((($this->getAttribute((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), "type") == (isset($context["sectionType"]) ? $context["sectionType"] : $this->getContext($context, "sectionType"))) || ((isset($context["sectionType"]) ? $context["sectionType"] : $this->getContext($context, "sectionType")) != "single")) && $this->getAttribute($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "locales", array(), "any", false, true), $this->getAttribute((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "id"), array(), "array", true, true))) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), "locales"), $this->getAttribute((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "id"), array(), "array"), "urlFormat")) : (null));
                // line 59
                echo "\t\t";
                echo $this->getAttribute($this, "urlFormatText", array(0 => (isset($context["sectionType"]) ? $context["sectionType"] : $this->getContext($context, "sectionType")), 1 => (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), 2 => (isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), 3 => "urlFormat", 4 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "method");
                echo "
\t";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 63
    public function gethasUrlsField($_sectionType = null, $_section = null)
    {
        $context = $this->env->mergeGlobals(array(
            "sectionType" => $_sectionType,
            "section" => $_section,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 64
            echo "\t";
            $context["__internal_cd180c569933d14b543db33a144ce6b1d1a7e1f16449683c91bce037578bd108"] = $this->env->loadTemplate("_includes/forms");
            // line 65
            echo "
\t";
            // line 66
            echo $context["__internal_cd180c569933d14b543db33a144ce6b1d1a7e1f16449683c91bce037578bd108"]->getcheckboxField(array("label" => \Craft\Craft::t("Entries in this section have their own URLs"), "id" => ((isset($context["sectionType"]) ? $context["sectionType"] : $this->getContext($context, "sectionType")) . "-hasUrls"), "name" => (("types[" . (isset($context["sectionType"]) ? $context["sectionType"] : $this->getContext($context, "sectionType"))) . "][hasUrls]"), "checked" => $this->getAttribute((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), "hasUrls"), "toggle" => ((isset($context["sectionType"]) ? $context["sectionType"] : $this->getContext($context, "sectionType")) . "-url-settings")));
            // line 72
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 75
    public function gettemplateField($_sectionType = null, $_section = null)
    {
        $context = $this->env->mergeGlobals(array(
            "sectionType" => $_sectionType,
            "section" => $_section,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 76
            echo "\t";
            $context["__internal_cdfc2c8430cc8f6dca7153b7df0873beee0ad209a5c0885fe50567632b10b703"] = $this->env->loadTemplate("_includes/forms");
            // line 77
            echo "
\t";
            // line 78
            echo $context["__internal_cdfc2c8430cc8f6dca7153b7df0873beee0ad209a5c0885fe50567632b10b703"]->gettextField(array("label" => \Craft\Craft::t("Entry Template"), "instructions" => ((((isset($context["sectionType"]) ? $context["sectionType"] : $this->getContext($context, "sectionType")) == "single")) ? (\Craft\Craft::t("The template to use when the entry’s URL is requested.")) : (\Craft\Craft::t("The template to use when an entry’s URL is requested."))), "id" => ((isset($context["sectionType"]) ? $context["sectionType"] : $this->getContext($context, "sectionType")) . "-template"), "class" => "ltr", "name" => (("types[" . (isset($context["sectionType"]) ? $context["sectionType"] : $this->getContext($context, "sectionType"))) . "][template]"), "value" => $this->getAttribute((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), "template"), "errors" => $this->getAttribute((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), "getErrors", array(0 => "template"), "method")));
            // line 86
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
        return "settings/sections/_edit";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  568 => 86,  566 => 78,  563 => 77,  560 => 76,  548 => 75,  536 => 72,  534 => 66,  531 => 65,  528 => 64,  516 => 63,  501 => 59,  498 => 58,  495 => 57,  490 => 54,  483 => 52,  476 => 49,  474 => 48,  471 => 47,  469 => 46,  463 => 44,  461 => 43,  458 => 42,  452 => 40,  450 => 39,  442 => 38,  438 => 37,  435 => 36,  429 => 33,  424 => 32,  420 => 30,  418 => 29,  415 => 28,  413 => 27,  410 => 26,  407 => 25,  394 => 24,  381 => 21,  376 => 18,  374 => 12,  368 => 11,  365 => 10,  362 => 9,  359 => 8,  344 => 7,  339 => 276,  332 => 271,  330 => 270,  327 => 269,  321 => 268,  316 => 266,  312 => 265,  307 => 264,  304 => 263,  300 => 262,  297 => 261,  292 => 260,  290 => 259,  283 => 253,  277 => 249,  271 => 245,  269 => 237,  263 => 234,  258 => 232,  252 => 231,  247 => 229,  239 => 227,  237 => 226,  234 => 225,  226 => 220,  221 => 218,  215 => 217,  210 => 215,  202 => 213,  200 => 212,  197 => 211,  195 => 205,  192 => 204,  185 => 200,  180 => 197,  178 => 192,  172 => 191,  169 => 190,  165 => 188,  162 => 182,  160 => 181,  152 => 179,  150 => 178,  144 => 174,  142 => 164,  139 => 163,  135 => 161,  133 => 159,  130 => 158,  125 => 155,  115 => 150,  113 => 147,  106 => 146,  97 => 144,  93 => 142,  91 => 136,  87 => 134,  84 => 133,  80 => 132,  73 => 128,  69 => 127,  63 => 123,  60 => 122,  58 => 121,  54 => 119,  52 => 110,  48 => 108,  46 => 97,  43 => 96,  37 => 95,  32 => 92,  30 => 91,  28 => 89,  26 => 5,  24 => 3,);
    }
}
