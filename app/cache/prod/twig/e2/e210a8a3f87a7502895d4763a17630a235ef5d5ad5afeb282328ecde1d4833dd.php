<?php

/* frontoffice.html.twig */
class __TwigTemplate_42d23ec363f01a31ac65b01d17dd5fb426d4cedc93002c36da4aed39e6bb4b42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'headJs' => array($this, 'block_headJs'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b6a47c95a6fa767c00e012ce05c9f5fa6d1aefeff62f97ca2cdf66b70608a246 = $this->env->getExtension("native_profiler");
        $__internal_b6a47c95a6fa767c00e012ce05c9f5fa6d1aefeff62f97ca2cdf66b70608a246->enter($__internal_b6a47c95a6fa767c00e012ce05c9f5fa6d1aefeff62f97ca2cdf66b70608a246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "frontoffice.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"himdanchhimi@gmail.com\">

    <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "    <!-- Bootstrap Core CSS -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/css/round-about.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
     ";
        // line 19
        $this->displayBlock('headJs', $context, $blocks);
        // line 20
        echo "    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
   
</head>

<body>

    <!-- Navigation -->
    <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"#\">Start Blacklist</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    <li><a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">Home</a></li>
            <li><a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("aboutus");
        echo "\">About Us</a></li>
            <li><a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("contact");
        echo "\">Contact</a></li>
            <li><a title=\"view claims\" href=";
        // line 50
        echo $this->env->getExtension('routing')->getPath("claim_index");
        echo ">My Claims</a></li>
            <li><a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("media_index");
        echo "\">Media</a></li>
            <li>
            ";
        // line 53
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 54
            echo "                
                <a href=\"";
            // line 55
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 59
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 61
        echo "        </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
         ";
        // line 70
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 71
            echo "                <div class=\"container\"> 
                <div class=\"row\">
                <div class=\"col-md-12\">
                ";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " 
                </div>
                </div>
                </div>
            ";
        }
        // line 79
        echo "<div class=\"container\">
 <div class=\"row\">

  <div class=\"col-md-10\">
        ";
        // line 83
        $this->displayBlock('content', $context, $blocks);
        // line 86
        echo "  </div>
</div>  
            </div>
        <hr>

        <!-- Footer -->
        <footer>
            <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4\">&nbsp;</div>
                <div class=\"col-lg-4\">
                    <p>Copyright &copy; Blacklisted 2016</p>
                </div>
                <div class=\"col-lg-4\">&nbsp;</div>
                <!-- /.col-lg-12 -->
            </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/js/jquery.js"), "html", null, true);
        echo "\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 114
        $this->displayBlock('javascripts', $context, $blocks);
        // line 115
        echo "
</body>

</html>

";
        
        $__internal_b6a47c95a6fa767c00e012ce05c9f5fa6d1aefeff62f97ca2cdf66b70608a246->leave($__internal_b6a47c95a6fa767c00e012ce05c9f5fa6d1aefeff62f97ca2cdf66b70608a246_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_e6d2ad2fa1093d30fddd38ad5a384a6e728a75aebeb08b247c4354bb5c6b543e = $this->env->getExtension("native_profiler");
        $__internal_e6d2ad2fa1093d30fddd38ad5a384a6e728a75aebeb08b247c4354bb5c6b543e->enter($__internal_e6d2ad2fa1093d30fddd38ad5a384a6e728a75aebeb08b247c4354bb5c6b543e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcom";
        
        $__internal_e6d2ad2fa1093d30fddd38ad5a384a6e728a75aebeb08b247c4354bb5c6b543e->leave($__internal_e6d2ad2fa1093d30fddd38ad5a384a6e728a75aebeb08b247c4354bb5c6b543e_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_42942389d6dbc067e89110c3a8f2368b6c2e318b7b2bc98c77a35ac74fd5ce9a = $this->env->getExtension("native_profiler");
        $__internal_42942389d6dbc067e89110c3a8f2368b6c2e318b7b2bc98c77a35ac74fd5ce9a->enter($__internal_42942389d6dbc067e89110c3a8f2368b6c2e318b7b2bc98c77a35ac74fd5ce9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_42942389d6dbc067e89110c3a8f2368b6c2e318b7b2bc98c77a35ac74fd5ce9a->leave($__internal_42942389d6dbc067e89110c3a8f2368b6c2e318b7b2bc98c77a35ac74fd5ce9a_prof);

    }

    // line 19
    public function block_headJs($context, array $blocks = array())
    {
        $__internal_631f8bbefdf527efa7ca3a0333b42f1a2b94659a506554fc6b5aacb4d77f89dc = $this->env->getExtension("native_profiler");
        $__internal_631f8bbefdf527efa7ca3a0333b42f1a2b94659a506554fc6b5aacb4d77f89dc->enter($__internal_631f8bbefdf527efa7ca3a0333b42f1a2b94659a506554fc6b5aacb4d77f89dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headJs"));

        
        $__internal_631f8bbefdf527efa7ca3a0333b42f1a2b94659a506554fc6b5aacb4d77f89dc->leave($__internal_631f8bbefdf527efa7ca3a0333b42f1a2b94659a506554fc6b5aacb4d77f89dc_prof);

    }

    // line 83
    public function block_content($context, array $blocks = array())
    {
        $__internal_f2c12d98e2cdab128795baf4220bc0a5cb4ea711bcb04642d8441477a1ea6fa9 = $this->env->getExtension("native_profiler");
        $__internal_f2c12d98e2cdab128795baf4220bc0a5cb4ea711bcb04642d8441477a1ea6fa9->enter($__internal_f2c12d98e2cdab128795baf4220bc0a5cb4ea711bcb04642d8441477a1ea6fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 84
        echo "    
        ";
        
        $__internal_f2c12d98e2cdab128795baf4220bc0a5cb4ea711bcb04642d8441477a1ea6fa9->leave($__internal_f2c12d98e2cdab128795baf4220bc0a5cb4ea711bcb04642d8441477a1ea6fa9_prof);

    }

    // line 114
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e73748769ab8ac0f661356f4c41d74b912a78bc1d7ae5f80fa06018aca7470f0 = $this->env->getExtension("native_profiler");
        $__internal_e73748769ab8ac0f661356f4c41d74b912a78bc1d7ae5f80fa06018aca7470f0->enter($__internal_e73748769ab8ac0f661356f4c41d74b912a78bc1d7ae5f80fa06018aca7470f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e73748769ab8ac0f661356f4c41d74b912a78bc1d7ae5f80fa06018aca7470f0->leave($__internal_e73748769ab8ac0f661356f4c41d74b912a78bc1d7ae5f80fa06018aca7470f0_prof);

    }

    public function getTemplateName()
    {
        return "frontoffice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 114,  258 => 84,  252 => 83,  241 => 19,  230 => 13,  218 => 12,  206 => 115,  204 => 114,  200 => 113,  194 => 110,  168 => 86,  166 => 83,  160 => 79,  152 => 74,  147 => 71,  145 => 70,  134 => 61,  126 => 59,  120 => 56,  116 => 55,  113 => 54,  111 => 53,  106 => 51,  102 => 50,  98 => 49,  94 => 48,  90 => 47,  61 => 20,  59 => 19,  55 => 18,  49 => 15,  46 => 14,  44 => 13,  40 => 12,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/* <head>*/
/* */
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="himdanchhimi@gmail.com">*/
/* */
/*     <title>{% block title %}Welcom{% endblock %}</title>*/
/*     {% block stylesheets %}{% endblock %}*/
/*     <!-- Bootstrap Core CSS -->*/
/*     <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">*/
/* */
/*     <!-- Custom CSS -->*/
/*     <link href="{{ asset('bootstrap/css/round-about.css') }}" rel="stylesheet">*/
/*      {% block headJs %}{% endblock %}*/
/*     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*         <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/*    */
/* </head>*/
/* */
/* <body>*/
/* */
/*     <!-- Navigation -->*/
/*     <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">*/
/*         <div class="container">*/
/*             <!-- Brand and toggle get grouped for better mobile display -->*/
/*             <div class="navbar-header">*/
/*                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*                 <a class="navbar-brand" href="#">Start Blacklist</a>*/
/*             </div>*/
/*             <!-- Collect the nav links, forms, and other content for toggling -->*/
/*             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                 <ul class="nav navbar-nav">*/
/*                     <li><a href="{{ path('homepage') }}">Home</a></li>*/
/*             <li><a href="{{ path('aboutus') }}">About Us</a></li>*/
/*             <li><a href="{{ path('contact') }}">Contact</a></li>*/
/*             <li><a title="view claims" href={{ path('claim_index') }}>My Claims</a></li>*/
/*             <li><a href="{{ path('media_index') }}">Media</a></li>*/
/*             <li>*/
/*             {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                 */
/*                 <a href="{{ path('fos_user_security_logout') }}">*/
/*                     {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/*                 </a>*/
/*             {% else %}*/
/*                 <a href="{{ path('fos_user_security_login') }}">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>*/
/*             {% endif %}*/
/*         </li>*/
/*                 </ul>*/
/*             </div>*/
/*             <!-- /.navbar-collapse -->*/
/*         </div>*/
/*         <!-- /.container -->*/
/*     </nav>*/
/* */
/*     <!-- Page Content -->*/
/*          {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                 <div class="container"> */
/*                 <div class="row">*/
/*                 <div class="col-md-12">*/
/*                 {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} */
/*                 </div>*/
/*                 </div>*/
/*                 </div>*/
/*             {% endif %}*/
/* <div class="container">*/
/*  <div class="row">*/
/* */
/*   <div class="col-md-10">*/
/*         {% block content %}*/
/*     */
/*         {% endblock %}*/
/*   </div>*/
/* </div>  */
/*             </div>*/
/*         <hr>*/
/* */
/*         <!-- Footer -->*/
/*         <footer>*/
/*             <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-lg-4">&nbsp;</div>*/
/*                 <div class="col-lg-4">*/
/*                     <p>Copyright &copy; Blacklisted 2016</p>*/
/*                 </div>*/
/*                 <div class="col-lg-4">&nbsp;</div>*/
/*                 <!-- /.col-lg-12 -->*/
/*             </div>*/
/*             </div>*/
/*             <!-- /.row -->*/
/*         </footer>*/
/* */
/*     </div>*/
/*     <!-- /.container -->*/
/* */
/*     <!-- jQuery -->*/
/*     <script src="{{ asset('bootstrap/js/jquery.js') }}"></script>*/
/* */
/*     <!-- Bootstrap Core JavaScript -->*/
/*     <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>*/
/*     {% block javascripts %}{% endblock %}*/
/* */
/* </body>*/
/* */
/* </html>*/
/* */
/* */
