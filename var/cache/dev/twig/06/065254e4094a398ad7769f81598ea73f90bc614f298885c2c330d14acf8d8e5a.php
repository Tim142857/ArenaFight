<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_38450b39c1c6129c9e761c9c9f4c498f68d27130d71bae82c41c0485dfdd8e2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_539ce4a04c3d0c29f3e0d165b61a5886613aa00bc553d8353f2a5b8beb1232d8 = $this->env->getExtension("native_profiler");
        $__internal_539ce4a04c3d0c29f3e0d165b61a5886613aa00bc553d8353f2a5b8beb1232d8->enter($__internal_539ce4a04c3d0c29f3e0d165b61a5886613aa00bc553d8353f2a5b8beb1232d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_539ce4a04c3d0c29f3e0d165b61a5886613aa00bc553d8353f2a5b8beb1232d8->leave($__internal_539ce4a04c3d0c29f3e0d165b61a5886613aa00bc553d8353f2a5b8beb1232d8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_user_show">*/
/*     <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>*/
/*     <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>*/
/* </div>*/
/* */
