<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_14a006d0fbeaa5b231c57243d457681b1761d8108ab2bffd267cb55937002671 extends Twig_Template
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
        $__internal_b5724da1e834793cfe4e3b1a6cbaef36a7eb26d4e4f8168af77b57e34f38c75d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5724da1e834793cfe4e3b1a6cbaef36a7eb26d4e4f8168af77b57e34f38c75d->enter($__internal_b5724da1e834793cfe4e3b1a6cbaef36a7eb26d4e4f8168af77b57e34f38c75d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_47b2a13680c312977c89f30c9fd0a1bb422845db7177847a3c7c8d164ae768ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47b2a13680c312977c89f30c9fd0a1bb422845db7177847a3c7c8d164ae768ca->enter($__internal_47b2a13680c312977c89f30c9fd0a1bb422845db7177847a3c7c8d164ae768ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_b5724da1e834793cfe4e3b1a6cbaef36a7eb26d4e4f8168af77b57e34f38c75d->leave($__internal_b5724da1e834793cfe4e3b1a6cbaef36a7eb26d4e4f8168af77b57e34f38c75d_prof);

        
        $__internal_47b2a13680c312977c89f30c9fd0a1bb422845db7177847a3c7c8d164ae768ca->leave($__internal_47b2a13680c312977c89f30c9fd0a1bb422845db7177847a3c7c8d164ae768ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
