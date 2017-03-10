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
        $__internal_77318b2543b86c98cbb2805cd0390d82b60dcdb7a2ba5926ff3a5e4815fabe61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77318b2543b86c98cbb2805cd0390d82b60dcdb7a2ba5926ff3a5e4815fabe61->enter($__internal_77318b2543b86c98cbb2805cd0390d82b60dcdb7a2ba5926ff3a5e4815fabe61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projets/afficheProjet.html.twig"));

        $__internal_2d63f195b59bb71c239ded34743ab91c96778c90e1b27044f625347ac67dde5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d63f195b59bb71c239ded34743ab91c96778c90e1b27044f625347ac67dde5b->enter($__internal_2d63f195b59bb71c239ded34743ab91c96778c90e1b27044f625347ac67dde5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projets/afficheProjet.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77318b2543b86c98cbb2805cd0390d82b60dcdb7a2ba5926ff3a5e4815fabe61->leave($__internal_77318b2543b86c98cbb2805cd0390d82b60dcdb7a2ba5926ff3a5e4815fabe61_prof);

        
        $__internal_2d63f195b59bb71c239ded34743ab91c96778c90e1b27044f625347ac67dde5b->leave($__internal_2d63f195b59bb71c239ded34743ab91c96778c90e1b27044f625347ac67dde5b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_05d94f41dff2172f34d938520511b993a51c17f0e904eff6a9591b3b5a38e0f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05d94f41dff2172f34d938520511b993a51c17f0e904eff6a9591b3b5a38e0f1->enter($__internal_05d94f41dff2172f34d938520511b993a51c17f0e904eff6a9591b3b5a38e0f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c09d8826f9c4b558b74c7487efd4cb3bb299594038f274fd9050c24032356d51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c09d8826f9c4b558b74c7487efd4cb3bb299594038f274fd9050c24032356d51->enter($__internal_c09d8826f9c4b558b74c7487efd4cb3bb299594038f274fd9050c24032356d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<!-- MAIN IMAGE SECTION -->
<div id=\"portwrap\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 col-lg-offset-2\">
        <h2>Titre projet</h2>
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
      <h3>Projet : 2</h3>
      <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
      <p>Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
    </div>

    <div class=\"col-lg-4 col-lg-offset-1 desc\">
      <h3>Infos supplémentaires</h3>
      <br>
      <h5><b>Auteurs:</b> REBECCA ZEARING</h5>
      <h5><b>Nombre de places:</b> 5 </h5>
      <h5><b>Nombre de participants:</b> 0 / 5</h5>
      <h5><b>Description:</b></h5>
      <p class=\"tm\">Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure.<br/>Lorem Ipsum passage, and going through the cites of the word in classical literature.</p>
      <p><br><button type=\"button\" class=\"btn btn-green\">Participer !</button></p><p><button type=\"button\" class=\"btn btn-green\">Inviter</button></p>

    </div>

  </div><!-- row -->
</div><!-- container -->
</div><!-- dg -->

";
        
        $__internal_c09d8826f9c4b558b74c7487efd4cb3bb299594038f274fd9050c24032356d51->leave($__internal_c09d8826f9c4b558b74c7487efd4cb3bb299594038f274fd9050c24032356d51_prof);

        
        $__internal_05d94f41dff2172f34d938520511b993a51c17f0e904eff6a9591b3b5a38e0f1->leave($__internal_05d94f41dff2172f34d938520511b993a51c17f0e904eff6a9591b3b5a38e0f1_prof);

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
        return array (  49 => 4,  40 => 3,  11 => 1,);
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
        <h2>Titre projet</h2>
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
      <h3>Projet : 2</h3>
      <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
      <p>Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
    </div>

    <div class=\"col-lg-4 col-lg-offset-1 desc\">
      <h3>Infos supplémentaires</h3>
      <br>
      <h5><b>Auteurs:</b> REBECCA ZEARING</h5>
      <h5><b>Nombre de places:</b> 5 </h5>
      <h5><b>Nombre de participants:</b> 0 / 5</h5>
      <h5><b>Description:</b></h5>
      <p class=\"tm\">Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure.<br/>Lorem Ipsum passage, and going through the cites of the word in classical literature.</p>
      <p><br><button type=\"button\" class=\"btn btn-green\">Participer !</button></p><p><button type=\"button\" class=\"btn btn-green\">Inviter</button></p>

    </div>

  </div><!-- row -->
</div><!-- container -->
</div><!-- dg -->

{% endblock%}
", "projets/afficheProjet.html.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/app/Resources/views/projets/afficheProjet.html.twig");
    }
}
