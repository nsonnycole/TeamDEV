<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_f5370f49c14ffd44a3335fff8ed845dac04cc0f5d8c8c27c4d0bb2bbbeb886d7 extends Twig_Template
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
        $__internal_06c745b6e18c26f76ac18259e178ad5fd33dd55fbca9fd583283c4d7573cc610 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06c745b6e18c26f76ac18259e178ad5fd33dd55fbca9fd583283c4d7573cc610->enter($__internal_06c745b6e18c26f76ac18259e178ad5fd33dd55fbca9fd583283c4d7573cc610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_b97065573e409ca3482d05de26c4f6b665297a24cc9feaa5c74e11eebd9fef0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b97065573e409ca3482d05de26c4f6b665297a24cc9feaa5c74e11eebd9fef0b->enter($__internal_b97065573e409ca3482d05de26c4f6b665297a24cc9feaa5c74e11eebd9fef0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_06c745b6e18c26f76ac18259e178ad5fd33dd55fbca9fd583283c4d7573cc610->leave($__internal_06c745b6e18c26f76ac18259e178ad5fd33dd55fbca9fd583283c4d7573cc610_prof);

        
        $__internal_b97065573e409ca3482d05de26c4f6b665297a24cc9feaa5c74e11eebd9fef0b->leave($__internal_b97065573e409ca3482d05de26c4f6b665297a24cc9feaa5c74e11eebd9fef0b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
