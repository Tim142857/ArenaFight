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
        $__internal_85cb0926275ecc0b254b850149a213f042583d1e25923d0b1b979025af9ccdd6 = $this->env->getExtension("native_profiler");
        $__internal_85cb0926275ecc0b254b850149a213f042583d1e25923d0b1b979025af9ccdd6->enter($__internal_85cb0926275ecc0b254b850149a213f042583d1e25923d0b1b979025af9ccdd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85cb0926275ecc0b254b850149a213f042583d1e25923d0b1b979025af9ccdd6->leave($__internal_85cb0926275ecc0b254b850149a213f042583d1e25923d0b1b979025af9ccdd6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e1ba54a1c05c8696e94b02cc348c6c0c6adedec9e3ae7629c81b4395d5dea669 = $this->env->getExtension("native_profiler");
        $__internal_e1ba54a1c05c8696e94b02cc348c6c0c6adedec9e3ae7629c81b4395d5dea669->enter($__internal_e1ba54a1c05c8696e94b02cc348c6c0c6adedec9e3ae7629c81b4395d5dea669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e1ba54a1c05c8696e94b02cc348c6c0c6adedec9e3ae7629c81b4395d5dea669->leave($__internal_e1ba54a1c05c8696e94b02cc348c6c0c6adedec9e3ae7629c81b4395d5dea669_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6929f381ef1add30858cc0e1bd9d117c65030022b05cfd6bbe9a73fe17e4890e = $this->env->getExtension("native_profiler");
        $__internal_6929f381ef1add30858cc0e1bd9d117c65030022b05cfd6bbe9a73fe17e4890e->enter($__internal_6929f381ef1add30858cc0e1bd9d117c65030022b05cfd6bbe9a73fe17e4890e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6929f381ef1add30858cc0e1bd9d117c65030022b05cfd6bbe9a73fe17e4890e->leave($__internal_6929f381ef1add30858cc0e1bd9d117c65030022b05cfd6bbe9a73fe17e4890e_prof);

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
