<?php

/* ArenaFightBundle:Joueur:Layout.html.twig */
class __TwigTemplate_d89170cb9c7dfc092ea575938fb6c5d2805543bbc8396293a2745d8b683b73d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_711fc853ab44008e93e9d7628516e77172fbc03baa4efa91d62ecbe687a54138 = $this->env->getExtension("native_profiler");
        $__internal_711fc853ab44008e93e9d7628516e77172fbc03baa4efa91d62ecbe687a54138->enter($__internal_711fc853ab44008e93e9d7628516e77172fbc03baa4efa91d62ecbe687a54138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArenaFightBundle:Joueur:Layout.html.twig"));

        // line 59
        echo "<!DOCTYPE html>
<html lang=\"en\">

    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"icon\" href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/notaire/images/favicon.ico"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/arenafight/style/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/arenafight/style/bootstrap.min.css"), "html", null, true);
        echo "\">

        <!-- Intégration des propriétés Titouan-->
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"shortcut icon\" href=\"../favicon.ico\">

        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/arenafight/style/demo.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/arenafight/style/style3.css"), "html", null, true);
        echo "\" />
        <script type=\"text/javascript\" src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/arenafight/js/modernizr.custom.86080.js"), "html", null, true);
        echo "\"></script>

        <!--Test Titouan -->
        <link rel=\"stylesheet\" href=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/arenafight/style/test.css"), "html", null, true);
        echo "\">

        <!--End Add files Titouan -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
        <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/arenafight/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 86
        $this->displayBlock('head', $context, $blocks);
        // line 88
        echo "
        <title>Accueil</title>

    </head>

    <header>
        <!--<div class=\"container\"> -->
        <nav class=\"nav\">
            <!-- Button hamburger -->
            <div class=\"toggle-button\" style=\"position: relative; top: 40px;left: 30px; z-index: 400000;\">
                <div class=\"wrapper\">
                    <div class=\"menu-bar menu-bar-top\"></div>
                    <div class=\"menu-bar menu-bar-middle\"></div>
                    <div class=\"menu-bar menu-bar-bottom\"></div>
                </div>
            </div>

            <!--END Button -->
            <ul class=\"menu_header\">
                <li><a href=\"";
        // line 107
        echo $this->env->getExtension('routing')->getUrl("joueur_profil");
        echo "\">Profil</a></li>
                <li><a href=\"";
        // line 108
        echo $this->env->getExtension('routing')->getUrl("fos_user_security_logout");
        echo "\">Deconnexion</a></li>
            </ul>
        </nav>
        <!-- Close div container </div> -->
    </header>

    <body>
        <div id=\"mySidenav\" class=\"sidenav\">
            <section class=\"stats\">

                <ul style=\"margin-top: 150px; line-height: 50px; font-size: 1.5em;\">
                    <li id=\"\"><a href=\"";
        // line 119
        echo $this->env->getExtension('routing')->getUrl("joueur_accueil_persos");
        echo "\">PERSONNAGES</a></li>
                    <li><a href=\"\">Inventaire</a></li>
                    <li><a href=\"\">Boutique</a></li>
                    <li id=\"\"><a href=\"";
        // line 122
        echo $this->env->getExtension('routing')->getUrl("joueur_quetes");
        echo "\">QUETES</a></li>
                    <li id=\"\"><a href=\"\">COMBATS</a></li>
                    <li id=\"\"><a href=\"\">CLASSEMENTS</a></li>
                    <li id=\"\"><a href=\"\">GEMMES</a></li>
                    <li><a href=\"#\">Support</a></li>
            </section>
        </div>
        ";
        // line 129
        $this->displayBlock('body', $context, $blocks);
        // line 131
        echo "
        <footer class='footer'>
        </footer>
        <!--Animation volet jQuery -->
        <script>
            \$(document).ready(function () {
                \$('.stats').hide();
                \$('.toggle-button').on('click', function () {
                    \$('.stats').slideToggle('left');
                });
                var \$toggleButton = \$('.toggle-button');

                // Hamburger button
                \$toggleButton.on('click', function () {
                    \$(this).toggleClass('button-open');
                });
            });
        </script>
        <!--Script slideout.js -->
        <script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/slideout/0.1.11/slideout.min.js"), "html", null, true);
        echo "\"></script>

    </body>
