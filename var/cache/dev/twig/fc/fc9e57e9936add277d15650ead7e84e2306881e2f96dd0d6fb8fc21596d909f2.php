<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_b724cabd6dffac0d616412967742b6276af412b9c8db76d09b29aa257523a551 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ArenaFightBundle:Visitor:LayoutVisitor.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ArenaFightBundle:Visitor:LayoutVisitor.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_569abcf818c9fa980fbe1516dcf93a7c3e2f9815e3506681134f3618cb5c30f5 = $this->env->getExtension("native_profiler");
        $__internal_569abcf818c9fa980fbe1516dcf93a7c3e2f9815e3506681134f3618cb5c30f5->enter($__internal_569abcf818c9fa980fbe1516dcf93a7c3e2f9815e3506681134f3618cb5c30f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_569abcf818c9fa980fbe1516dcf93a7c3e2f9815e3506681134f3618cb5c30f5->leave($__internal_569abcf818c9fa980fbe1516dcf93a7c3e2f9815e3506681134f3618cb5c30f5_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_2f239e05a1fad6f3898186fdea84c0ce68383ecf66604bf5f253001e2fef4967 = $this->env->getExtension("native_profiler");
        $__internal_2f239e05a1fad6f3898186fdea84c0ce68383ecf66604bf5f253001e2fef4967->enter($__internal_2f239e05a1fad6f3898186fdea84c0ce68383ecf66604bf5f253001e2fef4967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-12>\"
                 ";
        // line 6
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 7
            echo "                     ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                     <a href=\"";
            // line 8
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                         ";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                     </a>
                 ";
        } else {
            // line 12
            echo "                     <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                 ";
        }
        // line 14
        echo "
                 ";
        // line 15
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 16
            echo "                     ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 17
                echo "                         ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 18
                    echo "                             <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                                 ";
                    // line 19
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                             </div>
                         ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "                     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "                 ";
        }
        // line 24
        echo "
                 <div>
                     ";
        // line 26
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 28
        echo "                 </div>
            </div>
        </div>
    </div>
";
        
        $__internal_2f239e05a1fad6f3898186fdea84c0ce68383ecf66604bf5f253001e2fef4967->leave($__internal_2f239e05a1fad6f3898186fdea84c0ce68383ecf66604bf5f253001e2fef4967_prof);

    }

    // line 26
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b2ec31378abd6bee3cc8c65ce3a6aae828da8e88c93b573cb7aa319a99d65d8c = $this->env->getExtension("native_profiler");
        $__internal_b2ec31378abd6bee3cc8c65ce3a6aae828da8e88c93b573cb7aa319a99d65d8c->enter($__internal_b2ec31378abd6bee3cc8c65ce3a6aae828da8e88c93b573cb7aa319a99d65d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 27
        echo "                     ";
        
        $__internal_b2ec31378abd6bee3cc8c65ce3a6aae828da8e88c93b573cb7aa319a99d65d8c->leave($__internal_b2ec31378abd6bee3cc8c65ce3a6aae828da8e88c93b573cb7aa319a99d65d8c_prof);

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
        return array (  132 => 27,  126 => 26,  115 => 28,  113 => 26,  109 => 24,  106 => 23,  100 => 22,  91 => 19,  86 => 18,  81 => 17,  76 => 16,  74 => 15,  71 => 14,  63 => 12,  57 => 9,  53 => 8,  48 => 7,  46 => 6,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "ArenaFightBundle:Visitor:LayoutVisitor.html.twig" %}*/
/* {% block body %}*/
/*     <div class="container-fluid">*/
/*         <div class="row">*/
/*             <div class="col-md-12>"*/
/*                  {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                      {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |*/
/*                      <a href="{{ path('fos_user_security_logout') }}">*/
/*                          {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/*                      </a>*/
/*                  {% else %}*/
/*                      <a href="{{ path('fos_user_security_login') }}">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>*/
/*                  {% endif %}*/
/* */
/*                  {% if app.request.hasPreviousSession %}*/
/*                      {% for type, messages in app.session.flashbag.all() %}*/
/*                          {% for message in messages %}*/
/*                              <div class="flash-{{ type }}">*/
/*                                  {{ message }}*/
/*                              </div>*/
/*                          {% endfor %}*/
/*                      {% endfor %}*/
/*                  {% endif %}*/
/* */
/*                  <div>*/
/*                      {% block fos_user_content %}*/
/*                      {% endblock fos_user_content %}*/
/*                  </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
