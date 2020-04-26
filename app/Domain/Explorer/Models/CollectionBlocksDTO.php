<?php


namespace App\Domain\Explorer\Models;


use Illuminate\Support\Collection;

class CollectionBlocksDTO
{
    /** @var bool */
    private $totalCountIsEstimate;

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
    private $blocks;


    public function isTotalCountIsEstimate(): bool
    {
        return $this->totalCountIsEstimate;
    }

    public function setTotalCountIsEstimate(bool $totalCountIsEstimate): CollectionBlocksDTO
    {
        $this->totalCountIsEstimate = $totalCountIsEstimate;
        return $this;
    }

    public function getCount(): int
    {
        return $this->count;
    }

    public function setCount(int $count): CollectionBlocksDTO
    {
        $this->count = $count;
        return $this;
    }

    public function getPageCount(): int
    {
        return $this->pageCount;
    }

    public function setPageCount(int $pageCount): CollectionBlocksDTO
    {
        $this->pageCount = $pageCount;
        return $this;
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function setTotalCount(int $totalCount): CollectionBlocksDTO
    {
        $this->totalCount = $totalCount;
        return $this;
    }

    public function getNext(): string
    {
        return $this->next;
    }

    public function setNext(string $next): CollectionBlocksDTO
    {
        $this->next = $next;
        return $this;
    }

    public function getPrevious(): string
    {
        return $this->previous;
    }

    public function setPrevious(string $previous): CollectionBlocksDTO
    {
        $this->previous = $previous;
        return $this;
    }

    public function getSelf(): string
    {
        return $this->self;
    }

    public function setSelf(string $self): CollectionBlocksDTO
    {
        $this->self = $self;
        return $this;
    }

    public function getFirst(): string
    {
        return $this->first;
    }

    public function setFirst(string $first): CollectionBlocksDTO
    {
        $this->first = $first;
        return $this;
    }

    public function getLast(): string
    {
        return $this->last;
    }

    public function setLast(string $last): CollectionBlocksDTO
    {
        $this->last = $last;
        return $this;
    }

    public function getBlocks(): Collection
    {
        return $this->blocks;
    }

    public function setBlocks(Collection $blocks): CollectionBlocksDTO
    {
        $this->blocks = $blocks;
        return $this;
    }
}
