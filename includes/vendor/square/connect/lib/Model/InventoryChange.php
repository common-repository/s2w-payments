<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * InventoryChange Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 */
class InventoryChange implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'type' => 'string',
        'physical_count' => '\SquareConnect\Model\InventoryPhysicalCount',
        'adjustment' => '\SquareConnect\Model\InventoryAdjustment',
        'transfer' => '\SquareConnect\Model\InventoryTransfer'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'type' => 'type',
        'physical_count' => 'physical_count',
        'adjustment' => 'adjustment',
        'transfer' => 'transfer'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'type' => 'setType',
        'physical_count' => 'setPhysicalCount',
        'adjustment' => 'setAdjustment',
        'transfer' => 'setTransfer'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'type' => 'getType',
        'physical_count' => 'getPhysicalCount',
        'adjustment' => 'getAdjustment',
        'transfer' => 'getTransfer'
    );
  
    /**
      * $type Indicates how the inventory change was applied. See [InventoryChangeType](#type-inventorychangetype) for possible values
      * @var string
      */
    protected $type;
    /**
      * $physical_count Contains details about the physical count when `type` is `PHYSICAL_COUNT` and unset for all other types.
      * @var \SquareConnect\Model\InventoryPhysicalCount
      */
    protected $physical_count;
    /**
      * $adjustment Contains details about the inventory adjustment when `type` is `ADJUSTMENT` and unset for all other types.
      * @var \SquareConnect\Model\InventoryAdjustment
      */
    protected $adjustment;
    /**
      * $transfer Contains details about the inventory transfer when `type` is `TRANSFER` and unset for all other types.
      * @var \SquareConnect\Model\InventoryTransfer
      */
    protected $transfer;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["type"])) {
              $this->type = $data["type"];
            } else {
              $this->type = null;
            }
            if (isset($data["physical_count"])) {
              $this->physical_count = $data["physical_count"];
            } else {
              $this->physical_count = null;
            }
            if (isset($data["adjustment"])) {
              $this->adjustment = $data["adjustment"];
            } else {
              $this->adjustment = null;
            }
            if (isset($data["transfer"])) {
              $this->transfer = $data["transfer"];
            } else {
              $this->transfer = null;
            }
        }
    }
    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
  
    /**
     * Sets type
     * @param string $type Indicates how the inventory change was applied. See [InventoryChangeType](#type-inventorychangetype) for possible values
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }
    /**
     * Gets physical_count
     * @return \SquareConnect\Model\InventoryPhysicalCount
     */
    public function getPhysicalCount()
    {
        return $this->physical_count;
    }
  
    /**
     * Sets physical_count
     * @param \SquareConnect\Model\InventoryPhysicalCount $physical_count Contains details about the physical count when `type` is `PHYSICAL_COUNT` and unset for all other types.
     * @return $this
     */
    public function setPhysicalCount($physical_count)
    {
        $this->physical_count = $physical_count;
        return $this;
    }
    /**
     * Gets adjustment
     * @return \SquareConnect\Model\InventoryAdjustment
     */
    public function getAdjustment()
    {
        return $this->adjustment;
    }
  
    /**
     * Sets adjustment
     * @param \SquareConnect\Model\InventoryAdjustment $adjustment Contains details about the inventory adjustment when `type` is `ADJUSTMENT` and unset for all other types.
     * @return $this
     */
    public function setAdjustment($adjustment)
    {
        $this->adjustment = $adjustment;
        return $this;
    }
    /**
     * Gets transfer
     * @return \SquareConnect\Model\InventoryTransfer
     */
    public function getTransfer()
    {
        return $this->transfer;
    }
  
    /**
     * Sets transfer
     * @param \SquareConnect\Model\InventoryTransfer $transfer Contains details about the inventory transfer when `type` is `TRANSFER` and unset for all other types.
     * @return $this
     */
    public function setTransfer($transfer)
    {
        $this->transfer = $transfer;
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
