<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_b6976b9ec018942d7c084fce8cec64fa8f58cea606fd54f5cba4cd887cf56c32 extends Twig_Template
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
        $__internal_9536c5f110b651cd45e7ee89d02021a93c457424ff089e64968001f8232aa54d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9536c5f110b651cd45e7ee89d02021a93c457424ff089e64968001f8232aa54d->enter($__internal_9536c5f110b651cd45e7ee89d02021a93c457424ff089e64968001f8232aa54d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_4b8e3573ed9c58d1a4b6aac0d85122ee4f38e944c49a63033a6fccb9fc816351 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b8e3573ed9c58d1a4b6aac0d85122ee4f38e944c49a63033a6fccb9fc816351->enter($__internal_4b8e3573ed9c58d1a4b6aac0d85122ee4f38e944c49a63033a6fccb9fc816351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_9536c5f110b651cd45e7ee89d02021a93c457424ff089e64968001f8232aa54d->leave($__internal_9536c5f110b651cd45e7ee89d02021a93c457424ff089e64968001f8232aa54d_prof);

        
        $__internal_4b8e3573ed9c58d1a4b6aac0d85122ee4f38e944c49a63033a6fccb9fc816351->leave($__internal_4b8e3573ed9c58d1a4b6aac0d85122ee4f38e944c49a63033a6fccb9fc816351_prof);

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
