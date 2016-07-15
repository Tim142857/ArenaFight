<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_b87b65323b06f27f3ed0c1ac365cb110a6b6a47a036bce33cc524bcc5917739c extends Twig_Template
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
        $__internal_169a2d04506979e876521fc6735bb60f3e2e472e33d42a555441c515dc84f7c2 = $this->env->getExtension("native_profiler");
        $__internal_169a2d04506979e876521fc6735bb60f3e2e472e33d42a555441c515dc84f7c2->enter($__internal_169a2d04506979e876521fc6735bb60f3e2e472e33d42a555441c515dc84f7c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_169a2d04506979e876521fc6735bb60f3e2e472e33d42a555441c515dc84f7c2->leave($__internal_169a2d04506979e876521fc6735bb60f3e2e472e33d42a555441c515dc84f7c2_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ef7b2d8a634eb633c372ec96c632545e8a5cc06e41e4c81c5338c7fe26094fe7 = $this->env->getExtension("native_profiler");
        $__internal_ef7b2d8a634eb633c372ec96c632545e8a5cc06e41e4c81c5338c7fe26094fe7->enter($__internal_ef7b2d8a634eb633c372ec96c632545e8a5cc06e41e4c81c5338c7fe26094fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ef7b2d8a634eb633c372ec96c632545e8a5cc06e41e4c81c5338c7fe26094fe7->leave($__internal_ef7b2d8a634eb633c372ec96c632545e8a5cc06e41e4c81c5338c7fe26094fe7_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_15ba7e873eda4ccfbd36b05011e1391a45026907523b409236ac4ad1f1f9cbb2 = $this->env->getExtension("native_profiler");
        $__internal_15ba7e873eda4ccfbd36b05011e1391a45026907523b409236ac4ad1f1f9cbb2->enter($__internal_15ba7e873eda4ccfbd36b05011e1391a45026907523b409236ac4ad1f1f9cbb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_15ba7e873eda4ccfbd36b05011e1391a45026907523b409236ac4ad1f1f9cbb2->leave($__internal_15ba7e873eda4ccfbd36b05011e1391a45026907523b409236ac4ad1f1f9cbb2_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4d32ea80a2519be6c6c80a34f1f1e115c90453a38a7fc533fea02925ad167064 = $this->env->getExtension("native_profiler");
        $__internal_4d32ea80a2519be6c6c80a34f1f1e115c90453a38a7fc533fea02925ad167064->enter($__internal_4d32ea80a2519be6c6c80a34f1f1e115c90453a38a7fc533fea02925ad167064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4d32ea80a2519be6c6c80a34f1f1e115c90453a38a7fc533fea02925ad167064->leave($__internal_4d32ea80a2519be6c6c80a34f1f1e115c90453a38a7fc533fea02925ad167064_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
