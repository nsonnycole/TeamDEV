<?php

/* :inscription:newInsc.html.twig */
class __TwigTemplate_3ba5b4a8b0580be6e694168683200f32488ae95d8c596d8e572d56c1403845a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":inscription:newInsc.html.twig", 1);
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
        $__internal_98dd9ff5bfe52beb5bb3cba7685b390fe13b150837b561e5bf676fda6be5a0ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98dd9ff5bfe52beb5bb3cba7685b390fe13b150837b561e5bf676fda6be5a0ed->enter($__internal_98dd9ff5bfe52beb5bb3cba7685b390fe13b150837b561e5bf676fda6be5a0ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":inscription:newInsc.html.twig"));

        $__internal_7159733f399ebd72e327ae2a8a9c4c6b8ec125f3e282bd459d6b1be32c75f811 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7159733f399ebd72e327ae2a8a9c4c6b8ec125f3e282bd459d6b1be32c75f811->enter($__internal_7159733f399ebd72e327ae2a8a9c4c6b8ec125f3e282bd459d6b1be32c75f811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":inscription:newInsc.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98dd9ff5bfe52beb5bb3cba7685b390fe13b150837b561e5bf676fda6be5a0ed->leave($__internal_98dd9ff5bfe52beb5bb3cba7685b390fe13b150837b561e5bf676fda6be5a0ed_prof);

        
        $__internal_7159733f399ebd72e327ae2a8a9c4c6b8ec125f3e282bd459d6b1be32c75f811->leave($__internal_7159733f399ebd72e327ae2a8a9c4c6b8ec125f3e282bd459d6b1be32c75f811_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ad0fc67487a1c4b8ab4072ee7dc0bd989157b00bcfe75fc9872edce36f4f2fab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad0fc67487a1c4b8ab4072ee7dc0bd989157b00bcfe75fc9872edce36f4f2fab->enter($__internal_ad0fc67487a1c4b8ab4072ee7dc0bd989157b00bcfe75fc9872edce36f4f2fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_52d1a1348a82154583220f8628fb0bbbce1358c4c0d759d4cad59fb136b23825 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52d1a1348a82154583220f8628fb0bbbce1358c4c0d759d4cad59fb136b23825->enter($__internal_52d1a1348a82154583220f8628fb0bbbce1358c4c0d759d4cad59fb136b23825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()) != $this->getAttribute($this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "idUtilisateur", array()), "username", array())))) {
            // line 5
            echo "<div class=\"container\" style=\"display:inline\">
    ";
            // line 6
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 7
                echo "        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
                echo " |
        <a href=\"";
                // line 8
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
                echo "\">
            ";
                // line 9
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
                echo "
        </a>
    ";
            } else {
                // line 12
                echo "        <a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
                echo "</a>
    ";
            }
            // line 14
            echo "</div>
<!-- MAIN IMAGE SECTION -->
<div id=\"portwrap\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 col-lg-offset-2\">
        <h2>Inscription au projet</h2>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->

<!-- WELCOME SECTION -->
<ol class=\"breadcrumb\">
  <li class=\"breadcrumb-item\"><a href=\"";
            // line 28
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\">Accueil</a></li>
  <li class=\"breadcrumb-item\"><a href=\"";
            // line 29
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projets");
            echo "\">Projets</a></li>
  <li class=\"breadcrumb-item\"><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showProjet", array("id" => $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "nomProjet", array()), "html", null, true);
            echo "</a></li>
  <li class=\"breadcrumb-item active\">Inscription au projet</li>
  <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "headers", array()), "get", array(0 => "referer"), "method"), "html", null, true);
            echo "\" class=\"btn btn-info pull-right\"><span class=\"glyphicon glyphicon-repeat\"></span> Retour</a>
</ol>
<div class=\"container\">
    <div id=\"loginbox\" style=\"margin-top:50px;\" class=\"mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2\">
      ";
            // line 36
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
            echo "
      ";
            // line 37
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
            echo "
      <a onclick=\"return(confirm('Attention vous êtes sur le point d'annuler votre action'));\" href=\"";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projets");
            echo "\" class=\"btn btn-warning pull-right\"/> Annuler</a>
      ";
            // line 39
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
            echo "
    </div>
</div>
";
        } else {
            // line 43
            echo "  ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Default:index"));
            echo "
";
        }
        
        $__internal_52d1a1348a82154583220f8628fb0bbbce1358c4c0d759d4cad59fb136b23825->leave($__internal_52d1a1348a82154583220f8628fb0bbbce1358c4c0d759d4cad59fb136b23825_prof);

        
        $__internal_ad0fc67487a1c4b8ab4072ee7dc0bd989157b00bcfe75fc9872edce36f4f2fab->leave($__internal_ad0fc67487a1c4b8ab4072ee7dc0bd989157b00bcfe75fc9872edce36f4f2fab_prof);

    }

    public function getTemplateName()
    {
        return ":inscription:newInsc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 43,  129 => 39,  125 => 38,  121 => 37,  117 => 36,  110 => 32,  103 => 30,  99 => 29,  95 => 28,  79 => 14,  71 => 12,  65 => 9,  61 => 8,  56 => 7,  54 => 6,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
{% if app.user and app.user.username != projet.idUtilisateur.username %}
<div class=\"container\" style=\"display:inline\">
    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
        {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
        <a href=\"{{ path('fos_user_security_logout') }}\">
            {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
        </a>
    {% else %}
        <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
    {% endif %}
</div>
<!-- MAIN IMAGE SECTION -->
<div id=\"portwrap\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 col-lg-offset-2\">
        <h2>Inscription au projet</h2>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->

<!-- WELCOME SECTION -->
<ol class=\"breadcrumb\">
  <li class=\"breadcrumb-item\"><a href=\"{{path('homepage')}}\">Accueil</a></li>
  <li class=\"breadcrumb-item\"><a href=\"{{path('projets')}}\">Projets</a></li>
  <li class=\"breadcrumb-item\"><a href=\"{{ path('showProjet', {'id': projet.id}) }}\">{{projet.nomProjet}}</a></li>
  <li class=\"breadcrumb-item active\">Inscription au projet</li>
  <a href=\"{{ app.request.headers.get('referer') }}\" class=\"btn btn-info pull-right\"><span class=\"glyphicon glyphicon-repeat\"></span> Retour</a>
</ol>
<div class=\"container\">
    <div id=\"loginbox\" style=\"margin-top:50px;\" class=\"mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2\">
      {{ form_start(form) }}
      {{ form_widget(form) }}
      <a onclick=\"return(confirm('Attention vous êtes sur le point d'annuler votre action'));\" href=\"{{path('projets')}}\" class=\"btn btn-warning pull-right\"/> Annuler</a>
      {{ form_end(form) }}
    </div>
</div>
{% else %}
  {{ render(controller('AppBundle:Default:index')) }}
{% endif %}
{% endblock %}
", ":inscription:newInsc.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/views/inscription/newInsc.html.twig");
    }
}
