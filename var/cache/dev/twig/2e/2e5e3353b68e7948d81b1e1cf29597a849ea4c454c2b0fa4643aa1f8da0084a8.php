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
        $__internal_60828a9063b655b793e6e0e879f5c217fd9ff14e0cf5827c76de8da40cfea476 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60828a9063b655b793e6e0e879f5c217fd9ff14e0cf5827c76de8da40cfea476->enter($__internal_60828a9063b655b793e6e0e879f5c217fd9ff14e0cf5827c76de8da40cfea476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projets/editProjet.html.twig"));

        $__internal_dfc48d67543cef741723fae31ecc2cdf4c17fd3abcd4fd43523b23586824c462 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfc48d67543cef741723fae31ecc2cdf4c17fd3abcd4fd43523b23586824c462->enter($__internal_dfc48d67543cef741723fae31ecc2cdf4c17fd3abcd4fd43523b23586824c462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projets/editProjet.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60828a9063b655b793e6e0e879f5c217fd9ff14e0cf5827c76de8da40cfea476->leave($__internal_60828a9063b655b793e6e0e879f5c217fd9ff14e0cf5827c76de8da40cfea476_prof);

        
        $__internal_dfc48d67543cef741723fae31ecc2cdf4c17fd3abcd4fd43523b23586824c462->leave($__internal_dfc48d67543cef741723fae31ecc2cdf4c17fd3abcd4fd43523b23586824c462_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a1c2f59d6426874b9f8eadfa0e68db7ad6a1c366bfd6729c0bbdbeb20b0caf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a1c2f59d6426874b9f8eadfa0e68db7ad6a1c366bfd6729c0bbdbeb20b0caf5->enter($__internal_0a1c2f59d6426874b9f8eadfa0e68db7ad6a1c366bfd6729c0bbdbeb20b0caf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d4776c491163fd9e506ed58fa3ed7f16113cc42191ee1b625b71658d0251de49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4776c491163fd9e506ed58fa3ed7f16113cc42191ee1b625b71658d0251de49->enter($__internal_d4776c491163fd9e506ed58fa3ed7f16113cc42191ee1b625b71658d0251de49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 25
            echo "
    ";
            // line 26
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "
    <div id=\"loginbox\" style=\"margin-top:50px;\" class=\"mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2\">
      ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
      ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
      <a onclick=\"return(confirm('Attention vous êtes sur le point d'annuler votre action'));\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showProjet", array("id" => $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-warning pull-right\"/> Annuler</a>
      ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
</div>
";
        
        $__internal_d4776c491163fd9e506ed58fa3ed7f16113cc42191ee1b625b71658d0251de49->leave($__internal_d4776c491163fd9e506ed58fa3ed7f16113cc42191ee1b625b71658d0251de49_prof);

        
        $__internal_0a1c2f59d6426874b9f8eadfa0e68db7ad6a1c366bfd6729c0bbdbeb20b0caf5->leave($__internal_0a1c2f59d6426874b9f8eadfa0e68db7ad6a1c366bfd6729c0bbdbeb20b0caf5_prof);

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
        return array (  117 => 34,  113 => 33,  109 => 32,  105 => 31,  101 => 29,  92 => 26,  89 => 25,  85 => 24,  79 => 21,  72 => 19,  68 => 18,  64 => 17,  49 => 4,  40 => 3,  11 => 1,);
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
{% for flashMessage in app.session.flashbag.get('error') %}

    {{ flashMessage }}

{% endfor %}

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
