<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_be7f46c96ad824c011a6dabd64c85130300dcb097818ecc30969bbeaa7fb5961 extends Twig_Template
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
        $__internal_a7a7a93004e047506ce5721611211d06a201ceadddcfbe39442e083bfffc35aa = $this->env->getExtension("native_profiler");
        $__internal_a7a7a93004e047506ce5721611211d06a201ceadddcfbe39442e083bfffc35aa->enter($__internal_a7a7a93004e047506ce5721611211d06a201ceadddcfbe39442e083bfffc35aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_a7a7a93004e047506ce5721611211d06a201ceadddcfbe39442e083bfffc35aa->leave($__internal_a7a7a93004e047506ce5721611211d06a201ceadddcfbe39442e083bfffc35aa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
