<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_b3517c312cfb70d934c4ed028f0e3256c856af08d11f709cc5755636e8f41330 extends Twig_Template
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
        $__internal_ef7f6e87defe5f02dbae82ce2d10ecaf7975057338c71a91b74d349fd796d2bc = $this->env->getExtension("native_profiler");
        $__internal_ef7f6e87defe5f02dbae82ce2d10ecaf7975057338c71a91b74d349fd796d2bc->enter($__internal_ef7f6e87defe5f02dbae82ce2d10ecaf7975057338c71a91b74d349fd796d2bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef7f6e87defe5f02dbae82ce2d10ecaf7975057338c71a91b74d349fd796d2bc->leave($__internal_ef7f6e87defe5f02dbae82ce2d10ecaf7975057338c71a91b74d349fd796d2bc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3be542c78dec85a198e6f4dbb662214a4a03376ba526d6a0eaeefb8b1c2a23f9 = $this->env->getExtension("native_profiler");
        $__internal_3be542c78dec85a198e6f4dbb662214a4a03376ba526d6a0eaeefb8b1c2a23f9->enter($__internal_3be542c78dec85a198e6f4dbb662214a4a03376ba526d6a0eaeefb8b1c2a23f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_3be542c78dec85a198e6f4dbb662214a4a03376ba526d6a0eaeefb8b1c2a23f9->leave($__internal_3be542c78dec85a198e6f4dbb662214a4a03376ba526d6a0eaeefb8b1c2a23f9_prof);

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
