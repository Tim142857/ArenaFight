<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_14bc1c9319514b4f114fb78d563c5f00e2c3fb5da07e1936148b1fa4d9cf8fc3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f45821308bf7718e01462822c263cdc4b68df202dcc84380a4b9f48fe245696a = $this->env->getExtension("native_profiler");
        $__internal_f45821308bf7718e01462822c263cdc4b68df202dcc84380a4b9f48fe245696a->enter($__internal_f45821308bf7718e01462822c263cdc4b68df202dcc84380a4b9f48fe245696a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f45821308bf7718e01462822c263cdc4b68df202dcc84380a4b9f48fe245696a->leave($__internal_f45821308bf7718e01462822c263cdc4b68df202dcc84380a4b9f48fe245696a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a7005281d387f770bfe5109926a5d8bef003d683e1a1afd53a1514a626553452 = $this->env->getExtension("native_profiler");
        $__internal_a7005281d387f770bfe5109926a5d8bef003d683e1a1afd53a1514a626553452->enter($__internal_a7005281d387f770bfe5109926a5d8bef003d683e1a1afd53a1514a626553452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a7005281d387f770bfe5109926a5d8bef003d683e1a1afd53a1514a626553452->leave($__internal_a7005281d387f770bfe5109926a5d8bef003d683e1a1afd53a1514a626553452_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
