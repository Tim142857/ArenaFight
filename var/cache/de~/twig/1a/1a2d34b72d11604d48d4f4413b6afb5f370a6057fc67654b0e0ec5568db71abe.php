<?php

/* @ArenaFight/Layout.html.twig */
class __TwigTemplate_b49f10b0005afe34df6fda234b97a89aa9cfde478683649a56e19f775bdbf360 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_45a55c9e5b29fff4827ff3c304290bb324bb1ad54ef776581fb573518eb23f31 = $this->env->getExtension("native_profiler");
        $__internal_45a55c9e5b29fff4827ff3c304290bb324bb1ad54ef776581fb573518eb23f31->enter($__internal_45a55c9e5b29fff4827ff3c304290bb324bb1ad54ef776581fb573518eb23f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ArenaFight/Layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/notaire/images/favicon.ico"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/arenafight/style/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/arenafight/style/bootstrap.min.css"), "html", null, true);
        echo "\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
        <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/arenafight/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <title>";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</title>
    </head>
    <body>
        <div class=\"container\">
            <header>
                <div class=\"container banniere\">
                </div>
                <div class=\"container\">
                    <nav class=\"navbar navbar-default menu\">
                        <div class=\"container\">
                            <ul class=\"nav navbar-nav\">
                                <li id=\"\"><a href=\"\">ACCUEIL</a></li>
                                <li id=\"\"><a href=\"\">PERSONNAGES</a></li>
                                <li id=\"\"><a href=\"\">INVENTAIRE</a></li>
                                <li id=\"\"><a href=\"\">QUETE</a></li>
                                <li id=\"\"><a href=\"\">COMBATS</a></li>
                                <li id=\"\"><a href=\"\">CLASSEMENTS</a></li>
                                <li id=\"\"><a href=\"\">BOUTIQUE</a></li>
                                <li id=\"\"><a href=\"\">SUPPORT</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </header>

            <div class=\"container corps\">
                ";
        // line 38
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "            </div>
        </div>
    </body>
</html>



";
        
        $__internal_45a55c9e5b29fff4827ff3c304290bb324bb1ad54ef776581fb573518eb23f31->leave($__internal_45a55c9e5b29fff4827ff3c304290bb324bb1ad54ef776581fb573518eb23f31_prof);

    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        $__internal_9349f1680769e2f2b5e1e215db20682b0e34752981cd07f8d3d8cff9b22f8560 = $this->env->getExtension("native_profiler");
        $__internal_9349f1680769e2f2b5e1e215db20682b0e34752981cd07f8d3d8cff9b22f8560->enter($__internal_9349f1680769e2f2b5e1e215db20682b0e34752981cd07f8d3d8cff9b22f8560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 39
        echo "                ";
        
        $__internal_9349f1680769e2f2b5e1e215db20682b0e34752981cd07f8d3d8cff9b22f8560->leave($__internal_9349f1680769e2f2b5e1e215db20682b0e34752981cd07f8d3d8cff9b22f8560_prof);

    }

    public function getTemplateName()
    {
        return "@ArenaFight/Layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 39,  93 => 38,  79 => 40,  77 => 38,  48 => 12,  44 => 11,  39 => 9,  35 => 8,  31 => 7,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
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
/*         <title>{{ title }}</title>*/
/*     </head>*/
/*     <body>*/
/*         <div class="container">*/
/*             <header>*/
/*                 <div class="container banniere">*/
/*                 </div>*/
/*                 <div class="container">*/
/*                     <nav class="navbar navbar-default menu">*/
/*                         <div class="container">*/
/*                             <ul class="nav navbar-nav">*/
/*                                 <li id=""><a href="">ACCUEIL</a></li>*/
/*                                 <li id=""><a href="">PERSONNAGES</a></li>*/
/*                                 <li id=""><a href="">INVENTAIRE</a></li>*/
/*                                 <li id=""><a href="">QUETE</a></li>*/
/*                                 <li id=""><a href="">COMBATS</a></li>*/
/*                                 <li id=""><a href="">CLASSEMENTS</a></li>*/
/*                                 <li id=""><a href="">BOUTIQUE</a></li>*/
/*                                 <li id=""><a href="">SUPPORT</a></li>*/
/*                             </ul>*/
/*                         </div>*/
/*                     </nav>*/
/*                 </div>*/
/*             </header>*/
/* */
/*             <div class="container corps">*/
/*                 {% block body %}*/
/*                 {% endblock %}*/
/*             </div>*/
/*         </div>*/
/*     </body>*/
/* </html>*/
/* */
/* */
/* */
/* */
