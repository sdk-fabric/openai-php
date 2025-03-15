<?php
/**
 * CompletionCollection automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace SdkFabric\Openai;

use PSX\Schema\Attribute\Description;
use PSX\Schema\Attribute\Key;

#[Description('')]
class CompletionCollection implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('The type of this object. It is always set to "list".')]
    protected ?string $object = null;
    /**
     * @var array<CompletionResponse>|null
     */
    #[Description('An array of chat completion objects.')]
    protected ?array $data = null;
    #[Key('first_id')]
    #[Description('The identifier of the first chat completion in the data array.')]
    protected ?string $firstId = null;
    #[Key('last_id')]
    #[Description('The identifier of the last chat completion in the data array.')]
    protected ?string $lastId = null;
    #[Key('has_more')]
    #[Description('Indicates whether there are more Chat Completions available.')]
    protected ?bool $hasMore = null;
    public function setObject(?string $object): void
    {
        $this->object = $object;
    }
    public function getObject(): ?string
    {
        return $this->object;
    }
    /**
     * @param array<CompletionResponse>|null $data
     */
    public function setData(?array $data): void
    {
        $this->data = $data;
    }
    /**
     * @return array<CompletionResponse>|null
     */
    public function getData(): ?array
    {
        return $this->data;
    }
    public function setFirstId(?string $firstId): void
    {
        $this->firstId = $firstId;
    }
    public function getFirstId(): ?string
    {
        return $this->firstId;
    }
    public function setLastId(?string $lastId): void
    {
        $this->lastId = $lastId;
    }
    public function getLastId(): ?string
    {
        return $this->lastId;
    }
    public function setHasMore(?bool $hasMore): void
    {
        $this->hasMore = $hasMore;
    }
    public function getHasMore(): ?bool
    {
        return $this->hasMore;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('object', $this->object);
        $record->put('data', $this->data);
        $record->put('first_id', $this->firstId);
        $record->put('last_id', $this->lastId);
        $record->put('has_more', $this->hasMore);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}
