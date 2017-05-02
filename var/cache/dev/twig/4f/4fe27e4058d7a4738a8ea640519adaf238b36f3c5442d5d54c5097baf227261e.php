<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_919835279b0dda71ba1b042c8bea90ff434ea074532599ee6b777cb30726e287 extends Twig_Template
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
        $__internal_5b731b2cb188f3e19993a7b08bbd0e436a035f3b0fbd579a79278fbb0a93c9aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b731b2cb188f3e19993a7b08bbd0e436a035f3b0fbd579a79278fbb0a93c9aa->enter($__internal_5b731b2cb188f3e19993a7b08bbd0e436a035f3b0fbd579a79278fbb0a93c9aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_a08348694a5116bff420530d2c0adc5a4f481f221d83acfe601580ddacdc4b17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a08348694a5116bff420530d2c0adc5a4f481f221d83acfe601580ddacdc4b17->enter($__internal_a08348694a5116bff420530d2c0adc5a4f481f221d83acfe601580ddacdc4b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_5b731b2cb188f3e19993a7b08bbd0e436a035f3b0fbd579a79278fbb0a93c9aa->leave($__internal_5b731b2cb188f3e19993a7b08bbd0e436a035f3b0fbd579a79278fbb0a93c9aa_prof);

        
        $__internal_a08348694a5116bff420530d2c0adc5a4f481f221d83acfe601580ddacdc4b17->leave($__internal_a08348694a5116bff420530d2c0adc5a4f481f221d83acfe601580ddacdc4b17_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
