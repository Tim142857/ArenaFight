<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_9fe372a3d7074d180c12ce260114a7e6b9426956eb5073a7f6ccee51c5b3e0e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_667c54fb4ef9b6e30f99a447556c2ff21332b1e6160ce4ef7303ea6877ec2eb9 = $this->env->getExtension("native_profiler");
        $__internal_667c54fb4ef9b6e30f99a447556c2ff21332b1e6160ce4ef7303ea6877ec2eb9->enter($__internal_667c54fb4ef9b6e30f99a447556c2ff21332b1e6160ce4ef7303ea6877ec2eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_667c54fb4ef9b6e30f99a447556c2ff21332b1e6160ce4ef7303ea6877ec2eb9->leave($__internal_667c54fb4ef9b6e30f99a447556c2ff21332b1e6160ce4ef7303ea6877ec2eb9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_759be116b4c9b3cd1a1d2ba39c48c680de28b290651955506ec56c9cffede8a9 = $this->env->getExtension("native_profiler");
        $__internal_759be116b4c9b3cd1a1d2ba39c48c680de28b290651955506ec56c9cffede8a9->enter($__internal_759be116b4c9b3cd1a1d2ba39c48c680de28b290651955506ec56c9cffede8a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_759be116b4c9b3cd1a1d2ba39c48c680de28b290651955506ec56c9cffede8a9->leave($__internal_759be116b4c9b3cd1a1d2ba39c48c680de28b290651955506ec56c9cffede8a9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
