<?php

/* base.html.twig */
class __TwigTemplate_e7512925d8fb00307cc049a1006d437f3028b1723b810d6e2acede88a13e1891 extends Twig_Template
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
        $__internal_a0141ad1f712be6bad9ef3341321a9c5e7092d3c44ba1a9d46933ec63ec148ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0141ad1f712be6bad9ef3341321a9c5e7092d3c44ba1a9d46933ec63ec148ff->enter($__internal_a0141ad1f712be6bad9ef3341321a9c5e7092d3c44ba1a9d46933ec63ec148ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_9b8b2145576d67dae62f1415a721101e4ea5ff14b005c0270c40e884a968c7fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b8b2145576d67dae62f1415a721101e4ea5ff14b005c0270c40e884a968c7fa->enter($__internal_9b8b2145576d67dae62f1415a721101e4ea5ff14b005c0270c40e884a968c7fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 8
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/general/bootstrap-3.3.7/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    </head>
    <body>
    <nav class=\"navbar navbar-inverse\">
        <div class=\"container-fluid\">
            <div class=\"navbar-header\">
                <a class=\"navbar-brand\" href=\"#\">Jobs</a>
            </div>
            <ul class=\"nav navbar-nav\">
                <li class=\"active\"><a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Accueil</a></li>
                <li><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("advert_index");
        echo "\">Annonces</a></li>
                <li><a href=\"#\"></a></li>
            </ul>
        </div>
    </nav>

    <div class=\"container\">
        ";
        // line 27
        $this->displayBlock('body', $context, $blocks);
        // line 28
        echo "    </div>
        ";
        // line 29
        $this->displayBlock('javascripts', $context, $blocks);
        // line 33
        echo "    </body>
</html>
";
        
        $__internal_a0141ad1f712be6bad9ef3341321a9c5e7092d3c44ba1a9d46933ec63ec148ff->leave($__internal_a0141ad1f712be6bad9ef3341321a9c5e7092d3c44ba1a9d46933ec63ec148ff_prof);

        
        $__internal_9b8b2145576d67dae62f1415a721101e4ea5ff14b005c0270c40e884a968c7fa->leave($__internal_9b8b2145576d67dae62f1415a721101e4ea5ff14b005c0270c40e884a968c7fa_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4eafdb4f6c2e8c2551a76ba94ec8eb9d9255cc1502c8c0d8e41385c6b892c9ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4eafdb4f6c2e8c2551a76ba94ec8eb9d9255cc1502c8c0d8e41385c6b892c9ce->enter($__internal_4eafdb4f6c2e8c2551a76ba94ec8eb9d9255cc1502c8c0d8e41385c6b892c9ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fd717b2c5b61094411fe937c2c5492c4e87e8f401830578d40712ff6892d5267 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd717b2c5b61094411fe937c2c5492c4e87e8f401830578d40712ff6892d5267->enter($__internal_fd717b2c5b61094411fe937c2c5492c4e87e8f401830578d40712ff6892d5267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Jobs";
        
        $__internal_fd717b2c5b61094411fe937c2c5492c4e87e8f401830578d40712ff6892d5267->leave($__internal_fd717b2c5b61094411fe937c2c5492c4e87e8f401830578d40712ff6892d5267_prof);

        
        $__internal_4eafdb4f6c2e8c2551a76ba94ec8eb9d9255cc1502c8c0d8e41385c6b892c9ce->leave($__internal_4eafdb4f6c2e8c2551a76ba94ec8eb9d9255cc1502c8c0d8e41385c6b892c9ce_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7d327e75f12f66bc055a09ce8568c485c55002631c592886cbfee1c7d95d66e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d327e75f12f66bc055a09ce8568c485c55002631c592886cbfee1c7d95d66e3->enter($__internal_7d327e75f12f66bc055a09ce8568c485c55002631c592886cbfee1c7d95d66e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_db258984bab4e80b790bb82520564c8468743e5dde8838aee8af06d70091186a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db258984bab4e80b790bb82520564c8468743e5dde8838aee8af06d70091186a->enter($__internal_db258984bab4e80b790bb82520564c8468743e5dde8838aee8af06d70091186a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        ";
        
        $__internal_db258984bab4e80b790bb82520564c8468743e5dde8838aee8af06d70091186a->leave($__internal_db258984bab4e80b790bb82520564c8468743e5dde8838aee8af06d70091186a_prof);

        
        $__internal_7d327e75f12f66bc055a09ce8568c485c55002631c592886cbfee1c7d95d66e3->leave($__internal_7d327e75f12f66bc055a09ce8568c485c55002631c592886cbfee1c7d95d66e3_prof);

    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        $__internal_e896ed3b2ddf223900a4485e826db6267cc65d8246f0198dcd186006bba1f044 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e896ed3b2ddf223900a4485e826db6267cc65d8246f0198dcd186006bba1f044->enter($__internal_e896ed3b2ddf223900a4485e826db6267cc65d8246f0198dcd186006bba1f044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e5a1ccd903e4ec575234a39d4090f192bc2268ec3fa00bb42f4a1ef89a85b9a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5a1ccd903e4ec575234a39d4090f192bc2268ec3fa00bb42f4a1ef89a85b9a5->enter($__internal_e5a1ccd903e4ec575234a39d4090f192bc2268ec3fa00bb42f4a1ef89a85b9a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e5a1ccd903e4ec575234a39d4090f192bc2268ec3fa00bb42f4a1ef89a85b9a5->leave($__internal_e5a1ccd903e4ec575234a39d4090f192bc2268ec3fa00bb42f4a1ef89a85b9a5_prof);

        
        $__internal_e896ed3b2ddf223900a4485e826db6267cc65d8246f0198dcd186006bba1f044->leave($__internal_e896ed3b2ddf223900a4485e826db6267cc65d8246f0198dcd186006bba1f044_prof);

    }

    // line 29
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f26db6a82b78c37a44b9257e9094cd1f9ef6994154a454fe67f64e22438a3354 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f26db6a82b78c37a44b9257e9094cd1f9ef6994154a454fe67f64e22438a3354->enter($__internal_f26db6a82b78c37a44b9257e9094cd1f9ef6994154a454fe67f64e22438a3354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_811fd85389275238bc8e08b97bfdefc9896387b2fd68d78cd4ea6065679e603a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_811fd85389275238bc8e08b97bfdefc9896387b2fd68d78cd4ea6065679e603a->enter($__internal_811fd85389275238bc8e08b97bfdefc9896387b2fd68d78cd4ea6065679e603a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 30
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/general/bootstrap-3.3.7/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/general/sweetalert/sweetalert.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_811fd85389275238bc8e08b97bfdefc9896387b2fd68d78cd4ea6065679e603a->leave($__internal_811fd85389275238bc8e08b97bfdefc9896387b2fd68d78cd4ea6065679e603a_prof);

        
        $__internal_f26db6a82b78c37a44b9257e9094cd1f9ef6994154a454fe67f64e22438a3354->leave($__internal_f26db6a82b78c37a44b9257e9094cd1f9ef6994154a454fe67f64e22438a3354_prof);

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
        return array (  163 => 31,  158 => 30,  149 => 29,  132 => 27,  122 => 7,  113 => 6,  95 => 5,  83 => 33,  81 => 29,  78 => 28,  76 => 27,  66 => 20,  62 => 19,  50 => 10,  46 => 9,  41 => 8,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Jobs{% endblock %}</title>
        {% block stylesheets %}
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link href=\"{{ asset('assets/general/bootstrap-3.3.7/css/bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{ asset('assets/css/style.css')}}\" rel=\"stylesheet\" type=\"text/css\">
    </head>
    <body>
    <nav class=\"navbar navbar-inverse\">
        <div class=\"container-fluid\">
            <div class=\"navbar-header\">
                <a class=\"navbar-brand\" href=\"#\">Jobs</a>
            </div>
            <ul class=\"nav navbar-nav\">
                <li class=\"active\"><a href=\"{{ path('homepage') }}\">Accueil</a></li>
                <li><a href=\"{{ path('advert_index') }}\">Annonces</a></li>
                <li><a href=\"#\"></a></li>
            </ul>
        </div>
    </nav>

    <div class=\"container\">
        {% block body %}{% endblock %}
    </div>
        {% block javascripts %}
            <script type=\"text/javascript\" src=\"{{ asset('assets/general/bootstrap-3.3.7/js/bootstrap.min.js')}}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('assets/general/sweetalert/sweetalert.js')}}\"></script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/home/axel/www/develops/app/Resources/views/base.html.twig");
    }
}
