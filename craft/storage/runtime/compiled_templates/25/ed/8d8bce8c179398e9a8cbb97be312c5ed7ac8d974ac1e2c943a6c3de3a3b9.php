<?php

/* _elements/categoryindex */
class __TwigTemplate_25ed8d8bce8c179398e9a8cbb97be312c5ed7ac8d974ac1e2c943a6c3de3a3b9 extends Craft\BaseTemplate
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
        $context["__internal_b9fa0a909d54dd7050e176f2588f74b8fbe841fbce3defcc599419f621207445"] = $this->env->loadTemplate("_includes/forms");
        // line 2
        echo "
<div class=\"nocats light";
        // line 3
        if ((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements"))) {
            echo " hidden";
        }
        echo "\">
\t<p>";
        // line 4
        echo twig_escape_filter($this->env, \Craft\Craft::t("No categories exist yet."), "html", null, true);
        echo "</p>
</div>

";
        // line 7
        $this->env->loadTemplate("_elements/categoryindex", "1269372416")->display(array("context" => (isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "elements" => (isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "collapsedElementIds" => (isset($context["collapsedElementIds"]) ? $context["collapsedElementIds"] : $this->getContext($context, "collapsedElementIds")), "structure" => (isset($context["structure"]) ? $context["structure"] : $this->getContext($context, "structure")), "sortable" => true));
        // line 21
        echo "
<form class=\"add-category-form\" data-group-id=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["groupId"]) ? $context["groupId"] : $this->getContext($context, "groupId")), "html", null, true);
        echo "\">
\t<div class=\"texticon add icon\">
\t\t";
        // line 24
        echo $context["__internal_b9fa0a909d54dd7050e176f2588f74b8fbe841fbce3defcc599419f621207445"]->gettext(array("placeholder" => \Craft\Craft::t("Add a category")));
        // line 26
        echo "
\t\t<div class=\"spinner hidden\"></div>
\t</div>
\t<input type=\"submit\" class=\"btn submit\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, \Craft\Craft::t("Add"), "html", null, true);
        echo "\">
</form>
";
    }

    public function getTemplateName()
    {
        return "_elements/categoryindex";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 29,  48 => 26,  46 => 24,  41 => 22,  38 => 21,  36 => 7,  30 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}


/* _elements/categoryindex */
class __TwigTemplate_25ed8d8bce8c179398e9a8cbb97be312c5ed7ac8d974ac1e2c943a6c3de3a3b9_1269372416 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_elements/structure");

        $this->blocks = array(
            'element' => array($this, 'block_element'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_elements/structure";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_element($context, array $blocks = array())
    {
        // line 16
        echo "\t\t";
        $this->displayParentBlock("element", $context, $blocks);
        echo "
\t\t<a class=\"delete icon\" title=\"";
        // line 17
        echo twig_escape_filter($this->env, \Craft\Craft::t("Delete"), "html", null, true);
        echo "\"></a>
\t";
    }

    public function getTemplateName()
    {
        return "_elements/categoryindex";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 17,  104 => 16,  101 => 15,  53 => 29,  48 => 26,  46 => 24,  41 => 22,  38 => 21,  36 => 7,  30 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
