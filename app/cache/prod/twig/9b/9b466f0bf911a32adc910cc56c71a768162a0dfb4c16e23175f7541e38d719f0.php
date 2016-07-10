<?php

/* claim/show.html.twig */
class __TwigTemplate_0bb647d61afc71add838f5e9e031a1b6fc996c504e94d5cbf190d5a2def54714 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("frontoffice.html.twig", "claim/show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'headJs' => array($this, 'block_headJs'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "frontoffice.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_60a4477cc9098c2601310cecd4890092d10865bb1bcc9107028495711e462902 = $this->env->getExtension("native_profiler");
        $__internal_60a4477cc9098c2601310cecd4890092d10865bb1bcc9107028495711e462902->enter($__internal_60a4477cc9098c2601310cecd4890092d10865bb1bcc9107028495711e462902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "claim/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60a4477cc9098c2601310cecd4890092d10865bb1bcc9107028495711e462902->leave($__internal_60a4477cc9098c2601310cecd4890092d10865bb1bcc9107028495711e462902_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_b05a0f9b270d631811285f74fbb53c751bff64586d8c00e9ac5d2bed23dd534c = $this->env->getExtension("native_profiler");
        $__internal_b05a0f9b270d631811285f74fbb53c751bff64586d8c00e9ac5d2bed23dd534c->enter($__internal_b05a0f9b270d631811285f74fbb53c751bff64586d8c00e9ac5d2bed23dd534c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["claim"]) ? $context["claim"] : $this->getContext($context, "claim")), "title", array()), "html", null, true);
        
        $__internal_b05a0f9b270d631811285f74fbb53c751bff64586d8c00e9ac5d2bed23dd534c->leave($__internal_b05a0f9b270d631811285f74fbb53c751bff64586d8c00e9ac5d2bed23dd534c_prof);

    }

    // line 3
    public function block_headJs($context, array $blocks = array())
    {
        $__internal_1a827acaaa7e19c021c0c42fa29255d9adacd818cd1d0ef97ed2abcd1681c412 = $this->env->getExtension("native_profiler");
        $__internal_1a827acaaa7e19c021c0c42fa29255d9adacd818cd1d0ef97ed2abcd1681c412->enter($__internal_1a827acaaa7e19c021c0c42fa29255d9adacd818cd1d0ef97ed2abcd1681c412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headJs"));

        // line 4
        echo "    ";
        if (($this->getAttribute((isset($context["claim"]) ? $context["claim"] : $this->getContext($context, "claim")), "located", array()) == true)) {
            // line 5
            echo "    <script src=\"http://maps.googleapis.com/maps/api/js\">
    </script>


    <script>

        var myCenter=new google.maps.LatLng(";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["claim"]) ? $context["claim"] : $this->getContext($context, "claim")), "location", array()), "latitude", array()), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["claim"]) ? $context["claim"] : $this->getContext($context, "claim")), "location", array()), "longtitude", array()), "html", null, true);
            echo ");
        var marker;

        function initialize()
        {
            var mapProp = {
                center:myCenter,
                zoom:5,
                mapTypeId:google.maps.MapTypeId.ROADMAP
            };

            var map=new google.maps.Map(document.getElementById(\"googleMap\"),mapProp);

            var marker=new google.maps.Marker({
                position:myCenter,
                animation:google.maps.Animation.BOUNCE
            });
            var infowindow = new google.maps.InfoWindow({
                content: 'Adresss: ' + '";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["claim"]) ? $context["claim"] : $this->getContext($context, "claim")), "location", array()), "address", array()), "html", null, true);
            echo "' + '<br>Description: ' + '";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["claim"]) ? $context["claim"] : $this->getContext($context, "claim")), "location", array()), "description", array()), "html", null, true);
            echo "'
            });
            infowindow.open(map,marker)
            marker.setMap(map);
        }

        google.maps.event.addDomListener(window, 'load', initialize);

    </script>
";
        }
        
        $__internal_1a827acaaa7e19c021c0c42fa29255d9adacd818cd1d0ef97ed2abcd1681c412->leave($__internal_1a827acaaa7e19c021c0c42fa29255d9adacd818cd1d0ef97ed2abcd1681c412_prof);

    }

    // line 40
    public function block_content($context, array $blocks = array())
    {
        $__internal_f9d03f454b86c810d470e268713a08051b24e50e9f5a522ce5481c4d2557cf49 = $this->env->getExtension("native_profiler");
        $__internal_f9d03f454b86c810d470e268713a08051b24e50e9f5a522ce5481c4d2557cf49->enter($__internal_f9d03f454b86c810d470e268713a08051b24e50e9f5a522ce5481c4d2557cf49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 41
        echo "    <div class=\"container\">
    <div class=\"jumbotron\">
    <h1>Claim Details</h1>
    </div>
      <div class=\"row\">
    <div class=\"col-sm-2\">

                            <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("claim_edit", array("id" => $this->getAttribute((isset($context["claim"]) ? $context["claim"] : $this->getContext($context, "claim")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">Edit</a><br>

                            <a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("claim_index");
        echo "\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-menu-left\" aria-hidden=\"true\"></span>back to the claim list</a>

                            ";
        // line 52
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                            <input type=\"submit\" value=\"Delete\" class=\"btn btn-default\">
                            ";
        // line 54
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "

    </div>
    <div class=\"col-sm-6\">
    <table class=\"table\">
        <tbody>

            <tr>
                <th>Id</th>
                <td>";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["claim"]) ? $context["claim"] : $this->getContext($context, "claim")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["claim"]) ? $context["claim"] : $this->getContext($context, "claim")), "title", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["claim"]) ? $context["claim"] : $this->getContext($context, "claim")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Created At</th>
                <td>";
        // line 75
        if ($this->getAttribute((isset($context["claim"]) ? $context["claim"] : $this->getContext($context, "claim")), "createdAt", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["claim"]) ? $context["claim"] : $this->getContext($context, "claim")), "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            
        </tbody>
    </table>
    </div>
    </div>
        ";
        // line 82
        if ($this->getAttribute((isset($context["claim"]) ? $context["claim"] : $this->getContext($context, "claim")), "isService", array())) {
            // line 83
            echo "            <h2>Location</h2>
            <div class=\"row\" >
                ";
            // line 85
            if (($this->getAttribute((isset($context["claim"]) ? $context["claim"] : $this->getContext($context, "claim")), "located", array()) != true)) {
                // line 86
                echo "                <div class=\"col-sm-3\">
                    <h5>add new location</h5>
                    <span>&nbsp;&nbsp;</span>
                    <a title=\"add new location\" class=\"btn-link\" href=\"";
                // line 89
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("set_location", array("id" => $this->getAttribute((isset($context["claim"]) ? $context["claim"] : $this->getContext($context, "claim")), "id", array()))), "html", null, true);
                echo "\"><img class=\"img-responsive\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/blacklisted/location.png"), "html", null, true);
                echo "\"></a>
                </div>
                    ";
            } else {
                // line 92
                echo "                        <div class=\"col-sm-6\">
                         <h5>google map</h5>
                            <div id=\"googleMap\" style=\"width:550px;height:380px;\">

                            </div>
                        </div>
                ";
            }
            // line 99
            echo "            </div>
        ";
        }
        // line 101
        echo "
        <h2>Media List</h2>

        <div class=\"row\">
        ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["claim"]) ? $context["claim"] : $this->getContext($context, "claim")), "medias", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["medium"]) {
            // line 106
            echo "            ";
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["claim"]) ? $context["claim"] : $this->getContext($context, "claim")), "medias", array())) > 12)) {
                // line 107
                echo "                <div class=\"col-sm-1\">
                ";
            } else {
                // line 109
                echo "                <div class=\"col-sm-2\">        
            ";
            }
            // line 111
            echo "                <h5>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["medium"], "alternative", array()), "html", null, true);
            echo "</h5>
                <span>";
            // line 112
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["medium"], "createdat", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</span>
                <a href=\"";
            // line 113
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("media_show", array("id" => $this->getAttribute($context["medium"], "id", array()))), "html", null, true);
            echo "\" title=\"\">
                    <img  class=\"img-responsive\" src=\"";
            // line 114
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["medium"], "webpath", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["medium"], "alternative", array()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["medium"], "alternative", array()), "html", null, true);
            echo "\"/>
                </a>
                    
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['medium'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "

                <div class=\"col-sm-3\">
                    <h5>add new medium</h5>
                    <span>&nbsp;&nbsp;</span>
                    <a title=\"add new medium\" class=\"btn-link\" href=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("add_medium", array("id" => $this->getAttribute((isset($context["claim"]) ? $context["claim"] : $this->getContext($context, "claim")), "id", array()))), "html", null, true);
        echo "\"><img class=\"img-responsive\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/blacklisted/add.png"), "html", null, true);
        echo "\"></a>
                </div>

                </div>
    </div>
