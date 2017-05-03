<?php

/* Inscription/newInsc.html.twig */
class __TwigTemplate_a9ac08068ebeff1cd212a3ae1ab2df8e13cbda46e66b251a52681d76a51dba86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Inscription/newInsc.html.twig", 1);
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
        $__internal_2903fbd05b1ecce4f8d652d02a84cd1f170392223e9488755bf44209cfcce086 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2903fbd05b1ecce4f8d652d02a84cd1f170392223e9488755bf44209cfcce086->enter($__internal_2903fbd05b1ecce4f8d652d02a84cd1f170392223e9488755bf44209cfcce086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Inscription/newInsc.html.twig"));

        $__internal_fefea1626756d275e4c8e6dde4928348200f4a2f5fb16837438242663acc1cf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fefea1626756d275e4c8e6dde4928348200f4a2f5fb16837438242663acc1cf6->enter($__internal_fefea1626756d275e4c8e6dde4928348200f4a2f5fb16837438242663acc1cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Inscription/newInsc.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2903fbd05b1ecce4f8d652d02a84cd1f170392223e9488755bf44209cfcce086->leave($__internal_2903fbd05b1ecce4f8d652d02a84cd1f170392223e9488755bf44209cfcce086_prof);

        
        $__internal_fefea1626756d275e4c8e6dde4928348200f4a2f5fb16837438242663acc1cf6->leave($__internal_fefea1626756d275e4c8e6dde4928348200f4a2f5fb16837438242663acc1cf6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_91e4bd87d0735b330576a7744670a4ad922467834d9446a642dd0aabbb5d95e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91e4bd87d0735b330576a7744670a4ad922467834d9446a642dd0aabbb5d95e5->enter($__internal_91e4bd87d0735b330576a7744670a4ad922467834d9446a642dd0aabbb5d95e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ad64ecea078b25ab43f55395bddd74450cacb08519040b85823d5abff406da1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad64ecea078b25ab43f55395bddd74450cacb08519040b85823d5abff406da1b->enter($__internal_ad64ecea078b25ab43f55395bddd74450cacb08519040b85823d5abff406da1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<!-- MAIN IMAGE SECTION -->
<div id=\"portwrap\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 col-lg-offset-2\">
        <h2>Inscription au projet</h2>
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
  <li class=\"breadcrumb-item active\">Inscription au projet</li>
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projets");
        echo "\" class=\"btn btn-warning pull-right\"/> Annuler</a>
      ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
</div>
";
        
        $__internal_ad64ecea078b25ab43f55395bddd74450cacb08519040b85823d5abff406da1b->leave($__internal_ad64ecea078b25ab43f55395bddd74450cacb08519040b85823d5abff406da1b_prof);

        
        $__internal_91e4bd87d0735b330576a7744670a4ad922467834d9446a642dd0aabbb5d95e5->leave($__internal_91e4bd87d0735b330576a7744670a4ad922467834d9446a642dd0aabbb5d95e5_prof);

    }

    public function getTemplateName()
    {
        return "Inscription/newInsc.html.twig";
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
        <h2>Inscription au projet</h2>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->

<!-- WELCOME SECTION -->
<ol class=\"breadcrumb\">
  <li class=\"breadcrumb-item\"><a href=\"{{path('homepage')}}\">Accueil</a></li>
  <li class=\"breadcrumb-item\"><a href=\"{{path('projets')}}\">Projets</a></li>
  <li class=\"breadcrumb-item\"><a href=\"{{ path('showProjet', {'id': projet.id}) }}\">{{projet.nomProjet}}</a></li>
  <li class=\"breadcrumb-item active\">Inscription au projet</li>
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
", "Inscription/newInsc.html.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/app/Resources/views/Inscription/newInsc.html.twig");
    }
}
