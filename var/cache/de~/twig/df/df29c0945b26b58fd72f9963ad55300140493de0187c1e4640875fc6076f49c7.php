<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_65a70cb02cee99295e4080f0e2b781471fabb3ffb38bee377e744893110d8d3d extends Twig_Template
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
        $__internal_c72efcfb5ba3b5acc663a7c2f28aa1a973fc9e1588542d8808967df17ae1f8c4 = $this->env->getExtension("native_profiler");
        $__internal_c72efcfb5ba3b5acc663a7c2f28aa1a973fc9e1588542d8808967df17ae1f8c4->enter($__internal_c72efcfb5ba3b5acc663a7c2f28aa1a973fc9e1588542d8808967df17ae1f8c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_c72efcfb5ba3b5acc663a7c2f28aa1a973fc9e1588542d8808967df17ae1f8c4->leave($__internal_c72efcfb5ba3b5acc663a7c2f28aa1a973fc9e1588542d8808967df17ae1f8c4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
