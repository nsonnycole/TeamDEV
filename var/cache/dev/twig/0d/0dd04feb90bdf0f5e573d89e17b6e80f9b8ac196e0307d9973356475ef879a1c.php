<?php

/* utilisateur/participationDe.html.twig */
class __TwigTemplate_1e2434abf1f962dc8773a42ae704d7941005017e84ee9374b8039f1155436506 extends Twig_Template
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
        $__internal_9b73dd4e68d7a422e93a24de50da142eefe0c216d9361853c9e078d1709855c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b73dd4e68d7a422e93a24de50da142eefe0c216d9361853c9e078d1709855c2->enter($__internal_9b73dd4e68d7a422e93a24de50da142eefe0c216d9361853c9e078d1709855c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/participationDe.html.twig"));

        $__internal_70855f224786f7409ae545a187234108e734c7d97d77185b500155e911c5e954 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70855f224786f7409ae545a187234108e734c7d97d77185b500155e911c5e954->enter($__internal_70855f224786f7409ae545a187234108e734c7d97d77185b500155e911c5e954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/participationDe.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b73dd4e68d7a422e93a24de50da142eefe0c216d9361853c9e078d1709855c2->leave($__internal_9b73dd4e68d7a422e93a24de50da142eefe0c216d9361853c9e078d1709855c2_prof);

        
        $__internal_70855f224786f7409ae545a187234108e734c7d97d77185b500155e911c5e954->leave($__internal_70855f224786f7409ae545a187234108e734c7d97d77185b500155e911c5e954_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b20e62d99bbba95859a96977d5f66d9ef977f98db4296febf0b646515b67155 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b20e62d99bbba95859a96977d5f66d9ef977f98db4296febf0b646515b67155->enter($__internal_3b20e62d99bbba95859a96977d5f66d9ef977f98db4296febf0b646515b67155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f07ee532936973b99255bf4cc7da682d52185fefc49851e62cd6424022e17f97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f07ee532936973b99255bf4cc7da682d52185fefc49851e62cd6424022e17f97->enter($__internal_f07ee532936973b99255bf4cc7da682d52185fefc49851e62cd6424022e17f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <h2>Les participations de ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</h2>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->
<br>
<ol class=\"breadcrumb\">
  <li class=\"breadcrumb-item\"><a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Accueil</a></li>
  <li class=\"breadcrumb-item\"><a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profilDe", array("username" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()))), "html", null, true);
        echo "\">Profil de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</a></li>
  <li class=\"breadcrumb-item active\">Participations de ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</li>
  <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "headers", array()), "get", array(0 => "referer"), "method"), "html", null, true);
        echo "\" class=\"btn btn-info pull-right\"><span class=\"glyphicon glyphicon-repeat\"></span> Retour</a>
</ol>
<!-- WELCOME SECTION -->


<div class=\"container\">
";
        // line 35
        if (((isset($context["participations"]) ? $context["participations"] : $this->getContext($context, "participations")) == null)) {
            // line 36
            echo "<h3>Oups! ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
            echo " n'a encore participer à aucun projet ...</h3>
";
        }
        // line 38
        echo "  <div class=\"row mt\">

  ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["participations"]) ? $context["participations"] : $this->getContext($context, "participations")));
        foreach ($context['_seq'] as $context["_key"] => $context["participation"]) {
            // line 41
            echo "      <div class=\"col-lg-4 projet\">
        <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showProjet", array("id" => $this->getAttribute($this->getAttribute($context["participation"], "idProjet", array()), "id", array()))), "html", null, true);
            echo "\">
        <h4>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["participation"], "idProjet", array()), "nomProjet", array()), "html", null, true);
            echo "</h4>
        <img style=\"width: 350px;\"src=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/about-bg.jpg"), "html", null, true);
            echo "\" >
        </a>
        <p>";
            // line 46
            echo twig_escape_filter($this->env, twig_slice($this->env, strip_tags($this->getAttribute($this->getAttribute($context["participation"], "idProjet", array()), "description", array())), 0, 40), "html", null, true);
            echo " [...]</p>
        <p class=\"infos\">Début : ";
            // line 47
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["participation"], "idProjet", array()), "dateDebut", array()), "d/m/Y"), "html", null, true);
            echo "  |  Places : ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["participation"], "idProjet", array()), "nbPlaces", array()), "html", null, true);
            echo "
        <br><b> statut : ";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["participation"], "idProjet", array()), "statut", array()), "nom", array()), "html", null, true);
            echo "</b>
        <br>Auteur : <a href=\"";
            // line 49
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
        // line 53
        echo "  </div><!-- row -->
</div>
<br><br>
";
        
        $__internal_f07ee532936973b99255bf4cc7da682d52185fefc49851e62cd6424022e17f97->leave($__internal_f07ee532936973b99255bf4cc7da682d52185fefc49851e62cd6424022e17f97_prof);

        
        $__internal_3b20e62d99bbba95859a96977d5f66d9ef977f98db4296febf0b646515b67155->leave($__internal_3b20e62d99bbba95859a96977d5f66d9ef977f98db4296febf0b646515b67155_prof);

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
        return array (  176 => 53,  164 => 49,  160 => 48,  154 => 47,  150 => 46,  145 => 44,  141 => 43,  137 => 42,  134 => 41,  130 => 40,  126 => 38,  120 => 36,  118 => 35,  109 => 29,  105 => 28,  99 => 27,  95 => 26,  85 => 19,  77 => 13,  69 => 11,  63 => 8,  59 => 7,  54 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
{% endblock %}
", "utilisateur/participationDe.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/views/utilisateur/participationDe.html.twig");
    }
}
