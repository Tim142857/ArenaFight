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
        $__internal_c5a1bdf10233a14ca66ddf9a2693023eaa216c184ed2ef9d91d3cab5d65608ea = $this->env->getExtension("native_profiler");
        $__internal_c5a1bdf10233a14ca66ddf9a2693023eaa216c184ed2ef9d91d3cab5d65608ea->enter($__internal_c5a1bdf10233a14ca66ddf9a2693023eaa216c184ed2ef9d91d3cab5d65608ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_c5a1bdf10233a14ca66ddf9a2693023eaa216c184ed2ef9d91d3cab5d65608ea->leave($__internal_c5a1bdf10233a14ca66ddf9a2693023eaa216c184ed2ef9d91d3cab5d65608ea_prof);

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
