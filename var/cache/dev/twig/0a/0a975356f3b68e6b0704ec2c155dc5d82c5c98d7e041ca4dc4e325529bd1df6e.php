<?php

/* @EasyAdmin/form/bootstrap_3_layout.html.twig */
class __TwigTemplate_c76f36c9967f18ffe1ecda87955292f695420730f617e78b2bc6d5f056de4783 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "@EasyAdmin/form/bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_widget' => array($this, 'block_form_widget'),
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'collection_row' => array($this, 'block_collection_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
                'empty_collection' => array($this, 'block_empty_collection'),
                'vich_file_row' => array($this, 'block_vich_file_row'),
                'vich_file_widget' => array($this, 'block_vich_file_widget'),
                'vich_image_row' => array($this, 'block_vich_image_row'),
                'vich_image_widget' => array($this, 'block_vich_image_widget'),
                'easyadmin_widget' => array($this, 'block_easyadmin_widget'),
                'item_actions' => array($this, 'block_item_actions'),
                'easyadmin_autocomplete_widget' => array($this, 'block_easyadmin_autocomplete_widget'),
                'easyadmin_autocomplete_inner_label' => array($this, 'block_easyadmin_autocomplete_inner_label'),
                'easyadmin_divider_row' => array($this, 'block_easyadmin_divider_row'),
                'easyadmin_section_row' => array($this, 'block_easyadmin_section_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b6cf5f52e3508f783c6fa9362a64f99523e155c7dc9d813ec5b1ab710fe7b9f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6cf5f52e3508f783c6fa9362a64f99523e155c7dc9d813ec5b1ab710fe7b9f1->enter($__internal_b6cf5f52e3508f783c6fa9362a64f99523e155c7dc9d813ec5b1ab710fe7b9f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/form/bootstrap_3_layout.html.twig"));

        $__internal_cef9bc7fa69cfdcc0d6bae01805591b1873cc1ece7e11bf2cdae6ce197ed7d71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cef9bc7fa69cfdcc0d6bae01805591b1873cc1ece7e11bf2cdae6ce197ed7d71->enter($__internal_cef9bc7fa69cfdcc0d6bae01805591b1873cc1ece7e11bf2cdae6ce197ed7d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/form/bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 19
        echo "
";
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('form_widget', $context, $blocks);
        // line 49
        echo "
";
        // line 50
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 61
        echo "
";
        // line 62
        $this->displayBlock('button_widget', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('money_widget', $context, $blocks);
        // line 79
        echo "
";
        // line 80
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 86
        echo "
";
        // line 87
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 100
        echo "
";
        // line 101
        $this->displayBlock('date_widget', $context, $blocks);
        // line 119
        echo "
";
        // line 120
        $this->displayBlock('time_widget', $context, $blocks);
        // line 134
        echo "
";
        // line 135
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 162
        echo "
";
        // line 163
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 182
        echo "
";
        // line 183
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 193
        echo "
";
        // line 194
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 204
        echo "
";
        // line 206
        echo "
";
        // line 207
        $this->displayBlock('form_label', $context, $blocks);
        // line 211
        echo "
";
        // line 212
        $this->displayBlock('choice_label', $context, $blocks);
        // line 217
        echo "
";
        // line 218
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 221
        echo "
";
        // line 222
        $this->displayBlock('radio_label', $context, $blocks);
        // line 225
        echo "
";
        // line 226
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 244
        echo "
";
        // line 246
        echo "
";
        // line 247
        $this->displayBlock('form_row', $context, $blocks);
        // line 270
        echo "
";
        // line 271
        $this->displayBlock('collection_row', $context, $blocks);
        // line 306
        echo "
";
        // line 307
        $this->displayBlock('button_row', $context, $blocks);
        // line 312
        echo "
";
        // line 313
        $this->displayBlock('choice_row', $context, $blocks);
        // line 317
        echo "
";
        // line 318
        $this->displayBlock('date_row', $context, $blocks);
        // line 322
        echo "
";
        // line 323
        $this->displayBlock('time_row', $context, $blocks);
        // line 327
        echo "
";
        // line 328
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 332
        echo "
";
        // line 333
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 339
        echo "
";
        // line 340
        $this->displayBlock('radio_row', $context, $blocks);
        // line 346
        echo "
";
        // line 348
        $this->displayBlock('form_errors', $context, $blocks);
        // line 366
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 377
        $this->displayBlock('empty_collection', $context, $blocks);
        // line 382
        echo "
";
        // line 383
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 387
        echo "
";
        // line 388
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 409
        echo "
";
        // line 410
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 414
        echo "
";
        // line 415
        $this->displayBlock('vich_image_widget', $context, $blocks);
        // line 437
        echo "
";
        // line 439
        $this->displayBlock('easyadmin_widget', $context, $blocks);
        // line 521
        echo "
";
        // line 523
        $this->displayBlock('easyadmin_autocomplete_widget', $context, $blocks);
        // line 534
        echo "
";
        // line 535
        $this->displayBlock('easyadmin_autocomplete_inner_label', $context, $blocks);
        // line 539
        echo "
";
        // line 541
        $this->displayBlock('easyadmin_divider_row', $context, $blocks);
        // line 546
        echo "
";
        // line 548
        $this->displayBlock('easyadmin_section_row', $context, $blocks);
        
        $__internal_b6cf5f52e3508f783c6fa9362a64f99523e155c7dc9d813ec5b1ab710fe7b9f1->leave($__internal_b6cf5f52e3508f783c6fa9362a64f99523e155c7dc9d813ec5b1ab710fe7b9f1_prof);

        
        $__internal_cef9bc7fa69cfdcc0d6bae01805591b1873cc1ece7e11bf2cdae6ce197ed7d71->leave($__internal_cef9bc7fa69cfdcc0d6bae01805591b1873cc1ece7e11bf2cdae6ce197ed7d71_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_6b051e05705146b7e3839c0115600ef8eb18c176357a241a6e24302fc6257ac5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b051e05705146b7e3839c0115600ef8eb18c176357a241a6e24302fc6257ac5->enter($__internal_6b051e05705146b7e3839c0115600ef8eb18c176357a241a6e24302fc6257ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_aea9b31eaa534cf52686eb6075c45df38e01ef80e956bb5097014bde6d72bb89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aea9b31eaa534cf52686eb6075c45df38e01ef80e956bb5097014bde6d72bb89->enter($__internal_aea9b31eaa534cf52686eb6075c45df38e01ef80e956bb5097014bde6d72bb89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        if (("easyadmin" == twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)))) {
            // line 5
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_join_filter(array(0 => (((((            // line 7
array_key_exists("_easyadmin_form_type", $context)) ? (_twig_default_filter((isset($context["_easyadmin_form_type"]) ? $context["_easyadmin_form_type"] : $this->getContext($context, "_easyadmin_form_type")), "")) : ("")) == "horizontal")) ? ("form-horizontal") : ("form-vertical")), 1 => (($this->getAttribute(            // line 8
(isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")), 2 => ($this->getAttribute(            // line 9
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "view", array()) . "-form")), " "), "data-view" => $this->getAttribute(            // line 11
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "view", array()), "data-entity" => $this->getAttribute($this->getAttribute(            // line 12
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array()), "data-entity-id" => $this->getAttribute(            // line 13
(isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "primary_key_field_name", array()))));
            // line 15
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_aea9b31eaa534cf52686eb6075c45df38e01ef80e956bb5097014bde6d72bb89->leave($__internal_aea9b31eaa534cf52686eb6075c45df38e01ef80e956bb5097014bde6d72bb89_prof);

        
        $__internal_6b051e05705146b7e3839c0115600ef8eb18c176357a241a6e24302fc6257ac5->leave($__internal_6b051e05705146b7e3839c0115600ef8eb18c176357a241a6e24302fc6257ac5_prof);

    }

    // line 22
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_6ee38f5095288dc074d2f027f7eed5dfb046e45a7f4dde46988c80b8ed532d0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ee38f5095288dc074d2f027f7eed5dfb046e45a7f4dde46988c80b8ed532d0d->enter($__internal_6ee38f5095288dc074d2f027f7eed5dfb046e45a7f4dde46988c80b8ed532d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        $__internal_07aacd0780a965abee4a179464307477e0ef257fc20c2001e0a9012eda4d9492 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07aacd0780a965abee4a179464307477e0ef257fc20c2001e0a9012eda4d9492->enter($__internal_07aacd0780a965abee4a179464307477e0ef257fc20c2001e0a9012eda4d9492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 23
        $this->displayParentBlock("form_widget", $context, $blocks);
        // line 25
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array()), false)) : (false))) {
            // line 26
            echo "        ";
            ob_start();
            // line 27
            echo "            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
                \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        ";
            $context["remove_item_javascript"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 40
            echo "
        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"";
            // line 42
            echo (isset($context["remove_item_javascript"]) ? $context["remove_item_javascript"] : $this->getContext($context, "remove_item_javascript"));
            echo "\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                ";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.remove_item", array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        
        $__internal_07aacd0780a965abee4a179464307477e0ef257fc20c2001e0a9012eda4d9492->leave($__internal_07aacd0780a965abee4a179464307477e0ef257fc20c2001e0a9012eda4d9492_prof);

        
        $__internal_6ee38f5095288dc074d2f027f7eed5dfb046e45a7f4dde46988c80b8ed532d0d->leave($__internal_6ee38f5095288dc074d2f027f7eed5dfb046e45a7f4dde46988c80b8ed532d0d_prof);

    }

    // line 50
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_a476b7c821b4e7cd8882e29f40025713197fd7c61a7758654dcf6fe4a98cbd46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a476b7c821b4e7cd8882e29f40025713197fd7c61a7758654dcf6fe4a98cbd46->enter($__internal_a476b7c821b4e7cd8882e29f40025713197fd7c61a7758654dcf6fe4a98cbd46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_9a0cf3c94f248392dd7dccdf041c5db6808450aaf08e95440fcff0a2c4ea4111 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a0cf3c94f248392dd7dccdf041c5db6808450aaf08e95440fcff0a2c4ea4111->enter($__internal_9a0cf3c94f248392dd7dccdf041c5db6808450aaf08e95440fcff0a2c4ea4111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 51
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 52
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 54
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_9a0cf3c94f248392dd7dccdf041c5db6808450aaf08e95440fcff0a2c4ea4111->leave($__internal_9a0cf3c94f248392dd7dccdf041c5db6808450aaf08e95440fcff0a2c4ea4111_prof);

        
        $__internal_a476b7c821b4e7cd8882e29f40025713197fd7c61a7758654dcf6fe4a98cbd46->leave($__internal_a476b7c821b4e7cd8882e29f40025713197fd7c61a7758654dcf6fe4a98cbd46_prof);

    }

    // line 57
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_540fc9f8c01cb48b243857c29396c8cb36c069c5aa8dbc85064ecc90b4c0519c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_540fc9f8c01cb48b243857c29396c8cb36c069c5aa8dbc85064ecc90b4c0519c->enter($__internal_540fc9f8c01cb48b243857c29396c8cb36c069c5aa8dbc85064ecc90b4c0519c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_66c4c6499b23422e715806b21969cf3ea1120e297b643f064d59d5223732c134 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66c4c6499b23422e715806b21969cf3ea1120e297b643f064d59d5223732c134->enter($__internal_66c4c6499b23422e715806b21969cf3ea1120e297b643f064d59d5223732c134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 58
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 59
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_66c4c6499b23422e715806b21969cf3ea1120e297b643f064d59d5223732c134->leave($__internal_66c4c6499b23422e715806b21969cf3ea1120e297b643f064d59d5223732c134_prof);

        
        $__internal_540fc9f8c01cb48b243857c29396c8cb36c069c5aa8dbc85064ecc90b4c0519c->leave($__internal_540fc9f8c01cb48b243857c29396c8cb36c069c5aa8dbc85064ecc90b4c0519c_prof);

    }

    // line 62
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_dd13361928d76beb0fa5a81f3efbd10a3dee6c4cc48a0e241fe8f7e98d72fd58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd13361928d76beb0fa5a81f3efbd10a3dee6c4cc48a0e241fe8f7e98d72fd58->enter($__internal_dd13361928d76beb0fa5a81f3efbd10a3dee6c4cc48a0e241fe8f7e98d72fd58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_e1f4471ccfaf77c1a0103f2c82b815553a78647d917ca6316284836e4aca6174 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1f4471ccfaf77c1a0103f2c82b815553a78647d917ca6316284836e4aca6174->enter($__internal_e1f4471ccfaf77c1a0103f2c82b815553a78647d917ca6316284836e4aca6174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 63
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 64
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_e1f4471ccfaf77c1a0103f2c82b815553a78647d917ca6316284836e4aca6174->leave($__internal_e1f4471ccfaf77c1a0103f2c82b815553a78647d917ca6316284836e4aca6174_prof);

        
        $__internal_dd13361928d76beb0fa5a81f3efbd10a3dee6c4cc48a0e241fe8f7e98d72fd58->leave($__internal_dd13361928d76beb0fa5a81f3efbd10a3dee6c4cc48a0e241fe8f7e98d72fd58_prof);

    }

    // line 67
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_ec81580ef55d8c53422a7137570b27ac86577120e5371ea07b499302110c14df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec81580ef55d8c53422a7137570b27ac86577120e5371ea07b499302110c14df->enter($__internal_ec81580ef55d8c53422a7137570b27ac86577120e5371ea07b499302110c14df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_1066304b9b2ab1bfe4c771c97771cee38c7ded2dad08384d2e2a94c69e54cff6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1066304b9b2ab1bfe4c771c97771cee38c7ded2dad08384d2e2a94c69e54cff6->enter($__internal_1066304b9b2ab1bfe4c771c97771cee38c7ded2dad08384d2e2a94c69e54cff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 68
        echo "<div class=\"input-group\">
        ";
        // line 69
        $context["prepend"] = ("{{" == twig_slice($this->env, (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), 0, 2));
        // line 70
        echo "        ";
        if ( !(isset($context["prepend"]) ? $context["prepend"] : $this->getContext($context, "prepend"))) {
            // line 71
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 73
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 74
        if ((isset($context["prepend"]) ? $context["prepend"] : $this->getContext($context, "prepend"))) {
            // line 75
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 77
        echo "    </div>";
        
        $__internal_1066304b9b2ab1bfe4c771c97771cee38c7ded2dad08384d2e2a94c69e54cff6->leave($__internal_1066304b9b2ab1bfe4c771c97771cee38c7ded2dad08384d2e2a94c69e54cff6_prof);

        
        $__internal_ec81580ef55d8c53422a7137570b27ac86577120e5371ea07b499302110c14df->leave($__internal_ec81580ef55d8c53422a7137570b27ac86577120e5371ea07b499302110c14df_prof);

    }

    // line 80
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_7d8f12cdbcb9901599a442e5aea259742fa945cd40e955c8fd0098d4b7a90b02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d8f12cdbcb9901599a442e5aea259742fa945cd40e955c8fd0098d4b7a90b02->enter($__internal_7d8f12cdbcb9901599a442e5aea259742fa945cd40e955c8fd0098d4b7a90b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_4b5a42f510bcfcda791ce7222634c650611193734844ac807f41df3dc3d79d69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b5a42f510bcfcda791ce7222634c650611193734844ac807f41df3dc3d79d69->enter($__internal_4b5a42f510bcfcda791ce7222634c650611193734844ac807f41df3dc3d79d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 81
        echo "<div class=\"input-group\">";
        // line 82
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 83
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_4b5a42f510bcfcda791ce7222634c650611193734844ac807f41df3dc3d79d69->leave($__internal_4b5a42f510bcfcda791ce7222634c650611193734844ac807f41df3dc3d79d69_prof);

        
        $__internal_7d8f12cdbcb9901599a442e5aea259742fa945cd40e955c8fd0098d4b7a90b02->leave($__internal_7d8f12cdbcb9901599a442e5aea259742fa945cd40e955c8fd0098d4b7a90b02_prof);

    }

    // line 87
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_d8de3a87f1e95ff4d86f73c19fe28441cd8b4db51d04ae484d0e05b3061acb96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8de3a87f1e95ff4d86f73c19fe28441cd8b4db51d04ae484d0e05b3061acb96->enter($__internal_d8de3a87f1e95ff4d86f73c19fe28441cd8b4db51d04ae484d0e05b3061acb96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_e7767d7a33c600a61fd1853b052a91cac7937be451dfe4aecdc0050f55d47530 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7767d7a33c600a61fd1853b052a91cac7937be451dfe4aecdc0050f55d47530->enter($__internal_e7767d7a33c600a61fd1853b052a91cac7937be451dfe4aecdc0050f55d47530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 88
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 89
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 91
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 92
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 93
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 94
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 95
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 97
            echo "</div>";
        }
        
        $__internal_e7767d7a33c600a61fd1853b052a91cac7937be451dfe4aecdc0050f55d47530->leave($__internal_e7767d7a33c600a61fd1853b052a91cac7937be451dfe4aecdc0050f55d47530_prof);

        
        $__internal_d8de3a87f1e95ff4d86f73c19fe28441cd8b4db51d04ae484d0e05b3061acb96->leave($__internal_d8de3a87f1e95ff4d86f73c19fe28441cd8b4db51d04ae484d0e05b3061acb96_prof);

    }

    // line 101
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_a191aa4cb89d90b0c882535cd56e37603db1c0fc01793a465bb4c1a3e3f6a955 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a191aa4cb89d90b0c882535cd56e37603db1c0fc01793a465bb4c1a3e3f6a955->enter($__internal_a191aa4cb89d90b0c882535cd56e37603db1c0fc01793a465bb4c1a3e3f6a955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_d774767603dbffc1a7f133e8d3f091c3701c2bd63a2fd720962bd02c43d212eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d774767603dbffc1a7f133e8d3f091c3701c2bd63a2fd720962bd02c43d212eb->enter($__internal_d774767603dbffc1a7f133e8d3f091c3701c2bd63a2fd720962bd02c43d212eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 102
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 103
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 105
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 106
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 107
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 109
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 110
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 111
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 112
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 114
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 115
                echo "</div>";
            }
        }
        
        $__internal_d774767603dbffc1a7f133e8d3f091c3701c2bd63a2fd720962bd02c43d212eb->leave($__internal_d774767603dbffc1a7f133e8d3f091c3701c2bd63a2fd720962bd02c43d212eb_prof);

        
        $__internal_a191aa4cb89d90b0c882535cd56e37603db1c0fc01793a465bb4c1a3e3f6a955->leave($__internal_a191aa4cb89d90b0c882535cd56e37603db1c0fc01793a465bb4c1a3e3f6a955_prof);

    }

    // line 120
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_1485370aa030772179b56e13e27b7d7150eec991e8cf02b1f93ea6c5494c7f96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1485370aa030772179b56e13e27b7d7150eec991e8cf02b1f93ea6c5494c7f96->enter($__internal_1485370aa030772179b56e13e27b7d7150eec991e8cf02b1f93ea6c5494c7f96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_469a610ad130d6b1606a720b94519c9dc069d10852d0fec43c4a986bbca2ebaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_469a610ad130d6b1606a720b94519c9dc069d10852d0fec43c4a986bbca2ebaf->enter($__internal_469a610ad130d6b1606a720b94519c9dc069d10852d0fec43c4a986bbca2ebaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 121
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 122
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 124
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 125
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 126
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 128
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
            echo ":";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 129
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 130
                echo "</div>";
            }
        }
        
        $__internal_469a610ad130d6b1606a720b94519c9dc069d10852d0fec43c4a986bbca2ebaf->leave($__internal_469a610ad130d6b1606a720b94519c9dc069d10852d0fec43c4a986bbca2ebaf_prof);

        
        $__internal_1485370aa030772179b56e13e27b7d7150eec991e8cf02b1f93ea6c5494c7f96->leave($__internal_1485370aa030772179b56e13e27b7d7150eec991e8cf02b1f93ea6c5494c7f96_prof);

    }

    // line 135
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_67c430e12cf34ea0dfa331a01b87a62b7a2a63911482ea28c40cf3234f42fad2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67c430e12cf34ea0dfa331a01b87a62b7a2a63911482ea28c40cf3234f42fad2->enter($__internal_67c430e12cf34ea0dfa331a01b87a62b7a2a63911482ea28c40cf3234f42fad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_cb4a5b7943778463624bbd72b65ea1d01bfb88bf39dab47e8b16b84ae4269845 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb4a5b7943778463624bbd72b65ea1d01bfb88bf39dab47e8b16b84ae4269845->enter($__internal_cb4a5b7943778463624bbd72b65ea1d01bfb88bf39dab47e8b16b84ae4269845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 136
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 137
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        // line 138
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array()), false)) : (false))) {
            // line 139
            echo "        ";
            ob_start();
            // line 140
            echo "            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#";
            // line 143
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
            \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        ";
            $context["remove_item_javascript"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 153
            echo "
        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"";
            // line 155
            echo (isset($context["remove_item_javascript"]) ? $context["remove_item_javascript"] : $this->getContext($context, "remove_item_javascript"));
            echo "\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                ";
            // line 157
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.remove_item", array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        
        $__internal_cb4a5b7943778463624bbd72b65ea1d01bfb88bf39dab47e8b16b84ae4269845->leave($__internal_cb4a5b7943778463624bbd72b65ea1d01bfb88bf39dab47e8b16b84ae4269845_prof);

        
        $__internal_67c430e12cf34ea0dfa331a01b87a62b7a2a63911482ea28c40cf3234f42fad2->leave($__internal_67c430e12cf34ea0dfa331a01b87a62b7a2a63911482ea28c40cf3234f42fad2_prof);

    }

    // line 163
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_6239619b6fcb995fbd80906838c0d8d786f85b5f6a735a46961f9b38b4d5b010 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6239619b6fcb995fbd80906838c0d8d786f85b5f6a735a46961f9b38b4d5b010->enter($__internal_6239619b6fcb995fbd80906838c0d8d786f85b5f6a735a46961f9b38b4d5b010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_8188eb523bfcf08690cf71374909c7d3ca6d0fe212469c1ce6163e43ffb0ec7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8188eb523bfcf08690cf71374909c7d3ca6d0fe212469c1ce6163e43ffb0ec7f->enter($__internal_8188eb523bfcf08690cf71374909c7d3ca6d0fe212469c1ce6163e43ffb0ec7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 164
        if (twig_in_filter("-inline", (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) {
            // line 165
            echo "<div class=\"control-group\">";
            // line 166
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 167
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 168
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 171
            echo "</div>";
        } else {
            // line 173
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 174
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 175
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 176
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 179
            echo "</div>";
        }
        
        $__internal_8188eb523bfcf08690cf71374909c7d3ca6d0fe212469c1ce6163e43ffb0ec7f->leave($__internal_8188eb523bfcf08690cf71374909c7d3ca6d0fe212469c1ce6163e43ffb0ec7f_prof);

        
        $__internal_6239619b6fcb995fbd80906838c0d8d786f85b5f6a735a46961f9b38b4d5b010->leave($__internal_6239619b6fcb995fbd80906838c0d8d786f85b5f6a735a46961f9b38b4d5b010_prof);

    }

    // line 183
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_44d5603eecdd934a96038e118497e2f02671b264c5cb517b47181bdbdc242efd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44d5603eecdd934a96038e118497e2f02671b264c5cb517b47181bdbdc242efd->enter($__internal_44d5603eecdd934a96038e118497e2f02671b264c5cb517b47181bdbdc242efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_75f28ef62e9a95cf063b6d9b93632bdb15a2d18a9ce7f23e2e4ae9182e87c904 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75f28ef62e9a95cf063b6d9b93632bdb15a2d18a9ce7f23e2e4ae9182e87c904->enter($__internal_75f28ef62e9a95cf063b6d9b93632bdb15a2d18a9ce7f23e2e4ae9182e87c904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 184
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 185
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 186
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 188
            echo "<div class=\"checkbox\">";
            // line 189
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 190
            echo "</div>";
        }
        
        $__internal_75f28ef62e9a95cf063b6d9b93632bdb15a2d18a9ce7f23e2e4ae9182e87c904->leave($__internal_75f28ef62e9a95cf063b6d9b93632bdb15a2d18a9ce7f23e2e4ae9182e87c904_prof);

        
        $__internal_44d5603eecdd934a96038e118497e2f02671b264c5cb517b47181bdbdc242efd->leave($__internal_44d5603eecdd934a96038e118497e2f02671b264c5cb517b47181bdbdc242efd_prof);

    }

    // line 194
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_27fb4b909162d852f2f3148c565bca7841996b66dd0a4df9b15081df76553889 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27fb4b909162d852f2f3148c565bca7841996b66dd0a4df9b15081df76553889->enter($__internal_27fb4b909162d852f2f3148c565bca7841996b66dd0a4df9b15081df76553889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_f81c09fa3b8b19e7708124f1aba109e8722657faa8dd0ec622836c293907106b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f81c09fa3b8b19e7708124f1aba109e8722657faa8dd0ec622836c293907106b->enter($__internal_f81c09fa3b8b19e7708124f1aba109e8722657faa8dd0ec622836c293907106b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 195
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 196
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 197
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 199
            echo "<div class=\"radio\">";
            // line 200
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 201
            echo "</div>";
        }
        
        $__internal_f81c09fa3b8b19e7708124f1aba109e8722657faa8dd0ec622836c293907106b->leave($__internal_f81c09fa3b8b19e7708124f1aba109e8722657faa8dd0ec622836c293907106b_prof);

        
        $__internal_27fb4b909162d852f2f3148c565bca7841996b66dd0a4df9b15081df76553889->leave($__internal_27fb4b909162d852f2f3148c565bca7841996b66dd0a4df9b15081df76553889_prof);

    }

    // line 207
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_e694816be106601291f411151076efc9a49494c7dd38ce44e5ab659c4bd337c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e694816be106601291f411151076efc9a49494c7dd38ce44e5ab659c4bd337c6->enter($__internal_e694816be106601291f411151076efc9a49494c7dd38ce44e5ab659c4bd337c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_683e2bccf762b2a03effaceb43cc37f8855120bba555a29a397ee542203c8193 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_683e2bccf762b2a03effaceb43cc37f8855120bba555a29a397ee542203c8193->enter($__internal_683e2bccf762b2a03effaceb43cc37f8855120bba555a29a397ee542203c8193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 208
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
        // line 209
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_683e2bccf762b2a03effaceb43cc37f8855120bba555a29a397ee542203c8193->leave($__internal_683e2bccf762b2a03effaceb43cc37f8855120bba555a29a397ee542203c8193_prof);

        
        $__internal_e694816be106601291f411151076efc9a49494c7dd38ce44e5ab659c4bd337c6->leave($__internal_e694816be106601291f411151076efc9a49494c7dd38ce44e5ab659c4bd337c6_prof);

    }

    // line 212
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_f4d91b3160b70d0af2ddc848ac660dc2112d109e5e99cee241f85b1a1305190c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4d91b3160b70d0af2ddc848ac660dc2112d109e5e99cee241f85b1a1305190c->enter($__internal_f4d91b3160b70d0af2ddc848ac660dc2112d109e5e99cee241f85b1a1305190c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_f1e98b1cc8613e72650bfea8a921647f5b739585161d78b80105afe2ae8d0989 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1e98b1cc8613e72650bfea8a921647f5b739585161d78b80105afe2ae8d0989->enter($__internal_f1e98b1cc8613e72650bfea8a921647f5b739585161d78b80105afe2ae8d0989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 214
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 215
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_f1e98b1cc8613e72650bfea8a921647f5b739585161d78b80105afe2ae8d0989->leave($__internal_f1e98b1cc8613e72650bfea8a921647f5b739585161d78b80105afe2ae8d0989_prof);

        
        $__internal_f4d91b3160b70d0af2ddc848ac660dc2112d109e5e99cee241f85b1a1305190c->leave($__internal_f4d91b3160b70d0af2ddc848ac660dc2112d109e5e99cee241f85b1a1305190c_prof);

    }

    // line 218
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_7bf1c01c79f1eca002862890e4fcc98f18da5ea27f703b5e3c0088d204c6785e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bf1c01c79f1eca002862890e4fcc98f18da5ea27f703b5e3c0088d204c6785e->enter($__internal_7bf1c01c79f1eca002862890e4fcc98f18da5ea27f703b5e3c0088d204c6785e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_0a8ef61c419a1f4148939cba3b76df8062e39ec9a94ce53fa0d9d4b53e15bfee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a8ef61c419a1f4148939cba3b76df8062e39ec9a94ce53fa0d9d4b53e15bfee->enter($__internal_0a8ef61c419a1f4148939cba3b76df8062e39ec9a94ce53fa0d9d4b53e15bfee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 219
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_0a8ef61c419a1f4148939cba3b76df8062e39ec9a94ce53fa0d9d4b53e15bfee->leave($__internal_0a8ef61c419a1f4148939cba3b76df8062e39ec9a94ce53fa0d9d4b53e15bfee_prof);

        
        $__internal_7bf1c01c79f1eca002862890e4fcc98f18da5ea27f703b5e3c0088d204c6785e->leave($__internal_7bf1c01c79f1eca002862890e4fcc98f18da5ea27f703b5e3c0088d204c6785e_prof);

    }

    // line 222
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_e832a553df01af15fbcc60bc8e7c5ca8880f36e8819c6bc43f253bfea1eb4a7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e832a553df01af15fbcc60bc8e7c5ca8880f36e8819c6bc43f253bfea1eb4a7a->enter($__internal_e832a553df01af15fbcc60bc8e7c5ca8880f36e8819c6bc43f253bfea1eb4a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_474d7d85a5bda756b9267d835ab721744bd03b8113252232956c7914c970e344 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_474d7d85a5bda756b9267d835ab721744bd03b8113252232956c7914c970e344->enter($__internal_474d7d85a5bda756b9267d835ab721744bd03b8113252232956c7914c970e344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 223
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_474d7d85a5bda756b9267d835ab721744bd03b8113252232956c7914c970e344->leave($__internal_474d7d85a5bda756b9267d835ab721744bd03b8113252232956c7914c970e344_prof);

        
        $__internal_e832a553df01af15fbcc60bc8e7c5ca8880f36e8819c6bc43f253bfea1eb4a7a->leave($__internal_e832a553df01af15fbcc60bc8e7c5ca8880f36e8819c6bc43f253bfea1eb4a7a_prof);

    }

    // line 226
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_754f3cce36317dd803e46223a44021be4777ea499b7469d8341d0ecd688cbbdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_754f3cce36317dd803e46223a44021be4777ea499b7469d8341d0ecd688cbbdd->enter($__internal_754f3cce36317dd803e46223a44021be4777ea499b7469d8341d0ecd688cbbdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_6b5e5c962cbe4b3ff3147347ba5e0900d3e88ea6e3ad1c5d527ee3625bd09597 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b5e5c962cbe4b3ff3147347ba5e0900d3e88ea6e3ad1c5d527ee3625bd09597->enter($__internal_6b5e5c962cbe4b3ff3147347ba5e0900d3e88ea6e3ad1c5d527ee3625bd09597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 227
        echo "    ";
        // line 228
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 229
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 230
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 231
                echo "        ";
            }
            // line 232
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 233
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class"))))));
                // line 234
                echo "        ";
            }
            // line 235
            echo "        ";
            if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
                // line 236
                echo "            ";
                $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                // line 237
                echo "        ";
            }
            // line 238
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 239
            echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
            // line 240
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array()))) : ("")), "html", null, true);
            // line 241
            echo "</label>
    ";
        }
        
        $__internal_6b5e5c962cbe4b3ff3147347ba5e0900d3e88ea6e3ad1c5d527ee3625bd09597->leave($__internal_6b5e5c962cbe4b3ff3147347ba5e0900d3e88ea6e3ad1c5d527ee3625bd09597_prof);

        
        $__internal_754f3cce36317dd803e46223a44021be4777ea499b7469d8341d0ecd688cbbdd->leave($__internal_754f3cce36317dd803e46223a44021be4777ea499b7469d8341d0ecd688cbbdd_prof);

    }

    // line 247
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_ad36f4f863fd0e9c14c3d884aa8e8d8b68170c4b90f23fd3db51b4c6ad7cc3fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad36f4f863fd0e9c14c3d884aa8e8d8b68170c4b90f23fd3db51b4c6ad7cc3fb->enter($__internal_ad36f4f863fd0e9c14c3d884aa8e8d8b68170c4b90f23fd3db51b4c6ad7cc3fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_bfcc2e8642dfdac227d94ab485df3a909890d29d4fac527fd4d2a56b8cafcc14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfcc2e8642dfdac227d94ab485df3a909890d29d4fac527fd4d2a56b8cafcc14->enter($__internal_bfcc2e8642dfdac227d94ab485df3a909890d29d4fac527fd4d2a56b8cafcc14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 248
        $context["_field_type"] = (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "fieldType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "fieldType", array()), "default")) : ("default"));
        // line 249
        echo "    <div class=\"form-group ";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">
        ";
        // line 250
        $context["_field_label"] = (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array(), "array"), null)) : (null));
        // line 251
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("translation_domain" => $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array())) + (twig_test_empty($_label_ = (isset($context["_field_label"]) ? $context["_field_label"] : $this->getContext($context, "_field_label"))) ? array() : array("label" => $_label_)));
        // line 252
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 254
        if ((twig_in_filter((isset($context["_field_type"]) ? $context["_field_type"] : $this->getContext($context, "_field_type")), array(0 => "datetime", 1 => "date", 2 => "time", 3 => "birthday")) && (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "nullable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "nullable", array()), false)) : (false)))) {
            // line 255
            echo "            <div class=\"nullable-control\">
                <label>
                    <input type=\"checkbox\" ";
            // line 257
            if ((null === (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")))) {
                echo "checked=\"checked\"";
            }
            echo ">
                    ";
            // line 258
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.nullable_field", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                </label>
            </div>
        ";
        }
        // line 263
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 265
        if (((($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "help", array()), "")) : ("")) != "")) {
            // line 266
            echo "            <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "field", array()), "help", array()), array(), $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array()));
            echo "</span>
        ";
        }
        // line 268
        echo "    </div>";
        
        $__internal_bfcc2e8642dfdac227d94ab485df3a909890d29d4fac527fd4d2a56b8cafcc14->leave($__internal_bfcc2e8642dfdac227d94ab485df3a909890d29d4fac527fd4d2a56b8cafcc14_prof);

        
        $__internal_ad36f4f863fd0e9c14c3d884aa8e8d8b68170c4b90f23fd3db51b4c6ad7cc3fb->leave($__internal_ad36f4f863fd0e9c14c3d884aa8e8d8b68170c4b90f23fd3db51b4c6ad7cc3fb_prof);

    }

    // line 271
    public function block_collection_row($context, array $blocks = array())
    {
        $__internal_c27d2781ef06ca313bbd2ece288977994aff0860a0b5ea5c51d0782afae62188 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c27d2781ef06ca313bbd2ece288977994aff0860a0b5ea5c51d0782afae62188->enter($__internal_c27d2781ef06ca313bbd2ece288977994aff0860a0b5ea5c51d0782afae62188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_row"));

        $__internal_64fdcc62bdaf125c36d2fa897a1dc32f72a17e4ae077912f5e5adc4e8e9c2412 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64fdcc62bdaf125c36d2fa897a1dc32f72a17e4ae077912f5e5adc4e8e9c2412->enter($__internal_64fdcc62bdaf125c36d2fa897a1dc32f72a17e4ae077912f5e5adc4e8e9c2412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_row"));

        // line 272
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "

    ";
        // line 274
        if (((array_key_exists("allow_add", $context)) ? (_twig_default_filter((isset($context["allow_add"]) ? $context["allow_add"] : $this->getContext($context, "allow_add")), false)) : (false))) {
            // line 275
            echo "        ";
            ob_start();
            // line 276
            echo "            \$(function() {
                if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

                var collection = \$('#";
            // line 279
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "');
                // Use a counter to avoid having the same index more than once
                var numItems = collection.data('count') || collection.children('div.form-group').length;

                collection.prev('.collection-empty').remove();

                var newItem = collection.attr('data-prototype')
                    .replace(/\\>__name__label__\\</g, '>' + numItems + '<')
                    .replace(/_";
            // line 287
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "___name__/g, '_";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "_' + numItems)
                    .replace(/";
            // line 288
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "\\]\\[__name__\\]/g, '";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "][' + numItems + ']')
                ;

                // Increment the counter and store it in the collection
                collection.data('count', ++numItems);

                collection.append(newItem).trigger('easyadmin.collection.item-added');
            });
        ";
            $context["js_add_item"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 297
            echo "
        <div class=\"text-right field-collection-action\">
            <a href=\"#\" onclick=\"";
            // line 299
            echo (isset($context["js_add_item"]) ? $context["js_add_item"] : $this->getContext($context, "js_add_item"));
            echo "\" class=\"text-primary\">
                <i class=\"fa fa-plus-square\"></i>
                ";
            // line 301
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((((twig_length_filter($this->env, (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form"))) == 0)) ? ("action.add_new_item") : ("action.add_another_item")), array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        
        $__internal_64fdcc62bdaf125c36d2fa897a1dc32f72a17e4ae077912f5e5adc4e8e9c2412->leave($__internal_64fdcc62bdaf125c36d2fa897a1dc32f72a17e4ae077912f5e5adc4e8e9c2412_prof);

        
        $__internal_c27d2781ef06ca313bbd2ece288977994aff0860a0b5ea5c51d0782afae62188->leave($__internal_c27d2781ef06ca313bbd2ece288977994aff0860a0b5ea5c51d0782afae62188_prof);

    }

    // line 307
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_9567d040fbf495985b0336607b90648cf3bfa8a87b04b0f95e6aeaa3128ab8d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9567d040fbf495985b0336607b90648cf3bfa8a87b04b0f95e6aeaa3128ab8d6->enter($__internal_9567d040fbf495985b0336607b90648cf3bfa8a87b04b0f95e6aeaa3128ab8d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_94b74c465e58d4efc71f8f3dab77f50e0b2ec88c3ebe0aa713b16d29f9466cd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94b74c465e58d4efc71f8f3dab77f50e0b2ec88c3ebe0aa713b16d29f9466cd3->enter($__internal_94b74c465e58d4efc71f8f3dab77f50e0b2ec88c3ebe0aa713b16d29f9466cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 308
        echo "<div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">";
        // line 309
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 310
        echo "</div>";
        
        $__internal_94b74c465e58d4efc71f8f3dab77f50e0b2ec88c3ebe0aa713b16d29f9466cd3->leave($__internal_94b74c465e58d4efc71f8f3dab77f50e0b2ec88c3ebe0aa713b16d29f9466cd3_prof);

        
        $__internal_9567d040fbf495985b0336607b90648cf3bfa8a87b04b0f95e6aeaa3128ab8d6->leave($__internal_9567d040fbf495985b0336607b90648cf3bfa8a87b04b0f95e6aeaa3128ab8d6_prof);

    }

    // line 313
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_4507d2c4e13827c7c52f153efcfc6bb5e678f98271470874b2137bfee629aaa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4507d2c4e13827c7c52f153efcfc6bb5e678f98271470874b2137bfee629aaa6->enter($__internal_4507d2c4e13827c7c52f153efcfc6bb5e678f98271470874b2137bfee629aaa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_f7f6dd7e56d8e06edd1bcfc75d69245a7289b2d7c957ce412888d6178236f651 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7f6dd7e56d8e06edd1bcfc75d69245a7289b2d7c957ce412888d6178236f651->enter($__internal_f7f6dd7e56d8e06edd1bcfc75d69245a7289b2d7c957ce412888d6178236f651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 314
        $context["force_error"] = true;
        // line 315
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_f7f6dd7e56d8e06edd1bcfc75d69245a7289b2d7c957ce412888d6178236f651->leave($__internal_f7f6dd7e56d8e06edd1bcfc75d69245a7289b2d7c957ce412888d6178236f651_prof);

        
        $__internal_4507d2c4e13827c7c52f153efcfc6bb5e678f98271470874b2137bfee629aaa6->leave($__internal_4507d2c4e13827c7c52f153efcfc6bb5e678f98271470874b2137bfee629aaa6_prof);

    }

    // line 318
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_b3bf26ad51974498612fc4c52e575d4fbbb79757c291af9c75c0d7c7a6245bd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3bf26ad51974498612fc4c52e575d4fbbb79757c291af9c75c0d7c7a6245bd7->enter($__internal_b3bf26ad51974498612fc4c52e575d4fbbb79757c291af9c75c0d7c7a6245bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_7d30f7e4ed8030eef24b3ef8370d599e43ce71350eff990576318a231fd00f33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d30f7e4ed8030eef24b3ef8370d599e43ce71350eff990576318a231fd00f33->enter($__internal_7d30f7e4ed8030eef24b3ef8370d599e43ce71350eff990576318a231fd00f33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 319
        $context["force_error"] = true;
        // line 320
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_7d30f7e4ed8030eef24b3ef8370d599e43ce71350eff990576318a231fd00f33->leave($__internal_7d30f7e4ed8030eef24b3ef8370d599e43ce71350eff990576318a231fd00f33_prof);

        
        $__internal_b3bf26ad51974498612fc4c52e575d4fbbb79757c291af9c75c0d7c7a6245bd7->leave($__internal_b3bf26ad51974498612fc4c52e575d4fbbb79757c291af9c75c0d7c7a6245bd7_prof);

    }

    // line 323
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_db6d493c3e9ffb9af0debe440bc48a2aed678cda09e33ab7c8d36e2cefa11b63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db6d493c3e9ffb9af0debe440bc48a2aed678cda09e33ab7c8d36e2cefa11b63->enter($__internal_db6d493c3e9ffb9af0debe440bc48a2aed678cda09e33ab7c8d36e2cefa11b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_6b4ccf5d5b663486ef24180b34792bd75bcb916a36948885fb9dcb0681036370 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b4ccf5d5b663486ef24180b34792bd75bcb916a36948885fb9dcb0681036370->enter($__internal_6b4ccf5d5b663486ef24180b34792bd75bcb916a36948885fb9dcb0681036370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 324
        $context["force_error"] = true;
        // line 325
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_6b4ccf5d5b663486ef24180b34792bd75bcb916a36948885fb9dcb0681036370->leave($__internal_6b4ccf5d5b663486ef24180b34792bd75bcb916a36948885fb9dcb0681036370_prof);

        
        $__internal_db6d493c3e9ffb9af0debe440bc48a2aed678cda09e33ab7c8d36e2cefa11b63->leave($__internal_db6d493c3e9ffb9af0debe440bc48a2aed678cda09e33ab7c8d36e2cefa11b63_prof);

    }

    // line 328
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_f16d3fe3dcfeb9459d132b2391e17942b9b14ae93cad597f29504275b9d4b67e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f16d3fe3dcfeb9459d132b2391e17942b9b14ae93cad597f29504275b9d4b67e->enter($__internal_f16d3fe3dcfeb9459d132b2391e17942b9b14ae93cad597f29504275b9d4b67e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_e730e0f8f669919f799283a6bc3387a1e26803ca37ae31a2c1613decd48acae2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e730e0f8f669919f799283a6bc3387a1e26803ca37ae31a2c1613decd48acae2->enter($__internal_e730e0f8f669919f799283a6bc3387a1e26803ca37ae31a2c1613decd48acae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 329
        $context["force_error"] = true;
        // line 330
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_e730e0f8f669919f799283a6bc3387a1e26803ca37ae31a2c1613decd48acae2->leave($__internal_e730e0f8f669919f799283a6bc3387a1e26803ca37ae31a2c1613decd48acae2_prof);

        
        $__internal_f16d3fe3dcfeb9459d132b2391e17942b9b14ae93cad597f29504275b9d4b67e->leave($__internal_f16d3fe3dcfeb9459d132b2391e17942b9b14ae93cad597f29504275b9d4b67e_prof);

    }

    // line 333
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_a0dda691b7a581e00428ae865c6fdd0b967b1ae089c915c4ca7f9d54e8af8115 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0dda691b7a581e00428ae865c6fdd0b967b1ae089c915c4ca7f9d54e8af8115->enter($__internal_a0dda691b7a581e00428ae865c6fdd0b967b1ae089c915c4ca7f9d54e8af8115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_711c4b646567084478016052be6c2182a804147038ef24706fa91a6646a39ba9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_711c4b646567084478016052be6c2182a804147038ef24706fa91a6646a39ba9->enter($__internal_711c4b646567084478016052be6c2182a804147038ef24706fa91a6646a39ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 334
        echo "<div class=\"form-group ";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">";
        // line 335
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 336
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 337
        echo "</div>";
        
        $__internal_711c4b646567084478016052be6c2182a804147038ef24706fa91a6646a39ba9->leave($__internal_711c4b646567084478016052be6c2182a804147038ef24706fa91a6646a39ba9_prof);

        
        $__internal_a0dda691b7a581e00428ae865c6fdd0b967b1ae089c915c4ca7f9d54e8af8115->leave($__internal_a0dda691b7a581e00428ae865c6fdd0b967b1ae089c915c4ca7f9d54e8af8115_prof);

    }

    // line 340
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_31d4726633a8d7f51048c3791111f2387b6c621cab43fe2433929a0cbcf41170 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31d4726633a8d7f51048c3791111f2387b6c621cab43fe2433929a0cbcf41170->enter($__internal_31d4726633a8d7f51048c3791111f2387b6c621cab43fe2433929a0cbcf41170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_e65befafa49febe8ed29cb8a56956bfe7b95d6768420d8ebc5419aacad0afde2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e65befafa49febe8ed29cb8a56956bfe7b95d6768420d8ebc5419aacad0afde2->enter($__internal_e65befafa49febe8ed29cb8a56956bfe7b95d6768420d8ebc5419aacad0afde2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 341
        echo "<div class=\"form-group ";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">";
        // line 342
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 343
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 344
        echo "</div>";
        
        $__internal_e65befafa49febe8ed29cb8a56956bfe7b95d6768420d8ebc5419aacad0afde2->leave($__internal_e65befafa49febe8ed29cb8a56956bfe7b95d6768420d8ebc5419aacad0afde2_prof);

        
        $__internal_31d4726633a8d7f51048c3791111f2387b6c621cab43fe2433929a0cbcf41170->leave($__internal_31d4726633a8d7f51048c3791111f2387b6c621cab43fe2433929a0cbcf41170_prof);

    }

    // line 348
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_1883515489b82d11b9f96ce513619fd15b5eb7f1e79164dd3590bc865c1ac873 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1883515489b82d11b9f96ce513619fd15b5eb7f1e79164dd3590bc865c1ac873->enter($__internal_1883515489b82d11b9f96ce513619fd15b5eb7f1e79164dd3590bc865c1ac873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_6bc978f3c78ea6eed696c29dcc5e8bbaf8388d67939ec77e83fc76d0a27b80e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bc978f3c78ea6eed696c29dcc5e8bbaf8388d67939ec77e83fc76d0a27b80e2->enter($__internal_6bc978f3c78ea6eed696c29dcc5e8bbaf8388d67939ec77e83fc76d0a27b80e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 349
        echo "    ";
        $context["error_count"] = twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
        // line 350
        echo "    ";
        if (((isset($context["error_count"]) ? $context["error_count"] : $this->getContext($context, "error_count")) >= 1)) {
            // line 351
            echo "        <div class=\"error-block\">
            <span class=\"label label-danger\">";
            // line 352
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("errors", (isset($context["error_count"]) ? $context["error_count"] : $this->getContext($context, "error_count")), array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
            ";
            // line 353
            if (((isset($context["error_count"]) ? $context["error_count"] : $this->getContext($context, "error_count")) == 1)) {
                // line 354
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))), "message", array()), "html", null, true);
                echo "
            ";
            } else {
                // line 356
                echo "                <ul>
                    ";
                // line 357
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 358
                    echo "                        <li>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                    echo "</li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 360
                echo "                </ul>
            ";
            }
            // line 362
            echo "        </div>
    ";
        }
        
        $__internal_6bc978f3c78ea6eed696c29dcc5e8bbaf8388d67939ec77e83fc76d0a27b80e2->leave($__internal_6bc978f3c78ea6eed696c29dcc5e8bbaf8388d67939ec77e83fc76d0a27b80e2_prof);

        
        $__internal_1883515489b82d11b9f96ce513619fd15b5eb7f1e79164dd3590bc865c1ac873->leave($__internal_1883515489b82d11b9f96ce513619fd15b5eb7f1e79164dd3590bc865c1ac873_prof);

    }

    // line 366
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_97a6dd3b00da10a1e9dd24f13ccfc2835fd56f2e8b04df0d6c5440912649dd89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97a6dd3b00da10a1e9dd24f13ccfc2835fd56f2e8b04df0d6c5440912649dd89->enter($__internal_97a6dd3b00da10a1e9dd24f13ccfc2835fd56f2e8b04df0d6c5440912649dd89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_56b0a2017bfe8566d59806215be21c114fa05856878541025908b20e67032d87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56b0a2017bfe8566d59806215be21c114fa05856878541025908b20e67032d87->enter($__internal_56b0a2017bfe8566d59806215be21c114fa05856878541025908b20e67032d87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 367
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 368
            echo "        ";
            $this->displayBlock("empty_collection", $context, $blocks);
            echo "
    ";
        }
        // line 370
        echo "    ";
        if ((twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) || $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "prototype", array(), "any", true, true))) {
            // line 371
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-empty-collection" =>             $this->renderBlock("empty_collection", $context, $blocks)));
            // line 372
            echo "    ";
        }
        // line 373
        echo "
    ";
        // line 374
        $this->displayParentBlock("form_widget_compound", $context, $blocks);
        
        $__internal_56b0a2017bfe8566d59806215be21c114fa05856878541025908b20e67032d87->leave($__internal_56b0a2017bfe8566d59806215be21c114fa05856878541025908b20e67032d87_prof);

        
        $__internal_97a6dd3b00da10a1e9dd24f13ccfc2835fd56f2e8b04df0d6c5440912649dd89->leave($__internal_97a6dd3b00da10a1e9dd24f13ccfc2835fd56f2e8b04df0d6c5440912649dd89_prof);

    }

    // line 377
    public function block_empty_collection($context, array $blocks = array())
    {
        $__internal_3ecb252ef716806ac2d8913f63b5a9d198dc97808b7f967d0ec5d10a11900f33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ecb252ef716806ac2d8913f63b5a9d198dc97808b7f967d0ec5d10a11900f33->enter($__internal_3ecb252ef716806ac2d8913f63b5a9d198dc97808b7f967d0ec5d10a11900f33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "empty_collection"));

        $__internal_9d63e237beaf082a2e0d52bb9185f0d2fb5dfc484d87f5ddfa4deedd93387813 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d63e237beaf082a2e0d52bb9185f0d2fb5dfc484d87f5ddfa4deedd93387813->enter($__internal_9d63e237beaf082a2e0d52bb9185f0d2fb5dfc484d87f5ddfa4deedd93387813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "empty_collection"));

        // line 378
        echo "    <div class=\"empty collection-empty\">
        ";
        // line 379
        echo twig_include($this->env, $context, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "templates", array()), "label_empty", array()));
        echo "
    </div>
";
        
        $__internal_9d63e237beaf082a2e0d52bb9185f0d2fb5dfc484d87f5ddfa4deedd93387813->leave($__internal_9d63e237beaf082a2e0d52bb9185f0d2fb5dfc484d87f5ddfa4deedd93387813_prof);

        
        $__internal_3ecb252ef716806ac2d8913f63b5a9d198dc97808b7f967d0ec5d10a11900f33->leave($__internal_3ecb252ef716806ac2d8913f63b5a9d198dc97808b7f967d0ec5d10a11900f33_prof);

    }

    // line 383
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_3ee6ef2bbb72d21d2f9a8de43e55070c3e89d263f1aa6a364de6f7256cdff1e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ee6ef2bbb72d21d2f9a8de43e55070c3e89d263f1aa6a364de6f7256cdff1e1->enter($__internal_3ee6ef2bbb72d21d2f9a8de43e55070c3e89d263f1aa6a364de6f7256cdff1e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        $__internal_ccae65a5da6b54f357d814a6b82b63c9fa5e57ead095bba79ba4cd4091e0f4b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccae65a5da6b54f357d814a6b82b63c9fa5e57ead095bba79ba4cd4091e0f4b0->enter($__internal_ccae65a5da6b54f357d814a6b82b63c9fa5e57ead095bba79ba4cd4091e0f4b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 384
        echo "    ";
        $context["force_error"] = true;
        // line 385
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_ccae65a5da6b54f357d814a6b82b63c9fa5e57ead095bba79ba4cd4091e0f4b0->leave($__internal_ccae65a5da6b54f357d814a6b82b63c9fa5e57ead095bba79ba4cd4091e0f4b0_prof);

        
        $__internal_3ee6ef2bbb72d21d2f9a8de43e55070c3e89d263f1aa6a364de6f7256cdff1e1->leave($__internal_3ee6ef2bbb72d21d2f9a8de43e55070c3e89d263f1aa6a364de6f7256cdff1e1_prof);

    }

    // line 388
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_e09ca7d5432773a6228a3c9e91cb809238f9c5f32da77e871bb74c242eb8089d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e09ca7d5432773a6228a3c9e91cb809238f9c5f32da77e871bb74c242eb8089d->enter($__internal_e09ca7d5432773a6228a3c9e91cb809238f9c5f32da77e871bb74c242eb8089d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        $__internal_22603f7e8ca326bf2b9ffd2e9d65186a581eff21d4c09174d4307a56a63be26d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22603f7e8ca326bf2b9ffd2e9d65186a581eff21d4c09174d4307a56a63be26d->enter($__internal_22603f7e8ca326bf2b9ffd2e9d65186a581eff21d4c09174d4307a56a63be26d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        // line 389
        ob_start();
        // line 390
        echo "    <div class=\"easyadmin-vich-file\">
        ";
        // line 391
        if ( !twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter((isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "")) : ("")))) {
            // line 392
            echo "            ";
            $context["download_title"] = ((twig_last($this->env, twig_split_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "/"))) ? (twig_last($this->env, twig_split_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "/"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("download", array(), "VichUploaderBundle")));
            // line 393
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["download_title"]) ? $context["download_title"] : $this->getContext($context, "download_title")), "html", null, true);
            echo "</a>
        ";
        }
        // line 395
        echo "
        <div class=\"row\">
            ";
        // line 397
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete", array(), "any", true, true)) {
            // line 398
            echo "            <div class=\"col-sm-3 col-md-2\">
                ";
            // line 399
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delete", array()), 'row', array("label" => "action.delete"));
            echo "
            </div>
            ";
        }
        // line 402
        echo "            <div class=\"";
        echo (($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete", array(), "any", true, true)) ? ("col-sm-9 col-md-10") : ("col-sm-12"));
        echo "\">
                ";
        // line 403
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
            </div>
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_22603f7e8ca326bf2b9ffd2e9d65186a581eff21d4c09174d4307a56a63be26d->leave($__internal_22603f7e8ca326bf2b9ffd2e9d65186a581eff21d4c09174d4307a56a63be26d_prof);

        
        $__internal_e09ca7d5432773a6228a3c9e91cb809238f9c5f32da77e871bb74c242eb8089d->leave($__internal_e09ca7d5432773a6228a3c9e91cb809238f9c5f32da77e871bb74c242eb8089d_prof);

    }

    // line 410
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_351f324e857d22d2bd7d348107d6eeb2ee5af3c6b98fe47b3a56b4ae3b83d00d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_351f324e857d22d2bd7d348107d6eeb2ee5af3c6b98fe47b3a56b4ae3b83d00d->enter($__internal_351f324e857d22d2bd7d348107d6eeb2ee5af3c6b98fe47b3a56b4ae3b83d00d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        $__internal_699d4c650891729842da6224db9faffc4a4df22ed0bb81ffeb08bf98ef0de0f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_699d4c650891729842da6224db9faffc4a4df22ed0bb81ffeb08bf98ef0de0f5->enter($__internal_699d4c650891729842da6224db9faffc4a4df22ed0bb81ffeb08bf98ef0de0f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 411
        echo "    ";
        $context["force_error"] = true;
        // line 412
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_699d4c650891729842da6224db9faffc4a4df22ed0bb81ffeb08bf98ef0de0f5->leave($__internal_699d4c650891729842da6224db9faffc4a4df22ed0bb81ffeb08bf98ef0de0f5_prof);

        
        $__internal_351f324e857d22d2bd7d348107d6eeb2ee5af3c6b98fe47b3a56b4ae3b83d00d->leave($__internal_351f324e857d22d2bd7d348107d6eeb2ee5af3c6b98fe47b3a56b4ae3b83d00d_prof);

    }

    // line 415
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_2703233494f629420981812e35635dc60e1d8ecd61aeb30c5eb224dccea3f7f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2703233494f629420981812e35635dc60e1d8ecd61aeb30c5eb224dccea3f7f9->enter($__internal_2703233494f629420981812e35635dc60e1d8ecd61aeb30c5eb224dccea3f7f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        $__internal_1f310c9cc6a7c3c027657423c12a6270b1c9de58200e0eecf5d7aeca324e5890 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f310c9cc6a7c3c027657423c12a6270b1c9de58200e0eecf5d7aeca324e5890->enter($__internal_1f310c9cc6a7c3c027657423c12a6270b1c9de58200e0eecf5d7aeca324e5890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        // line 416
        ob_start();
        // line 417
        echo "    <div class=\"easyadmin-vich-image\">
        ";
        // line 418
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
        ";
        // line 419
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete", array(), "any", true, true)) {
            // line 420
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delete", array()), 'row', array("label" => "action.delete"));
            echo "
        ";
        }
        // line 422
        echo "
        ";
        // line 423
        if ( !twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter((isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "")) : ("")))) {
            // line 424
            echo "            ";
            $context["_lightbox_id"] = ("easyadmin-lightbox-" . (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")));
            // line 425
            echo "
            <a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#";
            // line 426
            echo twig_escape_filter($this->env, (isset($context["_lightbox_id"]) ? $context["_lightbox_id"] : $this->getContext($context, "_lightbox_id")), "html", null, true);
            echo "\" data-featherlight-close-on-click=\"anywhere\">
                <img src=\"";
            // line 427
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri"))), "html", null, true);
            echo "\">
            </a>

            <div id=\"";
            // line 430
            echo twig_escape_filter($this->env, (isset($context["_lightbox_id"]) ? $context["_lightbox_id"] : $this->getContext($context, "_lightbox_id")), "html", null, true);
            echo "\" class=\"easyadmin-lightbox\">
                <img src=\"";
            // line 431
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri"))), "html", null, true);
            echo "\">
            </div>
        ";
        }
        // line 434
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_1f310c9cc6a7c3c027657423c12a6270b1c9de58200e0eecf5d7aeca324e5890->leave($__internal_1f310c9cc6a7c3c027657423c12a6270b1c9de58200e0eecf5d7aeca324e5890_prof);

        
        $__internal_2703233494f629420981812e35635dc60e1d8ecd61aeb30c5eb224dccea3f7f9->leave($__internal_2703233494f629420981812e35635dc60e1d8ecd61aeb30c5eb224dccea3f7f9_prof);

    }

    // line 439
    public function block_easyadmin_widget($context, array $blocks = array())
    {
        $__internal_b2e38f8dbf29c421ddd685aa26b115429b3b01f9cd32f71a714151e4a38aea28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2e38f8dbf29c421ddd685aa26b115429b3b01f9cd32f71a714151e4a38aea28->enter($__internal_b2e38f8dbf29c421ddd685aa26b115429b3b01f9cd32f71a714151e4a38aea28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_widget"));

        $__internal_a30fa7c53620f2c843c465f4284cfc30036838170924cbf6da12006e0d2f4a1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a30fa7c53620f2c843c465f4284cfc30036838170924cbf6da12006e0d2f4a1b->enter($__internal_a30fa7c53620f2c843c465f4284cfc30036838170924cbf6da12006e0d2f4a1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_widget"));

        // line 440
        echo "    ";
        $context["_translation_domain"] = $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array());
        // line 441
        echo "    ";
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array())), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "label", array())));
        // line 442
        echo "
    ";
        // line 443
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "errors", array())) > 0)) {
            // line 444
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
    ";
        }
        // line 446
        echo "
    <input type=\"hidden\" name=\"referer\" value=\"";
        // line 447
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "html", null, true);
        echo "\"/>

    <div class=\"row\">
        ";
        // line 450
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["easyadmin_form_groups"]) ? $context["easyadmin_form_groups"] : $this->getContext($context, "easyadmin_form_groups")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["group_name"] => $context["group_config"]) {
            // line 451
            echo "            <div class=\"field-group col-xs-12 ";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["group_config"], "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "css_class", array()), "")) : ("")), "html", null, true);
            echo "\">
                <div class=\"box box-default\">
                    ";
            // line 453
            if (((($this->getAttribute($context["group_config"], "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "label", array()), false)) : (false)) || (($this->getAttribute($context["group_config"], "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "icon", array()), false)) : (false)))) {
                // line 454
                echo "                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\">
                                ";
                // line 456
                if ((($this->getAttribute($context["group_config"], "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "icon", array()), false)) : (false))) {
                    // line 457
                    echo "                                    <i class=\"fa fa-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["group_config"], "icon", array()), "html", null, true);
                    echo "\"></i>
                                ";
                }
                // line 459
                echo "                                ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["group_config"], "label", array()), array(), (isset($context["_translation_domain"]) ? $context["_translation_domain"] : $this->getContext($context, "_translation_domain")));
                echo "
                            </h3>
                        </div>
                    ";
            }
            // line 463
            echo "
                    <div class=\"box-body\">
                        ";
            // line 465
            if ((($this->getAttribute($context["group_config"], "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "help", array()), false)) : (false))) {
                // line 466
                echo "                            <p class=\"help-block\">";
                echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["group_config"], "help", array()), array(), (isset($context["_translation_domain"]) ? $context["_translation_domain"] : $this->getContext($context, "_translation_domain"))), "html", null, true));
                echo "</p>
                        ";
            }
            // line 468
            echo "
                        <div class=\"row\">
                            ";
            // line 470
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                if ((!twig_in_filter("hidden", $this->getAttribute($this->getAttribute($context["field"], "vars", array()), "block_prefixes", array())) && ($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array()), "easyadmin", array()), "form_group", array()) == $context["group_name"]))) {
                    // line 471
                    echo "                                <div class=\"col-xs-12 ";
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
                    echo "\">
                                    ";
                    // line 472
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["field"], 'row');
                    echo "
                                </div>
                            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 475
            echo "                        </div>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 480
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                if (!twig_in_filter("hidden", $this->getAttribute($this->getAttribute($context["field"], "vars", array()), "block_prefixes", array()))) {
                    // line 481
                    echo "                <div class=\"col-xs-12 ";
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
                    echo "\">
                    ";
                    // line 482
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["field"], 'row');
                    echo "
                </div>
            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 485
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_name'], $context['group_config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 486
        echo "    </div>

    <div class=\"row\">
        <div class=\"col-xs-12 form-actions\">
            <div class=\"form-group\">
                <div id=\"form-actions-row\">
                    ";
        // line 492
        $this->displayBlock('item_actions', $context, $blocks);
        // line 516
        echo "                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_a30fa7c53620f2c843c465f4284cfc30036838170924cbf6da12006e0d2f4a1b->leave($__internal_a30fa7c53620f2c843c465f4284cfc30036838170924cbf6da12006e0d2f4a1b_prof);

        
        $__internal_b2e38f8dbf29c421ddd685aa26b115429b3b01f9cd32f71a714151e4a38aea28->leave($__internal_b2e38f8dbf29c421ddd685aa26b115429b3b01f9cd32f71a714151e4a38aea28_prof);

    }

    // line 492
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_e8a375de7c1a388fe7dfba2b58750d3911ff8897020408db0f3603d198a6a335 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8a375de7c1a388fe7dfba2b58750d3911ff8897020408db0f3603d198a6a335->enter($__internal_e8a375de7c1a388fe7dfba2b58750d3911ff8897020408db0f3603d198a6a335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        $__internal_ca799912df25f108438b472255c9f3339885b55dc5ffbf2d6b929c689379cee4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca799912df25f108438b472255c9f3339885b55dc5ffbf2d6b929c689379cee4->enter($__internal_ca799912df25f108438b472255c9f3339885b55dc5ffbf2d6b929c689379cee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        // line 493
        echo "                        ";
        // line 494
        echo "                        <button type=\"submit\" class=\"btn btn-primary action-save\">
                            <i class=\"fa fa-save\"></i> ";
        // line 495
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.save", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), (isset($context["_translation_domain"]) ? $context["_translation_domain"] : $this->getContext($context, "_translation_domain"))), "html", null, true);
        echo "
                        </button>

                        ";
        // line 498
        $context["_entity_actions"] = ((($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "view", array()) == "new")) ? ($this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("new", $this->getAttribute($this->getAttribute(        // line 499
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array()))) : ($this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("edit", $this->getAttribute($this->getAttribute(        // line 500
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array()))));
        // line 501
        echo "
                        ";
        // line 502
        $context["_entity_id"] = ((($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "view", array()) == "new")) ? (null) : ($this->getAttribute($this->getAttribute(        // line 504
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "item", array()), $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "primary_key_field_name", array()))));
        // line 505
        echo "
                        ";
        // line 506
        $context["_request_parameters"] = array("entity" => $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array()), "referer" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer"), "method"));
        // line 507
        echo "
                        ";
        // line 508
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 509
(isset($context["_entity_actions"]) ? $context["_entity_actions"] : $this->getContext($context, "_entity_actions")), "request_parameters" =>         // line 510
(isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), "translation_domain" =>         // line 511
(isset($context["_translation_domain"]) ? $context["_translation_domain"] : $this->getContext($context, "_translation_domain")), "trans_parameters" =>         // line 512
(isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "item_id" =>         // line 513
(isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id"))), false);
        // line 514
        echo "
                    ";
        
        $__internal_ca799912df25f108438b472255c9f3339885b55dc5ffbf2d6b929c689379cee4->leave($__internal_ca799912df25f108438b472255c9f3339885b55dc5ffbf2d6b929c689379cee4_prof);

        
        $__internal_e8a375de7c1a388fe7dfba2b58750d3911ff8897020408db0f3603d198a6a335->leave($__internal_e8a375de7c1a388fe7dfba2b58750d3911ff8897020408db0f3603d198a6a335_prof);

    }

    // line 523
    public function block_easyadmin_autocomplete_widget($context, array $blocks = array())
    {
        $__internal_4eba3c2a380939946f00ec66a7e5e1c00fec04e23784f6844355e01acab309ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4eba3c2a380939946f00ec66a7e5e1c00fec04e23784f6844355e01acab309ef->enter($__internal_4eba3c2a380939946f00ec66a7e5e1c00fec04e23784f6844355e01acab309ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_widget"));

        $__internal_70ad88fdda798bc642ff7afd99558e88198352fe88c2be964c4f3a4e3be618e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70ad88fdda798bc642ff7afd99558e88198352fe88c2be964c4f3a4e3be618e3->enter($__internal_70ad88fdda798bc642ff7afd99558e88198352fe88c2be964c4f3a4e3be618e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_widget"));

        // line 524
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "autocomplete", array()), 'widget', array("attr" => twig_array_merge(        // line 525
(isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-easyadmin-autocomplete-max-results" => $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("show.max_results"), "data-easyadmin-autocomplete-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", array("action" => "autocomplete", "entity" =>         // line 529
(isset($context["autocomplete_entity_name"]) ? $context["autocomplete_entity_name"] : $this->getContext($context, "autocomplete_entity_name"))))))));
        // line 532
        echo "
";
        
        $__internal_70ad88fdda798bc642ff7afd99558e88198352fe88c2be964c4f3a4e3be618e3->leave($__internal_70ad88fdda798bc642ff7afd99558e88198352fe88c2be964c4f3a4e3be618e3_prof);

        
        $__internal_4eba3c2a380939946f00ec66a7e5e1c00fec04e23784f6844355e01acab309ef->leave($__internal_4eba3c2a380939946f00ec66a7e5e1c00fec04e23784f6844355e01acab309ef_prof);

    }

    // line 535
    public function block_easyadmin_autocomplete_inner_label($context, array $blocks = array())
    {
        $__internal_bd4c950fc18728fa0b881b43dba4d5d031373680b834ca0e0beaeed3582513f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd4c950fc18728fa0b881b43dba4d5d031373680b834ca0e0beaeed3582513f2->enter($__internal_bd4c950fc18728fa0b881b43dba4d5d031373680b834ca0e0beaeed3582513f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_inner_label"));

        $__internal_149428897ea6e1878a20eb50dc1613b36c08e59c5c13157ef1848b41215eb85b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_149428897ea6e1878a20eb50dc1613b36c08e59c5c13157ef1848b41215eb85b->enter($__internal_149428897ea6e1878a20eb50dc1613b36c08e59c5c13157ef1848b41215eb85b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_inner_label"));

        // line 536
        echo "    ";
        $context["name"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "vars", array()), "name", array());
        // line 537
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_149428897ea6e1878a20eb50dc1613b36c08e59c5c13157ef1848b41215eb85b->leave($__internal_149428897ea6e1878a20eb50dc1613b36c08e59c5c13157ef1848b41215eb85b_prof);

        
        $__internal_bd4c950fc18728fa0b881b43dba4d5d031373680b834ca0e0beaeed3582513f2->leave($__internal_bd4c950fc18728fa0b881b43dba4d5d031373680b834ca0e0beaeed3582513f2_prof);

    }

    // line 541
    public function block_easyadmin_divider_row($context, array $blocks = array())
    {
        $__internal_4ef3c92fd3475df9d632ab1ac93aa6dc1d8369f53f4bd84ae8a3c26395320881 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ef3c92fd3475df9d632ab1ac93aa6dc1d8369f53f4bd84ae8a3c26395320881->enter($__internal_4ef3c92fd3475df9d632ab1ac93aa6dc1d8369f53f4bd84ae8a3c26395320881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_divider_row"));

        $__internal_7f54c80db8d00958cbb0c38dff26e343e4a98350a179811338585dd4d4cc2122 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f54c80db8d00958cbb0c38dff26e343e4a98350a179811338585dd4d4cc2122->enter($__internal_7f54c80db8d00958cbb0c38dff26e343e4a98350a179811338585dd4d4cc2122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_divider_row"));

        // line 542
        echo "    <div class=\"field-divider\">
        <hr>
    </div>
";
        
        $__internal_7f54c80db8d00958cbb0c38dff26e343e4a98350a179811338585dd4d4cc2122->leave($__internal_7f54c80db8d00958cbb0c38dff26e343e4a98350a179811338585dd4d4cc2122_prof);

        
        $__internal_4ef3c92fd3475df9d632ab1ac93aa6dc1d8369f53f4bd84ae8a3c26395320881->leave($__internal_4ef3c92fd3475df9d632ab1ac93aa6dc1d8369f53f4bd84ae8a3c26395320881_prof);

    }

    // line 548
    public function block_easyadmin_section_row($context, array $blocks = array())
    {
        $__internal_038ceb81559fd16776296a3d54e67f81b0386e99d4ef0be409754c808dd0d2da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_038ceb81559fd16776296a3d54e67f81b0386e99d4ef0be409754c808dd0d2da->enter($__internal_038ceb81559fd16776296a3d54e67f81b0386e99d4ef0be409754c808dd0d2da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_section_row"));

        $__internal_e44904756428495e42a25a0e8fa1eb2f466327b4e07bb393c93f8f1f6d280417 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e44904756428495e42a25a0e8fa1eb2f466327b4e07bb393c93f8f1f6d280417->enter($__internal_e44904756428495e42a25a0e8fa1eb2f466327b4e07bb393c93f8f1f6d280417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_section_row"));

        // line 549
        echo "    ";
        $context["_translation_domain"] = $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array());
        // line 550
        echo "    <div class=\"field-section ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">
        ";
        // line 551
        if (((($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array()), false)) : (false)) || (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "icon", array()), false)) : (false)))) {
            // line 552
            echo "            <h2>
                ";
            // line 553
            if ((($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "icon", array()), false)) : (false))) {
                echo "<i class=\"fa fa-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "field", array()), "icon", array()), "html", null, true);
                echo "\"></i>";
            }
            // line 554
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array()), "")) : ("")), array(), (isset($context["_translation_domain"]) ? $context["_translation_domain"] : $this->getContext($context, "_translation_domain")));
            echo "
            </h2>
        ";
        }
        // line 557
        echo "
        ";
        // line 558
        if ((($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "help", array()), false)) : (false))) {
            // line 559
            echo "            <p class=\"help-block\">";
            echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "field", array()), "help", array()), array(), (isset($context["_translation_domain"]) ? $context["_translation_domain"] : $this->getContext($context, "_translation_domain"))), "html", null, true));
            echo "</p>
        ";
        }
        // line 561
        echo "    </div>
