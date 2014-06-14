<?php

/* sproutforms/entries/_index */
class __TwigTemplate_f3b46395b7fdd2fc8e869af89f1de1f906f8e275cb7ecf68a7078db93de380b9 extends Craft\BaseTemplate
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
        $context["entries"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "sproutforms"), "getAllEntries", array(0 => (isset($context["formId"]) ? $context["formId"] : $this->getContext($context, "formId"))), "method");
        // line 2
        $context["fields"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "sproutforms"), "getFields", array(0 => (isset($context["formId"]) ? $context["formId"] : $this->getContext($context, "formId"))), "method");
        // line 3
        echo "
";
        // line 4
        $context["yesterday"] = twig_date_modify_filter($this->env, (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now")), "-1 day");
        // line 5
        echo "
<div id=\"tab-entries\">

\t";
        // line 8
        if (twig_length_filter($this->env, (isset($context["entries"]) ? $context["entries"] : $this->getContext($context, "entries")))) {
            // line 9
            echo "\t
\t<div class=\"entries-container\">
\t\t<table id=\"entries\" class=\"results\">
\t\t\t<thead>
\t\t\t\t<th class=\"left-border\"><div></div></th>
\t\t\t\t<th class=\"date\"><div><h3>Date</h3></div></th>\t
\t\t\t\t<th class=\"padding\"><div></div></th>\t\t\t
\t\t\t\t";
            // line 16
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : $this->getContext($context, "fields")));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 17
                echo "\t\t\t\t<th><div><h3>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "name"), "html", null, true);
                echo "</h3></div></th>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "\t\t\t\t
\t\t\t\t<th class=\"thin delete\"><div></div></th>
\t\t\t</thead>\t\t
\t\t\t<tbody>\t\t\t\t
\t\t\t\t";
            // line 22
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entries"]) ? $context["entries"] : $this->getContext($context, "entries")));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 23
                echo "\t\t\t\t<tr data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "id"), "html", null, true);
                echo "\" data-name=\"entry from ";
                echo twig_escape_filter($this->env, \Craft\Craft::t(twig_date_format_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "dateCreated"), "F d, Y h:m A")), "html", null, true);
                echo "\" >
\t\t\t\t\t<td class=\"left-border\"><div></div></td>
\t\t\t\t\t<td class=\"date\">
\t\t\t\t\t\t<a href=\"";
                // line 26
                echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("sproutforms/entries/view/"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "id"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t";
                // line 27
                if ((twig_date_format_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "dateCreated"), "F d, Y") == $this->getAttribute((isset($context["now"]) ? $context["now"] : $this->getContext($context, "now")), "format", array(0 => "F d, Y"), "method"))) {
                    // line 28
                    echo "\t\t\t\t\t\t\t\t<strong>Today</strong>
\t\t\t\t\t\t\t\t";
                    // line 29
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "dateCreated"), "g:i A"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t";
                } elseif ((twig_date_format_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "dateCreated"), "F d, Y") == $this->getAttribute((isset($context["yesterday"]) ? $context["yesterday"] : $this->getContext($context, "yesterday")), "format", array(0 => "F d, Y"), "method"))) {
                    // line 31
                    echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<strong>Yesterday</strong>
\t\t\t\t\t\t\t\t";
                    // line 33
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "dateCreated"), "g:i A"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t";
                } else {
                    // line 35
                    echo "\t\t\t\t\t\t\t\t<strong>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "dateCreated"), "F d, Y"), "html", null, true);
                    echo "</strong>
\t\t\t\t\t\t\t\t";
                    // line 36
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "dateCreated"), "g:i A"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t";
                }
                // line 38
                echo "\t\t\t\t\t\t</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"padding\"></td>\t
\t\t\t\t\t";
                // line 41
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : $this->getContext($context, "fields")));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 42
                    echo "\t\t\t\t\t<td class=\"field\">
\t\t\t\t\t\t<a href=\"";
                    // line 43
                    echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("sproutforms/entries/view/"), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "id"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t";
                    // line 44
                    echo $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "sproutforms"), "getFieldEntry", array(0 => (isset($context["formId"]) ? $context["formId"] : $this->getContext($context, "formId")), 1 => (isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), 2 => (isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry"))), "method");
                    echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t</td>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "\t\t\t\t\t
\t\t\t\t\t<td class=\"thin delete\"><a class=\"delete icon\" title=\"";
                // line 48
                echo twig_escape_filter($this->env, \Craft\Craft::t("Delete"), "html", null, true);
                echo "\"></a></td>
\t\t\t\t</tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "\t\t\t</tbody>
\t\t</table>
\t</div>

\t";
        } else {
            // line 56
            echo "
\t<div class=\"no-entries\">

\t \t<h2>Publish your form and begin sharing!</h2>

\t \t<p>Looks like you have a form, but need to get the word out. To publish your form on your website, refer to the quick code snippets on the Publish tab, or to the docs for a more comprehensive overview of how to customize your forms.</p>

\t \t<div class=\"buttons\"> 
\t\t\t<a class=\"btn submit icon\" href=\"#\" onclick=\"jQuery('#tab-formPublish').click();return false;\" >Publish Your Form &raquo;</a>
\t\t</div>

\t</div>

\t";
        }
        // line 70
        echo "
</div>


";
        // line 74
        $context["js"] = ('' === $tmp = "\tnew Craft.AdminTable({
\t\ttableSelector: '#entries',
\t\tnoObjectsSelector: '#noentries',
\t\tdeleteAction: 'sproutForms/content/deleteContent'
\t});
") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 81
        \Craft\craft()->templates->includeJs((isset($context["js"]) ? $context["js"] : $this->getContext($context, "js")));
        // line 82
        echo "
";
        // line 83
        \Craft\craft()->templates->includeCssResource("sproutforms/css/jquery.scrollpane.css");
        // line 84
        \Craft\craft()->templates->includeCssResource("sproutforms/css/styles.css");
        // line 85
        echo "
";
        // line 86
        \Craft\craft()->templates->includeJsResource("sproutforms/js/jquery.jscrollpane.min.js");
        // line 87
        \Craft\craft()->templates->includeJsResource("sproutforms/js/jquery.mousewheel.js");
        // line 88
        \Craft\craft()->templates->includeJsResource("sproutforms/js/scripts.js");
    }

    public function getTemplateName()
    {
        return "sproutforms/entries/_index";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 88,  201 => 87,  199 => 86,  196 => 85,  194 => 84,  192 => 83,  189 => 82,  187 => 81,  180 => 74,  174 => 70,  158 => 56,  151 => 51,  142 => 48,  139 => 47,  129 => 44,  123 => 43,  120 => 42,  116 => 41,  111 => 38,  106 => 36,  101 => 35,  96 => 33,  92 => 31,  87 => 29,  82 => 27,  76 => 26,  67 => 23,  63 => 22,  57 => 18,  44 => 16,  23 => 3,  21 => 2,  19 => 1,  84 => 28,  81 => 62,  78 => 61,  75 => 60,  72 => 59,  70 => 58,  65 => 56,  60 => 53,  58 => 52,  56 => 29,  54 => 24,  51 => 21,  48 => 17,  46 => 18,  43 => 15,  41 => 14,  38 => 12,  35 => 9,  33 => 8,  30 => 7,  28 => 5,  26 => 4,  24 => 2,);
    }
}
