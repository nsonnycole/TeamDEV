<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_470af82c395534327fa4192cf28e5ca126e59715193e849734abd49f87d02b2d extends Twig_Template
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
        $__internal_3787ddc41c784cbea624e9808833536007398cf6c2a429b0a8186bebeecf91b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3787ddc41c784cbea624e9808833536007398cf6c2a429b0a8186bebeecf91b1->enter($__internal_3787ddc41c784cbea624e9808833536007398cf6c2a429b0a8186bebeecf91b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_ecbed4a5293144e1c84c0304d197eb850a01b98ea777dfe9de05752558c7b88b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecbed4a5293144e1c84c0304d197eb850a01b98ea777dfe9de05752558c7b88b->enter($__internal_ecbed4a5293144e1c84c0304d197eb850a01b98ea777dfe9de05752558c7b88b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_3787ddc41c784cbea624e9808833536007398cf6c2a429b0a8186bebeecf91b1->leave($__internal_3787ddc41c784cbea624e9808833536007398cf6c2a429b0a8186bebeecf91b1_prof);

        
        $__internal_ecbed4a5293144e1c84c0304d197eb850a01b98ea777dfe9de05752558c7b88b->leave($__internal_ecbed4a5293144e1c84c0304d197eb850a01b98ea777dfe9de05752558c7b88b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}