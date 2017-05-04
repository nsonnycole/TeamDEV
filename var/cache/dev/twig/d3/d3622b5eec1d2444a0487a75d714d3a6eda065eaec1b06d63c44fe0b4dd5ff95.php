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
        $__internal_c75ac611731ec49a679977925bdc66e25247a91890ac771333602382a37f3eda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c75ac611731ec49a679977925bdc66e25247a91890ac771333602382a37f3eda->enter($__internal_c75ac611731ec49a679977925bdc66e25247a91890ac771333602382a37f3eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/mesCompetences.html.twig"));

        $__internal_74e6bbd9d2d83af858bc5bd7f9d6ddba94c18a1f0f832c8bcd40bd544760af5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74e6bbd9d2d83af858bc5bd7f9d6ddba94c18a1f0f832c8bcd40bd544760af5c->enter($__internal_74e6bbd9d2d83af858bc5bd7f9d6ddba94c18a1f0f832c8bcd40bd544760af5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/mesCompetences.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c75ac611731ec49a679977925bdc66e25247a91890ac771333602382a37f3eda->leave($__internal_c75ac611731ec49a679977925bdc66e25247a91890ac771333602382a37f3eda_prof);

        
        $__internal_74e6bbd9d2d83af858bc5bd7f9d6ddba94c18a1f0f832c8bcd40bd544760af5c->leave($__internal_74e6bbd9d2d83af858bc5bd7f9d6ddba94c18a1f0f832c8bcd40bd544760af5c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_da4bc22a646d9b4e95d6e30455fe22bb104cb5bc2a55391befdd026231156971 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da4bc22a646d9b4e95d6e30455fe22bb104cb5bc2a55391befdd026231156971->enter($__internal_da4bc22a646d9b4e95d6e30455fe22bb104cb5bc2a55391befdd026231156971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8ffccf8cde0d3f5bc0ee9ec2f3aab199b15e9fccb47b025c336b3ada19330e7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ffccf8cde0d3f5bc0ee9ec2f3aab199b15e9fccb47b025c336b3ada19330e7e->enter($__internal_8ffccf8cde0d3f5bc0ee9ec2f3aab199b15e9fccb47b025c336b3ada19330e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<!-- MAIN IMAGE SECTION -->
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
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Accueil</a></li>
  <li class=\"breadcrumb-item\"><a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
        echo "\">Mon profil</a></li>
  <li class=\"breadcrumb-item active\">Mes compétences</li>
  <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "headers", array()), "get", array(0 => "referer"), "method"), "html", null, true);
        echo "\" class=\"btn btn-info pull-right\"><span class=\"glyphicon glyphicon-repeat\"></span> Retour</a>

</ol>

<div class=\"container\">
<div class=\"row col-sm-10 col-sm-offset-1\">
<h3>Listes de mes compétences</h3>
<a class=\"pull-right\" href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newCompetence");
        echo "\" class=\"btn btn-primary\">Nouveau</a>
<hr>

<table class=\"table\" id=\"myTable\">
  <thead>
    <td>Nom</td>
    <td>Pourcentage </td>
  </thead>
  <tbody>
";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["competences"]) ? $context["competences"] : $this->getContext($context, "competences")));
        foreach ($context['_seq'] as $context["_key"] => $context["competence"]) {
            // line 36
            echo "  <tr>
    <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["competence"], "nom", array()), "html", null, true);
            echo "</td>
    <td width=\"30%\">";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["competence"], "pourcentage", array()), "html", null, true);
            echo "%</td>
  ";
            // line 43
            echo "  </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competence'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "</tbody>
</table>

</div><!-- row -->
</div>
";
        
        $__internal_8ffccf8cde0d3f5bc0ee9ec2f3aab199b15e9fccb47b025c336b3ada19330e7e->leave($__internal_8ffccf8cde0d3f5bc0ee9ec2f3aab199b15e9fccb47b025c336b3ada19330e7e_prof);

        
        $__internal_da4bc22a646d9b4e95d6e30455fe22bb104cb5bc2a55391befdd026231156971->leave($__internal_da4bc22a646d9b4e95d6e30455fe22bb104cb5bc2a55391befdd026231156971_prof);

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
        return array (  116 => 45,  109 => 43,  105 => 38,  101 => 37,  98 => 36,  94 => 35,  82 => 26,  72 => 19,  67 => 17,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
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
<h3>Listes de mes compétences</h3>
<a class=\"pull-right\" href=\"{{ path('newCompetence') }}\" class=\"btn btn-primary\">Nouveau</a>
<hr>

<table class=\"table\" id=\"myTable\">
  <thead>
    <td>Nom</td>
    <td>Pourcentage </td>
  </thead>
  <tbody>
{% for competence in competences %}
  <tr>
    <td>{{competence.nom}}</td>
    <td width=\"30%\">{{competence.pourcentage}}%</td>
  {#  <td>
      <a href=\"{{ path('editProjet', {'id': competence.id}) }}\" class=\"btn btn-warning\"><span class=\"glyphicon glyphicon-pencil\"></span></a>
      <a href=\"{{ path('deleteProjet', {'id': competence.id}) }}\" class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-remove\"></span></a>
    </td>#}
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
