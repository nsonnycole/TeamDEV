<?php

/* :competence:editCompetence.html.twig */
class __TwigTemplate_d58b7350e30ee1f2884a2e627862fc57d99fe0438f5a06cd921eb45e0e095a6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":competence:editCompetence.html.twig", 1);
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
        $__internal_9ea2587bbef83a0259e6de90c22e294ce75f495909212e65ec068baab2dd078e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ea2587bbef83a0259e6de90c22e294ce75f495909212e65ec068baab2dd078e->enter($__internal_9ea2587bbef83a0259e6de90c22e294ce75f495909212e65ec068baab2dd078e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":competence:editCompetence.html.twig"));

        $__internal_1b543e004728b68dd8ef2a84e3c71e2d37418966ed596a9ac827825e98ebbf0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b543e004728b68dd8ef2a84e3c71e2d37418966ed596a9ac827825e98ebbf0a->enter($__internal_1b543e004728b68dd8ef2a84e3c71e2d37418966ed596a9ac827825e98ebbf0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":competence:editCompetence.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ea2587bbef83a0259e6de90c22e294ce75f495909212e65ec068baab2dd078e->leave($__internal_9ea2587bbef83a0259e6de90c22e294ce75f495909212e65ec068baab2dd078e_prof);

        
        $__internal_1b543e004728b68dd8ef2a84e3c71e2d37418966ed596a9ac827825e98ebbf0a->leave($__internal_1b543e004728b68dd8ef2a84e3c71e2d37418966ed596a9ac827825e98ebbf0a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d91e9b7c637a85ba7c77e76646922a6b55ba8332ac204a50085a44d2dc934561 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d91e9b7c637a85ba7c77e76646922a6b55ba8332ac204a50085a44d2dc934561->enter($__internal_d91e9b7c637a85ba7c77e76646922a6b55ba8332ac204a50085a44d2dc934561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a3433fefd705fca915ecc66d24d44ffcab89e8e6878e7bd542223f88c6f7f35d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3433fefd705fca915ecc66d24d44ffcab89e8e6878e7bd542223f88c6f7f35d->enter($__internal_a3433fefd705fca915ecc66d24d44ffcab89e8e6878e7bd542223f88c6f7f35d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <h2>Modification d'un projet</h2>
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
  <li class=\"breadcrumb-item\"><a href=\"";
            // line 30
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projets");
            echo "\">Projets</a></li>
  <li class=\"breadcrumb-item\"><a href=\"";
            // line 31
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mesCompetences");
            echo "\">Mes compétences</a></li>
  <li class=\"breadcrumb-item active\">Modification de ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["competences"]) ? $context["competences"] : $this->getContext($context, "competences")), "nom", array()), "html", null, true);
            echo "</li>
  <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "headers", array()), "get", array(0 => "referer"), "method"), "html", null, true);
            echo "\" class=\"btn btn-info pull-right\"><span class=\"glyphicon glyphicon-repeat\"></span> Retour</a>
</ol>
<div class=\"container\">
";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 37
                echo "
    ";
                // line 38
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "

";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "
    <div id=\"loginbox\" style=\"margin-top:50px;\" class=\"mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2\">
      ";
            // line 43
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
            echo "
      ";
            // line 44
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'row');
            echo "
        <div class=\"range\">
        ";
            // line 46
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pourcentage", array()), 'widget');
            echo "
        <output id=\"range\">";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["competences"]) ? $context["competences"] : $this->getContext($context, "competences")), "pourcentage", array()), "html", null, true);
            echo "</output>
        </div>
        <br>
      ";
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget');
            echo "
      <a onclick=\"return(confirm('Attention vous êtes sur le point d'annuler votre action'));\" href=\"";
            // line 51
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projets");
            echo "\" class=\"btn btn-warning pull-right\"/> Annuler</a>
      ";
            // line 52
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
            echo "
    </div>
</div>
";
        } else {
            // line 56
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login"));
            echo "
";
        }
        
        $__internal_a3433fefd705fca915ecc66d24d44ffcab89e8e6878e7bd542223f88c6f7f35d->leave($__internal_a3433fefd705fca915ecc66d24d44ffcab89e8e6878e7bd542223f88c6f7f35d_prof);

        
        $__internal_d91e9b7c637a85ba7c77e76646922a6b55ba8332ac204a50085a44d2dc934561->leave($__internal_d91e9b7c637a85ba7c77e76646922a6b55ba8332ac204a50085a44d2dc934561_prof);

    }

    public function getTemplateName()
    {
        return ":competence:editCompetence.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 56,  170 => 52,  166 => 51,  162 => 50,  156 => 47,  152 => 46,  147 => 44,  143 => 43,  139 => 41,  130 => 38,  127 => 37,  123 => 36,  117 => 33,  113 => 32,  109 => 31,  105 => 30,  101 => 29,  85 => 15,  77 => 13,  71 => 10,  67 => 9,  63 => 8,  56 => 7,  54 => 6,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
        <h2>Modification d'un projet</h2>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->

<!-- WELCOME SECTION -->
<ol class=\"breadcrumb\">
  <li class=\"breadcrumb-item\"><a href=\"{{path('homepage')}}\">Accueil</a></li>
  <li class=\"breadcrumb-item\"><a href=\"{{path('projets')}}\">Projets</a></li>
  <li class=\"breadcrumb-item\"><a href=\"{{ path('mesCompetences') }}\">Mes compétences</a></li>
  <li class=\"breadcrumb-item active\">Modification de {{competences.nom}}</li>
  <a href=\"{{ app.request.headers.get('referer') }}\" class=\"btn btn-info pull-right\"><span class=\"glyphicon glyphicon-repeat\"></span> Retour</a>
</ol>
<div class=\"container\">
{% for flashMessage in app.session.flashbag.get('error') %}

    {{ flashMessage }}

{% endfor %}

    <div id=\"loginbox\" style=\"margin-top:50px;\" class=\"mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2\">
      {{ form_start(form) }}
      {{ form_row(form.nom) }}
        <div class=\"range\">
        {{ form_widget(form.pourcentage) }}
        <output id=\"range\">{{competences.pourcentage}}</output>
        </div>
        <br>
      {{ form_widget(form.save) }}
      <a onclick=\"return(confirm('Attention vous êtes sur le point d'annuler votre action'));\" href=\"{{path('projets')}}\" class=\"btn btn-warning pull-right\"/> Annuler</a>
      {{ form_end(form) }}
    </div>
</div>
{% else %}
{{ render(path('fos_user_security_login')) }}
{% endif %}
{% endblock %}
", ":competence:editCompetence.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/views/competence/editCompetence.html.twig");
    }
}
