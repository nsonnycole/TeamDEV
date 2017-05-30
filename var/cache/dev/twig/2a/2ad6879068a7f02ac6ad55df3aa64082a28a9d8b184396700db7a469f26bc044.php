<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_bacf48ce4835ee77772131f4c48b914b2c049d738a366e49a4befef131d2d64e extends Twig_Template
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
        $__internal_7654e35c430b4dbb5804d4b4935de5634144d2a10cae9d1df8e38cbf9042ff1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7654e35c430b4dbb5804d4b4935de5634144d2a10cae9d1df8e38cbf9042ff1c->enter($__internal_7654e35c430b4dbb5804d4b4935de5634144d2a10cae9d1df8e38cbf9042ff1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_b84551ebda81d1996257f0ec318f632412d2d3a1c24527752fc9458026245524 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b84551ebda81d1996257f0ec318f632412d2d3a1c24527752fc9458026245524->enter($__internal_b84551ebda81d1996257f0ec318f632412d2d3a1c24527752fc9458026245524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_7654e35c430b4dbb5804d4b4935de5634144d2a10cae9d1df8e38cbf9042ff1c->leave($__internal_7654e35c430b4dbb5804d4b4935de5634144d2a10cae9d1df8e38cbf9042ff1c_prof);

        
        $__internal_b84551ebda81d1996257f0ec318f632412d2d3a1c24527752fc9458026245524->leave($__internal_b84551ebda81d1996257f0ec318f632412d2d3a1c24527752fc9458026245524_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
