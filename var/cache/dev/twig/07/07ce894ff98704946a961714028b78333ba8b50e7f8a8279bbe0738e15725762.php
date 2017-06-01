<?php

/* FOSUserBundle:Group:list_content.html.twig */
class __TwigTemplate_bfca665191f2365d4f3470e06240474621b7c408be6e2e9ffd8f600a03f9545e extends Twig_Template
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
        $__internal_312ae6119ae67badb2281cb09beb99531c95e0d5bfbd4dff15961347f03b2150 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_312ae6119ae67badb2281cb09beb99531c95e0d5bfbd4dff15961347f03b2150->enter($__internal_312ae6119ae67badb2281cb09beb99531c95e0d5bfbd4dff15961347f03b2150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        $__internal_949106d2ad4e6fdc3107a66d5d006dc1ee26fcc4d4580de95c722975cc92b586 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_949106d2ad4e6fdc3107a66d5d006dc1ee26fcc4d4580de95c722975cc92b586->enter($__internal_949106d2ad4e6fdc3107a66d5d006dc1ee26fcc4d4580de95c722975cc92b586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_list\">
    <ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 4
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_show", array("groupName" => $this->getAttribute($context["group"], "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </ul>
</div>
";
        
        $__internal_312ae6119ae67badb2281cb09beb99531c95e0d5bfbd4dff15961347f03b2150->leave($__internal_312ae6119ae67badb2281cb09beb99531c95e0d5bfbd4dff15961347f03b2150_prof);

        
        $__internal_949106d2ad4e6fdc3107a66d5d006dc1ee26fcc4d4580de95c722975cc92b586->leave($__internal_949106d2ad4e6fdc3107a66d5d006dc1ee26fcc4d4580de95c722975cc92b586_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  33 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fos_user_group_list\">
    <ul>
    {% for group in groups %}
        <li><a href=\"{{ path('fos_user_group_show', {'groupName': group.getName()} ) }}\">{{ group.getName() }}</a></li>
    {% endfor %}
    </ul>
</div>
", "FOSUserBundle:Group:list_content.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/FOSUserBundle/views/Group/list_content.html.twig");
    }
}
