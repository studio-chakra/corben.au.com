<?php

/* dev/page */
class __TwigTemplate_b497ac2988925fe2ece0e2b30caa989546bc250096ca7763234e53bd9eae14f9 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layout-dev");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layout-dev";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
<article class=\"page-general\">
\t<div class=\"row\">
\t\t<div class=\"xlarge-4 large-6 columns\">
\t\t\t<section class=\"page-content\">
\t\t\t\t<h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis assumenda distinctio aperiam fuga in est quasi eius? Voluptate, doloribus, aliquid, labore ullam ipsam quos atque explicabo earum libero vitae nemo.</h4>
\t\t\t\t<p>Cum deserunt incidunt ducimus a porro nemo facilis obcaecati dolorem quae tempora! Natus, quos, ea, amet facilis totam optio incidunt veritatis dolore quasi aliquam neque modi ullam autem distinctio sapiente.</p>
\t\t\t\t<p>Quisquam, excepturi repellat et aliquid est minus laborum vitae blanditiis doloribus amet beatae cupiditate deserunt sit numquam ex nam labore molestiae alias autem fugit commodi debitis dicta illum ullam cumque?</p>
\t\t\t\t<p>Nostrum, a, aliquid quam rem eius natus iure fuga error placeat deleniti repellat dignissimos voluptatum ducimus sequi cupiditate eos officiis nesciunt reprehenderit mollitia ex. Voluptatem ad vel consectetur beatae assumenda.</p>
\t\t\t\t<p>Dolorum, porro, tenetur, sunt nulla explicabo voluptas consequuntur voluptates quibusdam vero facere aperiam asperiores commodi odio eius ab ex velit nesciunt ea dolores animi eaque fuga dignissimos ipsum reprehenderit tempora?</p>
\t\t\t</section>
\t\t</div>
\t\t<div class=\"xlarge-8 large-6 columns\">
\t\t\t<section class=\"page-img show-for-large-up\">
\t\t\t\t<img src=\"http://placehold.it/1050x700\" class=\"general-image\" />
\t\t\t</section>
\t\t</div>
\t</div>
</article>

";
    }

    public function getTemplateName()
    {
        return "dev/page";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}
