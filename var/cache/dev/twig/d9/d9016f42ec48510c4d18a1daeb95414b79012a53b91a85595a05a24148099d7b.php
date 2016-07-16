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
        $__internal_5118dd3a7dc6319c5b870d4270fcbf49b8c8d67d62776aebdfc140e99f4c5352 = $this->env->getExtension("native_profiler");
        $__internal_5118dd3a7dc6319c5b870d4270fcbf49b8c8d67d62776aebdfc140e99f4c5352->enter($__internal_5118dd3a7dc6319c5b870d4270fcbf49b8c8d67d62776aebdfc140e99f4c5352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_5118dd3a7dc6319c5b870d4270fcbf49b8c8d67d62776aebdfc140e99f4c5352->leave($__internal_5118dd3a7dc6319c5b870d4270fcbf49b8c8d67d62776aebdfc140e99f4c5352_prof);

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
