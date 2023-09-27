<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/resources/conversion_action.proto

namespace Google\Ads\GoogleAds\V12\Resources\ConversionAction;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Settings related to the value for conversion events associated with this
 * conversion action.
 *
 * Generated from protobuf message <code>google.ads.googleads.v12.resources.ConversionAction.ValueSettings</code>
 */
class ValueSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * The value to use when conversion events for this conversion action are
     * sent with an invalid, disallowed or missing value, or when
     * this conversion action is configured to always use the default value.
     *
     * Generated from protobuf field <code>optional double default_value = 4;</code>
     */
    protected $default_value = null;
    /**
     * The currency code to use when conversion events for this conversion
     * action are sent with an invalid or missing currency code, or when this
     * conversion action is configured to always use the default value.
     *
     * Generated from protobuf field <code>optional string default_currency_code = 5;</code>
     */
    protected $default_currency_code = null;
    /**
     * Controls whether the default value and default currency code are used in
     * place of the value and currency code specified in conversion events for
     * this conversion action.
     *
     * Generated from protobuf field <code>optional bool always_use_default_value = 6;</code>
     */
    protected $always_use_default_value = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $default_value
     *           The value to use when conversion events for this conversion action are
     *           sent with an invalid, disallowed or missing value, or when
     *           this conversion action is configured to always use the default value.
     *     @type string $default_currency_code
     *           The currency code to use when conversion events for this conversion
     *           action are sent with an invalid or missing currency code, or when this
     *           conversion action is configured to always use the default value.
     *     @type bool $always_use_default_value
     *           Controls whether the default value and default currency code are used in
     *           place of the value and currency code specified in conversion events for
     *           this conversion action.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V12\Resources\ConversionAction::initOnce();
        parent::__construct($data);
    }

    /**
     * The value to use when conversion events for this conversion action are
     * sent with an invalid, disallowed or missing value, or when
     * this conversion action is configured to always use the default value.
     *
     * Generated from protobuf field <code>optional double default_value = 4;</code>
     * @return float
     */
    public function getDefaultValue()
    {
        return isset($this->default_value) ? $this->default_value : 0.0;
    }

    public function hasDefaultValue()
    {
        return isset($this->default_value);
    }

    public function clearDefaultValue()
    {
        unset($this->default_value);
    }

    /**
     * The value to use when conversion events for this conversion action are
     * sent with an invalid, disallowed or missing value, or when
     * this conversion action is configured to always use the default value.
     *
     * Generated from protobuf field <code>optional double default_value = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setDefaultValue($var)
    {
        GPBUtil::checkDouble($var);
        $this->default_value = $var;

        return $this;
    }

    /**
     * The currency code to use when conversion events for this conversion
     * action are sent with an invalid or missing currency code, or when this
     * conversion action is configured to always use the default value.
     *
     * Generated from protobuf field <code>optional string default_currency_code = 5;</code>
     * @return string
     */
    public function getDefaultCurrencyCode()
    {
        return isset($this->default_currency_code) ? $this->default_currency_code : '';
    }

    public function hasDefaultCurrencyCode()
    {
        return isset($this->default_currency_code);
    }

    public function clearDefaultCurrencyCode()
    {
        unset($this->default_currency_code);
    }

    /**
     * The currency code to use when conversion events for this conversion
     * action are sent with an invalid or missing currency code, or when this
     * conversion action is configured to always use the default value.
     *
     * Generated from protobuf field <code>optional string default_currency_code = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setDefaultCurrencyCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->default_currency_code = $var;

        return $this;
    }

    /**
     * Controls whether the default value and default currency code are used in
     * place of the value and currency code specified in conversion events for
     * this conversion action.
     *
     * Generated from protobuf field <code>optional bool always_use_default_value = 6;</code>
     * @return bool
     */
    public function getAlwaysUseDefaultValue()
    {
        return isset($this->always_use_default_value) ? $this->always_use_default_value : false;
    }

    public function hasAlwaysUseDefaultValue()
    {
        return isset($this->always_use_default_value);
    }

    public function clearAlwaysUseDefaultValue()
    {
        unset($this->always_use_default_value);
    }

    /**
     * Controls whether the default value and default currency code are used in
     * place of the value and currency code specified in conversion events for
     * this conversion action.
     *
     * Generated from protobuf field <code>optional bool always_use_default_value = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setAlwaysUseDefaultValue($var)
    {
        GPBUtil::checkBool($var);
        $this->always_use_default_value = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ValueSettings::class, \Google\Ads\GoogleAds\V12\Resources\ConversionAction_ValueSettings::class);

