<?php

/* administration/indexAdmin.html.twig */
class __TwigTemplate_0d429646318eed5b74280c00bf0e2f1ee960abbcff1e1f559fd71230a1d99fc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "administration/indexAdmin.html.twig", 1);
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
        $__internal_2a154bb1889743d8bcb411b2b4d40182a18ccffe27fd05838f7226f988958e06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a154bb1889743d8bcb411b2b4d40182a18ccffe27fd05838f7226f988958e06->enter($__internal_2a154bb1889743d8bcb411b2b4d40182a18ccffe27fd05838f7226f988958e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "administration/indexAdmin.html.twig"));

        $__internal_b41b7344a659157e00bd82c11bda7ab8db5cc37ae5d996e51d56e0edfb62dc60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b41b7344a659157e00bd82c11bda7ab8db5cc37ae5d996e51d56e0edfb62dc60->enter($__internal_b41b7344a659157e00bd82c11bda7ab8db5cc37ae5d996e51d56e0edfb62dc60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "administration/indexAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a154bb1889743d8bcb411b2b4d40182a18ccffe27fd05838f7226f988958e06->leave($__internal_2a154bb1889743d8bcb411b2b4d40182a18ccffe27fd05838f7226f988958e06_prof);

        
        $__internal_b41b7344a659157e00bd82c11bda7ab8db5cc37ae5d996e51d56e0edfb62dc60->leave($__internal_b41b7344a659157e00bd82c11bda7ab8db5cc37ae5d996e51d56e0edfb62dc60_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_790c2092a0b8296ad522060c990ff9ced7cc95d1b3ae617cafb8fd0f0bb6a470 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_790c2092a0b8296ad522060c990ff9ced7cc95d1b3ae617cafb8fd0f0bb6a470->enter($__internal_790c2092a0b8296ad522060c990ff9ced7cc95d1b3ae617cafb8fd0f0bb6a470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_70665c1284de3b70f5dcd77cf00486e785476ebaae0413c4774f7552cf9f79f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70665c1284de3b70f5dcd77cf00486e785476ebaae0413c4774f7552cf9f79f9->enter($__internal_70665c1284de3b70f5dcd77cf00486e785476ebaae0413c4774f7552cf9f79f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<!-- MAIN IMAGE SECTION -->
<div id=\"portwrap\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 col-lg-offset-2\">
        <h2>Administration</h2>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->

<!-- WELCOME SECTION -->
<!-- MAC IMAGE -->
<div class=\"container\">

</div>
";
        
        $__internal_70665c1284de3b70f5dcd77cf00486e785476ebaae0413c4774f7552cf9f79f9->leave($__internal_70665c1284de3b70f5dcd77cf00486e785476ebaae0413c4774f7552cf9f79f9_prof);

        
        $__internal_790c2092a0b8296ad522060c990ff9ced7cc95d1b3ae617cafb8fd0f0bb6a470->leave($__internal_790c2092a0b8296ad522060c990ff9ced7cc95d1b3ae617cafb8fd0f0bb6a470_prof);

    }

    public function getTemplateName()
    {
        return "administration/indexAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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
<!-- MAIN IMAGE SECTION -->
<div id=\"portwrap\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 col-lg-offset-2\">
        <h2>Administration</h2>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->

<!-- WELCOME SECTION -->
<!-- MAC IMAGE -->
<div class=\"container\">

</div>
{% endblock %}
", "administration/indexAdmin.html.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/app/Resources/views/administration/indexAdmin.html.twig");
    }
}
