<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_46aeb127e964f4f1a57b9621a7e1bf86a48d39d2e16c25baa3336e9bf6caa3ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_67fcf0bfd30491045c66ee3a995e32da2b03e82302e4ee6c9fdb7085bf309df6 = $this->env->getExtension("native_profiler");
        $__internal_67fcf0bfd30491045c66ee3a995e32da2b03e82302e4ee6c9fdb7085bf309df6->enter($__internal_67fcf0bfd30491045c66ee3a995e32da2b03e82302e4ee6c9fdb7085bf309df6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67fcf0bfd30491045c66ee3a995e32da2b03e82302e4ee6c9fdb7085bf309df6->leave($__internal_67fcf0bfd30491045c66ee3a995e32da2b03e82302e4ee6c9fdb7085bf309df6_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_699ad1ea8e7506b35446f99a4bd559f285c21c314fd5350a4b514bbf7f300f6f = $this->env->getExtension("native_profiler");
        $__internal_699ad1ea8e7506b35446f99a4bd559f285c21c314fd5350a4b514bbf7f300f6f->enter($__internal_699ad1ea8e7506b35446f99a4bd559f285c21c314fd5350a4b514bbf7f300f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_699ad1ea8e7506b35446f99a4bd559f285c21c314fd5350a4b514bbf7f300f6f->leave($__internal_699ad1ea8e7506b35446f99a4bd559f285c21c314fd5350a4b514bbf7f300f6f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
