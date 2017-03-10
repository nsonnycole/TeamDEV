<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5f9234c056ab01a0a72b269cd7486163c8e3c79a4365a47d687f3143f641bc21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4f2248c2728687ee91e247490cc526a46aadbf3e374f0962e99a387ae5db50b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f2248c2728687ee91e247490cc526a46aadbf3e374f0962e99a387ae5db50b5->enter($__internal_4f2248c2728687ee91e247490cc526a46aadbf3e374f0962e99a387ae5db50b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b52b11f04ff6ebd7fe00ba0ed3f1d8c3558b817278cf3c11965a601c53e782f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b52b11f04ff6ebd7fe00ba0ed3f1d8c3558b817278cf3c11965a601c53e782f9->enter($__internal_b52b11f04ff6ebd7fe00ba0ed3f1d8c3558b817278cf3c11965a601c53e782f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f2248c2728687ee91e247490cc526a46aadbf3e374f0962e99a387ae5db50b5->leave($__internal_4f2248c2728687ee91e247490cc526a46aadbf3e374f0962e99a387ae5db50b5_prof);

        
        $__internal_b52b11f04ff6ebd7fe00ba0ed3f1d8c3558b817278cf3c11965a601c53e782f9->leave($__internal_b52b11f04ff6ebd7fe00ba0ed3f1d8c3558b817278cf3c11965a601c53e782f9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3dcfc7b3b053c1332e397cda6b91ef23a1c0ba5509d5bfc9f90b8da6a2a7995e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dcfc7b3b053c1332e397cda6b91ef23a1c0ba5509d5bfc9f90b8da6a2a7995e->enter($__internal_3dcfc7b3b053c1332e397cda6b91ef23a1c0ba5509d5bfc9f90b8da6a2a7995e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_850a6fd6268cc63f5010d840bfea1988b814b2dbc1631309946e7fc70c5a3053 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_850a6fd6268cc63f5010d840bfea1988b814b2dbc1631309946e7fc70c5a3053->enter($__internal_850a6fd6268cc63f5010d840bfea1988b814b2dbc1631309946e7fc70c5a3053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_850a6fd6268cc63f5010d840bfea1988b814b2dbc1631309946e7fc70c5a3053->leave($__internal_850a6fd6268cc63f5010d840bfea1988b814b2dbc1631309946e7fc70c5a3053_prof);

        
        $__internal_3dcfc7b3b053c1332e397cda6b91ef23a1c0ba5509d5bfc9f90b8da6a2a7995e->leave($__internal_3dcfc7b3b053c1332e397cda6b91ef23a1c0ba5509d5bfc9f90b8da6a2a7995e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8e44206026275f9fd5ca86a2a62d6c385746f9924d32fcf71363738547a839cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e44206026275f9fd5ca86a2a62d6c385746f9924d32fcf71363738547a839cc->enter($__internal_8e44206026275f9fd5ca86a2a62d6c385746f9924d32fcf71363738547a839cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_77e83a29041d79b7cd9f51489e60c26db4d402b41f9ff51547c86e014c37c0e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77e83a29041d79b7cd9f51489e60c26db4d402b41f9ff51547c86e014c37c0e6->enter($__internal_77e83a29041d79b7cd9f51489e60c26db4d402b41f9ff51547c86e014c37c0e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_77e83a29041d79b7cd9f51489e60c26db4d402b41f9ff51547c86e014c37c0e6->leave($__internal_77e83a29041d79b7cd9f51489e60c26db4d402b41f9ff51547c86e014c37c0e6_prof);

        
        $__internal_8e44206026275f9fd5ca86a2a62d6c385746f9924d32fcf71363738547a839cc->leave($__internal_8e44206026275f9fd5ca86a2a62d6c385746f9924d32fcf71363738547a839cc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8658a166cf8ede50da2084fa6fcda3f069c56cb63f9ee47a55c89de2616b36cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8658a166cf8ede50da2084fa6fcda3f069c56cb63f9ee47a55c89de2616b36cd->enter($__internal_8658a166cf8ede50da2084fa6fcda3f069c56cb63f9ee47a55c89de2616b36cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_da9db9c8599aedd8d61b88694f5b7fde39fef428660385e76ce7d58a2c9452ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da9db9c8599aedd8d61b88694f5b7fde39fef428660385e76ce7d58a2c9452ea->enter($__internal_da9db9c8599aedd8d61b88694f5b7fde39fef428660385e76ce7d58a2c9452ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_da9db9c8599aedd8d61b88694f5b7fde39fef428660385e76ce7d58a2c9452ea->leave($__internal_da9db9c8599aedd8d61b88694f5b7fde39fef428660385e76ce7d58a2c9452ea_prof);

        
        $__internal_8658a166cf8ede50da2084fa6fcda3f069c56cb63f9ee47a55c89de2616b36cd->leave($__internal_8658a166cf8ede50da2084fa6fcda3f069c56cb63f9ee47a55c89de2616b36cd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
