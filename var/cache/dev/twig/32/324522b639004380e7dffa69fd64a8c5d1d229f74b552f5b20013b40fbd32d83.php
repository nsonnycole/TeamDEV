<?php

/* utilisateur/mesProjets.html.twig */
class __TwigTemplate_2af175b3961947e3e64390db9f4e969b218d78d139e6848d06d61d517236fa55 extends Twig_Template
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
        $__internal_917edbae5127ae69cabc0b308119cd914510a19da355739eb7550ba818519e8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_917edbae5127ae69cabc0b308119cd914510a19da355739eb7550ba818519e8e->enter($__internal_917edbae5127ae69cabc0b308119cd914510a19da355739eb7550ba818519e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/mesProjets.html.twig"));

        $__internal_836915a56db3b24fb5fa17004162fd2486cb0b73db697198c5370d3d19edaa62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_836915a56db3b24fb5fa17004162fd2486cb0b73db697198c5370d3d19edaa62->enter($__internal_836915a56db3b24fb5fa17004162fd2486cb0b73db697198c5370d3d19edaa62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/mesProjets.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_917edbae5127ae69cabc0b308119cd914510a19da355739eb7550ba818519e8e->leave($__internal_917edbae5127ae69cabc0b308119cd914510a19da355739eb7550ba818519e8e_prof);

        
        $__internal_836915a56db3b24fb5fa17004162fd2486cb0b73db697198c5370d3d19edaa62->leave($__internal_836915a56db3b24fb5fa17004162fd2486cb0b73db697198c5370d3d19edaa62_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2196b05aec0be0285ddcef6c49c3cbb0a59ecc676f835aea3f2f45e01751204 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2196b05aec0be0285ddcef6c49c3cbb0a59ecc676f835aea3f2f45e01751204->enter($__internal_d2196b05aec0be0285ddcef6c49c3cbb0a59ecc676f835aea3f2f45e01751204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_83c680cc16dbdc15bfc8d980c8cc14374b970e36529d09483ef54df8ff6a5234 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83c680cc16dbdc15bfc8d980c8cc14374b970e36529d09483ef54df8ff6a5234->enter($__internal_83c680cc16dbdc15bfc8d980c8cc14374b970e36529d09483ef54df8ff6a5234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <h2>Mes projets </h2>
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
  <li class=\"breadcrumb-item active\">Mes projets</li>
  <a href=\"";
            // line 31
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
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["projets"]) ? $context["projets"] : $this->getContext($context, "projets")));
            foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
                // line 48
                echo "  <tr>
    <td><a href=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showProjet", array("id" => $this->getAttribute($context["projet"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "nomProjet", array()), "html", null, true);
                echo "</a></td>
    <td width=\"30%\">";
                // line 50
                echo twig_escape_filter($this->env, twig_slice($this->env, strip_tags($this->getAttribute($context["projet"], "description", array())), 0, 40), "html", null, true);
                echo " [...] </td>
    <td>";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["projet"], "statut", array()), "nom", array()), "html", null, true);
                echo "</td>
    <td>
      ";
                // line 54
                echo "      <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editProjet", array("id" => $this->getAttribute($context["projet"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-warning\"><span class=\"glyphicon glyphicon-pencil\"></span></a>
      <a href=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deleteProjet", array("id" => $this->getAttribute($context["projet"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-remove\"></span></a>
    </td>
  </tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "</tbody>
</table>

</div><!-- row -->
</div>
";
        } else {
            // line 65
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login"));
            echo "
";
        }
        
        $__internal_83c680cc16dbdc15bfc8d980c8cc14374b970e36529d09483ef54df8ff6a5234->leave($__internal_83c680cc16dbdc15bfc8d980c8cc14374b970e36529d09483ef54df8ff6a5234_prof);

        
        $__internal_d2196b05aec0be0285ddcef6c49c3cbb0a59ecc676f835aea3f2f45e01751204->leave($__internal_d2196b05aec0be0285ddcef6c49c3cbb0a59ecc676f835aea3f2f45e01751204_prof);

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
        return array (  173 => 65,  165 => 59,  155 => 55,  150 => 54,  145 => 51,  141 => 50,  135 => 49,  132 => 48,  128 => 47,  109 => 31,  104 => 29,  100 => 28,  85 => 15,  77 => 13,  71 => 10,  67 => 9,  63 => 8,  56 => 7,  54 => 6,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
{% else %}
{{ render(path('fos_user_security_login')) }}
{% endif %}
{% endblock %}
", "utilisateur/mesProjets.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/views/utilisateur/mesProjets.html.twig");
    }
}
