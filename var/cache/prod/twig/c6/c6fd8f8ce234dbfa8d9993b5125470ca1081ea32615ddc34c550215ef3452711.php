<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_9e631b1a7d8ca790fccac0b129037a35b407420f392ef4eca654351848e002c1 extends Twig_Template
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
        $__internal_478291551dfb312ba0eb0f86330070985838687f0dfa614cfb113f7a78b4de3b = $this->env->getExtension("native_profiler");
        $__internal_478291551dfb312ba0eb0f86330070985838687f0dfa614cfb113f7a78b4de3b->enter($__internal_478291551dfb312ba0eb0f86330070985838687f0dfa614cfb113f7a78b4de3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_478291551dfb312ba0eb0f86330070985838687f0dfa614cfb113f7a78b4de3b->leave($__internal_478291551dfb312ba0eb0f86330070985838687f0dfa614cfb113f7a78b4de3b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0b9043d71fdfd5c6c225fcc55b7d2062793a560c617884a031e59bfa86e518ce = $this->env->getExtension("native_profiler");
        $__internal_0b9043d71fdfd5c6c225fcc55b7d2062793a560c617884a031e59bfa86e518ce->enter($__internal_0b9043d71fdfd5c6c225fcc55b7d2062793a560c617884a031e59bfa86e518ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0b9043d71fdfd5c6c225fcc55b7d2062793a560c617884a031e59bfa86e518ce->leave($__internal_0b9043d71fdfd5c6c225fcc55b7d2062793a560c617884a031e59bfa86e518ce_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_873d814013be9a604694b5ab01f7132b6b439d02f6e925fb298c6eb28d54203f = $this->env->getExtension("native_profiler");
        $__internal_873d814013be9a604694b5ab01f7132b6b439d02f6e925fb298c6eb28d54203f->enter($__internal_873d814013be9a604694b5ab01f7132b6b439d02f6e925fb298c6eb28d54203f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_873d814013be9a604694b5ab01f7132b6b439d02f6e925fb298c6eb28d54203f->leave($__internal_873d814013be9a604694b5ab01f7132b6b439d02f6e925fb298c6eb28d54203f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6995240fa334407256786e2db5e19c4830c050312910649a2c9b7b17673f8c2e = $this->env->getExtension("native_profiler");
        $__internal_6995240fa334407256786e2db5e19c4830c050312910649a2c9b7b17673f8c2e->enter($__internal_6995240fa334407256786e2db5e19c4830c050312910649a2c9b7b17673f8c2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_6995240fa334407256786e2db5e19c4830c050312910649a2c9b7b17673f8c2e->leave($__internal_6995240fa334407256786e2db5e19c4830c050312910649a2c9b7b17673f8c2e_prof);

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
