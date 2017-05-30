<?php

/* utilisateur/editProfil.html.twig */
class __TwigTemplate_a67290df78daf9967c2a14336f53396c0341cb371b1f4ff10c02099239b82519 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "utilisateur/editProfil.html.twig", 1);
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
        $__internal_3db24b76d3efdb96233821b37fdd67044b08b2dd4d3f48894bedf5266cfcdd17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3db24b76d3efdb96233821b37fdd67044b08b2dd4d3f48894bedf5266cfcdd17->enter($__internal_3db24b76d3efdb96233821b37fdd67044b08b2dd4d3f48894bedf5266cfcdd17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/editProfil.html.twig"));

        $__internal_0685ec4a0657fe8e6f184a9530ec99fb36749bd95dc97980af3cb49fe446711c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0685ec4a0657fe8e6f184a9530ec99fb36749bd95dc97980af3cb49fe446711c->enter($__internal_0685ec4a0657fe8e6f184a9530ec99fb36749bd95dc97980af3cb49fe446711c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/editProfil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3db24b76d3efdb96233821b37fdd67044b08b2dd4d3f48894bedf5266cfcdd17->leave($__internal_3db24b76d3efdb96233821b37fdd67044b08b2dd4d3f48894bedf5266cfcdd17_prof);

        
        $__internal_0685ec4a0657fe8e6f184a9530ec99fb36749bd95dc97980af3cb49fe446711c->leave($__internal_0685ec4a0657fe8e6f184a9530ec99fb36749bd95dc97980af3cb49fe446711c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a0b59845b8457ce92b05d81cca644ef4bc82210eecb49c6cca3d4abb466726c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0b59845b8457ce92b05d81cca644ef4bc82210eecb49c6cca3d4abb466726c2->enter($__internal_a0b59845b8457ce92b05d81cca644ef4bc82210eecb49c6cca3d4abb466726c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f23fd64710ed2a227b9fdf6423abcbd99ba92c8abbc2fb9593ab3a5571441b4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f23fd64710ed2a227b9fdf6423abcbd99ba92c8abbc2fb9593ab3a5571441b4d->enter($__internal_f23fd64710ed2a227b9fdf6423abcbd99ba92c8abbc2fb9593ab3a5571441b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                          <div class=\"col-sm-6\">
                          <h4>Informations personnels</h4>
                          <hr>
                          ";
            // line 59
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'row');
            echo "
                          ";
            // line 60
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'row');
            echo "
                          ";
            // line 61
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'row');
            echo "
                          ";
            // line 62
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateNaiss", array()), 'row');
            echo "
                          ";
            // line 63
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'row');
            echo "
                          </div>


                          <div class=\"col-sm-6\">
                          <h4>Informations de connexion</h4>
                          <hr>
                          ";
            // line 70
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
            echo "
                          </div>

                          <div class=\"col-sm-12\">
                          <hr>
                                <a onclick=\"return(confirm('Attention vous êtes sur le point d'annuler votre action'));\" href=\"";
            // line 75
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\" class=\"btn btn-warning pull-left\"/> Annuler</a>
                              <input type=\"submit\" class=\"btn btn-success pull-right\"value=\"Sauvegarder\" />
                          </div>
                      ";
            // line 78
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
            echo "
                </div>

            </div>

    </div>

  </div>
  ";
        } else {
            // line 87
            echo "  ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login"));
            echo "
  ";
        }
        // line 89
        echo "  ";
        
        $__internal_f23fd64710ed2a227b9fdf6423abcbd99ba92c8abbc2fb9593ab3a5571441b4d->leave($__internal_f23fd64710ed2a227b9fdf6423abcbd99ba92c8abbc2fb9593ab3a5571441b4d_prof);

        
        $__internal_a0b59845b8457ce92b05d81cca644ef4bc82210eecb49c6cca3d4abb466726c2->leave($__internal_a0b59845b8457ce92b05d81cca644ef4bc82210eecb49c6cca3d4abb466726c2_prof);

    }

    public function getTemplateName()
    {
        return "utilisateur/editProfil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 89,  211 => 87,  199 => 78,  193 => 75,  185 => 70,  175 => 63,  171 => 62,  167 => 61,  163 => 60,  159 => 59,  151 => 54,  145 => 51,  141 => 50,  128 => 39,  119 => 36,  116 => 35,  112 => 34,  106 => 31,  102 => 30,  85 => 15,  77 => 13,  71 => 10,  67 => 9,  63 => 8,  56 => 7,  54 => 6,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
", "utilisateur/editProfil.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/views/utilisateur/editProfil.html.twig");
    }
}