</html>";
        
        $__internal_711fc853ab44008e93e9d7628516e77172fbc03baa4efa91d62ecbe687a54138->leave($__internal_711fc853ab44008e93e9d7628516e77172fbc03baa4efa91d62ecbe687a54138_prof);

    }

    // line 86
    public function block_head($context, array $blocks = array())
    {
        $__internal_3369ae727a305fe6c9ba61e09e6bd81de7ff1f18069781a0ef7d97aa018a81d6 = $this->env->getExtension("native_profiler");
        $__internal_3369ae727a305fe6c9ba61e09e6bd81de7ff1f18069781a0ef7d97aa018a81d6->enter($__internal_3369ae727a305fe6c9ba61e09e6bd81de7ff1f18069781a0ef7d97aa018a81d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 87
        echo "        ";
        
        $__internal_3369ae727a305fe6c9ba61e09e6bd81de7ff1f18069781a0ef7d97aa018a81d6->leave($__internal_3369ae727a305fe6c9ba61e09e6bd81de7ff1f18069781a0ef7d97aa018a81d6_prof);

    }

    // line 129
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ca1cf2564b01f66c6162eb1a58b2c9abc8fe30c194e41ad4dcc84e20e7d0f6e = $this->env->getExtension("native_profiler");
        $__internal_5ca1cf2564b01f66c6162eb1a58b2c9abc8fe30c194e41ad4dcc84e20e7d0f6e->enter($__internal_5ca1cf2564b01f66c6162eb1a58b2c9abc8fe30c194e41ad4dcc84e20e7d0f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 130
        echo "        ";
        
        $__internal_5ca1cf2564b01f66c6162eb1a58b2c9abc8fe30c194e41ad4dcc84e20e7d0f6e->leave($__internal_5ca1cf2564b01f66c6162eb1a58b2c9abc8fe30c194e41ad4dcc84e20e7d0f6e_prof);

    }

    public function getTemplateName()
    {
        return "ArenaFightBundle:Joueur:Layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 130,  181 => 129,  174 => 87,  168 => 86,  157 => 150,  136 => 131,  134 => 129,  124 => 122,  118 => 119,  104 => 108,  100 => 107,  79 => 88,  77 => 86,  72 => 84,  65 => 80,  59 => 77,  55 => 76,  51 => 75,  41 => 68,  37 => 67,  33 => 66,  24 => 59,);
    }
}
/* {#<!DOCTYPE html>*/
/* <html lang="en">*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <link rel="icon" href="{{ asset('bundles/notaire/images/favicon.ico') }}">*/
/*         <link rel="stylesheet" href="{{ asset('bundles/arenafight/style/style.css') }}">*/
/*         <link rel="stylesheet" href="{{ asset('bundles/arenafight/style/bootstrap.min.css') }}">*/
/*         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>*/
/*         <script src="{{ asset('bundles/arenafight/js/bootstrap.min.js') }}"></script>*/
/*         <title>Titre de la page</title>*/
/*     </head>*/
/*     <body>*/
/*         <div class="container">*/
/* */
/*             <header>*/
/*                 <div class="container banniere">*/
/*                 </div>*/
/*                 <div class="container">*/
/*                     <div class="row">*/
/*                         <nav class="navbar navbar-default menu">*/
/*                             <div class="container">*/
/*                                 <ul class="nav navbar-nav">*/
/*                                     <li id=""><a href="{{ url('joueur_accueil_persos') }}">PERSONNAGES</a></li>*/
/*                                     <li class="dropdown">*/
/*                                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ITEMS</a>*/
/*                                         <ul class="dropdown-menu">*/
/*                                             <li><a href="">Inventaire</a></li>*/
/*                                             <li><a href="">Boutique</a></li>*/
/*                                         </ul>*/
/*                                     </li>*/
/*                                     <li id=""><a href="{{ url('joueur_quetes') }}">QUETES</a></li>*/
/*                                     <li id=""><a href="">COMBATS</a></li>*/
/*                                     <li id=""><a href="">CLASSEMENTS</a></li>*/
/*                                     <li id=""><a href="">GEMMES</a></li>*/
/*                                     <li class="dropdown">*/
/*                                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ app.user }}</a>*/
/*                                         <ul class="dropdown-menu">*/
/*                                             <li><a href="{{ url('joueur_profil') }}">Profil</a></li>*/
/*                                             <li><a href="{{ url('fos_user_security_logout') }}">Deconnexion</a></li>*/
/*                                         </ul>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                         </nav>*/
/*                     </div> */
/*                 </div>*/
/*             </header>*/
/* */
/*             <div class="container corps">*/
/*                 {% block body %}*/
/*                 {% endblock %}*/
/*             </div>*/
/* */
/*         </div>*/
/*     </body>*/
/* </html>*/
/* #}<!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <link rel="icon" href="{{ asset('bundles/notaire/images/favicon.ico') }}">*/
/*         <link rel="stylesheet" href="{{ asset('bundles/arenafight/style/style.css') }}">*/
/*         <link rel="stylesheet" href="{{ asset('bundles/arenafight/style/bootstrap.min.css') }}">*/
/* */
/*         <!-- Intégration des propriétés Titouan-->*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*         <link rel="shortcut icon" href="../favicon.ico">*/
/* */
/*         <link rel="stylesheet" type="text/css" href="{{asset('bundles/arenafight/style/demo.css') }}" />*/
/*         <link rel="stylesheet" type="text/css" href="{{asset('bundles/arenafight/style/style3.css') }}" />*/
/*         <script type="text/javascript" src="{{asset('bundles/arenafight/js/modernizr.custom.86080.js') }}"></script>*/
/* */
/*         <!--Test Titouan -->*/
/*         <link rel="stylesheet" href="{{ asset('bundles/arenafight/style/test.css') }}">*/
/* */
/*         <!--End Add files Titouan -->*/
/*         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>*/
/*         <script src="{{ asset('bundles/arenafight/js/bootstrap.min.js') }}"></script>*/
/* */
/*         {% block head %}*/
/*         {% endblock %}*/
/* */
/*         <title>Accueil</title>*/
/* */
/*     </head>*/
/* */
/*     <header>*/
/*         <!--<div class="container"> -->*/
/*         <nav class="nav">*/
/*             <!-- Button hamburger -->*/
/*             <div class="toggle-button" style="position: relative; top: 40px;left: 30px; z-index: 400000;">*/
/*                 <div class="wrapper">*/
/*                     <div class="menu-bar menu-bar-top"></div>*/
/*                     <div class="menu-bar menu-bar-middle"></div>*/
/*                     <div class="menu-bar menu-bar-bottom"></div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <!--END Button -->*/
/*             <ul class="menu_header">*/
/*                 <li><a href="{{ url('joueur_profil') }}">Profil</a></li>*/
/*                 <li><a href="{{ url('fos_user_security_logout') }}">Deconnexion</a></li>*/
/*             </ul>*/
/*         </nav>*/
/*         <!-- Close div container </div> -->*/
/*     </header>*/
/* */
/*     <body>*/
/*         <div id="mySidenav" class="sidenav">*/
/*             <section class="stats">*/
/* */
/*                 <ul style="margin-top: 150px; line-height: 50px; font-size: 1.5em;">*/
/*                     <li id=""><a href="{{ url('joueur_accueil_persos') }}">PERSONNAGES</a></li>*/
/*                     <li><a href="">Inventaire</a></li>*/
/*                     <li><a href="">Boutique</a></li>*/
/*                     <li id=""><a href="{{ url('joueur_quetes') }}">QUETES</a></li>*/
/*                     <li id=""><a href="">COMBATS</a></li>*/
/*                     <li id=""><a href="">CLASSEMENTS</a></li>*/
/*                     <li id=""><a href="">GEMMES</a></li>*/
/*                     <li><a href="#">Support</a></li>*/
/*             </section>*/
/*         </div>*/
/*         {% block body %}*/
/*         {% endblock %}*/
/* */
/*         <footer class='footer'>*/
/*         </footer>*/
/*         <!--Animation volet jQuery -->*/
/*         <script>*/
/*             $(document).ready(function () {*/
/*                 $('.stats').hide();*/
/*                 $('.toggle-button').on('click', function () {*/
/*                     $('.stats').slideToggle('left');*/
/*                 });*/
/*                 var $toggleButton = $('.toggle-button');*/
/* */
/*                 // Hamburger button*/
/*                 $toggleButton.on('click', function () {*/
/*                     $(this).toggleClass('button-open');*/
/*                 });*/
/*             });*/
/*         </script>*/
/*         <!--Script slideout.js -->*/
/*         <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/slideout/0.1.11/slideout.min.js') }}"></script>*/
/* */
/*     </body>*/
/* </html>*/
