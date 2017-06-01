<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_5a004d63f2f18ef660a64f1ce86a8b101d4d9f83851149bae18e37bfec62c59d extends Twig_Template
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
        $__internal_86efcf23e2c1857a01b04cb9c7a79853a38665b9ba9096a753da4a2a7f4fee67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86efcf23e2c1857a01b04cb9c7a79853a38665b9ba9096a753da4a2a7f4fee67->enter($__internal_86efcf23e2c1857a01b04cb9c7a79853a38665b9ba9096a753da4a2a7f4fee67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_d40e31df486c8cc8bfde8b58866464f656c345814ee3571eacdcb08123f95402 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d40e31df486c8cc8bfde8b58866464f656c345814ee3571eacdcb08123f95402->enter($__internal_d40e31df486c8cc8bfde8b58866464f656c345814ee3571eacdcb08123f95402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_86efcf23e2c1857a01b04cb9c7a79853a38665b9ba9096a753da4a2a7f4fee67->leave($__internal_86efcf23e2c1857a01b04cb9c7a79853a38665b9ba9096a753da4a2a7f4fee67_prof);

        
        $__internal_d40e31df486c8cc8bfde8b58866464f656c345814ee3571eacdcb08123f95402->leave($__internal_d40e31df486c8cc8bfde8b58866464f656c345814ee3571eacdcb08123f95402_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
