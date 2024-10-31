<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * V1Discount Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 */
class V1Discount implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'string',
        'name' => 'string',
        'rate' => 'string',
        'amount_money' => '\SquareConnect\Model\V1Money',
        'discount_type' => 'string',
        'pin_required' => 'bool',
        'color' => 'string',
        'v2_id' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id' => 'id',
        'name' => 'name',
        'rate' => 'rate',
        'amount_money' => 'amount_money',
        'discount_type' => 'discount_type',
        'pin_required' => 'pin_required',
        'color' => 'color',
        'v2_id' => 'v2_id'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id' => 'setId',
        'name' => 'setName',
        'rate' => 'setRate',
        'amount_money' => 'setAmountMoney',
        'discount_type' => 'setDiscountType',
        'pin_required' => 'setPinRequired',
        'color' => 'setColor',
        'v2_id' => 'setV2Id'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id' => 'getId',
        'name' => 'getName',
        'rate' => 'getRate',
        'amount_money' => 'getAmountMoney',
        'discount_type' => 'getDiscountType',
        'pin_required' => 'getPinRequired',
        'color' => 'getColor',
        'v2_id' => 'getV2Id'
    );
  
    /**
      * $id The discount's unique ID.
      * @var string
      */
    protected $id;
    /**
      * $name The discount's name.
      * @var string
      */
    protected $name;
    /**
      * $rate The rate of the discount, as a string representation of a decimal number. A value of 0.07 corresponds to a rate of 7%. This rate is 0 if discount_type is VARIABLE_PERCENTAGE.
      * @var string
      */
    protected $rate;
    /**
      * $amount_money The amount of the discount. This amount is 0 if discount_type is VARIABLE_AMOUNT. This field is not included for rate-based discounts.
      * @var \SquareConnect\Model\V1Money
      */
    protected $amount_money;
    /**
      * $discount_type Indicates whether the discount is a FIXED value or entered at the time of sale. See [V1DiscountDiscountType](#type-v1discountdiscounttype) for possible values
      * @var string
      */
    protected $discount_type;
    /**
      * $pin_required Indicates whether a mobile staff member needs to enter their PIN to apply the discount to a payment.
      * @var bool
      */
    protected $pin_required;
    /**
      * $color The color of the discount's display label in Square Register, if not the default color. The default color is 9da2a6. See [V1DiscountColor](#type-v1discountcolor) for possible values
      * @var string
      */
    protected $color;
    /**
      * $v2_id The ID of the CatalogObject in the Connect v2 API. Objects that are shared across multiple locations share the same v2 ID.
      * @var string
      */
    protected $v2_id;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["id"])) {
              $this->id = $data["id"];
            } else {
              $this->id = null;
            }
            if (isset($data["name"])) {
              $this->name = $data["name"];
            } else {
              $this->name = null;
            }
            if (isset($data["rate"])) {
              $this->rate = $data["rate"];
            } else {
              $this->rate = null;
            }
            if (isset($data["amount_money"])) {
              $this->amount_money = $data["amount_money"];
            } else {
              $this->amount_money = null;
            }
            if (isset($data["discount_type"])) {
              $this->discount_type = $data["discount_type"];
            } else {
              $this->discount_type = null;
            }
            if (isset($data["pin_required"])) {
              $this->pin_required = $data["pin_required"];
            } else {
              $this->pin_required = null;
            }
            if (isset($data["color"])) {
              $this->color = $data["color"];
            } else {
              $this->color = null;
            }
            if (isset($data["v2_id"])) {
              $this->v2_id = $data["v2_id"];
            } else {
              $this->v2_id = null;
            }
        }
    }
    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
  
    /**
     * Sets id
     * @param string $id The discount's unique ID.
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
  
    /**
     * Sets name
     * @param string $name The discount's name.
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Gets rate
     * @return string
     */
    public function getRate()
    {
        return $this->rate;
    }
  
    /**
     * Sets rate
     * @param string $rate The rate of the discount, as a string representation of a decimal number. A value of 0.07 corresponds to a rate of 7%. This rate is 0 if discount_type is VARIABLE_PERCENTAGE.
     * @return $this
     */
    public function setRate($rate)
    {
        $this->rate = $rate;
        return $this;
    }
    /**
     * Gets amount_money
     * @return \SquareConnect\Model\V1Money
     */
    public function getAmountMoney()
    {
        return $this->amount_money;
    }
  
    /**
     * Sets amount_money
     * @param \SquareConnect\Model\V1Money $amount_money The amount of the discount. This amount is 0 if discount_type is VARIABLE_AMOUNT. This field is not included for rate-based discounts.
     * @return $this
     */
    public function setAmountMoney($amount_money)
    {
        $this->amount_money = $amount_money;
        return $this;
    }
    /**
     * Gets discount_type
     * @return string
     */
    public function getDiscountType()
    {
        return $this->discount_type;
    }
  
    /**
     * Sets discount_type
     * @param string $discount_type Indicates whether the discount is a FIXED value or entered at the time of sale. See [V1DiscountDiscountType](#type-v1discountdiscounttype) for possible values
     * @return $this
     */
    public function setDiscountType($discount_type)
    {
        $this->discount_type = $discount_type;
        return $this;
    }
    /**
     * Gets pin_required
     * @return bool
     */
    public function getPinRequired()
    {
        return $this->pin_required;
    }
  
    /**
     * Sets pin_required
     * @param bool $pin_required Indicates whether a mobile staff member needs to enter their PIN to apply the discount to a payment.
     * @return $this
     */
    public function setPinRequired($pin_required)
    {
        $this->pin_required = $pin_required;
        return $this;
    }
    /**
     * Gets color
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }
  
    /**
     * Sets color
     * @param string $color The color of the discount's display label in Square Register, if not the default color. The default color is 9da2a6. See [V1DiscountColor](#type-v1discountcolor) for possible values
     * @return $this
     */
    public function setColor($color)
    {
        $this->color = $color;
        return $this;
    }
    /**
     * Gets v2_id
     * @return string
     */
    public function getV2Id()
    {
        return $this->v2_id;
    }
  
    /**
     * Sets v2_id
     * @param string $v2_id The ID of the CatalogObject in the Connect v2 API. Objects that are shared across multiple locations share the same v2 ID.
     * @return $this
     */
    public function setV2Id($v2_id)
    {
        $this->v2_id = $v2_id;
        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}
