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
        $__internal_75e4d68f39f4cb8105781501d8072c8a37752a17334aa7a4053ab329bf0dde62 = $this->env->getExtension("native_profiler");
        $__internal_75e4d68f39f4cb8105781501d8072c8a37752a17334aa7a4053ab329bf0dde62->enter($__internal_75e4d68f39f4cb8105781501d8072c8a37752a17334aa7a4053ab329bf0dde62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_75e4d68f39f4cb8105781501d8072c8a37752a17334aa7a4053ab329bf0dde62->leave($__internal_75e4d68f39f4cb8105781501d8072c8a37752a17334aa7a4053ab329bf0dde62_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_4103230c4d9d672187c77c37c3fbcf87824ae8c25ef1ff96affd9ce53077f76b = $this->env->getExtension("native_profiler");
        $__internal_4103230c4d9d672187c77c37c3fbcf87824ae8c25ef1ff96affd9ce53077f76b->enter($__internal_4103230c4d9d672187c77c37c3fbcf87824ae8c25ef1ff96affd9ce53077f76b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4103230c4d9d672187c77c37c3fbcf87824ae8c25ef1ff96affd9ce53077f76b->leave($__internal_4103230c4d9d672187c77c37c3fbcf87824ae8c25ef1ff96affd9ce53077f76b_prof);

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
