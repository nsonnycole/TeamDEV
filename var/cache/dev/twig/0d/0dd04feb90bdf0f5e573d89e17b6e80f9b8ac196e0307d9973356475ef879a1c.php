<?php

/* :utilisateur:participationDe.html.twig */
class __TwigTemplate_1e2434abf1f962dc8773a42ae704d7941005017e84ee9374b8039f1155436506 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":utilisateur:participationDe.html.twig", 1);
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
        $__internal_e9bcef1e7ec6bcae601c59e4f26bec39358d9cd4179089ee034b826c11998326 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9bcef1e7ec6bcae601c59e4f26bec39358d9cd4179089ee034b826c11998326->enter($__internal_e9bcef1e7ec6bcae601c59e4f26bec39358d9cd4179089ee034b826c11998326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":utilisateur:participationDe.html.twig"));

        $__internal_45345acd77cd7b4cf84158ca085650c1a59e354abb96ce031a7ca504de2c97b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45345acd77cd7b4cf84158ca085650c1a59e354abb96ce031a7ca504de2c97b3->enter($__internal_45345acd77cd7b4cf84158ca085650c1a59e354abb96ce031a7ca504de2c97b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":utilisateur:participationDe.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9bcef1e7ec6bcae601c59e4f26bec39358d9cd4179089ee034b826c11998326->leave($__internal_e9bcef1e7ec6bcae601c59e4f26bec39358d9cd4179089ee034b826c11998326_prof);

        
        $__internal_45345acd77cd7b4cf84158ca085650c1a59e354abb96ce031a7ca504de2c97b3->leave($__internal_45345acd77cd7b4cf84158ca085650c1a59e354abb96ce031a7ca504de2c97b3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7522ddf880334a77e350399c463ca75f9e851b205b0ebca7ea326371367fc407 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7522ddf880334a77e350399c463ca75f9e851b205b0ebca7ea326371367fc407->enter($__internal_7522ddf880334a77e350399c463ca75f9e851b205b0ebca7ea326371367fc407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c8503d18e26ebe1652b8700687a1de46ad5d2901c86e87ee136bd70a0e607e4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8503d18e26ebe1652b8700687a1de46ad5d2901c86e87ee136bd70a0e607e4b->enter($__internal_c8503d18e26ebe1652b8700687a1de46ad5d2901c86e87ee136bd70a0e607e4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 5
            echo "<div class=\"container\" style=\"display:inline\">
    ";
            // line 6
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 7
                echo "        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
                echo " |
        <a href=\"";
                // line 8
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
                echo "\">
            ";
                // line 9
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
                echo "
        </a>
    ";
            } else {
                // line 12
                echo "        <a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
                echo "</a>
    ";
            }
            // line 14
            echo "</div>
<!-- MAIN IMAGE SECTION -->
<div id=\"portwrap\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 col-lg-offset-2\">
        <h2>Les participations de ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
            echo "</h2>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->
<br>
<ol class=\"breadcrumb\">
  <li class=\"breadcrumb-item\"><a href=\"";
            // line 27
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\">Accueil</a></li>
  <li class=\"breadcrumb-item\"><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profilDe", array("username" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()))), "html", null, true);
            echo "\">Profil de ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
            echo "</a></li>
  <li class=\"breadcrumb-item active\">Participations de ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
            echo "</li>
  <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "headers", array()), "get", array(0 => "referer"), "method"), "html", null, true);
            echo "\" class=\"btn btn-info pull-right\"><span class=\"glyphicon glyphicon-repeat\"></span> Retour</a>
</ol>
<!-- WELCOME SECTION -->


