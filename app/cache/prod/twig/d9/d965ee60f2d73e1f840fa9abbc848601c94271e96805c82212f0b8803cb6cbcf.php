<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d2e4e43836a22955179c22408e134a59afdaa09a6ad148752c5815db7a88d9ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a0ac447f192374b7cffdde2cf8cd33735c25a946ea813f42bcfba8defee8fe4 = $this->env->getExtension("native_profiler");
        $__internal_3a0ac447f192374b7cffdde2cf8cd33735c25a946ea813f42bcfba8defee8fe4->enter($__internal_3a0ac447f192374b7cffdde2cf8cd33735c25a946ea813f42bcfba8defee8fe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a0ac447f192374b7cffdde2cf8cd33735c25a946ea813f42bcfba8defee8fe4->leave($__internal_3a0ac447f192374b7cffdde2cf8cd33735c25a946ea813f42bcfba8defee8fe4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_327ed6b0bd97f63adc38236a64330250e11a055b6fe8a34a7542a967e24f0fa3 = $this->env->getExtension("native_profiler");
        $__internal_327ed6b0bd97f63adc38236a64330250e11a055b6fe8a34a7542a967e24f0fa3->enter($__internal_327ed6b0bd97f63adc38236a64330250e11a055b6fe8a34a7542a967e24f0fa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_327ed6b0bd97f63adc38236a64330250e11a055b6fe8a34a7542a967e24f0fa3->leave($__internal_327ed6b0bd97f63adc38236a64330250e11a055b6fe8a34a7542a967e24f0fa3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a285a605c187d177fecc0b17546ee6c3a935e12ea122ed6f8054d33d63f38977 = $this->env->getExtension("native_profiler");
        $__internal_a285a605c187d177fecc0b17546ee6c3a935e12ea122ed6f8054d33d63f38977->enter($__internal_a285a605c187d177fecc0b17546ee6c3a935e12ea122ed6f8054d33d63f38977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a285a605c187d177fecc0b17546ee6c3a935e12ea122ed6f8054d33d63f38977->leave($__internal_a285a605c187d177fecc0b17546ee6c3a935e12ea122ed6f8054d33d63f38977_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f3a70a524a90f129d5182134843f2d524111a3ee617c978734b8d4428ae205ab = $this->env->getExtension("native_profiler");
        $__internal_f3a70a524a90f129d5182134843f2d524111a3ee617c978734b8d4428ae205ab->enter($__internal_f3a70a524a90f129d5182134843f2d524111a3ee617c978734b8d4428ae205ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f3a70a524a90f129d5182134843f2d524111a3ee617c978734b8d4428ae205ab->leave($__internal_f3a70a524a90f129d5182134843f2d524111a3ee617c978734b8d4428ae205ab_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
