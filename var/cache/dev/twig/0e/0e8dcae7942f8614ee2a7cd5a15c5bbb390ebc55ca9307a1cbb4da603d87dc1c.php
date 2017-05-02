<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_d118db7789af0fbf9838eff935fa9e4ba7c1bf00057015276aa34951a4b68052 extends Twig_Template
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
        $__internal_aded47a1450a32de8f9497696e9d13c217dedee3c4c5bdda9c741a48542f4594 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aded47a1450a32de8f9497696e9d13c217dedee3c4c5bdda9c741a48542f4594->enter($__internal_aded47a1450a32de8f9497696e9d13c217dedee3c4c5bdda9c741a48542f4594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_337c5cde251968d56857a19b2cc8059d07abd02b644f3eaa14697bd2c01b07c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_337c5cde251968d56857a19b2cc8059d07abd02b644f3eaa14697bd2c01b07c5->enter($__internal_337c5cde251968d56857a19b2cc8059d07abd02b644f3eaa14697bd2c01b07c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_aded47a1450a32de8f9497696e9d13c217dedee3c4c5bdda9c741a48542f4594->leave($__internal_aded47a1450a32de8f9497696e9d13c217dedee3c4c5bdda9c741a48542f4594_prof);

        
        $__internal_337c5cde251968d56857a19b2cc8059d07abd02b644f3eaa14697bd2c01b07c5->leave($__internal_337c5cde251968d56857a19b2cc8059d07abd02b644f3eaa14697bd2c01b07c5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
