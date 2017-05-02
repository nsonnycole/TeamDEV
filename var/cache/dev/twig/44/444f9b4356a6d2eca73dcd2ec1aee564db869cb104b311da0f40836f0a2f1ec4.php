<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_6bf63eb33465a4e08bac6aa654c6be5556502bb6a190bd16a99edb1e6586a75f extends Twig_Template
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
        $__internal_37c5855934369f62663eb78df62b56af75f3d1201bf48ae3a8a32bff769044d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37c5855934369f62663eb78df62b56af75f3d1201bf48ae3a8a32bff769044d5->enter($__internal_37c5855934369f62663eb78df62b56af75f3d1201bf48ae3a8a32bff769044d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_2847da9343ba91bf129b2eee369ada3c95ee8c20c6ae10552f54df4037eca023 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2847da9343ba91bf129b2eee369ada3c95ee8c20c6ae10552f54df4037eca023->enter($__internal_2847da9343ba91bf129b2eee369ada3c95ee8c20c6ae10552f54df4037eca023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_37c5855934369f62663eb78df62b56af75f3d1201bf48ae3a8a32bff769044d5->leave($__internal_37c5855934369f62663eb78df62b56af75f3d1201bf48ae3a8a32bff769044d5_prof);

        
        $__internal_2847da9343ba91bf129b2eee369ada3c95ee8c20c6ae10552f54df4037eca023->leave($__internal_2847da9343ba91bf129b2eee369ada3c95ee8c20c6ae10552f54df4037eca023_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
