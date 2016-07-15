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
        $__internal_86d868283e1e504d94ea9ad41afbbff0017b27d7b410a279f2e6f6f48c63ec5e = $this->env->getExtension("native_profiler");
        $__internal_86d868283e1e504d94ea9ad41afbbff0017b27d7b410a279f2e6f6f48c63ec5e->enter($__internal_86d868283e1e504d94ea9ad41afbbff0017b27d7b410a279f2e6f6f48c63ec5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86d868283e1e504d94ea9ad41afbbff0017b27d7b410a279f2e6f6f48c63ec5e->leave($__internal_86d868283e1e504d94ea9ad41afbbff0017b27d7b410a279f2e6f6f48c63ec5e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c02cd26bc186fb5569b24df29ed5cf95f97d5697ae13ece80cd366e59ec77a12 = $this->env->getExtension("native_profiler");
        $__internal_c02cd26bc186fb5569b24df29ed5cf95f97d5697ae13ece80cd366e59ec77a12->enter($__internal_c02cd26bc186fb5569b24df29ed5cf95f97d5697ae13ece80cd366e59ec77a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c02cd26bc186fb5569b24df29ed5cf95f97d5697ae13ece80cd366e59ec77a12->leave($__internal_c02cd26bc186fb5569b24df29ed5cf95f97d5697ae13ece80cd366e59ec77a12_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_072d796a326f1b9b28f2d435a3dd77babf16bf252b510a84d47234cabb55f608 = $this->env->getExtension("native_profiler");
        $__internal_072d796a326f1b9b28f2d435a3dd77babf16bf252b510a84d47234cabb55f608->enter($__internal_072d796a326f1b9b28f2d435a3dd77babf16bf252b510a84d47234cabb55f608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_072d796a326f1b9b28f2d435a3dd77babf16bf252b510a84d47234cabb55f608->leave($__internal_072d796a326f1b9b28f2d435a3dd77babf16bf252b510a84d47234cabb55f608_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a52bb0e92ce88c4460b7777d977871c4945697cc17df52b613cbd183e7aa5d1a = $this->env->getExtension("native_profiler");
        $__internal_a52bb0e92ce88c4460b7777d977871c4945697cc17df52b613cbd183e7aa5d1a->enter($__internal_a52bb0e92ce88c4460b7777d977871c4945697cc17df52b613cbd183e7aa5d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a52bb0e92ce88c4460b7777d977871c4945697cc17df52b613cbd183e7aa5d1a->leave($__internal_a52bb0e92ce88c4460b7777d977871c4945697cc17df52b613cbd183e7aa5d1a_prof);

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
