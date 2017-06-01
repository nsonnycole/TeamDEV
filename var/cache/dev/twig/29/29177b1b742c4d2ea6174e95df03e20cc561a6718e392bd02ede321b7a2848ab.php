<?php

/* projets/projets.html.twig */
class __TwigTemplate_e43dd3683ac5c909e4257c1204d8f96a54564cd9e4f1a51f26a4ca85c0bba583 extends Twig_Template
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
        $__internal_e5f4dc94d34c2d1185922f208094cdeb4a3ca5b186303533d59e1c58a8ba290b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5f4dc94d34c2d1185922f208094cdeb4a3ca5b186303533d59e1c58a8ba290b->enter($__internal_e5f4dc94d34c2d1185922f208094cdeb4a3ca5b186303533d59e1c58a8ba290b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projets/projets.html.twig"));

        $__internal_fab4531fb2f104373b6e77d2df4cff11d093ff8ace21aefb9e05749fc8ada983 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fab4531fb2f104373b6e77d2df4cff11d093ff8ace21aefb9e05749fc8ada983->enter($__internal_fab4531fb2f104373b6e77d2df4cff11d093ff8ace21aefb9e05749fc8ada983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projets/projets.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5f4dc94d34c2d1185922f208094cdeb4a3ca5b186303533d59e1c58a8ba290b->leave($__internal_e5f4dc94d34c2d1185922f208094cdeb4a3ca5b186303533d59e1c58a8ba290b_prof);

        
        $__internal_fab4531fb2f104373b6e77d2df4cff11d093ff8ace21aefb9e05749fc8ada983->leave($__internal_fab4531fb2f104373b6e77d2df4cff11d093ff8ace21aefb9e05749fc8ada983_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ecc2515425fad88edcd399e7feaae5effb1f57fad9f62d51dcca7a6d8d9d8351 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecc2515425fad88edcd399e7feaae5effb1f57fad9f62d51dcca7a6d8d9d8351->enter($__internal_ecc2515425fad88edcd399e7feaae5effb1f57fad9f62d51dcca7a6d8d9d8351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ee5c1822847e5f8e64088148784c87c53d4cfc8316a1913bc75c8581e255c4df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee5c1822847e5f8e64088148784c87c53d4cfc8316a1913bc75c8581e255c4df->enter($__internal_ee5c1822847e5f8e64088148784c87c53d4cfc8316a1913bc75c8581e255c4df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 5
            echo "<div class=\"container\" style=\"display:inline\">
    ";
            // line 6
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 7
                echo "        <a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
                echo "\"><img  width=\"50px;\"src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("img/avatar/" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "avatar", array()), "url", array()))), "html", null, true);
                echo "\"></a>
        ";
                // line 8
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
                echo " |
        <a href=\"";
                // line 9
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
                echo "\">
            ";
                // line 10
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
                echo "
        </a>
    ";
            } else {
                // line 13
                echo "        <a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
                echo "</a>
    ";
            }
            // line 15
            echo "</div>
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
  <li class=\"breadcrumb-item\"><a href=\"";
            // line 29
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\">Accueil</a></li>
  <li class=\"breadcrumb-item active\">Projets</li>
</ol>
  <div class=\"container\">
    <div class=\"row mt\">
      <div class=\"col-lg-8\">
        <h2>Un moyen facile de monter en compétence!</h2>
        <p>découvrez les projets créer par les autres membres, participer y, ou créer votre propre projet.</p>
      </div>
      <div class=\"col-lg-4\">
        <p class=\"pull-right\"><br><a href=\"";
            // line 39
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
\t\t\t                    <ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t                      <li><a href=\"#Title\">Nom</a></li>
\t\t\t                      <li><a href=\"#Author\">Statut</a></li>
\t\t\t                      <li><a href=\"#SubjectAreas\">Date de début</a></li>
\t\t\t\t\t\t\t\t  <li class=\"divider\"></li>
\t\t\t  \t\t\t  \t\t  <li><a href=\"#all\">Tout afficher</a></li>
\t\t\t\t\t\t\t  \t</ul>
\t\t\t                </div>
\t\t\t                <input type=\"hidden\" name=\"search_filter\" value=\"all\" id=\"search_filter\">
\t\t\t                <input type=\"text\" class=\"form-control\" data-id=\"texte\" id=\"searchbox\" name=\"search_text\" placeholder=\"Rerchercher..\">
\t\t\t                <span class=\"input-group-btn\">
\t\t\t                    <button class=\"btn btn-default\" href=\"";
            // line 63
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recherche", array("texte" => "yoo"));
            echo "\"><span class=\"glyphicon glyphicon-search\"></span></button>
\t\t\t                </span>
\t\t\t            </div>
    \t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
  <div class=\"container\">
  ";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["projets"]) ? $context["projets"] : $this->getContext($context, "projets")));
            foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
                // line 73
                echo "      <div class=\"col-lg-4 projet\">
        <a href=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showProjet", array("id" => $this->getAttribute($context["projet"], "id", array()))), "html", null, true);
                echo "\">
        <h4>";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "nomProjet", array()), "html", null, true);
                echo "</h4>
        <img style=\"width: 350px;\"src=\"";
                // line 76
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/about-bg.jpg"), "html", null, true);
                echo "\" >
        </a>
        <p>";
                // line 78
                echo twig_escape_filter($this->env, twig_slice($this->env, strip_tags($this->getAttribute($context["projet"], "description", array())), 0, 40), "html", null, true);
                echo " [...]</p>
        <p class=\"infos\">Début : ";
                // line 79
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["projet"], "dateDebut", array()), "d/m/Y"), "html", null, true);
                echo "  |  Places : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "nbPlaces", array()), "html", null, true);
                echo "
        <br><b> statut : ";
                // line 80
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["projet"], "statut", array()), "nom", array()), "html", null, true);
                echo "</b>
        <br>Auteur : <a href=\"";
                // line 81
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profilDe", array("username" => $this->getAttribute($this->getAttribute($context["projet"], "idUtilisateur", array()), "username", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["projet"], "idUtilisateur", array()), "username", array()), "html", null, true);
                echo "</a></p>

      </div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "</div>

