<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_432119101c8bc1561455388c5b835faf96d33a7629a787ac332a3b9faecd424e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_a420a605da2d1c0505abc724dafe3f73c0652713cff17a72982702a8e0412f98 = $this->env->getExtension("native_profiler");
        $__internal_a420a605da2d1c0505abc724dafe3f73c0652713cff17a72982702a8e0412f98->enter($__internal_a420a605da2d1c0505abc724dafe3f73c0652713cff17a72982702a8e0412f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a420a605da2d1c0505abc724dafe3f73c0652713cff17a72982702a8e0412f98->leave($__internal_a420a605da2d1c0505abc724dafe3f73c0652713cff17a72982702a8e0412f98_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_66f08f84f757776685eab012861c6a22af17d1ef7883def5e0a19f2b11845011 = $this->env->getExtension("native_profiler");
        $__internal_66f08f84f757776685eab012861c6a22af17d1ef7883def5e0a19f2b11845011->enter($__internal_66f08f84f757776685eab012861c6a22af17d1ef7883def5e0a19f2b11845011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_66f08f84f757776685eab012861c6a22af17d1ef7883def5e0a19f2b11845011->leave($__internal_66f08f84f757776685eab012861c6a22af17d1ef7883def5e0a19f2b11845011_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
