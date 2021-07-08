<?php


namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="pizza_product")
 * @ORM\Entity()
 */

class Product
{

    /**
     * @var int|null
     * @ORM\Column(name"id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @var string|null
     * @ORM\Column(name"image_path", type="string", length=255)
     */
    private $image;
    /**
     * @var string|null
     * @ORM\Column(name"name", type="string", length=100)
     */
    private $name;
    /**
     * @var string|null
     * @ORM\Column(name"$description", type="string", length=255)
     */
    private $description;
    /**
     * @var integer|null
     * @ORM\Column(name"$price", type="integer")
     */
    private $price;
    /**
     * @var integer|null
     * @ORM\Column(name"weight", type="integer")
     */
    private $weight;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getImage(): ?string
    {
        return $this->image;
    }

    /**
     * @param string|null $image
     */
    public function setImage(?string $image): void
    {
        $this->image = $image;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return int|null
     */
    public function getPrice(): ?int
    {
        return $this->price;
    }

    /**
     * @param int|null $price
     */
    public function setPrice(?int $price): void
    {
        $this->price = $price;
    }

    /**
     * @return int|null
     */
    public function getWeight(): ?int
    {
        return $this->weight;
    }

    /**
     * @param int|null $weight
     */
    public function setWeight(?int $weight): void
    {
        $this->weight = $weight;
    }
}