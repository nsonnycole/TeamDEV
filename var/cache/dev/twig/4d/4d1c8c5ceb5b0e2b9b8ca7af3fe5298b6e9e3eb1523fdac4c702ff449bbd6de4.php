<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_414248c368ae4225ad443f727bfc66554ded447cf44cdeed862a08affcbd341b extends Twig_Template
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
        $__internal_3ddbf9d63990bb99d17d03d6a6554e6b2856531158351659e2d7ff3263da2576 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ddbf9d63990bb99d17d03d6a6554e6b2856531158351659e2d7ff3263da2576->enter($__internal_3ddbf9d63990bb99d17d03d6a6554e6b2856531158351659e2d7ff3263da2576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_0521989cef9cdeaa952036c62b3ad626ddfdb3272500e51cd98b42ce778d27a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0521989cef9cdeaa952036c62b3ad626ddfdb3272500e51cd98b42ce778d27a3->enter($__internal_0521989cef9cdeaa952036c62b3ad626ddfdb3272500e51cd98b42ce778d27a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_3ddbf9d63990bb99d17d03d6a6554e6b2856531158351659e2d7ff3263da2576->leave($__internal_3ddbf9d63990bb99d17d03d6a6554e6b2856531158351659e2d7ff3263da2576_prof);

        
        $__internal_0521989cef9cdeaa952036c62b3ad626ddfdb3272500e51cd98b42ce778d27a3->leave($__internal_0521989cef9cdeaa952036c62b3ad626ddfdb3272500e51cd98b42ce778d27a3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
