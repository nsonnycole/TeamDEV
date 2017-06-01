<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_5212e7706befe2d651e7185edf680254c6b5025757efb3fe46d871ba0aebbf04 extends Twig_Template
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
        $__internal_91bc8017d4cad2cce72d6527d95d5f30ba5c8d80b21f7c48870350c3d53a6a7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91bc8017d4cad2cce72d6527d95d5f30ba5c8d80b21f7c48870350c3d53a6a7b->enter($__internal_91bc8017d4cad2cce72d6527d95d5f30ba5c8d80b21f7c48870350c3d53a6a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_744c2de39d4a291bf86a78fb9e22e8a8451c3ffccbee46f691a71ea2d3cfa26f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_744c2de39d4a291bf86a78fb9e22e8a8451c3ffccbee46f691a71ea2d3cfa26f->enter($__internal_744c2de39d4a291bf86a78fb9e22e8a8451c3ffccbee46f691a71ea2d3cfa26f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_91bc8017d4cad2cce72d6527d95d5f30ba5c8d80b21f7c48870350c3d53a6a7b->leave($__internal_91bc8017d4cad2cce72d6527d95d5f30ba5c8d80b21f7c48870350c3d53a6a7b_prof);

        
        $__internal_744c2de39d4a291bf86a78fb9e22e8a8451c3ffccbee46f691a71ea2d3cfa26f->leave($__internal_744c2de39d4a291bf86a78fb9e22e8a8451c3ffccbee46f691a71ea2d3cfa26f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
