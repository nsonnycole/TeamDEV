<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_0161c191cb3db52c07e4d4b28ec2a649ba0873feebaa84b2b4ab6655afc723ad extends Twig_Template
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
        $__internal_e7da66c8f9ff76cab45fafc1187c659d73eb76f90ba8897037c7440064b811cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7da66c8f9ff76cab45fafc1187c659d73eb76f90ba8897037c7440064b811cc->enter($__internal_e7da66c8f9ff76cab45fafc1187c659d73eb76f90ba8897037c7440064b811cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_a4c8e3dbfea1e2a1422d2fa44b0747c543a08dc7177a592f902322fd20e061d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4c8e3dbfea1e2a1422d2fa44b0747c543a08dc7177a592f902322fd20e061d4->enter($__internal_a4c8e3dbfea1e2a1422d2fa44b0747c543a08dc7177a592f902322fd20e061d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_e7da66c8f9ff76cab45fafc1187c659d73eb76f90ba8897037c7440064b811cc->leave($__internal_e7da66c8f9ff76cab45fafc1187c659d73eb76f90ba8897037c7440064b811cc_prof);

        
        $__internal_a4c8e3dbfea1e2a1422d2fa44b0747c543a08dc7177a592f902322fd20e061d4->leave($__internal_a4c8e3dbfea1e2a1422d2fa44b0747c543a08dc7177a592f902322fd20e061d4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
