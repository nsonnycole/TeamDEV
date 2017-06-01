<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_534c85321955a941009a647673ec2310fcaa0ac74bf74b29cb3f5b4aaa7899b3 extends Twig_Template
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
        $__internal_d1b6bc03e654202f3fe44e4002003f81cf2b0449b426cbc7891489075bb6c49f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1b6bc03e654202f3fe44e4002003f81cf2b0449b426cbc7891489075bb6c49f->enter($__internal_d1b6bc03e654202f3fe44e4002003f81cf2b0449b426cbc7891489075bb6c49f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_8efee34c50b1834f97cea3c1660347db243ab18b7cc81b4285f2852b04305e53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8efee34c50b1834f97cea3c1660347db243ab18b7cc81b4285f2852b04305e53->enter($__internal_8efee34c50b1834f97cea3c1660347db243ab18b7cc81b4285f2852b04305e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_d1b6bc03e654202f3fe44e4002003f81cf2b0449b426cbc7891489075bb6c49f->leave($__internal_d1b6bc03e654202f3fe44e4002003f81cf2b0449b426cbc7891489075bb6c49f_prof);

        
        $__internal_8efee34c50b1834f97cea3c1660347db243ab18b7cc81b4285f2852b04305e53->leave($__internal_8efee34c50b1834f97cea3c1660347db243ab18b7cc81b4285f2852b04305e53_prof);

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
