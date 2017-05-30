<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_4939240c8d71e130601f08bbb4bda343dbe9f40335f5412a663449eadf909200 extends Twig_Template
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
        $__internal_5813e7875cf28b243140eefea5325b84f2dc4dc345d2247c94de6ba446460ba7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5813e7875cf28b243140eefea5325b84f2dc4dc345d2247c94de6ba446460ba7->enter($__internal_5813e7875cf28b243140eefea5325b84f2dc4dc345d2247c94de6ba446460ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_8bb6b5c728f09d16c164651dd6535f285dbf84727d875c2a5ace421827f29664 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bb6b5c728f09d16c164651dd6535f285dbf84727d875c2a5ace421827f29664->enter($__internal_8bb6b5c728f09d16c164651dd6535f285dbf84727d875c2a5ace421827f29664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_5813e7875cf28b243140eefea5325b84f2dc4dc345d2247c94de6ba446460ba7->leave($__internal_5813e7875cf28b243140eefea5325b84f2dc4dc345d2247c94de6ba446460ba7_prof);

        
        $__internal_8bb6b5c728f09d16c164651dd6535f285dbf84727d875c2a5ace421827f29664->leave($__internal_8bb6b5c728f09d16c164651dd6535f285dbf84727d875c2a5ace421827f29664_prof);

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
", "@Framework/Form/checkbox_widget.html.php", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
