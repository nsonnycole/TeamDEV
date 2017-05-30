<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_94dc0279a6d8e22bf237b0582aa864b73e2a8daa85e8f9a9df988553033f63d7 extends Twig_Template
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
        $__internal_f8c6b33d3f69eb1e5c3f49f7acfff51e0954e52088baed177153f6b6c0ae027a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8c6b33d3f69eb1e5c3f49f7acfff51e0954e52088baed177153f6b6c0ae027a->enter($__internal_f8c6b33d3f69eb1e5c3f49f7acfff51e0954e52088baed177153f6b6c0ae027a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_9a3e34f7a6a82ce85be20228fa984768f6840913d229a18d443824d205fb6ee4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a3e34f7a6a82ce85be20228fa984768f6840913d229a18d443824d205fb6ee4->enter($__internal_9a3e34f7a6a82ce85be20228fa984768f6840913d229a18d443824d205fb6ee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_f8c6b33d3f69eb1e5c3f49f7acfff51e0954e52088baed177153f6b6c0ae027a->leave($__internal_f8c6b33d3f69eb1e5c3f49f7acfff51e0954e52088baed177153f6b6c0ae027a_prof);

        
        $__internal_9a3e34f7a6a82ce85be20228fa984768f6840913d229a18d443824d205fb6ee4->leave($__internal_9a3e34f7a6a82ce85be20228fa984768f6840913d229a18d443824d205fb6ee4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
