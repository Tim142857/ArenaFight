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
        $__internal_c269308caf583d4874357aa906a614dc2718450e6ff665090f67f7fa0c4c3e4f = $this->env->getExtension("native_profiler");
        $__internal_c269308caf583d4874357aa906a614dc2718450e6ff665090f67f7fa0c4c3e4f->enter($__internal_c269308caf583d4874357aa906a614dc2718450e6ff665090f67f7fa0c4c3e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c269308caf583d4874357aa906a614dc2718450e6ff665090f67f7fa0c4c3e4f->leave($__internal_c269308caf583d4874357aa906a614dc2718450e6ff665090f67f7fa0c4c3e4f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9f1584d300cef66536ad90e474d21fa46a259ca738965752b2a26cf632ba8f08 = $this->env->getExtension("native_profiler");
        $__internal_9f1584d300cef66536ad90e474d21fa46a259ca738965752b2a26cf632ba8f08->enter($__internal_9f1584d300cef66536ad90e474d21fa46a259ca738965752b2a26cf632ba8f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_9f1584d300cef66536ad90e474d21fa46a259ca738965752b2a26cf632ba8f08->leave($__internal_9f1584d300cef66536ad90e474d21fa46a259ca738965752b2a26cf632ba8f08_prof);

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
