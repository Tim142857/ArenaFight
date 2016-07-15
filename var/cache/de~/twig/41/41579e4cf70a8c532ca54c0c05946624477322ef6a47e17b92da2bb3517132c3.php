<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_a0e6c2f9a2c39823de684ba3516c91a0ed0fdccc10177f2ff22726cdfde93220 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_bf1e8eb7a0f781e555a07db76cbee8a36dd3b345f1dfcc9b21406d1addb09f93 = $this->env->getExtension("native_profiler");
        $__internal_bf1e8eb7a0f781e555a07db76cbee8a36dd3b345f1dfcc9b21406d1addb09f93->enter($__internal_bf1e8eb7a0f781e555a07db76cbee8a36dd3b345f1dfcc9b21406d1addb09f93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf1e8eb7a0f781e555a07db76cbee8a36dd3b345f1dfcc9b21406d1addb09f93->leave($__internal_bf1e8eb7a0f781e555a07db76cbee8a36dd3b345f1dfcc9b21406d1addb09f93_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9ed808bdee7b3b0e4b465d99f16e64e105f3ce770722d8805b500f2ffc3e1a7a = $this->env->getExtension("native_profiler");
        $__internal_9ed808bdee7b3b0e4b465d99f16e64e105f3ce770722d8805b500f2ffc3e1a7a->enter($__internal_9ed808bdee7b3b0e4b465d99f16e64e105f3ce770722d8805b500f2ffc3e1a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_9ed808bdee7b3b0e4b465d99f16e64e105f3ce770722d8805b500f2ffc3e1a7a->leave($__internal_9ed808bdee7b3b0e4b465d99f16e64e105f3ce770722d8805b500f2ffc3e1a7a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
