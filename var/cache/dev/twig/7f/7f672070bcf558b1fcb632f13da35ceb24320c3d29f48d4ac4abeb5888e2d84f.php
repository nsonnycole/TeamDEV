<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_825ea9668e84b17271bce11df0dbc4f39338b584a8849779ee831cd21c1d45c8 extends Twig_Template
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
        $__internal_107316a0351d57987dc0db6539c94b0c620cbb4ab955091f982e3256275d0385 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_107316a0351d57987dc0db6539c94b0c620cbb4ab955091f982e3256275d0385->enter($__internal_107316a0351d57987dc0db6539c94b0c620cbb4ab955091f982e3256275d0385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_d00c8b56e93695e0f0d938c02b271c16a4463d44a91d4e8ae712c79544634d99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d00c8b56e93695e0f0d938c02b271c16a4463d44a91d4e8ae712c79544634d99->enter($__internal_d00c8b56e93695e0f0d938c02b271c16a4463d44a91d4e8ae712c79544634d99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_107316a0351d57987dc0db6539c94b0c620cbb4ab955091f982e3256275d0385->leave($__internal_107316a0351d57987dc0db6539c94b0c620cbb4ab955091f982e3256275d0385_prof);

        
        $__internal_d00c8b56e93695e0f0d938c02b271c16a4463d44a91d4e8ae712c79544634d99->leave($__internal_d00c8b56e93695e0f0d938c02b271c16a4463d44a91d4e8ae712c79544634d99_prof);

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
", "@Framework/Form/textarea_widget.html.php", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
