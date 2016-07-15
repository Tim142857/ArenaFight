<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_731c32789620cf6b39832e8fce47b1b8b5db1c7f5e66d9dd78374f4c2fd7aaef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_a5bca03e03c7d32fbbd2fe2614879f04631e2d3be8779f9c84d8ccf99306c2c4 = $this->env->getExtension("native_profiler");
        $__internal_a5bca03e03c7d32fbbd2fe2614879f04631e2d3be8779f9c84d8ccf99306c2c4->enter($__internal_a5bca03e03c7d32fbbd2fe2614879f04631e2d3be8779f9c84d8ccf99306c2c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5bca03e03c7d32fbbd2fe2614879f04631e2d3be8779f9c84d8ccf99306c2c4->leave($__internal_a5bca03e03c7d32fbbd2fe2614879f04631e2d3be8779f9c84d8ccf99306c2c4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9f8ce29dc76795bdaa1f4aa21d6685e4ba601bab418147f53604169b9323f6b7 = $this->env->getExtension("native_profiler");
        $__internal_9f8ce29dc76795bdaa1f4aa21d6685e4ba601bab418147f53604169b9323f6b7->enter($__internal_9f8ce29dc76795bdaa1f4aa21d6685e4ba601bab418147f53604169b9323f6b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_9f8ce29dc76795bdaa1f4aa21d6685e4ba601bab418147f53604169b9323f6b7->leave($__internal_9f8ce29dc76795bdaa1f4aa21d6685e4ba601bab418147f53604169b9323f6b7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7bc1d0d851fdba8eeced7a8ba58eb82b99f05f9a4a91b4b7a8f001003253bbc = $this->env->getExtension("native_profiler");
        $__internal_b7bc1d0d851fdba8eeced7a8ba58eb82b99f05f9a4a91b4b7a8f001003253bbc->enter($__internal_b7bc1d0d851fdba8eeced7a8ba58eb82b99f05f9a4a91b4b7a8f001003253bbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_b7bc1d0d851fdba8eeced7a8ba58eb82b99f05f9a4a91b4b7a8f001003253bbc->leave($__internal_b7bc1d0d851fdba8eeced7a8ba58eb82b99f05f9a4a91b4b7a8f001003253bbc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
