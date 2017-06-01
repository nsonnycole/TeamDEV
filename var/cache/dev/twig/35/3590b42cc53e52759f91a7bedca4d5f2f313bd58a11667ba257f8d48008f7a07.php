<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_9af18e45f7e32e3363c569775257b96ba98490fda6b08266ebb1df593abe7e90 extends Twig_Template
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
        $__internal_761245534f58c4f240888197bc58108290b8b6e70b9dbc4dfeb2cff32310917f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_761245534f58c4f240888197bc58108290b8b6e70b9dbc4dfeb2cff32310917f->enter($__internal_761245534f58c4f240888197bc58108290b8b6e70b9dbc4dfeb2cff32310917f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_96a79fab07f3dcaac30849b2a9c999dc8f79ddcd47e3572e7abe10ccfcd06b4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96a79fab07f3dcaac30849b2a9c999dc8f79ddcd47e3572e7abe10ccfcd06b4f->enter($__internal_96a79fab07f3dcaac30849b2a9c999dc8f79ddcd47e3572e7abe10ccfcd06b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_761245534f58c4f240888197bc58108290b8b6e70b9dbc4dfeb2cff32310917f->leave($__internal_761245534f58c4f240888197bc58108290b8b6e70b9dbc4dfeb2cff32310917f_prof);

        
        $__internal_96a79fab07f3dcaac30849b2a9c999dc8f79ddcd47e3572e7abe10ccfcd06b4f->leave($__internal_96a79fab07f3dcaac30849b2a9c999dc8f79ddcd47e3572e7abe10ccfcd06b4f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
