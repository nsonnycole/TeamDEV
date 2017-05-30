<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_4da0d465ef7b09819e0199d9198ddf28ba896e604979d7afe237542da8914c85 extends Twig_Template
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
        $__internal_032e5ce4a71a52d8c86b0521429cce81b4103c48a19d653b8ff71ee11a92c046 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_032e5ce4a71a52d8c86b0521429cce81b4103c48a19d653b8ff71ee11a92c046->enter($__internal_032e5ce4a71a52d8c86b0521429cce81b4103c48a19d653b8ff71ee11a92c046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_dcda428119719033050b1b52e4b2691fc0aedcb1eb528eb86b701829efbc5af1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcda428119719033050b1b52e4b2691fc0aedcb1eb528eb86b701829efbc5af1->enter($__internal_dcda428119719033050b1b52e4b2691fc0aedcb1eb528eb86b701829efbc5af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_032e5ce4a71a52d8c86b0521429cce81b4103c48a19d653b8ff71ee11a92c046->leave($__internal_032e5ce4a71a52d8c86b0521429cce81b4103c48a19d653b8ff71ee11a92c046_prof);

        
        $__internal_dcda428119719033050b1b52e4b2691fc0aedcb1eb528eb86b701829efbc5af1->leave($__internal_dcda428119719033050b1b52e4b2691fc0aedcb1eb528eb86b701829efbc5af1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
