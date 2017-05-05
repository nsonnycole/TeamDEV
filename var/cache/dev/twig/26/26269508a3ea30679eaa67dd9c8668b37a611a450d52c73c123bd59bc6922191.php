<?php

/* competence/editCompetence.html.twig */
class __TwigTemplate_8c9af76da28d82aa3687285d0455cbff67dfb1338569ae5f1386ff91504a5b91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "competence/editCompetence.html.twig", 1);
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
        $__internal_1b96770de42f737e838a86b2f93aeeab972b83a7f39814dcb0f789eaf3580882 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b96770de42f737e838a86b2f93aeeab972b83a7f39814dcb0f789eaf3580882->enter($__internal_1b96770de42f737e838a86b2f93aeeab972b83a7f39814dcb0f789eaf3580882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "competence/editCompetence.html.twig"));

        $__internal_498006da0ec9f44d5880f635703f9e7bd9eee0461d441d24e8d3e7107d4cf807 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_498006da0ec9f44d5880f635703f9e7bd9eee0461d441d24e8d3e7107d4cf807->enter($__internal_498006da0ec9f44d5880f635703f9e7bd9eee0461d441d24e8d3e7107d4cf807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "competence/editCompetence.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b96770de42f737e838a86b2f93aeeab972b83a7f39814dcb0f789eaf3580882->leave($__internal_1b96770de42f737e838a86b2f93aeeab972b83a7f39814dcb0f789eaf3580882_prof);

        
        $__internal_498006da0ec9f44d5880f635703f9e7bd9eee0461d441d24e8d3e7107d4cf807->leave($__internal_498006da0ec9f44d5880f635703f9e7bd9eee0461d441d24e8d3e7107d4cf807_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4eefc008ef65ad7cba97366c0d27059d0a0bfc6c08149aef64cee740fe35eb52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4eefc008ef65ad7cba97366c0d27059d0a0bfc6c08149aef64cee740fe35eb52->enter($__internal_4eefc008ef65ad7cba97366c0d27059d0a0bfc6c08149aef64cee740fe35eb52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f48d895a4f34e3f3aa1e433da02efaf04f8f0a6a6cd1d3b7dcfd262c50fdc026 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f48d895a4f34e3f3aa1e433da02efaf04f8f0a6a6cd1d3b7dcfd262c50fdc026->enter($__internal_f48d895a4f34e3f3aa1e433da02efaf04f8f0a6a6cd1d3b7dcfd262c50fdc026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\" style=\"display:inline\">
    ";
        // line 5
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 6
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
        <a href=\"";
            // line 7
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
            ";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
        </a>
    ";
        } else {
            // line 11
            echo "        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
    ";
        }
        // line 13
        echo "</div>
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
  <li class=\"breadcrumb-item\"><a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Accueil</a></li>
  <li class=\"breadcrumb-item\"><a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projets");
        echo "\">Projets</a></li>
  <li class=\"breadcrumb-item\"><a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mesCompetences");
        echo "\">Mes compétences</a></li>
  <li class=\"breadcrumb-item active\">Modification de ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["competences"]) ? $context["competences"] : $this->getContext($context, "competences")), "nom", array()), "html", null, true);
        echo "</li>
  <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "headers", array()), "get", array(0 => "referer"), "method"), "html", null, true);
        echo "\" class=\"btn btn-info pull-right\"><span class=\"glyphicon glyphicon-repeat\"></span> Retour</a>
</ol>
<div class=\"container\">
";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 35
            echo "
    ";
            // line 36
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
    <div id=\"loginbox\" style=\"margin-top:50px;\" class=\"mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2\">
      ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
      ";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
      <a onclick=\"return(confirm('Attention vous êtes sur le point d'annuler votre action'));\" href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mesCompetences");
        echo "\" class=\"btn btn-warning pull-right\"/> Annuler</a>
      ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
</div>
";
        
        $__internal_f48d895a4f34e3f3aa1e433da02efaf04f8f0a6a6cd1d3b7dcfd262c50fdc026->leave($__internal_f48d895a4f34e3f3aa1e433da02efaf04f8f0a6a6cd1d3b7dcfd262c50fdc026_prof);

        
        $__internal_4eefc008ef65ad7cba97366c0d27059d0a0bfc6c08149aef64cee740fe35eb52->leave($__internal_4eefc008ef65ad7cba97366c0d27059d0a0bfc6c08149aef64cee740fe35eb52_prof);

    }

    public function getTemplateName()
    {
        return "competence/editCompetence.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 44,  143 => 43,  139 => 42,  135 => 41,  131 => 39,  122 => 36,  119 => 35,  115 => 34,  109 => 31,  105 => 30,  101 => 29,  97 => 28,  93 => 27,  77 => 13,  69 => 11,  63 => 8,  59 => 7,  54 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
<div class=\"container\" style=\"display:inline\">
    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
        {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
        <a href=\"{{ path('fos_user_security_logout') }}\">
            {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
        </a>
    {% else %}
        <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
    {% endif %}
</div>
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
  <li class=\"breadcrumb-item\"><a href=\"{{ path('mesCompetences') }}\">Mes compétences</a></li>
  <li class=\"breadcrumb-item active\">Modification de {{competences.nom}}</li>
  <a href=\"{{ app.request.headers.get('referer') }}\" class=\"btn btn-info pull-right\"><span class=\"glyphicon glyphicon-repeat\"></span> Retour</a>
</ol>
<div class=\"container\">
{% for flashMessage in app.session.flashbag.get('error') %}

    {{ flashMessage }}

{% endfor %}

    <div id=\"loginbox\" style=\"margin-top:50px;\" class=\"mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2\">
      {{ form_start(form) }}
      {{ form_widget(form) }}
      <a onclick=\"return(confirm('Attention vous êtes sur le point d'annuler votre action'));\" href=\"{{ path('mesCompetences') }}\" class=\"btn btn-warning pull-right\"/> Annuler</a>
      {{ form_end(form) }}
    </div>
</div>
{% endblock %}
", "competence/editCompetence.html.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/app/Resources/views/competence/editCompetence.html.twig");
    }
}
