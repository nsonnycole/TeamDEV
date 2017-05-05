<?php

/* utilisateur/mesProjets.html.twig */
class __TwigTemplate_dfe037fd61035e45be101bad3ef8b0e5ff915a4531ffd6bc1e3a152d7104cdf0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "utilisateur/mesProjets.html.twig", 1);
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
        $__internal_d341340eb1d7c95e902b722feb650da8077fbfacae0a1926efe548a9e3ca8aa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d341340eb1d7c95e902b722feb650da8077fbfacae0a1926efe548a9e3ca8aa8->enter($__internal_d341340eb1d7c95e902b722feb650da8077fbfacae0a1926efe548a9e3ca8aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/mesProjets.html.twig"));

        $__internal_f28d110421c354f46e1db1d42e69680335774ceddc0cd310251ed4342a7b4fff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f28d110421c354f46e1db1d42e69680335774ceddc0cd310251ed4342a7b4fff->enter($__internal_f28d110421c354f46e1db1d42e69680335774ceddc0cd310251ed4342a7b4fff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/mesProjets.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d341340eb1d7c95e902b722feb650da8077fbfacae0a1926efe548a9e3ca8aa8->leave($__internal_d341340eb1d7c95e902b722feb650da8077fbfacae0a1926efe548a9e3ca8aa8_prof);

        
        $__internal_f28d110421c354f46e1db1d42e69680335774ceddc0cd310251ed4342a7b4fff->leave($__internal_f28d110421c354f46e1db1d42e69680335774ceddc0cd310251ed4342a7b4fff_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_da0ba6529c613dafe33520348c5c31b96fb67748c61db41d7e2a4e4481c68f01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da0ba6529c613dafe33520348c5c31b96fb67748c61db41d7e2a4e4481c68f01->enter($__internal_da0ba6529c613dafe33520348c5c31b96fb67748c61db41d7e2a4e4481c68f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_923a8bb59383c87ba3c9652f34de5f5797f4803088798f9ed14c80ef8df53eca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_923a8bb59383c87ba3c9652f34de5f5797f4803088798f9ed14c80ef8df53eca->enter($__internal_923a8bb59383c87ba3c9652f34de5f5797f4803088798f9ed14c80ef8df53eca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <h2>Mes projets </h2>
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
        echo "\">Mon profil</a></li>
  <li class=\"breadcrumb-item active\">Mes projets</li>
  <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "headers", array()), "get", array(0 => "referer"), "method"), "html", null, true);
        echo "\" class=\"btn btn-info pull-right\"><span class=\"glyphicon glyphicon-repeat\"></span> Retour</a>

</ol>

<div class=\"container\">
<div class=\"row col-sm-10 col-sm-offset-1\">
<h3>Listes de mes projets</h3>
<hr>
<table class=\"table\" id=\"myTable\">
  <thead>
    <td>Nom du projet</td>
    <td>Description </td>
    <td>Statut </td>
    <td>Action</td>
  </thead>
  <tbody>
";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projets"]) ? $context["projets"] : $this->getContext($context, "projets")));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 46
            echo "  <tr>
    <td><a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showProjet", array("id" => $this->getAttribute($context["projet"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "nomProjet", array()), "html", null, true);
            echo "</a></td>
    <td width=\"30%\">";
            // line 48
            echo twig_escape_filter($this->env, twig_slice($this->env, strip_tags($this->getAttribute($context["projet"], "description", array())), 0, 40), "html", null, true);
            echo " [...] </td>
    <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["projet"], "statut", array()), "nom", array()), "html", null, true);
            echo "</td>
    <td>
      ";
            // line 52
            echo "      <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editProjet", array("id" => $this->getAttribute($context["projet"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning\"><span class=\"glyphicon glyphicon-pencil\"></span></a>
      <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deleteProjet", array("id" => $this->getAttribute($context["projet"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-remove\"></span></a>
    </td>
  </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "</tbody>
</table>

</div><!-- row -->
</div>
";
        
        $__internal_923a8bb59383c87ba3c9652f34de5f5797f4803088798f9ed14c80ef8df53eca->leave($__internal_923a8bb59383c87ba3c9652f34de5f5797f4803088798f9ed14c80ef8df53eca_prof);

        
        $__internal_da0ba6529c613dafe33520348c5c31b96fb67748c61db41d7e2a4e4481c68f01->leave($__internal_da0ba6529c613dafe33520348c5c31b96fb67748c61db41d7e2a4e4481c68f01_prof);

    }

    public function getTemplateName()
    {
        return "utilisateur/mesProjets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 57,  147 => 53,  142 => 52,  137 => 49,  133 => 48,  127 => 47,  124 => 46,  120 => 45,  101 => 29,  96 => 27,  92 => 26,  77 => 13,  69 => 11,  63 => 8,  59 => 7,  54 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
        <h2>Mes projets </h2>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->
<br>
<ol class=\"breadcrumb\">
  <li class=\"breadcrumb-item\"><a href=\"{{path('homepage')}}\">Accueil</a></li>
  <li class=\"breadcrumb-item\"><a href=\"{{path('fos_user_profile_show')}}\">Mon profil</a></li>
  <li class=\"breadcrumb-item active\">Mes projets</li>
  <a href=\"{{ app.request.headers.get('referer') }}\" class=\"btn btn-info pull-right\"><span class=\"glyphicon glyphicon-repeat\"></span> Retour</a>

</ol>

<div class=\"container\">
<div class=\"row col-sm-10 col-sm-offset-1\">
<h3>Listes de mes projets</h3>
<hr>
<table class=\"table\" id=\"myTable\">
  <thead>
    <td>Nom du projet</td>
    <td>Description </td>
    <td>Statut </td>
    <td>Action</td>
  </thead>
  <tbody>
{% for projet in projets %}
  <tr>
    <td><a href=\"{{ path('showProjet', {'id': projet.id}) }}\">{{projet.nomProjet}}</a></td>
    <td width=\"30%\">{{projet.description | striptags | slice(0, 40) }} [...] </td>
    <td>{{projet.statut.nom }}</td>
    <td>
      {#<a href=\"{{ path('desincProjet', {'id': participe.id}) }}\" class=\"btn btn-danger\">Se désinscrire</a>#}
      <a href=\"{{ path('editProjet', {'id': projet.id}) }}\" class=\"btn btn-warning\"><span class=\"glyphicon glyphicon-pencil\"></span></a>
      <a href=\"{{ path('deleteProjet', {'id': projet.id}) }}\" class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-remove\"></span></a>
    </td>
  </tr>
{% endfor %}
</tbody>
</table>

</div><!-- row -->
</div>
{% endblock %}
", "utilisateur/mesProjets.html.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/app/Resources/views/utilisateur/mesProjets.html.twig");
    }
}
