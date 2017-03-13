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
        $__internal_87485cf03fb3291cc17a97fd51d26b86c2fd8e22f5b4e189a30703fc6243bd6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87485cf03fb3291cc17a97fd51d26b86c2fd8e22f5b4e189a30703fc6243bd6a->enter($__internal_87485cf03fb3291cc17a97fd51d26b86c2fd8e22f5b4e189a30703fc6243bd6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projets/afficheProjet.html.twig"));

        $__internal_23c901e5826ac9c150a8635d0a7dbaba20dec4676778cc53b376da1587af590f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23c901e5826ac9c150a8635d0a7dbaba20dec4676778cc53b376da1587af590f->enter($__internal_23c901e5826ac9c150a8635d0a7dbaba20dec4676778cc53b376da1587af590f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projets/afficheProjet.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87485cf03fb3291cc17a97fd51d26b86c2fd8e22f5b4e189a30703fc6243bd6a->leave($__internal_87485cf03fb3291cc17a97fd51d26b86c2fd8e22f5b4e189a30703fc6243bd6a_prof);

        
        $__internal_23c901e5826ac9c150a8635d0a7dbaba20dec4676778cc53b376da1587af590f->leave($__internal_23c901e5826ac9c150a8635d0a7dbaba20dec4676778cc53b376da1587af590f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_610cf7a90b666a48918b420afa09d008ce72ae109cf1e3cafe11da228f64abf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_610cf7a90b666a48918b420afa09d008ce72ae109cf1e3cafe11da228f64abf5->enter($__internal_610cf7a90b666a48918b420afa09d008ce72ae109cf1e3cafe11da228f64abf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_31d4d80af8a468a0ac1a36339fb03b6ed83007191daefd173296c5138fed48af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31d4d80af8a468a0ac1a36339fb03b6ed83007191daefd173296c5138fed48af->enter($__internal_31d4d80af8a468a0ac1a36339fb03b6ed83007191daefd173296c5138fed48af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
      <h5><b>Auteur:</b> REBECCA ZEARING</h5>
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
        
        $__internal_31d4d80af8a468a0ac1a36339fb03b6ed83007191daefd173296c5138fed48af->leave($__internal_31d4d80af8a468a0ac1a36339fb03b6ed83007191daefd173296c5138fed48af_prof);

        
        $__internal_610cf7a90b666a48918b420afa09d008ce72ae109cf1e3cafe11da228f64abf5->leave($__internal_610cf7a90b666a48918b420afa09d008ce72ae109cf1e3cafe11da228f64abf5_prof);

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
      <h5><b>Auteur:</b> REBECCA ZEARING</h5>
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