";
        
        $__internal_f9d03f454b86c810d470e268713a08051b24e50e9f5a522ce5481c4d2557cf49->leave($__internal_f9d03f454b86c810d470e268713a08051b24e50e9f5a522ce5481c4d2557cf49_prof);

    }

    public function getTemplateName()
    {
        return "claim/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 124,  266 => 119,  251 => 114,  247 => 113,  243 => 112,  238 => 111,  234 => 109,  230 => 107,  227 => 106,  223 => 105,  217 => 101,  213 => 99,  204 => 92,  196 => 89,  191 => 86,  189 => 85,  185 => 83,  183 => 82,  171 => 75,  164 => 71,  157 => 67,  150 => 63,  138 => 54,  133 => 52,  128 => 50,  123 => 48,  114 => 41,  108 => 40,  88 => 29,  65 => 11,  57 => 5,  54 => 4,  48 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'frontoffice.html.twig' %}*/
/* {% block title %}{{ claim.title }}{% endblock %}*/
/* {% block headJs %}*/
/*     {% if claim.located== true %}*/
/*     <script src="http://maps.googleapis.com/maps/api/js">*/
/*     </script>*/
/* */
/* */
/*     <script>*/
/* */
/*         var myCenter=new google.maps.LatLng({{ claim.location.latitude }},{{ claim.location.longtitude }});*/
/*         var marker;*/
/* */
/*         function initialize()*/
/*         {*/
/*             var mapProp = {*/
/*                 center:myCenter,*/
/*                 zoom:5,*/
/*                 mapTypeId:google.maps.MapTypeId.ROADMAP*/
/*             };*/
/* */
/*             var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);*/
/* */
/*             var marker=new google.maps.Marker({*/
/*                 position:myCenter,*/
/*                 animation:google.maps.Animation.BOUNCE*/
/*             });*/
/*             var infowindow = new google.maps.InfoWindow({*/
/*                 content: 'Adresss: ' + '{{ claim.location.address }}' + '<br>Description: ' + '{{ claim.location.description }}'*/
/*             });*/
/*             infowindow.open(map,marker)*/
/*             marker.setMap(map);*/
/*         }*/
/* */
/*         google.maps.event.addDomListener(window, 'load', initialize);*/
/* */
/*     </script>*/
/* {% endif %}*/
/* {% endblock %}*/
/* {% block content %}*/
/*     <div class="container">*/
/*     <div class="jumbotron">*/
/*     <h1>Claim Details</h1>*/
/*     </div>*/
/*       <div class="row">*/
/*     <div class="col-sm-2">*/
/* */
/*                             <a href="{{ path('claim_edit', { 'id': claim.id }) }}" class="btn btn-default">Edit</a><br>*/
/* */
/*                             <a href="{{ path('claim_index') }}" class="btn btn-default"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>back to the claim list</a>*/
/* */
/*                             {{ form_start(delete_form) }}*/
/*                             <input type="submit" value="Delete" class="btn btn-default">*/
/*                             {{ form_end(delete_form) }}*/
/* */
/*     </div>*/
/*     <div class="col-sm-6">*/
/*     <table class="table">*/
/*         <tbody>*/
/* */
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ claim.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Title</th>*/
/*                 <td>{{ claim.title }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Description</th>*/
/*                 <td>{{ claim.description }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Created At</th>*/
/*                 <td>{% if claim.createdAt %}{{ claim.createdAt|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             */
/*         </tbody>*/
/*     </table>*/
/*     </div>*/
/*     </div>*/
/*         {% if claim.isService %}*/
/*             <h2>Location</h2>*/
/*             <div class="row" >*/
/*                 {% if claim.located!= true %}*/
/*                 <div class="col-sm-3">*/
/*                     <h5>add new location</h5>*/
/*                     <span>&nbsp;&nbsp;</span>*/
/*                     <a title="add new location" class="btn-link" href="{{ path('set_location',{ 'id': claim.id }) }}"><img class="img-responsive" src="{{ asset('images/blacklisted/location.png') }}"></a>*/
/*                 </div>*/
/*                     {% else %}*/
/*                         <div class="col-sm-6">*/
/*                          <h5>google map</h5>*/
/*                             <div id="googleMap" style="width:550px;height:380px;">*/
/* */
/*                             </div>*/
/*                         </div>*/
/*                 {% endif %}*/
/*             </div>*/
/*         {% endif %}*/
/* */
/*         <h2>Media List</h2>*/
/* */
/*         <div class="row">*/
/*         {% for medium in claim.medias %}*/
/*             {% if claim.medias|length >12%}*/
/*                 <div class="col-sm-1">*/
/*                 {% else %}*/
/*                 <div class="col-sm-2">        */
/*             {% endif %}*/
/*                 <h5>{{ medium.alternative }}</h5>*/
/*                 <span>{{ medium.createdat|date('Y-m-d H:i:s')  }}</span>*/
/*                 <a href="{{path('media_show',{'id': medium.id }) }}" title="">*/
/*                     <img  class="img-responsive" src="{{ asset(medium.webpath) }}" alt="{{ medium.alternative }}" title="{{ medium.alternative }}"/>*/
/*                 </a>*/
/*                     */
/*                     </div>*/
/*                 {% endfor%}*/
/* */
/* */
/*                 <div class="col-sm-3">*/
/*                     <h5>add new medium</h5>*/
/*                     <span>&nbsp;&nbsp;</span>*/
/*                     <a title="add new medium" class="btn-link" href="{{ path('add_medium', { 'id': claim.id }) }}"><img class="img-responsive" src="{{ asset('images/blacklisted/add.png') }}"></a>*/
/*                 </div>*/
/* */
/*                 </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
