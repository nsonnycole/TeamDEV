<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_a57e3beeace61d5ef344e7724bd92c52149f3194f5fd6da2181ecb0f563dd635 extends Twig_Template
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
        $__internal_0b3a6796dec22712d636d248e8a3defa8878ed4efd8c2a35bbbbcb5a8a694ef9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b3a6796dec22712d636d248e8a3defa8878ed4efd8c2a35bbbbcb5a8a694ef9->enter($__internal_0b3a6796dec22712d636d248e8a3defa8878ed4efd8c2a35bbbbcb5a8a694ef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_f4cb5e839cba177d1ec3b4e3869e3ce43b12890df4cf7e5c95191b6f327d789d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4cb5e839cba177d1ec3b4e3869e3ce43b12890df4cf7e5c95191b6f327d789d->enter($__internal_f4cb5e839cba177d1ec3b4e3869e3ce43b12890df4cf7e5c95191b6f327d789d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_0b3a6796dec22712d636d248e8a3defa8878ed4efd8c2a35bbbbcb5a8a694ef9->leave($__internal_0b3a6796dec22712d636d248e8a3defa8878ed4efd8c2a35bbbbcb5a8a694ef9_prof);

        
        $__internal_f4cb5e839cba177d1ec3b4e3869e3ce43b12890df4cf7e5c95191b6f327d789d->leave($__internal_f4cb5e839cba177d1ec3b4e3869e3ce43b12890df4cf7e5c95191b6f327d789d_prof);

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
