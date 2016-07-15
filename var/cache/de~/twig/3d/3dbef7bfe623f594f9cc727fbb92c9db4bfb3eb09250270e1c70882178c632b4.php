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
        $__internal_3dab7d234a73d5151278c6814d6fffbf87127020cabaee84554129bc77cb13e4 = $this->env->getExtension("native_profiler");
        $__internal_3dab7d234a73d5151278c6814d6fffbf87127020cabaee84554129bc77cb13e4->enter($__internal_3dab7d234a73d5151278c6814d6fffbf87127020cabaee84554129bc77cb13e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3dab7d234a73d5151278c6814d6fffbf87127020cabaee84554129bc77cb13e4->leave($__internal_3dab7d234a73d5151278c6814d6fffbf87127020cabaee84554129bc77cb13e4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ff30d7fa16f3c4314d4664ac77e1aa9377d26476ff7d67799bb25f04c3c041d5 = $this->env->getExtension("native_profiler");
        $__internal_ff30d7fa16f3c4314d4664ac77e1aa9377d26476ff7d67799bb25f04c3c041d5->enter($__internal_ff30d7fa16f3c4314d4664ac77e1aa9377d26476ff7d67799bb25f04c3c041d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ff30d7fa16f3c4314d4664ac77e1aa9377d26476ff7d67799bb25f04c3c041d5->leave($__internal_ff30d7fa16f3c4314d4664ac77e1aa9377d26476ff7d67799bb25f04c3c041d5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6bdc299c71fa0a0b8d3c3e28684fa5eec2046ef6b39f5f34be40a7fdb6e5f843 = $this->env->getExtension("native_profiler");
        $__internal_6bdc299c71fa0a0b8d3c3e28684fa5eec2046ef6b39f5f34be40a7fdb6e5f843->enter($__internal_6bdc299c71fa0a0b8d3c3e28684fa5eec2046ef6b39f5f34be40a7fdb6e5f843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6bdc299c71fa0a0b8d3c3e28684fa5eec2046ef6b39f5f34be40a7fdb6e5f843->leave($__internal_6bdc299c71fa0a0b8d3c3e28684fa5eec2046ef6b39f5f34be40a7fdb6e5f843_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3839cd8221e0248dd61e47ded7f13194685a60dacda81084b326fad53b4f4e66 = $this->env->getExtension("native_profiler");
        $__internal_3839cd8221e0248dd61e47ded7f13194685a60dacda81084b326fad53b4f4e66->enter($__internal_3839cd8221e0248dd61e47ded7f13194685a60dacda81084b326fad53b4f4e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_3839cd8221e0248dd61e47ded7f13194685a60dacda81084b326fad53b4f4e66->leave($__internal_3839cd8221e0248dd61e47ded7f13194685a60dacda81084b326fad53b4f4e66_prof);

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
