<?php

/* messages/newMessage.html.twig */
class __TwigTemplate_461cfe3c33b9819c8814209b07d9b01846851243acf6f81047299411ee6f5974 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "messages/newMessage.html.twig", 1);
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
        $__internal_7c76e81a8983594f5b6ae5c4efbbc16efb38c503ab5e2aea47546678ae2842de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c76e81a8983594f5b6ae5c4efbbc16efb38c503ab5e2aea47546678ae2842de->enter($__internal_7c76e81a8983594f5b6ae5c4efbbc16efb38c503ab5e2aea47546678ae2842de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "messages/newMessage.html.twig"));

        $__internal_1c5245624122c4c0f12222e9145fd706c0a8384ad178bd7954cf970a19638fe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c5245624122c4c0f12222e9145fd706c0a8384ad178bd7954cf970a19638fe1->enter($__internal_1c5245624122c4c0f12222e9145fd706c0a8384ad178bd7954cf970a19638fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "messages/newMessage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c76e81a8983594f5b6ae5c4efbbc16efb38c503ab5e2aea47546678ae2842de->leave($__internal_7c76e81a8983594f5b6ae5c4efbbc16efb38c503ab5e2aea47546678ae2842de_prof);

        
        $__internal_1c5245624122c4c0f12222e9145fd706c0a8384ad178bd7954cf970a19638fe1->leave($__internal_1c5245624122c4c0f12222e9145fd706c0a8384ad178bd7954cf970a19638fe1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_978534b18b30a02e8319fb52b373986a7b40b2cac26e616b46756a493bfda94e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_978534b18b30a02e8319fb52b373986a7b40b2cac26e616b46756a493bfda94e->enter($__internal_978534b18b30a02e8319fb52b373986a7b40b2cac26e616b46756a493bfda94e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_94459368ce70ddca8fec380971b841bba7f79cad4d7b78dd92e1e22c92a0e1ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94459368ce70ddca8fec380971b841bba7f79cad4d7b78dd92e1e22c92a0e1ee->enter($__internal_94459368ce70ddca8fec380971b841bba7f79cad4d7b78dd92e1e22c92a0e1ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 5
            echo "<div class=\"container\" style=\"display:inline\">
    ";
            // line 6
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 7
                echo "        <a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
                echo "\"><img  width=\"50px;\"src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("img/avatar/" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "avatar", array()), "url", array()))), "html", null, true);
                echo "\"></a>
        ";
                // line 8
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
                echo " |
        <a href=\"";
                // line 9
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
                echo "\">
            ";
                // line 10
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
                echo "
        </a>
    ";
            } else {
                // line 13
                echo "        <a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
                echo "</a>
    ";
            }
            // line 15
            echo "</div>
<!-- MAIN IMAGE SECTION -->
<div id=\"portwrap\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 col-lg-offset-2\">
        <h2>Nouveau message</h2>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->

<!-- WELCOME SECTION -->
<ol class=\"breadcrumb\">
  <li class=\"breadcrumb-item\"><a href=\"";
            // line 29
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\">Accueil</a></li>
  <li class=\"breadcrumb-item active\">Nouveau message</li>
  <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "headers", array()), "get", array(0 => "referer"), "method"), "html", null, true);
            echo "\" class=\"btn btn-info pull-right\"><span class=\"glyphicon glyphicon-repeat\"></span> Retour</a>
</ol>
";
            // line 33
            if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()) == $this->getAttribute((isset($context["destinataire"]) ? $context["destinataire"] : $this->getContext($context, "destinataire")), "username", array())))) {
                // line 34
                echo "<h3 align=\"center\">Attention! Vous ne pouvez pas vous envoyez un message  <br><br>
  <a class=\"btn btn-primary\"href=\"";
                // line 35
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
                echo "\">Accueil</a></h3>
";
            } else {
                // line 37
                echo "<div class=\"container\">
    <div id=\"loginbox\" style=\"margin-top:50px;\" class=\"mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2\">
      <p><b>Message pour ";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["destinataire"]) ? $context["destinataire"] : $this->getContext($context, "destinataire")), "username", array()), "html", null, true);
                echo "</b></p>
      ";
                // line 40
                echo                 $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
                echo "
      ";
                // line 41
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'row');
                echo "
      ";
                // line 42
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget');
                echo "
      <a onclick=\"return(confirm('Attention vous êtes sur le point d'annuler votre action'));\" href=\"";
                // line 43
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projets");
                echo "\" class=\"btn btn-warning pull-right\"/> Annuler</a>
      ";
                // line 44
                echo                 $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
                echo "
    </div>
</div>
";
            }
        } else {
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login"));
            echo "
";
        }
        
        $__internal_94459368ce70ddca8fec380971b841bba7f79cad4d7b78dd92e1e22c92a0e1ee->leave($__internal_94459368ce70ddca8fec380971b841bba7f79cad4d7b78dd92e1e22c92a0e1ee_prof);

        
        $__internal_978534b18b30a02e8319fb52b373986a7b40b2cac26e616b46756a493bfda94e->leave($__internal_978534b18b30a02e8319fb52b373986a7b40b2cac26e616b46756a493bfda94e_prof);

    }

    public function getTemplateName()
    {
        return "messages/newMessage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 49,  145 => 44,  141 => 43,  137 => 42,  133 => 41,  129 => 40,  125 => 39,  121 => 37,  116 => 35,  113 => 34,  111 => 33,  106 => 31,  101 => 29,  85 => 15,  77 => 13,  71 => 10,  67 => 9,  63 => 8,  56 => 7,  54 => 6,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
{% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
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
<!-- MAIN IMAGE SECTION -->
<div id=\"portwrap\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 col-lg-offset-2\">
        <h2>Nouveau message</h2>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->

<!-- WELCOME SECTION -->
<ol class=\"breadcrumb\">
  <li class=\"breadcrumb-item\"><a href=\"{{path('homepage')}}\">Accueil</a></li>
  <li class=\"breadcrumb-item active\">Nouveau message</li>
  <a href=\"{{ app.request.headers.get('referer') }}\" class=\"btn btn-info pull-right\"><span class=\"glyphicon glyphicon-repeat\"></span> Retour</a>
</ol>
{% if app.user and app.user.username == destinataire.username %}
<h3 align=\"center\">Attention! Vous ne pouvez pas vous envoyez un message  <br><br>
  <a class=\"btn btn-primary\"href=\"{{path('homepage')}}\">Accueil</a></h3>
{% else %}
<div class=\"container\">
    <div id=\"loginbox\" style=\"margin-top:50px;\" class=\"mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2\">
      <p><b>Message pour {{ destinataire.username}}</b></p>
      {{ form_start(form) }}
      {{ form_row(form) }}
      {{ form_widget(form.save) }}
      <a onclick=\"return(confirm('Attention vous êtes sur le point d'annuler votre action'));\" href=\"{{path('projets')}}\" class=\"btn btn-warning pull-right\"/> Annuler</a>
      {{ form_end(form) }}
    </div>
</div>
{% endif %}
{% else %}
{{ render(path('fos_user_security_login')) }}
{% endif %}
{% endblock %}
", "messages/newMessage.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/views/messages/newMessage.html.twig");
    }
}
