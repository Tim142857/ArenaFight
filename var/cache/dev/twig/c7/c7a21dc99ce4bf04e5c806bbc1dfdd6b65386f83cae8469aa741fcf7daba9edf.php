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
        $__internal_ee70ad535b6991bc0839c79c8d0b478c0e20b19ab89b84ab9e88bb962de8262b = $this->env->getExtension("native_profiler");
        $__internal_ee70ad535b6991bc0839c79c8d0b478c0e20b19ab89b84ab9e88bb962de8262b->enter($__internal_ee70ad535b6991bc0839c79c8d0b478c0e20b19ab89b84ab9e88bb962de8262b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ee70ad535b6991bc0839c79c8d0b478c0e20b19ab89b84ab9e88bb962de8262b->leave($__internal_ee70ad535b6991bc0839c79c8d0b478c0e20b19ab89b84ab9e88bb962de8262b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_338e7910279cbe113b956bc503a501e077502290e22bd824fca63827943fc624 = $this->env->getExtension("native_profiler");
        $__internal_338e7910279cbe113b956bc503a501e077502290e22bd824fca63827943fc624->enter($__internal_338e7910279cbe113b956bc503a501e077502290e22bd824fca63827943fc624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_338e7910279cbe113b956bc503a501e077502290e22bd824fca63827943fc624->leave($__internal_338e7910279cbe113b956bc503a501e077502290e22bd824fca63827943fc624_prof);

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
