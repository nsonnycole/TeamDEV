<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_cb41f30bf3eb714060af3ff6af5f01a4f2f2d8fc31ada391438b44b4449da39a extends Twig_Template
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
        $__internal_10171fcd6aa488e2cae4dc0a63e30024d7a00090a35542421e3bf32b8d6d4caf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10171fcd6aa488e2cae4dc0a63e30024d7a00090a35542421e3bf32b8d6d4caf->enter($__internal_10171fcd6aa488e2cae4dc0a63e30024d7a00090a35542421e3bf32b8d6d4caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_3d3a77c451bcec628501361f2a2d674dda58bb24a2cb2696dc9e4cc3c7562c5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d3a77c451bcec628501361f2a2d674dda58bb24a2cb2696dc9e4cc3c7562c5b->enter($__internal_3d3a77c451bcec628501361f2a2d674dda58bb24a2cb2696dc9e4cc3c7562c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_10171fcd6aa488e2cae4dc0a63e30024d7a00090a35542421e3bf32b8d6d4caf->leave($__internal_10171fcd6aa488e2cae4dc0a63e30024d7a00090a35542421e3bf32b8d6d4caf_prof);

        
        $__internal_3d3a77c451bcec628501361f2a2d674dda58bb24a2cb2696dc9e4cc3c7562c5b->leave($__internal_3d3a77c451bcec628501361f2a2d674dda58bb24a2cb2696dc9e4cc3c7562c5b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
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
", "@WebProfiler/Profiler/header.html.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
