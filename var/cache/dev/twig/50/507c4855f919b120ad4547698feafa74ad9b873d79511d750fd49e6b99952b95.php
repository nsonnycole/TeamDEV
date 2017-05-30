<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_c9d6a6f0b30e3bf0a84e383458e5961cb6e2def60cfba610286895ad10204785 extends Twig_Template
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
        $__internal_d6f55aea7ed215e18e75a48c8f78ade396443c563f9c06b9512eeee6b9049a7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6f55aea7ed215e18e75a48c8f78ade396443c563f9c06b9512eeee6b9049a7c->enter($__internal_d6f55aea7ed215e18e75a48c8f78ade396443c563f9c06b9512eeee6b9049a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_95395a770a1b4a1f524bc5de4bd39fe03a190151702432c5b96e8a2304c75290 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95395a770a1b4a1f524bc5de4bd39fe03a190151702432c5b96e8a2304c75290->enter($__internal_95395a770a1b4a1f524bc5de4bd39fe03a190151702432c5b96e8a2304c75290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_d6f55aea7ed215e18e75a48c8f78ade396443c563f9c06b9512eeee6b9049a7c->leave($__internal_d6f55aea7ed215e18e75a48c8f78ade396443c563f9c06b9512eeee6b9049a7c_prof);

        
        $__internal_95395a770a1b4a1f524bc5de4bd39fe03a190151702432c5b96e8a2304c75290->leave($__internal_95395a770a1b4a1f524bc5de4bd39fe03a190151702432c5b96e8a2304c75290_prof);

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
