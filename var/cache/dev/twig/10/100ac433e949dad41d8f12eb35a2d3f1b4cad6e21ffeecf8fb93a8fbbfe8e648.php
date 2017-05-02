<?php

/* administration/indexAdmin.html.twig */
class __TwigTemplate_0d429646318eed5b74280c00bf0e2f1ee960abbcff1e1f559fd71230a1d99fc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "administration/indexAdmin.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5717c73db5d37e524ba3275dda74c810be2ec592af7c1f929e5c8a3f8839bd3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5717c73db5d37e524ba3275dda74c810be2ec592af7c1f929e5c8a3f8839bd3a->enter($__internal_5717c73db5d37e524ba3275dda74c810be2ec592af7c1f929e5c8a3f8839bd3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "administration/indexAdmin.html.twig"));

        $__internal_a577f266eb57740204438b6a1244979d335a8d4273676016dae44aae269d9acb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a577f266eb57740204438b6a1244979d335a8d4273676016dae44aae269d9acb->enter($__internal_a577f266eb57740204438b6a1244979d335a8d4273676016dae44aae269d9acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "administration/indexAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5717c73db5d37e524ba3275dda74c810be2ec592af7c1f929e5c8a3f8839bd3a->leave($__internal_5717c73db5d37e524ba3275dda74c810be2ec592af7c1f929e5c8a3f8839bd3a_prof);

        
        $__internal_a577f266eb57740204438b6a1244979d335a8d4273676016dae44aae269d9acb->leave($__internal_a577f266eb57740204438b6a1244979d335a8d4273676016dae44aae269d9acb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_91e6238ea340681c9d57507dc8fffa7c99f17891848c5917cfd224b8e231df19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91e6238ea340681c9d57507dc8fffa7c99f17891848c5917cfd224b8e231df19->enter($__internal_91e6238ea340681c9d57507dc8fffa7c99f17891848c5917cfd224b8e231df19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d7ab2b29ba59d4e48ab9919ca431574a036ddeab8f64bcd0a84a66f6539592d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7ab2b29ba59d4e48ab9919ca431574a036ddeab8f64bcd0a84a66f6539592d4->enter($__internal_d7ab2b29ba59d4e48ab9919ca431574a036ddeab8f64bcd0a84a66f6539592d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<!-- MAIN IMAGE SECTION -->
<div id=\"portwrap\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 col-lg-offset-2\">
        <h2>Administration</h2>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->

<!-- WELCOME SECTION -->
<!-- MAC IMAGE -->
<div class=\"container\">

</div>
";
        
        $__internal_d7ab2b29ba59d4e48ab9919ca431574a036ddeab8f64bcd0a84a66f6539592d4->leave($__internal_d7ab2b29ba59d4e48ab9919ca431574a036ddeab8f64bcd0a84a66f6539592d4_prof);

        
        $__internal_91e6238ea340681c9d57507dc8fffa7c99f17891848c5917cfd224b8e231df19->leave($__internal_91e6238ea340681c9d57507dc8fffa7c99f17891848c5917cfd224b8e231df19_prof);

    }

    public function getTemplateName()
    {
        return "administration/indexAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
<!-- MAIN IMAGE SECTION -->
<div id=\"portwrap\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 col-lg-offset-2\">
        <h2>Administration</h2>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->

<!-- WELCOME SECTION -->
<!-- MAC IMAGE -->
<div class=\"container\">

</div>
{% endblock %}
", "administration/indexAdmin.html.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/app/Resources/views/administration/indexAdmin.html.twig");
    }
}
