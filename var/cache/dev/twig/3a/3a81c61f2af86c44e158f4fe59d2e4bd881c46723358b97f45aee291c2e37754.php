<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_12408459ed1d61a339b4379c856c99df0c0333d72710b6e7b5d121608ebaec91 extends Twig_Template
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
        $__internal_29012e881bee28bc1a5a54bcb26f9061d852e8ace07dfe8c2a36a568d8e89dfd = $this->env->getExtension("native_profiler");
        $__internal_29012e881bee28bc1a5a54bcb26f9061d852e8ace07dfe8c2a36a568d8e89dfd->enter($__internal_29012e881bee28bc1a5a54bcb26f9061d852e8ace07dfe8c2a36a568d8e89dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_29012e881bee28bc1a5a54bcb26f9061d852e8ace07dfe8c2a36a568d8e89dfd->leave($__internal_29012e881bee28bc1a5a54bcb26f9061d852e8ace07dfe8c2a36a568d8e89dfd_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_c7e9181299a269ad308d80d23440026c0e35f53352c5ce4cb0f54a7061ed8210 = $this->env->getExtension("native_profiler");
        $__internal_c7e9181299a269ad308d80d23440026c0e35f53352c5ce4cb0f54a7061ed8210->enter($__internal_c7e9181299a269ad308d80d23440026c0e35f53352c5ce4cb0f54a7061ed8210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_c7e9181299a269ad308d80d23440026c0e35f53352c5ce4cb0f54a7061ed8210->leave($__internal_c7e9181299a269ad308d80d23440026c0e35f53352c5ce4cb0f54a7061ed8210_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_23148fff369d1a3d05440b776764a88c414f2dab16b4a3807140f5c41b705ab0 = $this->env->getExtension("native_profiler");
        $__internal_23148fff369d1a3d05440b776764a88c414f2dab16b4a3807140f5c41b705ab0->enter($__internal_23148fff369d1a3d05440b776764a88c414f2dab16b4a3807140f5c41b705ab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_23148fff369d1a3d05440b776764a88c414f2dab16b4a3807140f5c41b705ab0->leave($__internal_23148fff369d1a3d05440b776764a88c414f2dab16b4a3807140f5c41b705ab0_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_6d99ff518b4c759fd2577c8d0451e0d4842eb28f3171c3dafa8e14c96993df66 = $this->env->getExtension("native_profiler");
        $__internal_6d99ff518b4c759fd2577c8d0451e0d4842eb28f3171c3dafa8e14c96993df66->enter($__internal_6d99ff518b4c759fd2577c8d0451e0d4842eb28f3171c3dafa8e14c96993df66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_6d99ff518b4c759fd2577c8d0451e0d4842eb28f3171c3dafa8e14c96993df66->leave($__internal_6d99ff518b4c759fd2577c8d0451e0d4842eb28f3171c3dafa8e14c96993df66_prof);

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
