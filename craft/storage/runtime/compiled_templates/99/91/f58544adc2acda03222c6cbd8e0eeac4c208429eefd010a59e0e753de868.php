<?php

/* sproutforms/entries/_view */
class __TwigTemplate_9991f58544adc2acda03222c6cbd8e0eeac4c208429eefd010a59e0e753de868 extends Craft\BaseTemplate
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
        // line 3
        $context["entry"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "sproutforms"), "getEntryById", array(0 => (isset($context["entryId"]) ? $context["entryId"] : $this->getContext($context, "entryId"))), "method");
        // line 5
        $context["title"] = ("Submitted Data for Form:  " . $this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "form"), "name"));
        // line 7
        $context["crumbs"] = array(0 => array("label" => \Craft\Craft::t("Sprout Forms"), "url" => \Craft\UrlHelper::getUrl("sproutforms")), 1 => array("label" => $this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "form"), "name"), "url" => \Craft\UrlHelper::getUrl(("sproutforms/edit/" . $this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "form"), "id")))), 2 => array("label" => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "id"), "url" => \Craft\UrlHelper::getUrl(("sproutforms/entries/view/" . $this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "form"), "id")))));
        // line 14
        ob_start();
        // line 15
        echo "
<p>The following entry was submitted on ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "dateCreated"), "nice"), "html", null, true);
        echo "</p>

    <table>
      ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "form"), "field"));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 20
            echo "      <tr>
        <td style=\"padding-bottom:10px;width:600px;\">
            
            <h2>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "name"), "html", null, true);
            echo "</h2>
            
            ";
            // line 25
            $context["entry_content"] = $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "getContent", array(), "method");
            // line 26
            echo "
            ";
            // line 27
            if ((!$this->getAttribute((isset($context["entry_content"]) ? $context["entry_content"] : null), 0, array(), "array", true, true))) {
                // line 28
                echo "              ";
                echo twig_escape_filter($this->env, (isset($context["entry_content"]) ? $context["entry_content"] : $this->getContext($context, "entry_content")), "html", null, true);
                echo "
            ";
            } else {
                // line 30
                echo "              <ul style=\"margin-left:0;\">
              ";
                // line 31
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["entry_content"]) ? $context["entry_content"] : $this->getContext($context, "entry_content")));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 32
                    echo "                <li>";
                    echo twig_escape_filter($this->env, (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "html", null, true);
                    echo "</li>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                echo "              </ul>
            ";
            }
            // line 36
            echo "        </td>
      </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "    </table>
    
<p>Additional details about the submission.</p>

";
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "sproutforms"), "getEntrySubmissionMeta", array(0 => (isset($context["entryId"]) ? $context["entryId"] : $this->getContext($context, "entryId"))), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 44
            echo "    <b>";
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
            echo "</b>: ";
            echo twig_escape_filter($this->env, (isset($context["val"]) ? $context["val"] : $this->getContext($context, "val")), "html", null, true);
            echo " <br/>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "

";
        $context["body"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "sproutforms/entries/_view";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 46,  106 => 44,  102 => 43,  96 => 39,  88 => 36,  84 => 34,  75 => 32,  71 => 31,  68 => 30,  62 => 28,  60 => 27,  57 => 26,  55 => 25,  50 => 23,  45 => 20,  41 => 19,  35 => 16,  32 => 15,  30 => 14,  28 => 7,  26 => 5,  24 => 3,);
    }
}
