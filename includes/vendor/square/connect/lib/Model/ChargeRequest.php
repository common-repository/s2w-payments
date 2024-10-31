<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * ChargeRequest Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 */
class ChargeRequest implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'idempotency_key' => 'string',
        'amount_money' => '\SquareConnect\Model\Money',
        'card_nonce' => 'string',
        'customer_card_id' => 'string',
        'delay_capture' => 'bool',
        'reference_id' => 'string',
        'note' => 'string',
        'customer_id' => 'string',
        'billing_address' => '\SquareConnect\Model\Address',
        'shipping_address' => '\SquareConnect\Model\Address',
        'buyer_email_address' => 'string',
        'order_id' => 'string',
        'additional_recipients' => '\SquareConnect\Model\AdditionalRecipient[]'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'idempotency_key' => 'idempotency_key',
        'amount_money' => 'amount_money',
        'card_nonce' => 'card_nonce',
        'customer_card_id' => 'customer_card_id',
        'delay_capture' => 'delay_capture',
        'reference_id' => 'reference_id',
        'note' => 'note',
        'customer_id' => 'customer_id',
        'billing_address' => 'billing_address',
        'shipping_address' => 'shipping_address',
        'buyer_email_address' => 'buyer_email_address',
        'order_id' => 'order_id',
        'additional_recipients' => 'additional_recipients'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'idempotency_key' => 'setIdempotencyKey',
        'amount_money' => 'setAmountMoney',
        'card_nonce' => 'setCardNonce',
        'customer_card_id' => 'setCustomerCardId',
        'delay_capture' => 'setDelayCapture',
        'reference_id' => 'setReferenceId',
        'note' => 'setNote',
        'customer_id' => 'setCustomerId',
        'billing_address' => 'setBillingAddress',
        'shipping_address' => 'setShippingAddress',
        'buyer_email_address' => 'setBuyerEmailAddress',
        'order_id' => 'setOrderId',
        'additional_recipients' => 'setAdditionalRecipients'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'idempotency_key' => 'getIdempotencyKey',
        'amount_money' => 'getAmountMoney',
        'card_nonce' => 'getCardNonce',
        'customer_card_id' => 'getCustomerCardId',
        'delay_capture' => 'getDelayCapture',
        'reference_id' => 'getReferenceId',
        'note' => 'getNote',
        'customer_id' => 'getCustomerId',
        'billing_address' => 'getBillingAddress',
        'shipping_address' => 'getShippingAddress',
        'buyer_email_address' => 'getBuyerEmailAddress',
        'order_id' => 'getOrderId',
        'additional_recipients' => 'getAdditionalRecipients'
    );
  
    /**
      * $idempotency_key A value you specify that uniquely identifies this transaction among transactions you've created.  If you're unsure whether a particular transaction succeeded, you can reattempt it with the same idempotency key without worrying about double-charging the buyer.  See [Idempotency](/basics/api101/idempotency) for more information.
      * @var string
      */
    protected $idempotency_key;
    /**
      * $amount_money The amount of money to charge.  Note that you specify the amount in the __smallest denomination of the applicable currency__. For example, US dollar amounts are specified in cents. See [Working with monetary amounts](#workingwithmonetaryamounts) for details.  The value of `currency` must match the currency associated with the business that is charging the card.
      * @var \SquareConnect\Model\Money
      */
    protected $amount_money;
    /**
      * $card_nonce A nonce generated from the `SqPaymentForm` that represents the card to charge.  The application that provides a nonce to this endpoint must be the _same application_ that generated the nonce with the `SqPaymentForm`. Otherwise, the nonce is invalid.  Do not provide a value for this field if you provide a value for `customer_card_id`.
      * @var string
      */
    protected $card_nonce;
    /**
      * $customer_card_id The ID of the customer card on file to charge. Do not provide a value for this field if you provide a value for `card_nonce`.  If you provide this value, you _must_ also provide a value for `customer_id`.
      * @var string
      */
    protected $customer_card_id;
    /**
      * $delay_capture If `true`, the request will only perform an Auth on the provided card. You can then later perform either a Capture (with the [CaptureTransaction](#endpoint-capturetransaction) endpoint) or a Void (with the [VoidTransaction](#endpoint-voidtransaction) endpoint).  Default value: `false`
      * @var bool
      */
    protected $delay_capture;
    /**
      * $reference_id An optional ID you can associate with the transaction for your own purposes (such as to associate the transaction with an entity ID in your own database).  This value cannot exceed 40 characters.
      * @var string
      */
    protected $reference_id;
    /**
      * $note An optional note to associate with the transaction.  This value cannot exceed 60 characters.
      * @var string
      */
    protected $note;
    /**
      * $customer_id The ID of the customer to associate this transaction with. This field is required if you provide a value for `customer_card_id`, and optional otherwise.
      * @var string
      */
    protected $customer_id;
    /**
      * $billing_address The buyer's billing address. This value is optional, but this transaction is ineligible for chargeback protection if neither this parameter nor `shipping_address` is provided.
      * @var \SquareConnect\Model\Address
      */
    protected $billing_address;
    /**
      * $shipping_address The buyer's shipping address, if available. This value is optional, but this transaction is ineligible for chargeback protection if neither this parameter nor `billing_address` is provided.
      * @var \SquareConnect\Model\Address
      */
    protected $shipping_address;
    /**
      * $buyer_email_address The buyer's email address, if available. This value is optional, but this transaction is ineligible for chargeback protection if it is not provided.
      * @var string
      */
    protected $buyer_email_address;
    /**
      * $order_id The ID of the order to associate with this transaction.  If you provide this value, the `amount_money` value of your request must __exactly match__ the value of the order's `total_money` field.
      * @var string
      */
    protected $order_id;
    /**
      * $additional_recipients The basic primitive of multi-party transaction. The value is optional. The transaction facilitated by you can be split from here.  If you provide this value, the `amount_money` value in your additional_recipients must not be more than 90% of the `amount_money` value in the charge request. The `location_id` must be the valid location of the app owner merchant.  This field requires the `PAYMENTS_WRITE_ADDITIONAL_RECIPIENTS` OAuth permission.  This field is currently not supported in sandbox.
      * @var \SquareConnect\Model\AdditionalRecipient[]
      */
    protected $additional_recipients;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["idempotency_key"])) {
              $this->idempotency_key = $data["idempotency_key"];
            } else {
              $this->idempotency_key = null;
            }
            if (isset($data["amount_money"])) {
              $this->amount_money = $data["amount_money"];
            } else {
              $this->amount_money = null;
            }
            if (isset($data["card_nonce"])) {
              $this->card_nonce = $data["card_nonce"];
            } else {
              $this->card_nonce = null;
            }
            if (isset($data["customer_card_id"])) {
              $this->customer_card_id = $data["customer_card_id"];
            } else {
              $this->customer_card_id = null;
            }
            if (isset($data["delay_capture"])) {
              $this->delay_capture = $data["delay_capture"];
            } else {
              $this->delay_capture = null;
            }
            if (isset($data["reference_id"])) {
              $this->reference_id = $data["reference_id"];
            } else {
              $this->reference_id = null;
            }
            if (isset($data["note"])) {
              $this->note = $data["note"];
            } else {
              $this->note = null;
            }
            if (isset($data["customer_id"])) {
              $this->customer_id = $data["customer_id"];
            } else {
              $this->customer_id = null;
            }
            if (isset($data["billing_address"])) {
              $this->billing_address = $data["billing_address"];
            } else {
              $this->billing_address = null;
            }
            if (isset($data["shipping_address"])) {
              $this->shipping_address = $data["shipping_address"];
            } else {
              $this->shipping_address = null;
            }
            if (isset($data["buyer_email_address"])) {
              $this->buyer_email_address = $data["buyer_email_address"];
            } else {
              $this->buyer_email_address = null;
            }
            if (isset($data["order_id"])) {
              $this->order_id = $data["order_id"];
            } else {
              $this->order_id = null;
            }
            if (isset($data["additional_recipients"])) {
              $this->additional_recipients = $data["additional_recipients"];
            } else {
              $this->additional_recipients = null;
            }
        }
    }
    /**
     * Gets idempotency_key
     * @return string
     */
    public function getIdempotencyKey()
    {
        return $this->idempotency_key;
    }
  
    /**
     * Sets idempotency_key
     * @param string $idempotency_key A value you specify that uniquely identifies this transaction among transactions you've created.  If you're unsure whether a particular transaction succeeded, you can reattempt it with the same idempotency key without worrying about double-charging the buyer.  See [Idempotency](/basics/api101/idempotency) for more information.
     * @return $this
     */
    public function setIdempotencyKey($idempotency_key)
    {
        $this->idempotency_key = $idempotency_key;
        return $this;
    }
    /**
     * Gets amount_money
     * @return \SquareConnect\Model\Money
     */
    public function getAmountMoney()
    {
        return $this->amount_money;
    }
  
    /**
     * Sets amount_money
     * @param \SquareConnect\Model\Money $amount_money The amount of money to charge.  Note that you specify the amount in the __smallest denomination of the applicable currency__. For example, US dollar amounts are specified in cents. See [Working with monetary amounts](#workingwithmonetaryamounts) for details.  The value of `currency` must match the currency associated with the business that is charging the card.
     * @return $this
     */
    public function setAmountMoney($amount_money)
    {
        $this->amount_money = $amount_money;
        return $this;
    }
    /**
     * Gets card_nonce
     * @return string
     */
    public function getCardNonce()
    {
        return $this->card_nonce;
    }
  
    /**
     * Sets card_nonce
     * @param string $card_nonce A nonce generated from the `SqPaymentForm` that represents the card to charge.  The application that provides a nonce to this endpoint must be the _same application_ that generated the nonce with the `SqPaymentForm`. Otherwise, the nonce is invalid.  Do not provide a value for this field if you provide a value for `customer_card_id`.
     * @return $this
     */
    public function setCardNonce($card_nonce)
    {
        $this->card_nonce = $card_nonce;
        return $this;
    }
    /**
     * Gets customer_card_id
     * @return string
     */
    public function getCustomerCardId()
    {
        return $this->customer_card_id;
    }
  
    /**
     * Sets customer_card_id
     * @param string $customer_card_id The ID of the customer card on file to charge. Do not provide a value for this field if you provide a value for `card_nonce`.  If you provide this value, you _must_ also provide a value for `customer_id`.
     * @return $this
     */
    public function setCustomerCardId($customer_card_id)
    {
        $this->customer_card_id = $customer_card_id;
        return $this;
    }
    /**
     * Gets delay_capture
     * @return bool
     */
    public function getDelayCapture()
    {
        return $this->delay_capture;
    }
  
    /**
     * Sets delay_capture
     * @param bool $delay_capture If `true`, the request will only perform an Auth on the provided card. You can then later perform either a Capture (with the [CaptureTransaction](#endpoint-capturetransaction) endpoint) or a Void (with the [VoidTransaction](#endpoint-voidtransaction) endpoint).  Default value: `false`
     * @return $this
     */
    public function setDelayCapture($delay_capture)
    {
        $this->delay_capture = $delay_capture;
        return $this;
    }
    /**
     * Gets reference_id
     * @return string
     */
    public function getReferenceId()
    {
        return $this->reference_id;
    }
  
    /**
     * Sets reference_id
     * @param string $reference_id An optional ID you can associate with the transaction for your own purposes (such as to associate the transaction with an entity ID in your own database).  This value cannot exceed 40 characters.
     * @return $this
     */
    public function setReferenceId($reference_id)
    {
        $this->reference_id = $reference_id;
        return $this;
    }
    /**
     * Gets note
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }
  
    /**
     * Sets note
     * @param string $note An optional note to associate with the transaction.  This value cannot exceed 60 characters.
     * @return $this
     */
    public function setNote($note)
    {
        $this->note = $note;
        return $this;
    }
    /**
     * Gets customer_id
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customer_id;
    }
  
    /**
     * Sets customer_id
     * @param string $customer_id The ID of the customer to associate this transaction with. This field is required if you provide a value for `customer_card_id`, and optional otherwise.
     * @return $this
     */
    public function setCustomerId($customer_id)
    {
        $this->customer_id = $customer_id;
        return $this;
    }
    /**
     * Gets billing_address
     * @return \SquareConnect\Model\Address
     */
    public function getBillingAddress()
    {
        return $this->billing_address;
    }
  
    /**
     * Sets billing_address
     * @param \SquareConnect\Model\Address $billing_address The buyer's billing address. This value is optional, but this transaction is ineligible for chargeback protection if neither this parameter nor `shipping_address` is provided.
     * @return $this
     */
    public function setBillingAddress($billing_address)
    {
        $this->billing_address = $billing_address;
        return $this;
    }
    /**
     * Gets shipping_address
     * @return \SquareConnect\Model\Address
     */
    public function getShippingAddress()
    {
        return $this->shipping_address;
    }
  
    /**
     * Sets shipping_address
     * @param \SquareConnect\Model\Address $shipping_address The buyer's shipping address, if available. This value is optional, but this transaction is ineligible for chargeback protection if neither this parameter nor `billing_address` is provided.
     * @return $this
     */
    public function setShippingAddress($shipping_address)
    {
        $this->shipping_address = $shipping_address;
        return $this;
    }
    /**
     * Gets buyer_email_address
     * @return string
     */
    public function getBuyerEmailAddress()
    {
        return $this->buyer_email_address;
    }
  
    /**
     * Sets buyer_email_address
     * @param string $buyer_email_address The buyer's email address, if available. This value is optional, but this transaction is ineligible for chargeback protection if it is not provided.
     * @return $this
     */
    public function setBuyerEmailAddress($buyer_email_address)
    {
        $this->buyer_email_address = $buyer_email_address;
        return $this;
    }
    /**
     * Gets order_id
     * @return string
     */
    public function getOrderId()
    {
        return $this->order_id;
    }
  
    /**
     * Sets order_id
     * @param string $order_id The ID of the order to associate with this transaction.  If you provide this value, the `amount_money` value of your request must __exactly match__ the value of the order's `total_money` field.
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->order_id = $order_id;
        return $this;
    }
    /**
     * Gets additional_recipients
     * @return \SquareConnect\Model\AdditionalRecipient[]
     */
    public function getAdditionalRecipients()
    {
        return $this->additional_recipients;
    }
  
    /**
     * Sets additional_recipients
     * @param \SquareConnect\Model\AdditionalRecipient[] $additional_recipients The basic primitive of multi-party transaction. The value is optional. The transaction facilitated by you can be split from here.  If you provide this value, the `amount_money` value in your additional_recipients must not be more than 90% of the `amount_money` value in the charge request. The `location_id` must be the valid location of the app owner merchant.  This field requires the `PAYMENTS_WRITE_ADDITIONAL_RECIPIENTS` OAuth permission.  This field is currently not supported in sandbox.
     * @return $this
     */
    public function setAdditionalRecipients($additional_recipients)
    {
        $this->additional_recipients = $additional_recipients;
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