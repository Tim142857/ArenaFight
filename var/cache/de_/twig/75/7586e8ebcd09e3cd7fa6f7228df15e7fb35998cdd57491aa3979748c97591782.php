<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_8ebccab0665baf088b6244133e70707329826ab4060214eec5ed651e5ff997cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_b296f0110f0fcdce47bdb37476b4a2412a13c4ff2f023777a8ae456b87e6f83a = $this->env->getExtension("native_profiler");
        $__internal_b296f0110f0fcdce47bdb37476b4a2412a13c4ff2f023777a8ae456b87e6f83a->enter($__internal_b296f0110f0fcdce47bdb37476b4a2412a13c4ff2f023777a8ae456b87e6f83a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b296f0110f0fcdce47bdb37476b4a2412a13c4ff2f023777a8ae456b87e6f83a->leave($__internal_b296f0110f0fcdce47bdb37476b4a2412a13c4ff2f023777a8ae456b87e6f83a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_da0a7e9bebe474526be96b3a81df8ae56c6b7b556048a0bbacb8e8f65c3bc823 = $this->env->getExtension("native_profiler");
        $__internal_da0a7e9bebe474526be96b3a81df8ae56c6b7b556048a0bbacb8e8f65c3bc823->enter($__internal_da0a7e9bebe474526be96b3a81df8ae56c6b7b556048a0bbacb8e8f65c3bc823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_da0a7e9bebe474526be96b3a81df8ae56c6b7b556048a0bbacb8e8f65c3bc823->leave($__internal_da0a7e9bebe474526be96b3a81df8ae56c6b7b556048a0bbacb8e8f65c3bc823_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
