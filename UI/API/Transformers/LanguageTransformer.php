<?php

namespace App\Containers\Larabeans\Locationer\UI\API\Transformers;

use App\Containers\Larabeans\Locationer\Models\Language;
use App\Ship\Parents\Transformers\Transformer;

class LanguageTransformer extends Transformer
{
    /**
     * @var  array
     */
    protected array $defaultIncludes = [

    ];

    /**
     * @var  array
     */
    protected array $availableIncludes = [

    ];

    public function transform(Language $language): array
    {
        $response = [
            'object' => $language->getResourceKey(),
            'id' => $language->getHashedKey(),
            'name' => $language->name,
            'code' => $language->code,
            'readable_created_at' => $language->created_at->diffForHumans(),
            'readable_updated_at' => $language->updated_at->diffForHumans(),

        ];

        return $response = $this->ifAdmin([
            'real_id'    => $language->id,
            // 'deleted_at' => $language->deleted_at,
        ], $response);
    }
}
