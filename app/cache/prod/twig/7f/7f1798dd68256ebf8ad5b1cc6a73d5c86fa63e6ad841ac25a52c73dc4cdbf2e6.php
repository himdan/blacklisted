<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_f69830aca199c46a2b90f905a20d6b00098470755c77f1dac3aecfbadd2e10f6 extends Twig_Template
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
        $__internal_d0322af5bbb103c008f878e707a413b5fe927105c8dc601d00953e81c72b1b64 = $this->env->getExtension("native_profiler");
        $__internal_d0322af5bbb103c008f878e707a413b5fe927105c8dc601d00953e81c72b1b64->enter($__internal_d0322af5bbb103c008f878e707a413b5fe927105c8dc601d00953e81c72b1b64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_d0322af5bbb103c008f878e707a413b5fe927105c8dc601d00953e81c72b1b64->leave($__internal_d0322af5bbb103c008f878e707a413b5fe927105c8dc601d00953e81c72b1b64_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
