<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_07521eef9b247cdfffcf63a04d54d47099c7e8b4f6e1bd304b56699a459a6a3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_0a0ca569e8798b08c9babccabb9f8c2a043fa80a854977ead20c9fdb4c5a5e8b = $this->env->getExtension("native_profiler");
        $__internal_0a0ca569e8798b08c9babccabb9f8c2a043fa80a854977ead20c9fdb4c5a5e8b->enter($__internal_0a0ca569e8798b08c9babccabb9f8c2a043fa80a854977ead20c9fdb4c5a5e8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a0ca569e8798b08c9babccabb9f8c2a043fa80a854977ead20c9fdb4c5a5e8b->leave($__internal_0a0ca569e8798b08c9babccabb9f8c2a043fa80a854977ead20c9fdb4c5a5e8b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9930663754516a06ddac619002f92b79f2c4b80b29ea8b13884ffcd020f4e8ed = $this->env->getExtension("native_profiler");
        $__internal_9930663754516a06ddac619002f92b79f2c4b80b29ea8b13884ffcd020f4e8ed->enter($__internal_9930663754516a06ddac619002f92b79f2c4b80b29ea8b13884ffcd020f4e8ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_9930663754516a06ddac619002f92b79f2c4b80b29ea8b13884ffcd020f4e8ed->leave($__internal_9930663754516a06ddac619002f92b79f2c4b80b29ea8b13884ffcd020f4e8ed_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
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
