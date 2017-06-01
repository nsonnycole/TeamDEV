<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_8559dd874f868a0481fc62130daea590021dc837db0d99251b2d6ef18c3fb970 extends Twig_Template
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
        $__internal_a499eb3d0b46a1f5bb98679e732a06a207ebc6888b894f061efdf3dfd572c544 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a499eb3d0b46a1f5bb98679e732a06a207ebc6888b894f061efdf3dfd572c544->enter($__internal_a499eb3d0b46a1f5bb98679e732a06a207ebc6888b894f061efdf3dfd572c544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        $__internal_1792ba680ee9eb5d171227b7929441f3311a96555f09de027263e94c4493d38e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1792ba680ee9eb5d171227b7929441f3311a96555f09de027263e94c4493d38e->enter($__internal_1792ba680ee9eb5d171227b7929441f3311a96555f09de027263e94c4493d38e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

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
";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 20
            echo "
    ";
            // line 21
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
<div class=\"container\">
      <div id=\"loginbox\" style=\"margin-top:50px;\" class=\"mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2\">
          <div class=\"panel panel-info\" >
                  <div style=\"padding-top:30px\" class=\"panel-body\" >

                      <div style=\"display:none\" id=\"login-alert\" class=\"alert alert-danger col-sm-12\"></div>

                      ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
                          ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                          <div>
                              <input type=\"submit\" class=\"btn btn-success pull-right\"value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                          </div>
                      ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>

            </div>

    </div>

  </div>
";
        
        $__internal_a499eb3d0b46a1f5bb98679e732a06a207ebc6888b894f061efdf3dfd572c544->leave($__internal_a499eb3d0b46a1f5bb98679e732a06a207ebc6888b894f061efdf3dfd572c544_prof);

        
        $__internal_1792ba680ee9eb5d171227b7929441f3311a96555f09de027263e94c4493d38e->leave($__internal_1792ba680ee9eb5d171227b7929441f3311a96555f09de027263e94c4493d38e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 37,  85 => 35,  80 => 33,  76 => 32,  66 => 24,  57 => 21,  54 => 20,  50 => 19,  44 => 16,  40 => 15,  25 => 2,);
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
{% for flashMessage in app.session.flashbag.get('error') %}

    {{ flashMessage }}

{% endfor %}

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
", "FOSUserBundle:Profile:edit_content.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/FOSUserBundle/views/Profile/edit_content.html.twig");
    }
}
