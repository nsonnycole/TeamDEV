<?php

/* projets/projets.html.twig */
class __TwigTemplate_7c9444175999336a1544a71e06087376fb65f50fa57cb0922e0da8f85ad46cf7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "projets/projets.html.twig", 1);
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
        $__internal_5cd269bbdd60019c03a6c4806a26d46c72d57949776fbe13bd8a6ae490bf63b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cd269bbdd60019c03a6c4806a26d46c72d57949776fbe13bd8a6ae490bf63b0->enter($__internal_5cd269bbdd60019c03a6c4806a26d46c72d57949776fbe13bd8a6ae490bf63b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projets/projets.html.twig"));

        $__internal_35bb20196b6f98f742cabfb7bd06df4a42f9cc9fa0bb366ab7ad33b34ff51e63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35bb20196b6f98f742cabfb7bd06df4a42f9cc9fa0bb366ab7ad33b34ff51e63->enter($__internal_35bb20196b6f98f742cabfb7bd06df4a42f9cc9fa0bb366ab7ad33b34ff51e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projets/projets.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cd269bbdd60019c03a6c4806a26d46c72d57949776fbe13bd8a6ae490bf63b0->leave($__internal_5cd269bbdd60019c03a6c4806a26d46c72d57949776fbe13bd8a6ae490bf63b0_prof);

        
        $__internal_35bb20196b6f98f742cabfb7bd06df4a42f9cc9fa0bb366ab7ad33b34ff51e63->leave($__internal_35bb20196b6f98f742cabfb7bd06df4a42f9cc9fa0bb366ab7ad33b34ff51e63_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8291f3d5b92c5c08ccb6eb661f80267da9827793a6c956650da6f2e082e53cab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8291f3d5b92c5c08ccb6eb661f80267da9827793a6c956650da6f2e082e53cab->enter($__internal_8291f3d5b92c5c08ccb6eb661f80267da9827793a6c956650da6f2e082e53cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c17feb2d73768cd32e2988643c1e7d802c14b72022146eca1888c6b6e7e9a684 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c17feb2d73768cd32e2988643c1e7d802c14b72022146eca1888c6b6e7e9a684->enter($__internal_c17feb2d73768cd32e2988643c1e7d802c14b72022146eca1888c6b6e7e9a684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<!-- MAIN IMAGE SECTION -->
<div id=\"portwrap\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 col-lg-offset-2\">
        <h2>Les projets</h2>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->

<!-- WELCOME SECTION -->
  <div class=\"container\">
    <div class=\"row mt\">
      <div class=\"col-lg-8\">
        <h2>Un moyen facile de montez en compétences!</h2>
        <p>découvrez les projets créer par les autres membres, participer y, ou créer votre propre projet.</p>
      </div>
      <div class=\"col-lg-4\">
        <p class=\"pull-right\"><br><button type=\"button\" class=\"btn btn-green\">créer vous aussi votre projet</button></p>
      </div>
    </div><!-- /row -->
  </div><!-- /.container -->


  <div id=\"container\">
    <div id=\"searchbar\">
\t\t\t<form method=\"post\" role=\"search\">
\t\t\t\t<div class=\"row\">
    \t\t\t\t<div class=\"col-xs-8 col-xs-offset-2\">
\t\t\t\t\t    <div class=\"input-group\">
\t\t\t                <div class=\"input-group-btn search-panel\">
\t\t\t                    <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t                    \t<span id=\"search_concept\">Filtrez par</span> <span class=\"caret\"></span>
\t\t\t                    </button>
\t\t\t                    <ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t                      <li><a href=\"#Title\">Nom</a></li>
\t\t\t                      <li><a href=\"#Author\">Statut</a></li>
\t\t\t                      <li><a href=\"#SubjectAreas\">Date de début</a></li>
\t\t\t\t\t\t\t\t  <li class=\"divider\"></li>
\t\t\t  \t\t\t  \t\t  <li><a href=\"#all\">Tout afficher</a></li>
\t\t\t\t\t\t\t  \t</ul>
\t\t\t                </div>
\t\t\t                <input type=\"hidden\" name=\"search_filter\" value=\"all\" id=\"search_filter\">
\t\t\t                <input type=\"text\" class=\"form-control\" id=\"searchbox\" name=\"search_text\" placeholder=\"Rerchercher..\">
\t\t\t                <span class=\"input-group-btn\">
\t\t\t                    <button class=\"btn btn-default\" type=\"submit\"><span class=\"glyphicon glyphicon-search\"></span></button>
\t\t\t                </span>
\t\t\t            </div>
    \t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
  <div class=\"container\">
  <div class=\"row mt\">
  ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projets"]) ? $context["projets"] : $this->getContext($context, "projets")));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 61
            echo "      <div class=\"col-lg-4 projet\">
        <h3><a href=\"";
            // line 62
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("showProjet");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "nomProjet", array()), "html", null, true);
            echo "</a></h3>
        <p>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "description", array()), "html", null, true);
            echo "</p>
        <p class=\"infos\">Début : ";
            // line 64
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["projet"], "dateDebut", array()), "d/m/Y"), "html", null, true);
            echo "  |  Places : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "nbPlaces", array()), "html", null, true);
            echo " | statut : ";
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
        // line 69
        echo "  </div><!-- container -->
