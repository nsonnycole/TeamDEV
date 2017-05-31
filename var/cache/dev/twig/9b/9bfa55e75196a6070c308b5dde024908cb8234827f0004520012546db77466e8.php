<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_30d1ec95a895fa2711d861a7481eebeaf65578e2b0e2a14975915bc7e8bea7b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c6bda8eb11aef0953a10e087dd3b630612d5bee5a5a9c2319a8ad5d68a455157 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6bda8eb11aef0953a10e087dd3b630612d5bee5a5a9c2319a8ad5d68a455157->enter($__internal_c6bda8eb11aef0953a10e087dd3b630612d5bee5a5a9c2319a8ad5d68a455157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_3136128655cedb33438e91e1b70329a4867d9f13b8d392689c7ea2cb555d225d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3136128655cedb33438e91e1b70329a4867d9f13b8d392689c7ea2cb555d225d->enter($__internal_3136128655cedb33438e91e1b70329a4867d9f13b8d392689c7ea2cb555d225d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6bda8eb11aef0953a10e087dd3b630612d5bee5a5a9c2319a8ad5d68a455157->leave($__internal_c6bda8eb11aef0953a10e087dd3b630612d5bee5a5a9c2319a8ad5d68a455157_prof);

        
        $__internal_3136128655cedb33438e91e1b70329a4867d9f13b8d392689c7ea2cb555d225d->leave($__internal_3136128655cedb33438e91e1b70329a4867d9f13b8d392689c7ea2cb555d225d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_75eb02a87a200df533f2118606fa0dd66ae0bf46b0bb2ce31cabf9dd33f71f0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75eb02a87a200df533f2118606fa0dd66ae0bf46b0bb2ce31cabf9dd33f71f0d->enter($__internal_75eb02a87a200df533f2118606fa0dd66ae0bf46b0bb2ce31cabf9dd33f71f0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_70ef9893fee98942b9ee42d7e5ef4f3ccfba75f77ecfcb48637f5661e838aabf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70ef9893fee98942b9ee42d7e5ef4f3ccfba75f77ecfcb48637f5661e838aabf->enter($__internal_70ef9893fee98942b9ee42d7e5ef4f3ccfba75f77ecfcb48637f5661e838aabf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_70ef9893fee98942b9ee42d7e5ef4f3ccfba75f77ecfcb48637f5661e838aabf->leave($__internal_70ef9893fee98942b9ee42d7e5ef4f3ccfba75f77ecfcb48637f5661e838aabf_prof);

        
        $__internal_75eb02a87a200df533f2118606fa0dd66ae0bf46b0bb2ce31cabf9dd33f71f0d->leave($__internal_75eb02a87a200df533f2118606fa0dd66ae0bf46b0bb2ce31cabf9dd33f71f0d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
