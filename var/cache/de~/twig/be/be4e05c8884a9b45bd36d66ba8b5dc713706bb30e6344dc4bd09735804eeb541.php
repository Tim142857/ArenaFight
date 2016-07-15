<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_777fdd66cf8c7a5cf1d8c3dcd113020f4543a6e5f8029ced1d0dcf18cdefa641 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_6e4619cadb8aaefe9b2ef9366179a2b88723acde89045f84b919134cc8531eca = $this->env->getExtension("native_profiler");
        $__internal_6e4619cadb8aaefe9b2ef9366179a2b88723acde89045f84b919134cc8531eca->enter($__internal_6e4619cadb8aaefe9b2ef9366179a2b88723acde89045f84b919134cc8531eca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e4619cadb8aaefe9b2ef9366179a2b88723acde89045f84b919134cc8531eca->leave($__internal_6e4619cadb8aaefe9b2ef9366179a2b88723acde89045f84b919134cc8531eca_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b0920e0275f92b464b1d9cb42f8ca45c2c746ec76d24dbb7cb6af32656e42e1b = $this->env->getExtension("native_profiler");
        $__internal_b0920e0275f92b464b1d9cb42f8ca45c2c746ec76d24dbb7cb6af32656e42e1b->enter($__internal_b0920e0275f92b464b1d9cb42f8ca45c2c746ec76d24dbb7cb6af32656e42e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_b0920e0275f92b464b1d9cb42f8ca45c2c746ec76d24dbb7cb6af32656e42e1b->leave($__internal_b0920e0275f92b464b1d9cb42f8ca45c2c746ec76d24dbb7cb6af32656e42e1b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
