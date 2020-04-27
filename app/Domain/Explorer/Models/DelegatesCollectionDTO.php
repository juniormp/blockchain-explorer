<?php


namespace App\Domain\Explorer\Models;


use Illuminate\Support\Collection;

class DelegatesCollectionDTO
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
    private $delegates;


    public function getCount(): int
    {
        return $this->count;
    }

    public function setCount(int $count): DelegatesCollectionDTO
    {
        $this->count = $count;
        return $this;
    }

    public function getPageCount(): int
    {
        return $this->pageCount;
    }

    public function setPageCount(int $pageCount): DelegatesCollectionDTO
    {
        $this->pageCount = $pageCount;
        return $this;
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function setTotalCount(int $totalCount): DelegatesCollectionDTO
    {
        $this->totalCount = $totalCount;
        return $this;
    }

    public function getNext(): string
    {
        return $this->next;
    }

    public function setNext(string $next): DelegatesCollectionDTO
    {
        $this->next = $next;
        return $this;
    }

    public function getPrevious(): string
    {
        return $this->previous;
    }

    public function setPrevious(string $previous): DelegatesCollectionDTO
    {
        $this->previous = $previous;
        return $this;
    }

    public function getSelf(): string
    {
        return $this->self;
    }

    public function setSelf(string $self): DelegatesCollectionDTO
    {
        $this->self = $self;
        return $this;
    }

    public function getFirst(): string
    {
        return $this->first;
    }

    public function setFirst(string $first): DelegatesCollectionDTO
    {
        $this->first = $first;
        return $this;
    }

    public function getLast(): string
    {
        return $this->last;
    }

    public function setLast(string $last): DelegatesCollectionDTO
    {
        $this->last = $last;
        return $this;
    }

    public function getDelegates(): Collection
    {
        return $this->delegates;
    }

    public function setDelegates(Collection $delegates): DelegatesCollectionDTO
    {
        $this->delegates = $delegates;
        return $this;
    }
}
