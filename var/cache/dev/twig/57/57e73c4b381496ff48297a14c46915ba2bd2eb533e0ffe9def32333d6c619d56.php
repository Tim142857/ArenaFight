<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_7d6884f749a6dc364737a5b82f4d224a8847505f9b1f2681948256a283677a37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9727b2d0e6d7506b66e03455f6a0396fa3bfdfda3e3db653f3d6bf64ba43abfa = $this->env->getExtension("native_profiler");
        $__internal_9727b2d0e6d7506b66e03455f6a0396fa3bfdfda3e3db653f3d6bf64ba43abfa->enter($__internal_9727b2d0e6d7506b66e03455f6a0396fa3bfdfda3e3db653f3d6bf64ba43abfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_9727b2d0e6d7506b66e03455f6a0396fa3bfdfda3e3db653f3d6bf64ba43abfa->leave($__internal_9727b2d0e6d7506b66e03455f6a0396fa3bfdfda3e3db653f3d6bf64ba43abfa_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
