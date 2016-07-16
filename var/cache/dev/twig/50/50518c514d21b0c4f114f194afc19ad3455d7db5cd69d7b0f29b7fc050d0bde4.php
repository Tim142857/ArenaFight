<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_780d6d297a5510489b667df3e9979582a0b053426124b97be685cd4abb4ccb5d extends Twig_Template
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
        $__internal_9c89754e2de2b724a1e948469559717f36c274288e54d0dbf38453dbce86576c = $this->env->getExtension("native_profiler");
        $__internal_9c89754e2de2b724a1e948469559717f36c274288e54d0dbf38453dbce86576c->enter($__internal_9c89754e2de2b724a1e948469559717f36c274288e54d0dbf38453dbce86576c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c89754e2de2b724a1e948469559717f36c274288e54d0dbf38453dbce86576c->leave($__internal_9c89754e2de2b724a1e948469559717f36c274288e54d0dbf38453dbce86576c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_00292fc15b1044650c68eb61c32c7bec6d5bc540358c6b91c58818bbcc7dd2ba = $this->env->getExtension("native_profiler");
        $__internal_00292fc15b1044650c68eb61c32c7bec6d5bc540358c6b91c58818bbcc7dd2ba->enter($__internal_00292fc15b1044650c68eb61c32c7bec6d5bc540358c6b91c58818bbcc7dd2ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_00292fc15b1044650c68eb61c32c7bec6d5bc540358c6b91c58818bbcc7dd2ba->leave($__internal_00292fc15b1044650c68eb61c32c7bec6d5bc540358c6b91c58818bbcc7dd2ba_prof);

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
