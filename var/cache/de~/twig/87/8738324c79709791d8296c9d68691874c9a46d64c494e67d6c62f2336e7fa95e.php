<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_e798823658bf397277eba1df08258d27f5b1ff941d62059e631a3346cae4cf17 extends Twig_Template
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
        $__internal_f93bda8d813e991bc9020371f21224fe70462e0b3f86589e67a56b8a1a968563 = $this->env->getExtension("native_profiler");
        $__internal_f93bda8d813e991bc9020371f21224fe70462e0b3f86589e67a56b8a1a968563->enter($__internal_f93bda8d813e991bc9020371f21224fe70462e0b3f86589e67a56b8a1a968563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f93bda8d813e991bc9020371f21224fe70462e0b3f86589e67a56b8a1a968563->leave($__internal_f93bda8d813e991bc9020371f21224fe70462e0b3f86589e67a56b8a1a968563_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_25616b281c0e9a25c32baaae63995c33eb467b6271002f21742e075b03e268af = $this->env->getExtension("native_profiler");
        $__internal_25616b281c0e9a25c32baaae63995c33eb467b6271002f21742e075b03e268af->enter($__internal_25616b281c0e9a25c32baaae63995c33eb467b6271002f21742e075b03e268af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_25616b281c0e9a25c32baaae63995c33eb467b6271002f21742e075b03e268af->leave($__internal_25616b281c0e9a25c32baaae63995c33eb467b6271002f21742e075b03e268af_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_61ff34501b3f99ac675425b8487969b55a565f88eb06993eeb7d9ebeb607a275 = $this->env->getExtension("native_profiler");
        $__internal_61ff34501b3f99ac675425b8487969b55a565f88eb06993eeb7d9ebeb607a275->enter($__internal_61ff34501b3f99ac675425b8487969b55a565f88eb06993eeb7d9ebeb607a275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_61ff34501b3f99ac675425b8487969b55a565f88eb06993eeb7d9ebeb607a275->leave($__internal_61ff34501b3f99ac675425b8487969b55a565f88eb06993eeb7d9ebeb607a275_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_18670a5b92ff227ccc5c0f6451de8f7b710a733191e71262ab58dd3e195961b2 = $this->env->getExtension("native_profiler");
        $__internal_18670a5b92ff227ccc5c0f6451de8f7b710a733191e71262ab58dd3e195961b2->enter($__internal_18670a5b92ff227ccc5c0f6451de8f7b710a733191e71262ab58dd3e195961b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_18670a5b92ff227ccc5c0f6451de8f7b710a733191e71262ab58dd3e195961b2->leave($__internal_18670a5b92ff227ccc5c0f6451de8f7b710a733191e71262ab58dd3e195961b2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
