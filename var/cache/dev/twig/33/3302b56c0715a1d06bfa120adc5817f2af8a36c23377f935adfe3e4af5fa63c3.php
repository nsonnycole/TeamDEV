<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_cfc8b37434bdf42d915cea81722885837d46c6f260f513b510f5477509a6434b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_4ff48e4a8f5c3da90ffc8dbe49d9e0ed3109f7008552d759757ae64a6caf3c7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ff48e4a8f5c3da90ffc8dbe49d9e0ed3109f7008552d759757ae64a6caf3c7b->enter($__internal_4ff48e4a8f5c3da90ffc8dbe49d9e0ed3109f7008552d759757ae64a6caf3c7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_a96ee70b0533f35dabec9edfef0988759afdb1c7a589d5497139bf4d06bb73ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a96ee70b0533f35dabec9edfef0988759afdb1c7a589d5497139bf4d06bb73ff->enter($__internal_a96ee70b0533f35dabec9edfef0988759afdb1c7a589d5497139bf4d06bb73ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ff48e4a8f5c3da90ffc8dbe49d9e0ed3109f7008552d759757ae64a6caf3c7b->leave($__internal_4ff48e4a8f5c3da90ffc8dbe49d9e0ed3109f7008552d759757ae64a6caf3c7b_prof);

        
        $__internal_a96ee70b0533f35dabec9edfef0988759afdb1c7a589d5497139bf4d06bb73ff->leave($__internal_a96ee70b0533f35dabec9edfef0988759afdb1c7a589d5497139bf4d06bb73ff_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_074b45011244311c8320a2d0d92cb2a74dc8bb8260e826fe2fd287ad0f031f70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_074b45011244311c8320a2d0d92cb2a74dc8bb8260e826fe2fd287ad0f031f70->enter($__internal_074b45011244311c8320a2d0d92cb2a74dc8bb8260e826fe2fd287ad0f031f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bf2d2d7a412ee89f217895177247aeedeab7501574dd5d371d1a9defbd46df18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf2d2d7a412ee89f217895177247aeedeab7501574dd5d371d1a9defbd46df18->enter($__internal_bf2d2d7a412ee89f217895177247aeedeab7501574dd5d371d1a9defbd46df18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_bf2d2d7a412ee89f217895177247aeedeab7501574dd5d371d1a9defbd46df18->leave($__internal_bf2d2d7a412ee89f217895177247aeedeab7501574dd5d371d1a9defbd46df18_prof);

        
        $__internal_074b45011244311c8320a2d0d92cb2a74dc8bb8260e826fe2fd287ad0f031f70->leave($__internal_074b45011244311c8320a2d0d92cb2a74dc8bb8260e826fe2fd287ad0f031f70_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
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
", "FOSUserBundle:Registration:confirmed.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}
