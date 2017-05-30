<?php

/* utilisateur/mesMessages.html.twig */
class __TwigTemplate_5f212df95e0b40d318250663ae10200bdf86ffb11f48da7e897fc29a9cdf8408 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "utilisateur/mesMessages.html.twig", 1);
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
        $__internal_14c664f18abc52795cde774353f66c8aa946e07c16b987acc7766d0302b0f1a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14c664f18abc52795cde774353f66c8aa946e07c16b987acc7766d0302b0f1a4->enter($__internal_14c664f18abc52795cde774353f66c8aa946e07c16b987acc7766d0302b0f1a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/mesMessages.html.twig"));

        $__internal_fe210a04e4dbefae6860634488436c750aa2b34c3d118329197179ce704b0f75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe210a04e4dbefae6860634488436c750aa2b34c3d118329197179ce704b0f75->enter($__internal_fe210a04e4dbefae6860634488436c750aa2b34c3d118329197179ce704b0f75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/mesMessages.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14c664f18abc52795cde774353f66c8aa946e07c16b987acc7766d0302b0f1a4->leave($__internal_14c664f18abc52795cde774353f66c8aa946e07c16b987acc7766d0302b0f1a4_prof);

        
        $__internal_fe210a04e4dbefae6860634488436c750aa2b34c3d118329197179ce704b0f75->leave($__internal_fe210a04e4dbefae6860634488436c750aa2b34c3d118329197179ce704b0f75_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_eeccc5d7de168cb4afb16f03ed382e18bf30171f43858cc06f1662ed59e2a708 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eeccc5d7de168cb4afb16f03ed382e18bf30171f43858cc06f1662ed59e2a708->enter($__internal_eeccc5d7de168cb4afb16f03ed382e18bf30171f43858cc06f1662ed59e2a708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e3d961a0d711b7f99739199527d3bf3b1be768c493a47fe05b7ebfff45372d07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3d961a0d711b7f99739199527d3bf3b1be768c493a47fe05b7ebfff45372d07->enter($__internal_e3d961a0d711b7f99739199527d3bf3b1be768c493a47fe05b7ebfff45372d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <h2>Mes messages </h2>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->
<br>
<ol class=\"breadcrumb\">
  <li class=\"breadcrumb-item\"><a href=\"";
            // line 28
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\">Accueil</a></li>
  <li class=\"breadcrumb-item\"><a href=\"";
            // line 29
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\">Mon profil</a></li>
  <li class=\"breadcrumb-item active\">Mes messages</li>
  <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "headers", array()), "get", array(0 => "referer"), "method"), "html", null, true);
            echo "\" class=\"btn btn-info pull-right\"><span class=\"glyphicon glyphicon-repeat\"></span> Retour</a>

</ol>

<div class=\"container\">
<div class=\"row col-sm-10 col-sm-offset-1\">
<h3>Listes de mes messages</h3>
<hr>
<table class=\"table\" id=\"myTable\">
  <thead>
    <td>Objet</td>
    <td>Message </td>
    <td> Statut</td>
    <td> Expéditeur</td>
    <td>Action</td>
  </thead>
  <tbody>
";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 49
                echo "  <tr>
    <td><a href=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showMessage", array("id" => $this->getAttribute($context["message"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "objet", array()), "html", null, true);
                echo "</a></td>
    <td width=\"30%\">";
                // line 51
                echo twig_escape_filter($this->env, twig_slice($this->env, strip_tags($this->getAttribute($context["message"], "message", array())), 0, 40), "html", null, true);
                echo " [...] </td>
    <td>";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "statut", array()), "html", null, true);
                echo "</td>
    <td><a href=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profilDe", array("username" => $this->getAttribute($this->getAttribute($context["message"], "expediteur", array()), "username", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["message"], "expediteur", array()), "username", array()), "html", null, true);
                echo "</a></td>
    <td>
      <a href=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showMessage", array("id" => $this->getAttribute($context["message"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-success\"><span class=\"glyphicon glyphicon-arrow-left\"></span></a>
      <a href=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deleteMessage", array("id" => $this->getAttribute($context["message"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-remove\"></span></a>
    </td>
  </tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "</tbody>
</table>

</div><!-- row -->
</div>
";
        } else {
            // line 66
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login"));
            echo "
";
        }
        
        $__internal_e3d961a0d711b7f99739199527d3bf3b1be768c493a47fe05b7ebfff45372d07->leave($__internal_e3d961a0d711b7f99739199527d3bf3b1be768c493a47fe05b7ebfff45372d07_prof);

        
        $__internal_eeccc5d7de168cb4afb16f03ed382e18bf30171f43858cc06f1662ed59e2a708->leave($__internal_eeccc5d7de168cb4afb16f03ed382e18bf30171f43858cc06f1662ed59e2a708_prof);

    }

    public function getTemplateName()
    {
        return "utilisateur/mesMessages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 66,  171 => 60,  161 => 56,  157 => 55,  150 => 53,  146 => 52,  142 => 51,  136 => 50,  133 => 49,  129 => 48,  109 => 31,  104 => 29,  100 => 28,  85 => 15,  77 => 13,  71 => 10,  67 => 9,  63 => 8,  56 => 7,  54 => 6,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
        <h2>Mes messages </h2>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->
<br>
<ol class=\"breadcrumb\">
  <li class=\"breadcrumb-item\"><a href=\"{{path('homepage')}}\">Accueil</a></li>
  <li class=\"breadcrumb-item\"><a href=\"{{path('fos_user_profile_show')}}\">Mon profil</a></li>
  <li class=\"breadcrumb-item active\">Mes messages</li>
  <a href=\"{{ app.request.headers.get('referer') }}\" class=\"btn btn-info pull-right\"><span class=\"glyphicon glyphicon-repeat\"></span> Retour</a>

</ol>

<div class=\"container\">
<div class=\"row col-sm-10 col-sm-offset-1\">
<h3>Listes de mes messages</h3>
<hr>
<table class=\"table\" id=\"myTable\">
  <thead>
    <td>Objet</td>
    <td>Message </td>
    <td> Statut</td>
    <td> Expéditeur</td>
    <td>Action</td>
  </thead>
  <tbody>
{% for message in messages %}
  <tr>
    <td><a href=\"{{ path('showMessage', {'id': message.id}) }}\">{{message.objet}}</a></td>
    <td width=\"30%\">{{message.message | striptags | slice(0, 40) }} [...] </td>
    <td>{{message.statut }}</td>
    <td><a href=\"{{ path('profilDe', {'username': message.expediteur.username}) }}\">{{ message.expediteur.username }}</a></td>
    <td>
      <a href=\"{{ path('showMessage', {'id': message.id}) }}\" class=\"btn btn-success\"><span class=\"glyphicon glyphicon-arrow-left\"></span></a>
      <a href=\"{{ path('deleteMessage', {'id': message.id}) }}\" class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-remove\"></span></a>
    </td>
  </tr>
{% endfor %}
</tbody>
</table>

</div><!-- row -->
</div>
{% else %}
{{ render(path('fos_user_security_login')) }}
{% endif %}
{% endblock %}
", "utilisateur/mesMessages.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/views/utilisateur/mesMessages.html.twig");
    }
}
