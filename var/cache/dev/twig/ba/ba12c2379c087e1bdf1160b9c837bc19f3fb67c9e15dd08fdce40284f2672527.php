<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_25f9b82f6c266201e060aaca7ccfab8a8cb0acc57e2733e963733b645831fcd3 extends Twig_Template
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
        $__internal_2d512af6c0d88b226d43480fb4430bf0efeaa0f818284f5e9079e94d5352430c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d512af6c0d88b226d43480fb4430bf0efeaa0f818284f5e9079e94d5352430c->enter($__internal_2d512af6c0d88b226d43480fb4430bf0efeaa0f818284f5e9079e94d5352430c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_8fb9b72b0883da07ba441379364563d22b52fe6f04469426ea1d08b1f9e05d7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fb9b72b0883da07ba441379364563d22b52fe6f04469426ea1d08b1f9e05d7f->enter($__internal_8fb9b72b0883da07ba441379364563d22b52fe6f04469426ea1d08b1f9e05d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_2d512af6c0d88b226d43480fb4430bf0efeaa0f818284f5e9079e94d5352430c->leave($__internal_2d512af6c0d88b226d43480fb4430bf0efeaa0f818284f5e9079e94d5352430c_prof);

        
        $__internal_8fb9b72b0883da07ba441379364563d22b52fe6f04469426ea1d08b1f9e05d7f->leave($__internal_8fb9b72b0883da07ba441379364563d22b52fe6f04469426ea1d08b1f9e05d7f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
