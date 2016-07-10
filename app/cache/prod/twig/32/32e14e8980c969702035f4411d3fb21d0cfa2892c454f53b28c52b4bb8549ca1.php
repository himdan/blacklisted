<?php

/* location/new.html.twig */
class __TwigTemplate_45dcb9811514f5619dc227e76f1ecc3d3661314298f650e7f03569529e064b1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("frontoffice.html.twig", "location/new.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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
        $__internal_168de3de9b67475545a21161952b2867361702e44ff7d5ec904e6e8ce10a4989 = $this->env->getExtension("native_profiler");
        $__internal_168de3de9b67475545a21161952b2867361702e44ff7d5ec904e6e8ce10a4989->enter($__internal_168de3de9b67475545a21161952b2867361702e44ff7d5ec904e6e8ce10a4989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "location/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_168de3de9b67475545a21161952b2867361702e44ff7d5ec904e6e8ce10a4989->leave($__internal_168de3de9b67475545a21161952b2867361702e44ff7d5ec904e6e8ce10a4989_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_87f14a01d1b51323cc78aadbd1a3ea421520c63195ebcc7fdca61f527a0cbc48 = $this->env->getExtension("native_profiler");
        $__internal_87f14a01d1b51323cc78aadbd1a3ea421520c63195ebcc7fdca61f527a0cbc48->enter($__internal_87f14a01d1b51323cc78aadbd1a3ea421520c63195ebcc7fdca61f527a0cbc48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    <style>
        #map-container { height: 300px }
    </style>
";
        
        $__internal_87f14a01d1b51323cc78aadbd1a3ea421520c63195ebcc7fdca61f527a0cbc48->leave($__internal_87f14a01d1b51323cc78aadbd1a3ea421520c63195ebcc7fdca61f527a0cbc48_prof);

    }

    // line 7
    public function block_headJs($context, array $blocks = array())
    {
        $__internal_d1cfe9bffdd5c07d23f4bcac17f4b9f8913fe11c2646f0898d36ae13eb93e090 = $this->env->getExtension("native_profiler");
        $__internal_d1cfe9bffdd5c07d23f4bcac17f4b9f8913fe11c2646f0898d36ae13eb93e090->enter($__internal_d1cfe9bffdd5c07d23f4bcac17f4b9f8913fe11c2646f0898d36ae13eb93e090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headJs"));

        // line 8
        echo "    <script
            src=\"http://maps.googleapis.com/maps/api/js\">
    </script>

    <script>
        var map;
        var myCenter=new google.maps.LatLng(33.90689555128866,8.7451171875);

        function initialize()
        {
            var mapProp = {
                center:myCenter,
                zoom:5,
                mapTypeId:google.maps.MapTypeId.ROADMAP
            };

            map = new google.maps.Map(document.getElementById(\"map-container\"),mapProp);

            google.maps.event.addListener(map, 'click', function(event) {
                placeMarker(event.latLng);
                getLocation(event.latLng);
            });
        }

        function placeMarker(location) {
            var marker = new google.maps.Marker({
                position: location,
                map: map,
            });
            var infowindow = new google.maps.InfoWindow({
                content: 'Latitude: ' + location.lat() + '<br>Longitude: ' + location.lng()
            });
            infowindow.open(map,marker);
        }

        function getLocation(location){
            document.getElementById(\"location_latitude\").value=location.lat();
            document.getElementById(\"location_longitude\").value=location.lng();
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
";
        
        $__internal_d1cfe9bffdd5c07d23f4bcac17f4b9f8913fe11c2646f0898d36ae13eb93e090->leave($__internal_d1cfe9bffdd5c07d23f4bcac17f4b9f8913fe11c2646f0898d36ae13eb93e090_prof);

    }

    // line 50
    public function block_content($context, array $blocks = array())
    {
        $__internal_3bd56ef8fb5bd65d4d16598f0df51e440b2faf5fe40ff5b40cb7cfc70ee91fe2 = $this->env->getExtension("native_profiler");
        $__internal_3bd56ef8fb5bd65d4d16598f0df51e440b2faf5fe40ff5b40cb7cfc70ee91fe2->enter($__internal_3bd56ef8fb5bd65d4d16598f0df51e440b2faf5fe40ff5b40cb7cfc70ee91fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 51
        echo "    <div class=\"container\">
        <div class=\"jumbotron\">
            <h1>Authorities locations</h1>

            <h2>manage authorities location </h2>
        </div>

    <div class=\"row\">
    <div class=\"col-lg-12\">
    <div id=\"map-container\"></div>
    <h1>Location creation</h1>

    ";
        // line 63
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form")));
        echo "
  
    <div class=\"form-group-lg\">
          ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label');
        echo "
          ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'errors');
        echo "
          ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "say a word about this location")));
        echo "
            
    </div>
          <div class=\"form-group-lg\">
          ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longitude", array()), 'label');
        echo "
          ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longitude", array()), 'errors');
        echo "
          ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longitude", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "longitude")));
        echo "
            
              
          </div>
          <div class=\"form-group-lg\">
          ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "latitude", array()), 'label');
        echo "
          ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "latitude", array()), 'errors');
        echo "
          ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "latitude", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "latitude")));
        echo "
            
              
          </div>
         <div class=\"form-group-lg\">
          ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "info", array()), 'label');
        echo "
          ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "info", array()), 'errors');
        echo "
          ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "info", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "info")));
        echo "
           </div>
           <div class=\"form-group-lg\">
          ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "authority", array()), 'label');
        echo "
          ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "authority", array()), 'errors');
        echo "
          ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "authority", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "authority")));
        echo "
           
           </div>
        ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input class=\"btn btn-default\" type=\"submit\" value=\"Create\" />
    ";
        // line 98
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul class=\"list-unstyled\">
        <li>
            <a class=\"btn btn-default\" href=\"";
        // line 102
        echo $this->env->getExtension('routing')->getPath("location_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
    </div>
    </div>
    </div>
";
        
        $__internal_3bd56ef8fb5bd65d4d16598f0df51e440b2faf5fe40ff5b40cb7cfc70ee91fe2->leave($__internal_3bd56ef8fb5bd65d4d16598f0df51e440b2faf5fe40ff5b40cb7cfc70ee91fe2_prof);

    }

    public function getTemplateName()
    {
        return "location/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 102,  212 => 98,  207 => 96,  201 => 93,  197 => 92,  193 => 91,  187 => 88,  183 => 87,  179 => 86,  171 => 81,  167 => 80,  163 => 79,  155 => 74,  151 => 73,  147 => 72,  140 => 68,  136 => 67,  132 => 66,  126 => 63,  112 => 51,  106 => 50,  58 => 8,  52 => 7,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'frontoffice.html.twig' %}*/
/* {% block stylesheets %}*/
/*     <style>*/
/*         #map-container { height: 300px }*/
/*     </style>*/
/* {% endblock %}*/
/* {% block headJs %}*/
/*     <script*/
/*             src="http://maps.googleapis.com/maps/api/js">*/
/*     </script>*/
/* */
/*     <script>*/
/*         var map;*/
/*         var myCenter=new google.maps.LatLng(33.90689555128866,8.7451171875);*/
/* */
/*         function initialize()*/
/*         {*/
/*             var mapProp = {*/
/*                 center:myCenter,*/
/*                 zoom:5,*/
/*                 mapTypeId:google.maps.MapTypeId.ROADMAP*/
/*             };*/
/* */
/*             map = new google.maps.Map(document.getElementById("map-container"),mapProp);*/
/* */
/*             google.maps.event.addListener(map, 'click', function(event) {*/
/*                 placeMarker(event.latLng);*/
/*                 getLocation(event.latLng);*/
/*             });*/
/*         }*/
/* */
/*         function placeMarker(location) {*/
/*             var marker = new google.maps.Marker({*/
/*                 position: location,*/
/*                 map: map,*/
/*             });*/
/*             var infowindow = new google.maps.InfoWindow({*/
/*                 content: 'Latitude: ' + location.lat() + '<br>Longitude: ' + location.lng()*/
/*             });*/
/*             infowindow.open(map,marker);*/
/*         }*/
/* */
/*         function getLocation(location){*/
/*             document.getElementById("location_latitude").value=location.lat();*/
/*             document.getElementById("location_longitude").value=location.lng();*/
/*         }*/
/*         google.maps.event.addDomListener(window, 'load', initialize);*/
/*     </script>*/
/* {% endblock %}*/
/* {% block content %}*/
/*     <div class="container">*/
/*         <div class="jumbotron">*/
/*             <h1>Authorities locations</h1>*/
/* */
/*             <h2>manage authorities location </h2>*/
/*         </div>*/
/* */
/*     <div class="row">*/
/*     <div class="col-lg-12">*/
/*     <div id="map-container"></div>*/
/*     <h1>Location creation</h1>*/
/* */
/*     {{ form_start(form,{'attr':{'class':'form'}}) }}*/
/*   */
/*     <div class="form-group-lg">*/
/*           {{ form_label(form.name) }}*/
/*           {{ form_errors(form.name) }}*/
/*           {{ form_widget(form.name,{'attr':{'class' : 'form-control', 'placeholder' : 'say a word about this location'}}) }}*/
/*             */
/*     </div>*/
/*           <div class="form-group-lg">*/
/*           {{ form_label(form.longitude) }}*/
/*           {{ form_errors(form.longitude) }}*/
/*           {{ form_widget(form.longitude,{'attr':{'class' : 'form-control', 'placeholder' : 'longitude'}}) }}*/
/*             */
/*               */
/*           </div>*/
/*           <div class="form-group-lg">*/
/*           {{ form_label(form.latitude) }}*/
/*           {{ form_errors(form.latitude) }}*/
/*           {{ form_widget(form.latitude,{'attr':{'class' : 'form-control', 'placeholder' : 'latitude'}}) }}*/
/*             */
/*               */
/*           </div>*/
/*          <div class="form-group-lg">*/
/*           {{ form_label(form.info) }}*/
/*           {{ form_errors(form.info) }}*/
/*           {{ form_widget(form.info,{'attr':{'class' : 'form-control', 'placeholder' : 'info'}}) }}*/
/*            </div>*/
/*            <div class="form-group-lg">*/
/*           {{ form_label(form.authority) }}*/
/*           {{ form_errors(form.authority) }}*/
/*           {{ form_widget(form.authority,{'attr':{'class' : 'form-control', 'placeholder' : 'authority'}}) }}*/
/*            */
/*            </div>*/
/*         {{ form_widget(form) }}*/
/*         <input class="btn btn-default" type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul class="list-unstyled">*/
/*         <li>*/
/*             <a class="btn btn-default" href="{{ path('location_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/*     </div>*/
/*     </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
