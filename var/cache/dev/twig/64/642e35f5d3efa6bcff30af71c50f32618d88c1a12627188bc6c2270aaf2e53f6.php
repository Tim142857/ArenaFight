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
        $__internal_4812ee714099100a336c9b35ac6a755fb4af57799742df610c3a7c81588be39f = $this->env->getExtension("native_profiler");
        $__internal_4812ee714099100a336c9b35ac6a755fb4af57799742df610c3a7c81588be39f->enter($__internal_4812ee714099100a336c9b35ac6a755fb4af57799742df610c3a7c81588be39f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4812ee714099100a336c9b35ac6a755fb4af57799742df610c3a7c81588be39f->leave($__internal_4812ee714099100a336c9b35ac6a755fb4af57799742df610c3a7c81588be39f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_48e0a1a25cb41c0508f1936fe5fc2cdb9363f45b75c8c23e534d8ca9d35248c5 = $this->env->getExtension("native_profiler");
        $__internal_48e0a1a25cb41c0508f1936fe5fc2cdb9363f45b75c8c23e534d8ca9d35248c5->enter($__internal_48e0a1a25cb41c0508f1936fe5fc2cdb9363f45b75c8c23e534d8ca9d35248c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_48e0a1a25cb41c0508f1936fe5fc2cdb9363f45b75c8c23e534d8ca9d35248c5->leave($__internal_48e0a1a25cb41c0508f1936fe5fc2cdb9363f45b75c8c23e534d8ca9d35248c5_prof);

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
