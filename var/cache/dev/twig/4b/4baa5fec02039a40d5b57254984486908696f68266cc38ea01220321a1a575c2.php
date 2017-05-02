<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_078c2feba213b06de1d977fb0f8afcd6bf1b57764abc4d0b6a1cee0826cf385c extends Twig_Template
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
        $__internal_c7ee1bec06dac5b58709b862b2411aab520106e8d2f98dcbed8a6bddaf28db35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7ee1bec06dac5b58709b862b2411aab520106e8d2f98dcbed8a6bddaf28db35->enter($__internal_c7ee1bec06dac5b58709b862b2411aab520106e8d2f98dcbed8a6bddaf28db35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_259f396d51cd25533f058baf084b956135afa536ba8b84e266bfa2d0c8e08c49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_259f396d51cd25533f058baf084b956135afa536ba8b84e266bfa2d0c8e08c49->enter($__internal_259f396d51cd25533f058baf084b956135afa536ba8b84e266bfa2d0c8e08c49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_c7ee1bec06dac5b58709b862b2411aab520106e8d2f98dcbed8a6bddaf28db35->leave($__internal_c7ee1bec06dac5b58709b862b2411aab520106e8d2f98dcbed8a6bddaf28db35_prof);

        
        $__internal_259f396d51cd25533f058baf084b956135afa536ba8b84e266bfa2d0c8e08c49->leave($__internal_259f396d51cd25533f058baf084b956135afa536ba8b84e266bfa2d0c8e08c49_prof);

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
", "@Framework/Form/textarea_widget.html.php", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
