<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_030d0e87e03ac30d2629ff4a6d721a9911af7551e1c6a8157ecabca8c849f9a3 extends Twig_Template
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
        $__internal_19efb9713ab55222d579a3afaf1b0a93b691526016b9a2d3541617ac48f38ecf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19efb9713ab55222d579a3afaf1b0a93b691526016b9a2d3541617ac48f38ecf->enter($__internal_19efb9713ab55222d579a3afaf1b0a93b691526016b9a2d3541617ac48f38ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_51322bd1af36ffc8d1dbd813c81dfd0cd026aeb1c28186562cd44b31ce0e63c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51322bd1af36ffc8d1dbd813c81dfd0cd026aeb1c28186562cd44b31ce0e63c3->enter($__internal_51322bd1af36ffc8d1dbd813c81dfd0cd026aeb1c28186562cd44b31ce0e63c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

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
        
        $__internal_19efb9713ab55222d579a3afaf1b0a93b691526016b9a2d3541617ac48f38ecf->leave($__internal_19efb9713ab55222d579a3afaf1b0a93b691526016b9a2d3541617ac48f38ecf_prof);

        
        $__internal_51322bd1af36ffc8d1dbd813c81dfd0cd026aeb1c28186562cd44b31ce0e63c3->leave($__internal_51322bd1af36ffc8d1dbd813c81dfd0cd026aeb1c28186562cd44b31ce0e63c3_prof);

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
