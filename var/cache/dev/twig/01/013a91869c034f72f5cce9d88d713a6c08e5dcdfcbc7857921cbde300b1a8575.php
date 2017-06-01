<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_ab19d6837f280563ba6470cd8f8f32ed0a23b374a8147d9f958fb5e88565e898 extends Twig_Template
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
        $__internal_7de865b762869daa3f06a282328beccf7ae1b9e65f6d718f2d0d97ae1c8906e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7de865b762869daa3f06a282328beccf7ae1b9e65f6d718f2d0d97ae1c8906e2->enter($__internal_7de865b762869daa3f06a282328beccf7ae1b9e65f6d718f2d0d97ae1c8906e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_605a377a1beb245dbf6410678bca392d0c8cd76e015e2ddcc07b7eb74be0d131 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_605a377a1beb245dbf6410678bca392d0c8cd76e015e2ddcc07b7eb74be0d131->enter($__internal_605a377a1beb245dbf6410678bca392d0c8cd76e015e2ddcc07b7eb74be0d131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_7de865b762869daa3f06a282328beccf7ae1b9e65f6d718f2d0d97ae1c8906e2->leave($__internal_7de865b762869daa3f06a282328beccf7ae1b9e65f6d718f2d0d97ae1c8906e2_prof);

        
        $__internal_605a377a1beb245dbf6410678bca392d0c8cd76e015e2ddcc07b7eb74be0d131->leave($__internal_605a377a1beb245dbf6410678bca392d0c8cd76e015e2ddcc07b7eb74be0d131_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
