<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_04598ac3a3cc59946cd6cd4544ad7d97af4184814de36ccadf9de6a244f2614f extends Twig_Template
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
        $__internal_51da2fb6169bef4cf1b8364c6d5c81db020e540f18976cedd22cc8d6b07dff60 = $this->env->getExtension("native_profiler");
        $__internal_51da2fb6169bef4cf1b8364c6d5c81db020e540f18976cedd22cc8d6b07dff60->enter($__internal_51da2fb6169bef4cf1b8364c6d5c81db020e540f18976cedd22cc8d6b07dff60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

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
        
        $__internal_51da2fb6169bef4cf1b8364c6d5c81db020e540f18976cedd22cc8d6b07dff60->leave($__internal_51da2fb6169bef4cf1b8364c6d5c81db020e540f18976cedd22cc8d6b07dff60_prof);

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
