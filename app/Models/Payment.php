<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Service;

class Payment extends Model
{
    use HasFactory;

    const STATUS_PENDING = 'pending';
    const STATUS_PAID = 'paid';

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

    /**
     * Get services.
     *
     * @var object | collect
     */
    public function getServices()
    {
        return Service::whereIn('id', $this->getMetadata()['service_ids']);
    }

    /**
     * approve payment.
     *
     * @var object | collect
     */
    public function payAndApprove()
    {
        // set all services to paid
        $this->getServices()->update([
            'status' => Service::STATUS_ACTIVE,
        ]);

        $this->status = self::STATUS_PAID;
        $this->save();
    }
}
