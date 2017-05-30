<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_ad958e6b25f95e8e22d70cb7752af02f260df61969197f16ddc510b987aca6e4 extends Twig_Template
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
        $__internal_19351ba20079b2fbeaedd554529491b5372a06263ba83280b552fa8543ff0976 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19351ba20079b2fbeaedd554529491b5372a06263ba83280b552fa8543ff0976->enter($__internal_19351ba20079b2fbeaedd554529491b5372a06263ba83280b552fa8543ff0976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_e9a71f71c7fdf29fb6a68042b23d10ea400d38cc0b87bcdc5ab630beac994a53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9a71f71c7fdf29fb6a68042b23d10ea400d38cc0b87bcdc5ab630beac994a53->enter($__internal_e9a71f71c7fdf29fb6a68042b23d10ea400d38cc0b87bcdc5ab630beac994a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_19351ba20079b2fbeaedd554529491b5372a06263ba83280b552fa8543ff0976->leave($__internal_19351ba20079b2fbeaedd554529491b5372a06263ba83280b552fa8543ff0976_prof);

        
        $__internal_e9a71f71c7fdf29fb6a68042b23d10ea400d38cc0b87bcdc5ab630beac994a53->leave($__internal_e9a71f71c7fdf29fb6a68042b23d10ea400d38cc0b87bcdc5ab630beac994a53_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
