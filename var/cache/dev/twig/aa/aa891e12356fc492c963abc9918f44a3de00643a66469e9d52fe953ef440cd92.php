<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_848af50c781a25c0a47e876bcd7635f6184bfef2b9f380d1654fdb504f6d8c7f extends Twig_Template
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
        $__internal_1b2f0bee5b14a2b359b4e31a75b7649380253d3972e0bf15972d46dd44384618 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b2f0bee5b14a2b359b4e31a75b7649380253d3972e0bf15972d46dd44384618->enter($__internal_1b2f0bee5b14a2b359b4e31a75b7649380253d3972e0bf15972d46dd44384618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_a31339bec1b20470a9f07921fe5eb95d0afacddd9e0eb794535444d27ecc8a7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a31339bec1b20470a9f07921fe5eb95d0afacddd9e0eb794535444d27ecc8a7a->enter($__internal_a31339bec1b20470a9f07921fe5eb95d0afacddd9e0eb794535444d27ecc8a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_1b2f0bee5b14a2b359b4e31a75b7649380253d3972e0bf15972d46dd44384618->leave($__internal_1b2f0bee5b14a2b359b4e31a75b7649380253d3972e0bf15972d46dd44384618_prof);

        
        $__internal_a31339bec1b20470a9f07921fe5eb95d0afacddd9e0eb794535444d27ecc8a7a->leave($__internal_a31339bec1b20470a9f07921fe5eb95d0afacddd9e0eb794535444d27ecc8a7a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
