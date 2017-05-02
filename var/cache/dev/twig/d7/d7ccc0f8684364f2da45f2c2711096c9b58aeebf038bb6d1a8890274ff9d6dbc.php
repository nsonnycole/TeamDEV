<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_7c50f77bafce09db1453a35eea9fc09e593f1ee694a7b18178f4170895f0d003 extends Twig_Template
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
        $__internal_d54b3758a708d64a54b85521da62a69df1049ef93fa8eb6661ea401afa1c43f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d54b3758a708d64a54b85521da62a69df1049ef93fa8eb6661ea401afa1c43f6->enter($__internal_d54b3758a708d64a54b85521da62a69df1049ef93fa8eb6661ea401afa1c43f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_f088fb41dc71274907fe2cd16a67a7676aac67a70d3411cd2d27a4c0364c37c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f088fb41dc71274907fe2cd16a67a7676aac67a70d3411cd2d27a4c0364c37c6->enter($__internal_f088fb41dc71274907fe2cd16a67a7676aac67a70d3411cd2d27a4c0364c37c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_d54b3758a708d64a54b85521da62a69df1049ef93fa8eb6661ea401afa1c43f6->leave($__internal_d54b3758a708d64a54b85521da62a69df1049ef93fa8eb6661ea401afa1c43f6_prof);

        
        $__internal_f088fb41dc71274907fe2cd16a67a7676aac67a70d3411cd2d27a4c0364c37c6->leave($__internal_f088fb41dc71274907fe2cd16a67a7676aac67a70d3411cd2d27a4c0364c37c6_prof);

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
", "@Framework/Form/url_widget.html.php", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
