<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_58cda355da70bb2594abd966d7bf14eb19f96a31051796e906e68e8242668038 extends Twig_Template
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
        $__internal_da9018ef7667fb32068f48ec132cdbb125b3c82af84fb4ddafbf7fb863768d3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da9018ef7667fb32068f48ec132cdbb125b3c82af84fb4ddafbf7fb863768d3e->enter($__internal_da9018ef7667fb32068f48ec132cdbb125b3c82af84fb4ddafbf7fb863768d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_13702160a82592023299bb9c2856866c23717060d21cb2bce5e0a5eb8bded89c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13702160a82592023299bb9c2856866c23717060d21cb2bce5e0a5eb8bded89c->enter($__internal_13702160a82592023299bb9c2856866c23717060d21cb2bce5e0a5eb8bded89c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_da9018ef7667fb32068f48ec132cdbb125b3c82af84fb4ddafbf7fb863768d3e->leave($__internal_da9018ef7667fb32068f48ec132cdbb125b3c82af84fb4ddafbf7fb863768d3e_prof);

        
        $__internal_13702160a82592023299bb9c2856866c23717060d21cb2bce5e0a5eb8bded89c->leave($__internal_13702160a82592023299bb9c2856866c23717060d21cb2bce5e0a5eb8bded89c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
