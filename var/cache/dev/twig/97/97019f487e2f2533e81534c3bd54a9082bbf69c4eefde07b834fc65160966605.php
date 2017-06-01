<?php

/* :projets:newProjetImage.html2.twig */
class __TwigTemplate_5f6ea211c844c7334e734f698e16d57ee9f2acf4061ace3dddfde4eae2578aa3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":projets:newProjetImage.html2.twig", 1);
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
        $__internal_e37d62a1ccb5a15e0aa5454973e684f63c136cfa9dc7dfd49246c6a144bad363 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e37d62a1ccb5a15e0aa5454973e684f63c136cfa9dc7dfd49246c6a144bad363->enter($__internal_e37d62a1ccb5a15e0aa5454973e684f63c136cfa9dc7dfd49246c6a144bad363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":projets:newProjetImage.html2.twig"));

        $__internal_f1f7437083b9ab34239864e17d843e94edcb1733ce04e52dcbb499533ba1a27a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1f7437083b9ab34239864e17d843e94edcb1733ce04e52dcbb499533ba1a27a->enter($__internal_f1f7437083b9ab34239864e17d843e94edcb1733ce04e52dcbb499533ba1a27a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":projets:newProjetImage.html2.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e37d62a1ccb5a15e0aa5454973e684f63c136cfa9dc7dfd49246c6a144bad363->leave($__internal_e37d62a1ccb5a15e0aa5454973e684f63c136cfa9dc7dfd49246c6a144bad363_prof);

        
        $__internal_f1f7437083b9ab34239864e17d843e94edcb1733ce04e52dcbb499533ba1a27a->leave($__internal_f1f7437083b9ab34239864e17d843e94edcb1733ce04e52dcbb499533ba1a27a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f550a420e99604809d82bf2538e0d29053914b783fd6af5c34ec7eaeb4c6eae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f550a420e99604809d82bf2538e0d29053914b783fd6af5c34ec7eaeb4c6eae->enter($__internal_4f550a420e99604809d82bf2538e0d29053914b783fd6af5c34ec7eaeb4c6eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1a4c30a8ae79ff0c98e5b015f13da4d417c9e97ad6e3fa6e369af241fcaa5b3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a4c30a8ae79ff0c98e5b015f13da4d417c9e97ad6e3fa6e369af241fcaa5b3b->enter($__internal_1a4c30a8ae79ff0c98e5b015f13da4d417c9e97ad6e3fa6e369af241fcaa5b3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
";
        // line 5
        if ($this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "pictureName", array())) {
            // line 6
            echo "  <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "getWebPath", array(), "method")), "html", null, true);
            echo "\" />
  ";
        } else {
            // line 8
            echo "  Pas d'image chargée pour ce projet!
  ";
        }
        // line 10
        echo "
  <h1>Charger une image pour ce projet</h1>

  <form action=\"#\" method=\"post\">
  ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
  ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

  </form>
</div>
";
        
        $__internal_1a4c30a8ae79ff0c98e5b015f13da4d417c9e97ad6e3fa6e369af241fcaa5b3b->leave($__internal_1a4c30a8ae79ff0c98e5b015f13da4d417c9e97ad6e3fa6e369af241fcaa5b3b_prof);

        
        $__internal_4f550a420e99604809d82bf2538e0d29053914b783fd6af5c34ec7eaeb4c6eae->leave($__internal_4f550a420e99604809d82bf2538e0d29053914b783fd6af5c34ec7eaeb4c6eae_prof);

    }

    public function getTemplateName()
    {
        return ":projets:newProjetImage.html2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 15,  70 => 14,  64 => 10,  60 => 8,  54 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("  {% extends 'base.html.twig' %}

{% block body %}
<div class=\"container\">
{% if projet.pictureName %}
  <img src=\"{{ asset(projet.getWebPath()) }}\" />
  {% else %}
  Pas d'image chargée pour ce projet!
  {% endif %}

  <h1>Charger une image pour ce projet</h1>

  <form action=\"#\" method=\"post\">
  {{ form_start(form) }}
  {{ form_widget(form) }}

  </form>
</div>
{% endblock %}
", ":projets:newProjetImage.html2.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/views/projets/newProjetImage.html2.twig");
    }
}
