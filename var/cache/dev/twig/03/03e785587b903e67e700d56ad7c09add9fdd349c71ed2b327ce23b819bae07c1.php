<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_677232ad057916ee2373388c5810a62d1d0809977a7517cbe582288ad843cf12 extends Twig_Template
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
        $__internal_838a7b0e4215bfc984622a1d63c01922547d42a9132c66260b0f3ccb28cd1e96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_838a7b0e4215bfc984622a1d63c01922547d42a9132c66260b0f3ccb28cd1e96->enter($__internal_838a7b0e4215bfc984622a1d63c01922547d42a9132c66260b0f3ccb28cd1e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_90f740e0bd62c7180642ee0d374192f6f736b1430541dc82a5128213756e1cd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90f740e0bd62c7180642ee0d374192f6f736b1430541dc82a5128213756e1cd8->enter($__internal_90f740e0bd62c7180642ee0d374192f6f736b1430541dc82a5128213756e1cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_838a7b0e4215bfc984622a1d63c01922547d42a9132c66260b0f3ccb28cd1e96->leave($__internal_838a7b0e4215bfc984622a1d63c01922547d42a9132c66260b0f3ccb28cd1e96_prof);

        
        $__internal_90f740e0bd62c7180642ee0d374192f6f736b1430541dc82a5128213756e1cd8->leave($__internal_90f740e0bd62c7180642ee0d374192f6f736b1430541dc82a5128213756e1cd8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
