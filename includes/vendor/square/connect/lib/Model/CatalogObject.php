<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * CatalogObject Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 */
class CatalogObject implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'type' => 'string',
        'id' => 'string',
        'updated_at' => 'string',
        'version' => 'int',
        'is_deleted' => 'bool',
        'catalog_v1_ids' => '\SquareConnect\Model\CatalogV1Id[]',
        'present_at_all_locations' => 'bool',
        'present_at_location_ids' => 'string[]',
        'absent_at_location_ids' => 'string[]',
        'image_id' => 'string',
        'item_data' => '\SquareConnect\Model\CatalogItem',
        'category_data' => '\SquareConnect\Model\CatalogCategory',
        'item_variation_data' => '\SquareConnect\Model\CatalogItemVariation',
        'tax_data' => '\SquareConnect\Model\CatalogTax',
        'discount_data' => '\SquareConnect\Model\CatalogDiscount',
        'modifier_list_data' => '\SquareConnect\Model\CatalogModifierList',
        'modifier_data' => '\SquareConnect\Model\CatalogModifier',
        'image_data' => '\SquareConnect\Model\CatalogImage'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'type' => 'type',
        'id' => 'id',
        'updated_at' => 'updated_at',
        'version' => 'version',
        'is_deleted' => 'is_deleted',
        'catalog_v1_ids' => 'catalog_v1_ids',
        'present_at_all_locations' => 'present_at_all_locations',
        'present_at_location_ids' => 'present_at_location_ids',
        'absent_at_location_ids' => 'absent_at_location_ids',
        'image_id' => 'image_id',
        'item_data' => 'item_data',
        'category_data' => 'category_data',
        'item_variation_data' => 'item_variation_data',
        'tax_data' => 'tax_data',
        'discount_data' => 'discount_data',
        'modifier_list_data' => 'modifier_list_data',
        'modifier_data' => 'modifier_data',
        'image_data' => 'image_data'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'type' => 'setType',
        'id' => 'setId',
        'updated_at' => 'setUpdatedAt',
        'version' => 'setVersion',
        'is_deleted' => 'setIsDeleted',
        'catalog_v1_ids' => 'setCatalogV1Ids',
        'present_at_all_locations' => 'setPresentAtAllLocations',
        'present_at_location_ids' => 'setPresentAtLocationIds',
        'absent_at_location_ids' => 'setAbsentAtLocationIds',
        'image_id' => 'setImageId',
        'item_data' => 'setItemData',
        'category_data' => 'setCategoryData',
        'item_variation_data' => 'setItemVariationData',
        'tax_data' => 'setTaxData',
        'discount_data' => 'setDiscountData',
        'modifier_list_data' => 'setModifierListData',
        'modifier_data' => 'setModifierData',
        'image_data' => 'setImageData'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'type' => 'getType',
        'id' => 'getId',
        'updated_at' => 'getUpdatedAt',
        'version' => 'getVersion',
        'is_deleted' => 'getIsDeleted',
        'catalog_v1_ids' => 'getCatalogV1Ids',
        'present_at_all_locations' => 'getPresentAtAllLocations',
        'present_at_location_ids' => 'getPresentAtLocationIds',
        'absent_at_location_ids' => 'getAbsentAtLocationIds',
        'image_id' => 'getImageId',
        'item_data' => 'getItemData',
        'category_data' => 'getCategoryData',
        'item_variation_data' => 'getItemVariationData',
        'tax_data' => 'getTaxData',
        'discount_data' => 'getDiscountData',
        'modifier_list_data' => 'getModifierListData',
        'modifier_data' => 'getModifierData',
        'image_data' => 'getImageData'
    );
  
    /**
      * $type The type of this object. Each object type has expected properties expressed in a structured format within its corresponding `*_data` field below. See [CatalogObjectType](#type-catalogobjecttype) for possible values
      * @var string
      */
    protected $type;
    /**
      * $id An identifier to reference this object in the catalog. When a new CatalogObject is inserted, the client should set the id to a temporary identifier starting with a `'#'` character. Other objects being inserted or updated within the same request may use this identifier to refer to the new object.  When the server receives the new object, it will supply a unique identifier that replaces the temporary identifier for all future references.
      * @var string
      */
    protected $id;
    /**
      * $updated_at Last modification [timestamp](#workingwithdates) in RFC 3339 format, e.g., `\"2016-08-15T23:59:33.123Z\"` would indicate the UTC time (denoted by `Z`) of August 15, 2016 at 23:59:33 and 123 milliseconds.
      * @var string
      */
    protected $updated_at;
    /**
      * $version The version of the object. When updating an object, the version supplied must match the version in the database, otherwise the write will be rejected as conflicting.
      * @var int
      */
    protected $version;
    /**
      * $is_deleted If `true`, the object has been deleted from the database. Must be `false` for new objects being inserted. When deleted, the `updated_at` field will equal the deletion time.
      * @var bool
      */
    protected $is_deleted;
    /**
      * $catalog_v1_ids The Connect V1 IDs for this object at each [location](#type-location) where it is present, where they differ from the object's Connect V2 ID. The field will only be present for objects that have been created or modified by legacy APIs.
      * @var \SquareConnect\Model\CatalogV1Id[]
      */
    protected $catalog_v1_ids;
    /**
      * $present_at_all_locations If `true`, this object is present at all locations (including future locations), except where specified in the `absent_at_location_ids` field. If `false`, this object is not present at any locations (including future locations), except where specified in the `present_at_location_ids` field. If not specified, defaults to `true`.
      * @var bool
      */
    protected $present_at_all_locations;
    /**
      * $present_at_location_ids A list of locations where the object is present, even if `present_at_all_locations` is `false`.
      * @var string[]
      */
    protected $present_at_location_ids;
    /**
      * $absent_at_location_ids A list of locations where the object is not present, even if `present_at_all_locations` is `true`.
      * @var string[]
      */
    protected $absent_at_location_ids;
    /**
      * $image_id Identifies the `CatalogImage` attached to this `CatalogObject`.
      * @var string
      */
    protected $image_id;
    /**
      * $item_data Structured data for a [CatalogItem](#type-catalogitem), set for CatalogObjects of type `ITEM`.
      * @var \SquareConnect\Model\CatalogItem
      */
    protected $item_data;
    /**
      * $category_data Structured data for a [CatalogCategory](#type-catalogcategory), set for CatalogObjects of type `CATEGORY`.
      * @var \SquareConnect\Model\CatalogCategory
      */
    protected $category_data;
    /**
      * $item_variation_data Structured data for a [CatalogItemVariation](#type-catalogitemvariation), set for CatalogObjects of type `ITEM_VARIATION`.
      * @var \SquareConnect\Model\CatalogItemVariation
      */
    protected $item_variation_data;
    /**
      * $tax_data Structured data for a [CatalogTax](#type-catalogtax), set for CatalogObjects of type `TAX`.
      * @var \SquareConnect\Model\CatalogTax
      */
    protected $tax_data;
    /**
      * $discount_data Structured data for a [CatalogDiscount](#type-catalogdiscount), set for CatalogObjects of type `DISCOUNT`.
      * @var \SquareConnect\Model\CatalogDiscount
      */
    protected $discount_data;
    /**
      * $modifier_list_data Structured data for a [CatalogModifierList](#type-catalogmodifierlist), set for CatalogObjects of type `MODIFIER_LIST`.
      * @var \SquareConnect\Model\CatalogModifierList
      */
    protected $modifier_list_data;
    /**
      * $modifier_data Structured data for a [CatalogModifier](#type-catalogmodifier), set for CatalogObjects of type `MODIFIER`.
      * @var \SquareConnect\Model\CatalogModifier
      */
    protected $modifier_data;
    /**
      * $image_data Structured data for a [CatalogImage](#type-catalogimage), set for CatalogObjects of type `IMAGE`.
      * @var \SquareConnect\Model\CatalogImage
      */
    protected $image_data;

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
            if (isset($data["id"])) {
              $this->id = $data["id"];
            } else {
              $this->id = null;
            }
            if (isset($data["updated_at"])) {
              $this->updated_at = $data["updated_at"];
            } else {
              $this->updated_at = null;
            }
            if (isset($data["version"])) {
              $this->version = $data["version"];
            } else {
              $this->version = null;
            }
            if (isset($data["is_deleted"])) {
              $this->is_deleted = $data["is_deleted"];
            } else {
              $this->is_deleted = null;
            }
            if (isset($data["catalog_v1_ids"])) {
              $this->catalog_v1_ids = $data["catalog_v1_ids"];
            } else {
              $this->catalog_v1_ids = null;
            }
            if (isset($data["present_at_all_locations"])) {
              $this->present_at_all_locations = $data["present_at_all_locations"];
            } else {
              $this->present_at_all_locations = null;
            }
            if (isset($data["present_at_location_ids"])) {
              $this->present_at_location_ids = $data["present_at_location_ids"];
            } else {
              $this->present_at_location_ids = null;
            }
            if (isset($data["absent_at_location_ids"])) {
              $this->absent_at_location_ids = $data["absent_at_location_ids"];
            } else {
              $this->absent_at_location_ids = null;
            }
            if (isset($data["image_id"])) {
              $this->image_id = $data["image_id"];
            } else {
              $this->image_id = null;
            }
            if (isset($data["item_data"])) {
              $this->item_data = $data["item_data"];
            } else {
              $this->item_data = null;
            }
            if (isset($data["category_data"])) {
              $this->category_data = $data["category_data"];
            } else {
              $this->category_data = null;
            }
            if (isset($data["item_variation_data"])) {
              $this->item_variation_data = $data["item_variation_data"];
            } else {
              $this->item_variation_data = null;
            }
            if (isset($data["tax_data"])) {
              $this->tax_data = $data["tax_data"];
            } else {
              $this->tax_data = null;
            }
            if (isset($data["discount_data"])) {
              $this->discount_data = $data["discount_data"];
            } else {
              $this->discount_data = null;
            }
            if (isset($data["modifier_list_data"])) {
              $this->modifier_list_data = $data["modifier_list_data"];
            } else {
              $this->modifier_list_data = null;
            }
            if (isset($data["modifier_data"])) {
              $this->modifier_data = $data["modifier_data"];
            } else {
              $this->modifier_data = null;
            }
            if (isset($data["image_data"])) {
              $this->image_data = $data["image_data"];
            } else {
              $this->image_data = null;
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
     * @param string $type The type of this object. Each object type has expected properties expressed in a structured format within its corresponding `*_data` field below. See [CatalogObjectType](#type-catalogobjecttype) for possible values
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
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
     * @param string $id An identifier to reference this object in the catalog. When a new CatalogObject is inserted, the client should set the id to a temporary identifier starting with a `'#'` character. Other objects being inserted or updated within the same request may use this identifier to refer to the new object.  When the server receives the new object, it will supply a unique identifier that replaces the temporary identifier for all future references.
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Gets updated_at
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }
  
    /**
     * Sets updated_at
     * @param string $updated_at Last modification [timestamp](#workingwithdates) in RFC 3339 format, e.g., `\"2016-08-15T23:59:33.123Z\"` would indicate the UTC time (denoted by `Z`) of August 15, 2016 at 23:59:33 and 123 milliseconds.
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;
        return $this;
    }
    /**
     * Gets version
     * @return int
     */
    public function getVersion()
    {
        return $this->version;
    }
  
    /**
     * Sets version
     * @param int $version The version of the object. When updating an object, the version supplied must match the version in the database, otherwise the write will be rejected as conflicting.
     * @return $this
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }
    /**
     * Gets is_deleted
     * @return bool
     */
    public function getIsDeleted()
    {
        return $this->is_deleted;
    }
  
    /**
     * Sets is_deleted
     * @param bool $is_deleted If `true`, the object has been deleted from the database. Must be `false` for new objects being inserted. When deleted, the `updated_at` field will equal the deletion time.
     * @return $this
     */
    public function setIsDeleted($is_deleted)
    {
        $this->is_deleted = $is_deleted;
        return $this;
    }
    /**
     * Gets catalog_v1_ids
     * @return \SquareConnect\Model\CatalogV1Id[]
     */
    public function getCatalogV1Ids()
    {
        return $this->catalog_v1_ids;
    }
  
    /**
     * Sets catalog_v1_ids
     * @param \SquareConnect\Model\CatalogV1Id[] $catalog_v1_ids The Connect V1 IDs for this object at each [location](#type-location) where it is present, where they differ from the object's Connect V2 ID. The field will only be present for objects that have been created or modified by legacy APIs.
     * @return $this
     */
    public function setCatalogV1Ids($catalog_v1_ids)
    {
        $this->catalog_v1_ids = $catalog_v1_ids;
        return $this;
    }
    /**
     * Gets present_at_all_locations
     * @return bool
     */
    public function getPresentAtAllLocations()
    {
        return $this->present_at_all_locations;
    }
  
    /**
     * Sets present_at_all_locations
     * @param bool $present_at_all_locations If `true`, this object is present at all locations (including future locations), except where specified in the `absent_at_location_ids` field. If `false`, this object is not present at any locations (including future locations), except where specified in the `present_at_location_ids` field. If not specified, defaults to `true`.
     * @return $this
     */
    public function setPresentAtAllLocations($present_at_all_locations)
    {
        $this->present_at_all_locations = $present_at_all_locations;
        return $this;
    }
    /**
     * Gets present_at_location_ids
     * @return string[]
     */
    public function getPresentAtLocationIds()
    {
        return $this->present_at_location_ids;
    }
  
    /**
     * Sets present_at_location_ids
     * @param string[] $present_at_location_ids A list of locations where the object is present, even if `present_at_all_locations` is `false`.
     * @return $this
     */
    public function setPresentAtLocationIds($present_at_location_ids)
    {
        $this->present_at_location_ids = $present_at_location_ids;
        return $this;
    }
    /**
     * Gets absent_at_location_ids
     * @return string[]
     */
    public function getAbsentAtLocationIds()
    {
        return $this->absent_at_location_ids;
    }
  
    /**
     * Sets absent_at_location_ids
     * @param string[] $absent_at_location_ids A list of locations where the object is not present, even if `present_at_all_locations` is `true`.
     * @return $this
     */
    public function setAbsentAtLocationIds($absent_at_location_ids)
    {
        $this->absent_at_location_ids = $absent_at_location_ids;
        return $this;
    }
    /**
     * Gets image_id
     * @return string
     */
    public function getImageId()
    {
        return $this->image_id;
    }
  
    /**
     * Sets image_id
     * @param string $image_id Identifies the `CatalogImage` attached to this `CatalogObject`.
     * @return $this
     */
    public function setImageId($image_id)
    {
        $this->image_id = $image_id;
        return $this;
    }
    /**
     * Gets item_data
     * @return \SquareConnect\Model\CatalogItem
     */
    public function getItemData()
    {
        return $this->item_data;
    }
  
    /**
     * Sets item_data
     * @param \SquareConnect\Model\CatalogItem $item_data Structured data for a [CatalogItem](#type-catalogitem), set for CatalogObjects of type `ITEM`.
     * @return $this
     */
    public function setItemData($item_data)
    {
        $this->item_data = $item_data;
        return $this;
    }
    /**
     * Gets category_data
     * @return \SquareConnect\Model\CatalogCategory
     */
    public function getCategoryData()
    {
        return $this->category_data;
    }
  
    /**
     * Sets category_data
     * @param \SquareConnect\Model\CatalogCategory $category_data Structured data for a [CatalogCategory](#type-catalogcategory), set for CatalogObjects of type `CATEGORY`.
     * @return $this
     */
    public function setCategoryData($category_data)
    {
        $this->category_data = $category_data;
        return $this;
    }
    /**
     * Gets item_variation_data
     * @return \SquareConnect\Model\CatalogItemVariation
     */
    public function getItemVariationData()
    {
        return $this->item_variation_data;
    }
  
    /**
     * Sets item_variation_data
     * @param \SquareConnect\Model\CatalogItemVariation $item_variation_data Structured data for a [CatalogItemVariation](#type-catalogitemvariation), set for CatalogObjects of type `ITEM_VARIATION`.
     * @return $this
     */
    public function setItemVariationData($item_variation_data)
    {
        $this->item_variation_data = $item_variation_data;
        return $this;
    }
    /**
     * Gets tax_data
     * @return \SquareConnect\Model\CatalogTax
     */
    public function getTaxData()
    {
        return $this->tax_data;
    }
  
    /**
     * Sets tax_data
     * @param \SquareConnect\Model\CatalogTax $tax_data Structured data for a [CatalogTax](#type-catalogtax), set for CatalogObjects of type `TAX`.
     * @return $this
     */
    public function setTaxData($tax_data)
    {
        $this->tax_data = $tax_data;
        return $this;
    }
    /**
     * Gets discount_data
     * @return \SquareConnect\Model\CatalogDiscount
     */
    public function getDiscountData()
    {
        return $this->discount_data;
    }
  
    /**
     * Sets discount_data
     * @param \SquareConnect\Model\CatalogDiscount $discount_data Structured data for a [CatalogDiscount](#type-catalogdiscount), set for CatalogObjects of type `DISCOUNT`.
     * @return $this
     */
    public function setDiscountData($discount_data)
    {
        $this->discount_data = $discount_data;
        return $this;
    }
    /**
     * Gets modifier_list_data
     * @return \SquareConnect\Model\CatalogModifierList
     */
    public function getModifierListData()
    {
        return $this->modifier_list_data;
    }
  
    /**
     * Sets modifier_list_data
     * @param \SquareConnect\Model\CatalogModifierList $modifier_list_data Structured data for a [CatalogModifierList](#type-catalogmodifierlist), set for CatalogObjects of type `MODIFIER_LIST`.
     * @return $this
     */
    public function setModifierListData($modifier_list_data)
    {
        $this->modifier_list_data = $modifier_list_data;
        return $this;
    }
    /**
     * Gets modifier_data
     * @return \SquareConnect\Model\CatalogModifier
     */
    public function getModifierData()
    {
        return $this->modifier_data;
    }
  
    /**
     * Sets modifier_data
     * @param \SquareConnect\Model\CatalogModifier $modifier_data Structured data for a [CatalogModifier](#type-catalogmodifier), set for CatalogObjects of type `MODIFIER`.
     * @return $this
     */
    public function setModifierData($modifier_data)
    {
        $this->modifier_data = $modifier_data;
        return $this;
    }
    /**
     * Gets image_data
     * @return \SquareConnect\Model\CatalogImage
     */
    public function getImageData()
    {
        return $this->image_data;
    }
  
    /**
     * Sets image_data
     * @param \SquareConnect\Model\CatalogImage $image_data Structured data for a [CatalogImage](#type-catalogimage), set for CatalogObjects of type `IMAGE`.
     * @return $this
     */
    public function setImageData($image_data)
    {
        $this->image_data = $image_data;
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
