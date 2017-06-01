<?php

/* :utilisateur:editProfil.html.twig */
class __TwigTemplate_9db3c38d65714eeb49d49ce1d6be2301488d1b06e0c3f4f499db1af7fe8e0af0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":utilisateur:editProfil.html.twig", 1);
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
        $__internal_e752451b69c5f27cf2a2a7e936b22db026bdf9109a46feca92c76cdb5c6eb479 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e752451b69c5f27cf2a2a7e936b22db026bdf9109a46feca92c76cdb5c6eb479->enter($__internal_e752451b69c5f27cf2a2a7e936b22db026bdf9109a46feca92c76cdb5c6eb479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":utilisateur:editProfil.html.twig"));

        $__internal_b5e1215299e31b37a57ebb1550e79bc48446fe6f61a4efbaad266f9c9b81133d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5e1215299e31b37a57ebb1550e79bc48446fe6f61a4efbaad266f9c9b81133d->enter($__internal_b5e1215299e31b37a57ebb1550e79bc48446fe6f61a4efbaad266f9c9b81133d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":utilisateur:editProfil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e752451b69c5f27cf2a2a7e936b22db026bdf9109a46feca92c76cdb5c6eb479->leave($__internal_e752451b69c5f27cf2a2a7e936b22db026bdf9109a46feca92c76cdb5c6eb479_prof);

        
        $__internal_b5e1215299e31b37a57ebb1550e79bc48446fe6f61a4efbaad266f9c9b81133d->leave($__internal_b5e1215299e31b37a57ebb1550e79bc48446fe6f61a4efbaad266f9c9b81133d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_53fcb95c85149af4507c7a0da2e302435966cb7546a5de044d3e9de8490a1179 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53fcb95c85149af4507c7a0da2e302435966cb7546a5de044d3e9de8490a1179->enter($__internal_53fcb95c85149af4507c7a0da2e302435966cb7546a5de044d3e9de8490a1179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9290d8436da73b21d2a864437a628dcce93680cf04f51b3efe875ee8fe5cf6cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9290d8436da73b21d2a864437a628dcce93680cf04f51b3efe875ee8fe5cf6cf->enter($__internal_9290d8436da73b21d2a864437a628dcce93680cf04f51b3efe875ee8fe5cf6cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <h2>Modification du profil</h2>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->

<!-- WELCOME SECTION -->
<ol class=\"breadcrumb\">
  <li class=\"breadcrumb-item\"><a href=\"";
            // line 30
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\">Accueil</a></li>
  <li class=\"breadcrumb-item\"><a href=\"";
            // line 31
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\">Mon profil</a></li>
  <li class=\"breadcrumb-item active\">Modification du profil</li>
</ol>
";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 35
                echo "
    ";
                // line 36
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "

";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "
<!-- WELCOME SECTION -->
<div class=\"container\">
      <div id=\"loginbox\" style=\"margin-top:50px;\" class=\"mainbox col-md-10 col-md-offset-1 col-sm-8 col-sm-offset-2\">
          <div class=\"panel panel-info\" >


                  <div style=\"padding-top:30px\" class=\"panel-body\" >

                      <div style=\"display:none\" id=\"login-alert\" class=\"alert alert-danger col-sm-12\"></div>

                      ";
            // line 50
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
            echo "
                          ";
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "avatar", array()), 'label');
            echo "
                          <div class=\"col-md-12 well\">

                              <span style=\"display:inline-block\">";
            // line 54
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "avatar", array()), 'widget');
            echo "</span>

                          </div>
                          ";
            // line 57
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "presentation", array()), 'row');
            echo "
                          <div class=\"col-sm-6\">
                          <h4>Informations personnels</h4>
                          <hr>
                          ";
            // line 61
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'row');
            echo "
                          ";
            // line 62
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'row');
            echo "
                          ";
            // line 63
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'row');
            echo "
                          ";
            // line 64
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateNaiss", array()), 'row');
            echo "
                          ";
            // line 65
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'row');
            echo "
                          </div>


                          <div class=\"col-sm-6\">
                          <h4>Informations de connexion</h4>
                          <hr>
                          ";
            // line 72
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
            echo "
                          </div>

                          <div class=\"col-sm-12\">
                          <hr>
                                <a onclick=\"return(confirm('Attention vous êtes sur le point d'annuler votre action'));\" href=\"";
            // line 77
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\" class=\"btn btn-warning pull-left\"/> Annuler</a>
                              <input type=\"submit\" class=\"btn btn-success pull-right\"value=\"Sauvegarder\" />
                          </div>
                      ";
            // line 80
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
            echo "
                </div>

            </div>

    </div>

  </div>
  ";
        } else {
            // line 89
            echo "  ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login"));
            echo "
  ";
        }
        // line 91
        echo "  ";
        
        $__internal_9290d8436da73b21d2a864437a628dcce93680cf04f51b3efe875ee8fe5cf6cf->leave($__internal_9290d8436da73b21d2a864437a628dcce93680cf04f51b3efe875ee8fe5cf6cf_prof);

        
        $__internal_53fcb95c85149af4507c7a0da2e302435966cb7546a5de044d3e9de8490a1179->leave($__internal_53fcb95c85149af4507c7a0da2e302435966cb7546a5de044d3e9de8490a1179_prof);

    }

    public function getTemplateName()
    {
        return ":utilisateur:editProfil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 91,  216 => 89,  204 => 80,  198 => 77,  190 => 72,  180 => 65,  176 => 64,  172 => 63,  168 => 62,  164 => 61,  157 => 57,  151 => 54,  145 => 51,  141 => 50,  128 => 39,  119 => 36,  116 => 35,  112 => 34,  106 => 31,  102 => 30,  85 => 15,  77 => 13,  71 => 10,  67 => 9,  63 => 8,  56 => 7,  54 => 6,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
        <h2>Modification du profil</h2>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->

<!-- WELCOME SECTION -->
<ol class=\"breadcrumb\">
  <li class=\"breadcrumb-item\"><a href=\"{{path('homepage')}}\">Accueil</a></li>
  <li class=\"breadcrumb-item\"><a href=\"{{path('fos_user_profile_show')}}\">Mon profil</a></li>
  <li class=\"breadcrumb-item active\">Modification du profil</li>
</ol>
{% for flashMessage in app.session.flashbag.get('error') %}

    {{ flashMessage }}

{% endfor %}

<!-- WELCOME SECTION -->
<div class=\"container\">
      <div id=\"loginbox\" style=\"margin-top:50px;\" class=\"mainbox col-md-10 col-md-offset-1 col-sm-8 col-sm-offset-2\">
          <div class=\"panel panel-info\" >


                  <div style=\"padding-top:30px\" class=\"panel-body\" >

                      <div style=\"display:none\" id=\"login-alert\" class=\"alert alert-danger col-sm-12\"></div>

                      {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
                          {{ form_label(form.avatar) }}
                          <div class=\"col-md-12 well\">

                              <span style=\"display:inline-block\">{{ form_widget(form.avatar) }}</span>

                          </div>
                          {{ form_row(form.presentation) }}
                          <div class=\"col-sm-6\">
                          <h4>Informations personnels</h4>
                          <hr>
                          {{ form_row(form.nom) }}
                          {{ form_row(form.prenom) }}
                          {{ form_row(form.adresse) }}
                          {{ form_row(form.dateNaiss) }}
                          {{ form_row(form.adresse) }}
                          </div>


                          <div class=\"col-sm-6\">
                          <h4>Informations de connexion</h4>
                          <hr>
                          {{ form_widget(form) }}
                          </div>

                          <div class=\"col-sm-12\">
                          <hr>
                                <a onclick=\"return(confirm('Attention vous êtes sur le point d'annuler votre action'));\" href=\"{{path('fos_user_profile_show')}}\" class=\"btn btn-warning pull-left\"/> Annuler</a>
                              <input type=\"submit\" class=\"btn btn-success pull-right\"value=\"Sauvegarder\" />
                          </div>
                      {{ form_end(form) }}
                </div>

            </div>

    </div>

  </div>
  {% else %}
  {{ render(path('fos_user_security_login')) }}
  {% endif %}
  {% endblock %}
", ":utilisateur:editProfil.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/views/utilisateur/editProfil.html.twig");
    }
}
