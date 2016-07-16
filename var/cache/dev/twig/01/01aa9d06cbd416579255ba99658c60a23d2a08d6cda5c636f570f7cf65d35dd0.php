<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_8e8365a62599e2a8c23788d9154bd09825adfaaf7499123b2698d680afe9d22e extends Twig_Template
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
        $__internal_1fc329a4f1f4d31057bb19c06079d1576d134a9f67f93cb4b996930aef27702d = $this->env->getExtension("native_profiler");
        $__internal_1fc329a4f1f4d31057bb19c06079d1576d134a9f67f93cb4b996930aef27702d->enter($__internal_1fc329a4f1f4d31057bb19c06079d1576d134a9f67f93cb4b996930aef27702d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_1fc329a4f1f4d31057bb19c06079d1576d134a9f67f93cb4b996930aef27702d->leave($__internal_1fc329a4f1f4d31057bb19c06079d1576d134a9f67f93cb4b996930aef27702d_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ac96b98beb7f5876a85d58888eadeb471673df3d85ad105b8ce14fa3338c9774 = $this->env->getExtension("native_profiler");
        $__internal_ac96b98beb7f5876a85d58888eadeb471673df3d85ad105b8ce14fa3338c9774->enter($__internal_ac96b98beb7f5876a85d58888eadeb471673df3d85ad105b8ce14fa3338c9774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ac96b98beb7f5876a85d58888eadeb471673df3d85ad105b8ce14fa3338c9774->leave($__internal_ac96b98beb7f5876a85d58888eadeb471673df3d85ad105b8ce14fa3338c9774_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_4c2d0eec51c902873ccbe93a3fd3f4a06b2e9cf8d7d872855bf831f186f868bb = $this->env->getExtension("native_profiler");
        $__internal_4c2d0eec51c902873ccbe93a3fd3f4a06b2e9cf8d7d872855bf831f186f868bb->enter($__internal_4c2d0eec51c902873ccbe93a3fd3f4a06b2e9cf8d7d872855bf831f186f868bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4c2d0eec51c902873ccbe93a3fd3f4a06b2e9cf8d7d872855bf831f186f868bb->leave($__internal_4c2d0eec51c902873ccbe93a3fd3f4a06b2e9cf8d7d872855bf831f186f868bb_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b2ae136fa8ccb2b48f205840f3359bc39878c6b11b8a9dac299000c5d7eeb924 = $this->env->getExtension("native_profiler");
        $__internal_b2ae136fa8ccb2b48f205840f3359bc39878c6b11b8a9dac299000c5d7eeb924->enter($__internal_b2ae136fa8ccb2b48f205840f3359bc39878c6b11b8a9dac299000c5d7eeb924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b2ae136fa8ccb2b48f205840f3359bc39878c6b11b8a9dac299000c5d7eeb924->leave($__internal_b2ae136fa8ccb2b48f205840f3359bc39878c6b11b8a9dac299000c5d7eeb924_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
