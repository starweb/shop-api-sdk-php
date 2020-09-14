<?php

namespace Starweb\Api\Generated\Model;

class CustomerCreatedModel
{
    /**
     * The customers ID
     *
     * @var int|null
     */
    protected $customerId;
    /**
     * A timestamp of when the customer was created. The time should be formatted using ISO-8601
     *
     * @var string|null
     */
    protected $createdAt;
    /**
     * The type of customer this is. Either: ”person” or ”company”
     *
     * @var string|null
     */
    protected $type;
    /**
     * Email address of the customer
     *
     * @var string|null
     */
    protected $email;
    /**
     * National id number of the customer
     *
     * @var string|null
     */
    protected $nationalIdNo;
    /**
     * VAT number of the customer
     *
     * @var string|null
     */
    protected $vatNo;
    /**
     * Custom info saved to a customer. Can be linked to text fields on the customer registration page for additional data collection
     *
     * @var string|null
     */
    protected $customInfo1;
    /**
     * Custom info saved to a customer. Can be linked to text fields on the customer registration page for additional data collection
     *
     * @var string|null
     */
    protected $customInfo2;
    /**
     * A timestamp of when the customer was modified. The time should be formatted using ISO-8601
     *
     * @var string|null
     */
    protected $modifiedAt;
    /**
     * If the customer is approved or not. Can be null if the customer is neither approved nor disapproved yet
     *
     * @var bool|null
     */
    protected $approved;
    /**
     * A timestamp of when the customer was was approved/disapproved. The time should be formatted using ISO-8601
     *
     * @var string|null
     */
    protected $approvedAt;
    /**
     * The id of the pricelist the customer is linked to (or null if the customer has no specific pricelist linked)
     *
     * @var int|null
     */
    protected $pricelistId;
    /**
     * The customers ID
     *
     * @return int|null
     */
    public function getCustomerId() : ?int
    {
        return $this->customerId;
    }
    /**
     * The customers ID
     *
     * @param int|null $customerId
     *
     * @return self
     */
    public function setCustomerId(?int $customerId) : self
    {
        $this->customerId = $customerId;
        return $this;
    }
    /**
     * A timestamp of when the customer was created. The time should be formatted using ISO-8601
     *
     * @return string|null
     */
    public function getCreatedAt() : ?string
    {
        return $this->createdAt;
    }
    /**
     * A timestamp of when the customer was created. The time should be formatted using ISO-8601
     *
     * @param string|null $createdAt
     *
     * @return self
     */
    public function setCreatedAt(?string $createdAt) : self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * The type of customer this is. Either: ”person” or ”company”
     *
     * @return string|null
     */
    public function getType() : ?string
    {
        return $this->type;
    }
    /**
     * The type of customer this is. Either: ”person” or ”company”
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * Email address of the customer
     *
     * @return string|null
     */
    public function getEmail() : ?string
    {
        return $this->email;
    }
    /**
     * Email address of the customer
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setEmail(?string $email) : self
    {
        $this->email = $email;
        return $this;
    }
    /**
     * National id number of the customer
     *
     * @return string|null
     */
    public function getNationalIdNo() : ?string
    {
        return $this->nationalIdNo;
    }
    /**
     * National id number of the customer
     *
     * @param string|null $nationalIdNo
     *
     * @return self
     */
    public function setNationalIdNo(?string $nationalIdNo) : self
    {
        $this->nationalIdNo = $nationalIdNo;
        return $this;
    }
    /**
     * VAT number of the customer
     *
     * @return string|null
     */
    public function getVatNo() : ?string
    {
        return $this->vatNo;
    }
    /**
     * VAT number of the customer
     *
     * @param string|null $vatNo
     *
     * @return self
     */
    public function setVatNo(?string $vatNo) : self
    {
        $this->vatNo = $vatNo;
        return $this;
    }
    /**
     * Custom info saved to a customer. Can be linked to text fields on the customer registration page for additional data collection
     *
     * @return string|null
     */
    public function getCustomInfo1() : ?string
    {
        return $this->customInfo1;
    }
    /**
     * Custom info saved to a customer. Can be linked to text fields on the customer registration page for additional data collection
     *
     * @param string|null $customInfo1
     *
     * @return self
     */
    public function setCustomInfo1(?string $customInfo1) : self
    {
        $this->customInfo1 = $customInfo1;
        return $this;
    }
    /**
     * Custom info saved to a customer. Can be linked to text fields on the customer registration page for additional data collection
     *
     * @return string|null
     */
    public function getCustomInfo2() : ?string
    {
        return $this->customInfo2;
    }
    /**
     * Custom info saved to a customer. Can be linked to text fields on the customer registration page for additional data collection
     *
     * @param string|null $customInfo2
     *
     * @return self
     */
    public function setCustomInfo2(?string $customInfo2) : self
    {
        $this->customInfo2 = $customInfo2;
        return $this;
    }
    /**
     * A timestamp of when the customer was modified. The time should be formatted using ISO-8601
     *
     * @return string|null
     */
    public function getModifiedAt() : ?string
    {
        return $this->modifiedAt;
    }
    /**
     * A timestamp of when the customer was modified. The time should be formatted using ISO-8601
     *
     * @param string|null $modifiedAt
     *
     * @return self
     */
    public function setModifiedAt(?string $modifiedAt) : self
    {
        $this->modifiedAt = $modifiedAt;
        return $this;
    }
    /**
     * If the customer is approved or not. Can be null if the customer is neither approved nor disapproved yet
     *
     * @return bool|null
     */
    public function getApproved() : ?bool
    {
        return $this->approved;
    }
    /**
     * If the customer is approved or not. Can be null if the customer is neither approved nor disapproved yet
     *
     * @param bool|null $approved
     *
     * @return self
     */
    public function setApproved(?bool $approved) : self
    {
        $this->approved = $approved;
        return $this;
    }
    /**
     * A timestamp of when the customer was was approved/disapproved. The time should be formatted using ISO-8601
     *
     * @return string|null
     */
    public function getApprovedAt() : ?string
    {
        return $this->approvedAt;
    }
    /**
     * A timestamp of when the customer was was approved/disapproved. The time should be formatted using ISO-8601
     *
     * @param string|null $approvedAt
     *
     * @return self
     */
    public function setApprovedAt(?string $approvedAt) : self
    {
        $this->approvedAt = $approvedAt;
        return $this;
    }
    /**
     * The id of the pricelist the customer is linked to (or null if the customer has no specific pricelist linked)
     *
     * @return int|null
     */
    public function getPricelistId() : ?int
    {
        return $this->pricelistId;
    }
    /**
     * The id of the pricelist the customer is linked to (or null if the customer has no specific pricelist linked)
     *
     * @param int|null $pricelistId
     *
     * @return self
     */
    public function setPricelistId(?int $pricelistId) : self
    {
        $this->pricelistId = $pricelistId;
        return $this;
    }
}