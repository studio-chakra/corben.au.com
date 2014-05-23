<?php

/* dev/post.html */
class __TwigTemplate_9b80043cc26b7d227d25c54eb5b0d812b478d9364646ef82cca3739e5992f801 extends Craft\BaseTemplate
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
<div class=\"page-post\">
\t<div class=\"row\">
\t\t<div class=\"large-12 columns\">
\t\t\t<article class=\"post post-type-image\">
\t\t\t\t<div class=\"post-media\">
\t\t\t\t\t<img src=\"http://placehold.it/1470x830\" class=\"post-image\" />
\t\t\t\t</div>
\t\t\t\t<header class=\"post-header\">
\t\t\t\t\t<h2 class=\"post-title\"><a href=\"\">News Post Title</a></h2>
\t\t\t\t\t<p class=\"post-meta\">Month DD, YYYY</p>
\t\t\t\t</header>
\t\t\t\t<h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis assumenda distinctio aperiam fuga in est quasi eius? Voluptate, doloribus, aliquid, labore ullam ipsam quos atque explicabo earum libero vitae nemo.</h5>
\t\t\t\t<p>Cum deserunt incidunt ducimus a porro nemo facilis obcaecati dolorem quae tempora! Natus, quos, ea, amet facilis totam optio incidunt veritatis dolore quasi aliquam neque modi ullam autem distinctio sapiente.</p>
\t\t\t\t<p>Quisquam, excepturi repellat et aliquid est minus laborum vitae blanditiis doloribus amet beatae cupiditate deserunt sit numquam ex nam labore molestiae alias autem fugit commodi debitis dicta illum ullam cumque?</p>
\t\t\t\t<p>Nostrum, a, aliquid quam rem eius natus iure fuga error placeat deleniti repellat dignissimos voluptatum ducimus sequi cupiditate eos officiis nesciunt reprehenderit mollitia ex. Voluptatem ad vel consectetur beatae assumenda.</p>
\t\t\t\t<p>Dolorum, porro, tenetur, sunt nulla explicabo voluptas consequuntur voluptates quibusdam vero facere aperiam asperiores commodi odio eius ab ex velit nesciunt ea dolores animi eaque fuga dignissimos ipsum reprehenderit tempora?</p>
\t\t\t\t<a href=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "dev/news.html\" class=\"btn btn-link\">Back to News</a>
\t\t\t</article>
\t\t</div>
\t</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "dev/post.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 21,  31 => 4,  28 => 3,);
    }
}
