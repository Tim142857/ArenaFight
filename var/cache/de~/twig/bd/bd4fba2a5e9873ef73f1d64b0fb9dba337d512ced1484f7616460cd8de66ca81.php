<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_af51aed3420ef863bad1d75d9991deb3b5e1f7c7792c01daeca3bbbbce621aae extends Twig_Template
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
        $__internal_4d44ef6216d53145ee5dceea7e83004fbf6f1ff9d1e7ecc711972a39339ec4c4 = $this->env->getExtension("native_profiler");
        $__internal_4d44ef6216d53145ee5dceea7e83004fbf6f1ff9d1e7ecc711972a39339ec4c4->enter($__internal_4d44ef6216d53145ee5dceea7e83004fbf6f1ff9d1e7ecc711972a39339ec4c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_4d44ef6216d53145ee5dceea7e83004fbf6f1ff9d1e7ecc711972a39339ec4c4->leave($__internal_4d44ef6216d53145ee5dceea7e83004fbf6f1ff9d1e7ecc711972a39339ec4c4_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b6a72684cdb5cbe7327241d8f6bd63159a5d9444c56d6069cdcf671491dc6f26 = $this->env->getExtension("native_profiler");
        $__internal_b6a72684cdb5cbe7327241d8f6bd63159a5d9444c56d6069cdcf671491dc6f26->enter($__internal_b6a72684cdb5cbe7327241d8f6bd63159a5d9444c56d6069cdcf671491dc6f26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_b6a72684cdb5cbe7327241d8f6bd63159a5d9444c56d6069cdcf671491dc6f26->leave($__internal_b6a72684cdb5cbe7327241d8f6bd63159a5d9444c56d6069cdcf671491dc6f26_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_9979730b71c8ae76f678d6370ce706540f4396970dc71bad835311a6f9ac01da = $this->env->getExtension("native_profiler");
        $__internal_9979730b71c8ae76f678d6370ce706540f4396970dc71bad835311a6f9ac01da->enter($__internal_9979730b71c8ae76f678d6370ce706540f4396970dc71bad835311a6f9ac01da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_9979730b71c8ae76f678d6370ce706540f4396970dc71bad835311a6f9ac01da->leave($__internal_9979730b71c8ae76f678d6370ce706540f4396970dc71bad835311a6f9ac01da_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d4c2f49741d434345934baaf513cbb7df85044923741f59e3ca9fa7b20268dcb = $this->env->getExtension("native_profiler");
        $__internal_d4c2f49741d434345934baaf513cbb7df85044923741f59e3ca9fa7b20268dcb->enter($__internal_d4c2f49741d434345934baaf513cbb7df85044923741f59e3ca9fa7b20268dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_d4c2f49741d434345934baaf513cbb7df85044923741f59e3ca9fa7b20268dcb->leave($__internal_d4c2f49741d434345934baaf513cbb7df85044923741f59e3ca9fa7b20268dcb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
