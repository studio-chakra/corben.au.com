<?php

/* sproutforms/fields/_index */
class __TwigTemplate_7b7b87d2087a57950d1f9a966da2c2601db227d44811fe2846611e9c7ab1a1b1 extends Craft\BaseTemplate
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
        echo "<div id=\"tab-fields\" class=\"hidden\">
\t
\t<p>Add any number of Fields to your form.  Might have to manage this on a separate top level 
\ttab to make saving easier.</p>
\t
\t";
        // line 6
        $context["fields"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "sproutforms"), "getFields", array(0 => (isset($context["formId"]) ? $context["formId"] : $this->getContext($context, "formId"))), "method");
        // line 7
        echo "\t";
        $context["sortable"] = (twig_length_filter($this->env, (isset($context["fields"]) ? $context["fields"] : $this->getContext($context, "fields"))) > 1);
        // line 8
        echo "
\t<table id=\"fields\" class=\"data collapsible\">
\t\t<thead>
\t\t\t<th scope=\"col\">";
        // line 11
        echo twig_escape_filter($this->env, \Craft\Craft::t("Name"), "html", null, true);
        echo "</th>
\t\t\t<th scope=\"col\">";
        // line 12
        echo twig_escape_filter($this->env, \Craft\Craft::t("Handle"), "html", null, true);
        echo "</th>
\t\t\t<th scope=\"col\">";
        // line 13
        echo twig_escape_filter($this->env, \Craft\Craft::t("Type"), "html", null, true);
        echo "</th>
\t\t\t";
        // line 14
        if ((isset($context["sortable"]) ? $context["sortable"] : $this->getContext($context, "sortable"))) {
            echo "<td class=\"thin\"></td>";
        }
        // line 15
        echo "\t\t\t<td class=\"thin\"></td>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : $this->getContext($context, "fields")));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 19
            echo "\t\t\t
\t\t\t\t";
            // line 20
            $context["required"] = twig_in_filter("required", $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "validation"));
            // line 21
            echo "\t\t\t\t
\t\t\t\t<tr data-id=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "id"), "html", null, true);
            echo "\" data-name=\"";
            echo twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "name")), "html", null, true);
            echo "\">
\t\t\t\t\t<th scope=\"row\" data-title=\"\">
\t\t\t\t\t\t<a href=\"";
            // line 24
            echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl(("sproutforms/fields/edit/" . $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "name"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t";
            // line 25
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                echo "<span class=\"required\"></span>";
            }
            // line 26
            echo "\t\t\t\t\t</th>
\t\t\t\t\t<td data-title=\"";
            // line 27
            echo twig_escape_filter($this->env, \Craft\Craft::t("Handle"), "html", null, true);
            echo "\"><code>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "handle"), "html", null, true);
            echo "</code></td>
\t\t\t\t\t<td data-title=\"";
            // line 28
            echo twig_escape_filter($this->env, \Craft\Craft::t("Type"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "type")) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "type")) : (\Craft\Craft::t("n/a"))), "html", null, true);
            echo "</td>
\t\t\t\t\t";
            // line 29
            if ((isset($context["sortable"]) ? $context["sortable"] : $this->getContext($context, "sortable"))) {
                echo "<td class=\"thin\"><a class=\"move icon\" title=\"";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Reorder"), "html", null, true);
                echo "\" role=\"button\"></a></td>";
            }
            // line 30
            echo "\t\t\t\t\t<td class=\"thin\"><a class=\"delete icon\" title=\"";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Delete"), "html", null, true);
            echo "\"></a></td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t\t</tbody>
\t</table>
\t<div class=\"buttons\">
\t\t<a href=\"";
        // line 36
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl(("sproutforms/fields/new?formId=" . (isset($context["formId"]) ? $context["formId"] : $this->getContext($context, "formId")))), "html", null, true);
        echo "\" class=\"submit btn add icon\">New Field</a>
\t</div>
</div>

";
        // line 40
        $context["js"] = ('' === $tmp = "\tnew Craft.AdminTable({
\t\ttableSelector: '#fields',
\t\tnoObjectsSelector: '#nofields',
\t\tsortable: true,
\t\tdeleteAction: 'sproutForms/fields/deleteField',\t\t
\t\treorderAction: 'sproutForms/fields/reorderFields',
\t});
") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 49
        \Craft\craft()->templates->includeJs((isset($context["js"]) ? $context["js"] : $this->getContext($context, "js")));
    }

    public function getTemplateName()
    {
        return "sproutforms/fields/_index";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 49,  122 => 36,  117 => 33,  107 => 30,  95 => 28,  89 => 27,  86 => 26,  69 => 22,  66 => 21,  64 => 20,  61 => 19,  52 => 15,  40 => 12,  36 => 11,  31 => 8,  203 => 88,  201 => 87,  199 => 86,  196 => 85,  194 => 84,  192 => 83,  189 => 82,  187 => 81,  180 => 74,  174 => 70,  158 => 56,  151 => 51,  142 => 48,  139 => 47,  129 => 40,  123 => 43,  120 => 42,  116 => 41,  111 => 38,  106 => 36,  101 => 29,  96 => 33,  92 => 31,  87 => 29,  82 => 25,  76 => 24,  67 => 23,  63 => 22,  57 => 18,  44 => 13,  23 => 3,  21 => 2,  19 => 1,  84 => 28,  81 => 62,  78 => 61,  75 => 60,  72 => 59,  70 => 58,  65 => 56,  60 => 53,  58 => 52,  56 => 29,  54 => 24,  51 => 21,  48 => 14,  46 => 18,  43 => 15,  41 => 14,  38 => 12,  35 => 9,  33 => 8,  30 => 7,  28 => 7,  26 => 6,  24 => 2,);
    }
}
