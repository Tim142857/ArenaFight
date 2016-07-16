<?php

/* ::base.html.twig */
class __TwigTemplate_f660f0f9ff7ea1b1980ea4ec65008bd34d5720299a88f39f36ded7f38f7227ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea0ce837260acf6c6e0bf741d5049d2748fbf8d1b66c996e1013b9eba65d3f5a = $this->env->getExtension("native_profiler");
        $__internal_ea0ce837260acf6c6e0bf741d5049d2748fbf8d1b66c996e1013b9eba65d3f5a->enter($__internal_ea0ce837260acf6c6e0bf741d5049d2748fbf8d1b66c996e1013b9eba65d3f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_ea0ce837260acf6c6e0bf741d5049d2748fbf8d1b66c996e1013b9eba65d3f5a->leave($__internal_ea0ce837260acf6c6e0bf741d5049d2748fbf8d1b66c996e1013b9eba65d3f5a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_687e45add0afa5e68f43c801f077dd0afbac5dd46809c5125c544def2dbce653 = $this->env->getExtension("native_profiler");
        $__internal_687e45add0afa5e68f43c801f077dd0afbac5dd46809c5125c544def2dbce653->enter($__internal_687e45add0afa5e68f43c801f077dd0afbac5dd46809c5125c544def2dbce653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_687e45add0afa5e68f43c801f077dd0afbac5dd46809c5125c544def2dbce653->leave($__internal_687e45add0afa5e68f43c801f077dd0afbac5dd46809c5125c544def2dbce653_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f4cdeea8cc9e29328691a1cd5a40730e56b7fa2d7a2464cf3b6e8fe91ff1ead7 = $this->env->getExtension("native_profiler");
        $__internal_f4cdeea8cc9e29328691a1cd5a40730e56b7fa2d7a2464cf3b6e8fe91ff1ead7->enter($__internal_f4cdeea8cc9e29328691a1cd5a40730e56b7fa2d7a2464cf3b6e8fe91ff1ead7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f4cdeea8cc9e29328691a1cd5a40730e56b7fa2d7a2464cf3b6e8fe91ff1ead7->leave($__internal_f4cdeea8cc9e29328691a1cd5a40730e56b7fa2d7a2464cf3b6e8fe91ff1ead7_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e089c985748a0543b2e861e8c8b2bdc46d7242249b103689c2ae6bec685afae7 = $this->env->getExtension("native_profiler");
        $__internal_e089c985748a0543b2e861e8c8b2bdc46d7242249b103689c2ae6bec685afae7->enter($__internal_e089c985748a0543b2e861e8c8b2bdc46d7242249b103689c2ae6bec685afae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e089c985748a0543b2e861e8c8b2bdc46d7242249b103689c2ae6bec685afae7->leave($__internal_e089c985748a0543b2e861e8c8b2bdc46d7242249b103689c2ae6bec685afae7_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8b83bd755d6e5347ea255353d7b7de6fe7ed83b034fdf7bb8016bd554d546487 = $this->env->getExtension("native_profiler");
        $__internal_8b83bd755d6e5347ea255353d7b7de6fe7ed83b034fdf7bb8016bd554d546487->enter($__internal_8b83bd755d6e5347ea255353d7b7de6fe7ed83b034fdf7bb8016bd554d546487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8b83bd755d6e5347ea255353d7b7de6fe7ed83b034fdf7bb8016bd554d546487->leave($__internal_8b83bd755d6e5347ea255353d7b7de6fe7ed83b034fdf7bb8016bd554d546487_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
