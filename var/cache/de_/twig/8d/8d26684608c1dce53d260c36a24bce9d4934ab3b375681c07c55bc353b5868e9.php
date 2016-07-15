<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_3072dc983f8eb28918b5da3a686b0b074355b941516ff1d5239172fbe1b4a175 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_30d7a38a377f21c5daeecd604bdb1e0c838cbae3bf3829cf04f4307492d80753 = $this->env->getExtension("native_profiler");
        $__internal_30d7a38a377f21c5daeecd604bdb1e0c838cbae3bf3829cf04f4307492d80753->enter($__internal_30d7a38a377f21c5daeecd604bdb1e0c838cbae3bf3829cf04f4307492d80753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30d7a38a377f21c5daeecd604bdb1e0c838cbae3bf3829cf04f4307492d80753->leave($__internal_30d7a38a377f21c5daeecd604bdb1e0c838cbae3bf3829cf04f4307492d80753_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5524319a07f54a33abfbf928eb8b3c22ee44a78b3d3239cad67b0b96ae99f8ce = $this->env->getExtension("native_profiler");
        $__internal_5524319a07f54a33abfbf928eb8b3c22ee44a78b3d3239cad67b0b96ae99f8ce->enter($__internal_5524319a07f54a33abfbf928eb8b3c22ee44a78b3d3239cad67b0b96ae99f8ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_5524319a07f54a33abfbf928eb8b3c22ee44a78b3d3239cad67b0b96ae99f8ce->leave($__internal_5524319a07f54a33abfbf928eb8b3c22ee44a78b3d3239cad67b0b96ae99f8ce_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
