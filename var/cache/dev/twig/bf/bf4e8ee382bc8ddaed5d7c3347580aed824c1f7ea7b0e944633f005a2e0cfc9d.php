<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_6bdfa45cd686b631c8d6e46fa0231f4e07b45390642a9d8e77fe9fdad2421e60 extends Twig_Template
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
        $__internal_41d3cfa6a4cbfdcf8e6bf0ec38800afa80a196cb64b95c25d925ec84cbcfe198 = $this->env->getExtension("native_profiler");
        $__internal_41d3cfa6a4cbfdcf8e6bf0ec38800afa80a196cb64b95c25d925ec84cbcfe198->enter($__internal_41d3cfa6a4cbfdcf8e6bf0ec38800afa80a196cb64b95c25d925ec84cbcfe198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_41d3cfa6a4cbfdcf8e6bf0ec38800afa80a196cb64b95c25d925ec84cbcfe198->leave($__internal_41d3cfa6a4cbfdcf8e6bf0ec38800afa80a196cb64b95c25d925ec84cbcfe198_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_67acb41d359255f4809d2b49e7b67f6c5ad4cb6100454061faca13c0cc5bd83b = $this->env->getExtension("native_profiler");
        $__internal_67acb41d359255f4809d2b49e7b67f6c5ad4cb6100454061faca13c0cc5bd83b->enter($__internal_67acb41d359255f4809d2b49e7b67f6c5ad4cb6100454061faca13c0cc5bd83b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_67acb41d359255f4809d2b49e7b67f6c5ad4cb6100454061faca13c0cc5bd83b->leave($__internal_67acb41d359255f4809d2b49e7b67f6c5ad4cb6100454061faca13c0cc5bd83b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
