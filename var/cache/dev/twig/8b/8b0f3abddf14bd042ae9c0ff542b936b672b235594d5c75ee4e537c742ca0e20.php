<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_d10f188e2dde54f62a79af6fc6366afe2c6e0f8874169b2f3cf9e81da2e6f3c9 extends Twig_Template
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
        $__internal_357cacde1709f532687f0a58587d685e00d794f8e817e9fe35fa2faa08a14f52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_357cacde1709f532687f0a58587d685e00d794f8e817e9fe35fa2faa08a14f52->enter($__internal_357cacde1709f532687f0a58587d685e00d794f8e817e9fe35fa2faa08a14f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_0e4174450a57b5b79241844bdd05b34169464d11359fa088eb9adfe27f85181a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e4174450a57b5b79241844bdd05b34169464d11359fa088eb9adfe27f85181a->enter($__internal_0e4174450a57b5b79241844bdd05b34169464d11359fa088eb9adfe27f85181a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_357cacde1709f532687f0a58587d685e00d794f8e817e9fe35fa2faa08a14f52->leave($__internal_357cacde1709f532687f0a58587d685e00d794f8e817e9fe35fa2faa08a14f52_prof);

        
        $__internal_0e4174450a57b5b79241844bdd05b34169464d11359fa088eb9adfe27f85181a->leave($__internal_0e4174450a57b5b79241844bdd05b34169464d11359fa088eb9adfe27f85181a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
