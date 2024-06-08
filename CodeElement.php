<?php
class CodeElement
{
    private string $id;
    private string $value;

    public function __construct(string $id, string $value)
    {
        $this->id = $id;
        $this->value = $value;
    }

    public function id(): string
    {
        return $this->id;
    }

    public function value(): string
    {
        return $this->value;
    }
}
