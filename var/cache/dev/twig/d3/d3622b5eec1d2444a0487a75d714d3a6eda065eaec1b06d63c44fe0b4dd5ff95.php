<?php

/* utilisateur/mesCompetences.html.twig */
class __TwigTemplate_c522ef87b1cc4345da19e62ad47ad5fbf796b767b22610091a822a5667c2623a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "utilisateur/mesCompetences.html.twig", 1);
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
        $__internal_d7efc4699e6628f121c89835624d5ff0c72ceee42b379adb7ec8cc8a13e920e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7efc4699e6628f121c89835624d5ff0c72ceee42b379adb7ec8cc8a13e920e6->enter($__internal_d7efc4699e6628f121c89835624d5ff0c72ceee42b379adb7ec8cc8a13e920e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/mesCompetences.html.twig"));

        $__internal_7eb3aab781b2c524c99c7642036eae2272daedffd79b8ebb4217a2ca39f4ae7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eb3aab781b2c524c99c7642036eae2272daedffd79b8ebb4217a2ca39f4ae7a->enter($__internal_7eb3aab781b2c524c99c7642036eae2272daedffd79b8ebb4217a2ca39f4ae7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/mesCompetences.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7efc4699e6628f121c89835624d5ff0c72ceee42b379adb7ec8cc8a13e920e6->leave($__internal_d7efc4699e6628f121c89835624d5ff0c72ceee42b379adb7ec8cc8a13e920e6_prof);

        
        $__internal_7eb3aab781b2c524c99c7642036eae2272daedffd79b8ebb4217a2ca39f4ae7a->leave($__internal_7eb3aab781b2c524c99c7642036eae2272daedffd79b8ebb4217a2ca39f4ae7a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd561ac06141a722adfafb493cb1330cf82f45a802b729e7192a3d5281dc425f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd561ac06141a722adfafb493cb1330cf82f45a802b729e7192a3d5281dc425f->enter($__internal_cd561ac06141a722adfafb493cb1330cf82f45a802b729e7192a3d5281dc425f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b26ab61750456fdfb798a96fd6bbd438cd9b6e1ba30efb4c5515f9923dda6404 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b26ab61750456fdfb798a96fd6bbd438cd9b6e1ba30efb4c5515f9923dda6404->enter($__internal_b26ab61750456fdfb798a96fd6bbd438cd9b6e1ba30efb4c5515f9923dda6404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <h2>Mes compétences </h2>
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
  <li class=\"breadcrumb-item active\">Mes compétences</li>
  <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "headers", array()), "get", array(0 => "referer"), "method"), "html", null, true);
        echo "\" class=\"btn btn-info pull-right\"><span class=\"glyphicon glyphicon-repeat\"></span> Retour</a>

</ol>

<div class=\"container\">
<div class=\"row col-sm-10 col-sm-offset-1\">
<h3>Listes de mes compétences <a class=\"pull-right btn btn-primary\" href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newCompetence");
        echo "\"><span class=\"glyphicon glyphicon-plus\"></span> Nouveau</a></h3>

<hr>

<table class=\"table\" id=\"myTable\">
  <thead>
    <td>Nom</td>
    <td>Pourcentage </td>
    <td>Action </td>
  </thead>
  <tbody>
";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["competences"]) ? $context["competences"] : $this->getContext($context, "competences")));
        foreach ($context['_seq'] as $context["_key"] => $context["competence"]) {
            // line 47
            echo "  <tr>
    <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["competence"], "nom", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["competence"], "pourcentage", array()), "html", null, true);
            echo "%</td>
   <td>
      <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editCompetence", array("id" => $this->getAttribute($context["competence"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning\"><span class=\"glyphicon glyphicon-pencil\"></span></a>
      <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deleteCompetence", array("id" => $this->getAttribute($context["competence"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-remove\"></span></a>
    </td>
  </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competence'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "</tbody>
</table>

</div><!-- row -->
</div>
";
        
        $__internal_b26ab61750456fdfb798a96fd6bbd438cd9b6e1ba30efb4c5515f9923dda6404->leave($__internal_b26ab61750456fdfb798a96fd6bbd438cd9b6e1ba30efb4c5515f9923dda6404_prof);

        
        $__internal_cd561ac06141a722adfafb493cb1330cf82f45a802b729e7192a3d5281dc425f->leave($__internal_cd561ac06141a722adfafb493cb1330cf82f45a802b729e7192a3d5281dc425f_prof);

    }

    public function getTemplateName()
    {
        return "utilisateur/mesCompetences.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 56,  144 => 52,  140 => 51,  135 => 49,  131 => 48,  128 => 47,  124 => 46,  110 => 35,  101 => 29,  96 => 27,  92 => 26,  77 => 13,  69 => 11,  63 => 8,  59 => 7,  54 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
        <h2>Mes compétences </h2>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->
<br>
<ol class=\"breadcrumb\">
  <li class=\"breadcrumb-item\"><a href=\"{{path('homepage')}}\">Accueil</a></li>
  <li class=\"breadcrumb-item\"><a href=\"{{path('fos_user_profile_show')}}\">Mon profil</a></li>
  <li class=\"breadcrumb-item active\">Mes compétences</li>
  <a href=\"{{ app.request.headers.get('referer') }}\" class=\"btn btn-info pull-right\"><span class=\"glyphicon glyphicon-repeat\"></span> Retour</a>

</ol>

<div class=\"container\">
<div class=\"row col-sm-10 col-sm-offset-1\">
<h3>Listes de mes compétences <a class=\"pull-right btn btn-primary\" href=\"{{ path('newCompetence') }}\"><span class=\"glyphicon glyphicon-plus\"></span> Nouveau</a></h3>

<hr>

<table class=\"table\" id=\"myTable\">
  <thead>
    <td>Nom</td>
    <td>Pourcentage </td>
    <td>Action </td>
  </thead>
  <tbody>
{% for competence in competences %}
  <tr>
    <td>{{competence.nom}}</td>
    <td>{{competence.pourcentage}}%</td>
   <td>
      <a href=\"{{ path('editCompetence', {'id': competence.id}) }}\" class=\"btn btn-warning\"><span class=\"glyphicon glyphicon-pencil\"></span></a>
      <a href=\"{{ path('deleteCompetence', {'id': competence.id}) }}\" class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-remove\"></span></a>
    </td>
  </tr>
{% endfor %}
</tbody>
</table>

</div><!-- row -->
</div>
{% endblock %}
", "utilisateur/mesCompetences.html.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/app/Resources/views/utilisateur/mesCompetences.html.twig");
    }
}
