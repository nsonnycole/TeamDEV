<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_d38bc91b4f923b069f00cdde7c575e1c0514394ddf9d5c309a90058ee3f7bd38 extends Twig_Template
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
        $__internal_c502526fc4154e983cb34251e5cdb22d346b5dbfb98466a33c1ac1bf124416e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c502526fc4154e983cb34251e5cdb22d346b5dbfb98466a33c1ac1bf124416e2->enter($__internal_c502526fc4154e983cb34251e5cdb22d346b5dbfb98466a33c1ac1bf124416e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_d9d7102e67897f6c4dd2f1764f2830a4518111617feb421744f46bdee0d91db2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9d7102e67897f6c4dd2f1764f2830a4518111617feb421744f46bdee0d91db2->enter($__internal_d9d7102e67897f6c4dd2f1764f2830a4518111617feb421744f46bdee0d91db2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_c502526fc4154e983cb34251e5cdb22d346b5dbfb98466a33c1ac1bf124416e2->leave($__internal_c502526fc4154e983cb34251e5cdb22d346b5dbfb98466a33c1ac1bf124416e2_prof);

        
        $__internal_d9d7102e67897f6c4dd2f1764f2830a4518111617feb421744f46bdee0d91db2->leave($__internal_d9d7102e67897f6c4dd2f1764f2830a4518111617feb421744f46bdee0d91db2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
