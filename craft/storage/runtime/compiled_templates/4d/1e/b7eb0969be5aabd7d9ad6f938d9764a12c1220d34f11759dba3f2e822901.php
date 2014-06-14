<?php

/* sproutforms */
class __TwigTemplate_4d1eb7eb0969be5aabd7d9ad6f938d9764a12c1220d34f11759dba3f2e822901 extends Craft\BaseTemplate
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
        // line 3
        \Craft\craft()->templates->includeJsResource("js/fields.js");
        // line 5
        ob_start();
        // line 6
        echo "
";
        // line 7
        $context["forms"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "sproutForms"), "allForms");
        // line 8
        echo "
";
        // line 9
        if (twig_length_filter($this->env, (isset($context["forms"]) ? $context["forms"] : $this->getContext($context, "forms")))) {
            // line 10
            echo "
<table class=\"data\" id=\"forms\">
\t<thead>
\t\t<th width=\"25%\">Form Name</th>
\t\t<th width=\"25%\">Handle</th>
\t\t<th width=\"45%\">Edit</th>
\t\t<td class=\"thin\"></td>
\t</thead>

\t<tbody>

\t";
            // line 21
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["forms"]) ? $context["forms"] : $this->getContext($context, "forms")));
            foreach ($context['_seq'] as $context["_key"] => $context["form"]) {
                // line 22
                echo "\t<tr data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id"), "html", null, true);
                echo "\" data-name=\"";
                echo twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name")), "html", null, true);
                echo "\" >
\t\t<td>
\t\t\t<a href=\"";
                // line 24
                echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("sproutforms/edit/"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id"), "html", null, true);
                echo "\">
\t\t\t\t<strong>";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), "html", null, true);
                echo "</strong>
\t\t\t</a>
\t\t</td>
\t\t<td>
\t\t\t<code>";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "handle"), "html", null, true);
                echo "</code>
\t\t</td>
\t\t<td>
\t\t\t<a href=\"";
                // line 32
                echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("sproutforms/edit/"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id"), "html", null, true);
                echo "#tab-entries\" class=\"soften\">
\t\t\t\tEntries
\t\t\t</a> • 
\t\t\t<a href=\"";
                // line 35
                echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("sproutforms/edit/"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id"), "html", null, true);
                echo "#tab-fields\" class=\"soften\">
\t\t\t\tFields
\t\t\t</a> • 
\t\t\t<a href=\"";
                // line 38
                echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("sproutforms/edit/"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id"), "html", null, true);
                echo "#tab-notifications\" class=\"soften\">
\t\t\t\tNotifications
\t\t\t</a> • 
\t\t\t<a href=\"";
                // line 41
                echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("sproutforms/edit/"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id"), "html", null, true);
                echo "#tab-settings\" class=\"soften\">
\t\t\t\tSettings
\t\t\t</a>
\t\t</td>
\t\t<td class=\"thin\"><a class=\"delete icon\" title=\"";
                // line 45
                echo twig_escape_filter($this->env, \Craft\Craft::t("Delete"), "html", null, true);
                echo "\"></a></td>
\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['form'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "\t
\t
\t</tbody>
</table>

<div class=\"buttons\">
\t<a class=\"btn submit add icon\" href=\"";
            // line 54
            echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("sproutforms/new#tab-settings"), "html", null, true);
            echo "\">New Form</a>
</div>

";
        } else {
            // line 58
            echo "   
<div style=\"width:40%;\">

\t<h2>Create your first Form</h2>

\t<p>Whether you need to collect information, leads, create a survey, poll, registrations for an event, or get digital signatures, Forms will help you get the information you need!</p>

\t<div class=\"buttons\">
\t\t<a class=\"btn submit add icon\" href=\"";
            // line 66
            echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("sproutforms/new#tab-settings"), "html", null, true);
            echo "\">Create a form</a>
\t</div>

</div>

";
        }
        // line 72
        echo "
";
        $context["body"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 76
        $context["js"] = ('' === $tmp = "\tnew Craft.AdminTable({
\t\ttableSelector: '#forms',
\t\tnoObjectsSelector: '#noforms',
\t\tdeleteFailMessage: 'All Fields and Entries must be deleted before a Form can be deleted',
\t\tdeleteAction: 'sproutForms/forms/deleteForm'
\t});
") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 84
        \Craft\craft()->templates->includeJs((isset($context["js"]) ? $context["js"] : $this->getContext($context, "js")));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "sproutforms";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 84,  164 => 76,  160 => 72,  151 => 66,  141 => 58,  134 => 54,  126 => 48,  117 => 45,  108 => 41,  100 => 38,  92 => 35,  84 => 32,  78 => 29,  71 => 25,  65 => 24,  57 => 22,  53 => 21,  40 => 10,  38 => 9,  35 => 8,  33 => 7,  30 => 6,  28 => 5,  26 => 3,  24 => 2,);
    }
}
