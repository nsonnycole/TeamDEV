<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_6b46dd0a997ab36a2c75f2fe734aebba4e3a0269a9d7cf1f0998998fd04786d5 extends Twig_Template
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
        $__internal_931068c0e41df333135a9550cf8487c629dd661564e63cc7248c30888230b5e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_931068c0e41df333135a9550cf8487c629dd661564e63cc7248c30888230b5e0->enter($__internal_931068c0e41df333135a9550cf8487c629dd661564e63cc7248c30888230b5e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_624f6de9a56d8e19a68c9426abaf5dbd537fb88981f4d4f2abafafdb29bb7923 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_624f6de9a56d8e19a68c9426abaf5dbd537fb88981f4d4f2abafafdb29bb7923->enter($__internal_624f6de9a56d8e19a68c9426abaf5dbd537fb88981f4d4f2abafafdb29bb7923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_931068c0e41df333135a9550cf8487c629dd661564e63cc7248c30888230b5e0->leave($__internal_931068c0e41df333135a9550cf8487c629dd661564e63cc7248c30888230b5e0_prof);

        
        $__internal_624f6de9a56d8e19a68c9426abaf5dbd537fb88981f4d4f2abafafdb29bb7923->leave($__internal_624f6de9a56d8e19a68c9426abaf5dbd537fb88981f4d4f2abafafdb29bb7923_prof);

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
