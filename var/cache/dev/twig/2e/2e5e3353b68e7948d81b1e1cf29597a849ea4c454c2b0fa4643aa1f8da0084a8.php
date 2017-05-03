<?php

/* projets/editProjet.html.twig */
class __TwigTemplate_ade10d24aa1731d95052aa26805b6bd5ec8593061215ed7120616715814ca089 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "projets/editProjet.html.twig", 1);
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
        $__internal_aa595f575bd1b958f1a0fe2c0d4a2bd7ef2c4d0023524a1665e4512de4423072 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa595f575bd1b958f1a0fe2c0d4a2bd7ef2c4d0023524a1665e4512de4423072->enter($__internal_aa595f575bd1b958f1a0fe2c0d4a2bd7ef2c4d0023524a1665e4512de4423072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projets/editProjet.html.twig"));

        $__internal_946b2f13da65d106a05ea65e18e42a2a3620694512940ad75932a47ddd46ed87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_946b2f13da65d106a05ea65e18e42a2a3620694512940ad75932a47ddd46ed87->enter($__internal_946b2f13da65d106a05ea65e18e42a2a3620694512940ad75932a47ddd46ed87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projets/editProjet.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa595f575bd1b958f1a0fe2c0d4a2bd7ef2c4d0023524a1665e4512de4423072->leave($__internal_aa595f575bd1b958f1a0fe2c0d4a2bd7ef2c4d0023524a1665e4512de4423072_prof);

        
        $__internal_946b2f13da65d106a05ea65e18e42a2a3620694512940ad75932a47ddd46ed87->leave($__internal_946b2f13da65d106a05ea65e18e42a2a3620694512940ad75932a47ddd46ed87_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_487e109ef5a083a23b0a28084fc4095c6bc9584a1a48e63258dc0168162c5f6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_487e109ef5a083a23b0a28084fc4095c6bc9584a1a48e63258dc0168162c5f6b->enter($__internal_487e109ef5a083a23b0a28084fc4095c6bc9584a1a48e63258dc0168162c5f6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4b31fa79ad6af5d3f641833be6bb52e14303e3a9c0d3ad42400aaf7ab901db37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b31fa79ad6af5d3f641833be6bb52e14303e3a9c0d3ad42400aaf7ab901db37->enter($__internal_4b31fa79ad6af5d3f641833be6bb52e14303e3a9c0d3ad42400aaf7ab901db37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<!-- MAIN IMAGE SECTION -->
<div id=\"portwrap\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 col-lg-offset-2\">
        <h2>Modification d'un projet</h2>
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
  <li class=\"breadcrumb-item\"><a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showProjet", array("id" => $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "nomProjet", array()), "html", null, true);
        echo "</a></li>
  <li class=\"breadcrumb-item active\">Modification projet</li>
  <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "headers", array()), "get", array(0 => "referer"), "method"), "html", null, true);
        echo "\" class=\"btn btn-info pull-right\"><span class=\"glyphicon glyphicon-repeat\"></span> Retour</a>
</ol>
<div class=\"container\">
    <div id=\"loginbox\" style=\"margin-top:50px;\" class=\"mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2\">
      ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
      ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
      <a onclick=\"return(confirm('Attention vous êtes sur le point d'annuler votre action'));\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showProjet", array("id" => $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-warning pull-right\"/> Annuler</a>
      ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
</div>
";
        
        $__internal_4b31fa79ad6af5d3f641833be6bb52e14303e3a9c0d3ad42400aaf7ab901db37->leave($__internal_4b31fa79ad6af5d3f641833be6bb52e14303e3a9c0d3ad42400aaf7ab901db37_prof);

        
        $__internal_487e109ef5a083a23b0a28084fc4095c6bc9584a1a48e63258dc0168162c5f6b->leave($__internal_487e109ef5a083a23b0a28084fc4095c6bc9584a1a48e63258dc0168162c5f6b_prof);

    }

    public function getTemplateName()
    {
        return "projets/editProjet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 28,  94 => 27,  90 => 26,  86 => 25,  79 => 21,  72 => 19,  68 => 18,  64 => 17,  49 => 4,  40 => 3,  11 => 1,);
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
        <h2>Modification d'un projet</h2>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->

<!-- WELCOME SECTION -->
<ol class=\"breadcrumb\">
  <li class=\"breadcrumb-item\"><a href=\"{{path('homepage')}}\">Accueil</a></li>
  <li class=\"breadcrumb-item\"><a href=\"{{path('projets')}}\">Projets</a></li>
  <li class=\"breadcrumb-item\"><a href=\"{{ path('showProjet', {'id': projet.id}) }}\">{{projet.nomProjet}}</a></li>
  <li class=\"breadcrumb-item active\">Modification projet</li>
  <a href=\"{{ app.request.headers.get('referer') }}\" class=\"btn btn-info pull-right\"><span class=\"glyphicon glyphicon-repeat\"></span> Retour</a>
</ol>
<div class=\"container\">
    <div id=\"loginbox\" style=\"margin-top:50px;\" class=\"mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2\">
      {{ form_start(form) }}
      {{ form_widget(form) }}
      <a onclick=\"return(confirm('Attention vous êtes sur le point d'annuler votre action'));\" href=\"{{ path('showProjet', {'id': projet.id}) }}\" class=\"btn btn-warning pull-right\"/> Annuler</a>
      {{ form_end(form) }}
    </div>
</div>
{% endblock %}
", "projets/editProjet.html.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/app/Resources/views/projets/editProjet.html.twig");
    }
}
