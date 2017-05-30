<?php

/* :competence:editCompetence.html.twig */
class __TwigTemplate_912afe991cf86310500ca5ab88387b64750e4236df2a873139f45fa0311b0e91 extends Twig_Template
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
        $__internal_2e41054ced478b73ff62eb80ccf4d5efc77aad2db51a2042dd667f5a34391db9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e41054ced478b73ff62eb80ccf4d5efc77aad2db51a2042dd667f5a34391db9->enter($__internal_2e41054ced478b73ff62eb80ccf4d5efc77aad2db51a2042dd667f5a34391db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":competence:editCompetence.html.twig"));

        $__internal_b2cee4b1828078484f825737c0a435eea2e1154079ed466fb49b4fc66775fbc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2cee4b1828078484f825737c0a435eea2e1154079ed466fb49b4fc66775fbc2->enter($__internal_b2cee4b1828078484f825737c0a435eea2e1154079ed466fb49b4fc66775fbc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":competence:editCompetence.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e41054ced478b73ff62eb80ccf4d5efc77aad2db51a2042dd667f5a34391db9->leave($__internal_2e41054ced478b73ff62eb80ccf4d5efc77aad2db51a2042dd667f5a34391db9_prof);

        
        $__internal_b2cee4b1828078484f825737c0a435eea2e1154079ed466fb49b4fc66775fbc2->leave($__internal_b2cee4b1828078484f825737c0a435eea2e1154079ed466fb49b4fc66775fbc2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f9bb04583af47e112dc5ff31e7d359aa31d91bfc229bd91e5868872961895391 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9bb04583af47e112dc5ff31e7d359aa31d91bfc229bd91e5868872961895391->enter($__internal_f9bb04583af47e112dc5ff31e7d359aa31d91bfc229bd91e5868872961895391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3760dd0ea90f996b38fb87ce9c2df6b41c0df289a13bd3977240e1518c5c1de4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3760dd0ea90f996b38fb87ce9c2df6b41c0df289a13bd3977240e1518c5c1de4->enter($__internal_3760dd0ea90f996b38fb87ce9c2df6b41c0df289a13bd3977240e1518c5c1de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
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
        <h2>Modification d'un projet</h2>
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
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mesCompetences");
            echo "\">Mes compétences</a></li>
  <li class=\"breadcrumb-item active\">Modification de ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["competences"]) ? $context["competences"] : $this->getContext($context, "competences")), "nom", array()), "html", null, true);
            echo "</li>
  <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "headers", array()), "get", array(0 => "referer"), "method"), "html", null, true);
            echo "\" class=\"btn btn-info pull-right\"><span class=\"glyphicon glyphicon-repeat\"></span> Retour</a>
</ol>
<div class=\"container\">
";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 36
                echo "
    ";
                // line 37
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "

";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "
    <div id=\"loginbox\" style=\"margin-top:50px;\" class=\"mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2\">
      ";
            // line 42
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
            echo "
      ";
            // line 43
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'row');
            echo "
        <div class=\"range\">
        ";
            // line 45
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pourcentage", array()), 'widget');
            echo "
        <output id=\"range\">";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["competences"]) ? $context["competences"] : $this->getContext($context, "competences")), "pourcentage", array()), "html", null, true);
            echo "</output>
        </div>
        <br>
      ";
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget');
            echo "
      <a onclick=\"return(confirm('Attention vous êtes sur le point d'annuler votre action'));\" href=\"";
            // line 50
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projets");
            echo "\" class=\"btn btn-warning pull-right\"/> Annuler</a>
      ";
            // line 51
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
            echo "
    </div>
</div>
";
        } else {
            // line 55
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login"));
            echo "
";
        }
        
        $__internal_3760dd0ea90f996b38fb87ce9c2df6b41c0df289a13bd3977240e1518c5c1de4->leave($__internal_3760dd0ea90f996b38fb87ce9c2df6b41c0df289a13bd3977240e1518c5c1de4_prof);

        
        $__internal_f9bb04583af47e112dc5ff31e7d359aa31d91bfc229bd91e5868872961895391->leave($__internal_f9bb04583af47e112dc5ff31e7d359aa31d91bfc229bd91e5868872961895391_prof);

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
        return array (  171 => 55,  164 => 51,  160 => 50,  156 => 49,  150 => 46,  146 => 45,  141 => 43,  137 => 42,  133 => 40,  124 => 37,  121 => 36,  117 => 35,  111 => 32,  107 => 31,  103 => 30,  99 => 29,  95 => 28,  79 => 14,  71 => 12,  65 => 9,  61 => 8,  56 => 7,  54 => 6,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
