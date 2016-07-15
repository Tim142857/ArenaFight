<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_b724cabd6dffac0d616412967742b6276af412b9c8db76d09b29aa257523a551 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ArenaFightBundle::Layout.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ArenaFightBundle::Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b8fed06a6bdee644a1d3a8fe3aedb267b2819cce0c1d5dc3580df3b734574910 = $this->env->getExtension("native_profiler");
        $__internal_b8fed06a6bdee644a1d3a8fe3aedb267b2819cce0c1d5dc3580df3b734574910->enter($__internal_b8fed06a6bdee644a1d3a8fe3aedb267b2819cce0c1d5dc3580df3b734574910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8fed06a6bdee644a1d3a8fe3aedb267b2819cce0c1d5dc3580df3b734574910->leave($__internal_b8fed06a6bdee644a1d3a8fe3aedb267b2819cce0c1d5dc3580df3b734574910_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_dda4b2137612c7d868108972c3db7466bd80455b5e88c0ad53d67d4ed3c871b0 = $this->env->getExtension("native_profiler");
        $__internal_dda4b2137612c7d868108972c3db7466bd80455b5e88c0ad53d67d4ed3c871b0->enter($__internal_dda4b2137612c7d868108972c3db7466bd80455b5e88c0ad53d67d4ed3c871b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"container\">
        ";
        // line 12
        echo "
        ";
        // line 13
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 14
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 15
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 16
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 17
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "        ";
        }
        // line 22
        echo "
        <div>
            ";
        // line 24
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 26
        echo "        </div>
    </div>
";
        
        $__internal_dda4b2137612c7d868108972c3db7466bd80455b5e88c0ad53d67d4ed3c871b0->leave($__internal_dda4b2137612c7d868108972c3db7466bd80455b5e88c0ad53d67d4ed3c871b0_prof);

    }

    // line 24
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d6d5ac55bf1e724dfc8ac93d3bde2ebe30ca1d1df65296f4046f69e091b46c82 = $this->env->getExtension("native_profiler");
        $__internal_d6d5ac55bf1e724dfc8ac93d3bde2ebe30ca1d1df65296f4046f69e091b46c82->enter($__internal_d6d5ac55bf1e724dfc8ac93d3bde2ebe30ca1d1df65296f4046f69e091b46c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 25
        echo "            ";
        
        $__internal_d6d5ac55bf1e724dfc8ac93d3bde2ebe30ca1d1df65296f4046f69e091b46c82->leave($__internal_d6d5ac55bf1e724dfc8ac93d3bde2ebe30ca1d1df65296f4046f69e091b46c82_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 25,  97 => 24,  88 => 26,  86 => 24,  82 => 22,  79 => 21,  73 => 20,  64 => 17,  59 => 16,  54 => 15,  49 => 14,  47 => 13,  44 => 12,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "ArenaFightBundle::Layout.html.twig" %}*/
/* {% block body %}*/
/*     <div class="container">*/
/*         {# {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*              {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |*/
/*              <a href="{{ path('fos_user_security_logout') }}">*/
/*                  {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/*              </a>*/
/*          {% else %}*/
/*              <a href="{{ path('fos_user_security_login') }}">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>*/
/*          {% endif %}#}*/
/* */
/*         {% if app.request.hasPreviousSession %}*/
/*             {% for type, messages in app.session.flashbag.all() %}*/
/*                 {% for message in messages %}*/
/*                     <div class="flash-{{ type }}">*/
/*                         {{ message }}*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             {% endfor %}*/
/*         {% endif %}*/
/* */
/*         <div>*/
/*             {% block fos_user_content %}*/
/*             {% endblock fos_user_content %}*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
