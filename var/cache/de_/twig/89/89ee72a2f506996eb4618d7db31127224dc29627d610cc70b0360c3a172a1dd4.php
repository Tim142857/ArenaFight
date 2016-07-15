<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_df20748574003e2d6a595dd80a5a4ddfd5711ef2116f7c2301007e27bfc728f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_db5779e32acd85e325650bfb2d9f620980b4271d68644d1a9b5f1960067f085c = $this->env->getExtension("native_profiler");
        $__internal_db5779e32acd85e325650bfb2d9f620980b4271d68644d1a9b5f1960067f085c->enter($__internal_db5779e32acd85e325650bfb2d9f620980b4271d68644d1a9b5f1960067f085c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db5779e32acd85e325650bfb2d9f620980b4271d68644d1a9b5f1960067f085c->leave($__internal_db5779e32acd85e325650bfb2d9f620980b4271d68644d1a9b5f1960067f085c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fe29e67e80621092254c273a9934d9a19276951650dc488c8ac8d0aaaadae18b = $this->env->getExtension("native_profiler");
        $__internal_fe29e67e80621092254c273a9934d9a19276951650dc488c8ac8d0aaaadae18b->enter($__internal_fe29e67e80621092254c273a9934d9a19276951650dc488c8ac8d0aaaadae18b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_fe29e67e80621092254c273a9934d9a19276951650dc488c8ac8d0aaaadae18b->leave($__internal_fe29e67e80621092254c273a9934d9a19276951650dc488c8ac8d0aaaadae18b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
