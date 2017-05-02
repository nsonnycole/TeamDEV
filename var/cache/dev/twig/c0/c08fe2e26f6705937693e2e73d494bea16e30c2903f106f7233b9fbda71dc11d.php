<?php

/* projets/afficheProjet.html.twig */
class __TwigTemplate_955959bcd6abafb815fa2af6c1d9e39ec621f48278030b25f7a011ac0e5775ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "projets/afficheProjet.html.twig", 1);
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
        $__internal_4b87e59b8526b720610490a045d28d90b89e5d1da8c4a4d6bae9139759ba1d29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b87e59b8526b720610490a045d28d90b89e5d1da8c4a4d6bae9139759ba1d29->enter($__internal_4b87e59b8526b720610490a045d28d90b89e5d1da8c4a4d6bae9139759ba1d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projets/afficheProjet.html.twig"));

        $__internal_239b8d7196a5eeb88e8da2446451b29d9cbb8d2e551dc32b509c076b057eda15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_239b8d7196a5eeb88e8da2446451b29d9cbb8d2e551dc32b509c076b057eda15->enter($__internal_239b8d7196a5eeb88e8da2446451b29d9cbb8d2e551dc32b509c076b057eda15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projets/afficheProjet.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b87e59b8526b720610490a045d28d90b89e5d1da8c4a4d6bae9139759ba1d29->leave($__internal_4b87e59b8526b720610490a045d28d90b89e5d1da8c4a4d6bae9139759ba1d29_prof);

        
        $__internal_239b8d7196a5eeb88e8da2446451b29d9cbb8d2e551dc32b509c076b057eda15->leave($__internal_239b8d7196a5eeb88e8da2446451b29d9cbb8d2e551dc32b509c076b057eda15_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7d19310b22f55006860f133f4be4a50f1b2d9b67127d1706bd5586c1cdaec8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7d19310b22f55006860f133f4be4a50f1b2d9b67127d1706bd5586c1cdaec8c->enter($__internal_c7d19310b22f55006860f133f4be4a50f1b2d9b67127d1706bd5586c1cdaec8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d010c0a69742dba8e66a7190a30fbb2012f8360b1beacba9355b8b48a46dbe3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d010c0a69742dba8e66a7190a30fbb2012f8360b1beacba9355b8b48a46dbe3a->enter($__internal_d010c0a69742dba8e66a7190a30fbb2012f8360b1beacba9355b8b48a46dbe3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<!-- MAIN IMAGE SECTION -->
<div id=\"portwrap\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 col-lg-offset-2\">
        <h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "nomProjet", array()), "html", null, true);
        echo "</h2>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->

<!-- WELCOME SECTION -->

<!-- CLIENT INFORMATION -->
<div id=\"lg\">
<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-lg-5 col-lg-offset-1 desc\">
      <h3>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "nomProjet", array()), "html", null, true);
        echo "</h3>
        <img style=\"width:400px;\"src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/about-bg.jpg"), "html", null, true);
        echo "\" >
        <p>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "contenu", array()), "html", null, true);
        echo "</p>


    </div>

    <div class=\"col-lg-4 col-lg-offset-1 desc\">
      <h3>Infos supplémentaires</h3>
      <br>
      <h5><b>Auteur:</b> REBECCA ZEARING</h5>
      <h5><b>Nombre de places:</b> ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "nbPlaces", array()), "html", null, true);
        echo " </h5>
      <h5><b>Nombre de participants:</b> 0 / ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "nbParticipants", array()), "html", null, true);
        echo " </h5>
      <h5><b>Description: </b>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "description", array()), "html", null, true);
        echo "</h5>
      <p class=\"tm\">";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "contenu", array()), "html", null, true);
        echo " </p>
      <p><br><button type=\"button\" class=\"btn btn-green\">Participer !</button></p><p><button type=\"button\" class=\"btn btn-green\">Inviter</button></p>

    </div>

  </div><!-- row -->
</div><!-- container -->
</div><!-- dg -->

";
        
        $__internal_d010c0a69742dba8e66a7190a30fbb2012f8360b1beacba9355b8b48a46dbe3a->leave($__internal_d010c0a69742dba8e66a7190a30fbb2012f8360b1beacba9355b8b48a46dbe3a_prof);

        
        $__internal_c7d19310b22f55006860f133f4be4a50f1b2d9b67127d1706bd5586c1cdaec8c->leave($__internal_c7d19310b22f55006860f133f4be4a50f1b2d9b67127d1706bd5586c1cdaec8c_prof);

    }

    public function getTemplateName()
    {
        return "projets/afficheProjet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 36,  100 => 35,  96 => 34,  92 => 33,  80 => 24,  76 => 23,  72 => 22,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
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
        <h2>{{detailProjet.nomProjet}}</h2>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->

<!-- WELCOME SECTION -->

<!-- CLIENT INFORMATION -->
<div id=\"lg\">
<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-lg-5 col-lg-offset-1 desc\">
      <h3>{{detailProjet.nomProjet}}</h3>
        <img style=\"width:400px;\"src=\"{{asset(\"img/about-bg.jpg\")}}\" >
        <p>{{detailProjet.contenu}}</p>


    </div>

    <div class=\"col-lg-4 col-lg-offset-1 desc\">
      <h3>Infos supplémentaires</h3>
      <br>
      <h5><b>Auteur:</b> REBECCA ZEARING</h5>
      <h5><b>Nombre de places:</b> {{detailProjet.nbPlaces}} </h5>
      <h5><b>Nombre de participants:</b> 0 / {{detailProjet.nbParticipants}} </h5>
      <h5><b>Description: </b>{{detailProjet.description}}</h5>
      <p class=\"tm\">{{detailProjet.contenu}} </p>
      <p><br><button type=\"button\" class=\"btn btn-green\">Participer !</button></p><p><button type=\"button\" class=\"btn btn-green\">Inviter</button></p>

    </div>

  </div><!-- row -->
</div><!-- container -->
</div><!-- dg -->

{% endblock%}
", "projets/afficheProjet.html.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/app/Resources/views/projets/afficheProjet.html.twig");
    }
}
