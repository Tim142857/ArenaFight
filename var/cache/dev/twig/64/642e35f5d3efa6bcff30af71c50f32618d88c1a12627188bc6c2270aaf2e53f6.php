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
        $__internal_c172df7349167c4a41ba2ef7c87b3ec74f786524da042164c7a0eba747a3ae0f = $this->env->getExtension("native_profiler");
        $__internal_c172df7349167c4a41ba2ef7c87b3ec74f786524da042164c7a0eba747a3ae0f->enter($__internal_c172df7349167c4a41ba2ef7c87b3ec74f786524da042164c7a0eba747a3ae0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c172df7349167c4a41ba2ef7c87b3ec74f786524da042164c7a0eba747a3ae0f->leave($__internal_c172df7349167c4a41ba2ef7c87b3ec74f786524da042164c7a0eba747a3ae0f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3228da8ef5c0fb04cc5010e17741e5c998bc67af36f8986821abc00be524aeaf = $this->env->getExtension("native_profiler");
        $__internal_3228da8ef5c0fb04cc5010e17741e5c998bc67af36f8986821abc00be524aeaf->enter($__internal_3228da8ef5c0fb04cc5010e17741e5c998bc67af36f8986821abc00be524aeaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_3228da8ef5c0fb04cc5010e17741e5c998bc67af36f8986821abc00be524aeaf->leave($__internal_3228da8ef5c0fb04cc5010e17741e5c998bc67af36f8986821abc00be524aeaf_prof);

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
