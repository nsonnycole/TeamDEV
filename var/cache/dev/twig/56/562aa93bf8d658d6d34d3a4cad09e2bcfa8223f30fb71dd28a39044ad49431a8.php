<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_7738e106299495286e8a557759881da6bb5b5f50da2db20a040d70e48c35e6d5 extends Twig_Template
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
        $__internal_dcb7812fcf5fbdc38a29c5d0b938f84840ba564646d65f6d213c6693f2f6d243 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcb7812fcf5fbdc38a29c5d0b938f84840ba564646d65f6d213c6693f2f6d243->enter($__internal_dcb7812fcf5fbdc38a29c5d0b938f84840ba564646d65f6d213c6693f2f6d243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_1a7a4b3c8e845eda3a8571743c1e50182d01a7b5f9263ae0a6f189cbeee3fa1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a7a4b3c8e845eda3a8571743c1e50182d01a7b5f9263ae0a6f189cbeee3fa1d->enter($__internal_1a7a4b3c8e845eda3a8571743c1e50182d01a7b5f9263ae0a6f189cbeee3fa1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_dcb7812fcf5fbdc38a29c5d0b938f84840ba564646d65f6d213c6693f2f6d243->leave($__internal_dcb7812fcf5fbdc38a29c5d0b938f84840ba564646d65f6d213c6693f2f6d243_prof);

        
        $__internal_1a7a4b3c8e845eda3a8571743c1e50182d01a7b5f9263ae0a6f189cbeee3fa1d->leave($__internal_1a7a4b3c8e845eda3a8571743c1e50182d01a7b5f9263ae0a6f189cbeee3fa1d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
