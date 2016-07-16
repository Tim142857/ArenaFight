<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_19781ae633cfa8d7524df13e162ac3d1755996c7787d32e6f42ac0f90491de08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_0dab941bca47ef1551bae0aef775249ac911335b3ae710ad11cd937d43430dc5 = $this->env->getExtension("native_profiler");
        $__internal_0dab941bca47ef1551bae0aef775249ac911335b3ae710ad11cd937d43430dc5->enter($__internal_0dab941bca47ef1551bae0aef775249ac911335b3ae710ad11cd937d43430dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0dab941bca47ef1551bae0aef775249ac911335b3ae710ad11cd937d43430dc5->leave($__internal_0dab941bca47ef1551bae0aef775249ac911335b3ae710ad11cd937d43430dc5_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3b3646f6532fcab014d5a9403e5746c89e534bf027f4145509e0bca3bf2ed219 = $this->env->getExtension("native_profiler");
        $__internal_3b3646f6532fcab014d5a9403e5746c89e534bf027f4145509e0bca3bf2ed219->enter($__internal_3b3646f6532fcab014d5a9403e5746c89e534bf027f4145509e0bca3bf2ed219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_3b3646f6532fcab014d5a9403e5746c89e534bf027f4145509e0bca3bf2ed219->leave($__internal_3b3646f6532fcab014d5a9403e5746c89e534bf027f4145509e0bca3bf2ed219_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
