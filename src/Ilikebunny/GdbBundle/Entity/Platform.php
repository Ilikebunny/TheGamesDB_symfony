<?php

namespace Ilikebunny\GdbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Platform
 *
 * @ORM\Table(name="platform")
 * @ORM\Entity(repositoryClass="Ilikebunny\GdbBundle\Repository\PlatformRepository")
 */
class Platform
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, unique=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=255, unique=true)
     */
    private $slug;

    /**
     * @var string
     *
     * @ORM\Column(name="icon", type="string", length=255)
     */
    private $icon;

    /**
     * @var string
     *
     * @ORM\Column(name="consoleArt", type="string", length=255, nullable=true)
     */
    private $consoleArt;

    /**
     * @var string
     *
     * @ORM\Column(name="controllerArt", type="string", length=255, nullable=true)
     */
    private $controllerArt;

    /**
     * @var string
     *
     * @ORM\Column(name="developer", type="string", length=255, nullable=true)
     */
    private $developer;

    /**
     * @var string
     *
     * @ORM\Column(name="manufacturer", type="string", length=255, nullable=true)
     */
    private $manufacturer;

    /**
     * @var string
     *
     * @ORM\Column(name="media", type="string", length=255, nullable=true)
     */
    private $media;

    /**
     * @var string
     *
     * @ORM\Column(name="cpu", type="string", length=255, nullable=true)
     */
    private $cpu;

    /**
     * @var string
     *
     * @ORM\Column(name="memory", type="string", length=255, nullable=true)
     */
    private $memory;

    /**
     * @var string
     *
     * @ORM\Column(name="graphics", type="string", length=255, nullable=true)
     */
    private $graphics;

    /**
     * @var string
     *
     * @ORM\Column(name="sound", type="string", length=255, nullable=true)
     */
    private $sound;

    /**
     * @var string
     *
     * @ORM\Column(name="maxcontrollers", type="string", length=255, nullable=true)
     */
    private $maxcontrollers;

    /**
     * @var string
     *
     * @ORM\Column(name="display", type="string", length=255, nullable=true)
     */
    private $display;

    /**
     * @var string
     *
     * @ORM\Column(name="overview", type="string", length=255, nullable=true)
     */
    private $overview;

    /**
     * @var string
     *
     * @ORM\Column(name="youtube", type="string", length=255, nullable=true)
     */
    private $youtube;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Platform
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set slug
     *
     * @param string $slug
     *
     * @return Platform
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set icon
     *
     * @param string $icon
     *
     * @return Platform
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Get icon
     *
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Set consoleArt
     *
     * @param string $consoleArt
     *
     * @return Platform
     */
    public function setConsoleArt($consoleArt)
    {
        $this->consoleArt = $consoleArt;

        return $this;
    }

    /**
     * Get consoleArt
     *
     * @return string
     */
    public function getConsoleArt()
    {
        return $this->consoleArt;
    }

    /**
     * Set controllerArt
     *
     * @param string $controllerArt
     *
     * @return Platform
     */
    public function setControllerArt($controllerArt)
    {
        $this->controllerArt = $controllerArt;

        return $this;
    }

    /**
     * Get controllerArt
     *
     * @return string
     */
    public function getControllerArt()
    {
        return $this->controllerArt;
    }

    /**
     * Set developer
     *
     * @param string $developer
     *
     * @return Platform
     */
    public function setDeveloper($developer)
    {
        $this->developer = $developer;

        return $this;
    }

    /**
     * Get developer
     *
     * @return string
     */
    public function getDeveloper()
    {
        return $this->developer;
    }

    /**
     * Set manufacturer
     *
     * @param string $manufacturer
     *
     * @return Platform
     */
    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;

        return $this;
    }

    /**
     * Get manufacturer
     *
     * @return string
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * Set media
     *
     * @param string $media
     *
     * @return Platform
     */
    public function setMedia($media)
    {
        $this->media = $media;

        return $this;
    }

    /**
     * Get media
     *
     * @return string
     */
    public function getMedia()
    {
        return $this->media;
    }

    /**
     * Set cpu
     *
     * @param string $cpu
     *
     * @return Platform
     */
    public function setCpu($cpu)
    {
        $this->cpu = $cpu;

        return $this;
    }

    /**
     * Get cpu
     *
     * @return string
     */
    public function getCpu()
    {
        return $this->cpu;
    }

    /**
     * Set memory
     *
     * @param string $memory
     *
     * @return Platform
     */
    public function setMemory($memory)
    {
        $this->memory = $memory;

        return $this;
    }

    /**
     * Get memory
     *
     * @return string
     */
    public function getMemory()
    {
        return $this->memory;
    }

    /**
     * Set graphics
     *
     * @param string $graphics
     *
     * @return Platform
     */
    public function setGraphics($graphics)
    {
        $this->graphics = $graphics;

        return $this;
    }

    /**
     * Get graphics
     *
     * @return string
     */
    public function getGraphics()
    {
        return $this->graphics;
    }

    /**
     * Set sound
     *
     * @param string $sound
     *
     * @return Platform
     */
    public function setSound($sound)
    {
        $this->sound = $sound;

        return $this;
    }

    /**
     * Get sound
     *
     * @return string
     */
    public function getSound()
    {
        return $this->sound;
    }

    /**
     * Set maxcontrollers
     *
     * @param string $maxcontrollers
     *
     * @return Platform
     */
    public function setMaxcontrollers($maxcontrollers)
    {
        $this->maxcontrollers = $maxcontrollers;

        return $this;
    }

    /**
     * Get maxcontrollers
     *
     * @return string
     */
    public function getMaxcontrollers()
    {
        return $this->maxcontrollers;
    }

    /**
     * Set display
     *
     * @param string $display
     *
     * @return Platform
     */
    public function setDisplay($display)
    {
        $this->display = $display;

        return $this;
    }

    /**
     * Get display
     *
     * @return string
     */
    public function getDisplay()
    {
        return $this->display;
    }

    /**
     * Set overview
     *
     * @param string $overview
     *
     * @return Platform
     */
    public function setOverview($overview)
    {
        $this->overview = $overview;

        return $this;
    }

    /**
     * Get overview
     *
     * @return string
     */
    public function getOverview()
    {
        return $this->overview;
    }

    /**
     * Set youtube
     *
     * @param string $youtube
     *
     * @return Platform
     */
    public function setYoutube($youtube)
    {
        $this->youtube = $youtube;

        return $this;
    }

    /**
     * Get youtube
     *
     * @return string
     */
    public function getYoutube()
    {
        return $this->youtube;
    }
}

