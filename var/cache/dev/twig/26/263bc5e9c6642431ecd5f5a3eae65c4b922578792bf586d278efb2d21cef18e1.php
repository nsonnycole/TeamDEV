<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_3426591c39ef1a3eb1648b07be1c44322ee58d8ead5cffcc457135ffa0738c2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_d06c7d3c6055a669ffd71fddd2726d3a3d7398205b2b3547ec1d93ede7d86ddf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d06c7d3c6055a669ffd71fddd2726d3a3d7398205b2b3547ec1d93ede7d86ddf->enter($__internal_d06c7d3c6055a669ffd71fddd2726d3a3d7398205b2b3547ec1d93ede7d86ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_20882002af868d267f9209138a0059abe5789728d8656837618f9aec6ce82e3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20882002af868d267f9209138a0059abe5789728d8656837618f9aec6ce82e3e->enter($__internal_20882002af868d267f9209138a0059abe5789728d8656837618f9aec6ce82e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d06c7d3c6055a669ffd71fddd2726d3a3d7398205b2b3547ec1d93ede7d86ddf->leave($__internal_d06c7d3c6055a669ffd71fddd2726d3a3d7398205b2b3547ec1d93ede7d86ddf_prof);

        
        $__internal_20882002af868d267f9209138a0059abe5789728d8656837618f9aec6ce82e3e->leave($__internal_20882002af868d267f9209138a0059abe5789728d8656837618f9aec6ce82e3e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9ec5492fad71f797b5ecb50a231fd6f6f670172d91579b3207131cf5b6d88230 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ec5492fad71f797b5ecb50a231fd6f6f670172d91579b3207131cf5b6d88230->enter($__internal_9ec5492fad71f797b5ecb50a231fd6f6f670172d91579b3207131cf5b6d88230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_91317e9b5e7f566cfaa79d582ec1430924b703d8c0c264fafbcaf24bd143f7e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91317e9b5e7f566cfaa79d582ec1430924b703d8c0c264fafbcaf24bd143f7e8->enter($__internal_91317e9b5e7f566cfaa79d582ec1430924b703d8c0c264fafbcaf24bd143f7e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_91317e9b5e7f566cfaa79d582ec1430924b703d8c0c264fafbcaf24bd143f7e8->leave($__internal_91317e9b5e7f566cfaa79d582ec1430924b703d8c0c264fafbcaf24bd143f7e8_prof);

        
        $__internal_9ec5492fad71f797b5ecb50a231fd6f6f670172d91579b3207131cf5b6d88230->leave($__internal_9ec5492fad71f797b5ecb50a231fd6f6f670172d91579b3207131cf5b6d88230_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
