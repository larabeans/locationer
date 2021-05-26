<?php

namespace App\Containers\Vendor\Locationer\Tasks;

use App\Containers\Vendor\Locationer\Data\Repositories\CountryRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;
use phpDocumentor\Reflection\Types\Integer;
use phpDocumentor\Reflection\Types\Object_;


class CreateCountryTask extends Task
{
    protected $repository;

    public function __construct(CountryRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(
      int $id = 0,
      string $name,
      string $alpha2,
      string $alpha3,
      string $isd,
      string $capital,
      string $currency,
      string $native,
      string $continent,
      string $subcontinent,
      string $emoji,
      string $emojiUnicode
    )
    {
        try {
            $data = [
              "name"         =>    $name,
              "alpha2"       =>    $alpha2,
              "alpha3"       =>    $alpha3,
              "isd"          =>    $isd,
              "capital"      =>    $capital,
              "currency"     =>    $currency,
              "native"       =>    $native,
              "continent"    =>    $continent,
              "subcontinent" =>    $subcontinent,
              "emoji"        =>    $emoji,
              "emoji_unicode"=>    $emojiUnicode
            ];

            if($id) {
              $data["id"] = $id;
            }

            return $this->repository->create($data);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
    }
}
