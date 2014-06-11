<?php

/* settings/categories/index */
class __TwigTemplate_a91868ef8adacf094e5d92ade564f76d8e9a659da0fe81eb148a0808861a269c extends Craft\BaseTemplate
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
        $context["title"] = \Craft\Craft::t("Category Groups");
        // line 4
        $context["crumbs"] = array(0 => array("label" => \Craft\Craft::t("Settings"), "url" => \Craft\UrlHelper::getUrl("settings")));
        // line 8
        $context["docsUrl"] = "http://buildwithcraft.com/docs/categories";
        // line 11
        ob_start();
        // line 12
        echo "\t<div id=\"nocategorygroups\"";
        if (twig_length_filter($this->env, (isset($context["categoryGroups"]) ? $context["categoryGroups"] : $this->getContext($context, "categoryGroups")))) {
            echo " class=\"hidden\"";
        }
        echo ">
\t\t<p>";
        // line 13
        echo twig_escape_filter($this->env, \Craft\Craft::t("No category groups exist yet."), "html", null, true);
        echo "</p>
\t</div>

\t";
        // line 16
        if (twig_length_filter($this->env, (isset($context["categoryGroups"]) ? $context["categoryGroups"] : $this->getContext($context, "categoryGroups")))) {
            // line 17
            echo "\t\t<table id=\"categorygroups\" class=\"data collapsible\">
\t\t\t<thead>
\t\t\t\t<th scope=\"col\">";
            // line 19
            echo twig_escape_filter($this->env, \Craft\Craft::t("Name"), "html", null, true);
            echo "</th>
\t\t\t\t<th scope=\"col\">";
            // line 20
            echo twig_escape_filter($this->env, \Craft\Craft::t("Handle"), "html", null, true);
            echo "</th>
\t\t\t\t<td></td>
\t\t\t\t<td class=\"thin\"></td>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
            // line 25
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categoryGroups"]) ? $context["categoryGroups"] : $this->getContext($context, "categoryGroups")));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 26
                echo "\t\t\t\t\t<tr data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "id"), "html", null, true);
                echo "\" data-name=\"";
                echo twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "name")), "html", null, true);
                echo "\">
\t\t\t\t\t\t<th scope=\"row\" data-title=\"";
                // line 27
                echo twig_escape_filter($this->env, \Craft\Craft::t("Name"), "html", null, true);
                echo "\"><a href=\"";
                echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl(("settings/categories/" . $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "name")), "html", null, true);
                echo "</a></th>
\t\t\t\t\t\t<td data-title=\"";
                // line 28
                echo twig_escape_filter($this->env, \Craft\Craft::t("Handle"), "html", null, true);
                echo "\"><code>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "handle"), "html", null, true);
                echo "</code></td>
\t\t\t\t\t\t<td><a href=\"";
                // line 29
                echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl(("categories/" . $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "handle"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Edit Categories"), "html", null, true);
                echo "</a></td>
\t\t\t\t\t\t<td class=\"thin\"><a class=\"delete icon\" title=\"";
                // line 30
                echo twig_escape_filter($this->env, \Craft\Craft::t("Delete"), "html", null, true);
                echo "\" role=\"button\"></a></td>
\t\t\t\t\t</tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "\t\t\t</tbody>
\t\t</table>
\t";
        }
        // line 36
        echo "
\t<div class=\"buttons\">
\t\t<a href=\"";
        // line 38
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("settings/categories/new"), "html", null, true);
        echo "\" class=\"btn submit add icon\">";
        echo twig_escape_filter($this->env, \Craft\Craft::t("New Category Group"), "html", null, true);
        echo "</a>
\t</div>
";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 43
        ob_start();
        // line 44
        echo "\tnew Craft.AdminTable({
\t\ttableSelector: '#categorygroups',
\t\tnoObjectsSelector: '#nocategorygroups',
\t\tdeleteAction: 'categories/deleteCategoryGroup',
\t\tconfirmDeleteMessage: '";
        // line 48
        echo twig_escape_filter($this->env, \Craft\Craft::t("Are you sure you want to delete “{name}” and all its categories?"), "html", null, true);
        echo "',
\t});
";
        $context["js"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 51
        \Craft\craft()->templates->includeJs((isset($context["js"]) ? $context["js"] : $this->getContext($context, "js")));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "settings/categories/index";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 51,  128 => 48,  122 => 44,  120 => 43,  112 => 38,  108 => 36,  103 => 33,  94 => 30,  88 => 29,  82 => 28,  74 => 27,  67 => 26,  63 => 25,  55 => 20,  51 => 19,  47 => 17,  45 => 16,  39 => 13,  32 => 12,  30 => 11,  28 => 8,  26 => 4,  24 => 2,);
    }
}
