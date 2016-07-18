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
        $__internal_b7eed60a0834744c8b6d9a94d6fe07e64f2a986cc41fb48b2cb0866d578d9828 = $this->env->getExtension("native_profiler");
        $__internal_b7eed60a0834744c8b6d9a94d6fe07e64f2a986cc41fb48b2cb0866d578d9828->enter($__internal_b7eed60a0834744c8b6d9a94d6fe07e64f2a986cc41fb48b2cb0866d578d9828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArenaFightBundle:Visitor:LayoutVisitor.html.twig"));

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
        ";
        // line 59
        $this->displayBlock('body', $context, $blocks);
        // line 61
        echo "
        <footer class='footer'>
        </footer>
    </body>
</html>";
        
        $__internal_b7eed60a0834744c8b6d9a94d6fe07e64f2a986cc41fb48b2cb0866d578d9828->leave($__internal_b7eed60a0834744c8b6d9a94d6fe07e64f2a986cc41fb48b2cb0866d578d9828_prof);

    }

    // line 28
    public function block_head($context, array $blocks = array())
    {
        $__internal_8b11f215548141645345b467c2bdff173f8b95124b3d4d752cf779b374cab2a0 = $this->env->getExtension("native_profiler");
        $__internal_8b11f215548141645345b467c2bdff173f8b95124b3d4d752cf779b374cab2a0->enter($__internal_8b11f215548141645345b467c2bdff173f8b95124b3d4d752cf779b374cab2a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 29
        echo "        ";
        
        $__internal_8b11f215548141645345b467c2bdff173f8b95124b3d4d752cf779b374cab2a0->leave($__internal_8b11f215548141645345b467c2bdff173f8b95124b3d4d752cf779b374cab2a0_prof);

    }

    // line 59
    public function block_body($context, array $blocks = array())
    {
        $__internal_5f88ccb6498c2f5a2f674004bad28a967959b32309d4458d057113fe697650b9 = $this->env->getExtension("native_profiler");
        $__internal_5f88ccb6498c2f5a2f674004bad28a967959b32309d4458d057113fe697650b9->enter($__internal_5f88ccb6498c2f5a2f674004bad28a967959b32309d4458d057113fe697650b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 60
        echo "        ";
        
        $__internal_5f88ccb6498c2f5a2f674004bad28a967959b32309d4458d057113fe697650b9->leave($__internal_5f88ccb6498c2f5a2f674004bad28a967959b32309d4458d057113fe697650b9_prof);

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
        return array (  151 => 60,  145 => 59,  138 => 29,  132 => 28,  121 => 61,  119 => 59,  108 => 51,  104 => 50,  100 => 49,  79 => 30,  77 => 28,  72 => 26,  65 => 22,  59 => 19,  55 => 18,  51 => 17,  41 => 10,  37 => 9,  33 => 8,  24 => 1,);
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
/*         {% block body %}*/
/*         {% endblock %}*/
/* */
/*         <footer class='footer'>*/
/*         </footer>*/
/*     </body>*/
/* </html>*/
