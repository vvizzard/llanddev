<?php

namespace App\Entity;

use Doctrine\ORM\Mapping\MappedSuperclass;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;

/**
 * @MappedSuperclass
 */
class BaseEntity
{
    // /**
    //  * @ORM\Column(type="string", length=255, nullable=true)
    //  */
    // private $createdBy;

    /**
     * @ORM\ManyToOne(targetEntity=Users::class)
     */
    private $createdBy;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $creationDate;

    // /**
    //  * @ORM\Column(type="string", length=512, nullable=true)
    //  */
    // private $modifiedBy;

    /**
     * @ORM\ManyToOne(targetEntity=Users::class)
     */
    private $modifiedBy;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $modificationDate;

    /**
     * @ORM\ManyToOne(targetEntity=Users::class)
     */
    private $deletedBy;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $deleteDate;

    /**
     * @ORM\Column(type="boolean", options={"default" : false})
     */
    private $deleted = false;

    /**
     * Get the value of createdBy
     */ 
    public function getCreatedBy(): ?Users
    {
        return $this->createdBy;
    }

    /**
     * Set the value of createdBy
     *
     * @return  self
     */ 
    public function setCreatedBy(?Users $createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get the value of creationDate
     */ 
    public function getCreationDate(): ?\DateTimeInterface
    {
        return $this->creationDate;
    }

    /**
     * Set the value of creationDate
     *
     * @return  self
     */ 
    public function setCreationDate(?\DateTimeInterface $creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * Get the value of modifiedBy
     */ 
    public function getModifiedBy(): ?Users
    {
        return $this->modifiedBy;
    }

    /**
     * Set the value of modifiedBy
     *
     * @return  self
     */ 
    public function setModifiedBy(?Users $modifiedBy)
    {
        $this->modifiedBy = $modifiedBy;

        return $this;
    }

    /**
     * Get the value of modificationDate
     */ 
    public function getModificationDate(): ?\DateTimeInterface
    {
        return $this->modificationDate;
    }

    /**
     * Set the value of modificationDate
     *
     * @return  self
     */ 
    public function setModificationDate(?\DateTimeInterface $modificationDate)
    {
        $this->modificationDate = $modificationDate;

        return $this;
    }

    /**
     * Get the value of deletedBy
     */ 
    public function getDeletedBy(): ?Users
    {
        return $this->deletedBy;
    }

    /**
     * Set the value of deletedBy
     *
     * @return  self
     */ 
    public function setDeletedBy(?Users $deletedBy)
    {
        $this->deletedBy = $deletedBy;

        return $this;
    }

    /**
     * Get the value of deleteDate
     */ 
    public function getDeleteDate(): ?\DateTimeInterface
    {
        return $this->deleteDate;
    }

    /**
     * Set the value of deleteDate
     *
     * @return  self
     */ 
    public function setDeleteDate(?\DateTimeInterface $deleteDate)
    {
        $this->deleteDate = $deleteDate;

        return $this;
    }

    /**
     * Get the value of deleted
     */ 
    public function getDeleted(): ?int
    {
        return $this->deleted;
    }

    /**
     * Set the value of deleted
     *
     * @return  self
     */ 
    public function setDeleted(?int $deleted)
    {
        $this->deleted = $deleted;

        return $this;
    }
}
