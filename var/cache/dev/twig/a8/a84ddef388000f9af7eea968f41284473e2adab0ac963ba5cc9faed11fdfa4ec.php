<?php

/* utilisateur/mesReseaux.html.twig */
class __TwigTemplate_32bc76d10d37da5fa049115ffd2d1c5f4e4eb4a65150111051d4f80893284a4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "utilisateur/mesReseaux.html.twig", 1);
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
        $__internal_c2cd38c681a46f3c24d007af8e3fd6b888d205d833c15adcc271968d2209df24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2cd38c681a46f3c24d007af8e3fd6b888d205d833c15adcc271968d2209df24->enter($__internal_c2cd38c681a46f3c24d007af8e3fd6b888d205d833c15adcc271968d2209df24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/mesReseaux.html.twig"));

        $__internal_e45b27ee9dbe366b90f69f8bb2e509a8447e1b7bd580cf23508eaf988df8dcb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e45b27ee9dbe366b90f69f8bb2e509a8447e1b7bd580cf23508eaf988df8dcb1->enter($__internal_e45b27ee9dbe366b90f69f8bb2e509a8447e1b7bd580cf23508eaf988df8dcb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/mesReseaux.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2cd38c681a46f3c24d007af8e3fd6b888d205d833c15adcc271968d2209df24->leave($__internal_c2cd38c681a46f3c24d007af8e3fd6b888d205d833c15adcc271968d2209df24_prof);

        
        $__internal_e45b27ee9dbe366b90f69f8bb2e509a8447e1b7bd580cf23508eaf988df8dcb1->leave($__internal_e45b27ee9dbe366b90f69f8bb2e509a8447e1b7bd580cf23508eaf988df8dcb1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d44e1ec80e16580974c89c4cc04ce3996e864ee9cd2ad9b2bc7ec86a458d265d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d44e1ec80e16580974c89c4cc04ce3996e864ee9cd2ad9b2bc7ec86a458d265d->enter($__internal_d44e1ec80e16580974c89c4cc04ce3996e864ee9cd2ad9b2bc7ec86a458d265d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ceb86a52a08d8c057e0705777102e74c9f4df5669ce8aef4700001522614df5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceb86a52a08d8c057e0705777102e74c9f4df5669ce8aef4700001522614df5b->enter($__internal_ceb86a52a08d8c057e0705777102e74c9f4df5669ce8aef4700001522614df5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <h2>Mes réseaux </h2>
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
  <li class=\"breadcrumb-item active\">Mes réseaux</li>
  <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "headers", array()), "get", array(0 => "referer"), "method"), "html", null, true);
            echo "\" class=\"btn btn-info pull-right\"><span class=\"glyphicon glyphicon-repeat\"></span> Retour</a>

</ol>

<div class=\"container\">
<div class=\"row col-sm-10 col-sm-offset-1\">
<h3>Listes de mes réseaux <a class=\"pull-right btn btn-primary\" href=\"";
            // line 37
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newReseaux");
            echo "\"><span class=\"glyphicon glyphicon-plus\"></span> Nouveau</a></h3>

<hr>

<table class=\"table\" id=\"myTable\">
  <thead>
    <td>Nom</td>
    <td>URL </td>
    <td>Action </td>
  </thead>
  <tbody>
";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reseaux"]) ? $context["reseaux"] : $this->getContext($context, "reseaux")));
            foreach ($context['_seq'] as $context["_key"] => $context["reseau"]) {
                // line 49
                echo "  <tr>
    <td>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reseau"], "idTypeReseau", array()), "nom", array()), "html", null, true);
                echo "</td>
    <td><a href=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["reseau"], "url", array()), "html", null, true);
                echo "\">Lien</a></td>
   <td>
      <a href=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editReseaux", array("id" => $this->getAttribute($context["reseau"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-warning\"><span class=\"glyphicon glyphicon-pencil\"></span></a>
    </td>
  </tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reseau'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "</tbody>
</table>

</div><!-- row -->
</div>
";
        } else {
            // line 63
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login"));
            echo "
";
        }
        
        $__internal_ceb86a52a08d8c057e0705777102e74c9f4df5669ce8aef4700001522614df5b->leave($__internal_ceb86a52a08d8c057e0705777102e74c9f4df5669ce8aef4700001522614df5b_prof);

        
        $__internal_d44e1ec80e16580974c89c4cc04ce3996e864ee9cd2ad9b2bc7ec86a458d265d->leave($__internal_d44e1ec80e16580974c89c4cc04ce3996e864ee9cd2ad9b2bc7ec86a458d265d_prof);

    }

    public function getTemplateName()
    {
        return "utilisateur/mesReseaux.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 63,  158 => 57,  148 => 53,  143 => 51,  139 => 50,  136 => 49,  132 => 48,  118 => 37,  109 => 31,  104 => 29,  100 => 28,  85 => 15,  77 => 13,  71 => 10,  67 => 9,  63 => 8,  56 => 7,  54 => 6,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
        <h2>Mes réseaux </h2>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->
<br>
<ol class=\"breadcrumb\">
  <li class=\"breadcrumb-item\"><a href=\"{{path('homepage')}}\">Accueil</a></li>
  <li class=\"breadcrumb-item\"><a href=\"{{path('fos_user_profile_show')}}\">Mon profil</a></li>
  <li class=\"breadcrumb-item active\">Mes réseaux</li>
  <a href=\"{{ app.request.headers.get('referer') }}\" class=\"btn btn-info pull-right\"><span class=\"glyphicon glyphicon-repeat\"></span> Retour</a>

</ol>

<div class=\"container\">
<div class=\"row col-sm-10 col-sm-offset-1\">
<h3>Listes de mes réseaux <a class=\"pull-right btn btn-primary\" href=\"{{ path('newReseaux') }}\"><span class=\"glyphicon glyphicon-plus\"></span> Nouveau</a></h3>

<hr>

<table class=\"table\" id=\"myTable\">
  <thead>
    <td>Nom</td>
    <td>URL </td>
    <td>Action </td>
  </thead>
  <tbody>
{% for reseau in reseaux %}
  <tr>
    <td>{{reseau.idTypeReseau.nom}}</td>
    <td><a href=\"{{reseau.url}}\">Lien</a></td>
   <td>
      <a href=\"{{ path('editReseaux', {'id': reseau.id}) }}\" class=\"btn btn-warning\"><span class=\"glyphicon glyphicon-pencil\"></span></a>
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
", "utilisateur/mesReseaux.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/views/utilisateur/mesReseaux.html.twig");
    }
}
