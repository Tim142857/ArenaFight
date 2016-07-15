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
        $__internal_c28e521803f7bc63c00294002331d48b399ceb045cf2e443f492866ef2f8b396 = $this->env->getExtension("native_profiler");
        $__internal_c28e521803f7bc63c00294002331d48b399ceb045cf2e443f492866ef2f8b396->enter($__internal_c28e521803f7bc63c00294002331d48b399ceb045cf2e443f492866ef2f8b396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_c28e521803f7bc63c00294002331d48b399ceb045cf2e443f492866ef2f8b396->leave($__internal_c28e521803f7bc63c00294002331d48b399ceb045cf2e443f492866ef2f8b396_prof);

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
