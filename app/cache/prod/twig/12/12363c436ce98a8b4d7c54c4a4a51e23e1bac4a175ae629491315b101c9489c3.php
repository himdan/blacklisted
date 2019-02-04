<?php

/* default/index.html.twig */
class __TwigTemplate_3fe3c55e3b68d2defcde99d80794d0e4696937b61776c7fa52f30f6ac0b1593a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("frontoffice.html.twig", "default/index.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "frontoffice.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    welcome to the homepage
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new Twig_Error_Runtime('Variable "categories" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 15
            echo "      
         <div class=\"col-sm-3\">
             <a  title=\"";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "title", []), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_view", ["id" => twig_get_attribute($this->env, $this->source, $context["category"], "id", [])]), "html", null, true);
            echo "\">
             <img  class=\"img-responsive center-block\" src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["category"], "webpath", [])), "html", null, true);
            echo "\" />
             </a>
             <h3>";
            // line 20
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "title", [])), "html", null, true);
            echo "</h3>
      <p>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "description", []), "html", null, true);
            echo "</p>
      <p>claims ";
            // line 22
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "claims", [])), "html", null, true);
            echo "</p>
      <!--
        ";
            // line 24
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "claims", [])) > 0)) {
                // line 25
                echo "      <nav>
          <ul class=\"list-unstyled\">
              ";
                // line 27
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "claims", []));
                foreach ($context['_seq'] as $context["_key"] => $context["claim"]) {
                    // line 28
                    echo "                  <li><a title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["claim"], "title", []), "html", null, true);
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("claim_show", ["id" => twig_get_attribute($this->env, $this->source, $context["claim"], "id", [])]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["claim"], "title", []), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["claims"]) || array_key_exists("claims", $context) ? $context["claims"] : (function () { throw new Twig_Error_Runtime('Variable "claims" does not exist.', 40, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["claim"]) {
            // line 41
            echo "    <div class=\"col-sm-4\">
        <img  class=\"img-responsive center-block\" src=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["claim"], "category", []), "webpath", [])), "html", null, true);
            echo "\" /> 
      <h3>";
            // line 43
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["claim"], "title", [])), "html", null, true);
            echo "</h3>
      <p class=\"text-center\"> By <em>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["claim"], "account", []), "username", []), "html", null, true);
            echo "</em></p>
      <p>";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["claim"], "createdat", []), "d-m-y H:m"), "html", null, true);
            echo "</p>
      <p class=\"text-center\"><a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("claim_view", ["id" => twig_get_attribute($this->env, $this->source, $context["claim"], "id", [])]), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 54
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  186 => 54,  176 => 49,  167 => 46,  163 => 45,  159 => 44,  155 => 43,  151 => 42,  148 => 41,  144 => 40,  138 => 36,  129 => 33,  124 => 30,  111 => 28,  107 => 27,  103 => 25,  101 => 24,  96 => 22,  92 => 21,  88 => 20,  83 => 18,  77 => 17,  73 => 15,  69 => 14,  60 => 7,  54 => 6,  46 => 3,  40 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'frontoffice.html.twig' %}
{% block title %}
    welcome to the homepage
{% endblock %}

{% block content %}
    <div class=\"container\">
      <div class=\"jumbotron\">
          <h1>some <strong>service provider</strong> or <strong>product marchand</strong> did <strong>wrong</strong> to you <em> dont keep it for your self</em></h1>
    <p>blacklist is the  right paltform to share your bad experiences</p> 
  </div>
        <h2>Claims Categories</h2>
        <div class=\"row\">
  {% for category in categories %}
      
         <div class=\"col-sm-3\">
             <a  title=\"{{ category.title }}\" href=\"{{ path('category_view',{ id : category.id}) }}\">
             <img  class=\"img-responsive center-block\" src=\"{{ asset(category.webpath) }}\" />
             </a>
             <h3>{{ category.title|capitalize }}</h3>
      <p>{{ category.description }}</p>
      <p>claims {{ category.claims|length }}</p>
      <!--
        {% if category.claims|length >0 %}
      <nav>
          <ul class=\"list-unstyled\">
              {% for claim in category.claims %}
                  <li><a title=\"{{ claim.title }}\" href=\"{{ path('claim_show',{id : claim.id }) }}\">{{claim.title }}</a></li>
              {% endfor %}
          </ul>
      </nav>
        {% endif %}
      -->
         </div>
    
          {% endfor%}    
            </div>
            <h2>Recent claims </h2>        
  <div class=\"row\">
      {% for claim in claims %}
    <div class=\"col-sm-4\">
        <img  class=\"img-responsive center-block\" src=\"{{ asset(claim.category.webpath) }}\" /> 
      <h3>{{ claim.title|capitalize }}</h3>
      <p class=\"text-center\"> By <em>{{ claim.account.username }}</em></p>
      <p>{{claim.createdat|date('d-m-y H:m')}}</p>
      <p class=\"text-center\"><a href=\"{{ path('claim_view',{ id : claim.id  })}}\" class=\"btn btn-info\">view</a></p>
    </div>
    {% endfor %}
  </div>
        
    </div>   
{% endblock %}

{% block stylesheets %}
{% endblock %}
", "default/index.html.twig", "/home/mohamed/PhpstormProjects/Quickstart3/symfony/app/Resources/views/default/index.html.twig");
    }
}
