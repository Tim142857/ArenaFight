<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_37459d7900be50a79fbd9fe8b1f4488a2560470e94b667cbe3bbdb17112ded48 extends Twig_Template
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
        $__internal_6cfae963ff132d67ac72a6f8238836d51241bff7788c3539c8bf07f4f4245edd = $this->env->getExtension("native_profiler");
        $__internal_6cfae963ff132d67ac72a6f8238836d51241bff7788c3539c8bf07f4f4245edd->enter($__internal_6cfae963ff132d67ac72a6f8238836d51241bff7788c3539c8bf07f4f4245edd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_6cfae963ff132d67ac72a6f8238836d51241bff7788c3539c8bf07f4f4245edd->leave($__internal_6cfae963ff132d67ac72a6f8238836d51241bff7788c3539c8bf07f4f4245edd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
