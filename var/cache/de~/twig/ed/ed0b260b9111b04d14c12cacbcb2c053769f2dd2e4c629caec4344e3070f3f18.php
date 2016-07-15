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
        $__internal_fe5c7875bcae8e6b9d2061285a5252d4a8e3f297c39a06dbfe4f68696a9f8d5f = $this->env->getExtension("native_profiler");
        $__internal_fe5c7875bcae8e6b9d2061285a5252d4a8e3f297c39a06dbfe4f68696a9f8d5f->enter($__internal_fe5c7875bcae8e6b9d2061285a5252d4a8e3f297c39a06dbfe4f68696a9f8d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe5c7875bcae8e6b9d2061285a5252d4a8e3f297c39a06dbfe4f68696a9f8d5f->leave($__internal_fe5c7875bcae8e6b9d2061285a5252d4a8e3f297c39a06dbfe4f68696a9f8d5f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4031a022b1692ef245e49342a7a575c4997b5c4e726f228298fcf9ff0e620570 = $this->env->getExtension("native_profiler");
        $__internal_4031a022b1692ef245e49342a7a575c4997b5c4e726f228298fcf9ff0e620570->enter($__internal_4031a022b1692ef245e49342a7a575c4997b5c4e726f228298fcf9ff0e620570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_4031a022b1692ef245e49342a7a575c4997b5c4e726f228298fcf9ff0e620570->leave($__internal_4031a022b1692ef245e49342a7a575c4997b5c4e726f228298fcf9ff0e620570_prof);

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
