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
        $__internal_a0426c44eee403edd359b4feb23909bc5ced629cdd12b3168481c921af09c7d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0426c44eee403edd359b4feb23909bc5ced629cdd12b3168481c921af09c7d4->enter($__internal_a0426c44eee403edd359b4feb23909bc5ced629cdd12b3168481c921af09c7d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projets/projets.html.twig"));

        $__internal_28993a469385666eafa057b1ef9e0bd0b12682385d03e53a295b717bf7b4170c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28993a469385666eafa057b1ef9e0bd0b12682385d03e53a295b717bf7b4170c->enter($__internal_28993a469385666eafa057b1ef9e0bd0b12682385d03e53a295b717bf7b4170c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projets/projets.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0426c44eee403edd359b4feb23909bc5ced629cdd12b3168481c921af09c7d4->leave($__internal_a0426c44eee403edd359b4feb23909bc5ced629cdd12b3168481c921af09c7d4_prof);

        
        $__internal_28993a469385666eafa057b1ef9e0bd0b12682385d03e53a295b717bf7b4170c->leave($__internal_28993a469385666eafa057b1ef9e0bd0b12682385d03e53a295b717bf7b4170c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e8016bd02f662d6ccdf65f0c5b9b1ae79ca5b1b525d7c7c345d4b738fe354554 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8016bd02f662d6ccdf65f0c5b9b1ae79ca5b1b525d7c7c345d4b738fe354554->enter($__internal_e8016bd02f662d6ccdf65f0c5b9b1ae79ca5b1b525d7c7c345d4b738fe354554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a0f8c5aa061253281dcda2c512e9e593f6d57d475c39cf7e5b98217b0fd3ffe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0f8c5aa061253281dcda2c512e9e593f6d57d475c39cf7e5b98217b0fd3ffe0->enter($__internal_a0f8c5aa061253281dcda2c512e9e593f6d57d475c39cf7e5b98217b0fd3ffe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
<ol class=\"breadcrumb\">
  <li class=\"breadcrumb-item\"><a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Accueil</a></li>
  <li class=\"breadcrumb-item active\">Projets</li>
</ol>
  <div class=\"container\">
    <div class=\"row mt\">
      <div class=\"col-lg-8\">
        <h2>Un moyen facile de montez en compétences!</h2>
        <p>découvrez les projets créer par les autres membres, participer y, ou créer votre propre projet.</p>
      </div>
      <div class=\"col-lg-4\">
        <p class=\"pull-right\"><br><a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newProjet");
        echo "\" class=\"btn btn-primary\">créer vous aussi votre projet</a></p>
      </div>
    </div><!-- /row -->
  </div><!-- /.container -->


  <div class=\"container\">
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
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projets"]) ? $context["projets"] : $this->getContext($context, "projets")));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 65
            echo "      <div class=\"col-lg-4 projet\">
        <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showProjet", array("id" => $this->getAttribute($context["projet"], "id", array()))), "html", null, true);
            echo "\">
        <h4>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "nomProjet", array()), "html", null, true);
            echo "</h4>
        <img style=\"width: 350px;\"src=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/about-bg.jpg"), "html", null, true);
            echo "\" >
        </a>
        <p>";
            // line 70
            echo twig_escape_filter($this->env, twig_slice($this->env, strip_tags($this->getAttribute($context["projet"], "description", array())), 0, 40), "html", null, true);
            echo " [...]</p>
        <p class=\"infos\">Début : ";
            // line 71
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["projet"], "dateDebut", array()), "d/m/Y"), "html", null, true);
            echo "  |  Places : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "nbPlaces", array()), "html", null, true);
            echo "
        <br><b> statut : ";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["projet"], "statut", array()), "nom", array()), "html", null, true);
            echo "</b>
        <br>Auteur : <a href=\"#\">";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["projet"], "idUtilisateur", array()), "username", array()), "html", null, true);
            echo "</a></p>
        <p><a href=\"#\"><i class=\"fa fa-link\"></i> En savoir plus</a></p>
      </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "  </div><!-- row -->
</div>
<br><br>
";
        
        $__internal_a0f8c5aa061253281dcda2c512e9e593f6d57d475c39cf7e5b98217b0fd3ffe0->leave($__internal_a0f8c5aa061253281dcda2c512e9e593f6d57d475c39cf7e5b98217b0fd3ffe0_prof);

        
        $__internal_e8016bd02f662d6ccdf65f0c5b9b1ae79ca5b1b525d7c7c345d4b738fe354554->leave($__internal_e8016bd02f662d6ccdf65f0c5b9b1ae79ca5b1b525d7c7c345d4b738fe354554_prof);

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
        return array (  161 => 77,  151 => 73,  147 => 72,  141 => 71,  137 => 70,  132 => 68,  128 => 67,  124 => 66,  121 => 65,  117 => 64,  77 => 27,  64 => 17,  49 => 4,  40 => 3,  11 => 1,);
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
<ol class=\"breadcrumb\">
  <li class=\"breadcrumb-item\"><a href=\"{{path('homepage')}}\">Accueil</a></li>
  <li class=\"breadcrumb-item active\">Projets</li>
</ol>
  <div class=\"container\">
    <div class=\"row mt\">
      <div class=\"col-lg-8\">
        <h2>Un moyen facile de montez en compétences!</h2>
        <p>découvrez les projets créer par les autres membres, participer y, ou créer votre propre projet.</p>
      </div>
      <div class=\"col-lg-4\">
        <p class=\"pull-right\"><br><a href=\"{{path('newProjet')}}\" class=\"btn btn-primary\">créer vous aussi votre projet</a></p>
      </div>
    </div><!-- /row -->
  </div><!-- /.container -->


  <div class=\"container\">
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
        <a href=\"{{ path('showProjet', {'id': projet.id}) }}\">
        <h4>{{projet.nomProjet}}</h4>
        <img style=\"width: 350px;\"src=\"{{asset(\"img/about-bg.jpg\")}}\" >
        </a>
        <p>{{projet.description | striptags | slice(0, 40) }} [...]</p>
        <p class=\"infos\">Début : {{projet.dateDebut|date('d/m/Y')}}  |  Places : {{projet.nbPlaces}}
        <br><b> statut : {{projet.statut.nom}}</b>
        <br>Auteur : <a href=\"#\">{{projet.idUtilisateur.username}}</a></p>
        <p><a href=\"#\"><i class=\"fa fa-link\"></i> En savoir plus</a></p>
      </div>
  {% endfor %}
  </div><!-- row -->
</div>
<br><br>
{#
<div class=\"container\">
<div class=\"paginate\" align=\"center\"><!-- remove width id you don't need it-->
    <ul class=\"pagination\">
      <li><a href=\"#\"rel=\"prev\" class=\"page-prev\"><span class=\"glyphicon glyphicon-chevron-left\"></span></a></li>
      <li class=\"active \"><span>1</span></li>
      <li><a href=\"#\" class=\" \">2</a></li>
      <li><a href=\"#\" class=\" \">3</a></li>
      <li><a href=\"#\" rel=\"next\" class=\"page-next\"><span class=\"glyphicon glyphicon-chevron-right\"></span></a></li>
    </ul>
    <div class=\"clearfix\"></div>
  </div>
</div>#}
{% endblock %}
", "projets/projets.html.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/app/Resources/views/projets/projets.html.twig");
    }
}
