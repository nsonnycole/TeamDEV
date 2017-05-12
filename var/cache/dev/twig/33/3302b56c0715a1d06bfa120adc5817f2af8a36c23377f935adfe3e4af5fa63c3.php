<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_cfc8b37434bdf42d915cea81722885837d46c6f260f513b510f5477509a6434b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e22e22879efb04ac33b07f68f7531e8482b2bd86bfa5569d67ec08978b99edb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e22e22879efb04ac33b07f68f7531e8482b2bd86bfa5569d67ec08978b99edb7->enter($__internal_e22e22879efb04ac33b07f68f7531e8482b2bd86bfa5569d67ec08978b99edb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_651adc6802fee25bfb5a1d4882b356e764eb5fd0ea1e384821f1860f6beb118d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_651adc6802fee25bfb5a1d4882b356e764eb5fd0ea1e384821f1860f6beb118d->enter($__internal_651adc6802fee25bfb5a1d4882b356e764eb5fd0ea1e384821f1860f6beb118d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e22e22879efb04ac33b07f68f7531e8482b2bd86bfa5569d67ec08978b99edb7->leave($__internal_e22e22879efb04ac33b07f68f7531e8482b2bd86bfa5569d67ec08978b99edb7_prof);

        
        $__internal_651adc6802fee25bfb5a1d4882b356e764eb5fd0ea1e384821f1860f6beb118d->leave($__internal_651adc6802fee25bfb5a1d4882b356e764eb5fd0ea1e384821f1860f6beb118d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7190936ef1d9645c8550c247b105d9537d3d8790c9772e84adf1e0ef0bce404f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7190936ef1d9645c8550c247b105d9537d3d8790c9772e84adf1e0ef0bce404f->enter($__internal_7190936ef1d9645c8550c247b105d9537d3d8790c9772e84adf1e0ef0bce404f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_422e4e53cb2f37345a39023fe830b75724bded7bbff50e6e9938d4673cc81ec8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_422e4e53cb2f37345a39023fe830b75724bded7bbff50e6e9938d4673cc81ec8->enter($__internal_422e4e53cb2f37345a39023fe830b75724bded7bbff50e6e9938d4673cc81ec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<!-- MAIN IMAGE SECTION -->
<div id=\"portwrap\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 col-lg-offset-2\" style=\"color:white\">
        <h2>Inscription réussi!</h2>
        <p>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
        ";
        // line 13
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 14
            echo "        <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
        ";
        }
        // line 16
        echo "      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->
<div class=\"container\">
<br>
  <a id=\"btn-fblogin\" href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"btn btn-primary col-sm-offset-6\">Accueil</a>
  ";
        // line 24
        echo "</div>
";
        
        $__internal_422e4e53cb2f37345a39023fe830b75724bded7bbff50e6e9938d4673cc81ec8->leave($__internal_422e4e53cb2f37345a39023fe830b75724bded7bbff50e6e9938d4673cc81ec8_prof);

        
        $__internal_7190936ef1d9645c8550c247b105d9537d3d8790c9772e84adf1e0ef0bce404f->leave($__internal_7190936ef1d9645c8550c247b105d9537d3d8790c9772e84adf1e0ef0bce404f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 24,  79 => 22,  71 => 16,  63 => 14,  61 => 13,  57 => 12,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<!-- MAIN IMAGE SECTION -->
<div id=\"portwrap\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 col-lg-offset-2\" style=\"color:white\">
        <h2>Inscription réussi!</h2>
        <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
        {% if targetUrl %}
        <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
        {% endif %}
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->
<div class=\"container\">
<br>
  <a id=\"btn-fblogin\" href=\"{{path('homepage')}}\" class=\"btn btn-primary col-sm-offset-6\">Accueil</a>
  {#<img style=\"width:600px\"src=\"{{asset(\"img/happy.jpeg\")}}\">#}
</div>
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}
