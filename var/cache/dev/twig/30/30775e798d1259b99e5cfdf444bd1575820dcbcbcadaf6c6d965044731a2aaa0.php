<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_de5442829487e6335c5ca201780ddcd5cd2f42306f6e0c259591c4a1b26af571 extends Twig_Template
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
        $__internal_4592a28ad6975c4862ce7027de1b4e1a264aea1468cfee0e7a70bb7a12ade878 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4592a28ad6975c4862ce7027de1b4e1a264aea1468cfee0e7a70bb7a12ade878->enter($__internal_4592a28ad6975c4862ce7027de1b4e1a264aea1468cfee0e7a70bb7a12ade878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_40d699bf8640a07988c4d00fc25aea6ea4fa348d213b8bc241ddedb0f1aecf38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40d699bf8640a07988c4d00fc25aea6ea4fa348d213b8bc241ddedb0f1aecf38->enter($__internal_40d699bf8640a07988c4d00fc25aea6ea4fa348d213b8bc241ddedb0f1aecf38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_4592a28ad6975c4862ce7027de1b4e1a264aea1468cfee0e7a70bb7a12ade878->leave($__internal_4592a28ad6975c4862ce7027de1b4e1a264aea1468cfee0e7a70bb7a12ade878_prof);

        
        $__internal_40d699bf8640a07988c4d00fc25aea6ea4fa348d213b8bc241ddedb0f1aecf38->leave($__internal_40d699bf8640a07988c4d00fc25aea6ea4fa348d213b8bc241ddedb0f1aecf38_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
