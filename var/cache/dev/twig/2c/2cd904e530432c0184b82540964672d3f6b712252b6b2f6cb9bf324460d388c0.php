<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_74e564f1cb5e9bfcbd77129f985d2a68529be74457b2dbc82a8ca4332f82f9f5 extends Twig_Template
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
        $__internal_adce771b3b2ab46833208e9bc868c6fa8a35232528eee8fc475fc9878c7a606d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adce771b3b2ab46833208e9bc868c6fa8a35232528eee8fc475fc9878c7a606d->enter($__internal_adce771b3b2ab46833208e9bc868c6fa8a35232528eee8fc475fc9878c7a606d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_4085677015b4b5817024d6b0af1a2f2781bdf7f2d768627d601f97a6c0ce8d47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4085677015b4b5817024d6b0af1a2f2781bdf7f2d768627d601f97a6c0ce8d47->enter($__internal_4085677015b4b5817024d6b0af1a2f2781bdf7f2d768627d601f97a6c0ce8d47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_adce771b3b2ab46833208e9bc868c6fa8a35232528eee8fc475fc9878c7a606d->leave($__internal_adce771b3b2ab46833208e9bc868c6fa8a35232528eee8fc475fc9878c7a606d_prof);

        
        $__internal_4085677015b4b5817024d6b0af1a2f2781bdf7f2d768627d601f97a6c0ce8d47->leave($__internal_4085677015b4b5817024d6b0af1a2f2781bdf7f2d768627d601f97a6c0ce8d47_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
