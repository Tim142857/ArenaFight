<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_930c929db4107684165a4057490f13c3742fdf8e60e7bccf44afa02a8db4d747 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_7d54d0c2f1df07ac0d6c734d305af0407c17bb0d8e14799c07900cf6dea0301a = $this->env->getExtension("native_profiler");
        $__internal_7d54d0c2f1df07ac0d6c734d305af0407c17bb0d8e14799c07900cf6dea0301a->enter($__internal_7d54d0c2f1df07ac0d6c734d305af0407c17bb0d8e14799c07900cf6dea0301a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d54d0c2f1df07ac0d6c734d305af0407c17bb0d8e14799c07900cf6dea0301a->leave($__internal_7d54d0c2f1df07ac0d6c734d305af0407c17bb0d8e14799c07900cf6dea0301a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8350737b08e2f1aff4dced3e3971af2aac54aee8fff1c601e7122d9af0a65ccb = $this->env->getExtension("native_profiler");
        $__internal_8350737b08e2f1aff4dced3e3971af2aac54aee8fff1c601e7122d9af0a65ccb->enter($__internal_8350737b08e2f1aff4dced3e3971af2aac54aee8fff1c601e7122d9af0a65ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8350737b08e2f1aff4dced3e3971af2aac54aee8fff1c601e7122d9af0a65ccb->leave($__internal_8350737b08e2f1aff4dced3e3971af2aac54aee8fff1c601e7122d9af0a65ccb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a6dd33e07b68d846f05d40473b5876575717674deb0060d7cfd30a8fad65aa19 = $this->env->getExtension("native_profiler");
        $__internal_a6dd33e07b68d846f05d40473b5876575717674deb0060d7cfd30a8fad65aa19->enter($__internal_a6dd33e07b68d846f05d40473b5876575717674deb0060d7cfd30a8fad65aa19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a6dd33e07b68d846f05d40473b5876575717674deb0060d7cfd30a8fad65aa19->leave($__internal_a6dd33e07b68d846f05d40473b5876575717674deb0060d7cfd30a8fad65aa19_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_060c93602cc2a9ecd1c53f0502bfc252de587b31fb4f714bba24893dcb3c7307 = $this->env->getExtension("native_profiler");
        $__internal_060c93602cc2a9ecd1c53f0502bfc252de587b31fb4f714bba24893dcb3c7307->enter($__internal_060c93602cc2a9ecd1c53f0502bfc252de587b31fb4f714bba24893dcb3c7307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_060c93602cc2a9ecd1c53f0502bfc252de587b31fb4f714bba24893dcb3c7307->leave($__internal_060c93602cc2a9ecd1c53f0502bfc252de587b31fb4f714bba24893dcb3c7307_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
