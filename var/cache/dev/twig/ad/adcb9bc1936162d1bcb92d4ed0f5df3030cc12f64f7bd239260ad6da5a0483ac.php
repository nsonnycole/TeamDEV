<?php

/* :utilisateur:mesCompetences.html.twig */
class __TwigTemplate_1b1425d1a9f12e7fc4b6db48adcce012b14bb4f7bb913319b2cea6e594e1ab3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":utilisateur:mesCompetences.html.twig", 1);
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
        $__internal_9c59ff612022f05625389fe33b9b0e218c1a7b5bc0f424be55b733d41f7f7955 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c59ff612022f05625389fe33b9b0e218c1a7b5bc0f424be55b733d41f7f7955->enter($__internal_9c59ff612022f05625389fe33b9b0e218c1a7b5bc0f424be55b733d41f7f7955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":utilisateur:mesCompetences.html.twig"));

        $__internal_f6efba3a4d39b4a115d917014d53cdb7dcf4b2c78e9dd8ffaa61019a56a911c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6efba3a4d39b4a115d917014d53cdb7dcf4b2c78e9dd8ffaa61019a56a911c2->enter($__internal_f6efba3a4d39b4a115d917014d53cdb7dcf4b2c78e9dd8ffaa61019a56a911c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":utilisateur:mesCompetences.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c59ff612022f05625389fe33b9b0e218c1a7b5bc0f424be55b733d41f7f7955->leave($__internal_9c59ff612022f05625389fe33b9b0e218c1a7b5bc0f424be55b733d41f7f7955_prof);

        
        $__internal_f6efba3a4d39b4a115d917014d53cdb7dcf4b2c78e9dd8ffaa61019a56a911c2->leave($__internal_f6efba3a4d39b4a115d917014d53cdb7dcf4b2c78e9dd8ffaa61019a56a911c2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_837d34683483ddc3429b111d8bb0543c1ab708d942288d327e9b631e10180bd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_837d34683483ddc3429b111d8bb0543c1ab708d942288d327e9b631e10180bd7->enter($__internal_837d34683483ddc3429b111d8bb0543c1ab708d942288d327e9b631e10180bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_12196328bcbfe54d9cedee12d67682b702f7af567ba8a3cf4c7ea76044150b07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12196328bcbfe54d9cedee12d67682b702f7af567ba8a3cf4c7ea76044150b07->enter($__internal_12196328bcbfe54d9cedee12d67682b702f7af567ba8a3cf4c7ea76044150b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <h2>Mes compétences </h2>
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
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\">Mon profil</a></li>
  <li class=\"breadcrumb-item active\">Mes compétences</li>
  <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "headers", array()), "get", array(0 => "referer"), "method"), "html", null, true);
            echo "\" class=\"btn btn-info pull-right\"><span class=\"glyphicon glyphicon-repeat\"></span> Retour</a>

</ol>

<div class=\"container\">
<div class=\"row col-sm-10 col-sm-offset-1\">
<h3>Listes de mes compétences <a class=\"pull-right btn btn-primary\" href=\"";
            // line 37
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
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["competences"]) ? $context["competences"] : $this->getContext($context, "competences")));
            foreach ($context['_seq'] as $context["_key"] => $context["competence"]) {
                // line 49
                echo "  <tr>
    <td>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["competence"], "nom", array()), "html", null, true);
                echo "</td>
    <td>";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["competence"], "pourcentage", array()), "html", null, true);
                echo "%</td>
   <td>
      <a href=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editCompetence", array("id" => $this->getAttribute($context["competence"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-warning\"><span class=\"glyphicon glyphicon-pencil\"></span></a>
      <a href=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deleteCompetence", array("id" => $this->getAttribute($context["competence"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-remove\"></span></a>
    </td>
  </tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competence'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "</tbody>
</table>

</div><!-- row -->
</div>
";
        } else {
            // line 64
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login"));
            echo "
";
        }
        
        $__internal_12196328bcbfe54d9cedee12d67682b702f7af567ba8a3cf4c7ea76044150b07->leave($__internal_12196328bcbfe54d9cedee12d67682b702f7af567ba8a3cf4c7ea76044150b07_prof);

        
        $__internal_837d34683483ddc3429b111d8bb0543c1ab708d942288d327e9b631e10180bd7->leave($__internal_837d34683483ddc3429b111d8bb0543c1ab708d942288d327e9b631e10180bd7_prof);

    }

    public function getTemplateName()
    {
        return ":utilisateur:mesCompetences.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 64,  162 => 58,  152 => 54,  148 => 53,  143 => 51,  139 => 50,  136 => 49,  132 => 48,  118 => 37,  109 => 31,  104 => 29,  100 => 28,  85 => 15,  77 => 13,  71 => 10,  67 => 9,  63 => 8,  56 => 7,  54 => 6,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
{% else %}
{{ render(path('fos_user_security_login')) }}
{% endif %}
{% endblock %}
", ":utilisateur:mesCompetences.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/views/utilisateur/mesCompetences.html.twig");
    }
}
