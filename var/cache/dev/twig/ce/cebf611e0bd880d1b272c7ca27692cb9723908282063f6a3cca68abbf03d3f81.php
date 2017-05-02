<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_baeabe35277f726cd3e67fba4bf7c3ee3ae1139384758c7b20375eb93403fa06 extends Twig_Template
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
        $__internal_316238b88b70f890b09dd6d6b940561f2aafc9f4847db6f076f79f6397670324 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_316238b88b70f890b09dd6d6b940561f2aafc9f4847db6f076f79f6397670324->enter($__internal_316238b88b70f890b09dd6d6b940561f2aafc9f4847db6f076f79f6397670324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_ba0a2878f5a4cc0e005689f73da71a9c42a0997a96902a3bf241545b48961106 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba0a2878f5a4cc0e005689f73da71a9c42a0997a96902a3bf241545b48961106->enter($__internal_ba0a2878f5a4cc0e005689f73da71a9c42a0997a96902a3bf241545b48961106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_316238b88b70f890b09dd6d6b940561f2aafc9f4847db6f076f79f6397670324->leave($__internal_316238b88b70f890b09dd6d6b940561f2aafc9f4847db6f076f79f6397670324_prof);

        
        $__internal_ba0a2878f5a4cc0e005689f73da71a9c42a0997a96902a3bf241545b48961106->leave($__internal_ba0a2878f5a4cc0e005689f73da71a9c42a0997a96902a3bf241545b48961106_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
