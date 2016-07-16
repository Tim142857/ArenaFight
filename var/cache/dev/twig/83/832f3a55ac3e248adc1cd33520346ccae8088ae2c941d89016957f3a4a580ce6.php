<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_f06082ffb72d5533e16d30f1ce4fb300655a83189b89a2163ac309d4de861537 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_d7be78c365cd7d2a711b683052c176c5eb7d2dcd5af787d4009e38bf0eb02f14 = $this->env->getExtension("native_profiler");
        $__internal_d7be78c365cd7d2a711b683052c176c5eb7d2dcd5af787d4009e38bf0eb02f14->enter($__internal_d7be78c365cd7d2a711b683052c176c5eb7d2dcd5af787d4009e38bf0eb02f14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7be78c365cd7d2a711b683052c176c5eb7d2dcd5af787d4009e38bf0eb02f14->leave($__internal_d7be78c365cd7d2a711b683052c176c5eb7d2dcd5af787d4009e38bf0eb02f14_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3c4d340aa4e5a9a860673cf040469417f74c744e736163e1878ad6c0f78da72b = $this->env->getExtension("native_profiler");
        $__internal_3c4d340aa4e5a9a860673cf040469417f74c744e736163e1878ad6c0f78da72b->enter($__internal_3c4d340aa4e5a9a860673cf040469417f74c744e736163e1878ad6c0f78da72b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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

        ";
        // line 14
        echo "        <input type=\"hidden\" id=\"argent\" name=\"argent\" value=\"0\" />

        <fieldset class=\"form-group\">
            <label for=\"username\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
        </fieldset>

        <fieldset class=\"form-group\">
            <label for=\"password\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\" />
        </fieldset>
        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
        <label for=\"remember_me\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label><br/>

        <button type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-primary\">Submit</button>
    </form><br/>

    <a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getUrl("fos_user_resetting_request");
        echo "\">Mot de passe oublié?</a>
";
        
        $__internal_3c4d340aa4e5a9a860673cf040469417f74c744e736163e1878ad6c0f78da72b->leave($__internal_3c4d340aa4e5a9a860673cf040469417f74c744e736163e1878ad6c0f78da72b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 31,  84 => 26,  77 => 22,  70 => 18,  66 => 17,  61 => 14,  56 => 11,  52 => 10,  49 => 9,  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
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
/*         {# champs par defaut #}*/
/*         <input type="hidden" id="argent" name="argent" value="0" />*/
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
