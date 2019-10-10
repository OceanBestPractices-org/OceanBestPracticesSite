<?php

use MailPoetVendor\Twig\Environment;
use MailPoetVendor\Twig\Error\LoaderError;
use MailPoetVendor\Twig\Error\RuntimeError;
use MailPoetVendor\Twig\Markup;
use MailPoetVendor\Twig\Sandbox\SecurityError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedTagError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedFilterError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedFunctionError;
use MailPoetVendor\Twig\Source;
use MailPoetVendor\Twig\Template;

/* layout.html */
class __TwigTemplate_64856f05e47f045bb567eb650d42e8f9dd617837e8e1f54c42c9299009ab5b4c extends \MailPoetVendor\Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'templates' => [$this, 'block_templates'],
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'after_css' => [$this, 'block_after_css'],
            'translations' => [$this, 'block_translations'],
            'after_translations' => [$this, 'block_after_translations'],
            'after_javascript' => [$this, 'block_after_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        if (($context["sub_menu"] ?? null)) {
            // line 2
            echo "<script type=\"text/javascript\">
jQuery('.toplevel_page_mailpoet-newsletters.menu-top-last')
  .addClass('wp-has-current-submenu')
  .find('a[href\$=\"";
            // line 5
            echo \MailPoetVendor\twig_escape_filter($this->env, ($context["sub_menu"] ?? null), "html", null, true);
            echo "\"]')
  .addClass('current')
  .parent()
  .addClass('current');
</script>
";
        }
        // line 11
        echo "
<!-- system notices -->
<div id=\"mailpoet_notice_system\" class=\"mailpoet_notice\" style=\"display:none;\"></div>

<!-- handlebars templates -->
";
        // line 16
        $this->displayBlock('templates', $context, $blocks);
        // line 17
        echo "
<!-- main container -->
<div class=\"wrap\">
  <!-- notices -->
  <div id=\"mailpoet_notice_error\" class=\"mailpoet_notice\" style=\"display:none;\"></div>
  <div id=\"mailpoet_notice_success\" class=\"mailpoet_notice\" style=\"display:none;\"></div>
  <!-- React notices -->
  <div id=\"mailpoet_notices\"></div>

  <!-- title block -->
  ";
        // line 27
        $this->displayBlock('title', $context, $blocks);
        // line 28
        echo "  <!-- content block -->
  ";
        // line 29
        $this->displayBlock('content', $context, $blocks);
        // line 30
        echo "</div>

<!-- stylesheets -->
";
        // line 33
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateStylesheet("admin.css");
        // line 35
        echo "

";
        // line 37
        echo do_action("mailpoet_styles_admin_after");
        echo "

<!-- rtl specific stylesheet -->
";
        // line 40
        if ($this->env->getExtension('MailPoet\Twig\Functions')->isRtl()) {
            // line 41
            echo "  ";
            echo $this->env->getExtension('MailPoet\Twig\Assets')->generateStylesheet("rtl.css");
            echo "
";
        }
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('after_css', $context, $blocks);
        // line 45
        echo "
<script type=\"text/javascript\">
  var mailpoet_date_format = \"";
        // line 47
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\Functions')->getWPDateTimeFormat(), "js"), "html", null, true);
        echo "\";
  var mailpoet_time_format = \"";
        // line 48
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\Functions')->getWPTimeFormat(), "js"), "html", null, true);
        echo "\";
  var mailpoet_version = \"";
        // line 49
        echo $this->env->getExtension('MailPoet\Twig\Functions')->getMailPoetVersion();
        echo "\";
  var mailpoet_locale = \"";
        // line 50
        echo $this->env->getExtension('MailPoet\Twig\Functions')->getTwoLettersLocale();
        echo "\";
  var mailpoet_polls_data = ";
        // line 51
        echo json_encode($this->env->getExtension('MailPoet\Twig\Polls')->getPollsData());
        echo ";
  var mailpoet_polls_visibility = ";
        // line 52
        echo json_encode($this->env->getExtension('MailPoet\Twig\Polls')->getPollsVisibility());
        echo ";
  var mailpoet_premium_version = ";
        // line 53
        echo json_encode($this->env->getExtension('MailPoet\Twig\Functions')->getMailPoetPremiumVersion());
        echo ";
  var mailpoet_analytics_enabled = ";
        // line 54
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_jsonencode_filter(call_user_func_array($this->env->getFunction('is_analytics_enabled')->getCallable(), [])), "html", null, true);
        echo ";
  var mailpoet_analytics_data = ";
        // line 55
        echo json_encode(call_user_func_array($this->env->getFunction('get_analytics_data')->getCallable(), []));
        echo ";
  var mailpoet_analytics_public_id = ";
        // line 56
        echo json_encode(call_user_func_array($this->env->getFunction('get_analytics_public_id')->getCallable(), []));
        echo ";
  var mailpoet_analytics_new_public_id = ";
        // line 57
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_jsonencode_filter(call_user_func_array($this->env->getFunction('is_analytics_public_id_new')->getCallable(), [])), "html", null, true);
        echo ";
  var mailpoet_free_domains = ";
        // line 58
        echo json_encode($this->env->getExtension('MailPoet\Twig\Functions')->getFreeDomains());
        echo ";
  var mailpoet_woocommerce_active = ";
        // line 59
        echo json_encode($this->env->getExtension('MailPoet\Twig\Functions')->isWoocommerceActive());
        echo ";
  // RFC 5322 standard; http://emailregex.com/ combined with https://google.github.io/closure-library/api/goog.format.EmailAddress.html#isValid
  var mailpoet_email_regex = /(?=^[+a-zA-Z0-9_.!#\$%&'*\\/=?^`{|}~-]+@([a-zA-Z0-9-]+\\.)+[a-zA-Z0-9]{2,63}\$)(?=^(([^<>()\\[\\]\\\\.,;:\\s@\"]+(\\.[^<>()\\[\\]\\\\.,;:\\s@\"]+)*)|(\".+\"))@((\\[[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}])|(([a-zA-Z\\-0-9]+\\.)+[a-zA-Z]{2,})))/;
  var mailpoet_feature_flags = ";
        // line 62
        echo json_encode(($context["feature_flags"] ?? null));
        echo ";
  var mailpoet_referral_id = ";
        // line 63
        echo json_encode(($context["referral_id"] ?? null));
        echo ";
</script>

<!-- javascripts -->
";
        // line 67
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateJavascript("vendor.js", "mailpoet.js");
        // line 70
        echo "

";
        // line 72
        echo $this->env->getExtension('MailPoet\Twig\I18n')->localize(["ajaxFailedErrorMessage" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("An error has happened while performing a request, the server has responded with response code %d"), "senderEmailAddressWarning1" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("You might not reach the inbox of your subscribers if you use this email address.", "In the last step, before sending a newsletter. URL: ?page=mailpoet-newsletters#/send/2"), "senderEmailAddressWarning2" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Use an address like %suggested for the Sender and put %originalSender in the <em>Reply-to</em> field below.", "In the last step, before sending a newsletter. URL: ?page=mailpoet-newsletters#/send/2"), "senderEmailAddressWarning3" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Read more."), "mailerSendingResumedNotice" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Sending has been resumed.")]);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('translations', $context, $blocks);
        // line 80
        echo "
";
        // line 81
        $this->displayBlock('after_translations', $context, $blocks);
        // line 82
        echo "
";
        // line 83
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateJavascript("admin_vendor_chunk.js", "admin_vendor.js");
        // line 86
        echo "

";
        // line 88
        echo do_action("mailpoet_scripts_admin_before");
        echo "

";
        // line 90
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateJavascript("admin.js");
        // line 92
        echo "

";
        // line 94
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateJavascript("lib/analytics.js");
        echo "

";
        // line 96
        $context["has_valid_premium_key"] = $this->env->getExtension('MailPoet\Twig\Functions')->hasValidPremiumKey();
        // line 97
        echo "
";
        // line 98
        $context["helpscout_form_id"] = "1c666cab-c0f6-4614-bc06-e5d0ad78db2b";
        // line 99
        if (($context["has_valid_premium_key"] ?? null)) {
            // line 100
            echo "  ";
            $context["helpscout_form_id"] = "e93d0423-1fa6-4bbc-9df9-c174f823c35f";
        }
        // line 102
        echo "
<script type=\"text/javascript\">!function(e,t,n){function a(){var e=t.getElementsByTagName(\"script\")[0],n=t.createElement(\"script\");n.type=\"text/javascript\",n.async=!0,n.src=\"https://beacon-v2.helpscout.net\",e.parentNode.insertBefore(n,e)}if(e.Beacon=n=function(t,n,a){e.Beacon.readyQueue.push({method:t,options:n,data:a})},n.readyQueue=[],\"complete\"===t.readyState)return a();e.attachEvent?e.attachEvent(\"onload\",a):e.addEventListener(\"load\",a,!1)}(window,document,window.Beacon||function(){});</script>

<script type=\"text/javascript\"></script>

<script type=\"text/javascript\">
  if(window['Beacon'] !== undefined) {
    window.Beacon('init', '";
        // line 109
        echo \MailPoetVendor\twig_escape_filter($this->env, ($context["helpscout_form_id"] ?? null), "html", null, true);
        echo "');

    // HelpScout Beacon: Configuration
    window.Beacon(\"config\", {
      icon: 'message',
      zIndex: 50000,
      instructions: \"";
        // line 115
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Want to give feedback to the MailPoet team? Contact us here. Please provide as much information as possible!");
        echo "\",
      showContactFields: true
    });

    // HelpScout Beacon: Custom information
    window.Beacon(\"identify\",
      ";
        // line 121
        echo json_encode(\MailPoet\Helpscout\Beacon::getData());
        echo "
    );
  }
</script>
<script>
  Parsley.addMessages('mailpoet', {
    defaultMessage: '";
        // line 127
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("This value seems to be invalid.");
        echo "',
    type: {
      email: '";
        // line 129
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("This value should be a valid email.");
        echo "',
      url: '";
        // line 130
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("This value should be a valid url.");
        echo "',
      number: '";
        // line 131
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("This value should be a valid number.");
        echo "',
      integer: '";
        // line 132
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("This value should be a valid integer.");
        echo "',
      digits: '";
        // line 133
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("This value should be digits.");
        echo "',
      alphanum: '";
        // line 134
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("This value should be alphanumeric.");
        echo "'
    },
    notblank: '";
        // line 136
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("This value should not be blank.");
        echo "',
    required: '";
        // line 137
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("This value is required.");
        echo "',
    pattern: '";
        // line 138
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("This value seems to be invalid.");
        echo "',
    min: '";
        // line 139
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("This value should be greater than or equal to %s.");
        echo "',
    max: '";
        // line 140
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("This value should be lower than or equal to %s.");
        echo "',
    range: '";
        // line 141
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("This value should be between %s and %s.");
        echo "',
    minlength: '";
        // line 142
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("This value is too short. It should have %s characters or more.");
        echo "',
    maxlength: '";
        // line 143
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("This value is too long. It should have %s characters or fewer.");
        echo "',
    length: '";
        // line 144
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("This value length is invalid. It should be between %s and %s characters long.");
        echo "',
    mincheck: '";
        // line 145
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("You must select at least %s choices.");
        echo "',
    maxcheck: '";
        // line 146
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("You must select %s choices or fewer.");
        echo "',
    check: '";
        // line 147
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("You must select between %s and %s choices.");
        echo "',
    equalto: '";
        // line 148
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("This value should be the same.");
        echo "'
  });

  Parsley.setLocale('mailpoet');
</script>
";
        // line 153
        $this->displayBlock('after_javascript', $context, $blocks);
    }

    // line 16
    public function block_templates($context, array $blocks = [])
    {
    }

    // line 27
    public function block_title($context, array $blocks = [])
    {
    }

    // line 29
    public function block_content($context, array $blocks = [])
    {
    }

    // line 44
    public function block_after_css($context, array $blocks = [])
    {
    }

    // line 79
    public function block_translations($context, array $blocks = [])
    {
    }

    // line 81
    public function block_after_translations($context, array $blocks = [])
    {
    }

    // line 153
    public function block_after_javascript($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  392 => 153,  387 => 81,  382 => 79,  377 => 44,  372 => 29,  367 => 27,  362 => 16,  358 => 153,  350 => 148,  346 => 147,  342 => 146,  338 => 145,  334 => 144,  330 => 143,  326 => 142,  322 => 141,  318 => 140,  314 => 139,  310 => 138,  306 => 137,  302 => 136,  297 => 134,  293 => 133,  289 => 132,  285 => 131,  281 => 130,  277 => 129,  272 => 127,  263 => 121,  254 => 115,  245 => 109,  236 => 102,  232 => 100,  230 => 99,  228 => 98,  225 => 97,  223 => 96,  218 => 94,  214 => 92,  212 => 90,  207 => 88,  203 => 86,  201 => 83,  198 => 82,  196 => 81,  193 => 80,  191 => 79,  188 => 78,  186 => 72,  182 => 70,  180 => 67,  173 => 63,  169 => 62,  163 => 59,  159 => 58,  155 => 57,  151 => 56,  147 => 55,  143 => 54,  139 => 53,  135 => 52,  131 => 51,  127 => 50,  123 => 49,  119 => 48,  115 => 47,  111 => 45,  109 => 44,  106 => 43,  100 => 41,  98 => 40,  92 => 37,  88 => 35,  86 => 33,  81 => 30,  79 => 29,  76 => 28,  74 => 27,  62 => 17,  60 => 16,  53 => 11,  44 => 5,  39 => 2,  37 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "layout.html", "/var/www/obps/wp-content/plugins/mailpoet/views/layout.html");
    }
}
