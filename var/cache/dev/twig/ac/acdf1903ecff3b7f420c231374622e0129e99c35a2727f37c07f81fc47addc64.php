<?php

/* base.html.twig */
class __TwigTemplate_5243e67711bac2fc0c14b6ec06976c49537ac5c99c8f4cd130d64480f977da94 extends Twig_Template
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
        $__internal_24058035f8d791664e83a2daf1d1ee98fa81e9d272f04b1d6016c60cae590a3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24058035f8d791664e83a2daf1d1ee98fa81e9d272f04b1d6016c60cae590a3b->enter($__internal_24058035f8d791664e83a2daf1d1ee98fa81e9d272f04b1d6016c60cae590a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_4aab6636d80cf9c1925a5cbc85f9c7d35f0e676cfd48e000430def4059e2f6c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aab6636d80cf9c1925a5cbc85f9c7d35f0e676cfd48e000430def4059e2f6c5->enter($__internal_4aab6636d80cf9c1925a5cbc85f9c7d35f0e676cfd48e000430def4059e2f6c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
    \t\t\t<a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projets");
        echo "\"><span class=\"glyphicon glyphicon-th-large\" aria-hidden=\"true\"></span> Projets</a>
    \t\t\t<a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
        echo "\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> Profil</a>
          <a href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("indexAdmin");
        echo "\"><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Administration</a>
    \t\t\t<a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"> <span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> Connexion</a>
    \t\t\t<a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
        echo "\"><span class=\"glyphicon glyphicon-log-in\" aria-hidden=\"true\"></span> Deconnexion</a>
    \t\t\t<a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
    \t\t\t<a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
    \t\t\t<a href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
    \t\t\t<a href=\"#\"><i class=\"fa fa-envelope\"></i></a>
    \t\t</div>

    \t\t<!-- Menu button -->
    \t\t<div id=\"menuToggle\"><i class=\"fa fa-bars\"></i></div>
    \t</nav>

        <section>
        ";
        // line 61
        $this->displayBlock('body', $context, $blocks);
        // line 64
        echo "        </section>
        <footer><p  class=\"container\">TeamDEV Copyright 2017</p></footer>
        ";
        // line 66
        $this->displayBlock('javascripts', $context, $blocks);
        // line 147
        echo "    </body>
</html>
";
        
        $__internal_24058035f8d791664e83a2daf1d1ee98fa81e9d272f04b1d6016c60cae590a3b->leave($__internal_24058035f8d791664e83a2daf1d1ee98fa81e9d272f04b1d6016c60cae590a3b_prof);

        
        $__internal_4aab6636d80cf9c1925a5cbc85f9c7d35f0e676cfd48e000430def4059e2f6c5->leave($__internal_4aab6636d80cf9c1925a5cbc85f9c7d35f0e676cfd48e000430def4059e2f6c5_prof);

    }

    // line 61
    public function block_body($context, array $blocks = array())
    {
        $__internal_193d65bcd58e4ae671f6251a40ca0706c5cfdb7141dd1852a3a59bc7ca0ff08f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_193d65bcd58e4ae671f6251a40ca0706c5cfdb7141dd1852a3a59bc7ca0ff08f->enter($__internal_193d65bcd58e4ae671f6251a40ca0706c5cfdb7141dd1852a3a59bc7ca0ff08f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a3ca0395828d4e77dbb4d34837cce4c06e0e0a336b2d10d56e6677bfd17b224d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3ca0395828d4e77dbb4d34837cce4c06e0e0a336b2d10d56e6677bfd17b224d->enter($__internal_a3ca0395828d4e77dbb4d34837cce4c06e0e0a336b2d10d56e6677bfd17b224d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 62
        echo "        ";
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 63
        echo "        ";
        
        $__internal_a3ca0395828d4e77dbb4d34837cce4c06e0e0a336b2d10d56e6677bfd17b224d->leave($__internal_a3ca0395828d4e77dbb4d34837cce4c06e0e0a336b2d10d56e6677bfd17b224d_prof);

        
        $__internal_193d65bcd58e4ae671f6251a40ca0706c5cfdb7141dd1852a3a59bc7ca0ff08f->leave($__internal_193d65bcd58e4ae671f6251a40ca0706c5cfdb7141dd1852a3a59bc7ca0ff08f_prof);

    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2b8a805a8e4f5d96d03369016d49639a23f5081984abfdb2db3d1433005dad47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b8a805a8e4f5d96d03369016d49639a23f5081984abfdb2db3d1433005dad47->enter($__internal_2b8a805a8e4f5d96d03369016d49639a23f5081984abfdb2db3d1433005dad47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9e660d67439e8d6d148a6711eaedd5dcaf2aafe0c02fa3a8688bc29f8d66cb75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e660d67439e8d6d148a6711eaedd5dcaf2aafe0c02fa3a8688bc29f8d66cb75->enter($__internal_9e660d67439e8d6d148a6711eaedd5dcaf2aafe0c02fa3a8688bc29f8d66cb75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 67
        echo "      <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-1.8.0.min.js"), "html", null, true);
        echo "\"></script>
       <!-- <script src=\"https://code.jquery.com/jquery-1.10.2.min.js\"></script> -->
       <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        <!-- <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/masonry.pkgd.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/imagesloaded.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/classie.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/AnimOnScroll.js"), "html", null, true);
        echo "\"></script> -->
        <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("chosen/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>

        <script src=\"https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js\"></script>
        <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/functions.js"), "html", null, true);
        echo "\"></script>

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
        
        $__internal_9e660d67439e8d6d148a6711eaedd5dcaf2aafe0c02fa3a8688bc29f8d66cb75->leave($__internal_9e660d67439e8d6d148a6711eaedd5dcaf2aafe0c02fa3a8688bc29f8d66cb75_prof);

        
        $__internal_2b8a805a8e4f5d96d03369016d49639a23f5081984abfdb2db3d1433005dad47->leave($__internal_2b8a805a8e4f5d96d03369016d49639a23f5081984abfdb2db3d1433005dad47_prof);

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
        return array (  228 => 79,  222 => 76,  218 => 75,  214 => 74,  210 => 73,  206 => 72,  202 => 71,  198 => 70,  194 => 69,  188 => 67,  179 => 66,  169 => 63,  166 => 62,  157 => 61,  145 => 147,  143 => 66,  139 => 64,  137 => 61,  122 => 49,  118 => 48,  114 => 47,  110 => 46,  106 => 45,  102 => 44,  97 => 42,  87 => 35,  72 => 23,  68 => 22,  64 => 21,  59 => 19,  53 => 16,  48 => 14,  44 => 13,  37 => 9,  27 => 1,);
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
    \t\t\t<a href=\"{{path('projets')}}\"><span class=\"glyphicon glyphicon-th-large\" aria-hidden=\"true\"></span> Projets</a>
    \t\t\t<a href=\"{{path('fos_user_profile_show')}}\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> Profil</a>
          <a href=\"{{path('indexAdmin')}}\"><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Administration</a>
    \t\t\t<a href=\"{{path('homepage')}}\"> <span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> Connexion</a>
    \t\t\t<a href=\"{{path('logout')}}\"><span class=\"glyphicon glyphicon-log-in\" aria-hidden=\"true\"></span> Deconnexion</a>
    \t\t\t<a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
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
        <script src=\"{{asset('js/functions.js')}}\"></script>

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
