<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_b685b16dfe6a86f2059a48079ac009145b60c691ad6abd8c154dc7c55aaa0dce extends Twig_Template
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
        $__internal_8b692566b46847ae9355a2b8ddfe8e2704d8aa3f25991d23f11d3ed534d6dadb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b692566b46847ae9355a2b8ddfe8e2704d8aa3f25991d23f11d3ed534d6dadb->enter($__internal_8b692566b46847ae9355a2b8ddfe8e2704d8aa3f25991d23f11d3ed534d6dadb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_ad66ab6da3bc55f8820dda4e5d680edf9d510317b7dcb9e78d192abf8d8032d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad66ab6da3bc55f8820dda4e5d680edf9d510317b7dcb9e78d192abf8d8032d4->enter($__internal_ad66ab6da3bc55f8820dda4e5d680edf9d510317b7dcb9e78d192abf8d8032d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_8b692566b46847ae9355a2b8ddfe8e2704d8aa3f25991d23f11d3ed534d6dadb->leave($__internal_8b692566b46847ae9355a2b8ddfe8e2704d8aa3f25991d23f11d3ed534d6dadb_prof);

        
        $__internal_ad66ab6da3bc55f8820dda4e5d680edf9d510317b7dcb9e78d192abf8d8032d4->leave($__internal_ad66ab6da3bc55f8820dda4e5d680edf9d510317b7dcb9e78d192abf8d8032d4_prof);

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
", "@Framework/Form/password_widget.html.php", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
