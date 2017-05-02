<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_40d9fe17d76c3dd39dd8aa4ed421652b4955e090837284697974930280483f8f extends Twig_Template
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
        $__internal_febf0998de823c4cedb6c2c10843c2cbe157927fda7bf1898505ed21ef2dc8ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_febf0998de823c4cedb6c2c10843c2cbe157927fda7bf1898505ed21ef2dc8ff->enter($__internal_febf0998de823c4cedb6c2c10843c2cbe157927fda7bf1898505ed21ef2dc8ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_6b7d4ee7f657e53d05fdfaf1c0d13170d7db81982e28c23164fa52f7e84854af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b7d4ee7f657e53d05fdfaf1c0d13170d7db81982e28c23164fa52f7e84854af->enter($__internal_6b7d4ee7f657e53d05fdfaf1c0d13170d7db81982e28c23164fa52f7e84854af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_febf0998de823c4cedb6c2c10843c2cbe157927fda7bf1898505ed21ef2dc8ff->leave($__internal_febf0998de823c4cedb6c2c10843c2cbe157927fda7bf1898505ed21ef2dc8ff_prof);

        
        $__internal_6b7d4ee7f657e53d05fdfaf1c0d13170d7db81982e28c23164fa52f7e84854af->leave($__internal_6b7d4ee7f657e53d05fdfaf1c0d13170d7db81982e28c23164fa52f7e84854af_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
