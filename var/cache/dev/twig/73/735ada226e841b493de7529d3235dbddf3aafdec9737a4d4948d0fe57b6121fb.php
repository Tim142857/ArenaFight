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
        $__internal_27249e4076a6cddf066829f22ea7a99f88d7e320ee431a3d457c1d8efeb4d946 = $this->env->getExtension("native_profiler");
        $__internal_27249e4076a6cddf066829f22ea7a99f88d7e320ee431a3d457c1d8efeb4d946->enter($__internal_27249e4076a6cddf066829f22ea7a99f88d7e320ee431a3d457c1d8efeb4d946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27249e4076a6cddf066829f22ea7a99f88d7e320ee431a3d457c1d8efeb4d946->leave($__internal_27249e4076a6cddf066829f22ea7a99f88d7e320ee431a3d457c1d8efeb4d946_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d930843e82ba03379b02a346cb48d1d5d7c7447226e26e439f9b9c3f49c0806b = $this->env->getExtension("native_profiler");
        $__internal_d930843e82ba03379b02a346cb48d1d5d7c7447226e26e439f9b9c3f49c0806b->enter($__internal_d930843e82ba03379b02a346cb48d1d5d7c7447226e26e439f9b9c3f49c0806b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d930843e82ba03379b02a346cb48d1d5d7c7447226e26e439f9b9c3f49c0806b->leave($__internal_d930843e82ba03379b02a346cb48d1d5d7c7447226e26e439f9b9c3f49c0806b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_da580bc102a26347c1beb63b7a0a1ef0ce6626b0930097239e32b98f7cd0abea = $this->env->getExtension("native_profiler");
        $__internal_da580bc102a26347c1beb63b7a0a1ef0ce6626b0930097239e32b98f7cd0abea->enter($__internal_da580bc102a26347c1beb63b7a0a1ef0ce6626b0930097239e32b98f7cd0abea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_da580bc102a26347c1beb63b7a0a1ef0ce6626b0930097239e32b98f7cd0abea->leave($__internal_da580bc102a26347c1beb63b7a0a1ef0ce6626b0930097239e32b98f7cd0abea_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9292fa67f470f8e7ddbe2fa43050cfd1a802b7c8a3b31170b45b0abf8b594357 = $this->env->getExtension("native_profiler");
        $__internal_9292fa67f470f8e7ddbe2fa43050cfd1a802b7c8a3b31170b45b0abf8b594357->enter($__internal_9292fa67f470f8e7ddbe2fa43050cfd1a802b7c8a3b31170b45b0abf8b594357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9292fa67f470f8e7ddbe2fa43050cfd1a802b7c8a3b31170b45b0abf8b594357->leave($__internal_9292fa67f470f8e7ddbe2fa43050cfd1a802b7c8a3b31170b45b0abf8b594357_prof);

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
