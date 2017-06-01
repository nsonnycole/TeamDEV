<?php

/* EasyAdminBundle:default:menu.html.twig */
class __TwigTemplate_1556db281496131bb680b8466aef122801582633c532a98cd63e2ed037824633 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'main_menu_before' => array($this, 'block_main_menu_before'),
            'main_menu' => array($this, 'block_main_menu'),
            'main_menu_after' => array($this, 'block_main_menu_after'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3f1d4d921dbb8c920a4461b62dddf6e562004cb8dabd8aa3552b88a5ce136061 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f1d4d921dbb8c920a4461b62dddf6e562004cb8dabd8aa3552b88a5ce136061->enter($__internal_3f1d4d921dbb8c920a4461b62dddf6e562004cb8dabd8aa3552b88a5ce136061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:menu.html.twig"));

        $__internal_2867edfe804dbed9c00b109bad9556eff83b5f74207aacca12c4440979cea054 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2867edfe804dbed9c00b109bad9556eff83b5f74207aacca12c4440979cea054->enter($__internal_2867edfe804dbed9c00b109bad9556eff83b5f74207aacca12c4440979cea054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:menu.html.twig"));

        // line 28
        echo "
";
        // line 29
        $context["helper"] = $this;
        // line 30
        echo "
";
        // line 31
        $this->displayBlock('main_menu_before', $context, $blocks);
        // line 32
        echo "
<ul class=\"sidebar-menu\">
    ";
        // line 34
        $this->displayBlock('main_menu', $context, $blocks);
        // line 51
        echo "</ul>

";
        // line 53
        $this->displayBlock('main_menu_after', $context, $blocks);
        
        $__internal_3f1d4d921dbb8c920a4461b62dddf6e562004cb8dabd8aa3552b88a5ce136061->leave($__internal_3f1d4d921dbb8c920a4461b62dddf6e562004cb8dabd8aa3552b88a5ce136061_prof);

        
        $__internal_2867edfe804dbed9c00b109bad9556eff83b5f74207aacca12c4440979cea054->leave($__internal_2867edfe804dbed9c00b109bad9556eff83b5f74207aacca12c4440979cea054_prof);

    }

    // line 31
    public function block_main_menu_before($context, array $blocks = array())
    {
        $__internal_427d0a01668c9610a63db0d797199620ce060639d4e2971a3bb0ce30af4610ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_427d0a01668c9610a63db0d797199620ce060639d4e2971a3bb0ce30af4610ba->enter($__internal_427d0a01668c9610a63db0d797199620ce060639d4e2971a3bb0ce30af4610ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_before"));

        $__internal_ed728d8ff48ede3099d70d99f85930f16ce1c5bd1e4fce034ac9253691253473 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed728d8ff48ede3099d70d99f85930f16ce1c5bd1e4fce034ac9253691253473->enter($__internal_ed728d8ff48ede3099d70d99f85930f16ce1c5bd1e4fce034ac9253691253473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_before"));

        
        $__internal_ed728d8ff48ede3099d70d99f85930f16ce1c5bd1e4fce034ac9253691253473->leave($__internal_ed728d8ff48ede3099d70d99f85930f16ce1c5bd1e4fce034ac9253691253473_prof);

        
        $__internal_427d0a01668c9610a63db0d797199620ce060639d4e2971a3bb0ce30af4610ba->leave($__internal_427d0a01668c9610a63db0d797199620ce060639d4e2971a3bb0ce30af4610ba_prof);

    }

    // line 34
    public function block_main_menu($context, array $blocks = array())
    {
        $__internal_fca78dff010227c3eaeebeb4f3fcf90a0afd2c32a892d22e4b8f3d494198ffbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fca78dff010227c3eaeebeb4f3fcf90a0afd2c32a892d22e4b8f3d494198ffbc->enter($__internal_fca78dff010227c3eaeebeb4f3fcf90a0afd2c32a892d22e4b8f3d494198ffbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu"));

        $__internal_29cfcbcd37aa88c451e1e540b038810bf6b91446a1a2ed1f6ed09d1acc029c94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29cfcbcd37aa88c451e1e540b038810bf6b91446a1a2ed1f6ed09d1acc029c94->enter($__internal_29cfcbcd37aa88c451e1e540b038810bf6b91446a1a2ed1f6ed09d1acc029c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu"));

        // line 35
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.menu"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 36
            echo "            <li class=\"";
            echo ((($this->getAttribute($context["item"], "type", array()) == "divider")) ? ("header") : (""));
            echo " ";
            echo (( !twig_test_empty($this->getAttribute($context["item"], "children", array()))) ? ("treeview") : (""));
            echo " ";
            echo ((((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "menuIndex"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "menuIndex"), "method"),  -1)) : ( -1)) == $this->getAttribute($context["loop"], "index0", array()))) ? ("active") : (""));
            echo " ";
            echo ((((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "submenuIndex"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "submenuIndex"), "method"),  -1)) : ( -1)) !=  -1)) ? ("submenu-active") : (""));
            echo "\">
                ";
            // line 37
            echo $context["helper"]->getrender_menu_item($context["item"], (($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "translation_domain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "translation_domain", array()), "messages")) : ("messages")));
            echo "

                ";
            // line 39
            if ( !twig_test_empty((($this->getAttribute($context["item"], "children", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "children", array()), array())) : (array())))) {
                // line 40
                echo "                    <ul class=\"treeview-menu\">
                        ";
                // line 41
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "children", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                    // line 42
                    echo "                            <li class=\"";
                    echo ((($this->getAttribute($context["subitem"], "type", array()) == "divider")) ? ("header") : (""));
                    echo " ";
                    echo (((((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "menuIndex"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "menuIndex"), "method"),  -1)) : ( -1)) == $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index0", array())) && ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "submenuIndex"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "submenuIndex"), "method"),  -1)) : ( -1)) == $this->getAttribute($context["loop"], "index0", array())))) ? ("active") : (""));
                    echo "\">
                                ";
                    // line 43
                    echo $context["helper"]->getrender_menu_item($context["subitem"], (($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "translation_domain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "translation_domain", array()), "messages")) : ("messages")));
                    echo "
                            </li>
                        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "                    </ul>
                ";
            }
            // line 48
            echo "            </li>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "    ";
        
        $__internal_29cfcbcd37aa88c451e1e540b038810bf6b91446a1a2ed1f6ed09d1acc029c94->leave($__internal_29cfcbcd37aa88c451e1e540b038810bf6b91446a1a2ed1f6ed09d1acc029c94_prof);

        
        $__internal_fca78dff010227c3eaeebeb4f3fcf90a0afd2c32a892d22e4b8f3d494198ffbc->leave($__internal_fca78dff010227c3eaeebeb4f3fcf90a0afd2c32a892d22e4b8f3d494198ffbc_prof);

    }

    // line 53
    public function block_main_menu_after($context, array $blocks = array())
    {
        $__internal_19c76fad40cfbd99c3cfb54f0b0a32db97d4bde8990c72d39b37a13008f9f6ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19c76fad40cfbd99c3cfb54f0b0a32db97d4bde8990c72d39b37a13008f9f6ac->enter($__internal_19c76fad40cfbd99c3cfb54f0b0a32db97d4bde8990c72d39b37a13008f9f6ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_after"));

        $__internal_e8418e6c4f217bfb4d46d528e967a66f00ad20bedf0e53eeede0f3483b186af3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8418e6c4f217bfb4d46d528e967a66f00ad20bedf0e53eeede0f3483b186af3->enter($__internal_e8418e6c4f217bfb4d46d528e967a66f00ad20bedf0e53eeede0f3483b186af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_after"));

        
        $__internal_e8418e6c4f217bfb4d46d528e967a66f00ad20bedf0e53eeede0f3483b186af3->leave($__internal_e8418e6c4f217bfb4d46d528e967a66f00ad20bedf0e53eeede0f3483b186af3_prof);

        
        $__internal_19c76fad40cfbd99c3cfb54f0b0a32db97d4bde8990c72d39b37a13008f9f6ac->leave($__internal_19c76fad40cfbd99c3cfb54f0b0a32db97d4bde8990c72d39b37a13008f9f6ac_prof);

    }

    // line 1
    public function getrender_menu_item($__item__ = null, $__translation_domain__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "item" => $__item__,
            "translation_domain" => $__translation_domain__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_e1744d6970fee857d7627db9825b326d7e7104da552ff82aae8089cb22399d58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_e1744d6970fee857d7627db9825b326d7e7104da552ff82aae8089cb22399d58->enter($__internal_e1744d6970fee857d7627db9825b326d7e7104da552ff82aae8089cb22399d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_menu_item"));

            $__internal_b81367a8b4f64381a2518e07cec6a62dd6f7e727c4e3a974e7ce36d65ea5e72d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_b81367a8b4f64381a2518e07cec6a62dd6f7e727c4e3a974e7ce36d65ea5e72d->enter($__internal_b81367a8b4f64381a2518e07cec6a62dd6f7e727c4e3a974e7ce36d65ea5e72d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_menu_item"));

            // line 2
            echo "    ";
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "type", array()) == "divider")) {
                // line 3
                echo "        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array()), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "
    ";
            } else {
                // line 5
                echo "        ";
                $context["menu_params"] = array("menuIndex" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "menu_index", array()), "submenuIndex" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "submenu_index", array()));
                // line 6
                echo "        ";
                $context["path"] = ((($this->getAttribute(                // line 7
(isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "type", array()) == "link")) ? ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "url", array())) : (((($this->getAttribute(                // line 8
(isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "type", array()) == "route")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "route", array()), $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "params", array()))) : (((($this->getAttribute(                // line 9
(isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "type", array()) == "entity")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge(twig_array_merge(array("entity" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "entity", array()), "action" => "list"), (isset($context["menu_params"]) ? $context["menu_params"] : $this->getContext($context, "menu_params"))), $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "params", array())))) : (((($this->getAttribute(                // line 10
(isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "type", array()) == "empty")) ? ("#") : (""))))))));
                // line 12
                echo "
        ";
                // line 17
                echo "        ";
                if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "type", array()) == "route") && (is_string($__internal_64d3be884109367eadf0f76ceed7c00998c71ce01cfd296a5c75e2099e2492cf = (isset($context["path"]) ? $context["path"] : $this->getContext($context, "path"))) && is_string($__internal_eb82c8ce9746452bda43c0a385b557c55e018f4effae050c0666d8318d7dc29d = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin")) && ('' === $__internal_eb82c8ce9746452bda43c0a385b557c55e018f4effae050c0666d8318d7dc29d || 0 === strpos($__internal_64d3be884109367eadf0f76ceed7c00998c71ce01cfd296a5c75e2099e2492cf, $__internal_eb82c8ce9746452bda43c0a385b557c55e018f4effae050c0666d8318d7dc29d))))) {
                    // line 18
                    echo "            ";
                    $context["path"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "route", array()), twig_array_merge((isset($context["menu_params"]) ? $context["menu_params"] : $this->getContext($context, "menu_params")), $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "params", array())));
                    // line 19
                    echo "        ";
                }
                // line 20
                echo "
        <a href=\"";
                // line 21
                echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : $this->getContext($context, "path")), "html", null, true);
                echo "\" ";
                if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "target", array()), false)) : (false))) {
                    echo "target=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "target", array()), "html", null, true);
                    echo "\"";
                }
                echo ">
            ";
                // line 22
                if ( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "icon", array()))) {
                    echo "<i class=\"fa ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "icon", array()), "html", null, true);
                    echo "\"></i>";
                }
                // line 23
                echo "            <span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array()), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "</span>
            ";
                // line 24
                if ( !twig_test_empty((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "children", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "children", array()), array())) : (array())))) {
                    echo "<i class=\"fa fa-angle-left pull-right\"></i>";
                }
                // line 25
                echo "        </a>
    ";
            }
            
            $__internal_b81367a8b4f64381a2518e07cec6a62dd6f7e727c4e3a974e7ce36d65ea5e72d->leave($__internal_b81367a8b4f64381a2518e07cec6a62dd6f7e727c4e3a974e7ce36d65ea5e72d_prof);

            
            $__internal_e1744d6970fee857d7627db9825b326d7e7104da552ff82aae8089cb22399d58->leave($__internal_e1744d6970fee857d7627db9825b326d7e7104da552ff82aae8089cb22399d58_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 25,  284 => 24,  279 => 23,  273 => 22,  263 => 21,  260 => 20,  257 => 19,  254 => 18,  251 => 17,  248 => 12,  246 => 10,  245 => 9,  244 => 8,  243 => 7,  241 => 6,  238 => 5,  232 => 3,  229 => 2,  210 => 1,  193 => 53,  183 => 50,  168 => 48,  164 => 46,  147 => 43,  140 => 42,  123 => 41,  120 => 40,  118 => 39,  113 => 37,  102 => 36,  84 => 35,  75 => 34,  58 => 31,  48 => 53,  44 => 51,  42 => 34,  38 => 32,  36 => 31,  33 => 30,  31 => 29,  28 => 28,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro render_menu_item(item, translation_domain) %}
    {% if item.type == 'divider' %}
        {{ item.label|trans(domain = translation_domain) }}
    {% else %}
        {% set menu_params = { menuIndex: item.menu_index, submenuIndex: item.submenu_index } %}
        {% set path =
            item.type == 'link' ? item.url :
            item.type == 'route' ? path(item.route, item.params) :
            item.type == 'entity' ? path('easyadmin', { entity: item.entity, action: 'list' }|merge(menu_params)|merge(item.params)) :
            item.type == 'empty' ? '#' : ''
        %}

        {# if the URL generated for the route belongs to the backend, regenerate
           the URL to include the menu_params to display the selected menu item
           (this is checked comparing the beginning of the route URL with the backend homepage URL)
        #}
        {% if item.type == 'route' and (path starts with path('easyadmin')) %}
            {% set path = path(item.route, menu_params|merge(item.params)) %}
        {% endif %}

        <a href=\"{{ path }}\" {% if item.target|default(false) %}target=\"{{ item.target }}\"{% endif %}>
            {% if item.icon is not empty %}<i class=\"fa {{ item.icon }}\"></i>{% endif %}
            <span>{{ item.label|trans(domain = translation_domain) }}</span>
            {% if item.children|default([]) is not empty %}<i class=\"fa fa-angle-left pull-right\"></i>{% endif %}
        </a>
    {% endif %}
{% endmacro %}

{% import _self as helper %}

{% block main_menu_before %}{% endblock %}

<ul class=\"sidebar-menu\">
    {% block main_menu %}
        {% for item in easyadmin_config('design.menu') %}
            <li class=\"{{ item.type == 'divider' ? 'header' }} {{ item.children is not empty ? 'treeview' }} {{ app.request.query.get('menuIndex')|default(-1) == loop.index0 ? 'active' }} {{ app.request.query.get('submenuIndex')|default(-1) != -1 ? 'submenu-active' }}\">
                {{ helper.render_menu_item(item, _entity_config.translation_domain|default('messages')) }}

                {% if item.children|default([]) is not empty %}
                    <ul class=\"treeview-menu\">
                        {% for subitem in item.children %}
                            <li class=\"{{ subitem.type == 'divider' ? 'header' }} {{ app.request.query.get('menuIndex')|default(-1) == loop.parent.loop.index0 and app.request.query.get('submenuIndex')|default(-1) == loop.index0 ? 'active' }}\">
                                {{ helper.render_menu_item(subitem, _entity_config.translation_domain|default('messages')) }}
                            </li>
                        {% endfor %}
                    </ul>
                {% endif %}
            </li>
        {% endfor %}
    {% endblock main_menu %}
</ul>

{% block main_menu_after %}{% endblock %}
", "EasyAdminBundle:default:menu.html.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/menu.html.twig");
    }
}
