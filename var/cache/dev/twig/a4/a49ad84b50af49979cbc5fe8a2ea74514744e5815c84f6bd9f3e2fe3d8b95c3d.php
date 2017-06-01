<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_71ce53dba66fa2a81007277e4da39b592aab55d621d562c9f1cce6c92527abed extends Twig_Template
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
        $__internal_afb1575ff5219e8d4c6e81b98cf7b213d657a8aa40aeb305af184328bafdf675 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afb1575ff5219e8d4c6e81b98cf7b213d657a8aa40aeb305af184328bafdf675->enter($__internal_afb1575ff5219e8d4c6e81b98cf7b213d657a8aa40aeb305af184328bafdf675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_0e7ba9e88ac6c318fbbaccf1068706c4f351fdd46c876577ce216a7ba8639fd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e7ba9e88ac6c318fbbaccf1068706c4f351fdd46c876577ce216a7ba8639fd7->enter($__internal_0e7ba9e88ac6c318fbbaccf1068706c4f351fdd46c876577ce216a7ba8639fd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_afb1575ff5219e8d4c6e81b98cf7b213d657a8aa40aeb305af184328bafdf675->leave($__internal_afb1575ff5219e8d4c6e81b98cf7b213d657a8aa40aeb305af184328bafdf675_prof);

        
        $__internal_0e7ba9e88ac6c318fbbaccf1068706c4f351fdd46c876577ce216a7ba8639fd7->leave($__internal_0e7ba9e88ac6c318fbbaccf1068706c4f351fdd46c876577ce216a7ba8639fd7_prof);

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
