<?php

/* default/login.html.twig */
class __TwigTemplate_0fb1600badc79ecca6d3affd40951f27a3ed6a06fd036bb0901118ccd4b4854b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/login.html.twig", 1);
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
        $__internal_5020b054c48edf2cd901268770aab082609629a68b67495e0c3b21c3e83da7d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5020b054c48edf2cd901268770aab082609629a68b67495e0c3b21c3e83da7d7->enter($__internal_5020b054c48edf2cd901268770aab082609629a68b67495e0c3b21c3e83da7d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/login.html.twig"));

        $__internal_76a9b55aaa8cb812cddd9d512ca83777f7dc015589bbc61b1521007453339075 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76a9b55aaa8cb812cddd9d512ca83777f7dc015589bbc61b1521007453339075->enter($__internal_76a9b55aaa8cb812cddd9d512ca83777f7dc015589bbc61b1521007453339075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5020b054c48edf2cd901268770aab082609629a68b67495e0c3b21c3e83da7d7->leave($__internal_5020b054c48edf2cd901268770aab082609629a68b67495e0c3b21c3e83da7d7_prof);

        
        $__internal_76a9b55aaa8cb812cddd9d512ca83777f7dc015589bbc61b1521007453339075->leave($__internal_76a9b55aaa8cb812cddd9d512ca83777f7dc015589bbc61b1521007453339075_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f96e52b9c4b2433ab19914bba1682904f1d63e6272ce917ab870c6471cca3840 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f96e52b9c4b2433ab19914bba1682904f1d63e6272ce917ab870c6471cca3840->enter($__internal_f96e52b9c4b2433ab19914bba1682904f1d63e6272ce917ab870c6471cca3840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_671e560895643e0ba368beba48d109f0bef35194ecd006a38b49bc9f78a6dc7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_671e560895643e0ba368beba48d109f0bef35194ecd006a38b49bc9f78a6dc7d->enter($__internal_671e560895643e0ba368beba48d109f0bef35194ecd006a38b49bc9f78a6dc7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<!-- MAIN IMAGE SECTION -->
<div id=\"portwrap\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 col-lg-offset-2\">
        <h2>Connexion</h2>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->

<!-- WELCOME SECTION -->
  <div class=\"container\">
  ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
  ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
  </div><!-- /.container -->
";
        
        $__internal_671e560895643e0ba368beba48d109f0bef35194ecd006a38b49bc9f78a6dc7d->leave($__internal_671e560895643e0ba368beba48d109f0bef35194ecd006a38b49bc9f78a6dc7d_prof);

        
        $__internal_f96e52b9c4b2433ab19914bba1682904f1d63e6272ce917ab870c6471cca3840->leave($__internal_f96e52b9c4b2433ab19914bba1682904f1d63e6272ce917ab870c6471cca3840_prof);

    }

    public function getTemplateName()
    {
        return "default/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 19,  68 => 18,  64 => 17,  49 => 4,  40 => 3,  11 => 1,);
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
        <h2>Connexion</h2>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->

<!-- WELCOME SECTION -->
  <div class=\"container\">
  {{ form_start(form) }}
    {{ form_widget(form) }}
  {{ form_end(form) }}
  </div><!-- /.container -->
{% endblock%}
", "default/login.html.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/app/Resources/views/default/login.html.twig");
    }
}
