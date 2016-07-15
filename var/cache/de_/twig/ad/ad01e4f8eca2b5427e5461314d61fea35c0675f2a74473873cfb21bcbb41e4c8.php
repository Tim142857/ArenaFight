<?php

/* @ArenaFight/Authentification.html.twig */
class __TwigTemplate_d8d6985c2f36ebc54da3c74331b6df3ab7e9a64ece5234c489414e5052af399c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ArenaFightBundle::Layout.html.twig", "@ArenaFight/Authentification.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ArenaFightBundle::Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_300fe6be2036c08bb0ebc45f60b27eca12689bb900d194468862ff04f95d6839 = $this->env->getExtension("native_profiler");
        $__internal_300fe6be2036c08bb0ebc45f60b27eca12689bb900d194468862ff04f95d6839->enter($__internal_300fe6be2036c08bb0ebc45f60b27eca12689bb900d194468862ff04f95d6839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ArenaFight/Authentification.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_300fe6be2036c08bb0ebc45f60b27eca12689bb900d194468862ff04f95d6839->leave($__internal_300fe6be2036c08bb0ebc45f60b27eca12689bb900d194468862ff04f95d6839_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ad3df0ae0ef9c251531d0700c7128b52332acfc602af06c78ec2c8fdde05269 = $this->env->getExtension("native_profiler");
        $__internal_2ad3df0ae0ef9c251531d0700c7128b52332acfc602af06c78ec2c8fdde05269->enter($__internal_2ad3df0ae0ef9c251531d0700c7128b52332acfc602af06c78ec2c8fdde05269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "   

";
        
        $__internal_2ad3df0ae0ef9c251531d0700c7128b52332acfc602af06c78ec2c8fdde05269->leave($__internal_2ad3df0ae0ef9c251531d0700c7128b52332acfc602af06c78ec2c8fdde05269_prof);

    }

    public function getTemplateName()
    {
        return "@ArenaFight/Authentification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 2,  11 => 1,);
    }
}
/* {% extends "ArenaFightBundle::Layout.html.twig" %}*/
/* {% block body %}   */
/* */
/* {% endblock %}*/
/* */
