<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_2ec45baad8a9b5b0b9843288b53f8e023e2378e47a88b5e1bd185e463192940c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_26eee38ca5c44a50a9edd871458f4eb8d366ae7ab7b16d043591cb0cf8843de8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26eee38ca5c44a50a9edd871458f4eb8d366ae7ab7b16d043591cb0cf8843de8->enter($__internal_26eee38ca5c44a50a9edd871458f4eb8d366ae7ab7b16d043591cb0cf8843de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_b06e3baa16d0b066a3290dc7045a0ddbf417a5dfeb116a3a3ed264acd3de380b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b06e3baa16d0b066a3290dc7045a0ddbf417a5dfeb116a3a3ed264acd3de380b->enter($__internal_b06e3baa16d0b066a3290dc7045a0ddbf417a5dfeb116a3a3ed264acd3de380b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_26eee38ca5c44a50a9edd871458f4eb8d366ae7ab7b16d043591cb0cf8843de8->leave($__internal_26eee38ca5c44a50a9edd871458f4eb8d366ae7ab7b16d043591cb0cf8843de8_prof);

        
        $__internal_b06e3baa16d0b066a3290dc7045a0ddbf417a5dfeb116a3a3ed264acd3de380b->leave($__internal_b06e3baa16d0b066a3290dc7045a0ddbf417a5dfeb116a3a3ed264acd3de380b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_8f002be98af71d32961cf21bb880eadb9a2f5eab0288bb8bfea6f4ec752e3074 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f002be98af71d32961cf21bb880eadb9a2f5eab0288bb8bfea6f4ec752e3074->enter($__internal_8f002be98af71d32961cf21bb880eadb9a2f5eab0288bb8bfea6f4ec752e3074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ee2fba35eb8a1e85addbb9db7d3a975ffeb63914e397e5f0fa162b48ab523692 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee2fba35eb8a1e85addbb9db7d3a975ffeb63914e397e5f0fa162b48ab523692->enter($__internal_ee2fba35eb8a1e85addbb9db7d3a975ffeb63914e397e5f0fa162b48ab523692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ee2fba35eb8a1e85addbb9db7d3a975ffeb63914e397e5f0fa162b48ab523692->leave($__internal_ee2fba35eb8a1e85addbb9db7d3a975ffeb63914e397e5f0fa162b48ab523692_prof);

        
        $__internal_8f002be98af71d32961cf21bb880eadb9a2f5eab0288bb8bfea6f4ec752e3074->leave($__internal_8f002be98af71d32961cf21bb880eadb9a2f5eab0288bb8bfea6f4ec752e3074_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
