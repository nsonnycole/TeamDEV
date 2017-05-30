<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_bdc4a107988af3ffb1294e73c8b9d975e7e84f4fc2c4dd87d84f62dbabf6a5af extends Twig_Template
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
        $__internal_a33b2e568698ed93b78a3eca134e4563f1f67aae0855b072b33314a405b3c68b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a33b2e568698ed93b78a3eca134e4563f1f67aae0855b072b33314a405b3c68b->enter($__internal_a33b2e568698ed93b78a3eca134e4563f1f67aae0855b072b33314a405b3c68b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_84ae3799f5e20061a6c778f72788b0f0159886a5311eed7206f2263ddbb24037 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84ae3799f5e20061a6c778f72788b0f0159886a5311eed7206f2263ddbb24037->enter($__internal_84ae3799f5e20061a6c778f72788b0f0159886a5311eed7206f2263ddbb24037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_a33b2e568698ed93b78a3eca134e4563f1f67aae0855b072b33314a405b3c68b->leave($__internal_a33b2e568698ed93b78a3eca134e4563f1f67aae0855b072b33314a405b3c68b_prof);

        
        $__internal_84ae3799f5e20061a6c778f72788b0f0159886a5311eed7206f2263ddbb24037->leave($__internal_84ae3799f5e20061a6c778f72788b0f0159886a5311eed7206f2263ddbb24037_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
