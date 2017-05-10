<?php

/* projets/newProjetImage.html.twig */
class __TwigTemplate_885c4501f6f56a7d437f3968e5f8eb2592aac6190a0339a0c884a72cedd3fc63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "projets/newProjetImage.html.twig", 1);
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
        $__internal_ae53506d013819c38840c4c20ebf7a0b34f316404ad0ea73cfa004011ed1bcf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae53506d013819c38840c4c20ebf7a0b34f316404ad0ea73cfa004011ed1bcf2->enter($__internal_ae53506d013819c38840c4c20ebf7a0b34f316404ad0ea73cfa004011ed1bcf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projets/newProjetImage.html.twig"));

        $__internal_805181893d2d6a08fce3b49cbb4ca40959dd4d0c5f31bea0ef971d1fb39d9ece = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_805181893d2d6a08fce3b49cbb4ca40959dd4d0c5f31bea0ef971d1fb39d9ece->enter($__internal_805181893d2d6a08fce3b49cbb4ca40959dd4d0c5f31bea0ef971d1fb39d9ece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projets/newProjetImage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae53506d013819c38840c4c20ebf7a0b34f316404ad0ea73cfa004011ed1bcf2->leave($__internal_ae53506d013819c38840c4c20ebf7a0b34f316404ad0ea73cfa004011ed1bcf2_prof);

        
        $__internal_805181893d2d6a08fce3b49cbb4ca40959dd4d0c5f31bea0ef971d1fb39d9ece->leave($__internal_805181893d2d6a08fce3b49cbb4ca40959dd4d0c5f31bea0ef971d1fb39d9ece_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_25a87f7a3d5a5833bd68df0893ca6f7f7501507da0a12bf69f9d922eab8f76df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25a87f7a3d5a5833bd68df0893ca6f7f7501507da0a12bf69f9d922eab8f76df->enter($__internal_25a87f7a3d5a5833bd68df0893ca6f7f7501507da0a12bf69f9d922eab8f76df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c0064f837a48da0cc1bae5cb2756ebc03013b30b5973fba9ebadedbfafe7754d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0064f837a48da0cc1bae5cb2756ebc03013b30b5973fba9ebadedbfafe7754d->enter($__internal_c0064f837a48da0cc1bae5cb2756ebc03013b30b5973fba9ebadedbfafe7754d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <h2>Nouvel image projet</h2>
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
  <li class=\"breadcrumb-item active\">Nouveau projet</li>
  <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "headers", array()), "get", array(0 => "referer"), "method"), "html", null, true);
        echo "\" class=\"btn btn-info pull-right\"><span class=\"glyphicon glyphicon-repeat\"></span> Retour</a>
</ol>
<div class=\"container\">
";
        // line 33
        if ($this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "pictureName", array())) {
            // line 34
            echo "  <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "getWebPath", array(), "method")), "html", null, true);
            echo "\" />
  ";
        } else {
            // line 36
            echo "  Pas d'image chargée pour ce projet!
  ";
        }
        // line 38
        echo "
  <h1>Charger une image pour ce projet</h1>

  <form action=\"#\" method=\"post\">
  ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
  ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

  </form>
</div>
";
        
        $__internal_c0064f837a48da0cc1bae5cb2756ebc03013b30b5973fba9ebadedbfafe7754d->leave($__internal_c0064f837a48da0cc1bae5cb2756ebc03013b30b5973fba9ebadedbfafe7754d_prof);

        
        $__internal_25a87f7a3d5a5833bd68df0893ca6f7f7501507da0a12bf69f9d922eab8f76df->leave($__internal_25a87f7a3d5a5833bd68df0893ca6f7f7501507da0a12bf69f9d922eab8f76df_prof);

    }

    public function getTemplateName()
    {
        return "projets/newProjetImage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 43,  126 => 42,  120 => 38,  116 => 36,  110 => 34,  108 => 33,  102 => 30,  97 => 28,  93 => 27,  77 => 13,  69 => 11,  63 => 8,  59 => 7,  54 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
        <h2>Nouvel image projet</h2>
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
{% if projet.pictureName %}
  <img src=\"{{ asset(projet.getWebPath()) }}\" />
  {% else %}
  Pas d'image chargée pour ce projet!
  {% endif %}

  <h1>Charger une image pour ce projet</h1>

  <form action=\"#\" method=\"post\">
  {{ form_start(form) }}
  {{ form_widget(form) }}

  </form>
</div>
{% endblock %}
", "projets/newProjetImage.html.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/app/Resources/views/projets/newProjetImage.html.twig");
    }
}
