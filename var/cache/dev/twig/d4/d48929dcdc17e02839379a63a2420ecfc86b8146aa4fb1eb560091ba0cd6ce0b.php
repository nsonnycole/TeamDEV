<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_d73eb0827a759900e7561ec6bb50fee62aaeadf76beb4620a683399b86322d24 extends Twig_Template
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
        $__internal_c783b418d8a989fb0ffb2a509b2ae52568bc05a7e9af1f3815f63311d93d7bc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c783b418d8a989fb0ffb2a509b2ae52568bc05a7e9af1f3815f63311d93d7bc5->enter($__internal_c783b418d8a989fb0ffb2a509b2ae52568bc05a7e9af1f3815f63311d93d7bc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_b1acd40f58a78af5bc1db56f5fb7a61dd499184404b45a783685a6ce6a6638c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1acd40f58a78af5bc1db56f5fb7a61dd499184404b45a783685a6ce6a6638c5->enter($__internal_b1acd40f58a78af5bc1db56f5fb7a61dd499184404b45a783685a6ce6a6638c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_c783b418d8a989fb0ffb2a509b2ae52568bc05a7e9af1f3815f63311d93d7bc5->leave($__internal_c783b418d8a989fb0ffb2a509b2ae52568bc05a7e9af1f3815f63311d93d7bc5_prof);

        
        $__internal_b1acd40f58a78af5bc1db56f5fb7a61dd499184404b45a783685a6ce6a6638c5->leave($__internal_b1acd40f58a78af5bc1db56f5fb7a61dd499184404b45a783685a6ce6a6638c5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
