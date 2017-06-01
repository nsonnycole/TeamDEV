<?php

/* utilisateur/mesMessages.html.twig */
class __TwigTemplate_e19bdee5f5a8de9eaed9f90c2a520aa2517e5569adfb9e07cd25c56afc65ad8e extends Twig_Template
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
        $__internal_3fef2a261106241bb95deb9bd00749a4b1888c963b3a4ff760dd4067b571a6ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fef2a261106241bb95deb9bd00749a4b1888c963b3a4ff760dd4067b571a6ef->enter($__internal_3fef2a261106241bb95deb9bd00749a4b1888c963b3a4ff760dd4067b571a6ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/mesMessages.html.twig"));

        $__internal_742d824c78fa495e7f2aad97e1a28718622e46bbc5a5fadafbf4fdbff99b7f22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_742d824c78fa495e7f2aad97e1a28718622e46bbc5a5fadafbf4fdbff99b7f22->enter($__internal_742d824c78fa495e7f2aad97e1a28718622e46bbc5a5fadafbf4fdbff99b7f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/mesMessages.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fef2a261106241bb95deb9bd00749a4b1888c963b3a4ff760dd4067b571a6ef->leave($__internal_3fef2a261106241bb95deb9bd00749a4b1888c963b3a4ff760dd4067b571a6ef_prof);

        
        $__internal_742d824c78fa495e7f2aad97e1a28718622e46bbc5a5fadafbf4fdbff99b7f22->leave($__internal_742d824c78fa495e7f2aad97e1a28718622e46bbc5a5fadafbf4fdbff99b7f22_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4315cbc952365b754a7e4e1267f63033ea6a32cc8a8955f1b28a1b129c8eddc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4315cbc952365b754a7e4e1267f63033ea6a32cc8a8955f1b28a1b129c8eddc8->enter($__internal_4315cbc952365b754a7e4e1267f63033ea6a32cc8a8955f1b28a1b129c8eddc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3f77870cc29d81b5a2a9f04c530bdccfbbf4e98bf7a19bddad429f4e0c2b58c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f77870cc29d81b5a2a9f04c530bdccfbbf4e98bf7a19bddad429f4e0c2b58c8->enter($__internal_3f77870cc29d81b5a2a9f04c530bdccfbbf4e98bf7a19bddad429f4e0c2b58c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

";
            // line 38
            if (((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")) == null)) {
                // line 39
                echo "<h3>Vous n'avez pas de messages.</h3>
";
            } else {
                // line 41
                echo "<h3>Listes de mes messages</h3>
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
                // line 52
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 53
                    echo "  <tr>
    <td><a href=\"";
                    // line 54
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showMessage", array("id" => $this->getAttribute($context["message"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "objet", array()), "html", null, true);
                    echo "</a></td>
    <td width=\"30%\">";
                    // line 55
                    echo twig_escape_filter($this->env, twig_slice($this->env, strip_tags($this->getAttribute($context["message"], "message", array())), 0, 40), "html", null, true);
                    echo " [...] </td>
    <td>";
                    // line 56
                    echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "statut", array()), "html", null, true);
                    echo "</td>
    <td><a href=\"";
                    // line 57
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profilDe", array("username" => $this->getAttribute($this->getAttribute($context["message"], "expediteur", array()), "username", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["message"], "expediteur", array()), "username", array()), "html", null, true);
                    echo "</a></td>
    <td>
      <a href=\"";
                    // line 59
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showMessage", array("id" => $this->getAttribute($context["message"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-success\"><span class=\"glyphicon glyphicon-arrow-left\"></span></a>
      <a href=\"";
                    // line 60
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deleteMessage", array("id" => $this->getAttribute($context["message"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-remove\"></span></a>
    </td>
  </tr>
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 64
                echo "</tbody>
</table>
";
            }
            // line 67
            echo "</div><!-- row -->
</div>
";
        } else {
            // line 70
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login"));
            echo "
";
        }
        
        $__internal_3f77870cc29d81b5a2a9f04c530bdccfbbf4e98bf7a19bddad429f4e0c2b58c8->leave($__internal_3f77870cc29d81b5a2a9f04c530bdccfbbf4e98bf7a19bddad429f4e0c2b58c8_prof);

        
        $__internal_4315cbc952365b754a7e4e1267f63033ea6a32cc8a8955f1b28a1b129c8eddc8->leave($__internal_4315cbc952365b754a7e4e1267f63033ea6a32cc8a8955f1b28a1b129c8eddc8_prof);

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
        return array (  190 => 70,  185 => 67,  180 => 64,  170 => 60,  166 => 59,  159 => 57,  155 => 56,  151 => 55,  145 => 54,  142 => 53,  138 => 52,  125 => 41,  121 => 39,  119 => 38,  109 => 31,  104 => 29,  100 => 28,  85 => 15,  77 => 13,  71 => 10,  67 => 9,  63 => 8,  56 => 7,  54 => 6,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% if messages == null %}
<h3>Vous n'avez pas de messages.</h3>
{% else %}
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
{% endif %}
</div><!-- row -->
</div>
{% else %}
{{ render(path('fos_user_security_login')) }}
{% endif %}
{% endblock %}
", "utilisateur/mesMessages.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/views/utilisateur/mesMessages.html.twig");
    }
}
