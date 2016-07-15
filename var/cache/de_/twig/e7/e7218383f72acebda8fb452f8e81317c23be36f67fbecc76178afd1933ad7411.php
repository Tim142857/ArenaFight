<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_9a22ddb59b3692fd20a5eefd3b3b34534608bf0d727f150318d950833c319748 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_fc4bb03c718394ac88de0d76c9b279b13dc5e0ae322604691f2435379838054a = $this->env->getExtension("native_profiler");
        $__internal_fc4bb03c718394ac88de0d76c9b279b13dc5e0ae322604691f2435379838054a->enter($__internal_fc4bb03c718394ac88de0d76c9b279b13dc5e0ae322604691f2435379838054a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc4bb03c718394ac88de0d76c9b279b13dc5e0ae322604691f2435379838054a->leave($__internal_fc4bb03c718394ac88de0d76c9b279b13dc5e0ae322604691f2435379838054a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c9b0a4be222e8237aa94bcfa1c05f27807b7d8957579892eba2711351f592548 = $this->env->getExtension("native_profiler");
        $__internal_c9b0a4be222e8237aa94bcfa1c05f27807b7d8957579892eba2711351f592548->enter($__internal_c9b0a4be222e8237aa94bcfa1c05f27807b7d8957579892eba2711351f592548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 9
        echo "
    <form action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

        <label for=\"username\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo " </label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

        <label for=\"password\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
        <label for=\"remember_me\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

        <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </form>
";
        
        $__internal_c9b0a4be222e8237aa94bcfa1c05f27807b7d8957579892eba2711351f592548->leave($__internal_c9b0a4be222e8237aa94bcfa1c05f27807b7d8957579892eba2711351f592548_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 22,  77 => 20,  70 => 16,  65 => 14,  61 => 13,  56 => 11,  52 => 10,  49 => 9,  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     {% if error %}*/
/*         <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*     {% endif %}*/
/* */
/*     <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*         <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*         <label for="username">{{ 'security.login.username'|trans }} </label>*/
/*         <input type="text" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/* */
/*         <label for="password">{{ 'security.login.password'|trans }}</label>*/
/*         <input type="password" id="password" name="_password" required="required" />*/
/* */
/*         <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*         <label for="remember_me">{{ 'security.login.remember_me'|trans }}</label>*/
/* */
/*         <input type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}" />*/
/*     </form>*/
/* {% endblock fos_user_content %}*/
/* */
