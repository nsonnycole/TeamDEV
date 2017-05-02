<?php

/* default/index.html.twig */
class __TwigTemplate_2131c216df2e1fa44d93a4022976a929227a81f29136a582063930fc2c160bea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_53d684b672450065ff42e638b556b715a16bb9e96f8a97c324409e110086e349 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53d684b672450065ff42e638b556b715a16bb9e96f8a97c324409e110086e349->enter($__internal_53d684b672450065ff42e638b556b715a16bb9e96f8a97c324409e110086e349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_e86c99e6fb8bb287e29d8e6338946d183df71a17fe25955f61135ac81a04b021 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e86c99e6fb8bb287e29d8e6338946d183df71a17fe25955f61135ac81a04b021->enter($__internal_e86c99e6fb8bb287e29d8e6338946d183df71a17fe25955f61135ac81a04b021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53d684b672450065ff42e638b556b715a16bb9e96f8a97c324409e110086e349->leave($__internal_53d684b672450065ff42e638b556b715a16bb9e96f8a97c324409e110086e349_prof);

        
        $__internal_e86c99e6fb8bb287e29d8e6338946d183df71a17fe25955f61135ac81a04b021->leave($__internal_e86c99e6fb8bb287e29d8e6338946d183df71a17fe25955f61135ac81a04b021_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac8f9df6bae16b8a6cb1365612e6475496b15e7a6b8f9f637a544d743761470e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac8f9df6bae16b8a6cb1365612e6475496b15e7a6b8f9f637a544d743761470e->enter($__internal_ac8f9df6bae16b8a6cb1365612e6475496b15e7a6b8f9f637a544d743761470e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a7d8b08069422a4686d6753eb253332b48ed5fc91c845ca42f99eea6f9930caa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7d8b08069422a4686d6753eb253332b48ed5fc91c845ca42f99eea6f9930caa->enter($__internal_a7d8b08069422a4686d6753eb253332b48ed5fc91c845ca42f99eea6f9930caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<!-- MAIN IMAGE SECTION -->
<div id=\"headerwrap\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 col-lg-offset-2\">
        <h1>TeamDEV</h1>
        <h2>Travaillez à plusieurs pour un meilleur résultat</h2>
        <a class=\"btn btn-primary\" style=\"padding:20px;color:white\" href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\"><h3 style=\"padding:20px;color:white\">CONNEXION</h3></a>
        <div class=\"spacer\"></div>
        <i class=\"fa fa-angle-down\"></i>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /headerwrap -->

<!-- WELCOME SECTION -->

<!-- BLOG POSTS -->
<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-lg-12\">
      <h1>Les derniers projets</h1>
    </div><!-- col-lg-12 -->
    <div class=\"col-lg-8\">
      <p>Découvrez les dernieres propositions de projets.</p>
    </div><!-- col-lg-8-->
    <div class=\"col-lg-4 goright\">
      <p><a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projets");
        echo "\"><i class=\"fa fa-angle-right\"></i> Voir tous les projets</a></p>
    </div>
    </div>
  ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projets"]) ? $context["projets"] : $this->getContext($context, "projets")));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 35
            echo "      <div class=\"col-sm-4 \">
        <h3><a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showProjet", array("id" => $this->getAttribute($context["projet"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "nomProjet", array()), "html", null, true);
            echo "</a></h3>
        <img style=\"width: 350px;\"src=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/about-bg.jpg"), "html", null, true);
            echo "\" >
        <p>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "description", array()), "html", null, true);
            echo "</p>
        <p class=\"infos\">Début : ";
            // line 39
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["projet"], "dateDebut", array()), "d/m/Y"), "html", null, true);
            echo "  |  Places : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "nbPlaces", array()), "html", null, true);
            echo "  <br>statut : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "statut", array()), "html", null, true);
            echo "
        <br>Auteur : <a href=\"#\">Naomie</a></p>
        <p><a href=\"#\"><i class=\"fa fa-link\"></i> En savoir plus</a></p>
      </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "
  </div>
</div><!-- container -->

";
        
        $__internal_a7d8b08069422a4686d6753eb253332b48ed5fc91c845ca42f99eea6f9930caa->leave($__internal_a7d8b08069422a4686d6753eb253332b48ed5fc91c845ca42f99eea6f9930caa_prof);

        
        $__internal_ac8f9df6bae16b8a6cb1365612e6475496b15e7a6b8f9f637a544d743761470e->leave($__internal_ac8f9df6bae16b8a6cb1365612e6475496b15e7a6b8f9f637a544d743761470e_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 44,  108 => 39,  104 => 38,  100 => 37,  94 => 36,  91 => 35,  87 => 34,  81 => 31,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
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
<div id=\"headerwrap\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 col-lg-offset-2\">
        <h1>TeamDEV</h1>
        <h2>Travaillez à plusieurs pour un meilleur résultat</h2>
        <a class=\"btn btn-primary\" style=\"padding:20px;color:white\" href=\"{{path('fos_user_security_login')}}\"><h3 style=\"padding:20px;color:white\">CONNEXION</h3></a>
        <div class=\"spacer\"></div>
        <i class=\"fa fa-angle-down\"></i>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /headerwrap -->

<!-- WELCOME SECTION -->

<!-- BLOG POSTS -->
<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-lg-12\">
      <h1>Les derniers projets</h1>
    </div><!-- col-lg-12 -->
    <div class=\"col-lg-8\">
      <p>Découvrez les dernieres propositions de projets.</p>
    </div><!-- col-lg-8-->
    <div class=\"col-lg-4 goright\">
      <p><a href=\"{{path('projets')}}\"><i class=\"fa fa-angle-right\"></i> Voir tous les projets</a></p>
    </div>
    </div>
  {% for projet in projets %}
      <div class=\"col-sm-4 \">
        <h3><a href=\"{{ path('showProjet', {'id': projet.id}) }}\">{{projet.nomProjet}}</a></h3>
        <img style=\"width: 350px;\"src=\"{{asset(\"img/about-bg.jpg\")}}\" >
        <p>{{projet.description}}</p>
        <p class=\"infos\">Début : {{projet.dateDebut|date('d/m/Y')}}  |  Places : {{projet.nbPlaces}}  <br>statut : {{projet.statut}}
        <br>Auteur : <a href=\"#\">Naomie</a></p>
        <p><a href=\"#\"><i class=\"fa fa-link\"></i> En savoir plus</a></p>
      </div>
  {% endfor %}

  </div>
</div><!-- container -->

{% endblock %}
", "default/index.html.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/app/Resources/views/default/index.html.twig");
    }
}
