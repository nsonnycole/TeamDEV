<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_dd7c6f45f21b887a006ec9e444c838b724336eab5eb6332df3452f95200fd2e5 extends Twig_Template
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
        $__internal_e3f31ad9481c2f6cd29aaf69b6e94c3424bbc416ccaf71a424766c841722d240 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3f31ad9481c2f6cd29aaf69b6e94c3424bbc416ccaf71a424766c841722d240->enter($__internal_e3f31ad9481c2f6cd29aaf69b6e94c3424bbc416ccaf71a424766c841722d240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_514c27a2f3e513476ec61c4836d32a0d32b546755c22e48e3b78d01179d445ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_514c27a2f3e513476ec61c4836d32a0d32b546755c22e48e3b78d01179d445ee->enter($__internal_514c27a2f3e513476ec61c4836d32a0d32b546755c22e48e3b78d01179d445ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_e3f31ad9481c2f6cd29aaf69b6e94c3424bbc416ccaf71a424766c841722d240->leave($__internal_e3f31ad9481c2f6cd29aaf69b6e94c3424bbc416ccaf71a424766c841722d240_prof);

        
        $__internal_514c27a2f3e513476ec61c4836d32a0d32b546755c22e48e3b78d01179d445ee->leave($__internal_514c27a2f3e513476ec61c4836d32a0d32b546755c22e48e3b78d01179d445ee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
