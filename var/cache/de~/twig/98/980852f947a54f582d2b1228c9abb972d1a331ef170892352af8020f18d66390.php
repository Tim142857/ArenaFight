<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_92ae604d4b60c98e8827063d0a11d6b359bb91700fcb9b5961888740e5e98a32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1fe3117e01b5bf4fa5dae2d5812a13f443de61de0847e0dafcb13b9f3ff79a84 = $this->env->getExtension("native_profiler");
        $__internal_1fe3117e01b5bf4fa5dae2d5812a13f443de61de0847e0dafcb13b9f3ff79a84->enter($__internal_1fe3117e01b5bf4fa5dae2d5812a13f443de61de0847e0dafcb13b9f3ff79a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fe3117e01b5bf4fa5dae2d5812a13f443de61de0847e0dafcb13b9f3ff79a84->leave($__internal_1fe3117e01b5bf4fa5dae2d5812a13f443de61de0847e0dafcb13b9f3ff79a84_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b38463a4a3638d0c9ecce3d8b7c900959becb24bf1c075b72ac183b5aa926841 = $this->env->getExtension("native_profiler");
        $__internal_b38463a4a3638d0c9ecce3d8b7c900959becb24bf1c075b72ac183b5aa926841->enter($__internal_b38463a4a3638d0c9ecce3d8b7c900959becb24bf1c075b72ac183b5aa926841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_b38463a4a3638d0c9ecce3d8b7c900959becb24bf1c075b72ac183b5aa926841->leave($__internal_b38463a4a3638d0c9ecce3d8b7c900959becb24bf1c075b72ac183b5aa926841_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
