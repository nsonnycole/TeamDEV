<?php

/* :projets:newProjetImage.html.twig */
class __TwigTemplate_c61f72e7dc827d49f54aebe05cf888df87b9a3ff21b609d72e657decd2b80343 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":projets:newProjetImage.html.twig", 1);
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
        $__internal_72faf047b2ae28b9ec305b3adef13757d99e67b0751f1a26a097a815ebc41632 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72faf047b2ae28b9ec305b3adef13757d99e67b0751f1a26a097a815ebc41632->enter($__internal_72faf047b2ae28b9ec305b3adef13757d99e67b0751f1a26a097a815ebc41632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":projets:newProjetImage.html.twig"));

        $__internal_d88e8c2165ab498857af11a81ab3aafc71f877b81d46bcc3e7ef1a8c15f42fe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d88e8c2165ab498857af11a81ab3aafc71f877b81d46bcc3e7ef1a8c15f42fe1->enter($__internal_d88e8c2165ab498857af11a81ab3aafc71f877b81d46bcc3e7ef1a8c15f42fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":projets:newProjetImage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72faf047b2ae28b9ec305b3adef13757d99e67b0751f1a26a097a815ebc41632->leave($__internal_72faf047b2ae28b9ec305b3adef13757d99e67b0751f1a26a097a815ebc41632_prof);

        
        $__internal_d88e8c2165ab498857af11a81ab3aafc71f877b81d46bcc3e7ef1a8c15f42fe1->leave($__internal_d88e8c2165ab498857af11a81ab3aafc71f877b81d46bcc3e7ef1a8c15f42fe1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d4b4fc66f2d98852633cd5cf1bf2d28853859a4e262ab1728fda7c083a7c326 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d4b4fc66f2d98852633cd5cf1bf2d28853859a4e262ab1728fda7c083a7c326->enter($__internal_1d4b4fc66f2d98852633cd5cf1bf2d28853859a4e262ab1728fda7c083a7c326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_25d187a2492cc81787ae8a4b9b434d20add3246306c5be1754a4076ffc292f0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25d187a2492cc81787ae8a4b9b434d20add3246306c5be1754a4076ffc292f0e->enter($__internal_25d187a2492cc81787ae8a4b9b434d20add3246306c5be1754a4076ffc292f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()) == $this->getAttribute($this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "idUtilisateur", array()), "username", array())))) {
            // line 5
            echo "<div class=\"container\">
";
            // line 6
            if ($this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "pictureName", array())) {
                // line 7
                echo "  <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "getWebPath", array(), "method")), "html", null, true);
                echo "\" />
  ";
            } else {
                // line 9
                echo "  Pas d'image chargée pour ce projet!
  ";
            }
            // line 11
            echo "
  <h1>Charger une image pour ce projet</h1>

  <form action=\"#\" method=\"post\">
  ";
            // line 15
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
            echo "
  ";
            // line 16
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
            echo "

  </form>
</div>
";
        } else {
            // line 21
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Default:index"));
            echo "
";
        }
        
        $__internal_25d187a2492cc81787ae8a4b9b434d20add3246306c5be1754a4076ffc292f0e->leave($__internal_25d187a2492cc81787ae8a4b9b434d20add3246306c5be1754a4076ffc292f0e_prof);

        
        $__internal_1d4b4fc66f2d98852633cd5cf1bf2d28853859a4e262ab1728fda7c083a7c326->leave($__internal_1d4b4fc66f2d98852633cd5cf1bf2d28853859a4e262ab1728fda7c083a7c326_prof);

    }

    public function getTemplateName()
    {
        return ":projets:newProjetImage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 21,  76 => 16,  72 => 15,  66 => 11,  62 => 9,  56 => 7,  54 => 6,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
{% if app.user and app.user.username == detailProjet.idUtilisateur.username %}
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
{% else %}
{{ render(controller('AppBundle:Default:index')) }}
{% endif %}
{% endblock %}
", ":projets:newProjetImage.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/views/projets/newProjetImage.html.twig");
    }
}
