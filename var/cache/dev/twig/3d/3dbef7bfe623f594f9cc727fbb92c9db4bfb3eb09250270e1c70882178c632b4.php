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
        $__internal_b3ba21e26b50917ce5418a2faea9e68721fdfb1a1eb7575a2b323fe873afbcbc = $this->env->getExtension("native_profiler");
        $__internal_b3ba21e26b50917ce5418a2faea9e68721fdfb1a1eb7575a2b323fe873afbcbc->enter($__internal_b3ba21e26b50917ce5418a2faea9e68721fdfb1a1eb7575a2b323fe873afbcbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3ba21e26b50917ce5418a2faea9e68721fdfb1a1eb7575a2b323fe873afbcbc->leave($__internal_b3ba21e26b50917ce5418a2faea9e68721fdfb1a1eb7575a2b323fe873afbcbc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_35c3ce2d1914b3d8ce67a3db80fe31cb85400100344e1f144c8fabb6d8cb2dbf = $this->env->getExtension("native_profiler");
        $__internal_35c3ce2d1914b3d8ce67a3db80fe31cb85400100344e1f144c8fabb6d8cb2dbf->enter($__internal_35c3ce2d1914b3d8ce67a3db80fe31cb85400100344e1f144c8fabb6d8cb2dbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_35c3ce2d1914b3d8ce67a3db80fe31cb85400100344e1f144c8fabb6d8cb2dbf->leave($__internal_35c3ce2d1914b3d8ce67a3db80fe31cb85400100344e1f144c8fabb6d8cb2dbf_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a5f6bebdac2a449b44ea5a06481956dc08910a1df88c537d1453460a904db111 = $this->env->getExtension("native_profiler");
        $__internal_a5f6bebdac2a449b44ea5a06481956dc08910a1df88c537d1453460a904db111->enter($__internal_a5f6bebdac2a449b44ea5a06481956dc08910a1df88c537d1453460a904db111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a5f6bebdac2a449b44ea5a06481956dc08910a1df88c537d1453460a904db111->leave($__internal_a5f6bebdac2a449b44ea5a06481956dc08910a1df88c537d1453460a904db111_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac093d777fac945dbf1e899db11604cb8af50b2fa9c177ff13757c17f2cbbb8d = $this->env->getExtension("native_profiler");
        $__internal_ac093d777fac945dbf1e899db11604cb8af50b2fa9c177ff13757c17f2cbbb8d->enter($__internal_ac093d777fac945dbf1e899db11604cb8af50b2fa9c177ff13757c17f2cbbb8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ac093d777fac945dbf1e899db11604cb8af50b2fa9c177ff13757c17f2cbbb8d->leave($__internal_ac093d777fac945dbf1e899db11604cb8af50b2fa9c177ff13757c17f2cbbb8d_prof);

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
