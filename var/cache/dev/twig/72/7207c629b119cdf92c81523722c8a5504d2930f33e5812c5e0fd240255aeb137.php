<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_adaaeae6b2dbffe282167c55afecb0b67bd08b46396ca024688fcd3fa0d1686a extends Twig_Template
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
        $__internal_faf991cce7dbba750eecabc7e797998aeb280f02e70722cd9ce6aaa1b7dd9abf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faf991cce7dbba750eecabc7e797998aeb280f02e70722cd9ce6aaa1b7dd9abf->enter($__internal_faf991cce7dbba750eecabc7e797998aeb280f02e70722cd9ce6aaa1b7dd9abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        $__internal_3943ffa52b87c7f0aaf85bdceb7108c99b882ad8d54d93735ce8027900ad79f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3943ffa52b87c7f0aaf85bdceb7108c99b882ad8d54d93735ce8027900ad79f6->enter($__internal_3943ffa52b87c7f0aaf85bdceb7108c99b882ad8d54d93735ce8027900ad79f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 2
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 3
            echo "<h3 align=\"center\"> Vous êtes déja inscrit </h3>
";
        } else {
            // line 5
            echo "<!-- MAIN IMAGE SECTION -->
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
            // line 26
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
            echo "
                          ";
            // line 27
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "avatar", array()), 'label');
            echo "
                          <div class=\"col-md-12 well\">

                              <span style=\"display:inline-block\">";
            // line 30
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "avatar", array()), 'widget');
            echo "</span>

                          </div>
                          ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "presentation", array()), 'row');
            echo "
                          <div class=\"col-sm-6\">
                          <h4>Informations personnels</h4>
                          <hr>
                          ";
            // line 37
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'row');
            echo "
                          ";
            // line 38
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'row');
            echo "
                          ";
            // line 39
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'row');
            echo "
                          ";
            // line 40
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateNaiss", array()), 'row');
            echo "
                          ";
            // line 41
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'row');
            echo "
                          </div>


                          <div class=\"col-sm-6\">
                          <h4>Informations de connexion</h4>
                          <hr>
                          ";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
            echo "
                          </div>

                          <div class=\"col-sm-12\">
                          <hr>
                              <input type=\"submit\" class=\"btn btn-success pull-right\"value=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
            echo "\" />
                          </div>
                      ";
            // line 55
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
            echo "
                </div>

            </div>

    </div>

  </div>
";
        }
        
        $__internal_faf991cce7dbba750eecabc7e797998aeb280f02e70722cd9ce6aaa1b7dd9abf->leave($__internal_faf991cce7dbba750eecabc7e797998aeb280f02e70722cd9ce6aaa1b7dd9abf_prof);

        
        $__internal_3943ffa52b87c7f0aaf85bdceb7108c99b882ad8d54d93735ce8027900ad79f6->leave($__internal_3943ffa52b87c7f0aaf85bdceb7108c99b882ad8d54d93735ce8027900ad79f6_prof);

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
        return array (  116 => 55,  111 => 53,  103 => 48,  93 => 41,  89 => 40,  85 => 39,  81 => 38,  77 => 37,  70 => 33,  64 => 30,  58 => 27,  54 => 26,  31 => 5,  27 => 3,  25 => 2,);
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
{% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
<h3 align=\"center\"> Vous êtes déja inscrit </h3>
{% else %}
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
                          {{ form_label(form.avatar) }}
                          <div class=\"col-md-12 well\">

                              <span style=\"display:inline-block\">{{ form_widget(form.avatar) }}</span>

                          </div>
                          {{ form_row(form.presentation) }}
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
{% endif %}
", "@FOSUser/Registration/register_content.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/FOSUserBundle/views/Registration/register_content.html.twig");
    }
}
