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
        $__internal_d7e47c82f1e6f7d5ff3d61d3053f09d624df2914ceafbc20075a2f49a3ce4c6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7e47c82f1e6f7d5ff3d61d3053f09d624df2914ceafbc20075a2f49a3ce4c6d->enter($__internal_d7e47c82f1e6f7d5ff3d61d3053f09d624df2914ceafbc20075a2f49a3ce4c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projets/projets.html.twig"));

        $__internal_f9f56cae4ebebf6fd324f6a5c59cdcb7568b0a3a494a80a2c2d1a9668c275702 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9f56cae4ebebf6fd324f6a5c59cdcb7568b0a3a494a80a2c2d1a9668c275702->enter($__internal_f9f56cae4ebebf6fd324f6a5c59cdcb7568b0a3a494a80a2c2d1a9668c275702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projets/projets.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7e47c82f1e6f7d5ff3d61d3053f09d624df2914ceafbc20075a2f49a3ce4c6d->leave($__internal_d7e47c82f1e6f7d5ff3d61d3053f09d624df2914ceafbc20075a2f49a3ce4c6d_prof);

        
        $__internal_f9f56cae4ebebf6fd324f6a5c59cdcb7568b0a3a494a80a2c2d1a9668c275702->leave($__internal_f9f56cae4ebebf6fd324f6a5c59cdcb7568b0a3a494a80a2c2d1a9668c275702_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_59d2b698843c2b8833f8f930f420d6bac6e68f69609e01b47cd46049f710c4c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59d2b698843c2b8833f8f930f420d6bac6e68f69609e01b47cd46049f710c4c9->enter($__internal_59d2b698843c2b8833f8f930f420d6bac6e68f69609e01b47cd46049f710c4c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bd4dbaf02f0f9761b575e711b332aeb593c99fbb8164a62372209ca5c9320b37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd4dbaf02f0f9761b575e711b332aeb593c99fbb8164a62372209ca5c9320b37->enter($__internal_bd4dbaf02f0f9761b575e711b332aeb593c99fbb8164a62372209ca5c9320b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo "  </div><!-- row -->
</div>
<br><br>
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
</div>
";
        
        $__internal_bd4dbaf02f0f9761b575e711b332aeb593c99fbb8164a62372209ca5c9320b37->leave($__internal_bd4dbaf02f0f9761b575e711b332aeb593c99fbb8164a62372209ca5c9320b37_prof);

        
        $__internal_59d2b698843c2b8833f8f930f420d6bac6e68f69609e01b47cd46049f710c4c9->leave($__internal_59d2b698843c2b8833f8f930f420d6bac6e68f69609e01b47cd46049f710c4c9_prof);

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
  </div><!-- row -->
</div>
<br><br>
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
</div>
{% endblock %}
", "projets/projets.html.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/app/Resources/views/projets/projets.html.twig");
    }
}
