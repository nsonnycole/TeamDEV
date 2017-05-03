<?php

/* utilisateur/profilDe.html.twig */
class __TwigTemplate_5c2807f0c2d57dc9640f2d50f16914931ed70d5eaddba4fb6a6d1b5798e3a3c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "utilisateur/profilDe.html.twig", 1);
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
        $__internal_6312094d64ef8799b48cd271d754a39de3c29af22acfe2d7a3f41a7a9891360f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6312094d64ef8799b48cd271d754a39de3c29af22acfe2d7a3f41a7a9891360f->enter($__internal_6312094d64ef8799b48cd271d754a39de3c29af22acfe2d7a3f41a7a9891360f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/profilDe.html.twig"));

        $__internal_596775151e543fd7f8b89a8b1a1bf0d2bc4f47584107cc69f0b6cb559b72d731 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_596775151e543fd7f8b89a8b1a1bf0d2bc4f47584107cc69f0b6cb559b72d731->enter($__internal_596775151e543fd7f8b89a8b1a1bf0d2bc4f47584107cc69f0b6cb559b72d731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/profilDe.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6312094d64ef8799b48cd271d754a39de3c29af22acfe2d7a3f41a7a9891360f->leave($__internal_6312094d64ef8799b48cd271d754a39de3c29af22acfe2d7a3f41a7a9891360f_prof);

        
        $__internal_596775151e543fd7f8b89a8b1a1bf0d2bc4f47584107cc69f0b6cb559b72d731->leave($__internal_596775151e543fd7f8b89a8b1a1bf0d2bc4f47584107cc69f0b6cb559b72d731_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a4a19e20d1254a95cfd0be417537e6a9c7d5cefdb7da5f77899cc5556f4a9014 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4a19e20d1254a95cfd0be417537e6a9c7d5cefdb7da5f77899cc5556f4a9014->enter($__internal_a4a19e20d1254a95cfd0be417537e6a9c7d5cefdb7da5f77899cc5556f4a9014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4f1968ffe59fa14f77881770adac13ba1a98b7bf41a5174f013d93ae9f283d50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f1968ffe59fa14f77881770adac13ba1a98b7bf41a5174f013d93ae9f283d50->enter($__internal_4f1968ffe59fa14f77881770adac13ba1a98b7bf41a5174f013d93ae9f283d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<!-- MAIN IMAGE SECTION -->
<div id=\"portwrap\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 col-lg-offset-2\">
        <h2>Profil de ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo " </h2>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->
<br>
<ol class=\"breadcrumb\">
  <li class=\"breadcrumb-item\"><a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Accueil</a></li>
  <li class=\"breadcrumb-item active\">Profil de ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</li>
  <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "headers", array()), "get", array(0 => "referer"), "method"), "html", null, true);
        echo "\" class=\"btn btn-info pull-right\"><span class=\"glyphicon glyphicon-repeat\"></span> Retour</a>
</ol>
<div class=\"container\">
  <div class=\"col-lg-12\">



      <br><br>

    <div class=\"col-lg-12 \">
      <h3 align=\"center\">Informations sur ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</h3>
      <hr>
      <div class=\"col-sm-6 col-sm-offset-4\">
      <p> Nom : ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom", array()), "html", null, true);
        echo "</p>
      <p> Prénom : ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom", array()), "html", null, true);
        echo "</p>
      <p> Date de naissance : ";
        // line 33
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "dateNaiss", array()), "d/m/Y"), "html", null, true);
        echo "</p>
      <p> Adresse : ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "adresse", array()), "html", null, true);
        echo "</p>

      <p> Pseudo : ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
      <p> ";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email"), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>

      <p> Projets : 0 </p>
      <p> Participations : 0</p>

      </div>

      </div>


    </div>
  </div>
</div>
";
        
        $__internal_4f1968ffe59fa14f77881770adac13ba1a98b7bf41a5174f013d93ae9f283d50->leave($__internal_4f1968ffe59fa14f77881770adac13ba1a98b7bf41a5174f013d93ae9f283d50_prof);

        
        $__internal_a4a19e20d1254a95cfd0be417537e6a9c7d5cefdb7da5f77899cc5556f4a9014->leave($__internal_a4a19e20d1254a95cfd0be417537e6a9c7d5cefdb7da5f77899cc5556f4a9014_prof);

    }

    public function getTemplateName()
    {
        return "utilisateur/profilDe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 37,  110 => 36,  105 => 34,  101 => 33,  97 => 32,  93 => 31,  87 => 28,  74 => 18,  70 => 17,  66 => 16,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
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
        <h2>Profil de {{ user.username }} </h2>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->
<br>
<ol class=\"breadcrumb\">
  <li class=\"breadcrumb-item\"><a href=\"{{path('homepage')}}\">Accueil</a></li>
  <li class=\"breadcrumb-item active\">Profil de {{user.username}}</li>
  <a href=\"{{ app.request.headers.get('referer') }}\" class=\"btn btn-info pull-right\"><span class=\"glyphicon glyphicon-repeat\"></span> Retour</a>
</ol>
<div class=\"container\">
  <div class=\"col-lg-12\">



      <br><br>

    <div class=\"col-lg-12 \">
      <h3 align=\"center\">Informations sur {{ user.username }}</h3>
      <hr>
      <div class=\"col-sm-6 col-sm-offset-4\">
      <p> Nom : {{ user.nom }}</p>
      <p> Prénom : {{ user.prenom }}</p>
      <p> Date de naissance : {{ user.dateNaiss|date(\"d/m/Y\") }}</p>
      <p> Adresse : {{ user.adresse }}</p>

      <p> Pseudo : {{ user.username }}</p>
      <p> {{ 'profile.show.email'|trans }} : {{ user.email }}</p>

      <p> Projets : 0 </p>
      <p> Participations : 0</p>

      </div>

      </div>


    </div>
  </div>
</div>
{% endblock %}
", "utilisateur/profilDe.html.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/app/Resources/views/utilisateur/profilDe.html.twig");
    }
}
