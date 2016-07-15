<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_98bc519957eda24ab2b53d3aef62652f0f4251d17ad92289cf8efa836778a08a extends Twig_Template
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
        $__internal_a42109f6efad5721f0dac1ab7c1147892d08aad54d30fcacb03253b684fe0ea3 = $this->env->getExtension("native_profiler");
        $__internal_a42109f6efad5721f0dac1ab7c1147892d08aad54d30fcacb03253b684fe0ea3->enter($__internal_a42109f6efad5721f0dac1ab7c1147892d08aad54d30fcacb03253b684fe0ea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_a42109f6efad5721f0dac1ab7c1147892d08aad54d30fcacb03253b684fe0ea3->leave($__internal_a42109f6efad5721f0dac1ab7c1147892d08aad54d30fcacb03253b684fe0ea3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
