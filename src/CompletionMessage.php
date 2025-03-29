<?php
/**
 * CompletionMessage automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace SdkFabric\Openai;

use PSX\Schema\Attribute\DerivedType;
use PSX\Schema\Attribute\Description;
use PSX\Schema\Attribute\Discriminator;

#[Description('')]
#[Discriminator('role')]
#[DerivedType(CompletionMessageDeveloper::class, 'developer')]
#[DerivedType(CompletionMessageSystem::class, 'system')]
#[DerivedType(CompletionMessageUser::class, 'user')]
#[DerivedType(CompletionMessageAssistant::class, 'assistant')]
#[DerivedType(CompletionMessageTool::class, 'tool')]
abstract class CompletionMessage implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('')]
    protected ?string $role = null;
    #[Description('')]
    protected ?string $content = null;
    public function setRole(?string $role): void
    {
        $this->role = $role;
    }
    public function getRole(): ?string
    {
        return $this->role;
    }
    public function setContent(?string $content): void
    {
        $this->content = $content;
    }
    public function getContent(): ?string
    {
        return $this->content;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('role', $this->role);
        $record->put('content', $this->content);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}
