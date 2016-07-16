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
        $__internal_27038af2a2537322356da6fda98c9ee66dd1198d28b64d4e343e79ca1cf9199e = $this->env->getExtension("native_profiler");
        $__internal_27038af2a2537322356da6fda98c9ee66dd1198d28b64d4e343e79ca1cf9199e->enter($__internal_27038af2a2537322356da6fda98c9ee66dd1198d28b64d4e343e79ca1cf9199e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27038af2a2537322356da6fda98c9ee66dd1198d28b64d4e343e79ca1cf9199e->leave($__internal_27038af2a2537322356da6fda98c9ee66dd1198d28b64d4e343e79ca1cf9199e_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2e66cac34119dc6f601961d6fca8398bf526198c989f4970f33ed3016923772 = $this->env->getExtension("native_profiler");
        $__internal_a2e66cac34119dc6f601961d6fca8398bf526198c989f4970f33ed3016923772->enter($__internal_a2e66cac34119dc6f601961d6fca8398bf526198c989f4970f33ed3016923772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"container\">
         ";
        // line 4
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 5
            echo "             ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
             <a href=\"";
            // line 6
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                 ";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
             </a>
         ";
        } else {
            // line 10
            echo "             <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
         ";
        }
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
        
        $__internal_a2e66cac34119dc6f601961d6fca8398bf526198c989f4970f33ed3016923772->leave($__internal_a2e66cac34119dc6f601961d6fca8398bf526198c989f4970f33ed3016923772_prof);

    }

    // line 24
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5a42f3df1a9f23cbf06f42c81a725d783bc2716a5f4c266be0f0344f555024cb = $this->env->getExtension("native_profiler");
        $__internal_5a42f3df1a9f23cbf06f42c81a725d783bc2716a5f4c266be0f0344f555024cb->enter($__internal_5a42f3df1a9f23cbf06f42c81a725d783bc2716a5f4c266be0f0344f555024cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 25
        echo "            ";
        
        $__internal_5a42f3df1a9f23cbf06f42c81a725d783bc2716a5f4c266be0f0344f555024cb->leave($__internal_5a42f3df1a9f23cbf06f42c81a725d783bc2716a5f4c266be0f0344f555024cb_prof);

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
        return array (  128 => 25,  122 => 24,  113 => 26,  111 => 24,  107 => 22,  104 => 21,  98 => 20,  89 => 17,  84 => 16,  79 => 15,  74 => 14,  72 => 13,  69 => 12,  61 => 10,  55 => 7,  51 => 6,  46 => 5,  44 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "ArenaFightBundle::Layout.html.twig" %}*/
/* {% block body %}*/
/*     <div class="container">*/
/*          {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*              {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |*/
/*              <a href="{{ path('fos_user_security_logout') }}">*/
/*                  {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/*              </a>*/
/*          {% else %}*/
/*              <a href="{{ path('fos_user_security_login') }}">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>*/
/*          {% endif %}*/
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
