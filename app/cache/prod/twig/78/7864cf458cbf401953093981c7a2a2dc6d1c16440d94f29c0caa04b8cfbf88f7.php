<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_604f71d7c09366249c1df08dc5ece1de11e2a7905ca797187ee7657cc40485a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::frontoffice.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::frontoffice.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_75a8123c2e20ce8e0accd0aea935d6e834fa45a2fd330c06bb0320420fd083d9 = $this->env->getExtension("native_profiler");
        $__internal_75a8123c2e20ce8e0accd0aea935d6e834fa45a2fd330c06bb0320420fd083d9->enter($__internal_75a8123c2e20ce8e0accd0aea935d6e834fa45a2fd330c06bb0320420fd083d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75a8123c2e20ce8e0accd0aea935d6e834fa45a2fd330c06bb0320420fd083d9->leave($__internal_75a8123c2e20ce8e0accd0aea935d6e834fa45a2fd330c06bb0320420fd083d9_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_770d55ce38f3be395624cb6941ee7ee43d15420b5c52d6ca563a8b6c582e335d = $this->env->getExtension("native_profiler");
        $__internal_770d55ce38f3be395624cb6941ee7ee43d15420b5c52d6ca563a8b6c582e335d->enter($__internal_770d55ce38f3be395624cb6941ee7ee43d15420b5c52d6ca563a8b6c582e335d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "        

        ";
        // line 5
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 6
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 7
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 8
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 9
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 12
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "        ";
        }
        // line 14
        echo "
        <div class=\"content\">
            ";
        // line 16
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 18
        echo "        </div>
   ";
        
        $__internal_770d55ce38f3be395624cb6941ee7ee43d15420b5c52d6ca563a8b6c582e335d->leave($__internal_770d55ce38f3be395624cb6941ee7ee43d15420b5c52d6ca563a8b6c582e335d_prof);

    }

    // line 16
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_af875b62b14bcf767b27816fa2c00ae1fbad016ea93c358f928438693d0dbe56 = $this->env->getExtension("native_profiler");
        $__internal_af875b62b14bcf767b27816fa2c00ae1fbad016ea93c358f928438693d0dbe56->enter($__internal_af875b62b14bcf767b27816fa2c00ae1fbad016ea93c358f928438693d0dbe56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 17
        echo "            ";
        
        $__internal_af875b62b14bcf767b27816fa2c00ae1fbad016ea93c358f928438693d0dbe56->leave($__internal_af875b62b14bcf767b27816fa2c00ae1fbad016ea93c358f928438693d0dbe56_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 17,  94 => 16,  86 => 18,  84 => 16,  80 => 14,  77 => 13,  71 => 12,  62 => 9,  57 => 8,  52 => 7,  47 => 6,  45 => 5,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends '::frontoffice.html.twig' %}*/
/* {% block content %}*/
/*         */
/* */
/*         {% if app.request.hasPreviousSession %}*/
/*             {% for type, messages in app.session.flashbag.all() %}*/
/*                 {% for message in messages %}*/
/*                     <div class="flash-{{ type }}">*/
/*                         {{ message }}*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             {% endfor %}*/
/*         {% endif %}*/
/* */
/*         <div class="content">*/
/*             {% block fos_user_content %}*/
/*             {% endblock fos_user_content %}*/
/*         </div>*/
/*    {% endblock %}*/
/* */
