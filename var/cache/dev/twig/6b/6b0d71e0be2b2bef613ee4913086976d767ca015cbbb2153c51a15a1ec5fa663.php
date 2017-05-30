<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_2e98fe9f5da46ac6e7f8af6de6e0aa7e0565143ddd0a8d2273f58ea244384af1 extends Twig_Template
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
        $__internal_d0c177121cd5bf582ce53a0c9087216dceb41e16eb789d8f6994fc3d2dbce90a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0c177121cd5bf582ce53a0c9087216dceb41e16eb789d8f6994fc3d2dbce90a->enter($__internal_d0c177121cd5bf582ce53a0c9087216dceb41e16eb789d8f6994fc3d2dbce90a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_e6669fe88bd74cb14dae25b984f5dfbf7c422612f5ed27b9253917603a0b607b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6669fe88bd74cb14dae25b984f5dfbf7c422612f5ed27b9253917603a0b607b->enter($__internal_e6669fe88bd74cb14dae25b984f5dfbf7c422612f5ed27b9253917603a0b607b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_d0c177121cd5bf582ce53a0c9087216dceb41e16eb789d8f6994fc3d2dbce90a->leave($__internal_d0c177121cd5bf582ce53a0c9087216dceb41e16eb789d8f6994fc3d2dbce90a_prof);

        
        $__internal_e6669fe88bd74cb14dae25b984f5dfbf7c422612f5ed27b9253917603a0b607b->leave($__internal_e6669fe88bd74cb14dae25b984f5dfbf7c422612f5ed27b9253917603a0b607b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
