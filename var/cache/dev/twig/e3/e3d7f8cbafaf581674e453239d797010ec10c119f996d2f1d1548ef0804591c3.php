<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_6c6de23165e31d4f54c7ca71a2b43d3d75b1938a30b6f4db63346b5c056164c8 extends Twig_Template
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
        $__internal_f3558baa4b848095a181703fe4f1d2c742286ca05517d349c6a6064ae2ce0e91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3558baa4b848095a181703fe4f1d2c742286ca05517d349c6a6064ae2ce0e91->enter($__internal_f3558baa4b848095a181703fe4f1d2c742286ca05517d349c6a6064ae2ce0e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_89a69d927e2736f6dced4a9423a93c55f0dabaeceac93e066bfdcbb4834f2c32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89a69d927e2736f6dced4a9423a93c55f0dabaeceac93e066bfdcbb4834f2c32->enter($__internal_89a69d927e2736f6dced4a9423a93c55f0dabaeceac93e066bfdcbb4834f2c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_f3558baa4b848095a181703fe4f1d2c742286ca05517d349c6a6064ae2ce0e91->leave($__internal_f3558baa4b848095a181703fe4f1d2c742286ca05517d349c6a6064ae2ce0e91_prof);

        
        $__internal_89a69d927e2736f6dced4a9423a93c55f0dabaeceac93e066bfdcbb4834f2c32->leave($__internal_89a69d927e2736f6dced4a9423a93c55f0dabaeceac93e066bfdcbb4834f2c32_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
