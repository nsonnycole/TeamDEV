<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_e82d8111fcffa0f2a493180c9468117866840c16c3ad0b42eda18f9dbe2dc53f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_be50f5ae35ed91d79ef21bafa2a5f9d23a8c53f1a5f66d4fe274ae36e7a85e60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be50f5ae35ed91d79ef21bafa2a5f9d23a8c53f1a5f66d4fe274ae36e7a85e60->enter($__internal_be50f5ae35ed91d79ef21bafa2a5f9d23a8c53f1a5f66d4fe274ae36e7a85e60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_39e3e8e135025848ceac66fe6ee1e65a4609bfb284ea2539d1849a94c7e2db5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39e3e8e135025848ceac66fe6ee1e65a4609bfb284ea2539d1849a94c7e2db5a->enter($__internal_39e3e8e135025848ceac66fe6ee1e65a4609bfb284ea2539d1849a94c7e2db5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be50f5ae35ed91d79ef21bafa2a5f9d23a8c53f1a5f66d4fe274ae36e7a85e60->leave($__internal_be50f5ae35ed91d79ef21bafa2a5f9d23a8c53f1a5f66d4fe274ae36e7a85e60_prof);

        
        $__internal_39e3e8e135025848ceac66fe6ee1e65a4609bfb284ea2539d1849a94c7e2db5a->leave($__internal_39e3e8e135025848ceac66fe6ee1e65a4609bfb284ea2539d1849a94c7e2db5a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2ac52940018ba4c948894bf452af35b93c8d8de02494b27c42ec4bee8a1912fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ac52940018ba4c948894bf452af35b93c8d8de02494b27c42ec4bee8a1912fa->enter($__internal_2ac52940018ba4c948894bf452af35b93c8d8de02494b27c42ec4bee8a1912fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6ad94c3e00e594e74b869765a8dc8a0af607d3603e468c4b8a62eeb6169a792f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ad94c3e00e594e74b869765a8dc8a0af607d3603e468c4b8a62eeb6169a792f->enter($__internal_6ad94c3e00e594e74b869765a8dc8a0af607d3603e468c4b8a62eeb6169a792f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_6ad94c3e00e594e74b869765a8dc8a0af607d3603e468c4b8a62eeb6169a792f->leave($__internal_6ad94c3e00e594e74b869765a8dc8a0af607d3603e468c4b8a62eeb6169a792f_prof);

        
        $__internal_2ac52940018ba4c948894bf452af35b93c8d8de02494b27c42ec4bee8a1912fa->leave($__internal_2ac52940018ba4c948894bf452af35b93c8d8de02494b27c42ec4bee8a1912fa_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/FOSUserBundle/views/Group/new.html.twig");
    }
}
