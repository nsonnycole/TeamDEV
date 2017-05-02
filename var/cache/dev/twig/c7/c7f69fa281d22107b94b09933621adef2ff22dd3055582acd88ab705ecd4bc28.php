<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_ff5bdd008e26ce8254ad8c89b28038739c45fcd99caba021d177ae8d34c4d253 extends Twig_Template
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
        $__internal_06a7ec0a43976cc72a6b8332e1c0d0fc7c48f369728147db49f10adadb17f00c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06a7ec0a43976cc72a6b8332e1c0d0fc7c48f369728147db49f10adadb17f00c->enter($__internal_06a7ec0a43976cc72a6b8332e1c0d0fc7c48f369728147db49f10adadb17f00c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_66671a010b75685e506d71bf7958c180c1a2aad897f67888c3154d77b8e47318 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66671a010b75685e506d71bf7958c180c1a2aad897f67888c3154d77b8e47318->enter($__internal_66671a010b75685e506d71bf7958c180c1a2aad897f67888c3154d77b8e47318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_06a7ec0a43976cc72a6b8332e1c0d0fc7c48f369728147db49f10adadb17f00c->leave($__internal_06a7ec0a43976cc72a6b8332e1c0d0fc7c48f369728147db49f10adadb17f00c_prof);

        
        $__internal_66671a010b75685e506d71bf7958c180c1a2aad897f67888c3154d77b8e47318->leave($__internal_66671a010b75685e506d71bf7958c180c1a2aad897f67888c3154d77b8e47318_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
