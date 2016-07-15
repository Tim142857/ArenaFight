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
        $__internal_8f389121f4b7906ec93418715d34e5c81fcc8fa77c4c549d21c3a966ff94f371 = $this->env->getExtension("native_profiler");
        $__internal_8f389121f4b7906ec93418715d34e5c81fcc8fa77c4c549d21c3a966ff94f371->enter($__internal_8f389121f4b7906ec93418715d34e5c81fcc8fa77c4c549d21c3a966ff94f371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f389121f4b7906ec93418715d34e5c81fcc8fa77c4c549d21c3a966ff94f371->leave($__internal_8f389121f4b7906ec93418715d34e5c81fcc8fa77c4c549d21c3a966ff94f371_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_529f38b00498643cd8649bc382c30c2fc4a88f0e6805a2f26a789c0ddd09db25 = $this->env->getExtension("native_profiler");
        $__internal_529f38b00498643cd8649bc382c30c2fc4a88f0e6805a2f26a789c0ddd09db25->enter($__internal_529f38b00498643cd8649bc382c30c2fc4a88f0e6805a2f26a789c0ddd09db25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_529f38b00498643cd8649bc382c30c2fc4a88f0e6805a2f26a789c0ddd09db25->leave($__internal_529f38b00498643cd8649bc382c30c2fc4a88f0e6805a2f26a789c0ddd09db25_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_61eb7cd1b431c9fce8bf838b2a6796a0e1e3592a54cc67fea4d756ba311101d2 = $this->env->getExtension("native_profiler");
        $__internal_61eb7cd1b431c9fce8bf838b2a6796a0e1e3592a54cc67fea4d756ba311101d2->enter($__internal_61eb7cd1b431c9fce8bf838b2a6796a0e1e3592a54cc67fea4d756ba311101d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_61eb7cd1b431c9fce8bf838b2a6796a0e1e3592a54cc67fea4d756ba311101d2->leave($__internal_61eb7cd1b431c9fce8bf838b2a6796a0e1e3592a54cc67fea4d756ba311101d2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bf55d922933b547269825ff099d5017ce201961496491eb2e80abcb2fba62a9a = $this->env->getExtension("native_profiler");
        $__internal_bf55d922933b547269825ff099d5017ce201961496491eb2e80abcb2fba62a9a->enter($__internal_bf55d922933b547269825ff099d5017ce201961496491eb2e80abcb2fba62a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bf55d922933b547269825ff099d5017ce201961496491eb2e80abcb2fba62a9a->leave($__internal_bf55d922933b547269825ff099d5017ce201961496491eb2e80abcb2fba62a9a_prof);

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
