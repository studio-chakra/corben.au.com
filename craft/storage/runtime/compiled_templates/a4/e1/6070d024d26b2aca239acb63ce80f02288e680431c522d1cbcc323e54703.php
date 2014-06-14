<?php

/* sproutforms/settings/examples */
class __TwigTemplate_a4e16070d024d26b2aca239acb63ce80f02288e680431c522d1cbcc323e54703 extends Craft\BaseTemplate
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
        ob_start();
        // line 5
        echo "
<style type=\"text/css\">
\t.examples {
\t\twidth: 35%;
\t}
\t.examples .buttons {
\t\tmargin-top: 1em;
\t}
</style>

<form method=\"post\" action=\"\" accept-charset=\"UTF-8\" class=\"examples\">
\t<input type=\"hidden\" name=\"action\" value=\"sproutForms/examples/install\">
\t
\t<h2>Getting Started</h2>
\t
\t<p>Install an example Contact Form and Mailing List Form with commented templates and example data.  Front-end templates will be initially placed in the `craft/templates/sproutforms` folder.</p>

\t<div class=\"buttons\">
\t\t<input class=\"btn submit\" type=\"submit\" value=\"Install Example Forms\" />
\t</div>

\t<p>Don't install any example forms or data, I will build the forms I need myself.</p>

\t<div class=\"buttons\">
\t\t<input type=\"button\" class=\"btn delete\" value=\"Take me to Sprout Forms\" onclick=\"window.location='";
        // line 29
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("sproutforms"), "html", null, true);
        echo "';\" />
\t</div>
\t

</form>
";
        $context["body"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "sproutforms/settings/examples";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 29,  28 => 5,  26 => 4,  24 => 2,);
    }
}
