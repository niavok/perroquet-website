<?php

/**
 * XML-parsing classes to wrap the domxml and DOM extensions for PHP 4
 * and 5, respectively.
 *
 * @package Yadis
 */

/**
 * The base class for wrappers for available PHP XML-parsing
 * extensions.  To work with this Yadis library, subclasses of this
 * class MUST implement the API as defined in the remarks for this
 * class.  Subclasses of Services_Yadis_XMLParser are used to wrap
 * particular PHP XML extensions such as 'domxml'.  These are used
 * internally by the library depending on the availability of
 * supported PHP XML extensions.
 *
 * @package Yadis
 */
class Services_Yadis_XMLParser {
    /**
     * Initialize an instance of Services_Yadis_XMLParser with some
     * XML and namespaces.  This SHOULD NOT be overridden by
     * subclasses.
     *
     * @param string $xml_string A string of XML to be parsed.
     * @param array $namespace_map An array of ($ns_name => $ns_uri)
     * to be registered with the XML parser.  May be empty.
     * @return boolean $result True if the initialization and
     * namespace registration(s) succeeded; false otherwise.
     */
    function init($xml_string, $namespace_map)
    {
        if (!$this->setXML($xml_string)) {
            return false;
        }

        foreach ($namespace_map as $prefix => $uri) {
            if (!$this->registerNamespace($prefix, $uri)) {
                return false;
            }
        }

        return true;
    }

    /**
     * Register a namespace with the XML parser.  This should be
     * overridden by subclasses.
     *
     * @param string $prefix The namespace prefix to appear in XML tag
     * names.
     *
     * @param string $uri The namespace URI to be used to identify the
     * namespace in the XML.
     *
     * @return boolean $result True if the registration succeeded;
     * false otherwise.
     */
    function registerNamespace($prefix, $uri)
    {
        // Not implemented.
    }

    /**
     * Set this parser object's XML payload.  This should be
     * overridden by subclasses.
     *
     * @param string $xml_string The XML string to pass to this
     * object's XML parser.
     *
     * @return boolean $result True if the initialization succeeded;
     * false otherwise.
     */
    function setXML($xml_string)
    {
        // Not implemented.
    }

    /**
     * Evaluate an XPath expression and return the resulting node
     * list.  This should be overridden by subclasses.
     *
     * @param string $xpath The XPath expression to be evaluated.
     *
     * @param mixed $node A node object resulting from a previous
     * evalXPath call.  This node, if specified, provides the context
     * for the evaluation of this xpath expression.
     *
     * @return array $node_list An array of matching opaque node
     * objects to be used with other methods of this parser class.
     */
    function evalXPath($xpath, $node = null)
    {
        // Not implemented.
    }

    /**
     * Return the textual content of a specified node.
     *
     * @param mixed $node A node object from a previous call to
     * $this->evalXPath().
     *
     * @return string $content The content of this node.
     */
    function content($node)
    {
        // Not implemented.
    }

    /**
     * Return the attributes of a specified node.
     *
     * @param mixed $node A node object from a previous call to
     * $this->evalXPath().
     *
     * @return array $attrs An array mapping attribute names to
     * values.
     */
    function attributes($node)
    {
        // Not implemented.
    }
}

/**
 * This concrete implementation of Services_Yadis_XMLParser implements
 * the appropriate API for the 'domxml' extension which is typically
 * packaged with PHP 4.  This class will be used whenever the 'domxml'
 * extension is detected.  See the Services_Yadis_XMLParser class for
 * details on this class's methods.
 *
 * @package Yadis
 */
class Services_Yadis_domxml extends Services_Yadis_XMLParser {
    function Services_Yadis_domxml()
    {
        $this->xml = null;
        $this->doc = null;
        $this->xpath = null;
        $this->errors = array();
    }

    function setXML($xml_string)
    {
        $this->xml = $xml_string;
        $this->doc = @domxml_open_mem($xml_string, DOMXML_LOAD_PARSING,
                                      $this->errors);

        if (!$this->doc) {
            return false;
        }

        $this->xpath = $this->doc->xpath_new_context();

        return true;
    }

    function registerNamespace($prefix, $uri)
    {
        return xpath_register_ns($this->xpath, $prefix, $uri);
    }

