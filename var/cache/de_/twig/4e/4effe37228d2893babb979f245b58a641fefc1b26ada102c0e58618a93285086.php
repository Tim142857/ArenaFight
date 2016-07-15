<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_9070cc5ba527531dbf019199252bd5886011857953fb27418a147fcd6c0a4181 extends Twig_Template
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
        $__internal_54010c9c97fa73f9d1b58d7cd217946f8f864d9046f149bcea335945f7d54e71 = $this->env->getExtension("native_profiler");
        $__internal_54010c9c97fa73f9d1b58d7cd217946f8f864d9046f149bcea335945f7d54e71->enter($__internal_54010c9c97fa73f9d1b58d7cd217946f8f864d9046f149bcea335945f7d54e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_54010c9c97fa73f9d1b58d7cd217946f8f864d9046f149bcea335945f7d54e71->leave($__internal_54010c9c97fa73f9d1b58d7cd217946f8f864d9046f149bcea335945f7d54e71_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
