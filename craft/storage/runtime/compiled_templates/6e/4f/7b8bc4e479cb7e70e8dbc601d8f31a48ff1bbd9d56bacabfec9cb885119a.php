<?php

/* _layouts/message */
class __TwigTemplate_6e4f7b8bc4e479cb7e70e8dbc601d8f31a48ff1bbd9d56bacabfec9cb885119a extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layouts/base");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'message' => array($this, 'block_message'),
            'foot' => array($this, 'block_foot'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/base";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "\t<div class=\"message-container\">
\t\t<div id=\"message\" class=\"pane\">
\t\t\t";
        // line 6
        $this->displayBlock('message', $context, $blocks);
        // line 7
        echo "\t\t</div>
\t</div>
";
    }

    // line 6
    public function block_message($context, array $blocks = array())
    {
    }

    // line 11
    public function block_foot($context, array $blocks = array())
    {
        // line 12
        echo "\t<script type=\"text/javascript\">
\t\tvar message = document.getElementById('message'),
\t\t\tmargin = -Math.round(message.offsetHeight / 2);
\t\tmessage.setAttribute('style', 'margin-top: '+margin+'px !important;');
\t</script>
";
    }

    public function getTemplateName()
    {
        return "_layouts/message";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 12,  50 => 11,  45 => 6,  39 => 7,  37 => 6,  38 => 6,  33 => 4,  30 => 3,  25 => 2,);
    }
}
