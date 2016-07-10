<?php

/* default/index.html.twig */
class __TwigTemplate_db1b9104e982da91b2b5d79498b6c1cd6bdfbb012acd9e60efd561c78174aa23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("frontoffice.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "frontoffice.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9447d6bb051392bac40f406512ddc8c4c226d2b73594ff6fb2be79e85d49ac81 = $this->env->getExtension("native_profiler");
        $__internal_9447d6bb051392bac40f406512ddc8c4c226d2b73594ff6fb2be79e85d49ac81->enter($__internal_9447d6bb051392bac40f406512ddc8c4c226d2b73594ff6fb2be79e85d49ac81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9447d6bb051392bac40f406512ddc8c4c226d2b73594ff6fb2be79e85d49ac81->leave($__internal_9447d6bb051392bac40f406512ddc8c4c226d2b73594ff6fb2be79e85d49ac81_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_75b3f468e03c3c7117941acc0cd18ca51de7c4b2fb41d60894ebf2318ce50e96 = $this->env->getExtension("native_profiler");
        $__internal_75b3f468e03c3c7117941acc0cd18ca51de7c4b2fb41d60894ebf2318ce50e96->enter($__internal_75b3f468e03c3c7117941acc0cd18ca51de7c4b2fb41d60894ebf2318ce50e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    welcome to the homepage
";
        
        $__internal_75b3f468e03c3c7117941acc0cd18ca51de7c4b2fb41d60894ebf2318ce50e96->leave($__internal_75b3f468e03c3c7117941acc0cd18ca51de7c4b2fb41d60894ebf2318ce50e96_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_ffa82e9e4130796628cb5f4f8c181f3a69f5ce7317af09aab8e92268fc51263e = $this->env->getExtension("native_profiler");
        $__internal_ffa82e9e4130796628cb5f4f8c181f3a69f5ce7317af09aab8e92268fc51263e->enter($__internal_ffa82e9e4130796628cb5f4f8c181f3a69f5ce7317af09aab8e92268fc51263e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "    <div class=\"container\">
      <div class=\"jumbotron\">
          <h1>some <strong>service provider</strong> or <strong>product marchand</strong> did <strong>wrong</strong> to you <em> dont keep it for your self</em></h1>
    <p>blacklist is the  right paltform to share your bad experiences</p> 
  </div>
        <h2>Claims Categories</h2>
        <div class=\"row\">
  ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 15
            echo "      
         <div class=\"col-sm-3\">
             <a  title=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "title", array()), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("category_view", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\">
             <img  class=\"img-responsive center-block\" src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["category"], "webpath", array())), "html", null, true);
            echo "\" />
             </a>
             <h3>";
            // line 20
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["category"], "title", array())), "html", null, true);
            echo "</h3>
      <p>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "description", array()), "html", null, true);
            echo "</p>
      <p>claims ";
            // line 22
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["category"], "claims", array())), "html", null, true);
            echo "</p>
      <!--
        ";
            // line 24
            if ((twig_length_filter($this->env, $this->getAttribute($context["category"], "claims", array())) > 0)) {
                // line 25
                echo "      <nav>
          <ul class=\"list-unstyled\">
              ";
                // line 27
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "claims", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["claim"]) {
                    // line 28
                    echo "                  <li><a title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["claim"], "title", array()), "html", null, true);
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("claim_show", array("id" => $this->getAttribute($context["claim"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["claim"], "title", array()), "html", null, true);
                    echo "</a></li>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['claim'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "          </ul>
      </nav>
        ";
            }
            // line 33
            echo "      -->
         </div>
    
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "    
            </div>
            <h2>Recent claims </h2>        
  <div class=\"row\">
      ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["claims"]) ? $context["claims"] : $this->getContext($context, "claims")));
        foreach ($context['_seq'] as $context["_key"] => $context["claim"]) {
            // line 41
            echo "    <div class=\"col-sm-4\">
        <img  class=\"img-responsive center-block\" src=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($context["claim"], "category", array()), "webpath", array())), "html", null, true);
            echo "\" /> 
      <h3>";
            // line 43
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["claim"], "title", array())), "html", null, true);
            echo "</h3>
      <p class=\"text-center\"> By <em>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["claim"], "account", array()), "username", array()), "html", null, true);
            echo "</em></p>
      <p>";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["claim"], "createdat", array()), "d-m-y H:m"), "html", null, true);
            echo "</p>
      <p class=\"text-center\"><a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("claim_view", array("id" => $this->getAttribute($context["claim"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-info\">view</a></p>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['claim'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "  </div>
        
    </div>   
