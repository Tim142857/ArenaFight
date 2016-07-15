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
        $__internal_3fdd698c24c969198ba908b4e94f34a30df31da9e8c793fd06f46a81aac32ddb = $this->env->getExtension("native_profiler");
        $__internal_3fdd698c24c969198ba908b4e94f34a30df31da9e8c793fd06f46a81aac32ddb->enter($__internal_3fdd698c24c969198ba908b4e94f34a30df31da9e8c793fd06f46a81aac32ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fdd698c24c969198ba908b4e94f34a30df31da9e8c793fd06f46a81aac32ddb->leave($__internal_3fdd698c24c969198ba908b4e94f34a30df31da9e8c793fd06f46a81aac32ddb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_495af8829f2e5d35eaecda584478d2a42115d36e7ce67e9d07e0ed74ce4380e9 = $this->env->getExtension("native_profiler");
        $__internal_495af8829f2e5d35eaecda584478d2a42115d36e7ce67e9d07e0ed74ce4380e9->enter($__internal_495af8829f2e5d35eaecda584478d2a42115d36e7ce67e9d07e0ed74ce4380e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_495af8829f2e5d35eaecda584478d2a42115d36e7ce67e9d07e0ed74ce4380e9->leave($__internal_495af8829f2e5d35eaecda584478d2a42115d36e7ce67e9d07e0ed74ce4380e9_prof);

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
