<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_53f3786b339b75db40ef12713308f93254de83f34f369e9249e7a5db408cac40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e87b586bebb293b5703f4d0cf080ae4d86ce1406b6e2ec16ed4a5e6b8b1bcc0b = $this->env->getExtension("native_profiler");
        $__internal_e87b586bebb293b5703f4d0cf080ae4d86ce1406b6e2ec16ed4a5e6b8b1bcc0b->enter($__internal_e87b586bebb293b5703f4d0cf080ae4d86ce1406b6e2ec16ed4a5e6b8b1bcc0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_e87b586bebb293b5703f4d0cf080ae4d86ce1406b6e2ec16ed4a5e6b8b1bcc0b->leave($__internal_e87b586bebb293b5703f4d0cf080ae4d86ce1406b6e2ec16ed4a5e6b8b1bcc0b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
