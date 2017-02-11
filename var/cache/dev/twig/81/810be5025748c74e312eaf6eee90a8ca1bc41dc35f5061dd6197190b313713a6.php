<?php

/* @MwebAdmin/filemanager/include/Response.php */
class __TwigTemplate_dd56acc4c2bbe94721a7868931762d40d99454f35c508b62a0e4fdfc6d89531d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e99df559ac4641ced7f90a53295c06012d8f17987ea900a3008fede8627d8d5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e99df559ac4641ced7f90a53295c06012d8f17987ea900a3008fede8627d8d5e->enter($__internal_e99df559ac4641ced7f90a53295c06012d8f17987ea900a3008fede8627d8d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/include/Response.php"));

        // line 1
        echo "<?php 

/**
 * Class Response
 * Simplified copy of Symfony/Http-Foundation Response
 * to allow compatibility with frameworks
 *
 * @package Filemanager
 */
class Response {

\tconst HTTP_CONTINUE = 100;
\tconst HTTP_SWITCHING_PROTOCOLS = 101;
\tconst HTTP_PROCESSING = 102;            // RFC2518
\tconst HTTP_OK = 200;
\tconst HTTP_CREATED = 201;
\tconst HTTP_ACCEPTED = 202;
\tconst HTTP_NON_AUTHORITATIVE_INFORMATION = 203;
\tconst HTTP_NO_CONTENT = 204;
\tconst HTTP_RESET_CONTENT = 205;
\tconst HTTP_PARTIAL_CONTENT = 206;
\tconst HTTP_MULTI_STATUS = 207;          // RFC4918
\tconst HTTP_ALREADY_REPORTED = 208;      // RFC5842
\tconst HTTP_IM_USED = 226;               // RFC3229
\tconst HTTP_MULTIPLE_CHOICES = 300;
\tconst HTTP_MOVED_PERMANENTLY = 301;
\tconst HTTP_FOUND = 302;
\tconst HTTP_SEE_OTHER = 303;
\tconst HTTP_NOT_MODIFIED = 304;
\tconst HTTP_USE_PROXY = 305;
\tconst HTTP_RESERVED = 306;
\tconst HTTP_TEMPORARY_REDIRECT = 307;
\tconst HTTP_PERMANENTLY_REDIRECT = 308;  // RFC7238
\tconst HTTP_BAD_REQUEST = 400;
\tconst HTTP_UNAUTHORIZED = 401;
\tconst HTTP_PAYMENT_REQUIRED = 402;
\tconst HTTP_FORBIDDEN = 403;
\tconst HTTP_NOT_FOUND = 404;
\tconst HTTP_METHOD_NOT_ALLOWED = 405;
\tconst HTTP_NOT_ACCEPTABLE = 406;
\tconst HTTP_PROXY_AUTHENTICATION_REQUIRED = 407;
\tconst HTTP_REQUEST_TIMEOUT = 408;
\tconst HTTP_CONFLICT = 409;
\tconst HTTP_GONE = 410;
\tconst HTTP_LENGTH_REQUIRED = 411;
\tconst HTTP_PRECONDITION_FAILED = 412;
\tconst HTTP_REQUEST_ENTITY_TOO_LARGE = 413;
\tconst HTTP_REQUEST_URI_TOO_LONG = 414;
\tconst HTTP_UNSUPPORTED_MEDIA_TYPE = 415;
\tconst HTTP_REQUESTED_RANGE_NOT_SATISFIABLE = 416;
\tconst HTTP_EXPECTATION_FAILED = 417;
\tconst HTTP_I_AM_A_TEAPOT = 418;                                               // RFC2324
\tconst HTTP_UNPROCESSABLE_ENTITY = 422;                                        // RFC4918
\tconst HTTP_LOCKED = 423;                                                      // RFC4918
\tconst HTTP_FAILED_DEPENDENCY = 424;                                           // RFC4918
\tconst HTTP_RESERVED_FOR_WEBDAV_ADVANCED_COLLECTIONS_EXPIRED_PROPOSAL = 425;   // RFC2817
\tconst HTTP_UPGRADE_REQUIRED = 426;                                            // RFC2817
\tconst HTTP_PRECONDITION_REQUIRED = 428;                                       // RFC6585
\tconst HTTP_TOO_MANY_REQUESTS = 429;                                           // RFC6585
\tconst HTTP_REQUEST_HEADER_FIELDS_TOO_LARGE = 431;                             // RFC6585
\tconst HTTP_INTERNAL_SERVER_ERROR = 500;
\tconst HTTP_NOT_IMPLEMENTED = 501;
\tconst HTTP_BAD_GATEWAY = 502;
\tconst HTTP_SERVICE_UNAVAILABLE = 503;
\tconst HTTP_GATEWAY_TIMEOUT = 504;
\tconst HTTP_VERSION_NOT_SUPPORTED = 505;
\tconst HTTP_VARIANT_ALSO_NEGOTIATES_EXPERIMENTAL = 506;                        // RFC2295
\tconst HTTP_INSUFFICIENT_STORAGE = 507;                                        // RFC4918
\tconst HTTP_LOOP_DETECTED = 508;                                               // RFC5842
\tconst HTTP_NOT_EXTENDED = 510;                                                // RFC2774
\tconst HTTP_NETWORK_AUTHENTICATION_REQUIRED = 511;                             // RFC6585

\t/**
\t * Status codes translation table.
\t *
\t * The list of codes is complete according to the
\t * {@link http://www.iana.org/assignments/http-status-codes/ Hypertext Transfer Protocol (HTTP) Status Code Registry}
\t * (last updated 2012-02-13).
\t *
\t * Unless otherwise noted, the status code is defined in RFC2616.
\t *
\t * @var array
\t */
\tpublic static \$statusTexts = array(
\t\t100 => 'Continue',
\t\t101 => 'Switching Protocols',
\t\t102 => 'Processing',            // RFC2518
\t\t200 => 'OK',
\t\t201 => 'Created',
\t\t202 => 'Accepted',
\t\t203 => 'Non-Authoritative Information',
\t\t204 => 'No Content',
\t\t205 => 'Reset Content',
\t\t206 => 'Partial Content',
\t\t207 => 'Multi-Status',          // RFC4918
\t\t208 => 'Already Reported',      // RFC5842
\t\t226 => 'IM Used',               // RFC3229
\t\t300 => 'Multiple Choices',
\t\t301 => 'Moved Permanently',
\t\t302 => 'Found',
\t\t303 => 'See Other',
\t\t304 => 'Not Modified',
\t\t305 => 'Use Proxy',
\t\t306 => 'Reserved',
\t\t307 => 'Temporary Redirect',
\t\t308 => 'Permanent Redirect',    // RFC7238
\t\t400 => 'Bad Request',
\t\t401 => 'Unauthorized',
\t\t402 => 'Payment Required',
\t\t403 => 'Forbidden',
\t\t404 => 'Not Found',
\t\t405 => 'Method Not Allowed',
\t\t406 => 'Not Acceptable',
\t\t407 => 'Proxy Authentication Required',
\t\t408 => 'Request Timeout',
\t\t409 => 'Conflict',
\t\t410 => 'Gone',
\t\t411 => 'Length Required',
\t\t412 => 'Precondition Failed',
\t\t413 => 'Request Entity Too Large',
\t\t414 => 'Request-URI Too Long',
\t\t415 => 'Unsupported Media Type',
\t\t416 => 'Requested Range Not Satisfiable',
\t\t417 => 'Expectation Failed',
\t\t418 => 'I\\'m a teapot',                                               // RFC2324
\t\t422 => 'Unprocessable Entity',                                        // RFC4918
\t\t423 => 'Locked',                                                      // RFC4918
\t\t424 => 'Failed Dependency',                                           // RFC4918
\t\t425 => 'Reserved for WebDAV advanced collections expired proposal',   // RFC2817
\t\t426 => 'Upgrade Required',                                            // RFC2817
\t\t428 => 'Precondition Required',                                       // RFC6585
\t\t429 => 'Too Many Requests',                                           // RFC6585
\t\t431 => 'Request Header Fields Too Large',                             // RFC6585
\t\t500 => 'Internal Server Error',
\t\t501 => 'Not Implemented',
\t\t502 => 'Bad Gateway',
\t\t503 => 'Service Unavailable',
\t\t504 => 'Gateway Timeout',
\t\t505 => 'HTTP Version Not Supported',
\t\t506 => 'Variant Also Negotiates (Experimental)',                      // RFC2295
\t\t507 => 'Insufficient Storage',                                        // RFC4918
\t\t508 => 'Loop Detected',                                               // RFC5842
\t\t510 => 'Not Extended',                                                // RFC2774
\t\t511 => 'Network Authentication Required',                             // RFC6585
\t);

\t/**
\t * @var  string
\t */
\tprotected \$content;

\t/**
\t * @var  int
\t */
\tprotected \$statusCode;

\t/**
\t * @var  string
\t */
\tprotected \$statusText;

\t/**
\t * @var  array
\t */
\tpublic \$headers;

\t/**
\t * @var string
\t */
\tprotected \$version;

\t/**
\t * Construct the response
\t *
\t * @param  mixed  \$content
\t * @param  int    \$statusCode
\t * @param  array  \$headers
\t */
\tpublic function __construct(\$content = '', \$statusCode = 200, \$headers = array())
\t{
\t\t\$this->setContent(\$content);
\t\t\$this->setStatusCode(\$statusCode);
\t\t\$this->headers = \$headers;
\t\t\$this->version = '1.1';
\t}

\t/**
\t * Set the content on the response.
\t *
\t * @param  mixed  \$content
\t * @return \$this
\t */
\tpublic function setContent(\$content)
\t{
\t\tif (\$content instanceof ArrayObject || is_array(\$content))
\t\t{
\t\t\t\$this->headers['Content-Type'] = array('application/json');

\t\t\t\$content = json_encode(\$content);
\t\t}

\t\t\$this->content = \$content;
\t}

\t/**
\t * Returns the Response as an HTTP string.
\t *
\t * The string representation of the Response is the same as the
\t * one that will be sent to the client only if the prepare() method
\t * has been called before.
\t *
\t * @return string The Response as an HTTP string
\t *
\t * @see prepare()
\t */
\tpublic function __toString()
\t{
\t\treturn
\t\t\tsprintf('HTTP/%s %s %s', \$this->version, \$this->statusCode, \$this->statusText).\"\\r\\n\".
\t\t\t\$this->headers.\"\\r\\n\".
\t\t\t\$this->getContent();
\t}

\t/**
\t * Sets the response status code.
\t *
\t * @param int   \$code HTTP status code
\t * @param mixed \$text HTTP status text
\t *
\t * If the status text is null it will be automatically populated for the known
\t * status codes and left empty otherwise.
\t *
\t * @return Response
\t *
\t * @throws \\InvalidArgumentException When the HTTP status code is not valid
\t *
\t * @api
\t */
\tpublic function setStatusCode(\$code, \$text = null)
\t{
\t\t\$this->statusCode = \$code = (int) \$code;
\t\tif (\$this->isInvalid()) {
\t\t\tthrow new InvalidArgumentException(sprintf('The HTTP status code \"%s\" is not valid.', \$code));
\t\t}

\t\tif (null === \$text) {
\t\t\t\$this->statusText = isset(self::\$statusTexts[\$code]) ? self::\$statusTexts[\$code] : '';

\t\t\treturn \$this;
\t\t}

\t\tif (false === \$text) {
\t\t\t\$this->statusText = '';

\t\t\treturn \$this;
\t\t}

\t\t\$this->statusText = \$text;

\t\treturn \$this;
\t}

\t// http://www.w3.org/Protocols/rfc2616/rfc2616-sec10.html
\t/**
\t * Is response invalid?
\t *
\t * @return bool
\t *
\t * @api
\t */
\tpublic function isInvalid()
\t{
\t\treturn \$this->statusCode < 100 || \$this->statusCode >= 600;
\t}

\t/**
\t * Set a header on the Response.
\t *
\t * @param string \$key
\t * @param string \$value
\t * @param bool \$replace
\t * @return \$this
\t */
\tpublic function header(\$key, \$value, \$replace = true)
\t{
\t\tif (empty(\$this->headers[\$key]))
\t\t{
\t\t\t\$this->headers[\$key] = array();
\t\t}
\t\tif (\$replace)
\t\t{
\t\t\t\$this->headers[\$key] = array(\$value);
\t\t}
\t\telse
\t\t{
\t\t\t\$this->headers[\$key][] = \$value;
\t\t}

\t\treturn \$this;
\t}

\t/**
\t * Sends HTTP headers and content.
\t *
\t * @return Response
\t *
\t * @api
\t */
\tpublic function send()
\t{
\t\t\$this->sendHeaders();
\t\t\$this->sendContent();

\t\tif (function_exists('fastcgi_finish_request')) {
\t\t\tfastcgi_finish_request();
\t\t}

\t\treturn \$this;
\t}

\t/**
\t * Sends content for the current web response.
\t *
\t * @return Response
\t */
\tpublic function sendContent()
\t{
\t\techo \$this->content;

\t\treturn \$this;
\t}

\t/**
\t * Sends HTTP headers.
\t *
\t * @return Response
\t */
\tpublic function sendHeaders()
\t{
\t\t// headers have already been sent by the developer
\t\tif (headers_sent()) {
\t\t\treturn \$this;
\t\t}

\t\t// status
\t\theader(sprintf('HTTP/%s %s %s', \$this->version, \$this->statusCode, \$this->statusText), true, \$this->statusCode);

\t\t// headers
\t\tforeach (\$this->headers as \$name => \$values) {
\t\t\tif (is_array(\$values))
\t\t\t{
\t\t\t\tforeach (\$values as \$value)
\t\t\t\t{
\t\t\t\t\theader(\$name . ': ' . \$value, false, \$this->statusCode);
\t\t\t\t}
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\theader(\$name . ': ' . \$values, false, \$this->statusCode);
\t\t\t}
\t\t}

\t\treturn \$this;
\t}
}";
        
        $__internal_e99df559ac4641ced7f90a53295c06012d8f17987ea900a3008fede8627d8d5e->leave($__internal_e99df559ac4641ced7f90a53295c06012d8f17987ea900a3008fede8627d8d5e_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/include/Response.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php 

/**
 * Class Response
 * Simplified copy of Symfony/Http-Foundation Response
 * to allow compatibility with frameworks
 *
 * @package Filemanager
 */
class Response {

\tconst HTTP_CONTINUE = 100;
\tconst HTTP_SWITCHING_PROTOCOLS = 101;
\tconst HTTP_PROCESSING = 102;            // RFC2518
\tconst HTTP_OK = 200;
\tconst HTTP_CREATED = 201;
\tconst HTTP_ACCEPTED = 202;
\tconst HTTP_NON_AUTHORITATIVE_INFORMATION = 203;
\tconst HTTP_NO_CONTENT = 204;
\tconst HTTP_RESET_CONTENT = 205;
\tconst HTTP_PARTIAL_CONTENT = 206;
\tconst HTTP_MULTI_STATUS = 207;          // RFC4918
\tconst HTTP_ALREADY_REPORTED = 208;      // RFC5842
\tconst HTTP_IM_USED = 226;               // RFC3229
\tconst HTTP_MULTIPLE_CHOICES = 300;
\tconst HTTP_MOVED_PERMANENTLY = 301;
\tconst HTTP_FOUND = 302;
\tconst HTTP_SEE_OTHER = 303;
\tconst HTTP_NOT_MODIFIED = 304;
\tconst HTTP_USE_PROXY = 305;
\tconst HTTP_RESERVED = 306;
\tconst HTTP_TEMPORARY_REDIRECT = 307;
\tconst HTTP_PERMANENTLY_REDIRECT = 308;  // RFC7238
\tconst HTTP_BAD_REQUEST = 400;
\tconst HTTP_UNAUTHORIZED = 401;
\tconst HTTP_PAYMENT_REQUIRED = 402;
\tconst HTTP_FORBIDDEN = 403;
\tconst HTTP_NOT_FOUND = 404;
\tconst HTTP_METHOD_NOT_ALLOWED = 405;
\tconst HTTP_NOT_ACCEPTABLE = 406;
\tconst HTTP_PROXY_AUTHENTICATION_REQUIRED = 407;
\tconst HTTP_REQUEST_TIMEOUT = 408;
\tconst HTTP_CONFLICT = 409;
\tconst HTTP_GONE = 410;
\tconst HTTP_LENGTH_REQUIRED = 411;
\tconst HTTP_PRECONDITION_FAILED = 412;
\tconst HTTP_REQUEST_ENTITY_TOO_LARGE = 413;
\tconst HTTP_REQUEST_URI_TOO_LONG = 414;
\tconst HTTP_UNSUPPORTED_MEDIA_TYPE = 415;
\tconst HTTP_REQUESTED_RANGE_NOT_SATISFIABLE = 416;
\tconst HTTP_EXPECTATION_FAILED = 417;
\tconst HTTP_I_AM_A_TEAPOT = 418;                                               // RFC2324
\tconst HTTP_UNPROCESSABLE_ENTITY = 422;                                        // RFC4918
\tconst HTTP_LOCKED = 423;                                                      // RFC4918
\tconst HTTP_FAILED_DEPENDENCY = 424;                                           // RFC4918
\tconst HTTP_RESERVED_FOR_WEBDAV_ADVANCED_COLLECTIONS_EXPIRED_PROPOSAL = 425;   // RFC2817
\tconst HTTP_UPGRADE_REQUIRED = 426;                                            // RFC2817
\tconst HTTP_PRECONDITION_REQUIRED = 428;                                       // RFC6585
\tconst HTTP_TOO_MANY_REQUESTS = 429;                                           // RFC6585
\tconst HTTP_REQUEST_HEADER_FIELDS_TOO_LARGE = 431;                             // RFC6585
\tconst HTTP_INTERNAL_SERVER_ERROR = 500;
\tconst HTTP_NOT_IMPLEMENTED = 501;
\tconst HTTP_BAD_GATEWAY = 502;
\tconst HTTP_SERVICE_UNAVAILABLE = 503;
\tconst HTTP_GATEWAY_TIMEOUT = 504;
\tconst HTTP_VERSION_NOT_SUPPORTED = 505;
\tconst HTTP_VARIANT_ALSO_NEGOTIATES_EXPERIMENTAL = 506;                        // RFC2295
\tconst HTTP_INSUFFICIENT_STORAGE = 507;                                        // RFC4918
\tconst HTTP_LOOP_DETECTED = 508;                                               // RFC5842
\tconst HTTP_NOT_EXTENDED = 510;                                                // RFC2774
\tconst HTTP_NETWORK_AUTHENTICATION_REQUIRED = 511;                             // RFC6585

\t/**
\t * Status codes translation table.
\t *
\t * The list of codes is complete according to the
\t * {@link http://www.iana.org/assignments/http-status-codes/ Hypertext Transfer Protocol (HTTP) Status Code Registry}
\t * (last updated 2012-02-13).
\t *
\t * Unless otherwise noted, the status code is defined in RFC2616.
\t *
\t * @var array
\t */
\tpublic static \$statusTexts = array(
\t\t100 => 'Continue',
\t\t101 => 'Switching Protocols',
\t\t102 => 'Processing',            // RFC2518
\t\t200 => 'OK',
\t\t201 => 'Created',
\t\t202 => 'Accepted',
\t\t203 => 'Non-Authoritative Information',
\t\t204 => 'No Content',
\t\t205 => 'Reset Content',
\t\t206 => 'Partial Content',
\t\t207 => 'Multi-Status',          // RFC4918
\t\t208 => 'Already Reported',      // RFC5842
\t\t226 => 'IM Used',               // RFC3229
\t\t300 => 'Multiple Choices',
\t\t301 => 'Moved Permanently',
\t\t302 => 'Found',
\t\t303 => 'See Other',
\t\t304 => 'Not Modified',
\t\t305 => 'Use Proxy',
\t\t306 => 'Reserved',
\t\t307 => 'Temporary Redirect',
\t\t308 => 'Permanent Redirect',    // RFC7238
\t\t400 => 'Bad Request',
\t\t401 => 'Unauthorized',
\t\t402 => 'Payment Required',
\t\t403 => 'Forbidden',
\t\t404 => 'Not Found',
\t\t405 => 'Method Not Allowed',
\t\t406 => 'Not Acceptable',
\t\t407 => 'Proxy Authentication Required',
\t\t408 => 'Request Timeout',
\t\t409 => 'Conflict',
\t\t410 => 'Gone',
\t\t411 => 'Length Required',
\t\t412 => 'Precondition Failed',
\t\t413 => 'Request Entity Too Large',
\t\t414 => 'Request-URI Too Long',
\t\t415 => 'Unsupported Media Type',
\t\t416 => 'Requested Range Not Satisfiable',
\t\t417 => 'Expectation Failed',
\t\t418 => 'I\\'m a teapot',                                               // RFC2324
\t\t422 => 'Unprocessable Entity',                                        // RFC4918
\t\t423 => 'Locked',                                                      // RFC4918
\t\t424 => 'Failed Dependency',                                           // RFC4918
\t\t425 => 'Reserved for WebDAV advanced collections expired proposal',   // RFC2817
\t\t426 => 'Upgrade Required',                                            // RFC2817
\t\t428 => 'Precondition Required',                                       // RFC6585
\t\t429 => 'Too Many Requests',                                           // RFC6585
\t\t431 => 'Request Header Fields Too Large',                             // RFC6585
\t\t500 => 'Internal Server Error',
\t\t501 => 'Not Implemented',
\t\t502 => 'Bad Gateway',
\t\t503 => 'Service Unavailable',
\t\t504 => 'Gateway Timeout',
\t\t505 => 'HTTP Version Not Supported',
\t\t506 => 'Variant Also Negotiates (Experimental)',                      // RFC2295
\t\t507 => 'Insufficient Storage',                                        // RFC4918
\t\t508 => 'Loop Detected',                                               // RFC5842
\t\t510 => 'Not Extended',                                                // RFC2774
\t\t511 => 'Network Authentication Required',                             // RFC6585
\t);

\t/**
\t * @var  string
\t */
\tprotected \$content;

\t/**
\t * @var  int
\t */
\tprotected \$statusCode;

\t/**
\t * @var  string
\t */
\tprotected \$statusText;

\t/**
\t * @var  array
\t */
\tpublic \$headers;

\t/**
\t * @var string
\t */
\tprotected \$version;

\t/**
\t * Construct the response
\t *
\t * @param  mixed  \$content
\t * @param  int    \$statusCode
\t * @param  array  \$headers
\t */
\tpublic function __construct(\$content = '', \$statusCode = 200, \$headers = array())
\t{
\t\t\$this->setContent(\$content);
\t\t\$this->setStatusCode(\$statusCode);
\t\t\$this->headers = \$headers;
\t\t\$this->version = '1.1';
\t}

\t/**
\t * Set the content on the response.
\t *
\t * @param  mixed  \$content
\t * @return \$this
\t */
\tpublic function setContent(\$content)
\t{
\t\tif (\$content instanceof ArrayObject || is_array(\$content))
\t\t{
\t\t\t\$this->headers['Content-Type'] = array('application/json');

\t\t\t\$content = json_encode(\$content);
\t\t}

\t\t\$this->content = \$content;
\t}

\t/**
\t * Returns the Response as an HTTP string.
\t *
\t * The string representation of the Response is the same as the
\t * one that will be sent to the client only if the prepare() method
\t * has been called before.
\t *
\t * @return string The Response as an HTTP string
\t *
\t * @see prepare()
\t */
\tpublic function __toString()
\t{
\t\treturn
\t\t\tsprintf('HTTP/%s %s %s', \$this->version, \$this->statusCode, \$this->statusText).\"\\r\\n\".
\t\t\t\$this->headers.\"\\r\\n\".
\t\t\t\$this->getContent();
\t}

\t/**
\t * Sets the response status code.
\t *
\t * @param int   \$code HTTP status code
\t * @param mixed \$text HTTP status text
\t *
\t * If the status text is null it will be automatically populated for the known
\t * status codes and left empty otherwise.
\t *
\t * @return Response
\t *
\t * @throws \\InvalidArgumentException When the HTTP status code is not valid
\t *
\t * @api
\t */
\tpublic function setStatusCode(\$code, \$text = null)
\t{
\t\t\$this->statusCode = \$code = (int) \$code;
\t\tif (\$this->isInvalid()) {
\t\t\tthrow new InvalidArgumentException(sprintf('The HTTP status code \"%s\" is not valid.', \$code));
\t\t}

\t\tif (null === \$text) {
\t\t\t\$this->statusText = isset(self::\$statusTexts[\$code]) ? self::\$statusTexts[\$code] : '';

\t\t\treturn \$this;
\t\t}

\t\tif (false === \$text) {
\t\t\t\$this->statusText = '';

\t\t\treturn \$this;
\t\t}

\t\t\$this->statusText = \$text;

\t\treturn \$this;
\t}

\t// http://www.w3.org/Protocols/rfc2616/rfc2616-sec10.html
\t/**
\t * Is response invalid?
\t *
\t * @return bool
\t *
\t * @api
\t */
\tpublic function isInvalid()
\t{
\t\treturn \$this->statusCode < 100 || \$this->statusCode >= 600;
\t}

\t/**
\t * Set a header on the Response.
\t *
\t * @param string \$key
\t * @param string \$value
\t * @param bool \$replace
\t * @return \$this
\t */
\tpublic function header(\$key, \$value, \$replace = true)
\t{
\t\tif (empty(\$this->headers[\$key]))
\t\t{
\t\t\t\$this->headers[\$key] = array();
\t\t}
\t\tif (\$replace)
\t\t{
\t\t\t\$this->headers[\$key] = array(\$value);
\t\t}
\t\telse
\t\t{
\t\t\t\$this->headers[\$key][] = \$value;
\t\t}

\t\treturn \$this;
\t}

\t/**
\t * Sends HTTP headers and content.
\t *
\t * @return Response
\t *
\t * @api
\t */
\tpublic function send()
\t{
\t\t\$this->sendHeaders();
\t\t\$this->sendContent();

\t\tif (function_exists('fastcgi_finish_request')) {
\t\t\tfastcgi_finish_request();
\t\t}

\t\treturn \$this;
\t}

\t/**
\t * Sends content for the current web response.
\t *
\t * @return Response
\t */
\tpublic function sendContent()
\t{
\t\techo \$this->content;

\t\treturn \$this;
\t}

\t/**
\t * Sends HTTP headers.
\t *
\t * @return Response
\t */
\tpublic function sendHeaders()
\t{
\t\t// headers have already been sent by the developer
\t\tif (headers_sent()) {
\t\t\treturn \$this;
\t\t}

\t\t// status
\t\theader(sprintf('HTTP/%s %s %s', \$this->version, \$this->statusCode, \$this->statusText), true, \$this->statusCode);

\t\t// headers
\t\tforeach (\$this->headers as \$name => \$values) {
\t\t\tif (is_array(\$values))
\t\t\t{
\t\t\t\tforeach (\$values as \$value)
\t\t\t\t{
\t\t\t\t\theader(\$name . ': ' . \$value, false, \$this->statusCode);
\t\t\t\t}
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\theader(\$name . ': ' . \$values, false, \$this->statusCode);
\t\t\t}
\t\t}

\t\treturn \$this;
\t}
}", "@MwebAdmin/filemanager/include/Response.php", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/include/Response.php");
    }
}
