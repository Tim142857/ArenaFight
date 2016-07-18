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
        $__internal_1df4e38662f753567f7b3e964600d6e5719f383094f8bacc6e0f395eac2e0d10 = $this->env->getExtension("native_profiler");
        $__internal_1df4e38662f753567f7b3e964600d6e5719f383094f8bacc6e0f395eac2e0d10->enter($__internal_1df4e38662f753567f7b3e964600d6e5719f383094f8bacc6e0f395eac2e0d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArenaFightBundle:Visitor:AccueilVisitor.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1df4e38662f753567f7b3e964600d6e5719f383094f8bacc6e0f395eac2e0d10->leave($__internal_1df4e38662f753567f7b3e964600d6e5719f383094f8bacc6e0f395eac2e0d10_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_b78d5bd4e52ac62c3663fbbad93e2c464ded3b9157ecc327e5477721aeeb74b7 = $this->env->getExtension("native_profiler");
        $__internal_b78d5bd4e52ac62c3663fbbad93e2c464ded3b9157ecc327e5477721aeeb74b7->enter($__internal_b78d5bd4e52ac62c3663fbbad93e2c464ded3b9157ecc327e5477721aeeb74b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"container-fluid\">
        
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
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <!-- jQuery UI -->
        <link rel=\"stylesheet\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css"), "html", null, true);
        echo "\">
        <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Script pour button -->
        
        
    ";
        
        $__internal_b78d5bd4e52ac62c3663fbbad93e2c464ded3b9157ecc327e5477721aeeb74b7->leave($__internal_b78d5bd4e52ac62c3663fbbad93e2c464ded3b9157ecc327e5477721aeeb74b7_prof);

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
        return array (  86 => 41,  82 => 40,  77 => 38,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "ArenaFightBundle:Visitor:LayoutVisitor.html.twig" %} */
/* {% block body %}*/
/*     <div class="container-fluid">*/
/*         */
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
/*         */
/*         */
/*     {% endblock %}*/
/* */
