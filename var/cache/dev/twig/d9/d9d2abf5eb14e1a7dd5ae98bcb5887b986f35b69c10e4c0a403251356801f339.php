<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_409635aaa952de10c1dfda369962c5bc82abe3cb79fd8f57e7bfedf66d2e8c9c extends Twig_Template
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
        $__internal_e1d8a761cfc601b954f97ee0e15cd680300ffb9fd7a5d1ecfd572f0b7f37bf6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1d8a761cfc601b954f97ee0e15cd680300ffb9fd7a5d1ecfd572f0b7f37bf6c->enter($__internal_e1d8a761cfc601b954f97ee0e15cd680300ffb9fd7a5d1ecfd572f0b7f37bf6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_ef05b3f15b5173ad1ea15bb259a0b2b507f9cfffbec2b85e50755b292e9a7513 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef05b3f15b5173ad1ea15bb259a0b2b507f9cfffbec2b85e50755b292e9a7513->enter($__internal_ef05b3f15b5173ad1ea15bb259a0b2b507f9cfffbec2b85e50755b292e9a7513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_e1d8a761cfc601b954f97ee0e15cd680300ffb9fd7a5d1ecfd572f0b7f37bf6c->leave($__internal_e1d8a761cfc601b954f97ee0e15cd680300ffb9fd7a5d1ecfd572f0b7f37bf6c_prof);

        
        $__internal_ef05b3f15b5173ad1ea15bb259a0b2b507f9cfffbec2b85e50755b292e9a7513->leave($__internal_ef05b3f15b5173ad1ea15bb259a0b2b507f9cfffbec2b85e50755b292e9a7513_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
