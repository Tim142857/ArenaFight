<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_314b6ce4fc47488b7e01cb067ac7c10b8e3adc29795d6d4c268feaac6cd0fbd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a1b5be6ae616d3bd253341d0c0008c2fea10ae48435d95d984e40b7ecc3834d = $this->env->getExtension("native_profiler");
        $__internal_3a1b5be6ae616d3bd253341d0c0008c2fea10ae48435d95d984e40b7ecc3834d->enter($__internal_3a1b5be6ae616d3bd253341d0c0008c2fea10ae48435d95d984e40b7ecc3834d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a1b5be6ae616d3bd253341d0c0008c2fea10ae48435d95d984e40b7ecc3834d->leave($__internal_3a1b5be6ae616d3bd253341d0c0008c2fea10ae48435d95d984e40b7ecc3834d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_29e5f61f02537d0c4ded0517bd0d0cde6a587164f1d9947817c46fe35f749d88 = $this->env->getExtension("native_profiler");
        $__internal_29e5f61f02537d0c4ded0517bd0d0cde6a587164f1d9947817c46fe35f749d88->enter($__internal_29e5f61f02537d0c4ded0517bd0d0cde6a587164f1d9947817c46fe35f749d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_29e5f61f02537d0c4ded0517bd0d0cde6a587164f1d9947817c46fe35f749d88->leave($__internal_29e5f61f02537d0c4ded0517bd0d0cde6a587164f1d9947817c46fe35f749d88_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e8682b8d3b0954d027851c60b3bdeca155aa537c604636f671709f26af79b685 = $this->env->getExtension("native_profiler");
        $__internal_e8682b8d3b0954d027851c60b3bdeca155aa537c604636f671709f26af79b685->enter($__internal_e8682b8d3b0954d027851c60b3bdeca155aa537c604636f671709f26af79b685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e8682b8d3b0954d027851c60b3bdeca155aa537c604636f671709f26af79b685->leave($__internal_e8682b8d3b0954d027851c60b3bdeca155aa537c604636f671709f26af79b685_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f864b4fcd0c759f00d5ca622c0f43e0f575a9b886f9f7b036965e1d2bc0052cf = $this->env->getExtension("native_profiler");
        $__internal_f864b4fcd0c759f00d5ca622c0f43e0f575a9b886f9f7b036965e1d2bc0052cf->enter($__internal_f864b4fcd0c759f00d5ca622c0f43e0f575a9b886f9f7b036965e1d2bc0052cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f864b4fcd0c759f00d5ca622c0f43e0f575a9b886f9f7b036965e1d2bc0052cf->leave($__internal_f864b4fcd0c759f00d5ca622c0f43e0f575a9b886f9f7b036965e1d2bc0052cf_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
