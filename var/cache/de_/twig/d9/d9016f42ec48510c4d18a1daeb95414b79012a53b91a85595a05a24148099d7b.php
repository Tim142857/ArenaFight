<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_aed1d99eb323ada287471dd77adfaf4a62b0537215fc6df6ac84c438daa45d87 extends Twig_Template
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
        $__internal_ceaff96cd123d258cbb29af0fa9cf4712a65d9c7cb05bed6ff2de61f30433030 = $this->env->getExtension("native_profiler");
        $__internal_ceaff96cd123d258cbb29af0fa9cf4712a65d9c7cb05bed6ff2de61f30433030->enter($__internal_ceaff96cd123d258cbb29af0fa9cf4712a65d9c7cb05bed6ff2de61f30433030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ceaff96cd123d258cbb29af0fa9cf4712a65d9c7cb05bed6ff2de61f30433030->leave($__internal_ceaff96cd123d258cbb29af0fa9cf4712a65d9c7cb05bed6ff2de61f30433030_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