";
        
        $__internal_e44904756428495e42a25a0e8fa1eb2f466327b4e07bb393c93f8f1f6d280417->leave($__internal_e44904756428495e42a25a0e8fa1eb2f466327b4e07bb393c93f8f1f6d280417_prof);

        
        $__internal_038ceb81559fd16776296a3d54e67f81b0386e99d4ef0be409754c808dd0d2da->leave($__internal_038ceb81559fd16776296a3d54e67f81b0386e99d4ef0be409754c808dd0d2da_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/form/bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1928 => 561,  1922 => 559,  1920 => 558,  1917 => 557,  1910 => 554,  1904 => 553,  1901 => 552,  1899 => 551,  1894 => 550,  1891 => 549,  1882 => 548,  1869 => 542,  1860 => 541,  1850 => 537,  1847 => 536,  1838 => 535,  1827 => 532,  1825 => 529,  1824 => 525,  1822 => 524,  1813 => 523,  1802 => 514,  1800 => 513,  1799 => 512,  1798 => 511,  1797 => 510,  1796 => 509,  1795 => 508,  1792 => 507,  1790 => 506,  1787 => 505,  1785 => 504,  1784 => 502,  1781 => 501,  1779 => 500,  1778 => 499,  1777 => 498,  1771 => 495,  1768 => 494,  1766 => 493,  1757 => 492,  1743 => 516,  1741 => 492,  1733 => 486,  1727 => 485,  1717 => 482,  1712 => 481,  1706 => 480,  1697 => 475,  1687 => 472,  1682 => 471,  1677 => 470,  1673 => 468,  1667 => 466,  1665 => 465,  1661 => 463,  1653 => 459,  1647 => 457,  1645 => 456,  1641 => 454,  1639 => 453,  1633 => 451,  1628 => 450,  1622 => 447,  1619 => 446,  1613 => 444,  1611 => 443,  1608 => 442,  1605 => 441,  1602 => 440,  1593 => 439,  1581 => 434,  1575 => 431,  1571 => 430,  1565 => 427,  1561 => 426,  1558 => 425,  1555 => 424,  1553 => 423,  1550 => 422,  1544 => 420,  1542 => 419,  1538 => 418,  1535 => 417,  1533 => 416,  1524 => 415,  1511 => 412,  1508 => 411,  1499 => 410,  1483 => 403,  1478 => 402,  1472 => 399,  1469 => 398,  1467 => 397,  1463 => 395,  1455 => 393,  1452 => 392,  1450 => 391,  1447 => 390,  1445 => 389,  1436 => 388,  1423 => 385,  1420 => 384,  1411 => 383,  1398 => 379,  1395 => 378,  1386 => 377,  1376 => 374,  1373 => 373,  1370 => 372,  1367 => 371,  1364 => 370,  1358 => 368,  1356 => 367,  1347 => 366,  1335 => 362,  1331 => 360,  1322 => 358,  1318 => 357,  1315 => 356,  1309 => 354,  1307 => 353,  1303 => 352,  1300 => 351,  1297 => 350,  1294 => 349,  1285 => 348,  1275 => 344,  1273 => 343,  1271 => 342,  1263 => 341,  1254 => 340,  1244 => 337,  1242 => 336,  1240 => 335,  1232 => 334,  1223 => 333,  1213 => 330,  1211 => 329,  1202 => 328,  1192 => 325,  1190 => 324,  1181 => 323,  1171 => 320,  1169 => 319,  1160 => 318,  1150 => 315,  1148 => 314,  1139 => 313,  1129 => 310,  1127 => 309,  1121 => 308,  1112 => 307,  1097 => 301,  1092 => 299,  1088 => 297,  1074 => 288,  1068 => 287,  1057 => 279,  1052 => 276,  1049 => 275,  1047 => 274,  1041 => 272,  1032 => 271,  1022 => 268,  1016 => 266,  1014 => 265,  1012 => 263,  1005 => 258,  999 => 257,  995 => 255,  993 => 254,  991 => 252,  989 => 251,  987 => 250,  978 => 249,  976 => 248,  967 => 247,  955 => 241,  953 => 240,  951 => 239,  936 => 238,  933 => 237,  930 => 236,  927 => 235,  924 => 234,  921 => 233,  918 => 232,  915 => 231,  912 => 230,  909 => 229,  906 => 228,  904 => 227,  895 => 226,  885 => 223,  876 => 222,  866 => 219,  857 => 218,  847 => 215,  845 => 214,  836 => 212,  826 => 209,  824 => 208,  815 => 207,  804 => 201,  802 => 200,  800 => 199,  797 => 197,  795 => 196,  793 => 195,  784 => 194,  773 => 190,  771 => 189,  769 => 188,  766 => 186,  764 => 185,  762 => 184,  753 => 183,  742 => 179,  736 => 176,  735 => 175,  731 => 174,  727 => 173,  724 => 171,  718 => 168,  717 => 167,  713 => 166,  711 => 165,  709 => 164,  700 => 163,  685 => 157,  680 => 155,  676 => 153,  663 => 143,  658 => 140,  655 => 139,  653 => 138,  651 => 137,  649 => 136,  640 => 135,  628 => 130,  625 => 129,  617 => 128,  612 => 126,  610 => 125,  608 => 124,  605 => 122,  603 => 121,  594 => 120,  582 => 115,  580 => 114,  578 => 112,  577 => 111,  576 => 110,  575 => 109,  570 => 107,  568 => 106,  566 => 105,  563 => 103,  561 => 102,  552 => 101,  541 => 97,  539 => 96,  537 => 95,  535 => 94,  533 => 93,  529 => 92,  527 => 91,  524 => 89,  522 => 88,  513 => 87,  502 => 83,  500 => 82,  498 => 81,  489 => 80,  479 => 77,  473 => 75,  471 => 74,  469 => 73,  463 => 71,  460 => 70,  458 => 69,  455 => 68,  446 => 67,  436 => 64,  434 => 63,  425 => 62,  415 => 59,  413 => 58,  404 => 57,  394 => 54,  391 => 52,  389 => 51,  380 => 50,  365 => 44,  360 => 42,  356 => 40,  343 => 30,  338 => 27,  335 => 26,  333 => 25,  331 => 23,  322 => 22,  312 => 17,  309 => 15,  307 => 13,  306 => 12,  305 => 11,  304 => 9,  303 => 8,  302 => 7,  300 => 5,  298 => 4,  289 => 3,  279 => 548,  276 => 546,  274 => 541,  271 => 539,  269 => 535,  266 => 534,  264 => 523,  261 => 521,  259 => 439,  256 => 437,  254 => 415,  251 => 414,  249 => 410,  246 => 409,  244 => 388,  241 => 387,  239 => 383,  236 => 382,  234 => 377,  232 => 366,  230 => 348,  227 => 346,  225 => 340,  222 => 339,  220 => 333,  217 => 332,  215 => 328,  212 => 327,  210 => 323,  207 => 322,  205 => 318,  202 => 317,  200 => 313,  197 => 312,  195 => 307,  192 => 306,  190 => 271,  187 => 270,  185 => 247,  182 => 246,  179 => 244,  177 => 226,  174 => 225,  172 => 222,  169 => 221,  167 => 218,  164 => 217,  162 => 212,  159 => 211,  157 => 207,  154 => 206,  151 => 204,  149 => 194,  146 => 193,  144 => 183,  141 => 182,  139 => 163,  136 => 162,  134 => 135,  131 => 134,  129 => 120,  126 => 119,  124 => 101,  121 => 100,  119 => 87,  116 => 86,  114 => 80,  111 => 79,  109 => 67,  106 => 66,  104 => 62,  101 => 61,  99 => 57,  96 => 56,  94 => 50,  91 => 49,  89 => 22,  86 => 21,  83 => 19,  81 => 3,  78 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use 'form_div_layout.html.twig' %}

