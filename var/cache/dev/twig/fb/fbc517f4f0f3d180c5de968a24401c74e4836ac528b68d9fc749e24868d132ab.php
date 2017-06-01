<?php

/* utilisateur/projetDe.html.twig */
class __TwigTemplate_ebc0ea324d7590e071a7d6c8d2f9078820fb893b99bf85834c52b59df01d42d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "utilisateur/projetDe.html.twig", 1);
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
        $__internal_c1b7d43ca9b76092dca039d5818bd3157ca2b4d879a071f3c828239f9549dccd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1b7d43ca9b76092dca039d5818bd3157ca2b4d879a071f3c828239f9549dccd->enter($__internal_c1b7d43ca9b76092dca039d5818bd3157ca2b4d879a071f3c828239f9549dccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/projetDe.html.twig"));

        $__internal_7b0cd3a493c604187c6a9f5890962756acef4a6c567bdfe769274ec550ad4eb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b0cd3a493c604187c6a9f5890962756acef4a6c567bdfe769274ec550ad4eb6->enter($__internal_7b0cd3a493c604187c6a9f5890962756acef4a6c567bdfe769274ec550ad4eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/projetDe.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1b7d43ca9b76092dca039d5818bd3157ca2b4d879a071f3c828239f9549dccd->leave($__internal_c1b7d43ca9b76092dca039d5818bd3157ca2b4d879a071f3c828239f9549dccd_prof);

        
        $__internal_7b0cd3a493c604187c6a9f5890962756acef4a6c567bdfe769274ec550ad4eb6->leave($__internal_7b0cd3a493c604187c6a9f5890962756acef4a6c567bdfe769274ec550ad4eb6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_84a3a5f2a9e93ee5b18ecc676884dd17ffe191ccab57842a2e58e1717eaa025a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84a3a5f2a9e93ee5b18ecc676884dd17ffe191ccab57842a2e58e1717eaa025a->enter($__internal_84a3a5f2a9e93ee5b18ecc676884dd17ffe191ccab57842a2e58e1717eaa025a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a44092303837a675171e98e22cf0f80bd89a3105e9708eb4d253b291e3919b2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a44092303837a675171e98e22cf0f80bd89a3105e9708eb4d253b291e3919b2c->enter($__internal_a44092303837a675171e98e22cf0f80bd89a3105e9708eb4d253b291e3919b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <h2>Les projets de ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
            echo "</h2>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->
<br>
<ol class=\"breadcrumb\">
  <li class=\"breadcrumb-item\"><a href=\"";
            // line 28
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\">Accueil</a></li>
  <li class=\"breadcrumb-item\"><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profilDe", array("username" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()))), "html", null, true);
            echo "\">Profil de ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
            echo "</a></li>
  <li class=\"breadcrumb-item active\">Projet de ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
            echo "</li>
  <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "headers", array()), "get", array(0 => "referer"), "method"), "html", null, true);
            echo "\" class=\"btn btn-info pull-right\"><span class=\"glyphicon glyphicon-repeat\"></span> Retour</a>
</ol>
<!-- WELCOME SECTION -->


<div class=\"container\">
";
            // line 37
            if (((isset($context["projets"]) ? $context["projets"] : $this->getContext($context, "projets")) == null)) {
                // line 38
                echo "<h3>Oups! ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
                echo " n'a pas encore créer de projets ...</h3>
";
            }
            // line 40
            echo "  <div class=\"row mt\">

  ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["projets"]) ? $context["projets"] : $this->getContext($context, "projets")));
            foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
                // line 43
                echo "      <div class=\"col-lg-4 projet\">
        <a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showProjet", array("id" => $this->getAttribute($context["projet"], "id", array()))), "html", null, true);
                echo "\">
        <h4>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "nomProjet", array()), "html", null, true);
                echo "</h4>
        <img style=\"width: 350px;\"src=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/about-bg.jpg"), "html", null, true);
                echo "\" >
        </a>
        <p>";
                // line 48
                echo twig_escape_filter($this->env, twig_slice($this->env, strip_tags($this->getAttribute($context["projet"], "description", array())), 0, 40), "html", null, true);
                echo " [...]</p>
        <p class=\"infos\">Début : ";
                // line 49
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["projet"], "dateDebut", array()), "d/m/Y"), "html", null, true);
                echo "  |  Places : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "nbPlaces", array()), "html", null, true);
                echo "
        <br><b> statut : ";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["projet"], "statut", array()), "nom", array()), "html", null, true);
                echo "</b>
        <br>Auteur : <a href=\"";
                // line 51
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
            // line 55
            echo "  </div><!-- row -->
</div>
<br><br>
";
        } else {
            // line 72
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login"));
            echo "
";
        }
        
        $__internal_a44092303837a675171e98e22cf0f80bd89a3105e9708eb4d253b291e3919b2c->leave($__internal_a44092303837a675171e98e22cf0f80bd89a3105e9708eb4d253b291e3919b2c_prof);

        
        $__internal_84a3a5f2a9e93ee5b18ecc676884dd17ffe191ccab57842a2e58e1717eaa025a->leave($__internal_84a3a5f2a9e93ee5b18ecc676884dd17ffe191ccab57842a2e58e1717eaa025a_prof);

    }

    public function getTemplateName()
    {
        return "utilisateur/projetDe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 72,  184 => 55,  172 => 51,  168 => 50,  162 => 49,  158 => 48,  153 => 46,  149 => 45,  145 => 44,  142 => 43,  138 => 42,  134 => 40,  128 => 38,  126 => 37,  117 => 31,  113 => 30,  107 => 29,  103 => 28,  93 => 21,  85 => 15,  77 => 13,  71 => 10,  67 => 9,  63 => 8,  56 => 7,  54 => 6,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
        <h2>Les projets de {{ user.username}}</h2>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->
<br>
<ol class=\"breadcrumb\">
  <li class=\"breadcrumb-item\"><a href=\"{{path('homepage')}}\">Accueil</a></li>
  <li class=\"breadcrumb-item\"><a href=\"{{ path('profilDe', {'username': user.username}) }}\">Profil de {{user.username}}</a></li>
  <li class=\"breadcrumb-item active\">Projet de {{user.username}}</li>
  <a href=\"{{ app.request.headers.get('referer') }}\" class=\"btn btn-info pull-right\"><span class=\"glyphicon glyphicon-repeat\"></span> Retour</a>
</ol>
<!-- WELCOME SECTION -->


<div class=\"container\">
{% if projets == null %}
<h3>Oups! {{user.username}} n'a pas encore créer de projets ...</h3>
{% endif %}
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
{% else %}
{{ render(path('fos_user_security_login')) }}
{% endif %}
{% endblock %}
", "utilisateur/projetDe.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/views/utilisateur/projetDe.html.twig");
    }
}
