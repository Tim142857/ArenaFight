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
        $__internal_3fcfa38d221d9db21dd5994074d6cad79760c3ef50889d6ebe8c0ecb96c7d6cb = $this->env->getExtension("native_profiler");
        $__internal_3fcfa38d221d9db21dd5994074d6cad79760c3ef50889d6ebe8c0ecb96c7d6cb->enter($__internal_3fcfa38d221d9db21dd5994074d6cad79760c3ef50889d6ebe8c0ecb96c7d6cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fcfa38d221d9db21dd5994074d6cad79760c3ef50889d6ebe8c0ecb96c7d6cb->leave($__internal_3fcfa38d221d9db21dd5994074d6cad79760c3ef50889d6ebe8c0ecb96c7d6cb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bee5fca969e32f246de9604807a1e1c1375348c54cbe33d9788bb1979510a81a = $this->env->getExtension("native_profiler");
        $__internal_bee5fca969e32f246de9604807a1e1c1375348c54cbe33d9788bb1979510a81a->enter($__internal_bee5fca969e32f246de9604807a1e1c1375348c54cbe33d9788bb1979510a81a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_bee5fca969e32f246de9604807a1e1c1375348c54cbe33d9788bb1979510a81a->leave($__internal_bee5fca969e32f246de9604807a1e1c1375348c54cbe33d9788bb1979510a81a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_19e889742cb9e777543bda1b1bf0310f455985dcbf62201c242ab5f0f8707e33 = $this->env->getExtension("native_profiler");
        $__internal_19e889742cb9e777543bda1b1bf0310f455985dcbf62201c242ab5f0f8707e33->enter($__internal_19e889742cb9e777543bda1b1bf0310f455985dcbf62201c242ab5f0f8707e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_19e889742cb9e777543bda1b1bf0310f455985dcbf62201c242ab5f0f8707e33->leave($__internal_19e889742cb9e777543bda1b1bf0310f455985dcbf62201c242ab5f0f8707e33_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f1326dd7879e45969e77992e4b2b71b52b8212a2def677cdd51d2b13f138df38 = $this->env->getExtension("native_profiler");
        $__internal_f1326dd7879e45969e77992e4b2b71b52b8212a2def677cdd51d2b13f138df38->enter($__internal_f1326dd7879e45969e77992e4b2b71b52b8212a2def677cdd51d2b13f138df38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f1326dd7879e45969e77992e4b2b71b52b8212a2def677cdd51d2b13f138df38->leave($__internal_f1326dd7879e45969e77992e4b2b71b52b8212a2def677cdd51d2b13f138df38_prof);

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
