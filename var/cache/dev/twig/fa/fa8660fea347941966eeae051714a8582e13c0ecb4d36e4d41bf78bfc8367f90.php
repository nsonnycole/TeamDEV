<?php

/* base.html.twig */
class __TwigTemplate_b5dc802582e8fa74093dc63be0978c536e9e1657cf34a74dc22e25e20fe56def extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_894ea65ae3f97cdc9bc6982074c636dd263fadaaac03a941500ddaaf4fc7cf03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_894ea65ae3f97cdc9bc6982074c636dd263fadaaac03a941500ddaaf4fc7cf03->enter($__internal_894ea65ae3f97cdc9bc6982074c636dd263fadaaac03a941500ddaaf4fc7cf03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_e17f7c739665ed5591962dd90be1fd459cd5afcdd1359853121f14fa2cfac7dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e17f7c739665ed5591962dd90be1fd459cd5afcdd1359853121f14fa2cfac7dd->enter($__internal_e17f7c739665ed5591962dd90be1fd459cd5afcdd1359853121f14fa2cfac7dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"shortcut icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.png"), "html", null, true);
        echo "\">

    <title>TeamDEV</title>

    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("chosen/chosen.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("chosen/chosen.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/datepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    <link href=\"https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css\"rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
      <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
    <![endif]-->

    <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>

  </head>
    <body>
      <!-- Menu -->
    \t<nav class=\"menu\" id=\"theMenu\">
    \t\t<div class=\"menu-wrap\">
    \t\t\t<h1 class=\"logo\"><a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">TeamDEV</a></h1>
    \t\t\t<i class=\"fa fa-arrow-right menu-close\"></i>
    \t\t\t<a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"><span class=\"glyphicon glyphicon-home\" aria-hidden=\"true\"></span> Accueil</a>
          ";
        // line 45
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 46
            echo "        \t<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projets");
            echo "\"><span class=\"glyphicon glyphicon-th-large\" aria-hidden=\"true\"></span> Projets</a>
          <hr>
          <a href=\"";
            // line 48
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> Mon profil</a>
          <!-- <a href=\"";
            // line 49
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("indexAdmin");
            echo "\"><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Administration</a> -->
    \t\t\t<a href=\"";
            // line 50
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mesNotifications");
            echo "\"> <span class=\"glyphicon glyphicon-bell\" aria-hidden=\"true\"></span> Mes notifications</a>
          <a href=\"";
            // line 51
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mesMessages");
            echo "\"> <span class=\"glyphicon glyphicon-envelope\" aria-hidden=\"true\"></span> Mes messages</a>
          <a href=\"";
            // line 52
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mesProjets");
            echo "\"> <span class=\"glyphicon glyphicon-folder-open\" aria-hidden=\"true\"></span> Mes projets</a>
          ";
        } else {
            // line 54
            echo "          <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\"> <span class=\"glyphicon glyphicon-log-in\" aria-hidden=\"true\"></span> Connexion</a>
          ";
        }
        // line 56
        echo "          <hr>
          ";
        // line 57
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 58
            echo "          <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("communaute");
            echo "\"> Communauté</a>
          ";
        }
        // line 60
        echo "          <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
    \t\t\t<a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
    \t\t\t<a href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
    \t\t\t<a href=\"#\"><i class=\"fa fa-envelope\"></i></a>



    \t\t</div>

    \t\t<!-- Menu button -->
    \t\t<div id=\"menuToggle\"><i class=\"fa fa-bars\"></i></div>
    \t</nav>

        <section>
        ";
        // line 74
        $this->displayBlock('body', $context, $blocks);
        // line 77
        echo "        </section>
        <footer><p  class=\"container\">TeamDEV Copyright 2017</p></footer>
        ";
        // line 79
        $this->displayBlock('javascripts', $context, $blocks);
        // line 160
        echo "    </body>
