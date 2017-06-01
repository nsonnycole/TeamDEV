<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_4e6903e708711b67a8ad4d2e94f64ab047bfaf7f23de840520c8bb45d9bf7b95 extends Twig_Template
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
        $__internal_dfe9964a447ec39ea9726d77a0139264c55c15a90ccfc1f999ff444e8d498ad4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfe9964a447ec39ea9726d77a0139264c55c15a90ccfc1f999ff444e8d498ad4->enter($__internal_dfe9964a447ec39ea9726d77a0139264c55c15a90ccfc1f999ff444e8d498ad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_92f780b881914442713946c614b57a08b1621067cf112bd4ef1cf9d03dfc7093 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92f780b881914442713946c614b57a08b1621067cf112bd4ef1cf9d03dfc7093->enter($__internal_92f780b881914442713946c614b57a08b1621067cf112bd4ef1cf9d03dfc7093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_dfe9964a447ec39ea9726d77a0139264c55c15a90ccfc1f999ff444e8d498ad4->leave($__internal_dfe9964a447ec39ea9726d77a0139264c55c15a90ccfc1f999ff444e8d498ad4_prof);

        
        $__internal_92f780b881914442713946c614b57a08b1621067cf112bd4ef1cf9d03dfc7093->leave($__internal_92f780b881914442713946c614b57a08b1621067cf112bd4ef1cf9d03dfc7093_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
