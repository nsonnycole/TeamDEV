<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_d53d2f30478a2b62b2685166fa789210fd8d21b527320e15f8f9fd73649b9dfe extends Twig_Template
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
        $__internal_e44c9c5c041451f368b38b9aec46c0572bc94aff99d950e670a4aa1982fb284c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e44c9c5c041451f368b38b9aec46c0572bc94aff99d950e670a4aa1982fb284c->enter($__internal_e44c9c5c041451f368b38b9aec46c0572bc94aff99d950e670a4aa1982fb284c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_b9969ce1ab984e3fa4e5ddbfdc2199546a7f93b826708a7ea8a2c85dccda500c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9969ce1ab984e3fa4e5ddbfdc2199546a7f93b826708a7ea8a2c85dccda500c->enter($__internal_b9969ce1ab984e3fa4e5ddbfdc2199546a7f93b826708a7ea8a2c85dccda500c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_e44c9c5c041451f368b38b9aec46c0572bc94aff99d950e670a4aa1982fb284c->leave($__internal_e44c9c5c041451f368b38b9aec46c0572bc94aff99d950e670a4aa1982fb284c_prof);

        
        $__internal_b9969ce1ab984e3fa4e5ddbfdc2199546a7f93b826708a7ea8a2c85dccda500c->leave($__internal_b9969ce1ab984e3fa4e5ddbfdc2199546a7f93b826708a7ea8a2c85dccda500c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
