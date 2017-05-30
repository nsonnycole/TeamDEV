<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_a2c9496a9cdfbc8c5a8eb78f7043af9d8fbdcc59a6f6ae7edf5d62a165968ba2 extends Twig_Template
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
        $__internal_5ea2a22cdfd598b765f56ddb7e2d19c6281c3528eb68e099db54f592c96e10e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ea2a22cdfd598b765f56ddb7e2d19c6281c3528eb68e099db54f592c96e10e2->enter($__internal_5ea2a22cdfd598b765f56ddb7e2d19c6281c3528eb68e099db54f592c96e10e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_4c5fdd054941860c270468fc2e84ad92cdd1ad705b0e39e906d7fd30e939492a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c5fdd054941860c270468fc2e84ad92cdd1ad705b0e39e906d7fd30e939492a->enter($__internal_4c5fdd054941860c270468fc2e84ad92cdd1ad705b0e39e906d7fd30e939492a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_5ea2a22cdfd598b765f56ddb7e2d19c6281c3528eb68e099db54f592c96e10e2->leave($__internal_5ea2a22cdfd598b765f56ddb7e2d19c6281c3528eb68e099db54f592c96e10e2_prof);

        
        $__internal_4c5fdd054941860c270468fc2e84ad92cdd1ad705b0e39e906d7fd30e939492a->leave($__internal_4c5fdd054941860c270468fc2e84ad92cdd1ad705b0e39e906d7fd30e939492a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
