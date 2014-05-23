<?php

/* dev/news */
class __TwigTemplate_8a5472803e071cd205aea036aeee6003b0aa91ecd3809ce760e8398ea2f2708c extends Craft\BaseTemplate
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
<div class=\"page-news\">
\t<div class=\"row\">
\t\t<div class=\"large-12 columns\">
\t\t\t";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 9
            echo "\t\t\t<article class=\"post post-type-image\">
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
            // line 22
            echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
            echo "dev/post.html\" class=\"btn btn-link\">Continue Reading</a>
\t\t\t</article>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "\t\t</div>
\t</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "dev/news";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 25,  56 => 22,  41 => 9,  37 => 8,  31 => 4,  28 => 3,);
    }
}
