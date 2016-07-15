<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_eee3946b9a14003666553987083e8865b97a622ac9df6ab81ee4324006a3de7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_8d49354f4421457b45cfb557c8e1916542eb74177969db0843ceaa4bec39db30 = $this->env->getExtension("native_profiler");
        $__internal_8d49354f4421457b45cfb557c8e1916542eb74177969db0843ceaa4bec39db30->enter($__internal_8d49354f4421457b45cfb557c8e1916542eb74177969db0843ceaa4bec39db30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d49354f4421457b45cfb557c8e1916542eb74177969db0843ceaa4bec39db30->leave($__internal_8d49354f4421457b45cfb557c8e1916542eb74177969db0843ceaa4bec39db30_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ae6069d2090bdfd240284c117256a8f6e17dfba76483c39fe3037d07fa92b3ab = $this->env->getExtension("native_profiler");
        $__internal_ae6069d2090bdfd240284c117256a8f6e17dfba76483c39fe3037d07fa92b3ab->enter($__internal_ae6069d2090bdfd240284c117256a8f6e17dfba76483c39fe3037d07fa92b3ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_ae6069d2090bdfd240284c117256a8f6e17dfba76483c39fe3037d07fa92b3ab->leave($__internal_ae6069d2090bdfd240284c117256a8f6e17dfba76483c39fe3037d07fa92b3ab_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
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
