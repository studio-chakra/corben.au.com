<?php

/* sproutforms/publish/_index */
class __TwigTemplate_9f5670e71d5fae05a3bb38f694203e8e4c25977a483c0cae7411e3fd6ac377a1 extends Craft\BaseTemplate
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
        echo "<div id=\"tab-publish\" class=\"hidden\">
\t";
        // line 2
        if (array_key_exists("form", $context)) {
            // line 3
            echo "\t
\t<p>There are several ways to publish your form.  Control every detail or copy and paste a single line of code.</p>
\t<hr>

\t<h2>1. Publish your form with one line of code</h2>

\t<code class=\"example\">
\t";
            // line 10
            echo "{{";
            echo "
\t\tcraft.sproutForms.displayForm('<b>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "handle"), "html", null, true);
            echo "</b>')
\t";
            // line 12
            echo "}}";
            echo "
\t</code>

\t<p><strong>NOTE:</strong> These other examples are pretty hard to output to the page with both code and customized variables.  Might want to retreat and just put a generic code example and reference the docs, and perhaps a table of useful variables to work with.  Form Handle.  Field Handles...</p>

\t<hr>
\t
\t<h2>2. Publish your form by accessing the fields and their properties directly.</h2>
\t
\t<p>Assign your form to a Twig variable</p>
\t<code>
\t";
            // line 23
            echo "{{";
            echo "
\t\tset form = craft.sproutForms.getFormFields('<b>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "handle"), "html", null, true);
            echo "</b>') %}
\t";
            // line 25
            echo "}}";
            echo "
\t</code>

\t<p>Build your form in HTML and output your fields with tags</p>
<textarea class=\"example\" style=\"height:300px;\">
<form method=\"post\" action=\"\" accept-charset=\"utf-8\">
  <input type=\"hidden\" name=\"action\" value=\"sproutForms/entries/post\">
  <input type=\"hidden\" name=\"redirect\" value=\"redirect/url\">
  <input type=\"hidden\" name=\"handle\" value=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "handle"), "html", null, true);
            echo "\">\t


  ";
            // line 36
            echo "{%";
            echo " set form = craft.sproutForms.getFormFields('";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "handle"), "html", null, true);
            echo "') ";
            echo "%}";
            echo "

  ";
            // line 38
            echo "{{";
            echo " form.examplePlainText.label ";
            echo "}}";
            echo "<br/>
  <p>";
            // line 39
            echo "{{";
            echo " form.examplePlainText.instructions ";
            echo "}}";
            echo "</p>
  ";
            // line 40
            echo "{{";
            echo " form.examplePlainText.input ";
            echo "}}";
            echo "
  ";
            // line 41
            echo "{{";
            echo " form.examplePlainText.error ";
            echo "}}";
            echo "

  <input type=\"submit\" value=\"Submit\">

</form>

</textarea>
\t\t
\t<hr>

\t<h2>3. Good ol' fashioned HTML.</h2>
\t
<textarea class=\"example\" style=\"height:280px;\">
<form method=\"post\" action=\"\" accept-charset=\"utf-8\">
  <input type=\"hidden\" name=\"action\" value=\"sproutForms/entries/post\">
  <input type=\"hidden\" name=\"redirect\" value=\"redirect/url\">
  <input type=\"hidden\" name=\"handle\" value=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "handle"), "html", null, true);
            echo "\">\t

  <div class=\"field\">
  <label>Custom Title</label>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua.</p>
  <input type=\"text\" name=\"FIELD.HANDLE\" value=\"DEFAULT VALUE\" />
  ";
            // line 64
            echo "{%";
            echo " if errors.handle is defined ";
            echo "%}";
            echo "
    <div class=\"error\">";
            // line 65
            echo "{{";
            echo " errors.getError('handle') ";
            echo "}}";
            echo "</div>
  ";
            // line 66
            echo "{%";
            echo " endif ";
            echo "%}";
            echo "
  </div>

  <input type=\"submit\" value=\"Submit\">

</form>
</textarea>

\t";
        }
        // line 75
        echo "
\t<br/>
\t<br/>
\t<br/>
\t<br/>
</div>

";
        // line 82
        $context["css"] = ('' === $tmp = "\tcode.example,
\ttextarea.example {
\t\tbackground-color: #fffde7;
\t\tborder: 0;
\t\tborder-left: 3px solid #ebde4f;
\t\tdisplay: inline-block;
\t\tfont-family: Menlo, monospace;
\t\tfont-size: 12px;
\t\tpadding: 10px;
\t\twidth: 80%;
\t}
\ttextarea.example:focus {
\t\toutline: none;
\t}
") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 98
        \Craft\craft()->templates->includeCss((isset($context["css"]) ? $context["css"] : $this->getContext($context, "css")));
    }

    public function getTemplateName()
    {
        return "sproutforms/publish/_index";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 82,  164 => 75,  150 => 66,  144 => 65,  128 => 57,  80 => 36,  74 => 33,  59 => 24,  55 => 23,  37 => 11,  50 => 33,  42 => 17,  32 => 6,  22 => 2,  138 => 64,  122 => 36,  117 => 33,  107 => 41,  95 => 39,  89 => 38,  86 => 26,  69 => 22,  66 => 21,  64 => 20,  61 => 19,  52 => 15,  40 => 12,  36 => 7,  31 => 8,  203 => 88,  201 => 87,  199 => 86,  196 => 85,  194 => 84,  192 => 83,  189 => 98,  187 => 81,  180 => 74,  174 => 70,  158 => 56,  151 => 51,  142 => 48,  139 => 47,  129 => 40,  123 => 43,  120 => 42,  116 => 41,  111 => 38,  106 => 36,  101 => 40,  96 => 33,  92 => 31,  87 => 29,  82 => 25,  76 => 24,  67 => 23,  63 => 25,  57 => 18,  44 => 24,  23 => 3,  21 => 2,  19 => 1,  84 => 28,  81 => 62,  78 => 61,  75 => 60,  72 => 59,  70 => 58,  65 => 56,  60 => 53,  58 => 52,  56 => 29,  54 => 24,  51 => 21,  48 => 26,  46 => 18,  43 => 15,  41 => 12,  38 => 15,  35 => 9,  33 => 10,  30 => 7,  28 => 5,  26 => 6,  24 => 3,);
    }
}
