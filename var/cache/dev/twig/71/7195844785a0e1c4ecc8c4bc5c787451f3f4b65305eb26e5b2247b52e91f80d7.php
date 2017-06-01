<?php

/* utilisateur/participationDe.html.twig */
class __TwigTemplate_f8e95c2523cc0edc3b7c2a4fdd2b4dedcbfe5c373bd6c68541f8fbafe9769b4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "utilisateur/participationDe.html.twig", 1);
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
        $__internal_261e5069ad9d60bbb27093749f19d5e37c36be89c1a2b205cbbe6ad99bac2dcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_261e5069ad9d60bbb27093749f19d5e37c36be89c1a2b205cbbe6ad99bac2dcc->enter($__internal_261e5069ad9d60bbb27093749f19d5e37c36be89c1a2b205cbbe6ad99bac2dcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/participationDe.html.twig"));

        $__internal_6ad361fd1ee62e9dc393a51736930716aa954ff4c51674049b7f579180a25a36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ad361fd1ee62e9dc393a51736930716aa954ff4c51674049b7f579180a25a36->enter($__internal_6ad361fd1ee62e9dc393a51736930716aa954ff4c51674049b7f579180a25a36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/participationDe.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_261e5069ad9d60bbb27093749f19d5e37c36be89c1a2b205cbbe6ad99bac2dcc->leave($__internal_261e5069ad9d60bbb27093749f19d5e37c36be89c1a2b205cbbe6ad99bac2dcc_prof);

        
        $__internal_6ad361fd1ee62e9dc393a51736930716aa954ff4c51674049b7f579180a25a36->leave($__internal_6ad361fd1ee62e9dc393a51736930716aa954ff4c51674049b7f579180a25a36_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_18b9a83a402335f70254ce9ff94217144a21ac3b44e89a34b92c0ee2c7c87e2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18b9a83a402335f70254ce9ff94217144a21ac3b44e89a34b92c0ee2c7c87e2e->enter($__internal_18b9a83a402335f70254ce9ff94217144a21ac3b44e89a34b92c0ee2c7c87e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_73afd60017e04baea2f0d82f1b938a61bd0528437e3a0b14dd21b7cfd68af34e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73afd60017e04baea2f0d82f1b938a61bd0528437e3a0b14dd21b7cfd68af34e->enter($__internal_73afd60017e04baea2f0d82f1b938a61bd0528437e3a0b14dd21b7cfd68af34e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <h2>Les participations de ";
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
  <li class=\"breadcrumb-item active\">Participations de ";
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
            if (((isset($context["participations"]) ? $context["participations"] : $this->getContext($context, "participations")) == null)) {
                // line 38
                echo "<h3>Oups! ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
                echo " n'a encore participer à aucun projet ...</h3>
";
            }
            // line 40
            echo "  <div class=\"row mt\">

  ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["participations"]) ? $context["participations"] : $this->getContext($context, "participations")));
            foreach ($context['_seq'] as $context["_key"] => $context["participation"]) {
                // line 43
                echo "      <div class=\"col-lg-4 projet\">
        <a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showProjet", array("id" => $this->getAttribute($this->getAttribute($context["participation"], "idProjet", array()), "id", array()))), "html", null, true);
                echo "\">
        <h4>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["participation"], "idProjet", array()), "nomProjet", array()), "html", null, true);
                echo "</h4>
        <img style=\"width: 350px;\"src=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/about-bg.jpg"), "html", null, true);
                echo "\" >
        </a>
        <p>";
                // line 48
                echo twig_escape_filter($this->env, twig_slice($this->env, strip_tags($this->getAttribute($this->getAttribute($context["participation"], "idProjet", array()), "description", array())), 0, 40), "html", null, true);
                echo " [...]</p>
        <p class=\"infos\">Début : ";
                // line 49
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["participation"], "idProjet", array()), "dateDebut", array()), "d/m/Y"), "html", null, true);
                echo "  |  Places : ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["participation"], "idProjet", array()), "nbPlaces", array()), "html", null, true);
                echo "
        <br><b> statut : ";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["participation"], "idProjet", array()), "statut", array()), "nom", array()), "html", null, true);
                echo "</b>
        <br>Auteur : <a href=\"";
                // line 51
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
        
        $__internal_73afd60017e04baea2f0d82f1b938a61bd0528437e3a0b14dd21b7cfd68af34e->leave($__internal_73afd60017e04baea2f0d82f1b938a61bd0528437e3a0b14dd21b7cfd68af34e_prof);

        
        $__internal_18b9a83a402335f70254ce9ff94217144a21ac3b44e89a34b92c0ee2c7c87e2e->leave($__internal_18b9a83a402335f70254ce9ff94217144a21ac3b44e89a34b92c0ee2c7c87e2e_prof);

    }

    public function getTemplateName()
    {
        return "utilisateur/participationDe.html.twig";
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
", "utilisateur/participationDe.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/views/utilisateur/participationDe.html.twig");
    }
}
