<?php

/* projets/newProjet.html.twig */
class __TwigTemplate_b847ba1be8298bbe9dd10d49ee892f56ca7dc776e8674beca9767dea88bd4515 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "projets/newProjet.html.twig", 1);
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
        $__internal_2c23b32f590b1ef6e9cf4a5827d08265dd668f2d791bdfad662f5524f02abc6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c23b32f590b1ef6e9cf4a5827d08265dd668f2d791bdfad662f5524f02abc6f->enter($__internal_2c23b32f590b1ef6e9cf4a5827d08265dd668f2d791bdfad662f5524f02abc6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projets/newProjet.html.twig"));

        $__internal_d59eb46b3aa354a22aa1ef449398ed2ba11bba30ac813750bfcd71bef2150ea3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d59eb46b3aa354a22aa1ef449398ed2ba11bba30ac813750bfcd71bef2150ea3->enter($__internal_d59eb46b3aa354a22aa1ef449398ed2ba11bba30ac813750bfcd71bef2150ea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projets/newProjet.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c23b32f590b1ef6e9cf4a5827d08265dd668f2d791bdfad662f5524f02abc6f->leave($__internal_2c23b32f590b1ef6e9cf4a5827d08265dd668f2d791bdfad662f5524f02abc6f_prof);

        
        $__internal_d59eb46b3aa354a22aa1ef449398ed2ba11bba30ac813750bfcd71bef2150ea3->leave($__internal_d59eb46b3aa354a22aa1ef449398ed2ba11bba30ac813750bfcd71bef2150ea3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ab17123162ae0b79526e1003775111e52643e2a2441e904f8847e0fbb220e5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ab17123162ae0b79526e1003775111e52643e2a2441e904f8847e0fbb220e5d->enter($__internal_3ab17123162ae0b79526e1003775111e52643e2a2441e904f8847e0fbb220e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f4a46e58f6ad4026346f59be7145e173f3e6d4b26f26a63038c6a0e970ee32b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4a46e58f6ad4026346f59be7145e173f3e6d4b26f26a63038c6a0e970ee32b7->enter($__internal_f4a46e58f6ad4026346f59be7145e173f3e6d4b26f26a63038c6a0e970ee32b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<!-- MAIN IMAGE SECTION -->
<div id=\"portwrap\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 col-lg-offset-2\">
        <h2>Nouveau projet</h2>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->

<!-- WELCOME SECTION -->
<ol class=\"breadcrumb\">
  <li class=\"breadcrumb-item\"><a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Accueil</a></li>
  <li class=\"breadcrumb-item\"><a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projets");
        echo "\">Projets</a></li>
  <li class=\"breadcrumb-item active\">Nouveau projet</li>
  <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "headers", array()), "get", array(0 => "referer"), "method"), "html", null, true);
        echo "\" class=\"btn btn-info pull-right\"><span class=\"glyphicon glyphicon-repeat\"></span> Retour</a>
</ol>
<div class=\"container\">
    <div id=\"loginbox\" style=\"margin-top:50px;\" class=\"mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2\">
      ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
      ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
      <a onclick=\"return(confirm('Attention vous êtes sur le point d'annuler votre action'));\" href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projets");
        echo "\" class=\"btn btn-warning pull-right\"/> Annuler</a>
      ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
</div>
";
        
        $__internal_f4a46e58f6ad4026346f59be7145e173f3e6d4b26f26a63038c6a0e970ee32b7->leave($__internal_f4a46e58f6ad4026346f59be7145e173f3e6d4b26f26a63038c6a0e970ee32b7_prof);

        
        $__internal_3ab17123162ae0b79526e1003775111e52643e2a2441e904f8847e0fbb220e5d->leave($__internal_3ab17123162ae0b79526e1003775111e52643e2a2441e904f8847e0fbb220e5d_prof);

    }

    public function getTemplateName()
    {
        return "projets/newProjet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 27,  88 => 26,  84 => 25,  80 => 24,  73 => 20,  68 => 18,  64 => 17,  49 => 4,  40 => 3,  11 => 1,);
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
        <h2>Nouveau projet</h2>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->

<!-- WELCOME SECTION -->
<ol class=\"breadcrumb\">
  <li class=\"breadcrumb-item\"><a href=\"{{path('homepage')}}\">Accueil</a></li>
  <li class=\"breadcrumb-item\"><a href=\"{{path('projets')}}\">Projets</a></li>
  <li class=\"breadcrumb-item active\">Nouveau projet</li>
  <a href=\"{{ app.request.headers.get('referer') }}\" class=\"btn btn-info pull-right\"><span class=\"glyphicon glyphicon-repeat\"></span> Retour</a>
</ol>
<div class=\"container\">
    <div id=\"loginbox\" style=\"margin-top:50px;\" class=\"mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2\">
      {{ form_start(form) }}
      {{ form_widget(form) }}
      <a onclick=\"return(confirm('Attention vous êtes sur le point d'annuler votre action'));\" href=\"{{path('projets')}}\" class=\"btn btn-warning pull-right\"/> Annuler</a>
      {{ form_end(form) }}
    </div>
</div>
{% endblock %}
", "projets/newProjet.html.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/app/Resources/views/projets/newProjet.html.twig");
    }
}
