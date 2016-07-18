<?php

/* ArenaFightBundle:Visitor:AccueilVisitor.html.twig */
class __TwigTemplate_62d18f50be2095f05e8ec8763bdbe49d0f0a87739363c63628874be610093247 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ArenaFightBundle:Visitor:LayoutVisitor.html.twig", "ArenaFightBundle:Visitor:AccueilVisitor.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ArenaFightBundle:Visitor:LayoutVisitor.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a73549b3a7db44547c23db8023ebae61c1925314f90ffae22df091905f1e2b3 = $this->env->getExtension("native_profiler");
        $__internal_1a73549b3a7db44547c23db8023ebae61c1925314f90ffae22df091905f1e2b3->enter($__internal_1a73549b3a7db44547c23db8023ebae61c1925314f90ffae22df091905f1e2b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArenaFightBundle:Visitor:AccueilVisitor.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a73549b3a7db44547c23db8023ebae61c1925314f90ffae22df091905f1e2b3->leave($__internal_1a73549b3a7db44547c23db8023ebae61c1925314f90ffae22df091905f1e2b3_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e124a71e917a5376b023b7bed1944fa5c1c6d80e802fb01f70ecb965b8edc9c = $this->env->getExtension("native_profiler");
        $__internal_5e124a71e917a5376b023b7bed1944fa5c1c6d80e802fb01f70ecb965b8edc9c->enter($__internal_5e124a71e917a5376b023b7bed1944fa5c1c6d80e802fb01f70ecb965b8edc9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"container-fluid\">
        <div id=\"mySidenav\" class=\"sidenav\">
            <section class=\"stats\">
                <ul style=\"margin-top: 150px; line-height: 50px; font-size: 1.5em;\">
                    <li><a href=\"#\">Statistiques</a></li>
                    <li><a href=\"#\">A propos</a></li>
                </ul>
            </section>
        </div>
        <ul class=\"cb-slideshow\" style=\"z-index: -999999999999 !important;\">
            <li><span>Image 01</span>
                <div>
                    <h3>EXEMPLE :P</h3></div>
            </li>
            <li><span>Image 02</span>
                <div>
                    <h3>EXEMPLE 2</h3></div>
            </li>
            <li><span>Image 03</span>
                <div>
                    <h3>EXEMPLE 3</h3></div>
            </li>
            <li><span>Image 04</span>
                <div>
                    <h3>EXEMPLE 4</h3></div>
            </li>
            <li><span>Image 05</span>
                <div>
                    <h3>EXEMPLE 5</h3></div>
            </li>
            <li><span>Image 06</span>
                <div>
                    <h3>EXEMPLE 6</h3></div>
            </li>
        </ul>
        <div class='icon-scroll'><div/>

            <h1 class=\"titre\">Bienvenue sur Arena Fight</h1>

        </div>

        <!--Insertion librairies jQuery -->
        <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <!-- jQuery UI -->
        <link rel=\"stylesheet\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css"), "html", null, true);
        echo "\">
        <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Script pour button -->
        <script>
            \$(document).ready(function () {

                var \$toggleButton = \$('.toggle-button');

                // Hamburger button
                \$toggleButton.on('click', function () {
                    \$(this).toggleClass('button-open');
                });
            });
        </script>
        <!--Animation volet jQuery -->
        <script>
            \$(document).ready(function () {
                \$('.stats').hide();
                \$('.toggle-button').on('click', function () {
                    \$('.stats').slideToggle('left');


                });
            });
        </script>
        <!--Script slideout.js -->
        <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/slideout/0.1.11/slideout.min.js"), "html", null, true);
        echo "\"></script>

    ";
        
        $__internal_5e124a71e917a5376b023b7bed1944fa5c1c6d80e802fb01f70ecb965b8edc9c->leave($__internal_5e124a71e917a5376b023b7bed1944fa5c1c6d80e802fb01f70ecb965b8edc9c_prof);

    }

    public function getTemplateName()
    {
        return "ArenaFightBundle:Visitor:AccueilVisitor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 73,  93 => 48,  89 => 47,  84 => 45,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "ArenaFightBundle:Visitor:LayoutVisitor.html.twig" %} */
/* {% block body %}*/
/*     <div class="container-fluid">*/
/*         <div id="mySidenav" class="sidenav">*/
/*             <section class="stats">*/
/*                 <ul style="margin-top: 150px; line-height: 50px; font-size: 1.5em;">*/
/*                     <li><a href="#">Statistiques</a></li>*/
/*                     <li><a href="#">A propos</a></li>*/
/*                 </ul>*/
/*             </section>*/
/*         </div>*/
/*         <ul class="cb-slideshow" style="z-index: -999999999999 !important;">*/
/*             <li><span>Image 01</span>*/
/*                 <div>*/
/*                     <h3>EXEMPLE :P</h3></div>*/
/*             </li>*/
/*             <li><span>Image 02</span>*/
/*                 <div>*/
/*                     <h3>EXEMPLE 2</h3></div>*/
/*             </li>*/
/*             <li><span>Image 03</span>*/
/*                 <div>*/
/*                     <h3>EXEMPLE 3</h3></div>*/
/*             </li>*/
/*             <li><span>Image 04</span>*/
/*                 <div>*/
/*                     <h3>EXEMPLE 4</h3></div>*/
/*             </li>*/
/*             <li><span>Image 05</span>*/
/*                 <div>*/
/*                     <h3>EXEMPLE 5</h3></div>*/
/*             </li>*/
/*             <li><span>Image 06</span>*/
/*                 <div>*/
/*                     <h3>EXEMPLE 6</h3></div>*/
/*             </li>*/
/*         </ul>*/
/*         <div class='icon-scroll'><div/>*/
/* */
/*             <h1 class="titre">Bienvenue sur Arena Fight</h1>*/
/* */
/*         </div>*/
/* */
/*         <!--Insertion librairies jQuery -->*/
/*         <script src="{{ asset('http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js') }}"></script>*/
/*         <!-- jQuery UI -->*/
/*         <link rel="stylesheet" href="{{ asset('https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css') }}">*/
/*         <script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js') }}"></script>*/
/*         <!-- Script pour button -->*/
/*         <script>*/
/*             $(document).ready(function () {*/
/* */
/*                 var $toggleButton = $('.toggle-button');*/
/* */
/*                 // Hamburger button*/
/*                 $toggleButton.on('click', function () {*/
/*                     $(this).toggleClass('button-open');*/
/*                 });*/
/*             });*/
/*         </script>*/
/*         <!--Animation volet jQuery -->*/
/*         <script>*/
/*             $(document).ready(function () {*/
/*                 $('.stats').hide();*/
/*                 $('.toggle-button').on('click', function () {*/
/*                     $('.stats').slideToggle('left');*/
/* */
/* */
/*                 });*/
/*             });*/
/*         </script>*/
/*         <!--Script slideout.js -->*/
/*         <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/slideout/0.1.11/slideout.min.js') }}"></script>*/
/* */
/*     {% endblock %}*/
/* */
