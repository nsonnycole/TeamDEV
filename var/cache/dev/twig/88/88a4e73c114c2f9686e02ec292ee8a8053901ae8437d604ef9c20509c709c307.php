<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_433e2ea3e52165e8df8dee4526a176f3d2a615947455ef007141e68fd142ec61 extends Twig_Template
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
        $__internal_acf16a6179120adf6e233b11b64490d566bfd8fb7043948ca2266d7c2d97bb9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acf16a6179120adf6e233b11b64490d566bfd8fb7043948ca2266d7c2d97bb9e->enter($__internal_acf16a6179120adf6e233b11b64490d566bfd8fb7043948ca2266d7c2d97bb9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_557223450d57c5e371c349059a7b633bc816ace6fe8a3ec1bed49fdd86ba6d8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_557223450d57c5e371c349059a7b633bc816ace6fe8a3ec1bed49fdd86ba6d8e->enter($__internal_557223450d57c5e371c349059a7b633bc816ace6fe8a3ec1bed49fdd86ba6d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_acf16a6179120adf6e233b11b64490d566bfd8fb7043948ca2266d7c2d97bb9e->leave($__internal_acf16a6179120adf6e233b11b64490d566bfd8fb7043948ca2266d7c2d97bb9e_prof);

        
        $__internal_557223450d57c5e371c349059a7b633bc816ace6fe8a3ec1bed49fdd86ba6d8e->leave($__internal_557223450d57c5e371c349059a7b633bc816ace6fe8a3ec1bed49fdd86ba6d8e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
