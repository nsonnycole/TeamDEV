<?php

/* utilisateur/communaute.html.twig */
class __TwigTemplate_1ff0bc1ba0d7d3bbed3a0fb343260c8901de885417a677b5fbc01d3d03c0f9b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "utilisateur/communaute.html.twig", 2);
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
        $__internal_d7352a7816f32a79f1c1460241bc0e99742d722f16aae70999222d33d4750274 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7352a7816f32a79f1c1460241bc0e99742d722f16aae70999222d33d4750274->enter($__internal_d7352a7816f32a79f1c1460241bc0e99742d722f16aae70999222d33d4750274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/communaute.html.twig"));

        $__internal_4d8bfe230e7d1b1b84ae827af675784235043cc68423b7463a256498d05e0d25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d8bfe230e7d1b1b84ae827af675784235043cc68423b7463a256498d05e0d25->enter($__internal_4d8bfe230e7d1b1b84ae827af675784235043cc68423b7463a256498d05e0d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/communaute.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7352a7816f32a79f1c1460241bc0e99742d722f16aae70999222d33d4750274->leave($__internal_d7352a7816f32a79f1c1460241bc0e99742d722f16aae70999222d33d4750274_prof);

        
        $__internal_4d8bfe230e7d1b1b84ae827af675784235043cc68423b7463a256498d05e0d25->leave($__internal_4d8bfe230e7d1b1b84ae827af675784235043cc68423b7463a256498d05e0d25_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_b48fad9f20a22cd377698fb3b4a25b8227b8babd1e2c3dffa790e9d788410343 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b48fad9f20a22cd377698fb3b4a25b8227b8babd1e2c3dffa790e9d788410343->enter($__internal_b48fad9f20a22cd377698fb3b4a25b8227b8babd1e2c3dffa790e9d788410343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cb409a4b4f0383931aea2da67545f768671367c120516f8a61ef342be3175522 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb409a4b4f0383931aea2da67545f768671367c120516f8a61ef342be3175522->enter($__internal_cb409a4b4f0383931aea2da67545f768671367c120516f8a61ef342be3175522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 6
            echo "<div class=\"container\" style=\"display:inline\">
  ";
            // line 7
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 8
                echo "  <a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
                echo "\"><img  width=\"50px;\"src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("img/avatar/" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "avatar", array()), "url", array()))), "html", null, true);
                echo "\"></a>
  ";
                // line 9
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
                echo " |
  <a href=\"";
                // line 10
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
                echo "\">
    ";
                // line 11
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
                echo "
  </a>
  ";
            } else {
                // line 14
                echo "  <a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
                echo "</a>
  ";
            }
            // line 16
            echo "</div>
<!-- MAIN IMAGE SECTION -->
<div id=\"portwrap\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 col-lg-offset-2\">
        <h2>Communauté TeamDEV </h2>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->
<br>
<ol class=\"breadcrumb\">
  <li class=\"breadcrumb-item\"><a href=\"";
            // line 29
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\">Accueil</a></li>
  <li class=\"breadcrumb-item active\">Communauté TeamDEV</li>
  <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "headers", array()), "get", array(0 => "referer"), "method"), "html", null, true);
            echo "\" class=\"btn btn-info pull-right\"><span class=\"glyphicon glyphicon-repeat\"></span> Retour</a>

  <section id=\"service\">
    <div class=\"container\">
      <div class=\"row row-1\">

        <!--    row 3============-->
        <div class=\"row row-3\">
          ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["membres"]) ? $context["membres"] : $this->getContext($context, "membres")));
            foreach ($context['_seq'] as $context["_key"] => $context["membre"]) {
                // line 40
                echo "          <div class=\"col-md-4 ser-col-4\">
            <div class=\"ser-col ser-7\">
              <div class=\"icon-col\">
              <a href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profilDe", array("username" => $this->getAttribute($context["membre"], "username", array()))), "html", null, true);
                echo "\"><img class=\"media-object\" data-src=\"holder.js/64x64\" alt=\"64x64\" style=\"width: 70px; height: 70px;\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("img/avatar/" . $this->getAttribute($this->getAttribute($context["membre"], "avatar", array()), "url", array()))), "html", null, true);
                echo "\"></a>
              </div>
                <h2><a href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profilDe", array("username" => $this->getAttribute($context["membre"], "username", array()))), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "username", array()), "html", null, true);
                echo "</a> </h2>
                <p>";
                // line 46
                echo twig_escape_filter($this->env, twig_slice($this->env, strip_tags($this->getAttribute($context["membre"], "presentation", array())), 0, 100), "html", null, true);
                echo " [...]  </p>
                <a class=\"btn btn-primary\"  id=\"newMessage\" href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newMessage", array("IdDestinataire" => $this->getAttribute($context["membre"], "id", array()))), "html", null, true);
                echo "\"  data-toggle=\"modal\"><span class=\"glyphicon glyphicon-envelope\"></span> Envoyez un message</a>
              </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['membre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "          </div>
        </div>
      </div>
    </section>
    ";
        } else {
            // line 56
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login"));
            echo "
    ";
        }
        // line 58
        echo "    ";
        
        $__internal_cb409a4b4f0383931aea2da67545f768671367c120516f8a61ef342be3175522->leave($__internal_cb409a4b4f0383931aea2da67545f768671367c120516f8a61ef342be3175522_prof);

        
        $__internal_b48fad9f20a22cd377698fb3b4a25b8227b8babd1e2c3dffa790e9d788410343->leave($__internal_b48fad9f20a22cd377698fb3b4a25b8227b8babd1e2c3dffa790e9d788410343_prof);

    }

    public function getTemplateName()
    {
        return "utilisateur/communaute.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 58,  159 => 56,  152 => 51,  142 => 47,  138 => 46,  132 => 45,  125 => 43,  120 => 40,  116 => 39,  105 => 31,  100 => 29,  85 => 16,  77 => 14,  71 => 11,  67 => 10,  63 => 9,  56 => 8,  54 => 7,  51 => 6,  49 => 5,  40 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'base.html.twig' %}

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
        <h2>Communauté TeamDEV </h2>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->
<br>
<ol class=\"breadcrumb\">
  <li class=\"breadcrumb-item\"><a href=\"{{path('homepage')}}\">Accueil</a></li>
  <li class=\"breadcrumb-item active\">Communauté TeamDEV</li>
  <a href=\"{{ app.request.headers.get('referer') }}\" class=\"btn btn-info pull-right\"><span class=\"glyphicon glyphicon-repeat\"></span> Retour</a>

  <section id=\"service\">
    <div class=\"container\">
      <div class=\"row row-1\">

        <!--    row 3============-->
        <div class=\"row row-3\">
          {% for membre in membres %}
          <div class=\"col-md-4 ser-col-4\">
            <div class=\"ser-col ser-7\">
              <div class=\"icon-col\">
              <a href=\"{{ path('profilDe', {'username': membre.username}) }}\"><img class=\"media-object\" data-src=\"holder.js/64x64\" alt=\"64x64\" style=\"width: 70px; height: 70px;\" src=\"{{asset('img/avatar/'~membre.avatar.url)}}\"></a>
              </div>
                <h2><a href=\"{{ path('profilDe', {'username': membre.username}) }}\"> {{ membre.username }}</a> </h2>
                <p>{{ membre.presentation| striptags | slice(0, 100) }} [...]  </p>
                <a class=\"btn btn-primary\"  id=\"newMessage\" href=\"{{ path('newMessage', {'IdDestinataire': membre.id}) }}\"  data-toggle=\"modal\"><span class=\"glyphicon glyphicon-envelope\"></span> Envoyez un message</a>
              </div>
            </div>
            {% endfor %}
          </div>
        </div>
      </div>
    </section>
    {% else %}
    {{ render(path('fos_user_security_login')) }}
    {% endif %}
    {% endblock%}
", "utilisateur/communaute.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/views/utilisateur/communaute.html.twig");
    }
}
