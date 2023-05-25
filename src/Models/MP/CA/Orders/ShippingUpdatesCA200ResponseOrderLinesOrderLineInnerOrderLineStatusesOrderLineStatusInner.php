<?php

/**
 * ShippingUpdatesCA200ResponseOrderLinesOrderLineInnerOrderLineStatusesOrderLineStatusInner
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
 * Order Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Model\MP\CA\Orders;
use Walmart\Model\BaseModel;

/**
 * ShippingUpdatesCA200ResponseOrderLinesOrderLineInnerOrderLineStatusesOrderLineStatusInner Class Doc Comment
 *
 * @category Class

 * @description Details about the Order Line status

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class ShippingUpdatesCA200ResponseOrderLinesOrderLineInnerOrderLineStatusesOrderLineStatusInner extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'shippingUpdatesCA_200_response_orderLines_orderLine_inner_orderLineStatuses_orderLineStatus_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'status' => 'string',
        'statusQuantity' => '\Walmart\Model\MP\CA\Orders\ShippingUpdatesCARequestOrderLinesOrderLineInnerOrderLineStatusesOrderLineStatusInnerStatusQuantity',
        'cancellationReason' => 'string',
        'trackingInfo' => '\Walmart\Model\MP\CA\Orders\ShippingUpdatesCARequestOrderLinesOrderLineInnerOrderLineStatusesOrderLineStatusInnerTrackingInfo'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'status' => null,
        'statusQuantity' => null,
        'cancellationReason' => null,
        'trackingInfo' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'status' => false,
        'statusQuantity' => false,
        'cancellationReason' => false,
        'trackingInfo' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'status' => 'status',
        'statusQuantity' => 'statusQuantity',
        'cancellationReason' => 'cancellationReason',
        'trackingInfo' => 'trackingInfo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'status' => 'setStatus',
        'statusQuantity' => 'setStatusQuantity',
        'cancellationReason' => 'setCancellationReason',
        'trackingInfo' => 'setTrackingInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'status' => 'getStatus',
        'statusQuantity' => 'getStatusQuantity',
        'cancellationReason' => 'getCancellationReason',
        'trackingInfo' => 'getTrackingInfo'
    ];
    public const STATUS_CREATED = 'CREATED';

    public const STATUS_ACKNOWLEDGED = 'ACKNOWLEDGED';

    public const STATUS_SHIPPED = 'SHIPPED';

    public const STATUS_CANCELLED = 'CANCELLED';

    public const STATUS_REFUND = 'REFUND';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_CREATED,
            self::STATUS_ACKNOWLEDGED,
            self::STATUS_SHIPPED,
            self::STATUS_CANCELLED,
            self::STATUS_REFUND,
        ];
    }

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('statusQuantity', $data ?? [], null);
        $this->setIfExists('cancellationReason', $data ?? [], null);
        $this->setIfExists('trackingInfo', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['statusQuantity'] === null) {
            $invalidProperties[] = "'statusQuantity' can't be null";
        }

        return $invalidProperties;
    }
    /**
     * Gets status
     *
     * @return string
    
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Should be 'Created'
     *
     * @return self
    
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['status'] = $status;
        return $this;
    }

    /**
     * Gets statusQuantity
     *
     * @return \Walmart\Model\MP\CA\Orders\ShippingUpdatesCARequestOrderLinesOrderLineInnerOrderLineStatusesOrderLineStatusInnerStatusQuantity
    
     */
    public function getStatusQuantity()
    {
        return $this->container['statusQuantity'];
    }

    /**
     * Sets statusQuantity
     *
     * @param \Walmart\Model\MP\CA\Orders\ShippingUpdatesCARequestOrderLinesOrderLineInnerOrderLineStatusesOrderLineStatusInnerStatusQuantity $statusQuantity statusQuantity
     *
     * @return self
    
     */
    public function setStatusQuantity($statusQuantity)
    {
        if (is_null($statusQuantity)) {
            throw new \InvalidArgumentException('non-nullable statusQuantity cannot be null');
        }

        $this->container['statusQuantity'] = $statusQuantity;
        return $this;
    }

    /**
     * Gets cancellationReason
     *
     * @return string|null
    
     */
    public function getCancellationReason()
    {
        return $this->container['cancellationReason'];
    }

    /**
     * Sets cancellationReason
     *
     * @param string|null $cancellationReason If order is cancelled, cancellationReason will explain the reason
     *
     * @return self
    
     */
    public function setCancellationReason($cancellationReason)
    {
        if (is_null($cancellationReason)) {
            throw new \InvalidArgumentException('non-nullable cancellationReason cannot be null');
        }

        $this->container['cancellationReason'] = $cancellationReason;
        return $this;
    }

    /**
     * Gets trackingInfo
     *
     * @return \Walmart\Model\MP\CA\Orders\ShippingUpdatesCARequestOrderLinesOrderLineInnerOrderLineStatusesOrderLineStatusInnerTrackingInfo|null
    
     */
    public function getTrackingInfo()
    {
        return $this->container['trackingInfo'];
    }

    /**
     * Sets trackingInfo
     *
     * @param \Walmart\Model\MP\CA\Orders\ShippingUpdatesCARequestOrderLinesOrderLineInnerOrderLineStatusesOrderLineStatusInnerTrackingInfo|null $trackingInfo trackingInfo
     *
     * @return self
    
     */
    public function setTrackingInfo($trackingInfo)
    {
        if (is_null($trackingInfo)) {
            throw new \InvalidArgumentException('non-nullable trackingInfo cannot be null');
        }

        $this->container['trackingInfo'] = $trackingInfo;
        return $this;
    }
}

