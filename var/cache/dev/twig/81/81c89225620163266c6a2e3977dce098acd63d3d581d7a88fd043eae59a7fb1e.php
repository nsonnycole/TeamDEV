<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_b48c95768866d0bd622bace546cef72bc097c7863519750e4d08485b563e4742 extends Twig_Template
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
        $__internal_b5d36b0fad7df876fa749618597ad3add4d6889af975a620b618171835a99aab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5d36b0fad7df876fa749618597ad3add4d6889af975a620b618171835a99aab->enter($__internal_b5d36b0fad7df876fa749618597ad3add4d6889af975a620b618171835a99aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_35158dc586cf8e2f70ebde7ae0b0fa1c0851c17d678b78aed9752fe2be215872 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35158dc586cf8e2f70ebde7ae0b0fa1c0851c17d678b78aed9752fe2be215872->enter($__internal_35158dc586cf8e2f70ebde7ae0b0fa1c0851c17d678b78aed9752fe2be215872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_b5d36b0fad7df876fa749618597ad3add4d6889af975a620b618171835a99aab->leave($__internal_b5d36b0fad7df876fa749618597ad3add4d6889af975a620b618171835a99aab_prof);

        
        $__internal_35158dc586cf8e2f70ebde7ae0b0fa1c0851c17d678b78aed9752fe2be215872->leave($__internal_35158dc586cf8e2f70ebde7ae0b0fa1c0851c17d678b78aed9752fe2be215872_prof);

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
", "@Framework/Form/form_widget_simple.html.php", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
