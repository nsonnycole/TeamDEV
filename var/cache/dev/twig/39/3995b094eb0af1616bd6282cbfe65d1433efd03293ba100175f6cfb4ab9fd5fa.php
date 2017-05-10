<?php

/* projets/projets.html.twig */
class __TwigTemplate_175fe2b9d568686cbabb045448fafefb7b8d8316deb0e0367dc77a18820cb333 extends Twig_Template
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
        $__internal_8ff969ceca2afb35f3f51f03f7a264f4a71bd715bdc6ae6764793e00b8d46fc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ff969ceca2afb35f3f51f03f7a264f4a71bd715bdc6ae6764793e00b8d46fc2->enter($__internal_8ff969ceca2afb35f3f51f03f7a264f4a71bd715bdc6ae6764793e00b8d46fc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projets/projets.html.twig"));

        $__internal_68ef9a9aadf5bf37972b53977e2f0cc533485b33f8f7c3a924608d3b7a2cd80f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68ef9a9aadf5bf37972b53977e2f0cc533485b33f8f7c3a924608d3b7a2cd80f->enter($__internal_68ef9a9aadf5bf37972b53977e2f0cc533485b33f8f7c3a924608d3b7a2cd80f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projets/projets.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ff969ceca2afb35f3f51f03f7a264f4a71bd715bdc6ae6764793e00b8d46fc2->leave($__internal_8ff969ceca2afb35f3f51f03f7a264f4a71bd715bdc6ae6764793e00b8d46fc2_prof);

        
        $__internal_68ef9a9aadf5bf37972b53977e2f0cc533485b33f8f7c3a924608d3b7a2cd80f->leave($__internal_68ef9a9aadf5bf37972b53977e2f0cc533485b33f8f7c3a924608d3b7a2cd80f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a53955cc8fd86da83bdee7ad631c45d110c69b5acbb87e6f85c5fd5cbfbca57b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a53955cc8fd86da83bdee7ad631c45d110c69b5acbb87e6f85c5fd5cbfbca57b->enter($__internal_a53955cc8fd86da83bdee7ad631c45d110c69b5acbb87e6f85c5fd5cbfbca57b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_89a45f755c2c86cba6a4988a3322a635e35a57225b6145c7c59b8c76dd7f4703 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89a45f755c2c86cba6a4988a3322a635e35a57225b6145c7c59b8c76dd7f4703->enter($__internal_89a45f755c2c86cba6a4988a3322a635e35a57225b6145c7c59b8c76dd7f4703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <h2>Les projets</h2>
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
        // line 37
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
\t\t\t                    
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
        echo "  </div><!-- row -->
</div>
<br><br>
";
        
        $__internal_89a45f755c2c86cba6a4988a3322a635e35a57225b6145c7c59b8c76dd7f4703->leave($__internal_89a45f755c2c86cba6a4988a3322a635e35a57225b6145c7c59b8c76dd7f4703_prof);

        
        $__internal_a53955cc8fd86da83bdee7ad631c45d110c69b5acbb87e6f85c5fd5cbfbca57b->leave($__internal_a53955cc8fd86da83bdee7ad631c45d110c69b5acbb87e6f85c5fd5cbfbca57b_prof);

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
        return array (  190 => 85,  178 => 81,  174 => 80,  168 => 79,  164 => 78,  159 => 76,  155 => 75,  151 => 74,  148 => 73,  144 => 72,  106 => 37,  93 => 27,  77 => 13,  69 => 11,  63 => 8,  59 => 7,  54 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
\t\t\t                    
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
        <br>Auteur : <a href=\"{{ path('profilDe', {'username': projet.idUtilisateur.username}) }}\">{{projet.idUtilisateur.username}}</a></p>

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
", "projets/projets.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/views/projets/projets.html.twig");
    }
}
