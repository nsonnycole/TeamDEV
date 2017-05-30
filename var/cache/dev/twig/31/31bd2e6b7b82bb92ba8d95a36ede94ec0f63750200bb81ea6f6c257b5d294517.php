<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_30da7ad7b328d25e42683f2fbed74867e739c23ae9b246dee7985d4fe4953f05 extends Twig_Template
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
        $__internal_5720325f014aa9d09055608b66c23aa6397bce5706e6a344d23d08f0b1a6cbd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5720325f014aa9d09055608b66c23aa6397bce5706e6a344d23d08f0b1a6cbd1->enter($__internal_5720325f014aa9d09055608b66c23aa6397bce5706e6a344d23d08f0b1a6cbd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_25ccdeff889fc9ba8b22500412c993e4d76be0d929a8cc7b865adc09864a8d7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25ccdeff889fc9ba8b22500412c993e4d76be0d929a8cc7b865adc09864a8d7f->enter($__internal_25ccdeff889fc9ba8b22500412c993e4d76be0d929a8cc7b865adc09864a8d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_5720325f014aa9d09055608b66c23aa6397bce5706e6a344d23d08f0b1a6cbd1->leave($__internal_5720325f014aa9d09055608b66c23aa6397bce5706e6a344d23d08f0b1a6cbd1_prof);

        
        $__internal_25ccdeff889fc9ba8b22500412c993e4d76be0d929a8cc7b865adc09864a8d7f->leave($__internal_25ccdeff889fc9ba8b22500412c993e4d76be0d929a8cc7b865adc09864a8d7f_prof);

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
