<?php

/* common/footer.twig */
class __TwigTemplate_b6b8e38af2e8611738cdf6aab19ddc197c926cca7d9a88f0817bcca5f182dbc0 extends Twig_Template
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
        echo "<footer>
  <div class=\"container\">
    <a href=\"https://www.opencart.com\" target=\"_blank\">";
        // line 3
        echo (isset($context["text_project"]) ? $context["text_project"] : null);
        echo "</a>|<a href=\"http://docs.opencart.com/en-gb/introduction/\" target=\"_blank\">";
        echo (isset($context["text_documentation"]) ? $context["text_documentation"] : null);
        echo "</a>|<a href=\"https://forum.opencart.com\" target=\"_blank\">";
        echo (isset($context["text_support"]) ? $context["text_support"] : null);
        echo "</a><br />
  </div>
</footer>
</body></html>
";
    }

    public function getTemplateName()
    {
        return "common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }
}
/* <footer>*/
/*   <div class="container">*/
/*     <a href="https://www.opencart.com" target="_blank">{{ text_project }}</a>|<a href="http://docs.opencart.com/en-gb/introduction/" target="_blank">{{ text_documentation }}</a>|<a href="https://forum.opencart.com" target="_blank">{{ text_support }}</a><br />*/
/*   </div>*/
/* </footer>*/
/* </body></html>*/
/* */