</div>
";
        
        $__internal_c17feb2d73768cd32e2988643c1e7d802c14b72022146eca1888c6b6e7e9a684->leave($__internal_c17feb2d73768cd32e2988643c1e7d802c14b72022146eca1888c6b6e7e9a684_prof);

        
        $__internal_8291f3d5b92c5c08ccb6eb661f80267da9827793a6c956650da6f2e082e53cab->leave($__internal_8291f3d5b92c5c08ccb6eb661f80267da9827793a6c956650da6f2e082e53cab_prof);

    }

    public function getTemplateName()
    {
        return "projets/projets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 69,  124 => 64,  120 => 63,  114 => 62,  111 => 61,  107 => 60,  49 => 4,  40 => 3,  11 => 1,);
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
        <h2>Les projets</h2>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->

<!-- WELCOME SECTION -->
  <div class=\"container\">
    <div class=\"row mt\">
      <div class=\"col-lg-8\">
        <h2>Un moyen facile de montez en compétences!</h2>
        <p>découvrez les projets créer par les autres membres, participer y, ou créer votre propre projet.</p>
      </div>
      <div class=\"col-lg-4\">
        <p class=\"pull-right\"><br><button type=\"button\" class=\"btn btn-green\">créer vous aussi votre projet</button></p>
      </div>
    </div><!-- /row -->
  </div><!-- /.container -->


  <div id=\"container\">
    <div id=\"searchbar\">
\t\t\t<form method=\"post\" role=\"search\">
\t\t\t\t<div class=\"row\">
    \t\t\t\t<div class=\"col-xs-8 col-xs-offset-2\">
\t\t\t\t\t    <div class=\"input-group\">
\t\t\t                <div class=\"input-group-btn search-panel\">
\t\t\t                    <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t                    \t<span id=\"search_concept\">Filtrez par</span> <span class=\"caret\"></span>
\t\t\t                    </button>
\t\t\t                    <ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t                      <li><a href=\"#Title\">Nom</a></li>
\t\t\t                      <li><a href=\"#Author\">Statut</a></li>
\t\t\t                      <li><a href=\"#SubjectAreas\">Date de début</a></li>
\t\t\t\t\t\t\t\t  <li class=\"divider\"></li>
\t\t\t  \t\t\t  \t\t  <li><a href=\"#all\">Tout afficher</a></li>
\t\t\t\t\t\t\t  \t</ul>
\t\t\t                </div>
\t\t\t                <input type=\"hidden\" name=\"search_filter\" value=\"all\" id=\"search_filter\">
\t\t\t                <input type=\"text\" class=\"form-control\" id=\"searchbox\" name=\"search_text\" placeholder=\"Rerchercher..\">
\t\t\t                <span class=\"input-group-btn\">
\t\t\t                    <button class=\"btn btn-default\" type=\"submit\"><span class=\"glyphicon glyphicon-search\"></span></button>
\t\t\t                </span>
\t\t\t            </div>
    \t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
  <div class=\"container\">
  <div class=\"row mt\">
  {% for projet in projets %}
      <div class=\"col-lg-4 projet\">
        <h3><a href=\"{{url ('showProjet')}}\">{{projet.nomProjet}}</a></h3>
        <p>{{projet.description}}</p>
        <p class=\"infos\">Début : {{projet.dateDebut|date('d/m/Y')}}  |  Places : {{projet.nbPlaces}} | statut : {{projet.statut}}
        <br>Auteur : <a href=\"#\">Naomie</a></p>
        <p><a href=\"#\"><i class=\"fa fa-link\"></i> En savoir plus</a></p>
      </div>
  {% endfor %}
  </div><!-- container -->
</div>
{% endblock %}
", "projets/projets.html.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/app/Resources/views/projets/projets.html.twig");
    }
}
