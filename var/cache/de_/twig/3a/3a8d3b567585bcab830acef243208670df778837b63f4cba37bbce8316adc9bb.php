<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_d9bcb53c41478093c435cf85d41f0bf1704b0f7c6ffec50dc070a62c8e86b3de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d0d19f95080e9478af2be5a9407380d1be9db853fa41d2ee1f38bfd17f27f53 = $this->env->getExtension("native_profiler");
        $__internal_8d0d19f95080e9478af2be5a9407380d1be9db853fa41d2ee1f38bfd17f27f53->enter($__internal_8d0d19f95080e9478af2be5a9407380d1be9db853fa41d2ee1f38bfd17f27f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d0d19f95080e9478af2be5a9407380d1be9db853fa41d2ee1f38bfd17f27f53->leave($__internal_8d0d19f95080e9478af2be5a9407380d1be9db853fa41d2ee1f38bfd17f27f53_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0217f73bb168e2a56b33f6d27ce3627b29bfdd9b80eb5100f6863239ef2ac6a2 = $this->env->getExtension("native_profiler");
        $__internal_0217f73bb168e2a56b33f6d27ce3627b29bfdd9b80eb5100f6863239ef2ac6a2->enter($__internal_0217f73bb168e2a56b33f6d27ce3627b29bfdd9b80eb5100f6863239ef2ac6a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_0217f73bb168e2a56b33f6d27ce3627b29bfdd9b80eb5100f6863239ef2ac6a2->leave($__internal_0217f73bb168e2a56b33f6d27ce3627b29bfdd9b80eb5100f6863239ef2ac6a2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
