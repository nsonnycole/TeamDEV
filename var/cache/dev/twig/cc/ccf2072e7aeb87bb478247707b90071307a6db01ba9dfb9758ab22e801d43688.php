<?php

/* :projets:newProjetImage.html.twig */
class __TwigTemplate_87fcf59c7ac776ff18de3064cb28c337af5af35d794a852a039adb2cb7b47abd extends Twig_Template
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
        $__internal_8c7d018eee99c2fde136707915c646e133cd07d848dfe629d008b655d3ed0aad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c7d018eee99c2fde136707915c646e133cd07d848dfe629d008b655d3ed0aad->enter($__internal_8c7d018eee99c2fde136707915c646e133cd07d848dfe629d008b655d3ed0aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":projets:newProjetImage.html.twig"));

        $__internal_858ec47cb55ed7b359033cb635bd0ca376cb523e50928389b6722ade8040201d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_858ec47cb55ed7b359033cb635bd0ca376cb523e50928389b6722ade8040201d->enter($__internal_858ec47cb55ed7b359033cb635bd0ca376cb523e50928389b6722ade8040201d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":projets:newProjetImage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c7d018eee99c2fde136707915c646e133cd07d848dfe629d008b655d3ed0aad->leave($__internal_8c7d018eee99c2fde136707915c646e133cd07d848dfe629d008b655d3ed0aad_prof);

        
        $__internal_858ec47cb55ed7b359033cb635bd0ca376cb523e50928389b6722ade8040201d->leave($__internal_858ec47cb55ed7b359033cb635bd0ca376cb523e50928389b6722ade8040201d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f08b80c0b622ad84f1cc0774931c097dd83447a6577e1dc7210edd4a9b0d101d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f08b80c0b622ad84f1cc0774931c097dd83447a6577e1dc7210edd4a9b0d101d->enter($__internal_f08b80c0b622ad84f1cc0774931c097dd83447a6577e1dc7210edd4a9b0d101d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e3f76308b458ec8ee241f2eccb1e5859e09b2b97e7eb0e139305db36cde26e3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3f76308b458ec8ee241f2eccb1e5859e09b2b97e7eb0e139305db36cde26e3c->enter($__internal_e3f76308b458ec8ee241f2eccb1e5859e09b2b97e7eb0e139305db36cde26e3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\" style=\"display:inline\">
    ";
        // line 5
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 6
            echo "        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\"><img  width=\"50px;\"src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("img/avatar/" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "avatar", array()), "url", array()))), "html", null, true);
            echo "\"></a>
        ";
            // line 7
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
";
        // line 15
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()) == $this->getAttribute($this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "idUtilisateur", array()), "username", array())))) {
            // line 16
            echo "<div class=\"container\">
";
            // line 17
            if ($this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "pictureName", array())) {
                // line 18
                echo "  <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "getWebPath", array(), "method")), "html", null, true);
                echo "\" />
  ";
            } else {
                // line 20
                echo "  Pas d'image chargée pour ce projet!
  ";
            }
            // line 22
            echo "
  <h1>Charger une image pour ce projet</h1>

  <form action=\"#\" method=\"post\">
  ";
            // line 26
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
            echo "
  ";
            // line 27
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
            echo "

  </form>
</div>
";
        } else {
            // line 32
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Default:index"));
            echo "
";
        }
        
        $__internal_e3f76308b458ec8ee241f2eccb1e5859e09b2b97e7eb0e139305db36cde26e3c->leave($__internal_e3f76308b458ec8ee241f2eccb1e5859e09b2b97e7eb0e139305db36cde26e3c_prof);

        
        $__internal_f08b80c0b622ad84f1cc0774931c097dd83447a6577e1dc7210edd4a9b0d101d->leave($__internal_f08b80c0b622ad84f1cc0774931c097dd83447a6577e1dc7210edd4a9b0d101d_prof);

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
        return array (  121 => 32,  113 => 27,  109 => 26,  103 => 22,  99 => 20,  93 => 18,  91 => 17,  88 => 16,  86 => 15,  83 => 14,  75 => 12,  69 => 9,  65 => 8,  61 => 7,  54 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
<div class=\"container\" style=\"display:inline\">
    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
        <a href=\"{{path('fos_user_profile_show')}}\"><img  width=\"50px;\"src=\"{{asset('img/avatar/'~app.user.avatar.url)}}\"></a>
        {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
        <a href=\"{{ path('fos_user_security_logout') }}\">
            {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
        </a>
    {% else %}
        <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
    {% endif %}
</div>
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
