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
        $__internal_528bf00fb89521aa84574c5fea2a61c89f5b310d00be76bb764fa274bcf451cf = $this->env->getExtension("native_profiler");
        $__internal_528bf00fb89521aa84574c5fea2a61c89f5b310d00be76bb764fa274bcf451cf->enter($__internal_528bf00fb89521aa84574c5fea2a61c89f5b310d00be76bb764fa274bcf451cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_528bf00fb89521aa84574c5fea2a61c89f5b310d00be76bb764fa274bcf451cf->leave($__internal_528bf00fb89521aa84574c5fea2a61c89f5b310d00be76bb764fa274bcf451cf_prof);

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