";
        
        $__internal_ffa82e9e4130796628cb5f4f8c181f3a69f5ce7317af09aab8e92268fc51263e->leave($__internal_ffa82e9e4130796628cb5f4f8c181f3a69f5ce7317af09aab8e92268fc51263e_prof);

    }

    // line 54
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cd1d6479f07b2150796fa1b643f418d98d99949e9521135e655d34d1c243d0fa = $this->env->getExtension("native_profiler");
        $__internal_cd1d6479f07b2150796fa1b643f418d98d99949e9521135e655d34d1c243d0fa->enter($__internal_cd1d6479f07b2150796fa1b643f418d98d99949e9521135e655d34d1c243d0fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_cd1d6479f07b2150796fa1b643f418d98d99949e9521135e655d34d1c243d0fa->leave($__internal_cd1d6479f07b2150796fa1b643f418d98d99949e9521135e655d34d1c243d0fa_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 54,  172 => 49,  163 => 46,  159 => 45,  155 => 44,  151 => 43,  147 => 42,  144 => 41,  140 => 40,  134 => 36,  125 => 33,  120 => 30,  107 => 28,  103 => 27,  99 => 25,  97 => 24,  92 => 22,  88 => 21,  84 => 20,  79 => 18,  73 => 17,  69 => 15,  65 => 14,  56 => 7,  50 => 6,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'frontoffice.html.twig' %}*/
/* {% block title %}*/
/*     welcome to the homepage*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     <div class="container">*/
/*       <div class="jumbotron">*/
/*           <h1>some <strong>service provider</strong> or <strong>product marchand</strong> did <strong>wrong</strong> to you <em> dont keep it for your self</em></h1>*/
/*     <p>blacklist is the  right paltform to share your bad experiences</p> */
/*   </div>*/
/*         <h2>Claims Categories</h2>*/
/*         <div class="row">*/
/*   {% for category in categories %}*/
/*       */
/*          <div class="col-sm-3">*/
/*              <a  title="{{ category.title }}" href="{{ path('category_view',{ id : category.id}) }}">*/
/*              <img  class="img-responsive center-block" src="{{ asset(category.webpath) }}" />*/
/*              </a>*/
/*              <h3>{{ category.title|capitalize }}</h3>*/
/*       <p>{{ category.description }}</p>*/
/*       <p>claims {{ category.claims|length }}</p>*/
/*       <!--*/
/*         {% if category.claims|length >0 %}*/
/*       <nav>*/
/*           <ul class="list-unstyled">*/
/*               {% for claim in category.claims %}*/
/*                   <li><a title="{{ claim.title }}" href="{{ path('claim_show',{id : claim.id }) }}">{{claim.title }}</a></li>*/
/*               {% endfor %}*/
/*           </ul>*/
/*       </nav>*/
/*         {% endif %}*/
/*       -->*/
/*          </div>*/
/*     */
/*           {% endfor%}    */
/*             </div>*/
/*             <h2>Recent claims </h2>        */
/*   <div class="row">*/
/*       {% for claim in claims %}*/
/*     <div class="col-sm-4">*/
/*         <img  class="img-responsive center-block" src="{{ asset(claim.category.webpath) }}" /> */
/*       <h3>{{ claim.title|capitalize }}</h3>*/
/*       <p class="text-center"> By <em>{{ claim.account.username }}</em></p>*/
/*       <p>{{claim.createdat|date('d-m-y H:m')}}</p>*/
/*       <p class="text-center"><a href="{{ path('claim_view',{ id : claim.id  })}}" class="btn btn-info">view</a></p>*/
/*     </div>*/
/*     {% endfor %}*/
/*   </div>*/
/*         */
/*     </div>   */
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* {% endblock %}*/
/* */
