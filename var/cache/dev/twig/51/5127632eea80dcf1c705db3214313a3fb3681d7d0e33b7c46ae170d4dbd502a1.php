<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_24c8eb85dca8a61d1e5c3e31c943485f212da780e37578760e5161bd9c9bd5d9 extends Twig_Template
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
        $__internal_e56aab6d5eb73d1f33a012779286a0aa9ceed259892c78cb850e578db9f3c85e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e56aab6d5eb73d1f33a012779286a0aa9ceed259892c78cb850e578db9f3c85e->enter($__internal_e56aab6d5eb73d1f33a012779286a0aa9ceed259892c78cb850e578db9f3c85e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_bf8899819357e174962255be72ded16475faac74b1a88cb6056cf1cc90ceba00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf8899819357e174962255be72ded16475faac74b1a88cb6056cf1cc90ceba00->enter($__internal_bf8899819357e174962255be72ded16475faac74b1a88cb6056cf1cc90ceba00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_e56aab6d5eb73d1f33a012779286a0aa9ceed259892c78cb850e578db9f3c85e->leave($__internal_e56aab6d5eb73d1f33a012779286a0aa9ceed259892c78cb850e578db9f3c85e_prof);

        
        $__internal_bf8899819357e174962255be72ded16475faac74b1a88cb6056cf1cc90ceba00->leave($__internal_bf8899819357e174962255be72ded16475faac74b1a88cb6056cf1cc90ceba00_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
