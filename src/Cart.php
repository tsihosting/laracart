<?php

namespace TsiHosting\LaraCart;

use Illuminate\Session\SessionManager;

/**
 * Main Cart Class
 *
 * Class Cart
 * @package TsiHosting\LaraCart
 */
class Cart
{
    /**
     * Session Manager
     *
     * @var \Illuminate\Session\SessionManager
     */
    protected $session;

    /**
     * Collection of items
     *
     * @var
     */
    protected $items;

    /**
     * Cart constructor.
     *
     * @param SessionManager $session
     */
    public function __construct(SessionManager $session)
    {
        $this->session = $session;
    }

    public function getAll()
    {

    }

    public function add($item)
    {

    }

    public function update($item)
    {

    }

    public function delete($item)
    {

    }

    public function reset()
    {

    }

    public function total()
    {

    }

    public function count()
    {

    }

    public function vat()
    {

    }

    public function save()
    {

    }

    public function load()
    {

    }
}