";
        } else {
            // line 88
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login"));
            echo "
";
        }
        
        $__internal_ee5c1822847e5f8e64088148784c87c53d4cfc8316a1913bc75c8581e255c4df->leave($__internal_ee5c1822847e5f8e64088148784c87c53d4cfc8316a1913bc75c8581e255c4df_prof);

        
        $__internal_ecc2515425fad88edcd399e7feaae5effb1f57fad9f62d51dcca7a6d8d9d8351->leave($__internal_ecc2515425fad88edcd399e7feaae5effb1f57fad9f62d51dcca7a6d8d9d8351_prof);

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
        return array (  204 => 88,  199 => 85,  187 => 81,  183 => 80,  177 => 79,  173 => 78,  168 => 76,  164 => 75,  160 => 74,  157 => 73,  153 => 72,  141 => 63,  114 => 39,  101 => 29,  85 => 15,  77 => 13,  71 => 10,  67 => 9,  63 => 8,  56 => 7,  54 => 6,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
{% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
<div class=\"container\" style=\"display:inline\">
    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
        <a href=\"{{path('fos_user_profile_show')}}\"><img  width=\"50px;\"src=\"{{asset('img/avatar/'~app.user.avatar.url)}}\"></a>
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
        <h2>Un moyen facile de monter en compétence!</h2>
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
\t\t\t                    <ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t                      <li><a href=\"#Title\">Nom</a></li>
\t\t\t                      <li><a href=\"#Author\">Statut</a></li>
\t\t\t                      <li><a href=\"#SubjectAreas\">Date de début</a></li>
\t\t\t\t\t\t\t\t  <li class=\"divider\"></li>
\t\t\t  \t\t\t  \t\t  <li><a href=\"#all\">Tout afficher</a></li>
\t\t\t\t\t\t\t  \t</ul>
\t\t\t                </div>
\t\t\t                <input type=\"hidden\" name=\"search_filter\" value=\"all\" id=\"search_filter\">
\t\t\t                <input type=\"text\" class=\"form-control\" data-id=\"texte\" id=\"searchbox\" name=\"search_text\" placeholder=\"Rerchercher..\">
\t\t\t                <span class=\"input-group-btn\">
\t\t\t                    <button class=\"btn btn-default\" href=\"{{path('recherche', {'texte': 'yoo'})}}\"><span class=\"glyphicon glyphicon-search\"></span></button>
\t\t\t                </span>
\t\t\t            </div>
    \t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
  <div class=\"container\">
  {% for projet in projets %}
      <div class=\"col-lg-4 projet\">
        <a href=\"{{ path('showProjet', {'id': projet.id}) }}\">
        <h4>{{projet.nomProjet}}</h4>
        <img style=\"width: 350px;\"src=\"{{asset(\"img/about-bg.jpg\")}}\" >
        </a>
        <p>{{projet.description | striptags | slice(0, 40) }} [...]</p>
        <p class=\"infos\">Début : {{projet.dateDebut|date('d/m/Y')}}  |  Places : {{projet.nbPlaces}}
        <br><b> statut : {{projet.statut.nom}}</b>
        <br>Auteur : <a href=\"{{ path('profilDe', {'username': projet.idUtilisateur.username}) }}\">{{projet.idUtilisateur.username}}</a></p>

      </div>
  {% endfor %}
</div>

{% else %}
{{ render(path('fos_user_security_login')) }}
{% endif %}
{% endblock %}
", "projets/projets.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/views/projets/projets.html.twig");
    }
}
