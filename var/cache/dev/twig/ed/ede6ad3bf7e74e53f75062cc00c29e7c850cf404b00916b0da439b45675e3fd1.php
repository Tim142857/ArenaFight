<?php

/* ArenaFightBundle:Visitor:LayoutVisitor.html.twig */
class __TwigTemplate_8a38a5e78d539d6b55ab6efee5684c07011885e5bdb075f820ac25522c045997 extends Twig_Template
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
        $__internal_700a4e104d5ae0e78a4501289416d5a33fe4aa5a55000487ccaf74584742c592 = $this->env->getExtension("native_profiler");
        $__internal_700a4e104d5ae0e78a4501289416d5a33fe4aa5a55000487ccaf74584742c592->enter($__internal_700a4e104d5ae0e78a4501289416d5a33fe4aa5a55000487ccaf74584742c592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArenaFightBundle:Visitor:LayoutVisitor.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/notaire/images/favicon.ico"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/arenafight/style/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/arenafight/style/bootstrap.min.css"), "html", null, true);
        echo "\">

        <!-- Intégration des propriétés Titouan-->
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"shortcut icon\" href=\"../favicon.ico\">

        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/arenafight/style/demo.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/arenafight/style/style3.css"), "html", null, true);
        echo "\" />
        <script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/arenafight/js/modernizr.custom.86080.js"), "html", null, true);
        echo "\"></script>

        <!--Test Titouan -->
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/arenafight/style/test.css"), "html", null, true);
        echo "\">

        <!--End Add files Titouan -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
        <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/arenafight/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 28
        $this->displayBlock('head', $context, $blocks);
        // line 30
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
        // line 49
        echo $this->env->getExtension('routing')->getUrl("fos_user_security_login");
        echo "\">Se connecter</a></li>
                <li><a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getUrl("accueil_visitor");
        echo "\">Accueil</a></li>
                <li><a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getUrl("fos_user_registration_register");
        echo "\">Creer un compte</a></li>
                <li><a href=\"#\">Support</a></li>
            </ul>
        </nav>
        <!-- Close div container </div> -->
    </header>

    <body>
        <div id=\"mySidenav\" class=\"sidenav\">
            <section class=\"stats\">
                <ul style=\"margin-top: 150px; line-height: 50px; font-size: 1.5em;\">
                    <li><a href=\"#\">Statistiques</a></li>
                    <li><a href=\"#\">A propos</a></li>
                </ul>
            </section>
        </div>
        ";
        // line 67
        $this->displayBlock('body', $context, $blocks);
        // line 69
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
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/slideout/0.1.11/slideout.min.js"), "html", null, true);
        echo "\"></script>

    </body>
</html>";
        
        $__internal_700a4e104d5ae0e78a4501289416d5a33fe4aa5a55000487ccaf74584742c592->leave($__internal_700a4e104d5ae0e78a4501289416d5a33fe4aa5a55000487ccaf74584742c592_prof);

    }

    // line 28
    public function block_head($context, array $blocks = array())
    {
        $__internal_da8ab90a1788752b68e9b3ab4a4789257534d08758791ce96da60fed763b2144 = $this->env->getExtension("native_profiler");
        $__internal_da8ab90a1788752b68e9b3ab4a4789257534d08758791ce96da60fed763b2144->enter($__internal_da8ab90a1788752b68e9b3ab4a4789257534d08758791ce96da60fed763b2144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 29
        echo "        ";
        
        $__internal_da8ab90a1788752b68e9b3ab4a4789257534d08758791ce96da60fed763b2144->leave($__internal_da8ab90a1788752b68e9b3ab4a4789257534d08758791ce96da60fed763b2144_prof);

    }

    // line 67
    public function block_body($context, array $blocks = array())
    {
        $__internal_050e23ec84f3e144a4dcaa57ab89af088566eaffca19ba89931c3a5131edc090 = $this->env->getExtension("native_profiler");
        $__internal_050e23ec84f3e144a4dcaa57ab89af088566eaffca19ba89931c3a5131edc090->enter($__internal_050e23ec84f3e144a4dcaa57ab89af088566eaffca19ba89931c3a5131edc090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 68
        echo "        ";
        
        $__internal_050e23ec84f3e144a4dcaa57ab89af088566eaffca19ba89931c3a5131edc090->leave($__internal_050e23ec84f3e144a4dcaa57ab89af088566eaffca19ba89931c3a5131edc090_prof);

    }

    public function getTemplateName()
    {
        return "ArenaFightBundle:Visitor:LayoutVisitor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 68,  174 => 67,  167 => 29,  161 => 28,  150 => 88,  129 => 69,  127 => 67,  108 => 51,  104 => 50,  100 => 49,  79 => 30,  77 => 28,  72 => 26,  65 => 22,  59 => 19,  55 => 18,  51 => 17,  41 => 10,  37 => 9,  33 => 8,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
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
/*                 <li><a href="{{ url('fos_user_security_login') }}">Se connecter</a></li>*/
/*                 <li><a href="{{ url('accueil_visitor') }}">Accueil</a></li>*/
/*                 <li><a href="{{ url('fos_user_registration_register') }}">Creer un compte</a></li>*/
/*                 <li><a href="#">Support</a></li>*/
/*             </ul>*/
/*         </nav>*/
/*         <!-- Close div container </div> -->*/
/*     </header>*/
/* */
/*     <body>*/
/*         <div id="mySidenav" class="sidenav">*/
/*             <section class="stats">*/
/*                 <ul style="margin-top: 150px; line-height: 50px; font-size: 1.5em;">*/
/*                     <li><a href="#">Statistiques</a></li>*/
/*                     <li><a href="#">A propos</a></li>*/
/*                 </ul>*/
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
