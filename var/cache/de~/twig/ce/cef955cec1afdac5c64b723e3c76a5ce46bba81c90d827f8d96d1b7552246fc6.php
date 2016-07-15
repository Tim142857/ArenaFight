<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_0304621bda79c2e2bd8001209eab80130aa531cd09c8ef7245bb03dca4144990 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_799ec91f05419f03a22ec64bd12a04c4b1a67f612858af3d0f3ba73c2b0b65fb = $this->env->getExtension("native_profiler");
        $__internal_799ec91f05419f03a22ec64bd12a04c4b1a67f612858af3d0f3ba73c2b0b65fb->enter($__internal_799ec91f05419f03a22ec64bd12a04c4b1a67f612858af3d0f3ba73c2b0b65fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_799ec91f05419f03a22ec64bd12a04c4b1a67f612858af3d0f3ba73c2b0b65fb->leave($__internal_799ec91f05419f03a22ec64bd12a04c4b1a67f612858af3d0f3ba73c2b0b65fb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6e4a556dc085db551f158c6ed4700c41ce60c9c43f008b635c8d4e3309038603 = $this->env->getExtension("native_profiler");
        $__internal_6e4a556dc085db551f158c6ed4700c41ce60c9c43f008b635c8d4e3309038603->enter($__internal_6e4a556dc085db551f158c6ed4700c41ce60c9c43f008b635c8d4e3309038603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_6e4a556dc085db551f158c6ed4700c41ce60c9c43f008b635c8d4e3309038603->leave($__internal_6e4a556dc085db551f158c6ed4700c41ce60c9c43f008b635c8d4e3309038603_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
