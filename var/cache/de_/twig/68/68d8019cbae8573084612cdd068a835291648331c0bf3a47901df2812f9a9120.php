<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_9b238477b79044e51e60a6e1c6855d2acd277934acfb7e6ec352ed5843a4d6ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_1f308cd8b66922ec0541682bd76038733c7a716bb81d8a1dcab7eb5c981d92de = $this->env->getExtension("native_profiler");
        $__internal_1f308cd8b66922ec0541682bd76038733c7a716bb81d8a1dcab7eb5c981d92de->enter($__internal_1f308cd8b66922ec0541682bd76038733c7a716bb81d8a1dcab7eb5c981d92de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f308cd8b66922ec0541682bd76038733c7a716bb81d8a1dcab7eb5c981d92de->leave($__internal_1f308cd8b66922ec0541682bd76038733c7a716bb81d8a1dcab7eb5c981d92de_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bda98c5e725508b0dfd8643b6ca6b641c339679c54ad44d187c516ce543b1a53 = $this->env->getExtension("native_profiler");
        $__internal_bda98c5e725508b0dfd8643b6ca6b641c339679c54ad44d187c516ce543b1a53->enter($__internal_bda98c5e725508b0dfd8643b6ca6b641c339679c54ad44d187c516ce543b1a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_bda98c5e725508b0dfd8643b6ca6b641c339679c54ad44d187c516ce543b1a53->leave($__internal_bda98c5e725508b0dfd8643b6ca6b641c339679c54ad44d187c516ce543b1a53_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
