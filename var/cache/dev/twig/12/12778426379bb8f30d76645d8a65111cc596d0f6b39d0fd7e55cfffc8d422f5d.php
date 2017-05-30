<?php

/* :projets:newProjetImage.html2.twig */
class __TwigTemplate_8629e4efced5539941c3b1847e208595b1f043031bb7f681abe425beda738fa8 extends Twig_Template
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
        $__internal_165acc87a3dc06bed1440bc0467c045bae9a7518f94f8dfe26f604743202d4a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_165acc87a3dc06bed1440bc0467c045bae9a7518f94f8dfe26f604743202d4a3->enter($__internal_165acc87a3dc06bed1440bc0467c045bae9a7518f94f8dfe26f604743202d4a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":projets:newProjetImage.html2.twig"));

        $__internal_6e155b6fff33bc9dd53b5b2c85303c97e8baa67dcb634915bde4264f5854fdb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e155b6fff33bc9dd53b5b2c85303c97e8baa67dcb634915bde4264f5854fdb2->enter($__internal_6e155b6fff33bc9dd53b5b2c85303c97e8baa67dcb634915bde4264f5854fdb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":projets:newProjetImage.html2.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_165acc87a3dc06bed1440bc0467c045bae9a7518f94f8dfe26f604743202d4a3->leave($__internal_165acc87a3dc06bed1440bc0467c045bae9a7518f94f8dfe26f604743202d4a3_prof);

        
        $__internal_6e155b6fff33bc9dd53b5b2c85303c97e8baa67dcb634915bde4264f5854fdb2->leave($__internal_6e155b6fff33bc9dd53b5b2c85303c97e8baa67dcb634915bde4264f5854fdb2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca4344179b1b606b0ca17bf0c84d8a5b1fd55e323cac30457cd0be0fb7c031ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca4344179b1b606b0ca17bf0c84d8a5b1fd55e323cac30457cd0be0fb7c031ec->enter($__internal_ca4344179b1b606b0ca17bf0c84d8a5b1fd55e323cac30457cd0be0fb7c031ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_49dcac43199644b27e8699ae897ac093a36f81f192f6ee9feb6f19c137af2cca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49dcac43199644b27e8699ae897ac093a36f81f192f6ee9feb6f19c137af2cca->enter($__internal_49dcac43199644b27e8699ae897ac093a36f81f192f6ee9feb6f19c137af2cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_49dcac43199644b27e8699ae897ac093a36f81f192f6ee9feb6f19c137af2cca->leave($__internal_49dcac43199644b27e8699ae897ac093a36f81f192f6ee9feb6f19c137af2cca_prof);

        
        $__internal_ca4344179b1b606b0ca17bf0c84d8a5b1fd55e323cac30457cd0be0fb7c031ec->leave($__internal_ca4344179b1b606b0ca17bf0c84d8a5b1fd55e323cac30457cd0be0fb7c031ec_prof);

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
        return new Twig_Source("{% extends 'base.html.twig' %}

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
