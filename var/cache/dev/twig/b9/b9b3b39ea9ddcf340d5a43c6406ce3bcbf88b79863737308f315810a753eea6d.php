<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_fe57c777a999d78c814327b35f450c63aea346a0ace73ee043f6e0cdd0048cd0 extends Twig_Template
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
        $__internal_b6bc2e051a3370cb819222c1a1f3622bb02cc3f47b53fdfb5b34031dd566ad65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6bc2e051a3370cb819222c1a1f3622bb02cc3f47b53fdfb5b34031dd566ad65->enter($__internal_b6bc2e051a3370cb819222c1a1f3622bb02cc3f47b53fdfb5b34031dd566ad65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_4b4fd6b6363724a30f1df3699cb0dfc9bea991d57859c01f9114280aa01865c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b4fd6b6363724a30f1df3699cb0dfc9bea991d57859c01f9114280aa01865c8->enter($__internal_4b4fd6b6363724a30f1df3699cb0dfc9bea991d57859c01f9114280aa01865c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_b6bc2e051a3370cb819222c1a1f3622bb02cc3f47b53fdfb5b34031dd566ad65->leave($__internal_b6bc2e051a3370cb819222c1a1f3622bb02cc3f47b53fdfb5b34031dd566ad65_prof);

        
        $__internal_4b4fd6b6363724a30f1df3699cb0dfc9bea991d57859c01f9114280aa01865c8->leave($__internal_4b4fd6b6363724a30f1df3699cb0dfc9bea991d57859c01f9114280aa01865c8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
