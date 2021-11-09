<?php

class Town
{
    private int $id;
    private string $name;

    public function getId(): int
    {
        return $this->id;
    }
    
    public function getName(): string
    {
        return $this->name;
    }

    public function __construct(int $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }
}