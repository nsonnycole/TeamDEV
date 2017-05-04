<?php

/* competence/newCompetence.html.twig */
class __TwigTemplate_fe0a4adc8c8e0d7c33bd0d40760407255f16af941b0c10ce9f7dd4396c1541f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "competence/newCompetence.html.twig", 1);
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
        $__internal_90318489b678c2a2ed5b2e4c724e146ce2f420f0a56baf19ef6f168da0e20c63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90318489b678c2a2ed5b2e4c724e146ce2f420f0a56baf19ef6f168da0e20c63->enter($__internal_90318489b678c2a2ed5b2e4c724e146ce2f420f0a56baf19ef6f168da0e20c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "competence/newCompetence.html.twig"));

        $__internal_44036fec8f9e35722e4b4e1e01e10dd51955f7786527f7085a1f7c60838493d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44036fec8f9e35722e4b4e1e01e10dd51955f7786527f7085a1f7c60838493d7->enter($__internal_44036fec8f9e35722e4b4e1e01e10dd51955f7786527f7085a1f7c60838493d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "competence/newCompetence.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90318489b678c2a2ed5b2e4c724e146ce2f420f0a56baf19ef6f168da0e20c63->leave($__internal_90318489b678c2a2ed5b2e4c724e146ce2f420f0a56baf19ef6f168da0e20c63_prof);

        
        $__internal_44036fec8f9e35722e4b4e1e01e10dd51955f7786527f7085a1f7c60838493d7->leave($__internal_44036fec8f9e35722e4b4e1e01e10dd51955f7786527f7085a1f7c60838493d7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_95dd4acf4ef43464502108b4de84013869c32fadeef1a27bac952924e2c65af1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95dd4acf4ef43464502108b4de84013869c32fadeef1a27bac952924e2c65af1->enter($__internal_95dd4acf4ef43464502108b4de84013869c32fadeef1a27bac952924e2c65af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1e5f9a0e131e128c66208b03e4b4f7f8435bdd516236cbd6facb96676f84a006 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e5f9a0e131e128c66208b03e4b4f7f8435bdd516236cbd6facb96676f84a006->enter($__internal_1e5f9a0e131e128c66208b03e4b4f7f8435bdd516236cbd6facb96676f84a006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1e5f9a0e131e128c66208b03e4b4f7f8435bdd516236cbd6facb96676f84a006->leave($__internal_1e5f9a0e131e128c66208b03e4b4f7f8435bdd516236cbd6facb96676f84a006_prof);

        
        $__internal_95dd4acf4ef43464502108b4de84013869c32fadeef1a27bac952924e2c65af1->leave($__internal_95dd4acf4ef43464502108b4de84013869c32fadeef1a27bac952924e2c65af1_prof);

    }

    public function getTemplateName()
    {
        return "competence/newCompetence.html.twig";
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
", "competence/newCompetence.html.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/app/Resources/views/competence/newCompetence.html.twig");
    }
}
