<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_9094e19bff34e248c5eb92449dc75649ee9a9eab93a14ef67afbe7636272aac8 extends Twig_Template
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
        $__internal_c8cbe9a671c5cd9cc28df9dd4a1afbfc86c1fb99d3653b381dd6eecf0b6747f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8cbe9a671c5cd9cc28df9dd4a1afbfc86c1fb99d3653b381dd6eecf0b6747f9->enter($__internal_c8cbe9a671c5cd9cc28df9dd4a1afbfc86c1fb99d3653b381dd6eecf0b6747f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_1ef968abbc949b9e0cf6776a806a14b837f6a20c435be1e4f88e8b6e26d9fd32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ef968abbc949b9e0cf6776a806a14b837f6a20c435be1e4f88e8b6e26d9fd32->enter($__internal_1ef968abbc949b9e0cf6776a806a14b837f6a20c435be1e4f88e8b6e26d9fd32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_c8cbe9a671c5cd9cc28df9dd4a1afbfc86c1fb99d3653b381dd6eecf0b6747f9->leave($__internal_c8cbe9a671c5cd9cc28df9dd4a1afbfc86c1fb99d3653b381dd6eecf0b6747f9_prof);

        
        $__internal_1ef968abbc949b9e0cf6776a806a14b837f6a20c435be1e4f88e8b6e26d9fd32->leave($__internal_1ef968abbc949b9e0cf6776a806a14b837f6a20c435be1e4f88e8b6e26d9fd32_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
