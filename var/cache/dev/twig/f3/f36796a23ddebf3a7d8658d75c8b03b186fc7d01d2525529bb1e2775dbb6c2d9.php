<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_94f384cd7e8780a99094d0e03d573e65b523e345f5bbe96d55083e5e15db193f extends Twig_Template
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
        $__internal_99e5ff330dbd022c47a0f432f63c492a84711a10323a920810719f62ab111405 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99e5ff330dbd022c47a0f432f63c492a84711a10323a920810719f62ab111405->enter($__internal_99e5ff330dbd022c47a0f432f63c492a84711a10323a920810719f62ab111405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_c9109adfeb09dcb7c92c4948d7157cb245e24f6e33b679c0b904055b1a1543c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9109adfeb09dcb7c92c4948d7157cb245e24f6e33b679c0b904055b1a1543c2->enter($__internal_c9109adfeb09dcb7c92c4948d7157cb245e24f6e33b679c0b904055b1a1543c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_99e5ff330dbd022c47a0f432f63c492a84711a10323a920810719f62ab111405->leave($__internal_99e5ff330dbd022c47a0f432f63c492a84711a10323a920810719f62ab111405_prof);

        
        $__internal_c9109adfeb09dcb7c92c4948d7157cb245e24f6e33b679c0b904055b1a1543c2->leave($__internal_c9109adfeb09dcb7c92c4948d7157cb245e24f6e33b679c0b904055b1a1543c2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
