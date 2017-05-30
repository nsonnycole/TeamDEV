<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_5e5416f515ff09f051aeca5752f0ecfce7ecf32d540f7919204d777b17fc983c extends Twig_Template
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
        $__internal_6ce0395c5ff29dd9cbe71f32047fed95f9a88c4ad85197c4f4f91ac6ef845c37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ce0395c5ff29dd9cbe71f32047fed95f9a88c4ad85197c4f4f91ac6ef845c37->enter($__internal_6ce0395c5ff29dd9cbe71f32047fed95f9a88c4ad85197c4f4f91ac6ef845c37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_0ad4de64ead4834cf303cc6ac1019fd63c4ab782d5fc4760f0461112c59681b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ad4de64ead4834cf303cc6ac1019fd63c4ab782d5fc4760f0461112c59681b9->enter($__internal_0ad4de64ead4834cf303cc6ac1019fd63c4ab782d5fc4760f0461112c59681b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_6ce0395c5ff29dd9cbe71f32047fed95f9a88c4ad85197c4f4f91ac6ef845c37->leave($__internal_6ce0395c5ff29dd9cbe71f32047fed95f9a88c4ad85197c4f4f91ac6ef845c37_prof);

        
        $__internal_0ad4de64ead4834cf303cc6ac1019fd63c4ab782d5fc4760f0461112c59681b9->leave($__internal_0ad4de64ead4834cf303cc6ac1019fd63c4ab782d5fc4760f0461112c59681b9_prof);

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
