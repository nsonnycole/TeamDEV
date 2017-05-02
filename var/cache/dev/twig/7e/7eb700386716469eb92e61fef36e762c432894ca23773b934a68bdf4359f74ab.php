<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_bf40e2e7d1aba9b27b273113fd79c786ddf93d67d0f5e99743255cbda4dd1e15 extends Twig_Template
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
        $__internal_b2034894e6caafeb129cef436cff84e09766412bd64f2d29d5142fdc73c90637 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2034894e6caafeb129cef436cff84e09766412bd64f2d29d5142fdc73c90637->enter($__internal_b2034894e6caafeb129cef436cff84e09766412bd64f2d29d5142fdc73c90637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_4f109ca881ab859312b320f8f256db1f6c221fae74e5890760aa365bc9b6a4ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f109ca881ab859312b320f8f256db1f6c221fae74e5890760aa365bc9b6a4ad->enter($__internal_4f109ca881ab859312b320f8f256db1f6c221fae74e5890760aa365bc9b6a4ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b2034894e6caafeb129cef436cff84e09766412bd64f2d29d5142fdc73c90637->leave($__internal_b2034894e6caafeb129cef436cff84e09766412bd64f2d29d5142fdc73c90637_prof);

        
        $__internal_4f109ca881ab859312b320f8f256db1f6c221fae74e5890760aa365bc9b6a4ad->leave($__internal_4f109ca881ab859312b320f8f256db1f6c221fae74e5890760aa365bc9b6a4ad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
