<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_4339d000dc752b49fcc130e86b78e8979a85d0ebf7e701bdaeec31a3c287ad06 extends Twig_Template
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
        $__internal_ae1cf4c1cc3f89c06d05353b3150a3ccdf789502f6f04adf812e66e341d8dfa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae1cf4c1cc3f89c06d05353b3150a3ccdf789502f6f04adf812e66e341d8dfa9->enter($__internal_ae1cf4c1cc3f89c06d05353b3150a3ccdf789502f6f04adf812e66e341d8dfa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_95bd4da3522f5f375b5b3f6f7c9399112b628b06c431d24488aa002f2fd98f7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95bd4da3522f5f375b5b3f6f7c9399112b628b06c431d24488aa002f2fd98f7c->enter($__internal_95bd4da3522f5f375b5b3f6f7c9399112b628b06c431d24488aa002f2fd98f7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_ae1cf4c1cc3f89c06d05353b3150a3ccdf789502f6f04adf812e66e341d8dfa9->leave($__internal_ae1cf4c1cc3f89c06d05353b3150a3ccdf789502f6f04adf812e66e341d8dfa9_prof);

        
        $__internal_95bd4da3522f5f375b5b3f6f7c9399112b628b06c431d24488aa002f2fd98f7c->leave($__internal_95bd4da3522f5f375b5b3f6f7c9399112b628b06c431d24488aa002f2fd98f7c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
