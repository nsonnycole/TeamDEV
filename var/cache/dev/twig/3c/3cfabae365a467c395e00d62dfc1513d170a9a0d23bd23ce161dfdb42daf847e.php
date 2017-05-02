<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_9d5489965368e6446cc1328c579a8f1517c0ba23b10a7865368937d09589b0e9 extends Twig_Template
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
        $__internal_ac6bcc3afe120345759bcae4d9e75980121a3428ecdd0608e8d8041918f89798 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac6bcc3afe120345759bcae4d9e75980121a3428ecdd0608e8d8041918f89798->enter($__internal_ac6bcc3afe120345759bcae4d9e75980121a3428ecdd0608e8d8041918f89798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_fe80bd2ce5879599866c14e259236282c3015247183e789d560da3dacc53d232 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe80bd2ce5879599866c14e259236282c3015247183e789d560da3dacc53d232->enter($__internal_fe80bd2ce5879599866c14e259236282c3015247183e789d560da3dacc53d232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_ac6bcc3afe120345759bcae4d9e75980121a3428ecdd0608e8d8041918f89798->leave($__internal_ac6bcc3afe120345759bcae4d9e75980121a3428ecdd0608e8d8041918f89798_prof);

        
        $__internal_fe80bd2ce5879599866c14e259236282c3015247183e789d560da3dacc53d232->leave($__internal_fe80bd2ce5879599866c14e259236282c3015247183e789d560da3dacc53d232_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
