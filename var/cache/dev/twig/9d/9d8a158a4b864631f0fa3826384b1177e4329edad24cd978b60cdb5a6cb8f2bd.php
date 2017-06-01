<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_153c815fe28fc06848f3c864a1cc2e2f3dfe9caf6c768379f7d6c29b19739479 extends Twig_Template
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
        $__internal_7cbbbd6bff05ae5fa4e8a4bb8d62412e311e48c4e5e7391e3a02d9310401aa4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cbbbd6bff05ae5fa4e8a4bb8d62412e311e48c4e5e7391e3a02d9310401aa4b->enter($__internal_7cbbbd6bff05ae5fa4e8a4bb8d62412e311e48c4e5e7391e3a02d9310401aa4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_7431b59278c2a957d99f61f60ae1fe5611bb766ddfa88613998366b3ac36142d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7431b59278c2a957d99f61f60ae1fe5611bb766ddfa88613998366b3ac36142d->enter($__internal_7431b59278c2a957d99f61f60ae1fe5611bb766ddfa88613998366b3ac36142d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_7cbbbd6bff05ae5fa4e8a4bb8d62412e311e48c4e5e7391e3a02d9310401aa4b->leave($__internal_7cbbbd6bff05ae5fa4e8a4bb8d62412e311e48c4e5e7391e3a02d9310401aa4b_prof);

        
        $__internal_7431b59278c2a957d99f61f60ae1fe5611bb766ddfa88613998366b3ac36142d->leave($__internal_7431b59278c2a957d99f61f60ae1fe5611bb766ddfa88613998366b3ac36142d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
