<?php

namespace WiosnaBoilerplate;

/**
 * Przykładowa klasa, która pozwala na ustawianie
 * i pobieranie nazwy przykładu.
 *
 * @author Michał Rączka <michal@raczka.me>
 */
class Example
{
    /**
     * @var string Nazwa przykładu
     */
    protected $name;

    /**
     * Pozwala ustawić nazwę przykładu.
     *
     * @param string $name
     */
    public function __construct($name = '')
    {
        $this->setName($name);
    }

    /**
     * Zwraca nazwę przykładu.
     *
     * @return string Nazwa przykładu
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Pozwala ustawić nazwę przykładu po utworzeniu instancji
     * klasy.
     *
     * @param  string $name
     * @return $this  Instancja klasy - pozwala na używanie "łańcucha" wywołań
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}
