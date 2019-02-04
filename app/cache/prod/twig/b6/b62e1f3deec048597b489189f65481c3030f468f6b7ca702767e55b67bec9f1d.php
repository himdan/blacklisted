<?php

/* base.html.twig */
class __TwigTemplate_ccf433023174a38bf8b55889813aa95d184a4aac3fdf9867e305d8393bdcb607 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7f08956d12e8aaa9796c93a4c2ddd0519c5312df79051a458eea61d505aad6be = $this->env->getExtension("native_profiler");
        $__internal_7f08956d12e8aaa9796c93a4c2ddd0519c5312df79051a458eea61d505aad6be->enter($__internal_7f08956d12e8aaa9796c93a4c2ddd0519c5312df79051a458eea61d505aad6be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_7f08956d12e8aaa9796c93a4c2ddd0519c5312df79051a458eea61d505aad6be->leave($__internal_7f08956d12e8aaa9796c93a4c2ddd0519c5312df79051a458eea61d505aad6be_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_47de1d98dafcc45e17209732bb2182918f5b1682c0e50fb88dd9bf0e718d8b2e = $this->env->getExtension("native_profiler");
        $__internal_47de1d98dafcc45e17209732bb2182918f5b1682c0e50fb88dd9bf0e718d8b2e->enter($__internal_47de1d98dafcc45e17209732bb2182918f5b1682c0e50fb88dd9bf0e718d8b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_47de1d98dafcc45e17209732bb2182918f5b1682c0e50fb88dd9bf0e718d8b2e->leave($__internal_47de1d98dafcc45e17209732bb2182918f5b1682c0e50fb88dd9bf0e718d8b2e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fc71492582a37c58aa996ee255f66305106a89127b93ebe78aa6fb3c9fd6b977 = $this->env->getExtension("native_profiler");
        $__internal_fc71492582a37c58aa996ee255f66305106a89127b93ebe78aa6fb3c9fd6b977->enter($__internal_fc71492582a37c58aa996ee255f66305106a89127b93ebe78aa6fb3c9fd6b977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_fc71492582a37c58aa996ee255f66305106a89127b93ebe78aa6fb3c9fd6b977->leave($__internal_fc71492582a37c58aa996ee255f66305106a89127b93ebe78aa6fb3c9fd6b977_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_664725b4bca8d223582826c0bf5a2126136050b5f16557c51c8770ab8dd5ed0c = $this->env->getExtension("native_profiler");
        $__internal_664725b4bca8d223582826c0bf5a2126136050b5f16557c51c8770ab8dd5ed0c->enter($__internal_664725b4bca8d223582826c0bf5a2126136050b5f16557c51c8770ab8dd5ed0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_664725b4bca8d223582826c0bf5a2126136050b5f16557c51c8770ab8dd5ed0c->leave($__internal_664725b4bca8d223582826c0bf5a2126136050b5f16557c51c8770ab8dd5ed0c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0081de0ac9229ca54d55b3c976b9edb7e1c60c5b351f4268b2dc1fee7f237059 = $this->env->getExtension("native_profiler");
        $__internal_0081de0ac9229ca54d55b3c976b9edb7e1c60c5b351f4268b2dc1fee7f237059->enter($__internal_0081de0ac9229ca54d55b3c976b9edb7e1c60c5b351f4268b2dc1fee7f237059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0081de0ac9229ca54d55b3c976b9edb7e1c60c5b351f4268b2dc1fee7f237059->leave($__internal_0081de0ac9229ca54d55b3c976b9edb7e1c60c5b351f4268b2dc1fee7f237059_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
