<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_af3f6b198313551f2fd68b3a2c6abd8fdc9cb86d43745a28ea1120d74080e06e extends Twig_Template
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
        $__internal_85aaf46f8983359cb6695966fcc144f379d27ba3e7685fb7515cdfdfd8c34f54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85aaf46f8983359cb6695966fcc144f379d27ba3e7685fb7515cdfdfd8c34f54->enter($__internal_85aaf46f8983359cb6695966fcc144f379d27ba3e7685fb7515cdfdfd8c34f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_500d975ad6c6bbe54615bd5c80c0400caea6039fcf3da43f9432f248ff11cc5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_500d975ad6c6bbe54615bd5c80c0400caea6039fcf3da43f9432f248ff11cc5e->enter($__internal_500d975ad6c6bbe54615bd5c80c0400caea6039fcf3da43f9432f248ff11cc5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85aaf46f8983359cb6695966fcc144f379d27ba3e7685fb7515cdfdfd8c34f54->leave($__internal_85aaf46f8983359cb6695966fcc144f379d27ba3e7685fb7515cdfdfd8c34f54_prof);

        
        $__internal_500d975ad6c6bbe54615bd5c80c0400caea6039fcf3da43f9432f248ff11cc5e->leave($__internal_500d975ad6c6bbe54615bd5c80c0400caea6039fcf3da43f9432f248ff11cc5e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5fead4ba365b1dbb2c723f8b1c45ec6ae13473e5a7c14c49902d4b25bcddcbcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fead4ba365b1dbb2c723f8b1c45ec6ae13473e5a7c14c49902d4b25bcddcbcd->enter($__internal_5fead4ba365b1dbb2c723f8b1c45ec6ae13473e5a7c14c49902d4b25bcddcbcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_052e65aece953ae134511d32d19f8bd25a89a0757ad9924869310096627e6ab1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_052e65aece953ae134511d32d19f8bd25a89a0757ad9924869310096627e6ab1->enter($__internal_052e65aece953ae134511d32d19f8bd25a89a0757ad9924869310096627e6ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_052e65aece953ae134511d32d19f8bd25a89a0757ad9924869310096627e6ab1->leave($__internal_052e65aece953ae134511d32d19f8bd25a89a0757ad9924869310096627e6ab1_prof);

        
        $__internal_5fead4ba365b1dbb2c723f8b1c45ec6ae13473e5a7c14c49902d4b25bcddcbcd->leave($__internal_5fead4ba365b1dbb2c723f8b1c45ec6ae13473e5a7c14c49902d4b25bcddcbcd_prof);

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
