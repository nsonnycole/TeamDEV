<?php

/* EasyAdminBundle:default:edit.html.twig */
class __TwigTemplate_98ea4e30d6490f58d3ac8de575b3876a533f5993e471a8a5d5daa3778d203d7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'entity_form' => array($this, 'block_entity_form'),
            'delete_form' => array($this, 'block_delete_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 8
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "EasyAdminBundle:default:edit.html.twig", 8);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca9fcb85b5c664a8608091a943531bc27e2af0ebdcdb4a79396c658abee0bff1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca9fcb85b5c664a8608091a943531bc27e2af0ebdcdb4a79396c658abee0bff1->enter($__internal_ca9fcb85b5c664a8608091a943531bc27e2af0ebdcdb4a79396c658abee0bff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:edit.html.twig"));

        $__internal_8a7ed40822144b794afffcf4b81400214ad3d0f5ed4ba40420916168c7d7bb8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a7ed40822144b794afffcf4b81400214ad3d0f5ed4ba40420916168c7d7bb8f->enter($__internal_8a7ed40822144b794afffcf4b81400214ad3d0f5ed4ba40420916168c7d7bb8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:edit.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["_entity_id"] = $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "primary_key_field_name", array()));
        // line 5
        $context["__internal_bd8c74a5021f0a28c46693142624c0d3a107e5708a530b04af12e39f77a78886"] = $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 6
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 5
(isset($context["__internal_bd8c74a5021f0a28c46693142624c0d3a107e5708a530b04af12e39f77a78886"]) ? $context["__internal_bd8c74a5021f0a28c46693142624c0d3a107e5708a530b04af12e39f77a78886"] : $this->getContext($context, "__internal_bd8c74a5021f0a28c46693142624c0d3a107e5708a530b04af12e39f77a78886"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 6
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 5
(isset($context["__internal_bd8c74a5021f0a28c46693142624c0d3a107e5708a530b04af12e39f77a78886"]) ? $context["__internal_bd8c74a5021f0a28c46693142624c0d3a107e5708a530b04af12e39f77a78886"] : $this->getContext($context, "__internal_bd8c74a5021f0a28c46693142624c0d3a107e5708a530b04af12e39f77a78886"))), "%entity_id%" =>         // line 6
(isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id")));
        // line 8
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca9fcb85b5c664a8608091a943531bc27e2af0ebdcdb4a79396c658abee0bff1->leave($__internal_ca9fcb85b5c664a8608091a943531bc27e2af0ebdcdb4a79396c658abee0bff1_prof);

        
        $__internal_8a7ed40822144b794afffcf4b81400214ad3d0f5ed4ba40420916168c7d7bb8f->leave($__internal_8a7ed40822144b794afffcf4b81400214ad3d0f5ed4ba40420916168c7d7bb8f_prof);

    }

    // line 10
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_0ec186cc80b2dd2e29805d47a409219747a117ebc9fcb9ed6fbccfda74df2ecb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ec186cc80b2dd2e29805d47a409219747a117ebc9fcb9ed6fbccfda74df2ecb->enter($__internal_0ec186cc80b2dd2e29805d47a409219747a117ebc9fcb9ed6fbccfda74df2ecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_2e1af46ad6970d405c412c6b6a489d3da8417c33ba49bc9d79234fe829dbadaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e1af46ad6970d405c412c6b6a489d3da8417c33ba49bc9d79234fe829dbadaf->enter($__internal_2e1af46ad6970d405c412c6b6a489d3da8417c33ba49bc9d79234fe829dbadaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-edit-" . $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())) . "-") . (isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_2e1af46ad6970d405c412c6b6a489d3da8417c33ba49bc9d79234fe829dbadaf->leave($__internal_2e1af46ad6970d405c412c6b6a489d3da8417c33ba49bc9d79234fe829dbadaf_prof);

        
        $__internal_0ec186cc80b2dd2e29805d47a409219747a117ebc9fcb9ed6fbccfda74df2ecb->leave($__internal_0ec186cc80b2dd2e29805d47a409219747a117ebc9fcb9ed6fbccfda74df2ecb_prof);

    }

    // line 11
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_04ac1621b3b4638a08eb368b248c46433634dc304cb1a184e6c3e887ee71f34d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04ac1621b3b4638a08eb368b248c46433634dc304cb1a184e6c3e887ee71f34d->enter($__internal_04ac1621b3b4638a08eb368b248c46433634dc304cb1a184e6c3e887ee71f34d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_49f6d4242b0ebd50791ddf28a2cffdf7c671f7f6262e942dc6710f54a8cf6a4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49f6d4242b0ebd50791ddf28a2cffdf7c671f7f6262e942dc6710f54a8cf6a4f->enter($__internal_49f6d4242b0ebd50791ddf28a2cffdf7c671f7f6262e942dc6710f54a8cf6a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("edit edit-" . twig_lower_filter($this->env, $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_49f6d4242b0ebd50791ddf28a2cffdf7c671f7f6262e942dc6710f54a8cf6a4f->leave($__internal_49f6d4242b0ebd50791ddf28a2cffdf7c671f7f6262e942dc6710f54a8cf6a4f_prof);

        
        $__internal_04ac1621b3b4638a08eb368b248c46433634dc304cb1a184e6c3e887ee71f34d->leave($__internal_04ac1621b3b4638a08eb368b248c46433634dc304cb1a184e6c3e887ee71f34d_prof);

    }

    // line 13
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_6c3187cf2259db9a5c5dc0857f73a5629759fc4c033facb4c33d8fc7c910c255 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c3187cf2259db9a5c5dc0857f73a5629759fc4c033facb4c33d8fc7c910c255->enter($__internal_6c3187cf2259db9a5c5dc0857f73a5629759fc4c033facb4c33d8fc7c910c255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_02893bef33c21d19370b31a067bb0292a55afc6ed4540c4ff63b8eb187273667 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02893bef33c21d19370b31a067bb0292a55afc6ed4540c4ff63b8eb187273667->enter($__internal_02893bef33c21d19370b31a067bb0292a55afc6ed4540c4ff63b8eb187273667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 14
        ob_start();
        // line 15
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit.page_title", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "edit", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "edit", array()), "title", array()), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")),         // line 5
(isset($context["__internal_bd8c74a5021f0a28c46693142624c0d3a107e5708a530b04af12e39f77a78886"]) ? $context["__internal_bd8c74a5021f0a28c46693142624c0d3a107e5708a530b04af12e39f77a78886"] : $this->getContext($context, "__internal_bd8c74a5021f0a28c46693142624c0d3a107e5708a530b04af12e39f77a78886")))) : (        // line 16
(isset($context["_default_title"]) ? $context["_default_title"] : $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_02893bef33c21d19370b31a067bb0292a55afc6ed4540c4ff63b8eb187273667->leave($__internal_02893bef33c21d19370b31a067bb0292a55afc6ed4540c4ff63b8eb187273667_prof);

        
        $__internal_6c3187cf2259db9a5c5dc0857f73a5629759fc4c033facb4c33d8fc7c910c255->leave($__internal_6c3187cf2259db9a5c5dc0857f73a5629759fc4c033facb4c33d8fc7c910c255_prof);

    }

    // line 20
    public function block_main($context, array $blocks = array())
    {
        $__internal_a08e99c5404678126b6880a51036b509b3527cc89a1bdfe9cf54b9ebd15136e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a08e99c5404678126b6880a51036b509b3527cc89a1bdfe9cf54b9ebd15136e2->enter($__internal_a08e99c5404678126b6880a51036b509b3527cc89a1bdfe9cf54b9ebd15136e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_e9314298b421abedf97a82fa4d67d1306c1d45e9681840dbd8b0f70504944016 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9314298b421abedf97a82fa4d67d1306c1d45e9681840dbd8b0f70504944016->enter($__internal_e9314298b421abedf97a82fa4d67d1306c1d45e9681840dbd8b0f70504944016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 21
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_e9314298b421abedf97a82fa4d67d1306c1d45e9681840dbd8b0f70504944016->leave($__internal_e9314298b421abedf97a82fa4d67d1306c1d45e9681840dbd8b0f70504944016_prof);

        
        $__internal_a08e99c5404678126b6880a51036b509b3527cc89a1bdfe9cf54b9ebd15136e2->leave($__internal_a08e99c5404678126b6880a51036b509b3527cc89a1bdfe9cf54b9ebd15136e2_prof);

    }

    // line 21
    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_d7db8fd0636dde89284e0eb86dc1a5eb55c9e2ed0e9bb2182bce57324bb2c22a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7db8fd0636dde89284e0eb86dc1a5eb55c9e2ed0e9bb2182bce57324bb2c22a->enter($__internal_d7db8fd0636dde89284e0eb86dc1a5eb55c9e2ed0e9bb2182bce57324bb2c22a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        $__internal_5fa5c016128d509ffd77d71e8ba692129f26fa509bbf45e5950fce25ec6e0d0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fa5c016128d509ffd77d71e8ba692129f26fa509bbf45e5950fce25ec6e0d0c->enter($__internal_5fa5c016128d509ffd77d71e8ba692129f26fa509bbf45e5950fce25ec6e0d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 22
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_5fa5c016128d509ffd77d71e8ba692129f26fa509bbf45e5950fce25ec6e0d0c->leave($__internal_5fa5c016128d509ffd77d71e8ba692129f26fa509bbf45e5950fce25ec6e0d0c_prof);

        
        $__internal_d7db8fd0636dde89284e0eb86dc1a5eb55c9e2ed0e9bb2182bce57324bb2c22a->leave($__internal_d7db8fd0636dde89284e0eb86dc1a5eb55c9e2ed0e9bb2182bce57324bb2c22a_prof);

    }

    // line 25
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_5edb2a4971bc3f9c54035a8204540210b7f162fd892f3c0849f8267121809bd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5edb2a4971bc3f9c54035a8204540210b7f162fd892f3c0849f8267121809bd0->enter($__internal_5edb2a4971bc3f9c54035a8204540210b7f162fd892f3c0849f8267121809bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_ecf48f15fc79fab49fcc0fcd63daa079e35e84a67e5f5efcad86628a82a73d57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecf48f15fc79fab49fcc0fcd63daa079e35e84a67e5f5efcad86628a82a73d57->enter($__internal_ecf48f15fc79fab49fcc0fcd63daa079e35e84a67e5f5efcad86628a82a73d57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        // line 26
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "edit", "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 28
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "delete_form" =>         // line 29
(isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "_translation_domain" => $this->getAttribute(        // line 30
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "translation_domain", array()), "_trans_parameters" =>         // line 31
(isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "_entity_config" =>         // line 32
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config"))), false);
        // line 33
        echo "
    ";
        
        $__internal_ecf48f15fc79fab49fcc0fcd63daa079e35e84a67e5f5efcad86628a82a73d57->leave($__internal_ecf48f15fc79fab49fcc0fcd63daa079e35e84a67e5f5efcad86628a82a73d57_prof);

        
        $__internal_5edb2a4971bc3f9c54035a8204540210b7f162fd892f3c0849f8267121809bd0->leave($__internal_5edb2a4971bc3f9c54035a8204540210b7f162fd892f3c0849f8267121809bd0_prof);

    }

    // line 37
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_45271b8f10b35c03f6ed041830eca19c498d784fdb7725382cd97c0ae8a4a4f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45271b8f10b35c03f6ed041830eca19c498d784fdb7725382cd97c0ae8a4a4f6->enter($__internal_45271b8f10b35c03f6ed041830eca19c498d784fdb7725382cd97c0ae8a4a4f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_17e0165d1866d7c85f305c2cefec5380ef9cf133482268dce22bfcf0c282a8cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17e0165d1866d7c85f305c2cefec5380ef9cf133482268dce22bfcf0c282a8cc->enter($__internal_17e0165d1866d7c85f305c2cefec5380ef9cf133482268dce22bfcf0c282a8cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 38
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('.edit-form').areYouSure({ 'message': '";
        // line 42
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.are_you_sure", array(), "EasyAdminBundle"), "js"), "html", null, true);
        echo "' });

            \$('.form-actions').easyAdminSticky();

            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>

    ";
        // line 58
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_select2_widget.html.twig");
        echo "
";
        
        $__internal_17e0165d1866d7c85f305c2cefec5380ef9cf133482268dce22bfcf0c282a8cc->leave($__internal_17e0165d1866d7c85f305c2cefec5380ef9cf133482268dce22bfcf0c282a8cc_prof);

        
        $__internal_45271b8f10b35c03f6ed041830eca19c498d784fdb7725382cd97c0ae8a4a4f6->leave($__internal_45271b8f10b35c03f6ed041830eca19c498d784fdb7725382cd97c0ae8a4a4f6_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 58,  218 => 42,  210 => 38,  201 => 37,  190 => 33,  188 => 32,  187 => 31,  186 => 30,  185 => 29,  184 => 28,  182 => 26,  173 => 25,  160 => 22,  151 => 21,  141 => 25,  138 => 24,  135 => 21,  126 => 20,  113 => 16,  112 => 5,  110 => 16,  107 => 15,  105 => 14,  96 => 13,  78 => 11,  60 => 10,  50 => 8,  48 => 6,  47 => 5,  46 => 6,  45 => 5,  44 => 6,  42 => 5,  40 => 4,  38 => 3,  36 => 1,  24 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% form_theme form with easyadmin_config('design.form_theme') %}

{% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}
{% set _entity_id = attribute(entity, _entity_config.primary_key_field_name) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans, '%entity_id%': _entity_id } %}

{% extends _entity_config.templates.layout %}

{% block body_id 'easyadmin-edit-' ~ _entity_config.name ~ '-' ~ _entity_id %}
{% block body_class 'edit edit-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% set _default_title = 'edit.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
    {{ _entity_config.edit.title is defined ? _entity_config.edit.title|trans(_trans_parameters) : _default_title }}
{% endspaceless %}
{% endblock %}

{% block main %}
    {% block entity_form %}
        {{ form(form) }}
    {% endblock entity_form %}

    {% block delete_form %}
        {{ include('@EasyAdmin/default/includes/_delete_form.html.twig', {
            view: 'edit',
            referer: app.request.query.get('referer', ''),
            delete_form: delete_form,
            _translation_domain: _entity_config.translation_domain,
            _trans_parameters: _trans_parameters,
            _entity_config: _entity_config,
        }, with_context = false) }}
    {% endblock delete_form %}
{% endblock %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            \$('.edit-form').areYouSure({ 'message': '{{ 'form.are_you_sure'|trans({}, 'EasyAdminBundle')|e('js') }}' });

            \$('.form-actions').easyAdminSticky();

            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>

    {{ include('@EasyAdmin/default/includes/_select2_widget.html.twig') }}
{% endblock %}
", "EasyAdminBundle:default:edit.html.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/edit.html.twig");
    }
}
