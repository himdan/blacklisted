<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_058dd9413b04d681db82ea788e9aeb48060fbf384603177a0c977724767da391 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d3e3092d6ce2f513ddba5d2a7fdf4949cd114226b7b2fc3e357bb6b14abcc63 = $this->env->getExtension("native_profiler");
        $__internal_1d3e3092d6ce2f513ddba5d2a7fdf4949cd114226b7b2fc3e357bb6b14abcc63->enter($__internal_1d3e3092d6ce2f513ddba5d2a7fdf4949cd114226b7b2fc3e357bb6b14abcc63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d3e3092d6ce2f513ddba5d2a7fdf4949cd114226b7b2fc3e357bb6b14abcc63->leave($__internal_1d3e3092d6ce2f513ddba5d2a7fdf4949cd114226b7b2fc3e357bb6b14abcc63_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1889ee1744a3ad62fd0bb26c0e73f367d8a5d8600bcf3211ba27aa71cfc5e9ff = $this->env->getExtension("native_profiler");
        $__internal_1889ee1744a3ad62fd0bb26c0e73f367d8a5d8600bcf3211ba27aa71cfc5e9ff->enter($__internal_1889ee1744a3ad62fd0bb26c0e73f367d8a5d8600bcf3211ba27aa71cfc5e9ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "<div class=\"container\"  >
    <h2>Login</h2>
     <div class=\"row\">
         <div class=\"col-lg-4\"></div>    
     <div class=\"col-lg-4\">
<form action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
    <div class=\"input-group\">
    <span class=\"input-group-addon\" id=\"sizing-addon1\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</span>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" class=\"form-control\" placeholder=\"Username\" aria-describedby=\"sizing-addon1\">
    </div>
    <div class=\"input-group\">
    <span class=\"input-group-addon\" id=\"sizing-addon1\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "&nbsp;</span>
   <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\" placeholder=\"password\" aria-describedby=\"sizing-addon1\">
    </div>
    
    <div class=\"input-group\">
    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"input-group\">
    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn\"/>
    </div>
</form>
    
    <div><p>dont have an account yet? register <a title=\"register\" href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">here</a></p></div>    
</div>
    </div>
</div>
";
        
        $__internal_1889ee1744a3ad62fd0bb26c0e73f367d8a5d8600bcf3211ba27aa71cfc5e9ff->leave($__internal_1889ee1744a3ad62fd0bb26c0e73f367d8a5d8600bcf3211ba27aa71cfc5e9ff_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 34,  89 => 30,  83 => 27,  74 => 21,  68 => 18,  64 => 17,  59 => 15,  55 => 14,  48 => 9,  42 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* <div class="container"  >*/
/*     <h2>Login</h2>*/
/*      <div class="row">*/
/*          <div class="col-lg-4"></div>    */
/*      <div class="col-lg-4">*/
/* <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*     <div class="input-group">*/
/*     <span class="input-group-addon" id="sizing-addon1">{{ 'security.login.username'|trans }}</span>*/
/*     <input type="text" id="username" name="_username" value="{{ last_username }}" required="required" class="form-control" placeholder="Username" aria-describedby="sizing-addon1">*/
/*     </div>*/
/*     <div class="input-group">*/
/*     <span class="input-group-addon" id="sizing-addon1">{{ 'security.login.password'|trans }}&nbsp;</span>*/
/*    <input type="password" id="password" name="_password" required="required" class="form-control" placeholder="password" aria-describedby="sizing-addon1">*/
/*     </div>*/
/*     */
/*     <div class="input-group">*/
/*     <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*     <label for="remember_me">{{ 'security.login.remember_me'|trans }}</label>*/
/*     </div>*/
/*     <div class="input-group">*/
/*     <input type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}" class="btn"/>*/
/*     </div>*/
/* </form>*/
/*     */
/*     <div><p>dont have an account yet? register <a title="register" href="{{path('fos_user_registration_register')}}">here</a></p></div>    */
/* </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock fos_user_content %}*/
/* */
