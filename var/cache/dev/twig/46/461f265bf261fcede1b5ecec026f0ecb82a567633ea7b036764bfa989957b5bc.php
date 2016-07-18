<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_ab59717bce2a764ee5f3de9a1c6ae426853a1a31b0550de5daf72b6559dcf30c extends Twig_Template
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
        $__internal_e482b6e4bebdc68a23577d46691406cb515f73d880ff151a10b8f974e23ff04c = $this->env->getExtension("native_profiler");
        $__internal_e482b6e4bebdc68a23577d46691406cb515f73d880ff151a10b8f974e23ff04c->enter($__internal_e482b6e4bebdc68a23577d46691406cb515f73d880ff151a10b8f974e23ff04c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e482b6e4bebdc68a23577d46691406cb515f73d880ff151a10b8f974e23ff04c->leave($__internal_e482b6e4bebdc68a23577d46691406cb515f73d880ff151a10b8f974e23ff04c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3a8b2ec9d2a98e538e53ae66c6b8f2aec37c7c6326934f8a3f1062a6d339c7ce = $this->env->getExtension("native_profiler");
        $__internal_3a8b2ec9d2a98e538e53ae66c6b8f2aec37c7c6326934f8a3f1062a6d339c7ce->enter($__internal_3a8b2ec9d2a98e538e53ae66c6b8f2aec37c7c6326934f8a3f1062a6d339c7ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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

        <fieldset class=\"form-group\">
            <label for=\"username\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
        </fieldset>

        <fieldset class=\"form-group\">
            <label for=\"password\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\" />
        </fieldset>
        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
        <label for=\"remember_me\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label><br/>

        <button type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-primary\">Submit</button>
    </form><br/>

    <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getUrl("fos_user_resetting_request");
        echo "\">Mot de passe oublié?</a>
";
        
        $__internal_3a8b2ec9d2a98e538e53ae66c6b8f2aec37c7c6326934f8a3f1062a6d339c7ce->leave($__internal_3a8b2ec9d2a98e538e53ae66c6b8f2aec37c7c6326934f8a3f1062a6d339c7ce_prof);

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
        return array (  88 => 28,  80 => 23,  73 => 19,  66 => 15,  62 => 14,  56 => 11,  52 => 10,  49 => 9,  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
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
/*         <fieldset class="form-group">*/
/*             <label for="username">{{ 'security.login.username'|trans }}</label>*/
/*             <input type="text" class="form-control" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/*         </fieldset>*/
/* */
/*         <fieldset class="form-group">*/
/*             <label for="password">{{ 'security.login.password'|trans }}</label>*/
/*             <input type="password" class="form-control" id="password" name="_password" required="required" />*/
/*         </fieldset>*/
/*         <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*         <label for="remember_me">{{ 'security.login.remember_me'|trans }}</label><br/>*/
/* */
/*         <button type="submit" id="_submit" name="_submit" class="btn btn-primary">Submit</button>*/
/*     </form><br/>*/
/* */
/*     <a href="{{ url('fos_user_resetting_request') }}">Mot de passe oublié?</a>*/
/* {% endblock fos_user_content %}*/
/* */
