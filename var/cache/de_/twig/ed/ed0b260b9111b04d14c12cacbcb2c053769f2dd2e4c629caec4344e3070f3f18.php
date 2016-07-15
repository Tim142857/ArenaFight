<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_085491a77f2e7ec2e547571baee990d1121a94c15f33cac9e153612f5786f96b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_bf915304f0fecea2274f0b9316e6f22b406ce0c52b9f43b7f43c2f97733f7f60 = $this->env->getExtension("native_profiler");
        $__internal_bf915304f0fecea2274f0b9316e6f22b406ce0c52b9f43b7f43c2f97733f7f60->enter($__internal_bf915304f0fecea2274f0b9316e6f22b406ce0c52b9f43b7f43c2f97733f7f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf915304f0fecea2274f0b9316e6f22b406ce0c52b9f43b7f43c2f97733f7f60->leave($__internal_bf915304f0fecea2274f0b9316e6f22b406ce0c52b9f43b7f43c2f97733f7f60_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_96641f505e78f368d665099c5c721c96288f9a15508636893127c3d6b01120f1 = $this->env->getExtension("native_profiler");
        $__internal_96641f505e78f368d665099c5c721c96288f9a15508636893127c3d6b01120f1->enter($__internal_96641f505e78f368d665099c5c721c96288f9a15508636893127c3d6b01120f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_96641f505e78f368d665099c5c721c96288f9a15508636893127c3d6b01120f1->leave($__internal_96641f505e78f368d665099c5c721c96288f9a15508636893127c3d6b01120f1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
