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
        $__internal_2a06f641e19fcd2d11aa2572844e23c3cbac4a987bca36ffd038945018079791 = $this->env->getExtension("native_profiler");
        $__internal_2a06f641e19fcd2d11aa2572844e23c3cbac4a987bca36ffd038945018079791->enter($__internal_2a06f641e19fcd2d11aa2572844e23c3cbac4a987bca36ffd038945018079791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_2a06f641e19fcd2d11aa2572844e23c3cbac4a987bca36ffd038945018079791->leave($__internal_2a06f641e19fcd2d11aa2572844e23c3cbac4a987bca36ffd038945018079791_prof);

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
