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
        $__internal_c9765b8c3580e4c57bff6600e819661fb52239f854a8ab8b9bb5f18f322475f5 = $this->env->getExtension("native_profiler");
        $__internal_c9765b8c3580e4c57bff6600e819661fb52239f854a8ab8b9bb5f18f322475f5->enter($__internal_c9765b8c3580e4c57bff6600e819661fb52239f854a8ab8b9bb5f18f322475f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9765b8c3580e4c57bff6600e819661fb52239f854a8ab8b9bb5f18f322475f5->leave($__internal_c9765b8c3580e4c57bff6600e819661fb52239f854a8ab8b9bb5f18f322475f5_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e91f69bffb8eaee79d5b74d7283b3bc080599d0a23d114f84ff6369b4d7df0c1 = $this->env->getExtension("native_profiler");
        $__internal_e91f69bffb8eaee79d5b74d7283b3bc080599d0a23d114f84ff6369b4d7df0c1->enter($__internal_e91f69bffb8eaee79d5b74d7283b3bc080599d0a23d114f84ff6369b4d7df0c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_e91f69bffb8eaee79d5b74d7283b3bc080599d0a23d114f84ff6369b4d7df0c1->leave($__internal_e91f69bffb8eaee79d5b74d7283b3bc080599d0a23d114f84ff6369b4d7df0c1_prof);

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
