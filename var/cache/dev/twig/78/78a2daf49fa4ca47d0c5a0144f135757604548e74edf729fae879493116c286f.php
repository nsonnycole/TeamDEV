<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_955cf3128cc269b69f9e95d68d49bccf8209a2960faeeb814a9a5c8e0447586a extends Twig_Template
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
        $__internal_96233758ded96b6eb701d5cfbe704fd3647a9d071197e2fb984c3c1cc966b33c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96233758ded96b6eb701d5cfbe704fd3647a9d071197e2fb984c3c1cc966b33c->enter($__internal_96233758ded96b6eb701d5cfbe704fd3647a9d071197e2fb984c3c1cc966b33c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_56e160d4539e0029dccff11c2889ea2ac59c610fead9bfc4d19d17839c850b21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56e160d4539e0029dccff11c2889ea2ac59c610fead9bfc4d19d17839c850b21->enter($__internal_56e160d4539e0029dccff11c2889ea2ac59c610fead9bfc4d19d17839c850b21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_96233758ded96b6eb701d5cfbe704fd3647a9d071197e2fb984c3c1cc966b33c->leave($__internal_96233758ded96b6eb701d5cfbe704fd3647a9d071197e2fb984c3c1cc966b33c_prof);

        
        $__internal_56e160d4539e0029dccff11c2889ea2ac59c610fead9bfc4d19d17839c850b21->leave($__internal_56e160d4539e0029dccff11c2889ea2ac59c610fead9bfc4d19d17839c850b21_prof);

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
", "@Framework/FormTable/form_row.html.php", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
