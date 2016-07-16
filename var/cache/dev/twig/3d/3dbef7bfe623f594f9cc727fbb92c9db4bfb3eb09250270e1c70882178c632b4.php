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
        $__internal_8f13a6b9e43aa921f79062974bb4d81794d0428d8b7a000e01d822ff19d39326 = $this->env->getExtension("native_profiler");
        $__internal_8f13a6b9e43aa921f79062974bb4d81794d0428d8b7a000e01d822ff19d39326->enter($__internal_8f13a6b9e43aa921f79062974bb4d81794d0428d8b7a000e01d822ff19d39326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f13a6b9e43aa921f79062974bb4d81794d0428d8b7a000e01d822ff19d39326->leave($__internal_8f13a6b9e43aa921f79062974bb4d81794d0428d8b7a000e01d822ff19d39326_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f21350960e6a9c2a8dd0e6a60f6e5f52eb219d64c4682553265777c4b73e5fe0 = $this->env->getExtension("native_profiler");
        $__internal_f21350960e6a9c2a8dd0e6a60f6e5f52eb219d64c4682553265777c4b73e5fe0->enter($__internal_f21350960e6a9c2a8dd0e6a60f6e5f52eb219d64c4682553265777c4b73e5fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f21350960e6a9c2a8dd0e6a60f6e5f52eb219d64c4682553265777c4b73e5fe0->leave($__internal_f21350960e6a9c2a8dd0e6a60f6e5f52eb219d64c4682553265777c4b73e5fe0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6fc74cd9479d7b35800081e6a17b25c5e7f4deaeffeefc89fffabbad582f5d4c = $this->env->getExtension("native_profiler");
        $__internal_6fc74cd9479d7b35800081e6a17b25c5e7f4deaeffeefc89fffabbad582f5d4c->enter($__internal_6fc74cd9479d7b35800081e6a17b25c5e7f4deaeffeefc89fffabbad582f5d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6fc74cd9479d7b35800081e6a17b25c5e7f4deaeffeefc89fffabbad582f5d4c->leave($__internal_6fc74cd9479d7b35800081e6a17b25c5e7f4deaeffeefc89fffabbad582f5d4c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_95a3496caea09000c273b1b63b19e95f363054f48a1d37c04ac2f7e97f21e552 = $this->env->getExtension("native_profiler");
        $__internal_95a3496caea09000c273b1b63b19e95f363054f48a1d37c04ac2f7e97f21e552->enter($__internal_95a3496caea09000c273b1b63b19e95f363054f48a1d37c04ac2f7e97f21e552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_95a3496caea09000c273b1b63b19e95f363054f48a1d37c04ac2f7e97f21e552->leave($__internal_95a3496caea09000c273b1b63b19e95f363054f48a1d37c04ac2f7e97f21e552_prof);

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
