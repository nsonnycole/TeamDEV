<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_9772ff864e5c706fe8a0590816136f6494050a3831de778ac92e16bcc4173af3 extends Twig_Template
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
        $__internal_d16af8170410d2c48a35ae02d2fc3b8538e43898720ae8dc21600587e6643cc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d16af8170410d2c48a35ae02d2fc3b8538e43898720ae8dc21600587e6643cc9->enter($__internal_d16af8170410d2c48a35ae02d2fc3b8538e43898720ae8dc21600587e6643cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_315bbf5b564811317af70d8e78b0ffd5a5df8d8e8d3d69a06a4552842b2f54fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_315bbf5b564811317af70d8e78b0ffd5a5df8d8e8d3d69a06a4552842b2f54fc->enter($__internal_315bbf5b564811317af70d8e78b0ffd5a5df8d8e8d3d69a06a4552842b2f54fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_d16af8170410d2c48a35ae02d2fc3b8538e43898720ae8dc21600587e6643cc9->leave($__internal_d16af8170410d2c48a35ae02d2fc3b8538e43898720ae8dc21600587e6643cc9_prof);

        
        $__internal_315bbf5b564811317af70d8e78b0ffd5a5df8d8e8d3d69a06a4552842b2f54fc->leave($__internal_315bbf5b564811317af70d8e78b0ffd5a5df8d8e8d3d69a06a4552842b2f54fc_prof);

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
", "@Framework/Form/percent_widget.html.php", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
