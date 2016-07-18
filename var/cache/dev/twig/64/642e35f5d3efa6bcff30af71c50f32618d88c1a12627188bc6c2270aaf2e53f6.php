<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_0334106d97f8bfad312d1c6daa29a721344ba5b81b1ef0887a23ae37b6d817f1 extends Twig_Template
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
        $__internal_6890085298c565f97753078699ac1fc0c2cb6ba7b5d2e3bdb5d1574f4d15ed5b = $this->env->getExtension("native_profiler");
        $__internal_6890085298c565f97753078699ac1fc0c2cb6ba7b5d2e3bdb5d1574f4d15ed5b->enter($__internal_6890085298c565f97753078699ac1fc0c2cb6ba7b5d2e3bdb5d1574f4d15ed5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6890085298c565f97753078699ac1fc0c2cb6ba7b5d2e3bdb5d1574f4d15ed5b->leave($__internal_6890085298c565f97753078699ac1fc0c2cb6ba7b5d2e3bdb5d1574f4d15ed5b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_11768ae0d1d66c46320be9eac2cb7afc48e3bed1b501ed381864596e1922de0b = $this->env->getExtension("native_profiler");
        $__internal_11768ae0d1d66c46320be9eac2cb7afc48e3bed1b501ed381864596e1922de0b->enter($__internal_11768ae0d1d66c46320be9eac2cb7afc48e3bed1b501ed381864596e1922de0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_11768ae0d1d66c46320be9eac2cb7afc48e3bed1b501ed381864596e1922de0b->leave($__internal_11768ae0d1d66c46320be9eac2cb7afc48e3bed1b501ed381864596e1922de0b_prof);

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
