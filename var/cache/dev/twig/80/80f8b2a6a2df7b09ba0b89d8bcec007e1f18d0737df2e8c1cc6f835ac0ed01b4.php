<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_26816c01ca78efad6bbaa73bef488ee38080f1f66c4c94340b1e737e763af70e extends Twig_Template
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
        $__internal_8d9f2f97afd4305f4c557b3392b065019410f48403f19c3c46507b74b2234ea2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d9f2f97afd4305f4c557b3392b065019410f48403f19c3c46507b74b2234ea2->enter($__internal_8d9f2f97afd4305f4c557b3392b065019410f48403f19c3c46507b74b2234ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        $__internal_2f5784a804b67cdcf1cf0c641f52c82f84776207671d6d084071c164e91624a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f5784a804b67cdcf1cf0c641f52c82f84776207671d6d084071c164e91624a1->enter($__internal_2f5784a804b67cdcf1cf0c641f52c82f84776207671d6d084071c164e91624a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 2
        echo "
<!-- MAIN IMAGE SECTION -->
<div id=\"portwrap\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 col-lg-offset-2\">
        <h2>Inscription</h2>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->

<!-- WELCOME SECTION -->
<div class=\"container\">
      <div id=\"loginbox\" style=\"margin-top:50px;\" class=\"mainbox col-md-10 col-md-offset-1 col-sm-8 col-sm-offset-2\">
          <div class=\"panel panel-info\" >


                  <div style=\"padding-top:30px\" class=\"panel-body\" >

                      <div style=\"display:none\" id=\"login-alert\" class=\"alert alert-danger col-sm-12\"></div>

                      ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "

                          <div class=\"col-sm-6\">
                          <h4>Informations personnels</h4>
                          <hr>
                          ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'row');
        echo "
                          ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'row');
        echo "
                          ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'row');
        echo "
                          ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateNaiss", array()), 'row');
        echo "
                          ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'row');
        echo "
                          </div>
                          <div class=\"col-sm-6\">
                          <h4>Informations de connexion</h4>
                          <hr>
                          ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                          </div>

                          <div class=\"col-sm-12\">
                          <hr>
                              <input type=\"submit\" class=\"btn btn-success pull-right\"value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                          </div>
                      ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>

            </div>

    </div>

  </div>
";
        
        $__internal_8d9f2f97afd4305f4c557b3392b065019410f48403f19c3c46507b74b2234ea2->leave($__internal_8d9f2f97afd4305f4c557b3392b065019410f48403f19c3c46507b74b2234ea2_prof);

        
        $__internal_2f5784a804b67cdcf1cf0c641f52c82f84776207671d6d084071c164e91624a1->leave($__internal_2f5784a804b67cdcf1cf0c641f52c82f84776207671d6d084071c164e91624a1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 45,  89 => 43,  81 => 38,  73 => 33,  69 => 32,  65 => 31,  61 => 30,  57 => 29,  49 => 24,  25 => 2,);
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
        <h2>Inscription</h2>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->

<!-- WELCOME SECTION -->
<div class=\"container\">
      <div id=\"loginbox\" style=\"margin-top:50px;\" class=\"mainbox col-md-10 col-md-offset-1 col-sm-8 col-sm-offset-2\">
          <div class=\"panel panel-info\" >


                  <div style=\"padding-top:30px\" class=\"panel-body\" >

                      <div style=\"display:none\" id=\"login-alert\" class=\"alert alert-danger col-sm-12\"></div>

                      {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}

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
                              <input type=\"submit\" class=\"btn btn-success pull-right\"value=\"{{ 'registration.submit'|trans }}\" />
                          </div>
                      {{ form_end(form) }}
                </div>

            </div>

    </div>

  </div>
", "@FOSUser/Registration/register_content.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/FOSUserBundle/views/Registration/register_content.html.twig");
    }
}
