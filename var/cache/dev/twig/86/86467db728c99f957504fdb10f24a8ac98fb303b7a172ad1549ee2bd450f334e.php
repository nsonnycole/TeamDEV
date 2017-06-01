<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_4c396181e18beb60a25b2885ea40272cd6dd69564a66da4ac4c160599f38b4e2 extends Twig_Template
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
        $__internal_38d5e7da92e0143991ddbe27bf3e90db25db37fa9c7c939f8a69df8f01957ae1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38d5e7da92e0143991ddbe27bf3e90db25db37fa9c7c939f8a69df8f01957ae1->enter($__internal_38d5e7da92e0143991ddbe27bf3e90db25db37fa9c7c939f8a69df8f01957ae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_9c6b549219600ed35d59d5749b490b3af9f262c1ab8d5576c58e218ac9662252 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c6b549219600ed35d59d5749b490b3af9f262c1ab8d5576c58e218ac9662252->enter($__internal_9c6b549219600ed35d59d5749b490b3af9f262c1ab8d5576c58e218ac9662252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_38d5e7da92e0143991ddbe27bf3e90db25db37fa9c7c939f8a69df8f01957ae1->leave($__internal_38d5e7da92e0143991ddbe27bf3e90db25db37fa9c7c939f8a69df8f01957ae1_prof);

        
        $__internal_9c6b549219600ed35d59d5749b490b3af9f262c1ab8d5576c58e218ac9662252->leave($__internal_9c6b549219600ed35d59d5749b490b3af9f262c1ab8d5576c58e218ac9662252_prof);

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
", "@Framework/Form/form_enctype.html.php", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
