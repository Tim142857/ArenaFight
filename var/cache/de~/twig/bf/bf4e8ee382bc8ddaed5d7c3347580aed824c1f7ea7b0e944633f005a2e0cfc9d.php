<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_6bdfa45cd686b631c8d6e46fa0231f4e07b45390642a9d8e77fe9fdad2421e60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cc51a4eb99631c600992dead676bde7e83efbe42588336a17aee8e2597ee1779 = $this->env->getExtension("native_profiler");
        $__internal_cc51a4eb99631c600992dead676bde7e83efbe42588336a17aee8e2597ee1779->enter($__internal_cc51a4eb99631c600992dead676bde7e83efbe42588336a17aee8e2597ee1779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_cc51a4eb99631c600992dead676bde7e83efbe42588336a17aee8e2597ee1779->leave($__internal_cc51a4eb99631c600992dead676bde7e83efbe42588336a17aee8e2597ee1779_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_da5e79f994041131811491213194bf15f419f75b69fb9266d2b17c18a648bdd6 = $this->env->getExtension("native_profiler");
        $__internal_da5e79f994041131811491213194bf15f419f75b69fb9266d2b17c18a648bdd6->enter($__internal_da5e79f994041131811491213194bf15f419f75b69fb9266d2b17c18a648bdd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_da5e79f994041131811491213194bf15f419f75b69fb9266d2b17c18a648bdd6->leave($__internal_da5e79f994041131811491213194bf15f419f75b69fb9266d2b17c18a648bdd6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
