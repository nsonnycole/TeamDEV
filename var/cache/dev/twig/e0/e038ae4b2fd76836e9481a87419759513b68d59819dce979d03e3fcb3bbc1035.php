<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_9bc1f995af90642ea8cbe7c9cc5bb27fc724f9fccfa5f9f6b5a424402213f429 extends Twig_Template
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
        $__internal_2cc75839bbb02d760c3d99109c11fd1887f739363ca989ba17290b17a5082e1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cc75839bbb02d760c3d99109c11fd1887f739363ca989ba17290b17a5082e1b->enter($__internal_2cc75839bbb02d760c3d99109c11fd1887f739363ca989ba17290b17a5082e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_37605053717baa72d25cca9e0956facfb8f53aa8f020145c4ee48fdf3cbc2749 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37605053717baa72d25cca9e0956facfb8f53aa8f020145c4ee48fdf3cbc2749->enter($__internal_37605053717baa72d25cca9e0956facfb8f53aa8f020145c4ee48fdf3cbc2749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_2cc75839bbb02d760c3d99109c11fd1887f739363ca989ba17290b17a5082e1b->leave($__internal_2cc75839bbb02d760c3d99109c11fd1887f739363ca989ba17290b17a5082e1b_prof);

        
        $__internal_37605053717baa72d25cca9e0956facfb8f53aa8f020145c4ee48fdf3cbc2749->leave($__internal_37605053717baa72d25cca9e0956facfb8f53aa8f020145c4ee48fdf3cbc2749_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
