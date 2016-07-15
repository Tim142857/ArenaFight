<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_f617c9d03b828867a67c0519939caeec33f9f5fef11efbd1403b6b56d5998bfe extends Twig_Template
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
        $__internal_d5defa02a88d245144aa5c421abba1f042bf9787790cfd9e4606a8f42a3f944a = $this->env->getExtension("native_profiler");
        $__internal_d5defa02a88d245144aa5c421abba1f042bf9787790cfd9e4606a8f42a3f944a->enter($__internal_d5defa02a88d245144aa5c421abba1f042bf9787790cfd9e4606a8f42a3f944a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d5defa02a88d245144aa5c421abba1f042bf9787790cfd9e4606a8f42a3f944a->leave($__internal_d5defa02a88d245144aa5c421abba1f042bf9787790cfd9e4606a8f42a3f944a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
