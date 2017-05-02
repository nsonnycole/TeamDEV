<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_24029ca3c1f0a591b4f28cd67332e169eed891ad1a5d8607f68dedb9adb5b0a6 extends Twig_Template
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
        $__internal_185c4f1334e33da020fd78d4d8ed1262560be41b5d11bda965989b07092a096d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_185c4f1334e33da020fd78d4d8ed1262560be41b5d11bda965989b07092a096d->enter($__internal_185c4f1334e33da020fd78d4d8ed1262560be41b5d11bda965989b07092a096d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_3a8ea72370de971de79f4fa779a6aceddbe8e5915eed981c3e0c7d8ea370b680 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a8ea72370de971de79f4fa779a6aceddbe8e5915eed981c3e0c7d8ea370b680->enter($__internal_3a8ea72370de971de79f4fa779a6aceddbe8e5915eed981c3e0c7d8ea370b680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_185c4f1334e33da020fd78d4d8ed1262560be41b5d11bda965989b07092a096d->leave($__internal_185c4f1334e33da020fd78d4d8ed1262560be41b5d11bda965989b07092a096d_prof);

        
        $__internal_3a8ea72370de971de79f4fa779a6aceddbe8e5915eed981c3e0c7d8ea370b680->leave($__internal_3a8ea72370de971de79f4fa779a6aceddbe8e5915eed981c3e0c7d8ea370b680_prof);

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
", "@Framework/FormTable/button_row.html.php", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
