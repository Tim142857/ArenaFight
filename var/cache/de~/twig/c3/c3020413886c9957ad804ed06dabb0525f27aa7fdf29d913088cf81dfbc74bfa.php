<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_058ac6232cb28614b4a35ada466f41f39fe04e8511693826c1175da01d208bb2 extends Twig_Template
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
        $__internal_132427e7f56f5e2a161c7906bf07f78aabd2d4ffe276e7738a0ab6bd8dabba1b = $this->env->getExtension("native_profiler");
        $__internal_132427e7f56f5e2a161c7906bf07f78aabd2d4ffe276e7738a0ab6bd8dabba1b->enter($__internal_132427e7f56f5e2a161c7906bf07f78aabd2d4ffe276e7738a0ab6bd8dabba1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_132427e7f56f5e2a161c7906bf07f78aabd2d4ffe276e7738a0ab6bd8dabba1b->leave($__internal_132427e7f56f5e2a161c7906bf07f78aabd2d4ffe276e7738a0ab6bd8dabba1b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
