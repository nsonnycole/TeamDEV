<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_a059dd6c7565efcfcd86138c2d357c4db3a23d120e1756affb9439ecd8680336 extends Twig_Template
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
        $__internal_195857b8d8c07e82a2cf8262f31592e99ea3e9417ed989d9eaf2b9ef68df6f74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_195857b8d8c07e82a2cf8262f31592e99ea3e9417ed989d9eaf2b9ef68df6f74->enter($__internal_195857b8d8c07e82a2cf8262f31592e99ea3e9417ed989d9eaf2b9ef68df6f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_53dac5cb6eff7d22f0df27d22a8121d1dabc6657fc71582b9e970cfedff1d43f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53dac5cb6eff7d22f0df27d22a8121d1dabc6657fc71582b9e970cfedff1d43f->enter($__internal_53dac5cb6eff7d22f0df27d22a8121d1dabc6657fc71582b9e970cfedff1d43f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_195857b8d8c07e82a2cf8262f31592e99ea3e9417ed989d9eaf2b9ef68df6f74->leave($__internal_195857b8d8c07e82a2cf8262f31592e99ea3e9417ed989d9eaf2b9ef68df6f74_prof);

        
        $__internal_53dac5cb6eff7d22f0df27d22a8121d1dabc6657fc71582b9e970cfedff1d43f->leave($__internal_53dac5cb6eff7d22f0df27d22a8121d1dabc6657fc71582b9e970cfedff1d43f_prof);

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
