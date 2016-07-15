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
        $__internal_e3b045e0825fad19ce2e60791616cbf15f72e3c92d7748d23a19397766150efd = $this->env->getExtension("native_profiler");
        $__internal_e3b045e0825fad19ce2e60791616cbf15f72e3c92d7748d23a19397766150efd->enter($__internal_e3b045e0825fad19ce2e60791616cbf15f72e3c92d7748d23a19397766150efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_e3b045e0825fad19ce2e60791616cbf15f72e3c92d7748d23a19397766150efd->leave($__internal_e3b045e0825fad19ce2e60791616cbf15f72e3c92d7748d23a19397766150efd_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_214b35b3f364bc6bcda53b051b555ada176044146f085037af074f78a22883d6 = $this->env->getExtension("native_profiler");
        $__internal_214b35b3f364bc6bcda53b051b555ada176044146f085037af074f78a22883d6->enter($__internal_214b35b3f364bc6bcda53b051b555ada176044146f085037af074f78a22883d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_214b35b3f364bc6bcda53b051b555ada176044146f085037af074f78a22883d6->leave($__internal_214b35b3f364bc6bcda53b051b555ada176044146f085037af074f78a22883d6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6b41ef66cba5fc736e4e5d38d56c99936df6d3f14c8787804004eff587e80c7b = $this->env->getExtension("native_profiler");
        $__internal_6b41ef66cba5fc736e4e5d38d56c99936df6d3f14c8787804004eff587e80c7b->enter($__internal_6b41ef66cba5fc736e4e5d38d56c99936df6d3f14c8787804004eff587e80c7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6b41ef66cba5fc736e4e5d38d56c99936df6d3f14c8787804004eff587e80c7b->leave($__internal_6b41ef66cba5fc736e4e5d38d56c99936df6d3f14c8787804004eff587e80c7b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_df3c6090faac1112784176cd232924ba4459ce74d1d0797c56ce6e3e9e69a27c = $this->env->getExtension("native_profiler");
        $__internal_df3c6090faac1112784176cd232924ba4459ce74d1d0797c56ce6e3e9e69a27c->enter($__internal_df3c6090faac1112784176cd232924ba4459ce74d1d0797c56ce6e3e9e69a27c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_df3c6090faac1112784176cd232924ba4459ce74d1d0797c56ce6e3e9e69a27c->leave($__internal_df3c6090faac1112784176cd232924ba4459ce74d1d0797c56ce6e3e9e69a27c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b8640e5e0846005aee0ae400c29595c8baf2b5d4f8bd3ce6886488a190b59c26 = $this->env->getExtension("native_profiler");
        $__internal_b8640e5e0846005aee0ae400c29595c8baf2b5d4f8bd3ce6886488a190b59c26->enter($__internal_b8640e5e0846005aee0ae400c29595c8baf2b5d4f8bd3ce6886488a190b59c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b8640e5e0846005aee0ae400c29595c8baf2b5d4f8bd3ce6886488a190b59c26->leave($__internal_b8640e5e0846005aee0ae400c29595c8baf2b5d4f8bd3ce6886488a190b59c26_prof);

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