<div class=\"container\">
";
            // line 36
            if (((isset($context["participations"]) ? $context["participations"] : $this->getContext($context, "participations")) == null)) {
                // line 37
                echo "<h3>Oups! ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
                echo " n'a encore participer à aucun projet ...</h3>
";
            }
            // line 39
            echo "  <div class=\"row mt\">

  ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["participations"]) ? $context["participations"] : $this->getContext($context, "participations")));
            foreach ($context['_seq'] as $context["_key"] => $context["participation"]) {
                // line 42
                echo "      <div class=\"col-lg-4 projet\">
        <a href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showProjet", array("id" => $this->getAttribute($this->getAttribute($context["participation"], "idProjet", array()), "id", array()))), "html", null, true);
                echo "\">
        <h4>";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["participation"], "idProjet", array()), "nomProjet", array()), "html", null, true);
                echo "</h4>
        <img style=\"width: 350px;\"src=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/about-bg.jpg"), "html", null, true);
                echo "\" >
        </a>
        <p>";
                // line 47
                echo twig_escape_filter($this->env, twig_slice($this->env, strip_tags($this->getAttribute($this->getAttribute($context["participation"], "idProjet", array()), "description", array())), 0, 40), "html", null, true);
                echo " [...]</p>
        <p class=\"infos\">Début : ";
                // line 48
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["participation"], "idProjet", array()), "dateDebut", array()), "d/m/Y"), "html", null, true);
                echo "  |  Places : ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["participation"], "idProjet", array()), "nbPlaces", array()), "html", null, true);
                echo "
        <br><b> statut : ";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["participation"], "idProjet", array()), "statut", array()), "nom", array()), "html", null, true);
                echo "</b>
        <br>Auteur : <a href=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profilDe", array("username" => $this->getAttribute($this->getAttribute($this->getAttribute($context["participation"], "idProjet", array()), "idUtilisateur", array()), "username", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["participation"], "idProjet", array()), "idUtilisateur", array()), "username", array()), "html", null, true);
                echo "</a></p>

      </div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "  </div><!-- row -->
</div>
<br><br>
";
        } else {
            // line 71
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login"));
            echo "
";
        }
        
        $__internal_c8503d18e26ebe1652b8700687a1de46ad5d2901c86e87ee136bd70a0e607e4b->leave($__internal_c8503d18e26ebe1652b8700687a1de46ad5d2901c86e87ee136bd70a0e607e4b_prof);

        
        $__internal_7522ddf880334a77e350399c463ca75f9e851b205b0ebca7ea326371367fc407->leave($__internal_7522ddf880334a77e350399c463ca75f9e851b205b0ebca7ea326371367fc407_prof);

    }

    public function getTemplateName()
    {
        return ":utilisateur:participationDe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 71,  178 => 54,  166 => 50,  162 => 49,  156 => 48,  152 => 47,  147 => 45,  143 => 44,  139 => 43,  136 => 42,  132 => 41,  128 => 39,  122 => 37,  120 => 36,  111 => 30,  107 => 29,  101 => 28,  97 => 27,  87 => 20,  79 => 14,  71 => 12,  65 => 9,  61 => 8,  56 => 7,  54 => 6,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
        <h2>Les participations de {{ user.username}}</h2>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->
<br>
<ol class=\"breadcrumb\">
  <li class=\"breadcrumb-item\"><a href=\"{{path('homepage')}}\">Accueil</a></li>
  <li class=\"breadcrumb-item\"><a href=\"{{ path('profilDe', {'username': user.username}) }}\">Profil de {{user.username}}</a></li>
  <li class=\"breadcrumb-item active\">Participations de {{user.username}}</li>
  <a href=\"{{ app.request.headers.get('referer') }}\" class=\"btn btn-info pull-right\"><span class=\"glyphicon glyphicon-repeat\"></span> Retour</a>
</ol>
<!-- WELCOME SECTION -->


<div class=\"container\">
{% if participations == null %}
<h3>Oups! {{user.username}} n'a encore participer à aucun projet ...</h3>
{% endif %}
  <div class=\"row mt\">

  {% for participation in participations %}
      <div class=\"col-lg-4 projet\">
        <a href=\"{{ path('showProjet', {'id': participation.idProjet.id}) }}\">
        <h4>{{participation.idProjet.nomProjet}}</h4>
        <img style=\"width: 350px;\"src=\"{{asset(\"img/about-bg.jpg\")}}\" >
        </a>
        <p>{{participation.idProjet.description | striptags | slice(0, 40) }} [...]</p>
        <p class=\"infos\">Début : {{participation.idProjet.dateDebut|date('d/m/Y')}}  |  Places : {{participation.idProjet.nbPlaces}}
        <br><b> statut : {{participation.idProjet.statut.nom}}</b>
        <br>Auteur : <a href=\"{{ path('profilDe', {'username': participation.idProjet.idUtilisateur.username}) }}\">{{participation.idProjet.idUtilisateur.username}}</a></p>

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
{% else %}
{{ render(path('fos_user_security_login')) }}
{% endif %}
{% endblock %}
", ":utilisateur:participationDe.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/views/utilisateur/participationDe.html.twig");
    }
}
