<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_f7f61c297d6a7c736ca87a082777a38766034271aac3973d25c72cca63a94419 extends Twig_Template
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
        $__internal_1428bd01e604f1cfd7ec254d76335f803e0dfb34889506b350bb02b13b6bde0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1428bd01e604f1cfd7ec254d76335f803e0dfb34889506b350bb02b13b6bde0c->enter($__internal_1428bd01e604f1cfd7ec254d76335f803e0dfb34889506b350bb02b13b6bde0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_b77ba467867dfe76ce614faf6fc3e9c0516bc0dff8901a885ccf1d97fbc0e908 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b77ba467867dfe76ce614faf6fc3e9c0516bc0dff8901a885ccf1d97fbc0e908->enter($__internal_b77ba467867dfe76ce614faf6fc3e9c0516bc0dff8901a885ccf1d97fbc0e908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_1428bd01e604f1cfd7ec254d76335f803e0dfb34889506b350bb02b13b6bde0c->leave($__internal_1428bd01e604f1cfd7ec254d76335f803e0dfb34889506b350bb02b13b6bde0c_prof);

        
        $__internal_b77ba467867dfe76ce614faf6fc3e9c0516bc0dff8901a885ccf1d97fbc0e908->leave($__internal_b77ba467867dfe76ce614faf6fc3e9c0516bc0dff8901a885ccf1d97fbc0e908_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