</html>
";
        
        $__internal_894ea65ae3f97cdc9bc6982074c636dd263fadaaac03a941500ddaaf4fc7cf03->leave($__internal_894ea65ae3f97cdc9bc6982074c636dd263fadaaac03a941500ddaaf4fc7cf03_prof);

        
        $__internal_e17f7c739665ed5591962dd90be1fd459cd5afcdd1359853121f14fa2cfac7dd->leave($__internal_e17f7c739665ed5591962dd90be1fd459cd5afcdd1359853121f14fa2cfac7dd_prof);

    }

    // line 74
    public function block_body($context, array $blocks = array())
    {
        $__internal_01a1aa938047ed956c87f23659a231a2f51f30c8bd48baebcf357fad653d8d7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01a1aa938047ed956c87f23659a231a2f51f30c8bd48baebcf357fad653d8d7f->enter($__internal_01a1aa938047ed956c87f23659a231a2f51f30c8bd48baebcf357fad653d8d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_094e69d24eb8e289f122847bffbbe2a2ecc1b704ed31e921def121f727c5e28c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_094e69d24eb8e289f122847bffbbe2a2ecc1b704ed31e921def121f727c5e28c->enter($__internal_094e69d24eb8e289f122847bffbbe2a2ecc1b704ed31e921def121f727c5e28c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 75
        echo "        ";
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 76
        echo "        ";
        
        $__internal_094e69d24eb8e289f122847bffbbe2a2ecc1b704ed31e921def121f727c5e28c->leave($__internal_094e69d24eb8e289f122847bffbbe2a2ecc1b704ed31e921def121f727c5e28c_prof);

        
        $__internal_01a1aa938047ed956c87f23659a231a2f51f30c8bd48baebcf357fad653d8d7f->leave($__internal_01a1aa938047ed956c87f23659a231a2f51f30c8bd48baebcf357fad653d8d7f_prof);

    }

    // line 79
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b8d4d4c87d541d69a6e8fba0e3ca38101b2219a5419965051ea3b5dfc079df54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8d4d4c87d541d69a6e8fba0e3ca38101b2219a5419965051ea3b5dfc079df54->enter($__internal_b8d4d4c87d541d69a6e8fba0e3ca38101b2219a5419965051ea3b5dfc079df54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_83c85dddf4c2ea7835cadab6811c8e14afb50615cf9325a4a7e773e4e818f09e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83c85dddf4c2ea7835cadab6811c8e14afb50615cf9325a4a7e773e4e818f09e->enter($__internal_83c85dddf4c2ea7835cadab6811c8e14afb50615cf9325a4a7e773e4e818f09e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 80
        echo "      <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-1.8.0.min.js"), "html", null, true);
        echo "\"></script>
       <!-- <script src=\"https://code.jquery.com/jquery-1.10.2.min.js\"></script> -->
       <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        <!-- <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/masonry.pkgd.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/imagesloaded.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/classie.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/AnimOnScroll.js"), "html", null, true);
        echo "\"></script> -->
        <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("chosen/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>

        <script src=\"https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js\"></script>
        <!-- <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/functions.js"), "html", null, true);
        echo "\"></script> -->

        <!-- <script src=\"https://cdn.datatables.net/plug-ins/1.10.15/i18n/French.json\"></script> -->
        <!-- <script>
        new AnimOnScroll( document.getElementById( 'grid' ), {
          minDuration : 0.4,
          maxDuration : 0.7,
          viewportFactor : 0.2
        } );
      </script> -->

      <script type=\"text/javascript\">
      \$(document).ready(function() {
       \$('.progress .progress-bar').css(\"width\",
                 function() {
                     return \$(this).attr(\"aria-valuenow\") + \"%\";
                 }
         )

     });


   </script>

   <script type=\"text/javascript\">
   \$(document).ready(function() {

     \$( function() {
       \$('.datepicker').datepicker({
           format: 'dd/mm/yyyy',
           startDate: '-3d'
       });
      } );
    });
</script>

    <script type=\"text/javascript\">
      \$(document).ready(function(){
          \$('#myTable').DataTable();
      });
    </script>

    <script type=\"text/javascript\">
      \$(document).ready(function(){
           \$(\".chosen-select\").chosen();
           \$(\".chosen-select\").chosen({no_results_text: \"Oops, Aucun résultat trouvée!\"});
           \$(\".chosen-select\").chosen({width: \"100%\"});
      });
    </script>

    <script type=\"text/javascript\">
    \$(function() {
      \$('.range').next().text('--'); // Valeur par défaut
      \$('.range').on('input', function() {
        var \$set = \$(this).val();
        \$(this).next().text(\$set);
      });
    });
    </script>

    <script>

       jQuery(document).ready(function(){
           \$('.chosen-select').chosen();
       });
</script>

        ";
        
        $__internal_83c85dddf4c2ea7835cadab6811c8e14afb50615cf9325a4a7e773e4e818f09e->leave($__internal_83c85dddf4c2ea7835cadab6811c8e14afb50615cf9325a4a7e773e4e818f09e_prof);

        
        $__internal_b8d4d4c87d541d69a6e8fba0e3ca38101b2219a5419965051ea3b5dfc079df54->leave($__internal_b8d4d4c87d541d69a6e8fba0e3ca38101b2219a5419965051ea3b5dfc079df54_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 92,  253 => 89,  249 => 88,  245 => 87,  241 => 86,  237 => 85,  233 => 84,  229 => 83,  225 => 82,  219 => 80,  210 => 79,  200 => 76,  197 => 75,  188 => 74,  176 => 160,  174 => 79,  170 => 77,  168 => 74,  152 => 60,  146 => 58,  144 => 57,  141 => 56,  135 => 54,  130 => 52,  126 => 51,  122 => 50,  118 => 49,  114 => 48,  108 => 46,  106 => 45,  102 => 44,  97 => 42,  87 => 35,  72 => 23,  68 => 22,  64 => 21,  59 => 19,  53 => 16,  48 => 14,  44 => 13,  37 => 9,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"shortcut icon\" href=\"{{ asset('favicon.png')}}\">

    <title>TeamDEV</title>

    <link href=\"{{ asset('chosen/chosen.css')}}\" rel=\"stylesheet\">
    <link href=\"{{ asset('chosen/chosen.min.css')}}\" rel=\"stylesheet\">
    <!-- Bootstrap core CSS -->
    <link href=\"{{ asset('css/bootstrap.css')}}\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"{{ asset('css/main.css')}}\" rel=\"stylesheet\">

    <link href=\"{{ asset('css/font-awesome.min.css')}}\" rel=\"stylesheet\">
    <link href=\"{{ asset('css/style.css')}}\" rel=\"stylesheet\">
    <link href=\"{{ asset('css/datepicker.css')}}\" rel=\"stylesheet\">

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    <link href=\"https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css\"rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
      <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
    <![endif]-->

    <script src=\"{{ asset('js/modernizr.custom.js')}}\"></script>

  </head>
    <body>
      <!-- Menu -->
    \t<nav class=\"menu\" id=\"theMenu\">
    \t\t<div class=\"menu-wrap\">
    \t\t\t<h1 class=\"logo\"><a href=\"{{path('homepage')}}\">TeamDEV</a></h1>
    \t\t\t<i class=\"fa fa-arrow-right menu-close\"></i>
    \t\t\t<a href=\"{{path('homepage')}}\"><span class=\"glyphicon glyphicon-home\" aria-hidden=\"true\"></span> Accueil</a>
          {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
        \t<a href=\"{{path('projets')}}\"><span class=\"glyphicon glyphicon-th-large\" aria-hidden=\"true\"></span> Projets</a>
          <hr>
          <a href=\"{{path('fos_user_profile_show')}}\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> Mon profil</a>
          <!-- <a href=\"{{path('indexAdmin')}}\"><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Administration</a> -->
    \t\t\t<a href=\"{{path('mesNotifications')}}\"> <span class=\"glyphicon glyphicon-bell\" aria-hidden=\"true\"></span> Mes notifications</a>
          <a href=\"{{path('mesMessages')}}\"> <span class=\"glyphicon glyphicon-envelope\" aria-hidden=\"true\"></span> Mes messages</a>
          <a href=\"{{path('mesProjets')}}\"> <span class=\"glyphicon glyphicon-folder-open\" aria-hidden=\"true\"></span> Mes projets</a>
          {% else %}
          <a href=\"{{path('fos_user_security_login')}}\"> <span class=\"glyphicon glyphicon-log-in\" aria-hidden=\"true\"></span> Connexion</a>
          {% endif %}
          <hr>
          {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
          <a href=\"{{path('communaute')}}\"> Communauté</a>
          {% endif %}
          <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
    \t\t\t<a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
    \t\t\t<a href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
    \t\t\t<a href=\"#\"><i class=\"fa fa-envelope\"></i></a>



    \t\t</div>

    \t\t<!-- Menu button -->
    \t\t<div id=\"menuToggle\"><i class=\"fa fa-bars\"></i></div>
    \t</nav>

        <section>
        {% block body %}
        {% form_theme form 'bootstrap_3_layout.html.twig' %}
        {% endblock %}
        </section>
        <footer><p  class=\"container\">TeamDEV Copyright 2017</p></footer>
        {% block javascripts %}
      <script src=\"{{asset('js/jquery-1.8.0.min.js')}}\"></script>
       <!-- <script src=\"https://code.jquery.com/jquery-1.10.2.min.js\"></script> -->
       <script src=\"{{asset('js/bootstrap.min.js')}}\"></script>
        <script src=\"{{asset('js/main.js')}}\"></script>
        <!-- <script src=\"{{asset('js/masonry.pkgd.min.js')}}\"></script>
        <script src=\"{{asset('js/imagesloaded.js')}}\"></script>
        <script src=\"{{asset('js/classie.js')}}\"></script>
        <script src=\"{{asset('js/AnimOnScroll.js')}}\"></script> -->
        <script src=\"{{asset('chosen/chosen.jquery.min.js')}}\"></script>
        <script src=\"{{asset('js/bootstrap-datepicker.js')}}\"></script>

        <script src=\"https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js\"></script>
        <!-- <script src=\"{{asset('js/functions.js')}}\"></script> -->

        <!-- <script src=\"https://cdn.datatables.net/plug-ins/1.10.15/i18n/French.json\"></script> -->
        <!-- <script>
        new AnimOnScroll( document.getElementById( 'grid' ), {
          minDuration : 0.4,
          maxDuration : 0.7,
          viewportFactor : 0.2
        } );
      </script> -->

      <script type=\"text/javascript\">
      \$(document).ready(function() {
       \$('.progress .progress-bar').css(\"width\",
                 function() {
                     return \$(this).attr(\"aria-valuenow\") + \"%\";
                 }
         )

     });


   </script>

   <script type=\"text/javascript\">
   \$(document).ready(function() {

     \$( function() {
       \$('.datepicker').datepicker({
           format: 'dd/mm/yyyy',
           startDate: '-3d'
       });
      } );
    });
</script>

    <script type=\"text/javascript\">
      \$(document).ready(function(){
          \$('#myTable').DataTable();
      });
    </script>

    <script type=\"text/javascript\">
      \$(document).ready(function(){
           \$(\".chosen-select\").chosen();
           \$(\".chosen-select\").chosen({no_results_text: \"Oops, Aucun résultat trouvée!\"});
           \$(\".chosen-select\").chosen({width: \"100%\"});
      });
    </script>

    <script type=\"text/javascript\">
    \$(function() {
      \$('.range').next().text('--'); // Valeur par défaut
      \$('.range').on('input', function() {
        var \$set = \$(this).val();
        \$(this).next().text(\$set);
      });
    });
    </script>

    <script>

       jQuery(document).ready(function(){
           \$('.chosen-select').chosen();
       });
</script>

        {% endblock %}
    </body>
</html>
", "base.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/views/base.html.twig");
    }
}
