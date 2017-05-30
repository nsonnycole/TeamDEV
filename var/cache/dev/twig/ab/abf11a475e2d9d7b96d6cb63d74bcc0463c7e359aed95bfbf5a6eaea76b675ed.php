<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_acc8081fcaf1146b277ef1f3a48793869c4fc2a33e0ab88df9eae448cb9d44c4 extends Twig_Template
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
        $__internal_cf8aecf6987018b4b3654590b0cd7c3ea874daee6582085f403debb84bf39248 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf8aecf6987018b4b3654590b0cd7c3ea874daee6582085f403debb84bf39248->enter($__internal_cf8aecf6987018b4b3654590b0cd7c3ea874daee6582085f403debb84bf39248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_c55a98e8ef31046ba4f256af8400a3042193250ca1655add50b2f69915f3b9c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c55a98e8ef31046ba4f256af8400a3042193250ca1655add50b2f69915f3b9c9->enter($__internal_c55a98e8ef31046ba4f256af8400a3042193250ca1655add50b2f69915f3b9c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_cf8aecf6987018b4b3654590b0cd7c3ea874daee6582085f403debb84bf39248->leave($__internal_cf8aecf6987018b4b3654590b0cd7c3ea874daee6582085f403debb84bf39248_prof);

        
        $__internal_c55a98e8ef31046ba4f256af8400a3042193250ca1655add50b2f69915f3b9c9->leave($__internal_c55a98e8ef31046ba4f256af8400a3042193250ca1655add50b2f69915f3b9c9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
