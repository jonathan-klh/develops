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
        $__internal_f932d2ee3dc97d8489a3ff8ca1c39ae6e1f253e2f9eaec08e6d1a3a3f3eb4b63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f932d2ee3dc97d8489a3ff8ca1c39ae6e1f253e2f9eaec08e6d1a3a3f3eb4b63->enter($__internal_f932d2ee3dc97d8489a3ff8ca1c39ae6e1f253e2f9eaec08e6d1a3a3f3eb4b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_551bbb4c0a2927e5090cc3503b730f7237a43f094d364907a09c221ce943ea71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_551bbb4c0a2927e5090cc3503b730f7237a43f094d364907a09c221ce943ea71->enter($__internal_551bbb4c0a2927e5090cc3503b730f7237a43f094d364907a09c221ce943ea71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
                ";
        // line 21
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 22
            echo "                    <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\" class=\"my-sm-0\">Se deconnecter</a></li>
                    <li><a href=\"";
            // line 23
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("informations");
            echo "\" class=\"my-sm-0\">Compléter mon profil</a></li>
                ";
        } else {
            // line 25
            echo "                    <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\" class=\"my-sm-0\">Se connecter</a></li>
                    <li><a href=\"";
            // line 26
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\">S'inscrire</a></li>
                ";
        }
        // line 28
        echo "            </ul>
        </div>
    </nav>

    <div class=\"container\">
        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "    </div>
        ";
        // line 35
        $this->displayBlock('javascripts', $context, $blocks);
        // line 39
        echo "    </body>
</html>
";
        
        $__internal_f932d2ee3dc97d8489a3ff8ca1c39ae6e1f253e2f9eaec08e6d1a3a3f3eb4b63->leave($__internal_f932d2ee3dc97d8489a3ff8ca1c39ae6e1f253e2f9eaec08e6d1a3a3f3eb4b63_prof);

        
        $__internal_551bbb4c0a2927e5090cc3503b730f7237a43f094d364907a09c221ce943ea71->leave($__internal_551bbb4c0a2927e5090cc3503b730f7237a43f094d364907a09c221ce943ea71_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b99388aca1ecc76412ab8ad08056fe655ae3bda10a07cde9d7919c0bf804062a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b99388aca1ecc76412ab8ad08056fe655ae3bda10a07cde9d7919c0bf804062a->enter($__internal_b99388aca1ecc76412ab8ad08056fe655ae3bda10a07cde9d7919c0bf804062a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9afa201f6b678674705a1adc9f77c9f1c51a7f168cf0e76784e84df54c6ec915 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9afa201f6b678674705a1adc9f77c9f1c51a7f168cf0e76784e84df54c6ec915->enter($__internal_9afa201f6b678674705a1adc9f77c9f1c51a7f168cf0e76784e84df54c6ec915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Jobs";
        
        $__internal_9afa201f6b678674705a1adc9f77c9f1c51a7f168cf0e76784e84df54c6ec915->leave($__internal_9afa201f6b678674705a1adc9f77c9f1c51a7f168cf0e76784e84df54c6ec915_prof);

        
        $__internal_b99388aca1ecc76412ab8ad08056fe655ae3bda10a07cde9d7919c0bf804062a->leave($__internal_b99388aca1ecc76412ab8ad08056fe655ae3bda10a07cde9d7919c0bf804062a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_894160e540dd5772ccfaa40ca7fc9525624b40c9f2ac6cf2ebb9b35f5bc5c183 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_894160e540dd5772ccfaa40ca7fc9525624b40c9f2ac6cf2ebb9b35f5bc5c183->enter($__internal_894160e540dd5772ccfaa40ca7fc9525624b40c9f2ac6cf2ebb9b35f5bc5c183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a810d19dfa67df3c7ecb69214ec7dfdfdf5f48f231f80daac61780000ad6c666 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a810d19dfa67df3c7ecb69214ec7dfdfdf5f48f231f80daac61780000ad6c666->enter($__internal_a810d19dfa67df3c7ecb69214ec7dfdfdf5f48f231f80daac61780000ad6c666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        ";
        
        $__internal_a810d19dfa67df3c7ecb69214ec7dfdfdf5f48f231f80daac61780000ad6c666->leave($__internal_a810d19dfa67df3c7ecb69214ec7dfdfdf5f48f231f80daac61780000ad6c666_prof);

        
        $__internal_894160e540dd5772ccfaa40ca7fc9525624b40c9f2ac6cf2ebb9b35f5bc5c183->leave($__internal_894160e540dd5772ccfaa40ca7fc9525624b40c9f2ac6cf2ebb9b35f5bc5c183_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a91a42eb2644b40904d71e94e8850baad3b27dd8af0a31a04f79c1b0826c9a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a91a42eb2644b40904d71e94e8850baad3b27dd8af0a31a04f79c1b0826c9a2->enter($__internal_2a91a42eb2644b40904d71e94e8850baad3b27dd8af0a31a04f79c1b0826c9a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_be95d1cbbc3ebadb67d31dbfcbff2c32a2f868a7de24d0585bd810990b1db2a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be95d1cbbc3ebadb67d31dbfcbff2c32a2f868a7de24d0585bd810990b1db2a1->enter($__internal_be95d1cbbc3ebadb67d31dbfcbff2c32a2f868a7de24d0585bd810990b1db2a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_be95d1cbbc3ebadb67d31dbfcbff2c32a2f868a7de24d0585bd810990b1db2a1->leave($__internal_be95d1cbbc3ebadb67d31dbfcbff2c32a2f868a7de24d0585bd810990b1db2a1_prof);

        
        $__internal_2a91a42eb2644b40904d71e94e8850baad3b27dd8af0a31a04f79c1b0826c9a2->leave($__internal_2a91a42eb2644b40904d71e94e8850baad3b27dd8af0a31a04f79c1b0826c9a2_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e337655b7adea147fa6d31be476f0898ba9c40e824403b6a5c7d549c739f554d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e337655b7adea147fa6d31be476f0898ba9c40e824403b6a5c7d549c739f554d->enter($__internal_e337655b7adea147fa6d31be476f0898ba9c40e824403b6a5c7d549c739f554d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_84231fe8a3fae229d726ce8e2830ff9094c191ddd8b5f12c5b29ef869cebe250 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84231fe8a3fae229d726ce8e2830ff9094c191ddd8b5f12c5b29ef869cebe250->enter($__internal_84231fe8a3fae229d726ce8e2830ff9094c191ddd8b5f12c5b29ef869cebe250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 36
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/general/bootstrap-3.3.7/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/general/sweetalert/sweetalert.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_84231fe8a3fae229d726ce8e2830ff9094c191ddd8b5f12c5b29ef869cebe250->leave($__internal_84231fe8a3fae229d726ce8e2830ff9094c191ddd8b5f12c5b29ef869cebe250_prof);

        
        $__internal_e337655b7adea147fa6d31be476f0898ba9c40e824403b6a5c7d549c739f554d->leave($__internal_e337655b7adea147fa6d31be476f0898ba9c40e824403b6a5c7d549c739f554d_prof);

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
        return array (  186 => 37,  181 => 36,  172 => 35,  155 => 33,  145 => 7,  136 => 6,  118 => 5,  106 => 39,  104 => 35,  101 => 34,  99 => 33,  92 => 28,  87 => 26,  82 => 25,  77 => 23,  72 => 22,  70 => 21,  66 => 20,  62 => 19,  50 => 10,  46 => 9,  41 => 8,  39 => 6,  35 => 5,  29 => 1,);
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
                {% if app.user %}
                    <li><a href=\"{{ path('fos_user_security_logout') }}\" class=\"my-sm-0\">Se deconnecter</a></li>
                    <li><a href=\"{{ path('informations') }}\" class=\"my-sm-0\">Compléter mon profil</a></li>
                {% else %}
                    <li><a href=\"{{ path('fos_user_security_login') }}\" class=\"my-sm-0\">Se connecter</a></li>
                    <li><a href=\"{{ path('fos_user_registration_register') }}\">S'inscrire</a></li>
                {% endif %}
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
