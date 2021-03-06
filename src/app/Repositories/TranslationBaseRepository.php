<?php

namespace Omatech\Mage\App\Repositories;

use Omatech\Mage\App\Models\Translation;
use Omatech\Lars\BaseRepository;

abstract class TranslationBaseRepository extends BaseRepository
{
    public function model() : String
    {
        return Translation::class;
    }
}
