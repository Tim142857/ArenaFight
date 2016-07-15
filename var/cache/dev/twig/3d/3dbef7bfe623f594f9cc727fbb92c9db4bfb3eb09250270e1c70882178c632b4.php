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
        $__internal_28bf37eb2bb5cf91678a4f001b15af630faa513813577b9a0b2d510906d7dd09 = $this->env->getExtension("native_profiler");
        $__internal_28bf37eb2bb5cf91678a4f001b15af630faa513813577b9a0b2d510906d7dd09->enter($__internal_28bf37eb2bb5cf91678a4f001b15af630faa513813577b9a0b2d510906d7dd09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28bf37eb2bb5cf91678a4f001b15af630faa513813577b9a0b2d510906d7dd09->leave($__internal_28bf37eb2bb5cf91678a4f001b15af630faa513813577b9a0b2d510906d7dd09_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_910f60e1e52140e99cfd12e741dfb13b66b97628c85fa1a5c29586242e2d1a32 = $this->env->getExtension("native_profiler");
        $__internal_910f60e1e52140e99cfd12e741dfb13b66b97628c85fa1a5c29586242e2d1a32->enter($__internal_910f60e1e52140e99cfd12e741dfb13b66b97628c85fa1a5c29586242e2d1a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_910f60e1e52140e99cfd12e741dfb13b66b97628c85fa1a5c29586242e2d1a32->leave($__internal_910f60e1e52140e99cfd12e741dfb13b66b97628c85fa1a5c29586242e2d1a32_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d18f98827784c814fe74baefec9b8c336f96212de830d01bf02b26dbcf71c0b3 = $this->env->getExtension("native_profiler");
        $__internal_d18f98827784c814fe74baefec9b8c336f96212de830d01bf02b26dbcf71c0b3->enter($__internal_d18f98827784c814fe74baefec9b8c336f96212de830d01bf02b26dbcf71c0b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d18f98827784c814fe74baefec9b8c336f96212de830d01bf02b26dbcf71c0b3->leave($__internal_d18f98827784c814fe74baefec9b8c336f96212de830d01bf02b26dbcf71c0b3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f329e48564843bdfe3322baeeef204af460a4ac80fe674c2606c57c334ce446f = $this->env->getExtension("native_profiler");
        $__internal_f329e48564843bdfe3322baeeef204af460a4ac80fe674c2606c57c334ce446f->enter($__internal_f329e48564843bdfe3322baeeef204af460a4ac80fe674c2606c57c334ce446f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f329e48564843bdfe3322baeeef204af460a4ac80fe674c2606c57c334ce446f->leave($__internal_f329e48564843bdfe3322baeeef204af460a4ac80fe674c2606c57c334ce446f_prof);

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
