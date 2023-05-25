<?php

/**
 * CreateFulfillmentRequestPayloadCustomer
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */

/**
 * Fulfillment Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Model\MP\US\Fulfillment;
use Walmart\Model\BaseModel;

/**
 * CreateFulfillmentRequestPayloadCustomer Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class CreateFulfillmentRequestPayloadCustomer extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'createFulfillment_request_payload_customer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'customerId' => 'string',
        'customerName' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'customerId' => null,
        'customerName' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'customerId' => false,
        'customerName' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'customerId' => 'customerId',
        'customerName' => 'customerName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'customerId' => 'setCustomerId',
        'customerName' => 'setCustomerName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'customerId' => 'getCustomerId',
        'customerName' => 'getCustomerName'
    ];/**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('customerId', $data ?? [], null);
        $this->setIfExists('customerName', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['customerId'] === null) {
            $invalidProperties[] = "'customerId' can't be null";
        }
        if ($this->container['customerName'] === null) {
            $invalidProperties[] = "'customerName' can't be null";
        }

        return $invalidProperties;
    }
    /**
     * Gets customerId
     *
     * @return string
    
     */
    public function getCustomerId()
    {
        return $this->container['customerId'];
    }

    /**
     * Sets customerId
     *
     * @param string $customerId customerId
     *
     * @return self
    
     */
    public function setCustomerId($customerId)
    {
        if (is_null($customerId)) {
            throw new \InvalidArgumentException('non-nullable customerId cannot be null');
        }

        $this->container['customerId'] = $customerId;
        return $this;
    }

    /**
     * Gets customerName
     *
     * @return string
    
     */
    public function getCustomerName()
    {
        return $this->container['customerName'];
    }

    /**
     * Sets customerName
     *
     * @param string $customerName customerName
     *
     * @return self
    
     */
    public function setCustomerName($customerName)
    {
        if (is_null($customerName)) {
            throw new \InvalidArgumentException('non-nullable customerName cannot be null');
        }

        $this->container['customerName'] = $customerName;
        return $this;
    }
}

