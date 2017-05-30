<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_6433c15b8cce8609775c1d6f40f542b10dd83c95a66ac90f302beae12654d522 extends Twig_Template
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
        $__internal_8a8813c6bb31d2278c3c5d85e09a7b23ce0f59aec0a4e3e5c22157ff5e0e39c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a8813c6bb31d2278c3c5d85e09a7b23ce0f59aec0a4e3e5c22157ff5e0e39c7->enter($__internal_8a8813c6bb31d2278c3c5d85e09a7b23ce0f59aec0a4e3e5c22157ff5e0e39c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_a81e24d62bc1d6e1a3b15a6ce8a31d892a07c428a7e5a50b5ec6e1f2fc696227 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a81e24d62bc1d6e1a3b15a6ce8a31d892a07c428a7e5a50b5ec6e1f2fc696227->enter($__internal_a81e24d62bc1d6e1a3b15a6ce8a31d892a07c428a7e5a50b5ec6e1f2fc696227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_8a8813c6bb31d2278c3c5d85e09a7b23ce0f59aec0a4e3e5c22157ff5e0e39c7->leave($__internal_8a8813c6bb31d2278c3c5d85e09a7b23ce0f59aec0a4e3e5c22157ff5e0e39c7_prof);

        
        $__internal_a81e24d62bc1d6e1a3b15a6ce8a31d892a07c428a7e5a50b5ec6e1f2fc696227->leave($__internal_a81e24d62bc1d6e1a3b15a6ce8a31d892a07c428a7e5a50b5ec6e1f2fc696227_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
