<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * V1ModifierList Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 */
class V1ModifierList implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'string',
        'name' => 'string',
        'selection_type' => 'string',
        'modifier_options' => '\SquareConnect\Model\V1ModifierOption[]',
        'v2_id' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id' => 'id',
        'name' => 'name',
        'selection_type' => 'selection_type',
        'modifier_options' => 'modifier_options',
        'v2_id' => 'v2_id'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id' => 'setId',
        'name' => 'setName',
        'selection_type' => 'setSelectionType',
        'modifier_options' => 'setModifierOptions',
        'v2_id' => 'setV2Id'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id' => 'getId',
        'name' => 'getName',
        'selection_type' => 'getSelectionType',
        'modifier_options' => 'getModifierOptions',
        'v2_id' => 'getV2Id'
    );
  
    /**
      * $id The modifier list's unique ID.
      * @var string
      */
    protected $id;
    /**
      * $name The modifier list's name.
      * @var string
      */
    protected $name;
    /**
      * $selection_type Indicates whether MULTIPLE options or a SINGLE option from the modifier list can be applied to a single item. See [V1ModifierListSelectionType](#type-v1modifierlistselectiontype) for possible values
      * @var string
      */
    protected $selection_type;
    /**
      * $modifier_options The options included in the modifier list.
      * @var \SquareConnect\Model\V1ModifierOption[]
      */
    protected $modifier_options;
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
            if (isset($data["selection_type"])) {
              $this->selection_type = $data["selection_type"];
            } else {
              $this->selection_type = null;
            }
            if (isset($data["modifier_options"])) {
              $this->modifier_options = $data["modifier_options"];
            } else {
              $this->modifier_options = null;
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
     * @param string $id The modifier list's unique ID.
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
     * @param string $name The modifier list's name.
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Gets selection_type
     * @return string
     */
    public function getSelectionType()
    {
        return $this->selection_type;
    }
  
    /**
     * Sets selection_type
     * @param string $selection_type Indicates whether MULTIPLE options or a SINGLE option from the modifier list can be applied to a single item. See [V1ModifierListSelectionType](#type-v1modifierlistselectiontype) for possible values
     * @return $this
     */
    public function setSelectionType($selection_type)
    {
        $this->selection_type = $selection_type;
        return $this;
    }
    /**
     * Gets modifier_options
     * @return \SquareConnect\Model\V1ModifierOption[]
     */
    public function getModifierOptions()
    {
        return $this->modifier_options;
    }
  
    /**
     * Sets modifier_options
     * @param \SquareConnect\Model\V1ModifierOption[] $modifier_options The options included in the modifier list.
     * @return $this
     */
    public function setModifierOptions($modifier_options)
    {
        $this->modifier_options = $modifier_options;
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
