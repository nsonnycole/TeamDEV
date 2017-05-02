<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_4516de6fdc493ddc75abc197ec8590595b02c1c637773faf96b1b05b3f936e98 extends Twig_Template
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
        $__internal_40e2300a8e7cab9ff342f2d624d6ee9be1e758dd31df5027d4e5bc42f50bd220 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40e2300a8e7cab9ff342f2d624d6ee9be1e758dd31df5027d4e5bc42f50bd220->enter($__internal_40e2300a8e7cab9ff342f2d624d6ee9be1e758dd31df5027d4e5bc42f50bd220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_bf21dbe1a8395ef9b438720123664a1992ca892aba8eb2501271ff05fc43a66a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf21dbe1a8395ef9b438720123664a1992ca892aba8eb2501271ff05fc43a66a->enter($__internal_bf21dbe1a8395ef9b438720123664a1992ca892aba8eb2501271ff05fc43a66a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_40e2300a8e7cab9ff342f2d624d6ee9be1e758dd31df5027d4e5bc42f50bd220->leave($__internal_40e2300a8e7cab9ff342f2d624d6ee9be1e758dd31df5027d4e5bc42f50bd220_prof);

        
        $__internal_bf21dbe1a8395ef9b438720123664a1992ca892aba8eb2501271ff05fc43a66a->leave($__internal_bf21dbe1a8395ef9b438720123664a1992ca892aba8eb2501271ff05fc43a66a_prof);

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
", "@Framework/FormTable/hidden_row.html.php", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
