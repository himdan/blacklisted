<?php

/* ::frontoffice.html.twig */
class __TwigTemplate_4f5aeb305b25346cf452d1d4e900430d63c05e76d0582efbdb327f3499544b45 extends Twig_Template
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
        $__internal_78683b21e4f219c6d911383a1918186469b052c652708dbee7851f477fd8abfa = $this->env->getExtension("native_profiler");
        $__internal_78683b21e4f219c6d911383a1918186469b052c652708dbee7851f477fd8abfa->enter($__internal_78683b21e4f219c6d911383a1918186469b052c652708dbee7851f477fd8abfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::frontoffice.html.twig"));

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
                    <p>Copyright &copy; Your Website 2014</p>
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
        
        $__internal_78683b21e4f219c6d911383a1918186469b052c652708dbee7851f477fd8abfa->leave($__internal_78683b21e4f219c6d911383a1918186469b052c652708dbee7851f477fd8abfa_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_93c7d467ab2de46d68aa796b88cf584cc4d639faf633ab171bf26ee22cf62ebe = $this->env->getExtension("native_profiler");
        $__internal_93c7d467ab2de46d68aa796b88cf584cc4d639faf633ab171bf26ee22cf62ebe->enter($__internal_93c7d467ab2de46d68aa796b88cf584cc4d639faf633ab171bf26ee22cf62ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcom";
        
        $__internal_93c7d467ab2de46d68aa796b88cf584cc4d639faf633ab171bf26ee22cf62ebe->leave($__internal_93c7d467ab2de46d68aa796b88cf584cc4d639faf633ab171bf26ee22cf62ebe_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cfe9afa6fd311b14ce8ac5824bafca47eeea445e4e2a5b6644395f81c7b88cc2 = $this->env->getExtension("native_profiler");
        $__internal_cfe9afa6fd311b14ce8ac5824bafca47eeea445e4e2a5b6644395f81c7b88cc2->enter($__internal_cfe9afa6fd311b14ce8ac5824bafca47eeea445e4e2a5b6644395f81c7b88cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_cfe9afa6fd311b14ce8ac5824bafca47eeea445e4e2a5b6644395f81c7b88cc2->leave($__internal_cfe9afa6fd311b14ce8ac5824bafca47eeea445e4e2a5b6644395f81c7b88cc2_prof);

    }

    // line 19
    public function block_headJs($context, array $blocks = array())
    {
        $__internal_23cc03b92f27de7bcdd0080c6992442b9e1d614bd6836e104bbabe79c78753d1 = $this->env->getExtension("native_profiler");
        $__internal_23cc03b92f27de7bcdd0080c6992442b9e1d614bd6836e104bbabe79c78753d1->enter($__internal_23cc03b92f27de7bcdd0080c6992442b9e1d614bd6836e104bbabe79c78753d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headJs"));

        
        $__internal_23cc03b92f27de7bcdd0080c6992442b9e1d614bd6836e104bbabe79c78753d1->leave($__internal_23cc03b92f27de7bcdd0080c6992442b9e1d614bd6836e104bbabe79c78753d1_prof);

    }

    // line 83
    public function block_content($context, array $blocks = array())
    {
        $__internal_06d829804d8f46618310ba4574baf29b4d50f9b65217af2773572cf2ace9ed06 = $this->env->getExtension("native_profiler");
        $__internal_06d829804d8f46618310ba4574baf29b4d50f9b65217af2773572cf2ace9ed06->enter($__internal_06d829804d8f46618310ba4574baf29b4d50f9b65217af2773572cf2ace9ed06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 84
        echo "    
        ";
        
        $__internal_06d829804d8f46618310ba4574baf29b4d50f9b65217af2773572cf2ace9ed06->leave($__internal_06d829804d8f46618310ba4574baf29b4d50f9b65217af2773572cf2ace9ed06_prof);

    }

    // line 114
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dc001854d761a55b68d0a6cf74a2424b8bdc510d9d71e0c1e0f86a1fbcdb84d0 = $this->env->getExtension("native_profiler");
        $__internal_dc001854d761a55b68d0a6cf74a2424b8bdc510d9d71e0c1e0f86a1fbcdb84d0->enter($__internal_dc001854d761a55b68d0a6cf74a2424b8bdc510d9d71e0c1e0f86a1fbcdb84d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_dc001854d761a55b68d0a6cf74a2424b8bdc510d9d71e0c1e0f86a1fbcdb84d0->leave($__internal_dc001854d761a55b68d0a6cf74a2424b8bdc510d9d71e0c1e0f86a1fbcdb84d0_prof);

    }

    public function getTemplateName()
    {
        return "::frontoffice.html.twig";
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
/*                     <p>Copyright &copy; Your Website 2014</p>*/
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
