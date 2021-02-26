<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    const STATUS_NEW = 'new';

    const TYPE_DOMAIN = 'domain';

    /**
     * Get data.
     *
     * @var object | collect
     */
    public function getMetadata()
    {
        if (!$this['metadata']) {
            return json_decode('{}', true);
        }

        return json_decode($this['metadata'], true);
    }

    /**
     * Update data.
     *
     * @var object | collect
     */
    public function updateMetadata($data)
    {
        $data = (object) array_merge((array) $this->getMetadata(), $data);
        $this['metadata'] = json_encode($data);

        $this->save();
    }

}