{% block form_start -%}
    {% if 'easyadmin' == block_prefixes|slice(-2)|first %}
        {% set attr = attr|merge({
            'class': [
                _easyadmin_form_type|default('') == 'horizontal' ? 'form-horizontal' : 'form-vertical',
                attr.class|default(''),
                easyadmin.view ~ '-form'
            ]|join(' '),
            'data-view': easyadmin.view,
            'data-entity': easyadmin.entity.name,
            'data-entity-id': attribute(value, easyadmin.entity.primary_key_field_name),
        }) %}
    {% endif %}

    {{- parent() -}}
{%- endblock form_start %}

{# Widgets #}

{% block form_widget %}
    {{- parent() -}}

    {% if form.parent.vars.allow_delete|default(false) %}
        {% set remove_item_javascript %}
            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#{{ id }}').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
                \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        {% endset %}

        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"{{ remove_item_javascript|raw }}\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                {{ 'action.remove_item'|trans({}, 'EasyAdminBundle') }}
            </a>
        </div>
    {% endif %}
{% endblock form_widget %}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set prepend = '{{' == money_pattern[0:2] %}
        {% if not prepend %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if prepend %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}:{{ form_widget(form.minute) }}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
    {% if form.parent.vars.allow_delete|default(false) %}
        {% set remove_item_javascript %}
            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#{{ id }}').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
            \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        {% endset %}

        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"{{ remove_item_javascript|raw }}\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                {{ 'action.remove_item'|trans({}, 'EasyAdminBundle') }}
            </a>
        </div>
    {% endif %}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        <div class=\"control-group\">
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                }) -}}
            {% endfor -%}
        </div>
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do no display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {% set label = name|humanize %}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw -}}
            {{- label is not same as(false) ? label|trans({}, easyadmin.entity.translation_domain) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    {% set _field_type = easyadmin.field.fieldType|default('default') %}
    <div class=\"form-group {% if (not compound or force_error|default(false)) and not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        {% set _field_label = easyadmin.field['label']|default(null) %}
        {{- form_label(form, _field_label, { translation_domain: easyadmin.entity.translation_domain }) -}}
        {{- form_widget(form) -}}

        {% if _field_type in ['datetime', 'date', 'time', 'birthday'] and easyadmin.field.nullable|default(false) %}
            <div class=\"nullable-control\">
                <label>
                    <input type=\"checkbox\" {% if data is null %}checked=\"checked\"{% endif %}>
                    {{ 'label.nullable_field'|trans({}, 'EasyAdminBundle')}}
                </label>
            </div>
        {% endif %}

        {{- form_errors(form) -}}

        {% if easyadmin.field.help|default('') != '' %}
            <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> {{ easyadmin.field.help|trans(domain = easyadmin.entity.translation_domain)|raw }}</span>
        {% endif %}
    </div>
{%- endblock form_row %}

{% block collection_row %}
    {{ block('form_row') }}

    {% if allow_add|default(false) %}
        {% set js_add_item %}
            \$(function() {
                if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

                var collection = \$('#{{ id }}');
                // Use a counter to avoid having the same index more than once
                var numItems = collection.data('count') || collection.children('div.form-group').length;

                collection.prev('.collection-empty').remove();

                var newItem = collection.attr('data-prototype')
                    .replace(/\\>__name__label__\\</g, '>' + numItems + '<')
                    .replace(/_{{ name }}___name__/g, '_{{ name }}_' + numItems)
                    .replace(/{{ name }}\\]\\[__name__\\]/g, '{{ name }}][' + numItems + ']')
                ;

                // Increment the counter and store it in the collection
                collection.data('count', ++numItems);

                collection.append(newItem).trigger('easyadmin.collection.item-added');
            });
        {% endset %}

        <div class=\"text-right field-collection-action\">
            <a href=\"#\" onclick=\"{{ js_add_item|raw }}\" class=\"text-primary\">
                <i class=\"fa fa-plus-square\"></i>
                {{ (form|length == 0 ? 'action.add_new_item' : 'action.add_another_item')|trans({}, 'EasyAdminBundle') }}
            </a>
        </div>
    {% endif %}
{% endblock collection_row %}

{% block button_row -%}
    <div class=\"form-group field-{{ block_prefixes|slice(-2)|first }} {{ easyadmin.field.css_class|default('') }}\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group {% if not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group {% if not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}
{% block form_errors %}
    {% set error_count = errors|length %}
    {% if error_count >= 1 %}
        <div class=\"error-block\">
            <span class=\"label label-danger\">{{ 'errors'|transchoice(error_count, {}, 'EasyAdminBundle') }}</span>
            {% if error_count == 1 %}
                {{ errors|first.message }}
            {% else %}
                <ul>
                    {% for error in errors %}
                        <li>{{ error.message }}</li>
                    {% endfor %}
                </ul>
            {% endif %}
        </div>
    {% endif %}
{% endblock form_errors %}

{%- block form_widget_compound -%}
    {% if value is empty %}
        {{ block('empty_collection') }}
    {% endif %}
    {% if value is empty or form.vars.prototype is defined %}
        {% set attr = attr|merge({'data-empty-collection': block('empty_collection') }) %}
    {% endif %}

    {{ parent() }}
{%- endblock form_widget_compound -%}

{% block empty_collection %}
    <div class=\"empty collection-empty\">
        {{ include(easyadmin.entity.templates.label_empty) }}
    </div>
{% endblock empty_collection %}

{% block vich_file_row %}
    {% set force_error = true %}
    {{ block('form_row') }}
{% endblock %}

{% block vich_file_widget %}
{% spaceless %}
    <div class=\"easyadmin-vich-file\">
        {% if download_uri|default('') is not empty %}
            {% set download_title = download_uri|split('/')|last ?: 'download'|trans({}, 'VichUploaderBundle') %}
            <a href=\"{{ asset(download_uri) }}\">{{ download_title }}</a>
        {% endif %}

        <div class=\"row\">
            {% if form.delete is defined %}
            <div class=\"col-sm-3 col-md-2\">
                {{ form_row(form.delete, { label: 'action.delete' }) }}
            </div>
            {% endif %}
            <div class=\"{{ form.delete is defined ? 'col-sm-9 col-md-10' : 'col-sm-12' }}\">
                {{ form_widget(form.file) }}
            </div>
        </div>
    </div>
{% endspaceless %}
{% endblock %}

{% block vich_image_row %}
    {% set force_error = true %}
    {{ block('form_row') }}
{% endblock %}

{% block vich_image_widget %}
{% spaceless %}
    <div class=\"easyadmin-vich-image\">
        {{ form_widget(form.file) }}
        {% if form.delete is defined %}
            {{ form_row(form.delete, { label: 'action.delete' }) }}
        {% endif %}

        {% if download_uri|default('') is not empty %}
            {% set _lightbox_id = 'easyadmin-lightbox-' ~ id %}

            <a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#{{ _lightbox_id }}\" data-featherlight-close-on-click=\"anywhere\">
                <img src=\"{{ asset(download_uri) }}\">
            </a>

            <div id=\"{{ _lightbox_id }}\" class=\"easyadmin-lightbox\">
                <img src=\"{{ asset(download_uri) }}\">
            </div>
        {% endif %}
    </div>
{% endspaceless %}
{% endblock %}

{# EasyAdmin form type #}
{% block easyadmin_widget %}
    {% set _translation_domain = easyadmin.entity.translation_domain %}
    {% set _trans_parameters = { '%entity_name%':  easyadmin.entity.name|trans, '%entity_label%': easyadmin.entity.label|trans } %}

    {% if form.vars.errors|length > 0 %}
        {{ form_errors(form) }}
    {% endif %}

    <input type=\"hidden\" name=\"referer\" value=\"{{ app.request.query.get('referer', '') }}\"/>

    <div class=\"row\">
        {% for group_name, group_config in easyadmin_form_groups %}
            <div class=\"field-group col-xs-12 {{ group_config.css_class|default('') }}\">
                <div class=\"box box-default\">
                    {% if group_config.label|default(false) or group_config.icon|default(false) %}
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\">
                                {% if group_config.icon|default(false) %}
                                    <i class=\"fa fa-{{ group_config.icon }}\"></i>
                                {% endif %}
                                {{ group_config.label|trans(domain = _translation_domain)|raw }}
                            </h3>
                        </div>
                    {% endif %}

                    <div class=\"box-body\">
                        {% if group_config.help|default(false) %}
                            <p class=\"help-block\">{{ group_config.help|trans(domain = _translation_domain)|nl2br|raw }}</p>
                        {% endif %}

                        <div class=\"row\">
                            {% for field in form.children if 'hidden' not in field.vars.block_prefixes and field.vars.easyadmin.form_group == group_name %}
                                <div class=\"col-xs-12 {{ field.vars.easyadmin.field.css_class|default('') }}\">
                                    {{ form_row(field) }}
                                </div>
                            {% endfor %}
                        </div>
                    </div>
                </div>
            </div>
        {% else %}
            {% for field in form.children if 'hidden' not in field.vars.block_prefixes %}
                <div class=\"col-xs-12 {{ field.vars.easyadmin.field.css_class|default('') }}\">
                    {{ form_row(field) }}
                </div>
            {% endfor %}
        {% endfor %}
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12 form-actions\">
            <div class=\"form-group\">
                <div id=\"form-actions-row\">
                    {% block item_actions %}
                        {# the 'save' action is hardcoded for the 'edit' and 'new' views #}
                        <button type=\"submit\" class=\"btn btn-primary action-save\">
                            <i class=\"fa fa-save\"></i> {{ 'action.save'|trans(_trans_parameters, _translation_domain) }}
                        </button>

                        {% set _entity_actions = (easyadmin.view == 'new')
                            ? easyadmin_get_actions_for_new_item(easyadmin.entity.name)
                            : easyadmin_get_actions_for_edit_item(easyadmin.entity.name) %}

                        {% set _entity_id = (easyadmin.view == 'new')
                            ? null
                            : attribute(easyadmin.item, easyadmin.entity.primary_key_field_name) %}

                        {% set _request_parameters = { entity: easyadmin.entity.name, referer: app.request.query.get('referer') } %}

                        {{ include('@EasyAdmin/default/includes/_actions.html.twig', {
                            actions: _entity_actions,
                            request_parameters: _request_parameters,
                            translation_domain: _translation_domain,
                            trans_parameters: _trans_parameters,
                            item_id: _entity_id
                        }, with_context = false) }}
                    {% endblock item_actions %}
                </div>
            </div>
        </div>
    </div>
{% endblock easyadmin_widget %}

{# EasyAdminAutocomplete form type #}
{% block easyadmin_autocomplete_widget %}
    {{ form_widget(form.autocomplete, {
        attr: attr|merge({
            'data-easyadmin-autocomplete-max-results': easyadmin_config('show.max_results'),
            'data-easyadmin-autocomplete-url' : path('easyadmin', {
                action: 'autocomplete',
                entity: autocomplete_entity_name,
            })|raw })
        })
    }}
{% endblock easyadmin_autocomplete_widget %}

{% block easyadmin_autocomplete_inner_label %}
    {% set name = form.parent.vars.name %}
    {{- block('form_label') -}}
{% endblock easyadmin_autocomplete_inner_label %}

{# EasyAdminDivider form type #}
{% block easyadmin_divider_row %}
    <div class=\"field-divider\">
        <hr>
    </div>
{% endblock easyadmin_divider_row %}

{# EasyAdminSection form type #}
{% block easyadmin_section_row %}
    {% set _translation_domain = easyadmin.entity.translation_domain %}
    <div class=\"field-section {{ easyadmin.field.css_class|default('') }}\">
        {% if easyadmin.field.label|default(false) or easyadmin.field.icon|default(false) %}
            <h2>
                {% if easyadmin.field.icon|default(false) %}<i class=\"fa fa-{{ easyadmin.field.icon }}\"></i>{% endif %}
                {{ easyadmin.field.label|default('')|trans(domain = _translation_domain)|raw }}
            </h2>
        {% endif %}

        {% if easyadmin.field.help|default(false) %}
            <p class=\"help-block\">{{ easyadmin.field.help|trans(domain = _translation_domain)|nl2br|raw }}</p>
        {% endif %}
    </div>
{% endblock easyadmin_section_row %}
", "@EasyAdmin/form/bootstrap_3_layout.html.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/javiereguiluz/easyadmin-bundle/Resources/views/form/bootstrap_3_layout.html.twig");
    }
}
