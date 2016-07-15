<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_57da6e2cde32f47270e5234a2468e1dd80af977365e95d2de388dd034df3ca1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_36a0b5eff4e5f6f00d4ee726dae85fc264c0bcb2f920070900f8520f781d53e7 = $this->env->getExtension("native_profiler");
        $__internal_36a0b5eff4e5f6f00d4ee726dae85fc264c0bcb2f920070900f8520f781d53e7->enter($__internal_36a0b5eff4e5f6f00d4ee726dae85fc264c0bcb2f920070900f8520f781d53e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36a0b5eff4e5f6f00d4ee726dae85fc264c0bcb2f920070900f8520f781d53e7->leave($__internal_36a0b5eff4e5f6f00d4ee726dae85fc264c0bcb2f920070900f8520f781d53e7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_953df382b6d8f96776591e782d924b315ee2733e1699a008731abeffbbab788c = $this->env->getExtension("native_profiler");
        $__internal_953df382b6d8f96776591e782d924b315ee2733e1699a008731abeffbbab788c->enter($__internal_953df382b6d8f96776591e782d924b315ee2733e1699a008731abeffbbab788c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_953df382b6d8f96776591e782d924b315ee2733e1699a008731abeffbbab788c->leave($__internal_953df382b6d8f96776591e782d924b315ee2733e1699a008731abeffbbab788c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c6accbfa62734d67ba31a3ef8559c6fb97686e5f9368a84db004acec81c24ff9 = $this->env->getExtension("native_profiler");
        $__internal_c6accbfa62734d67ba31a3ef8559c6fb97686e5f9368a84db004acec81c24ff9->enter($__internal_c6accbfa62734d67ba31a3ef8559c6fb97686e5f9368a84db004acec81c24ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c6accbfa62734d67ba31a3ef8559c6fb97686e5f9368a84db004acec81c24ff9->leave($__internal_c6accbfa62734d67ba31a3ef8559c6fb97686e5f9368a84db004acec81c24ff9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4b50e9cf665dad2c6cf9d2c6c0299034535c67ed96b5e5b834d3230a065bd56f = $this->env->getExtension("native_profiler");
        $__internal_4b50e9cf665dad2c6cf9d2c6c0299034535c67ed96b5e5b834d3230a065bd56f->enter($__internal_4b50e9cf665dad2c6cf9d2c6c0299034535c67ed96b5e5b834d3230a065bd56f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4b50e9cf665dad2c6cf9d2c6c0299034535c67ed96b5e5b834d3230a065bd56f->leave($__internal_4b50e9cf665dad2c6cf9d2c6c0299034535c67ed96b5e5b834d3230a065bd56f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
