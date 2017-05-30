<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_ef49dfddc4f436ae7634e9195fbf912e75728dbcaa7a630ef80bdb4c4413848d extends Twig_Template
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
        $__internal_b508e702a49d3533cbcaa6604664bebe119dcb1b45f368cc6fad8331ec8d4fd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b508e702a49d3533cbcaa6604664bebe119dcb1b45f368cc6fad8331ec8d4fd2->enter($__internal_b508e702a49d3533cbcaa6604664bebe119dcb1b45f368cc6fad8331ec8d4fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_1f1ba1cdcfea79bc8a4cb5c250cb44fcb49d9164a504e7afeadad80904593ba7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f1ba1cdcfea79bc8a4cb5c250cb44fcb49d9164a504e7afeadad80904593ba7->enter($__internal_1f1ba1cdcfea79bc8a4cb5c250cb44fcb49d9164a504e7afeadad80904593ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_b508e702a49d3533cbcaa6604664bebe119dcb1b45f368cc6fad8331ec8d4fd2->leave($__internal_b508e702a49d3533cbcaa6604664bebe119dcb1b45f368cc6fad8331ec8d4fd2_prof);

        
        $__internal_1f1ba1cdcfea79bc8a4cb5c250cb44fcb49d9164a504e7afeadad80904593ba7->leave($__internal_1f1ba1cdcfea79bc8a4cb5c250cb44fcb49d9164a504e7afeadad80904593ba7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
