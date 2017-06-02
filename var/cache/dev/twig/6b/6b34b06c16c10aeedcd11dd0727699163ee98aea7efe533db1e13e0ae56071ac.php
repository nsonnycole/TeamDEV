<?php

/* projets/projets.html.twig */
class __TwigTemplate_5ff29cb58bce8c2b7c899ed1dd0e415d19cbf78e0231f27046abc85a7fe870e8 extends Twig_Template
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
        $__internal_8602b806b25eb8964449c62a0cb924b8703ba07b126ff31176762207187ae362 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8602b806b25eb8964449c62a0cb924b8703ba07b126ff31176762207187ae362->enter($__internal_8602b806b25eb8964449c62a0cb924b8703ba07b126ff31176762207187ae362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projets/projets.html.twig"));

        $__internal_faf5d73a14cf145fa34474e776bcc328e98bc5908d9ed3e6c88866d4a1a2054d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faf5d73a14cf145fa34474e776bcc328e98bc5908d9ed3e6c88866d4a1a2054d->enter($__internal_faf5d73a14cf145fa34474e776bcc328e98bc5908d9ed3e6c88866d4a1a2054d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projets/projets.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8602b806b25eb8964449c62a0cb924b8703ba07b126ff31176762207187ae362->leave($__internal_8602b806b25eb8964449c62a0cb924b8703ba07b126ff31176762207187ae362_prof);

        
        $__internal_faf5d73a14cf145fa34474e776bcc328e98bc5908d9ed3e6c88866d4a1a2054d->leave($__internal_faf5d73a14cf145fa34474e776bcc328e98bc5908d9ed3e6c88866d4a1a2054d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a49a5b779d79014689f304b57bc9f5359808e43b296350b7e2b3e8674014a348 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a49a5b779d79014689f304b57bc9f5359808e43b296350b7e2b3e8674014a348->enter($__internal_a49a5b779d79014689f304b57bc9f5359808e43b296350b7e2b3e8674014a348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1cb4b8cfa2e47e014ba02c9cba42f9a684c42f43874914e3ef023d0745bedab3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cb4b8cfa2e47e014ba02c9cba42f9a684c42f43874914e3ef023d0745bedab3->enter($__internal_1cb4b8cfa2e47e014ba02c9cba42f9a684c42f43874914e3ef023d0745bedab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
    <div id=\"searchbar\" class=\"col-md-6 col-md-offset-3\">
      <form action=\"#\" method=\"post\">
      ";
            // line 48
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
            echo "
      ";
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
            echo "

      </form>
\t\t</div>
\t</div>
  <div class=\"container\">
  ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["projets"]) ? $context["projets"] : $this->getContext($context, "projets")));
            foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
                // line 56
                echo "      <div class=\"col-lg-4 projet\">
        <center>
        <a href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showProjet", array("id" => $this->getAttribute($context["projet"], "id", array()))), "html", null, true);
                echo "\">
        <h3>";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "nomProjet", array()), "html", null, true);
                echo "</h3>
          <img src=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "file", array()), "html", null, true);
                echo "\" width=\"350px\" height=\"300px\">
        </a>
        <p>";
                // line 62
                echo twig_escape_filter($this->env, twig_slice($this->env, strip_tags($this->getAttribute($context["projet"], "description", array())), 0, 40), "html", null, true);
                echo " [...]</p>
        <p class=\"infos\">Début : ";
                // line 63
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["projet"], "dateDebut", array()), "d/m/Y"), "html", null, true);
                echo "  |  Places : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "nbPlaces", array()), "html", null, true);
                echo "
        <br><b> statut : ";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["projet"], "statut", array()), "nom", array()), "html", null, true);
                echo "</b>
        <br>Auteur : <a href=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profilDe", array("username" => $this->getAttribute($this->getAttribute($context["projet"], "idUtilisateur", array()), "username", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["projet"], "idUtilisateur", array()), "username", array()), "html", null, true);
                echo "</a></p>
        </center>
      </div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "</div>

";
        } else {
            // line 72
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login"));
            echo "
";
        }
        
        $__internal_1cb4b8cfa2e47e014ba02c9cba42f9a684c42f43874914e3ef023d0745bedab3->leave($__internal_1cb4b8cfa2e47e014ba02c9cba42f9a684c42f43874914e3ef023d0745bedab3_prof);

        
        $__internal_a49a5b779d79014689f304b57bc9f5359808e43b296350b7e2b3e8674014a348->leave($__internal_a49a5b779d79014689f304b57bc9f5359808e43b296350b7e2b3e8674014a348_prof);

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
        return array (  191 => 72,  186 => 69,  174 => 65,  170 => 64,  164 => 63,  160 => 62,  155 => 60,  151 => 59,  147 => 58,  143 => 56,  139 => 55,  130 => 49,  126 => 48,  114 => 39,  101 => 29,  85 => 15,  77 => 13,  71 => 10,  67 => 9,  63 => 8,  56 => 7,  54 => 6,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
    <div id=\"searchbar\" class=\"col-md-6 col-md-offset-3\">
      <form action=\"#\" method=\"post\">
      {{ form_start(form) }}
      {{ form_widget(form) }}

      </form>
\t\t</div>
\t</div>
  <div class=\"container\">
  {% for projet in projets %}
      <div class=\"col-lg-4 projet\">
        <center>
        <a href=\"{{ path('showProjet', {'id': projet.id}) }}\">
        <h3>{{projet.nomProjet}}</h3>
          <img src=\"{{projet.file}}\" width=\"350px\" height=\"300px\">
        </a>
        <p>{{projet.description | striptags | slice(0, 40) }} [...]</p>
        <p class=\"infos\">Début : {{projet.dateDebut|date('d/m/Y')}}  |  Places : {{projet.nbPlaces}}
        <br><b> statut : {{projet.statut.nom}}</b>
        <br>Auteur : <a href=\"{{ path('profilDe', {'username': projet.idUtilisateur.username}) }}\">{{projet.idUtilisateur.username}}</a></p>
        </center>
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