    function &evalXPath($xpath, $node = null)
    {
        if ($node) {
            $result = @$this->xpath->xpath_eval($xpath, $node);
        } else {
            $result = @$this->xpath->xpath_eval($xpath);
        }

        if (!$result->nodeset) {
            $n = array();
            return $n;
        }

        return $result->nodeset;
    }

    function content($node)
    {
        if ($node) {
            return $node->get_content();
        }
    }

    function attributes($node)
    {
        if ($node) {
            $arr = $node->attributes();
            $result = array();

            if ($arr) {
                foreach ($arr as $attrnode) {
                    $result[$attrnode->name] = $attrnode->value;
                }
            }

            return $result;
        }
    }
}

/**
 * This concrete implementation of Services_Yadis_XMLParser implements
 * the appropriate API for the 'dom' extension which is typically
 * packaged with PHP 5.  This class will be used whenever the 'dom'
 * extension is detected.  See the Services_Yadis_XMLParser class for
 * details on this class's methods.
 *
 * @package Yadis
 */
class Services_Yadis_dom extends Services_Yadis_XMLParser {
    function Services_Yadis_dom()
    {
        $this->xml = null;
        $this->doc = null;
        $this->xpath = null;
        $this->errors = array();
    }

    function setXML($xml_string)
    {
        $this->xml = $xml_string;
        $this->doc = new DOMDocument;

        if (!$this->doc) {
            return false;
        }

        if (!@$this->doc->loadXML($xml_string)) {
            return false;
        }

        $this->xpath = new DOMXPath($this->doc);

        if ($this->xpath) {
            return true;
        } else {
            return false;
        }
    }

    function registerNamespace($prefix, $uri)
    {
        return $this->xpath->registerNamespace($prefix, $uri);
    }

    function &evalXPath($xpath, $node = null)
    {
        if ($node) {
            $result = @$this->xpath->evaluate($xpath, $node);
        } else {
            $result = @$this->xpath->evaluate($xpath);
        }

        $n = array();

        for ($i = 0; $i < $result->length; $i++) {
            $n[] = $result->item($i);
        }

        return $n;
    }

    function content($node)
    {
        if ($node) {
            return $node->textContent;
        }
    }

    function attributes($node)
    {
        if ($node) {
            $arr = $node->attributes;
            $result = array();

            if ($arr) {
                for ($i = 0; $i < $arr->length; $i++) {
                    $node = $arr->item($i);
                    $result[$node->nodeName] = $node->nodeValue;
                }
            }

            return $result;
        }
    }
}

$__Services_Yadis_defaultParser = null;

/**
 * Set a default parser to override the extension-driven selection of
 * available parser classes.  This is helpful in a test environment or
 * one in which multiple parsers can be used but one is more
 * desirable.
 *
 * @param Services_Yadis_XMLParser $parser An instance of a
 * Services_Yadis_XMLParser subclass.
 */
function Services_Yadis_setDefaultParser(&$parser)
{
    global $__Services_Yadis_defaultParser;
    $__Services_Yadis_defaultParser =& $parser;
}

$__Services_Yadis_xml_extensions = array(
    'dom' => 'Services_Yadis_dom',
    'domxml' => 'Services_Yadis_domxml'
    );

/**
 * Returns an instance of a Services_Yadis_XMLParser subclass based on
 * the availability of PHP extensions for XML parsing.  If
 * Services_Yadis_setDefaultParser has been called, the parser used in
 * that call will be returned instead.
 */
function Services_Yadis_getXMLParser()
{
    global $__Services_Yadis_defaultParser,
        $__Services_Yadis_xml_extensions;

    if ($__Services_Yadis_defaultParser) {
        return $__Services_Yadis_defaultParser;
    }

    $p = null;
    if(is_array($__Services_Yadis_xml_extensions)) {
        // Return a wrapper for the resident implementation, if any.
        foreach ($__Services_Yadis_xml_extensions as $name => $cls) {
            if (extension_loaded($name) ||
                @dl($name . '.so')) {
                // First create a dummy variable because PHP doesn't let
                // you return things by reference unless they're
                // variables.  Feh.
                $p = new $cls();
                return $p;
            }
        }
    }

    return null;
}

?>