<?php

/* EasyAdminBundle:default:show.html.twig */
class __TwigTemplate_922ed235ee91ee0b1fd9ffdae5b83a65cf50ffbcacd4bc672aeb17825e69055c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'item_actions' => array($this, 'block_item_actions'),
            'delete_form' => array($this, 'block_delete_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "EasyAdminBundle:default:show.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_24ba2f83a5275246e3eea2366c97077c7d1cd1ffa7fe409bea39189952ebd0ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24ba2f83a5275246e3eea2366c97077c7d1cd1ffa7fe409bea39189952ebd0ab->enter($__internal_24ba2f83a5275246e3eea2366c97077c7d1cd1ffa7fe409bea39189952ebd0ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:show.html.twig"));

        $__internal_6390b1566ba380a2d7339d8f19dbe6d5c018294692234b55c1e9b6f929d950a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6390b1566ba380a2d7339d8f19dbe6d5c018294692234b55c1e9b6f929d950a8->enter($__internal_6390b1566ba380a2d7339d8f19dbe6d5c018294692234b55c1e9b6f929d950a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:show.html.twig"));

        // line 1
        $context["_entity_config"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 3
        $context["_entity_id"] = ("" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "primary_key_field_name", array())));
        // line 4
        $context["__internal_f5f766a24a1261b7838fa63748011da2322d0994a84f290d39c39eb021c13fbc"] = $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 4
(isset($context["__internal_f5f766a24a1261b7838fa63748011da2322d0994a84f290d39c39eb021c13fbc"]) ? $context["__internal_f5f766a24a1261b7838fa63748011da2322d0994a84f290d39c39eb021c13fbc"] : $this->getContext($context, "__internal_f5f766a24a1261b7838fa63748011da2322d0994a84f290d39c39eb021c13fbc"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 5
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 4
(isset($context["__internal_f5f766a24a1261b7838fa63748011da2322d0994a84f290d39c39eb021c13fbc"]) ? $context["__internal_f5f766a24a1261b7838fa63748011da2322d0994a84f290d39c39eb021c13fbc"] : $this->getContext($context, "__internal_f5f766a24a1261b7838fa63748011da2322d0994a84f290d39c39eb021c13fbc"))), "%entity_id%" =>         // line 5
(isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id")));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24ba2f83a5275246e3eea2366c97077c7d1cd1ffa7fe409bea39189952ebd0ab->leave($__internal_24ba2f83a5275246e3eea2366c97077c7d1cd1ffa7fe409bea39189952ebd0ab_prof);

        
        $__internal_6390b1566ba380a2d7339d8f19dbe6d5c018294692234b55c1e9b6f929d950a8->leave($__internal_6390b1566ba380a2d7339d8f19dbe6d5c018294692234b55c1e9b6f929d950a8_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_8ebc8d81758ed7f5f43a39ecaa84d3b5a1f9ae356331c3a5f9a0ff7319e75941 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ebc8d81758ed7f5f43a39ecaa84d3b5a1f9ae356331c3a5f9a0ff7319e75941->enter($__internal_8ebc8d81758ed7f5f43a39ecaa84d3b5a1f9ae356331c3a5f9a0ff7319e75941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_b13f878e94770fb22f42f2ec18a7a2fe84fe6d2f8a63054dc189374e08ba34f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b13f878e94770fb22f42f2ec18a7a2fe84fe6d2f8a63054dc189374e08ba34f3->enter($__internal_b13f878e94770fb22f42f2ec18a7a2fe84fe6d2f8a63054dc189374e08ba34f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-show-" . $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())) . "-") . (isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_b13f878e94770fb22f42f2ec18a7a2fe84fe6d2f8a63054dc189374e08ba34f3->leave($__internal_b13f878e94770fb22f42f2ec18a7a2fe84fe6d2f8a63054dc189374e08ba34f3_prof);

        
        $__internal_8ebc8d81758ed7f5f43a39ecaa84d3b5a1f9ae356331c3a5f9a0ff7319e75941->leave($__internal_8ebc8d81758ed7f5f43a39ecaa84d3b5a1f9ae356331c3a5f9a0ff7319e75941_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_04ba34ab07c8e5c4a0e9e941a86ef7940009b6ae1c82e401ef3f8f85ec374148 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04ba34ab07c8e5c4a0e9e941a86ef7940009b6ae1c82e401ef3f8f85ec374148->enter($__internal_04ba34ab07c8e5c4a0e9e941a86ef7940009b6ae1c82e401ef3f8f85ec374148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_8060f02699077beb7318a220700dd9a11722c2c68dac56482be074c30806bc19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8060f02699077beb7318a220700dd9a11722c2c68dac56482be074c30806bc19->enter($__internal_8060f02699077beb7318a220700dd9a11722c2c68dac56482be074c30806bc19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("show show-" . twig_lower_filter($this->env, $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_8060f02699077beb7318a220700dd9a11722c2c68dac56482be074c30806bc19->leave($__internal_8060f02699077beb7318a220700dd9a11722c2c68dac56482be074c30806bc19_prof);

        
        $__internal_04ba34ab07c8e5c4a0e9e941a86ef7940009b6ae1c82e401ef3f8f85ec374148->leave($__internal_04ba34ab07c8e5c4a0e9e941a86ef7940009b6ae1c82e401ef3f8f85ec374148_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_c52d572f0559e5ca9304f527a6786b5de13ec6822d104b80557cbc940168d9de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c52d572f0559e5ca9304f527a6786b5de13ec6822d104b80557cbc940168d9de->enter($__internal_c52d572f0559e5ca9304f527a6786b5de13ec6822d104b80557cbc940168d9de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_6f0cef277e6956e347b3094de50197912c45d7aabf43717cc29e160df83e44f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f0cef277e6956e347b3094de50197912c45d7aabf43717cc29e160df83e44f4->enter($__internal_6f0cef277e6956e347b3094de50197912c45d7aabf43717cc29e160df83e44f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("show.page_title", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "show", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "show", array()), "title", array()), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")),         // line 4
(isset($context["__internal_f5f766a24a1261b7838fa63748011da2322d0994a84f290d39c39eb021c13fbc"]) ? $context["__internal_f5f766a24a1261b7838fa63748011da2322d0994a84f290d39c39eb021c13fbc"] : $this->getContext($context, "__internal_f5f766a24a1261b7838fa63748011da2322d0994a84f290d39c39eb021c13fbc")))) : (        // line 15
(isset($context["_default_title"]) ? $context["_default_title"] : $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_6f0cef277e6956e347b3094de50197912c45d7aabf43717cc29e160df83e44f4->leave($__internal_6f0cef277e6956e347b3094de50197912c45d7aabf43717cc29e160df83e44f4_prof);

        
        $__internal_c52d572f0559e5ca9304f527a6786b5de13ec6822d104b80557cbc940168d9de->leave($__internal_c52d572f0559e5ca9304f527a6786b5de13ec6822d104b80557cbc940168d9de_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_640537fb50e5402c20125bd336fca1cd1799bc5bc19944f11df515e4bfc0bbca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_640537fb50e5402c20125bd336fca1cd1799bc5bc19944f11df515e4bfc0bbca->enter($__internal_640537fb50e5402c20125bd336fca1cd1799bc5bc19944f11df515e4bfc0bbca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_fcba103a5aadf7d66d8c3819d138a79bb0c0f632aea005ba140e044f93cb370a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcba103a5aadf7d66d8c3819d138a79bb0c0f632aea005ba140e044f93cb370a->enter($__internal_fcba103a5aadf7d66d8c3819d138a79bb0c0f632aea005ba140e044f93cb370a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    <div class=\"form-horizontal\">
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : $this->getContext($context, "fields")));
        foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
            // line 22
            echo "            <div class=\"form-group field-";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, (($this->getAttribute($context["metadata"], "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["metadata"], "type", array()), "default")) : ("default"))), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["metadata"], "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["metadata"], "css_class", array()), "")) : ("")), "html", null, true);
            echo "\">
                <label class=\"col-sm-2 control-label\">
                    ";
            // line 24
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($context["metadata"], "label", array())) ? ($this->getAttribute($context["metadata"], "label", array())) : ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize($context["field"]))), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")),             // line 4
(isset($context["__internal_f5f766a24a1261b7838fa63748011da2322d0994a84f290d39c39eb021c13fbc"]) ? $context["__internal_f5f766a24a1261b7838fa63748011da2322d0994a84f290d39c39eb021c13fbc"] : $this->getContext($context, "__internal_f5f766a24a1261b7838fa63748011da2322d0994a84f290d39c39eb021c13fbc")));
            // line 24
            echo "
                </label>
                <div class=\"col-sm-10\">
                    <div class=\"form-control\">
                        ";
            // line 28
            echo $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->renderEntityField($this->env, "show", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), $context["metadata"]);
            echo "
                    </div>

                    ";
            // line 31
            if (((($this->getAttribute($context["metadata"], "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["metadata"], "help", array()), "")) : ("")) != "")) {
                // line 32
                echo "                        <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["metadata"], "help", array()), array(),                 // line 4
(isset($context["__internal_f5f766a24a1261b7838fa63748011da2322d0994a84f290d39c39eb021c13fbc"]) ? $context["__internal_f5f766a24a1261b7838fa63748011da2322d0994a84f290d39c39eb021c13fbc"] : $this->getContext($context, "__internal_f5f766a24a1261b7838fa63748011da2322d0994a84f290d39c39eb021c13fbc")));
                // line 32
                echo "</span>
                    ";
            }
            // line 34
            echo "                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
        <div class=\"form-group form-actions\">
            <div class=\"col-sm-10 col-sm-offset-2\">
            ";
        // line 40
        $this->displayBlock('item_actions', $context, $blocks);
        // line 52
        echo "            </div>
        </div>
    </div>

    ";
        // line 56
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_fcba103a5aadf7d66d8c3819d138a79bb0c0f632aea005ba140e044f93cb370a->leave($__internal_fcba103a5aadf7d66d8c3819d138a79bb0c0f632aea005ba140e044f93cb370a_prof);

        
        $__internal_640537fb50e5402c20125bd336fca1cd1799bc5bc19944f11df515e4bfc0bbca->leave($__internal_640537fb50e5402c20125bd336fca1cd1799bc5bc19944f11df515e4bfc0bbca_prof);

    }

    // line 40
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_752a9d49fcaabc9544bb563eec8658e59210675ba901330f522ee9bfc6d2787d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_752a9d49fcaabc9544bb563eec8658e59210675ba901330f522ee9bfc6d2787d->enter($__internal_752a9d49fcaabc9544bb563eec8658e59210675ba901330f522ee9bfc6d2787d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        $__internal_2c3d788c5cd4bec3b21735d2941238dcb96c12b4ee871c29aa0cb0fcde2ecaa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c3d788c5cd4bec3b21735d2941238dcb96c12b4ee871c29aa0cb0fcde2ecaa9->enter($__internal_2c3d788c5cd4bec3b21735d2941238dcb96c12b4ee871c29aa0cb0fcde2ecaa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        // line 41
        echo "                ";
        $context["_show_actions"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("show", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()));
        // line 42
        echo "                ";
        $context["_request_parameters"] = array("entity" => $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), "referer" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer"), "method"));
        // line 43
        echo "
                ";
        // line 44
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 45
(isset($context["_show_actions"]) ? $context["_show_actions"] : $this->getContext($context, "_show_actions")), "request_parameters" =>         // line 46
(isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), "translation_domain" => $this->getAttribute(        // line 47
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "translation_domain", array()), "trans_parameters" =>         // line 48
(isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "item_id" =>         // line 49
(isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id"))), false);
        // line 50
        echo "
            ";
        
        $__internal_2c3d788c5cd4bec3b21735d2941238dcb96c12b4ee871c29aa0cb0fcde2ecaa9->leave($__internal_2c3d788c5cd4bec3b21735d2941238dcb96c12b4ee871c29aa0cb0fcde2ecaa9_prof);

        
        $__internal_752a9d49fcaabc9544bb563eec8658e59210675ba901330f522ee9bfc6d2787d->leave($__internal_752a9d49fcaabc9544bb563eec8658e59210675ba901330f522ee9bfc6d2787d_prof);

    }

    // line 56
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_2bfbc183b0c78f14287fcd095bd273592dc2924270e6667ce006a70075f79908 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bfbc183b0c78f14287fcd095bd273592dc2924270e6667ce006a70075f79908->enter($__internal_2bfbc183b0c78f14287fcd095bd273592dc2924270e6667ce006a70075f79908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_52600ae0fce1c0144bd952cdc0efc6c2b17cc8f112081f42ef98a70b7eb4311e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52600ae0fce1c0144bd952cdc0efc6c2b17cc8f112081f42ef98a70b7eb4311e->enter($__internal_52600ae0fce1c0144bd952cdc0efc6c2b17cc8f112081f42ef98a70b7eb4311e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        // line 57
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "show", "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 59
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "delete_form" =>         // line 60
(isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "_translation_domain" => $this->getAttribute(        // line 61
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "translation_domain", array()), "_trans_parameters" =>         // line 62
(isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "_entity_config" =>         // line 63
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config"))), false);
        // line 64
        echo "
    ";
        
        $__internal_52600ae0fce1c0144bd952cdc0efc6c2b17cc8f112081f42ef98a70b7eb4311e->leave($__internal_52600ae0fce1c0144bd952cdc0efc6c2b17cc8f112081f42ef98a70b7eb4311e_prof);

        
        $__internal_2bfbc183b0c78f14287fcd095bd273592dc2924270e6667ce006a70075f79908->leave($__internal_2bfbc183b0c78f14287fcd095bd273592dc2924270e6667ce006a70075f79908_prof);

    }

    // line 68
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_8f4002bf87461d17f213d522d32337597008687885ce029f538576e459980464 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f4002bf87461d17f213d522d32337597008687885ce029f538576e459980464->enter($__internal_8f4002bf87461d17f213d522d32337597008687885ce029f538576e459980464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_3068f8088a465f4ec5b311647b5617518d47a6a4a1cd721255c80e9ca574f9b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3068f8088a465f4ec5b311647b5617518d47a6a4a1cd721255c80e9ca574f9b1->enter($__internal_3068f8088a465f4ec5b311647b5617518d47a6a4a1cd721255c80e9ca574f9b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 69
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
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
        
        $__internal_3068f8088a465f4ec5b311647b5617518d47a6a4a1cd721255c80e9ca574f9b1->leave($__internal_3068f8088a465f4ec5b311647b5617518d47a6a4a1cd721255c80e9ca574f9b1_prof);

        
        $__internal_8f4002bf87461d17f213d522d32337597008687885ce029f538576e459980464->leave($__internal_8f4002bf87461d17f213d522d32337597008687885ce029f538576e459980464_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 69,  268 => 68,  257 => 64,  255 => 63,  254 => 62,  253 => 61,  252 => 60,  251 => 59,  249 => 57,  240 => 56,  229 => 50,  227 => 49,  226 => 48,  225 => 47,  224 => 46,  223 => 45,  222 => 44,  219 => 43,  216 => 42,  213 => 41,  204 => 40,  194 => 56,  188 => 52,  186 => 40,  181 => 37,  173 => 34,  169 => 32,  167 => 4,  165 => 32,  163 => 31,  157 => 28,  151 => 24,  149 => 4,  148 => 24,  140 => 22,  136 => 21,  133 => 20,  124 => 19,  111 => 15,  110 => 4,  108 => 15,  105 => 14,  103 => 13,  94 => 12,  76 => 10,  58 => 9,  48 => 7,  46 => 5,  45 => 4,  44 => 5,  43 => 4,  42 => 5,  40 => 4,  38 => 3,  36 => 1,  24 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}
{# the empty string concatenation is needed when the primary key is an object (e.g. an Uuid object) #}
{% set _entity_id = '' ~ attribute(entity, _entity_config.primary_key_field_name) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans, '%entity_id%': _entity_id } %}

{% extends _entity_config.templates.layout %}

{% block body_id 'easyadmin-show-' ~ _entity_config.name ~ '-' ~ _entity_id %}
{% block body_class 'show show-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% set _default_title = 'show.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
    {{ _entity_config.show.title is defined ? _entity_config.show.title|trans(_trans_parameters) : _default_title }}
{% endspaceless %}
{% endblock %}

{% block main %}
    <div class=\"form-horizontal\">
        {% for field, metadata in fields %}
            <div class=\"form-group field-{{ metadata.type|default('default')|lower }} {{ metadata.css_class|default('') }}\">
                <label class=\"col-sm-2 control-label\">
                    {{ (metadata.label ?: field|humanize)|trans(_trans_parameters)|raw }}
                </label>
                <div class=\"col-sm-10\">
                    <div class=\"form-control\">
                        {{ easyadmin_render_field_for_show_view(_entity_config.name, entity, metadata) }}
                    </div>

                    {% if metadata.help|default('') != '' %}
                        <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> {{ metadata.help|trans|raw }}</span>
                    {% endif %}
                </div>
            </div>
        {% endfor %}

        <div class=\"form-group form-actions\">
            <div class=\"col-sm-10 col-sm-offset-2\">
            {% block item_actions %}
                {% set _show_actions = easyadmin_get_actions_for_show_item(_entity_config.name) %}
                {% set _request_parameters = { entity: _entity_config.name, referer: app.request.query.get('referer') } %}

                {{ include('@EasyAdmin/default/includes/_actions.html.twig', {
                    actions: _show_actions,
                    request_parameters: _request_parameters,
                    translation_domain: _entity_config.translation_domain,
                    trans_parameters: _trans_parameters,
                    item_id: _entity_id
                }, with_context = false) }}
            {% endblock item_actions %}
            </div>
        </div>
    </div>

    {% block delete_form %}
        {{ include('@EasyAdmin/default/includes/_delete_form.html.twig', {
            view: 'show',
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
{% endblock %}
", "EasyAdminBundle:default:show.html.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/show.html.twig");
    }
}
