<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_5a5e7d5b2d33c5f99acb5b66d93045dbc614676ea95ba03bd2477d4d94c0122e extends Twig_Template
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
        $__internal_3e5ac25db49532b00096e65287f6ccecb33936ee372d2e1957d3916cb308f14c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e5ac25db49532b00096e65287f6ccecb33936ee372d2e1957d3916cb308f14c->enter($__internal_3e5ac25db49532b00096e65287f6ccecb33936ee372d2e1957d3916cb308f14c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_aace83cd073047116affc02fa9bc60c88359fb22cadba4c511722599abe2e72c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aace83cd073047116affc02fa9bc60c88359fb22cadba4c511722599abe2e72c->enter($__internal_aace83cd073047116affc02fa9bc60c88359fb22cadba4c511722599abe2e72c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_3e5ac25db49532b00096e65287f6ccecb33936ee372d2e1957d3916cb308f14c->leave($__internal_3e5ac25db49532b00096e65287f6ccecb33936ee372d2e1957d3916cb308f14c_prof);

        
        $__internal_aace83cd073047116affc02fa9bc60c88359fb22cadba4c511722599abe2e72c->leave($__internal_aace83cd073047116affc02fa9bc60c88359fb22cadba4c511722599abe2e72c_prof);

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
", "@Framework/Form/choice_options.html.php", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
