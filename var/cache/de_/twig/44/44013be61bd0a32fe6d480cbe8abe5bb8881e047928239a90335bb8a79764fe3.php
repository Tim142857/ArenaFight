<?php

/* @FOSUser/Resetting/reset_content.html.twig */
class __TwigTemplate_3ed5ac87158370e7df9eaa36d60d99d1d6585b1a3c99a0f3994871121af85d88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c9f9a60710919c3a1fac7cc1117a2b9c8e7a2baec1df3bd5a5819d6d4053c1b = $this->env->getExtension("native_profiler");
        $__internal_8c9f9a60710919c3a1fac7cc1117a2b9c8e7a2baec1df3bd5a5819d6d4053c1b->enter($__internal_8c9f9a60710919c3a1fac7cc1117a2b9c8e7a2baec1df3bd5a5819d6d4053c1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_resetting_reset", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "attr" => array("class" => "fos_user_resetting_reset")));
        echo "
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_8c9f9a60710919c3a1fac7cc1117a2b9c8e7a2baec1df3bd5a5819d6d4053c1b->leave($__internal_8c9f9a60710919c3a1fac7cc1117a2b9c8e7a2baec1df3bd5a5819d6d4053c1b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 8,  34 => 6,  29 => 4,  25 => 3,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {{ form_start(form, { 'action': path('fos_user_resetting_reset', {'token': token}), 'attr': { 'class': 'fos_user_resetting_reset' } }) }}*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'resetting.reset.submit'|trans }}" />*/
/*     </div>*/
/* {{ form_end(form) }}*/
/* */