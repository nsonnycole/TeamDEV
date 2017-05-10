<?php

/* projets/newProjetImage.html.twig */
class __TwigTemplate_c61f72e7dc827d49f54aebe05cf888df87b9a3ff21b609d72e657decd2b80343 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "projets/newProjetImage.html.twig", 1);
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
        $__internal_865b38ecb6dfc3073ab905b1d6aff7c44f12df8273923358a1ac462e468a349d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_865b38ecb6dfc3073ab905b1d6aff7c44f12df8273923358a1ac462e468a349d->enter($__internal_865b38ecb6dfc3073ab905b1d6aff7c44f12df8273923358a1ac462e468a349d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projets/newProjetImage.html.twig"));

        $__internal_eb0ebf917923ef231cbfe5bbd3b69d3e020d8b1bce0bac2d5d76f5eb691b433e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb0ebf917923ef231cbfe5bbd3b69d3e020d8b1bce0bac2d5d76f5eb691b433e->enter($__internal_eb0ebf917923ef231cbfe5bbd3b69d3e020d8b1bce0bac2d5d76f5eb691b433e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projets/newProjetImage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_865b38ecb6dfc3073ab905b1d6aff7c44f12df8273923358a1ac462e468a349d->leave($__internal_865b38ecb6dfc3073ab905b1d6aff7c44f12df8273923358a1ac462e468a349d_prof);

        
        $__internal_eb0ebf917923ef231cbfe5bbd3b69d3e020d8b1bce0bac2d5d76f5eb691b433e->leave($__internal_eb0ebf917923ef231cbfe5bbd3b69d3e020d8b1bce0bac2d5d76f5eb691b433e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b056e10119d500aaf5ba50ec204bde4dbdbdc0f6ac369f10d038910bc149a746 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b056e10119d500aaf5ba50ec204bde4dbdbdc0f6ac369f10d038910bc149a746->enter($__internal_b056e10119d500aaf5ba50ec204bde4dbdbdc0f6ac369f10d038910bc149a746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b32ed7f2a2e49d47a9a61e466551ae067cdf25901412777fc9ce72254a63dde7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b32ed7f2a2e49d47a9a61e466551ae067cdf25901412777fc9ce72254a63dde7->enter($__internal_b32ed7f2a2e49d47a9a61e466551ae067cdf25901412777fc9ce72254a63dde7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b32ed7f2a2e49d47a9a61e466551ae067cdf25901412777fc9ce72254a63dde7->leave($__internal_b32ed7f2a2e49d47a9a61e466551ae067cdf25901412777fc9ce72254a63dde7_prof);

        
        $__internal_b056e10119d500aaf5ba50ec204bde4dbdbdc0f6ac369f10d038910bc149a746->leave($__internal_b056e10119d500aaf5ba50ec204bde4dbdbdc0f6ac369f10d038910bc149a746_prof);

    }

    public function getTemplateName()
    {
        return "projets/newProjetImage.html.twig";
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
", "projets/newProjetImage.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/views/projets/newProjetImage.html.twig");
    }
}
