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
        $__internal_ded8e06ab30b45d912c4194ac962102492d32f9d1c98fee575ecf04246d3388d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ded8e06ab30b45d912c4194ac962102492d32f9d1c98fee575ecf04246d3388d->enter($__internal_ded8e06ab30b45d912c4194ac962102492d32f9d1c98fee575ecf04246d3388d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/mesProjets.html.twig"));

        $__internal_51d4a2feeaea36c248c70ad0082f002518b52690d2bbd388158157a97cc755f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51d4a2feeaea36c248c70ad0082f002518b52690d2bbd388158157a97cc755f2->enter($__internal_51d4a2feeaea36c248c70ad0082f002518b52690d2bbd388158157a97cc755f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/mesProjets.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ded8e06ab30b45d912c4194ac962102492d32f9d1c98fee575ecf04246d3388d->leave($__internal_ded8e06ab30b45d912c4194ac962102492d32f9d1c98fee575ecf04246d3388d_prof);

        
        $__internal_51d4a2feeaea36c248c70ad0082f002518b52690d2bbd388158157a97cc755f2->leave($__internal_51d4a2feeaea36c248c70ad0082f002518b52690d2bbd388158157a97cc755f2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c7f5008ffa5b6cc5004b2806a9d6bd06a935b7ef70a1fd0e4b900a9f48e626c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c7f5008ffa5b6cc5004b2806a9d6bd06a935b7ef70a1fd0e4b900a9f48e626c->enter($__internal_6c7f5008ffa5b6cc5004b2806a9d6bd06a935b7ef70a1fd0e4b900a9f48e626c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_70d57e036402ea6605b78a96f4860e260460d32140594786e88c684e6debc79e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70d57e036402ea6605b78a96f4860e260460d32140594786e88c684e6debc79e->enter($__internal_70d57e036402ea6605b78a96f4860e260460d32140594786e88c684e6debc79e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<!-- MAIN IMAGE SECTION -->
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
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Accueil</a></li>
  <li class=\"breadcrumb-item\"><a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
        echo "\">Mon profil</a></li>
  <li class=\"breadcrumb-item active\">Mes projets</li>
  <a href=\"";
        // line 19
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
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projets"]) ? $context["projets"] : $this->getContext($context, "projets")));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 36
            echo "  <tr>
    <td><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showProjet", array("id" => $this->getAttribute($context["projet"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "nomProjet", array()), "html", null, true);
            echo "</a></td>
    <td width=\"30%\">";
            // line 38
            echo twig_escape_filter($this->env, twig_slice($this->env, strip_tags($this->getAttribute($context["projet"], "description", array())), 0, 40), "html", null, true);
            echo " [...] </td>
    <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["projet"], "statut", array()), "nom", array()), "html", null, true);
            echo "</td>
    <td>
      <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editProjet", array("id" => $this->getAttribute($context["projet"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning\"><span class=\"glyphicon glyphicon-pencil\"></span></a>
      <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deleteProjet", array("id" => $this->getAttribute($context["projet"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-remove\"></span></a>
    </td>
  </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "</tbody>
</table>

</div><!-- row -->
</div>
";
        
        $__internal_70d57e036402ea6605b78a96f4860e260460d32140594786e88c684e6debc79e->leave($__internal_70d57e036402ea6605b78a96f4860e260460d32140594786e88c684e6debc79e_prof);

        
        $__internal_6c7f5008ffa5b6cc5004b2806a9d6bd06a935b7ef70a1fd0e4b900a9f48e626c->leave($__internal_6c7f5008ffa5b6cc5004b2806a9d6bd06a935b7ef70a1fd0e4b900a9f48e626c_prof);

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
        return array (  127 => 46,  117 => 42,  113 => 41,  108 => 39,  104 => 38,  98 => 37,  95 => 36,  91 => 35,  72 => 19,  67 => 17,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
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
