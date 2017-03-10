<?php

/* default/index.html.twig */
class __TwigTemplate_2131c216df2e1fa44d93a4022976a929227a81f29136a582063930fc2c160bea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_a8b5a61484085fd8ed2c0e00e472436eb65f3df8a7f1abb2d69bdc46edf9c8c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8b5a61484085fd8ed2c0e00e472436eb65f3df8a7f1abb2d69bdc46edf9c8c0->enter($__internal_a8b5a61484085fd8ed2c0e00e472436eb65f3df8a7f1abb2d69bdc46edf9c8c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_98f071b2e0f24ed4360dd1e886664e3c8afaebc698c4a68aef9c59859f5ca12d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98f071b2e0f24ed4360dd1e886664e3c8afaebc698c4a68aef9c59859f5ca12d->enter($__internal_98f071b2e0f24ed4360dd1e886664e3c8afaebc698c4a68aef9c59859f5ca12d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8b5a61484085fd8ed2c0e00e472436eb65f3df8a7f1abb2d69bdc46edf9c8c0->leave($__internal_a8b5a61484085fd8ed2c0e00e472436eb65f3df8a7f1abb2d69bdc46edf9c8c0_prof);

        
        $__internal_98f071b2e0f24ed4360dd1e886664e3c8afaebc698c4a68aef9c59859f5ca12d->leave($__internal_98f071b2e0f24ed4360dd1e886664e3c8afaebc698c4a68aef9c59859f5ca12d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f276778bb3be7c8c1e5f78f34f910a68da36b4e3b0bf5c69749e41169b24e846 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f276778bb3be7c8c1e5f78f34f910a68da36b4e3b0bf5c69749e41169b24e846->enter($__internal_f276778bb3be7c8c1e5f78f34f910a68da36b4e3b0bf5c69749e41169b24e846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7e69b53d10d3a688e518ccd81ff36207dd7ee5858e3f7b43f425f83b0b59dcb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e69b53d10d3a688e518ccd81ff36207dd7ee5858e3f7b43f425f83b0b59dcb2->enter($__internal_7e69b53d10d3a688e518ccd81ff36207dd7ee5858e3f7b43f425f83b0b59dcb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<!-- MAIN IMAGE SECTION -->
<div id=\"headerwrap\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 col-lg-offset-2\">
        <h1>TeamDEV</h1>
        <h2>Travaillez à plusieur  pour un meilleur résultat</h2>
        <div class=\"spacer\"></div>
        <i class=\"fa fa-angle-down\"></i>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /headerwrap -->

<!-- WELCOME SECTION -->

<!-- BLOG POSTS -->
<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-lg-12\">
      <h1>Les derniers projets</h1>
    </div><!-- col-lg-12 -->
    <div class=\"col-lg-8\">
      <p>Découvrez les dernieres propositions de projets.</p>
    </div><!-- col-lg-8-->
    <div class=\"col-lg-4 goright\">
      <p><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Voir tous les projets</a></p>
    </div>
  </div><!-- row -->

  <div class=\"row mt\">
  ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projets"]) ? $context["projets"] : $this->getContext($context, "projets")));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 36
            echo "      <div class=\"col-lg-4 projet\">
        <h3><a href=\"";
            // line 37
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("showProjet");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "nomProjet", array()), "html", null, true);
            echo "</a></h3>
        <p>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "description", array()), "html", null, true);
            echo "</p>
        <p class=\"infos\">Début : ";
            // line 39
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["projet"], "dateDebut", array()), "d/m/Y"), "html", null, true);
            echo "  |  Places : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "nbPlaces", array()), "html", null, true);
            echo " | statut : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "statut", array()), "html", null, true);
            echo "
        <br>Auteur : <a href=\"#\">Naomie</a></p>
        <p><a href=\"#\"><i class=\"fa fa-link\"></i> En savoir plus</a></p>
      </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "  </div>
</div><!-- container -->

";
        
        $__internal_7e69b53d10d3a688e518ccd81ff36207dd7ee5858e3f7b43f425f83b0b59dcb2->leave($__internal_7e69b53d10d3a688e518ccd81ff36207dd7ee5858e3f7b43f425f83b0b59dcb2_prof);

        
        $__internal_f276778bb3be7c8c1e5f78f34f910a68da36b4e3b0bf5c69749e41169b24e846->leave($__internal_f276778bb3be7c8c1e5f78f34f910a68da36b4e3b0bf5c69749e41169b24e846_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 44,  99 => 39,  95 => 38,  89 => 37,  86 => 36,  82 => 35,  49 => 4,  40 => 3,  11 => 1,);
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
<div id=\"headerwrap\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 col-lg-offset-2\">
        <h1>TeamDEV</h1>
        <h2>Travaillez à plusieur  pour un meilleur résultat</h2>
        <div class=\"spacer\"></div>
        <i class=\"fa fa-angle-down\"></i>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /headerwrap -->

<!-- WELCOME SECTION -->

<!-- BLOG POSTS -->
<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-lg-12\">
      <h1>Les derniers projets</h1>
    </div><!-- col-lg-12 -->
    <div class=\"col-lg-8\">
      <p>Découvrez les dernieres propositions de projets.</p>
    </div><!-- col-lg-8-->
    <div class=\"col-lg-4 goright\">
      <p><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Voir tous les projets</a></p>
    </div>
  </div><!-- row -->

  <div class=\"row mt\">
  {% for projet in projets %}
      <div class=\"col-lg-4 projet\">
        <h3><a href=\"{{url ('showProjet')}}\">{{projet.nomProjet}}</a></h3>
        <p>{{projet.description}}</p>
        <p class=\"infos\">Début : {{projet.dateDebut|date('d/m/Y')}}  |  Places : {{projet.nbPlaces}} | statut : {{projet.statut}}
        <br>Auteur : <a href=\"#\">Naomie</a></p>
        <p><a href=\"#\"><i class=\"fa fa-link\"></i> En savoir plus</a></p>
      </div>
  {% endfor %}
  </div>
</div><!-- container -->

{% endblock %}
", "default/index.html.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/app/Resources/views/default/index.html.twig");
    }
}
