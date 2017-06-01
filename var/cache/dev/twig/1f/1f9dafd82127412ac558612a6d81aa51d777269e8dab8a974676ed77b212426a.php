<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_5a219b1fbc44ae218143b685178e92b0d53a5c1f31270e004b5258ac088b3054 extends Twig_Template
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
        $__internal_892ffbeedde79204aff97584affb884e09290d64e630981b5dd733351b081f30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_892ffbeedde79204aff97584affb884e09290d64e630981b5dd733351b081f30->enter($__internal_892ffbeedde79204aff97584affb884e09290d64e630981b5dd733351b081f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_415e40ecc67e32d02db721869e2ad99781b420a14ce9ff65ae5a0bb7746f4654 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_415e40ecc67e32d02db721869e2ad99781b420a14ce9ff65ae5a0bb7746f4654->enter($__internal_415e40ecc67e32d02db721869e2ad99781b420a14ce9ff65ae5a0bb7746f4654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_892ffbeedde79204aff97584affb884e09290d64e630981b5dd733351b081f30->leave($__internal_892ffbeedde79204aff97584affb884e09290d64e630981b5dd733351b081f30_prof);

        
        $__internal_415e40ecc67e32d02db721869e2ad99781b420a14ce9ff65ae5a0bb7746f4654->leave($__internal_415e40ecc67e32d02db721869e2ad99781b420a14ce9ff65ae5a0bb7746f4654_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
