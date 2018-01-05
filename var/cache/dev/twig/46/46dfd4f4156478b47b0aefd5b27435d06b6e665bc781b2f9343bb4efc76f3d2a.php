<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_40d17f889cda0e9198fdd0de6a45002f4e95d20d7f1dda71b6e52967dec960e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1fd2e4d043344fd2fe00cafc0a8b4b6390a3eece9b7114ab482194d0ba794f73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fd2e4d043344fd2fe00cafc0a8b4b6390a3eece9b7114ab482194d0ba794f73->enter($__internal_1fd2e4d043344fd2fe00cafc0a8b4b6390a3eece9b7114ab482194d0ba794f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_fa578175038a107cb8e631100c85f9849465d71d61196d1396732bc8670ec80b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa578175038a107cb8e631100c85f9849465d71d61196d1396732bc8670ec80b->enter($__internal_fa578175038a107cb8e631100c85f9849465d71d61196d1396732bc8670ec80b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_1fd2e4d043344fd2fe00cafc0a8b4b6390a3eece9b7114ab482194d0ba794f73->leave($__internal_1fd2e4d043344fd2fe00cafc0a8b4b6390a3eece9b7114ab482194d0ba794f73_prof);

        
        $__internal_fa578175038a107cb8e631100c85f9849465d71d61196d1396732bc8670ec80b->leave($__internal_fa578175038a107cb8e631100c85f9849465d71d61196d1396732bc8670ec80b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_25a9b76dba33253fac2c5dad992f1c09a46558d42d17faf5b7cab62ad9c99a0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25a9b76dba33253fac2c5dad992f1c09a46558d42d17faf5b7cab62ad9c99a0a->enter($__internal_25a9b76dba33253fac2c5dad992f1c09a46558d42d17faf5b7cab62ad9c99a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9247b37932ebef2d32c4e0d7aa3de664acc50ef80bfd209d5e013e0eb0438460 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9247b37932ebef2d32c4e0d7aa3de664acc50ef80bfd209d5e013e0eb0438460->enter($__internal_9247b37932ebef2d32c4e0d7aa3de664acc50ef80bfd209d5e013e0eb0438460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_9247b37932ebef2d32c4e0d7aa3de664acc50ef80bfd209d5e013e0eb0438460->leave($__internal_9247b37932ebef2d32c4e0d7aa3de664acc50ef80bfd209d5e013e0eb0438460_prof);

        
        $__internal_25a9b76dba33253fac2c5dad992f1c09a46558d42d17faf5b7cab62ad9c99a0a->leave($__internal_25a9b76dba33253fac2c5dad992f1c09a46558d42d17faf5b7cab62ad9c99a0a_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_a183c5316f4ad740b4d2aa0927b0c595361c603c39bd5688691f0258a0296efd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a183c5316f4ad740b4d2aa0927b0c595361c603c39bd5688691f0258a0296efd->enter($__internal_a183c5316f4ad740b4d2aa0927b0c595361c603c39bd5688691f0258a0296efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_63ca481ec6d8927deb0c069b8052e46bfb3995d8a84325ad6c147443c0b18325 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63ca481ec6d8927deb0c069b8052e46bfb3995d8a84325ad6c147443c0b18325->enter($__internal_63ca481ec6d8927deb0c069b8052e46bfb3995d8a84325ad6c147443c0b18325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_63ca481ec6d8927deb0c069b8052e46bfb3995d8a84325ad6c147443c0b18325->leave($__internal_63ca481ec6d8927deb0c069b8052e46bfb3995d8a84325ad6c147443c0b18325_prof);

        
        $__internal_a183c5316f4ad740b4d2aa0927b0c595361c603c39bd5688691f0258a0296efd->leave($__internal_a183c5316f4ad740b4d2aa0927b0c595361c603c39bd5688691f0258a0296efd_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_f4806748f361e51247bf5957fc4e6c5632da0abe1ce82840e25701180adf2b8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4806748f361e51247bf5957fc4e6c5632da0abe1ce82840e25701180adf2b8f->enter($__internal_f4806748f361e51247bf5957fc4e6c5632da0abe1ce82840e25701180adf2b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4020dbc2f0782a8b5ed7cda74054e5c9d78584fbf0f6e64a81c1976c920d8d42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4020dbc2f0782a8b5ed7cda74054e5c9d78584fbf0f6e64a81c1976c920d8d42->enter($__internal_4020dbc2f0782a8b5ed7cda74054e5c9d78584fbf0f6e64a81c1976c920d8d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4020dbc2f0782a8b5ed7cda74054e5c9d78584fbf0f6e64a81c1976c920d8d42->leave($__internal_4020dbc2f0782a8b5ed7cda74054e5c9d78584fbf0f6e64a81c1976c920d8d42_prof);

        
        $__internal_f4806748f361e51247bf5957fc4e6c5632da0abe1ce82840e25701180adf2b8f->leave($__internal_f4806748f361e51247bf5957fc4e6c5632da0abe1ce82840e25701180adf2b8f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/axel/www/develops/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
