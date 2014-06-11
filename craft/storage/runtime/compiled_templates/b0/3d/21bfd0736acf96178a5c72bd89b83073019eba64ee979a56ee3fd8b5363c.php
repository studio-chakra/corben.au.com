<?php

/* entries */
class __TwigTemplate_b03d21bfd0736acf96178a5c72bd89b83073019eba64ee979a56ee3fd8b5363c extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layouts/elementindex");

        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/elementindex";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["title"] = \Craft\Craft::t("Entries");
        // line 3
        $context["elementType"] = "Entry";
        // line 6
        $context["sections"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "sections"), "getEditableSections", array(), "method");
        // line 7
        $context["newEntrySections"] = array();
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sections"]) ? $context["sections"] : $this->getContext($context, "sections")));
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 10
            if ((($this->getAttribute((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), "type") != "single") && $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : $this->getContext($context, "currentUser")), "can", array(0 => ("createEntries:" . $this->getAttribute((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), "id"))), "method"))) {
                // line 11
                $context["newEntrySections"] = twig_array_merge((isset($context["newEntrySections"]) ? $context["newEntrySections"] : $this->getContext($context, "newEntrySections")), array(0 => (isset($context["section"]) ? $context["section"] : $this->getContext($context, "section"))));
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        if (array_key_exists("sectionHandle", $context)) {
            // line 39
            \Craft\craft()->templates->includeJs((("window.defaultSectionHandle = \"" . (isset($context["sectionHandle"]) ? $context["sectionHandle"] : $this->getContext($context, "sectionHandle"))) . "\";"));
        }
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_sidebar($context, array $blocks = array())
    {
        // line 17
        echo "\t";
        if (twig_length_filter($this->env, (isset($context["newEntrySections"]) ? $context["newEntrySections"] : $this->getContext($context, "newEntrySections")))) {
            // line 18
            echo "\t\t<div class=\"buttons\">
\t\t\t";
            // line 19
            if ((twig_length_filter($this->env, (isset($context["newEntrySections"]) ? $context["newEntrySections"] : $this->getContext($context, "newEntrySections"))) > 1)) {
                // line 20
                echo "\t\t\t\t<div class=\"btn submit menubtn add icon\">";
                echo twig_escape_filter($this->env, \Craft\Craft::t("New Entry"), "html", null, true);
                echo "</div>
\t\t\t\t<div class=\"menu\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t";
                // line 23
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["newEntrySections"]) ? $context["newEntrySections"] : $this->getContext($context, "newEntrySections")));
                foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
                    // line 24
                    echo "\t\t\t\t\t\t\t<li><a href=\"";
                    echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl((("entries/" . $this->getAttribute((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), "handle")) . "/new")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), "name")), "html", null, true);
                    echo "</a></li>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t";
            } else {
                // line 29
                echo "\t\t\t\t<a class=\"btn submit add icon\" href=\"";
                echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl((("entries/" . $this->getAttribute($this->getAttribute((isset($context["newEntrySections"]) ? $context["newEntrySections"] : $this->getContext($context, "newEntrySections")), 0, array(), "array"), "handle")) . "/new")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, \Craft\Craft::t("New Entry"), "html", null, true);
                echo "</a>
\t\t\t";
            }
            // line 31
            echo "\t\t</div>
\t";
        }
        // line 33
        echo "
\t";
        // line 34
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "entries";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 34,  104 => 33,  100 => 31,  92 => 29,  87 => 26,  76 => 24,  72 => 23,  65 => 20,  63 => 19,  60 => 18,  57 => 17,  54 => 16,  48 => 39,  46 => 38,  39 => 11,  37 => 10,  33 => 9,  31 => 7,  29 => 6,  27 => 3,  25 => 2,);
    }
}
