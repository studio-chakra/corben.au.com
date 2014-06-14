<?php

/* sproutforms/emails/default */
class __TwigTemplate_3c5cd39f9bf280f8915fe2396d49f4f6ea72ec8e92865f1601463f431dfe95cf extends Craft\BaseTemplate
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
        echo "<html>
<head>
  <title>";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["siteName"]) ? $context["siteName"] : $this->getContext($context, "siteName")), "html", null, true);
        echo "</title>
</head>
<body marginwidth=\"0\" marginheight=\"0\" topmargin=\"0\" leftmargin=\"0\" offset=\"0\">
<table width=\"100%\" height=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
  <tr>
    <td valign=\"top\">
<table>
  <tr>
    <td valign=\"top\" style=\"width:600px;\">

    <table>
      <tr>
        <td valign=\"top\" style=\"width:600px;\">

        <p>Form submission from ";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["siteName"]) ? $context["siteName"] : $this->getContext($context, "siteName")), "html", null, true);
        echo "</p>
        
        <p>
          <span style=\"text-transform: uppercase;\"><strong>";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "html", null, true);
        echo "</strong></span>
        </p>

        </td>
      </tr>
    </table>

    <table>
      <tr>
        <td style=\"border-top:1px solid #eee;border-bottom:1px solid #eee;background-color:#fefefe;width:600px;\">

    <table>
      ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["field_name"] => $context["field_value"]) {
            // line 33
            echo "      <tr>
        <td style=\"padding-bottom:10px;width:600px;\">
            
            <strong>";
            // line 36
            echo twig_escape_filter($this->env, (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), "html", null, true);
            echo "</strong><br>

            ";
            // line 38
            if ((!$this->getAttribute((isset($context["field_value"]) ? $context["field_value"] : null), 0, array(), "array", true, true))) {
                // line 39
                echo "              ";
                echo twig_escape_filter($this->env, (isset($context["field_value"]) ? $context["field_value"] : $this->getContext($context, "field_value")), "html", null, true);
                echo "
            ";
            } else {
                // line 41
                echo "              <ul style=\"margin-left:0;\">
              ";
                // line 42
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["field_value"]) ? $context["field_value"] : $this->getContext($context, "field_value")));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 43
                    echo "                <li>";
                    echo twig_escape_filter($this->env, (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "html", null, true);
                    echo "</li>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "              </ul>
            ";
            }
            // line 47
            echo "        </td>
      </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['field_value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "    </table>

        </td>
      </tr>
    </table>

    </td>
  </tr>
</table>
<!-- END TEMPLATE CONTAINER -->

      </td>
    </tr>
  </table>
</body>
<!-- END EMAIL BODY -->";
    }

    public function getTemplateName()
    {
        return "sproutforms/emails/default";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 50,  103 => 47,  99 => 45,  90 => 43,  86 => 42,  83 => 41,  77 => 39,  75 => 38,  70 => 36,  65 => 33,  61 => 32,  46 => 20,  40 => 17,  23 => 3,  19 => 1,);
    }
}
