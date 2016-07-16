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
        $__internal_03ff475eaeab6e304556a883d0be428d99383ff7e48fa885c4c2977e07db6393 = $this->env->getExtension("native_profiler");
        $__internal_03ff475eaeab6e304556a883d0be428d99383ff7e48fa885c4c2977e07db6393->enter($__internal_03ff475eaeab6e304556a883d0be428d99383ff7e48fa885c4c2977e07db6393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03ff475eaeab6e304556a883d0be428d99383ff7e48fa885c4c2977e07db6393->leave($__internal_03ff475eaeab6e304556a883d0be428d99383ff7e48fa885c4c2977e07db6393_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_52ff09936aada7e3f920c71164ffd9493b38adb9fd6c880b184ee1be0b14aa75 = $this->env->getExtension("native_profiler");
        $__internal_52ff09936aada7e3f920c71164ffd9493b38adb9fd6c880b184ee1be0b14aa75->enter($__internal_52ff09936aada7e3f920c71164ffd9493b38adb9fd6c880b184ee1be0b14aa75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_52ff09936aada7e3f920c71164ffd9493b38adb9fd6c880b184ee1be0b14aa75->leave($__internal_52ff09936aada7e3f920c71164ffd9493b38adb9fd6c880b184ee1be0b14aa75_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f59037382d38c511a30a55ed1e214ded6220988ca8cc6c9621eb8a3cd5c46bfc = $this->env->getExtension("native_profiler");
        $__internal_f59037382d38c511a30a55ed1e214ded6220988ca8cc6c9621eb8a3cd5c46bfc->enter($__internal_f59037382d38c511a30a55ed1e214ded6220988ca8cc6c9621eb8a3cd5c46bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f59037382d38c511a30a55ed1e214ded6220988ca8cc6c9621eb8a3cd5c46bfc->leave($__internal_f59037382d38c511a30a55ed1e214ded6220988ca8cc6c9621eb8a3cd5c46bfc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b92da8cada92c67df2c4a4c487332c94b1718f2b636ed57cd7fea28584ae16f1 = $this->env->getExtension("native_profiler");
        $__internal_b92da8cada92c67df2c4a4c487332c94b1718f2b636ed57cd7fea28584ae16f1->enter($__internal_b92da8cada92c67df2c4a4c487332c94b1718f2b636ed57cd7fea28584ae16f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b92da8cada92c67df2c4a4c487332c94b1718f2b636ed57cd7fea28584ae16f1->leave($__internal_b92da8cada92c67df2c4a4c487332c94b1718f2b636ed57cd7fea28584ae16f1_prof);

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
