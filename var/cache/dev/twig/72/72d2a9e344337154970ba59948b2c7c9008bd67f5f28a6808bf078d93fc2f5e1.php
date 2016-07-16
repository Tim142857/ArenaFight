<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_dc9b36d8012d00e3c79e2185e2c030195cd3c9418afa1357f3415f985ff4609b extends Twig_Template
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
        $__internal_23cf9fa7c91acb48a4be5fd367f47a6efb9f401bbdd0e21b37f5925750446f6a = $this->env->getExtension("native_profiler");
        $__internal_23cf9fa7c91acb48a4be5fd367f47a6efb9f401bbdd0e21b37f5925750446f6a->enter($__internal_23cf9fa7c91acb48a4be5fd367f47a6efb9f401bbdd0e21b37f5925750446f6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_23cf9fa7c91acb48a4be5fd367f47a6efb9f401bbdd0e21b37f5925750446f6a->leave($__internal_23cf9fa7c91acb48a4be5fd367f47a6efb9f401bbdd0e21b37f5925750446f6a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
