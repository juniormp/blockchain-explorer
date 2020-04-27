<?php


namespace App\Domain\Explorer\Models;


use Illuminate\Support\Collection;

class CollectionsWalletDTO
{
    /** @var int */
    private $count;

    /** @var int */
    private $pageCount;

    /** @var int */
    private $totalCount;

    /** @var string */
    private $next;

    /** @var string */
    private $previous;

    /** @var string */
    private $self;

    /** @var string */
    private $first;

    /** @var string */
    private $last;

    /** @var Collection */
    private $wallets;


    public function getCount(): int
    {
        return $this->count;
    }

    public function setCount(int $count): CollectionsWalletDTO
    {
        $this->count = $count;
        return $this;
    }

    public function getPageCount(): int
    {
        return $this->pageCount;
    }

    public function setPageCount(int $pageCount): CollectionsWalletDTO
    {
        $this->pageCount = $pageCount;
        return $this;
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function setTotalCount(int $totalCount): CollectionsWalletDTO
    {
        $this->totalCount = $totalCount;
        return $this;
    }

    public function getNext(): string
    {
        return $this->next;
    }

    public function setNext(string $next): CollectionsWalletDTO
    {
        $this->next = $next;
        return $this;
    }

    public function getPrevious(): string
    {
        return $this->previous;
    }

    public function setPrevious(string $previous): CollectionsWalletDTO
    {
        $this->previous = $previous;
        return $this;
    }

    public function getSelf(): string
    {
        return $this->self;
    }

    public function setSelf(string $self): CollectionsWalletDTO
    {
        $this->self = $self;
        return $this;
    }

    public function getFirst(): string
    {
        return $this->first;
    }

    public function setFirst(string $first): CollectionsWalletDTO
    {
        $this->first = $first;
        return $this;
    }

    public function getLast(): string
    {
        return $this->last;
    }

    public function setLast(string $last): CollectionsWalletDTO
    {
        $this->last = $last;
        return $this;
    }

    public function getWallets(): Collection
    {
        return $this->wallets;
    }

    public function setWallet(Collection $wallets): CollectionsWalletDTO
    {
        $this->wallets = $wallets;
        return $this;
    }
}
