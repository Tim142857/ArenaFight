<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_2977ab505db26f0fa9aaa596a1b2fdc337f926d2ca876e7e636da8bdb499fcf7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_43f212136d84be0c81eb5e30b590ee358df889e0f9ee5d52f0978c910ab8ebb3 = $this->env->getExtension("native_profiler");
        $__internal_43f212136d84be0c81eb5e30b590ee358df889e0f9ee5d52f0978c910ab8ebb3->enter($__internal_43f212136d84be0c81eb5e30b590ee358df889e0f9ee5d52f0978c910ab8ebb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_43f212136d84be0c81eb5e30b590ee358df889e0f9ee5d52f0978c910ab8ebb3->leave($__internal_43f212136d84be0c81eb5e30b590ee358df889e0f9ee5d52f0978c910ab8ebb3_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2d923408e718d9f516bee7d75b01db9bb9a6b52792cc403becae029c0007f327 = $this->env->getExtension("native_profiler");
        $__internal_2d923408e718d9f516bee7d75b01db9bb9a6b52792cc403becae029c0007f327->enter($__internal_2d923408e718d9f516bee7d75b01db9bb9a6b52792cc403becae029c0007f327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2d923408e718d9f516bee7d75b01db9bb9a6b52792cc403becae029c0007f327->leave($__internal_2d923408e718d9f516bee7d75b01db9bb9a6b52792cc403becae029c0007f327_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_2ebca2529624e0d77937aab94360cd66f1f08fe80cd60b0a6b3cfeac5c4c887b = $this->env->getExtension("native_profiler");
        $__internal_2ebca2529624e0d77937aab94360cd66f1f08fe80cd60b0a6b3cfeac5c4c887b->enter($__internal_2ebca2529624e0d77937aab94360cd66f1f08fe80cd60b0a6b3cfeac5c4c887b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2ebca2529624e0d77937aab94360cd66f1f08fe80cd60b0a6b3cfeac5c4c887b->leave($__internal_2ebca2529624e0d77937aab94360cd66f1f08fe80cd60b0a6b3cfeac5c4c887b_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d0f6d1955bafcb880dd5c41294f3c65149318bd41f353a5291d84fff50fe75a3 = $this->env->getExtension("native_profiler");
        $__internal_d0f6d1955bafcb880dd5c41294f3c65149318bd41f353a5291d84fff50fe75a3->enter($__internal_d0f6d1955bafcb880dd5c41294f3c65149318bd41f353a5291d84fff50fe75a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_d0f6d1955bafcb880dd5c41294f3c65149318bd41f353a5291d84fff50fe75a3->leave($__internal_d0f6d1955bafcb880dd5c41294f3c65149318bd41f353a5291d84fff50fe75a3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
