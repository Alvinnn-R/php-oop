<?php

// Setter dan Getter adalah metode yang digunakan untuk mengatur dan mendapatkan nilai dari properti suatu objek.
// Setter digunakan untuk mengatur nilai dari properti objek.
// Getter digunakan untuk mendapatkan nilai dari properti objek.

class Category
{
    private string $name;
    private bool $expensive;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        if (trim($name) != "") {
            $this->name = $name;
        }
    }

    public function isExpensive(): bool
    {
        return $this->expensive;
    }

    public function setExpensive(bool $expensive): void
    {
        $this->expensive = $expensive;
    }

}
