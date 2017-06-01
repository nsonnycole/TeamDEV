<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_b4934b80bdc94a0d2af8a23840442c23cdb66d94dcb16ef7ba40bae18269b56f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_55a7cdbd97fe0721e6f75a7fc7b9ad83242795d867434f1d0a3b7c9025370574 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55a7cdbd97fe0721e6f75a7fc7b9ad83242795d867434f1d0a3b7c9025370574->enter($__internal_55a7cdbd97fe0721e6f75a7fc7b9ad83242795d867434f1d0a3b7c9025370574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_f1abc8b207b17ac0be53d90ef17ed95eac315631191f7683d226dfb89ff14e2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1abc8b207b17ac0be53d90ef17ed95eac315631191f7683d226dfb89ff14e2e->enter($__internal_f1abc8b207b17ac0be53d90ef17ed95eac315631191f7683d226dfb89ff14e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55a7cdbd97fe0721e6f75a7fc7b9ad83242795d867434f1d0a3b7c9025370574->leave($__internal_55a7cdbd97fe0721e6f75a7fc7b9ad83242795d867434f1d0a3b7c9025370574_prof);

        
        $__internal_f1abc8b207b17ac0be53d90ef17ed95eac315631191f7683d226dfb89ff14e2e->leave($__internal_f1abc8b207b17ac0be53d90ef17ed95eac315631191f7683d226dfb89ff14e2e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_eff33c94b350c3c5a254f7347230bd1ef0a792582fe1bd6fe06f50a4b90e9502 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eff33c94b350c3c5a254f7347230bd1ef0a792582fe1bd6fe06f50a4b90e9502->enter($__internal_eff33c94b350c3c5a254f7347230bd1ef0a792582fe1bd6fe06f50a4b90e9502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8d6b61152031b7a3ff082fedb57833d54b307e4d974869d7ef25e3249378ab05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d6b61152031b7a3ff082fedb57833d54b307e4d974869d7ef25e3249378ab05->enter($__internal_8d6b61152031b7a3ff082fedb57833d54b307e4d974869d7ef25e3249378ab05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_8d6b61152031b7a3ff082fedb57833d54b307e4d974869d7ef25e3249378ab05->leave($__internal_8d6b61152031b7a3ff082fedb57833d54b307e4d974869d7ef25e3249378ab05_prof);

        
        $__internal_eff33c94b350c3c5a254f7347230bd1ef0a792582fe1bd6fe06f50a4b90e9502->leave($__internal_eff33c94b350c3c5a254f7347230bd1ef0a792582fe1bd6fe06f50a4b90e9502_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0825c2732bf26bc1c1800d37ad7f375558f175ff5c9d4eccfbdc6c5879d3e9e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0825c2732bf26bc1c1800d37ad7f375558f175ff5c9d4eccfbdc6c5879d3e9e7->enter($__internal_0825c2732bf26bc1c1800d37ad7f375558f175ff5c9d4eccfbdc6c5879d3e9e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_26c5b1ade3c4571557ce4bb3e0c55f36c9d8a4a2101ae1167d2fb36cfcf2ba6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26c5b1ade3c4571557ce4bb3e0c55f36c9d8a4a2101ae1167d2fb36cfcf2ba6d->enter($__internal_26c5b1ade3c4571557ce4bb3e0c55f36c9d8a4a2101ae1167d2fb36cfcf2ba6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_26c5b1ade3c4571557ce4bb3e0c55f36c9d8a4a2101ae1167d2fb36cfcf2ba6d->leave($__internal_26c5b1ade3c4571557ce4bb3e0c55f36c9d8a4a2101ae1167d2fb36cfcf2ba6d_prof);

        
        $__internal_0825c2732bf26bc1c1800d37ad7f375558f175ff5c9d4eccfbdc6c5879d3e9e7->leave($__internal_0825c2732bf26bc1c1800d37ad7f375558f175ff5c9d4eccfbdc6c5879d3e9e7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
