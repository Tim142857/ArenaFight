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
        $__internal_02979d4aadf224012cd7123f57b7870feb4d224f477102a62e7fdfdfb4442fbb = $this->env->getExtension("native_profiler");
        $__internal_02979d4aadf224012cd7123f57b7870feb4d224f477102a62e7fdfdfb4442fbb->enter($__internal_02979d4aadf224012cd7123f57b7870feb4d224f477102a62e7fdfdfb4442fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02979d4aadf224012cd7123f57b7870feb4d224f477102a62e7fdfdfb4442fbb->leave($__internal_02979d4aadf224012cd7123f57b7870feb4d224f477102a62e7fdfdfb4442fbb_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_821b9af15af36ade2aca6e2e4846ed653390728913faf8a4f6b56b32660e76b9 = $this->env->getExtension("native_profiler");
        $__internal_821b9af15af36ade2aca6e2e4846ed653390728913faf8a4f6b56b32660e76b9->enter($__internal_821b9af15af36ade2aca6e2e4846ed653390728913faf8a4f6b56b32660e76b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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

        <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </form>
";
        
        $__internal_821b9af15af36ade2aca6e2e4846ed653390728913faf8a4f6b56b32660e76b9->leave($__internal_821b9af15af36ade2aca6e2e4846ed653390728913faf8a4f6b56b32660e76b9_prof);

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
        return array (  85 => 25,  80 => 23,  73 => 19,  66 => 15,  62 => 14,  56 => 11,  52 => 10,  49 => 9,  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
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
/*         <input type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}" />*/
/*     </form>*/
/* {% endblock fos_user_content %}*/
/* */
