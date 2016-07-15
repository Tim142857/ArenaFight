<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_400ba1df97f77c1d8821c4f583cca6b6b8bbc522a95a6dd69b44936be3dc7a9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_b26eaa90df49432a98f2a46fec4820f14cdb0551857a2557cbf49bd444b68ccc = $this->env->getExtension("native_profiler");
        $__internal_b26eaa90df49432a98f2a46fec4820f14cdb0551857a2557cbf49bd444b68ccc->enter($__internal_b26eaa90df49432a98f2a46fec4820f14cdb0551857a2557cbf49bd444b68ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b26eaa90df49432a98f2a46fec4820f14cdb0551857a2557cbf49bd444b68ccc->leave($__internal_b26eaa90df49432a98f2a46fec4820f14cdb0551857a2557cbf49bd444b68ccc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7d82a9495caaa8b4954d0c24a8b91d0ecf111a20158895b1ac747bfa5aca7b97 = $this->env->getExtension("native_profiler");
        $__internal_7d82a9495caaa8b4954d0c24a8b91d0ecf111a20158895b1ac747bfa5aca7b97->enter($__internal_7d82a9495caaa8b4954d0c24a8b91d0ecf111a20158895b1ac747bfa5aca7b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_7d82a9495caaa8b4954d0c24a8b91d0ecf111a20158895b1ac747bfa5aca7b97->leave($__internal_7d82a9495caaa8b4954d0c24a8b91d0ecf111a20158895b1ac747bfa5aca7b97_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
