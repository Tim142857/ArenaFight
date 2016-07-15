<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_78a55b3a1b2c1cbd3a78ace09cc218df107e7d33b0567318b315f0eceb498a86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_9013eb81aa68a9c2001058fb7bfbcfa246e7b3e3a4b57884271d91633b85c2cb = $this->env->getExtension("native_profiler");
        $__internal_9013eb81aa68a9c2001058fb7bfbcfa246e7b3e3a4b57884271d91633b85c2cb->enter($__internal_9013eb81aa68a9c2001058fb7bfbcfa246e7b3e3a4b57884271d91633b85c2cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9013eb81aa68a9c2001058fb7bfbcfa246e7b3e3a4b57884271d91633b85c2cb->leave($__internal_9013eb81aa68a9c2001058fb7bfbcfa246e7b3e3a4b57884271d91633b85c2cb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_29761f92c3d8bf306494cc6d738f03d737b328d9ad017133486a8e0396416b2e = $this->env->getExtension("native_profiler");
        $__internal_29761f92c3d8bf306494cc6d738f03d737b328d9ad017133486a8e0396416b2e->enter($__internal_29761f92c3d8bf306494cc6d738f03d737b328d9ad017133486a8e0396416b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_29761f92c3d8bf306494cc6d738f03d737b328d9ad017133486a8e0396416b2e->leave($__internal_29761f92c3d8bf306494cc6d738f03d737b328d9ad017133486a8e0396416b2e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_71a141e876754aa6e2d006454cb4a76b5f8af665a30a9287fedf577fc9969d25 = $this->env->getExtension("native_profiler");
        $__internal_71a141e876754aa6e2d006454cb4a76b5f8af665a30a9287fedf577fc9969d25->enter($__internal_71a141e876754aa6e2d006454cb4a76b5f8af665a30a9287fedf577fc9969d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_71a141e876754aa6e2d006454cb4a76b5f8af665a30a9287fedf577fc9969d25->leave($__internal_71a141e876754aa6e2d006454cb4a76b5f8af665a30a9287fedf577fc9969d25_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
