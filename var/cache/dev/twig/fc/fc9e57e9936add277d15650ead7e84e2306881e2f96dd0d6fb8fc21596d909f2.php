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
        $__internal_ec137c002d2973121f3505a4791f1d10fc4ed68c410db334d42e7ed5a0370a1b = $this->env->getExtension("native_profiler");
        $__internal_ec137c002d2973121f3505a4791f1d10fc4ed68c410db334d42e7ed5a0370a1b->enter($__internal_ec137c002d2973121f3505a4791f1d10fc4ed68c410db334d42e7ed5a0370a1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec137c002d2973121f3505a4791f1d10fc4ed68c410db334d42e7ed5a0370a1b->leave($__internal_ec137c002d2973121f3505a4791f1d10fc4ed68c410db334d42e7ed5a0370a1b_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_663960e81b1c104a138d1ec9f1e3fe34125e79211da6e93e444eedb2eaf16673 = $this->env->getExtension("native_profiler");
        $__internal_663960e81b1c104a138d1ec9f1e3fe34125e79211da6e93e444eedb2eaf16673->enter($__internal_663960e81b1c104a138d1ec9f1e3fe34125e79211da6e93e444eedb2eaf16673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"row\">
        <div class=\"col-md-12>\"
             ";
        // line 5
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 6
            echo "                 ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                 <a href=\"";
            // line 7
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                     ";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                 </a>
             ";
        } else {
            // line 11
            echo "                 <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
             ";
        }
        // line 13
        echo "
             ";
        // line 14
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 15
            echo "                 ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 16
                echo "                     ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 17
                    echo "                         <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                             ";
                    // line 18
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                         </div>
                     ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 21
                echo "                 ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "             ";
        }
        // line 23
        echo "
             <div>
                 ";
        // line 25
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 27
        echo "             </div>
        </div>
    </div>
";
        
        $__internal_663960e81b1c104a138d1ec9f1e3fe34125e79211da6e93e444eedb2eaf16673->leave($__internal_663960e81b1c104a138d1ec9f1e3fe34125e79211da6e93e444eedb2eaf16673_prof);

    }

    // line 25
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_12675a05d1e997ea36db27cbf2e92700eea82dd758712f0e17be2531edbe0b51 = $this->env->getExtension("native_profiler");
        $__internal_12675a05d1e997ea36db27cbf2e92700eea82dd758712f0e17be2531edbe0b51->enter($__internal_12675a05d1e997ea36db27cbf2e92700eea82dd758712f0e17be2531edbe0b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 26
        echo "                 ";
        
        $__internal_12675a05d1e997ea36db27cbf2e92700eea82dd758712f0e17be2531edbe0b51->leave($__internal_12675a05d1e997ea36db27cbf2e92700eea82dd758712f0e17be2531edbe0b51_prof);

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
        return array (  130 => 26,  124 => 25,  114 => 27,  112 => 25,  108 => 23,  105 => 22,  99 => 21,  90 => 18,  85 => 17,  80 => 16,  75 => 15,  73 => 14,  70 => 13,  62 => 11,  56 => 8,  52 => 7,  47 => 6,  45 => 5,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "ArenaFightBundle:Visitor:LayoutVisitor.html.twig" %}*/
/* {% block body %}*/
/*     <div class="row">*/
/*         <div class="col-md-12>"*/
/*              {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                  {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |*/
/*                  <a href="{{ path('fos_user_security_logout') }}">*/
/*                      {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/*                  </a>*/
/*              {% else %}*/
/*                  <a href="{{ path('fos_user_security_login') }}">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>*/
/*              {% endif %}*/
/* */
/*              {% if app.request.hasPreviousSession %}*/
/*                  {% for type, messages in app.session.flashbag.all() %}*/
/*                      {% for message in messages %}*/
/*                          <div class="flash-{{ type }}">*/
/*                              {{ message }}*/
/*                          </div>*/
/*                      {% endfor %}*/
/*                  {% endfor %}*/
/*              {% endif %}*/
/* */
/*              <div>*/
/*                  {% block fos_user_content %}*/
/*                  {% endblock fos_user_content %}*/
/*              </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
