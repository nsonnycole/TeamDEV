<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_efaa558f7facfef11c3235b8e90fbf90761ffe5eee93c1d73dffb278006582ae extends Twig_Template
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
        $__internal_9ab0792239bab813f017a06c6d51c91ac1d6af9e4115be21d3cd85a338d523f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ab0792239bab813f017a06c6d51c91ac1d6af9e4115be21d3cd85a338d523f8->enter($__internal_9ab0792239bab813f017a06c6d51c91ac1d6af9e4115be21d3cd85a338d523f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_421edc68711e1edd9ea7f4cf390283f79d3d38ff116dfb6a28e5b58adc7dbb50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_421edc68711e1edd9ea7f4cf390283f79d3d38ff116dfb6a28e5b58adc7dbb50->enter($__internal_421edc68711e1edd9ea7f4cf390283f79d3d38ff116dfb6a28e5b58adc7dbb50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_9ab0792239bab813f017a06c6d51c91ac1d6af9e4115be21d3cd85a338d523f8->leave($__internal_9ab0792239bab813f017a06c6d51c91ac1d6af9e4115be21d3cd85a338d523f8_prof);

        
        $__internal_421edc68711e1edd9ea7f4cf390283f79d3d38ff116dfb6a28e5b58adc7dbb50->leave($__internal_421edc68711e1edd9ea7f4cf390283f79d3d38ff116dfb6a28e5b58adc7dbb50_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
