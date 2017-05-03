<?php

/* @FOSUser/Profile/edit_content.html.twig */
class __TwigTemplate_513eeab8148a3eeba1fcf74f00001a787fcdf3008e417c73addf89f7617628cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_418f31a768e076429a6a6f8f7710eadf2d0f26359e9c474fa27f398fad783466 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_418f31a768e076429a6a6f8f7710eadf2d0f26359e9c474fa27f398fad783466->enter($__internal_418f31a768e076429a6a6f8f7710eadf2d0f26359e9c474fa27f398fad783466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit_content.html.twig"));

        $__internal_984ba30f34a86c2da292bd0067979f3c033204aa53681dc8281f775557fafbd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_984ba30f34a86c2da292bd0067979f3c033204aa53681dc8281f775557fafbd5->enter($__internal_984ba30f34a86c2da292bd0067979f3c033204aa53681dc8281f775557fafbd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit_content.html.twig"));

        // line 2
        echo "<!-- MAIN IMAGE SECTION -->
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
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Accueil</a></li>
  <li class=\"breadcrumb-item\"><a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
        echo "\">Mon profil</a></li>
  <li class=\"breadcrumb-item active\">Modification du profil</li>
</ol>
<div class=\"container\">
      <div id=\"loginbox\" style=\"margin-top:50px;\" class=\"mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2\">
          <div class=\"panel panel-info\" >
                  <div style=\"padding-top:30px\" class=\"panel-body\" >

                      <div style=\"display:none\" id=\"login-alert\" class=\"alert alert-danger col-sm-12\"></div>

                      ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
                          ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                          <div>
                              <input type=\"submit\" class=\"btn btn-success pull-right\"value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                          </div>
                      ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>

            </div>

    </div>

  </div>
";
        
        $__internal_418f31a768e076429a6a6f8f7710eadf2d0f26359e9c474fa27f398fad783466->leave($__internal_418f31a768e076429a6a6f8f7710eadf2d0f26359e9c474fa27f398fad783466_prof);

        
        $__internal_984ba30f34a86c2da292bd0067979f3c033204aa53681dc8281f775557fafbd5->leave($__internal_984ba30f34a86c2da292bd0067979f3c033204aa53681dc8281f775557fafbd5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 31,  66 => 29,  61 => 27,  57 => 26,  44 => 16,  40 => 15,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
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
<div class=\"container\">
      <div id=\"loginbox\" style=\"margin-top:50px;\" class=\"mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2\">
          <div class=\"panel panel-info\" >
                  <div style=\"padding-top:30px\" class=\"panel-body\" >

                      <div style=\"display:none\" id=\"login-alert\" class=\"alert alert-danger col-sm-12\"></div>

                      {{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}
                          {{ form_widget(form) }}
                          <div>
                              <input type=\"submit\" class=\"btn btn-success pull-right\"value=\"{{ 'profile.edit.submit'|trans }}\" />
                          </div>
                      {{ form_end(form) }}
                </div>

            </div>

    </div>

  </div>
", "@FOSUser/Profile/edit_content.html.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/app/Resources/FOSUserBundle/views/Profile/edit_content.html.twig");
    }
}
