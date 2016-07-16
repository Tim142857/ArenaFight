<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_5a72cf6eb350d68d111087a64c1a90db288fd0bfc9437733c3e736d13b436fc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_43ce82def782c9a10e3c57a7a7f6590552c29ed40474053a7f12dc479cbcc176 = $this->env->getExtension("native_profiler");
        $__internal_43ce82def782c9a10e3c57a7a7f6590552c29ed40474053a7f12dc479cbcc176->enter($__internal_43ce82def782c9a10e3c57a7a7f6590552c29ed40474053a7f12dc479cbcc176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43ce82def782c9a10e3c57a7a7f6590552c29ed40474053a7f12dc479cbcc176->leave($__internal_43ce82def782c9a10e3c57a7a7f6590552c29ed40474053a7f12dc479cbcc176_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_14e3e6ec229db8d559607623e2edc8639dae3308f3c90b9033c3791893702ba1 = $this->env->getExtension("native_profiler");
        $__internal_14e3e6ec229db8d559607623e2edc8639dae3308f3c90b9033c3791893702ba1->enter($__internal_14e3e6ec229db8d559607623e2edc8639dae3308f3c90b9033c3791893702ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_14e3e6ec229db8d559607623e2edc8639dae3308f3c90b9033c3791893702ba1->leave($__internal_14e3e6ec229db8d559607623e2edc8639dae3308f3c90b9033c3791893702ba1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
